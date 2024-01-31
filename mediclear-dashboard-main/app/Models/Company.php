<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CorporateBatch;

class Company extends Model
{
    use HasFactory;
    protected $table = "company";

    protected $fillable = [
        'name',
        'email',
        'mobile_no',
        'city',
        'status',
    ];

    public function corprateCompanyBatch()
    {


        return $this->hasMany(CorporateBatch::class, 'company_id', 'id');

    }
}
