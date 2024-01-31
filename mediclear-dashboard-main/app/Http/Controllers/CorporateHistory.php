<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CorporateHistory extends Controller
{
    //




    public function showCorporateHistory(){




    return view('dashboard.corporatehistory');
    }
    
    
    
    public function showReport(){
        
    return view('dashboard.report');
    }
    
    
}
