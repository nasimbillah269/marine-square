<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta name="google-site-verification" content="3LFP8tpCZD3MHU0SVKY0o8VhnA3jYcK-TJWR9jYCnGs" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{csrf_token()}}" />
        @yield('title')
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset(general()->favicon())}}" />
        @yield('SEO')
    
        
        
        
        
        
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Barlow:wght@300;400;500;600;700&family=Barlow+Condensed:wght@400;600;700&display=swap" rel="stylesheet">
     
        
        
        <link rel="stylesheet" type="text/css" href="{{asset(assetLink().'/css/demo.css')}}" />
        
      



  
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        
        <!--animate css cnd link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    

        
        <!-- Slick Slider CSS CDN-->
        <link rel="stylesheet" type="text/css" href="{{asset(assetLink().'/css/slick.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset(assetLink().'/css/slick-theme.css')}}" />
        
        <link rel="stylesheet" type="text/css" href="{{asset(assetLink().'/css/fancybox.css')}}" />

        <!-- Matis Menus CSS -->
        <link rel="stylesheet" href="{{asset(assetLink().'/css/metisMenu.css')}}" />
        
        <link rel="stylesheet" type="text/css" href="{{asset(assetLink().'/css/style10.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset(assetLink().'/css/style-v6.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset(assetLink().'/css/styleNew9.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset(assetLink().'/css/kiswahStyle7.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset(assetLink().'/css/stylesheet.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset(assetLink().'/css/group.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset(assetLink().'/css/marinStyleV2.css')}}?v={{@filemtime(public_path(assetLink().'/css/marinStyleV2.css'))}}" />
        
       
        <link
          rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
        />
        
        
        <style>
        
        
        
        
        
/* Basic Reset */
.nav-links {
  list-style: none;
  display: flex;
  gap: 20px;
}

.nav-links li {
  position: relative;
}

/* Dropdown hidden by default */
.dropdown {
  position: absolute;
  top: 120%;
  left: 0;
  background: #fff;
  min-width: 235px;
  box-shadow: 0 10px 25px rgba(0,0,0,0.1);
  z-index: 999;
  opacity: 0;
  visibility: hidden;
  transform: translateY(10px);
  transition: all 0.3s ease;
  
}

.dropdown li a:hover {
    color: #fff;
}

.dropdown li a {
  color: #114a7a;
  display: block;
  text-decoration: none;
      border-bottom: 1px solid #e9eaeb;
}



/* SHOW DROPDOWN */
.has-dropdown:hover .dropdown {
  opacity: 1;
  visibility: visible;
  transform: translateY(0);
}
        
        
.arrow {
  font-size: 12px;
  transition: transform 0.3s ease;
}

/* Rotate arrow on hover */
.has-dropdown:hover > a .arrow {
  transform: rotate(180deg);
}
        
        
.dropdown li:last-child a {
  border-bottom: none;
}
        
        
        
        
        
        
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  /*box-shadow: inset 0 0 5px grey; */
  border-radius: 6px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #0d4d81; 
  border-radius: 6px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #0d4d81; 
}

.breadcrumb-area .title h1 {
        text-align: left;
            text-transform: uppercase;
    }
    .title ul {
    text-align: left;
}


.breaOverly {
    background: #061f3e85 !important;
    padding: 200px;
}


.breaOverly {
    background: #0000009e;
}
    
.main-navbar{
    transition: all 0.3s ease;
}

.sticky{
    position: fixed;
    top:0;
    width:100%;
    z-index:9999;
    box-shadow:0 4px 10px rgba(0,0,0,0.1);
}


