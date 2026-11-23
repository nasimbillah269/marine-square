@if($slider =slider('Front Page Slider'))

{{--<div id="homeSlider" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
  	@foreach($slider->subSliders as $i=>$slider)
    <div class="carousel-item {{$i==0?'active':''}}">
	    <img style="width:100%;" src="{{asset($slider->image())}}" alt="{{$slider->name}}" title="{{$slider->name}}" />
        <div class="carousel-caption d-none d-md-block">
         @if($slider->name)  
          <h1>{!!$slider->name!!}</h1>
          @endif
          @if($slider->description)
          <p>{!!$slider->description!!}</p>
          @endif
       
          @if($slider->seo_title && $slider->seo_description)
          <a href="{{$slider->seo_description}}" class="btn btn-sm btn-success">{!!$slider->seo_title!!}</a>
          @endif
        </div>
    </div>
	@endforeach
	<!--<div class="sliderLink">-->
	<!--    <a href="https://wa.me/971569618671" class="whatsApp" target="_blank">Whatsapp Now</a>-->
	<!--    <a href="https://www.kiswah-ash.com/contact" style="background-color: #fff; color: #000">Contact Us</a>-->
	<!--</div>-->
  </div>
  <a class="carousel-control-prev" href="#homeSlider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#homeSlider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>--}}





<section class="hero-banner">
    
        <div class="floating-shapes">
            <div class="shape shape1"></div>
            <div class="shape shape2"></div>
            <div class="shape shape3"></div>
        </div>
        
        <div class="container hero-content">
            <div class="row align-items-center">
                <!-- First Column: Title, Description, Buttons -->
                <div class="col-lg-6 col-md-12">
                    <h1 class="hero-title">Premium Garments Manufacturer, Wholesaler & Trader</h1>
                    <p class="hero-description">
                      Source Tex BD, is a full serviced apparel sourcing and exporting company,
                        specialized in high quality knit, Sweater and woven garments.
                    </p>
                    <div class="hero-buttons">
                        <a href="#" class="btn-hero btn-primary-hero">
                            <i class="fas fa-phone me-2"></i>Contact Us
                        </a>
                        <a href="#" class="btn-hero btn-outline-hero">
                            <i class="fas fa-compass me-2"></i>Explore Us
                        </a>
                    </div>
                   
                </div>
                
                <!-- Second Column: 3 Images in a Row -->
                <div class="col-lg-6 col-md-12 hero-images">
                    <img src="{{asset(assetLink().'/images/kiswah/New Project (2).webp')}}" alt="about">
                </div>
            </div>
        </div>
    </section>










@endif