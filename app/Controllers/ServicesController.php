<?php

namespace App\Controllers;
use App\Models\AddServiceModel;
use App\Models\ServicePriceModel;
use App\Models\AddonsModel;
use App\Models\UnitModel;

// use App\Models\AddPlanModel;

class ServicesController extends BaseController
{

    protected $db;

    public function __construct(){
        $this->db = \Config\Database::connect();
    }


    public function Services()
    {

        $db = \Config\Database::connect();

        $ServiceModel = new AddServiceModel();
        $data = $ServiceModel->findAll();


        return view('Admin_Template/services', [
            'data'=>$data,
          
        ]);

    }




    public function AddServices()
    {
    
        $validation = \Config\Services::validation();

        $rules = [
            'color_setting' => 'required',
            'serviceTitle' => 'required',
            'serviceDescription' =>'required',
        ];

        if (! $this->validate($rules)) {

            $response = [
                'color_setting' => [
                    'status' => 'required',
                    'message' => 'Please select a Color',
                ],
                'serviceTitle' => [
                    'status' => 'required',
                    'message' => 'Please writte your service Title',
                ],
                'serviceDescription' => [
                    'status' => 'required',
                    'message' => 'Please Writte your service Description',
                ],
                
            ];
            return json_encode($response);
        }

        $ServiceModel = new AddServiceModel();

        $photos = $this->request->getFile('serviceImage');
        if ($photos->isValid() && !$photos->hasMoved()) {
            $photos->move(ROOTPATH . 'public/servicephotos');
        }
        $data = [

            'color_tag' => $this->request->getPost('color_setting'),
            'service_title' => $this->request->getPost('serviceTitle'),
            'service_description' => $this->request->getPost('serviceDescription'),
            'service_image' => $photos->getName(),
            
            
        ];
           
            $ServiceModel->insert($data);
            $data = $ServiceModel->findAll();
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

            return view('Admin_Template/services', [
                'data' => $data,
                'successMessage' => $successMessage,
            ]);
    }




    public function EditServices($id)
    {
        $ServiceModel = new AddServiceModel();
        $data = $ServiceModel->find($id);
    
// echo'<pre>';print_r($data);die();
      return $this->response->setJSON($data);
                // return view('Admin_Template/user');

    }

   


    public function UpdateServices($id)
                {
                    $ServiceModel = new AddServiceModel();
                    $services = $ServiceModel->find($id);
                    // echo'<pre>';
                    // print_r($user);
                    // die();
                    
                    if ($this->request->getMethod() === 'post') {
                        $color = $this->request->getPost('color_setting');
                        $servicesTitle = $this->request->getPost('serviceTitle');
                        $desc = $this->request->getPost('serviceDescription');
                        $image = $this->request->getPost('serviceImage');
                        $img = $image->isValid() ? $image->getName() : $services['serviceImage'];
                        
                        $data = [
                            'color_tag' => color,
                            'service_title' => $servicesTitle,
                            'service_description' =>  $desc,
                            'service_image' => $img->getName(),
                        ];
                        $ServiceModel->update($id, $data);

                        $response = [
                            'success' => true,
                            'message' => 'Data updated successfully.'
                        ];
                        return $this->response->setJSON($response);
                    }
                    return view('Admin_Template/services', ['data' => $services]);
                }





    public function DeleteServices($id)
                {
                    $ServiceModel = new AddServiceModel();
                    $services = $ServiceModel->find($id);

                    if ($services) {
                        $ServiceModel->delete($id);

                        $response = [
                            'success' => true,
                            'message' => 'User deleted successfully.'
                        ];
                    } 
                 return $this->response->setJSON($response);
                }


