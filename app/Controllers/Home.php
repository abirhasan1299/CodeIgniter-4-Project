<?php

namespace App\Controllers;
use App\Models\CommonModel;
use App\Models\EventModel;
use App\Models\PostModel;
use App\Models\Today;
use App\Models\Quote;



class Home extends BaseController
{
    public function index(): string
    {

        $model = new Today();

        $data['data']= $model->orderBy('id','DESC')->findAll(1);

        $event = new EventModel();

        $data['meta'] = $event->orderBy('eid','DESC')->findAll(1);

        $quote = new Quote();
        $data['quote'] = $quote->orderBy('qid','DESC')->findAll(5);

       return view('index',$data);
    }

    public function About()
    {
        return view('about');
    }
    public function writer($id){
        
        $model = new CommonModel();
        $postModel = new PostModel();

        $data['data'] =  $model->where('wsk',$id)->findAll();
        $data['meta'] = $postModel->where('w_sk',$id)->countAllResults();
        $data['write'] = $postModel->where('w_sk',$id)->orderBy('pid','DESC')->findAll();

        return view('writer',$data);
    }
    public function page($id)
    {   

        $model = new PostModel();
        
        $data['meta']=   $model->join('writer','writer.wsk = post.w_sk')->where('pid',$id)->findAll();
        
        return view('page',$data);
    }
    public function discussion(){

        $model = new PostModel();

        $data['data']=   $model->join('writer','writer.wsk = post.w_sk')->findAll();
        
        $data['meta'] = $model->join('writer','writer.wsk = post.w_sk')->orderBy('pid','DESC')->findAll(); 

        return view('discussion',$data);

    }

    public function eventPost(){
        $model  = new EventModel();

        $data['data']= $model->orderBy('eid','DESC')->findAll(1);
        
        return view('event',$data);
    }
}
