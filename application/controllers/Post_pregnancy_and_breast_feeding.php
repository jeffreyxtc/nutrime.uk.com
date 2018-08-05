<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Post_pregnancy_and_breast_feeding extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    function index()
    {
        // load data into view if needed
        $data['full_bg'] = 'scale8.jpg';
		$data['mobileNav'] = $this->load->view('includes/mobile-nav', NULL, TRUE);
        $this->load->view('post_pregnancy_and_breast_feeding', $data);
    }
}