.footer-bottom {
    margin: 0 !important;
    padding: 0 !important;
}
        
        .top-right-header ul li a:hover {
            color: #1cd60c !important;
        }
        .carousel-caption {
            padding: 0 !important;
        }
        
        .blog-content h5 a {
            text-decoration: none !important;
        }
        #scrollTopBtn {
            color: #ffffff !important;
            background-color: #255c04 !important;
            bottom: 90px;   /* sits above the footer social icons */
        }
        @media (max-width: 767px) {
            #scrollTopBtn { bottom: 70px; }
        }
        
        a {
            text-decoration: none !important;
        }
        .blog-content .btn {
            border: 1px solid #19532f !important;
            background: #19532f !important;
            color: #fff !important;
        }
        
            .nav-item-link a {
                color: #fff !important;
            }
            
            .sectionTitle{
                display: flex;
                align-items: center;
                text-align: center;
                margin: 30px 0;
            }
            
            .sectionTitle::before,
            .sectionTitle::after{
                content: "";
                flex: 1;
                border-bottom: 2px solid #ddd;
            }
            
            .sectionTitle span{
                padding: 0 15px;
                font-size: 22px;
                font-weight: 600;
            }
            
            .sectionTitle::before{
                margin-right: 10px;
            }
            
            .sectionTitle::after{
                margin-left: 10px;
            }
            .sectionTitle span {
                font-size: 2rem;
                font-weight: 800;
                color: #0d2b55;
            }
            
            .titleColor {
                color: #2ecc71 !important;
            }
                        
            
            
            @media only screen and (max-width: 767px) {
                .hero-content {
                    padding: 25px 0;
                }
                .hero-title {
                    font-size: 22px;
                    margin-bottom: 10px;
                }
                .heroBgOverly {
                    padding: 0px 0;
                }
                .footer-bottom {
                    display: none;
                }
                .btn-outline-white {
                    padding: 10px 12px;
                }
                .btn-gold {
                    padding: 10px 10px;
                    font-weight: 700;
                    font-size: 0.52rem;
                }
                    header .toggle {
                    display: none !important;
                }
                section {
                    padding: 20px 0;
                }
                .sectionTitle {
                    margin: 0px 0;
                    padding-bottom: 10px;
                }
                .carousel-caption h1 {
                    font-size: 16px !important;
                }
                .carousel-caption p {
                    margin: 0px auto 3px;
                    font-size: 12px;
                }
                .carousel-caption {
                            top: 35%;
                        width: 100%;
                        max-width: 350px;
                        left: 60px;
                }
                .carousel-caption a {
                    padding: 5px 20px;
                    font-size: 11px;
                }
                .logo a img {
                    margin-top: 0px;
                }
                    .logo a {
                    padding: 2px 0;
                }
                    header .toggle {
                    top: 0px !important;
                }
                .stat-icon {
                        min-width: 40px;
                    }
                    .stat-num {
                    font-size: 13px;
                }
                .sectionTitle span {
                    font-size: 1rem;
                }
                .eco-tag {
                    font-size: 14px;
                    margin-bottom: 0;
                }
                .footer-top img {
                    width: 80px;
                }
                
                .gmn-areas {
                    padding: 20px 0;
                }
                .gmn-contact {
                    padding: 20px 0;
                }
                
                
                
            }
            
           
            
            
            .imarr {
                background: linear-gradient(135deg,#EEF1F8,#dce3f5);
                width: 82px;
                height: 82px;
                border-radius: 50%;
                border: 1px solid black;
            }
            
            
            
            
            
        </style>
                
        @stack('css')
    </head>
    
    <body>
        
        <!-- Scroll to Top Button -->
        <button id="scrollTopBtn"><i class="fas fa-arrow-up"></i></button>
        
          <!--<div class="languagePart mobileLang">-->
          <!--              <div class="gtranslate_wrapper"></div>-->
                        
                        
                        
          <!--          </div>-->

        
        <div id="myOverlay" class="overlay">
            <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
            <div class="overlay-content">
                <form action="{{route('blogSearch')}}">
                    <input type="text" name="search" value="{{request()->search}}" placeholder="Search" title="Search for." />
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        
       
<!-- <a href="https://wa.me/917205656716" class="whatsapp-button" target="_blank" aria-label="Chat on WhatsApp">-->
<!--    <i class="fab fa-whatsapp"></i>-->
<!--</a>-->
      
        
        <body class="theme-default">
            <div id="container">
                <header>
                    <div class="wrapper cf">
                        @if(menu('Header Menus'))
                        <nav id="main-nav">
                            <ul class="first-nav">
                                @foreach(menu('Header Menus')->subMenus as $menu)
                                <li class="devices">
                                    
                                    @if($menu->subMenus->count() > 0)
                                    <span>{{$menu->menuName()}}</span>
                                    <ul>
                                        @foreach($menu->subMenus as $menu)
                                        <li class="mobile">
                                            <a href="{{asset($menu->menuLink())}}">{{$menu->menuName()}}</a>
                                            
                                            @if($menu->subMenus->count() > 0)
                                            <ul>
                                                @foreach($menu->subMenus as $menu)
                                                <li><a href="{{asset($menu->menuLink())}}">{{$menu->menuName()}}</a></li>
                                                @endforeach
                                            </ul>
                                            @endif
                                            
                                        </li>
                                        @endforeach
                                        
                                    </ul>
                                    @else
                                    <a href="{{asset($menu->menuLink())}}">{{$menu->menuName()}}</a>
                                    @endif
                                    
                                </li>
                                @endforeach
                                <!--<li class="devices"><span> <a href="{{asset(assetLink().'/images/asmara/profile.pdf')}}" target="_blank">Company Profile</a></span></li>-->
                            </ul>
                        </nav>
                        @endif
                        <a class="toggle" href="#">
                            <span></span>
                        </a>
                    </div>
                </header>
            </div>
        </body>
        
        <!--Header Part Include Start-->
        @include(welcomeTheme().'layouts.header')

        <!--Main Content Section Start-->
        <div class="main-content">
        @yield('contents')
        </div>
        <!--Main Content Section End-->
        
        <!--Footer Part Include Start-->
        @include(welcomeTheme().'layouts.footer')
        
        
        <!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>-->
         <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="{{asset(assetLink().'/js/hc-offcanvas-nav.js')}}"></script>
        
        <!-- Bootstrap Script  CDN-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
       <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <!--iconify Script CDN-->
        <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
        <!-- Sweet Alert CDN -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <!-- Metis Menus Script -->
        <script src="{{asset(assetLink().'/js/metisMenu.min.js')}}"></script>

        <!-- Slick slider CDN -->
        <script type="text/javascript" src="{{asset(assetLink().'/js/slick.min.js')}}"></script>
        
         <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
         
         
         <script>
             $(window).scroll(function(){

                if ($(this).scrollTop() > 50) {
                    $('.main-navbar').addClass('sticky');
                } 
                else {
                    $('.main-navbar').removeClass('sticky');
                }
            
            });
         </script>
         
         
         
         
         <script>
  // ── STICKY HEADER (smooth slide-down) ──
  (function () {
    const nb = document.getElementById('navbar');
    const spacer = document.getElementById('navbarSpacer');
    if (!nb) return;

    let sticky = false;
    let ticking = false;

    function update() {
      ticking = false;
      const y = window.scrollY || window.pageYOffset;
      const navH = nb.offsetHeight;

      if (!sticky && y > navH + 120) {
        // keep the layout from jumping, then fix the header and slide it in
        if (spacer) spacer.style.height = navH + 'px';
        nb.classList.add('is-sticky');
        sticky = true;
      } else if (sticky && y <= 5) {
        nb.classList.remove('is-sticky');
        if (spacer) spacer.style.height = '0px';
        sticky = false;
      }
    }

    window.addEventListener('scroll', function () {
      if (!ticking) {
        window.requestAnimationFrame(update);
        ticking = true;
      }
    }, { passive: true });

    update();
  })();

  // ── MOBILE NAV ──
  function toggleMobile() {
    document.getElementById('navbarInner').classList.toggle('nav-mobile-open');
  }

  // ── PAGE NAVIGATION ──
 

  // ── FADE IN OBSERVER ──
  function initFadeIn() {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(e => {
        if (e.isIntersecting) {
          e.target.classList.add('visible');
        }
      });
    }, { threshold: 0.1 });
    document.querySelectorAll('.fade-in:not(.visible)').forEach(el => observer.observe(el));
  }

  // Init on load
  document.addEventListener('DOMContentLoaded', () => {
    setTimeout(initFadeIn, 300);
  });

  // ── CONTACT FORM ──
  function submitForm() {
    const name = document.getElementById('cf-name').value.trim();
    const email = document.getElementById('cf-email').value.trim();
    if (!name || !email) {
      alert('Please fill in your name and email address.');
      return;
    }
    document.getElementById('form-success').style.display = 'block';
    document.getElementById('cf-name').value = '';
    document.getElementById('cf-org').value = '';
    document.getElementById('cf-email').value = '';
    document.getElementById('cf-phone').value = '';
    document.getElementById('cf-subject').value = '';
    document.getElementById('cf-message').value = '';
    window.scrollTo({ top: document.getElementById('form-success').offsetTop - 100, behavior: 'smooth' });
  }
