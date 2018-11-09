<?php get_header();?>
<!-- 
 * 每个人都有属于自已的故事，我们编织着、叙述着，只为了那个必定动人的结局。
 * 爱上自已的故事，爱上别人的故事，交织着的，是美好，是快乐，是幸福。
 * 本项目属于 ProjectNatureSimple
 * 
 * @package Story
 * @author Trii Hsia
 * @version v1@.0 #20181009
 * @link https://yumoe.com
-->
<?php //$posts = query_posts($query_string . '&orderby=date&showposts=8'); ?>
<?php //if (  is_home() || is_front_page() ) {
	//$posts = query_posts($query_string . '&orderby=date&showposts=8');
//} ?>
<div class="container-fluid">
    <div class="row">
		<div id="main" role="main">
			<ul class="post-list clearfix">
			<?php if ( have_posts() ) : ?>
		     <?php /* Start the Loop */ ?>
		      <?php while ( have_posts() ) : the_post(); ?>
				<li class="post-item grid-item" itemscope itemtype="http://schema.org/BlogPosting">
					<a class="post-link" href="<?php the_permalink(); ?>">
						<img src="https://img.langzi.xin/bg.php?return=<?php the_ID(); ?>" style="width: 252px; height: 157.5px; " >
						<h3 class="post-title"><time class="index-time" datetime="<?php the_time('c'); ?>" itemprop="datePublished"><?php the_time('M j, Y'); ?></time><br><?php echo get_the_title(); // 文章标题 ?></h3>
						<div class="post-meta">
							<?php $the_post_category = get_the_category(get_the_ID()); echo $the_post_category[0]->cat_name; ?>
						</div>
					</a>
				</li>
			 <?php endwhile; ?>
		    <?php endif; ?>
			</ul>
		</div>
	</div>
</div>

<div class="container-fluid">
    <div class="row">
		<div class="nav-page">
			<?php echo paginate_links( array(
	                 'prev_next'          => true,
	                 'prev_text'          => «,
		             'next_text'          => »,
    	             'mid_size'           => 2,
	                 'end_size'           => 3,
	                 'mid_size'           => 2,
	                 
	                 
	              ));?>
		</div>
	</div>
</div>

<?php get_footer();?>
