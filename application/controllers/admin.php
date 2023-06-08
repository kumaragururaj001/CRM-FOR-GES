<?php

class admin extends CI_Controller {
    public function index() {
        $this->load->view('admin/dashboard');
    }
    public function dashboard() {
        $this->load->view('admin/dashboard');
    }
}

?>