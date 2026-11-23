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
.fleet-header {
    max-width: 850px;
    margin: 0 auto;
}

.fleet-title {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 2.8rem;
    color: #0f2c4a;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.fleet-divider {
    width: 70px;
    height: 4px;
    background: #0b2d56; /* Gold accent */
    margin: 15px auto 25px;
    border-radius: 2px;
}

.fleet-lead {
    font-size: 20px;
    line-height: 1.5;
    color: #555;
    font-weight: 200;
    margin-bottom: 15px;
}
}

.fleet-sublead {
    font-size: 1.05rem;
    line-height: 1.7;
    color: #666;
    background: #eef3f8;
    padding: 20px;
    border-left: 4px solid #0b2d56;
    border-radius: 4px;
}

/* Requirements Card */
.fleet-subtitle {
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    font-size: 2rem;
    color: #333;
}

.fleet-req-card {
    background: #ffffff;
    border-radius: 12px;
    padding: 35px 25px;
    height: 100%;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
    text-align: center;
    border: 1px solid #eaeaea;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.fleet-req-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 30px rgba(15, 44, 74, 0.1);
    border-color: #0f2c4a;
}

.fleet-icon {
    width: 80px;
    height: 80px;
    background: #0f2c4a;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 25px;
    transition: all 0.3s ease;
}

.fleet-req-card:hover .fleet-icon {
    background: #0b2d56;
    transform: scale(1.1);
}

.fleet-icon i {
    font-size: 2.2rem;
    color: #ffffff;
}

.fleet-info h6 {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 1.2rem;
    color: #0f2c4a;
    margin: 0;
    line-height: 1.4;
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



.fleet-req-card:hover .fleet-icon { color: #ffffff !important; }
.fleet-req-card:hover .fleet-icon i { color: #ffffff !important; }
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
            <div class="fleet-header ms-fade-in text-center mb-5">
                <h2 class="fleet-title">Lifecycle Support & OEM Spares</h2>
                <div class="fleet-divider"></div>
                <p class="fleet-lead">
                    Bangladesh operates a diverse fleet sourced from multiple countries, creating long-term demand for lifecycle support, OEM spares, repair, and system upgrades.
                </p>
                <p class="fleet-sublead">
                    OEM-backed lifecycle support is critical to maintain operational readiness, creating a stable and recurring business opportunity for long-term partnerships.
                </p>
            </div>

            <!-- Requirements Section -->
            <div class="fleet-requirements-section mt-5">
                <h4 class="fleet-subtitle text-center mb-4 ms-fade-in">Strong Requirement For:</h4>
                <div class="row g-4 mt-2 justify-content-center">
                    
                    <!-- Requirement 1 -->
                    <div class="col-lg-3 col-md-6 col-sm-6 ms-fade-in">
                        <div class="fleet-req-card">
                            <div class="fleet-icon"><i class="fas fa-cogs"></i></div>
                            <div class="fleet-info">
                                <h6>Certified Spare Parts</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Requirement 2 -->
                    <div class="col-lg-3 col-md-6 col-sm-6 ms-fade-in">
                        <div class="fleet-req-card">
                            <div class="fleet-icon"><i class="fas fa-tools"></i></div>
                            <div class="fleet-info">
                                <h6>Repair & Overhaul Services</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Requirement 3 -->
                    <div class="col-lg-3 col-md-6 col-sm-6 ms-fade-in">
                        <div class="fleet-req-card">
                            <div class="fleet-icon"><i class="fas fa-file-alt"></i></div>
                            <div class="fleet-info">
                                <h6>Technical Documentation & Support</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Requirement 4 -->
                    <div class="col-lg-3 col-md-6 col-sm-6 ms-fade-in">
                        <div class="fleet-req-card">
                            <div class="fleet-icon"><i class="fas fa-sync-alt"></i></div>
                            <div class="fleet-info">
                                <h6>System Upgrades & Retrofits</h6>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- CTA Section -->
       
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