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


<!-- COMPANIES -->
<section id="companies">
  <div class="container">
    <div class="text-center mb-5 fade-in">
      <span class="section-label">Our Portfolio</span>
      <h2 class="section-title">Our Sister <em>Companies</em></h2>
      <p style="color:var(--muted);font-size:0.93rem;margin-top:0.8rem;max-width:520px;margin-inline:auto;">Six specialized entities under one trusted umbrella — each a leader in its category.</p>
    </div>
    <div class="row g-4">

      <div class="col-lg-4 col-md-6 fade-in">
        <a href="#" class="company-card">
          <div class="company-logo-area" style="background:linear-gradient(135deg,#EEF1F8,#dce3f5);">
            <span class="company-badge">Flagship</span>
            <div class="logo-circle" style="background:linear-gradient(135deg,#1B2B5E,#3550a0);">AW</div>
          </div>
          <div class="company-body">
            <div class="company-type">Woven Garments</div>
            <h5>Apex Wovens Ltd.</h5>
            <div class="company-tags"><span class="tag">Shirts</span><span class="tag">Trousers</span><span class="tag">Jackets</span></div>
            <p>Bangladesh's premier woven garments manufacturer producing men's & women's formal and casual wear for top European and US retailers.</p>
            <span class="company-link">Visit Company <i class="fas fa-arrow-right"></i></span>
          </div>
        </a>
      </div>

      <div class="col-lg-4 col-md-6 fade-in">
        <a href="#" class="company-card">
          <div class="company-logo-area" style="background:linear-gradient(135deg,#e8f5f0,#cceddf);">
            <div class="logo-circle" style="background:linear-gradient(135deg,#0e7a5c,#15b07f);">NK</div>
          </div>
          <div class="company-body">
            <div class="company-type">Knitwear</div>
            <h5>Nova Knitwear Co.</h5>
            <div class="company-tags"><span class="tag">T-Shirts</span><span class="tag">Polo</span><span class="tag">Sweaters</span></div>
            <p>Vertically integrated knitwear specialist with in-house dyeing, cutting, and finishing — serving global casual wear brands.</p>
            <span class="company-link">Visit Company <i class="fas fa-arrow-right"></i></span>
          </div>
        </a>
      </div>

      <div class="col-lg-4 col-md-6 fade-in">
        <a href="#" class="company-card">
          <div class="company-logo-area" style="background:linear-gradient(135deg,#fef3e8,#fde2c0);">
            <div class="logo-circle" style="background:linear-gradient(135deg,#C8922A,#e8b24a);">EF</div>
          </div>
          <div class="company-body">
            <div class="company-type">Embroidery & Finishing</div>
            <h5>Elite Finishing Works</h5>
            <div class="company-tags"><span class="tag">Embroidery</span><span class="tag">Printing</span><span class="tag">Washing</span></div>
            <p>State-of-the-art embroidery, screen printing, and garment washing on a 500-seat modern production floor.</p>
            <span class="company-link">Visit Company <i class="fas fa-arrow-right"></i></span>
          </div>
        </a>
      </div>

      <div class="col-lg-4 col-md-6 fade-in">
        <a href="#" class="company-card">
          <div class="company-logo-area" style="background:linear-gradient(135deg,#eaf7f0,#cceddf);">
            <div class="logo-circle" style="background:linear-gradient(135deg,#1a7a4a,#28a865);">GS</div>
          </div>
          <div class="company-body">
            <div class="company-type">Sustainable Textiles</div>
            <h5>GreenSeam Fabrics</h5>
            <div class="company-tags"><span class="tag">Organic</span><span class="tag">Recycled</span><span class="tag">Eco Dye</span></div>
            <p>GOTS-certified organic cotton and recycled polyester garments for eco-conscious global fashion brands.</p>
            <span class="company-link">Visit Company <i class="fas fa-arrow-right"></i></span>
          </div>
        </a>
      </div>

      <div class="col-lg-4 col-md-6 fade-in">
        <a href="#" class="company-card">
          <div class="company-logo-area" style="background:linear-gradient(135deg,#f0eeff,#ddd8ff);">
            <div class="logo-circle" style="background:linear-gradient(135deg,#5b3cc4,#7c5bf5);">RL</div>
          </div>
          <div class="company-body">
            <div class="company-type">Retail & Licensing</div>
            <h5>Radiance Labels</h5>
            <div class="company-tags"><span class="tag">Private Label</span><span class="tag">OEM</span><span class="tag">ODM</span></div>
            <p>End-to-end private label development — from concept design to production,  brands launch their own collections.</p>
            <span class="company-link">Visit Company <i class="fas fa-arrow-right"></i></span>
          </div>
        </a>
      </div>

      <div class="col-lg-4 col-md-6 fade-in">
        <a href="#" class="company-card">
          <div class="company-logo-area" style="background:linear-gradient(135deg,#fff0ec,#fdd9cf);">
            <div class="logo-circle" style="background:linear-gradient(135deg,#c0392b,#e84d3d);">SA</div>
          </div>
          <div class="company-body">
            <div class="company-type">Accessories & Trims</div>
            <h5>Swift Accessories BD</h5>
            <div class="company-tags"><span class="tag">Buttons</span><span class="tag">Zippers</span><span class="tag">Labels</span></div>
            <p>Complete garment accessories and trims: woven labels, hang tags, buttons, zippers, and packaging solutions.</p>
            <span class="company-link">Visit Company <i class="fas fa-arrow-right"></i></span>
          </div>
        </a>
      </div>

    </div>
  </div>
</section>


@endsection @push('js') @endpush