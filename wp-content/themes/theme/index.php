<?php
 
get_header();


 
if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
 
 <div class="mainarea p-3 text-center">

<div class="row ">
    <div class="col-md-1 text-center bg-white col-sm-12">
        <div class="card card-body h-100 justify-content-center">
            <div class="left-adress">
                <?php the_field('left_coloum_vertical'); ?>
            </div>
        </div>

    </div>
    <div class="col-md-10 bg-white col-sm-12">
        <div class="row">
            <div class="col-md-8 offset-md-2 maintext col-sm-12 offset-sm-0">
                <h3 class="balth"><?php the_field('header_title_page'); ?></h3>
                <h1 class="balth"><?php the_field('header_title'); ?></h1>
                <p class="lead"><?php the_field('main_text'); ?></p>

                
            
                
                
        
            </div>
        </div>
        <div class="row">
            <div class="middle col-md-12 ">
                <h5 class="discover"><?php the_field('see_more'); ?></h5>
               <img src="<?php bloginfo('template_directory'); ?>/images/arrow.png"  alt="arrow" >
            </div>
        </div>
        <div class="row">
        <div class="col-md-12">
        <article class="post">
			<?php the_content() ?>
        </article>
        </div>
        </div>

        <div class="row">
            <div class="col-md-12 px-md-0">
                <div class="footer text-center">
                    <a href="<?php $link = get_field('link'); ?>" class="social foot"><i class="fab fa-facebook-f fa-sm"></i></a>
                    <a href="#" class="social foot"><i class="fab fa-twitter fa-sm"></i></a>
                    <a href="#" class="social foot"><i class="fab fa-instagram fa-sm"></i></a>

                    <nav class="nav footer-nav justify-content-center">
                        <a class="nav-link active" href="#">Home</a>
                        <a class="nav-link" href="#">Aparthotel</a>
                        <a class="nav-link" href="#">Aquapark</a>
                        <a class="nav-link" href="#">Zdrojowa hotels</a>
                        <a class="nav-link" href="#">Contact</a>
                    </nav>

                    <p class="copy">Zdrojowa invest & zdrojowa hotels &copy; 2017</p>

                </div>
            </div>
        </div>
    </div>
    <div class="col-md-1  align-items-center bg-white col-sm-12  d-none d-md-block">
        <div class="card card-body h-100 justify-content-center">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social"><i class="fab fa-instagram"></i></a>
        </div>
    </div>

</div>

</div>
        
	
	<?php endwhile;
 
else :
	echo '<p>There are no posts!</p>';
 
endif;
 
get_footer();
 
?>