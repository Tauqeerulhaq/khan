<?php
namespace BdevsElementor\Widget;

use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;

/**
 * Bdevs Elementor Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class BdevsAboutSection extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve Bdevs Elementor widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'bdevs-about-section';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Bdevs Elementor widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'About Section', 'bdevs-elementor' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Bdevs Slider widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-info-circle';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Bdevs Slider widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'bdevs-elementor' ];
	}

	public function get_keywords() {
		return [ 'aboutsection', 'carousel' ];
	}

	public function get_script_depends() {
		return [ 'bdevs-elementor'];
	}

	// BDT Position
	protected function element_pack_position() {
		$position_options = [
			''              => esc_html__('Default', 'bdevs-elementor'),
			'top-left'      => esc_html__('Top Left', 'bdevs-elementor') ,
			'top-center'    => esc_html__('Top Center', 'bdevs-elementor') ,
			'top-right'     => esc_html__('Top Right', 'bdevs-elementor') ,
			'center'        => esc_html__('Center', 'bdevs-elementor') ,
			'center-left'   => esc_html__('Center Left', 'bdevs-elementor') ,
			'center-right'  => esc_html__('Center Right', 'bdevs-elementor') ,
			'bottom-left'   => esc_html__('Bottom Left', 'bdevs-elementor') ,
			'bottom-center' => esc_html__('Bottom Center', 'bdevs-elementor') , 
			'bottom-right'  => esc_html__('Bottom Right', 'bdevs-elementor') ,
		];

		return $position_options;
	}

	protected function _register_controls() {
		
		// About Header Section
		$this->start_controls_section(
			'section_content_about_header_section',
			[
				'label' => esc_html__( 'About Header Home Section', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'header_title_top',
			[
				'label'       => __( 'Header Tittle Top', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your header title top', 'bdevs-elementor' ),
				'default'     => __( '01', 'bdevs-elementor' ),
				'label_block' => true,
			]	
		);
		$this->add_control(
			'header_title_bot',
			[
				'label'       => __( 'Header Tittle Bottom', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your header title bottom', 'bdevs-elementor' ),
				'default'     => __( 'About', 'bdevs-elementor' ),
				'label_block' => true,
			]	
		);
		$this->end_controls_section();

		// About Content Header Section
		$this->start_controls_section(
			'section_content_header_section',
			[
				'label' => esc_html__( 'About Tittle Section', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'header_content_title',
			[
				'label'       => __( 'Header Content Tittle', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your header content title', 'bdevs-elementor' ),
				'default'     => __( 'About Me', 'bdevs-elementor' ),
				'label_block' => true,
			]	
		);
		$this->end_controls_section();

		// About Infomation Section
		$this->start_controls_section(
			'section_content_about_infomation_section',
			[
				'label' => esc_html__( 'About Infomation Section', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'show_slide',
			[
				'label'       => __( 'Show Infomation Slide', 'bdevs-elementor' ),
				'type'        => Controls_Manager::SWITCHER,
				'label_on' 	  => esc_html__( 'Show', 'bdevs-elementor' ),
				'label_off'   => esc_html__( 'Hide', 'bdevs-elementor' ),
				'return_value'=> 'yes',
				'default'     => __( 'yes', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'tabs',
			[
				'label' => esc_html__( 'Image Slide About Infomation', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'default' => [
					[
						'tab_title'   => esc_html__( 'Slide #1', 'bdevs-elementor' ),
						'tab_content' => esc_html__( 'I am item content. Click edit button to change this text.', 'bdevs-elementor' ),
					]
				],
				'fields' => [
					[
						'name'        => 'image_item',
						'label'       => esc_html__( 'Image Item', 'bdevs-elementor' ),
						'type'        => Controls_Manager::MEDIA,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( '' , 'bdevs-elementor' ),
						'label_block' => true,
					],
				],
			]
		);
		$this->add_control(
			'about_info_title',
			[
				'label'       => __( 'About Infomation Title', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your about infomation title', 'bdevs-elementor' ),
				'default'     => __( 'Johnie Doe', 'bdevs-elementor' ),
				'label_block' => true,
			]	
		);
		$this->add_control(
			'about_info_subtitle',
			[
				'label'       => __( 'About Infomation SubTitle', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your about infomation subtitle', 'bdevs-elementor' ),
				'default'     => __( 'Freelancer Extraordinaire', 'bdevs-elementor' ),
				'label_block' => true,
			]	
		);
		$this->add_control(
			'about_info_text',
			[
				'label'       => __( 'About Infomation Text', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your about infomation text', 'bdevs-elementor' ),
				'default'     => __( 'Vivamus sed nulla volutpat,', 'bdevs-elementor' ),
				'label_block' => true,
			]	
		);
		$this->add_control(
			'about_info_link_btn',
			[
				'label'       => __( 'About Infomation Link Button', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your about infomation link button', 'bdevs-elementor' ),
				'default'     => __( '#', 'bdevs-elementor' ),
				'label_block' => true,
			]	
		);
		$this->add_control(
			'about_info_text_btn',
			[
				'label'       => __( 'About Infomation Text Button', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your about infomation text button', 'bdevs-elementor' ),
				'default'     => __( 'Download CV <i class="lni lni-download"></i>', 'bdevs-elementor' ),
				'label_block' => true,
			]	
		);
		$this->end_controls_section();


		// About Skill Section
		$this->start_controls_section(
			'section_content_about_skill_section',
			[
				'label' => esc_html__( 'About Skill Section', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'show_heading_skill',
			[
				'label'       => __( 'Show Heading Skill & Experience Section', 'bdevs-elementor' ),
				'type'        => Controls_Manager::SWITCHER,
				'label_on' 	  => esc_html__( 'Show', 'bdevs-elementor' ),
				'label_off'   => esc_html__( 'Hide', 'bdevs-elementor' ),
				'return_value'=> 'yes',
				'default'     => __( 'yes', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'heading_skill_section',
			[
				'label'       => __( 'Heading Skill & Experience Section', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your heading skill & experience section', 'bdevs-elementor' ),
				'default'     => __( 'Skill & Experience', 'bdevs-elementor' ),
				'label_block' => true,
			]	
		);
		$this->add_control(
			'image_tab_bg',
			[
				'label'       => esc_html__( 'Image Tab Background', 'bdevs-elementor' ),
				'type'        => Controls_Manager::MEDIA,
				'dynamic'     => [ 'active' => true ],
				'label_block' => true,
				'description' => esc_html__( 'Upload image tab background', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'tabs1',
			[
				'label' => esc_html__( 'Tab Background About Skill', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'default' => [
					[
						'tab_title'   => esc_html__( 'Slide #2', 'bdevs-elementor' ),
						'tab_content' => esc_html__( 'I am item content. Click edit button to change this text.', 'bdevs-elementor' ),
					]
				],
				'fields' => [
					[
						'name'        => 'text_item',
						'label'       => esc_html__( 'Text Item', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( '' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'select_type',
						'label'       => esc_html__( 'Select Type', 'bdevs-elementor' ),
						'label_on' 	  => esc_html__( 'Type1', 'bdevs-elementor' ),
						'label_off'   => esc_html__( 'Type2', 'bdevs-elementor' ),
						'type'        => Controls_Manager::SWITCHER,
						'dynamic'     => [ 'active' => true ],
						'return_value'=> 'yes',
						'default'     => __( 'yes', 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'type_1',
						'label'       => esc_html__( 'List Item Type 1', 'bdevs-elementor' ),
						'type'        => Controls_Manager::REPEATER,
						'default'     => [
							[
								'tab_title'   => esc_html__( 'List Item Type 1', 'bdevs-elementor' ),
								'tab_content' => esc_html__( 'I am item content. Click edit button to change this text.', 'bdevs-elementor' ),
							]
						],
						'fields'  	  =>[
							[
								'name'        => 'text_skill_item',
								'label'       => esc_html__( 'Text Skill Item', 'bdevs-elementor' ),
								'type'        => Controls_Manager::TEXT,
								'dynamic'     => [ 'active' => true ],
								'default'     => esc_html__( '' , 'bdevs-elementor' ),
								'label_block' => true,
							],
							[
								'name'        => 'text_per_item',
								'label'       => esc_html__( 'Text Percent Item', 'bdevs-elementor' ),
								'type'        => Controls_Manager::NUMBER,
								'min'		  => 0,
								'max'		  => 100,
								'dynamic'     => [ 'active' => true ],
								'default'     => esc_html__( '100' , 'bdevs-elementor' ),
								'label_block' => true,
							],
						]
					],
					[
						'name'        => 'type_2',
						'label'       => esc_html__( 'List Item Type 2', 'bdevs-elementor' ),
						'type'        => Controls_Manager::REPEATER,
						'default'     => [
							[
								'tab_title'   => esc_html__( 'List Item Type 2', 'bdevs-elementor' ),
								'tab_content' => esc_html__( 'I am item content. Click edit button to change this text.', 'bdevs-elementor' ),
							]
						],
						'fields'  	  =>[
							[
								'name'        => 'title_ex_item',
								'label'       => esc_html__( 'Title Experience Item', 'bdevs-elementor' ),
								'type'        => Controls_Manager::TEXT,
								'dynamic'     => [ 'active' => true ],
								'default'     => esc_html__( '' , 'bdevs-elementor' ),
								'label_block' => true,
							],
							[
								'name'        => 'subtitle_ex_item',
								'label'       => esc_html__( 'SubTitle Experience Item', 'bdevs-elementor' ),
								'type'        => Controls_Manager::TEXT,
								'dynamic'     => [ 'active' => true ],
								'default'     => esc_html__( '' , 'bdevs-elementor' ),
								'label_block' => true,
							],
							[
								'name'        => 'time_ex_item',
								'label'       => esc_html__( 'Time Experience Item', 'bdevs-elementor' ),
								'type'        => Controls_Manager::TEXTAREA,
								'dynamic'     => [ 'active' => true ],
								'default'     => esc_html__( '' , 'bdevs-elementor' ),
								'label_block' => true,
							],
							[
								'name'        => 'text_ex_item',
								'label'       => esc_html__( 'Text Experience Item', 'bdevs-elementor' ),
								'type'        => Controls_Manager::TEXTAREA,
								'dynamic'     => [ 'active' => true ],
								'default'     => esc_html__( '' , 'bdevs-elementor' ),
								'label_block' => true,
							],
						]
					],
				],
			]
		);
		$this->end_controls_section();

		// About Testimonials Section
		$this->start_controls_section(
			'section_content_about_testimonials_section',
			[
				'label' => esc_html__( 'About Testimonials Section', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'show_heading_testi',
			[
				'label'       => __( 'Show Heading Testimonials Section', 'bdevs-elementor' ),
				'type'        => Controls_Manager::SWITCHER,
				'label_on' 	  => esc_html__( 'Show', 'bdevs-elementor' ),
				'label_off'   => esc_html__( 'Hide', 'bdevs-elementor' ),
				'return_value'=> 'yes',
				'default'     => __( 'yes', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'heading_testi_section',
			[
				'label'       => __( 'Heading Testimonials Section', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your heading testomonials section', 'bdevs-elementor' ),
				'default'     => __( 'Testimonials', 'bdevs-elementor' ),
				'label_block' => true,
			]	
		);
		$this->add_control(
			'tabs4',
			[
				'label' => esc_html__( 'Slide About Testimonials', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'default' => [
					[
						'tab_title'   => esc_html__( 'Slide #5', 'bdevs-elementor' ),
						'tab_content' => esc_html__( 'I am item content. Click edit button to change this text.', 'bdevs-elementor' ),
					]
				],
				'fields' => [
					[
						'name'        => 'text_testi_item',
						'label'       => esc_html__( 'Text Testimonials Item', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( '' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'subtext_testi_item',
						'label'       => esc_html__( 'SubText Testimonials Item', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( '' , 'bdevs-elementor' ),
						'label_block' => true,
					],
				],
			]
		);
		$this->end_controls_section();

		// About Clients Section
		$this->start_controls_section(
			'section_content_about_clients_section',
			[
				'label' => esc_html__( 'About Clients Section', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'show_heading_clients',
			[
				'label'       => __( 'Show Heading Clients Section', 'bdevs-elementor' ),
				'type'        => Controls_Manager::SWITCHER,
				'label_on' 	  => esc_html__( 'Show', 'bdevs-elementor' ),
				'label_off'   => esc_html__( 'Hide', 'bdevs-elementor' ),
				'return_value'=> 'yes',
				'default'     => __( 'yes', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'heading_clients_section',
			[
				'label'       => __( 'Heading Clients Section', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your heading clients section', 'bdevs-elementor' ),
				'default'     => __( 'Clients', 'bdevs-elementor' ),
				'label_block' => true,
			]	
		);
		$this->add_control(
			'tabs5',
			[
				'label' => esc_html__( 'Slide About Clients', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'default' => [
					[
						'tab_title'   => esc_html__( 'Slide #6', 'bdevs-elementor' ),
						'tab_content' => esc_html__( 'I am item content. Click edit button to change this text.', 'bdevs-elementor' ),
					]
				],
				'fields' => [
					[
						'name'        => 'image_client_item',
						'label'       => esc_html__( 'Image Client Item', 'bdevs-elementor' ),
						'type'        => Controls_Manager::MEDIA,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( '' , 'bdevs-elementor' ),
						'label_block' => true,
					],
				],
			]
		);
		$this->end_controls_section();

		// About Footer Section
		$this->start_controls_section(
			'section_content_about_footer_section',
			[
				'label' => esc_html__( 'About Footer Section', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'copyright_about_footer',
			[
				'label'       => __( 'Copyright About Footer Section', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your copyright about footer section', 'bdevs-elementor' ),
				'default'     => __( '© 2023 Design by <a href="https://themeforest.net/user/shtheme/portfolio">Shtheme</a>. All Rights Reserved.', 'bdevs-elementor' ),
				'label_block' => true,
			]	
		);
		$this->add_control(
			'show_about_footer_social',
			[
				'label'       => __( 'Show Social About Footer Section', 'bdevs-elementor' ),
				'type'        => Controls_Manager::SWITCHER,
				'label_on' 	  => esc_html__( 'Show', 'bdevs-elementor' ),
				'label_off'   => esc_html__( 'Hide', 'bdevs-elementor' ),
				'return_value'=> 'yes',
				'default'     => __( 'yes', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'tabs6',
			[
				'label' => esc_html__( 'Slide About Footer Social', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'default' => [
					[
						'tab_title'   => esc_html__( 'Slide #7', 'bdevs-elementor' ),
						'tab_content' => esc_html__( 'I am item content. Click edit button to change this text.', 'bdevs-elementor' ),
					]
				],
				'fields' => [
					[
						'name'        => 'icon_social_footer_about',
						'label'       => esc_html__( 'Icon Social Footer Item', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( '' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'link_social_footer_about',
						'label'       => esc_html__( 'Link Social Footer About Item', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( '#' , 'bdevs-elementor' ),
						'label_block' => true,
					],
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'section_content_layout',
			[
				'label' => esc_html__( 'Layout', 'bdevs-elementor' ),
			]
		);

		$this->add_responsive_control(
			'align',
			[
				'label'   => esc_html__( 'Alignment', 'bdevs-elementor' ),
				'type'    => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'bdevs-elementor' ),
						'icon'  => 'fa fa-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bdevs-elementor' ),
						'icon'  => 'fa fa-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'bdevs-elementor' ),
						'icon'  => 'fa fa-align-right',
					],
					'justify' => [
						'title' => esc_html__( 'Justified', 'bdevs-elementor' ),
						'icon'  => 'fa fa-align-justify',
					],
				],
				'prefix_class' => 'elementor%s-align-',
				'description'  => 'Use align to match position',
				'default'      => 'left',
			]
		);


		$this->add_control(
			'show_about_info_section',
			[
				'label'       => __( 'Show About Infomation Section', 'bdevs-elementor' ),
				'type'        => Controls_Manager::SWITCHER,
				'label_on' 	  => esc_html__( 'Show', 'bdevs-elementor' ),
				'label_off'   => esc_html__( 'Hide', 'bdevs-elementor' ),
				'return_value'=> 'yes',
				'default'     => __( 'yes', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'show_about_skill_section',
			[
				'label'       => __( 'Show About Skill & Experience Section', 'bdevs-elementor' ),
				'type'        => Controls_Manager::SWITCHER,
				'label_on' 	  => esc_html__( 'Show', 'bdevs-elementor' ),
				'label_off'   => esc_html__( 'Hide', 'bdevs-elementor' ),
				'return_value'=> 'yes',
				'default'     => __( 'yes', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'show_about_testi_section',
			[
				'label'       => __( 'Show About Testimonials Section', 'bdevs-elementor' ),
				'type'        => Controls_Manager::SWITCHER,
				'label_on' 	  => esc_html__( 'Show', 'bdevs-elementor' ),
				'label_off'   => esc_html__( 'Hide', 'bdevs-elementor' ),
				'return_value'=> 'yes',
				'default'     => __( 'yes', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'show_about_clients_section',
			[
				'label'       => __( 'Show About Clients Section', 'bdevs-elementor' ),
				'type'        => Controls_Manager::SWITCHER,
				'label_on' 	  => esc_html__( 'Show', 'bdevs-elementor' ),
				'label_off'   => esc_html__( 'Hide', 'bdevs-elementor' ),
				'return_value'=> 'yes',
				'default'     => __( 'yes', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'show_about_footer_section',
			[
				'label'       => __( 'Show About Footer Section', 'bdevs-elementor' ),
				'type'        => Controls_Manager::SWITCHER,
				'label_on' 	  => esc_html__( 'Show', 'bdevs-elementor' ),
				'label_off'   => esc_html__( 'Hide', 'bdevs-elementor' ),
				'return_value'=> 'yes',
				'default'     => __( 'yes', 'bdevs-elementor' ),
			]
		);


		$this->end_controls_section();

	}

	public function render() {

		$settings  = $this->get_settings_for_display();
		extract($settings);
		?> 

<div class="h-100">
	<header>
		<?php if ('' != $settings['header_title_bot']): ?>
			<span class="title"><?php echo wp_kses_post($settings['header_title_bot']); ?></span>
		<?php endif ?>
		<?php if ('' != $settings['header_title_top']): ?>	
			<span class="title-number"><?php echo wp_kses_post($settings['header_title_top']); ?></span>
		<?php endif ?>
	</header>
	
	<div class="content grid">
		<div class="page-header c12">
			<?php if ('' != $settings['header_content_title']): ?>
				<h1 data-value="<?php echo wp_kses_post($settings['header_content_title']); ?>">
					<?php echo wp_kses_post($settings['header_content_title']); ?>
				</h1>
				<hr>
			<?php endif ?>
		</div>

		<?php if ($settings['show_about_info_section'] === 'yes'): ?>
			<div class="row">
				<?php if ($settings['show_slide'] === 'yes'): ?>
					<div class="c6">
						<div class="about-slider">
							<?php
							foreach ( $settings['tabs'] as $item ) :
							?>
								<img src="<?php echo wp_kses_post($item['image_item']['url']); ?>">
							<?php endforeach; ?>
						</div>
					</div>
				<?php endif; ?>
				<?php if ($settings['show_slide'] === 'yes') { ?>
					<div class="c6">
				<?php } else { ?>
					<div class="c12">
				<?php } ?>
						<div class="col-top">
							<?php if ('' != $settings['about_info_title']): ?>
								<h2><?php echo wp_kses_post($settings['about_info_title']); ?></h2> 
							<?php endif ?>
							<?php if ('' != $settings['about_info_subtitle']): ?>
								<h5><?php echo wp_kses_post($settings['about_info_subtitle']); ?></h5>
							<?php endif ?>
							<hr>
							<p>
								<?php echo wp_kses_post($settings['about_info_text']); ?>
								<span class="spacer"></span>
								<?php if (('' != $settings['about_info_link_btn']) && ('' != $settings['about_info_text_btn'])): ?>
									<a href="<?php echo wp_kses_post($settings['about_info_link_btn']); ?>" class="button">
										<?php echo wp_kses_post($settings['about_info_text_btn']); ?>
									</a>
								<?php endif ?>
							</p>
						</div>
						<div class="col-bottom">
							<hr>
							<div class="about-slider-controls">
								<span class="prev-slide"><i class="lni lni-chevron-left"></i></span>
								<span class="next-slide"><i class="lni lni-chevron-right"></i></span>
							</div>
						</div>
					</div>  
			</div>
		<?php endif ?>

		<?php if ($settings['show_about_skill_section'] === 'yes'): ?>
			<?php if ($settings['show_heading_skill'] === 'yes') { ?>
				<div class="row">
					<div class="c12">
						<hr>
						<h5><?php echo wp_kses_post($settings['heading_skill_section']); ?></h5> 
					</div>
				</div>
			<?php } else { ?>
				<div class="spacer"></div>
			<?php } ?>
			<div class="row">
				<style type="text/css">
					.tab-background{
						background-image: url('<?php echo wp_kses_post($settings['image_tab_bg']['url']); ?>');
					}
				</style>
				<div class="c4">
					<ul class="tabs-nav">
						<?php
						$i = 0;
						foreach ( $settings['tabs1'] as $item ) :
							$i++;
						?>
							<?php if ($i == 1) { ?>
								<li>
									<a href="#" id="tab<?php echo esc_attr($i) ; ?>">
										<span><?php echo wp_kses_post($item['text_item']); ?></span>
									</a>
									<span class="tab-background"></span>
								</li>
							<?php } else { ?>
								<li>
									<a href="#" id="tab<?php echo esc_attr($i) ; ?>" class="inactive">
										<span><?php echo wp_kses_post($item['text_item']); ?></span>
									</a>
									<span class="tab-background"></span>
								</li>
							<?php } ?>
						<?php endforeach; ?>
					</ul>
				</div>
				<div class="c8">
					<?php
					$i = 0;
					foreach ( $settings['tabs1'] as $item ) :
						$i++;
					?>
						<?php if ($i == 1) { ?>
							<div class="tabs-container" id="tab<?php echo esc_attr($i) ; ?>-content">
								<?php if ($item['select_type'] === 'yes') { ?>
									<?php
									foreach ( $item['type_1'] as $item ) :
									?>
										<p class="skill-title"><?php echo wp_kses_post($item['text_skill_item']); ?> 
											<span><?php echo wp_kses_post($item['text_per_item']); ?>%</span>
										</p>
										<div class="skill-bar-wrapper">
											<div class="skill-bar enabled">
												<span style="width:<?php echo wp_kses_post($item['text_per_item']); ?>%"></span>
											</div>
										</div>
									<?php endforeach; ?>
								<?php } else { ?>
									<?php
									foreach ( $item['type_2'] as $item ) :
									?>
										<div class="row">
											<?php if ('' != $item['time_ex_item']) { ?>
												<div class="c8">
											<?php } else { ?>
												<div class="c12">
											<?php } ?>
													<?php if ('' != $item['title_ex_item']): ?>
														<h4><?php echo wp_kses_post($item['title_ex_item']); ?></h4>
													<?php endif ?>
													<?php if ('' != $item['subtitle_ex_item']): ?>
														<h6><?php echo wp_kses_post($item['subtitle_ex_item']); ?></h6>
													<?php endif ?>
													<?php if ('' != $item['text_ex_item']): ?>
														<p><?php echo wp_kses_post($item['text_ex_item']); ?></p>
													<?php endif ?>
												</div>
											<?php if ('' != $item['time_ex_item']): ?>
												<div class="c4">
													<h4 class="align-right"><?php echo wp_kses_post($item['time_ex_item']); ?></h4>
												</div>
											<?php endif ?>
										</div>
										<div class="row">
											<div class="c12"><hr> </div>
										</div>
									<?php endforeach; ?>
								<?php } ?>
							</div>
						<?php } else { ?>
							<div class="tabs-container" id="tab<?php echo esc_attr($i) ; ?>-content" style="display: none;">
								<?php if ($item['select_type'] === 'yes') { ?>
									<?php
									foreach ( $item['type_1'] as $item ) :
									?>
										<p class="skill-title"><?php echo wp_kses_post($item['text_skill_item']); ?> 
											<span><?php echo wp_kses_post($item['text_per_item']); ?>%</span>
										</p>
										<div class="skill-bar-wrapper">
											<div class="skill-bar enabled">
												<span style="width:<?php echo wp_kses_post($item['text_per_item']); ?>%"></span>
											</div>
										</div>
									<?php endforeach; ?>
								<?php } else { ?>
									<?php
									foreach ( $item['type_2'] as $item ) :
									?>
										<div class="row">
											<?php if ('' != $item['time_ex_item']) { ?>
												<div class="c8">
											<?php } else { ?>
												<div class="c12">
											<?php } ?>
													<?php if ('' != $item['title_ex_item']): ?>
														<h4><?php echo wp_kses_post($item['title_ex_item']); ?></h4>
													<?php endif ?>
													<?php if ('' != $item['subtitle_ex_item']): ?>
														<h6><?php echo wp_kses_post($item['subtitle_ex_item']); ?></h6>
													<?php endif ?>
													<?php if ('' != $item['text_ex_item']): ?>
														<p><?php echo wp_kses_post($item['text_ex_item']); ?></p>
													<?php endif ?>
												</div>
											<?php if ('' != $item['time_ex_item']): ?>
												<div class="c4">
													<h4 class="align-right"><?php echo wp_kses_post($item['time_ex_item']); ?></h4>
												</div>
											<?php endif ?>
										</div>
										<div class="row">
											<div class="c12"><hr> </div>
										</div>
									<?php endforeach; ?>
								<?php } ?>
							</div>
						<?php } ?>
					<?php endforeach; ?>
				</div>
			</div>
		<?php endif ?>

		<?php if ($settings['show_about_testi_section'] === 'yes'): ?>
			<?php if ($settings['show_heading_testi'] === 'yes') { ?>
				<div class="row">
					<div class="c12">
						<hr>
						<h5><?php echo wp_kses_post($settings['heading_testi_section']); ?></h5> 
					</div>
				</div>
			<?php } else { ?>
				<div class="spacer"></div>
			<?php } ?>
			<div class="row">
				<div class="c9">
					<div class="testomonial-slider">
						<?php
						foreach ( $settings['tabs4'] as $item ) :
						?>
							<div class="testomonial">
								<blockquote>
									<?php if ('' != $item['text_testi_item']): ?>
										<p><?php echo wp_kses_post($item['text_testi_item']); ?></p>
									<?php endif ?>
									<?php if ('' != $item['subtext_testi_item']): ?>
										<cite><?php echo wp_kses_post($item['subtext_testi_item']); ?></cite>
									<?php endif ?>
								</blockquote>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="c3">
					<div class="testomonial-slider-controls">
						<span class="prev-slide"><i class="lni lni-chevron-left"></i></span>
						<span class="next-slide"><i class="lni lni-chevron-right"></i></span>
					</div>
				</div>
			</div>
		<?php endif ?>

		<?php if ($settings['show_about_clients_section'] === 'yes'): ?>
			<?php if ($settings['show_heading_clients'] === 'yes') { ?>
				<div class="row">
					<div class="c12">
						<hr>
						<h5><?php echo wp_kses_post($settings['heading_clients_section']); ?></h5> 
					</div>
				</div>
			<?php } else { ?>
				<div class="spacer"></div>
			<?php } ?>
			<div class="row">
				<div class="c12 end">
					<div class="slider client-slider">
						<?php
						foreach ( $settings['tabs5'] as $item ) :
						?>
							<div><img src="<?php echo wp_kses_post($item['image_client_item']['url']); ?>" alt="logo"></div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		<?php endif ?>

		<?php if ($settings['show_about_footer_section'] === 'yes'): ?>
			<footer>
				<div class="row">
					<div class="c12 end">
						<div class="footer-inner">
							<?php if ('' != $settings['copyright_about_footer']): ?>
								<p class="copyright"><?php echo wp_kses_post($settings['copyright_about_footer']); ?></p>
							<?php endif ?>
							<?php if ($settings['show_about_footer_social'] === 'yes'): ?>
								<ul class="social-footer">
									<?php
									foreach ( $settings['tabs6'] as $item ) :
									?>
										<li>
											<a target="_blank" href="<?php echo wp_kses_post($item['link_social_footer_about']); ?>">
												<?php echo wp_kses_post($item['icon_social_footer_about']); ?>
											</a>
										</li>
									<?php endforeach; ?>
								</ul>
							<?php endif ?>
						</div>
					</div>
				</div>
			</footer>
		<?php endif ?>

	</div>
</div>


<?php
if (is_admin()) { ?>
	<script type="text/javascript">
		/* ==========================================================================
			Main Menu / Page Transitions
		   ========================================================================== */
		jQuery( document ).ready(function(){
			$('.page header:not(.page:first-child header)').on( 'click', function() {
				if(!$(this).parents("section").hasClass('active')){
					let oldContent = $(this).parents("section").siblings('.active'),
						newContent = $(this).parents("section");
						clearTimeout(skillTimeout); 
					$('.active .content').fadeOut( 200, function() {
						oldContent.removeClass('active loaded');
						newContent.addClass('active');
						$('.active hr, .active .skill-bar ').removeClass('enabled');
						setTimeout(function(){ 
							$('.active .content').fadeIn(400, function(){
								newContent.addClass('loaded');
							})
							animateLine();
							animateHeading(newContent.find('.page-header h1'));
							window.dispatchEvent(new Event('resize'));
							if(newContent.find('.portfolio-container').length){
								animatecaption();
							}
						}, 400);
					});
				}
			});

			$('.logo').on( 'click', function(e) {
				e.preventDefault();
				if(!$(this).parents("section").hasClass('active')){
					var oldContent = $(this).parents("section").siblings('.active'),
						newContent = $(this).parents("section");
					$('.active hr, .active .skill-bar ').removeClass('enabled');
					$('.active .content').fadeOut( 200, function() {
						oldContent.removeClass('active loaded');
						newContent.addClass('active');
						setTimeout(function(){ 
							$('.active .content').fadeIn(400, function(){
								newContent.addClass('loaded');
							});
						}, 400);
					});
				}
			});

			$('.page').each(function(){
				let page = $(this);
				if(page.visible(true)){
					page.find('.content').css('display', 'block');
				}
			});
		});

		/* ==========================================================================
			Testomonial & Client Slider
		   ========================================================================== */
		
		if($('.client-slider').length){
			let clientSlider = tns({
			  container: '.client-slider',
			  items:1,
			  gutter: 30,
			  nav: false,
			  speed: 500,
			  slideBy: 'page',
			  loop: false,
			  controls: false,
			  mouseDrag: true,
			  responsive: {
				  640: {
					items: 2
				  },
				  760: {
					items: 3
				  },
				  1024: {
					items: 4
				  },
				  1280: {
					items: 5
				  },
				}
			});
		}
		if($('.testomonial-slider').length){
			let testimonialSlider = tns({
			  container: '.testomonial-slider',
			  items: 1,
			  gutter: 1,
			  nav: false,
			  navPosition:'bottom',
			  speed: 500,
			  loop: true,
			  controls: true,
			  controlsContainer: '.testomonial-slider-controls',
			});
		}

		if($('.about-slider').length){
			let aboutSlider = tns({
			  container: '.about-slider',
			  items: 1,
			  gutter: 1,
			  nav: false,
			  speed: 500,
			  loop: true,
			  controls: true,
			  controlsContainer: '.about-slider-controls',
			  onInit: function(info) {
				info.container.closest('.tns-outer').classList.add('about-slider-outer');
			  }
			});
			aboutSlider.events.on("transitionStart", data => {
			  var {displayIndex} = data;
			  $('.current-slide').text( numberToWords(displayIndex) );
			});
		}

		/* ==========================================================================
			Tabs
		   ========================================================================== */


		$('.tabs-nav li a:not(:first)').addClass('inactive');
		// $('.tabs-container').hide();
		// $('.tabs-container:first').show();

		$('.tabs-nav li a').on( "click", function(e) {
			e.preventDefault();
			let t = $(this).attr('id');
			if (skillTimeout !== null) { 
				clearTimeout(skillTimeout); 
				skillTimeout = null;
			}
			if($('#'+ t + '-content .skill-bar').length){
				animateLine();
			}
			else{
				$('.skill-bar ').removeClass('enabled');
			}
			if($(this).hasClass('inactive')){
				$('.tabs-nav li a').addClass('inactive');           
				$(this).removeClass('inactive');
				$('.tabs-container').hide();
				$('#'+ t + '-content').fadeIn(400);
			}

		});

		/* ==========================================================================
			Line Animations
		   ========================================================================== */

		$('hr').each(function(){
			let line = $(this);
			if(line.visible(true)){
				line.addClass('enabled');
			}
		});
	</script>
<?php } ?>


<?php
}

}