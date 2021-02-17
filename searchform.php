<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
  <div class="input-group">
    <input type="search" class="form-control rounded mr-1"
        placeholder="<?php echo esc_attr_x( 'Scrivi la tua ricerca…', 'placeholder' ) ?>"
        value="<?php echo get_search_query() ?>" name="s"
        title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    <input type="submit" class="btn-primary rounded border-0"
       value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
  </div>
</form>
