<?php 

 class Pages extends Controller{

    public function __construct(){
        echo "Pages loaded";
    }
    public function about(){
        $data = [
            'title' => 'About'
        ];
          $this->view('pages/about',$data);
    }
    public function index(){
        $data = [
            'title' => 'Welcome'
        ];
        $this->view('pages/index', $data);


    }

 }