</script>
         
         
         
         
         
         
         
         
         
         
         
         
       <script>
      const obs = new IntersectionObserver(entries=>{
        entries.forEach((e,i)=>{ if(e.isIntersecting) setTimeout(()=>e.target.classList.add('visible'),i*80); });
      },{threshold:0.12});
      document.querySelectorAll('.fade-in').forEach(el=>obs.observe(el));
    
      const btt=document.getElementById('btt');
      const mainNav=document.getElementById('mainNav');
      window.addEventListener('scroll',()=>{
        if(btt) btt.style.display=window.scrollY>500?'flex':'none';
        if(mainNav) mainNav.classList.toggle('scrolled',window.scrollY>50);
      });
      if(btt) btt.addEventListener('click',()=>window.scrollTo({top:0,behavior:'smooth'}));
    
      document.querySelectorAll('a[href^="#"]').forEach(a=>{
        a.addEventListener('click',e=>{
          const t=document.querySelector(a.getAttribute('href'));
          if(t){e.preventDefault();t.scrollIntoView({behavior:'smooth',block:'start'});}
        });
      });
    
      function handleSubmit(btn){
        const orig=btn.innerHTML;
        btn.innerHTML='<i class="fas fa-spinner fa-spin"></i>&nbsp; Sending...';
        btn.disabled=true;
        setTimeout(()=>{
          btn.innerHTML='<i class="fas fa-check-circle"></i>&nbsp; Message Sent Successfully!';
          btn.style.background='#1a7a4a';
          setTimeout(()=>{btn.innerHTML=orig;btn.style.background='';btn.disabled=false;},3000);
        },1800);
      }
    </script>
        
        
        
        @once
