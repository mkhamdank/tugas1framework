<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller{

  public function index()
  {
    echo "<h1>Hello World</h1>";
  }

  public function category($halaman)
  {
    echo "<h1>Halaman Category ".$halaman."</h1>";
  }
}
