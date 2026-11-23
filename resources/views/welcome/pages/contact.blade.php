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
.sitemap {
    margin-top: 50px;
}



 :root {
      --green:      #2e7d32;
      --green-light:#43a047;
      --green-dark: #1b5e20;
      --accent:     #76c442;
      --charcoal:   #1a1f1a;
      --dark-bg:    #111614;
      --mid-bg:     #f4f6f4;
      --white:      #ffffff;
      --text-muted: #6c757d;
      --border:     #dde4dd;
    }


    /* ─── HERO BANNER ─── */
    .hero-banner {
      position: relative;
      background: linear-gradient(120deg, #0d1f0e 0%, #1a3a1c 40%, #243d26 100%);
      padding: 90px 0 70px;
      overflow: hidden;
    }
    .hero-banner::before {
      content: '';
      position: absolute;
      inset: 0;
      background:
        repeating-linear-gradient(
          45deg,
          rgba(118,196,66,.04) 0px,
          rgba(118,196,66,.04) 1px,
          transparent 1px,
          transparent 60px
        );
    }
    .hero-banner::after {
      content: '';
      position: absolute;
      right: -60px; top: -60px;
      width: 420px; height: 420px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(118,196,66,.15) 0%, transparent 70%);
    }
    .hero-eyebrow {
      font-family: 'Barlow Condensed', sans-serif;
      font-size: .75rem;
      font-weight: 600;
      letter-spacing: 3px;
      text-transform: uppercase;
      color: var(--accent);
      margin-bottom: .75rem;
    }
    .hero-title {
      font-family: 'Barlow Condensed', sans-serif;
      font-size: clamp(2.8rem, 6vw, 4.5rem);
      font-weight: 800;
      line-height: 1;
      color: var(--white);
      letter-spacing: 1px;
      margin-bottom: .6rem;
    }
    .hero-subtitle {
      font-size: 1rem;
      font-weight: 600;
      color: var(--accent);
      letter-spacing: 1px;
      margin-bottom: 1.2rem;
    }
    .hero-desc {
      color: rgba(255,255,255,.6);
      font-size: .9rem;
      max-width: 560px;
      line-height: 1.7;
    }

    /* ─── CONTACT SECTION ─── */
    .contact-section {
      background: var(--mid-bg);
      padding: 64px 0 80px;
    }
    .section-label {
      font-family: 'Barlow Condensed', sans-serif;
      font-size: .72rem;
      font-weight: 700;
      letter-spacing: 3px;
      text-transform: uppercase;
      color: var(--green);
      margin-bottom: .4rem;
    }
    .section-title {
      font-family: 'Barlow Condensed', sans-serif;
      font-size: 2.2rem;
      font-weight: 800;
      color: var(--charcoal);
      letter-spacing: .5px;
      margin-bottom: .5rem;
    }
    .section-desc {
      color: var(--text-muted);
      font-size: .92rem;
      max-width: 580px;
      line-height: 1.7;
      margin-bottom: 2rem;
    }

    /* ─── FORM CARD ─── */
    .form-card {
      background: var(--white);
      border-radius: 4px;
      padding: 36px 32px;
      box-shadow: 0 2px 16px rgba(0,0,0,.07);
    }
    .form-label {
      font-size: .78rem;
      font-weight: 600;
      letter-spacing: .5px;
      text-transform: uppercase;
      color: #444;
      margin-bottom: .35rem;
    }
    .form-control {
      border: 1.5px solid #dde4dd;
      border-radius: 3px;
      font-size: .9rem;
      color: var(--charcoal);
      padding: .55rem .85rem;
      transition: border-color .2s, box-shadow .2s;
    }
    .form-control:focus {
      border-color: var(--green);
      box-shadow: 0 0 0 3px rgba(46,125,50,.12);
    }
    .form-control::placeholder { color: #bbb; }
    textarea.form-control { resize: vertical; min-height: 110px; }

    .btn-submit {
      background: #2e7d32;
      color: #fff;
      border: none;
      border-radius: 3px;
      font-family: 'Barlow Condensed', sans-serif;
      font-size: .95rem;
      font-weight: 700;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      padding: .75rem 2.2rem;
      transition: background .2s, transform .15s;
      cursor: pointer;
    }
    .btn-submit:hover {
      background: var(--green-dark);
      transform: translateY(-1px);
    }
    .btn-submit i { margin-right: .5rem; }

    /* ─── SIDEBAR CARD ─── */
    .sidebar-card {
      background: var(--white);
      border-radius: 4px;
      box-shadow: 0 2px 16px rgba(0,0,0,.07);
      overflow: hidden;
      margin-bottom: 1.25rem;
    }
    .contact-person {
      padding: 24px 24px 20px;
    }
    .person-img-wrap {
      width: 64px; height: 64px;
      border-radius: 50%;
      overflow: hidden;
      border: 3px solid var(--accent);
      flex-shrink: 0;
    }
    .person-img-placeholder {
      width: 100%; height: 100%;
      background: linear-gradient(135deg, #c8e6c9, #388e3c);
      display: flex; align-items: center; justify-content: center;
      color: #fff; font-size: 1.6rem;
    }
    .person-name {
      font-family: 'Barlow Condensed', sans-serif;
      font-size: 1.05rem;
      font-weight: 700;
      color: var(--charcoal);
      line-height: 1.2;
    }
    .person-title {
      font-size: .78rem;
      color: var(--text-muted);
      letter-spacing: .3px;
    }
    .person-desc {
      font-size: .85rem;
      color: #555;
      line-height: 1.6;
      margin-top: .9rem;
      margin-bottom: 1rem;
    }
    .contact-detail {
      display: flex;
      align-items: center;
      gap: .6rem;
      font-size: .85rem;
      color: var(--charcoal);
      margin-bottom: .55rem;
    }
    .contact-detail i {
      width: 18px;
      color: var(--green);
      font-size: .95rem;
    }

    .btn-download {
      display: block;
      background: var(--green);
      color: var(--white);
      text-align: center;
      text-decoration: none;
      font-family: 'Barlow Condensed', sans-serif;
      font-size: .88rem;
      font-weight: 700;
      letter-spacing: 1.2px;
      text-transform: uppercase;
      padding: .7rem 1rem;
      transition: background .2s;
      border-radius: 0;
    }
    .btn-download:hover { background: var(--green-dark); color: var(--white); }
    .btn-download i { margin-right: .4rem; }

    /* MAP placeholder */
    .map-card {
      background: var(--white);
      border-radius: 4px;
      box-shadow: 0 2px 16px rgba(0,0,0,.07);
      overflow: hidden;
      position: relative;
    }
    .map-placeholder {
      width: 100%; height: 100%;
      background:
        linear-gradient(180deg, #d4e6c3 0%, #b8d4a0 30%, #9dc47d 60%, #84b564 100%);
      display: flex; flex-direction: column;
      align-items: center; justify-content: center;
      gap: .4rem;
    }
    .map-placeholder i { font-size: 2rem; color: var(--green-dark); }
    .map-placeholder span {
      font-size: .78rem;
      font-weight: 600;
      color: var(--green-dark);
      letter-spacing: .5px;
    }
    /* Road lines in map */
    .map-road {
      position: absolute;
      background: rgba(255,255,255,.6);
    }
    .map-road-h { height: 4px; left: 0; right: 0; top: 50%; }
    .map-road-v { width: 4px; top: 0; bottom: 0; left: 40%; }
    .map-pin {
      position: absolute;
      top: 35%; left: 38%;
      color: #c62828;
      font-size: 1.4rem;
      filter: drop-shadow(0 2px 4px rgba(0,0,0,.3));
    }

    /* ─── FOOTER BAR ─── */
    .footer-bar {
      background: var(--dark-bg);
      padding: 28px 0;
      border-top: 2px solid var(--green-dark);
    }
    .footer-cert {
      display: flex;
      align-items: center;
      gap: .5rem;
      color: rgba(255,255,255,.55);
      font-size: .78rem;
      font-weight: 500;
      letter-spacing: .5px;
    }
    .cert-badge {
      padding: .25rem .6rem;
      border: 1px solid rgba(118,196,66,.35);
      border-radius: 2px;
      font-family: 'Barlow Condensed', sans-serif;
      font-size: .75rem;
      font-weight: 700;
      letter-spacing: 1px;
      color: var(--accent);
    }
    .footer-person {
      display: flex;
      align-items: center;
      gap: .75rem;
    }
    .footer-person-img {
      width: 44px; height: 44px;
      border-radius: 50%;
      background: linear-gradient(135deg, #81c784, #2e7d32);
      display: flex; align-items: center; justify-content: center;
      color: #fff; font-size: 1.1rem;
      border: 2px solid var(--accent);
    }
    .footer-person-info .name {
      font-family: 'Barlow Condensed', sans-serif;
      font-weight: 700;
      font-size: .9rem;
      color: var(--white);
      letter-spacing: .5px;
    }
    .footer-person-info .role {
      font-size: .72rem;
      color: rgba(255,255,255,.45);
      letter-spacing: .3px;
    }

    /* ─── ANIMATIONS ─── */
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(22px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    .fade-up { animation: fadeUp .6s ease both; }
    .fade-up-1 { animation-delay: .1s; }
    .fade-up-2 { animation-delay: .22s; }
    .fade-up-3 { animation-delay: .34s; }

    /* ─── RESPONSIVE ─── */
    @media (max-width: 768px) {
      .hero-banner { padding: 60px 0 50px; }
      .form-card { padding: 24px 18px; }
      .contact-person { padding: 18px; }
    }









</style>
@endpush 

@section('contents')
{{--<div class="breadcrumb-area"
@if($page->bannerFile)
style="background-image:url({{asset($page->banner())}});background-repeat: no-repeat;
    background-size: cover;padding: 50px 0;"
@endif
>
    <div class="container">
        <div class="title">
            <h1>{{$page->name}}</h1>
            <ul>
                <li><a href="{{route('index')}}">Home</a></li>
                <li>{{$page->name}}</li>
            </ul>
        </div>
    </div>
</div>--}}

{{--<div class="contact-page">
    
    <div class="container">
  <div class="row row-eq-height">
    <!-- Column 1 -->
    <div class="col-sm-12 col-md-12">
      <div class="contact-card">
        <div class="contact-row">
          <!--<div class="contact-icon">📍</div>-->
          <div>
            <h4>Mohammad Saifur Rahman Khan</h4>
            <div class="contact-meta">
              <div><span class="label">France Office Address:</span>
                77 BD Sakakini 13005 Marseille, France
              </div>
              <div style="margin-top:8px;" class="contact-phone">
                <span class="label">Phone:</span>
                <a href="tel:+33751157676">+33 (0)7 51 15 76 76</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Column 2 -->
    <div class="col-sm-12 col-md-12">
      <div class="contact-card">
        <div class="contact-row">
          <!--<div class="contact-icon">👤</div>-->
          <div>
            <h4>Mohammad Shahreyar Islam</h4>
            <div class="contact-meta">
              <div><span class="label">Phone:</span>
                <a href="tel:+33659345705">+33 6 59 34 57 05</a>
              </div>
              <!-- Add more info here if you want -->
            </div>
          </div>
        </div>
      </div>
    </div>

   

  </div> <!-- /.row -->
</div> <!-- /.container -->

    
    
    
    <div class="container">
       
        <div class="contact-form">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-info">
                        <h3>Send Messege</h3>
                        <p>Feel Free To Contact Us</p>
                        @if(Session::has('success'))
                        <div class="alert alert-success alert-dismissable">
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                            <strong>Success! </strong> {{Session::get('success')}}.
                        </div>
                        @endif
                        <form action="{{route('contactMail')}}" id="contactForm" method="post">
                            @csrf
                            <div class="form-group form-group-section">
                                @if ($errors->has('name'))
                                <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('name') }}</p>
                                @endif
                                <input type="name" name="name" value="" class="form-control control-section" placeholder="Enter Name" required="" />
                            </div>
                            <!-- <span class="required">This field is required</span> -->
                            <div class="form-group form-group-section">
                                @if ($errors->has('email'))
                                <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('email') }}</p>
                                @endif
                                <input type="email" name="email" value="" class="form-control control-section" placeholder="Email Address" required="" />
                            </div>
                            <div class="form-group form-group-section">
                                @if ($errors->has('phone'))
                                <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('phone') }}</p>
                                @endif
                                <input type="phone" name="phone" value="" class="form-control control-section" placeholder="Phone Number" required="" />
                            </div>
                            <div class="form-group form-group-section">
                                @if ($errors->has('subject'))
                                <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('subject') }}</p>
                                @endif
                                <input type="subject" name="subject" value="" class="form-control control-section" placeholder="Subject" required="" />
                            </div>
                            <div class="form-group form-group-section">
                                @if ($errors->has('message'))
                                <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('message') }}</p>
                                @endif
                                <textarea name="message" rows="5" value="" class="form-control control-section" placeholder="Write Your Massege" required=""></textarea>
                            </div>
                            <!--<div>-->

                            <!--    <button class="g-recaptcha btn submitbutton" -->
                            <!--    data-sitekey="6LdTLTkrAAAAADMlQDwpl77bDA5tYg68ff5iv6Fx" -->
                            <!--    data-callback='onSubmit' -->
                            <!--    data-action='submit'>Submit</button>-->
                            <!--</div>-->
                            <div>

                                <button class=" btn submitbutton" 
                                type="submit"
                                >
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-4">
            
                    <div class="website-info">
                        <div class="media">
                            <i class="fa fa-map-signs" aria-hidden="true"></i>
                            <div class="media-body">
                                <h4>Jiaur Rahman</h4>
                                <h5>Bangladesh Office Address</h5>
                                <p>{{general()->address_one}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="website-info">
                        <div class="media">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <div class="media-body">
                                <h5>Email Address</h5>
                                <p> {{general()->email}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="website-info">
                        <div class="media">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <div class="media-body">
                                <h5>Phone Numbers</h5>
                                <p>{{general()->mobile}}</p>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- <div class="row">-->
        <!--    <div class="col-md-12">-->
        <!--        <div class="sitemap">-->
        <!--            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29186.92021831534!2d90.35768830596885!3d23.876671472592303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c5d05e7074dd%3A0xd1c58803049f00c7!2sUttara%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1699677238195!5m2!1sen!2sbd" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        
    </div>
</div>--}}










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



