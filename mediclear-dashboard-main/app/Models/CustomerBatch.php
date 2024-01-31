<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
use App\Models\MedicalDetail;

class CustomerBatch extends Model
{
    use HasFactory;
    protected $table = "customerbatchs";

    protected $fillable = [
        'batch_no',
        'test',
        'customer_id',
    ];
    public function customers()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }
    public function getbatchdetails()
    {
        return $this->morphMany(MedicalDetail::class, 'cusmerbatchdetails');
    }
}
