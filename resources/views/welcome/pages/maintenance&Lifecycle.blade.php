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


.service-section {
  padding: 70px 0;
}



/* Image wrapper */
.service-img-wrap {
  padding: 20px;
}





/* Title */
.service-title {
  font-size: 26px;
  font-weight: 700;
  color: #1f2937;
  margin-bottom: 15px;
}

/* Paragraph */
.service-text {
  color: #6b7280;
  font-size: 15px;
  line-height: 1.7;
}

/* List */
.service-list {
  margin-top: 20px;
  padding: 0;
  list-style: none;
}

.service-list li {
  padding: 10px 0;
  border-bottom: 1px solid #f1f1f1;
  color: #374151;
  position: relative;
  padding-left: 22px;
}

.service-list li::before {
  content: "✔";
  position: absolute;
  left: 0;
  color: #16a34a;
  font-weight: bold;
}

/* Button */
.btn-service {
  margin-top: 20px;
  background: #2563eb;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 8px;
  font-weight: 600;
}

.btn-service:hover {
  background: #1d4ed8;
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



<section class="service-section">
  <div class="container">

    <div class="row service-card align-items-center g-0">

      <!-- Image Side -->
      <div class="col-md-5 service-img-wrap">
        <img src="{{asset(assetLink().'/images/marin/ship-repair-istanbul.png')}}"
             class="service-img"
             alt="Maintenance">
      </div>

      <!-- Content Side -->
      <div class="col-md-7 service-content">

        <h2 class="service-title">
          Maintenance & Lifecycle Support
        </h2>

        <p class="service-text">
          Bangladesh’s growing fleet requires continuous technical support to maintain readiness and extend service life.
        </p>

        <ul class="service-list">
          <li>OEM spare parts supply</li>
          <li>Repair and overhaul coordination</li>
          <li>System upgrades and retrofit solutions</li>
          <li>Technical follow-up and lifecycle support</li>
        </ul>

        <p class="service-text mt-3">
          Our structured coordination ensures reduced downtime, reliable performance, and sustained operational capability.
        </p>

     
      </div>

    </div>

  </div>
</section>






@endsection 

@push('js') 

@endpush


