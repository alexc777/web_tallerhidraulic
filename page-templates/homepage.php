<?php
/**
 * Template Name: Homepage
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published
 *
 * @package understrap
 */
get_header(); ?>
<div class="wrapper" id="full-width-page-wrapper">
  <div  id="content">
    <div id="primary" class="col-md-12 spd spi">
      <main id="main" class="site-main" role="main">
        <?php while ( have_posts() ) : the_post(); ?>
          <div class="slider_container">
            <?php echo do_shortcode('[rev_slider alias="home"]') ?>
          </div>

          <div class="container_info">
            <div class="ed-container">
              <?php the_content(); ?>

              <div class="works_container">
                <div class="items_works">
                  <div class="item_title">
                    <p>Más Rápido</p>
                  </div>

                  <div class="body_item">
                    <div class="ico_rapido"></div>
                  </div>
                </div>

                <div class="items_works">
                  <div class="item_title">
                    <p>Más Seguro</p>
                  </div>

                  <div class="body_item">
                    <div class="ico_seguro"></div>
                  </div>
                </div>

                <div class="items_works">
                  <div class="item_title">
                    <p>Precios Razonables</p>
                  </div>

                  <div class="body_item">
                    <div class="ico_precio"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="contianer_productos">
            <div class="ed-container">
              <h1>Nuestros Productos/Servicios</h1>

              <div class="card_producutos">
                <div class="card_item">
                    <div class="card_header">
                      <p>Rodamiento</p>
                    </div>
  
                    <div class="card_body">
                      <div class="card_description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <div class="icon_rodamiento"></div>
                      </div>
                    </div>
  
                    <div class="card_footer">
                      <button class="btn_contacto">Contactar</button>
                    </div>
                </div>

                <div class="card_item">
                    <div class="card_header">
                      <p>Maquinaria</p>
                    </div>
  
                    <div class="card_body">
                      <div class="card_description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <div class="ico_maquinaria"></div>
                      </div>
                    </div>
  
                    <div class="card_footer">
                      <button class="btn_contacto">Contactar</button>
                    </div>
                </div>

                <div class="card_item">
                    <div class="card_header">
                      <p>Fabricación de piezas</p>
                    </div>
  
                    <div class="card_body">
                      <div class="card_description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <div class="ico_piezas"></div>
                      </div>
                    </div>
  
                    <div class="card_footer">
                      <button class="btn_contacto">Contactar</button>
                    </div>
                </div>
              </div>
            </div>
          </div>


        <?php endwhile; // end of the loop. ?>
      </main><!-- #main -->
    </div><!-- #primary -->
  </div><!-- Container end -->
</div><!-- Wrapper end -->
<?php get_footer(); ?>

