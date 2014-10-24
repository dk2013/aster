<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AC_Controller extends CI_Controller {
//	private $_title;
	private $_view = null;
	function __construct() {
		parent::__construct();
        $this->_view = new stdClass();
		$this->_view->author = 'Black RIDER';
	}
	/*
	public function Set_title ($title) {
		$this->_title = $title;
	}
	public function Get_title () {
		return $this->_title;
	}
	*/
	public function Get_view() {
		return $this->_view;
	}
}
