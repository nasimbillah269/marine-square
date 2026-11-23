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
.smart-header {
    text-align: center;
    margin-bottom: 50px;
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
}

.smart-title {
    font-weight: 700;
    font-size: 36px;
    color: #0b2d56;
    margin-bottom: 18px;
    position: relative;
    display: inline-block;
}

.smart-title::after {
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

.smart-lead {
    font-size: 16px;
    color: #5a6a7a;
    line-height: 1.8;
    margin-top: 25px;
}

/* --- 2. Tech Section Subtitle --- */
.smart-subtitle {
    font-weight: 700;
    font-size: 24px;
    color: #0b2d56;
    text-align: center;
    position: relative;
    margin-bottom: 40px;
}

/* --- 3. Tech Cards (2x2 Grid) --- */
.smart-tech-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 30px;
    display: flex;
    align-items: center;
    gap: 25px;
    box-shadow: 0 8px 30px rgba(11, 45, 86, 0.05);
    border: 1px solid rgba(15, 140, 140, 0.1);
    position: relative;
    overflow: hidden;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    height: 100%;
}

/* Techy glowing accent */
.smart-tech-card::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 4px;
    background: #0F8C8C;
    box-shadow: 0 0 15px rgba(15, 140, 140, 0.8);
    transform: scaleY(0);
    transform-origin: bottom;
    transition: transform 0.4s ease;
}

.smart-tech-card:hover::before {
    transform: scaleY(1);
}

.smart-tech-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(11, 45, 86, 0.12);
    border-color: rgba(15, 140, 140, 0.3);
}

.smart-icon {
    width: 75px;
    height: 75px;
    background: #f4f7fb;
    color: #0F8C8C;
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 32px;
    flex-shrink: 0;
    transition: all 0.4s ease;
    border: 2px dashed rgba(15, 140, 140, 0.3);
}

.smart-tech-card:hover .smart-icon {
    background: #0F8C8C;
    color: #ffffff;
    border-color: #0F8C8C;
    transform: rotate(5deg) scale(1.05);
    box-shadow: 0 10px 20px rgba(15, 140, 140, 0.4);
}

.smart-info h5 {
    font-size: 19px;
    font-weight: 700;
    color: #0b2d56;
    margin-bottom: 8px;
}

.smart-info p {
    font-size: 15px;
    color: #5a6a7a;
    margin: 0;
    line-height: 1.6;
}

/* --- 4. Vision Banner --- */
.smart-vision-banner {
    background: linear-gradient(135deg, #071e3d, #104b7c);
    border-radius: 16px;
    padding: 35px 40px;
    display: flex;
    align-items: center;
    gap: 30px;
    color: #ffffff;
    position: relative;
    overflow: hidden;
    box-shadow: 0 15px 35px rgba(7, 30, 61, 0.25);
    border: 1px solid rgba(255, 255, 255, 0.1);
}

.smart-vision-banner::after {
    content: '';
    position: absolute;
    top: 0; right: 0; bottom: 0; width: 40%;
    background: radial-gradient(circle at right center, rgba(15, 140, 140, 0.3) 0%, transparent 70%);
    pointer-events: none;
}

.vision-icon {
    width: 60px;
    height: 60px;
    background: rgba(15, 140, 140, 0.2);
    border: 2px solid #0F8C8C;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 28px;
    flex-shrink: 0;
    color: #4cd1d1;
    z-index: 2;
    box-shadow: 0 0 20px rgba(15, 140, 140, 0.5);
}

.vision-text {
    font-size: 18px;
    line-height: 1.6;
    font-weight: 500;
    margin: 0;
    z-index: 2;
    letter-spacing: 0.5px;
}

/* --- 5. Responsive --- */
@media (max-width: 991px) {
    .smart-vision-banner { flex-direction: column; text-align: center; padding: 30px 20px; }
}

@media (max-width: 768px) {
    .smart-title { font-size: 28px; }
    .smart-tech-card { flex-direction: column; text-align: center; padding: 25px 20px; gap: 15px; }
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

            <div class="smart-header ms-fade-in">
                <h2 class="smart-title">Smart Systems & Advanced Technology</h2>
                <p class="smart-lead">
                    We integrate modern technologies into maritime operations, supporting efficiency, monitoring, and decision-making.
                </p>
            </div>

            <div class="smart-tech-section mt-5">
                <h4 class="smart-subtitle ms-fade-in">Our focus areas include:</h4>
                <div class="row g-4 mt-2">
                    <!-- Tech Card 1 -->
                    <div class="col-lg-6 ms-fade-in">
                        <div class="smart-tech-card">
                            <div class="smart-icon"><i class="fas fa-network-wired"></i></div>
                            <div class="smart-info">
                                <h5>IoT & Smart Sensors</h5>
                                <p>IoT-based monitoring and smart sensors</p>
                            </div>
                        </div>
                    </div>
                    <!-- Tech Card 2 -->
                    <div class="col-lg-6 ms-fade-in">
                        <div class="smart-tech-card">
                            <div class="smart-icon"><i class="fas fa-helicopter"></i></div>
                            <div class="smart-info">
                                <h5>Drone Surveillance</h5>
                                <p>Drone surveillance for ports and coastal security</p>
                            </div>
                        </div>
                    </div>
                    <!-- Tech Card 3 -->
                    <div class="col-lg-6 ms-fade-in">
                        <div class="smart-tech-card">
                            <div class="smart-icon"><i class="fas fa-chart-line"></i></div>
                            <div class="smart-info">
                                <h5>Predictive Maintenance</h5>
                                <p>Predictive maintenance systems</p>
                            </div>
                        </div>
                    </div>
                    <!-- Tech Card 4 -->
                    <div class="col-lg-6 ms-fade-in">
                        <div class="smart-tech-card">
                            <div class="smart-icon"><i class="fas fa-robot"></i></div>
                            <div class="smart-info">
                                <h5>Robotics & Automation</h5>
                                <p>Robotics training labs and automation solutions</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Vision Banner -->
            <div class="smart-vision-banner ms-fade-in mt-5">
                <div class="vision-icon"><i class="fas fa-globe-asia"></i></div>
                <div class="vision-text">
                    These technologies align with Bangladesh’s Blue Economy vision and evolving maritime requirements.
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