            public function UpdateServicesstatus($id)
            {
                $ServiceModel = new AddServiceModel();
                $data = $ServiceModel->find($id);
                // $Unitprice = new UnitModel();
                // $data = $Unitprice->find($id);
            
                $status = $this->request->getPost('status'); 
            
                $updated = $ServiceModel->update($id, ['status' => $status]);
            
                if ($updated) {
                    $response = [
                        'success' => true,
                        'message' => 'Status updated successfully.',
                    ];
                } else {
                    $response = [
                        'success' => false,
                        'message' => 'Failed to update status.',
                    ];
                }
            
                return json_encode($response);
            }
        








// -----Services Pricing--------


public function ServicePricing($id)
{

    $db = \Config\Database::connect();

    $ServicePriceModel = new ServicePriceModel();
    // $data = $ServicePriceModel->findAll();
    $data = $ServicePriceModel->where('services_id', $id)->findAll();
    // print_r($data);
    // die();


    return view('Admin_Template/service_pricing', [
        'data'=>$data,
        'id'=>$id
      
    ]);

}



public function AddServicePricing()
    {
    
        $validation = \Config\Services::validation();

        $rules = [
            'methodName' => 'required',
        ];

        if (! $this->validate($rules)) {

            $response = [
                'methodName' => [
                    'status' => 'required',
                    'message' => 'Please enter a Method name',
                ],
                
            ];
            return json_encode($response);
        }
            $id = $this->request->getPost('id');
            // echo $id;
            // die();
            $ServicePriceModel = new ServicePriceModel();
            $data = [

            'methodName' => $this->request->getPost('methodName'),
            'services_id' => $id,
           
            
            
            ];
            $ServicePriceModel->insert($data);
            
            $data = $ServicePriceModel->findAll();
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

            return view('Admin_Template/service_pricing', [
                'data' => $data,
                'successMessage' => $successMessage,
            ]);
    }


    public function EditServicePricing($id)
    {
        $ServicePriceModel = new ServicePriceModel();
        $data = $ServicePriceModel->find($id);
// echo'<pre>';print_r($data);die();
      return $this->response->setJSON($data);
                // return view('Admin_Template/user');

    }



    public function UpdateServicePricing($id)
    {
        
        $ServicePriceModel = new ServicePriceModel();
        $data = $ServicePriceModel->find($id);

        
        if ($this->request->getMethod() === 'post') {
            $name = $this->request->getPost('methodName');
   
            $data = [
                'methodName' =>$name,
            ];

            $ServicePriceModel->update($id,$data);
            $response = [
                'success' => true,
                'message' => 'Data updated successfully.'
            ];
            return $this->response->setJSON($response);
        }
        $data = $ServicePriceModel->find($id); 
         return view('Admin_Template/service_pricing', ['data' => $data,]);
    }


    


