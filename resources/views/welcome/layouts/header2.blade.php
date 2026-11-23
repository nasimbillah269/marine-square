<header class="sticky-header">
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
    
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6 col-10">
                    <div class="logo">
                        <a href="{{route('index')}}"><img src="{{asset(general()->logo())}}" alt="{{general()->title}}"></a>
                        <!--<a href="{{route('index')}}" class="logoDiv">-->
                        <!--   <span>Sourcetex BD.</span>-->
                        <!--</a>-->
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="header-menu">
                      
                        @if($menu = menu('Header Menus'))
                        <ul class="menu">
                            @foreach($menu->subMenus as $menu)
                            <li class="menu-item">
                                <a href="{{ asset($menu->menuLink()) }}">{{ $menu->menuName() }}</a>
                                @if($menu->subMenus->count())
                                <ul class="submenu">
                                    @foreach($menu->subMenus as $submenu)
                                    <li>
                                        <a style="padding: 10px !important; " href="{{ asset($submenu->menuLink()) }}">{{ $submenu->menuName() }}</a>
                                        
                                         @if($submenu->subMenus->count())
                                          <ul class="submenu lastSubmenu">
                                            @foreach($submenu->subMenus as $submenu)
                                            <li>
                                                <a style="padding: 10px !important; " href="{{ asset($submenu->menuLink()) }}">{{ $submenu->menuName() }}</a>
                                            </li>
                                             @endforeach
                                        </ul>
                                         @endif
                                    
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                            @endforeach
                            <!--  <li class="menu-item">-->
                            <!--    <a href="{{asset(assetLink().'/images/asmara/profile.pdf')}}" target="_blank">Company Profile</a>-->

                            <!--</li>-->
                        </ul>
                        @endif
                    </div>
                </div>
                <!--<div class="col-md-3">-->
                <!--    <div class="headerSearch">-->
                <!--        <div class="input-group mb-3">-->
                <!--          <input type="text" class="form-control" placeholder="Search">-->
                <!--          <span class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></span>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>
        <!--<div class="headerNav">-->
        <!--    <div class="container">-->
        <!--    <div class="row">-->
        <!--        <div class="col-md-12 header-menu-section">-->
                    
        <!--        </div>-->
        <!--    </div>-->
                
        <!--    </div>-->
            
        <!--</div>-->
    </div>
</header>


