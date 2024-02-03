<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\CorporateBatch;
use Illuminate\Foundation\Auth\User as Authenticatable;

class CorporateID extends Authenticatable
{
    use HasFactory , HasApiTokens ,Notifiable;

    protected $table="corporate_i_d_s";
    protected $fillable= [
    'name',
    'user_id',
    'mobile_no',
    'email',
    'password',
    'status',
];

public function corporatebatches()
    {


        return $this->hasMany(CorporateBatch::class, 'corporate_id', 'id');

    }

}
