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
.blue-badge {
    display: inline-block;
    padding: 6px 16px;
    background: rgba(13, 59, 94, 0.1);
    color: #0d3b5e;
    font-weight: 600;
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 2px;
    border-radius: 30px;
}

.blue-hero-title {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 1.8rem;
    color: #0b1d30;
    line-height: 1.2;
}

.text-ocean-blue {
    color: #1b6ca8;
}

.blue-hero-lead {
    font-size: 1.25rem;
    color: #5a6673;
    max-width: 750px;
    margin: 0 auto;
    line-height: 1.8;
}

/* Demand Cards (4 columns) */
.blue-section-title {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 2.2rem;
    color: #0b1d30;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.blue-demand-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 40px 20px;
    text-align: center;
    box-shadow: 0 10px 25px rgba(11, 29, 48, 0.04);
    height: 100%;
    transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    border: 1px solid rgba(27, 108, 168, 0.05);
}

.blue-demand-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(27, 108, 168, 0.12);
    border-color: rgba(27, 108, 168, 0.2);
}

.demand-icon {
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, #1b6ca8, #0d3b5e);
    color: #ffffff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    margin: 0 auto 20px;
    transition: transform 0.4s ease;
}

.blue-demand-card:hover .demand-icon {
    transform: scale(1.1) rotate(5deg);
}

.blue-demand-card h5 {
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    font-size: 1.15rem;
    color: #0b1d30;
    margin: 0;
    line-height: 1.4;
}

/* Enhancing Capabilities Side Panel */
.blue-side-panel {
    background: linear-gradient(145deg, #0b1d30, #1b6ca8);
    border-radius: 20px;
    padding: 45px 35px;
    color: #ffffff;
    height: 100%;
    box-shadow: 0 15px 35px rgba(11, 29, 48, 0.15);
    position: relative;
    overflow: hidden;
}

.blue-side-panel::before {
    content: '';
    position: absolute;
    top: -50px;
    right: -50px;
    width: 150px;
    height: 150px;
    background: rgba(255, 255, 255, 0.05);
    border-radius: 50%;
}

.side-panel-icon {
    font-size: 3rem;
    color: #f1f8ff;
    margin-bottom: 25px;
}

.blue-side-panel h4 {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 2rem;
    margin-bottom: 15px;
}

.panel-desc {
    font-size: 1.1rem;
    color: #d0e1f0;
    line-height: 1.6;
}

.blue-check-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.blue-check-list li {
    display: flex;
    align-items: center;
    padding: 12px 0;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    font-size: 1.1rem;
    color: #ffffff;
}

.blue-check-list li:last-child {
    border-bottom: none;
}

.blue-check-list li i {
    color: #ffffff;
    margin-right: 15px;
    font-size: 1.3rem;
}

/* Opportunities Section */
.blue-section-heading h4 {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 1.8rem;
    color: #0b1d30;
    margin-bottom: 8px;
}

.blue-heading-line {
    height: 3px;
    width: 60px;
    background: #1b6ca8;
    border-radius: 2px;
}

/* Premium Opportunity Cards */
.blue-opp-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 35px 25px;
    text-align: left;
    box-shadow: 0 8px 25px rgba(11, 29, 48, 0.03);
    position: relative;
    overflow: hidden;
    transition: all 0.4s ease;
    height: 100%;
    border: 1px solid rgba(0,0,0,0.02);
    z-index: 1;
}

.blue-opp-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(27, 108, 168, 0.1);
}

.opp-hover-overlay {
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, rgba(27,108,168,0.02), rgba(27,108,168,0.05));
    z-index: -1;
    transition: left 0.5s ease;
}

.blue-opp-card:hover .opp-hover-overlay {
    left: 0;
}

.opp-card-icon {
    font-size: 2.2rem;
    color: #1b6ca8;
    margin-bottom: 20px;
    transition: transform 0.4s ease;
}

.blue-opp-card:hover .opp-card-icon {
    transform: translateX(5px);
    color: #0b1d30;
}

.blue-opp-card h5 {
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    font-size: 1.25rem;
    color: #0b1d30;
    margin: 0;
    line-height: 1.4;
}

