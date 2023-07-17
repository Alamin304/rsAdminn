<?php

namespace App\Controllers;
use App\Models\EmailModel;
use App\Models\BrandModel;
use App\Models\RecaptchModel;


class SettingController extends BaseController
{
    public function settings()
    {
        $brandModel = new BrandModel();
        $data1 = $brandModel->findAll();

        $emailModel = new EmailModel();
        $data2 = $emailModel->findAll();

        $recaptchModel = new RecaptchModel();
        $data = $recaptchModel->findAll();


        return view('Admin_Template/settings', [
            'data' => $data,
            'data1' => $data1,
            'data2' => $data2
        ]);

        // return view('Admin_Template/settings');
    }



    public function update_brand_setting($id)
    {
        
        $brandModel = new BrandModel();
        $data1 = $brandModel->find($id);

        
        if ($this->request->getMethod() === 'post') {
            $logo_dark = $this->request->getfile('logo_dark')->getName();
            $logo_light = $this->request->getfile('logo_light')->getName();
            $favicon = $this->request->getfile('favicon')->getName();
            $title_text = $this->request->getPost('title_text');
            $footer_text = $this->request->getPost('footer_text');
            $default_language = $this->request->getPost('default_language');
            $rtl = $this->request->getPost('SITE_RTL') === 'on' ? 1 : 0;
            $landing_page = $this->request->getPost('display_landing_page') === 'on' ? 1 : 0;
            $signup_page = $this->request->getPost('enable_signup') === 'on' ? 1 : 0;
            $email_verification = $this->request->getPost('email_verification') === 'on' ? 1 : 0;
            $color = $this->request->getPost('color_setting'); 
            $sidebar_setting = $this->request->getPost('cust_theme_bg') === 'on' ? 1 : 0;
            $layout_setting = $this->request->getPost('cust_darklayout') === 'on' ? 1 : 0;
                
            $data1 = [
                'logo_dark' =>$logo_dark,
                'logo_light' => $logo_light,
                'favicon' => $favicon,
                'title_text' => $title_text,
                'footer_text' => $footer_text,
                'default_language' => $default_language,
                'RTL' =>  $rtl,
                'landing_page' => $landing_page,
                'signup_page' => $signup_page,
                'email_verification' => $email_verification,
                'color_setting' => $color,
                'sidebar_setting' => $sidebar_setting,
                'layout_setting' => $layout_setting,

            ];

            $brandModel->update([$id],$data1);
            $response = [
                'success' => true,
                'message' => 'Data updated successfully.'
            ];
            return $this->response->setJSON($response);
        }
        $data1 = $brandModel->find([$id]); 
         return view('Admin_Template/settings', ['data1' => $data1,]);
    }




    // public function brand_setting()
    // {


    //     $validation = \Config\Services::validation();

    //     $rules = [
    //         'title_text' => 'required',
    //         'footer_text' => 'required',
    //         // 'photos' => 'uploaded[photos]|mime_in[photos,image/png,image/jpg,image/jpeg]|max_size[photos,2048]',
            
    //     ];

    //     if (! $this->validate($rules)) {

    //         $response = [
    //             'title_text' => [
    //                 'status' => 'required',
    //                 'message' => 'Please enter your title text',
    //             ],
    //             'footer_text' => [
    //                 'status' => 'required',
    //                 'message' => 'Please enter your footer text',
    //             ],
                
                
    //         ];
    //         return json_encode($response);
    //     }

    //     $brandModel = new BrandModel();

    //     $logo_dark = $this->request->getFile('logo_dark');
    //     if ($logo_dark->isValid() && !$logo_dark->hasMoved()) {
    //         $logo_dark->move(ROOTPATH . 'public/photos');
    //     }

    //     $logo_light = $this->request->getFile('logo_light');
    //     if ($logo_light->isValid() && !$logo_light->hasMoved()) {
    //         $logo_light->move(ROOTPATH . 'public/photos');
    //     }

    //     $favicon = $this->request->getFile('favicon');
    //     if ($favicon->isValid() && !$favicon->hasMoved()) {
    //         $favicon->move(ROOTPATH . 'public/photos');
    //     }


