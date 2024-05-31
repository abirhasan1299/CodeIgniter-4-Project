<?php

namespace App\Controllers;
use App\Models\User;
use App\Models\Prayer;

class Authentication extends BaseController
{
    public function dashboard()
    {
        $model= new Prayer();
        
        $data['data']= $model->where('user_id',session()->id)->orderBy('sid','DESC')->findAll(7);

        return view('user/dashboard',$data);
    }
    public function logout()
    {
        
        session()->destroy();
        return redirect()->to(base_url('auth/login'));

    }
    public function login()
    {
        if($this->request->getPost('submit')){

            $email = $this->request->getPost('email');
            $pass = $this->request->getPost('pass');

            $model = new User();

            $data  = $model->where('email',$email)->where('pass',$pass)->first();
            
            if ($data != null) {

                $value = [
                    'id'=>$data['uid'],
                    'fname'=>$data['first'],
                    'lname'=>$data['last'],
                    'email'=>$data['email'],
                    'pass'=>$data['pass'],
                    'login'=>'true'
                ];

                session()->set($value);
                return redirect()->to(base_url('user/dashboard'));
            }else{
                session()->setFlashdata('invalid','Invalid Password or Email');
                return redirect()->to(base_url('auth/login'));
            }
        }

        return view('authentication/login');
    }
    public function forget()
    {
        return view('authentication/forgot-password');
    }

    public function register()
    {
        
        return view('authentication/register');
    }
    public function SaveRegister()
    {
            $fname = $this->request->getPost('fname');
            $lname = $this->request->getPost('lname');
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $rpass = $this->request->getPost('rpass');

            if($rpass!=$password){

                session()->setFlashdata('register','Password not same');
                return redirect()->to(base_url('/auth/register'));

            }else{
                    $model = new User();

                    $data = [
                    'first'=>$fname,
                    'last'=>$lname,
                    'email'=>$email,
                    'pass'=>$password
                ];
                    $model->insert($data);
                    session()->setFlashdata('success','Registration Successful');
                    return redirect()->to(base_url('/auth/login'));
            }

            
        }
    
}

