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
<style></style>
@endpush @section('contents')

<div class="breadcrumb-area" @if($page->
    bannerFile) style="background-image:url({{asset($page->banner())}});background-repeat: no-repeat; background-size: cover;" @endif >
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


<section id="clients" class="client-section py-5">
    <div class="container">

        <div class="text-center mb-5">

            <h2 class="section-title">Our Trusted <em>Clients</em></h2>
             <span class="section-label">Companies who trust our services</span>
        </div>

        <div class="row client-logos">

            <div class="col-6 col-md-3 col-lg-2">
                <div class="client-box">
                    <img src="{{asset(assetLink().'/images/group/demo-image.jpg')}}" alt="Client">
                </div>
            </div>

            <div class="col-6 col-md-3 col-lg-2">
                <div class="client-box">
                    <img src="{{asset(assetLink().'/images/group/demo-image.jpg')}}" alt="Client">
                </div>
            </div>

            <div class="col-6 col-md-3 col-lg-2">
                <div class="client-box">
                     <img src="{{asset(assetLink().'/images/group/demo-image.jpg')}}" alt="Client">
                </div>
            </div>

            <div class="col-6 col-md-3 col-lg-2">
                <div class="client-box">
                      <img src="{{asset(assetLink().'/images/group/demo-image.jpg')}}" alt="Client">
                </div>
            </div>

            <div class="col-6 col-md-3 col-lg-2">
                <div class="client-box">
                     <img src="{{asset(assetLink().'/images/group/demo-image.jpg')}}" alt="Client">
                </div>
            </div>

            <div class="col-6 col-md-3 col-lg-2">
                <div class="client-box">
                     <img src="{{asset(assetLink().'/images/group/demo-image.jpg')}}" alt="Client">
                </div>
            </div>

        </div>

    </div>
</section>


@endsection @push('js') @endpush