   <section>
     <div id="title-section">
       <div class="content-area">
        <h2><?php the_title();?></h2>
          <p>
           <?php   
     if ( have_posts() ) { 
			 while ( have_posts() ) {
				the_post(); 
					//
					the_excerpt();
					//
				} // end while
      } //end if have_posts
			  
  ?>			  
          
           </p>
        </div>    
       </div>
 </section>