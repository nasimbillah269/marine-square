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
    font-size: 30px;
    font-weight: 700;
    color: #0d3b66;
    margin-bottom: 40px;
}

/* Main Card */
.main-card {
    background: #fff;
    border-radius: 15px;
    padding: 30px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.06);
}

/* Image */
.image-box img {
    width: 100%;
    border-radius: 15px;
    height: 100%;
    object-fit: cover;
}

/* List */
.supply-item {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 10px 0;
    transition: 0.3s;
}

.supply-item:hover {
    transform: translateX(6px);
}

/* Icon */
.supply-icon {
    width: 30px;
    height: 30px;
    background: #0d3b66;
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 13px;
    flex-shrink: 0;
}

/* Text */
.main-card p {
    font-size: 15px;
    color: #444;
}

/* Bottom box */
.bottom-box {
     margin-top: 20px;
    padding: 10px;
    border-radius: 10px;
    background: linear-gradient(135deg, #0d3b66, #1d6fa5);
    color: #fff;
    font-size: 15px;
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

    <h2 class="section-title">Systems & Equipment Supply</h2>

    <div class="main-card">
        <div class="row g-4 align-items-center">

            <!-- Image -->
            <div class="col-lg-5">
                <div class="image-box">
                     <img src="{{asset(assetLink().'/images/marin/resize.webp')}}" alt="Marine Equipment">
                </div>
            </div>

            <!-- Content -->
            <div class="col-lg-7">

                <p>
                    We source and deliver class-approved marine systems engineered for performance, durability, and compliance with naval standards.
                </p>

                <p><strong>Our supply capability covers:</strong></p>

                <div class="supply-item">
                    <div class="supply-icon"><i class="fas fa-arrow-right"></i></div>
                    <div>Propulsion systems, shafts, and mechanical components</div>
                </div>

                <div class="supply-item">
                    <div class="supply-icon"><i class="fas fa-arrow-right"></i></div>
                    <div>Gearboxes, pumps, compressors, and valves</div>
                </div>

                <div class="supply-item">
                    <div class="supply-icon"><i class="fas fa-arrow-right"></i></div>
                    <div>Marine electrical and power systems</div>
                </div>

                <div class="supply-item">
                    <div class="supply-icon"><i class="fas fa-arrow-right"></i></div>
                    <div>Navigation, communication, and sensor systems</div>
                </div>

                <div class="supply-item">
                    <div class="supply-icon"><i class="fas fa-arrow-right"></i></div>
                    <div>Workshop machinery and precision tools</div>
                </div>

                <p class="mt-3">
                    All equipment is sourced from globally recognized OEMs, ensuring reliability under demanding operational conditions.
                </p>

                <div class="bottom-box">
                    Delivering performance, durability, and compliance for mission-critical marine operations.
                </div>

            </div>

        </div>
    </div>

</div>








@endsection 

@push('js') 

@endpush


