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
class BdevsPortfolioSection extends \Elementor\Widget_Base {

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
		return 'bdevs-portfolio-section';
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
		return __( 'Portfolio Section', 'bdevs-elementor' );
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
		return 'eicon-gallery-grid';
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
		return [ 'portfoliosection', 'carousel' ];
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

		// Portfolio Header Section
		$this->start_controls_section(
			'section_content_about_header_section',
			[
				'label' => esc_html__( 'Portfolio Header Home Section', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'header_title_top',
			[
				'label'       => __( 'Header Tittle Top', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your header title top', 'bdevs-elementor' ),
				'default'     => __( '02', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'header_title_bot',
			[
				'label'       => __( 'Header Tittle Bottom', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your header title bottom', 'bdevs-elementor' ),
				'default'     => __( 'Portfolio', 'bdevs-elementor' ),
				'label_block' => true,
			]	
		);
		$this->end_controls_section();

		// Portfolio Content Header Section
		$this->start_controls_section(
			'section_content_header_section',
			[
				'label' => esc_html__( 'Portfolio Tittle Section', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'header_content_title',
			[
				'label'       => __( 'Header Content Tittle', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your header content title', 'bdevs-elementor' ),
				'default'     => __( 'My Work', 'bdevs-elementor' ),
				'label_block' => true,
			]	
		);
		$this->end_controls_section();

		// Portfolio Content Section
		$this->start_controls_section(
			'section_content_content_section',
			[
				'label' => esc_html__( 'Portfolio Content Section', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'tabs',
			[
				'label' => esc_html__( 'Slide Portfolio Content Section', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'default' => [
					[
						'tab_title'   => esc_html__( 'Slide', 'bdevs-elementor' ),
						'tab_content' => esc_html__( 'I am item content. Click edit button to change this text.', 'bdevs-elementor' ),
					]
				],
				'fields' => [
					[
						'name'        => 'list_opt',
						'label'       => esc_html__( 'Choose Options Item', 'bdevs-elementor' ),
						'type'        => Controls_Manager::SELECT,
						'dynamic'     => [ 'active' => true ],
						'options' 	  => [
							'image' 	  => esc_html__( 'Image', 'bdevs-elementor' ),
							'video' 	  => esc_html__( 'Video', 'bdevs-elementor' ),
							'music' 	  => esc_html__( 'Music', 'bdevs-elementor' ),
						],
						'default'     => esc_html__( 'image' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'image_port_item',
						'label'       => esc_html__( 'Image Portfolio Item', 'bdevs-elementor' ),
						'type'        => Controls_Manager::MEDIA,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( '' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'text_port_item',
						'label'       => esc_html__( 'Text Portfolio Item', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( '' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'music_link',
						'label'       => esc_html__( 'Music Link', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( '' , 'bdevs-elementor' ),
						'label_block' => true,
						'condition' => [
		                    'list_opt' => ['music']
		                ],
					],
					[
						'name'        => 'video_link',
						'label'       => esc_html__( 'Video Link', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( '' , 'bdevs-elementor' ),
						'label_block' => true,
						'condition' => [
		                    'list_opt' => ['video']
		                ],
					],
				],
			]
		);

		$this->end_controls_section();

		// Portfolio Footer Section
		$this->start_controls_section(
			'section_content_portfolio_footer_section',
			[
				'label' => esc_html__( 'Portfolio Footer Section', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'copyright_portfolio_footer',
			[
				'label'       => __( 'Copyright Portfolio Footer Section', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your copyright about footer section', 'bdevs-elementor' ),
				'default'     => __( '© 2023 Design by <a href="https://themeforest.net/user/shtheme/portfolio">Shtheme</a>. All Rights Reserved.', 'bdevs-elementor' ),
				'label_block' => true,
			]	
		);
		$this->add_control(
			'show_portfolio_footer_social',
			[
				'label'       => __( 'Show Social Portfolio Footer Section', 'bdevs-elementor' ),
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
				'label' => esc_html__( 'Slide Portfolio Footer Social', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'default' => [
					[
						'tab_title'   => esc_html__( 'Slide #7', 'bdevs-elementor' ),
						'tab_content' => esc_html__( 'I am item content. Click edit button to change this text.', 'bdevs-elementor' ),
					]
				],
				'fields' => [
					[
						'name'        => 'icon_social_footer_portfolio',
						'label'       => esc_html__( 'Icon Social Footer Item', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( '' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'link_social_footer_portfolio',
						'label'       => esc_html__( 'Link Social Footer Portfolio Item', 'bdevs-elementor' ),
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
			'show_port_footer_section',
			[
				'label'       => __( 'Show Portfolio Footer Section', 'bdevs-elementor' ),
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
			<div class="content grid" id="1">
				<div class="page-header c12">
					<?php if ('' != $settings['header_content_title']): ?>
						<h1 data-value="<?php echo wp_kses_post($settings['header_content_title']); ?>">
							<?php echo wp_kses_post($settings['header_content_title']); ?>
						</h1>
						<?php endif ?><i></i>
						<ul class="portfolio-filter">
							<li class='selected' data-target='all'><?php echo esc_html__( 'All', 'bdevs-elementor' )?></li>
							<li data-target='image'><?php echo esc_html__( 'Image', 'bdevs-elementor' )?></li>
							<li data-target='video'><?php echo esc_html__( 'Video', 'bdevs-elementor' )?></li>
							<li data-target='music'><?php echo esc_html__( 'Music', 'bdevs-elementor' )?></li>
						</ul>
						<hr>
					</div>
					<div class="row">
						<div class="c12 end">
							<ul class="portfolio-container">
								<?php
								foreach ( $settings['tabs'] as $item ) :
									?>
									<?php if ('video' == $item['list_opt']) { ?>
										<li class="popup-iframe" data-groups='["all","<?php echo wp_kses_post($item['list_opt']); ?>"]'>
											<figure class="imghvr-shutter-in-out-diag-1">
												<img src="<?php echo wp_kses_post($item['image_port_item']['url']); ?>">
												<figcaption>
													<div data-value="<?php echo wp_kses_post($item['text_port_item']); ?>">
														<?php echo wp_kses_post($item['text_port_item']); ?>
													</div>
													<a href="<?php echo wp_kses_post($item['video_link']); ?>"></a>
												</figcaption>
											</figure>
										</li>
										<?php }elseif ('music' == $item['list_opt']) { ?>
										<li class="popup-iframe" data-groups='["all","<?php echo wp_kses_post($item['list_opt']); ?>"]'>
											<figure class="imghvr-shutter-in-out-diag-1">
												<img src="<?php echo wp_kses_post($item['image_port_item']['url']); ?>">
												<figcaption>
													<div data-value="<?php echo wp_kses_post($item['text_port_item']); ?>">
														<?php echo wp_kses_post($item['text_port_item']); ?>
													</div>
													<a href="<?php echo wp_kses_post($item['music_link']); ?>"></a>
												</figcaption>
											</figure>
										</li>
										<?php } elseif ('image' == $item['list_opt']) { ?>
											<li class="popup-image" data-groups='["all","image"]'>
												<figure class="imghvr-shutter-in-out-diag-1">
												<img src="<?php echo wp_kses_post($item['image_port_item']['url']); ?>">
												<figcaption>
													<div data-value="<?php echo wp_kses_post($item['text_port_item']); ?>">
														<?php echo wp_kses_post($item['text_port_item']); ?>
													</div>
													<a href="<?php echo wp_kses_post($item['image_port_item']['url']); ?>"></a>
												</figcaption>
											</figure>
										</li>
									<?php } ?>
									<?php endforeach; ?>
								</ul>
							</div>
						</div><!--END ROW-->
						<?php if ($settings['show_port_footer_section'] === 'yes'): ?>
							<footer>
								<div class="row">
									<div class="c12 end">
										<div class="footer-inner">
											<?php if ('' != $settings['copyright_portfolio_footer']): ?>
												<p class="copyright"><?php echo wp_kses_post($settings['copyright_portfolio_footer']); ?></p>
											<?php endif ?>
											<?php if ($settings['show_portfolio_footer_social'] === 'yes'): ?>
												<ul class="social-footer">
													<?php
													foreach ( $settings['tabs6'] as $item ) :
														?>
														<li>
															<a target="_blank" href="<?php echo wp_kses_post($item['link_social_footer_portfolio']); ?>">
																<?php echo wp_kses_post($item['icon_social_footer_portfolio']); ?>
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
					</div><!--END CONTENT-->
				</div><!--END P-->


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


		/* ==========================================================================
			Portfolio Filter & Popup
			========================================================================== */
			jQuery( document ).ready(function(){
				if($('.portfolio-container').length){
					var Shuffle = window.Shuffle;
					var element = document.querySelector('.portfolio-container');
					var shuffleInstance = new Shuffle(element, {
						itemSelector: 'li',
						speed: 0
					});
				}
				$('.portfolio-filter li').on('click',function(e){
					e.preventDefault();
					$('.portfolio-filter li').removeClass('selected');
					$(this).addClass('selected'); 
					var keyword = $(this).attr('data-target');
					shuffleInstance.filter(keyword);
				});
				$('.popup-iframe a').magnificPopup({
					type: 'iframe',
					closeOnContentClick: true,
					callbacks: {
						close: function() {
							mouse.removeClass('zoom-out');
						}
					}
				}); 
				$('.popup-image a').magnificPopup({
					type: 'image',
					closeOnContentClick: true,
					callbacks: {
						close: function() {
							mouse.removeClass('zoom-out');
						}
					}
				});
				$('.portfolio-container li a').click(function(){
					mouse.addClass('zoom-out');
				});
			});
		</script>
<?php } ?>

<?php
}

}