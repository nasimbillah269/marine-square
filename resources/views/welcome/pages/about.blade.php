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


<div class="page-section" id="page-about">
  <div class="inner-hero">
    <div class="container">
      <div class="section-label">About MARINE Square</div>
      <h1 class="inner-hero-title">Built on <span>Naval Experience</span><br>Driven by Engineering</h1>
      <p>MARINE Square is a Bangladesh-based maritime and defense support company founded on over three decades of experience in the Bangladesh Navy.</p>
    </div>
  </div>

  <div class="container" style="padding:80px 15px">

    <!-- Founder Story -->
    <div class="row align-items-center mb-5 pb-5" style="border-bottom:1px solid rgba(11,45,86,0.08)">
      <div class="col-lg-5 mb-4 mb-lg-0">
        <div class="about-img-placeholder">
            <img src="{{asset(assetLink().'/images/marin/about.jpg')}}" alt="">
        </div>
      </div>
      <div class="col-lg-7">
        <div class="section-label">Leadership</div>
        <h2 class="section-title">Capt. Zamshed Ali (Retd.)</h2>
        <div class="section-divider"></div>
        <p style="color:var(--text-muted);font-size:0.95rem;line-height:1.8;margin-bottom:16px;" class="aboutP">
          During his service career, Capt. Zamshed was directly involved in shipbuilding, dockyard operations, and technical project execution, including the construction and delivery of multiple patrol vessels. This background forms the foundation of MARINE Square's approach — understanding requirements at source and delivering solutions aligned with real operational needs.
        </p>
        <p style="color:var(--text-muted);font-size:0.95rem;line-height:1.8;margin-bottom:24px;" class="aboutP">
          MARINE Square operates as a technical partner and local facilitator, supporting Bangladesh Navy, Coast Guard, and maritime authorities through structured sourcing, coordination, and execution of engineering solutions.
        </p>
        <div class="exp-numbers">
          <div class="exp-num-item">
            <div class="big">36+</div>
            <div class="lbl">Years Naval Service</div>
          </div>
          <div class="exp-num-item">
            <div class="big">8+</div>
            <div class="lbl">Years Business</div>
          </div>
          <div class="exp-num-item">
            <div class="big">6</div>
            <div class="lbl">Vessels Delivered</div>
          </div>
          <div class="exp-num-item">
            <div class="big">12+</div>
            <div class="lbl">Partner Nations</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Who We Are -->
    <div class="row mb-5 pb-5" style="border-bottom:1px solid rgba(11,45,86,0.08)">
      <div class="col-lg-5 mb-4">
        <div class="section-label">Who We Are</div>
        <h2 class="section-title">A Technical Partner & Local Facilitator</h2>
        <div class="section-divider"></div>
      </div>
      <div class="col-lg-7">
        <p style="color:var(--text-muted);line-height:1.8;margin-bottom:20px;" class="aboutP">
          We are not positioned as a trading company alone. Our role is to ensure that international capabilities are correctly understood, properly aligned, and effectively implemented within Bangladesh's maritime environment.
        </p>
        <p style="color:var(--text-muted);line-height:1.8;" class="aboutP">
          MARINE Square stands as a bridge between international OEMs and Bangladesh's maritime and defense sector, providing the local understanding, technical capability, and execution support required to operate effectively.
        </p>
      </div>
    </div>

    <!-- Approach -->
    <div class="mb-5">
      <div class="section-label">How We Work</div>
      <h2 class="section-title">Our Approach</h2>
      <div class="section-divider"></div>
      <div class="approach-grid">
        <div class="approach-item">
          <h5><i class="fas fa-search" style="color:var(--gold);margin-right:8px"></i> Understand Requirements</h5>
          <p>Understanding requirements from the end user level — identifying what is needed, why it is needed, and how it should be delivered.</p>
        </div>
        <div class="approach-item">
          <h5><i class="fas fa-bullseye" style="color:var(--gold);margin-right:8px"></i> Align Technical Solutions</h5>
          <p>Aligning OEM capabilities with actual operational and procurement requirements in Bangladesh's maritime sector.</p>
        </div>
        <div class="approach-item">
          <h5><i class="fas fa-users" style="color:var(--gold);margin-right:8px"></i> Structured Engagement</h5>
          <p>Supporting OEMs through structured local engagement with clear communication and realistic commitments.</p>
        </div>
        <div class="approach-item">
          <h5><i class="fas fa-check-double" style="color:var(--gold);margin-right:8px"></i> Reliable Delivery</h5>
          <p>Ensuring reliable coordination from requirement to delivery with discipline and accountability.</p>
        </div>
      </div>
    </div>

    <!-- CTA -->
    <div style="background:var(--navy);padding:50px;border-radius:4px;text-align:center">
      <h3 style="font-family:'Bebas Neue',cursive;font-size:2.2rem;color:white;letter-spacing:2px;margin-bottom:14px">Work With Marine Square</h3>
      <p style="color:rgba(255,255,255,0.6);max-width:500px;margin:0 auto 28px;font-size:0.95rem">
        We welcome OEMs and service providers ready to support Bangladesh's naval and maritime sector.
      </p>
      <a class="btn-gold" href="#" onclick="showPage('contact')">Start Engagement <i class="fas fa-arrow-right"></i></a>
    </div>

  </div>
</div><!-- END ABOUT -->





@endsection 

@push('js') 

@endpush