    public function DeleteServicePricing($id)
{
    $ServicePriceModel = new ServicePriceModel();
    $pricing = $ServicePriceModel->find($id);

    if ($pricing) {
        $ServicePriceModel->delete($id);

        $response = [
            'success' => true,
            'message' => 'Pricing deleted successfully.',
            'deleted_id' => $id,
        ];
    } else {
        $response = [
            'success' => false,
            'message' => 'Pricing not found.',
        ];
    }

    return $this->response->setJSON($response);
}


public function UpdateServicesPricingStatus($id)
            {
              
                $ServicePriceModel = new ServicePriceModel();
                $data = $ServicePriceModel->find($id);
            
                $status = $this->request->getPost('status'); 
            
                $updated = $ServicePriceModel->update($id, ['status' => $status]);
            
                if ($updated) {
                    $response = [
                        'success' => true,
                        'message' => 'Status updated successfully.',
                    ];
                } else {
                    $response = [
                        'success' => false,
                        'message' => 'Failed to update status.',
                    ];
                }
            
                return json_encode($response);
            }


// ---Addons Services---


public function AddonsService($id)
{

    $db = \Config\Database::connect();

    $Addons = new AddonsModel();
    $data = $Addons->where('services_id', $id)->findAll();

    return view('Admin_Template/addons_service', [
        'data'=>$data,
        'id'=>$id,
        
      
    ]);

}


public function AddAddonsService()
    {
    
        $validation = \Config\Services::validation();

        $rules = [
            'titleName' => 'required',
            'duration' => 'required',
            // 'image' =>'required',
            'price' => 'required',
            'maxqty' => 'required',
            'mulqty' =>'required',
        ];

        if (! $this->validate($rules)) {

            $response = [
                'titleName' => [
                    'status' => 'required',
                    'message' => 'Please enter your titleName',
                ],
                'duration' => [
                    'status' => 'required',
                    'message' => 'Please enter your duration',
                ],
                // 'image' => [
                //     'status' => 'required',
                //     'message' => 'Please insert a image',
                // ],
                'price' => [
                    'status' => 'required',
                    'message' => 'Please enter your price',
                ],
                'maxqty' => [
                    'status' => 'required',
                    'message' => 'Please enter your maxqty',
                ],
                'mulqty' => [
                    'status' => 'required',
                    'message' => 'Please enter your mulqty',
                ],
                
            ];
            return json_encode($response);
        }

        $Addons = new AddonsModel();
        $id = $this->request->getPost('id');

        $images = $this->request->getFile('image');
        if ($images->isValid() && !$images->hasMoved()) {
            $images->move(ROOTPATH . 'public/addons_service_photos');
        }
        $data = [

            'addon_title' => $this->request->getPost('titleName'),
            'duration' => $this->request->getPost('duration'),
            'addons_service_image' => $images->getName(),
            'basic_price' => $this->request->getPost('price'),
            'max_qty' => $this->request->getPost('maxqty'),
            'multiple_qty' => $this->request->getPost('mulqty'),
            'services_id'=>$id,
            
            
        ];
            $Addons->insert($data);
            $data = $Addons->findAll();
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

            return view('Admin_Template/addons_service', [
                'data' => $data,
                'successMessage' => $successMessage,
            ]);
    }



    public function EditAddonsService($id)
    {
        $Addons = new AddonsModel();
        $data = $Addons->find($id);
// echo'<pre>';print_r($data);die();
      return $this->response->setJSON($data);
                // return view('Admin_Template/user');

    }




    public function UpdateAddonsService($id) 
    {

        $Addons = new AddonsModel();
        $data = $Addons->find($id);

        $images = $this->request->getFile('image');
        if ($images->isValid() && !$images->hasMoved()) {
            $images->move(ROOTPATH . 'public/addons_service_photos');
        }
        
        if ($this->request->getMethod() === 'post') {
            $name = $this->request->getPost('titleName');
            $duration = $this->request->getPost('duration');
            $price = $this->request->getPost('price');
            $maxqty = $this->request->getPost('maxqty');
            $mulqty = $this->request->getPost('mulqty');


            $data = [
                'addon_title' =>$name,
                'duration' =>$duration,
                // 'addons_service_image' => $images->getName(),
                'basic_price' =>$minlimit,
                'max_qty' =>$maxlimit,
                'multiple_qty' =>$optionallabel,
                

            ];

            $Addons->update($id,$data);
            $response = [
                'success' => true,
                'message' => 'Data updated successfully.'
            ];
            return $this->response->setJSON($response);
        }
        $data = $Addons->find($id); 
        return view('Admin_Template/unit_pricing', ['data' => $data,]);

       }



    public function DeleteAddonsService($id)
    {
       
      
        $Addons = new AddonsModel();
        $data = $Addons->find($id);
        

        if ($data) {
            $Addons->delete($id);

            $response = [
                'success' => true,
                'message' => 'User deleted successfully.'
            ];
        } 
     return $this->response->setJSON($response);
    }


    public function UpdateServicesAddonsStatus($id)
            {
              
                
                $Addons = new AddonsModel();
                $data = $Addons->find($id);
            
                $status = $this->request->getPost('status'); 
            
                $updated = $Addons->update($id, ['status' => $status]);
            
                if ($updated) {
                    $response = [
                        'success' => true,
                        'message' => 'Status updated successfully.',
                    ];
                } else {
                    $response = [
                        'success' => false,
                        'message' => 'Failed to update status.',
                    ];
                }
            
                return json_encode($response);
            }




    


