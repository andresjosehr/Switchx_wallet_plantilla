<?php

	/*
	 * Template name: ICO MAKER
	 *
	*/

	get_header();



?>

  <!-- The overlay -->
  <div id="myNav" class="overlay">

    <!-- Button to close the overlay navigation -->
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <!-- Overlay content -->
    <div class="overlay-content">
      <a href="#">About</a>
      <a href="#">Services</a>
      <a href="#">Clients</a>
      <a href="#">Contact</a>
    </div>

  </div>
  <!-- END The overlay -->

	
	<section class="section ico_banner" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/back_ico.png');">
		<div class="container">
			<div class="columns ico_banner_columns">
				<div class="column ico_banner_column1">
					<h2 class="ico_banner_titulo">Empieza a crear tu propia ICO en un solo lugar</h2>
					<p class="ico_banner_text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit quam explicabo, labore magni illum, soluta nisi. Vel ipsam deleniti consectetur eaque deserunt fugiat maiores quas, in nam dolor unde ea.
					</p>
					<div class="banner_boton">
						<div>
							<a class="btn_div ico_btn"><em><i></i><i></i><i></i><i></i><i></i><i></i></em><span>Start Now</span></a>
						</div>
					</div>
				</div>
				<div class="column ico_banner_column2">
					<img class="ico_banner_img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner_icomaker_img.png" alt="">
				</div>
			</div>
		</div>
		
	</section>

	<section>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/como_empezar.png" alt="">
	</section>

	<section class="section exito">
		<div class="container">
			<h2 class="exito_titulo">Casos de Exito</h2>
			<div class="columns exito_columns1" align="center">
				<?php for ($i=0; $i <3 ; $i++) {  ?>
					<div class="column">
						<div class="card exito_card">
						  <div class="card-content exito_card-contenido">
						  	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Logo_Techlatam.png" alt="">
						    <div class="content">
						     <p class="exito_card-texto"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris. Vel ipsam deleniti consectetur</p>
						     <a href="#">Ver más</a>
						      <br>
						    </div>
						  </div>
						</div>
					</div>
				<?php } ?>
			</div>
			<div class="columns exito_columns2" align="center">
				<div class="column is-2"></div>
				<?php for ($i=0; $i <2 ; $i++) {  ?>
					<div class="column is-4">
						<div class="card exito_card">
						  <div class="card-content exito_card-contenido">
						  	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Logo_Techlatam.png" alt="">
						    <div class="content">
						     <p class="exito_card-texto"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris. Vel ipsam deleniti consectetur</p>
						     <a href="#">Ver más</a>
						      <br>
						    </div>
						  </div>
						</div>
					</div>	
				<?php } ?>
				<div class="column is-2"></div>
			</div>
			<div class="exito-slide columns" align="center">
				<?php for ($i=0; $i <=5 ; $i++) { ?>
							<div class="column">
								<div class="card exito_card">
								  <div class="card-content exito_card-contenido">
								  	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Logo_Techlatam.png" alt="">
								    <div class="content">
								     <p class="exito_card-texto"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris. Vel ipsam deleniti consectetur</p>
								     <a href="#">Ver más</a>
								      <br>
								    </div>
								  </div>
								</div>
							</div>
				<?php } ?>
			</div>
		</div>
	</section>

	<section class="section crear">
		<div class="container">
			<h2 class="crear_titulo">¿Qué necesitas para crear tu ICO con nosotros?</h2>
			<div class="columns crear_columns">
				<?php for ($i=1; $i <4 ; $i++) { ?>
					<div class="column is-4 crear_column">
						<div class="card crear_card-contenido">
							<div class="card-content">
								<div class="crear_card_header">
									<p class="crear_numero"><?php echo $i; ?></p>
							  	<img class="crear_imagen" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Illustration_exchange3.png" alt="">
							  </div>
							  <h2 class="crear_subtitulo">Lorem Ipsum</h2>
							   <div class="content">
							    <p class="exito_card-texto">Lorem ipsum dolor sit amet consectetur adipiscing </p>
							    <br>
							  </div>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
			<div align="center">
				<a class="btn_div crear_btn"><em><i></i><i></i><i></i><i></i><i></i><i></i></em><span>Start Now</span></a>
			</div>
		</div>
	</section>

	<section class="section testimonios">
		<div class="container">
			<h3 class="testimonios_titulo">Testimonios</h3>
			<div class="testimonios-slide">
				<?php for ($i=0; $i <6 ; $i++) { ?>
					<div>
						<div class="testimonios_contenido">
							<img class="testimonios_img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/leon-tan-1154025-unsplash.png" alt="">
							<p class="testimonios_texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla labore excepturi odit architecto nemo at similique, aliquid quod vel nesciunt voluptatibus suscipit, natus aspernatur, velit cupiditate ut atque quisquam, enim.</p>
							<p class="testimonios_info">Natalia Romero R. - El Salvador</p>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>


	<section class="section suscripcion ico">
	<div class="container">
		<div class="suscripcion_contenido">
			<h2 class="suscripcion_titulo">¿Alguna Duda?</h2>
			<p class="suscripcion_texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum accusamus nemo repellendus pariatur molestiae magnam quos. Eum accusamus nemo repellendus pariatur molestiae magnam quos.</p>
			<div class="field suscripcion_field">
  			<div class="control">
    			<input style="" class="input suscripcion_input" type="text" placeholder="E-mail">
    			<input type="submit" class="suscripcion_submit ico_submit" value="Suscribete">
  			</div>
			</div>
		</div>
	</div>
</section>



	  <script type="text/javascript">
	    $(document).ready(function(){

		    $('.testimonios-slide').slick({
		      slidesToShow: 1,
		      slidesToScroll: 1,
		      autoplay: false,
		      autoplaySpeed: 2000,
		      dots: false,
		    });

		    $('.exito-slide').slick({
		      slidesToShow: 2,
		      slidesToScroll: 2,
		      autoplay: false,
		      autoplaySpeed: 2000,
		      dots: true,
		    });

	    });   
  </script>

<?php get_footer(); ?>


