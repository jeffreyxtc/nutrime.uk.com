<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contact extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    function index()
    {
        // load data into view if needed
        $data['full_bg'] = 'scale1.jpg';
		$data['mobileNav'] = $this->load->view('includes/mobile-nav', NULL, TRUE);
        $this->load->view('contact', $data);
    }
}
