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
 
 
     .custom-card {
        background: #fff;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.07);
        height: 100%;
        transition: 0.3s;
    }

    .custom-card:hover {
        transform: translateY(-5px);
    }

    .card-title {
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 20px;
        color: #104b7c;
    text-align: left;
    }

    .list-item {
        display: flex;
        align-items: start;
        margin-bottom: 12px;
        color: #444;
    }

    .list-item i {
        color: #0d6efd;
        margin-right: 10px;
        font-size: 18px;
        margin-top: 2px;
    }

    .highlight-box {
        background: #e9f2ff;
        padding: 20px;
        border-left: 4px solid #0d6efd;
        border-radius: 10px;
        margin-top: 30px;
        font-weight: 500;
        color: #333;
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

        <!-- Title -->
        <h2 class="section-title">Advisory & Network</h2>
        <p class="section-subtitle">
            MARINE Square operates through a structured network of experienced advisors and technical professionals across defense and maritime sectors.
        </p>

        <div class="row g-4">

            <!-- Left Column -->
            <div class="col-md-6">
                <div class="custom-card">
                    <h5 class="card-title">Professional Network</h5>

                    <div class="list-item">
                        <i class="bi bi-person-badge"></i>
                        <span>Retired senior officers from Bangladesh Armed Forces</span>
                    </div>

                    <div class="list-item">
                        <i class="bi bi-gear"></i>
                        <span>Marine engineers and system specialists</span>
                    </div>

                    <div class="list-item">
                        <i class="bi bi-briefcase"></i>
                        <span>Procurement and commercial experts</span>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-md-6">
                <div class="custom-card">
                    <h5 class="card-title">Operational Access</h5>

                    <div class="list-item">
                        <i class="bi bi-shield-check"></i>
                        <span>Bangladesh Navy units and technical branches</span>
                    </div>

                    <div class="list-item">
                        <i class="bi bi-diagram-3"></i>
                        <span>DGDP procurement system</span>
                    </div>

                    <div class="list-item">
                        <i class="bi bi-building"></i>
                        <span>Dockyards, shipyards, and port authorities</span>
                    </div>

                    <div class="list-item">
                        <i class="bi bi-truck"></i>
                        <span>Local suppliers and service providers</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bottom Highlight -->
        <div class="highlight-box">
            This network-driven model enables flexibility, speed, and accurate alignment with real operational requirements.
        </div>

    </div>
</section>


@endsection 

@push('js') 

@endpush


