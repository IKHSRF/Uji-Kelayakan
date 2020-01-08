<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'no_meja', 'tanggal', 'id_user', 'keterangan', 'status_order',
    ];

    protected $table = 'orders';

    protected $primaryKey = 'id_order';   
}