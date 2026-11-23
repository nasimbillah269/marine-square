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



 
<div class="aboutUsPageMain">
    <div class="aboutCompany">
    <div class="container">
        
        <div class="row">
            <div class="col-md-6">
                <div class="aboutCompanyImage">
                   <img src="{{asset(assetLink().'/images/kiswah/New Project (2).webp')}}" alt="about">
                </div>
            </div>
            <div class="col-md-6">
                <div class="aboutRights">
                    <!--<h2>The strengths of Bangladesh's garment manufacturing sector.</h2>-->
                    <h3>ABOUT US</h3>
                    <h5>
                        Source Tex BD, is a full serviced apparel sourcing and exporting company,
                        specialized in high quality knit, Sweater and woven garments.
                    </h5>
                    <p>
                      We are sourcing and exporting goods for some brand companies, such as: Dickies, Lotus
                        Scrubs, Haggar, Northcrest, Alcott, Dollar General, Wal-Mart, Salsa Life, UBS2, & U
                        Collection etc. Our product mainly categorized in following: Men's, Boy's, Kids, Girls, and
                        Women's Tee shirt & Polo shirt with screen prints, Fleece/French Terry /Thermal tops,
                        bottoms, Men's, Boy's, Kids, Girls, and Women's Woven - Tops & Bottoms, Men's, boys,
                        Women, Girls and Kids Sweater - (all type of cardigan, pullover). Our head office is located in
                        Bangladesh.
                    </p>
                   
                    <a href="https://sourcetexbd.com/sub/about" class="readMore">Read More</a>
               
                </div>
            </div>
        </div>
    </div>
