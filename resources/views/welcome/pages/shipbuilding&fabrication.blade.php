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






/* Accent line below title */
.shipbuilding-title{
   
}

h2.shipbuilding-title {
    text-align: center;
}

.shipbuilding-lead {
    font-size: 16px;
    color: #5a6a7a;
    line-height: 1.8;
    margin-top: 25px;
    text-align: center;
}

/* --- 2. Subtitle --- */
.shipbuilding-subtitle {
    font-weight: 600;
    font-size: 22px;
    color: #0b2d56;
    margin-bottom: 30px;
    padding-left: 10px;
    /* Gold Accent */
}

/* --- 3. Feature Cards (Modern 2x2 Grid) --- */
.shipbuilding-feature-card {
    background: #ffffff;
    border-radius: 12px;
    padding: 25px;
    display: flex;
    align-items: flex-start;
    gap: 20px;
    border: 1px solid rgba(11, 45, 86, 0.05);
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.04);
    transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    position: relative;
    overflow: hidden;
    z-index: 1;
    height: 100%;
}

/* Subtle hover background glow */
.shipbuilding-feature-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: linear-gradient(135deg, rgba(15, 140, 140, 0.03), rgba(11, 45, 86, 0.02));
    z-index: -1;
    opacity: 0;
    transition: opacity 0.4s ease;
}

.shipbuilding-feature-card:hover::before {
    opacity: 1;
}

.shipbuilding-feature-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(11, 45, 86, 0.1);
    border-color: rgba(15, 140, 140, 0.3);
}

/* Icon Wrapper */
.shipbuilding-icon-wrapper {
    width: 54px;
    height: 54px;
    background: linear-gradient(135deg, #0b2d56, #104b7c);
    color: #ffffff;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    flex-shrink: 0;
    transition: transform 0.4s ease;
}

.shipbuilding-feature-card:hover .shipbuilding-icon-wrapper {
    transform: scale(1.1) rotate(5deg);
    background: linear-gradient(135deg, #0F8C8C, #12b0b0);
}

/* Card Text */
.shipbuilding-card-text {
    flex-grow: 1;
}

.shipbuilding-card-text h5 {
    font-size: 17px;
    font-weight: 700;
    color: #0b2d56;
    margin-bottom: 8px;
    transition: color 0.3s ease;
}

.shipbuilding-feature-card:hover .shipbuilding-card-text h5 {
    color: #0F8C8C;
}

.shipbuilding-card-text p {
    font-size: 14px;
    color: #5a6a7a;
    line-height: 1.6;
    margin: 0;
}

/* --- 4. Callout Banner (Highlight Box) --- */
.shipbuilding-callout {
    margin-top: 50px;
    padding: 30px 40px;
    border-radius: 16px;
    background: linear-gradient(135deg, #071e3d, #0b2d56);
    color: #ffffff;
    display: flex;
    align-items: center;
    gap: 25px;
    box-shadow: 0 15px 40px rgba(7, 30, 61, 0.3);
    position: relative;
    overflow: hidden;
}

/* Decorative Background Element */
.shipbuilding-callout::after {
    content: '\f2b5'; /* Handshake icon faded in BG */
    font-family: "Font Awesome 6 Free";
    font-weight: 900;
    position: absolute;
    right: -20px;
    bottom: -30px;
    font-size: 150px;
    color: rgba(255, 255, 255, 0.03);
    transform: rotate(-15deg);
    pointer-events: none;
}

.shipbuilding-callout-icon {
    width: 60px;
    height: 60px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 28px;
    color: #07fff8; /* Bright Cyan Accent */
    flex-shrink: 0;
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.shipbuilding-callout-text {
    font-size: 16px;
    line-height: 1.7;
    font-weight: 400;
    margin: 0;
    letter-spacing: 0.3px;
}

.shipbuilding-callout-text strong {
    color: #e8c06a; /* Gold highlight for OEMs */
    font-weight: 600;
}

/* --- 5. Responsive Adjustments --- */
@media (max-width: 768px) {
    .shipbuilding-title { font-size: 28px; }
    .shipbuilding-feature-card { padding: 20px; flex-direction: column; text-align: center; align-items: center; }
    .shipbuilding-callout { flex-direction: column; text-align: center; padding: 25px 20px; }
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




 <div class="main-content">
        <div class="container py-5">

            <div class="shipbuilding-header ms-fade-in">
                <h2 class="shipbuilding-title">Shipbuilding & Fabrication Support</h2>
                <p class="shipbuilding-lead">
                    We support new construction and refit projects across naval, commercial, and riverine platforms.
                </p>
            </div>

            <div class="row mt-5">
                <div class="col-lg-12">
                    <h4 class="shipbuilding-subtitle ms-fade-in">Our involvement includes:</h4>
                    <div class="row g-4 mt-2">
                        <!-- Card 1 -->
                        <div class="col-md-6 ms-fade-in">
                            <div class="shipbuilding-feature-card">
                                <div class="shipbuilding-icon-wrapper">
                                    <i class="fas fa-boxes"></i>
                                </div>
                                <div class="shipbuilding-card-text">
                                    <h5>Material Sourcing</h5>
                                    <p>Material sourcing and system supply</p>
                                </div>
                            </div>
                        </div>
                        <!-- Card 2 -->
                        <div class="col-md-6 ms-fade-in">
                            <div class="shipbuilding-feature-card">
                                <div class="shipbuilding-icon-wrapper">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                                <div class="shipbuilding-card-text">
                                    <h5>Quality Control</h5>
                                    <p>Fabrication supervision and quality control</p>
                                </div>
                            </div>
                        </div>
                        <!-- Card 3 -->
                        <div class="col-md-6 ms-fade-in">
                            <div class="shipbuilding-feature-card">
                                <div class="shipbuilding-icon-wrapper">
                                    <i class="fas fa-cogs"></i>
                                </div>
                                <div class="shipbuilding-card-text">
                                    <h5>System Integration</h5>
                                    <p>Integration support for onboard systems</p>
                                </div>
                            </div>
                        </div>
                        <!-- Card 4 -->
                        <div class="col-md-6 ms-fade-in">
                            <div class="shipbuilding-feature-card">
                                <div class="shipbuilding-icon-wrapper">
                                    <i class="fas fa-anchor"></i>
                                </div>
                                <div class="shipbuilding-card-text">
                                    <h5>Shipyard Execution</h5>
                                    <p>Shipyard coordination and execution</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Highlight -->
            <div class="shipbuilding-callout ms-fade-in">
                <div class="shipbuilding-callout-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <div class="shipbuilding-callout-text">
                    Bangladesh shipyards are active but depend heavily on imported systems—creating strong collaboration opportunities for <strong>OEMs</strong>.
                </div>
            </div>
        </div>









@endsection 

@push('js') 

@endpush