    //     $rtl = $this->request->getPost('SITE_RTL') === 'on' ? 1 : 0;
    //     $landing_page = $this->request->getPost('display_landing_page') === 'on' ? 1 : 0;
    //     $signup_page = $this->request->getPost('enable_signup') === 'on' ? 1 : 0;
    //     $email_verification = $this->request->getPost('email_verification') === 'on' ? 1 : 0;
    //     $sidebar_setting = $this->request->getPost('cust_theme_bg') === 'on' ? 1 : 0;
    //     $layout_setting = $this->request->getPost('cust_darklayout') === 'on' ? 1 : 0;

    //     $data = [

    //         'logo_dark' => $logo_dark->getName(),
    //         'logo_light' => $logo_light->getName(),
    //         'favicon' =>$favicon->getName(),
    //         'title_text' => $this->request->getPost('title_text'),
    //         'footer_text' => $this->request->getPost('footer_text'),
    //         'default_language' => $this->request->getPost('default_language'),
    //         'RTL' =>  $rtl,
    //         'landing_page' => $landing_page,
    //         'signup_page' => $signup_page,
    //         'email_verification' => $email_verification,
    //         // 'color_setting' => $this->request->getPost('mail_encryption'),
    //         'sidebar_setting' => $sidebar_setting,
    //         'layout_setting' => $layout_setting,
            
    //     ];
    //             $brandModel->insert($data);
            
    //         $data = $brandModel->findAll();
    //         // echo '<pre>';
    //         // print_r($data);
    //         // die();

    //         $response = [
    //             'success' => [
    //                 'status' => 'ok',
    //                 'message' => 'Data inserted successfully.',
    //             ],
    //         ];
    //         return json_encode($response);

    //         return view('Admin_Template/settings', [
    //             'data' => $data,
    //             'successMessage' => $successMessage,
    //         ]);
    // }

        // return view('Admin_Template/settings');
    


        public function update_email_setting($id)
        {
            
            $updateemailModel = new EmailModel();
            $data2 = $updateemailModel->find($id);

            
            if ($this->request->getMethod() === 'post') {
                $mail_driver = $this->request->getPost('mail_driver');
                $mail_host = $this->request->getPost('mail_host');
                $mail_port = $this->request->getPost('mail_port');
                $mail_username = $this->request->getPost('mail_username');
                $mail_password = $this->request->getPost('mail_password');
                $mail_encryption = $this->request->getPost('mail_encryption');
                $mail_from_address = $this->request->getPost('mail_from_address');
                $mail_from_name = $this->request->getPost('mail_from_name');
               
                $data2 = [
                    'mail_driver' =>$mail_driver,
                    'mailhost' => $mail_host,
                    'mailport' => $mail_port,
                    'mailuser_name' => $mail_username,
                    'mail_password' => $mail_password,
                    'mail_encryption' => $mail_encryption,
                    'mail_address' => $mail_from_address,
                    'mail_name' => $mail_from_name,
                   

                ];

                $updateemailModel->update([$id],$data2);
                $response = [
                    'success' => true,
                    'message' => 'Data updated successfully.'
                ];
                return $this->response->setJSON($response);
            }
            $data2 = $updateemailModel->find([$id]); 
             return view('Admin_Template/settings', ['data2' => $data2,]);
        }



    // public function email_setting()
    // {


    //     $validation = \Config\Services::validation();

    //     $rules = [
    //         'mail_driver' => 'required',
    //         'mail_host' => 'required',
    //         'mail_port' => 'required',
    //         'mail_username' =>'required',
    //         'mail_password' => 'required',
    //         'mail_encryption' => 'required',
    //         'mail_from_address' =>'required',
    //         'mail_from_name' => 'required',
    //     ];

    //     if (! $this->validate($rules)) {

