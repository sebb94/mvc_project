<?php 

 class Pages extends Controller{

    public function __construct(){
        echo "Pages loaded";
    }
    public function about(){
          $this->view('pages/about');
    }
    public function index(){
        $data = [
            'title' => 'Welcome'
        ];
        $this->view('pages/index', $data);

    }

 }