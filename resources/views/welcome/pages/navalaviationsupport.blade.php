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

.breaOverly {
    background: #104b7c !important;
    padding: 0;
}


/* --- 1. Header Section --- */
.aviation-header {
    text-align: center;
    margin-bottom: 50px;
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
}

.aviation-title {
    font-weight: 700;
    font-size: 36px;
    color: #0b2d56;
    margin-bottom: 18px;
    position: relative;
    display: inline-block;
}

.aviation-title::after {
    content: '';
    position: absolute;
    width: 60px;
    height: 4px;
    background: #0F8C8C;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    border-radius: 2px;
}

.aviation-lead {
    font-size: 16px;
    color: #5a6a7a;
    line-height: 1.8;
    margin-top: 25px;
}

/* --- 2. Section Titles --- */
.aviation-section-title {
    font-weight: 700;
    font-size: 24px;
    color: #0b2d56;
    margin-bottom: 30px;
    position: relative;
    padding-bottom: 12px;
}

.aviation-section-title::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 50px;
    height: 4px;
    background: #e8c06a; /* Gold accent */
    border-radius: 2px;
}

/* --- 3. Platforms (Left Column) --- */
.aviation-platform-container {
    background: #f4f7fb;
    padding: 40px 30px;
    border-radius: 16px;
    height: 100%;
}

.aviation-platform-card {
    background: #ffffff;
    padding: 25px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    gap: 20px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.04);
    border-left: 4px solid #0F8C8C;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.aviation-platform-card:hover {
    transform: translateX(10px);
    box-shadow: 0 12px 30px rgba(15, 140, 140, 0.15);
}

.platform-icon {
    width: 55px;
    height: 55px;
    background: rgba(15, 140, 140, 0.1);
    color: #0F8C8C;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 26px;
    flex-shrink: 0;
}

.platform-info h5 {
    font-size: 18px;
    font-weight: 700;
    color: #0b2d56;
    margin-bottom: 5px;
}

.platform-info p {
    font-size: 14px;
    color: #5a6a7a;
    margin: 0;
    font-weight: 500;
}

/* --- 4. Scope Timeline (Right Column) --- */
.aviation-scope-container {
    padding: 40px 30px;
    background: #ffffff;
    border-radius: 16px;
    border: 1px solid rgba(11, 45, 86, 0.06);
    box-shadow: 0 10px 35px rgba(11, 45, 86, 0.03);
    height: 100%;
}

.aviation-timeline {
    position: relative;
    padding-left: 30px;
}

/* Timeline Vertical Line */
.aviation-timeline::before {
    content: '';
    position: absolute;
    left: 0;
    top: 10px;
    bottom: 20px;
    width: 2px;
    background: #e9eef3;
}

.aviation-timeline-item {
    position: relative;
    margin-bottom: 35px;
}

.aviation-timeline-item:last-child {
    margin-bottom: 0;
}

.timeline-dot {
    position: absolute;
    left: -46px; /* 30px padding + 16px half-width */
    top: 0;
    width: 32px;
    height: 32px;
    background: #ffffff;
    border: 2px solid #0F8C8C;
    color: #0F8C8C;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
    z-index: 2;
    transition: all 0.3s ease;
}

.aviation-timeline-item:hover .timeline-dot {
    background: #0F8C8C;
    color: #ffffff;
    box-shadow: 0 0 15px rgba(15, 140, 140, 0.4);
    transform: scale(1.1);
}

.timeline-content {
    background: #f9fbfd;
    padding: 20px 25px;
    border-radius: 10px;
    border: 1px solid rgba(15, 140, 140, 0.05);
    transition: all 0.3s ease;
}

.aviation-timeline-item:hover .timeline-content {
    background: #ffffff;
    box-shadow: 0 8px 25px rgba(11, 45, 86, 0.08);
    transform: translateX(5px);
}

.timeline-content h5 {
    font-size: 16px;
    font-weight: 700;
    color: #0b2d56;
    margin-bottom: 8px;
}

.timeline-content p {
    font-size: 14px;
    color: #5a6a7a;
    line-height: 1.6;
    margin: 0;
}

