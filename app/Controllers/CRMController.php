<?php

namespace App\Controllers;
use App\Models\CrmModel;
use App\Models\MessagesModel;
use App\Models\SmsMessagesModel;




class CRMController extends BaseController
{

    protected $db;

    public function __construct(){
        $this->db = \Config\Database::connect();
    }


    public function CRM()
    {

        $CrmModel = new CrmModel();
        $data = $CrmModel->findAll();

        return view('Admin_Template/CRM', [
            'data'=>$data,
            
          
        ]);

    }


    public function AddCRM()
    {
        $validation = \Config\Services::validation();

            $rules = [
                'email' => 'required|valid_email', 
                'password' => 'required',
                'firstname' => 'required',
                'lastname' => 'required',
                'phone' => 'required',
                'street' => 'required',
                'zip' => 'required',
                'city' => 'required',
                'state' => 'required',
                'note' => 'required',
            ];


            $validation->setRules($rules, [
                'email' => [
                    'required' => 'Please enter an email.',
                    'valid_email' => 'Invalid email format.',
                ],
                'password' => [
                    'required' => 'Please enter a password.',
                ],
                'firstname' => [
                    'required' => 'Please enter a first name.',
                ],
                'lastname' => [
                    'required' => 'Please enter a last name.',
                ],
                'phone' => [
                    'required' => 'Please enter your phone number.',
                ],
                'street' => [
                    'required' => 'Please enter a street address.',
                ],
                'zip' => [
                    'required' => 'Please enter a zip code.',
                ],
                'city' => [
                    'required' => 'Please enter a city.',
                ],
                'state' => [
                    'required' => 'Please enter a state.',
                ],
                'note' => [
                    'required' => 'Please enter your note.',
                ],
            ]);

            if (!$this->validate($rules)) {
                $response = [
                    'email' => [
                        'status' => 'error',
                        'message' => $validation->getError('email') ?: '',
                    ],
                    'password' => [
                        'status' => 'error',
                        'message' => $validation->getError('password') ?: '',
                    ],
                    'firstname' => [
                        'status' => 'error',
                        'message' => $validation->getError('firstname') ?: '',
                    ],
                    'lastname' => [
                        'status' => 'error',
                        'message' => $validation->getError('lastname') ?: '',
                    ],
                    'phone' => [
                        'status' => 'error',
                        'message' => $validation->getError('phone') ?: '',
                    ],
                    'street' => [
                        'status' => 'error',
                        'message' => $validation->getError('street') ?: '',
                    ],
                    'zip' => [
                        'status' => 'error',
                        'message' => $validation->getError('zip') ?: '',
                    ],
                    'city' => [
                        'status' => 'error',
                        'message' => $validation->getError('city') ?: '',
                    ],
                    'state' => [
                        'status' => 'error',
                        'message' => $validation->getError('state') ?: '',
                    ],
                    'note' => [
                        'status' => 'error',
                        'message' => $validation->getError('note') ?: '',
                    ],
                ];
                return json_encode($response);
            }


        $CrmModel = new CrmModel();
        $data = [

           
            'preferred_email_address' => $this->request->getPost('email'),
            'preferred_password' => $this->request->getPost('password'),
            'first_name' => $this->request->getPost('firstname'),
            'last_name' => $this->request->getPost('lastname'),
            'phone' => $this->request->getPost('phone'),
            'street_address' => $this->request->getPost('street'),
            'zip_code' => $this->request->getPost('zip'),
            'city' => $this->request->getPost('city'),
            'state' => $this->request->getPost('state'),
            'notes' => $this->request->getPost('note'),
            
            
        ];
                $CrmModel->insert($data);
            
            $data = $CrmModel->findAll();

            $response = [
                'success' => [
                    'status' => 'ok',
                    'message' => 'Data inserted successfully.',
                ],
            ];
            return json_encode($response);

            return view('Admin_Template/CRM', [
                'data' => $data,
                'successMessage' => $successMessage,
            ]);
    }




    public function editCRM($id)
    {
        $CrmModel = new CrmModel();
        $data = $CrmModel->find([$id]);
        // echo '<pre>';
        // print_r($data);
        // die();
        return view('Admin_Template/edit_CRM', [
            'data' => $data,
            
        ]);

    }



