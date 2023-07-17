<?php

namespace App\Controllers;
use App\Models\AddUserModel;
use App\Models\AddPlanModel;

class UserController extends BaseController
{
    public function users()
    {

        $db = \Config\Database::connect();

        $adduserModel = new AddUserModel();
        $data = $adduserModel->findAll();

        // $query = $db->table('addplan')
        // ->join('manageuser', 'plan_id = addplan.id')
        // ->get();
        // $results = $query->getResult();
        // $data = $results;
        // echo '<pre>';
        // print_r($data);
        // die();

        
        $addplanModel = new AddPlanModel();
        $data1 = $addplanModel->findAll();


        foreach ($data as $allvalue) {
        
            $allvalue['plan_into'] = $db->table('addplan')
                ->where('id', $allvalue['plan_id'])
                ->get()
                ->getResult();

                $myData[]=$allvalue;
                
        }
        // echo '<pre>';
        // print_r($myData);
        // die();

        return view('Admin_Template/users', [
            'data' => $myData,
            'data1' => $data1,
        ]);

    }




    public function addUsers()
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

        $adduserModel = new AddUserModel();
        $data = [

            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            
            
        ];
                $adduserModel->insert($data);
            
            $data = $adduserModel->findAll();
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

            return view('Admin_Template/users', [
                'data' => $data,
                'successMessage' => $successMessage,
            ]);
    }



    // public function upgradePlan($id)
    // { 


    //     $db = \Config\Database::connect();

    //     $adduserModel = new AddUserModel();
    //     $data = $adduserModel->findAll();

    //     foreach ($data as $allvalue) {
        
    //         $allvalue['plan_into'] = $db->table('addplan')
    //             ->where('id', $allvalue['plan_id'])
    //             ->get()
    //             ->getResult();

    //             $myData[]=$allvalue;
                
    //     }

    //     if ($this->request->isAJAX()) {
    //         $tableContent = view('User_Side/table_content', [
    //            'data' => $myData,
    //         ]);
    //         return $this->response->setJSON(['tableContent' => $tableContent]);
    //      } else {
    //         return view('User_Side/users', [
    //            'data' => $myData,
    //         ]);
    //      }
      
        

    // }


    public function upgradePlan($id)
    {
        // $userId = $this->request->getVar('id');
        // $planId = $this->request->getVar('plan_id');
        // $isChecked = $this->request->getVar('isChecked');

        // $addUserModel = new AddUserModel();
        // $addPlanModel = new AddPlanModel();

        // $user = $addUserModel->find($userId);
        // $plan = $addPlanModel->find($planId);

        // if ($user && $plan) {
        //     $updateData = [
        //         'plan_id' => $isChecked ? $planId : null
        //     ];
        //     $addUserModel->update($userId, $updateData);

        //     $response = [
        //         'planname' => $plan['planname'],
        //         'duration' => $plan['duration'],
        //         'mxusers' => $plan['mxusers'],
        //         'mxcustomer' => $plan['mxcustomer'],
        //         'mxvendor' => $plan['mxvendor']
        //     ];

        //     return $this->response->setJSON($response);
        // }

        // $errorResponse = ['error' => 'User or plan not found'];
        // return $this->response->setJSON($errorResponse);
    }



    public function editUser($id)
    {
        $adduserModel = new AddUserModel();
        $data = $adduserModel->find($id);

      return $this->response->setJSON($data);
                // return view('Admin_Template/user');

    }

    public function editUserPassword($id)
    {
        $adduserModel = new AddUserModel();
        $data = $adduserModel->find($id);
        // echo '<pre>';
        // print_r($data);
        // die();
        
        
      return $this->response->setJSON($data);
                // return view('Admin_Template/user');

    }



    public function updateuser($id)
                {
                    $adduserModel = new AddUserModel();
                    $data = $adduserModel->find($id);

                    if ($this->request->getMethod() === 'post') {
                        $name = $this->request->getPost('name');
                        $email = $this->request->getPost('email');
                        $password = $this->request->getPost('passwordInput');

                        $data = [
                            'name' => $name,
                            'email' => $email,
                            'password' => password_hash($password, PASSWORD_DEFAULT),
                        ];

                        $adduserModel->update($id, $data);

                        $response = [
                            'success' => true,
                            'message' => 'Data updated successfully.'
                        ];

                        return $this->response->setJSON($response);
                    }

                    return view('Admin_Template/user', ['data' => $user]);
                }




    public function deleteuser($id)
                {
                    $adduserModel = new AddUserModel();
                    $user = $adduserModel->find($id);

                    if ($user) {
                        $adduserModel->delete($id);

                        $response = [
                            'success' => true,
                            'message' => 'User deleted successfully.'
                        ];
                    } 

                    return $this->response->setJSON($response);
                }




}
