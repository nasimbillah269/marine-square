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
.diving-header {
    text-align: center;
    margin-bottom: 50px;
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
}

.diving-title {
    font-weight: 700;
    font-size: 36px;
    color: #0b2d56;
    margin-bottom: 18px;
    position: relative;
    display: inline-block;
}

.diving-title::after {
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

.diving-lead {
    font-size: 16px;
    color: #5a6a7a;
    line-height: 1.8;
    margin-top: 25px;
}

/* --- 2. Service Cards (2x2 Grid) --- */
.diving-services-wrapper {
    margin-top: 40px;
}

.diving-service-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 30px;
    display: flex;
    align-items: center;
    gap: 25px;
    box-shadow: 0 10px 30px rgba(11, 45, 86, 0.05);
    border: 1px solid rgba(15, 140, 140, 0.1);
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    position: relative;
    overflow: hidden;
    height: 100%;
}

.diving-service-card::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 0;
    height: 4px;
    background: #0F8C8C; /* Teal indicator */
    transition: width 0.4s ease;
}

.diving-service-card:hover::after {
    width: 100%;
}

.diving-service-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(11, 45, 86, 0.12);
}

.diving-icon-box {
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, #e0f2f1, #b2dfdb);
    color: #00796b;
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 30px;
    flex-shrink: 0;
    transition: all 0.4s ease;
}

.diving-service-card:hover .diving-icon-box {
    background: linear-gradient(135deg, #00796b, #004d40);
    color: #ffffff;
    transform: rotate(5deg) scale(1.05);
}

.diving-text-content h5 {
    font-size: 20px;
    font-weight: 700;
    color: #0b2d56;
    margin-bottom: 8px;
}

.diving-text-content p {
    font-size: 15px;
    color: #5a6a7a;
    margin: 0;
    line-height: 1.5;
}

/* --- 3. Conclusion Banner --- */
.diving-conclusion-banner {
    background: linear-gradient(90deg, #0b2d56, #0F8C8C);
    border-radius: 16px;
    padding: 35px 40px;
    display: flex;
    align-items: center;
    gap: 30px;
    color: #ffffff;
    box-shadow: 0 12px 30px rgba(11, 45, 86, 0.2);
}

.conclusion-icon {
    width: 60px;
    height: 60px;
    background: rgba(255, 255, 255, 0.15);
    border: 2px solid rgba(255, 255, 255, 0.3);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 28px;
    flex-shrink: 0;
    color: #ffffff;
}

.conclusion-text {
    font-size: 18px;
    line-height: 1.6;
    font-weight: 500;
    margin: 0;
}

/* --- 4. Responsive Adjustments --- */
@media (max-width: 991px) {
    .diving-conclusion-banner { flex-direction: column; text-align: center; padding: 30px 20px; }
}

@media (max-width: 768px) {
    .diving-title { font-size: 28px; }
    .diving-service-card { flex-direction: column; text-align: center; padding: 25px 20px; gap: 15px; }
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

            <div class="diving-header ms-fade-in">
                <h2 class="diving-title">Diving & Underwater Services</h2>
                <p class="diving-lead">
                    Delivered by experienced naval divers, our underwater services support inspection, maintenance, and recovery operations.
                </p>
            </div>

            <!-- Services Interlocking Grid -->
            <div class="diving-services-wrapper mt-5">
                <div class="row g-4">
                    <!-- Service 1 -->
                    <div class="col-lg-6 ms-fade-in">
                        <div class="diving-service-card">
                            <div class="diving-icon-box"><i class="fas fa-search-location"></i></div>
                            <div class="diving-text-content">
                                <h5>Inspection & Survey</h5>
                                <p>Underwater inspection and survey</p>
                            </div>
                        </div>
                    </div>
                    <!-- Service 2 -->
                    <div class="col-lg-6 ms-fade-in">
                        <div class="diving-service-card">
                            <div class="diving-icon-box"><i class="fas fa-life-ring"></i></div>
                            <div class="diving-text-content">
                                <h5>Salvage & Recovery</h5>
                                <p>Salvage and recovery operations</p>
                            </div>
                        </div>
                    </div>
                    <!-- Service 3 -->
                    <div class="col-lg-6 ms-fade-in">
                        <div class="diving-service-card">
                            <div class="diving-icon-box"><i class="fas fa-tools"></i></div>
                            <div class="diving-text-content">
                                <h5>Hull & Propeller</h5>
                                <p>Hull cleaning and propeller polishing</p>
                            </div>
                        </div>
                    </div>
                    <!-- Service 4 -->
                    <div class="col-lg-6 ms-fade-in">
                        <div class="diving-service-card">
                            <div class="diving-icon-box"><i class="fas fa-fire"></i></div>
                            <div class="diving-text-content">
                                <h5>Cutting, Welding & NDT</h5>
                                <p>Underwater cutting, welding, and NDT</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Operational Conclusion Banner -->
            <div class="diving-conclusion-banner ms-fade-in mt-5">
                <div class="conclusion-icon"><i class="fas fa-anchor"></i></div>
                <div class="conclusion-text">
                    This capability supports ports, vessels, and marine infrastructure under operational conditions.
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


