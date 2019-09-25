<?php 

 class Pages extends Controller{

   
    public function __construct(){
        echo "Pages loaded";
        $this->postModel = $this->model("Post");
    }
    public function about(){
        $data = [
            'title' => 'About'
        ];
          $this->view('pages/about',$data);
    }
    public function index(){
         $posts = $this->postModel->getPosts();
        $data = [
            'title' => 'Welcome',
            'posts' => $posts
        ];

       

        $this->view('pages/index', $data);


    }

 }