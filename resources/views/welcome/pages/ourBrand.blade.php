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
    bannerFile) style="background-image:url({{asset($page->banner())}});background-repeat: no-repeat; background-size: cover;padding: 50px 0;" @endif >
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



<div class="ourBrandMain">
    <div class="container">
        <div class="row">
            
            <div class="col-md-3">
                <div class="ourBrandBox">
                     <img src="{{asset(assetLink().'/images/kiswah/Capture.PNG')}}" alt="about company">
                </div>
            </div>
            <div class="col-md-9">
                <div class="brandDescription">
                    <h4>  ASH Apparel – A Dream Brand by KISWAH Garments</h4>
                    <p>
                      
                    ASH Apparel is the signature fashion brand created by KISWAH Garments Factory & Clothing Trading L.L.C. It represents the pinnacle of modern style, quality, and sophistication. Designed for today’s fashion-forward consumers, the brand offers an exquisite collection of ready-to-wear garments, blending timeless elegance with contemporary trends.
                    From casual wear to formal attire, ASH Apparel emphasizes comfort, durability, and innovation, reflecting KISWAH’s dedication to excellence in garment manufacturing. More than just clothing, it is a symbol of innovation, sustainability, and craftsmanship, aiming to inspire confidence and set new standards in global fashion.

                    </p>
                </div>
            </div>
        </div>
        <div class="brandGallery">
            <div class="row">
                <div class="col-md-6">
                    <div class="brandGalleryImg">  <img src="{{asset(assetLink().'/images/kiswah/a2.jpg')}}" alt="about company"></div>
                </div>
                <div class="col-md-6">
                    <div class="brandGalleryImg">  <img src="{{asset(assetLink().'/images/kiswah/New Project.webp')}}" alt="about company"></div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection @push('js') @endpush