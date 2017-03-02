<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller{



  function index()
  {
    $data = array(
            'nama' => "Mokhamad Khamdan Khabibi",
            'nim' => "1541180005",
            'alamat' => "Jalan Anggur IX  H7/12 Perum Bugul Permai Pasuruan",
            
            );
    $data["tugas"] = array('087846052909','Hobby Futsal','gsyn153@gmail.com');
    $this->load->view('about',$data);
  }

}
