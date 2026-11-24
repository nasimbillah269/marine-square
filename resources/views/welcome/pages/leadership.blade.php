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


.leadership-section {
        padding: 50px 0;
    }

    .leadership-card {
        transition: 0.3s;
    }

    .leadership-card:hover {
        transform: translateY(-5px);
    }

    .profile-imgs {
        width: 100%;
        max-width: 300px;
        border: 5px solid #104b7c;
        border-radius: 50%;
        aspect-ratio: 1 / 1;
        object-fit: cover;
        object-position: center top;
        background: #fff;
    }

    .leader-title {
        font-size: 28px;
        font-weight: 700;
        color: #0a2540;
    }

    .leader-subtitle {
        font-size: 16px;
        color: #6c757d;
        margin-bottom: 20px;
    }

    .leader-role {
        display: block;
        font-size: 14px;
        font-weight: 600;
        color: #104b7c;
        letter-spacing: 0.5px;
        margin-top: 2px;
    }

    .highlights {
        background: #f1f1f1;
        padding: 15px;
        border-left: 4px solid #104b7c;
        border-radius: 8px;
        margin-bottom: 15px;
    }

    .leadership-text {
        color: #444;
        line-height: 1.7;
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



<section class="leadership-section">
    <div class="container">
        <div class="leadership-card">
            <div class="row align-items-center">

                <!-- Left Column (Image) -->
                <div class="col-md-4 text-center mb-4 mb-md-0">
                    <img src="{{asset(assetLink().'/images/marin/capt-zamshed-ali.webp')}}" alt="Capt. Zamshed Ali (Retd.)" class="profile-imgs">
                </div>

                <!-- Right Column (Text) -->
                <div class="col-md-8">
                    <h2 class="leader-title">Leadership</h2>
                    <p class="leader-subtitle">
                        Capt. Zamshed Ali (Retd.)
                        <span class="leader-role">Founder &amp; CEO</span>
                    </p>

                    <div class="leadership-text">
                        <div class="highlights">
                            MARINE Square is led by Capt. Zamshed Ali (Retd.), a naval officer with over three decades of service in the Bangladesh Navy,
                            including hands-on experience in shipbuilding, dockyard operations, and marine engineering.
                        </div>

                        <p>
                            His background combines operational understanding with technical execution—enabling accurate interpretation of user requirements
                            and effective coordination with global OEMs and service providers.
                        </p>

                        <div class="highlights">
                           This leadership ensures disciplined delivery, technical clarity, and credibility within the defense and maritime environment.
                        </div>

                        {{--<p>
                            This enables accurate interpretation of user requirements and seamless coordination with global OEMs and service providers.
                        </p>--}}

                        {{--<div class="highlights">
                            Ensures disciplined delivery, technical clarity, and strong credibility.
                        </div>--}}

                       {{-- <p>
                            His leadership strengthens MARINE Square’s position within the defense and maritime environment.
                        </p>--}}
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>




@endsection 

@push('js') 

@endpush


