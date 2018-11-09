<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package FairyTales
 */
get_header(); ?>
<div class="container-fluid">
    <div class="row">
        <div id="main" class="col-12 clearfix" role="main">
            <article class="posti" itemscope itemtype="http://schema.org/BlogPosting">
				<?php while ( have_posts() ) : the_post();?>
                <h1 class="post-title" itemprop="name headline"><?php echo get_the_title(); // 文章标题 ?></h1>
                <div class="post-meta">
                    <p>Written by <a itemprop="name" href="<?php echo home_url(); ?>/langzi" rel="author"><?php the_author(); ?></a> with ♥ on <time datetime="<?php the_time('c'); ?>"itemprop="datePublished"><?php the_time('M j, Y'); ?></time> in <?php the_category( '. ' ); ?></p>
                </div>

                <div class="post-content" itemprop="articleBody">
					<?php the_content(); ?>
                </div>

                <div style="display:block;margin-bottom:2em;" class="clearfix">
                    <section style="float:left;">
                        <span itemprop="keywords" class="tags"><?php 
							if(get_the_tag_list()) { 
								echo get_the_tag_list('Tags: ',',','.');
							} else echo "No Tags."
							?></span>
                    </section>
                    <section style="float:right;">
                        <span><a id="btn-comments" href="javascript:isComments();">show comments</a></span> · <span><a href="javascript:goBack();">back</a></span> · 
                        <span><a href="<?php echo home_url(); ?>">home</a></span>
                    </section>
                </div>
                <?php //$this->need('comments.php'); ?>
				<?php endwhile; ?>
            </article>
        </div>
    </div>
</div>


<?php get_footer();