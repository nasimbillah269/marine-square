<!-- NAVBAR -->
   <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="top-right-header">
                        <ul>
                            <li> <a href="tel:+880{{ general()->mobile }}">
                                <i class="fa-brands fa-whatsapp" style="    background: #25d366;"></i>
                             
                                      {{ general()->mobile }}
                                </a>
                            </li>
                            <li><a href="mailto:{{general()->email}}"><i class="fa-solid fa-envelope"></i> {{general()->email}}</a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class=" col-md-4">
                    <div class="top-left-header">
                        <ul>
                            <li><a href="javascript:void(0);">Follow on</a></li>
                        
                            @if(general()->facebook_link)
                            <li>
                                <a href="{{ general()->facebook_link }}" target="_blank">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </li>
                            @endif
                        
                            @if(general()->twitter_link)
                            <li>
                                <a href="{{ general()->twitter_link }}" target="_blank">
                                    <i class="fa-brands fa-x-twitter"></i>
                                </a>
                            </li>
                            @endif
                        
                            @if(general()->instagram_link)
                            <li>
                                <a href="{{ general()->instagram_link }}" target="_blank">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                            @endif
                        
                            @if(general()->linkedin_link)
                            <li>
                                <a href="{{ general()->linkedin_link }}" target="_blank">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            </li>
                            @endif
                        
                            @if(general()->youtube_link)
                            <li>
                                <a href="{{ general()->youtube_link }}" target="_blank">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                            </li>
                            @endif
                        
                        </ul>
                    </div>
                </div>
                <!-- <div class="col-md-2">-->
                     
                  
                <!--     <div class="languagePart ">-->
                <!--        <div class="gtranslate_wrapper"></div>-->
                        
                        
                       
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>
    </div>

<nav class="navbar navbar-expand-lg main-navbar" id="mainNav">
  <div class="container">
    <a class="navbar-brand" href="{{route('index')}}">APEX <span>Group</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    
     @if($menu = menu('Header Menus'))
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto align-items-lg-center gap-1">
          @foreach($menu->subMenus as $menu)
        <li class="nav-item"><a class="nav-link" href="{{asset($menu->menuLink()) }}">{{ $menu->menuName() }}</a></li>
        @endforeach
         <li class="nav-item ms-2"><a class="nav-link nav-cta" href="#contact">Partner With Us</a></li>
        
        <!--<li class="nav-item"><a class="nav-link" href="#mission">Mission</a></li>-->
        <!--<li class="nav-item"><a class="nav-link" href="#companies">Our Companies</a></li>-->
        <!--<li class="nav-item"><a class="nav-link" href="#world">World Wide</a></li>-->
        <!--<li class="nav-item"><a class="nav-link" href="#clients">Our Clients</a></li>-->
        <!--<li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>-->
        <!--<li class="nav-item ms-2"><a class="nav-link nav-cta" href="#contact">Partner With Us</a></li>-->
      </ul>
    </div>
     @endif
    
  </div>
</nav>
<!-- TICKER -->
<div class="ticker-wrap">
  <span class="ticker-content">
    &nbsp;&nbsp;Excellence in Every Thread<span class="ticker-dot">✦</span>Premium Garments Manufacturing<span class="ticker-dot">✦</span>25+ Years of Heritage<span class="ticker-dot">✦</span>6 Specialized Brands<span class="ticker-dot">✦</span>Global Export Partner<span class="ticker-dot">✦</span>ISO 9001 Certified<span class="ticker-dot">✦</span>Sustainable Fashion<span class="ticker-dot">✦</span>BGMEA Member&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;Excellence in Every Thread<span class="ticker-dot">✦</span>Premium Garments Manufacturing<span class="ticker-dot">✦</span>25+ Years of Heritage<span class="ticker-dot">✦</span>6 Specialized Brands<span class="ticker-dot">✦</span>Global Export Partner<span class="ticker-dot">✦</span>ISO 9001 Certified<span class="ticker-dot">✦</span>Sustainable Fashion<span class="ticker-dot">✦</span>BGMEA Member&nbsp;&nbsp;&nbsp;&nbsp;
  </span>
</div>