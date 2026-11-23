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


/* Header Section */
.coastguard-header {
    max-width: 800px;
    margin: 0 auto;
}

.coastguard-title {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 1.8rem;
    color: #0f2c4a;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.coastguard-divider {
    width: 60px;
    height: 4px;
    background: #0b2d56; /* Gold accent */
    margin: 15px auto 25px;
    border-radius: 2px;
}

.coastguard-lead {
    font-size: 1.15rem;
    line-height: 1.8;
    color: #555;
    font-weight: 500;
}

/* Feature Cards */
.coastguard-card {
    background: #ffffff;
    border-radius: 12px;
    padding: 35px 30px;
    height: 100%;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    transition: all 0.4s ease;
    border: 1px solid #eef3f8;
}

.coastguard-card-alt {
    background: #fdfdfd;
    border-color: #f0ede1;
}

.coastguard-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(15, 44, 74, 0.08);
    border-color: #0b2d56;
}

.cg-icon {
    width: 60px;
    height: 60px;
    background: #0f2c4a;
    color: #ffffff;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.6rem;
    margin-bottom: 20px;
    transition: all 0.3s ease;
}

.coastguard-card:hover .cg-icon {
    background: #0b2d56;
    transform: scale(1.05) rotate(3deg);
}

.cg-card-title {
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    font-size: 1.7rem;
    color: #0f2c4a;
    margin-bottom: 20px;
}

.cg-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.cg-list li {
    display: flex;
    align-items: flex-start;
    padding: 12px 0;
    border-bottom: 1px dashed #eaeaea;
}

.cg-list li:last-child {
    border-bottom: none;
}

.cg-list-icon {
    width: 35px;
    min-width: 35px;
    height: 35px;
    background: #eef3f8;
    color: #0f2c4a;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.95rem;
    margin-right: 15px;
}

.coastguard-card-alt .cg-list-icon {
    background: #fbf7e8;
    color: #0b2d56;
}

.cg-list li span {
    font-size: 1.05rem;
    color: #444;
    line-height: 1.4;
    padding-top: 5px;
    font-weight: 500;
}

/* Focus Banner */
.coastguard-banner {
    background: #0f2c4a;
    border-radius: 10px;
    padding: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    position: relative;
    overflow: hidden;
}

.coastguard-banner::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 4px;
    height: 100%;
    background: #0b2d56;
}

.banner-icon {
    font-size: 2.5rem;
    color: #0b2d56;
    margin-right: 25px;
}

.banner-text {
    font-size: 1.25rem;
    font-family: 'Poppins', sans-serif;
    font-weight: 500;
    line-height: 1.6;
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
    .coastguard-banner {
        flex-direction: column;
        text-align: center;
    }
    .banner-icon {
        margin-right: 0;
        margin-bottom: 15px;
    }
}



.coastguard-card:hover .cg-icon { color: #ffffff !important; }
.coastguard-card:hover .cg-icon i { color: #ffffff !important; }
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
    <div class="main-content">
        <div class="container py-5">

            <!-- Intro Section -->
            <div class="coastguard-header ms-fade-in text-center mb-5">
                <h2 class="coastguard-title">Expanding Maritime Capabilities</h2>
                <div class="coastguard-divider"></div>
                <p class="coastguard-lead">
                    Bangladesh Coast Guard and other maritime law enforcement agencies are expanding capabilities to manage crucial operations. This constant growth is creating diverse OEM opportunities.
                </p>
            </div>

            <!-- Two Column Layout for Management & Demand -->
            <div class="row mt-5 g-4">
                
                <!-- Management Capabilities -->
                <div class="col-lg-6 ms-fade-in">
                    <div class="coastguard-card">
                        <div class="cg-icon"><i class="fas fa-shield-alt"></i></div>
                        <h4 class="cg-card-title">Managing Key Operations</h4>
                        <ul class="cg-list">
                            <li>
                                <div class="cg-list-icon"><i class="fas fa-life-ring"></i></div>
                                <span>Coastal security</span>
                            </li>
                            <li>
                                <div class="cg-list-icon"><i class="fas fa-water"></i></div>
                                <span>Riverine operations</span>
                            </li>
                            <li>
                                <div class="cg-list-icon"><i class="fas fa-hands-helping"></i></div>
                                <span>Disaster response</span>
                            </li>
                            <li>
                                <div class="cg-list-icon"><i class="fas fa-binoculars"></i></div>
                                <span>Anti-smuggling and surveillance</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- High Demand -->
                <div class="col-lg-6 ms-fade-in">
                    <div class="coastguard-card coastguard-card-alt">
                        <div class="cg-icon"><i class="fas fa-anchor"></i></div>
                        <h4 class="cg-card-title">Driving Demand For</h4>
                        <ul class="cg-list">
                            <li>
                                <div class="cg-list-icon"><i class="fas fa-ship"></i></div>
                                <span>Fast patrol boats</span>
                            </li>
                            <li>
                                <div class="cg-list-icon"><i class="fas fa-fan"></i></div>
                                <span>Lightweight propulsion systems</span>
                            </li>
                            <li>
                                <div class="cg-list-icon"><i class="fas fa-satellite-dish"></i></div>
                                <span>Surveillance and communication systems</span>
                            </li>
                            <li>
                                <div class="cg-list-icon"><i class="fas fa-box"></i></div>
                                <span>Integrated mission packages</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

            <!-- Focus Banner -->
            <div class="coastguard-banner ms-fade-in mt-5">
                <div class="banner-icon"><i class="fas fa-globe"></i></div>
                <div class="banner-text">
                    Foreign OEMs can enter through complete systems, modular solutions, and platform-specific equipment supply.
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