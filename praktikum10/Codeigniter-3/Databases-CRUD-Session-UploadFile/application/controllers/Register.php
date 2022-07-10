<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('User_model');   
   }
   public function index()
   {
      $data[] = '';

      $this->load->view('form/register', $data);
   }

   public function save()
   {
      $this->load->model('User_model', 'user');
      $this->load->helper('date');
      
      $id = uniqid();
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $email = $this->input->post('email');
      $role = $this->input->post('role');
      $now = time();
      $create_at = unix_to_human($now, TRUE, 'us');
      $last_login = unix_to_human($now, TRUE, 'us');

      $data = array(
         'id'           => $id,
         'username'     => $username,
         'password'     => md5($password),
         'email'        => $email,
         'role'         => $role,
         'created_at'   => $create_at,
         'last_login'   => $last_login
      );
      // $data_user[] = $id;
      // $data_user[] = $username;
      // $data_user[] = $password;
      // $data_user[] = $email;
      // $data_user[] = $role;
      // $data_user[] = $create_at;
      // $data_user[] = $last_login;

      // $this->user->save($data_user);
      $this->User_model->input_data($data, 'user');
      redirect(base_url() . 'register/sukses?username=' . $username, 'refresh');
   }

   public function sukses()
   {
      $this->load->model('user_model', 'user');

      $data[] = '';

      $this->load->view('form/sukses', $data);
   }
}
