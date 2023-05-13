<?php

namespace App\Http\Controllers;

use App\Models\Cake;
use App\Models\User;
use App\Models\Favorite;
use App\Models\TransactionDetail;
use App\Models\TransactionHeader;
use Illuminate\Http\Request;
use App\Http\Requests\user\UpdateProfileRequest;
use App\Http\Requests\user\UpdatePasswordRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
      $cake = Cake::where('cakes.id', '=', $id)->first();

      $favorite = Favorite::where('cake_id', '=', $id)
                  ->where('user_id', '=', auth()->user()->id)
                  ->first();

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
      $transaction = TransactionDetail::with('cake')->where('id', '=', $id)->first();

      return view('user.payment-confirmation', [
         'title' => 'Payment Confirmation',
         'transaction' => $transaction
      ]);
   }

   public function cancelTransaction(TransactionDetail $transactionDetail) {
      $transactionHeader = TransactionHeader::find($transactionDetail->transaction_header_id);
      
      $cake_id = $transactionDetail->cake_id;

      $transactionHeader->delete();
      $transactionDetail->delete();

      return redirect()->route('productDetail', ['id' => $cake_id]);
   }

   public function paymentSuccess() {
      return view('user.payment-success', [
         'title' => 'Payment Succeed'
      ]);
   }

   public function showFavorite() {
      $favorites = Favorite::with('cake')
                  ->where('user_id', '=', auth()->user()->id)
                  ->has('cake')
                  ->get();

      return view('user.favorite', [
         'title' => 'Favorite',
         'favorites' => $favorites
      ]);
   }

   public function addFavorite($id) {
      $cake = Cake::find($id);

      Favorite::firstOrCreate([
         'cake_id' => $cake->id,
         'user_id' => auth()->user()->id
      ]);
   }

   public function removeFavorite($id) {
      $favorite = Favorite::where('cake_id', '=', $id)
                  ->where('user_id', '=', auth()->user()->id)
                  ->first();
      
      $favorite->delete();
      return back();
   }

   public function deleteFavorite(Request $request) {
      $favorite = Favorite::where('id', '=', $request->favoriteId)
                  ->where('user_id', '=', auth()->user()->id)
                  ->first();

      $favorite->delete();
      return back();
   }

   public function showTransaction() {
      $transactions = TransactionDetail::with([
         'transactionHeader.status', 
         'cake'
      ])
      ->join('transaction_headers', 'transaction_details.transaction_header_id', '=', 'transaction_headers.id')
      ->has('cake')
      ->where('transaction_headers.user_id', '=', auth()->user()->id)
      ->whereIn('transaction_headers.status_id', [1, 2])
      ->latest('transaction_headers.transaction_date')
      ->get();

      $succeedTransactions = TransactionDetail::with([
         'transactionHeader.status', 
         'cake'
      ])
      ->join('transaction_headers', 'transaction_details.transaction_header_id', '=', 'transaction_headers.id')
      ->has('cake')
      ->where('transaction_headers.user_id', '=', auth()->user()->id)
      ->whereIn('transaction_headers.status_id', [3])
      ->latest('transaction_headers.transaction_date')
      ->get();

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
      $transaction = TransactionDetail::with('cake')->where('transaction_details.id', '=', $id)->first();

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

   public function updateProfile(UpdateProfileRequest $request) {
      $updateUser = $request->validated();

      if (!Hash::check($request->confirm_password, $request->user()->password)) {
         return back()->withErrors([
            'confirm_password' => ['The provided password does not match our records.']
         ]);
      }

      $userId = auth()->user()->id;
      $user = User::find($userId);
      $user->update($updateUser);

      return redirect()->route('updateProfileSuccess');
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

   public function updatePassword(UpdatePasswordRequest $request) {
      $updatePassword = $request->validated();

      if (!Hash::check($request->old_password, $request->user()->password)) {
         return back()->withErrors([
            'old_password' => ['The provided password does not match our records.']
         ]);
      }

      $updatePassword['new_password'] = Hash::make($updatePassword['new_password']);

      $userId = auth()->user()->id;
      $user = User::find($userId);
      $user->update(['password' => $updatePassword['new_password']]);

      return redirect()->route('changePasswordSuccess');
   }

   public function updatePasswordSuccess() {
      return view('user.change-password-success', [
         'title' => 'Succeed'
      ]);
   }
}