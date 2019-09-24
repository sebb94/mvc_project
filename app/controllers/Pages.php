<?php 

 class Pages extends Controller{

    public function __construct(){
        echo "Pages loaded";
    }
    public function about($id){
        echo $id;
    }
    public function index(){
        $this->view('hello');

    }

 }