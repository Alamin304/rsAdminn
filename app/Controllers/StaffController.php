<?php

namespace App\Controllers;
use App\Models\AddServiceModel;
use App\Models\ServicePriceModel;
use App\Models\AddonsModel;
use App\Models\UnitModel;
use App\Models\AllStaffModel;


// use App\Models\AddPlanModel;

class StaffController extends BaseController
{

    protected $db;

    public function __construct(){
        $this->db = \Config\Database::connect();
    }


    public function Staff()
    {

        $StaffModel = new AllStaffModel();
        $data = $StaffModel->findAll();

        return view('Admin_Template/Staff/staffhome', [
            'data'=>$data,
          
        ]);

    }


    public function AddStaff()
    {
    
       
        $validation = \Config\Services::validation();

        $rules = [
            'name' => 'required',
            'email' => 'required',
            'password' =>'required',
        ];

        if (! $this->validate($rules)) {

            $response = [
                'name' => [
                    'status' => 'required',
                    'message' => 'Please enter a name',
                ],
                'email' => [
                    'status' => 'required',
                    'message' => 'Please enter a email',
                ],
                'password' => [
                    'status' => 'required',
                    'message' => 'Please enter a password',
                ],
                
            ];
            return json_encode($response);
        }

        $StaffModel = new AllStaffModel();
        $data = [

            'Name' => $this->request->getPost('name'),
            'Email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            
            
        ];
                $StaffModel->insert($data);
            
            $data = $StaffModel->findAll();
            // echo '<pre>';
            // print_r($data);
            // die();

            $response = [
                'success' => [
                    'status' => 'ok',
                    'message' => 'Data inserted successfully.',
                ],
            ];
            return json_encode($response);

            return view('Admin_Template/Staff/stafhome', [
                'data' => $data,
                'successMessage' => $successMessage,
            ]);
    }




}