<?php

  class Posts extends Controller{

    public function __construct(){

        if(!isLoggedIn()){
            redirect('users/login');
        }else{

        }
    }

    public function index(){
        $data = [];

        $this->view('posts/index', $data);
    }

}