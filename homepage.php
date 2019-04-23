<?php

	/*
	 * Template name: Homepage
	 *
	*/

	get_header();



?>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


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


<section class="section banner" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/BG_Header.svg');"> 
	<div class="container">
		<div class="columns banner_columns_1">
			<div class="column banner_column_responsive">
				<img class="banner_imgresponsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_banner.png" alt="">
			</div>
			<div class="column is-6-desktop is-7-tablet banner_column_1">
				<div class="banner_column_1_content">
					<h2 class="banner_column_1_content_title">Almacena tus monedas en un solo lugar</h2>
					<p class="banner_column_1_content_parrafo">Eros dictumst felis platea pharetra facilisi erat molestie nostra donec, fusce vulputate eleifend vivamus sagittis placerat et commodo, cum magnis ornare semper eu phasellus faucibus habitasse.</p>
					<div class="banner_boton">
						<div>
							<a class="btn_div"><em><i></i><i></i><i></i><i></i><i></i><i></i></em><span>Crea tu wallet</span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="column is-6-desktop is-5-tablet banner_column_2">
				<img class="banner_imagen" src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_banner.png" alt="">
			</div>
		</div>
		<div class="columns banner_columns_2">
			<div class="column banner_card-column">
				<div class="card banner_columns_2_card">
				  <div class="card-content banner_columns_2_card-cont">
						<div class="columns">
							<div class="column">
								<h3 class="banner_columns_2_card-titulo">BTC</h3>
								<p class="banner_columns_2_card-subtitulo">Bitcoin</p>
							</div>
							<div class="column banner_columns_2_column2">
								<div class="banner_columns_2_card-valor">
									<p class="banner_columns_2_card-valor_column1">
										0.1532
									</p>
									<p class="banner_columns_2_card-valor_column2">
										=$824.00
									</p>
									<img class="banner_columns_2_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Dropdown_3.png" alt="">
								</div>
							</div>
						</div>
				  </div>
				</div>	
			</div>
			<div class="column banner_card-column">
				<div class="card banner_columns_2_card">
				  <div class="card-content banner_columns_2_card-cont">
						<div class="columns">
							<div class="column">
								<h3 class="banner_columns_2_card-titulo">ETH</h3>
								<p class="banner_columns_2_card-subtitulo">Ethereum</p>
							</div>
							<div class="column">
								<div class="banner_columns_2_card-valor">
									<p class="banner_columns_2_card-valor_column1">
										0.1532
									</p>
									<p class="banner_columns_2_card-valor_column2">
										=$824.00
									</p>
									<img class="banner_columns_2_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Dropdown_3.png" alt="">
								</div>
							</div>
						</div>
				  </div>
				</div>	
			</div>
			<div class="column banner_card-column">
				<div class="card banner_columns_2_card">
				  <div class="card-content banner_columns_2_card-cont">
						<div class="columns">
							<div class="column">
								<h3 class="banner_columns_2_card-titulo">SPTX</h3>
								<p class="banner_columns_2_card-subtitulo">Bitcoin</p>
							</div>
							<div class="column">
								<div class="banner_columns_2_card-valor">
									<p class="banner_columns_2_card-valor_column1">
										0.1532
									</p>
									<p class="banner_columns_2_card-valor_column2">
										=$824.00
									</p>
									<img class="banner_columns_2_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Dropdown_3.png" alt="">
								</div>
							</div>
						</div>
				  </div>
				</div>	
			</div>
			<div class="column banner_card-column">
				<div class="card banner_columns_2_card">
				  <div class="card-content banner_columns_2_card-cont">
						<div class="columns">
							<div class="column">
								<h3 class="banner_columns_2_card-titulo">LTC</h3>
								<p class="banner_columns_2_card-subtitulo">Litecoin</p>
							</div>
							<div class="column">
								<div class="banner_columns_2_card-valor">
									<p class="banner_columns_2_card-valor_column1">
										0.1532
									</p>
									<p class="banner_columns_2_card-valor_column2">
										=$824.00
									</p>
									<img class="banner_columns_2_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Dropdown_3.png" alt="">
								</div>
							</div>
						</div>
				  </div>
				</div>	
			</div>
		</div>
	</div>
</section>

