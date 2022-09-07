<?php get_header(); the_post(); ?>

<div class="content-wrapper oh">

	<!-- Content -->
	<section class="content post-single pt-70 pt-mdm-60">
		<div class="container relative">
			<div class="row">

				<!-- post content -->
				<div class="col-md-9 post-content mb-50">

					<!-- large post -->
					<article class="entry-item large-post">

						<div class="entry-header">
							<h1 class="entry-title"><?php the_title(); ?></h1>
						</div>

						<div class="entry-wrap">
							<div class="entry">

								<div class="entry-content">
									<div class="article">
										<?php the_content(); ?>
									</div>

									<!-- tags -->
									<div class="entry-tags tags mb-50 mt-40 clearfix">
										<?php the_tags( '', '' ); ?>
									</div>

									<div class="entry-meta-wrap clearfix">
										<ul class="entry-meta">
											<li class="entry-date">
												<?php the_time( 'j F Y H:i' ); ?>
											</li>
											<li class="entry-comments">
												<a href="<?php the_permalink() ?>#comments>"><?php comments_number() ?></a>
											</li>
										</ul>

									</div>

								</div>
							</div>
						</div>
					</article> <!-- end large post -->
				</div> <!-- end col -->

			</div> <!-- end row -->
		</div> <!-- end container -->
	</section> <!-- end content -->

	<?php get_footer() ?>
