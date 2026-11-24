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




  <!-- STRENGTHS STRIP -->
  {{--<section id="strengths">
    <div class="strength-strip">
      <div class="strength-item fade-in">
        <div class="strength-icon"><i class="fas fa-ship"></i></div>
        <div>
            <h4>Naval & Maritime Expertise</h4>
        <p>Three decades of Bangladesh Navy operational experience, including shipbuilding, dockyard operations, and naval project delivery.</p>
        </div>
      </div>
      <div class="strength-item fade-in">
        <div class="strength-icon"><i class="fas fa-handshake"></i></div>
       <div>
            <h4>Local Procurement Alignment</h4>
        <p>Clear understanding of DGDP processes, compliance requirements, and evaluation structure for effective market engagement.</p>
       </div>
      </div>
      <div class="strength-item fade-in">
        <div class="strength-icon"><i class="fas fa-cogs"></i></div>
        <div>
            <h4>End-to-End Execution</h4>
        <p>From requirement analysis and technical alignment to delivery coordination — structured and accountable project execution.</p>
        </div>
      </div>
    </div>
  </section>--}}

  <!-- ABOUT PREVIEW -->
  <section id="about-preview">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5 mb-5 mb-lg-0">
          <div class="about-image-wrap">
            <!--<div class="about-img-placeholder">-->
            <!--  <i class="fas fa-user-tie"></i>-->
            <!--</div>-->
               <img src="{{asset(assetLink().'/images/marin/Picture5.jpg')}}" alt="">
            <div class="about-exp-badge">
              <span class="big">36+</span>
              <span class="small">Years<br>Service</span>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="about-text fade-in">
            <div class="section-label">About MAR<span><img src="{{asset(assetLink().'/images/marin/iiiii.png')}}" alt=""></span>NE  Square</div>
            <h2 class="section-title">Built on Naval Experience.<br>Driven by Engineering.</h2>
            <div class="section-divider"></div>
            <p style="color:var(--text-muted);font-size:0.95rem;line-height:1.75;margin-bottom:16px;">
             MARINE Square is founded on over three decades of service in the Bangladesh Navy, combining operational understanding with engineering execution. Led by <strong>Capt. Zamshed Ali (Retd.)</strong>, the company brings direct experience in shipbuilding, dockyard operations, and technical project delivery.
            </p>
            <ul class="exp-list">
              <li><i class="fas fa-check-circle"></i>36+ years naval service and engineering background</li>
              <li><i class="fas fa-check-circle"></i>Patrol vessel construction and dockyard execution experience</li>
              <li><i class="fas fa-check-circle"></i>8+ years business experience in maritime sector</li>
              <li><i class="fas fa-check-circle"></i>Bridge between international OEMs and Bangladesh maritime sector</li>
            </ul>
            <a class="btn-gold" href="{{ route('pageView','marine-square') }}">Learn More <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- CAPABILITIES PREVIEW -->
  <section id="cap-preview">
    <div class="container">
      <div class="text-center fade-in">
        <div class="section-label" style="justify-content:center">What We Do</div>
        <h2 class="section-title">Core Capabilities</h2>
        <div class="section-divider" style="margin:16px auto 0"></div>
      </div>
      <div class="cap-grid fade-in">
        <div class="cap-card">
          <div class="cap-icon"><i class="fas fa-cog"></i></div>
          <div>
                <h4>Market Access & Representation</h4>
                <p>Direct engagement with Navy, DGDP, and maritime stakeholders</p>
          </div>
        </div>
        <div class="cap-card">
          <div class="cap-icon"><i class="fas fa-tools"></i></div>
          <div>
                <h4>Systems & Equipment Supply</h4>
                <p>OEM-based sourcing of marine and defense systems</p>
          </div>
        </div>
        <div class="cap-card">
          <div class="cap-icon"><i class="fas fa-industry"></i></div>
          <div>
              <h4>Maintenance & Lifecycle Support</h4>
              <p>Spare parts, repair coordination, and system upgrades</p>
          </div>
        </div>
        <div class="cap-card">
          <div class="cap-icon"><i class="fas fa-helicopter"></i></div>
          <div>
              <h4>Shipbuilding & Fabrication Support</h4>
              <p>Material sourcing, supervision, and integration</p>
          </div>
        </div>
        <div class="cap-card">
          <div class="cap-icon"><i class="fas fa-water"></i></div>
          <div>
                <h4>Naval Aviation Support</h4>
                <p>Spare supply and certified repair coordination</p>
          </div>
        </div>
        <div class="cap-card">
          <div class="cap-icon"><i class="fas fa-project-diagram"></i></div>
          <div>
                <h4>Smart Systems & Technology</h4>
                <p>IoT, drones, automation, and monitoring systems</p>
          </div>
        </div>
      </div>
      <div class="text-center mt-5 fade-in">
        <a class="btn-gold" href="{{ route('pageView','capabilities') }}">View Full Capabilities <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>
  </section>

  <!-- OPPORTUNITIES BANNER -->
  <section id="opp-banner">
    <div class="container">
      <div class="row align-items-center fade-in">
        <div class="col-lg-5">
          <!--<div class="section-label" style="color:#fff">Market Outlook</div>-->
          <h2 class="section-title section-title-white">Opportunities in Bangladesh</h2>
          <div class="section-divider"></div>
          <p style="color:rgba(255,255,255,0.65);font-size:0.95rem;line-height:1.75;max-width:500px;    text-align: justify;">
            Bangladesh continues to expand its naval and maritime capability through modernization, new acquisitions, and sustained fleet operations — creating a consistent demand for OEM and service providers.
          </p>
          <a class="btn-gold mt-4" href="{{ route('pageView','opportunities') }}">View Opportunities <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="col-lg-7 mt-4 mt-lg-0">
          <div class="opp-grid">
            <div class="opp-item">
                <div> <i class="fas fa-ship"></i></div>
                <div>
                    <h5>Naval Modernization</h5>
                    <p>New platform induction and lifecycle support requirements</p>
                </div>
            </div>
            <div class="opp-item">
                <div><i class="fas fa-wrench"></i></div>
                <div>
                    <h5>Fleet Maintenance</h5>
                    <p>Spares, repair coordination, and technical services</p>
                </div>
            </div>
            <div class="opp-item">
                <div><i class="fas fa-helicopter"></i></div>
                 <div>
                     <h5>Aviation Support</h5>
                     <p>Helicopter and MPA spares and overseas repair</p>
                 </div>
            </div>
            <div class="opp-item">
                <div> <i class="fas fa-water"></i></div>
                <div>
                     <h5>Blue Economy</h5>
                     <p>Hydrographic and maritime resource management</p>
                </div>
            </div>
            <div class="opp-item">
                <div><i class="fas fa-anchor"></i></div>
                <div>
                    <h5>Boat Construction</h5>
                    <p>Patrol and support vessel builds at shipyards</p>
                </div>
            </div>
            <div class="opp-item">
                <div><i class="fas fa-shield-alt"></i></div>
                <div>
                    <h5>Coast Guard Expansion</h5>
                    <p>Coastal and riverine law enforcement fleet growth</p>
                </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- patner SCROLLING STRIP -->
  <section id="clients-strip">
    <div class="container mb-4 fade-in">
      <div class="text-center">
        <!--<div class="section-label" style="justify-content:center">Our Clients</div>-->
        <h2 class="section-title">Our Partners</h2>
      </div>
    </div>
    <div class="container">
        <div class="partner-sldier">
            
            <div class="slick-box">
                <div class="panterSlideBox">
                     <img src="{{asset(assetLink().'/images/marin/pat/new/1-1.png')}}" alt="">
                </div>
            </div>
            <div class="slick-box">
                <div class="panterSlideBox">
                     <img src="{{asset(assetLink().'/images/marin/pat/new/2-1.png')}}" alt="">
                </div>
            </div>
            <div class="slick-box">
                <div class="panterSlideBox">
                     <img src="{{asset(assetLink().'/images/marin/pat/new/3-1.png')}}" alt="">
                </div>
            </div>
            <div class="slick-box">
                <div class="panterSlideBox">
                     <img src="{{asset(assetLink().'/images/marin/pat/new/4-1.png')}}" alt="">
                </div>
            </div>
            <div class="slick-box">
                <div class="panterSlideBox">
                     <img src="{{asset(assetLink().'/images/marin/pat/new/5-1.png')}}" alt="">
                </div>
            </div>
            <div class="slick-box">
                <div class="panterSlideBox">
                     <img src="{{asset(assetLink().'/images/marin/pat/new/6-1.png')}}" alt="">
                </div>
            </div>
            <div class="slick-box">
                <div class="panterSlideBox">
                     <img src="{{asset(assetLink().'/images/marin/pat/new/8-1.png')}}" alt="">
                </div>
            </div>
            <div class="slick-box">
                <div class="panterSlideBox">
                     <img src="{{asset(assetLink().'/images/marin/pat/new/9.png')}}" alt="">
                </div>
            </div>
            <div class="slick-box">
                <div class="panterSlideBox">
                     <img src="{{asset(assetLink().'/images/marin/pat/new/10.png')}}" alt="">
                </div>
            </div>
            <div class="slick-box">
                <div class="panterSlideBox">
                     <img src="{{asset(assetLink().'/images/marin/pat/new/11.png')}}" alt="">
                </div>
            </div>
            <div class="slick-box">
                <div class="panterSlideBox">
                     <img src="{{asset(assetLink().'/images/marin/pat/new/14.png')}}" alt="">
                </div>
            </div>
            <div class="slick-box">
                <div class="panterSlideBox">
                     <img src="{{asset(assetLink().'/images/marin/pat/new/16.png')}}" alt="">
                </div>
            </div>
            <div class="slick-box">
                <div class="panterSlideBox">
                     <img src="{{asset(assetLink().'/images/marin/pat/new/17.png')}}" alt="">
                </div>
            </div>
            
        </div>
    </div>
    {{--<div class="clients-scroll-wrap">
      <div class="clients-track patner">
        <div class="client-pill">
           <img src="{{asset(assetLink().'/images/marin/pat/p1.png')}}" alt="">
           <span> Kongsberg</span>
          </div>
        <div class="client-pill">
           <img src="{{asset(assetLink().'/images/marin/pat/p2.png')}}" alt="">
            <span>CINCINNATI MACHINES </span>
        </div>
        <div class="client-pill">
           <img src="{{asset(assetLink().'/images/marin/pat/p3.png')}}" alt="">
            <span>JETPOWER</span>
        </div>
        <div class="client-pill">
           <img src="{{asset(assetLink().'/images/marin/pat/p4.png')}}" alt="">
            <span>Safe Boats</span>
        </div>
        <div class="client-pill">
            <img src="{{asset(assetLink().'/images/marin/pat/p5.png')}}" alt="">
            <span>SANY</span>
        </div>
        <div class="client-pill">
           <img src="{{asset(assetLink().'/images/marin/pat/p6.png')}}" alt="">
            <span>AMC</span>
        </div>
        <div class="client-pill">
           <img src="{{asset(assetLink().'/images/marin/pat/p7.png')}}" alt="">
            <span>Brodie</span>
        </div>
        <div class="client-pill">
           <img src="{{asset(assetLink().'/images/marin/pat/p8.png')}}" alt="">
            <span>EVIDENT</span>
        </div>
        <div class="client-pill">
            <img src="{{asset(assetLink().'/images/marin/pat/p9.png')}}" alt="">
            <span>SIKA</span>
        </div>
        <div class="client-pill">
           <img src="{{asset(assetLink().'/images/marin/pat/p10.png')}}" alt="">
            <span>BEACON</span>
        </div>
        <div class="client-pill">
           <img src="{{asset(assetLink().'/images/marin/pat/p11.png')}}" alt="">
            <span>AJAX</span>
        </div>
        <div class="client-pill">
            <img src="{{asset(assetLink().'/images/marin/pat/p12.png')}}" alt="">
            <span>MES</span>
        </div>
        <div class="client-pill">
            <img src="{{asset(assetLink().'/images/marin/pat/p13.png')}}" alt="">
            <span>SAJ</span>
        </div>
        <div class="client-pill">
            <img src="{{asset(assetLink().'/images/marin/pat/p14.png')}}" alt="">
            <span>OPTIMAL</span>
        </div>
       
      </div>
    </div>--}}
  </section>
  
  <!-- HOME CTA -->
  <section id="home-cta">
    <div class="container position-relative fade-in">
      <div class="section-label" style="justify-content:center;color:#07fff8">Work With Us</div>
      <h2>Ready to Engage in Bangladesh?</h2>
      <p>If your organization supports naval or maritime systems, we provide the local access and execution capability required to operate effectively in Bangladesh.</p>
      <a class="btn-gold" href="{{ route('pageView','contact') }}">
        <i class="fas fa-envelope"></i> Start Engagement
      </a>
    </div>
  </section>
  
  
  <section id="clients-strip">
    <div class="container mb-4 fade-in">
      <div class="text-center">
        <!--<div class="section-label" style="justify-content:center">Our Clients</div>-->
        <h2 class="section-title">Our Clients</h2>
      </div>
    </div>
    
     <div class="container">
        <div class="partner-sldier">
            
            <div class="slick-box">
                <div class="panterSlideBox">
                     <img src="{{asset(assetLink().'/images/marin/ca/new/1.png')}}" alt="">
                </div>
            </div>
            <div class="slick-box">
                <div class="panterSlideBox">
                     <img src="{{asset(assetLink().'/images/marin/ca/new/2.png')}}" alt="">
                </div>
            </div>
            <div class="slick-box">
                <div class="panterSlideBox">
                     <img src="{{asset(assetLink().'/images/marin/ca/new/3.png')}}" alt="">
                </div>
            </div>
            <div class="slick-box">
                <div class="panterSlideBox">
                     <img src="{{asset(assetLink().'/images/marin/ca/new/4.png')}}" alt="">
                </div>
            </div>
            <div class="slick-box">
                <div class="panterSlideBox">
                     <img src="{{asset(assetLink().'/images/marin/ca/new/5.png')}}" alt="">
                </div>
            </div>
            <div class="slick-box">
                <div class="panterSlideBox">
                     <img src="{{asset(assetLink().'/images/marin/ca/new/6.png')}}" alt="">
                </div>
            </div>
            <div class="slick-box">
                <div class="panterSlideBox">
                     <img src="{{asset(assetLink().'/images/marin/ca/new/7.png')}}" alt="">
                </div>
            </div>
            <div class="slick-box">
                <div class="panterSlideBox">
                     <img src="{{asset(assetLink().'/images/marin/ca/new/8.png')}}" alt="">
                </div>
            </div>
            <div class="slick-box">
                <div class="panterSlideBox">
                     <img src="{{asset(assetLink().'/images/marin/ca/new/9.png')}}" alt="">
                </div>
            </div>
            
            
        </div>
    </div>
    
    
    {{--<div class="clients-scroll-wrap">
      <div class="clients-track">
        <div class="client-pill">
           <img src="{{asset(assetLink().'/images/marin/ca/c1.png')}}" alt="">
           <span> Bangladesh Navy</span>
          </div>
        <div class="client-pill">
           <img src="{{asset(assetLink().'/images/marin/ca/c2.png')}}" alt="">
            <span>Bangladesh </span>
        </div>
        <div class="client-pill">
           <img src="{{asset(assetLink().'/images/marin/ca/c3.png')}}" alt="">
            <span>Bangladesh Air Force</span>
        </div>
        <div class="client-pill">
           <img src="{{asset(assetLink().'/images/marin/ca/c4.png')}}" alt="">
            <span>Bangladesh Coast Guard</span>
        </div>
        <div class="client-pill">
            <img src="{{asset(assetLink().'/images/marin/ca/c5.png')}}" alt="">
            <span>DGDP</span>
        </div>
        <div class="client-pill">
           <img src="{{asset(assetLink().'/images/marin/ca/c6.png')}}" alt="">
            <span>Chittagong Port Authority</span>
        </div>
        <div class="client-pill">
           <img src="{{asset(assetLink().'/images/marin/ca/c7.png')}}" alt="">
            <span>Mongla Port Authority</span>
        </div>
        <div class="client-pill">
           <img src="{{asset(assetLink().'/images/marin/ca/c8.png')}}" alt="">
            <span>Payra Port Authority</span>
        </div>
        <div class="client-pill">
            <img src="{{asset(assetLink().'/images/marin/ca/c9.png')}}" alt="">
            <span>BIWTA</span>
        </div>
        <div class="client-pill">
           <img src="{{asset(assetLink().'/images/marin/ca/c10.png')}}" alt="">
            <span>BIWTC</span>
        </div>
        <div class="client-pill">
           <img src="{{asset(assetLink().'/images/marin/ca/c11.png')}}" alt="">
            <span>Khulna Shipyard Ltd</span>
        </div>
        <div class="client-pill">
            <img src="{{asset(assetLink().'/images/marin/ca/c12.png')}}" alt="">
            <span>Chittagong Dry Dock Ltd</span>
        </div>
        <div class="client-pill">
            <img src="{{asset(assetLink().'/images/marin/ca/c13.png')}}" alt="">
            <span>Chittagong Dry Dock Ltd</span>
        </div>
        <div class="client-pill">
            <img src="{{asset(assetLink().'/images/marin/ca/c14.png')}}" alt="">
            <span>Chittagong Dry Dock Ltd</span>
        </div>
       
      </div>
    </div>--}}
  </section>
 
  
  <div class="page-section active" >
  <!--<div class="inner-hero">-->
  <!--  <div class="container">-->
  <!--    <div class="section-label">Get In Touch</div>-->
  <!--    <h1 class="inner-hero-title">Start Your Engagement<br><span>in Bangladesh</span></h1>-->
  <!--    <p>MARINE Square welcomes collaboration with international OEMs, service providers, and technical partners seeking to engage with Bangladesh's naval and maritime sector.</p>-->
  <!--  </div>-->
  <!--</div>-->

  <div class="container" style="padding:30px 0px">
    <div class="contact-grid">

      <!-- Contact Info -->
      <div class="contact-info">
        <h4><i class="fas fa-map-marker-alt me-2"></i> Head Office</h4>
        <div class="info-item">
          <i class="fas fa-building"></i>
          <p>58 Golden Plaza (1st Floor)<br>Rasulbag, Shaheed Tajuddin Sharani<br>Mahakhali, Dhaka – 1212, Bangladesh</p>
        </div>

        <h4 style="margin-top:28px"><i class="fas fa-phone me-2"></i> Contact Details</h4>
        <div class="info-item">
          <i class="fas fa-mobile-alt"></i>
          <p><a href="tel:+8801819146112">+880 1819 146112</a></p>
        </div>
        <div class="info-item">
          <i class="fas fa-phone"></i>
          <p><a href="tel:+880258070486">+880 258070486</a></p>
        </div>
        <div class="info-item">
          <i class="fas fa-envelope"></i>
          <p><a href="mailto:info@marine-square.com">info@marine-square.com</a></p>
        </div>
        <div class="info-item">
          <i class="fas fa-envelope-open-text"></i>
          <p><a href="mailto:zamshed.ali@marine-square.com">zamshed.ali@marine-square.com</a></p>
        </div>
        <div class="info-item">
          <i class="fas fa-globe"></i>
          <p><a href="http://www.marine-square.com">www.marine-square.com</a></p>
        </div>

        <h4 style="margin-top:28px"><i class="fas fa-map me-2"></i> Branch Office</h4>
        <div class="info-item">
          <i class="fas fa-map-marker-alt"></i>
          <p>House 579/A-2 (Parabar), Road 9<br>DOHS Mirpur, Dhaka – 1216, Bangladesh</p>
        </div>

        <!-- Officer Card -->
        <div class="officer-card">
          <div class="officer-avatar"><img src="{{asset(assetLink().'/images/marin/capt-zamshed-ali.webp')}}" alt="Capt. Zamshed Ali (Retd.)"></div>
          <div>
            <h5>Capt. Zamshed Ali (Retd.)</h5>
            <p>Chief Executive Officer</p>
            <span>MARINE Square</span>
          </div>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="contact-form-area">
        <div class="section-label">Send a Message</div>
        <div class="section-divider"></div>

        <div id="form-success" style="display:none;background:rgba(15,140,140,0.1);border:1.5px solid var(--teal);border-radius:4px;padding:20px;margin-bottom:24px">
          <p style="color:var(--teal);font-weight:600;margin:0"><i class="fas fa-check-circle me-2"></i> Thank you for your message. We will be in touch shortly.</p>
        </div>

        <label for="cf-name">Full Name</label>
        <input type="text" id="cf-name" placeholder="Your full name" />

  
        <label for="cf-email">Email Address</label>
        <input type="email" id="cf-email" placeholder="your@email.com" />

        <label for="cf-phone">Phone Number</label>
        <input type="tel" id="cf-phone" placeholder="+1 234 567 8900" />

              <label for="cf-org">Subject</label>
        <input type="text" id="cf-org" placeholder="Subject" />


        <label for="cf-message">Message</label>
        <textarea id="cf-message" placeholder="Describe your capability, requirements, or inquiry..."></textarea>

        <button class="btn-gold" onclick="submitForm()" style="width:100%;justify-content:center">
          <i class="fas fa-paper-plane"></i> Send Message
        </button>
      </div>

    </div>
  </div>
</div>
  
  
  
  
  




@endsection @push('js') @endpush