<section class="section beneficios">
	<div class="container">
		<h2 class="beneficios_titulo">Beneficios SwitchX Wallet</h2>
		<div class="beneficios_columns is is-desktop">
			<div class="beneficios_fila1">
				<div class="column is-2 beneficios_column_responsive">
					<img class="beneficios_img_responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/coin.png" alt="">
				</div>
				<div class="column beneficios_column">
					<img class="beneficios_img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/coin.png" alt="">
					<h3 class="beneficios_subtitulo">Lorem Ipsum</h3>
					<p class="beneficios_texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				</div>
				<div class="column is-2 beneficios_column_responsive">
					<img class="beneficios_img_responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/coin.png" alt="">
				</div>
				<div class="column beneficios_column">
					<img class="beneficios_img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/coin.png" alt="">
					<h3 class="beneficios_subtitulo">Lorem Ipsum</h3>
					<p class="beneficios_texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				</div>
			</div>
			<div class="beneficios_fila2">
				<div class="column is-2 beneficios_column_responsive">
					<img class="beneficios_img_responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/coin.png" alt="">
				</div>
				<div class="column beneficios_column">
					<img class="beneficios_img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/coin.png" alt="">
					<h3 class="beneficios_subtitulo">Lorem Ipsum</h3>
					<p class="beneficios_texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				</div>
				<div class="column is-2 beneficios_column_responsive">
					<img class="beneficios_img_responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/coin.png" alt="">
				</div>
				<div class="column beneficios_column">
					<img class="beneficios_img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/coin.png" alt="">
					<h3 class="beneficios_subtitulo">Lorem Ipsum</h3>
					<p class="beneficios_texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
				</div>
			</div>
		</div>
		<div class="beneficios_slick">
			<?php for ($i=0; $i <3 ; $i++) { ?>
			<div>
				<div class="columns is-mobile">
					<div class="column is-3">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/coin.png" alt="">
					</div>
					<div class="column">
						<h3 class="beneficios_subtitulo_responsive">Lorem Ipsum</h3>
						<p class="beneficios_texto_responsive">Lorem ipsum dolor sit amet consectetur adipiscing elit libero, tellus dictum auctor mauris torquent cubilia lectus.</p>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
		<div class="beneficios_contenedor_boton">
			<a class="btn_div beneficios_boton"><em><i></i><i></i><i></i><i></i><i></i><i></i></em><span>Crea tu wallet</span></a>
		</div>
	</div>
</section>

<section class="section funciones" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/BG_Header.svg');">
	<div class="container">
		<div class="columns">
			<div class="column is-12">
				<h2 class="funciones_titulo">Funciones de SwitchX Wallet</h2>
			</div>
		</div>
		<div class="funciones_columns">
			<div class="funciones_fila1">
				<div class="column funciones_column1">
					<div class="card funciones_card">
					  <div class="card-content">
					    <div class="content">
					      <img class="funciones_img1 funciones_img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/coin.png" alt="">
					      <h3 class="funciones_subtitulo">Lorem Ipsum</h3>
					      <p class="funciones_texto">Eros dictumst felis platea pharetra facilisi erat molestie nostra donec, fusce vulputate eleifend vivamus sagittis</p>
					    </div>
					  </div>
					</div>
				</div>
				<div class="column funciones_column2">
					<div class="card funciones_card">
					  <div class="card-content">
					    <div class="content">
					      <img class="funciones_img2 funciones_img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/coin.png" alt="">
					      <h3 class="funciones_subtitulo">Lorem Ipsum</h3>
					      <p class="funciones_texto">Eros dictumst felis platea pharetra facilisi erat molestie nostra donec, fusce vulputate eleifend vivamus sagittis</p>
					    </div>
					  </div>
					</div>
				</div>
			</div>
			<div class="funciones_fila2">
				<div class="column funciones_column3">
					<div class="card funciones_card">
					  <div class="card-content">
					    <div class="content">
					      <img class="funciones_img3 funciones_img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/coin.png" alt="">
					      <h3 class="funciones_subtitulo">Lorem Ipsum</h3>
					      <p class="funciones_texto">Eros dictumst felis platea pharetra facilisi erat molestie nostra donec, fusce vulputate eleifend vivamus sagittis</p>
					    </div>
					  </div>
					</div>
				</div>
				<div class="column funciones_column4">
					<div class="card funciones_card">
					  <div class="card-content">
					    <div class="content">
					      <img class="funciones_img4 funciones_img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/coin.png" alt="">
					      <h3 class="funciones_subtitulo">Lorem Ipsum</h3>
					      <p class="funciones_texto">Eros dictumst felis platea pharetra facilisi erat molestie nostra donec, fusce vulputate eleifend vivamus sagittis</p>
					    </div>
					  </div>
					</div>
				</div>
			</div>
		</div>
		<div class="columns">
			<div class="column funciones_column">
				<a class="btn_div beneficios_boton"><em><i></i><i></i><i></i><i></i><i></i><i></i></em><span>Crea tu wallet</span></a>
			</div>
		</div>
	</div>
</section>

<section class="section suscripcion">
	<div class="container">
		<div class="suscripcion_contenido">
			<h2 class="suscripcion_titulo">¿Alguna Duda?</h2>
			<p class="suscripcion_texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum accusamus nemo repellendus pariatur molestiae magnam quos. Eum accusamus nemo repellendus pariatur molestiae magnam quos.</p>
			<div class="field suscripcion_field">
  			<div class="control">
    			<input class="input suscripcion_input" type="text" placeholder="E-mail">
    			<a class="btn_div suscripcion_boton"><em><i></i><i></i><i></i><i></i><i></i><i></i></em><span>Suscribete</span></a>
  			</div>
			</div>
		</div>
	</div>
</section>



<?php get_footer(); ?>


