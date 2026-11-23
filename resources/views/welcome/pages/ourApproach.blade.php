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
    margin-bottom: 50px;
    color: #0d3b66;
}

.step-wrapper {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
}

.step {
    position: relative;
    width: 18%;
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    transition: 0.3s;
        border-top: 3px solid #104b7c;
    border-bottom: 3px solid #104b7c;
}

.step:hover {
    transform: translateY(-5px);
}

.step-icon {
    font-size: 24px;
    color: #0d3b66;
    margin-bottom: 10px;
}

.step h6 {
    font-weight: 600;
    font-size: 14px;
}

.step p {
    font-size: 12px;
    color: #666;
}

/* Arrow */
.step::after {
    content: "\f061";
    font-family: "Font Awesome 6 Free";
    font-weight: 900;
    position: absolute;
    right: -30px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 20px;
    color: #0d3b66;
}

.step:last-child::after {
    display: none;
}

/* Responsive */
@media(max-width: 768px){
    .step {
        width: 100%;
        margin-bottom: 30px;
    }

    .step::after {
        display: none;
    }
}

.hitext p {
    background: #f1f1f1;
    padding: 15px;
    border-left: 4px solid #104b7c;
    border-radius: 8px;
    margin: 0;
    margin-top: 40px;
    display: inline-block;
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

    <h2 class="section-title">Our Approach</h2>

    <div class="step-wrapper">

        <div class="step">
            <div class="step-icon"><i class="fas fa-users"></i></div>
            <h6>Understand Requirements</h6>
            <p>Understand operational requirements directly from end users</p>
        </div>

        <div class="step">
            <div class="step-icon"><i class="fas fa-cogs"></i></div>
            <h6>Align OEM Solutions</h6>
            <p>Align OEM solutions with technical and system compatibility</p>
        </div>

        <div class="step">
            <div class="step-icon"><i class="fas fa-file-contract"></i></div>
            <h6>Procurement Support</h6>
            <p>Support procurement processes and documentation compliance</p>
        </div>

        <div class="step">
            <div class="step-icon"><i class="fas fa-truck"></i></div>
            <h6>Sourcing & Supply</h6>
            <p>Coordinate sourcing, supply, and execution</p>
        </div>

        <div class="step">
            <div class="step-icon"><i class="fas fa-tools"></i></div>
            <h6>Follow-up Support</h6>
            <p>Provide follow-up support to ensure system performance</p>
        </div>

    </div>

    <!-- Bottom Text -->
    <div class="hitext">
        <p>
           We focus on clarity, coordination, and execution—ensuring that projects are delivered effectively within Bangladesh’s operational environment.

        </p>
    </div>

</div>







@endsection 

@push('js') 

@endpush


