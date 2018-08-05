<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Mental_health extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    function index()
    {
        $bg              = array(
            'scale1.jpg',
            'scale2.jpg',
            'scale3.jpg',
            'scale4.jpg',
            'scale5.jpg'
        ); // array of filenames
        $i               = rand(0, count($bg) - 1);
        $selectedBg      = $bg[$i];
        $data['full_bg'] = $selectedBg;
		$data['mobileNav'] = $this->load->view('includes/mobile-nav', NULL, TRUE);
        $this->load->view('Mental_health', $data);
    }
}