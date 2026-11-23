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
.naval-header {
    max-width: 800px;
    margin: 0 auto;
}

.naval-title {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 1.8rem;
    color: #0f2c4a;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.naval-divider {
    width: 60px;
    height: 4px;
    background: #0b2d56; /* Gold accent */
    margin: 15px auto 25px;
    border-radius: 2px;
}

.naval-lead {
    font-size: 1.15rem;
    line-height: 1.8;
    color: #555;
}

/* Feature Cards */
.naval-feature-card {
    background: #ffffff;
    border-radius: 10px;
    padding: 30px;
    height: 100%;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-top: 4px solid transparent;
    display: flex;
    flex-direction: column;
}

.naval-feature-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    border-top-color: #0b2d56;
}

.naval-icon-wrap {
    width: 70px;
    height: 70px;
    background: #eef3f8;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 25px;
    transition: background 0.3s ease;
}

.naval-feature-card:hover .naval-icon-wrap {
    background: #0f2c4a;
}

.naval-icon {
    font-size: 2rem;
    color: #0f2c4a;
    transition: color 0.3s ease;
}

.naval-feature-card:hover .naval-icon {
    color: #ffffff;
}

.naval-info h5 {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 1.3rem;
    color: #0f2c4a;
    margin-bottom: 15px;
}

.naval-info p {
    font-size: 1rem;
    color: #666;
    line-height: 1.6;
    margin: 0;
}

/* Focus Areas Box */
.naval-focus-areas {
    border-color: #e5e5e5 !important;
}

.naval-subtitle {
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    font-size: 1.8rem;
    color: #333;
}

.naval-focus-box {
    background: #ffffff;
    border: 1px solid #eaeaea;
    border-radius: 8px;
    padding: 25px 20px;
    text-align: center;
    transition: all 0.3s ease;
    height: 100%;
}

.naval-focus-box:hover {
    background: #0f2c4a;
    border-color: #0f2c4a;
}

.naval-focus-box i {
    font-size: 2.2rem;
    color: #0b2d56;
    margin-bottom: 15px;
    transition: transform 0.3s ease;
}

.naval-focus-box:hover i {
    transform: scale(1.1);
    color:#ffffff;
}

.naval-focus-box h6 {
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    font-size: 1.1rem;
    color: #333;
    margin: 0;
    transition: color 0.3s ease;
}

.naval-focus-box:hover h6 {
    color: #ffffff;
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

            <div class="naval-header ms-fade-in text-center mb-5">
                <h2 class="naval-title">Bangladesh Navy Modernization</h2>
                <div class="naval-divider"></div>
                <p class="naval-lead">
                    Bangladesh Navy is undergoing continuous modernization, expanding both fleet size and technological capability. The Navy currently operates 80+ ships and craft, with increasing emphasis on multi-role platforms and advanced systems.
                </p>
            </div>

            <!-- Opportunities & Capabilities -->
            <div class="naval-features-section mt-5">
                <div class="row g-4 mt-2 justify-content-center">
                    
                    <!-- Feature Card 1 -->
                    <div class="col-lg-6 col-md-6 ms-fade-in">
                        <div class="naval-feature-card">
                            <div class="naval-icon-wrap">
                                <div class="naval-icon"><i class="fas fa-ship"></i></div>
                            </div>
                            <div class="naval-info">
                                <h5>International Collaboration</h5>
                                <p>Recent acquisitions such as the Echo-class survey vessel HMS Enterprise from the UK highlight ongoing international collaboration and demand for advanced systems including hydrographic equipment, sensors, and mission systems.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Feature Card 2 -->
                    <div class="col-lg-6 col-md-6 ms-fade-in">
                        <div class="naval-feature-card">
                            <div class="naval-icon-wrap">
                                <div class="naval-icon"><i class="fas fa-cogs"></i></div>
                            </div>
                            <div class="naval-info">
                                <h5>OEM Sustained Opportunities</h5>
                                <p>For OEMs, this creates sustained opportunities in propulsion, navigation, surveillance systems, combat support equipment, and system integration aligned with modern naval standards.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Focus Areas Grid -->
            <div class="naval-focus-areas mt-5 pt-4 border-top">
                <h4 class="naval-subtitle text-center mb-4 ms-fade-in">Key Modernization Standards</h4>
                <div class="row g-4">
                    <div class="col-md-3 col-sm-6 ms-fade-in">
                        <div class="naval-focus-box">
                            <i class="fas fa-tachometer-alt"></i>
                            <h6>Propulsion Systems</h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 ms-fade-in">
                        <div class="naval-focus-box">
                            <i class="fas fa-compass"></i>
                            <h6>Navigation Solutions</h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 ms-fade-in">
                        <div class="naval-focus-box">
                            <i class="fas fa-satellite-dish"></i>
                            <h6>Surveillance Systems</h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 ms-fade-in">
                        <div class="naval-focus-box">
                            <i class="fas fa-shield-alt"></i>
                            <h6>Combat Support Equipment</h6>
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