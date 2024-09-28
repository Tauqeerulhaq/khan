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
class BdevsBlogSection extends \Elementor\Widget_Base {

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
		return 'bdevs-blog-section';
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
		return __( 'Blog Section', 'bdevs-elementor' );
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
		return 'eicon-post-list';
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
		return [ 'blogsection', 'carousel' ];
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

		// Blog Header Section
		$this->start_controls_section(
			'section_content_blog_header_section',
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
				'default'     => __( '03', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'header_title_bot',
			[
				'label'       => __( 'Header Tittle Bottom', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your header title bottom', 'bdevs-elementor' ),
				'default'     => __( 'Blog', 'bdevs-elementor' ),
				'label_block' => true,
			]	
		);
		$this->end_controls_section();

		// Blog Content Header Section
		$this->start_controls_section(
			'section_content_header_section',
			[
				'label' => esc_html__( 'Blog Tittle Section', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'header_content_title',
			[
				'label'       => __( 'Header Content Tittle', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your header content title', 'bdevs-elementor' ),
				'default'     => __( 'Latest News', 'bdevs-elementor' ),
				'label_block' => true,
			]	
		);
		$this->end_controls_section();

		// Blog Content Section
		$this->start_controls_section(
			'section_content_blog_content_section',
			[
				'label' => esc_html__( 'Blog Content Section', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'post_number',
			[
				'label'       => __( 'Post Number', 'bdevs-elementor' ),
				'type'        => Controls_Manager::NUMBER,
				'placeholder' => __( 'Enter your post number', 'bdevs-elementor' ),
				'default'     => __( '3', 'bdevs-elementor' ),
				'label_block' => true,
			]	
		);
		$this->add_control(
			'post_order_by',
			[
				'label'       => __( 'Post Order By', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your text post order by', 'bdevs-elementor' ),
				'default'     => __( 'ID', 'bdevs-elementor' ),
				'label_block' => true,
			]	
		);
		$this->add_control(
			'post_order',
			[
				'label'     => esc_html__( 'Post Order', 'bdevs-elementor' ),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'asc'  => esc_html__( 'ASC', 'bdevs-elementor' ),
					'desc' => esc_html__( 'DESC', 'bdevs-elementor' ),
				],
				'default'   => 'asc',
			]
		);
		
		$this->end_controls_section();

		// Blog Footer Section
		$this->start_controls_section(
			'section_content_blog_footer_section',
			[
				'label' => esc_html__( 'Blog Footer Section', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'copyright_blog_footer',
			[
				'label'       => __( 'Copyright Blog Footer Section', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your copyright about footer section', 'bdevs-elementor' ),
				'default'     => __( '© 2023 Design by <a href="https://themeforest.net/user/shtheme/portfolio">Shtheme</a>. All Rights Reserved.', 'bdevs-elementor' ),
				'label_block' => true,
			]	
		);
		$this->add_control(
			'show_blog_footer_social',
			[
				'label'       => __( 'Show Social Blog Footer Section', 'bdevs-elementor' ),
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
				'label' => esc_html__( 'Slide Blog Footer Social', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'default' => [
					[
						'tab_title'   => esc_html__( 'Slide #7', 'bdevs-elementor' ),
						'tab_content' => esc_html__( 'I am item content. Click edit button to change this text.', 'bdevs-elementor' ),
					]
				],
				'fields' => [
					[
						'name'        => 'icon_social_footer_blog',
						'label'       => esc_html__( 'Icon Social Footer Item', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( '' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'link_social_footer_blog',
						'label'       => esc_html__( 'Link Social Footer Blog Item', 'bdevs-elementor' ),
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
			'show_blog_footer_section',
			[
				'label'       => __( 'Show Blog Footer Section', 'bdevs-elementor' ),
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
			<h1 data-value="<?php echo wp_kses_post($settings['header_content_title']); ?>">
					<?php echo wp_kses_post($settings['header_content_title']); ?>
				</h1>
			<span class="toggle-sidebar"><i></i></span>
			<hr>
		</div>

		<?php
		$wp_query = new \WP_Query(array(
			'posts_per_page' => wp_kses_post($settings['post_number']),
			'post_type' => 'post',
			'orderby' => wp_kses_post($settings['post_order_by']),
			'order' => wp_kses_post($settings['post_order'])
		));
		while($wp_query->have_posts()): $wp_query->the_post(); 
			$blog_content = get_post_meta(get_the_ID(),'_cmb_content_excerpt_1', true);
		?>
			<div class="blog-recent-post-item row">
				<div class="c12 end">
					<?php if (wp_get_attachment_url(get_post_thumbnail_id()) !='')  { ?>
						<a class="recent-post-img" href="<?php the_permalink(); ?>">
							<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="<?php the_title(); ?>">
							<span class="date"><span class="day"><?php echo get_the_date('j'); ?></span> <?php echo get_the_date('F Y'); ?></span>
						</a>
					<?php } ?>
					<h2 class="gamma entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p>
						<?php if ( '' !== wp_specialchars_decode($blog_content)): ?>
							<?php print wp_specialchars_decode($blog_content); ?>
						<?php else:?>
							<?php if(isset($akordian_redux_demo['blog_excerpt'])){?>
							<?php echo esc_attr(akordian_excerpt($akordian_redux_demo['blog_excerpt'])); ?>
							<?php }else{?>
							<?php echo esc_attr(akordian_excerpt(40)); 
							}?>
						<?php endif ?>
					</p>
					<div class="entry-meta">
						<span>By <?php echo get_the_author_posts_link(); ?></span>
						<span><time class="entry-date"><?php the_time(get_option( 'date_format' ));?></time></span>
						<span class="cat-links">
							<?php echo  get_the_category_list();?>
						</span>
						<?php comments_number( esc_html__('0 Comments', 'akordian'), esc_html__('1 Comment', 'akordian'), esc_html__('% Comments', 'akordian') ); ?>
						<a class="readmore" href="<?php the_permalink(); ?>">Read more</a>
					</div>
				</div>
			</div>
		<?php endwhile; ?>

		<?php if ( is_active_sidebar( 'sidebar-1' ) ){?>
			<div id="sidebar">
				<?php get_sidebar(); ?>
			</div>
		<?php } ?>
		
		<?php if ($settings['show_blog_footer_section'] === 'yes'): ?>
			<footer>
				<div class="row">
					<div class="c12 end">
						<div class="footer-inner">
							<?php if ('' != $settings['copyright_blog_footer']): ?>
								<p class="copyright"><?php echo wp_kses_post($settings['copyright_blog_footer']); ?></p>
							<?php endif ?>
							<?php if ($settings['show_blog_footer_social'] === 'yes'): ?>
								<ul class="social-footer">
									<?php
									foreach ( $settings['tabs6'] as $item ) :
									?>
										<li>
											<a target="_blank" href="<?php echo wp_kses_post($item['link_social_footer_blog']); ?>">
												<?php echo wp_kses_post($item['icon_social_footer_blog']); ?>
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