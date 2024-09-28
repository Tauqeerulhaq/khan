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
class BdevsContactSection extends \Elementor\Widget_Base {

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
		return 'bdevs-contact-section';
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
		return __( 'Contact Section', 'bdevs-elementor' );
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
		return 'eicon-form-horizontal';
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
		return [ 'contactsection', 'carousel' ];
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
		
		// Contact Header Section
		$this->start_controls_section(
			'section_content_contact_header_section',
			[
				'label' => esc_html__( 'Contact Header Home Section', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'header_title_top',
			[
				'label'       => __( 'Header Tittle Top', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your header title top', 'bdevs-elementor' ),
				'default'     => __( '04', 'bdevs-elementor' ),
				'label_block' => true,
			]	
		);
		$this->add_control(
			'header_title_bot',
			[
				'label'       => __( 'Header Tittle Bottom', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your header title bottom', 'bdevs-elementor' ),
				'default'     => __( 'Contact', 'bdevs-elementor' ),
				'label_block' => true,
			]	
		);
		$this->end_controls_section();

		// Contact Content Header Section
		$this->start_controls_section(
			'section_content_header_section',
			[
				'label' => esc_html__( 'Contact Tittle Section', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'header_content_title',
			[
				'label'       => __( 'Header Content Tittle', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your header content title', 'bdevs-elementor' ),
				'default'     => __( 'Get It Touch', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);
		$this->end_controls_section();

		// Contact Map Section
		$this->start_controls_section(
			'section_content_contact_map_section',
			[
				'label' => esc_html__( 'Contact Map Section. Example: https://www.openstreetmap.org/ #map=17/40.712776/-74.005974', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'ct_image_map',
			[
				'label'       => esc_html__( 'Contact Image Icon Map', 'bdevs-elementor' ),
				'type'        => Controls_Manager::MEDIA,
				'dynamic'     => [ 'active' => true ],
				'label_block' => true,
				'description' => esc_html__( 'Upload contact image icon map', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'ct_map_text_image',
			[
				'label'       => __( 'Contact Map Title Image', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Contact map title image', 'bdevs-elementor' ),
				'default'     => __( 'Akordian', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'ct_map_zoom',
			[
				'label'       => __( 'Contact Map Zoom Number', 'bdevs-elementor' ),
				'type'        => Controls_Manager::NUMBER,
				'placeholder' => __( 'Contact map zoom number', 'bdevs-elementor' ),
				'min'		  => 0,
				'max'		  => 19,
				'default'     => __( '17', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'ct_map_longitude',
			[
				'label'       => __( 'Contact Map Longitude', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Contact map longitude', 'bdevs-elementor' ),
				'default'     => __( '40.71232', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'ct_map_latitude',
			[
				'label'       => __( 'Contact Map Latitude', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Contact map latitude', 'bdevs-elementor' ),
				'default'     => __( '-74.00657', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);
		$this->end_controls_section();


		// Contact Form Section
		$this->start_controls_section(
			'section_content_contact_form_section',
			[
				'label' => esc_html__( 'Contact Form Section', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'shortcode',
			[
				'label'       => __( 'Shortcode Text', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your shortcode text', 'bdevs-elementor' ),
				'default'     => __( '[contact-form-7 id="68918b2" title="Contact Form Index"]', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);
		$this->end_controls_section();

		// Contact Info Section
		$this->start_controls_section(
			'section_content_contact_info_section',
			[
				'label' => esc_html__( 'Contact Info Section', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'heading_contact_info',
			[
				'label'       => __( 'Heading Contact Info Section', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your heading contact info section', 'bdevs-elementor' ),
				'default'     => __( 'My Details', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'text_contact_info',
			[
				'label'       => __( 'Text Contact Info Section', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your text contact info section', 'bdevs-elementor' ),
				'default'     => __( 'Bllo inventor veritatis et quasi...', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'show_contact_details',
			[
				'label'       => __( 'Show Contact Details', 'bdevs-elementor' ),
				'type'        => Controls_Manager::SWITCHER,
				'label_on' 	  => esc_html__( 'Show', 'bdevs-elementor' ),
				'label_off'   => esc_html__( 'Hide', 'bdevs-elementor' ),
				'return_value'=> 'yes',
				'default'     => __( 'yes', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'tabs4',
			[
				'label' => esc_html__( 'Slide Contact Details', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'default' => [
					[
						'tab_title'   => esc_html__( 'Slide Contact Details', 'bdevs-elementor' ),
						'tab_content' => esc_html__( 'I am item content. Click edit button to change this text.', 'bdevs-elementor' ),
					]
				],
				'fields' => [
					[
						'name'        => 'icon_contact_info_item',
						'label'       => esc_html__( 'Icon Contact Info Item', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( '' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'text_contact_info_item',
						'label'       => esc_html__( 'Text Contact Info Item', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( '' , 'bdevs-elementor' ),
						'label_block' => true,
					],
				],
			]
		);
		$this->end_controls_section();

		// Contact Footer Section
		$this->start_controls_section(
			'section_content_contact_footer_section',
			[
				'label' => esc_html__( 'Contact Footer Section', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'copyright_contact_footer',
			[
				'label'       => __( 'Copyright Contact Footer Section', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your copyright about footer section', 'bdevs-elementor' ),
				'default'     => __( '© 2023 Design by <a href="https://themeforest.net/user/shtheme/portfolio">Shtheme</a>. All Rights Reserved.', 'bdevs-elementor' ),
				'label_block' => true,
			]	
		);
		$this->add_control(
			'show_contact_footer_social',
			[
				'label'       => __( 'Show Social Contact Footer Section', 'bdevs-elementor' ),
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
				'label' => esc_html__( 'Slide Contact Footer Social', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'default' => [
					[
						'tab_title'   => esc_html__( 'Slide Contact Footer Social', 'bdevs-elementor' ),
						'tab_content' => esc_html__( 'I am item content. Click edit button to change this text.', 'bdevs-elementor' ),
					]
				],
				'fields' => [
					[
						'name'        => 'icon_social_footer_contact',
						'label'       => esc_html__( 'Icon Social Footer Item', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( '' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'link_social_footer_contact',
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
			'show_contact_map_section',
			[
				'label'       => __( 'Show Contact Map Section', 'bdevs-elementor' ),
				'type'        => Controls_Manager::SWITCHER,
				'label_on' 	  => esc_html__( 'Show', 'bdevs-elementor' ),
				'label_off'   => esc_html__( 'Hide', 'bdevs-elementor' ),
				'return_value'=> 'yes',
				'default'     => __( 'yes', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'show_contact_form_section',
			[
				'label'       => __( 'Show Contact Form Section', 'bdevs-elementor' ),
				'type'        => Controls_Manager::SWITCHER,
				'label_on' 	  => esc_html__( 'Show', 'bdevs-elementor' ),
				'label_off'   => esc_html__( 'Hide', 'bdevs-elementor' ),
				'return_value'=> 'yes',
				'default'     => __( 'yes', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'show_contact_info_section',
			[
				'label'       => __( 'Show Contact Info Section', 'bdevs-elementor' ),
				'type'        => Controls_Manager::SWITCHER,
				'label_on' 	  => esc_html__( 'Show', 'bdevs-elementor' ),
				'label_off'   => esc_html__( 'Hide', 'bdevs-elementor' ),
				'return_value'=> 'yes',
				'default'     => __( 'yes', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'show_contact_footer_section',
			[
				'label'       => __( 'Show Contact Footer Section', 'bdevs-elementor' ),
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
	<div class="content">
		<div class="page-header c12">
			<?php if ('' != $settings['header_content_title']): ?>
				<h1 data-value="<?php echo wp_kses_post($settings['header_content_title']); ?>">
					<?php echo wp_kses_post($settings['header_content_title']); ?>
				</h1>
				<hr>
			<?php endif ?>
		</div>
		<?php if ($settings['show_contact_map_section'] === 'yes'): ?>
		 	<div class="row no-margin">
				<div class="c12">
					<div id="map"></div>
				</div>
			</div>
		<?php endif ?>
		<div class="row">
			<?php if ($settings['show_contact_form_section'] === 'yes'): ?>
				<?php if ($settings['show_contact_info_section'] === 'yes') { ?>
					<div class="c6">
				<?php } else { ?>
					<div class="c12">
				<?php } ?>
						<?php echo do_shortcode($settings['shortcode']); ?>
					</div>
			<?php endif ?>
			<?php if ($settings['show_contact_info_section'] === 'yes'): ?>
				<?php if ($settings['show_contact_form_section'] === 'yes') { ?>
					<div class="c6">
				<?php } else { ?>
					<div class="c12">
				<?php } ?>
						<?php if ('' != $settings['heading_contact_info']): ?>
							<h2 class="gamma"><?php echo wp_kses_post($settings['heading_contact_info']); ?></h2>
						<?php endif ?>
						<?php if ('' != $settings['text_contact_info']): ?>
							<p><?php echo wp_kses_post($settings['text_contact_info']); ?></p>
						<?php endif ?>
						<?php if ($settings['show_contact_details'] === 'yes'): ?>
							<ul class="contact-details">
								<?php
								foreach ( $settings['tabs4'] as $item ) :
								?>
									<li>
										<?php if ('' != $item['icon_contact_info_item']): ?>
											<span class="icon-holder">
												<?php echo wp_kses_post($item['icon_contact_info_item']); ?>
											</span> 
										<?php endif ?>
										<?php if ('' != $item['text_contact_info_item']): ?>
											<span><?php echo wp_kses_post($item['text_contact_info_item']); ?></span>
										<?php endif ?>
									</li>
								<?php endforeach; ?>
							</ul>
						<?php endif ?>
					</div>
			<?php endif ?>
		</div>
		<?php if ($settings['show_contact_footer_section'] === 'yes'): ?>
			<footer>
				<div class="row">
					<div class="c12 end">
						<div class="footer-inner">
							<?php if ('' != $settings['copyright_contact_footer']): ?>
								<p class="copyright"><?php echo wp_kses_post($settings['copyright_contact_footer']); ?></p>
							<?php endif ?>
							<?php if ($settings['show_contact_footer_social'] === 'yes'): ?>
								<ul class="social-footer">
									<?php
									foreach ( $settings['tabs6'] as $item ) :
									?>
										<li>
											<a target="_blank" href="<?php echo wp_kses_post($item['link_social_footer_contact']); ?>">
												<?php echo wp_kses_post($item['icon_social_footer_contact']); ?>
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


<script type="text/javascript">
	/* ==========================================================================
		Map
	   ========================================================================== */
	jQuery( document ).ready(function(){
		let mapOptions = {
			center:[<?php echo wp_kses_post($settings['ct_map_longitude']); ?>, <?php echo wp_kses_post($settings['ct_map_latitude']); ?>],
			zoom:<?php echo wp_kses_post($settings['ct_map_zoom']); ?>,
		}
		let map = new L.map(document.getElementById("map") , mapOptions);
		let layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', { attribution: '&copy; <a  target="_blank" href="http://www.openstreetmap.org/#map">OpenStreetMap</a>' });
		map.addLayer(layer);

		let customIcon = {
		  iconUrl:"<?php echo wp_kses_post($settings['ct_image_map']['url']); ?>",
		  iconSize:[57,67]
		}
		let myIcon = L.icon(customIcon);
		let iconOptions = {
			title:"<?php echo wp_kses_post($settings['ct_map_text_image']); ?>",
			icon:myIcon
		}
		let marker = new L.Marker([<?php echo wp_kses_post($settings['ct_map_longitude']); ?>, <?php echo wp_kses_post($settings['ct_map_latitude']); ?>] , iconOptions);
		marker.addTo(map);
	});
</script>


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