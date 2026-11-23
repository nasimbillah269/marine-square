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


<div class="page-section" id="page-capabilities">
  <div class="inner-hero">
    <div class="container">
      <div class="section-label">What We Deliver</div>
      <h1 class="inner-hero-title">Engineering Capability with<br><span>Operational Understanding</span></h1>
      <p>MARINE Square combines naval experience with structured execution capability across the maritime sector.</p>
    </div>
  </div>

  <div class="container" style="padding:80px 15px">

    <div class="text-center mb-5">
      <div class="section-label" style="justify-content:center">Capability Areas</div>
      <h2 class="section-title">Our Service Portfolio</h2>
      <div class="section-divider" style="margin:16px auto"></div>
    </div>

    <div class="cap-full-grid">
      <div class="cap-full-card">
        <span class="cap-num">01</span>
        <i class="fas fa-ship"></i>
        <h4>Marine Systems & Equipment Supply</h4>
        <p>Sourcing and delivery of compliant marine systems, equipment, and spare parts for naval and maritime assets.</p>
        <ul class="exec-list">
          <li>Propulsion systems and machinery</li>
          <li>Valves and piping systems</li>
          <li>Electrical and navigation systems</li>
          <li>Deck fittings and hardware</li>
        </ul>
      </div>
      <div class="cap-full-card">
        <span class="cap-num">02</span>
        <i class="fas fa-tools"></i>
        <h4>Maintenance & Lifecycle Support</h4>
        <p>Support for existing naval and maritime assets through spares, repair coordination, and technical services.</p>
        <ul class="exec-list">
          <li>Spare parts sourcing and supply</li>
          <li>Repair and overhaul coordination</li>
          <li>Technical maintenance support</li>
          <li>Lifecycle planning assistance</li>
        </ul>
      </div>
      <div class="cap-full-card">
        <span class="cap-num">03</span>
        <i class="fas fa-industry"></i>
        <h4>Shipbuilding & New Build Support</h4>
        <p>Material sourcing, fabrication supervision, and technology integration for shipyard projects.</p>
        <ul class="exec-list">
          <li>Material sourcing and supply</li>
          <li>Fabrication supervision</li>
          <li>System integration support</li>
          <li>Quality assurance coordination</li>
        </ul>
      </div>
      <div class="cap-full-card">
        <span class="cap-num">04</span>
        <i class="fas fa-water"></i>
        <h4>Diving & Underwater Operations</h4>
        <p>Inspection, recovery, and underwater maintenance services for port and naval assets.</p>
        <ul class="exec-list">
          <li>Underwater hull inspection</li>
          <li>Port and berth inspection</li>
          <li>Recovery operations support</li>
          <li>Maintenance coordination</li>
        </ul>
      </div>
      <div class="cap-full-card">
        <span class="cap-num">05</span>
        <i class="fas fa-helicopter"></i>
        <h4>Naval Aviation Support</h4>
        <p>Supply of aviation spares and coordination of overseas repair services for helicopters and MPA.</p>
        <ul class="exec-list">
          <li>Helicopter spares supply</li>
          <li>MPA component sourcing</li>
          <li>Overseas repair coordination</li>
          <li>Certified service alignment</li>
        </ul>
      </div>
      <div class="cap-full-card">
        <span class="cap-num">06</span>
        <i class="fas fa-lightbulb"></i>
        <h4>Technical Consultancy</h4>
        <p>Support in requirement analysis, specification alignment, and project execution strategy.</p>
        <ul class="exec-list">
          <li>User requirement analysis</li>
          <li>Technical specification support</li>
          <li>OEM capability alignment</li>
          <li>Project execution strategy</li>
        </ul>
      </div>
    </div>

    <!-- Execution Banner -->
    <div class="strength-banner">
      <div>
        <h3>Execution Capability</h3>
        <p>We provide structured support across the full engagement cycle — from requirement identification to delivery confirmation, ensuring projects move with clarity, control, and accountability.</p>
        <div class="strength-tags">
          <span class="strength-tag">End-to-End Sourcing</span>
          <span class="strength-tag">Technical Evaluation</span>
          <span class="strength-tag">Installation Support</span>
          <span class="strength-tag">Documentation</span>
          <span class="strength-tag">Logistics Management</span>
          <span class="strength-tag">Follow-up & Delivery</span>
        </div>
      </div>
      <div>
        <h3>International Technical Understanding</h3>
        <p>With long-term experience in naval operations, dockyard environments, and shipbuilding projects, MARINE Square understands both technology and application — enabling effective OEM positioning.</p>
        <a class="btn-gold mt-4" href="#" onclick="showPage('contact')">Partner With Us <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>

  </div>
</div><!-- END CAPABILITIES -->







@endsection 

@push('js') 

@endpush


