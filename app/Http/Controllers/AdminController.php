<?php

namespace App\Http\Controllers;

use App\Models\Cake;
use App\Models\Category;
use App\Models\TransactionHeader;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\admin\CreateCakeRequest;
use App\Http\Requests\admin\UpdateCakeRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


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

      return view('admin.home', [
         'title' => 'Admin',
         'transactions' => $transactions,
         'cakes' => Cake::all()
      ]);
   }

   public function updateTransactionStatus(Request $request) {
      $transactionHeader = TransactionHeader::find($request->transactionId);
      $transactionHeader->update(['status_id' => 2]);
      return redirect('/admin');
   }

   public function addCake() {
      return view('admin.add-cake', [
         'title' => 'Add Cake',
         'categories' => Category::all()
      ]);
   }

   public function addCakeSuccess() {
      return view('admin.add-cake-success', [
         'title' => 'Add Cake Succeed'
      ]);
   }

   public function editCake($id) {
      $cake = Cake::with('category')->where('cakes.id', '=', $id)->first();

      return view('admin.edit-cake', [
         'title' => 'Edit Cake',
         'cake' => $cake
      ]);
   }

   public function changeCake($id) {
      $cake = Cake::where('cakes.id', '=', $id)->first();

      return view('admin.update-cake', [
         'title' => 'Update Cake',
         'cake' => $cake,
         'categories' => Category::all()
      ]);
   }

   public function updateCakeSuccess() {
      return view('admin.update-cake-success', [
         'title' => 'Update Cake Succeed'
      ]);
   }    

   public function createCake(CreateCakeRequest $request) {
      $newCake = $request->validated();
      
      $newCake["cake_photo"] = $request->file('cake_photo')->store('uploaded-cake-photo');
      $newCake["excerpt"] = Str::limit(strip_tags($request->cake_description, 20));

      Cake::create($newCake);
      return redirect('/admin/add-cake/add-cake-success');
   }

   public function updateCake(UpdateCakeRequest $request, Cake $cake) {
      $updateCake = $request->validated();
      
      $updateCake["excerpt"] = Str::limit(strip_tags($request->cake_description, 20));

      if ($request->file('cake_photo')) {
         $updateCake["cake_photo"] = $request->file('cake_photo')->store('uploaded-cake-photo');
         Storage::delete($request->oldCakeImage);
      }

      $cake->update($updateCake);
      
      return redirect('/admin/update-cake-success');
   }

   public function deleteCakeConfirmation($id) {
      $cake = Cake::where('cakes.id', '=', $id)->first();

      return view('admin.delete-cake', [
         'title' => 'Delete Cake',
         'cake' => $cake
      ]);
   }

   public function deleteCake(Cake $cake) {
      Storage::delete($cake->cake_photo);
      $cake->delete();
      
      return redirect('/admin/delete-cake-success');
   }

   public function deleteCakeSuccess() {
      return view('admin.delete-cake-success', [
         'title' => 'Delete Cake Succeed'
      ]);
   }
}