<script>
    window.gtranslateSettings = {
        default_language: "en",
        native_language_names: true,
        detect_browser_language: true,
        languages: ["bn", "ar", "en"],
        wrapper_selector: ".gtranslate_wrapper"
    };

    window.onload = function () {
        if (window.__gtranslateInitialized) return;
        window.__gtranslateInitialized = true;

        var userLanguage = navigator.language || navigator.userLanguage;
        userLanguage = userLanguage.split("-")[0];

        if (userLanguage === "bn") {
            var gtranslateElement = document.querySelector(".gtranslate_wrapper select");
            if (gtranslateElement) {
                gtranslateElement.value = "bn";
                gtranslateElement.dispatchEvent(new Event("change"));
            }
        }
    };
</script>
<script src="https://cdn.gtranslate.net/widgets/latest/dropdown.js" defer></script>
@endonce


<!--<script>-->
<!--  $(document).ready(function(){-->
<!--    $('.plus-button').click(function(){-->
<!--        var url = $(this).data('url');-->
<!--      $('#pdfFrame').attr('src', url);-->
<!--      $('#pdfModal').fadeIn();-->
<!--    });-->

<!--    $('.close-btn, .modal').click(function(e){-->
<!--      if (e.target !== this) return;-->
<!--      $('#pdfModal').fadeOut();-->
<!--      $('#pdfFrame').attr('src', '');-->
<!--    });-->
<!--  });-->
<!--</script>-->

<script>
    
    $(window).on('scroll', function () {
        let scrollTop = $(this).scrollTop();
        
        console.log(scrollTop);

        // Show image after 100px scroll
        if (scrollTop >= 100) {
            $('.homeBannerBrid .img2').addClass('visible');
            $('.homeBannerBrid .img1').addClass('visible');
            $('.topScrollImg img').addClass('visible');
        } else {
            $('.homeBannerBrid .img2').removeClass('visible');
            $('.homeBannerBrid .img1').removeClass('visible');
            $('.topScrollImg img').removeClass('visible');
           
        }
        // Show image after 100px scroll
        if (scrollTop >= 2000) {
            $('.homeBannerBrid .img3').addClass('visible');
        } else {
            // $('.homeBannerBrid .img3').removeClass('visible');
            $('.homeBannerBrid .img3').addClass('visible');
           
        }

        // Horizontal movement
        let move = scrollTop - 100;
        let moveX = move * 9.0;
        
        //  moveX +=200;

        // Rotation logic: swing left and right
          let rotateDeg = Math.sin((scrollTop + 50) / 100) * 15; // Adjust 100 and 15 for frequency and tilt
          
        console.log('moveX:', moveX);

        // Apply transform: move and rotate
        $('.homeBannerBrid .img2').css('transform', `translateX(${moveX}px) rotate(${rotateDeg}deg)`);
        $('.homeBannerBrid .img3').css('transform', `translateX(${-moveX}px) rotate(${-rotateDeg}deg)`);
    });
