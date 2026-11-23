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
.shipbuilding-header {
    max-width: 850px;
    margin: 0 auto;
}

.shipbuilding-title {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 1.8rem;
    color: #0f2c4a;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.shipbuilding-divider {
    width: 70px;
    height: 4px;
    background: #0b2d56; /* Gold accent */
    margin: 15px auto 25px;
    border-radius: 2px;
}

.shipbuilding-lead {
    font-size: 1.15rem;
    line-height: 1.8;
    color: #555;
    font-weight: 500;
}

/* Panel Sections */
.shipbuilding-panel {
    background: #ffffff;
    border-radius: 12px;
    padding: 40px 30px;
    height: 100%;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
    border-top: 5px solid #0f2c4a;
}

.shipbuilding-panel:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 30px rgba(15, 44, 74, 0.1);
    border-top-color: #0b2d56;
}

.panel-icon {
    width: 65px;
    height: 65px;
    background: #eef3f8;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 25px;
    transition: background 0.3s ease;
}

.shipbuilding-panel:hover .panel-icon {
    background: #0f2c4a;
}

.panel-icon i {
    font-size: 1.8rem;
    color: #0f2c4a;
    transition: color 0.3s ease;
}

.shipbuilding-panel:hover .panel-icon i {
    color: #ffffff;
}

.panel-title {
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    font-size: 1.8rem;
    color: #0f2c4a;
    margin-bottom: 20px;
}

.shipbuilding-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.shipbuilding-list li {
    display: flex;
    align-items: center;
    padding: 12px 0;
    border-bottom: 1px solid #f0f0f0;
    font-size: 1.1rem;
    color: #444;
}

.shipbuilding-list li:last-child {
    border-bottom: none;
}

.shipbuilding-list li i {
    color: #0b2d56;
    margin-right: 15px;
    font-size: 1.2rem;
}

/* Highlight Banner */
.shipbuilding-highlight {
    background: linear-gradient(135deg, #0f2c4a 0%, #081829 100%);
    border-radius: 12px;
    padding: 40px;
    color: #ffffff;
    display: flex;
    flex-direction: column;
    align-items: center;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}

.highlight-icon {
    width: 70px;
    height: 70px;
    background: rgb(255 255 255 / 41%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
}

.highlight-icon i {
    font-size: 2rem;
    color: #ffffff;
}

.shipbuilding-highlight p {
    font-size: 1.2rem;
    font-family: 'Poppins', sans-serif;
    font-weight: 500;
    margin: 0;
    max-width: 700px;
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



.shipbuilding-panel:hover .sb-icon-box { color: #ffffff !important; }
.shipbuilding-panel:hover .sb-icon-box i { color: #ffffff !important; }
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
            <div class="shipbuilding-header ms-fade-in text-center mb-5">
                <h2 class="shipbuilding-title">Expanding Maritime Construction</h2>
                <div class="shipbuilding-divider"></div>
                <p class="shipbuilding-lead">
                    Bangladesh’s shipbuilding sector is expanding rapidly, with a national ambition to reach USD 4 billion in shipbuilding exports, supported by a skilled workforce and growing infrastructure.
                </p>
            </div>

            <!-- Two Column Layout for Sectors & Opportunities -->
            <div class="row mt-5 g-5">
                
                <!-- Defense and Civil Sectors -->
                <div class="col-lg-6 ms-fade-in">
                    <div class="shipbuilding-panel">
                        <div class="panel-icon"><i class="fas fa-ship"></i></div>
                        <h4 class="panel-title">Defense & Civil Sector Requirements</h4>
                        <ul class="shipbuilding-list">
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <span><strong>Patrol boats</strong></span>
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <span><strong>Riverine vessels</strong></span>
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <span><strong>Utility crafts</strong></span>
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <span><strong>Specialized platforms</strong></span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Foreign Partners Opportunities -->
                <div class="col-lg-6 ms-fade-in">
                    <div class="shipbuilding-panel">
                        <div class="panel-icon"><i class="fas fa-handshake"></i></div>
                        <h4 class="panel-title">Opportunities for Foreign Partners</h4>
                        <ul class="shipbuilding-list">
                            <li>
                                <i class="fas fa-arrow-right"></i>
                                <span><strong>Material supply</strong></span>
                            </li>
                            <li>
                                <i class="fas fa-arrow-right"></i>
                                <span><strong>Propulsion and machinery packages</strong></span>
                            </li>
                            <li>
                                <i class="fas fa-arrow-right"></i>
                                <span><strong>Design collaboration</strong></span>
                            </li>
                            <li>
                                <i class="fas fa-arrow-right"></i>
                                <span><strong>Technology transfer</strong></span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

            <!-- Highlight Banner -->
            <div class="shipbuilding-highlight ms-fade-in mt-5 text-center">
                <div class="highlight-icon"><i class="fas fa-industry"></i></div>
                <p>
                    Local shipyards are capable but rely heavily on imported systems — making OEM collaboration essential.
                </p>
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