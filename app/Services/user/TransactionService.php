<?php

namespace App\Services\user;

use App\Models\Cake;
use App\Models\Favorite;
use App\Models\TransactionDetail;
use App\Models\TransactionHeader;

class TransactionService {
   public function showProductDetail($id) {
      $cake = Cake::where('cakes.id', '=', $id)->first();
      $favorite = Favorite::where('cake_id', '=', $id)->where('user_id', '=', auth()->user()->id)->first();

      $productDetail = [
         'cake' => $cake,
         'favorite' => $favorite
      ];

      return $productDetail;
   }

   public function orderCake($request, $id) {
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
      return $transaction;
   }

   public function cancelTransaction($transactionDetail) {
      $transactionHeader = TransactionHeader::find($transactionDetail->transaction_header_id);
      
      $cakeId = $transactionDetail->cake_id;

      $transactionHeader->delete();
      $transactionDetail->delete();

      return $cakeId;
   }

   public function showOngoingTransactions() {
      $ongoingTransactions = TransactionDetail::with([
         'transactionHeader.status', 
         'cake'
      ])
      ->join('transaction_headers', 'transaction_details.transaction_header_id', '=', 'transaction_headers.id')
      ->has('cake')
      ->where('transaction_headers.user_id', '=', auth()->user()->id)
      ->whereIn('transaction_headers.status_id', [1, 2])
      ->latest('transaction_headers.transaction_date')
      ->get();

      return $ongoingTransactions;
   }

   public function showSucceedTransactions() {
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

      return $succeedTransactions;
   }

   public function showTransactionDetail($id) {
      $transactionDetail = TransactionDetail::with('cake')->where('transaction_details.id', '=', $id)->first();

      return $transactionDetail;
   }

   public function updateTransactionStatus($request) {
      $transactionHeader = TransactionHeader::find($request->transactionId);
      $transactionHeader->update(['status_id' => 3]);
   }
}