    public function UpdateCRM($id)
    {

        $validation = \Config\Services::validation();

        $rules = [
            'email' => 'required|valid_email', 
            'password' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'street' => 'required',
            'zip' => 'required',
            'city' => 'required',
            'state' => 'required',
            'note' => 'required',
        ];


        $validation->setRules($rules, [
            'email' => [
                'required' => 'Please enter an email.',
                'valid_email' => 'Invalid email format.',
            ],
            'password' => [
                'required' => 'Please enter a password.',
            ],
            'firstname' => [
                'required' => 'Please enter a first name.',
            ],
            'lastname' => [
                'required' => 'Please enter a last name.',
            ],
            'phone' => [
                'required' => 'Please enter your phone number.',
            ],
            'street' => [
                'required' => 'Please enter a street address.',
            ],
            'zip' => [
                'required' => 'Please enter a zip code.',
            ],
            'city' => [
                'required' => 'Please enter a city.',
            ],
            'state' => [
                'required' => 'Please enter a state.',
            ],
            'note' => [
                'required' => 'Please enter your note.',
            ],
        ]);

        if (!$this->validate($rules)) {
            $response = [
                'email' => [
                    'status' => 'error',
                    'message' => $validation->getError('email') ?: '',
                ],
                'password' => [
                    'status' => 'error',
                    'message' => $validation->getError('password') ?: '',
                ],
                'firstname' => [
                    'status' => 'error',
                    'message' => $validation->getError('firstname') ?: '',
                ],
                'lastname' => [
                    'status' => 'error',
                    'message' => $validation->getError('lastname') ?: '',
                ],
                'phone' => [
                    'status' => 'error',
                    'message' => $validation->getError('phone') ?: '',
                ],
                'street' => [
                    'status' => 'error',
                    'message' => $validation->getError('street') ?: '',
                ],
                'zip' => [
                    'status' => 'error',
                    'message' => $validation->getError('zip') ?: '',
                ],
                'city' => [
                    'status' => 'error',
                    'message' => $validation->getError('city') ?: '',
                ],
                'state' => [
                    'status' => 'error',
                    'message' => $validation->getError('state') ?: '',
                ],
                'note' => [
                    'status' => 'error',
                    'message' => $validation->getError('note') ?: '',
                ],
            ];
            return json_encode($response);
        }

        
        $CrmModel = new CrmModel();
        $data = $CrmModel->find([$id]);

        
        if ($this->request->getMethod() === 'post') {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $firstname = $this->request->getPost('firstname');
            $lastname = $this->request->getPost('lastname');
            $phone = $this->request->getPost('phone');
            $street = $this->request->getPost('street');
            $zip = $this->request->getPost('zip');
            $city = $this->request->getPost('city');
            $state = $this->request->getPost('state');
            $note = $this->request->getPost('note');
           
            $data = [
                'preferred_email_address' =>$email,
                'preferred_password' => $password,
                'first_name' => $firstname,
                'last_name' => $lastname,
                'phone' => $phone,
                'street_address' => $street,
                'zip_code' => $zip,
                'city' => $city,
                'state' => $state,
                'notes' => $note,
               

            ];

            $CrmModel->update([$id],$data);
            $response = [
                'success' => true,
                'message' => 'Data updated successfully.'
            ];
            return $this->response->setJSON($response);
        }
        $data = $CrmModel->find([$id]); 
         return view('Admin_Template/edit_CRM', ['data' => $data,]);
    }




    public function DeleteCRM($id)
    {
       
        $CrmModel = new CrmModel();
        $data = $CrmModel->find($id);
        

        if ($data) {
            $CrmModel->delete($id);

            $response = [
                'success' => true,
                'message' => 'User deleted successfully.'
            ];
        } 
     return $this->response->setJSON($response);
    }




    public function Messages()
    {

        $MessagesModel = new MessagesModel();
        $data = $MessagesModel->findAll();

        $SmsMessagesModel = new SmsMessagesModel();
        $data1 = $SmsMessagesModel->findAll();

        // $db = \Config\Database::connect();

        // $query = "SELECT * FROM messages right JOIN crm ON messages.id = crm.id";

        // $result = $db->query($query);
        // $data3 = $result->getResult();


        return view('Admin_Template/messages', [
            'data'=>$data,
            'data1'=>$data1,
            // 'data3'=>$data3,
            
          
        ]);

    }

    // ---For Showing Customer name ---

