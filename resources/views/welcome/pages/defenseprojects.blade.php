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
.projects-hero-title {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 2.8rem;
    color: #0b1d30;
    line-height: 1.2;
}

.text-navy-accent {
    color: #0b2d56;
    position: relative;
    display: inline-block;
}

.projects-hero-lead {
    font-size: 1.05rem;
    color: #556270;
    max-width: 850px;
    margin: 0 auto;
    line-height: 1.7;
}

/* Timeline Layout */
.project-timeline {
    position: relative;
    max-width: 1100px;
    margin: 0 auto;
    padding: 40px 0;
}

/* Central Timeline Vertical Line */
.project-timeline::after {
    content: '';
    position: absolute;
    width: 4px;
    background-color: rgba(11, 45, 86, 0.15);
    top: 0;
    bottom: 0;
    left: 50%;
    margin-left: -2px;
    border-radius: 2px;
}

/* Timeline Item Container */
.timeline-item {
    padding: 10px 40px;
    position: relative;
    background-color: inherit;
    width: 50%;
}

.timeline-item.left {
    left: 0;
}

.timeline-item.right {
    left: 50%;
}

/* The Timeline Icon Dot */
.timeline-dot {
    position: absolute;
    width: 50px;
    height: 50px;
    right: -25px;
    background-color: #ffffff;
    border: 4px solid #0b2d56;
    top: 25px;
    border-radius: 50%;
    z-index: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #0b2d56;
    font-size: 1.3rem;
    transition: all 0.4s ease;
}

.timeline-item.right .timeline-dot {
    left: -25px;
}

/* Timeline Content Card */
.timeline-content {
    padding: 30px;
    background-color: white;
    position: relative;
    border-radius: 12px;
    box-shadow: 0 5px 25px rgba(11, 45, 86, 0.05);
    border: 1px solid rgba(11, 45, 86, 0.03);
    transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.timeline-item:hover .timeline-content {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(11, 45, 86, 0.12);
    border-color: rgba(11, 45, 86, 0.1);
}

.timeline-item:hover .timeline-dot {
    background-color: #0b2d56;
    color: #ffffff;
    transform: scale(1.1);
    box-shadow: 0 0 15px rgba(11, 45, 86, 0.3);
}

/* Card Inner Content */
.timeline-date {
    display: inline-block;
    padding: 5px 12px;
    background: rgba(11, 45, 86, 0.08);
    color: #0b2d56;
    border-radius: 20px;
    font-weight: 700;
    font-size: 0.85rem;
    margin-bottom: 12px;
}

.vessel-name {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 1.25rem;
    color: #0b1d30;
    margin-bottom: 5px;
}

.project-title {
    font-family: 'Poppins', sans-serif;
    font-weight: 500;
    font-size: 0.95rem;
    color: #556270;
    margin-bottom: 12px;
}

.project-line {
    width: 50px;
    height: 3px;
    background: #0b2d56;
    margin-bottom: 15px;
    border-radius: 2px;
}

.timeline-content p {
    font-size: 0.9rem;
    color: #6a7c92;
    line-height: 1.6;
    margin: 0;
}

/* Responsive Timeline */
@media screen and (max-width: 768px) {
    .project-timeline::after {
        left: 31px;
    }
    
    .timeline-item {
        width: 100%;
        padding-left: 70px;
        padding-right: 25px;
    }
    
    .timeline-item.right {
        left: 0%;
    }

    .timeline-item.left .timeline-dot, 
    .timeline-item.right .timeline-dot {
        left: 6px;
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
    <div class="main-content defense-projects-wrapper">
        <div class="container py-5">

            <!-- Intro Section -->
            <div class="row align-items-center mb-5 pb-3 ms-fade-in">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="projects-hero-title">Delivered Technical <span class="text-navy-accent">Solutions</span></h2>
                    <p class="projects-hero-lead mt-4">
                        We have delivered multiple technical supply and system support projects for Bangladesh Navy, covering propulsion systems, instrumentation, communication equipment, and workshop capability.
                    </p>
                </div>
            </div>

            <!-- Unique Timeline Layout -->
            <div class="project-timeline">
                
                <!-- Project 1 -->
                <div class="timeline-item left ms-fade-in">
                    <div class="timeline-dot"><i class="fas fa-fan"></i></div>
                    <div class="timeline-content">
                        <div class="timeline-date">2024</div>
                        <h4 class="vessel-name">BNT HALDA</h4>
                        <h5 class="project-title">Propeller System Support</h5>
                        <div class="project-line"></div>
                        <p>Supply of port and starboard propeller sets including associated fittings and components for propulsion system replacement. The system is linked to Kongsberg-origin propulsion architecture. Scope included technical coordination and supply alignment with existing configuration.</p>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="timeline-item right ms-fade-in">
                    <div class="timeline-dot"><i class="fas fa-tachometer-alt"></i></div>
                    <div class="timeline-content">
                        <div class="timeline-date">2022</div>
                        <h4 class="vessel-name">BNS K.J. Ali</h4>
                        <h5 class="project-title">Fuel Flow Measurement System</h5>
                        <div class="project-line"></div>
                        <p>Supply, installation, system modification, calibration, and commissioning of digital fuel flow monitoring system. Work involved replacement of legacy mechanical arrangement and integration of modern monitoring solution onboard.</p>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="timeline-item left ms-fade-in">
                    <div class="timeline-dot"><i class="fas fa-wave-square"></i></div>
                    <div class="timeline-content">
                        <div class="timeline-date">2022</div>
                        <h4 class="vessel-name">BNS Mongla</h4>
                        <h5 class="project-title">Ultrasonic Thickness Gauge</h5>
                        <div class="project-line"></div>
                        <p>Supply of Olympus 45MG ultrasonic thickness measurement unit, including calibration setup and operator training for onboard and maintenance use.</p>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="timeline-item right ms-fade-in">
                    <div class="timeline-dot"><i class="fas fa-thermometer-half"></i></div>
                    <div class="timeline-content">
                        <div class="timeline-date">2022</div>
                        <h4 class="vessel-name">CINS Office</h4>
                        <h5 class="project-title">Temperature Calibrator</h5>
                        <div class="project-line"></div>
                        <p>Supply and commissioning of SIKA TP37 series temperature calibration equipment, including familiarization and operational guidance.</p>
                    </div>
                </div>

                <!-- Project 5 -->
                <div class="timeline-item left ms-fade-in">
                    <div class="timeline-dot"><i class="fas fa-broadcast-tower"></i></div>
                    <div class="timeline-content">
                        <div class="timeline-date">2020</div>
                        <h4 class="vessel-name">BNS Titumir</h4>
                        <h5 class="project-title">GMDSS Communication Suite</h5>
                        <div class="project-line"></div>
                        <p>Supply and commissioning of IMO/SOLAS-compliant GMDSS suite comprising VHF DSC Class-A, MF/HF 500W DSC system, Mini-C terminal, and NAVTEX system. Integration carried out in line with vessel communication requirements.</p>
                    </div>
                </div>

                <!-- Project 6 -->
                <div class="timeline-item right ms-fade-in">
                    <div class="timeline-dot"><i class="fas fa-cogs"></i></div>
                    <div class="timeline-content">
                        <div class="timeline-date">2019</div>
                        <h4 class="vessel-name">BN Dockyard</h4>
                        <h5 class="project-title">Workshop Machinery</h5>
                        <div class="project-line"></div>
                        <p>Supply of precision tool and cutter grinding machine (Cincinnati Monaset type) for dockyard workshop application, supporting machining and tool maintenance capability.</p>
                    </div>
                </div>

            </div> <!-- End Timeline -->

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