/* --- 5. Bottom Compliance Banner --- */
.aviation-compliance-banner {
    background: linear-gradient(90deg, #104b7c, #0F8C8C);
    border-radius: 16px;
    padding: 30px 40px;
    display: flex;
    align-items: center;
    gap: 25px;
    color: #ffffff;
    box-shadow: 0 10px 30px rgba(16, 75, 124, 0.25);
}

.compliance-icon {
    width: 50px;
    height: 50px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    flex-shrink: 0;
}

.compliance-text {
    font-size: 17px;
    font-weight: 600;
    line-height: 1.5;
    margin: 0;
    letter-spacing: 0.5px;
}

/* --- 6. Responsive Adjustments --- */
@media (max-width: 991px) {
    .aviation-platform-container,
    .aviation-scope-container {
        margin-bottom: 30px;
    }
}

@media (max-width: 768px) {
    .aviation-title { font-size: 28px; }
    .aviation-compliance-banner { flex-direction: column; text-align: center; padding: 30px 20px; }
}

/* --- Fade In Animation --- */
.ms-fade-in {
    opacity: 0;
    transform: translateY(24px);
    transition: opacity 0.7s ease, transform 0.7s ease;
}

.ms-fade-in.visible {
    opacity: 1;
    transform: translateY(0);
}





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




<div class="container py-5">

            <div class="aviation-header ms-fade-in">
                <h2 class="aviation-title">Naval Aviation Support</h2>
                <p class="aviation-lead">
                    We provide focused support to Bangladesh Navy aviation through supply of OEM spares and coordination of certified repair services.
                </p>
            </div>

            <div class="row align-items-stretch mt-5">
                <!-- Left Column: Platforms -->
                <div class="col-lg-5 ms-fade-in">
                    <div class="aviation-platform-container">
                        <h4 class="aviation-section-title">Supported Platforms</h4>
                        <div class="aviation-platform-card">
                            <div class="platform-icon"><i class="fas fa-helicopter"></i></div>
                            <div class="platform-info">
                                <h5>AW109 / AW109E</h5>
                                <p>Helicopters</p>
                            </div>
                        </div>
                        <div class="aviation-platform-card mt-4">
                            <div class="platform-icon"><i class="fas fa-plane"></i></div>
                            <div class="platform-info">
                                <h5>Maritime Patrol Aircraft</h5>
                                <p>(MPA)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Scope -->
                <div class="col-lg-7 ms-fade-in">
                    <div class="aviation-scope-container">
                        <h4 class="aviation-section-title">Scope of Support</h4>
                        <div class="aviation-timeline">
                            <!-- Item 1 -->
                            <div class="aviation-timeline-item">
                                <div class="timeline-dot"><i class="fas fa-compass"></i></div>
                                <div class="timeline-content">
                                    <h5>Gyro & Flight Control</h5>
                                    <p>Gyro and flight control components</p>
                                </div>
                            </div>
                            <!-- Item 2 -->
                            <div class="aviation-timeline-item">
                                <div class="timeline-dot"><i class="fas fa-gas-pump"></i></div>
                                <div class="timeline-content">
                                    <h5>Fuel Systems</h5>
                                    <p>Fuel system items, valves, and actuators</p>
                                </div>
                            </div>
                            <!-- Item 3 -->
                            <div class="aviation-timeline-item">
                                <div class="timeline-dot"><i class="fas fa-cogs"></i></div>
                                <div class="timeline-content">
                                    <h5>Brake & Wheel Systems</h5>
                                    <p>Brake, wheel, and associated systems</p>
                                </div>
                            </div>
                            <!-- Item 4 -->
                            <div class="aviation-timeline-item">
                                <div class="timeline-dot"><i class="fas fa-tools"></i></div>
                                <div class="timeline-content">
                                    <h5>Certified Repair</h5>
                                    <p>Repair and overhaul through FAA/EASA-approved partners</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Compliance Banner -->
            <div class="aviation-compliance-banner ms-fade-in mt-5">
                <div class="compliance-icon"><i class="fas fa-shield-alt"></i></div>
                <div class="compliance-text">
                    This ensures compliance, traceability, and mission-ready performance.
                </div>
            </div>
        </div>

    

@endsection 

@push('js') 
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((e, i) => {
                if (e.isIntersecting) {
                    setTimeout(() => e.target.classList.add('visible'), i * 80);
                }
            });
        }, { threshold: 0.12 });
        
        document.querySelectorAll('.ms-fade-in').forEach(el => observer.observe(el));
    });
</script>
@endpush


