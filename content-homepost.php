<?php
/**
 * @package SKT Simple
 */
?>
			<div class="news-box">
            
				<div class="news-thumb">
                <?php if (has_post_thumbnail() ){ ?>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				<?php }else{?>
                	<a href="<?php echo esc_url('#');?>"><img src="<?php echo esc_url( get_template_directory_uri()); ?>/images/post-thumb-small.jpg"></a>
                <?php } ?>                    
					<span class="home-post-comment"><i class="fa fa-comment"></i><a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></span>
				</div>
                
				<div class="news">
					<h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
					<div class="post-admin-date">
						<span class="post-admin"><?php the_author(); ?></span>
						<span class="post-date"><?php echo get_the_date(); ?></span>
						<div class="clear"></div>	
					</div>
					<?php the_excerpt(); ?>
					<a class="read-more" href="<?php the_permalink(); ?>"><?php esc_attr_e('Read More','skt-simple');?></a>
				</div>
			</div>            
<!-- blog-post-repeat -->