</script>


  <script>
  $(document).ready(function(){
    $('.partner-sldier').slick({
      dots: true,
      autoplay: true,
      autoplaySpeed: 10,
      infinite: true,
      speed: 2500,
      slidesToShow: 5,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        }
      ]
    });
  });
</script>
  <script>
  $(document).ready(function(){
    $('.outware-sldier').slick({
      dots: false,
      autoplay: true,
      autoplaySpeed: 2500,
      infinite: true,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        }
      ]
    });
  });
</script>
  <script>
  $(document).ready(function(){
    $('.suitBlazer-sldier').slick({
      dots: false,
      autoplay: true,
      autoplaySpeed: 2500,
      infinite: true,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        }
      ]
    });
  });
</script>

  <script>
  $(document).ready(function(){
    $('.kints-sldier').slick({
      dots: false,
      autoplay: true,
      autoplaySpeed: 2500,
      infinite: true,
      speed: 600,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        }
      ]
    });
  });
</script>

  <script>
  $(document).ready(function(){
    $('.wovent-sldier').slick({
      dots: false,
      autoplay: true,
      autoplaySpeed: 2500,
      infinite: true,
      speed: 500,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        }
      ]
    });
  });
</script>

  <script>
  $(document).ready(function(){
    $('.denim-sldier').slick({
      dots: false,
      autoplay: true,
      autoplaySpeed: 2500,
      infinite: true,
      speed: 500,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        }
      ]
    });
  });
