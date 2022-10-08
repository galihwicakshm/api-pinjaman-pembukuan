<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $table = 'datas';
    protected $primaryKey = 'id_data';
    protected $fillable = ['id_pelanggan', 'bayar', 'bulanan_ke', 'tanggal_bayar'];

    function pelanggans()
    {
        return $this->belongsTo('Pelanggan', 'id_pelanggan');
    }
}
