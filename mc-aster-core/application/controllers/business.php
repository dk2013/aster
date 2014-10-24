<?php

class Business extends AC_Controller {
	
	function __construct() {
		parent::__construct();
	}
	
	public function Index() {
		$side_navigation_page_data = array();
		$side_navigation = $this->load->view("side_navigation", $side_navigation_page_data, true);
		$google_enable = $this->config->item('google_enable');
		if(!empty($google_enable)) {
			$google_analytics = $this->config->item('google_code');
		} else {
			$google_analytics = null;
		}
		$yandex_enable = $this->config->item('yandex_enable');
		if(!empty($yandex_enable)) {
			$yandex_metrika = $this->config->item('yandex_code');
		} else {
			$yandex_metrika = null;
		}
		// counters
		$counters_enable = $this->config->item('counters_enable');
		if(!empty($counters_enable)){
			$counters = $this->config->item('counters');
		} else {
			$counters = null;
		}
		$page_data = array(
			'title'							=> 'Бизнес в маркетинговой компании «Aster». Партнерам',
			'description'					=> 'Компания ASTER предлагает эффективный бизнес в рамках компании.',
			'keywords'						=> 'компания, ASTER, маркетинг, сетевой, бизнес, партнер, продукция, тренинги, международный, система',
			'view'							=> $this->Get_view(),
			'controller_name'				=> __CLASS__,
			'side_navigation'				=> $side_navigation,
			'google_analytics'				=> $google_analytics,
			'yandex_metrika'				=> $yandex_metrika,
			'counters'						=> $counters,
		);
		$this->load->view("business", $page_data);
	}
	
}