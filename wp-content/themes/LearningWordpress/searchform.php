<!-- <form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
    <div>
        <label class="screen-reader" for="s">Search for:</label>
        <input type="text" name="s" value="" id="s" placeholder="<?php the_search_query(); ?>" >
        <input type="submit" id="searchsubmit" value="Search">
    </div>
</form> -->

<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
	<div id="custom-search-input">
	    <div class="input-group col-md-12">
	        <input type="text" name="s" id="s" class="form-control input-lg" placeholder="<?php the_search_query(); ?>" />
	            <span class="input-group-btn">
	                <button class="btn btn-info btn-lg" type="submit" id="searchsubmit" value="Search">
	                    <i class="glyphicon glyphicon-search"></i>
	                </button>
	            </span>
	    </div>
	</div>
</form>