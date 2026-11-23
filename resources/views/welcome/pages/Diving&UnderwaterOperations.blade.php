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



/* Hero Section / Header Title */
.duo-header {
    text-align: center;
    margin-bottom: 50px;
}

.duo-title {
    font-family: 'Poppins', sans-serif;
    color: #0b2d56;
    font-weight: 700;
    font-size: 38px;
    margin-bottom: 18px;
    position: relative;
    display: inline-block;
}

.duo-title::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 70px;
    height: 3px;
    background: #cda85a; /* Gold accent */
}

.duo-lead {
    font-family: 'Barlow', sans-serif;
    font-size: 18px;
    color: #444;
    max-width: 850px;
    margin: 0 auto;
    line-height: 1.7;
    font-weight: 500;
}

/* Scope Includes Section */
.duo-scope-section {
    background-color: #f8f9fa;
    padding: 70px 0;
    border-radius: 12px;
    box-shadow: 0 5px 25px rgba(0,0,0,0.02);
    margin-bottom: 70px;
}

.duo-section-title {
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    color: #0b2d56;
    text-align: center;
    margin-bottom: 45px;
    font-size: 30px;
}

.duo-card {
    background: #ffffff;
    padding: 35px 25px;
    border-radius: 12px;
    text-align: center;
    height: 100%;
    transition: all 0.4s ease;
    border: 1px solid #eee;
    position: relative;
    overflow: hidden;
    z-index: 1;
}

.duo-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: #cda85a;
    transition: all 0.4s ease;
    transform: scaleX(0);
    transform-origin: left;
}

.duo-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(11, 45, 86, 0.08);
    border-color: transparent;
}

.duo-card:hover::before {
    transform: scaleX(1);
}

.duo-icon-box {
    width: 75px;
    height: 75px;
    background: rgba(11, 45, 86, 0.06);
    color: #0b2d56;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 32px;
    margin-bottom: 25px;
    transition: all 0.4s ease;
}

.duo-card:hover .duo-icon-box {
    background: #0b2d56;
    color: #ffffff;
    transform: rotateY(180deg);
}

.duo-card h5 {
    font-family: 'Poppins', sans-serif;
    font-size: 18px;
    font-weight: 600;
    color: #111;
    line-height: 1.5;
    margin: 0;
}

/* Project Execution Approach */
.duo-approach-section {
    padding-bottom: 60px;
}

.duo-approach-lead {
    text-align: center;
    font-family: 'Barlow', sans-serif;
    font-size: 18px;
    color: #555;
    margin-bottom: 50px;
    font-weight: 500;
}

.duo-steps-container {
    max-width: 800px;
    margin: 0 auto;
}

.duo-step-item {
    display: flex;
    align-items: center;
    background: #ffffff;
    padding: 25px 30px;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.04);
    margin-bottom: 20px;
    transition: all 0.3s ease;
    border-left: 5px solid #0b2d56;
}

.duo-step-item:hover {
    box-shadow: 0 10px 30px rgba(11, 45, 86, 0.1);
    transform: translateX(8px);
    border-left-color: #cda85a;
}

.duo-step-number {
    width: 45px;
    height: 45px;
    min-width: 45px;
    background: #0b2d56;
    color: #ffffff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 18px;
    margin-right: 25px;
    transition: all 0.3s ease;
}

.duo-step-item:hover .duo-step-number {
    background: #cda85a;
}

.duo-step-content p {
    font-family: 'Barlow', sans-serif;
    margin: 0;
    font-size: 17px;
    color: #333;
    font-weight: 500;
    line-height: 1.5;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .duo-title {
        font-size: 30px;
    }
    
    .duo-lead {
        font-size: 16px;
        padding: 0 15px;
    }
    
    .duo-section-title {
        font-size: 26px;
    }
    
    .duo-step-item {
        flex-direction: column;
        align-items: flex-start;
        padding: 20px;
    }
    
    .duo-step-number {
        margin-right: 0;
        margin-bottom: 15px;
    }
}



    
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



  <!-- ========== MAIN CONTENT ========== -->
    <div class="main-content">
        <div class="container py-5">

            <div class="duo-header ms-fade-in">
                <h2 class="duo-title">Diving & Underwater Operations</h2>
                <p class="duo-lead">
                    Specialized underwater services executed by trained personnel with naval background and operational experience.
                </p>
            </div>

            <!-- Scope Includes Section -->
            <div class="duo-scope-section ms-fade-in mt-5">
                <div class="container px-4">
                    <h3 class="duo-section-title">Scope Includes</h3>
                    <div class="row g-4 justify-content-center">
                        <!-- Card 1 -->
                        <div class="col-lg-4 col-md-6 ms-fade-in">
                            <div class="duo-card">
                                <div class="duo-icon-box"><i class="fas fa-magnifying-glass"></i></div>
                                <h5>Underwater inspection and condition assessment</h5>
                            </div>
                        </div>
                        <!-- Card 2 -->
                        <div class="col-lg-4 col-md-6 ms-fade-in">
                            <div class="duo-card">
                                <div class="duo-icon-box"><i class="fas fa-life-ring"></i></div>
                                <h5>Salvage and recovery operations</h5>
                            </div>
                        </div>
                        <!-- Card 3 -->
                        <div class="col-lg-4 col-md-6 ms-fade-in">
                            <div class="duo-card">
                                <div class="duo-icon-box"><i class="fas fa-ship"></i></div>
                                <h5>Hull cleaning and propeller maintenance</h5>
                            </div>
                        </div>
                        <!-- Card 4 -->
                        <div class="col-lg-4 col-md-6 ms-fade-in">
                            <div class="duo-card">
                                <div class="duo-icon-box"><i class="fas fa-fire-burner"></i></div>
                                <h5>Underwater cutting, welding, and NDT/UTM measurement</h5>
                            </div>
                        </div>
                        <!-- Card 5 -->
                        <div class="col-lg-4 col-md-6 ms-fade-in">
                            <div class="duo-card">
                                <div class="duo-icon-box"><i class="fas fa-anchor"></i></div>
                                <h5>Support for port, vessel, and marine infrastructure operations</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project Execution Approach -->
            <div class="duo-approach-section mt-5 ms-fade-in">
                <h3 class="duo-section-title">Project Execution Approach</h3>
                <p class="duo-approach-lead">Across all projects, MARINE Square follows a structured execution model:</p>
                
                <div class="duo-steps-container">
                    <div class="duo-step-item ms-fade-in">
                        <div class="duo-step-number">1</div>
                        <div class="duo-step-content">
                            <p>Understanding operational requirements from end users</p>
                        </div>
                    </div>
                    <div class="duo-step-item ms-fade-in">
                        <div class="duo-step-number">2</div>
                        <div class="duo-step-content">
                            <p>Aligning technical solutions with system configuration</p>
                        </div>
                    </div>
                    <div class="duo-step-item ms-fade-in">
                        <div class="duo-step-number">3</div>
                        <div class="duo-step-content">
                            <p>Coordinating sourcing and supply from OEMs</p>
                        </div>
                    </div>
                    <div class="duo-step-item ms-fade-in">
                        <div class="duo-step-number">4</div>
                        <div class="duo-step-content">
                            <p>Supporting installation, commissioning, and integration</p>
                        </div>
                    </div>
                    <div class="duo-step-item ms-fade-in">
                        <div class="duo-step-number">5</div>
                        <div class="duo-step-content">
                            <p>Ensuring documentation, compliance, and follow-up</p>
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