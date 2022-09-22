<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Company_Profile extends CI_Controller
{

    public function index()
    {
        $this->load->view('../views/templates/header.php');
        $this->load->view('main');
        $this->load->view('../views/templates/footer.php');
    }

    public function About()
    {
        $this->load->view('../views/templates/header.php');
        $this->load->view('about');
        $this->load->view('../views/templates/footer.php');
    }

    public function menu()
    {
        $this->load->view('../views/templates/header.php');
        $this->load->view('menu');
        $this->load->view('../views/templates/footer.php');
    }

    public function contact()
    {
        $this->load->view('../views/templates/header.php');
        $this->load->view('contact');
        $this->load->view('../views/templates/footer.php');
    }
}
