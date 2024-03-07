<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelayanan extends Model
{
    protected $table = 'tb_pasien_baru';
    protected $guarded = ['id_pasien_baru'];
    protected $fillable = [
        'nomor_mr',
        'nama_pasien',
        'nomor_ktp',
        'tgl_lahir',
        'tempat_lahir',
        'jenis_kelamin',
        'pekerjaan',
        'golongan',
        'nomor_hp'
    ];
}
