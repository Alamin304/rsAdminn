<?php

namespace App\Controllers;
use App\Models\AddServiceModel;
use App\Models\ServicePriceModel;
use App\Models\AddonsModel;
use App\Models\UnitModel;
use App\Models\AllStaffModel;
use App\Models\ServiceDetailsModel;


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

        $StaffDetailsModel = new ServiceDetailsModel();
        $data1 = $StaffDetailsModel->findAll();
        // echo '<pre>';print_r($data1);
        // die();

        $ServiceModel = new AddServiceModel();
        $data2 = $ServiceModel->findAll();

        return view('Admin_Template/Staff/staffhome', [
            'data'=>$data,
            'data1'=>$data1,
            'data2' => $data2,
          
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


  
    public function EditStaff($id)
    {
        $StaffModel = new AllStaffModel();
        $data = $StaffModel->find($id);
        

      return $this->response->setJSON($data);
               
    }


    
    public function UpdateStaff($id)
    {
        
        $StaffModel = new AllStaffModel();
        $data = $StaffModel->find($id);

        // $photos = $this->request->getFile('photos');
        // if ($photos->isValid() && !$photos->hasMoved()) {
        //     $photos->move(ROOTPATH . 'public/staff');
        // }
        
        if ($this->request->getMethod() === 'post') {
            $name = $this->request->getPost('name');
            $email = $this->request->getPost('email');
            $description = $this->request->getPost('description');
            $phone = $this->request->getPost('phone');
            $address = $this->request->getPost('address');
            $city = $this->request->getPost('city');
            $state = $this->request->getPost('state');
            $country = $this->request->getPost('country');
            $zip = $this->request->getPost('zip');
            // $Booking = $this->request->getPost('Booking');
            $Booking = $this->request->getPost('Booking') === 'on' ? 1 : 0;
            // $service = $this->request->getPost('service');
            $serviceidsArray = $_POST['service'];
            $service = json_encode($serviceidsArray);
            // $photos = $this->request->getfile('photos')->getName();
           
           
            $data = [
                'Name' =>$name,
                'Email' => $email,
                'description' => $description,
                'phone' => $phone,
                'address' => $address,
                'city' => $city,
                'state' => $state,
                'country' => $country,
                'zip' => $zip,
                'Booking' => $Booking,
                'service' => $service,
                // 'staff_image'=> $photos,
               

            ];

            $StaffModel->update([$id],$data);
            $response = [
                'success' => true,
                'message' => 'Data updated successfully.'
            ];
            return $this->response->setJSON($response);
        }
        $data = $StaffModel->find([$id]); 
         return view('Admin_Template/Staff/stafhome', ['data' => $data,]);
    }



    public function DeleteStaff($id)
    {
        $StaffModel = new AllStaffModel();
        $data = $StaffModel->find($id);

        if ($data) {
            $StaffModel->delete($id);

            $response = [
                'success' => true,
                'message' => 'Staff deleted successfully.'
            ];
        } 
     return $this->response->setJSON($response);
    }


}