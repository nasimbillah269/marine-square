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

/* --- Hero Section --- */
.civil-hero-title {
    font-family: 'Poppins', sans-serif;
    font-size: 2.8rem;
    font-weight: 700;
    color: var(--ms-navy);
    margin-bottom: 15px;
    letter-spacing: -0.5px;
}

.civil-hero-title span.text-navy-accent {
    color: var(--ms-navy);
}

.civil-hero-lead {
    font-size: 1.1rem;
    color: var(--ms-text-muted);
    line-height: 1.8;
    max-width: 800px;
    margin: 0 auto;
}

/* --- Content Wrapper --- */
.civil-marine-wrapper {
    background-color: var(--ms-light);
    position: relative;
    padding-bottom: 60px;
}

/* --- Modern Project Cards (Grid Layout) --- */
.civil-projects-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
    margin-top: 50px;
}

.civil-project-card {
    background: var(--ms-white);
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(11, 45, 86, 0.05);
    border: 1px solid rgba(11, 45, 86, 0.05);
    transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    position: relative;
    display: flex;
    flex-direction: column;
}

.civil-project-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 40px rgba(11, 45, 86, 0.1);
    border-color: rgba(11, 45, 86, 0.1);
}

/* Top Accent Line */
.civil-project-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: var(--ms-gold);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.4s ease;
}

.civil-project-card:hover::before {
    transform: scaleX(1);
}

/* Card Header */
.civil-card-header {
    padding: 35px 35px 20px;
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
}

.civil-card-icon {
    width: 60px;
    height: 60px;
    background: rgba(11, 45, 86, 0.08);
    color: var(--ms-navy);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    transition: all 0.3s ease;
}

.civil-project-card:hover .civil-card-icon {
    background: var(--ms-navy);
    color: var(--ms-white);
    transform: rotate(5deg);
}

.civil-card-year {
    font-family: 'Bebas Neue', cursive;
    font-size: 1.8rem;
    color: rgba(11, 45, 86, 0.15);
    letter-spacing: 1px;
    margin: 0;
    line-height: 1;
}

/* Card Body */
.civil-card-body {
    padding: 0 35px 35px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}

.civil-card-title {
    font-size: 1.25rem;
    color: var(--ms-navy);
    font-weight: 600;
    margin-bottom: 15px;
    line-height: 1.4;
}

.civil-card-desc {
    color: var(--ms-text-muted);
    font-size: 0.95rem;
    line-height: 1.7;
    margin-bottom: 25px;
    flex-grow: 1;
}

/* Card Footer */
.civil-card-footer {
    display: flex;
    align-items: center;
    gap: 15px;
    padding-top: 20px;
    border-top: 1px solid rgba(11, 45, 86, 0.06);
}

.civil-meta-tag {
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    padding: 6px 12px;
    border-radius: 4px;
    background: var(--ms-light);
    color: var(--ms-navy);
}

/* --- Support Organization Banner --- */
.civil-support-banner {
    background: var(--ms-navy);
    border-radius: 12px;
    padding: 40px;
    margin-top: 60px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-shadow: 0 15px 40px rgba(11, 45, 86, 0.15);
    position: relative;
    overflow: hidden;
}

.civil-support-banner::before {
    content: '';
    position: absolute;
    top: -50px;
    right: -50px;
    width: 200px;
    height: 200px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(232, 192, 106, 0.15) 0%, transparent 70%);
}

.civil-support-content {
    max-width: 600px;
    position: relative;
    z-index: 2;
}

.civil-support-content h3 {
    color: var(--ms-white);
    font-size: 1.8rem;
    margin-bottom: 10px;
}

.civil-support-content p {
    color: rgb(0 0 0 / 70%);
    margin: 0;
    font-size: 1rem;
    line-height: 1.6;
}

.civil-support-icon {
    font-size: 4rem;
    color: rgba(255, 255, 255, 0.1);
    position: relative;
    z-index: 2;
}

/* --- Responsive Adjustments --- */
@media (max-width: 991px) {
    .civil-projects-grid {
        grid-template-columns: 1fr;
    }
    
    .civil-support-banner {
        flex-direction: column;
        text-align: center;
        padding: 30px;
    }
    
    .civil-support-icon {
        margin-top: 20px;
    }
}

@media (max-width: 768px) {
    .civil-hero-title {
        font-size: 2.2rem;
    }
    
    .civil-card-header,
    .civil-card-body {
        padding-left: 25px;
        padding-right: 25px;
    }
}

/* Fade In Utility for consistency */
.ms-fade-in {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.6s ease-out, transform 0.6s ease-out;
}
.ms-fade-in.visible {
    opacity: 1;
    transform: translateY(0);
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




  <!-- ========== MAIN CONTENT START ========== -->
    <div class="main-content civil-marine-wrapper">
        <div class="container py-5">

            <!-- Intro Section -->
            <div class="row align-items-center mb-4 pt-3 ms-fade-in">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="civil-hero-title">Port & Inland <span class="text-navy-accent">Water Support</span></h2>
                    <p class="civil-hero-lead mt-3">
                        We support port authorities and inland water organizations through marine services, equipment supply, and operational support.
                    </p>
                </div>
            </div>

            <!-- Key Projects Grid -->
            <div class="civil-projects-grid">
                
                <!-- Project 1 -->
                <div class="civil-project-card ms-fade-in">
                    <div class="civil-card-header">
                        <div class="civil-card-icon">
                            <i class="fas fa-water"></i>
                        </div>
                        <div class="civil-card-year">2021</div>
                    </div>
                    <div class="civil-card-body">
                        <h4 class="civil-card-title">Diving Operations — Payra Port Authority</h4>
                        <p class="civil-card-desc">
                            Execution of multiple underwater inspection, cleaning, and recovery tasks, supporting port operations and maintenance requirements.
                        </p>
                        <div class="civil-card-footer">
                            <span class="civil-meta-tag"><i class="fas fa-check-circle text-success me-1"></i> Completed</span>
                            <span class="civil-meta-tag"><i class="fas fa-anchor text-secondary me-1"></i> Port Services</span>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="civil-project-card ms-fade-in">
                    <div class="civil-card-header">
                        <div class="civil-card-icon">
                            <i class="fas fa-ship"></i>
                        </div>
                        <div class="civil-card-year">Ongoing</div>
                    </div>
                    <div class="civil-card-body">
                        <h4 class="civil-card-title">Ongoing Support to BIWTA</h4>
                        <p class="civil-card-desc">
                            Ongoing support to BIWTA and related organizations through the supply of marine equipment, structural components, and technical services for riverine infrastructure.
                        </p>
                        <div class="civil-card-footer">
                            <span class="civil-meta-tag"><i class="fas fa-sync-alt text-primary me-1"></i> In Progress</span>
                            <span class="civil-meta-tag"><i class="fas fa-cogs text-secondary me-1"></i> Equipment & Tech</span>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Additional Support Banner -->
            <div class="row ms-fade-in mt-2">
                <div class="col-12">
                    <div class="civil-support-banner">
                        <div class="civil-support-content">
                            <h3>Need Operational Support?</h3>
                            <p>Our team is equipped to assist with underwater operations, marine infrastructure, and critical supply lines for port authorities.</p>
                        </div>
                        <div class="civil-support-icon">
                            <i class="fas fa-life-ring"></i>
                        </div>
                    </div>
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