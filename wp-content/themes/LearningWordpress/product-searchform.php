<form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
	<div class="input-group">
	<label class="screen-reader-text" for="s"><?php _e( 'Search for:', 'woocommerce' ); ?></label>
	<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search Products&hellip;', 'placeholder', 'woocommerce' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'woocommerce' ); ?>" />
	<!-- <input type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'woocommerce' ); ?>" /> -->
	<button class="btn btn-info btn-lg" id="searchsubmit" type="submit">
		<i class="glyphicon glyphicon-search"></i>
	</button>
	<input type="hidden" name="post_type" value="product" />
	</div>
</form>

<!-- <form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
	
			<div class="col-sm-6 searh-holder">
				<div id="custom-search-input">
					<div class="input-group col-md-12">
						<input type="text" class="form-control input-lg" placeholder="Buscar" />
						<span class="input-group-btn">
							<button class="btn btn-info btn-lg" type="button">
								<i class="glyphicon glyphicon-search"></i>
							</button>
						</span>
					</div>
				</div>
			</div>
		
</form> -->