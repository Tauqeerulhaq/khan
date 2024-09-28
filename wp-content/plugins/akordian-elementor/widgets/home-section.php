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
class BdevsHomeSection extends \Elementor\Widget_Base {

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
		return 'bdevs-home-section';
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
		return __( 'Home Section', 'bdevs-elementor' );
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
		return [ 'homesection', 'carousel' ];
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

		// Home Header Section
		$this->start_controls_section(
			'section_content_header_section',
			[
				'label' => esc_html__( 'Header Home Section', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'link_header_logo',
			[
				'label'       => __( 'Link Header Logo', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your link header logo', 'bdevs-elementor' ),
				'default'     => __( '#home', 'bdevs-elementor' ),
				'label_block' => true,
			]	
		);
		$this->add_control(
			'image_header_logo',
			[
				'label'       => esc_html__( 'Image Logo Header Section', 'bdevs-elementor' ),
				'type'        => Controls_Manager::MEDIA,
				'dynamic'     => [ 'active' => true ],
				'label_block' => true,
				'description' => esc_html__( 'Upload image logo header section', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'show_social',
			[
				'label'       => __( 'Show Social', 'bdevs-elementor' ),
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
				'label' => esc_html__( 'Home Section Social Item', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'default' => [
					[
						'tab_title'   => esc_html__( 'Slide #1', 'bdevs-elementor' ),
						'tab_content' => esc_html__( 'I am item content. Click edit button to change this text.', 'bdevs-elementor' ),
					]
				],
				'fields' => [
					[
						'name'        => 'link_item',
						'label'       => esc_html__( 'Link Social Item', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( '' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'icon_item',
						'label'       => esc_html__( 'Icon Social Item', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( '' , 'bdevs-elementor' ),
						'label_block' => true,
					],
				],
			]
		);
		
		$this->end_controls_section();

		// Home Content Section
		$this->start_controls_section(
			'section_content_content_section',
			[
				'label' => esc_html__( 'Content Home Section', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'image_mouse_bg',
			[
				'label'       => esc_html__( 'Image Mouse Background', 'bdevs-elementor' ),
				'type'        => Controls_Manager::MEDIA,
				'dynamic'     => [ 'active' => true ],
				'label_block' => true,
				'description' => esc_html__( 'Upload image mouse background', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'title',
			[
				'label'       => __( 'Text Title', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your text title', 'bdevs-elementor' ),
				'default'     => __( 'Im Johnie <br> Doe.', 'bdevs-elementor' ),
				'label_block' => true,
			]	
		);
		$this->add_control(
			'typetext',
			[
				'label'       => __( 'Text TypeIt', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your text typeit', 'bdevs-elementor' ),
				'default'     => __( 'Im a freelance', 'bdevs-elementor' ),
				'label_block' => true,
			]	
		);
		$this->add_control(
			'text_decoration',
			[
				'label'       => __( 'List Text Decoration', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your list text', 'bdevs-elementor' ),
				'default'     => __( '"web designer.", "front end developer.", "coffee drinker."', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'subtext',
			[
				'label'       => __( 'Sub Text', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your sub text', 'bdevs-elementor' ),
				'default'     => __( 'From NYC.', 'bdevs-elementor' ),
				'label_block' => true,
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



		$this->end_controls_section();

	}

	public function render() {

		$settings  = $this->get_settings_for_display();
		extract($settings);
		?> 

<div class="active h-100">
	<header>
		<span class="toggle-nav"><i></i></span>
		<?php if ('' != $settings['image_header_logo']['url']): ?>
			<div class="logo">
				<a href="<?php echo wp_kses_post($settings['link_header_logo']); ?>">
					<img src="<?php echo wp_kses_post($settings['image_header_logo']['url']); ?>">
				</a>
			</div>
		<?php endif ?>
		<?php if ($settings['show_social'] === 'yes'): ?>
			<ul class="social">
				<?php
				foreach ( $settings['tabs'] as $item ) :
				?>
					<li>
						<a target="_blank" href="<?php echo wp_kses_post($item['link_item']); ?>">
							<?php echo wp_kses_post($item['icon_item']); ?>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	</header>
	<div class="content" style="display: block;">
		<div>
			<?php if ('' != $settings['title']): ?>
				<h1 class="mega"><?php echo wp_kses_post($settings['title']); ?></h1>
			<?php endif ?>
			<h1 class="delta">
				<?php echo wp_kses_post($settings['typetext']); ?>
				<?php if ('' != $settings['text_decoration']): ?>
					<span class="write"></span>
				<?php endif ?>
				<br>
				<?php echo wp_kses_post($settings['subtext']); ?>
			</h1>
		</div>
		<div id="home-background"></div>
	</div>
</div>


<script type="text/javascript">
	/* ==========================================================================
		Homepage Text Ticker
	   ========================================================================== */
	jQuery( document ).ready(function(){
		$('.write').typed({
			strings: [<?php echo wp_kses_post($settings['text_decoration']); ?>],
			typeSpeed: 100,
			backSpeed: 50,
			loop:true,
			startDelay:0,
		});
	});
</script>

<style type="text/css">
	.mouse {
		background-image: url('<?php echo wp_kses_post($settings['image_mouse_bg']['url']); ?>');
	}
</style>

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
			Line Animations
		   ========================================================================== */
		let skillTimeout = null;
		function animateLine(){
			$('hr').each(function(){
				let line = $(this);
				if(line.visible(true)){
					line.addClass('enabled');
				}
			});
			$('.skill-bar').each(function(i){
				let line = $(this);
				if(line.visible(true)){
					skillTimeout = setTimeout(function() {
						line.addClass('enabled');
					}, 250*i);
				}
			});
		}
		$('.content').scroll(function(){
			animateLine();
		})

		/* ==========================================================================
			Mouse Trailer
		   ========================================================================== */

		let mouse = $(".mouse"),
			mouseX = 0, 
			mouseY = 0,
			pageX = 0,
			pageY = 0,
			backgroundX = 0,
			backgroundY = 0,
			movementStrength = 370,
			height = movementStrength / $(window).height(),
			width = movementStrength / $(window).width(),
			h = document.querySelector('h1'),
			p = h.getBoundingClientRect();

		function mousePosition(){
			$(document).on('mousemove', function(e) {	
				   pageX = e.pageX - ($(window).width() / 6);
				   pageY = e.pageY - ($(window).height() / 6);
				   backgroundX = width * pageX * -0.8 - 30;
				   backgroundY = height * pageY * -0.8 - 30;
					if ($('#home-background:hover').length != 0) {
						mouseX = e.pageX;
						mouseY = e.pageY;
						mouse.removeClass('regular');
					}
					else{
						mouse.addClass('regular');
						mouseX = e.pageX;
						mouseY = e.pageY;
					}
					if ($('a:hover, .testomonial-slider-controls:hover, .about-slider-controls:hover, .portfolio-filter:hover,'
						+ ' .tabs-nav:hover, .page:not(.active) header:hover, .toggle-sidebar:hover, input[type=submit]:hover, button:hover').length != 0) {
						mouse.addClass('hover');
					}
					else{
						mouse.removeClass('hover');
					}
					if($('.portfolio-container li a:hover').length != 0){
						mouse.addClass('zoom');	
					}
					else{
						mouse.removeClass('zoom');
					}
			});
			let xp = 0, yp = 0, bxp = 0, byp = 0, mw = 0, mh = 0;
			let loop = setInterval(function(){
					if ($(window).width() > 960){
						xp += Math.round( (mouseX - xp) / 6 );
						yp += Math.round( (mouseY - yp) / 6 );
						bxp += Math.round( (backgroundX - bxp) / 12 );
						byp += Math.round( (backgroundY - byp) / 12 );

						$('h1').each(function(){
							var offset = $(this).offset();
							if ($('#home-background:hover').length != 0 ) {
								$(this).css({
									'--x' : (xp - offset.left) + 'px',
									'--y': (yp - offset.top) +'px',
									'--size': '125px',
								})
							}
							else{
								$(this).removeAttr('style');
							}
						})
						mouse.css({
							left: xp, 
							top: yp,
							backgroundPosition : bxp + "px " + Math.min(byp, 0) + "px",
						});
					}
			}, 20);
		}
		const isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ? true : false;
		if(!isMobile) {
			mousePosition();
		}
	</script>
<?php } ?>

<?php
}

}