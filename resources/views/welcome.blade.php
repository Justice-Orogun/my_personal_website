@extends('layouts.app')

@section('content')
        <!-- content -->
        <div class="art-content">

          <!-- curtain -->
          <div class="art-curtain"></div>

          <!-- top background -->
          <div class="art-top-bg" style="background-image: url(img/jay.jpg)">
            <!-- overlay -->
            <div class="art-top-bg-overlay"></div>
            <!-- overlay end -->
          </div>
          <!-- top background end -->

          <!-- swup container -->
          <div class="transition-fade" id="swup">

            <!-- scroll frame -->
            <div id="scrollbar" class="art-scroll-frame">

              <!-- container -->
              <div class="container-fluid">

                <!-- row -->
                <div class="row p-60-0 p-lg-30-0 p-md-15-0">
                  <!-- col -->
                  <div class="col-lg-12">

                    <!-- banner -->
                    <div class="art-a art-banner" style="background-image: url(img/jay.jpg)">
                      <!-- banner back -->
                      <div class="art-banner-back"></div>
                      <!-- banner dec -->
                      <div class="art-banner-dec"></div>
                      <!-- banner overlay -->
                      <div class="art-banner-overlay">
                        <!-- main title -->
                        <div class="art-banner-title">
                          <!-- title -->
                          <h1 class="mb-15">I create value by <br> building Digital Solutions <br>For People & Businesses!</h1>
                          <!-- suptitle -->
                          <div class="art-lg-text art-code mb-25">&lt;<i>code</i>&gt; I build <span class="txt-rotate" data-period="2000"
                              data-rotate='[ "Web Applications.", "Mobile Applications.", "Automation Tools.", "Brand Visibility." ]'></span>&lt;/<i>code</i>&gt;</div>
                          <div class="art-buttons-frame">
                            <!-- button -->
                            <a href="/contact" class="art-btn art-btn-md"><span>Hire Me Now</span></a>
                          </div>
                        </div>
                        <!-- main title end -->
                        <!-- photo -->
                        {{-- <img src="img/.jpg" class="art-banner-photo" alt="Justice Orogun"> --}}
                      </div>
                      <!-- banner overlay end -->
                    </div>
                    <!-- banner end -->

                  </div>
                  <!-- col end -->
                </div>
                <!-- row end -->

              </div>
              <!-- container end -->

              <!-- container -->
              <div class="container-fluid">

                <!-- row -->
                <div class="row p-30-0">

                  <!-- col -->
                  <div class="col-md-3 col-6">

                    <!-- couner frame -->
                    <div class="art-counter-frame">
                      <!-- counter -->
                      <div class="art-counter-box">
                        <!-- counter number -->
                        <span class="art-counter">5</span><span class="art-counter-plus">+</span>
                      </div>
                      <!-- counter end -->
                      <!-- title -->
                      <h6>Years Experience</h6>
                    </div>
                    <!-- couner frame end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-md-3 col-6">

                    <!-- couner frame -->
                    <div class="art-counter-frame">
                      <!-- counter -->
                      <div class="art-counter-box">
                        <!-- counter number -->
                        <span class="art-counter">43</span>
                      </div>
                      <!-- counter end -->
                      <!-- title -->
                      <h6>Completed Projects</h6>
                    </div>
                    <!-- couner frame end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-md-3 col-6">

                    <!-- couner frame -->
                    <div class="art-counter-frame">
                      <!-- counter -->
                      <div class="art-counter-box">
                        <!-- counter number -->
                        <span class="art-counter">34</span>
                      </div>
                      <!-- counter end -->
                      <!-- title -->
                      <h6>Happy Customers</h6>
                    </div>
                    <!-- couner frame end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-md-3 col-6">

                    <!-- couner frame -->
                    <div class="art-counter-frame">
                      <!-- counter -->
                      <div class="art-counter-box">
                        <!-- counter number -->
                        <span class="art-counter">5</span><span class="art-counter-plus">+</span>
                      </div>
                      <!-- counter end -->
                      <!-- title -->
                      <h6>Honors and Awards</h6>
                    </div>
                    <!-- couner frame end -->

                  </div>
                  <!-- col end -->

                </div>
                <!-- row end -->

              </div>
              <!-- container end -->

              <!-- container -->
              <div class="container-fluid">

                <!-- row -->
                <div class="row">

                  <!-- col -->
                  <div class="col-lg-12">

                    <!-- section title -->
                    <div class="art-section-title">
                      <!-- title frame -->
                      <div class="art-title-frame">
                        <!-- title -->
                        <h4>My Services</h4>
                      </div>
                      <!-- title frame end -->
                    </div>
                    <!-- section title end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-lg-4 col-md-6">

                    <!-- service -->
                    <div class="art-a art-service-icon-box">
                      <!-- service content -->
                      <div class="art-service-ib-content">
                        <!-- title -->
                        <h5 class="mb-15">Web Design + Development</h5>
                        <!-- text -->
                        <div class="mb-15">We build best-in-class web applications written with popular frameworks such as Laravel, Livewire, Vue, and React that is optimized for the most popular search engines.

                        </div>
                        <!-- button -->
                        <div class="art-buttons-frame"><a href="/contact" class="art-link art-color-link art-w-chevron">Book Us Now</a></div>
                      </div>
                      <!-- service content end -->
                    </div>
                    <!-- service end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-lg-4 col-md-6">

                    <!-- service -->
                    <div class="art-a art-service-icon-box">
                      <!-- service content -->
                      <div class="art-service-ib-content">
                        <!-- title -->
                        <h5 class="mb-15">Mobile App Development</h5>
                        <!-- text -->
                        <div class="mb-15">Whether you are looking to build native or cross platform apps for android OS or IOS, we are here for you. We help you follow global trends, build your App with the best technologies.</div>
                        <!-- button -->
                        <div class="art-buttons-frame"><a href="/contact" class="art-link art-color-link art-w-chevron">Book Us Now</a></div>
                      </div>
                      <!-- service content end -->
                    </div>
                    <!-- service end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-lg-4 col-md-6">

                    <!-- service -->
                    <div class="art-a art-service-icon-box">
                      <!-- service content -->
                      <div class="art-service-ib-content">
                        <!-- title -->
                        <h5 class="mb-15">Graphics + Branding</h5>
                        <!-- text -->
                        <div class="mb-15">Branding is more than a logo, nice colours and text placements. We create stories with brands that connect you to your customers, using the most innovative design techniques.</div>
                        <!-- button -->
                        <div class="art-buttons-frame"><a href="/contact" class="art-link art-color-link art-w-chevron">Book Us Now</a></div>
                      </div>
                      <!-- service content end -->
                    </div>
                    <!-- service end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-lg-4 col-md-6">

                    <!-- service -->
                    <div class="art-a art-service-icon-box">
                      <!-- service content -->
                      <div class="art-service-ib-content">
                        <!-- title -->
                        <h5 class="mb-15">Search Engine Optimization (SEO)</h5>
                        <!-- text -->
                        <div class="mb-15"> We don't just develop your website, we build your brand. Because SEO is the new way to go, we handle the task of optimizing your website  to generate more traffic, increase visibility and rake in more sales.</div>
                        <!-- button -->
                        <div class="art-buttons-frame"><a href="/contact" class="art-link art-color-link art-w-chevron">Book Us Now</a></div>
                      </div>
                      <!-- service content end -->
                    </div>
                    <!-- service end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-lg-4 col-md-6">

                    <!-- service -->
                    <div class="art-a art-service-icon-box">
                      <!-- service content -->
                      <div class="art-service-ib-content">
                        <!-- title -->
                        <h5 class="mb-15">Social Media Management + Marketing</h5>
                        <!-- text -->
                        <div class="mb-15">From managing your business' social media pages for brand visibility, growth and engagement, we work to promote your brand in partnership with the best marketing platforms today.</div>
                        <!-- button -->
                        <div class="art-buttons-frame"><a href="/contact" class="art-link art-color-link art-w-chevron">Book Us Now</a></div>
                      </div>
                      <!-- service content end -->
                    </div>
                    <!-- service end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-lg-4 col-md-6">

                    <!-- service -->
                    <div class="art-a art-service-icon-box">
                      <!-- service content -->
                      <div class="art-service-ib-content">
                        <!-- title -->
                        <h5 class="mb-15">ICT Consultancy</h5>
                        <!-- text -->
                        <div class="mb-15">We conduct trainings on marketing, design and software development for startups/high-growth companies looking to improve business efficiency and growth. Get on a One-One training with our experts and become a Tech Expert.</div>
                        <!-- button -->
                        <div class="art-buttons-frame"><a href="/contact" class="art-link art-color-link art-w-chevron">Book Us Now</a></div>
                      </div>
                      <!-- service content end -->
                    </div>
                    <!-- service end -->

                  </div>
                  <!-- col end -->

                </div>
                <!-- row end -->

              </div>
              <!-- container end -->

              <!-- container -->
              <div class="container-fluid">

                <!-- row -->
                <div class="row p-0-0">

                  <!-- col -->
                    <div class="col-lg-12">

                        <!-- section title -->
                                <div class="art-section-title">
                                <!-- title frame -->
                                        <div class="art-title-frame">
                                            <!-- title -->
                                            <h4>Why Choose Us?</h4>
                                        </div>
                                <!-- title frame end -->
                                </div>
                        <!-- section title end -->

                    </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-lg-4">

                    <!-- price -->
                    <div class="art-a art-price">
                      <!-- price body -->
                      <div class="art-price-body">
                        <h5 class="mb-30">Professionalism</h5>
                        <p>
                            As professionals we design, develop and deploy user-friendly, world-class Websites, Mobile Apps and other digital solutions, traffic-driven, optimized for the most popular search engines!
                        </p>
                        <a href="/contact" class="art-link art-color-link art-w-chevron">Book Us Now</a>
                      </div>
                      <!-- price body end -->
                    </div>
                    <!-- price end -->

                  </div>
                  <!-- grid -->

                  <!-- col -->
                  <div class="col-lg-4">

                    <!-- price -->
                    <div class="art-a art-price">
                      <!-- price body -->
                      <div class="art-price-body">
                        <h5 class="mb-30">Time Management</h5>
                        <p>
                            When it comes to the products and services of our clients, every minute counts. We believe it is perfect service when a job is delivered on a scheduled time of demand!
                        </p>
                        <a href="/contact" class="art-link art-color-link art-w-chevron">Book Us Now</a>
                      </div>
                      <!-- price body end -->
                    </div>
                    <!-- price end -->

                  </div>
                  <!-- col end -->

                   <!-- col -->
                   <div class="col-lg-4">

                    <!-- price -->
                    <div class="art-a art-price">
                      <!-- price body -->
                      <div class="art-price-body">
                        <h5 class="mb-30">Premium Support</h5>
                        <p>
                            From helping clients choose the perfect domain names to deploying world-class Web and Mobile Applications that attracts and converts customers, we are available 24/7 to help!
                        </p>
                        <a href="/contact" class="art-link art-color-link art-w-chevron">Book Us Now</a>
                      </div>
                      <!-- price body end -->
                    </div>
                    <!-- price end -->

                  </div>
                  <!-- col end -->

                   <!-- col -->
                   <div class="col-lg-4">

                    <!-- price -->
                    <div class="art-a art-price">
                      <!-- price body -->
                      <div class="art-price-body">
                        <h5 class="mb-30">Expert Advisors</h5>
                        <p>
                            Because we know information is power, We always update and advise our clients on the latest tech trends they can employ to their businesses for maximum profitablity!
                        </p>
                        <a href="/contact" class="art-link art-color-link art-w-chevron">Book Us Now</a>
                      </div>
                      <!-- price body end -->
                    </div>
                    <!-- price end -->

                  </div>
                  <!-- col end -->

                   <!-- col -->
                   <div class="col-lg-4">

                    <!-- price -->
                    <div class="art-a art-price">
                      <!-- price body -->
                      <div class="art-price-body">
                        <h5 class="mb-30">Customers Feedback</h5>
                        <p>
                            We believe great services are never enough, great feedback is everything! We work to exceed our clients expectations and anticipate feedbacks on our services.
                        </p>
                        <a href="/contact" class="art-link art-color-link art-w-chevron">Book Us Now</a>
                      </div>
                      <!-- price body end -->
                    </div>
                    <!-- price end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-lg-4">

                    <!-- price -->
                    <div class="art-a art-price">
                      <!-- price body -->
                      <div class="art-price-body">
                        <h5 class="mb-30"> Proven Result</h5>
                        <p>
                            Our services are our adverts. This explains why we do our very best to ensure quality services to suit the desired demands of our prospective clients!
                        </p>
                        <a href="/contact" class="art-link art-color-link art-w-chevron">Order now</a>
                      </div>
                      <!-- price body end -->
                    </div>
                    <!-- price end -->

                  </div>
                  <!-- col end -->

                </div>



              </div>
              <!-- container end -->

              <!-- container -->
              <div class="container-fluid">

                <!-- row -->
                <div class="row">

                  <!-- col -->
                  <div class="col-lg-12">

                    <!-- section title -->
                    <div class="art-section-title">
                      <!-- title frame -->
                      <div class="art-title-frame">
                        <!-- title -->
                        <h4>Recommendations</h4>
                      </div>
                      <!-- title frame end -->
                    </div>
                    <!-- section title end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-lg-12">

                    <!-- slider container -->
                    <div class="swiper-container art-testimonial-slider" style="overflow: visible">
                      <!-- slider wrapper -->
                      <div class="swiper-wrapper">
                        <!-- slide -->
                        <div class="swiper-slide">

                          <!-- testimonial -->
                          <div class="art-a art-testimonial">
                            <!-- testimonial body -->
                            <div class="testimonial-body">
                              <!-- photo -->
                              <img class="art-testimonial-face" src="img/testimonials/face-1.jpg" alt="face">
                              <!-- name -->
                              <h5>Stacy Ezeokoye</h5>
                              <div class="art-el-suptitle mb-15">Business Woman</div>
                              <!-- text -->
                              <div class="mb-15">Working with Justice Orogun has been amazing. He doesn't just provide the digital solution, he also assist you with business ideas to help you grow well.</div>
                            </div>
                            <!-- testimonial body end -->
                            <!-- testimonial footer -->
                            <div class="art-testimonial-footer">
                              <div class="art-left-side">
                                <!-- star rate -->
                                <ul class="art-star-rate">
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                </ul>
                                <!-- star rate end -->
                              </div>
                              <div class="art-right-side">

                              </div>
                            </div>
                            <!-- testimonial footer end -->
                          </div>
                          <!-- testimonial end -->

                        </div>
                        <!-- slide end -->

                        <!-- slide -->
                        <div class="swiper-slide">

                          <!-- testimonial -->
                          <div class="art-a art-testimonial">
                            <!-- testimonial body -->
                            <div class="testimonial-body">
                              <!-- photo -->
                              <img class="art-testimonial-face" src="img/testimonials/face-2.jpg" alt="face">
                              <!-- name -->
                              <h5>E.A. Joshua</h5>
                              <div class="art-el-suptitle mb-15">Founder, Creative Tech</div>
                              <!-- text -->
                              <div class="mb-15">Justice Orogun is a mentor in every way. There is so much to learn from him, I look up to him in a whole lot of ways. He is very cool to work with.</div>
                            </div>
                            <!-- testimonial body end -->
                            <!-- testimonial footer -->
                            <div class="art-testimonial-footer">
                              <div class="art-left-side">
                                <!-- star rate -->
                                <ul class="art-star-rate">
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                  <li class="art-empty-item"><i class="fas fa-star"></i></li>
                                </ul>
                                <!-- star rate end -->
                              </div>
                              <div class="art-right-side">

                              </div>
                            </div>
                            <!-- testimonial footer end -->
                          </div>
                          <!-- testimonial end -->

                        </div>
                        <!-- slide end -->

                        <!-- slide -->
                        <div class="swiper-slide">

                          <!-- testimonial -->
                          <div class="art-a art-testimonial">
                            <!-- testimonial body -->
                            <div class="testimonial-body">
                              <!-- photo -->
                              <img class="art-testimonial-face" src="img/testimonials/face-3.jpg" alt="face">
                              <!-- name -->
                              <h5>Beauty Efere</h5>
                              <div class="art-el-suptitle mb-15">CEO, Bemore</div>
                              <!-- text -->
                              <div class="mb-15">The business name 'Bemore' actually came through Justice. And I love the entire concept, every step of the way. Thank you! </div>
                            </div>
                            <!-- testimonial body end -->
                            <!-- testimonial footer -->
                            <div class="art-testimonial-footer">
                              <div class="art-left-side">
                                <!-- star rate -->
                                <ul class="art-star-rate">
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                </ul>
                                <!-- star rate end -->
                              </div>
                              <div class="art-right-side">

                              </div>
                            </div>
                            <!-- testimonial footer end -->
                          </div>
                          <!-- testimonial end -->

                        </div>
                        <!-- slide end -->

                        <!-- slide -->
                        <div class="swiper-slide">

                          <!-- testimonial -->
                          <div class="art-a art-testimonial">
                            <!-- testimonial body -->
                            <div class="testimonial-body">
                              <!-- photo -->
                              <img class="art-testimonial-face" src="img/testimonials/face-4.jpg" alt="face">
                              <!-- name -->
                              <h5>OluChukwu Anyi</h5>
                              <div class="art-el-suptitle mb-15">Youtuber, Relationship Expert</div>
                              <!-- text -->
                              <div class="mb-15">I couldn't really get a website for my audience but Justice helped me in solving that up my website. Thank you, Justice!
                               </div>
                            </div>
                            <!-- testimonial body end -->
                            <!-- testimonial footer -->
                            <div class="art-testimonial-footer">
                              <div class="art-left-side">
                                <!-- star rate -->
                                <ul class="art-star-rate">
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                </ul>
                                <!-- star rate end -->
                              </div>
                              <div class="art-right-side">

                              </div>
                            </div>
                            <!-- testimonial footer end -->
                          </div>
                          <!-- testimonial end -->

                        </div>
                        <!-- slide end -->

                      </div>
                      <!-- slider wrapper end -->
                    </div>
                    <!-- slider container end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-lg-12">

                    <!-- slider navigation -->
                    <div class="art-slider-navigation">

                      <!-- left side -->
                      <div class="art-sn-left">

                        <!-- slider pagination -->
                        <div class="swiper-pagination"></div>

                      </div>
                      <!-- left side end -->

                      <!-- right side -->
                      <div class="art-sn-right">

                        <!-- slider navigation -->
                        <div class="art-slider-nav-frame">
                          <!-- prev -->
                          <div class="art-slider-nav art-testi-swiper-prev"><i class="fas fa-chevron-left"></i></div>
                          <!-- next -->
                          <div class="art-slider-nav art-testi-swiper-next"><i class="fas fa-chevron-right"></i></div>
                        </div>
                        <!-- slider navigation -->

                      </div>
                      <!-- right side end -->

                    </div>
                    <!-- slider navigation end -->

                  </div>
                  <!-- col end -->

                </div>
                <!-- row end -->

              </div>
              <!-- container end -->

              <!-- container -->
@endsection