</div>
</div>

 <div class="missionVissionDiv">
     <div class="container">
         <div class="row">
             <div class="col-md-6">
                 <div class="missionVBox" style="background: #000;  color: #fff">
                     <h2> Vision:</h2>
                     <p>
                       Our vision is to be a global leader in the garment manufacturing, Readymade Garments and textiles wholesale industry, renowned for delivering innovative, high-quality clothing and fabrics that enhances lives and sets trends. We aim to create a sustainable future by blending traditional craftsmanship with modern design, empowering individuals and businesses alike with stylish, comfortable, and durable fashion. Through continuous innovation, ethical practices, and customer-centric solutions, we aspire to be the trusted partner for all garment needs, shaping the future of fashion one piece at a time.
                     </p>
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="missionVBox" style="background-color: #fff;">
                     <h2> Mission:</h2>
                     <p>
                        Our mission is to deliver exceptional quality, stylish, and affordable ready-made garments and fabrics to customers worldwide. We are 
                        committed to maintaining the highest standards of craftsmanship, using sustainable materials and ethical manufacturing processes and business ethics.
                        By fostering a culture of innovation and collaboration, we aim to exceed customer expectations, build long-term partnerships, and contribute positively 
                        to the communities we serve. Our goal is to inspire confidence and satisfaction with every garment we create, every fabric we deliver, offering both 
                        fashion-forward designs and timeless comfort for every occasion.
                     </p>
                 </div>
             </div>
         </div>
     </div>
 </div>


 {{--<div id="service" class="ourServiceMain">
     <div class="container">
        <h2 class="sectionTitle">WHY CHOOSE KISWAH</h2>
        </h1>
         <div class="row">
             <div class="col-md-4">
                 <div class="ourSeriveGrid">
                       <img src="{{ asset(assetLink().'/images/kiswah/11.png') }}" alt="service icon">
                      <div class="ourServiceGridTitle">
                        <h4>7+ years of industry experience</h4>
                    </div>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="ourSeriveGrid">
                      <img src="{{ asset(assetLink().'/images/kiswah/12.png') }}" alt="service icon">
                      <div class="ourServiceGridTitle">
                         <h4>Dedicated client service teams</h4>
                     </div>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="ourSeriveGrid">
                      <img src="{{ asset(assetLink().'/images/kiswah/13.png') }}" alt="service icon">
                     <div class="ourServiceGridTitle">
                          <h4>Creative and customized brand solutions</h4>
                     </div>
                 </div>
             </div>
                <div class="col-md-4">
                 <div class="ourSeriveGrid">
                      <img src="{{ asset(assetLink().'/images/kiswah/14.png') }}" alt="service icon">
                     <div class="ourServiceGridTitle">
                          <h4>In-house production capabilities for  quality control</h4>
                     </div>
                 </div>
             </div>
                <div class="col-md-4">
                 <div class="ourSeriveGrid">
                      <img src="{{ asset(assetLink().'/images/kiswah/15.png') }}" alt="service icon">
                     <div class="ourServiceGridTitle">
                          <h4>Competitive pricing and consistent delivery</h4>
                     </div>
                 </div>
             </div>
        
         
          
             </div>
            
         </div>
     </div>
 </div>--}}
 
 {{--<div id="service" class="ourServiceMain homeService">
     <div class="container">
        <h2 class="sectionTitle">SERVICES & CAPABILITIES </h2>
        </h1>
         <div class="row">
                 <div class="col-md-4">
                     <div class="homeServiceBox">
                           <img src="{{ asset(assetLink().'/images/kiswah/16.png') }}" alt="service icon">
                          <h4>Garment manufacturing </h4>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="homeServiceBox">
                           <img src="{{ asset(assetLink().'/images/kiswah/17.png') }}" alt="service icon">
                          <h4>Custom embroidery</h4>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="homeServiceBox">
                           <img src="{{ asset(assetLink().'/images/kiswah/18.png') }}" alt="service icon">
                          <h4>Stitching & finishing</h4>
                         
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="homeServiceBox">
                           <img src="{{ asset(assetLink().'/images/kiswah/19.png') }}" alt="service icon">
                          <h4>In-house design and consultation</h4>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="homeServiceBox">
                           <img src="{{ asset(assetLink().'/images/kiswah/20.png') }}" alt="service icon">
                          <h4>High-volume order handling</h4>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="homeServiceBox">
                           <img src="{{ asset(assetLink().'/images/kiswah/21.png') }}" alt="service icon">
                          <h4>Textile Trading </h4>
                     </div>
                 </div>
            
             </div>
         <div class="row">
                 <div class="col-md-4">
                     <div class="homeServiceBox">
                           <img src="{{ asset(assetLink().'/images/kiswah/service/s1.png') }}" alt="service icon">
                          <h4>FABRIC WHOLESALE </h4>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="homeServiceBox">
                           <img src="{{ asset(assetLink().'/images/kiswah/service/s2.png') }}" alt="service icon">
                          <h4>CUSTOM GARMENT MANUFACTURING</h4>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="homeServiceBox">
                           <img src="{{ asset(assetLink().'/images/kiswah/service/s3.png') }}" alt="service icon">
                          <h4>UNIFORM PRODUCTION</h4>
                         
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="homeServiceBox">
                           <img src="{{ asset(assetLink().'/images/kiswah/service/s4.png') }}" alt="service icon">
                          <h4>PRIVATE LABEL CLOTHING PRODUCTION</h4>

                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="homeServiceBox">
                           <img src="{{ asset(assetLink().'/images/kiswah/service/s5.png') }}" alt="service icon">
                          <h4>OUTERWEAR & WORKWEAR PRODUCTION</h4>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="homeServiceBox">
                           <img src="{{ asset(assetLink().'/images/kiswah/service/s6.png') }}" alt="service icon">
                          <h4>READYMADE GARMENTS WHOLESALE SUPLY </h4>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="homeServiceBox">
                           <img src="{{ asset(assetLink().'/images/kiswah/service/s7.png') }}" alt="service icon">
                          <h4>CUSTOM EMBROIDERY SERVICES </h4>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="homeServiceBox">
                           <img src="{{ asset(assetLink().'/images/kiswah/service/s8.png') }}" alt="service icon">
                          <h4>FASHION APPAREL DESIGN SERVICES </h4>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="homeServiceBox">
                           <img src="{{ asset(assetLink().'/images/kiswah/service/s9.png') }}" alt="service icon">
                          <h4>HIGH VOLUME ORDER MANAGEMENT</h4>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="homeServiceBox">
                           <img src="{{ asset(assetLink().'/images/kiswah/service/s10.png') }}" alt="service icon">
                          <h4>LOGISTICS & DELIVERY SOLUTIONS </h4>
                     </div>
                 </div>
            
             </div>
            
         </div>
     </div>
 </div>--}}
 

 
 
 <div class="homeProductCategory">
      <div class="container">
        <h2 class="sectionTitle">PRODUCT CATEGORIES</h2>
        
        <div class="row">
            <!-- Corporate Uniform -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a href="https://sourcetexbd.com/mens-collection" class="category-card">
                    <div class="card-image">
                        <i class="fas fa-male card-icon"></i>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Men's Collection</h3>
                    </div>
                </a>
            </div>

            <!-- Industrial Uniform -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a href="https://sourcetexbd.com/womens-collection" class="category-card">
                    <div class="card-image">
                         <i class="fas fa-female card-icon"></i>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Women's Collection</h3>
                    </div>
                </a>
            </div>

            <!-- School Uniform -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a href="https://sourcetexbd.com/sweaters" class="category-card">
                    <div class="card-image">
                         <i class="fas fa-tshirt card-icon"></i>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Sweaters</h3>
                    </div>
                </a>
            </div>

            <!-- Hospital Uniform -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a href="https://sourcetexbd.com/kids-item" class="category-card">
                    <div class="card-image">
                        <i class="fas fa-user-md card-icon"></i>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Kids Item</h3>
                    </div>
                </a>
            </div>

            <!-- Hotel & Catering Uniform -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a href="https://sourcetexbd.com/kids-children" class="category-card">
                    <div class="card-image">
                        <i class="fas fa-concierge-bell card-icon"></i>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Kids & children </h3>
                    </div>
                </a>
            </div>

            <!-- Sports Uniforms -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a href="https://sourcetexbd.com/ladies-sweater" class="category-card">
                    <div class="card-image">
                        <i class="fas fa-running card-icon"></i>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Ladies Sweater</h3>
                    </div>
                </a>
            </div>

            <!-- Shirts, T-shirts & Polo Shirts -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a href="https://sourcetexbd.com/mens-sweater" class="category-card">
                    <div class="card-image">
                       <i class="fas fa-graduation-cap card-icon"></i>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Men's Sweater</h3>
                    </div>
                </a>
            </div>

            <!-- Pants, Trousers, Joggers, Shorts & Cargo Pant -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a href="https://sourcetexbd.com/mixed-items" class="category-card">
                    <div class="card-image">
                        <i class="fas fa-cut card-icon"></i>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Mixed Items</h3>
                    </div>
                </a>
            </div>

         

          
        </div>
    </div>
 </div>
 
 {{--<div class="qualityInsuranc">
     <div class="container">
         <h2 class="sectionTitle">QUALITY ASSURANCE</h2>
         <p class="qualityDescription">
             Quality assurance (QA) at KISWAH focuses on ensuring that all products meet high standards of
            craftsmanship, durability, and design. The QA process includes rigorous inspection at every stage of
            production, from fabric selection to final garment finishing. By employing both manual and automated
            testing methods, KISWAH ensures consistency, proper stitching, color accuracy, and the overall
            functionality of each garment, guaranteeing customer satisfaction and brand reliability.
         </p>
         <div class="row">
             <div class="col-md-3">
                 <div class="qualityInsurancGrid">
                     <div class="arrow arrow-right"> Step-1</div>
                     <p>Use of industrialgrade machinery
                        grade</p>
                 </div>
             </div>
             <div class="col-md-3">
                 <div class="qualityInsurancGrid">
                     <div class="arrow arrow-right"> Step-2</div>
                     <p>Detailed finishing
                        and inspections
                        </p>
                 </div>
             </div>
             <div class="col-md-3">
                 <div class="qualityInsurancGrid">
                     <div class="arrow arrow-right"> Step-3</div>
                     <p>Consistent fabric
                        and thread quality
                        quality</p>
                 </div>
             </div>
             <div class="col-md-3">
                 <div class="qualityInsurancGrid">
                     <div class="arrow arrow-right"> Step-4</div>
                     <p>Experienced
                        technicians and
                        operators</p>
                 </div>
             </div>
         </div>
     </div>
 </div>--}}
 
  
 {{--<div class="productionFacilities">
     <div class="container">
             <h2 class="sectionTitle">Production Facilities</h2>
         <div class="row">
             <div class="row">
                    <div class="col-md-6">
                     <div class="productfacilitiesGrid">
                          <img src="{{ asset(assetLink().'/images/kiswah/ps/ps3.webp') }}" alt="service icon">
                         <p>Overview of Factory (8,100 sq. ft. + 540 sq. ft. showroom)</p>
                     </div>
                 </div>
                 
                 <div class="col-md-6">
                     <div class="productfacilitiesGrid">
                          <img src="{{ asset(assetLink().'/images/kiswah/ps/ps4.webp') }}" alt="service icon">
                         <p>Machinery & Equipment (Embroidery, Overlock, Flatlock, etc.)</p>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="productfacilitiesGrid">
                          <img src="{{ asset(assetLink().'/images/kiswah/ps/ps1.webp') }}" alt="service icon">
                         <p>Workforce (25 skilled staff)</p>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="productfacilitiesGrid">
                          <img src="{{ asset(assetLink().'/images/kiswah/ps/ps2.webp') }}" alt="service icon">
                         <p>Daily Capacity (1,200 - 1,500 pieces)</p>
                     </div>
                 </div>
              
             </div>
         </div>
     </div>
 </div>--}}
 
 
{{--<div class="homeProductSection ">
     <div class="container">
         <h2>Our Products</h2>
         <div class="row">
             <div class="col-md-12">
                 <h4>Product Gallery of CORPORATE UNIFORM</h4>
                 <div class="homeProductBox">
                      <div class="outware-sldier">
                             <div class="slick-box">
                                <div class="homeProductGrid">
                                      <img src="{{ asset(assetLink().'/images/cor/New Project (1).webp') }}" alt="service icon">
                                </div>
                            </div>
                            <div class="slick-box">
                                <div class="homeProductGrid">
                                      <img src="{{ asset(assetLink().'/images/cor/New Project (2).webp') }}" alt="service icon">
                                </div>
                            </div>
                            <div class="slick-box">
                                <div class="homeProductGrid">
                                      <img src="{{ asset(assetLink().'/images/cor/New Project (3).webp') }}" alt="service icon">
                                </div>
                            </div>
                            <div class="slick-box">
                                <div class="homeProductGrid">
                                      <img src="{{ asset(assetLink().'/images/cor/New Project (4).webp') }}" alt="service icon">
                                </div>
                            </div>
                            <div class="slick-box">
                                <div class="homeProductGrid">
                                      <img src="{{ asset(assetLink().'/images/cor/New Project (5).webp') }}" alt="service icon">
                                </div>
                            </div>
                            
                        
                           
                        </div>
                 </div>
                <div class="viewAllLink">
                 <a href="https://www.kiswah-ash.com/corporate-uniform">View All</a>
             </div>
             </div>
             
             <div class="col-md-12">
                 <h4>Product Gallery of INDUSTRIAL UNIFORM</h4>
                 <div class="homeProductBox">
                      <div class="suitBlazer-sldier">
                             <div class="slick-box">
                                <div class="homeProductGrid">
                                      <img src="{{ asset(assetLink().'/images/in/in1.webp') }}" alt="service icon">
                                </div>
                            </div>
                            <div class="slick-box">
                                <div class="homeProductGrid">
                                      <img src="{{ asset(assetLink().'/images/in/in2.webp') }}" alt="service icon">
                                </div>
                            </div>
                            <div class="slick-box">
                                <div class="homeProductGrid">
                                      <img src="{{ asset(assetLink().'/images/in/in6.webp') }}" alt="service icon">
                                </div>
                            </div>
                            <div class="slick-box">
                                <div class="homeProductGrid">
                                      <img src="{{ asset(assetLink().'/images/in/in7.webp') }}" alt="service icon">
                                </div>
                            </div>
                            <div class="slick-box">
                                <div class="homeProductGrid">
                                      <img src="{{ asset(assetLink().'/images/in/in8.webp') }}" alt="service icon">
                                </div>
                            </div>
                            
                        
                           
                        </div>
                 </div>
                <div class="viewAllLink">
                 <a href="https://www.kiswah-ash.com/industrial-uniform">View All</a>
             </div>
             </div>
             
             <div class="col-md-12">
                 <h4>Product Gallery of SCHOOL UNIFORM, GRADUATION GOWN & HAT</h4>
                 <div class="homeProductBox">
                      <div class="kints-sldier">
                            <div class="slick-box">
                                <div class="homeProductGrid">
                                      <img src="{{ asset(assetLink().'/images/sc/s1.webp') }}" alt="service icon">
                                </div>
                            </div>
                            <div class="slick-box">
                                <div class="homeProductGrid">
                                      <img src="{{ asset(assetLink().'/images/sc/s2.webp') }}" alt="service icon">
                                </div>
                            </div>
                            <div class="slick-box">
                                <div class="homeProductGrid">
                                    <img src="{{ asset(assetLink().'/images/sc/s3.webp') }}" alt="service icon">
                                </div>
                            </div>
                            <div class="slick-box">
                                <div class="homeProductGrid">
                                   <img src="{{ asset(assetLink().'/images/sc/s4.webp') }}" alt="service icon">
                                </div>
                            </div>
                               <div class="slick-box">
                                <div class="homeProductGrid">
                                    <img src="{{ asset(assetLink().'/images/sc/s5.webp') }}" alt="service icon">
                                </div>
                            </div>
                        </div>
                 </div>
                <div class="viewAllLink">
                 <a href="https://www.kiswah-ash.com/school-graduation-uniform">View All</a>
             </div>
             </div>
             
             <div class="col-md-12">
                <h4>Product Gallery of HOSPITAL UNIFORM</h4>
                 <div class="homeProductBox">
                      <div class="wovent-sldier">
                            <div class="slick-box">
                                <div class="homeProductGrid">
                                       <img src="{{ asset(assetLink().'/images/ho/ho1.webp') }}" alt="service icon">
                                </div>
                            </div>
                            <div class="slick-box">
                                <div class="homeProductGrid">
                                      <img src="{{ asset(assetLink().'/images/ho/ho2.webp') }}" alt="service icon">
                                </div>
                            </div>
                            <div class="slick-box">
                                <div class="homeProductGrid">
                                    <img src="{{ asset(assetLink().'/images/ho/ho3.webp') }}" alt="service icon">
                                </div>
                            </div>
                            <div class="slick-box">
                                <div class="homeProductGrid">
                                  <img src="{{ asset(assetLink().'/images/ho/ho4.webp') }}" alt="service icon">
                                </div>
                            </div>
                            <div class="slick-box">
                                <div class="homeProductGrid">
                                  <img src="{{ asset(assetLink().'/images/ho/ho5.webp') }}" alt="service icon">
                                </div>
                            </div>
                        </div>
                 </div>
                <div class="viewAllLink">
                 <a href="https://www.kiswah-ash.com/hospital-uniform">View All</a>
             </div>
             </div>
             
             <div class="col-md-12">
                  <h4>Product Gallery of HOTEL & CATERING UNIFORM</h4>
                 <div class="homeProductBox">
                      <div class="denim-sldier">
                            <div class="slick-box">
                                <div class="homeProductGrid">
                                       <img src="{{ asset(assetLink().'/images/hoca/hoca1.webp') }}" alt="service icon">
                                </div>
                            </div>
                            <div class="slick-box">
                                <div class="homeProductGrid">
                                       <img src="{{ asset(assetLink().'/images/hoca/hoca2.webp') }}" alt="service icon">
                                </div>
                            </div>
                            <div class="slick-box">
                                <div class="homeProductGrid">
                                   <img src="{{ asset(assetLink().'/images/hoca/hoca3.webp') }}" alt="service icon">
                                </div>
                            </div>
                            <div class="slick-box">
                                <div class="homeProductGrid">
                                  <img src="{{ asset(assetLink().'/images/hoca/hoca4.webp') }}" alt="service icon">
                                </div>
                            </div>
                            <div class="slick-box">
                                <div class="homeProductGrid">
                                  <img src="{{ asset(assetLink().'/images/hoca/hoca5.webp') }}" alt="service icon">
                                </div>
                            </div>
                        </div>
                 </div>
                <div class="viewAllLink">
                <a href="https://www.kiswah-ash.com/hotel-catering-uniform">View All</a>
             </div>
             </div>
         </div>
         
     </div>
 </div>--}}
 
 <div class="homeProductSection">
     <div class="container">
         <h4>Knits</h4>
         <div class="row">
         <div class="col-md-3">
             <div class="homeProductBox">
                 
                 <img src="{{ asset(assetLink().'/images/asmara/New Project (4).png') }}" alt="service icon">
             </div>
         </div>
         <div class="col-md-3">
             <div class="homeProductBox">
                 <img src="{{ asset(assetLink().'/images/asmara/kint.png') }}" alt="service icon">
             </div>
         </div>
         <div class="col-md-3">
             <div class="homeProductBox">
                 <img src="{{ asset(assetLink().'/images/asmara/kint1.png') }}" alt="service icon">
             </div>
         </div>
         <div class="col-md-3">
             <div class="homeProductBox">
                 <img src="{{ asset(assetLink().'/images/asmara/kint2.png') }}" alt="service icon">
             </div>
         </div>
         </div>
         <div class="viewAllLink">
             <a href="#">View All</a>
         </div>
     </div>
 </div>
 
