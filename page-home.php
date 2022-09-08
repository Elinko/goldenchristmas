<?php
/**
 * The template for displaying all pages 
 *vytvoril som ja
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Botiga
 */

  /*
 Template Name: Home page
 */


get_header();
?>
<main id="primary" class="site-main page-home botiga-page-builder-mode <?php echo esc_attr( apply_filters( 'botiga_content_class', '' ) ); ?>">
	<div class="entry-content">

		<?php
			echo do_shortcode('[smartslider3 slider="2"]');
		?>
		<h3 class="has-text-align-center">Nájdete nás</h3>
	
		<div class="has-palette-8-color-6-color has-palette-8-color-1-background-color has-text-color has-background">
			<?php echo the_content(); ?>
			<!-- OC Galéria, Toryská 5, 040 11 Košice <strong>otvárame 11.11.2021</strong><br>Forum Poprad, Námestie sv. Egídia
			3290/124. Poprad <strong>otvárame 13.11.2021</strong><br>Atrium Optima, Moldavská cesta 32, 04011 Košice
			<strong>otvárame 18.11.2021</strong><br>Eperia Shopping Mall, Arm. gen. Svobodu 25, 08001 Prešov
			<strong>otvárame 19.11.2021</strong><br>OC Novum, Námestie Legionárov 15267/1, 08001 Prešov <strong>otvárame
				26.11.2021</strong> -->
		</div>
	
		<h3 class="has-text-align-center">TOP produkty</h3>
	
		<?php
			echo do_shortcode('[best_selling_products limit="4"] ');
		?>
	
		<h3 class="has-text-align-center">Najnovšie produkty</h3>
	
		<?php
			echo do_shortcode('[top_rated_products limit="4"] ');
		?>
	
		<h3 class="has-text-align-center">Zľava</h3>
	
		<?php
			echo do_shortcode('[products  limit="8" on_sale="true" orderby="popularity"  columns="4" ] ');
		?>
		
		<h3 class="has-text-align-center">Spokojní zákazníci</h3>

		<div class="slick-responsive">
			<?php  
				$gallery = get_field('galeria');
 
			?>

			<?php foreach ($gallery as $key => $value): ?>

				 
				<a href="<?php echo $value; ?>">
					<img src="<?php echo $value; ?>" alt="">
				</a>
				<!-- <div>
					<img src="<?php echo $value; ?>" alt="">
				</div> -->
			<?php endforeach; ?>

		</div>
	
		<div class="wp-block-columns">
			<div class="wp-block-column has-palette-8-color-5-background-color has-background">
				<div class="wp-duotone-filter-6300da790b86e wp-block-image">
					<figure class="aligncenter size-large is-resized"><img
							src="https://www.goldenchristmas.sk/wp-content/uploads/2021/09/c-unlock.svg" alt=""
							class="wp-image-518 ls-is-cached lazyloaded" width="68" height="68"
							data-src="https://www.goldenchristmas.sk/wp-content/uploads/2021/09/c-unlock.svg"
							decoding="async"><noscript><img
								src="https://www.goldenchristmas.sk/wp-content/uploads/2021/09/c-unlock.svg" alt=""
								class="wp-image-518" width="68" height="68" data-eio="l" /></noscript></figure>
				</div>
	
				<style>
				.wp-duotone-filter-6300da790b86e img {
					filter: url(#wp-duotone-filter-6300da790b86e );
				}
				</style>
	
				<svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 0 0" width="0" height="0" focusable="false"
					role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
					<defs>
						<filter id="wp-duotone-filter-6300da790b86e">
							<feColorMatrix type="matrix" values=".299 .587 .114 0 0
								.299 .587 .114 0 0
								.299 .587 .114 0 0
								0 0 0 1 0"></feColorMatrix>
							<feComponentTransfer color-interpolation-filters="sRGB">
								<feFuncR type="table" tableValues="0 0.49803921568627"></feFuncR>
								<feFuncG type="table" tableValues="0 0.49803921568627"></feFuncG>
								<feFuncB type="table" tableValues="0 0.49803921568627"></feFuncB>
							</feComponentTransfer>
						</filter>
					</defs>
				</svg>
	
	
	
	
				<h4 class="has-text-align-center"><strong>Bezpečný náku</strong>p</h4>
			</div>
	
	
	
			<div class="wp-block-column has-palette-8-color-5-background-color has-background">
				<div class="wp-duotone-filter-6300da790b960 wp-block-image">
					<figure class="aligncenter size-large is-resized"><img
							src="https://www.goldenchristmas.sk/wp-content/uploads/2021/09/c-check.svg" alt=""
							class="wp-image-519 ls-is-cached lazyloaded" width="68" height="68"
							data-src="https://www.goldenchristmas.sk/wp-content/uploads/2021/09/c-check.svg"
							decoding="async"><noscript><img
								src="https://www.goldenchristmas.sk/wp-content/uploads/2021/09/c-check.svg" alt=""
								class="wp-image-519" width="68" height="68" data-eio="l" /></noscript></figure>
				</div>
	
				<style>
				.wp-duotone-filter-6300da790b960 img {
					filter: url(#wp-duotone-filter-6300da790b960 );
				}
				</style>
	
				<svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 0 0" width="0" height="0" focusable="false"
					role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
					<defs>
						<filter id="wp-duotone-filter-6300da790b960">
							<feColorMatrix type="matrix" values=".299 .587 .114 0 0
								.299 .587 .114 0 0
								.299 .587 .114 0 0
								0 0 0 1 0"></feColorMatrix>
							<feComponentTransfer color-interpolation-filters="sRGB">
								<feFuncR type="table" tableValues="0 0.49803921568627"></feFuncR>
								<feFuncG type="table" tableValues="0 0.49803921568627"></feFuncG>
								<feFuncB type="table" tableValues="0 0.49803921568627"></feFuncB>
							</feComponentTransfer>
						</filter>
					</defs>
				</svg>
	
	
	
	
				<h4 class="has-text-align-center"><strong>Overený tovar</strong></h4>
			</div>
	
	
	
			<div class="wp-block-column has-palette-8-color-5-background-color has-background">
				<div class="wp-duotone-filter-6300da790ba40 wp-block-image">
					<figure class="aligncenter size-large is-resized"><img
							src="https://www.goldenchristmas.sk/wp-content/uploads/2021/09/c-time.svg" alt=""
							class="wp-image-521 ls-is-cached lazyloaded" width="68" height="68"
							data-src="https://www.goldenchristmas.sk/wp-content/uploads/2021/09/c-time.svg"
							decoding="async"><noscript><img
								src="https://www.goldenchristmas.sk/wp-content/uploads/2021/09/c-time.svg" alt=""
								class="wp-image-521" width="68" height="68" data-eio="l" /></noscript></figure>
				</div>
	
				<style>
				.wp-duotone-filter-6300da790ba40 img {
					filter: url(#wp-duotone-filter-6300da790ba40 );
				}
				</style>
	
				<svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 0 0" width="0" height="0" focusable="false"
					role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
					<defs>
						<filter id="wp-duotone-filter-6300da790ba40">
							<feColorMatrix type="matrix" values=".299 .587 .114 0 0
								.299 .587 .114 0 0
								.299 .587 .114 0 0
								0 0 0 1 0"></feColorMatrix>
							<feComponentTransfer color-interpolation-filters="sRGB">
								<feFuncR type="table" tableValues="0 0.49803921568627"></feFuncR>
								<feFuncG type="table" tableValues="0 0.49803921568627"></feFuncG>
								<feFuncB type="table" tableValues="0 0.49803921568627"></feFuncB>
							</feComponentTransfer>
						</filter>
					</defs>
				</svg>
	
	
	
	
				<h4 class="has-text-align-center"><strong>Rýchle dodanie</strong></h4>
			</div>
	
	
	
			<div class="wp-block-column has-palette-8-color-5-background-color has-background">
				<div class="wp-duotone-filter-6300da790bb1f wp-block-image">
					<figure class="aligncenter size-large is-resized"><img
							src="https://www.goldenchristmas.sk/wp-content/uploads/2021/09/c-pin.svg" alt=""
							class="wp-image-523 ls-is-cached lazyloaded" width="68" height="68"
							data-src="https://www.goldenchristmas.sk/wp-content/uploads/2021/09/c-pin.svg"
							decoding="async"><noscript><img
								src="https://www.goldenchristmas.sk/wp-content/uploads/2021/09/c-pin.svg" alt=""
								class="wp-image-523" width="68" height="68" data-eio="l" /></noscript></figure>
				</div>
	
				<style>
				.wp-duotone-filter-6300da790bb1f img {
					filter: url(#wp-duotone-filter-6300da790bb1f );
				}
				</style>
	
				<svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 0 0" width="0" height="0" focusable="false"
					role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
					<defs>
						<filter id="wp-duotone-filter-6300da790bb1f">
							<feColorMatrix type="matrix" values=".299 .587 .114 0 0
								.299 .587 .114 0 0
								.299 .587 .114 0 0
								0 0 0 1 0"></feColorMatrix>
							<feComponentTransfer color-interpolation-filters="sRGB">
								<feFuncR type="table" tableValues="0 0.49803921568627"></feFuncR>
								<feFuncG type="table" tableValues="0 0.49803921568627"></feFuncG>
								<feFuncB type="table" tableValues="0 0.49803921568627"></feFuncB>
							</feComponentTransfer>
						</filter>
					</defs>
				</svg>
	
	
	
	
				<h4 class="has-text-align-center"><strong>2 pobočky</strong></h4>
			</div>
		</div>
	
		<div class="wp-block-columns">
			<div class="wp-block-column" style="flex-basis:33.33%">
				<iframe loading="lazy" style="border:none;overflow:hidden" scrolling="no" allowfullscreen="true"
					allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" width="267"
					height="476" frameborder="0"
					 src="https://www.facebook.com/plugins/video.php?height=476&amp;href=https%3A%2F%2Fwww.facebook.com%2Fgoldenchristmas1%2Fvideos%2F819407065571131%2F&amp;show_text=false&amp;width=267&amp;t=0"
					 ></iframe>
			</div>
	
	
	
			<div class="wp-block-column" style="flex-basis:66.66%">
				<h3>O nás</h3>
	
	
	
				<p>Naša rodinná firma pôsobí na trhu od roku 2020, kedy sme spustili predaj umelých vianočných stromčekov
					a&nbsp;dekorácií. Pomaly sa rozrastáme aj o&nbsp;handmade tvorbu a&nbsp;tým vznikol jediný stolový
					Handmade kalendár 2022 na Slovensku.</p>
	
	
	
				<p>Aktuálne ponúkame pletené handmade košíky, príborníky, zvončeky a&nbsp;mnoho ďalšieho z&nbsp;našej dielne
					a&nbsp;v&nbsp;ponuke nájdete bohatý sortiment krásnych umelých stromčekov od obľúbených jedlí, borovíc,
					smreku, rôzne druhy zasnežených stromčekov a&nbsp;samozrejme Vami obľubené 100 % a&nbsp;50 % 3D umelé
					vianočné stromčeky a&nbsp;dekorácie z&nbsp;ktorých si určite vyberiete.</p>
			</div>
		</div>
	</div>

 

</main><!-- #main -->

<?php
do_action( 'botiga_do_sidebar' );
get_footer();