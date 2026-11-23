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


<div class="page-section" id="page-market">
  <div class="inner-hero">
    <div class="container">
      <div class="section-label">Local Representation</div>
      <h1 class="inner-hero-title">Enabling OEMs to<br><span>Operate in Bangladesh</span></h1>
      <p>MARINE Square provides structured support to international OEMs and service providers seeking to engage with Bangladesh's naval and maritime sector.</p>
    </div>
  </div>

  <div class="container" style="padding:80px 15px">

    <div class="row mb-5">
      <div class="col-lg-6 mb-4">
        <div class="section-label">Our Role</div>
        <h2 class="section-title">Direct Access. Clear Process. Effective Execution.</h2>
        <div class="section-divider"></div>
        <p style="color:var(--text-muted);line-height:1.8;margin-bottom:20px; text-align: justify">
          With direct working access to Bangladesh Navy units, DGDP, dockyard, and shipyard environments, we operate as a reliable local interface across technical, commercial, and coordination levels.
        </p>
        <ul class="role-list">
          <li><i class="fas fa-check-circle"></i> Direct interaction with end users, technical teams, and decision-making levels</li>
          <li><i class="fas fa-check-circle"></i> Understanding operational requirements and technical specifications</li>
          <li><i class="fas fa-check-circle"></i> Clarification of tender documents and compliance requirements</li>
          <li><i class="fas fa-check-circle"></i> Coordination with DGDP and relevant authorities</li>
          <li><i class="fas fa-check-circle"></i> Facilitation of site visits, meetings, and technical discussions</li>
          <li><i class="fas fa-check-circle"></i> Support in documentation, submission, and follow-up processes</li>
          <li><i class="fas fa-check-circle"></i> Assistance in delivery coordination and local execution</li>
        </ul>
      </div>
      <div class="col-lg-6 mb-4">
        <div style="background:var(--navy);padding:40px;border-radius:4px;height:100%">
          <h3 style="font-family:'Bebas Neue',cursive;font-size:1.8rem;color:white;letter-spacing:1px;margin-bottom:24px">Local Strength</h3>
          <p style="color:#fff;font-size:0.9rem;line-height:1.8;margin-bottom:24px;text-align: justify">
            Our strength lies in combining naval operational experience with practical market access capability. We understand both the technical expectations of the user and the procedural framework of procurement.
          </p>
          <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px">
            <div style="background:rgba(255,255,255,0.05);padding:20px;border-radius:4px;border-top:2px solid #fff">
              <i class="fas fa-ship" style="color: #fff;font-size:1.4rem;margin-bottom:10px;display:block"></i>
              <p style="color:white;font-size:0.88rem;font-weight:600;margin:0">Bangladesh Navy Access</p>
            </div>
            <div style="background:rgba(255,255,255,0.05);padding:20px;border-radius:4px;border-top:2px solid  #fff">
              <i class="fas fa-file-alt" style="color: #fff;font-size:1.4rem;margin-bottom:10px;display:block"></i>
              <p style="color:white;font-size:0.88rem;font-weight:600;margin:0">DGDP Process Knowledge</p>
            </div>
            <div style="background:rgba(255,255,255,0.05);padding:20px;border-radius:4px;border-top:2px solid  #fff">
              <i class="fas fa-industry" style="color: #fff;font-size:1.4rem;margin-bottom:10px;display:block"></i>
              <p style="color:white;font-size:0.88rem;font-weight:600;margin:0">Dockyard & Shipyard</p>
            </div>
            <div style="background:rgba(255,255,255,0.05);padding:20px;border-radius:4px;border-top:2px solid  #fff">
              <i class="fas fa-network-wired" style="color: #fff;font-size:1.4rem;margin-bottom:10px;display:block"></i>
              <p style="color:white;font-size:0.88rem;font-weight:600;margin:0">Established Network</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="access-cards">
      <div class="access-card">
          <div>
               <i class="fas fa-map-marker-alt"></i>
          </div>
          <div>
              <h4>Direct Access</h4>
              <p>Working-level engagement with Bangladesh Navy units, DGDP, dockyard, and shipyard environments, providing immediate access to decision-making channels.</p>
          </div>
        
      </div>
      <div class="access-card">
          <div><i class="fas fa-clipboard-list"></i></div>
          <div>
              <h4>Procurement Understanding</h4>
              <p>Clear understanding of DGDP processes, compliance requirements, and evaluation structure ensuring correct positioning for tenders and contracts.</p>
          </div>
      </div>
      <div class="access-card">
          <div> <i class="fas fa-sliders-h"></i></div>
       <div>
            <h4>Technical Alignment</h4>
           <p>Interpretation of user requirements and alignment of OEM solutions to operational needs — bridging the gap between capability and requirement.</p>
       </div>
       
      </div>
      <div class="access-card">
          <div>
              <i class="fas fa-tasks"></i>
          </div>
        
        <div>
            <h4>Execution Support</h4>
            <p>Coordination of communication, documentation, meetings, site visits, and delivery processes — reducing risk and ensuring effective execution.</p>
        </div>
      </div>
    </div>

    <!-- Who We Work With -->
    <div style="margin-top:60px">
      <div class="section-label">Collaboration</div>
      <h2 class="section-title">Who We Work With</h2>
      <div class="section-divider"></div>
      <div class="who-grid">
        <div class="who-item"><i class="fas fa-cog"></i> Marine equipment manufacturers and system suppliers</div>
        <div class="who-item"><i class="fas fa-tools"></i> Shipbuilding and repair specialists</div>
        <div class="who-item"><i class="fas fa-wrench"></i> Maintenance and lifecycle support providers</div>
        <div class="who-item"><i class="fas fa-helicopter"></i> Naval aviation support companies</div>
        <div class="who-item"><i class="fas fa-microchip"></i> Technology providers for maritime and defense</div>
        <div class="who-item"><i class="fas fa-globe"></i> International OEMs seeking Bangladesh entry</div>
      </div>
    </div>

  </div>
</div><!-- END MARKET ACCESS -->






@endsection 

@push('js') 

@endpush


