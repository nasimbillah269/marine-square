<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="footer-brand">
          <div class="brand-name">MAR<span><img src="{{asset(assetLink().'/images/marin/iiiii.png')}}" alt=""></span>NE Square</div>
          <div class="tagline">Source • Supply • Service</div>
          <p>A technical partner and local facilitator supporting Bangladesh's naval and maritime sector through structured sourcing, coordination, and execution.</p>
        </div>
      </div>
      <div class="col-lg-2 col-6">
        <div class="footer-links">
          <h6>Navigation</h6>
          <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li><a href="{{ route('pageView','marine-square') }}">About</a></li>
            <li><a href="{{ route('pageView','market-access') }}">Market Access</a></li>
            <li><a href="{{ route('pageView','capabilities') }}">Capabilities</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-2 col-6">
        <div class="footer-links">
          <h6>More</h6>
          <ul>
            <li><a href="{{ route('pageView','opportunities') }}">Opportunities</a></li>
            <li><a href="{{ route('pageView','defense-projects') }}">Projects</a></li>
            <li><a href="{{ route('pageView','partners') }}">Partners</a></li>
            <li><a href="{{ route('pageView','contact') }}">Contact</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="footer-contact">
          <h6>Contact</h6>
          <p>
            58 Golden Plaza (1st Floor)<br>
            Mahakhali, Dhaka – 1212<br>
            Bangladesh<br><br>
            <a href="tel:+8801819146112">+880 1819 146112</a><br>
            <a href="mailto:info@marine-square.com">info@marine-square.com</a><br>
            <a href="http://www.marine-square.com">www.marine-square.com</a>
          </p>
        </div>
      </div>
    </div>
    <!--<div class="footer-bottom">-->
    <!--  <p>© 2024 MARINE Square. All rights reserved. Dhaka, Bangladesh.</p>-->
    <!--  <div class="footer-socials">-->
    <!--    <a class="social-btn" href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>-->
    <!--    <a class="social-btn" href="#" title="Email"><i class="fas fa-envelope"></i></a>-->
    <!--    <a class="social-btn" href="#" title="Phone"><i class="fas fa-phone"></i></a>-->
    <!--  </div>-->
    <!--</div>-->
  </div>
  <div class="bottomFooter" style="--footer-bg: url('{{asset(assetLink().'/images/marin/Picture1.png')}}');">
      <div class="bottomFooterOverly">
          <div class="container">
                <div class="footer-bottom">
                  <p>© 2026 MARINE Square. All rights reserved. Dhaka, Bangladesh.</p>
                  <div class="footer-socials">
                    <a class="social-btn" href="{{ general()->linkedin_link ?: '#' }}" target="_blank" rel="noopener" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a class="social-btn" href="mailto:info@marine-square.com" title="Email"><i class="fas fa-envelope"></i></a>
                    <a class="social-btn" href="tel:+8801819146112" title="Phone"><i class="fas fa-phone"></i></a>
                  </div>
                </div>
          </div>
      </div>
  </div>
</footer>