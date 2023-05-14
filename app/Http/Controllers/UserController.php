<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Cake;
use Illuminate\Http\Request;
use App\Http\Requests\user\UpdateProfileRequest;
use App\Http\Requests\user\ChangePasswordRequest;
use App\Models\TransactionDetail;
use App\Services\user\TransactionService;
use App\Services\user\FavoriteService;
use App\Services\user\UserProfileService;

class UserController extends Controller
{
   private $transactionService;
   private $favoriteService;
   private $userProfileService;

   public function __construct() {
      $this->transactionService = new TransactionService();
      $this->favoriteService = new FavoriteService();
      $this->userProfileService = new UserProfileService();
   }

   public function showUserPage() {
      return view('user.home', [
         'title' => 'User',
         'cheeses' => Cake::where('category_id', 1)->get(),
         'strawberrys' => Cake::where('category_id', 2)->get(),
         'chocolates' => Cake::where('category_id', 3)->get(),
         'cakes' => Cake::all()
      ]);
   }

   public function showProductDetail($id) {
      $productDetail = $this->transactionService->showProductDetail($id);

      return view('user.product-detail', [
         'title' => 'Product Details',
         'cake' => $productDetail['cake'],
         'favorite' => $productDetail['favorite']
      ]);
   }

   public function handleUserAction(Request $request, $id) {
      if ($request->action === 'favorite') {
         try {
            $this->favoriteService->addFavorite($id);
            return back();
         } catch (Exception $e) {
            return dd($e->getMessage());
         }
      }else if ($request->action === 'order') {
         try {
            $transactionDetail = $this->transactionService->orderCake($request, $id);
            return to_route('paymentConfirmation', ['id' => $transactionDetail->id]);
         } catch (Exception $e) {
            return dd($e->getMessage());
         }
      }
   }

   public function paymentConfirmation($id) {
      $transaction = $this->transactionService->paymentConfirmation($id);

      return view('user.payment-confirmation', [
         'title' => 'Payment Confirmation',
         'transaction' => $transaction
      ]);
   }

   public function cancelTransaction(TransactionDetail $transactionDetail) {
      try {
         $cakeId = $this->transactionService->cancelTransaction($transactionDetail);
         return to_route('productDetail', ['id' => $cakeId]);
      } catch (Exception $e) {
         return dd($e->getMessage());
      }
   }

   public function paymentSuccess() {
      return view('user.payment-success', [
         'title' => 'Payment Succeed'
      ]);
   }

   public function showFavorite() {
      $favorites = $this->favoriteService->showFavorites();

      return view('user.favorite', [
         'title' => 'Favorite',
         'favorites' => $favorites
      ]);
   }

   public function removeFavoriteFromProductDetail($id) {
      try {
         $this->favoriteService->removeFavoriteFromProductDetail($id);
         return back();
      } catch (Exception $e) {
         return dd($e->getMessage());
      }
   }

   public function removeFavoriteFromFavoritePage(Request $request) {
      try {
         $this->favoriteService->removeFavoriteFromFavoritePage($request);
         return back();
      } catch (Exception $e) {
         return dd($e->getMessage());
      }
   }

   public function showTransaction() {
      $ongoingTransactions = $this->transactionService->showOngoingTransactions();
      $succeedTransactions = $this->transactionService->showSucceedTransactions();

      return view('user.transaction',  [
         'title' => 'Transaction',
         'ongoingTransactions' => $ongoingTransactions,
         'succeedTransactions' => $succeedTransactions
      ]);
   }

   public function showTransactionDetail($id) {
      $transactionDetail = $this->transactionService->showTransactionDetail($id);

      return view('user.transaction-detail', [
         'title' => 'Transaction Detail',
         'transactionDetail' => $transactionDetail
      ]);
   }

   public function updateTransactionStatus(Request $request) {
      try {
         $this->transactionService->updateTransactionStatus($request);
         return to_route('userTransaction');
      } catch (Exception $e) {
         return dd($e->getMessage());
      }
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
      try {
         $this->userProfileService->updateProfile($request);
         return to_route('updateProfileSuccess');
      } catch (Exception $e) {
         return dd($e->getMessage());
      }
   }

   public function updateProfileSuccess() {
      return view('user.update-profile-success', [
         'title' => 'Succeed'
      ]);
   }

   public function showchangePasswordPage() {
      return view('user.change-password', [
         'title' => 'Change Password'
      ]);
   }

   public function changePassword(ChangePasswordRequest $request) {
      try {
         $changePasswordIsSuccess = $this->userProfileService->changePassword($request);
         if (!$changePasswordIsSuccess) {
            return back()->withErrors([
               'old_password' => ['The provided password does not match our records.']
            ]);
         }
         return to_route('changePasswordSuccess');
      } catch (Exception $e) {
         return dd($e->getMessage());
      }
   }

   public function changePasswordSuccess() {
      return view('user.change-password-success', [
         'title' => 'Succeed'
      ]);
   }
}