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
.aviation-badge {
    display: inline-block;
    padding: 6px 16px;
    background: rgba(11, 45, 86, 0.15);
    color: #0b2d56;
    font-weight: 600;
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 2px;
    border-radius: 30px;
}

.aviation-hero-title {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 1.8rem;
    color: #0b1d30;
    line-height: 1.2;
}

.text-gold {
    color: #0b2d56;
}

.aviation-hero-lead {
    font-size: 1.25rem;
    color: #5a6673;
    max-width: 700px;
    margin: 0 auto;
    line-height: 1.8;
}

/* Section Headings */
.aviation-section-heading h4 {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 1.6rem;
    color: #0b1d30;
    margin-bottom: 8px;
}

.heading-line {
    height: 3px;
    width: 50px;
    background: #0b2d56;
    border-radius: 2px;
}

/* Platform Cards */
.platform-card {
    position: relative;
    background: #ffffff;
    border-radius: 16px;
    padding: 30px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(11, 29, 48, 0.05);
    transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    display: flex;
    align-items: center;
    border: 1px solid rgba(11, 29, 48, 0.03);
    cursor: default;
}

.platform-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(11, 29, 48, 0.1);
}

.platform-bg-icon {
    position: absolute;
    right: -20px;
    bottom: -30px;
    font-size: 120px;
    color: rgba(11, 29, 48, 0.03);
    transition: all 0.5s ease;
}

.platform-card:hover .platform-bg-icon {
    transform: scale(1.1) rotate(-10deg);
    color: rgba(11, 45, 86, 0.08);
}

.platform-content {
    position: relative;
    z-index: 1;
    display: flex;
    flex-direction: column;
}

.platform-icon {
    width: 50px;
    height: 50px;
    background: #0b1d30;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 12px;
    font-size: 1.4rem;
    margin-bottom: 15px;
    transition: background 0.3s ease;
}

.platform-card:hover .platform-icon {
    background: #0b2d56;
}

.platform-content h5 {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 1.4rem;
    color: #0b1d30;
    margin-bottom: 2px;
}

.platform-content p {
    color: #6c7a87;
    margin: 0;
    font-size: 1rem;
    font-weight: 500;
}

/* Premium Requirement Cards */
.req-premium-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 35px 25px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(11, 29, 48, 0.03);
    position: relative;
    overflow: hidden;
    transition: all 0.4s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border: 1px solid rgba(0,0,0,0.02);
}

.req-premium-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(11, 29, 48, 0.08);
}

.req-icon-top {
    font-size: 2.5rem;
    color: #0b2d56;
    margin-bottom: 20px;
    transition: transform 0.4s ease;
}

.req-premium-card:hover .req-icon-top {
    transform: translateY(-5px);
}

.req-premium-card h5 {
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    font-size: 1.15rem;
    color: #0b1d30;
    margin: 0;
    line-height: 1.4;
    position: relative;
    z-index: 2;
}

.req-sub {
    font-size: 0.9rem;
    color: #7b8893;
    margin-top: 8px;
    margin-bottom: 0;
    position: relative;
    z-index: 2;
}

.req-hover-line {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 4px;
    background: #0b1d30;
    transition: width 0.4s ease;
}

.req-premium-card:hover .req-hover-line {
    width: 100%;
}

/* Opportunity Banner */
.opportunity-premium-banner {
    background: #0b1d30;
    border-radius: 20px;
    padding: 40px;
    box-shadow: 0 20px 50px rgba(11, 29, 48, 0.15);
    position: relative;
    overflow: hidden;
}

.opportunity-premium-banner::after {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 300px;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(11, 45, 86, 0.05));
    transform: skewX(-20deg) translateX(50px);
}

.opp-icon {
    font-size: 3.5rem;
    color: #ffffff;
}

.opp-title {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 1.5rem;
    color: #ffffff;
    margin-bottom: 10px;
}

