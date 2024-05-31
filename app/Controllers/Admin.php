<?php

namespace App\Controllers;

use App\Models\CommonModel;
use App\Models\PostModel;
use App\Models\Today;
use App\Models\EventModel;
use App\Models\Quote;

class Admin extends BaseController
{
    public function index()
    {
        return view('admin/index');
    }
    public function quotePost()
    {
        if ($this->request->getPost('submit')) {

            $content = $this->request->getPost('content');
            $ref = $this->request->getPost('ref');
            
            $data = [
                'content'=>$content,
                'ref'=>$ref,
            ];
            
             $model = new Quote();
             $model->insert($data);
             return redirect()->to(base_url('admin/quote'));

        }
    }
    public function quote()
    {
        return view('admin/quote');
    }
    public function EventPost()
    {
        if ($this->request->getPost('submit')) {

            $title = $this->request->getPost('title');
            $des = $this->request->getPost('des');
            $date = $this->request->getPost('date');
            $img = $this->request->getFile('img');
            $place = $this->request->getPost('place');
            
            if($img->isValid() && ! $img->hasMoved()){

                $newName = $img->getName();
                $img->move('./public/eventImage/',$newName);
            
            }
            
            $data = [
                'title'=>$title,
                'des'=>$des,
                'date'=>$date,
                'place'=>$place,
                'img'=>$img->getName()
            ];
            
             $model = new EventModel();
             $model->insert($data);
             return redirect()->to(base_url('admin/event'));

        }
     
    }
    public function Event()
    {
           return view('admin/event');
    }
     public function PostDel($id)
    {
        $model = new PostModel();

        $model->where('pid',$id)->delete();

        return redirect()->to(base_url('admin/post-list'));
    }

    public function WriterDel($wsk)
    {
        $model = new CommonModel();

        $model->where('wsk',$wsk)->delete();

        return redirect()->to(base_url('admin/writer-list'));
    }
    public function WriterEditDone()
    {
        if ($this->request->getPost('submit')) {
            $data = [
                'name'=>$this->request->getPost('name'),
                'edu'=>$this->request->getPost('education'),
                'nat'=>$this->request->getPost('nationality'),
                'about'=>$this->request->getPost('des'),
            ];
                 $wsk = $this->request->getPost('wsk');
                 $model = new CommonModel();
                 $model->set($data)->where('wsk',$wsk)->update();

                return redirect()->to(base_url('admin/writer-list'));
        }
    }
    public function WriterEdit($id)
    {

        $model = new CommonModel();

        $data['data'] = $model->where('wsk',$id)->findAll();

        return view('admin/writer_edit',$data);
    }
    public function WriterList(){
        $model = new CommonModel();

        $data['data'] = $model->findAll();

        return view('admin/writerlist',$data);
    }

    public function postEditDone()
    {
            if ($this->request->getPost('submit')) {
                    $model = new PostModel();

                    $value = [
                        'title'=>$this->request->getPost('title'),
                        'des'=>$this->request->getPost('des')
                    ];
            
                 $id = $this->request->getPost('id');
                 $model->set($value)->where('pid',$id)->update();

                return redirect()->to(base_url('admin/post-list'));
        
            }
    }
    public function postEdit($id)
    {

        $model = new PostModel();

        

        $data['data'] = $model->where('pid',$id)->findAll();

        return view('admin/post-edit',$data);
    }

    public function postList(){
        $model = new PostModel();

        $data['data'] = $model->findAll();

        return view('admin/postlist',$data);
    }
    
    public function adminLogin()
    {
        if ($this->request->getPost('submit')) {
            $name = $this->request->getPost('username');
            $pass = $this->request->getPost('password');

            if ($pass=='Abir@Hasan_2024' && $name == 'AdminStation') {
                    $data = [
                        'user'=>'admin',
                        'password'=>'Abir@Hasan_2024',
                        'adminLogged'=>'true'
                    ];
                    session()->set($data);
                    return redirect()->to(base_url('admin/home'));
            }else{
                session()->setFlashdata('admin','Verification Error');
                return redirect()->to(base_url('admin/'));           
            }
        }
    }
    
    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url());    
    }
    public function home()
    {
        return view('admin/home');
    }

    public function addPost()
    {

        $model = new CommonModel();

        $data['value'] =  $model->findAll();

        if($this->request->getPost('submit')){

            date_default_timezone_set("Asia/Dhaka");

            $title = $this->request->getPost('title');
            $des = $this->request->getPost('about');
            $w_sk = $this->request->getPost('w_sk');
            $created_at = date('F d, Y H:i:s');

            $values = [
                'title'=>$title,
                'w_sk'=>$w_sk,
                'des'=>$des,
                'created_at'=>$created_at
            ];

            $postModel = new PostModel();
            $postModel->insert($values);

            return redirect()->to(base_url('admin/home'));

        }

        return view('admin/post',$data);
    }
    
    public function addWriter()

    {

        if ($this->request->getPost('submit')) {

            $model = new CommonModel;

            $name = $this->request->getPost('name');
            $edu = $this->request->getPost('education');
            $nat = $this->request->getPost('nationality');
            $des = $this->request->getPost('des');
            $img = $this->request->getFile('img');
            $wsk =   $this->request->getPost('wsk');

            if($img->isValid() && ! $img->hasMoved()){

                $newName = $img->getName();
                $img->move('./public/writerImage/',$newName);
            
            }
            
            $data = [
                'name'=>$name,
                'edu'=>$edu,
                'nat'=>$nat,
                'des'=>$des,
                'img'=>$img->getName(),
                'wsk'=>$wsk,
            ];

            $model->insert($data);
            return view('admin/add_writer');

        }

        return view('admin/add_writer');
    }
    public function today()
    {

         if($this->request->getPost('submit')){

            date_default_timezone_set("Asia/Dhaka");

            $text = $this->request->getPost('text');
            $created_at = date('F d, Y H:i:s');

            $values = [
                'text'=>$text,
                'time'=>$created_at
            ];

            $postModel = new Today();
            $postModel->insert($values);

            return redirect()->to(base_url('/admin/home'));
        }

        return view('admin/today');
    }
}