    // ----Units Pricing---


    public function UnitPricing($id)
    {

    $db = \Config\Database::connect();

    $Unitprice = new UnitModel();
    // $data = $Unitprice->findAll();
    $data = $Unitprice->where('services_pricing_id', $id)->findAll();


    return view('Admin_Template/unit_pricing', [
        'data'=>$data,
        'id'=>$id
      
    ]);

    }


    public function AddUnitPricing()
    {
    
        $validation = \Config\Services::validation();

        $rules = [
            'unitName' => 'required',
            'price' => 'required',
        ];

        if (! $this->validate($rules)) {

            $response = [
                'unitName' => [
                    'status' => 'required',
                    'message' => 'Please enter a unitName',
                ],
                'price' => [
                    'status' => 'required',
                    'message' => 'Please enter a Price',
                ],
                
            ];
            return json_encode($response);
        }
        
        $id = $this->request->getPost('id');
        $Unitprice = new UnitModel(); 
        
        $data = [

            'unit_name' => $this->request->getPost('unitName'),
            'base_price	' => $this->request->getPost('price'),
            // 'status' => $this->request->getPost('status'),
            'services_pricing_id' => $id,
           
            
            
        ];
                $Unitprice->insert($data);
            
            $data = $Unitprice->findAll();
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

            return view('Admin_Template/unit_pricing', [
                'data' => $data,
                'successMessage' => $successMessage,
            ]);
    }

    public function EditUnitPricing($id)
    {
        $Unitprice = new UnitModel();
        $data = $Unitprice->find($id);

      return $this->response->setJSON($data);
                // return view('Admin_Template/user');

    }





            public function UpdateUnitPricing($id) 
            {

                $Unitprice = new UnitModel();
                $data = $Unitprice->find($id);

                
                if ($this->request->getMethod() === 'post') {
                    $name = $this->request->getPost('unitTitle');
                    $duration = $this->request->getPost('duration');
                    $baseprice = $this->request->getPost('baseprice');
                    $minlimit = $this->request->getPost('minlimit');
                    $maxlimit = $this->request->getPost('maxlimit');
                    $optionallabel = $this->request->getPost('optionallabel');
                    $optionalunitsymbol = $this->request->getPost('optionalunitsymbol');


                    $data = [
                        'unit_name' =>$name,
                        'duration' =>$duration,
                        'base_price' =>$baseprice,
                        'min_limit' =>$minlimit,
                        'max_limit' =>$maxlimit,
                        'optional_label' =>$optionallabel,
                        'optional_unit_symbol' =>$optionalunitsymbol,

                    ];

                    $Unitprice->update($id,$data);
                    $response = [
                        'success' => true,
                        'message' => 'Data updated successfully.'
                    ];
                    return $this->response->setJSON($response);
                }
                $data = $Unitprice->find($id); 
                return view('Admin_Template/unit_pricing', ['data' => $data,]);

               }



    public function DeleteUnitPricing($id)
    {
       
        $Unitprice = new UnitModel();
        $data = $Unitprice->find($id);
        

        if ($data) {
            $Unitprice->delete($id);

            $response = [
                'success' => true,
                'message' => 'User deleted successfully.'
            ];
        } 
     return $this->response->setJSON($response);
    }


    public function UpdateUnitStatus($id)
    {
        $Unitprice = new UnitModel();
        $data = $Unitprice->find($id);
    
        $status = $this->request->getPost('status'); 
   
        $updated = $Unitprice->update($id, ['status' => $status]);
    
        if ($updated) {
            $response = [
                'success' => true,
                'message' => 'Status updated successfully.',
            ];
        } else {
            $response = [
                'success' => false,
                'message' => 'Failed to update status.',
            ];
        }
    
        return json_encode($response);
    }

}
