<?php
/*
Каталог книг.
Автор: Стаценко Владимир
site: http://www.simplecoding.org
*/
class Home extends AC_Controller {
	
	function __construct() {
		parent::__construct();
		//$this->output->enable_profiler(TRUE);
	}
	public function index() {
		
		// set meta tags
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
			'title'							=> 'Сайт международной маркетинговой компании «Aster»',
			'description'					=> 'Компания ASTER предлагает уникальную продукцию, созданную на основе древних рецептов китайской медицины, которая эффективно укрепляет здоровье, иммунитет, не имеет противопоказаний и передозировок.',
			'keywords'						=> 'китайская, медицина, здоровье, иммунитет, бады, лекарства, компания, ASTER, маркетинг, сетевой, бизнес, красота, болезнь, лечение, диета, похудение',
			'view'							=> $this->Get_view(),
			'controller_name'				=> __CLASS__,
			'side_navigation'				=> $side_navigation,
			'google_analytics'				=> $google_analytics,
			'yandex_metrika'				=> $yandex_metrika,
			'counters'						=> $counters,
		);
		$this->load->view("home", $page_data);
	}
}