<?php 

 class Pages extends Controller{

   
    public function __construct(){
 
    }
    public function about(){
        $data = [
            'title' => 'About',
             'description' => 'App to share posts with other users'
        ];
          $this->view('pages/about',$data);
    }
    public function index(){
        
        $data = [
            'title' => 'Welcome',
            'description' => 'Simple social netword build on PHP framework'
        ];

        $this->view('pages/index', $data);


    }

 }