    //         $response = [
    //             'mail_driver' => [
    //                 'status' => 'required',
    //                 'message' => 'Please enter your mail driver',
    //             ],
    //             'mail_host' => [
    //                 'status' => 'required',
    //                 'message' => 'Please enter your mail host',
    //             ],
    //             'mail_port' => [
    //                 'status' => 'required',
    //                 'message' => 'Please enter your mail port',
    //             ],
    //             'mail_username' => [
    //                 'status' => 'required',
    //                 'message' => 'Please enter your mail username',
    //             ],
    //               'mail_password' => [
    //                 'status' => 'required',
    //                 'message' => 'Please enter your mail password',
    //             ],
    //             'mail_encryption' => [
    //                 'status' => 'required',
    //                 'message' => 'Please enter your mail encryption',
    //             ],
    //             'mail_from_address' => [
    //                 'status' => 'required',
    //                 'message' => 'Please enter your mail from address',
    //             ],
    //               'mail_from_name' => [
    //                 'status' => 'required',
    //                 'message' => 'Please enter your mail from name',
    //             ],
                
    //         ];
    //         return json_encode($response);
    //     }

    //     $emailModel = new EmailModel();
    //     $data = [

    //         'mail_driver' => $this->request->getPost('mail_driver'),
    //         'mailhost' => $this->request->getPost('mail_host'),
    //         'mailport' => $this->request->getPost('mail_port'),
    //         'mailuser_name' => $this->request->getPost('mail_username'),
    //         'mail_password' => $this->request->getPost('mail_password'),
    //         'mail_encryption' => $this->request->getPost('mail_encryption'),
    //         'mail_address' => $this->request->getPost('mail_from_address'),
    //         'mail_name' => $this->request->getPost('mail_from_name'),
         
            
            
            
    //     ];
    //             $emailModel->insert($data);
            
    //         $data = $emailModel->findAll();
    //         // echo '<pre>';
    //         // print_r($data);
    //         // die();

    //         $response = [
    //             'success' => [
    //                 'status' => 'ok',
    //                 'message' => 'Data inserted successfully.',
    //             ],
    //         ];
    //         return json_encode($response);

    //         return view('Admin_Template/settings', [
    //             'data' => $data,
    //             'successMessage' => $successMessage,
    //         ]);
    // }

        // return view('Admin_Template/settings');
    






        public function update_recaptch_setting($id)
        {
            
            $recaptchModel = new RecaptchModel();
            $data = $recaptchModel->find($id);
            // echo '<pre>';
            // print_r($data);
            // die();
            
            
            if ($this->request->getMethod() === 'post') {
                $key = $this->request->getPost('google_recaptcha_key');
                $secret = $this->request->getPost('google_recaptcha_secret');
            
               
    
                $data = [
                    'google_key' => $key,
                    'google_secret' => $key,
                    
                ];
    
    
                $recaptchModel->update([$id],$data);
                
                $response = [
                    'success' => true,
                    'message' => 'Data updated successfully.'
                ];
    
                return $this->response->setJSON($response);
    
            }
            $data = $updattagModel->find([$id]); 
        
             return view('Admin_Template/settings', ['data' => $data,]);
        }

    // public function recaptch_setting()
    // {

    //     $validation = \Config\Services::validation();

    //     $rules = [
    //         'google_recaptcha_key' => 'required',
    //         'google_recaptcha_secret' => 'required',
           
            
    //     ];

    //     if (! $this->validate($rules)) {

    //         $response = [
    //             'google_recaptcha_key' => [
    //                 'status' => 'required',
    //                 'message' => 'Please enter your google recaptcha key',
    //             ],
    //             'google_recaptcha_secret' => [
    //                 'status' => 'required',
    //                 'message' => 'Please enter your google recaptcha secret',
    //             ],
                
                
    //         ];
    //         return json_encode($response);
    //     }

    //     $recaptchModel = new RecaptchModel();

    //     $data = [
    //         'google_key' => $this->request->getPost('google_recaptcha_key'),
    //         'google_secret' => $this->request->getPost('google_recaptcha_secret'),
      
            
    //     ];
    //             $recaptchModel->insert($data);
            
    //         $data = $recaptchModel->findAll();
    //         // echo '<pre>';
    //         // print_r($data);
    //         // die();

    //         $response = [
    //             'success' => [
    //                 'status' => 'ok',
    //                 'message' => 'Data inserted successfully.',
    //             ],
    //         ];
    //         return json_encode($response);

    //         return view('Admin_Template/settings', [
    //             'data' => $data,
    //             'successMessage' => $successMessage,
    //         ]);
    // }


    //     return view('Admin_Template/settings');
    


}