.opp-card-sub {
    font-size: 0.95rem;
    color: #7b8893;
    margin-top: 8px;
    margin-bottom: 0;
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



.blue-demand-card:hover .demand-icon i { color: #ffffff !important; }
.blue-opp-card:hover .opp-card-icon { color: #857171 !important; }
.blue-opp-card:hover .opp-card-icon i { color: #ffffff !important; }
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
    <div class="main-content blue-economy-page-wrapper">
        <div class="container py-5">

            <!-- Premium Intro Section -->
            <div class="row align-items-center mb-5 pb-4 ms-fade-in">
                <div class="col-lg-9 mx-auto text-center">
                    <div class="blue-badge mb-3">Marine Technology</div>
                    <h2 class="blue-hero-title">Advancing the <span class="text-ocean-blue">Blue Economy</span> Initiative</h2>
                    <p class="blue-hero-lead mt-4">
                        Bangladesh’s Blue Economy initiative is driving new demand in marine research, survey capabilities, and environmental assessment.
                    </p>
                </div>
            </div>

            <!-- Driving Demand Section -->
            <div class="row g-4 mb-5 pb-3">
                <div class="col-12 ms-fade-in text-center mb-3">
                    <h3 class="blue-section-title">Driving New Demand In</h3>
                </div>
                
                <div class="col-lg-3 col-md-6 ms-fade-in">
                    <div class="blue-demand-card">
                        <div class="demand-icon"><i class="fas fa-water"></i></div>
                        <h5>Hydrographic Surveying</h5>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 ms-fade-in">
                    <div class="blue-demand-card">
                        <div class="demand-icon"><i class="fas fa-search-location"></i></div>
                        <h5>Oceanographic Research</h5>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 ms-fade-in">
                    <div class="blue-demand-card">
                        <div class="demand-icon"><i class="fas fa-leaf"></i></div>
                        <h5>Environmental Monitoring</h5>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 ms-fade-in">
                    <div class="blue-demand-card">
                        <div class="demand-icon"><i class="fas fa-fish"></i></div>
                        <h5>Fisheries & Seabed Resource Assessment</h5>
                    </div>
                </div>
            </div>

            <div class="row g-5">
                <!-- Left Column: Enhancing Capabilities -->
                <div class="col-lg-5 ms-fade-in">
                    <div class="blue-side-panel">
                        <div class="side-panel-icon"><i class="fas fa-ship"></i></div>
                        <h4>Enhancing Capabilities</h4>
                        <p class="panel-desc">
                            The induction of advanced survey platforms like <strong>HMS Enterprise</strong> is expected to enhance:
                        </p>
                        <ul class="blue-check-list mt-4">
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <span>Marine data collection</span>
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <span>Research collaboration</span>
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <span>Resource exploration capability</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Right Column: Opportunities -->
                <div class="col-lg-7 ms-fade-in">
                    <div class="blue-section-heading">
                        <h4>Opportunities Exist For</h4>
                        <div class="blue-heading-line"></div>
                    </div>

                    <div class="row g-4 mt-3">
                        <div class="col-md-6">
                            <div class="blue-opp-card">
                                <div class="opp-card-icon"><i class="fas fa-satellite-dish"></i></div>
                                <h5>Survey Equipment</h5>
                                <div class="opp-hover-overlay"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blue-opp-card">
                                <div class="opp-card-icon"><i class="fas fa-robot"></i></div>
                                <h5>Autonomous Systems</h5>
                                <p class="opp-card-sub">UUVs, Drones</p>
                                <div class="opp-hover-overlay"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blue-opp-card">
                                <div class="opp-card-icon"><i class="fas fa-network-wired"></i></div>
                                <h5>Smart Sensor Networks</h5>
                                <div class="opp-hover-overlay"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blue-opp-card">
                                <div class="opp-card-icon"><i class="fas fa-database"></i></div>
                                <h5>Data-Driven Maritime Technologies</h5>
                                <div class="opp-hover-overlay"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- ========== MAIN CONTENT END ========== -->


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