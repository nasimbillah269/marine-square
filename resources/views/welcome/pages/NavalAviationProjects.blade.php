@extends(welcomeTheme().'layouts.app') @section('title')
<title>{{$page->seo_title?:websiteTitle($page->name)}}</title>
@endsection @section('SEO')
<meta name="title" property="og:title" content="{{$page->seo_title?:websiteTitle($page->name)}}" />
<meta name="description" property="og:description" content="{!!$page->seo_description?:general()->meta_description!!}" />
<meta name="keywords" content="{{$page->seo_keyword?:general()->meta_keyword}}" />
<meta name="image" property="og:image" content="{{asset($page->image())}}" />
<meta name="url" property="og:url" content="{{route('pageView',$page->slug?:'no-title')}}" />
<link rel="canonical" href="{{route('pageView',$page->slug?:'no-title')}}" />
@endsection @push('css')
<style>

.breaOverly {
    background: #104b7c !important;
    padding: 0;
}

/* Hero Section */
.aviation-hero-title {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 2.8rem;
    color: #0b1d30;
    line-height: 1.2;
}

.text-navy-accent {
    color: #0b2d56;
    display: inline-block;
}

.aviation-hero-lead {
    font-size: 1.05rem;
    color: #556270;
    max-width: 850px;
    margin: 0 auto;
    line-height: 1.7;
}

/* ----------------------------------------------------
   AIRLINE TICKET UI
   ---------------------------------------------------- */
.ticket-container {
    max-width: 900px;
    margin: 0 auto;
}

.aviation-ticket {
    display: flex;
    background: #ffffff;
    border-radius: 12px;
    margin-bottom: 35px;
    position: relative;
    /* Use drop-shadow instead of box-shadow so the cutouts cast realistic shadows */
    filter: drop-shadow(0 10px 20px rgba(11, 45, 86, 0.08));
    transition: transform 0.4s ease, filter 0.4s ease;
}

.aviation-ticket:hover {
    transform: translateY(-5px);
    filter: drop-shadow(0 15px 30px rgba(11, 45, 86, 0.15));
}

