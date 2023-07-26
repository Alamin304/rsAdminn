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
            
            'email' => 'required',
            'password' =>'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' =>'required',
            'street' => 'required',
            'zip' => 'required',
            'city' =>'required',
            'state' => 'required',
            'note' => 'required',
        ];

        if (! $this->validate($rules)) {

            $response = [
                'email' => [
                    'status' => 'required',
                    'message' => 'Please enter a email',
                ],
                'password' => [
                    'status' => 'required',
                    'message' => 'Please enter a password',
                ],
                'firstname' => [
                    'status' => 'required',
                    'message' => 'Please enter a firstname',
                ],
                'lastname' => [
                    'status' => 'required',
                    'message' => 'Please enter a lastname',
                ],
                'phone' => [
                    'status' => 'required',
                    'message' => 'Please enter Your phone number',
                ],
                'street' => [
                    'status' => 'required',
                    'message' => 'Please enter a street Address',
                ],

                 'zip' => [
                    'status' => 'required',
                    'message' => 'Please enter a zip code',
                ], 
                'city' => [
                    'status' => 'required',
                    'message' => 'Please enter a city',
                ],
                'state' => [
                    'status' => 'required',
                    'message' => 'Please enter a state',
                ],
                'note' => [
                    'status' => 'required',
                    'message' => 'Please enter your note',
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

        $db = \Config\Database::connect();

        $query = "SELECT * FROM crm left JOIN messages ON crm.id = messages.crm_id";

        $result = $db->query($query);
        $data3[] = $result->getResult();
        // echo '<pre>';print_r($data3);die();

        return view('Admin_Template/messages', [
            'data'=>$data,
            'data1'=>$data1,
            'data3'=>$data3,
            
          
        ]);

    }

    // ---For Showing Customer name ---

    public function ShowCustomer($id)
    {

        $MessagesModel = new MessagesModel();
        $data = $MessagesModel->find($id);

        // $CrmModel = new CrmModel();
        // $data2 = $CrmModel->findAll();

        $db = \Config\Database::connect();

        // $crmidsArray = json_decode($data['crm_id'], true);

        // $myData = [];

        // foreach ($data as $allvalue) {
        //     $allvalue['crmid_messages'] = $db->table('crm')
        //         ->where('id', $allvalue['crm_id'])
        //         ->get()
        //         ->getResult();

        //         $myData[]=$allvalue;
                
        // }

            $query = "SELECT * FROM crm left JOIN messages ON crm.id = messages.crm_id";

            $result = $db->query($query);
            $data3 = $result->getResult();



        // echo '<pre>';
        // print_r($data3);
        // die();

        

        // $query = "SELECT crm.*, messages.*FROM messages JOIN crm ON crm.id = messages.crm_id";
        //  $result = $db->query($query);
        //  $data2 = $result->getResult();


        return view('Admin_Template/messages', [
            'data'=>$data,
          
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

        if (! $this->validate($rules)) {

            $response = [
                'Subject' => [
                    'status' => 'required',
                    'message' => 'Please writte your Subject',
                ],
                'Message' => [
                    'status' => 'required',
                    'message' => 'Please writte your Message',
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
                    'message' => 'Data inserted successfully.',
                ],
            ];
            return json_encode($response);

            return view('Admin_Template/CRM', [
                'data' => $data,
                'successMessage' => $successMessage,
            ]);
    }




    // public function SmsMessages()
    // {

    //     $SmsMessagesModel = new SmsMessagesModel();
    //     $data = $SmsMessagesModel->findAll();

    //     return view('Admin_Template/messages', [
    //         'data'=>$data,
            
          
    //     ]);

    // }



}