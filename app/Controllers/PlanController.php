<?php

namespace App\Controllers;
use App\Models\AddPlanModel;

class PlanController extends BaseController
{
    public function Plan()
    {

        $addplanModel = new AddPlanModel();
        $data = $addplanModel->findAll();
        // echo '<pre>';
        // print_r($data);
        // die();

        return view('Admin_Template/plan', [
            'data' => $data,
        ]);
        
    }

    public function addPlan()
    {

        $validation = \Config\Services::validation();

        $rules = [
            'planname' => 'required',
            'price' => 'required',
            'duration' =>'required',
            'mxuser' => 'required',
            'mxcustomer' => 'required',
            'mxvendor' =>'required',
            'mxclient' => 'required',
            'storlimit' => 'required',
            'description' =>'required',
        ];

        if (! $this->validate($rules)) {

            $response = [
                'planname' => [
                    'status' => 'required',
                    'message' => 'Please enter a plan name',
                ],
                'price' => [
                    'status' => 'required',
                    'message' => 'Please enter a price',
                ],
                'duration' => [
                    'status' => 'required',
                    'message' => 'Please enter a duration',
                ],
                'mxuser' => [
                    'status' => 'required',
                    'message' => 'Please enter a mxuser',
                ],
                'mxcustomer' => [
                    'status' => 'required',
                    'message' => 'Please enter a mxcustomer',
                ],
                'mxvendor' => [
                    'status' => 'required',
                    'message' => 'Please enter a mxvendor',
                ],
                'mxclient' => [
                    'status' => 'required',
                    'message' => 'Please enter a mxclient',
                ],
                'storlimit' => [
                    'status' => 'required',
                    'message' => 'Please enter a storlimit',
                ],
                'description' => [
                    'status' => 'required',
                    'message' => 'Please enter a description',
                ],
                // 'CRM' => [
                //     'status' => 'required',
                //     'message' => 'Please enter a CRM',
                // ],
                // 'project' => [
                //     'status' => 'required',
                //     'message' => 'Please enter a project',
                // ],
                // 'HRM' => [
                //     'status' => 'required',
                //     'message' => 'Please enter a HRM',
                // ],
                // 'account' => [
                //     'status' => 'required',
                //     'message' => 'Please enter a account',
                // ],
                // 'POS' => [
                //     'status' => 'required',
                //     'message' => 'Please enter a POS',
                // ],
                // 'chatGPT' => [
                //     'status' => 'required',
                //     'message' => 'Please enter a chatGPT',
                // ],

                
            ];
            return json_encode($response);
        }

        $addplanModel = new AddPlanModel();

        $crm = $this->request->getPost('crm') === '1' ? 1 : 0;
        $project = $this->request->getPost('project') === '1' ? 1 : 0;
        $hrm = $this->request->getPost('hrm') === '1' ? 1 : 0;
        $account = $this->request->getPost('account') === '1' ? 1 : 0;
        $pos = $this->request->getPost('pos') === '1' ? 1 : 0;
        $chatGPT = $this->request->getPost('chatgpt') === '1' ? 1 : 0;

        $data = [

            'planname' => $this->request->getPost('planname'),
            'price' => $this->request->getPost('price'),
            'duration' => $this->request->getPost('duration'),
            'mxusers' => $this->request->getPost('mxuser'),
            'mxcustomer' => $this->request->getPost('mxcustomer'),
            'mxvendor' => $this->request->getPost('mxvendor'),
            'mxclient' => $this->request->getPost('mxclient'),
            'storlimit' => $this->request->getPost('storlimit'),
            'description' => $this->request->getPost('description'),
            'CRM' => $crm,
            'project' => $project,
            'HRM' => $hrm,
            'account' => $account,
            'POS' => $pos,
            'chatGPT' => $chatGPT,
            
        ];

                 $addplanModel->insert($data);
                
                $data = $addplanModel->findAll();
                // echo '<pre>'; print_r($data);

                // die();

                $response = [
                    'success' => [
                        'status' => 'ok',
                        'message' => 'Data inserted successfully.',
                    ],
                ];
                return json_encode($response);

                return view('Admin_Template/plan', [
                    'data' => $data,
                    'successMessage' => $successMessage,
                ]);
    }



    public  function editPlan($id)
    {

        $addplanModel = new AddPlanModel();
        $data= $addplanModel->find($id);
        // echo '<pre>';print_r($data);die();

        return view('Admin_Template/plan',['data'=>$data,]);
    }



    public function updatePlan($id)
    {
        
        $addplanModel = new AddPlanModel();
        $data= $addplanModel->find($id);
        // echo '<pre>';
        // print_r ($data);
        // die();

        
        if ($this->request->getMethod() === 'post') {
            $planname = $this->request->getPost('planname');
            $price = $this->request->getPost('price');
            $duration = $this->request->getPost('duration');
            $mxuser = $this->request->getPost('mxuser');
            $mxcustomer = $this->request->getPost('mxcustomer');
            $mxvendor = $this->request->getPost('mxvendor');
            $mxclient = $this->request->getPost('mxclient');
            $storlimit = $this->request->getPost('storlimit');
            $description = $this->request->getPost('description');
            $crm = $this->request->getPost('crm') === '1' ? 1 : 0;
            $project = $this->request->getPost('project') === '1' ? 1 : 0;
            $hrm = $this->request->getPost('hrm') === '1' ? 1 : 0;
            $account = $this->request->getPost('account') === '1' ? 1 : 0;
            $pos = $this->request->getPost('pos') === '1' ? 1 : 0;
            $chatGPT = $this->request->getPost('chatgpt') === '1' ? 1 : 0;
    
           

            $data = [
                'planname' => $planname,
                'price' => $price,
                'duration' => $duration,
                'mxusers' => $mxuser,
                'mxcustomer' => $mxcustomer,
                'mxvendor' => $mxvendor,
                'mxclient' => $mxclient,
                'storlimit' => $storlimit,
                'description' => $description,
                'CRM' => $crm,
                'project' => $project,
                'HRM' => $hrm,
                'account' => $account,
                'POS' => $pos,
                
            ];


            $addplanModel->update($id,$data);

            $response = [
                'success' => true,
                'message' => 'Data updated successfully.'
            ];

            return $this->response->setJSON($response);

        }
      
    
         return view('Admin_Template/plan', ['data' => $data,]);
    }


}
