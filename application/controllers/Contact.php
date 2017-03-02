<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller{



  function index()
  {
    $data['nama'] = "Mokhamad Khamdan Khabibi";
    $this->load->view('contact',$data);
  }

}
