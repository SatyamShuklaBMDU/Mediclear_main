<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CorporateID;
use App\Models\Company;
use App\Models\MedicalDetail;

class CorporateBatch extends Model
{
    use HasFactory;
    protected $table = "corporatebatchs";

    protected $fillable = [
        'batch_no',
        'test',
        'corporate_id',
        'company_id'

    ];

    public function corporates()
    {
        return $this->belongsTo(CorporateID::class, 'corporate_id', 'id');
    }

    public function corprateBelongCompany()
    {


        return $this->belongsTo(Company::class, 'company_id', 'id');

    }

    public function getbatchdetails()
    {
        return $this->morphMany(MedicalDetail::class, 'cusmerbatchdetails');
    }




}
