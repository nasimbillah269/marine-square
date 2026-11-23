@extends(welcomeTheme().'layouts.app') @section('title')
<title>{{$page->seo_title?:websiteTitle($page->name)}}</title>
@endsection @section('SEO')
<meta name="title" property="og:title" content="{{$page->seo_title?:websiteTitle($page->name)}}" />
        <meta name="description" property="og:description" content="{!!$page->seo_description?:general()->meta_description!!}" />
        <meta name="keywords" content="{{$page->seo_keyword?:general()->meta_keyword}}" />
        <meta name="image" property="og:image" content="{{asset($page->image())}}" />
        <meta name="url" property="og:url" content="{{route('pageView',$page->slug?:'no-title')}}" />
        <link rel="canonical" href="{{route('pageView',$page->slug?:'no-title')}}">
@endsection
 @push('css')
 <style>


 </style>
@endpush 

@section('contents')


<div class="breadcrumb-area" @if($page->
    bannerFile) style="background-image:url({{asset($page->banner())}});background-repeat: no-repeat; background-size: cover;" @endif>
    <div class="breaOverly">
    <div class="container">
        <div class="title">
            <h1>{{$page->name}}</h1>
            <ul>
                <li><a href="{{route('index')}}">Home</a></li>
                <li>{{$page->name}}</li>
            </ul>
        </div>
    </div>
    </div>
</div>




