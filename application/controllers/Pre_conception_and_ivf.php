<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pre_conception_and_ivf extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    function index()
    {
        // load data into view if needed
        $data['full_bg'] = 'scale9.jpg';
		$data['mobileNav'] = $this->load->view('includes/mobile-nav', NULL, TRUE);
        $this->load->view('pre_conception_and_ivf', $data);
    }
}
