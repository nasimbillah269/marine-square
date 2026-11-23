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



<div class="page-section" id="page-projects">
  <div class="inner-hero">
    <div class="container">
      <div class="section-label">Track Record</div>
      <h1 class="inner-hero-title">Proven Execution Across<br><span>Naval & Maritime Sector</span></h1>
      <p>MARINE Square builds on a foundation of over three decades of naval engineering experience combined with practical business execution.</p>
    </div>
  </div>

  <div class="container" style="padding:80px 15px">
    <div class="section-label">Project Portfolio</div>
    <h2 class="section-title">Selected Project Experience</h2>
    <div class="section-divider"></div>

    <div class="project-list">

      <div class="project-item">
        <div class="project-header">
          <div class="project-num">01</div>
          <div>
            <h4>Patrol Vessel Construction — Khulna Shipyard</h4>
            <p>Bangladesh Navy</p>
          </div>
        </div>
        <div class="project-body">
          <p style="color:var(--text-muted);font-size:0.9rem;line-height:1.7;margin-bottom:16px">
            Led the construction and delivery of six patrol vessels at Khulna Shipyard, managing full material sourcing, fabrication supervision, quality assurance, testing, and final delivery to end users.
          </p>
          <div class="project-tags">
            <span class="ptag">Shipbuilding</span>
            <span class="ptag">Material Sourcing</span>
            <span class="ptag">QA Supervision</span>
            <span class="ptag">Delivery Management</span>
            <span class="ptag">Bangladesh Navy</span>
          </div>
        </div>
      </div>

      <div class="project-item">
        <div class="project-header">
          <div class="project-num">02</div>
          <div>
            <h4>Naval Equipment & Systems Supply</h4>
            <p>Bangladesh Navy — Multiple Projects</p>
          </div>
        </div>
        <div class="project-body">
          <p style="color:var(--text-muted);font-size:0.9rem;line-height:1.7;margin-bottom:16px">
            Successfully executed multiple Bangladesh Navy projects including propulsion system components, fuel flow systems, calibration equipment, and communication systems.
          </p>
          <div class="project-tags">
            <span class="ptag">Propulsion Systems</span>
            <span class="ptag">Fuel Flow Systems</span>
            <span class="ptag">Calibration Equipment</span>
            <span class="ptag">Communication Systems</span>
          </div>
        </div>
      </div>

      <div class="project-item">
        <div class="project-header">
          <div class="project-num">03</div>
          <div>
            <h4>Naval Aviation Spares & Repair Support</h4>
            <p>Bangladesh Navy Aviation Wing</p>
          </div>
        </div>
        <div class="project-body">
          <p style="color:var(--text-muted);font-size:0.9rem;line-height:1.7;margin-bottom:16px">
            Supported naval aviation requirements including supply of spares and coordination of overseas repair services for helicopters and maritime patrol aircraft.
          </p>
          <div class="project-tags">
            <span class="ptag">Aviation Spares</span>
            <span class="ptag">Helicopter Support</span>
            <span class="ptag">Overseas MRO Coordination</span>
            <span class="ptag">MPA Support</span>
          </div>
        </div>
      </div>

      <div class="project-item">
        <div class="project-header">
          <div class="project-num">04</div>
          <div>
            <h4>Army, BIWTA & Port Projects</h4>
            <p>Bangladesh Army • BIWTA • Port Authorities</p>
          </div>
        </div>
        <div class="project-body">
          <p style="color:var(--text-muted);font-size:0.9rem;line-height:1.7;margin-bottom:16px">
            Delivered projects for Bangladesh Army, BIWTA, and port authorities including GRP boats, pontoon fabrication, and supply of marine systems, valves, and deck fittings.
          </p>
          <div class="project-tags">
            <span class="ptag">GRP Boats</span>
            <span class="ptag">Pontoon Fabrication</span>
            <span class="ptag">Marine Valves</span>
            <span class="ptag">Deck Fittings</span>
            <span class="ptag">Bangladesh Army</span>
          </div>
        </div>
      </div>

      <div class="project-item">
        <div class="project-header">
          <div class="project-num">05</div>
          <div>
            <h4>Diving & Underwater Operations</h4>
            <p>Port Authorities — Inspection & Maintenance</p>
          </div>
        </div>
        <div class="project-body">
          <p style="color:var(--text-muted);font-size:0.9rem;line-height:1.7;margin-bottom:16px">
            Conducted diving and underwater operations for port authorities, supporting inspection, maintenance, and recovery tasks across Chittagong and Mongla ports.
          </p>
          <div class="project-tags">
            <span class="ptag">Underwater Inspection</span>
            <span class="ptag">Port Maintenance</span>
            <span class="ptag">Recovery Operations</span>
            <span class="ptag">Diving Services</span>
          </div>
        </div>
      </div>

    </div>

    <!-- Approach Banner -->
    <div class="approach-banner">
      <h3 style="font-family:'Bebas Neue',cursive;font-size:1.8rem;color:white;letter-spacing:1px;margin-bottom:8px">Project Approach</h3>
      <p style="color:rgba(255,255,255,0.5);font-size:0.85rem;margin-bottom:30px">How we manage every project — from brief to delivery</p>
      <div class="approach-steps">
        <div class="approach-step">
          <div class="step-circle"><i class="fas fa-search"></i></div>
          <p>Understand Requirements</p>
        </div>
        <div class="approach-step">
          <div class="step-circle"><i class="fas fa-bullseye"></i></div>
          <p>Technical Alignment</p>
        </div>
        <div class="approach-step">
          <div class="step-circle"><i class="fas fa-tasks"></i></div>
          <p>Structured Coordination</p>
        </div>
        <div class="approach-step">
          <div class="step-circle"><i class="fas fa-clipboard-check"></i></div>
          <p>Standards Compliance</p>
        </div>
        <div class="approach-step">
          <div class="step-circle"><i class="fas fa-check-double"></i></div>
          <p>Controlled Delivery</p>
        </div>
      </div>
    </div>

  </div>
</div><!-- END PROJECTS -->








@endsection 

@push('js') 

@endpush


