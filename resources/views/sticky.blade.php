<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Microland Computer - Sewa Laptop Surabaya</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('icomoon/icomoon.css') }}">
    <link rel="stylesheet" type="text/css" media="all" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendor.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    
    <!-- JavaScript -->
    <script src="{{ asset('js/modernizr.js') }}"></script>    
  </head>
  <body>

    <div class="preloader-wrapper">
      <div class="preloader">
      </div>
    </div>

    <div class="search-popup">
      <div class="search-popup-container">

        <form role="search" method="get" class="search-form" action="">
          <input type="search" id="search-form" class="search-field" placeholder="Type and press enter" value="" name="s" />
          <button type="submit" class="search-submit"><a href="#"><i class="icon icon-search"></i></a></button>
        </form>

        <h5 class="cat-list-title">Browse Categories</h5>
        
        <ul class="cat-list">
          <li class="cat-list-item">
            <a href="shop.html" title="Men Jackets">Men Jackets</a>
          </li>
          <li class="cat-list-item">
            <a href="shop.html" title="Fashion">Fashion</a>
          </li>
          <li class="cat-list-item">
            <a href="shop.html" title="Casual Wears">Casual Wears</a>
          </li>
          <li class="cat-list-item">
            <a href="shop.html" title="Women">Women</a>
          </li>
          <li class="cat-list-item">
            <a href="shop.html" title="Trending">Trending</a>
          </li>
          <li class="cat-list-item">
            <a href="shop.html" title="Hoodie">Hoodie</a>
          </li>
          <li class="cat-list-item">
            <a href="shop.html" title="Kids">Kids</a>
          </li>
        </ul>
      </div>
    </div>