    public function ShowCustomer($id)
    {

        $CrmModel = new CrmModel();
        $MessagesModel = new MessagesModel();
        // $data = $MessagesModel->find($id);
        $data = $MessagesModel->where('id',$id)->findAll();
        // print_r($data);
        // die;

        if (!empty($data)) {
            $crmIdsArray = json_decode($data[0]['crm_id'], true);
            header('Content-Type: application/json');
            // $result = json_decode($crmIdsArray);
            
        }

        // print_r($crmIdsArray);
        // die;

        $result = array();

        $data2 = $CrmModel->whereIn('id', $crmIdsArray)->findAll();
        foreach ($crmIdsArray as $cust) {
            foreach ($data2 as $detail) {
                if ($cust == $detail['id']) {
                     $result[] = array(
                'ID' => $detail['id'],
                'Name' => $detail['first_name'] . ' ' . $detail['last_name']
            );
                    
                }
            }
        }
            $jsonResult = json_encode($result);
            header('Content-Type: application/json');

            echo $jsonResult;
            die();
          
        

        // echo '<pre>';
        // print_r($data2);
        // die();



        // $db = \Config\Database::connect();

        // $crmidsArray = json_decode($data['crm_id'], true);
        // $myData = [];

        // foreach ($data as $allvalue) {
        //     $allvalue['crmid_messages'] = $db->table('crm')
        //         ->where('id', $allvalue['crm_id'])
        //         ->get()
        //         ->getResult();

        //         $myData[]=$allvalue;
                
        // }
       

            // $query = "SELECT * FROM messages right JOIN crm ON messages.id = crm.id";

            // $result = $db->query($query);
            // $data3 = $result->getResult();

            // echo '<pre>';
            // print_r($data3);
            // die();

        

        // $query = "SELECT crm.*, messages.*FROM messages JOIN crm ON crm.id = messages.crm_id";
        //  $result = $db->query($query);
        //  $data2 = $result->getResult();


        return view('Admin_Template/messages', [
            'data'=>$data,
            '$jsonResult' => $jsonResult,
          
        ]);

    }


    public function AddMessages()
    {
    
        $validation = \Config\Services::validation();

        $rules = [
            'Subject' => 'required',
            'Message' => 'required',
            // 'Attachment' =>'required',
        ];

        $validation->setRules($rules, [
            'Subject' => [
                'required' => 'Please write your Message Subject.',
            ],
            'Message' => [
                'required' => 'Please write your Message.',
            ],
        ]);

        if (! $this->validate($rules)) {

            $response = [
                'Subject' => [
                    'status' => 'error',
                    'message' => $validation->getError('Subject') ?: '',
                ],
                'Message' => [
                    'status' => 'error',
                    'message' => $validation->getError('Message') ?: '',
                ],
                // 'Attachment' => [
                //     'status' => 'required',
                //     'message' => 'Please Add your Attachment',
                // ],
                
            ];

            
            return json_encode($response);
        }

        $MessagesModel = new MessagesModel();

        $photos = $this->request->getFile('Attachment');
        if ($photos->isValid() && !$photos->hasMoved()) {
            $photos->move(ROOTPATH . 'public/MessageAttachment');
        }

        $crmidsArray = $_POST['crm_id'];
        $crmidsJSON = json_encode($crmidsArray);
        
        // $crmidsArray = json_decode($row['crm_id'], true);
        $data = [

            'message_subject' => $this->request->getPost('Subject'),
            'message' => $this->request->getPost('Message'),
            'attachment' => $photos->getName(),
            'crm_id' => $crmidsJSON,
            
            
            
        ];
           
            $MessagesModel->insert($data);
            $data = $MessagesModel->findAll();
            // echo '<pre>';
            // print_r($data);
            // die();

            $response = [
                'success' => [
                    'status' => 'ok',
                    'message' => 'Messages Sent successfully.',
                ],
            ];
            return json_encode($response);

            return view('Admin_Template/CRM', [
                'data' => $data,
                'successMessage' => $successMessage,
            ]);
    }




        public function AddSmsMessages()
        {

            $validation = \Config\Services::validation();

            $rules = [
                'SmsMessage' => 'required',
                // 'Attachment' =>'required',
            ];
    
            if (! $this->validate($rules)) {
    
                $response = [
                    'SmsMessage' => [
                        'status' => 'required',
                        'message' => 'Please writte your Message',
                    ],
                ];
                return json_encode($response);
            }
    
            
            $SmsMessagesModel = new SmsMessagesModel();
    
            $crmids = $_POST['crm_id'];
            $crmidsJSON = json_encode($crmids);
            // echo '<pre>';
            // print_r($crmidsJSON);
            // die();
            $data = [
    
                'messages' => $this->request->getPost('SmsMessage'),
                'crm_id' => $crmidsJSON,
                
                
                
            ];
               
            $SmsMessagesModel = new SmsMessagesModel();
            $data = $SmsMessagesModel->findAll();
                // echo '<pre>';
                // print_r($data);
                // die();
    
                $response = [
                    'success' => [
                        'status' => 'ok',
                        'message' => 'SMS Messages Sent successfully.',
                    ],
                ];
                return json_encode($response);
    
                return view('Admin_Template/CRM', [
                    'data' => $data,
                    'successMessage' => $successMessage,
                ]);

        }



}