<!--Main Footer-->
<footer class="main-footer">

    <!--Widgets Section-->
    <div class="widgets-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Big Column-->
                <div class="big-column col-md-6 col-sm-12 col-xs-12">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget about-widget">
                                <div class="footer-logo">
                                    <a href="index.html">
                                      @if ($parametre->footer_logo && File::exists(public_path("uploads/logos/".$parametre->footer_logo)))
                                      <img src="{{ asset('uploads/logos/' . $parametre->footer_logo) }}" alt="{{ $parametre->title }}" />
                                      @else
                                      <img src="{{asset('images/logo-three.png')}}" alt="Carhut">
                                      @endif
                                    </a>
                                </div>
                                <div class="widget-content">
                                    @if ($parametre->footer_description)
                                    <div class="text">{{ $parametre->footer_description }}</div>
                                    @endif
                                    <ul class="contact-info">
                                      @if ($parametre->adresse)
                                        <li><span class="icon flaticon-location"></span> {{ $parametre->adresse }}, {{ $parametre->city }}, {{ $parametre->country }}</li>
                                      @endif
                                      @if ($parametre->email)
                                        <li><span class="icon flaticon-mail"></span> {{ $parametre->email }}</li>
                                      @endif
                                      @if ($parametre->phone)
                                        <li><span class="icon flaticon-smartphone-call"></span> {{ $parametre->phone }}</li>
                                      @endif
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget links-widget">
                                <h2>Services</h2>
                                <div class="widget-content">
                                    <ul class="list">
                                        <li><a href="#">Break Checkup</a>
                                        </li>
                                        <li><a href="#">Inspections service</a>
                                        </li>
                                        <li><a href="#">Engine Repair</a>
                                        </li>
                                        <li><a href="#">Car Cleaning</a>
                                        </li>
                                        <li><a href="#">Break Checkup</a>
                                        </li>
                                        <li><a href="#">Engine Upgrades</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <!--Big Column-->
                <div class="big-column col-md-6 col-sm-12 col-xs-12">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget subscribe-widget">
                                <h2>SUBSCRIBE</h2>
                                <div class="widget-content">

                                    <div class="newsletter-form">
                                        <form method="post" action="contact.html">
                                            <div class="form-group">
                                                <input type="email" name="email" value="" placeholder="Enter your Email" required>
                                                <button type="submit" class="theme-btn"><span class="fa fa-paper-plane-o"></span>
                                                </button>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="text">Get latest news and updates</div>

                                    <div class="social-links">
                                        <ul class="clearfix">
                                          @if ($parametre->facebook)
                                            <li><a href="{{ $parametre->facebook }}"><span class="icon fa fa-facebook-f"></span> Facebook</a>
                                            </li>
                                          @endif
                                          @if ($parametre->twitter)
                                            <li><a href="{{ $parametre->twitter }}"><span class="icon fa fa-twitter"></span> Twitter</a>
                                            </li>
                                          @endif
                                          @if ($parametre->google_plus)
                                            <li><a href="{{ $parametre->google_plus }}"><span class="icon fa fa-google-plus"></span> Goole plus</a>
                                            </li>
                                          @endif
                                          @if ($parametre->linkedin)
                                            <li><a href="{{ $parametre->linkedin }}"><span class="icon fa fa-linkedin"></span> Linkedin</a>
                                            </li>
                                          @endif
                                          @if ($parametre->skype)
                                            <li><a href="{{ $parametre->skype }}"><span class="icon fa fa-skype"></span> skype</a>
                                            </li>
                                          @endif
                                          @if ($parametre->whatsapp)
                                            <li><a href="{{ $parametre->whatsapp }}"><span class="icon fa fa-whatsapp"></span> whatsapp</a>
                                            </li>
                                          @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget posts-widget">
                                <h2>Recent Posts</h2>
                                <div class="widget-content">
                                    <!--Post-->
                                    <div class="post">
                                        <figure class="post-thumb">
                                            <a href="#"><img src="{{asset('images/resource/post-thumb-1.jpg')}}" alt="">
                                            </a>
                                        </figure>
                                        <h4><a href="#">News title with image</a></h4>
                                        <div class="time"><span class="fa fa-calendar"></span> Jun 12,2016</div>
                                    </div>
                                    <!--Post-->
                                    <div class="post">
                                        <figure class="post-thumb">
                                            <a href="#"><img src="{{asset('images/resource/post-thumb-2.jpg')}}" alt="">
                                            </a>
                                        </figure>
                                        <h4><a href="#">News title with image</a></h4>
                                        <div class="time"><span class="fa fa-calendar"></span> Jun 14,2016</div>
                                    </div>
                                    <!--Post-->
                                    <div class="post">
                                        <figure class="post-thumb">
                                            <a href="#"><img src="{{asset('images/resource/post-thumb-3.jpg')}}" alt="">
                                            </a>
                                        </figure>
                                        <h4><a href="#">News title with image</a></h4>
                                        <div class="time"><span class="fa fa-calendar"></span> Jun 17,2016</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
          @if ($parametre->copyright)
            <div class="text">{{$parametre->copyright}}</div>
          @endif
        </div>
    </div>

</footer>
