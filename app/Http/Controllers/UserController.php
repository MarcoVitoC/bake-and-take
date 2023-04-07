<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Cake;
use App\Models\TransactionHeader;
use App\Models\TransactionDetail;
use App\Models\Favorite;

class UserController extends Controller
{
    public function index() {
        return view('user.home', [
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

        return view('user.product-detail', [
            'title' => 'Product Details',
            'cake' => $cake,
            'favorite' => $favorite
        ]);
    }

    public function handleUserAction(Request $request, $id) {
        if ($request->action === 'favorite') {
            $this->addFavorite($id);
            return back();
        }else if ($request->action === 'order') {
            $transactionDetail = $this->orderCake($request, $id);
            return redirect()->route('paymentConfirmation', ['id' => $transactionDetail->id]);
        }
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
        
        return $transactionDetail;
    }

    public function paymentConfirmation($id) {
        $transaction = DB::table('transaction_details')
                ->join('cakes', 'transaction_details.cake_id', '=', 'cakes.id')
                ->select('transaction_details.id', 'transaction_details.quantity', 'cakes.cake_name', 'cakes.cake_price', 'cakes.cake_photo')
                ->where('transaction_details.id', '=', $id)->first();

        return view('user.payment-confirmation', [
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
        return view('user.payment-success', [
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
                    )->where('favorites.user_id', '=', auth()->user()->id)->get();
                    
        return view('user.favorite', [
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
                        ->where('transaction_headers.user_id', '=', auth()->user()->id)
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
                                ->where('transaction_headers.user_id', '=', auth()->user()->id)
                                ->whereIn('transaction_headers.status_id', [3])
                                ->latest('transaction_headers.transaction_date')->get();

        return view('user.transaction',  [
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

        return view('user.transaction-detail',  [
            'title' => 'Transaction Detail',
            'transaction' => $transaction
        ]);
    }

    public function showUserProfile() {
        return view('user.profile', [
            'title' => 'Profile'
        ]);
    }

    public function editProfile() {
        return view('user.update-profile', [
            'title' => 'Update Profile'
        ]);
    }

    public function updateProfile(Request $request) {
        $updateUser = $request->validate([
            'fullname' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'email:strict'],
            'phone_number' => ['required', 'digits:12', 'numeric'],
            'dob' => ['required'],
            'address' => ['required', 'min:5', 'max:255'],
            'confirm_password' => ['required']
        ]);

        if (!Hash::check($request->confirm_password, $request->user()->password)) {
            return back()->withErrors([
                'confirm_password' => ['The provided password does not match our records.']
            ]);
        }

        $userId = auth()->user()->id;
        $user = User::find($userId);
        $user->update($updateUser);

        return redirect('/user/profile/update-profile-success');
    }

    public function updateProfileSuccess() {
        return view('user.update-profile-success', [
            'title' => 'Succeed'
        ]);
    }

    public function changePassword() {
        return view('user.change-password', [
            'title' => 'Change Password'
        ]);
    }

    public function updatePassword(Request $request) {
        $updatePassword = $request->validate([
            'new_password' => ['required', 'min:3', 'max:255'],
            'confirm_new_password' => ['required', 'same:new_password'],
            'old_password' => ['required']
        ]);

        if (!Hash::check($request->old_password, $request->user()->password)) {
            return back()->withErrors([
                'old_password' => ['The provided password does not match our records.']
            ]);
        }

        $updatePassword['new_password'] = Hash::make($updatePassword['new_password']);

        $userId = auth()->user()->id;
        $user = User::find($userId);
        $user->update(['password' => $updatePassword['new_password']]);

        return redirect('/user/profile/change-password-success');
    }

    public function updatePasswordSuccess() {
        return view('user.change-password-success', [
            'title' => 'Succeed'
        ]);
    }
}