</script>

        <script>
              Fancybox.bind('[data-fancybox="gallery"]', {
              }); 
        </script>
        
        <script>
            $('.accordion-header').click(function() {
                const icon = $(this).find('i');
                $('.accordion-header').not(this).removeClass('active').find('i').attr('class', 'fas fa-plus');
                $('.accordion-content').not($(this).next()).slideUp();
        
                $(this).toggleClass('active');
                $(this).next('.accordion-content').slideToggle();
                icon.toggleClass('fa-plus fa-minus');
            });
        </script>
        
        <script>
            $(document).ready(function () {
                $(window).scroll(function () {
                    if ($(this).scrollTop() > 200) {
                        $('#scrollTopBtn').fadeIn();
                    } else {
                        $('#scrollTopBtn').fadeOut();
                    }
                });
        
                $('#scrollTopBtn').click(function () {
                    $('html, body').animate({scrollTop: 0}, 600);
                    return false;
                });
            });
        </script>
        
        <script>
            $(document).ready(function () {
                $(window).scroll(function () {
                    if ($(this).scrollTop() > 50) {
                        $('.main-header').addClass('sticky-active');
                    } else {
                        $('.main-header').removeClass('sticky-active');
                    }
                });
            });
        </script>

        <script>
            (function ($) {
                "use strict";

                // call our plugin
                var Nav = new hcOffcanvasNav("#main-nav", {
                    disableAt: false,
                    customToggle: ".toggle",
                    levelSpacing: 40,
                    navTitle: "Main Menu",
                    levelTitles: true,
                    levelTitleAsBack: true,
                    pushContent: false,
                    labelClose: false,
                });

                // add new items to original nav
                $("#main-nav")
                    .find("li.add")
                    .children("a")
                    .on("click", function () {
                        var $this = $(this);
                        var $li = $this.parent();
                        var items = eval("(" + $this.attr("data-add") + ")");

                        $li.before('<li class="new"><a href="#">' + items[0] + "</a></li>");

                        items.shift();

                        if (!items.length) {
                            $li.remove();
                        } else {
                            $this.attr("data-add", JSON.stringify(items));
                        }

                        Nav.update(true); // update DOM
                    });

                // demo settings update

                const update = function (settings) {
                    if (Nav.isOpen()) {
                        Nav.on("close.once", function () {
                            Nav.update(settings);
                            Nav.open();
                        });

                        Nav.close();
                    } else {
                        Nav.update(settings);
                    }
                };

                $(".actions")
                    .find("a")
                    .on("click", function (e) {
                        e.preventDefault();

                        var $this = $(this).addClass("active");
                        var $siblings = $this.parent().siblings().children("a").removeClass("active");
                        var settings = eval("(" + $this.data("demo") + ")");

                        if ("theme" in settings) {
                            $("body")
                                .removeClass()
                                .addClass("theme-" + settings["theme"]);
                        } else {
                            update(settings);
                        }
                    });

                $(".actions")
                    .find("input")
                    .on("change", function () {
                        var $this = $(this);
                        var settings = eval("(" + $this.data("demo") + ")");

                        if ($this.is(":checked")) {
                            update(settings);
                        } else {
                            var removeData = {};
                            $.each(settings, function (index, value) {
                                removeData[index] = false;
                            });

                            update(removeData);
                        }
                    });
            })(jQuery);
        </script>

        <script>
            $(document).ready(function(){

           
            $("#division").on("change", function(){
                var id = $(this).val();
                  if(id==''){
                   $('#district').empty().append('<option value="">No District</option>');
                   $('#city').empty().append('<option value="">No City</option>');
                  }
                  var url ='{{url('geo/filter')}}' + '/'+id;
                  $.get(url,function(data){
                    $('#district').empty().append(data.geoData);
                    $('#city').empty().append('<option value="">No City</option>');
                  });   
            });

            $("#district").on("change", function(){
                var id = $(this).val();
                  if(id==''){
                   $('#city').empty().append('<option value="">No City</option>');
                  }
                  var url ='{{url('geo/filter')}}' + '/'+id;
                  $.get(url,function(data){
                    $('#city').empty().append(data.geoData);  
                  });   
            });
            
        });
        </script>
        
        <script>
            $(document).on('click','.subsriberbtm',function(e){
              e.preventDefault();
               var url = $('#subscirbeForm').data('url');
               var subscribeEmail =$('#subscribeEmail').val();
                    $.ajax({
                      url: url,
                      type: 'POST',
                      dataType: 'json',
                       data: {email : subscribeEmail},
                      cache: false,
        
                    })
                    .done(function(data) {
                        if(data.success)
                          {
                            $("#subscribeemailMsg").html("<p style='color: #f6f6f6;background: #009688;margin: 5px 0;padding: 4px 5px;border-radius: 4px;font-weight: bold;line-height: 14px;font-size: 12px;'>"+ data.message +"</p>");
                            $("#subscribeEmail").css("border","");
                            $("#subscirbeForm")[0].reset();
                          }else{
                            $("#subscribeemailMsg").html("<p style='color: #f6f6f6;background: #ff9800;margin: 5px 0;padding: 4px 5px;border-radius: 4px;font-weight: bold;line-height: 14px;font-size: 12px;'>"+ data.message +"</p>");
                          }
                    })
                    .fail(function() {
                      // alert("error");
                    });
        
            });
        
            $("#subscribeEmail").keyup(function(){
                  if(validateEmail()){
                      $("#subscribeEmail").css("border","2px solid green");
                      $("#subscribeemailMsg").html("<p style='color: #f6f6f6;background: #009688;margin: 5px 0;padding: 4px 5px;border-radius: 4px;font-weight: bold;line-height: 14px;font-size: 12px;'>Validated Email</p>");
                  }else{
                        var subscribeEmail=$("#subscribeEmail").val();
                       if(subscribeEmail==''||subscribeEmail==null || subscribeEmail=='undefined'){
                            $("#subscribeemailMsg").html("<p style='color: white;background: red;margin: 5px 0;padding: 4px 5px;border-radius: 4px;font-weight: bold;line-height: 14px;font-size: 12px;'>Please Get a Verified Email</p>");
                        }else{
                          $("#subscribeEmail").css("border","2px solid red");
                          $("#subscribeemailMsg").html("");
                        }
                  }
              });
        
            function validateEmail(){
                  var subscribeEmail=$("#subscribeEmail").val();
        
                   var reg =/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                   if(reg.test(subscribeEmail)){
                      return true;
                   }else{
                      return false;
              }
        
            }
        </script>
        

        
        <script>
            function openSearch() {
              document.getElementById("myOverlay").style.display = "block";
            }
            
            function closeSearch() {
              document.getElementById("myOverlay").style.display = "none";
            }
        </script>
        
        <script>
            (function ($) {
                "use strict";

                // call our plugin
                var Nav = new hcOffcanvasNav("#main-nav", {
                    disableAt: false,
                    customToggle: ".toggle",
                    levelSpacing: 40,
                    navTitle: "Main Menu",
                    levelTitles: true,
                    levelTitleAsBack: true,
                    pushContent: false,
                    labelClose: false,
                });

                // add new items to original nav
                $("#main-nav")
                    .find("li.add")
                    .children("a")
                    .on("click", function () {
                        var $this = $(this);
                        var $li = $this.parent();
                        var items = eval("(" + $this.attr("data-add") + ")");

                        $li.before('<li class="new"><a href="#">' + items[0] + "</a></li>");

                        items.shift();

                        if (!items.length) {
                            $li.remove();
                        } else {
                            $this.attr("data-add", JSON.stringify(items));
                        }

                        Nav.update(true); // update DOM
                    });


                            // MOBILE  NAV settings update
                               
                               /* ─── Mobile Nav Toggle ─── */
document.addEventListener('DOMContentLoaded', function () {
  var navbar = document.getElementById('navbar');
  var navOverlay = document.getElementById('navOverlay');

  /* Toggle menu (called by hamburger onclick) */
  window.toggleMobile = function () {
    if (!navbar || !navOverlay) return;
    navbar.classList.toggle('nav-mobile-open');
    navOverlay.classList.toggle('active');
    document.body.style.overflow = navbar.classList.contains('nav-mobile-open') ? 'hidden' : '';
  };

  /* Close menu (called by overlay & close button onclick) */
  window.closeMobileNav = function () {
    if (!navbar || !navOverlay) return;
    navbar.classList.remove('nav-mobile-open');
    navOverlay.classList.remove('active');
    document.body.style.overflow = '';
    /* Close all open dropdowns when menu closes */
    document.querySelectorAll('.has-dropdown.open').forEach(function (dd) {
      dd.classList.remove('open');
    });
  };

  /* Close on overlay click (outside menu) */
  if (navOverlay) {
    navOverlay.addEventListener('click', function () {
      window.closeMobileNav();
    });
  }

  /* Mobile dropdown toggle */
  var dropdownParents = document.querySelectorAll('.has-dropdown > a');
  dropdownParents.forEach(function (link) {
    link.addEventListener('click', function (e) {
      /* Only toggle dropdown on mobile (991px and below) */
      if (window.innerWidth <= 991) {
        var dropdown = this.nextElementSibling;
        if (dropdown && dropdown.classList.contains('dropdown')) {
          e.preventDefault();
          e.stopPropagation();
          var parentLi = this.parentElement;
          /* Close other open dropdowns */
          document.querySelectorAll('.has-dropdown.open').forEach(function (dd) {
            if (dd !== parentLi) dd.classList.remove('open');
          });
          /* Toggle current dropdown */
          parentLi.classList.toggle('open');
        }
      }
    });
  });

  /* Close menu only on actual page links (not dropdown parents) */
  var navLinks = document.querySelectorAll('.nav-links a');
  navLinks.forEach(function (link) {
    link.addEventListener('click', function () {
      /* Skip if this is a dropdown parent with submenus */
      var parentLi = this.closest('.has-dropdown');
      if (parentLi) {
        var dropdown = parentLi.querySelector('.dropdown');
        if (dropdown && this.parentElement === parentLi) {
          /* This is the parent link, don't close menu (handled above) */
          return;
        }
      }
      /* This is an actual page link, close menu */
      window.closeMobileNav();
    });
  });

  /* Close on Escape key press */
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
      window.closeMobileNav();
    }
  });
});




                // demo settings update

                const update = function (settings) {
                    if (Nav.isOpen()) {
                        Nav.on("close.once", function () {
                            Nav.update(settings);
                            Nav.open();
                        });

                        Nav.close();
                    } else {
                        Nav.update(settings);
                    }
                };

                $(".actions")
                    .find("a")
                    .on("click", function (e) {
                        e.preventDefault();

                        var $this = $(this).addClass("active");
                        var $siblings = $this.parent().siblings().children("a").removeClass("active");
                        var settings = eval("(" + $this.data("demo") + ")");

                        if ("theme" in settings) {
                            $("body")
                                .removeClass()
                                .addClass("theme-" + settings["theme"]);
                        } else {
                            update(settings);
                        }
                    });

                $(".actions")
                    .find("input")
                    .on("change", function () {
                        var $this = $(this);
                        var settings = eval("(" + $this.data("demo") + ")");

                        if ($this.is(":checked")) {
                            update(settings);
                        } else {
                            var removeData = {};
                            $.each(settings, function (index, value) {
                                removeData[index] = false;
                            });

                            update(removeData);
                        }
                    });
            })(jQuery);
        </script>
        
        @stack('js')
        
        
    </body>
</html>
