<div class="reign-fallback-header version-four reign-menu-center-logo">
	<div class="container">
		<div class="rg-hdr-v4-row-1">
			<div class="rg-hdr-v4-row-1-col">
				<div class="site-branding">
					<div class="logo">
						<?php
						if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
							the_custom_logo();
						} else {
							if ( is_front_page() && is_home() ) :
								?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php else : ?>
								<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php
							endif;
						}

						$reign_header_sticky_menu_enable				 = get_theme_mod( 'reign_header_sticky_menu_enable', true );
						$reign_header_sticky_menu_custom_style_enable	 = get_theme_mod( 'reign_header_sticky_menu_custom_style_enable', false );
						$sticky_menu_logo								 = get_theme_mod( 'reign_sticky_header_menu_logo', '' );

						if ( $reign_header_sticky_menu_enable && $reign_header_sticky_menu_custom_style_enable && $sticky_menu_logo ) {
							?>
							<a href="<?php echo get_home_url(); ?>" class="sticky-menu-logo custom-logo-link" rel="home" itemprop="url">
								<img src="<?php echo $sticky_menu_logo; ?>" class="custom-logo" alt="<?php bloginfo( 'name' ); ?>" itemprop="logo">
							</a>
							<?php
						}
						?>
					</div>
				</div>
			</div>

			<div class="rg-hdr-v4-row-2-col">
				<?php do_action( 'reign_header_v4_middle_section_html' ); ?>
			</div>

			<div class="rg-hdr-v4-row-3-col">
				<div class="header-right no-gutter wb-grid-flex wb-grid-center">
					<?php
					$reign_header_default_icons_set	 = reign_header_default_icons_set();
					$reign_header_icons_set			 = get_theme_mod( 'reign_header_icons_set', $reign_header_default_icons_set );
					foreach ( $reign_header_icons_set as $header_icon ) {
						get_template_part( 'template-parts/header-icons/' . $header_icon, '' );
					}
					?>
				</div>
			</div>
		</div>
	</div>

	<div class="rg-hdr-v4-row-2">
		<div class="container">
			<div class="wb-grid">
				<div class="header-right no-gutter wb-grid-flex wb-grid-center">
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<span class="menu-toggle wbcom-nav-menu-toggle" aria-controls="primary-menu" aria-expanded="false">
							<span></span>
							<span></span>
							<span></span>
						</span>
						<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu', 'fallback_cb' => '', 'container' => false, 'menu_class' => 'primary-menu', ) ); ?>
					</nav>
					<div class="rg-version-four-menu-top-icon">
						<?php
						$reign_header_default_icons_set	 = reign_header_default_icons_set();
						$reign_header_icons_set			 = get_theme_mod( 'reign_header_icons_set', $reign_header_default_icons_set );
						foreach ( $reign_header_icons_set as $header_icon ) {
							get_template_part( 'template-parts/header-icons/' . $header_icon, '' );
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>