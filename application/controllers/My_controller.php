<?php
  class My_controller extends CI_Controller
  {
      public function index()
      {
        $this->load->model('user_model');
        $data['result'] = $this->user_model->getAllUser();
        //echo print_r($data['result']);
        //$this->load->view('footer');
        $this->load->view('header', $data);
      }


      public function deleteUser()
      {
         $submitValue = $this->input->post("input_delete");

         if($submitValue == false)
         {
              return;
         }
         $id = $this->input->post("id_delete");
         $this->load->model('user_model');
         $this->user_model->deleteUser($id);
         $this->index();
      }

      public function insertUser()
      {
         $submitValue = $this->input->post("input_insert");

         if($submitValue == false)
         {
              return;
         }
         $name = $this->input->post("name_insert");
         $this->load->model('user_model');
         $this->user_model->insertUser($name);
         $this->index();

       }

       public function editUser()
       {
          $submitValue = $this->input->post("input_edit");

          if($submitValue == false)
          {
               return;
          }
          $name = $this->input->post("name_edit");
          $id = $this->input->post("id_edit");
          $this->load->model('user_model');
          $this->user_model->editUser($id,$name);
          $this->index();
       }




  }

 ?>
