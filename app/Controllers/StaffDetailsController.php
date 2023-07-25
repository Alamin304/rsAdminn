<?php

namespace App\Controllers;
use App\Models\AddServiceModel;
use App\Models\ServicePriceModel;
use App\Models\AddonsModel;
use App\Models\UnitModel;
use App\Models\AllStaffModel;



// use App\Models\AddPlanModel;

class StaffDetailsController extends BaseController
{

    protected $db;

    public function __construct(){
        $this->db = \Config\Database::connect();
    }


    public function Staff_Details()
    {

       

        return view('Admin_Template/Staff/staffhome', [
            'data1'=>$data1,
          
        ]);

    }
}