@extends(welcomeTheme().'layouts.app') 
@section('title')
<title>{{websiteTitle()}}</title>
@endsection 
@section('SEO')
<meta name="title" property="og:title" content="{{general()->meta_title}}" />
<meta name="description" property="og:description" content="{!!general()->meta_description!!}" />
<meta name="keyword" property="og:keyword" content="{{general()->meta_keyword}}" />
<meta name="image" property="og:image" content="{{asset(general()->logo())}}" />
<meta name="url" property="og:url" content="{{route('index')}}" />
<link rel="canonical" href="{{route('index')}}">
@endsection 
@push('css')
<script type="application/ld+json">
    { 
    "@@context": "https://schema.org", 
    "@type": "WebPage", 
    "url": "{{route('index')}}", 
    "name": "{{websiteTitle()}}",
    "author": {
        "@type": "Webpage",
        "name": "{{websiteTitle()}}"
    },
    "description": "{!!general()->meta_description!!}"
    }
</script>
@endpush 

@section('contents')

<!--Slider Part Include Start-->
@include(welcomeTheme().'layouts.slider')



 
<div class="stats-bar">
  <div class="container">
    <div class="row g-0 justify-content-between">
      <div class="col-12 col-md-3">
        <div class="stat-item">
          <i class="fa-solid fa-globe stat-icon"></i>
          <div>
            <div class="stat-num">3</div>
            <div class="stat-label">Countries<br>India, Bangladesh &amp; China</div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-3">
        <div class="stat-item">
          <i class="fa-solid fa-shirt stat-icon"></i>
          <div>
            <div class="stat-num">300M+</div>
            <div class="stat-label">Units Annually<br>High Volume Production</div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-3">
        <div class="stat-item">
          <i class="fa-solid fa-handshake stat-icon"></i>
          <div>
            <div class="stat-num">50+</div>
            <div class="stat-label">Brands Served<br>USA, Europe, South America, Asia</div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-3">
        <div class="stat-item">
          <i class="fa-solid fa-microchip stat-icon"></i>
          <div>
            <div class="stat-num">Industry 5.0</div>
            <div class="stat-label">&amp; Blockchain Enabled<br>Advanced Plant Manufacturing</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>






<!-- ══════════════════ PRODUCT RANGE ══════════════════ -->
<section class="bg-white">
  <div class="container">
    <div class="text-center mb-2">
        <div class="sectionTitle">
            <span>Our Product <span class="titleColor">Range</span></span>
        </div>
     
    </div>
    <!--<div class="section-divider"></div>-->

    <div class="row g-4">
        
        
               @foreach($latestServices as $service)
                <div class="col-6 col-md-3">
                     @include(welcomeTheme().'services.includes.serviceGrid')
                
                </div>
                  @endforeach
        
        

    </div>

    <p class="eco-tag mt-4"><i class="fa-solid fa-seedling me-2"></i>Eco-Friendly. Quality Assured. Value Added.</p>
  </div>
</section>

<!-- ══════════════════ SUSTAINABILITY ══════════════════ -->
<section class="sus-section">
  <div class="container">
    <div class="text-center mb-2">
            <div class="sectionTitle">
            <span>Sustainability <span class="titleColor">Innovation</span></span>
        </div>

    </div>
    <!--<div class="section-divider"></div>-->

    <div class="row g-4">
      <div class="col-6 col-lg-3">
        <div class="sus-card">
          {{--<div class="sus-icon"><i class="fa-solid fa-solar-panel"></i></div>--}}
          
          {{--<img src="/sub/zynaxx/public/welcome/images/" alt="" class="">--}}
          <img src="{{asset(assetLink().'/images/ll1.png')}}" alt="" class="">
          <h5>Energy Efficient Factories</h5>
          <p>Green &amp; Compliant Production</p>
        </div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="sus-card">
           <img src="{{asset(assetLink().'/images/ll21oject.png')}}" alt="" class="">
          <h5>Blockchain Traceability</h5>
          <p>Transparent &amp; Ethical Sourcing</p>
        </div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="sus-card">
          <img src="{{asset(assetLink().'/images/ll2.png')}}" alt="" class="">
          <h5>Minimal Waste Practices</h5>
          <p>Reducing Environmental Impact</p>
        </div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="sus-card">
          <img src="{{asset(assetLink().'/images/ll4 (1).webp')}}" alt="" class="">
          <h5>Social Responsibility</h5>
          <p>Empowering Our Workforce</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════ WHY CHOOSE ══════════════════ -->
<section class="why-section">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <h2 class="section-title mb-3">Why Choose <span>ZYNAXX?</span></h2>
        <div class="section-divider" style="margin:0 0 28px"></div>
        <ul class="why-list">
          <li>
            <span class="check-icon"><i class="fa-solid fa-check"></i></span>
            Broadest Range of Sustainable Apparel
          </li>
          <li>
            <span class="check-icon"><i class="fa-solid fa-check"></i></span>
            Fast &amp; Flexible Global Delivery
          </li>
          <li>
            <span class="check-icon"><i class="fa-solid fa-check"></i></span>
            Competitive Pricing &amp; Trusted Partnership
          </li>
          <li>
            <span class="check-icon"><i class="fa-solid fa-check"></i></span>
            Highest ESG &amp; Compliance Standards
          </li>
        </ul>
        <a href="#" class="btn-learn"><i class="fa-solid fa-arrow-right me-2"></i>Learn More</a>
      </div>
      <div class="col-lg-6">
        <div class="why-img">
          <img src="{{asset(assetLink().'/images/ls.webp')}}" alt="" class="">
        </div>
      </div>
    </div>
  </div>
</section>





@endsection @push('js') @endpush