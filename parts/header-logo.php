<div id="header-logo">
  <div class="content-wrap"> 
   <a href="#"></a>           
    <form role="search" method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="search-wrap">
  
        <input type="search" placeholder="<?php echo esc_attr( 'Search…', 'presentation' ); ?>" name="s" id="search-input" value="<?php echo esc_attr( get_search_query() ); ?>" />
        
    </div>
  </form>
  </div>
</div>