<div class="homeProductSection">
     <div class="container">
         <h4>Woven</h4>
         <div class="row">
         <div class="col-md-3">
             <div class="homeProductBox">
                 <img src="{{ asset(assetLink().'/images/asmara/weven1.png') }}" alt="service icon">
             </div>
         </div>
         <div class="col-md-3">
             <div class="homeProductBox">
                 <img src="{{ asset(assetLink().'/images/asmara/weven2.png') }}" alt="service icon">
             </div>
         </div>
         <div class="col-md-3">
             <div class="homeProductBox">
                 <img src="{{ asset(assetLink().'/images/asmara/weven3.png') }}" alt="service icon">
             </div>
         </div>
         <div class="col-md-3">
             <div class="homeProductBox">
                 <img src="{{ asset(assetLink().'/images/asmara/weven4.png') }}" alt="service icon">
             </div>
         </div>
         </div>
         <div class="viewAllLink">
             <a href="#">View All</a>
         </div>
     </div>
 </div>
 
<div class="homeProductSection">
     <div class="container">
         <h4>Denim</h4>
         <div class="row">
         <div class="col-md-3">
             <div class="homeProductBox">
                 <img src="{{ asset(assetLink().'/images/asmara/denim1.png') }}" alt="service icon">
             </div>
         </div>
         <div class="col-md-3">
             <div class="homeProductBox">
                 <img src="{{ asset(assetLink().'/images/asmara/denim2.png') }}" alt="service icon">
             </div>
         </div>
         <div class="col-md-3">
             <div class="homeProductBox">
                 <img src="{{ asset(assetLink().'/images/asmara/denim3.png') }}" alt="service icon">
             </div>
         </div>
         <div class="col-md-3">
             <div class="homeProductBox">
                 <img src="{{ asset(assetLink().'/images/asmara/denim4.png') }}" alt="service icon">
                 <!--<img src="{{ asset(assetLink().'/images/asmara/no.jpg') }}" alt="service icon">-->
             </div>
         </div>
         </div>
         <div class="viewAllLink">
             <a href="#">View All</a>
         </div>
     </div>
 </div>
 
 
 <section class="timeline-section py-5">
  <div class="container">
    <h2 class="text-center mb-5">📦 Work Process</h2>
    <div class="row timeline">
      <div class="col-md-2 step">
         <div class="arrow arrow-right"> Step-1</div>
        <p>Requirement
            gathering and
            design
            consultation
        </p>
      </div>
      <div class="col-md-2 step">
        <div class="arrow arrow-right"> Step-2</div>
        <p>Sample approval</p>
      </div>
      <div class="col-md-2 step">
        <div class="arrow arrow-right"> Step-3</div>
        <p>Material
            sourcing and
            cutting
        </p>
      </div>
      <div class="col-md-2 step">
         <div class="arrow arrow-right"> Step-4</div>
        <p>Production
        and quality
        inspection
        </p>
      </div>
      <div class="col-md-2 step">
           <div class="arrow arrow-right"> Step-5</div>
        <!--<div class="circle">5</div>-->
        <p>Delivery and
        post-delivery
        support</p>
      </div>
    </div>
  </div>
