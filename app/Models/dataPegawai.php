<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataPegawai extends Model
{
    use HasFactory;

    protected $table      = 'dataPegawai';
    protected $fillable = [
        'name',
        'address'
    ];
}