/* Main Ticket Body (Left Side) */
.ticket-body {
    flex: 1;
    padding: 35px 45px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.ticket-class-badge {
    font-size: 0.8rem;
    font-weight: 700;
    color: #8c9baf;
    letter-spacing: 2px;
    margin-bottom: 10px;
}

.ticket-title {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 1.5rem;
    color: #0b1d30;
    margin-bottom: 12px;
}

.ticket-desc {
    font-size: 0.95rem;
    color: #556270;
    line-height: 1.7;
    margin-bottom: 25px;
}

.ticket-meta {
    display: flex;
    gap: 40px;
}

.meta-block {
    display: flex;
    flex-direction: column;
    font-size: 0.95rem;
    font-weight: 600;
    color: #0b2d56;
}

.meta-block span {
    font-size: 0.75rem;
    color: #8c9baf;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 4px;
}

/* Perforated Divider */
.ticket-divider {
    width: 2px;
    background: repeating-linear-gradient(to bottom, #d1d9e6 0, #d1d9e6 8px, transparent 8px, transparent 16px);
    position: relative;
    flex-shrink: 0;
}

/* The top and bottom semi-circle cutouts to mimic tearing perforations */
.ticket-divider::before,
.ticket-divider::after {
    content: '';
    position: absolute;
    width: 30px;
    height: 30px;
    background: #f7f9fb; /* Must match the body background of the page! */
    border-radius: 50%;
    left: -15px;
}

.ticket-divider::before {
    top: -15px;
}

.ticket-divider::after {
    bottom: -15px;
}

/* The Tear-Off Stub (Right Side) */
.ticket-stub {
    width: 200px;
    background: #0b2d56;
    border-radius: 0 12px 12px 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 30px 20px;
    color: #ffffff;
    position: relative;
    flex-shrink: 0;
}

.stub-icon {
    font-size: 2.2rem;
    color: #ffffff;
    margin-bottom: 15px;
    transition: transform 0.4s ease;
}

.aviation-ticket:hover .stub-icon {
    transform: scale(1.1);
}

.stub-num {
    font-family: 'Poppins', sans-serif;
    font-size: 2.5rem;
    font-weight: 700;
    opacity: 0.9;
    letter-spacing: 2px;
}

/* CSS-based Barcode */
.stub-barcode {
    margin-top: 15px;
    width: 80%;
    height: 25px;
    background: repeating-linear-gradient(
        to right,
        rgba(255, 255, 255, 0.4) 0,
        rgba(255, 255, 255, 0.4) 2px,
        transparent 2px,
        transparent 5px,
        rgba(255, 255, 255, 0.4) 5px,
        rgba(255, 255, 255, 0.4) 6px,
        transparent 6px,
        transparent 10px,
        rgba(255, 255, 255, 0.4) 10px,
        rgba(255, 255, 255, 0.4) 14px,
        transparent 14px,
        transparent 16px
    );
    opacity: 0.6;
}

/* ----------------------------------------------------
   PLATFORMS SUPPORTED BANNER
   ---------------------------------------------------- */
.aviation-platform-banner {
    background: #ffffff;
    border: 1px solid #d1d9e6;
    border-left: 6px solid #0b2d56;
    border-radius: 8px;
    padding: 35px 40px;
    display: flex;
    align-items: center;
    box-shadow: 0 5px 20px rgba(11, 45, 86, 0.04);
    max-width: 900px;
    margin: 0 auto;
}

.banner-icon {
    font-size: 3rem;
    color: #0b2d56;
    margin-right: 30px;
    flex-shrink: 0;
}

.banner-text h5 {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 1.4rem;
    margin-bottom: 8px;
    color: #0b1d30;
}

.banner-text p {
    font-size: 1.05rem;
    margin: 0;
    color: #556270;
    line-height: 1.6;
}

/* ----------------------------------------------------
   RESPONSIVE MOBILE ADJUSTMENTS
   ---------------------------------------------------- */
@media screen and (max-width: 768px) {
    .aviation-ticket {
        flex-direction: column;
    }
    
    .ticket-body {
        padding: 30px 25px;
    }
    
    .ticket-divider {
        width: 100%;
        height: 2px;
        background: repeating-linear-gradient(to right, #d1d9e6 0, #d1d9e6 8px, transparent 8px, transparent 16px);
    }
    
    /* Rotate the cutouts for horizontal divider */
    .ticket-divider::before,
    .ticket-divider::after {
        top: -15px;
    }
    
    .ticket-divider::before {
        left: -15px;
    }
    
    .ticket-divider::after {
        left: auto;
        right: -15px;
    }
    
    .ticket-stub {
        width: 100%;
        border-radius: 0 0 12px 12px;
        flex-direction: row;
        justify-content: space-between;
        padding: 20px 30px;
    }
    
    .stub-barcode {
        margin-top: 0;
        width: 60px;
        height: 20px;
    }
    
    .stub-icon {
        margin-bottom: 0;
    }
    
    .aviation-platform-banner {
        flex-direction: column;
        text-align: center;
        padding: 30px 20px;
    }
    
    .banner-icon {
        margin-right: 0;
        margin-bottom: 20px;
    }
}

/* Utilities */
.visible {
    opacity: 1 !important;
    transform: translateY(0) !important;
}

.ms-fade-in {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.6s ease-out, transform 0.6s ease-out;
}
/* ========== MAIN CONTENT CSS END ========== */



    
</style>
@endpush @section('contents')

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




<!-- ========== MAIN CONTENT START ========== -->
    <div class="main-content aviation-projects-wrapper">
        <div class="container py-5">

            <!-- Intro Section -->
            <div class="row align-items-center mb-5 pb-3 ms-fade-in">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="aviation-hero-title">Aviation Support <span class="text-navy-accent">Scope</span></h2>
                    <p class="aviation-hero-lead mt-4">
                        We provide structured support to Bangladesh Navy aviation through sourcing of OEM spares and coordination of repair and overhaul services.
                    </p>
                </div>
            </div>

            <!-- UNIQUE AIRLINE TICKET LAYOUT -->
            <div class="ticket-container">
                
                <!-- Ticket 1 -->
                <div class="aviation-ticket ms-fade-in">
                    <div class="ticket-body">
                        <div class="ticket-class-badge">SERVICE TIER: LOGISTICS</div>
                        <h4 class="ticket-title">OEM Spares Supply</h4>
                        <p class="ticket-desc">Supply of aviation spare parts for helicopter and maritime patrol aircraft systems, ensuring direct traceability to certified manufacturers.</p>
                        <div class="ticket-meta">
                            <div class="meta-block"><span>TYPE</span>Hardware</div>
                            <div class="meta-block"><span>PLATFORMS</span>Heli / MPA</div>
                        </div>
                    </div>
                    <div class="ticket-divider"></div>
                    <div class="ticket-stub">
                        <div class="stub-icon"><i class="fas fa-plane-departure"></i></div>
                        <div class="stub-num">01</div>
                        <div class="stub-barcode"></div>
                    </div>
                </div>

                <!-- Ticket 2 -->
                <div class="aviation-ticket ms-fade-in">
                    <div class="ticket-body">
                        <div class="ticket-class-badge">SERVICE TIER: COMPONENTS</div>
                        <h4 class="ticket-title">Component Support</h4>
                        <p class="ticket-desc">Comprehensive support for gyro instruments, fuel system components, critical valves, mechanical actuators, and brake assemblies.</p>
                        <div class="ticket-meta">
                            <div class="meta-block"><span>TYPE</span>Instruments</div>
                            <div class="meta-block"><span>PLATFORMS</span>Heli / MPA</div>
                        </div>
                    </div>
                    <div class="ticket-divider"></div>
                    <div class="ticket-stub">
                        <div class="stub-icon"><i class="fas fa-cogs"></i></div>
                        <div class="stub-num">02</div>
                        <div class="stub-barcode"></div>
                    </div>
                </div>

                <!-- Ticket 3 -->
                <div class="aviation-ticket ms-fade-in">
                    <div class="ticket-body">
                        <div class="ticket-class-badge">SERVICE TIER: MRO</div>
                        <h4 class="ticket-title">Repair Coordination</h4>
                        <p class="ticket-desc">Direct coordination with overseas FAA/EASA-approved repair facilities for overhaul and recertification of critical aviation components.</p>
                        <div class="ticket-meta">
                            <div class="meta-block"><span>TYPE</span>Overhaul</div>
                            <div class="meta-block"><span>CERT</span>FAA/EASA</div>
                        </div>
                    </div>
                    <div class="ticket-divider"></div>
                    <div class="ticket-stub">
                        <div class="stub-icon"><i class="fas fa-tools"></i></div>
                        <div class="stub-num">03</div>
                        <div class="stub-barcode"></div>
                    </div>
                </div>

                <!-- Ticket 4 -->
                <div class="aviation-ticket ms-fade-in">
                    <div class="ticket-body">
                        <div class="ticket-class-badge">SERVICE TIER: COMPLIANCE</div>
                        <h4 class="ticket-title">Documentation & Traceability</h4>
                        <p class="ticket-desc">Rigorous documentation handling, maintaining complete part traceability, and providing full compliance support for naval aviation standards.</p>
                        <div class="ticket-meta">
                            <div class="meta-block"><span>TYPE</span>Compliance</div>
                            <div class="meta-block"><span>RECORD</span>Traceable</div>
                        </div>
                    </div>
                    <div class="ticket-divider"></div>
                    <div class="ticket-stub">
                        <div class="stub-icon"><i class="fas fa-file-signature"></i></div>
                        <div class="stub-num">04</div>
                        <div class="stub-barcode"></div>
                    </div>
                </div>

            </div> <!-- End Ticket Container -->

            <!-- Platforms Supported Banner -->
            <div class="row ms-fade-in mt-5">
                <div class="col-12">
                    <div class="aviation-platform-banner">
                        <div class="banner-icon"><i class="fas fa-helicopter"></i></div>
                        <div class="banner-text">
                            <h5>Supported Airframes</h5>
                            <p>Our capabilities actively support <strong>AW109 / AW109E helicopters</strong> and the <strong>Bangladesh Navy Maritime Patrol Aircraft (MPA)</strong> fleet.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>






@endsection 

@push('js') 
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((e, i) => {
                if (e.isIntersecting) setTimeout(() => e.target.classList.add('visible'), i * 80);
            });
        }, { threshold: 0.12 });
        document.querySelectorAll('.ms-fade-in').forEach(el => observer.observe(el));
    });
</script>
@endpush