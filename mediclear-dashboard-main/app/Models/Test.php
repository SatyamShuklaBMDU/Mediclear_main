<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $fillable = [
        'data',
        'medical_details_id',
        'test_type_id',
        'test_status',
        'test_results',
        'test_results_remarks',
        'features',
    ];

}
