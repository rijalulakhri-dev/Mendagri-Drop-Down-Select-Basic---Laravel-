<?php

namespace App\Models;

use App\Models\Kemendagri\Districts;
use App\Models\Kemendagri\Provinces;
use App\Models\Kemendagri\Regencies;
use App\Models\Kemendagri\Villages;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserIdentity extends Model
{
    use HasFactory;

    protected $table = 'user_identities';

    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'birth_place',
        'date_of_birth',
        'province_id',
        'regency_id',
        'district_id',
        'village_id',
        'address',
        'phone_number',
        'occupation',
        'nik_number',
        'kk_number',
    ];

    // Relasi ke model Kemendagri
    public function province()
    {
        return $this->belongsTo(Provinces::class);
    }

    public function regency()
    {
        return $this->belongsTo(Regencies::class);
    }

    public function district()
    {
        return $this->belongsTo(Districts::class);
    }

    public function village()
    {
        return $this->belongsTo(Villages::class);
    }
}
