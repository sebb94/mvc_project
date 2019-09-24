<?php 

 /* Base controller
  * Load the models and views
  */

  class Controller{

    public function model($model){
       require_once('../app/models/' . $model . '.php');
       return new $model();
    }
      public function view($view, $data = [] ){

        if( file_exists('../app/view/' . $view . '.php') ){
             require_once('../app/view/' . $view . '.php');
        }else{
            die("View does not exist");
        }
      
       return new $model();
    }

  }