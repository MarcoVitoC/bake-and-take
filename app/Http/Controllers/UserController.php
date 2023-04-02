<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cake;
use App\Models\TransactionHeader;
use App\Models\TransactionDetail;
use App\Models\Favorite;

class UserController extends Controller
{
    public function index() {
        return view('user-home', [
            'title' => 'User',
            'cheeses' => Cake::where('category_id', 1)->get(),
            'strawberrys' => Cake::where('category_id', 2)->get(),
            'chocolates' => Cake::where('category_id', 3)->get(),
            'cakes' => Cake::all()
        ]);
    }

    public function showProductDetail($id) {
        $cake = DB::table('cakes')
                ->join('categories', 'cakes.category_id', '=', 'categories.id')
                ->select('cakes.*', 'categories.category_name')
                ->where('cakes.id', '=', $id)->first();

        $favorite = DB::table('favorites')
                    ->join('cakes', 'favorites.cake_id', '=', 'cakes.id')
                    ->select('favorites.*')->where('cakes.id', '=', $id)->first();

        return view('product-detail', [
            'title' => 'Product Details',
            'cake' => $cake,
            'favorite' => $favorite
        ]);
    }

    public function orderCake(Request $request, $id) {
        $transactionHeader = TransactionHeader::create([
            'user_id' => auth()->user()->id
        ]);

        $cake = Cake::where('id', $id)->first();
        $transactionDetail = TransactionDetail::create([
            'transaction_header_id' => $transactionHeader->id,
            'cake_id' => $cake->id,
            'quantity' => $request->quantity
        ]);
        
        return redirect()->route('paymentConfirmation', ['id' => $transactionDetail->id]);
    }

    public function paymentConfirmation($id) {
        $transaction = DB::table('transaction_details')
                ->join('cakes', 'transaction_details.cake_id', '=', 'cakes.id')
                ->select('transaction_details.id', 'transaction_details.quantity', 'cakes.cake_name', 'cakes.cake_price', 'cakes.cake_photo')
                ->where('transaction_details.id', '=', $id)->first();

        return view('payment-confirmation', [
            'title' => 'Payment Confirmation',
            'transaction' => $transaction
        ]);
    }

    public function cancelTransaction(TransactionDetail $transactionDetail) {
        $transactionHeaders = TransactionHeader::all();
        $transactionHeader = $transactionHeaders->find($transactionDetail->transaction_header_id);
        
        $cake_id = $transactionDetail->cake_id;

        $transactionHeader->destroy($transactionHeader->id);
        $transactionDetail->destroy($transactionDetail->id);

        return redirect()->route('productDetail', ['id' => $cake_id]);
    }

    public function paymentSuccess() {
        return view('payment-success', [
            'title' => 'Payment Succeed'
        ]);
    }

    public function showFavorite() {
        $favorites = DB::table('favorites')
                    ->join('cakes', 'favorites.cake_id', '=', 'cakes.id')
                    ->select(
                        'favorites.id',
                        'favorites.cake_id',
                        'cakes.cake_name',
                        'cakes.cake_price',
                        'cakes.cake_photo'
                    )->get();
                    
        return view('favorite',  [
            'title' => 'Favorite',
            'favorites' => $favorites
        ]);
    }

    public function addFavorite($id) {
        $cake = Cake::where('id', $id)->first();
 
        Favorite::create([
            'cake_id' => $cake->id,
            'user_id' => auth()->user()->id
        ]);

        return back();
    }

    public function removeFavorite($id) {
        $favorite = DB::table('favorites')
                    ->join('cakes', 'favorites.cake_id', '=', 'cakes.id')
                    ->select('favorites.*')->where('cakes.id', '=', $id)->first();
        

        Favorite::destroy($favorite->id);
        return back();
    }

    public function deleteFavorite(Request $request) {
        $favorite = Favorite::find($request->favoriteId);

        Favorite::destroy($favorite->id);
        return back();
    }

    public function showTransaction() {
        $transactions = DB::table('transaction_details')
                        ->join('cakes', 'transaction_details.cake_id', '=', 'cakes.id')
                        ->join('transaction_headers', 'transaction_details.transaction_header_id', '=', 'transaction_headers.id')
                        ->join('statuses', 'transaction_headers.status_id', '=', 'statuses.id')
                        ->select(
                            'transaction_headers.id',
                            'cakes.cake_name',
                            'cakes.cake_photo',
                            'statuses.status_name',
                            'transaction_headers.transaction_date'
                        )
                        ->whereIn('transaction_headers.status_id', [1, 2])
                        ->latest('transaction_headers.transaction_date')->get();
                            
        $succeedTransactions = DB::table('transaction_details')
                                ->join('cakes', 'transaction_details.cake_id', '=', 'cakes.id')
                                ->join('transaction_headers', 'transaction_details.transaction_header_id', '=', 'transaction_headers.id')
                                ->join('statuses', 'transaction_headers.status_id', '=', 'statuses.id')
                                ->select(
                                    'transaction_headers.id',
                                    'cakes.cake_name',
                                    'cakes.cake_photo',
                                    'statuses.status_name',
                                    'transaction_headers.transaction_date'
                                )
                                ->where('transaction_headers.status_id', 3)
                                ->latest('transaction_headers.transaction_date')->get();

        return view('transaction',  [
            'title' => 'Transaction',
            'transactions' => $transactions,
            'succeedTransactions' => $succeedTransactions
        ]);
    }

    public function updateTransactionStatus(Request $request) {
        $transactionHeader = TransactionHeader::find($request->transactionId);
        $transactionHeader->update(['status_id' => 3]);
        return redirect('/user/transaction');
    }

    public function showTransactionDetail($id) {
        $transaction = DB::table('transaction_details')
                        ->join('cakes', 'transaction_details.cake_id', '=', 'cakes.id')
                        ->select(
                            'transaction_details.id',
                            'transaction_details.quantity',
                            'cakes.cake_name',
                            'cakes.cake_price',
                            'cakes.cake_photo')
                        ->where('transaction_details.id', '=', $id)->first();

        return view('transaction-detail',  [
            'title' => 'Transaction Detail',
            'transaction' => $transaction
        ]);
    }
}