</section>

 
{{-- <div id="design" class="peopleAndDesignPart">
     <div class="peoplePart">
          <img src="{{ asset(assetLink().'/images/asmara/ppl_image-1.jpg') }}" alt="service icon">
          <div class="peopleCotent">
                   <h3> the </h3>
                 <div class="peopleTitle">
                      <h2> <b>people</b> </h2>
                      <button data-url="{{ asset(assetLink().'/images/asmara/asmara-thepeople.pdf') }}" class="plus-button"><span>+</span></button>
                  </div>
              <p>People with good vibes and impressive know-how. They know what to do and share their</p>
              <p>ideas and solutions with customers, as well as internally via the specially created asmara</p>
              <p style="display: inline-block;">knowledge bank.</p>
          </div>
     </div>
     <div class="peoplePart">
          <img src="{{ asset(assetLink().'/images/asmara/design_bg.jpg') }}" alt="service icon">
          <div class="peopleCotent designContent">
                   <h3> focus </h3>
                 <div class="peopleTitle">
                      <h2> <b>design</b> </h2>
                      <button data-url="{{ asset(assetLink().'/images/asmara/asmara-focus_design.pdf') }}" class="plus-button"><span>+</span></button>
                  </div>
              <p>One of our greatest strengths. We offer market intelligence, a diverse in-house</p>
              <p>design community with teams in every country, four in-house collections, a</p>
              <p>capsule collection made from fabric scraps, and CLO 3D for the sampling</p>
              <p style="display: inline-block;">service.</p>
          </div>
     </div>
 </div>--}}
 
 


 
 {{--<div id="sustainability" class="sustainability">
     <div class="container">
           <h3> sustainability </h3>
            <div class="peopleTitle" style="padding-bottom: 0;">
              <h2> <b>only</b> </h2>
              <button data-url="{{ asset(assetLink().'/images/asmara/asmara-sustainability_fabrics.pdf') }}" class="plus-button"><span>+</span></button>
            </div>
     </div>
     <ul class="sustainabilityList">
         <li>Laser treatment</li>
         <li>Regenerated and organic cotton</li>
        <li>We develop new fibers</li>
        <li>Customer presentations via 3D rendering</li>
        <li>Cradle to cradle</li>
        <li>Certified suppliers only</li>
        <li>Fabric from EU, production in EU</li>
        <li>Buttons made from plastic <br>from the sea</li>
        <li>Dyeing without water and chemicals</li>
     </ul>
      <div class="sustaImg">
             <img src="{{ asset(assetLink().'/images/asmara/3dsustainability-1500.jpg') }}" alt="sustainability image">
             <div class="derectionTitleMain" style="position: absolute; top: 26%;  left: 26%;">
                 <p>Laser treatment</p>
             </div>
             <div class="derectionTitleMain" style="position: absolute; top: 35%;  left: 17%;">
                 <p>Regenerated and organic cotton</p>
             </div>
             <div class="derectionTitleMain" style="position: absolute; top: 45%;  left: 24%;">
                 <p>We develop new fibers</p>
             </div>
             <div class="derectionTitleMain" style="position: absolute; top: 13%;  left: 56%;">
                 <p>Customer presentations via 3D <br> rendering</p>
             </div>
             <div class="derectionTitleMain" style="position: absolute; top: 26%;  left: 58%;">
                 <p>Cradle to cradle</p>
             </div>
             <div class="derectionTitleMain" style="position: absolute; top: 35%;  left: 62%;">
                 <p>Certified suppliers only</p>
             </div>
             <div class="derectionTitleMain" style="position: absolute; top: 44%;  left: 60%;">
                 <p>Fabric from EU, production in EU</p>
             </div>
             <div class="derectionTitleMain" style="position: absolute; top: 70%;  left: 66%;">
                 <p style="color: #fff">Buttons made from plastic <br>from the sea</p>
             </div>
             <div class="derectionTitleMain" style="position: absolute; top: 76%;  left: 64%;">
                 <p style="color: #fff">Dyeing without water and chemicals</p>
             </div>
         </div>
         <div class="sustaImgMobile">
              <img src="{{ asset(assetLink().'/images/asmara/sustainability_mobil-1.jpg') }}" alt="sustainability image">
         </div>
 </div>--}}
 

 
 
 {{--<div class="ourPartnar">
    <div class="container">
       
            <div class="partner-sldier">
                <div class="slick-box">
                    <div class="partnerBox">
                        <img src="{{asset(assetLink().'/images/asmara/logostring_3.png')}}" alt="line" >
                    </div>
                </div>
                <div class="slick-box">
                    <div class="partnerBox">
                        <img src="{{asset(assetLink().'/images/asmara/logostring_6.png')}}" alt="line" >
                    </div>
                </div>
               
            </div>
           
    </div>
   
</div>--}}
 
