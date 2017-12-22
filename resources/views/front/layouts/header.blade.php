<!-- Main Header-->
<header class="main-header">

    <!--Header-Upper-->
    <div class="header-upper">
        <div class="auto-container">
            <div class="clearfix">

                <div class="pull-left logo-outer">
                    <div class="logo">
                        <a href="index.html"><img src="{{asset('images/logo.png')}}" alt="" title="Beirut Finance">
                        </a>
                    </div>
                </div>

                <div class="pull-right upper-right clearfix">

                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="flaticon-clock"></span>
                        </div>
                        Mon - Sat: 9:00am - 5:00pm
                        <div class="light-text">Sunday Closed</div>
                    </div>

                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="flaticon-location"></span>
                        </div>
                        452 Marshal Street
                        <div class="light-text">Newyork, USA</div>
                    </div>

                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="flaticon-smartphone-call"></span>
                        </div>
                        +01 2345 6789
                        <div class="light-text">info@carhut.com</div>
                    </div>


                </div>

            </div>
        </div>
    </div>

    <!--Header-Lower-->
    <div class="header-lower">

        <div class="auto-container">
            <div class="nav-outer clearfix">

                @include('front.layouts.menu')

                <div class="btn-outer"><a href="contact.html" class="appt-btn theme-btn">GET SERVICE</a>
                </div>

            </div>
        </div>
    </div>

    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="index.html" class="img-responsive"><img src="{{asset('images/logo-small.png')}}" alt="Beirut Finance">
                </a>
            </div>

            <!--Right Col-->
            <div class="right-col pull-right">

                @include('front.layouts.menu')
                
            </div>

        </div>
    </div>
    <!--End Bounce In Header-->

</header>
<!--End Main Header -->
