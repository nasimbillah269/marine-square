@extends(welcomeTheme().'layouts.app') 
@section('title')
<title>{{websiteTitle()}}</title>
@endsection 
@section('SEO')
<meta name="title" property="og:title" content="{{general()->meta_title}}" />
<meta name="description" property="og:description" content="{!!general()->meta_description!!}" />
<meta name="keyword" property="og:keyword" content="{{general()->meta_keyword}}" />
<meta name="image" property="og:image" content="{{asset(general()->logo())}}" />
<meta name="url" property="og:url" content="{{route('index')}}" />
<link rel="canonical" href="{{route('index')}}">
@endsection 
@push('css')
<script type="application/ld+json">
    { 
    "@@context": "https://schema.org", 
    "@type": "WebPage", 
    "url": "{{route('index')}}", 
    "name": "{{websiteTitle()}}",
    "author": {
        "@type": "Webpage",
        "name": "{{websiteTitle()}}"
    },
    "description": "{!!general()->meta_description!!}"
    }
</script>
@endpush 

@section('contents')

<!--Slider Part Include Start-->
@include(welcomeTheme().'layouts.slider')


<div class="divider"></div>

<!-- ABOUT -->
<section id="about">
  <div class="container">
    <div class="row align-items-start gy-5">
      <div class="col-lg-5 fade-in">
        <span class="section-label">Who We Are</span>
        <h2 class="section-title">A Legacy Built on <em>Quality & Trust</em></h2>
        <div class="navy-line"></div>
        <p class="about-text mb-3"><strong>Apex Garments Group</strong> is one of Bangladesh's most respected textile conglomerates, with over two decades of excellence in designing, manufacturing, and exporting premium garments to global markets.</p>
        <p class="about-text mb-3">From woven formals to knitwear essentials, our six specialized sister companies cover the full spectrum of fashion — delivering precision craftsmanship at every price point.</p>
        <p class="about-text mb-4">Headquartered in Dhaka, with production facilities across Gazipur and Narayanganj, we employ over <strong>12,000 skilled artisans</strong> dedicated to creating garments that meet the highest international standards.</p>
        <div>
          <span class="cert-badge">ISO 9001:2015</span>
          <span class="cert-badge">OEKO-TEX®</span>
          <span class="cert-badge">GOTS Certified</span>
          <span class="cert-badge">BSCI Audited</span>
          <span class="cert-badge">BGMEA Member</span>
        </div>
      </div>
      <div class="col-lg-6 offset-lg-1">
        <div class="row g-3">
          <div class="col-sm-6 fade-in">
            <div class="about-card">
              <div class="about-icon"><i class="fas fa-gem"></i></div>
              <h5>Premium Quality</h5>
              <p>Every garment passes through 47-point quality checks before leaving our facilities.</p>
            </div>
          </div>
          <div class="col-sm-6 fade-in">
            <div class="about-card">
              <div class="about-icon"><i class="fas fa-leaf"></i></div>
              <h5>Sustainable Practices</h5>
              <p>Zero-waste goals, solar-powered facilities, and certified organic material sourcing.</p>
            </div>
          </div>
          <div class="col-sm-6 fade-in">
            <div class="about-card">
              <div class="about-icon"><i class="fas fa-globe-asia"></i></div>
              <h5>Global Reach</h5>
              <p>Trusted partners across Europe, USA, Japan, Australia, and the Middle East.</p>
            </div>
          </div>
          <div class="col-sm-6 fade-in">
            <div class="about-card">
              <div class="about-icon"><i class="fas fa-users"></i></div>
              <h5>Expert Workforce</h5>
              <p>12,000+ trained craftspeople with industry-leading wages and safe workplaces.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="divider"></div>