<div class="page-section" id="page-contact">
  <div class="inner-hero">
    <div class="container">
      <div class="section-label">Get In Touch</div>
      <h1 class="inner-hero-title">Start Your Engagement<br><span>in Bangladesh</span></h1>
      <p>MARINE Square welcomes collaboration with international OEMs, service providers, and technical partners seeking to engage with Bangladesh's naval and maritime sector.</p>
    </div>
  </div>


<div class="container" style="padding:20px 0px">
    <div class="contact-grid">

      <!-- Contact Info -->
      <div class="contact-info">
        <h4><i class="fas fa-map-marker-alt me-2"></i> Head Office</h4>
        <div class="info-item">
          <i class="fas fa-building"></i>
          <p>58 Golden Plaza (1st Floor)<br>Rasulbag, Shaheed Tajuddin Sharani<br>Mahakhali, Dhaka – 1212, Bangladesh</p>
        </div>

        <h4 style="margin-top:28px"><i class="fas fa-phone me-2"></i> Contact Details</h4>
        <div class="info-item">
          <i class="fas fa-mobile-alt"></i>
          <p><a href="tel:+8801819146112">+880 1819 146112</a></p>
        </div>
        <div class="info-item">
          <i class="fas fa-phone"></i>
          <p><a href="tel:+880258070486">+880 258070486</a></p>
        </div>
        <div class="info-item">
          <i class="fas fa-envelope"></i>
          <p><a href="mailto:info@marine-square.com">info@marine-square.com</a></p>
        </div>
        <div class="info-item">
          <i class="fas fa-envelope-open-text"></i>
          <p><a href="mailto:zamshed.ali@marine-square.com">zamshed.ali@marine-square.com</a></p>
        </div>
        <div class="info-item">
          <i class="fas fa-globe"></i>
          <p><a href="http://www.marine-square.com">www.marine-square.com</a></p>
        </div>

        <h4 style="margin-top:28px"><i class="fas fa-map me-2"></i> Branch Office</h4>
        <div class="info-item">
          <i class="fas fa-map-marker-alt"></i>
          <p>House 579/A-2 (Parabar), Road 9<br>DOHS Mirpur, Dhaka – 1216, Bangladesh</p>
        </div>

        <!-- Officer Card -->
        <div class="officer-card">
          <div class="officer-avatar"><i class="fas fa-user-tie"></i></div>
          <div>
            <h5>Capt. Zamshed Ali (Retd.)</h5>
            <p>Chief Executive Officer</p>
            <span>MARINE Square</span>
          </div>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="contact-form-area">
        <div class="section-label">Send a Message</div>
        
          @if(Session::has('success'))
            <div class="alert alert-success alert-dismissable" style="font-size: 12px;">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <strong>Success! </strong> {{Session::get('success')}}.
            </div>
            @endif
        
        
        <div class="section-divider"></div>

        <div id="form-success" style="display:none;background:rgba(15,140,140,0.1);border:1.5px solid var(--teal);border-radius:4px;padding:20px;margin-bottom:24px">
          <p style="color:var(--teal);font-weight:600;margin:0"><i class="fas fa-check-circle me-2"></i> Thank you for your message. We will be in touch shortly.</p>
        </div>
        
        <form action="{{route('contactMail')}}" id="contactForm" method="post">
              @csrf
                <label for="cf-name">Full Name</label>
                <input type="text" name="name" value="" id="cf-name" placeholder="Your full name" />
                 @if ($errors->has('name'))
                <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('name') }}</p>
                @endif
        
          
                <label for="cf-email">Email Address</label>
                <input type="email" name="email" value="" id="cf-email" placeholder="your@email.com" />
                 @if ($errors->has('email'))
                <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('email') }}</p>
                @endif
        
                <label for="cf-phone">Phone Number</label>
                <input type="number" name="phone" value="" id="cf-phone" placeholder="+1 234 567 8900" />
                  @if ($errors->has('phone'))
                <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('phone') }}</p>
                @endif
        
                <label for="cf-org">Subject</label>
                <input type="text" name="subject" value="" id="cf-org" placeholder="Subject" />
                @if ($errors->has('subject'))
                <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('subject') }}</p>
                @endif
        
        
                <label for="cf-message">Message</label>
                <textarea id="cf-message" name="message" value="" placeholder="Describe your capability, requirements, or inquiry..."></textarea>
                 @if ($errors->has('message'))
                <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('message') }}</p>
                @endif
        
                <button class="btn-gold" type="submit" style="width:100%;justify-content:center">
                  <i class="fas fa-paper-plane"></i> Send Message
                </button>
        </form>

    
      </div>

    </div>
  </div>

</div><!-- END CONTACT -->









@endsection 

@push('js') 
 <script src="https://www.google.com/recaptcha/api.js"></script>
 
  <script>
   function onSubmit(token) {
       var recaptchaInput = document.createElement('input');
        recaptchaInput.type = 'hidden';
        recaptchaInput.name = 'recaptchaToken';
        recaptchaInput.value = token;
        document.getElementById("contactForm").appendChild(recaptchaInput);
     document.getElementById("contactForm").submit();
   }
 </script>
 
@endpush


