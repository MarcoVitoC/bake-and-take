<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
   use HasFactory;

   protected $guarded = ['id'];

   public function cake()
   {
      return $this->belongsTo(Cake::class);
   }

   public function transactionHeader()
   {
      return $this->belongsTo(TransactionHeader::class);
   }
}
