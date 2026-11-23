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




<div class="page-section" id="page-opportunities">
  <div class="inner-hero">
    <div class="container">
      <div class="section-label">Market Overview</div>
      <h1 class="inner-hero-title">Opportunities in<br><span>Bangladesh Maritime</span></h1>
      <p>Bangladesh is steadily expanding its naval and maritime capability through fleet modernization, new platform induction, and sustained asset maintenance.</p>
    </div>
  </div>

  <div class="container" style="padding:80px 15px">
    <div class="text-center mb-2">
      <div class="section-label" style="justify-content:center">Where Demand Exists</div>
      <h2 class="section-title">Sector Opportunities</h2>
      <div class="section-divider" style="margin:16px auto 0"></div>
    </div>
    <div class="opp-full-grid">
      <div class="opp-full-card">
         <div>
             <i class="fas fa-ship"></i>
         </div>
         <div>
             <h4>Naval Modernization & Platform Support</h4>
             <p>New and imported platforms require integration, upgrades, and lifecycle support, including vessels such as HMS Enterprise and other foreign-built assets inducted into Bangladesh Navy service.</p>
         </div>
        
      </div>
      <div class="opp-full-card">
          <div><i class="fas fa-wrench"></i></div>
          <div>
               <h4>Maintenance of Existing Fleet</h4>
                <p>A large number of operational vessels depend on spares, repair coordination, and technical services, where reliable support remains a critical requirement for fleet readiness.</p>
          </div>
      </div>
      <div class="opp-full-card">
          <div><i class="fas fa-industry"></i></div>
          <div>
              <h4>Boat Building & Shipyard Activity</h4>
              <p>Continuous construction of patrol boats and support vessels creates demand for materials, systems, fittings, and technical supervision at Khulna Shipyard and CDDL.</p>
          </div>
      </div>
      <div class="opp-full-card">
          <div><i class="fas fa-shield-alt"></i></div>
          <div>
              <h4>Coast Guard & Law Enforcement</h4>
              <p>Growing operational requirements in coastal and riverine areas drive demand for boats, equipment, and maintenance support for Bangladesh Coast Guard expansion.</p>
          </div>
      </div>
      <div class="opp-full-card">
          <div><i class="fas fa-helicopter"></i></div>
       <div>
           <h4>Naval Aviation Support</h4>
            <p>Helicopters and maritime patrol aircraft require spares supply and overseas repair coordination, with increasing dependency on external technical partners for sustained operations.</p>
       </div>
        
      </div>
      <div class="opp-full-card">
          <div><i class="fas fa-water"></i></div>
          <div>
               <h4>Blue Economy & Hydrography</h4>
               <p>Expansion in maritime resource management creates opportunities in survey, mapping, and marine data support, supported by growing hydrographic expertise requirements.</p>
          </div>
      </div>
    </div>
  </div>

  <!-- Market Gap Section -->
  <div class="gap-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="section-label" style="color:#13ebeb">Market Analysis</div>
          <h2 class="section-title section-title-white">Current Gaps in the Market</h2>
          <div class="section-divider"></div>
          <p style="color:rgba(255,255,255,0.55);font-size:0.9rem;line-height:1.8;margin-top:16px;text-align: justify;">
            These gaps represent direct opportunities for OEMs and service providers to establish themselves in Bangladesh's maritime sector.
          </p>
          <a class="btn-gold mt-4" href="#" onclick="showPage('contact')">Explore Partnership <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="col-lg-8">
          <div class="gap-grid">
            <div class="gap-item">Limited local capability for advanced repair and overhaul</div>
            <div class="gap-item">Dependence on foreign OEMs for spares and technical support</div>
            <div class="gap-item">Need for better coordination between user requirements and OEM solutions</div>
            <div class="gap-item">Slow turnaround in maintenance due to fragmented support systems</div>
            <div class="gap-item">Scope for modern technology adoption and system upgrades</div>
            <div class="gap-item">Limited hydrographic and survey capability requiring external support</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container" style="padding:60px 15px">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4">
        <div class="section-label">Who Should Engage</div>
        <h2 class="section-title">Ideal OEM & Partner Profile</h2>
        <div class="section-divider"></div>
        <div class="who-grid">
          <div class="who-item"><i class="fas fa-cog"></i> Marine equipment manufacturers</div>
          <div class="who-item"><i class="fas fa-tools"></i> MRO service providers</div>
          <div class="who-item"><i class="fas fa-industry"></i> Shipbuilding specialists</div>
          <div class="who-item"><i class="fas fa-helicopter"></i> Aviation support companies</div>
          <div class="who-item"><i class="fas fa-microchip"></i> Maritime technology providers</div>
          <div class="who-item"><i class="fas fa-chart-line"></i> System integrators</div>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div style="background:var(--navy);padding:40px;border-radius:4px">
          <h4 style="font-family:'Bebas Neue',cursive;font-size:1.6rem;color:white;letter-spacing:1px;margin-bottom:16px">Role of MARINE Square</h4>
          <p style="color:rgba(255,255,255,0.6);font-size:0.88rem;line-height:1.8;margin-bottom:20px;text-align: justify;">
            MARINE Square positions itself as a local partner and technical facilitator, ensuring that international capabilities are aligned with actual operational and procurement requirements in Bangladesh.
          </p>
          <ul style="list-style:none;padding:0">
            <li style="color:rgba(255,255,255,0.7);font-size:0.86rem;padding:8px 0;border-bottom:1px solid rgba(255,255,255,0.07);display:flex;gap:10px"><i class="fas fa-angle-right" style="color:var(--gold);margin-top:3px"></i> Translating technical requirements into workable solutions</li>
            <li style="color:rgba(255,255,255,0.7);font-size:0.86rem;padding:8px 0;border-bottom:1px solid rgba(255,255,255,0.07);display:flex;gap:10px"><i class="fas fa-angle-right" style="color:var(--gold);margin-top:3px"></i> Coordinating with Navy, Coast Guard, DGDP, and shipyards</li>
            <li style="color:rgba(255,255,255,0.7);font-size:0.86rem;padding:8px 0;border-bottom:1px solid rgba(255,255,255,0.07);display:flex;gap:10px"><i class="fas fa-angle-right" style="color:var(--gold);margin-top:3px"></i> Supporting compliance, communication, and execution</li>
            <li style="color:rgba(255,255,255,0.7);font-size:0.86rem;padding:8px 0;display:flex;gap:10px"><i class="fas fa-angle-right" style="color:var(--gold);margin-top:3px"></i> Enabling structured and reliable market entry</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div><!-- END OPPORTUNITIES -->







@endsection 

@push('js') 

@endpush


