<?php
    class Helloworld extends CI_Controller{

     public function __construct()
    {
        parent::__construct();
        
        //load model
        $this->load->model('helloworld_model');
    }

        function index()
        {
            $this->load->model('helloworld_model');
 
           $data['result'] = $this->helloworld_model->getData();
            $data['page_title'] = "codeig Hello World App!";
 
            $this->load->view('helloworld_view',$data);
        }
    }
?>
