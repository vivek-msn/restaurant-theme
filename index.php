<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    
</head>
<body>
<!-- header design -->
<header>
    <nav class="navbar navbar-expand-lg navigation-wrap">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="<?php bloginfo('template_directory') ?>/images/logo.png"></a>
          <nav class="navbar navbar-expand-md navbar-light" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <!-- Brand and toggle get grouped for better mobile display -->
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler ml-auto" type="button" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'Resturant Theme' ); ?>">
    <span class="navbar-toggler-icon"></span>
		</button>
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    </div>
</nav>
            <!-- <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#explore-food">Explore Foods</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#testimonial">Reviews</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#faq">FAQ</a>
              </li>
              <li><button class="main-btn">1200 345 123</button></li>
            </ul> -->
           </div>
        </div>
      </nav>
</header>

<!-- section-1 top-banner -->
<section id="home">
  <div class="container-fluid px-0 top-banner" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/bg/bg-1.jpg');">

    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-6">
          <h1>Good food choices are good investments.</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem quas fugiat possimus.
          </p>
          <div class="mt-4">
            <button class="main-btn"><?php echo esc_html( get_theme_mod('set_banner1',__( 'Food Order', 'Resturant Theme')  ) ); ?><i class="fas fa-shopping-basket ps-3"></i></button>
            <button class="white-btn ms-lg-4 mt-lg-0 mt-4"><?php echo esc_html( get_theme_mod('set_banner2',__( 'Order Now', 'Resturant Theme')  ) ); ?><i class="fas fa-angle-right ps-3"></i></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- section-2 counter -->
<section id="counter">
  <section class="counter-section">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
          <h2>
            <span id="count1"></span>
          </h2>
          <p>SAVING</p>
        </div>
        <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
          <h2>
            <span id="count2"></span>
          </h2>
          <p>PHOTOS</p>
        </div>
        <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
          <h2>
            <span id="count3"></span>
          </h2>
          <p>ROCKETS</p>
        </div>
        <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
          <h2>
            <span id="count4"></span>
          </h2>
          <p>GLOBES</p>
        </div>
      </div>
    </div>
  </section>
</section>

<!-- section-3 about -->
<section id="about">
  <div class="about-section wrapper">
    <div class="container">
      <div class="row align-items-centre">
        <div class="col-lg-7 col-md-12 mb-lg-0 mb-5">
          <div class="card border-0">
          <img src="<?php echo esc_url( get_theme_mod('set_about3') ); ?>" alt="Descriptive Alt Text" class="img-fluid">

          </div>
        </div>
        <div class="col-lg-5 col-md-12 text-sec">
          <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum alias hic </h2>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus vero veniam similique laudantium alias ipsum, 
            itaque numquam aspernatur dolorum iusto eaque possimus </p>
            <button class="main-btn mt-4">Learn More</button>
        </div>
      </div>
    </div>
    <div class="container food-type">
      <div class="row align-items-center">
        <div class="col-lg-5 col-md-12 text-sec mb-lg-0 mb-5">
          <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam natus quo placeat dolores veniam deserunt 
            corrupti vitae fugiat! Tempora eveniet commodi vero hic eligendi blanditiis sunt quis possimus sint consectetur!
          Accusamus illo et consequuntur, error repellat asperiores. Saepe, obcaecati ut!</p>
          <ul class="list-unstyle py-3">
            <li>Lorem ipsum dolor sit amet .</li>
            <li>Lorem ipsum dolor sit amet .</li>
            <li>Lorem ipsum dolor sit amet .</li>
          </ul>
          <button class="main-btn mt-4">Learn More</button>
        </div>
        <div class="col-lg-7 col-md-12">
          <div class="card border-0">
            <img src="<?php bloginfo('template_directory') ?>/images/img/img-2.png" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- section-3 story -->
<section id="story">
  <div class="story-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="text-content">
            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              Eligendi, minus, praesentium incidunt optio vel quo a</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro nihil autem ipsam beatae, 
              et iusto, aspernatur, magni ab Cumque nihil corporis quidem dolor omnis.</p>
              <button class="main-btn mt-3">Read More</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- section-4 explore food -->
