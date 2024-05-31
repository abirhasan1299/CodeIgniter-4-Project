<?php

namespace App\Controllers;
use App\Models\Prayer;

class User extends BaseController
{
    public function pray()
    {
        
            $model = new Prayer();

            $data =[
                'date'=>$this->request->getPost('date'),
                'user_id'=>session()->id,
                'fajr'=>$this->request->getPost('fajr'),
                'duhr'=>$this->request->getPost('duhr'),
                'asr'=>$this->request->getPost('asr'),
                'magrib'=>$this->request->getPost('magrib'),
                'esha'=>$this->request->getPost('esha'),
                'tahajjud'=>$this->request->getPost('tahajjud'),
                'quran'=>$this->request->getPost('quran'),
                'hadith'=>$this->request->getPost('hadith'),
                'bad'=>$this->request->getPost('bad')
            ];
            $model->insert($data);
            session()->setFlashdata('prayer','Prayer Attendence Done !');
            return redirect()->to(base_url('user/dashboard'));
        
    }
}