<header id="header" style="position: sticky; top: 0; z-index: 1000; background-color: #fff; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); padding: 5px 0;">
      <div id="header-wrap">
        {{-- <nav class="secondary-nav border-bottom">
          <div class="container">
            <div class="row d-flex align-items-center">
              <div class="col-md-4 header-contact">
                <p>Let's talk! <strong>+57 444 11 00 35</strong>
                </p>
              </div>
              <div class="col-md-4 shipping-purchase text-center">
                <p>Free shipping on a purchase value of $200</p>
              </div>
              <div class="col-md-4 col-sm-12 user-items">
                <ul class="d-flex justify-content-end list-unstyled">
                  <li>
                    <a href="login.html">
                      <i class="icon icon-user"></i>
                    </a>
                  </li>
                  <li>
                    <a href="cart.html">
                      <i class="icon icon-shopping-cart"></i>
                    </a>
                  </li>
                  <li>
                    <a href="wishlist.html">
                      <i class="icon icon-heart"></i>
                    </a>
                  </li>
                  <li class="user-items search-item pe-3">
                    <a href="#" class="search-button">
                      <i class="icon icon-search"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav> --}}
        <nav class="primary-nav padding-xsmall">
          <div class="container">
            <div class="row d-flex align-items-center">
              <div class="col-lg-2 col-md-2">
                <div class="main-logo">
                  <a href="/">
                    <img src="images/microland.png" alt="logo">
                  </a>
                </div>
              </div>
              <div class="col-lg-10 col-md-10">
                <div class="navbar">

                  <div id="main-nav" class="stellarnav d-flex justify-content-end right">
                    <ul class="menu-list">

                      {{-- <li class="menu-item has-sub">
                        <a href="index.html" class="item-anchor active d-flex align-item-center" data-effect="Home">Home<i class="icon icon-chevron-down"></i></a>
                        <ul class="submenu">
                          <li><a href="index.html" class="item-anchor active">Home</a></li>
                          <li><a href="home2.html" class="item-anchor">Home v2<span class="text-primary"> (PRO)</span></a></li>
                        </ul>
                      </li> --}}
                      <li><a href="/" class="item-anchor">Home</a></li>
                      <li><a href="/katalog-perangkat" class="item-anchor" data-effect="About">Katalog Perangkat</a></li>
                      <li><a href="/tentang-kami" class="item-anchor" data-effect="About">Tentang Kami</a></li>
                      <li><a href="/ajukan-sewa" class="item-anchor" data-effect="Contact">Ajukan Sewa</a></li>


                      {{-- <li class="menu-item has-sub">
                        <a href="shop.html" class="item-anchor d-flex align-item-center" data-effect="Shop">Shop<i class="icon icon-chevron-down"></i></a>
                        <ul class="submenu">
                          <li><a href="shop.html" class="item-anchor">Shop</a></li>
                          <li><a href="shop-slider.html" class="item-anchor">Shop slider<span class="text-primary"> (PRO)</span></a></li>
                          <li><a href="shop-grid.html" class="item-anchor">Shop grid<span class="text-primary"> (PRO)</span></a></li>
                          <li><a href="shop-list.html" class="item-anchor">Shop list<span class="text-primary"> (PRO)</span></a></li>
                          <li><a href="single-product.html" class="item-anchor">Single product<span class="text-primary"> (PRO)</span></a></li>
                          <li><a href="cart.html" class="item-anchor">Cart<span class="text-primary"> (PRO)</span></a></li>
                          <li><a href="wishlist.html" class="item-anchor">Wishlist<span class="text-primary"> (PRO)</span></a></li>
                          <li><a href="checkout.html" class="item-anchor">Checkout<span class="text-primary"> (PRO)</span></a></li>
                        </ul>
                      </li> --}}

                      {{-- <li class="menu-item has-sub">
                        <a href="#" class="item-anchor d-flex align-item-center" data-effect="Pages">Pages<i class="icon icon-chevron-down"></i></a>
                        <ul class="submenu">
                          <li><a href="coming-soon.html" class="item-anchor">Coming soon<span class="text-primary"> (PRO)</span></a></li>
                          <li><a href="login.html" class="item-anchor">Login<span class="text-primary"> (PRO)</span></a></li>
                          <li><a href="faqs.html" class="item-anchor">FAQs<span class="text-primary"> (PRO)</span></a></li>
                          <li><a href="styles.html" class="item-anchor">Styles</a></li>
                          <li><a href="thank-you.html" class="item-anchor">Thankyou</a></li>
                          <li><a href="error.html" class="item-anchor">Error page<span class="text-primary"> (PRO)</span></a></li>
                        </ul>
                      </li>

                      <li class="menu-item has-sub">
                        <a href="blog.html" class="item-anchor d-flex align-item-center" data-effect="Blog">Blog<i class="icon icon-chevron-down"></i></a>
                        <ul class="submenu">
                          <li><a href="blog.html" class="item-anchor">Blog</a></li>
                          <li><a href="blog-sidebar.html" class="item-anchor">Blog with sidebar<span class="text-primary"> (PRO)</span></a></li>
                          <li><a href="blog-masonry.html" class="item-anchor">Blog masonry<span class="text-primary"> (PRO)</span></a></li>
                          <li><a href="single-post.html" class="item-anchor">Single post</a></li>
                        </ul>
                      </li> --}}

                    </ul>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>

    @yield('content')

    <a href= "/ajukan-sewa" class="sticky-button">
      <i class="fa fa-comment"></i>
    </a>    

    <footer id="footer">
      <div class="container">
        <div class="footer-menu-list">
          <div class="row d-flex flex-wrap justify-content-between">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="footer-menu">
                <img src="images/microland.png" alt="logo">
                <p>Microland adalah penyedia solusi sewa perangkat IT terpercaya yang berkomitmen untuk memenuhi kebutuhan teknologi Anda dengan cara yang fleksibel, efisien, dan berkualitas.</p>
                {{-- <div class="social-links">
                  <ul class="d-flex list-unstyled">
                    <li>
                      <a href="#">
                        <i class="icon icon-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icon icon-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icon icon-youtube-play"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icon icon-behance-square"></i>
                      </a>
                    </li>
                  </ul>
                </div> --}}
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="footer-menu">
                <h5 class="widget-title">Menu</h5>
                <ul class="menu-list list-unstyled">
                  <li class="menu-item">
                    <a href="/">Home</a>
                  </li>
                  <li class="menu-item">
                    <a href="/katalog-perangkat">Katalog Perangkat </a>
                  </li>
                  <li class="menu-item">
                    <a href="/">Tentang Kami  </a>
                  </li>
                  <li class="menu-item">
                    <a href="/ajukan-sewa">Ajukan Sewa</a>
                  </li>
                </ul>
              </div>
            </div>
            {{-- <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="footer-menu">
                <h5 class="widget-title">Customer Service</h5>
                <ul class="menu-list list-unstyled">
                  <li class="menu-item">
                    <a href="faqs.html">FAQ</a>
                  </li>
                  <li class="menu-item">
                    <a href="contact.html">Contact</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Privacy Policy</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Returns & Refunds</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Cookie Guidelines</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Delivery Information</a>
                  </li>
                </ul>
              </div>
            </div> --}}
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="footer-menu">
                <h5 class="widget-title">Hubungi Kami</h5>
                <div class="social-links">
                  <ul class="d-flex list-unstyled">
                    {{-- <li>
                      <a href="#">
                        <i class="icon icon-facebook"></i>
                      </a>
                    </li> --}}
                    <li>
                      <a href="https://instagram.com/microland_it">
                        <i class="icon icon-instagram"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://wa.me/6287789894922">
                        <i class="fab fa-whatsapp"></i>
                      </a>
                    </li>
                    <li>
                      <a href="mailto:dito@microland.co.id">
                        <i class="fa fa-envelope"></i> <!-- Ikon Email dari Font Awesome -->
                      </a>
                    </li>
                  </ul>
                </div>
                <!-- Menambahkan Google Maps -->
                <h5 class="widget-title">Kunjungi Kami</h5>
                <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3974.9072713140896!2d112.75125251511656!3d-7.285806194149027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788069450d1951%3A0x7a2b7d836b2d7674!2sJl.%20Ngagel%20Mulyo%20XIV%20No.21%2C%20Ngagelrejo%2C%20Kec.%20Wonokromo%2C%20Surabaya%2C%20Jawa%20Timur%2060245!5e0!3m2!1sen!2sid!4v1675441372722!5m2!1sen!2sid"                width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div id="footer-bottom">
        <div class="container">
          <div class="d-flex align-items-center flex-wrap justify-content-between">
            <div class="copyright">
              <?php 
                use Carbon\Carbon;   
              ?>
              <p>Copyright {{ Carbon::now()->format('Y') }} - <a style="color: white;" href="/">Microland Computer</a>
              </p>
              <br>
            </div>
            {{-- <div class="payment-method">
              <p>Payment options :</p>
              <div class="card-wrap">
                <img src="images/visa-icon.jpg" alt="visa">
                <img src="images/mastercard.png" alt="mastercard">
                <img src="images/american-express.jpg" alt="american-express">
              </div>
            </div> --}}
          </div>
        </div>
      </div>
    </footer>

    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/script.js"></script>
    <script>
      // Ambil semua elemen dengan class "item-anchor"
      const menuItems = document.querySelectorAll('.item-anchor');

      // Ambil pathname dari URL saat ini
      const currentPath = window.location.pathname;

      // Loop melalui setiap menu item untuk mencocokkan href
      menuItems.forEach((item) => {
        if (item.getAttribute('href') === currentPath) {
          item.classList.add('active'); // Tambahkan class active
        } else {
          item.classList.remove('active'); // Hapus class active jika tidak cocok
        }
      });
    </script>
  </body>
</html>