<div class="page-section" id="page-partners">
  <div class="inner-hero">
    <div class="container">
      <div class="section-label">Partners & Clients</div>
      <h1 class="inner-hero-title">Trusted Across Bangladesh<br><span>Maritime & Defense</span></h1>
      <p>MARINE Square works closely with key national institutions and international partners across the naval and maritime sector.</p>
    </div>
  </div>

  <div class="container" style="padding:80px 15px">
      
          <!-- International Partners -->
    <div >
      <div class="section-label">International Partners</div>
      <h2 class="section-title">Global Principals & Manufacturers</h2>
      <div class="section-divider"></div>
      <div class="partners-grid">
        <div class="partner-card">
             <img src="{{asset(assetLink().'/images/marin/pat/new/1-1.png')}}" alt="">
          <!--<div class="partner-flag">🇺🇸</div>-->
          <!--<div class="partner-name">Safe Boats International</div>-->
          <!--<div class="partner-origin">USA</div>-->
        </div>
        <div class="partner-card">
              <img src="{{asset(assetLink().'/images/marin/pat/new/2-1.png')}}" alt="">
          <!--<div class="partner-flag">🇳🇴</div>-->
          <!--<div class="partner-name">Kongsberg Maritime</div>-->
          <!--<div class="partner-origin">Norway</div>-->
        </div>
        <div class="partner-card">
             <img src="{{asset(assetLink().'/images/marin/pat/new/3-1.png')}}" alt="">
          <!--<div class="partner-flag">🇬🇧</div>-->
          <!--<div class="partner-name">Ajax Machine Tools</div>-->
          <!--<div class="partner-origin">United Kingdom</div>-->
        </div>
        <div class="partner-card">
             <img src="{{asset(assetLink().'/images/marin/pat/new/4-1.png')}}" alt="">
          <!--<div class="partner-flag">🇩🇰</div>-->
          <!--<div class="partner-name">AMC-SCHOU</div>-->
          <!--<div class="partner-origin">Denmark</div>-->
        </div>
        <div class="partner-card">
          <img src="{{asset(assetLink().'/images/marin/pat/new/5-1.png')}}" alt="">
          <!--<div class="partner-flag">🇩🇪</div>-->
          <!--<div class="partner-name">Dräger</div>-->
          <!--<div class="partner-origin">Germany</div>-->
        </div>
        <div class="partner-card">
           <img src="{{asset(assetLink().'/images/marin/pat/new/6-1.png')}}" alt="">
          <!--<div class="partner-flag">🇺🇸</div>-->
          <!--<div class="partner-name">Cincinnati Machines</div>-->
          <!--<div class="partner-origin">USA</div>-->
        </div>
        <div class="partner-card">
             <img src="{{asset(assetLink().'/images/marin/pat/new/8-1.png')}}" alt="">
          <!--<div class="partner-flag">🇫🇷</div>-->
          <!--<div class="partner-name">Colly Bombled</div>-->
          <!--<div class="partner-origin">France</div>-->
        </div>
        <div class="partner-card">
             <img src="{{asset(assetLink().'/images/marin/pat/new/9.png')}}" alt="">
          <!--<div class="partner-flag">🇸🇬</div>-->
          <!--<div class="partner-name">Index-Cool</div>-->
          <!--<div class="partner-origin">Singapore</div>-->
        </div>
        <div class="partner-card">
             <img src="{{asset(assetLink().'/images/marin/pat/new/10.png')}}" alt="">
          <!--<div class="partner-flag">🇰🇷</div>-->
          <!--<div class="partner-name">VOLTZWING</div>-->
          <!--<div class="partner-origin">South Korea</div>-->
        </div>
        <div class="partner-card">
             <img src="{{asset(assetLink().'/images/marin/pat/new/11.png')}}" alt="">
          <!--<div class="partner-flag">🇰🇷</div>-->
          <!--<div class="partner-name">ciiz Co., Ltd.</div>-->
          <!--<div class="partner-origin">South Korea</div>-->
        </div>
        <div class="partner-card">
          <!--<div class="partner-flag">🇨🇳</div>-->
          <!--<div class="partner-name">BEACON</div>-->
          <!--<div class="partner-origin">China</div>-->
           <img src="{{asset(assetLink().'/images/marin/pat/new/14.png')}}" alt="">
        </div>
        <div class="partner-card">
             <img src="{{asset(assetLink().'/images/marin/pat/new/16.png')}}" alt="">
          <!--<div class="partner-flag">🌏</div>-->
          <!--<div class="partner-name">SANY</div>-->
          <!--<div class="partner-origin">International</div>-->
        </div>
      </div>
    </div>
      
      

    <!-- Clients -->
    <div class="section-label" style="margin-top:70px">Our Clients</div>
    <h2 class="section-title">Government & Maritime Organizations</h2>
    <div class="section-divider"></div>
    <div class="clients-grid">
      <div class="client-card">
          <img src="{{asset(assetLink().'/images/marin/ca/new/c1.webp')}}" alt="">
          <!--<i class="fas fa-anchor"></i><p>Bangladesh Navy</p>-->
       </div>
      <div class="client-card">
          <img src="{{asset(assetLink().'/images/marin/ca/new/1.png')}}" alt="">
          <!--<i class="fas fa-anchor"></i><p>Bangladesh Navy</p>-->
       </div>
      <div class="client-card">
          <img src="{{asset(assetLink().'/images/marin/ca/new/2.png')}}" alt="">
          <!--<i class="fas fa-star"></i><p>Bangladesh Army</p>-->
      </div>
      <div class="client-card">
          <!--<i class="fas fa-plane"></i><p>Bangladesh Air Force</p>-->
          <img src="{{asset(assetLink().'/images/marin/ca/new/3.png')}}" alt="">
       </div>
      <div class="client-card">
          <!--<i class="fas fa-shield-alt"></i><p>Bangladesh Coast Guard</p>-->
           <img src="{{asset(assetLink().'/images/marin/ca/new/4.png')}}" alt="">
       </div>
      <div class="client-card">
          <!--<i class="fas fa-building"></i><p>DGDP</p>-->
          <img src="{{asset(assetLink().'/images/marin/ca/new/5.png')}}" alt="">
       </div>
      <div class="client-card">
          <!--<i class="fas fa-ship"></i><p>Chittagong Port Authority</p>-->
          <img src="{{asset(assetLink().'/images/marin/ca/new/6.png')}}" alt="">
       </div>
      <div class="client-card">
          <!--<i class="fas fa-ship"></i><p>Mongla Port Authority</p>-->
          <img src="{{asset(assetLink().'/images/marin/ca/new/7.png')}}" alt="">
        </div>
      <div class="client-card">
          <!--<i class="fas fa-ship"></i><p>Payra Port Authority</p>-->
          <img src="{{asset(assetLink().'/images/marin/ca/new/8.png')}}" alt="">
       </div>
      <div class="client-card">
          <!--<i class="fas fa-water"></i><p>BIWTA</p>-->
          <img src="{{asset(assetLink().'/images/marin/ca/new/9.png')}}" alt="">
      </div>
      <div class="client-card">
          <!--<i class="fas fa-water"></i><p>BIWTC</p>-->
           <img src="{{asset(assetLink().'/images/marin/ca/new/c2.webp')}}" alt="">
        
        </div>
      <div class="client-card">
          <!--<i class="fas fa-industry"></i><p>Khulna Shipyard Ltd</p>-->
          <img src="{{asset(assetLink().'/images/marin/ca/new/c3.webp')}}" alt="">
        </div>
      <!--<div class="client-card"><i class="fas fa-tools"></i><p>Chittagong Dry Dock Ltd</p></div>-->
    </div>



    <!-- CTA -->
    <div style="background:linear-gradient(135deg,var(--navy-dark),var(--navy));padding:60px;border-radius:4px;text-align:center;margin-top:70px">
      <div class="section-label" style="justify-content:center;color:#07fff8">Join Our Network</div>
      <h3 style="font-family:'Bebas Neue',cursive;font-size:2.5rem;color:white;letter-spacing:2px;margin-bottom:14px">Become a Partner</h3>
      <p style="color:rgba(255,255,255,0.6);max-width:500px;margin:0 auto 28px;font-size:0.95rem">
        We welcome collaboration with OEMs and service providers interested in long-term engagement in Bangladesh's maritime and defense sector.
      </p>
      <a class="btn-gold" href="#" onclick="showPage('contact')">Start Engagement <i class="fas fa-arrow-right"></i></a>
    </div>

  </div>
</div><!-- END PARTNERS -->







@endsection 

@push('js') 

@endpush