.opp-text {
    font-size: 1.1rem;
    color: #b0bcc7;
    line-height: 1.6;
    margin: 0;
    max-width: 800px;
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

@media (max-width: 768px) {
    .opportunity-premium-banner {
        text-align: center;
    }
}



.aviation-panel:hover .panel-icon i { color: #ffffff !important; }
.req-premium-card:hover .req-icon-top { color: #ffffff !important; }
.req-premium-card:hover .req-icon-top i { color: #ffffff !important; }
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
    <div class="main-content aviation-page-wrapper">
        <div class="container py-5">

            <!-- Premium Intro Section -->
            <div class="row align-items-center mb-5 pb-4 ms-fade-in">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="aviation-badge mb-3">Naval Aviation</div>
                    <h2 class="aviation-hero-title">Continuous Technical Support & <span class="text-gold">MRO</span></h2>
                    <p class="aviation-hero-lead mt-4">
                        Bangladesh Navy aviation operates helicopters and maritime patrol aircraft requiring continuous technical support and certified components.
                    </p>
                </div>
            </div>

            <div class="row g-5">
                <!-- Left Column: Platforms -->
                <div class="col-lg-5 ms-fade-in">
                    <div class="aviation-section-heading">
                        <h4>Operational Platforms</h4>
                        <div class="heading-line"></div>
                    </div>
                    
                    <div class="platform-card mt-4">
                        <div class="platform-bg-icon"><i class="fas fa-helicopter"></i></div>
                        <div class="platform-content">
                            <div class="platform-icon"><i class="fas fa-helicopter"></i></div>
                            <h5>AW109 / AW109E</h5>
                            <p>Helicopters</p>
                        </div>
                    </div>

                    <div class="platform-card mt-4">
                        <div class="platform-bg-icon"><i class="fas fa-plane"></i></div>
                        <div class="platform-content">
                            <div class="platform-icon"><i class="fas fa-plane-departure"></i></div>
                            <h5>Maritime Patrol</h5>
                            <p>Aircraft (MPA)</p>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Requirements -->
                <div class="col-lg-7 ms-fade-in">
                    <div class="aviation-section-heading">
                        <h4>Critical Requirements</h4>
                        <div class="heading-line"></div>
                    </div>

                    <div class="row g-4 mt-4">
                        <div class="col-md-6">
                            <div class="req-premium-card">
                                <div class="req-icon-top"><i class="fas fa-certificate"></i></div>
                                <h5>OEM-Certified Spares</h5>
                                <div class="req-hover-line"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="req-premium-card">
                                <div class="req-icon-top"><i class="fas fa-tools"></i></div>
                                <h5>Repair & Overhaul</h5>
                                <p class="req-sub">FAA/EASA Standard</p>
                                <div class="req-hover-line"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="req-premium-card">
                                <div class="req-icon-top"><i class="fas fa-microchip"></i></div>
                                <h5>Component-Level Maintenance</h5>
                                <div class="req-hover-line"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="req-premium-card">
                                <div class="req-icon-top"><i class="fas fa-sync"></i></div>
                                <h5>System Support & Upgrades</h5>
                                <div class="req-hover-line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Opportunity Banner -->
            <div class="opportunity-premium-banner mt-5 ms-fade-in">
                <div class="row align-items-center">
                    <div class="col-md-2 text-center text-md-end">
                        <div class="opp-icon"><i class="fas fa-globe-asia"></i></div>
                    </div>
                    <div class="col-md-10 mt-3 mt-md-0">
                        <h4 class="opp-title">OEM Entry Opportunities</h4>
                        <p class="opp-text">
                            With limited local MRO capability, foreign repair stations and aviation OEMs have strong entry opportunities through structured local representation.
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <!-- CTA Section -->
        <section class="ms-cta-section mt-5">
            <div class="container">
                <h2 class="ms-fade-in">Provide Aviation Support?</h2>
                <p class="ms-fade-in">Partner with MARINE Square for structured local representation and enter the Bangladesh naval aviation market.</p>
                <a href="https://nit.hostrb.com/sub/marine-square/contact" class="ms-btn-gold ms-fade-in">
                    Contact Us Today <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </section>
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