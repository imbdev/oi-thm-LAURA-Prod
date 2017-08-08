<form action="<?php echo home_url( '/' ); ?>" method="get" class="the-search-form">
    <fieldset>
		<div class="input-group">
			<input type="text" name="s" id="search"  value="<?php the_search_query(); ?>" class="form-control" />
			<!-- <input type="text" name="s" id="search" placeholder="<?php _e("Search","wpbootstrap"); ?>" value="<?php the_search_query(); ?>" class="form-control" /> -->
			<span class="input-group-btn">
				<button id="search-btn" type="submit" class="btn btn-default"><?php _e("Search","wpbootstrap"); ?></button>
			</span>
		</div>
    </fieldset>
</form>