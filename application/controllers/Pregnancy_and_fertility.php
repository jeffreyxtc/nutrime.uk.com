<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pregnancy_and_fertility extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    function index()
    {
        // load data into view if needed
        $data['full_bg'] = 'scale4.jpg';
		$data['mobileNav'] = $this->load->view('includes/mobile-nav', NULL, TRUE);
        $this->load->view('pregnancy_and_fertility', $data);
    }
}