<!-- Modal -->
<div class="modal" id="pdfModal">
  <div class="modal-content">
    <span class="close-btn">&times;</span>
    <iframe id="pdfFrame" src=""></iframe>
  </div>
</div>


<!--about us section start-->
{{--<div class="aboutCompany">
    <div class="container">
        <div class="animate__animated animate__slideInUp">
             <h1>ABOUT US</h1>
            <div class="titleLine"></div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="aboutCompanyImage">
                    <div class="row">
                        <div class="col-md-12">
                            <img class="" src="{{asset(assetLink().'/images/almadina/about.jpg')}}" alt="about company">
                            <!--<div class="more">-->
                            <!--   <span style="font-size:35px;"> 2<span style="font-size: 30px;position: absolute;">+</span></span>-->
                            <!--    <p style="margin: 0;font-size: 24px;">Years Experience</p>-->
                            <!--</div>-->
                        </div>
                        <!--<div class="col-md-6 right">-->
                        <!--    <img class="animate__animated animate__zoomIn" src="{{asset(assetLink().'/images/our-company-2.png')}}" alt="about company">-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="aboutRight">
                    <h6>Who we are</h6>
                    <h5>Welcome to Al- Madina lnternational Travels BD</h5>
                    <p>
                        Welcome to Al-Madina International Travels B.D., your reliable companion for a truly fulfilling Umrah pilgrimage. 
                        Established in 2010 by Al- Madina lnternational Travels BD, we are dedicated to offering specialized Umrah packages from Bangladesh,
                        designed to provide every pilgrim with comprehensive care and attentive service throughout their sacred journey.
                        With our thoughtfully crafted itineraries and personalized support, we ensure a smooth, meaningful, and spiritually
                        enriching Umrah experience from start to finish.
                    </p>
                
             
                    
                    @if($page =pageTemplate('About Us'))
                        <a href="{{route('pageView',$page->slug?:'')}}" class="btn btn-primary">Know More</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>--}}
<!--about us section end-->

{{--<div class="moreAbout">
    <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="moreAboutLeft">
                 <h5>Welcome to Al- Madina lnternational Travels b.d</h5>
                 <p>
                     Al-Madina International Travels B.D. is a trusted name in the travel and tour industry, renowned for delivering 
                     exceptional service and expertly organized journeys. We proudly offer Umrah packages from Bangladesh that adhere to 
                     international standards, ensuring comfort, reliability, and spiritual enrichment for every pilgrim. Our comprehensive
                     packages are thoughtfully designed to cater to individuals from diverse backgrounds, whether it's your first pilgrimage
                     or a return visit. With a focus on excellence, convenience, and personalized support, 
                 </p>
                 <div class="row">
                     <div class="col-md-4 col-5">
                         <div class="aboutConuner">
                             <h4>80+</h4>
                             <p>Happy Traveler</p>
                         </div>
                     </div>
                     <div class="col-md-3 col-1">
                        
                     </div>
                     <div class="col-md-5 col-5">
                         <div class="aboutConuner">
                             <h4>95%</h4>
                             <p>Success traveler</p>
                         </div>
                     </div>
                     <div class="col-md-4 col-5">
                         <div class="aboutConuner">
                             <h4>4.9</h4>
                             <p>Rating Clients</p>
                         </div>
                     </div>
                     <div class="col-md-3 col-1">
                        
                     </div>
                     <div class="col-md-5 col-5">
                         <div class="aboutConuner">
                             <h4>5+</h4>
                             <p>Years of Experience</p>
                         </div>
                     </div>
                 </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="moreAboutRight">
                  <img class="" src="{{asset(assetLink().'/images/almadina/about2.jpg')}}" alt="about company">
            </div>
        </div>
    </div>
    </div>
</div>--}}

{{--<div class="whyChooseUs">
    <div class="container">
         <h1>Why Choose Us</h1>
         <div class="titleLine"></div>
         <div class="row">
             <div class="col-md-4">
                 <div class="whyChooseUsLeft">
                     <h4>Al- Madina lnternational Travels b.d</h4>
                     <p>
                         Choose Al-Madina International Travels B.D. as your trusted partner for a seamless and worry-free travel experience. 
                         We turn your travel aspirations into reality with a perfect blend of comfort, convenience, and dedicated care every step of the way.
                     </p>
                     <img class="" src="{{asset(assetLink().'/images/almadina/mecca.webp')}}" alt="about company">
                 </div>
             </div>
             <div class="col-md-8">
                 <div class="whyChoseUsRight">
                    <div class="row">
                     <div class="col-md-6">
                         <div class="whyChooseUsGrid">
                             <i class="fa-solid fa-handshake-angle"></i>
                             <h4>Expertise in Umrah Services</h4>
                             <p>
                               Al- Madina lnternational Travels BD ensures a smooth Umrah
                                 experience with professional guidance and well-coordinated services.
                             </p>
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="whyChooseUsGrid">
                             <i class="fa-solid fa-lock"></i>
                             <h4>Trusted by Pilgrims</h4>
                             <p>
                                 Al- Madina lnternational Travels BD is trusted by pilgrims for delivering reliable,
                                 enriching Umrah experiences, ensuring complete satisfaction.
                             </p>
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="whyChooseUsGrid">
                             <i class="fa-solid fa-money-bill"></i>
                             <h4>Affordable Pricing</h4>
                             <p>
                                Our Umrah packages are affordable with no hidden fees, 
                                offering great value while ensuring high-quality services.
                             </p>
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="whyChooseUsGrid">
                             <i class="fa-solid fa-clock-rotate-left"></i>
                             <h4>24/7 Support</h4>
                             <p>
                                Our team offers 24/7 support during your Umrah journey,
                                ensuring assistance whenever you need it for a peaceful trip.
                             </p>
                         </div>
                     </div>
                 </div>
                 </div>
             </div>
         </div>
    </div>
</div>--}}

