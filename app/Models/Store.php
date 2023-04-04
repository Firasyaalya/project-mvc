<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $table = 'store';
    protected $fillable = ['NamaProduk', 'Catalogue', 'Harga'];
    protected $guarded = ['id'];
    protected $dates = ['created_at'];
}
