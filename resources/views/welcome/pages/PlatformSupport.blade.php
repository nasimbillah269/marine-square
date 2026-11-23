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
.support-badge {
    display: inline-block;
    padding: 6px 16px;
    background: rgba(15, 44, 74, 0.1);
    color: #0f2c4a;
    font-weight: 600;
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 2px;
    border-radius: 30px;
    border: 1px solid rgba(15, 44, 74, 0.15);
}

.support-hero-title {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 1.8rem;
    color: #1b262c;
    line-height: 1.2;
}

.text-steel {
    color: #0f2c4a;
    position: relative;
    display: inline-block;
}



.support-hero-lead {
    font-size: 1.2rem;
    color: #556270;
    max-width: 780px;
    margin: 0 auto;
    line-height: 1.8;
}

/* Demand Cards (4 columns) */
.support-demand-card {
    background: #ffffff;
    border-radius: 12px;
    padding: 35px 25px;
    text-align: center;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.03);
    height: 100%;
    position: relative;
    overflow: hidden;
    transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    border: 1px solid rgba(0,0,0,0.03);
    z-index: 1;
}

.support-demand-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 30px rgba(15, 44, 74, 0.08);
}

.card-icon-bg {
    position: absolute;
    top: -20px;
    right: -20px;
    font-size: 140px;
    color: rgba(15, 44, 74, 0.02);
    z-index: -1;
    transition: all 0.5s ease;
}

.support-demand-card:hover .card-icon-bg {
    transform: scale(1.1) rotate(-15deg);
    color: rgba(11, 45, 86, 0.05);
}

.card-icon {
    width: 65px;
    height: 65px;
    background: #f4f6f8;
    color: #0f2c4a;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.8rem;
    margin: 0 auto 20px;
    transition: all 0.4s ease;
}

.support-demand-card:hover .card-icon {
    background: #0f2c4a;
    color: #ffffff;
    border-radius: 50%;
}

.support-demand-card h5 {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 1.25rem;
    color: #1b262c;
    margin-bottom: 10px;
}

.support-demand-card p {
    font-size: 0.95rem;
    color: #6a7c92;
    margin: 0;
    line-height: 1.5;
}

/* Trend and Engagement Panels */
.support-example-panel {
    background: #ffffff;
    border-left: 5px solid #0b2d56;
    border-radius: 8px;
    padding: 40px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
    height: 100%;
    transition: transform 0.3s ease;
}

.support-example-panel:hover {
    transform: translateY(-3px);
}

.support-engagement-panel {
    background: linear-gradient(135deg, #0f2c4a 0%, #1b262c 100%);
    border-radius: 8px;
    padding: 40px;
    color: #ffffff;
    box-shadow: 0 15px 35px rgba(15, 44, 74, 0.15);
    height: 100%;
    position: relative;
    overflow: hidden;
    transition: transform 0.3s ease;
}

.support-engagement-panel:hover {
    transform: translateY(-3px);
}

.support-engagement-panel::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 100px;
    height: 100%;
    background: rgba(255,255,255,0.03);
    transform: skewX(-15deg);
}

.example-icon {
    font-size: 2.5rem;
    color: #0b2d56;
    margin-bottom: 20px;
}

.engage-icon {
    font-size: 2.5rem;
    color: #0b2d56;
    margin-bottom: 20px;
}

.support-example-panel h4, .support-engagement-panel h4 {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 2rem;
    margin-bottom: 15px;
}

.support-example-panel h4 {
    color: #0f2c4a;
}

.support-example-panel p {
    font-size: 1.15rem;
    color: #556270;
    line-height: 1.6;
}

.support-engagement-panel p {
    font-size: 1.15rem;
    color: #d0d7de;
    line-height: 1.6;
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



.support-demand-card:hover .card-icon { color: #ffffff !important; }
.support-demand-card:hover .card-icon i { color: #ffffff !important; }
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
    <div class="main-content platform-support-wrapper">
        <div class="container py-5">

            <!-- Premium Intro Section -->
            <div class="row align-items-center mb-5 pb-4 ms-fade-in">
                <div class="col-lg-9 mx-auto text-center">
                    <div class="support-badge mb-3">Imported Vessels</div>
                    <h2 class="support-hero-title">Long-Term Demand for <span class="text-steel">Platform Support</span></h2>
                    <p class="support-hero-lead mt-4">
                        Bangladesh Navy continues to induct foreign-built vessels from the UK, China, Korea, and Europe. Each platform creates sustained requirements for integration and support.
                    </p>
                </div>
            </div>

            <!-- Long-Term Demand Grid -->
            <div class="row g-4 mb-5 ms-fade-in">
                
                <div class="col-lg-3 col-md-6">
                    <div class="support-demand-card">
                        <div class="card-icon-bg"><i class="fas fa-boxes"></i></div>
                        <div class="card-icon"><i class="fas fa-boxes"></i></div>
                        <h5>OEM Spares</h5>
                        <p>OEM spares and consumables</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="support-demand-card">
                        <div class="card-icon-bg"><i class="fas fa-book"></i></div>
                        <div class="card-icon"><i class="fas fa-book"></i></div>
                        <h5>Technical Docs</h5>
                        <p>Documentation and training</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="support-demand-card">
                        <div class="card-icon-bg"><i class="fas fa-tools"></i></div>
                        <div class="card-icon"><i class="fas fa-tools"></i></div>
                        <h5>Repair Services</h5>
                        <p>Repair and overhaul coordination</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="support-demand-card">
                        <div class="card-icon-bg"><i class="fas fa-plug"></i></div>
                        <div class="card-icon"><i class="fas fa-plug"></i></div>
                        <h5>System Integration</h5>
                        <p>System upgrades and integration</p>
                    </div>
                </div>
            </div>

            <div class="row mt-5 g-5">
                <!-- Example Banner -->
                <div class="col-lg-6 ms-fade-in">
                    <div class="support-example-panel">
                        <div class="example-icon"><i class="fas fa-ship"></i></div>
                        <h4>Broader Foreign Trend</h4>
                        <p>
                            For example, the acquisition of <strong>HMS Enterprise</strong> reflects a broader trend of foreign-origin platforms requiring sustained international technical support.
                        </p>
                    </div>
                </div>

                <!-- OEM Engagement -->
                <div class="col-lg-6 ms-fade-in">
                    <div class="support-engagement-panel">
                        <div class="engage-icon"><i class="fas fa-handshake"></i></div>
                        <h4>OEM Early Engagement</h4>
                        <p>
                            OEMs that engage early can establish long-term lifecycle support roles, ensuring recurring business over the operational life of each platform.
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <!-- CTA Section -->
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