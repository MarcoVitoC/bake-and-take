<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Cake;
use App\Models\Category;
use App\Models\TransactionHeader;

class AdminController extends Controller
{
    public function index() {
        $transactions = DB::table('transaction_details')
                        ->join('cakes', 'transaction_details.cake_id', '=', 'cakes.id')
                        ->join('transaction_headers', 'transaction_details.transaction_header_id', '=', 'transaction_headers.id')
                        ->join('statuses', 'transaction_headers.status_id', '=', 'statuses.id')
                        ->join('users', 'transaction_headers.user_id', '=', 'users.id')
                        ->select(
                            'transaction_headers.id',
                            'users.fullname',
                            'cakes.cake_name',
                            'transaction_details.quantity',
                            'transaction_headers.transaction_date',
                            'statuses.status_name'
                        )->orderBy('transaction_headers.status_id', 'asc')->get();

        return view('admin', [
            'title' => 'Admin',
            'transactions' => $transactions,
            'cakes' => Cake::all()
        ]);
    }

    public function updateTransactionStatus(Request $request) {
        $transactionHeaders = TransactionHeader::all();
        $transactionHeader = $transactionHeaders->find($request->transactionId);

        $transactionHeader->update(['status_id' => 2]);
        return redirect('/admin');
    }

    public function addCake() {
        return view('add-cake', [
            'title' => 'Add Cake',
            'categories' => Category::all()
        ]);
    }

    public function addCakeSuccess() {
        return view('add-cake-success', [
            'title' => 'Add Cake Succeed'
        ]);
    }

    public function editCake($id) {
        $cake = DB::table('cakes')
                ->join('categories', 'cakes.category_id', '=', 'categories.id')
                ->select('cakes.*', 'categories.category_name')
                ->where('cakes.id', '=', $id)->first();

        return view('edit-cake', [
            'title' => 'Edit Cake',
            'cake' => $cake
        ]);
    }

    public function changeCake($id) {
        $cake = DB::table('cakes')
                ->join('categories', 'cakes.category_id', '=', 'categories.id')
                ->select('cakes.*', 'categories.category_name')
                ->where('cakes.id', '=', $id)->first();

        return view('update-cake', [
            'title' => 'Update Cake',
            'cake' => $cake,
            'categories' => Category::all()
        ]);
    }

    public function updateCakeSuccess() {
        return view('update-cake-success', [
            'title' => 'Update Cake Succeed'
        ]);
    }    

    public function createCake(Request $request) {
        $newCake = $request->validate([
            'cake_name' => ['required', 'min:5', 'max:255','unique:cakes'],
            'cake_price' => ['required', 'numeric'],
            'cake_ingredients' => ['required', 'min:5', 'max:255'],
            'cake_description' => ['required', 'min:5', 'max:255'],
            'category_id' => ['required'],
            'cake_photo' => ['required', 'mimes:jpeg, png, jpg', 'file', 'max:1024']
        ]);
        
        $newCake["cake_photo"] = $request->file('cake_photo')->store('uploaded-cake-photo');
        $newCake["excerpt"] = Str::limit(strip_tags($request->cake_description, 20));

        Cake::create($newCake);
        return redirect('/admin/add-cake/add-cake-success');
    }

    public function updateCake(Request $request, Cake $cake) {
        $updateCake = $request->validate([
            'cake_name' => ['required', 'min:5', 'max:255'],
            'cake_price' => ['required', 'numeric'],
            'cake_ingredients' => ['required', 'min:5', 'max:255'],
            'cake_description' => ['required', 'min:5', 'max:255'],
            'category_id' => ['required'],
            'cake_photo' => ['mimes:jpeg, png, jpg', 'file', 'max:1024']
        ]);
        
        if ($request->file('cake_photo')) {
            $updateCake["cake_photo"] = $request->file('cake_photo')->store('uploaded-cake-photo');
            $updateCake["excerpt"] = Str::limit(strip_tags($request->cake_description, 20));
        
            Storage::delete($request->oldCakeImage);
        }

        $cake->update($updateCake);
        
        return redirect('/admin/update-cake-success');
    }

    public function deleteCakeConfirmation($id) {
        $cake = DB::table('cakes')
                ->join('categories', 'cakes.category_id', '=', 'categories.id')
                ->select('cakes.*', 'categories.category_name')
                ->where('cakes.id', '=', $id)->first();

        return view('delete-cake', [
            'title' => 'Delete Cake',
            'cake' => $cake
        ]);
    }

    public function deleteCake(Cake $cake) {
        Storage::delete($cake->cake_photo);
        $cake->destroy($cake->id);
        
        return redirect('/admin/delete-cake-success');
    }

    public function deleteCakeSuccess() {
        return view('delete-cake-success', [
            'title' => 'Delete Cake Succeed'
        ]);
    }
}