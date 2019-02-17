<?php get_header() ?>

<main id="fullpage">
	<section class="section " id="section0">
		<video id="myVideo" loop muted data-autoplay>
			<source src="<?php echo get_template_directory_uri(); ?>/assets/videos/vid.mp4" type="video/mp4">
			<source src="<?php echo get_template_directory_uri(); ?>/assets/videos/vid.webm" type="video/webm">
		</video>
		<div class="layer">
			<h1><?php echo get_bloginfo('name') ?></h1>
			
			<a href="#Servicios"><svg class="animated infinite fadeOutDown slow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><style></style></defs><path d="M500 0c-275.702 0-500 224.298-500 500s224.298 500 500 500 500-224.298 500-500-224.298-500-500-500zm0 927.536c-235.748 0-427.536-191.788-427.536-427.536s191.788-427.536 427.536-427.536 427.536 191.788 427.536 427.536-191.788 427.536-427.536 427.536zM498.793 672.217l281.887-257.248h-563.775l281.888 257.248z"/></svg></a>
		</div>
	</section>

	<section class="section" id="section1">
		<h2>Nuestros servicios</h2>

		<div class="masonry">
			<?php
				$arg = array(
					'posts_per_page' => -1
				);
			
				$get_arg = new WP_Query( $arg );
			
				while ( $get_arg->have_posts() ) {
					$get_arg->the_post();
				?>

				<figure class="item">
					<div class="img-container"><?php the_post_thumbnail() ?></div>
					<figcaption>
						<h3><?php the_title() ?></h3>
						<p><?php the_excerpt() ?></p>
					</figcaption>
				</figure>

				<?php } wp_reset_postdata();
			?>
		</div>
	</section>

	<section class="section" id="section2">
		<div class="slide">
			<h2>Los mejores eventos</h2>
			<img src="<?= get_theme_file_uri() ?>/assets/images/imagen01.jpg')" alt="">
		</div>
		<div class="slide">
			<h2>Sólo aquí</h2>
			<img src="<?= get_theme_file_uri() ?>/assets/images/imagen02.jpg')" alt="">
		</div>
		<div class="slide">
			<h2>Una productora inigualable</h2>
			<img src="<?= get_theme_file_uri() ?>/assets/images/imagen03.jpg')" alt="">
		</div>
		<div class="slide">
			<h2>No te los puedes perder</h2>
			<img src="<?= get_theme_file_uri() ?>/assets/images/imagen04.jpg')" alt="">
		</div>
		<div class="slide">
			<h2>Para siempre en tu memoria</h2>
			<img src="<?= get_theme_file_uri() ?>/assets/images/imagen05.jpg')" alt="">
		</div>
		<div class="slide">
			<h2>Lo mejor de lo mejor</h2>
			<img src="<?= get_theme_file_uri() ?>/assets/images/imagen06.jpg')" alt="">
		</div>
		<div class="slide">
			<h2>Eventos que encantan</h2>
			<img src="<?= get_theme_file_uri() ?>/assets/images/imagen07.jpg')" alt="">
		</div>
		<div class="slide">
			<h2>DJ, música, diversión</h2>
			<img src="<?= get_theme_file_uri() ?>/assets/images/imagen08.jpg')" alt="">
		</div>
		<div class="slide">
			<h2>Siempre contigo</h2>
			<img src="<?= get_theme_file_uri() ?>/assets/images/imagen09.jpg')" alt="">
		</div>
		<div class="slide">
			<h2>Una experiencia inolvidable</h2>
			<img src="<?= get_theme_file_uri() ?>/assets/images/imagen10.jpg')" alt="">
		</div>
	</section>

	<section class="section" id="section3">
		<h2>Contáctanos !</h2>
		<form class="formulario" method="post">
			<p class="form-group">
				<label style="display: block;"> Tu Nombre (requerido):
					<br>
					<span>
						<input type="text" name="your-name" value="" size="40" aria-required="true" aria-invalid="false">
					</span>
				</label>
			</p>
			<p class="form-group">
				<label style="display: block;"> Tu Mail (requerido):
					<br>
					<span>
						<input type="email" name="your-email" size="40" aria-required="true" aria-invalid="false">
					</span>
				</label>
			</p>
			<p class="form-group">
				<label style="display: block;"> Asunto:
					<br>
					<span>
						<input type="text" name="your-subject" value="" size="40" aria-invalid="false">
					</span>
				</label>
			</p>
			<p class="form-group">
				<label style="display: block;"> Tu Mensaje:
					<br>
					<span>
						<textarea name="your-message" cols="40" rows="10" aria-invalid="false"></textarea>
					</span>
				</label>
			</p>
			<p class="form-group">
				<input type="submit" value="Enviar !">
			</p>
		</form>
	</section>
</main>

<?php get_footer() ?>