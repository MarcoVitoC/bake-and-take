<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Cake;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\admin\CakeRequest;
use App\Services\admin\CakeService;
use App\Services\admin\TransactionService;

class AdminController extends Controller
{
   private $cakeService;
   private $transactionService;

   public function __construct() {
      $this->cakeService = new CakeService();
      $this->transactionService = new TransactionService();
   }

   public function showAdminPage() {
      $transactions = $this->transactionService->showTransactions();

      return view('admin.home', [
         'title' => 'Admin',
         'transactions' => $transactions,
         'cakes' => Cake::all()
      ]);
   }

   public function updateTransactionStatus(Request $request) {
      try {
         $this->transactionService->updateTransactionStatus($request);
         return to_route('admin');
      } catch (Exception $e) {
         return dd($e->getMessage());
      }
   }

   public function showAddCakeForm() {
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

   public function showCakeDetail($id) {
      $cake = $this->cakeService->getCakeDetailById($id);

      return view('admin.edit-cake', [
         'title' => 'Edit Cake',
         'cake' => $cake
      ]);
   }

   public function showEditCakeForm($id) {
      $cake = $this->cakeService->getCakeForEditById($id);

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

   public function createCake(CakeRequest $request) {
      try {
         $this->cakeService->createCake($request);
         return to_route('addCakeSuccess');
      } catch (Exception $e) {
         return dd($e->getMessage());
      }
   }

   public function updateCake(CakeRequest $request, Cake $cake) {
      try {
         $this->cakeService->updateCake($request, $cake);
         return to_route('updateCakeSuccess');
      } catch (Exception $e) {
         return dd($e->getMessage());
      }
   }

   public function showDeleteCakeConfirmation($id) {
      $cake = $this->cakeService->findCakeToDelete($id);

      return view('admin.delete-cake', [
         'title' => 'Delete Cake',
         'cake' => $cake
      ]);
   }

   public function deleteCake(Cake $cake) {
      try {
         $this->cakeService->deleteCake($cake);
         return to_route('deleteCakeSuccess');
      } catch (Exception $e) {
         return dd($e->getMessage());
      }
   }

   public function deleteCakeSuccess() {
      return view('admin.delete-cake-success', [
         'title' => 'Delete Cake Succeed'
      ]);
   }
}