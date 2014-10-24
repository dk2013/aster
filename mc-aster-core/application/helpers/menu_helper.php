<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('menu_active'))
{
    function menu_active($menu_name, $controller_name)
    {
		if(empty($menu_name)) {
			return '';
		}
		if(empty($controller_name)) {
			return '';
		}
		if($menu_name === $controller_name) {
			return 'class="active"';
		} else {
			return '';
		}
    }   
}