{{--<div class="ourPackage">
    <div class="container">
         <h1>Our Package</h1>
         <div class="titleLine"></div>
        <div class="row">
            <div class="col-md-4">
                <div class="packgeGrid">
                    <img class="" src="{{asset(assetLink().'/images/almadina/packge.jpg')}}" alt="about company">
                    <h4>Package 1</h4>
                    <ul>
                        <li>
                            <i class="fa-solid fa-users"></i>
                            5-6 Persons Room Sharing
                        </li>
                        <li>
                            <i class="fa-solid fa-kaaba"></i>
                            Hotel Distance From Mecca 500 mtr
                        </li>
                        <li>
                            <i class="fa-solid fa-mosque"></i>
                            Hotel Distance From Madina 200 mtr
                        </li>
                        <li>
                            <i class="fa-solid fa-calendar-days"></i>
                            Duration 17 Days
                        </li>
                    </ul>
                    <div class="priceBox">
                        <h3>1,20,000 Tk/ <span>Person</span></h3>
                        <a href="tel:+880{{ general()->mobile }}">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="packgeGrid">
                    <img class="" src="{{asset(assetLink().'/images/almadina/packge2.webp')}}" alt="about company">
                    <h4>Package 2</h4>
                    <ul>
                        <li>
                            <i class="fa-solid fa-users"></i>
                            5-6 Persons Room Sharing
                        </li>
                        <li>
                            <i class="fa-solid fa-kaaba"></i>
                            Hotel Distance From Mecca 500 mtr
                        </li>
                        <li>
                            <i class="fa-solid fa-mosque"></i>
                            Hotel Distance From Madina 200 mtr
                        </li>
                        <li>
                            <i class="fa-solid fa-calendar-days"></i>
                            Duration 17 Days
                        </li>
                    </ul>
                    <div class="priceBox">
                        <h3>1,30,000 Tk/-  <span>Person</span></h3>
                        <a href="tel:+880{{ general()->mobile }}">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="packgeGrid">
                    <img class="" src="{{asset(assetLink().'/images/almadina/packge3.webp')}}" alt="about company">
                    <h4>Package 3</h4>
                    <ul>
                        <li>
                            <i class="fa-solid fa-users"></i>
                            5-6 Persons Room Sharing
                        </li>
                        <li>
                            <i class="fa-solid fa-kaaba"></i>
                            Hotel Distance From Mecca 500 mtr
                        </li>
                        <li>
                            <i class="fa-solid fa-mosque"></i>
                            Hotel Distance From Madina 200 mtr
                        </li>
                        <li>
                            <i class="fa-solid fa-calendar-days"></i>
                            Duration 17 Days
                        </li>
                    </ul>
                    <div class="priceBox">
                        <h3>1,40,000 Tk/-  <span>Person</span></h3>
                        <a href="tel:+880{{ general()->mobile }}">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>--}}

{{--<div class="vpPackgeBannerMain">
    <div class="vpBannerVg">
        <div class="vpBannerOverly">
            <div class="container">
                <div class="vpBannerContent">
                    <h2>Special Umrah Package for the Month of Ramadan</h2>
                    <h1> 1,80,000 Tk/-</h1>
                     <ul>
                        <li>
                            <i class="fa-solid fa-users"></i>
                            5-6 Persons Room Sharing
                        </li>
                            <li>
                                <i class="fa-solid fa-kaaba"></i>
                                Hotel Distance From Mecca 500 mtr
                            </li>
                            <li>
                                <i class="fa-solid fa-mosque"></i>
                                Hotel Distance From Madina 200 mtr
                            </li>
                            <li>
                                <i class="fa-solid fa-calendar-days"></i>
                                Duration 17 Days
                            </li>
                        </ul>
                  <div class="buyNowLick">
                        <a href="tel:+880{{ general()->mobile }}">Book Now</a>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>--}}

