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

.marine-section {
    padding: 50px 0;
}

.marine-img {
    width: 100%;
    border-radius: 12px;
    object-fit: cover;
    height: 100%;
}

.marine-content h2 {
    font-weight: 700;
    color: #114a7a;
    margin-bottom: 20px;
}

.marine-content p {
    font-size: 16px;
    line-height: 1.8;
    color: #000;
    text-align: justify;
}

.highlight {
    color: #114a7a;
    font-weight: 600;
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




<section class="marine-section">
    <div class="container">
        <div class="row align-items-center g-4">

            <!-- Image Column -->
            <div class="col-lg-6">
                <img src="{{asset(assetLink().'/images/marin/Picture5.jpg')}}" alt="" class="marine-img">
               
            </div>

            <!-- Content Column -->
            <div class="col-lg-6">
                <div class="marine-content">
                    <h2>MARINE Square</h2>

                    <p>
                        <span class="highlight">MARINE Square</span> is a Bangladesh-based maritime and defense support company built on practical naval experience and engineering capability. Established in 2019 and led by Capt. Zamshed Ali, BN (Retd.), the company operates at the intersection of technical sourcing, project execution, and operational support.
                    </p>

                    <p>
                        We serve Bangladesh Navy, Coast Guard, DGDP, shipyards, and maritime organizations by delivering compliant equipment, structured technical solutions, and reliable execution under operational conditions.
                    </p>

                    <p>
                        Beyond supply, MARINE Square functions as a technical bridge between international OEMs and local end users—ensuring correct alignment of requirements, systems, and execution.
                    </p>

                </div>
            </div>

        </div>
    </div>
</section>




@endsection 

@push('js') 

@endpush