<!-- MISSION / VISION -->
<section id="mission">
  <div class="container">
    <div class="text-center mb-5 fade-in">
      <span class="section-label">Our Purpose</span>
      <h2 class="section-title">Mission & <em>Vision</em></h2>
    </div>
    <div class="row g-4 fade-in">
      <div class="col-lg-6">
        <div class="mv-block mv-mission h-100">
          <div class="mv-icon-wrap"><i class="fas fa-bullseye"></i></div>
          <h3>Our Mission</h3>
          <p>To deliver exceptional garments combining artisan craftsmanship with modern manufacturing efficiency — creating products that empower brands and delight consumers worldwide.</p>
          <ul class="mv-list">
            <li>Maintain uncompromising quality at every production stage</li>
            <li>Build long-term partnerships rooted in transparency and trust</li>
            <li>Invest in people through training, fair wages, and welfare</li>
            <li>Drive innovation in sustainable textile manufacturing</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="mv-block mv-vision h-100">
          <div class="mv-icon-wrap"><i class="fas fa-eye"></i></div>
          <h3>Our Vision</h3>
          <p>To be the world's most trusted garments group — recognized for quality, sustainability, and the human touch that transforms fabric into fashion.</p>
          <ul class="mv-list">
            <li>Become South Asia's leading fashion group by 2030</li>
            <li>Achieve carbon-neutral operations across all facilities</li>
            <li>Expand into 60+ countries through global partnerships</li>
            <li>Set the benchmark for ethical fashion manufacturing</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="text-center mt-5 fade-in">
      <span class="section-label d-block mb-3">Our Core Values</span>
      <span class="value-pill"><i class="fas fa-circle"></i> Integrity</span>
      <span class="value-pill"><i class="fas fa-circle"></i> Innovation</span>
      <span class="value-pill"><i class="fas fa-circle"></i> Excellence</span>
      <span class="value-pill"><i class="fas fa-circle"></i> Sustainability</span>
      <span class="value-pill"><i class="fas fa-circle"></i> Collaboration</span>
      <span class="value-pill"><i class="fas fa-circle"></i> Empowerment</span>
      <span class="value-pill"><i class="fas fa-circle"></i> Transparency</span>
      <span class="value-pill"><i class="fas fa-circle"></i> Craftsmanship</span>
    </div>
  </div>
</section>

<div class="divider"></div>

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
        <a href="https://promoter-tech.com/" class="company-card" target="_bank">
          <div class="company-logo-area" style="background:linear-gradient(135deg,#EEF1F8,#dce3f5);">
            <span class="company-badge">Flagship</span>
            <img src="{{asset(assetLink().'/images/pt1.webp')}}" alt="" class="imarr">
          </div>
          <div class="company-body">
            <div class="company-type">Woven Garments</div>
            <h5>Promoter Tech Ltd.</h5>
            <div class="company-tags"><span class="tag">Shirts</span><span class="tag">Trousers</span><span class="tag">Jackets</span></div>
            <p>Promoter Tech Limited is a global apparel manufacturer delivering quality garments with reliable sourcing and compliance.</p>
            <span class="company-link">Visit Company <i class="fas fa-arrow-right"></i></span>
          </div>
        </a>
      </div>

      <div class="col-lg-4 col-md-6 fade-in">
        <a href="https://anrfashion.com/" class="company-card" target="_bank">
          <div class="company-logo-area" style="background:linear-gradient(135deg,#e8f5f0,#cceddf);">
            <div class="logo-circle" style="background:linear-gradient(135deg,#0e7a5c,#15b07f);">
                <img src="{{asset(assetLink().'/images/anf.webp')}}" alt="" class="imarr">
            </div>
          </div>
          <div class="company-body">
            <div class="company-type">Knitwear</div>
            <h5>ANR Fashion</h5>
            <div class="company-tags"><span class="tag">T-Shirts</span><span class="tag">Polo</span><span class="tag">Sweaters</span></div>
            <p>ANR Fashion Wear Ltd. is a knitwear garment manufacturer producing quality apparel for global markets.</p>
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

<div class="divider"></div>


<section id="world" class="world-map-section py-5">
    <div class="container text-center">

            <h2 class="section-title">Our Buyers Around The <em>World</em></h2>
             <span class="section-label">Trusted by customers from many countries</span>

        <div class="map-container">

            <img src="https://upload.wikimedia.org/wikipedia/commons/8/80/World_map_-_low_resolution.svg" class="world-map">

            <!-- USA -->
            <span class="map-point usa"></span>

            <!-- UK -->
            <span class="map-point uk"></span>

            <!-- Dubai -->
            <span class="map-point dubai"></span>

            <!-- India -->
            <span class="map-point india"></span>

            <!-- Bangladesh -->
            <span class="map-point bangladesh"></span>

        </div>

    </div>
</section>

<div class="divider"></div>

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

<div class="divider"></div>