{{--<div class="testimonialMain">
    <div class="container">
        <h1>Testimonials (Satisfied Hajji)</h1>
        <div class="titleLine"></div>
        <div class="row">
            <div class="col-md-4">
                <div class="testimonialGrid">
                    <p>
                        Alhamdulillah, my family and I performed Umrah in August 2024 with <b>Al- Madina lnternational Travels b.d</b>, 
                        The service was exceptional, and he kept every promise. 
                        I am truly satisfied with Al Hera and pray for their continued success.
                    </p>
                    <h4>— MD Akbar Mondal , kolkata 147</h4>
                </div>
               
            </div>
            <div class="col-md-4">
                <div class="testimonialGrid">
                    <p>
                        Alhamdulillah, my family and I performed Umrah in August 2024 with <b>Al- Madina lnternational Travels b.d</b>, 
                        The service was exceptional, and he kept every promise. 
                        I am truly satisfied with Al Hera and pray for their continued success.
                    </p>
                    <h4>— MD Akbar Mondal , kolkata 147</h4>
                </div>
               
            </div>
            <div class="col-md-4">
                <div class="testimonialGrid">
                    <p>
                        Alhamdulillah, my family and I performed Umrah in August 2024 with <b>Al- Madina lnternational Travels b.d</b>, 
                        The service was exceptional, and he kept every promise. 
                        I am truly satisfied with Al Hera and pray for their continued success.
                    </p>
                    <h4>— MD Akbar Mondal , kolkata 147</h4>
                </div>
               
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="testiVideoGrid">
                    <iframe width="100%" height="220" src="https://www.youtube.com/embed/4B7hwTBYLOc?si=x4xUxEXbf0EBF3eP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testiVideoGrid">
                    <iframe width="100%" height="220" src="https://www.youtube.com/embed/4B7hwTBYLOc?si=x4xUxEXbf0EBF3eP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testiVideoGrid">
                    <iframe width="100%" height="220" src="https://www.youtube.com/embed/4B7hwTBYLOc?si=x4xUxEXbf0EBF3eP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>--}}

{{--<div class="faqmain">
    <div class="container">
        <h1>Frequently Asked Questions</h1>
          <div class="titleLine"></div>
        <div class="accordion">
    <div class="accordion-item">
        <div class="accordion-header">What is Umrah? <i class="fas fa-plus"></i></div>
        <div class="accordion-content">Umrah is a pilgrimage to Mecca that can be undertaken at any time of the year, unlike Hajj which has specific dates.</div>
    </div>
    <div class="accordion-item">
        <div class="accordion-header">How is Umrah different from Hajj? <i class="fas fa-plus"></i></div>
        <div class="accordion-content">Umrah is a shorter, non-mandatory pilgrimage with fewer rituals, while Hajj is obligatory for Muslims who are physically and financially able.</div>
    </div>
    <div class="accordion-item">
        <div class="accordion-header">Do I need a visa to perform Umrah? <i class="fas fa-plus"></i></div>
        <div class="accordion-content">Yes, most nationalities require a visa to enter Saudi Arabia for Umrah.</div>
    </div>
    <div class="accordion-item">
        <div class="accordion-header">What are the main rituals of Umrah? <i class="fas fa-plus"></i></div>
        <div class="accordion-content">The main rituals include Ihram, Tawaf, Sa’i, and shaving or cutting the hair.</div>
    </div>
    <div class="accordion-item">
        <div class="accordion-header">What is the best time to perform Umrah? <i class="fas fa-plus"></i></div>
        <div class="accordion-content">The best times are during Ramadan or the off-peak seasons for a less crowded experience.</div>
    </div>
</div>
    </div>
</div>--}}




<!--our service section end -->
{{--<div class="serviceFeatured">
    <div class="container">
        <h1>OUR SERVICES</h1>
        <div class="titleLine" style="background-color: #fff"></div>
        <div class="row" style="margin:0 -10px;">
            <div class="col-md-4" style="padding:10px;">
                <div class="featuredGrid animate__animated animate__slideInUp" style="background-image: url({{asset(assetLink().'/images/financial__item-bg.png')}});">
                    <img src="{{asset(assetLink().'/images/growth.svg')}}" alt="featured">
                     <h5>Factory Site Selection</h5>
                    <p>
                        Choosing the right site is critical for your factory's success. Our site selection process involves
                        detailed analysis, evaluating location logistics, infrastructure availability, regulatory compliance,
                        environmental impacts, labor availability, and future growth potential, ensuring your investment’s
                        long-term success.
                    </p>
                </div>
            </div>
            <div class="col-md-4" style="padding:10px;">
                <div class="featuredGrid animate__animated animate__slideInUp" style="background-image: url({{asset(assetLink().'/images/financial__item-bg.png')}});">
                    <img src="{{asset(assetLink().'/images/international.svg')}}" alt="featured">
                     <h5>Factory Layout & Process Design</h5>
                    <p>
                        Efficient factories start with intelligent design. FactoryBanai optimizes your layout by carefully
                        planning workflows, machinery placement, storage efficiency, safety compliance, and production
                        process flow. Our strategic design minimizes costs and maximizes productivity from day one.
                    </p>
                    
                </div>
            </div>
            <div class="col-md-4" style="padding:10px;">
                <div class="featuredGrid animate__animated animate__slideInUp" style="background-image: url({{asset(assetLink().'/images/financial__item-bg.png')}});">
                    <img src="{{asset(assetLink().'/images/planning-1.svg')}}" alt="featured">
                   <h5>Equipment Selection & Sizing</h5>
                    <p>
                        Selecting the right equipment impacts your production capacity and efficiency. We precisely
                        analyze your production needs, recommending suitable equipment types, capacities, and
                        configurations to optimize your factory’s operational performance and minimize costs.
                    </p>
                </div>
            </div>
            <div class="col-md-4" style="padding:10px;">
                <div class="featuredGrid animate__animated animate__slideInUp" style="background-image: url({{asset(assetLink().'/images/financial__item-bg.png')}});">
                    <img src="{{asset(assetLink().'/images/planning-1.svg')}}" alt="featured">
                   <h5>Utility Systems Design</h5>
                    <p>
                        Reliable utility systems are foundational to production success. FactoryBanai expertly designs
                        robust, scalable utility solutions, integrating power generation, compressed air systems, steam and
                        boiler systems, HVAC systems, water treatment, and effluent management tailored to your specific
                        industry requirements.
                    </p>
                </div>
            </div>
             <div class="col-md-4" style="padding:10px;">
                <div class="featuredGrid animate__animated animate__slideInUp" style="background-image: url({{asset(assetLink().'/images/financial__item-bg.png')}});">
                    <img src="{{asset(assetLink().'/images/growth.svg')}}" alt="featured">
                     <h5>Power Generation & Distribution</h5>
                    <p>
                        Reliable, efficient power is critical. We design robust power generation and distribution systems,
                        including sizing and specifying generators, transformers, distribution networks, and backup
                        solutions to ensure continuous, reliable, and energy-efficient operation
                    </p>
                </div>
            </div>
             <div class="col-md-4" style="padding:10px;">
                <div class="featuredGrid animate__animated animate__slideInUp" style="background-image: url({{asset(assetLink().'/images/financial__item-bg.png')}});">
                    <img src="{{asset(assetLink().'/images/international.svg')}}" alt="featured">
                     <h5>Compressed Air System</h5>
                    <p>
                        Compressed air is essential for industrial operations. Our solutions include system sizing,
                        compressor selection, piping layout design, pressure optimization, condensate handling, and energy
                        efficiency measures to ensure reliable performance and cost-effectiveness.
                    </p>
                    
                </div>
            </div>
            <div class="col-md-4" style="padding:10px;">
                <div class="featuredGrid animate__animated animate__slideInUp" style="background-image: url({{asset(assetLink().'/images/financial__item-bg.png')}});">
                    <img src="{{asset(assetLink().'/images/growth.svg')}}" alt="featured">
                     <h5>Boiler and Steam System</h5>
                    <p>
                        FactoryBanai provides comprehensive boiler and steam solutions—system sizing, boiler selection,
                        steam distribution design, condensate recovery systems, and fuel efficiency analysis—delivering
                        reliable, safe, and energy-efficient steam production tailored to your processes.
                    </p>
                </div>
            </div>
            <div class="col-md-4" style="padding:10px;">
                <div class="featuredGrid animate__animated animate__slideInUp" style="background-image: url({{asset(assetLink().'/images/financial__item-bg.png')}});">
                    <img src="{{asset(assetLink().'/images/international.svg')}}" alt="featured">
                     <h5>HVAC Systems</h5>
                    <p>
                        Effective heating, ventilation, and air conditioning directly impact productivity and product quality.
                        We design customized HVAC solutions providing optimal temperature control, humidity
                        management, ventilation efficiency, and air quality for industrial facilities and offices alike.
                    </p>
                    
                </div>
            </div>
            <div class="col-md-4" style="padding:10px;">
                <div class="featuredGrid animate__animated animate__slideInUp" style="background-image: url({{asset(assetLink().'/images/financial__item-bg.png')}});">
                    <img src="{{asset(assetLink().'/images/planning-1.svg')}}" alt="featured">
                   <h5>Water Treatment Plant</h5>
                    <p>
                       Ensuring water quality and sustainability, FactoryBanai designs tailored water treatment solutions,
                       including raw water purification, process water treatment, reverse osmosis (RO), filtration systems,
                       softening plants, and recycling systems, safeguarding your production quality and environmental
                       compliance
                    </p>
                </div>
            </div>
            <div class="col-md-4" style="padding:10px;">
                <div class="featuredGrid animate__animated animate__slideInUp" style="background-image: url({{asset(assetLink().'/images/financial__item-bg.png')}});">
                    <img src="{{asset(assetLink().'/images/planning-1.svg')}}" alt="featured">
                   <h5>Effluent Management System</h5>

                    <p>
                        We develop environmentally compliant effluent management systems, including wastewater
                        treatment plants, sludge management, chemical treatment processes, and recycling solutions,
                        ensuring your factory adheres to local and international environmental standards effectively and
                        efficiently.
                    </p>
                </div>
            </div>
             <div class="col-md-4" style="padding:10px;">
                <div class="featuredGrid animate__animated animate__slideInUp" style="background-image: url({{asset(assetLink().'/images/financial__item-bg.png')}});">
                    <img src="{{asset(assetLink().'/images/growth.svg')}}" alt="featured">
                     <h5>Green Building & Sustainability</h5>
                    <p>
                        FactoryBanai is committed to building greener, sustainable manufacturing facilities. Our services
                        include energy audits, renewable energy integration, resource efficiency optimization, sustainable
                        materials selection, and compliance with international sustainability standards, enhancing your
                        reputation and reducing operational costs.
                    </p>
                </div>
            </div>
             <div class="col-md-4" style="padding:10px;">
                <div class="featuredGrid animate__animated animate__slideInUp" style="background-image: url({{asset(assetLink().'/images/financial__item-bg.png')}});">
                    <img src="{{asset(assetLink().'/images/international.svg')}}" alt="featured">
                     <h5>Compliance & Certification Assistance</h5>
                    <p>
                        Navigating regulatory approvals is challenging. FactoryBanai simplifies this process by managing
                        regulatory applications, compliance documentation, audits, and certifications (e.g., RSC, UGBC,
                        LEED, ISO), ensuring timely approvals, risk mitigation, and uninterrupted operations.
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
</div>--}}
<!--our service section end -->

<!--our solutions part start-->
{{--<div class="ourSolutionsMain">
    <div class="container">
         <h1>OUR SOLUTIONS</h1>
        <div class="titleLine"></div>
        <div class="row">
            <div class="col-md-4">
                <div class="ourSolutionGird" style="background-color: #112c49;  color: #fff;">
                    <div>
                         <h5>Factory Site Selection</h5>
                    <p>
                        Choosing the right site is critical for your factory's success. Our site selection process involves
                        detailed analysis, evaluating location logistics, infrastructure availability, regulatory compliance,
                        environmental impacts, labor availability, and future growth potential, ensuring your investment’s
                        long-term success.
                    </p>
                        <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> LEARN MORE</a>
                    </div>
                </div>
            </div>
             <div class="col-md-4">
                <div class="ourSolutionGird">
                    <div>
                         <h5>Factory Layout & Process Design</h5>
                    <p>
                        Efficient factories start with intelligent design. FactoryBanai optimizes your layout by carefully
                        planning workflows, machinery placement, storage efficiency, safety compliance, and production
                        process flow. Our strategic design minimizes costs and maximizes productivity from day one.
                    </p>
                         <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> LEARN MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ourSolutionGird" style="background-color: #112c49;  color: #fff;">
                    <div>
                         <h5>Equipment Selection & Sizing</h5>
                    <p>
                        Selecting the right equipment impacts your production capacity and efficiency. We precisely
                        analyze your production needs, recommending suitable equipment types, capacities, and
                        configurations to optimize your factory’s operational performance and minimize costs.
                    </p>
                         <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> LEARN MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ourSolutionGird" >
                    <div>
                        <h5>Utility Systems Design</h5>
                    <p>
                        Reliable utility systems are foundational to production success. FactoryBanai expertly designs
                        robust, scalable utility solutions, integrating power generation, compressed air systems, steam and
                        boiler systems, HVAC systems, water treatment, and effluent management tailored to your specific
                        industry requirements.
                    </p>
                         <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> LEARN MORE</a>
                    </div>
                </div>
            </div>
             <div class="col-md-4">
                <div class="ourSolutionGird" style="background-color: #112c49;  color: #fff;">
                    <div>
                        <h5>Power Generation & Distribution</h5>
                    <p>
                        Reliable, efficient power is critical. We design robust power generation and distribution systems,
                        including sizing and specifying generators, transformers, distribution networks, and backup
                        solutions to ensure continuous, reliable, and energy-efficient operation
                    </p>
                         <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> LEARN MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ourSolutionGird">
                    <div>
                         <h5>Compressed Air System</h5>
                    <p>
                        Compressed air is essential for industrial operations. Our solutions include system sizing,
                        compressor selection, piping layout design, pressure optimization, condensate handling, and energy
                        efficiency measures to ensure reliable performance and cost-effectiveness.
                    </p>
                         <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> LEARN MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ourSolutionGird" style="background-color: #112c49;  color: #fff;">
                    <div>
                        <h5>Boiler and Steam System</h5>
                    <p>
                        FactoryBanai provides comprehensive boiler and steam solutions—system sizing, boiler selection,
                        steam distribution design, condensate recovery systems, and fuel efficiency analysis—delivering
                        reliable, safe, and energy-efficient steam production tailored to your processes.
                    </p>
                         <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> LEARN MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ourSolutionGird">
                    <div>
                        <h5>HVAC Systems</h5>
                    <p>
                        Effective heating, ventilation, and air conditioning directly impact productivity and product quality.
                        We design customized HVAC solutions providing optimal temperature control, humidity
                        management, ventilation efficiency, and air quality for industrial facilities and offices alike.
                    </p>
                    
                         <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> LEARN MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ourSolutionGird" style="background-color: #112c49;  color: #fff;">
                    <div>
                         <h5>Water Treatment Plant</h5>
                    <p>
                       Ensuring water quality and sustainability, FactoryBanai designs tailored water treatment solutions,
                       including raw water purification, process water treatment, reverse osmosis (RO), filtration systems,
                       softening plants, and recycling systems, safeguarding your production quality and environmental
                       compliance
                    </p>
                         <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> LEARN MORE</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>--}}
<!--our solutions part end-->

<!--our project start-->
{{--<div class="ourProjectMain">
    <div class="container">
        <h1 class="text-center" style="color: #fff">OUR PROJECTS</h1>
        <div class="titleLine" style="background-color: #fff"></div>
        <div class="row">
            <div class="col-md-3">
                <div class="projectGrid">
                    <div class="projectImg">
                        <img src="{{asset(assetLink().'/images/Pic_2-Gopal-Gong.webp')}}" alt="featured">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="projectGrid">
                    <div class="projectImg">
                        <img src="{{asset(assetLink().'/images/Pic_2-Gopal-Gong.webp')}}" alt="featured">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="projectGrid">
                    <div class="projectImg">
                        <img src="{{asset(assetLink().'/images/Pic_2-Gopal-Gong.webp')}}" alt="featured">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="projectGrid">
                    <div class="projectImg">
                        <img src="{{asset(assetLink().'/images/Pic_2-Gopal-Gong.webp')}}" alt="featured">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="projectGrid">
                    <div class="projectImg">
                        <img src="{{asset(assetLink().'/images/Pic_2-Gopal-Gong.webp')}}" alt="featured">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="projectGrid">
                    <div class="projectImg">
                        <img src="{{asset(assetLink().'/images/Pic_2-Gopal-Gong.webp')}}" alt="featured">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="projectGrid">
                    <div class="projectImg">
                        <img src="{{asset(assetLink().'/images/Pic_2-Gopal-Gong.webp')}}" alt="featured">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="projectGrid">
                    <div class="projectImg">
                        <img src="{{asset(assetLink().'/images/Pic_2-Gopal-Gong.webp')}}" alt="featured">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>--}}
<!--our project end-->


<!--our customers part start-->
{{--<div class="ourCustomerMian">
    <div class="container">
         <h1 class="text-center">OUR CUSTOMERS</h1>
        <div class="titleLine"></div>
        <div class="row">
            <div class="col-md-3">
                <div class="customerImg">
                    <img src="{{asset(assetLink().'/images/pgcb-2.png')}}" alt="featured">
                </div>
            </div>
            <div class="col-md-3">
                <div class="customerImg">
                    <img src="{{asset(assetLink().'/images/dsco-1.png')}}" alt="featured">
                </div>
            </div>
            <div class="col-md-3">
                <div class="customerImg">
                    <img src="{{asset(assetLink().'/images/pbg-1.png')}}" alt="featured">
                </div>
            </div>
            <div class="col-md-3">
                <div class="customerImg">
                    <img src="{{asset(assetLink().'/images/sqr-1.png')}}" alt="featured">
                </div>
            </div>
        </div>
    </div>
</div>--}}
<!--our customers part end-->

<!--news and blogs start-->
{{--<div class="blogCompany">
    <div class="container">
       <h1>PRESS & MEDIA</h1>
        <div class="titleLine"></div>
        <div class="row">
            @foreach($latestPosts as $post)
            <div class="col-md-4">
                @include(welcomeTheme().'blogs.includes.blogGrid')
            </div>
            @endforeach
        </div>
        @if($page =pageTemplate('Latest Blog'))
        <div class="moreServices">
            <a href="{{route('pageView',$page->slug?:'')}}" class="btn"> <i class="fa fa-newspaper-o" aria-hidden="true"></i> MORE NEWS </a>
        </div>
        @endif
    </div>
</div>--}}
<!--news and blogs end-->




@endsection @push('js') @endpush