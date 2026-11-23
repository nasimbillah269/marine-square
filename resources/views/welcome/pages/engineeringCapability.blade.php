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




.section-title {
    text-align: center;
    font-weight: 700;
    font-size: 30px;
    color: #0d3b66;
    margin-bottom: 30px;
}

/* Main box */
.content-box {
    background: #fff;
    border-radius: 15px;
    padding: 30px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.06);
}

/* Step list */
.step-item {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    padding: 15px 0;
    position: relative;
}

/* Arrow line */
.step-item::before {
    content: "";
    position: absolute;
    left: 18px;
    top: 40px;
    width: 2px;
    height: 100%;
    background: #d6e2f0;
}

.step-item:last-child::before {
    display: none;
}

/* Icon */
.icon-circle {
    width: 40px;
    height: 40px;
    background: #0d3b66;
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    flex-shrink: 0;
}

/* Text */
.step-item p {
    margin: 0;
    font-size: 14px;
    color: #333;
}

/* Bullet style */
.step-item strong {
    color: #0d3b66;
}

/* Bottom highlight */
.bottom-box {
    margin-top: 30px;
    padding: 20px;
    border-radius: 12px;
    background: linear-gradient(135deg, #0d3b66, #1d6fa5);
    color: #fff;
}


.content-box p {
    text-align: justify;
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



<div class="container py-5">

    <h2 class="section-title">Engineering Capability with Direct Market Access</h2>

    <div class="content-box">

        <p>
            MARINE Square combines naval engineering experience with structured execution capability, enabling international OEMs and service providers to operate effectively within Bangladesh’s maritime and defense environment.
        </p>

        <p>
            With direct access to Bangladesh Navy, DGDP, dockyards, and shipyards, we bridge the gap between global technology providers and local operational requirements—ensuring correct positioning, compliance, and execution.
        </p>

        <p>
            We provide structured entry and operational support for foreign OEMs seeking to engage with Bangladesh’s naval and maritime sector.
        </p>

        <p>
            Our capability includes direct communication at all levels—from end users to decision-making authorities—ensuring alignment of technical solutions with actual operational requirements.
        </p>

        <p><strong>We support:</strong></p>

        <!-- List -->
        <div class="step-item">
            <div class="icon-circle"><i class="fas fa-arrow-right"></i></div>
            <p>Technical presentation and requirement alignment</p>
        </div>

        <div class="step-item">
            <div class="icon-circle"><i class="fas fa-arrow-right"></i></div>
            <p>DGDP procurement process navigation</p>
        </div>

        <div class="step-item">
            <div class="icon-circle"><i class="fas fa-arrow-right"></i></div>
            <p>Documentation and compliance coordination</p>
        </div>

        <div class="step-item">
            <div class="icon-circle"><i class="fas fa-arrow-right"></i></div>
            <p>Local representation and stakeholder engagement</p>
        </div>

        <p class="mt-3">
            This reduces entry barriers, minimizes risk, and enables effective market positioning.
        </p>

        <!-- Bottom highlight -->
        <div class="bottom-box text-center">
            MARINE Square ensures structured execution, compliance, and operational alignment in Bangladesh’s maritime sector.
        </div>

    </div>
</div>








@endsection 

@push('js') 

@endpush


