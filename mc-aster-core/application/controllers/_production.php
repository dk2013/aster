<?php

class Production extends AC_Controller {
	
	function __construct() {
		parent::__construct();
		//$this->output->enable_profiler(TRUE);
	}
	
	public function Cordyceps_Lingzhi() {
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
			'title'							=> 'Биоактивный экстракт Кордицепс и Линчжи. Эликсир бога. Ценнейшее средство Китайской медицины',
			'description'					=> 'Главное достоинство экстракта Кордицепс и Линчжи заключается в том, что он является системным регулятором, то есть способствует комплексному оздоровлению организма и восстановлению функциональной активности всех его органов и систем.',
			'keywords'						=> 'китайская, медицина, здоровье, иммунитет, бады, лекарства, линчжи, кордицепс, грибы, профилактика, аллергия, компания, ASTER, маркетинг, сетевой, бизнес, красота, болезнь, лечение',
			'view'							=> $this->Get_view(),
			'controller_name'				=> __CLASS__,
			'side_navigation'				=> $side_navigation,
			'google_analytics'				=> $google_analytics,
			'yandex_metrika'				=> $yandex_metrika,
			'counters'						=> $counters,
		);
		$this->load->view("production/cordyceps_lingzhi", $page_data);
	}
	
	public function Propolis_Lingzhi() {
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
			'title'							=> 'Биоактивный экстракт Прополис и Линчжи. Линчжи – дарит бессмертие',
			'description'					=> 'Прополис и Линчжи способствует комплексному оздоровлению организма и восстановлению естественного уровня иммунной защиты. Экстракт рекомендован к регулярному употреблению для повышения жизненного тонуса и особенно эффективен для профилактики и при лечении вирусно-бактериальных заболеваний.',
			'keywords'						=> 'китайская, медицина, здоровье, иммунитет, бады, лекарства, линчжи, прополис, грибы, профилактика, аллергия, экстракт, энергия, компания, ASTER, маркетинг, сетевой, бизнес, красота, болезнь, лечение',
			'view'							=> $this->Get_view(),
			'controller_name'				=> __CLASS__,
			'side_navigation'				=> $side_navigation,
			'google_analytics'				=> $google_analytics,
			'yandex_metrika'				=> $yandex_metrika,
			'counters'						=> $counters,
		);
		$this->load->view("production/propolis_lingzhi", $page_data);
	}
	public function Black_Pearl_Cordyceps() {
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
			'title'							=> 'Биоактивный экстракт Черная жемчужина и Кордицепс. Женская формула китайской медицины',
			'description'					=> 'Рецепт данного экстракта издавна известен как женская формула из-за благотворного влияния на мочевыделительную и репродуктивную системы женского организма.',
			'keywords'						=> 'китайская, медицина, здоровье, иммунитет, бады, лекарства, черная, жемчужина,  кордицепс, грибы, профилактика, гормональный, тонизирующий, компания, ASTER, маркетинг, сетевой, бизнес, красота, болезнь, лечение',
			'view'							=> $this->Get_view(),
			'controller_name'				=> __CLASS__,
			'side_navigation'				=> $side_navigation,
			'google_analytics'				=> $google_analytics,
			'yandex_metrika'				=> $yandex_metrika,
			'counters'						=> $counters,
		);
		$this->load->view("production/black_pearl_cordyceps", $page_data);
	}
	
	public function Ocean_pride() {
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
			'title'							=> 'Спирулина. Мягкие гелевые капсулы "Гордость океана"',
			'description'					=> 'Спирулина: комплекс аминокислот, минералов и витаминов, которые представляют собой набор всех питательных веществ, необходимых человеческому организму для нормальной жизнедеятельности.',
			'keywords'						=> 'китайская, медицина, здоровье, иммунитет, бады, лекарства, спирулина, витамины, аминокислот, микроводоросли, профилактика, компания, ASTER, маркетинг, сетевой, бизнес, красота, болезнь, лечение',
			'view'							=> $this->Get_view(),
			'controller_name'				=> __CLASS__,
			'side_navigation'				=> $side_navigation,
			'google_analytics'				=> $google_analytics,
			'yandex_metrika'				=> $yandex_metrika,
			'counters'						=> $counters,
		);
		$this->load->view("production/ocean_pride", $page_data);
	}
	
	public function Golden_Pearl() {
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
			'title'							=> 'Кальций. Мягкие гелевые капсулы "Золотая жемчужина"',
			'description'					=> 'Гелевые капсулы Золотая жемчужина изготовлены на основе натурального жемчуга. Главная ценность жемчуга заключается в высоком содержании кальция, присутствие которого в достаточном количестве имеет огромное значение для здоровья организма.',
			'keywords'						=> 'китайская, медицина, здоровье, иммунитет, бады, лекарства, кальций, жемчужина, кости, микроэлемент, остеопороз, витамины, профилактика, компания, ASTER, маркетинг, сетевой, бизнес, красота, болезнь, лечение',
			'view'							=> $this->Get_view(),
			'controller_name'				=> __CLASS__,
			'side_navigation'				=> $side_navigation,
			'google_analytics'				=> $google_analytics,
			'yandex_metrika'				=> $yandex_metrika,
			'counters'						=> $counters,
		);
		$this->load->view("production/golden_pearl", $page_data);
	}
	
	public function Light_Dream() {
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
			'title'							=> 'Лецитин. Мягкие гелевые капсулы "Светлая мечта"',
			'description'					=> 'Основное назначение мягких гелевых капсул "Светлая мечта" заключается в том, чтобы обеспечить человеческому организму необходимую питательную поддержку в сложных условиях современной жизни.',
			'keywords'						=> 'китайская, медицина, здоровье, иммунитет, бады, лекарства, лецитин, нервная, линчжи, система, головной, мозг, память, мышление, профилактика, компания, ASTER, маркетинг, сетевой, бизнес, красота, болезнь, лечение',
			'view'							=> $this->Get_view(),
			'controller_name'				=> __CLASS__,
			'side_navigation'				=> $side_navigation,
			'google_analytics'				=> $google_analytics,
			'yandex_metrika'				=> $yandex_metrika,
			'counters'						=> $counters,
		);
		$this->load->view("production/light_dream", $page_data);
	}
	
	public function Vital_Energy() {
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
			'title'							=> 'Мягкие гелевые капсулы "Энергия жизни"',
			'description'					=> 'Мягкие гелевые капсулы "Энергия жизни", основными компонентами которых являются экстракты листьев гинкго билобы и прополиса, благодаря своему сложному составу оказывают мощное антиоксидантное действие и защищают организм от негативного воздействия внешних факторов.',
			'keywords'						=> 'китайская, медицина, здоровье, иммунитет, бады, лекарства, прополис, экстракт, гинкго, билоба, антиоксидант, профилактика, компания, ASTER, маркетинг, сетевой, бизнес, красота, болезнь, лечение',
			'view'							=> $this->Get_view(),
			'controller_name'				=> __CLASS__,
			'side_navigation'				=> $side_navigation,
			'google_analytics'				=> $google_analytics,
			'yandex_metrika'				=> $yandex_metrika,
			'counters'						=> $counters,
		);
		$this->load->view("production/vital_energy", $page_data);
	}
	
	public function Dragon_Power() {
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
			'title'							=> 'Мягкие гелевые капсулы "Сила дракона". Мужская сила и здоровье',
			'description'					=> 'В основе сложного состава мягких гелевых капсул "Сила дракона" - экстракт плодов карликовой пальмы, оказывающий тонизирующий эффект на мужскую репродуктивную систему и обеспечивающий мужской организм оптимальной поддержкой.',
			'keywords'						=> 'китайская, медицина, здоровье, иммунитет, бады, лекарства, пальма, экстракт, цистеин, витамин, дракон, мужская, потенция, предстательная, железа, простата, гормональный, тонизирующий, профилактика, компания, ASTER, маркетинг, сетевой, бизнес, красота, болезнь, лечение',
			'view'							=> $this->Get_view(),
			'controller_name'				=> __CLASS__,
			'side_navigation'				=> $side_navigation,
			'google_analytics'				=> $google_analytics,
			'yandex_metrika'				=> $yandex_metrika,
			'counters'						=> $counters,
		);
		$this->load->view("production/dragon_power", $page_data);
	}
	
	public function First_Fort() {
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
			'title'							=> 'Чайный бальзам "Лучшая защита".',
			'description'					=> 'Сбалансированный состав обеспечивает системное оздоровительное воздействие на организм, особенно на кровеносную систему, органы желудочно-кишечного тракта, почки и печень.',
			'keywords'						=> 'китайская, медицина, здоровье, иммунитет, бады, лекарства, чай, почки, линчжи, целебный, сорт, зеленый, корень, защита, сбор, профилактика, компания, ASTER, маркетинг, сетевой, бизнес, красота, болезнь, лечение',
			'view'							=> $this->Get_view(),
			'controller_name'				=> __CLASS__,
			'side_navigation'				=> $side_navigation,
			'google_analytics'				=> $google_analytics,
			'yandex_metrika'				=> $yandex_metrika,
			'counters'						=> $counters,
		);
		$this->load->view("production/first_fort", $page_data);
	}
	
	public function Kings_Secret() {
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
			'title'							=> 'Чайный бальзам "Секрет императора". Улучшение пищеварения',
			'description'					=> 'Тщательно подобранная комбинация обеспечивает максимальное оздоровительное воздействие фитосмеси на организм, основная направленность которого заключается в благотворном влиянии на пищеварительную систему.',
			'keywords'						=> 'китайская, медицина, здоровье, иммунитет, бады, лекарства, чай, целебный, сорт, зеленый, корень, сбор, тонизирует, отвар, желудок, кишечный, тракт, очистка, организм, профилактика, компания, ASTER, маркетинг, сетевой, бизнес, красота, болезнь, лечение',
			'view'							=> $this->Get_view(),
			'controller_name'				=> __CLASS__,
			'side_navigation'				=> $side_navigation,
			'google_analytics'				=> $google_analytics,
			'yandex_metrika'				=> $yandex_metrika,
			'counters'						=> $counters,
		);
		$this->load->view("production/kings_secret", $page_data);
	}
	
	
}