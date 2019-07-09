<?php
if( ! defined('BASEPATH'))
	exit('No direct script access allowed');

/**
 * 
 */
class E404 extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	function index()
	{
		$this->load->view('v_404.php');
	}
}
?>