<section id="explore-food">
  <div class="explore-food wrapper">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="text-content text-center">
            <h2>Explore Our Foods</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas eum commodi animi molestias laudantium dolor, 
              rem laboriosam illum dicta minus sapiente. Perferendis est dolor voluptas maiores doloremque consequatur 
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem vel expedita totam </p>
          </div>
        </div>
      </div>
      <div class="row pt-5">
        <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
          <div class="card">
            <img src="<?php bloginfo('template_directory') ?>/images/img/img-3.jpg" alt="" class="img-fluid">
            <div class="pt-3">
              <h4>Rainbow Vegetable Sandwich</h4>
              <p>Time: 15 - 20 Minutes | Serves: 1</p>
              <span>$10.50 <del>$11.70</del></span>
              <button class="mt-4 main-btn">Order Now </button>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
          <div class="card">
            <img src="<?php bloginfo('template_directory') ?>/images/img/img-5.jpg" alt="" class="img-fluid">
            <div class="pt-3">
              <h4>Rainbow Vegetable Sandwich</h4>
              <p>Time: 15 - 20 Minutes | Serves: 1</p>
              <span>$10.50 <del>$11.70</del></span>
              <button class="mt-4 main-btn">Order Now </button>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
          <div class="card">
            <img src="<?php bloginfo('template_directory') ?>/images/img/img-4.jpg" alt="" class="img-fluid">
            <div class="pt-3">
              <h4>Raspberry Suffed French Toast</h4>
              <p>Time: 10 - 15 Minutes | Serves: 1</p>
              <span>$12.50 <del>$13.20</del></span>
              <button class="mt-4 main-btn">Order Now </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- section-5 testimonials -->
<section id="testimonial">
  <div class="wrapper testimonial-section">
    <div class="container text-center">
      <div class="text-center pb-4">
        <h2>testimonial</h2>
      </div>
      <div class="row">
        <div class="col-sm-12 col-lg-10 offset-lg-1">
          <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                
                <div class="carousel-caption">
                  <img src="<?php bloginfo('template_directory') ?>/images/review/review-1.jpg" alt="...">
                  <h5>Johnthan Doe - UX Designer</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                
                <div class="carousel-caption">
                  <img src="<?php bloginfo('template_directory') ?>/images/review/review-2.jpg" alt="...">
                  <h5>Maccy Doe - Front End</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                
                <div class="carousel-caption">
                  <img src="<?php bloginfo('template_directory') ?>/images/review/review-1.jpg" alt="...">
                  <h5>Johnthan Doe - UX Designer</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- section-6 faq -->
<section id="faq">
  <div class="faq wrapper">
    <div class="container">
      <div class="row">
        <div class="col sm-12">
          <div class="text-center pb-4">
            <h2>Frequently Asked Questions</h2>
          </div>
        </div>
      </div>
      <div class="row pt-5">
        <div class="col-sm-6 mb-4">
          <h4><span>~</span>Is Foodies Bread really baked fresh each day?</h4>
          <p>Far far away, behind th word mountains, far from the countries Vokalia and Consonantia, there live the 
           blind texts.Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language.
          </p>
        </div>
        <div class="col-sm-6 mb-4">
          <h4><span>~</span>Do you bake breads containing animals fats or products?</h4>
          <p>Far far away, behind th word mountains, far from the countries Vokalia and Consonantia, there live the 
           blind texts.Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language.
          </p>
        </div>
        <div class="col-sm-6 mb-4">
          <h4><span>~</span>Can I order your products online?</h4>
          <p>Far far away, behind th word mountains, far from the countries Vokalia and Consonantia, there live the 
           blind texts.Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language.
          </p>
        </div>
        <div class="col-sm-6 mb-4">
          <h4><span>~</span>When are you opening a shop near me?</h4>
          <p>Far far away, behind th word mountains, far from the countries Vokalia and Consonantia, there live the 
           blind texts.Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- section-7 book-food -->
<section id="book-food">
  <div class="book-food">
    <div class="container book-food-text">
      <div class="row text-center">
        <div class="col-lg-9 col-md-12">
          <h2>Baked fresh daily by bakers with passion.</h2>
        </div>
        <div class="col-lg-3 col-md-12 mt-lg-0 mt-4">
        <button class="main-btn">
          Learn More
        </button>
      </div>
    </div>
  </div>
</div>
</section>

<!-- section-8 newsletter -->
<section id="newslettar">
  <div class="newslettar wrapper">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="text-content text-center pb-4">
            <h2>Hurry up! Subscribe our newsletter
              and get 25% off
            </h2>
            <p>Limited time offer for this month. No credit card required. </p>
          </div>
          <form class="newsletter">
            <div class="row">
              <div class="col-md-8 col-12">
                <input type="email" class="form-control" name="email" placeholder="Email Address here">
              </div>
              <div class="col-md-4 col-12">
                <button class="main-btn" type="submit">Subscribe</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- section-9 footer -->
<footer id="footer">
  <div class="footer py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <a href="#" class="footer-link">Register</a>
          <a href="#" class="footer-link">Forum</a>
          <a href="#" class="footer-link">Affiliate</a>
          <a href="#" class="footer-link">FAQ</a>
          <div class="footer-social pt-4 text-center">
           <a href="#"><i class="fab fa-facebook-f"></i></a>
           <a href="#"><i class="fab fa-twitter"></i></a>
           <a href="#"><i class="fab fa-youtube"></i></a>
           <a href="#"><i class="fab fa-dribble"></i></a>
           <a href="#"><i class="fab fa-linkedin"></i></a>
           <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="footer-copy">
            <div class="copy-right text-center pt-5">
              <p class="text-light">2021. Foodies. All right reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>