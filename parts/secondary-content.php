   <section>
       <div class="content-area">
       
          <?php   
     if ( have_posts() ) { 
			 while ( have_posts() ) {
				the_post(); 
					//
					the_content();
					//
				} // end while
      } //end if have_posts
	  
  ?>			  
       
       </div>
      </section>