<!-- CONTACT -->
<section id="contact">
  <div class="container">
    <div class="text-center mb-5 fade-in">
      <span class="section-label">Reach Out</span>
      <h2 class="section-title">Let's Build Something <em>Together</em></h2>
    </div>
    <div class="row g-5">
      <div class="col-lg-5 fade-in">
        <p style="color:var(--muted);font-size:0.95rem;line-height:1.85;margin-bottom:2.5rem;">Whether you're looking for a manufacturing partner, exploring sourcing options, or joining our group — we'd love to hear from you. We respond within 24 business hours.</p>
        <div class="contact-info-item">
          <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
          <div><h6>Head Office</h6><p>Apex Tower, 12th Floor, 42 Gulshan Avenue<br>Gulshan-1, Dhaka 1212, Bangladesh</p></div>
        </div>
        <div class="contact-info-item">
          <div class="contact-icon"><i class="fas fa-phone-alt"></i></div>
          <div><h6>Phone</h6><p><a href="tel:+8801700000000">+880 1700-000000</a><br><a href="tel:+8802222334455">+880 2-222-334455</a></p></div>
        </div>
        <div class="contact-info-item">
          <div class="contact-icon"><i class="fas fa-envelope"></i></div>
          <div><h6>Email</h6><p><a href="mailto:info@apexgroup.com.bd">info@apexgroup.com.bd</a><br><a href="mailto:export@apexgroup.com.bd">export@apexgroup.com.bd</a></p></div>
        </div>
        <div class="contact-info-item">
          <div class="contact-icon"><i class="fas fa-clock"></i></div>
          <div><h6>Business Hours</h6><p>Saturday – Thursday: 9:00 AM – 6:00 PM<br>Friday: Closed</p></div>
        </div>
        <div class="contact-info-item">
          <div class="contact-icon"><i class="fas fa-industry"></i></div>
          <div><h6>Production Facilities</h6><p>Gazipur Factory: Tongi Industrial Area<br>Narayanganj Plant: BSCIC Estate</p></div>
        </div>
        <div class="d-flex gap-2 mt-1">
          <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
          <a href="#" class="social-link"><i class="fab fa-whatsapp"></i></a>
          <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
      <div class="col-lg-7 fade-in">
        <div class="contact-form-wrap">
          <h4 style="font-size:1.75rem;margin-bottom:0.3rem;">Send Us a Message</h4>
          <p style="color:var(--muted);font-size:0.85rem;margin-bottom:2rem;">All fields marked * are required.</p>
          <div class="row g-3">
            <div class="col-sm-6">
              <label class="form-label">Full Name *</label>
              <input type="text" class="form-control" placeholder="Your full name"/>
            </div>
            <div class="col-sm-6">
              <label class="form-label">Company Name</label>
              <input type="text" class="form-control" placeholder="Your company"/>
            </div>
            <div class="col-sm-6">
              <label class="form-label">Email Address *</label>
              <input type="email" class="form-control" placeholder="your@email.com"/>
            </div>
            <div class="col-sm-6">
              <label class="form-label">Phone Number</label>
              <input type="tel" class="form-control" placeholder="+880 ..."/>
            </div>
            <div class="col-sm-6">
              <label class="form-label">Country</label>
              <input type="text" class="form-control" placeholder="Your country"/>
            </div>
            <div class="col-sm-6">
              <label class="form-label">Inquiry Type *</label>
              <select class="form-select">
                <option value="">Select inquiry...</option>
                <option>Manufacturing Partnership</option>
                <option>Export / Sourcing</option>
                <option>Private Label Development</option>
                <option>Investment / Business</option>
                <option>Career Opportunities</option>
                <option>Other</option>
              </select>
            </div>
            <div class="col-12">
              <label class="form-label">Subject</label>
              <input type="text" class="form-control" placeholder="Brief subject of your inquiry"/>
            </div>
            <div class="col-12">
              <label class="form-label">Message *</label>
              <textarea class="form-control" rows="5" placeholder="Tell us about your requirements, expected quantities, timeline..."></textarea>
            </div>
            <div class="col-12">
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="consent">
                <label class="form-check-label" for="consent" style="font-size:0.8rem;color:var(--muted);">I agree to the privacy policy and consent to being contacted by Apex Garments Group.</label>
              </div>
              <button type="button" class="btn-navy w-100" style="padding:1rem;text-align:center;cursor:pointer;" onclick="handleSubmit(this)">
                Send Message &nbsp;<i class="fas fa-paper-plane"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



@endsection @push('js') @endpush