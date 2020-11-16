<?php
/*
   Template Name: FIRST
*/
 get_header();
 ?>
<!-- POST LOOP !-->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
   endwhile;
   endif;
?>
<!--NAVBAR!-->
<nav class="navbar sticky-top navbar-expand-lg navbar-light bgcolor">
      <div class=''></div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link scroll active ps2id" href="#about">Chi siamo? <span class="sr-only">(current)</span></a>
      <a class="nav-link scroll ps2id" href="#teste">Testimonianze</a>
      <a class="nav-link scroll ps2id" href="#contatti">Contatti</a>
    </div>
  </div>
</nav>
<div class="social">
      <a href="#"><img alt="instagram" src="<?php echo get_template_directory_uri(); ?>/img/insta-button.svg" style="max-width: 40px"></a>
      <a href="https://www.facebook.com/lulutoelettatura"><img alt="facebook" src="<?php echo get_template_directory_uri(); ?>/img/face-button.svg" style="max-width: 40px"></a>
</div>
<!--- HEADER !--->
<img class="caneuno" src="<?php echo get_template_directory_uri(); ?>/img/headerimage.svg">

<!--- ABOUT !--->
<section class="bg-primary" id='about'>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <img alt="cane" src="<?php echo get_template_directory_uri(); ?>/img/walk.svg" style="max-width: 250px">
      </div>
      <div class="col-sm-8">
        <h1>Chi Siamo</h1>
         <p>Lulù Toelettatura è l'unica toelettatura a Grumo Appula che gestita interamente da toelettatori 
           formati e specializzati, in grado di prendersi cura dei vostri animali come fareste voi, ma meglio. 
           <br>Ci occupiamo di cani di qualsiasi taglia e razza e li trattiamo esattamente come se fossero nostri. <br> 
           Oltre al servizio toelettatura offriamo anche il servizio di dog-sitting e dog-hostel. Ogni giorno i vostri cani potranno interagire con gli altri 
           ospiti della struttura, sgambare nella natura e divertirsi in attesa del vostro ritorno!</p>
        </div>
  </div>
  </div> 
  </section>

  <!-- TESTIMONIANZE !-->
<section class="teste" id="teste">
      <h1>Testimonianze</h1>
    <div class="card-deck">
    <div class="card">
      <img src="<?php echo get_template_directory_uri(); ?>/img/bravo.svg" class="card-img-top">
      <div class="card-body">
        <h2>Fiocco</h2>
        <p class="card-text"><em class='bravo'>Io sono un bravo cane</em> e come tale voglio essere trattato. Qui ho sempre le attenzioni che merito, si prendono cura della mia bellezza e del mio biancore. </p>
        
      </div>
    </div>
    <div class="card">
      <img src="<?php echo get_template_directory_uri(); ?>/img/fat.svg" class="card-img-top" alt="...">
      <div class="card-body">
      <h2>Burro</h2>
        <p class="card-text">Sono un po' in carne per colpa delle <em class='bravo'>ossa grosse</em>. Tutti mi dicono che sono un ciccione, ma qui mai nessuno mi ha fatto fat shaming o tirato le guance.</p>
      </div>
    </div>
    <div class="card">
      <img src="<?php echo get_template_directory_uri(); ?>/img/piccolo.svg" class="card-img-top" alt="...">
      <div class="card-body">
        <h2>Birillo</h2>
        <p class="card-text">Io sono un po' piccolo e <em class='bravo'>ho sempre paura degli sconosciuti</em>, ma qui sono stati tutti gentili con me e anche se mi bagnano tutto non è male.</p>
        
      </div>
    </div>
  </div>
</section>
<!-- CONTATTI !-->
<section class="contatti bg-primary" id="contatti">
      <h1>Contatti</h1>
      <div class='container'>
        <div class='row'>
          <div class='col-lg-6'> 
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1505.208075629555!2d16.710083756280557!3d41.01615057930001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1347f2b02b7c59e1%3A0xc1efc55686519250!2sLul%C3%B9%20Toelettatura%20-%20Negozio%20per%20Animali!5e0!3m2!1sit!2sit!4v1605549698287!5m2!1sit!2sit" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
         </div>
          <div class='form col-lg-6'> 
              <form action="" method="get" class="contatto">
                    <div class="form-row">
                      <label for="full-name">Nome</label>
                      <input id="full-name" name="full-name" value="nome">
                    </div>
                    <div class="form-row">
                      <label for="email">Email</label>
                      <input id="email" name="email" type="email"
                      placeholder="tuamail@provider.com">
                    </div>
                    <div class='form-row'>
                        <label for='idea'>Dimmi di più!</label>
                        <textarea id='idea' name='idea'></textarea>
                    </div>
                   <div class='form-row'>
                   <button type="button" class="btn btn-outline-warning">Invia!</button>
                  </div>
                
                  </form>
          
        </div>
      </div> 
    
  </section>   
<!-- FOOTER !-->
<section class='footer bg-primary'>
<a href="#"><img alt="instagram" src="<?php echo get_template_directory_uri(); ?>/img/insta-button.svg" style="max-width: 50px"></a>
<a href="https://www.facebook.com/lulutoelettatura"><img alt="facebook" src="<?php echo get_template_directory_uri(); ?>/img/face-button.svg" style="max-width: 50px"></a> 
<p>© 2020 Rosa Angela Alberga per Start2Impact</p>
</section>  

           






 <?php
 get_footer();
 ?>