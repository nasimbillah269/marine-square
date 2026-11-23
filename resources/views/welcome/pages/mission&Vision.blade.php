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

    .section {
        padding: 50px 0;
    }
    

    .section-title {
        font-size: 32px;
        font-weight: 700;
        color: #0a2540;
        margin-bottom: 30px;
    }

    .image-box img {
        width: 100%;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    }

    .info-card {
        background: #fff;
        border-radius: 15px;
        padding: 25px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.08);
        margin-bottom: 20px;
        transition: 0.3s;
    }

    .info-card:hover {
        transform: translateY(-5px);
    }

    .info-title {
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 10px;
        color: #104b7c;
    }

    .info-title i {
        margin-right: 8px;
    }

    .info-text {
        color: #444;
        line-height: 1.6;
    }

    .value-item {
        display: flex;
        align-items: start;
        margin-bottom: 12px;
        padding: 10px;
        border-radius: 8px;
        transition: 0.3s;
    }

    .value-item:hover {
        background: #e9f2ff;
    }

    .value-item i {
        color: #0d6efd;
        margin-right: 10px;
        font-size: 18px;
        margin-top: 4px;
    }

    .value-item strong {
        color: #0a2540;
    }










.breaOverly {
    background: #104b7c !important;
    padding: 0;
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



<section class="section">
    <div class="container">

        <h2 class="section-title text-center">Mission, Vision & Core Values</h2>

        <div class="row align-items-center g-4">

            <!-- Image -->
            <div class="col-md-5">
                <div class="image-box">
                     <img src="{{asset(assetLink().'/images/marin/sfdsf.webp')}}" alt="" class="marine-img">
               

                </div>
            </div>

            <!-- Content -->
            <div class="col-md-7">

                <!-- Vision -->
                <div class="info-card">
                    <h5 class="info-title">
                        <i class="fa-solid fa-eye"></i> Vision
                    </h5>
                    <p class="info-text">
                        To strengthen the Bangladesh Navy and national maritime–defense capability through trusted engineering support.
                    </p>
                </div>

                <!-- Mission -->
                <div class="info-card">
                    <h5 class="info-title">
                        <i class="fa-solid fa-bullseye"></i> Mission
                    </h5>
                    <p class="info-text">
                        To deliver compliant, reliable, and mission-ready technical solutions that sustain naval and maritime operations.
                    </p>
                </div>

                <!-- Core Values -->
                <div class="info-card">
                    <h5 class="info-title">
                        <i class="fa-solid fa-star"></i> Core Values
                    </h5>

                    <div class="value-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <span><strong>Integrity —</strong> Professional, transparent, and accountable in all engagements</span>
                    </div>

                    <div class="value-item">
                        <i class="fa-solid fa-gears"></i>
                        <span><strong>Technical Excellence —</strong> Engineering precision and continuous improvement</span>
                    </div>

                    <div class="value-item">
                        <i class="fa-solid fa-shield-halved"></i>
                        <span><strong>Reliability —</strong> Consistent and dependable execution</span>
                    </div>

                    <div class="value-item">
                        <i class="fa-solid fa-lightbulb"></i>
                        <span><strong>Innovation —</strong> Adoption of modern systems and smart technologies</span>
                    </div>

                    <div class="value-item">
                        <i class="fa-solid fa-flag"></i>
                        <span><strong>Commitment —</strong> Supporting national maritime capability and operational readiness</span>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>








@endsection 

@push('js') 

@endpush


