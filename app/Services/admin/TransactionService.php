<?php

namespace App\Services\admin;

use App\Models\TransactionDetail;
use App\Models\TransactionHeader;

class TransactionService {
   public function showTransactions() {
      $transactions = TransactionDetail::with([
         'transactionHeader.user',
         'transactionHeader.status',
         'cake'
      ])
      ->join('transaction_headers', 'transaction_details.transaction_header_id', '=', 'transaction_headers.id')
      ->has('cake')
      ->orderBy('transaction_headers.status_id')
      ->get();

      return $transactions;
   }

   public function updateTransactionStatus($request) {
      $transactionHeader = TransactionHeader::find($request->transactionId);
      $transactionHeader->update(['status_id' => 2]);
   }
}