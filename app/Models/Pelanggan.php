<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_pelanggan';
    protected $fillable = ['nama_pelanggan', 'total_bulan'];

    function datas()
    {
        return $this->hasMany('Data', 'id_data');
    }
}
