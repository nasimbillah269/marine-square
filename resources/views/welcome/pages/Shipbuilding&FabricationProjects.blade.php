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
.sf-hero-title {
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

.sf-hero-lead {
    font-size: 1.05rem;
    color: #556270;
    max-width: 850px;
    margin: 0 auto;
    line-height: 1.7;
}

/* ----------------------------------------------------
   UNIQUE PROJECT CARD (SKEWED OVERLAP LAYOUT)
   ---------------------------------------------------- */
.sf-project-container {
    max-width: 1000px;
    margin: 0 auto;
    padding-top: 20px;
}

.sf-project-row {
    display: flex;
    align-items: stretch;
    background: #ffffff;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(11, 45, 86, 0.05);
    transition: transform 0.4s ease, box-shadow 0.4s ease;
    overflow: hidden; /* Contains the skewed background element */
    position: relative;
    border: 1px solid rgba(11, 45, 86, 0.05);
}

.sf-project-row:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 45px rgba(11, 45, 86, 0.12);
}

/* The dark navy left block */
.sf-project-indicator {
    width: 220px;
    background: #0b2d56;
    color: #ffffff;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    position: relative;
    padding: 30px 20px;
    z-index: 2; /* Sits above the skewed pseudo-element */
    flex-shrink: 0;
}

/* The sleek skewed cut effect */
.sf-project-indicator::after {
    content: '';
    position: absolute;
    right: -25px;
    top: 0;
    bottom: 0;
    width: 50px;
    background: #0b2d56;
    transform: skewX(-12deg);
    z-index: -1;
    transition: background 0.4s ease;
}

/* Inner indicator styling */
.sf-project-year {
    font-size: 1.6rem;
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    letter-spacing: 1px;
    margin-bottom: 20px;
    color: rgba(255, 255, 255, 0.9);
}

.sf-project-icon {
    width: 70px;
    height: 70px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    color: #ffffff;
    transition: all 0.4s ease;
}

.sf-project-row:hover .sf-project-icon {
    background: #ffffff;
    color: #0b2d56 !important;
    transform: scale(1.1);
}

/* White content area */
.sf-project-details {
    padding: 40px 40px 40px 70px; /* 70px left padding to offset the skewed background overlap */
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.sf-vessel-title {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 1.4rem;
    color: #0b1d30;
    margin-bottom: 5px;
}

.sf-project-name {
    font-family: 'Poppins', sans-serif;
    font-weight: 500;
    font-size: 1rem;
    color: #556270;
    margin-bottom: 15px;
}

.sf-accent-line {
    width: 40px;
    height: 3px;
    background: #0b2d56;
    margin-bottom: 15px;
    border-radius: 2px;
}

.sf-project-details p {
    font-size: 0.95rem;
    color: #6a7c92;
    line-height: 1.7;
    margin: 0;
}

/* ----------------------------------------------------
   RESPONSIVE MOBILE ADJUSTMENTS
   ---------------------------------------------------- */
@media screen and (max-width: 768px) {
    .sf-project-row {
        flex-direction: column;
    }
    .sf-project-indicator {
        width: 100%;
        flex-direction: row;
        justify-content: space-between;
        padding: 20px 30px;
        align-items: center;
    }
    .sf-project-indicator::after {
        display: none; /* Turn off skewed edge on mobile */
    }
    .sf-project-year {
        margin-bottom: 0;
        font-size: 1.4rem;
    }
    .sf-project-icon {
        width: 50px;
        height: 50px;
        font-size: 1.4rem;
    }
    .sf-project-details {
        padding: 30px;
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
    <div class="main-content sf-projects-wrapper">
        <div class="container py-5">

            <!-- Intro Section -->
            <div class="row align-items-center mb-5 pb-3 ms-fade-in">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="sf-hero-title">Delivered <span class="text-navy-accent">Fabrication</span> Works</h2>
                    <p class="sf-hero-lead mt-4">
                        We support shipbuilding and fabrication projects through material sourcing, technical supervision, and coordination with shipyards.
                    </p>
                </div>
            </div>

            <!-- UNIQUE OFFSET CARD LAYOUT -->
            <div class="sf-project-container">
                
                <!-- Project 1 -->
                <div class="sf-project-row mb-5 ms-fade-in">
                    <div class="sf-project-indicator">
                        <div class="sf-project-year">2020</div>
                        <div class="sf-project-icon"><i class="fas fa-ship"></i></div>
                    </div>
                    <div class="sf-project-details">
                        <h4 class="sf-vessel-title">Bangladesh Army</h4>
                        <h5 class="sf-project-name">50 GRP Boats (10m, Twin OBM)</h5>
                        <div class="sf-accent-line"></div>
                        <p>Complete material sourcing, fabrication supervision, quality control, and coordination of construction process in collaboration with SAANA Corp. Scope included oversight of hull construction, outfitting, testing, and trials prior to delivery.</p>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="sf-project-row mb-5 ms-fade-in">
                    <div class="sf-project-indicator">
                        <div class="sf-project-year">2023–24</div>
                        <div class="sf-project-icon"><i class="fas fa-hammer"></i></div>
                    </div>
                    <div class="sf-project-details">
                        <h4 class="sf-vessel-title">BIWTA</h4>
                        <h5 class="sf-project-name">Pontoon Fabrication</h5>
                        <div class="sf-accent-line"></div>
                        <p>Fabrication of river pontoons at shipyard using skilled manpower under MARINE Square’s technical supervision. Work included structural fabrication coordination and material integration.</p>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="sf-project-row mb-5 ms-fade-in">
                    <div class="sf-project-indicator">
                        <div class="sf-project-year">2023–24</div>
                        <div class="sf-project-icon"><i class="fas fa-wrench"></i></div>
                    </div>
                    <div class="sf-project-details">
                        <h4 class="sf-vessel-title">Local Shipyards</h4>
                        <h5 class="sf-project-name">Deck Fittings & Marine Valves</h5>
                        <div class="sf-accent-line"></div>
                        <p>Supply of construction materials, deck fittings, and marine valves for both new building and repair works. Coordination carried out with shipyard teams to ensure compatibility with vessel systems.</p>
                    </div>
                </div>

            </div> <!-- End Container -->

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