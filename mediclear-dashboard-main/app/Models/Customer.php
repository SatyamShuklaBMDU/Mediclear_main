<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\CustomerBatch;
use App\Models\MedicalDetail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;

    // protected $guard="customer";
    protected $table = "customers";

    protected $guard = 'customer-api';

    protected $fillable = [
        'name',
        'email',
        'mobile_no',
        'address',
        'status',
        'user_id',
        'password',
    ];

    public function customerbatches()
    {


        return $this->hasMany(CustomerBatch::class, 'customer_id', 'id');

    }


}
