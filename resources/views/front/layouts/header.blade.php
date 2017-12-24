<!-- Main Header-->
<header class="main-header">

    <!--Header-Upper-->
    <div class="header-upper">
        <div class="auto-container">
            <div class="clearfix">

                <div class="pull-left logo-outer">
                    <div class="logo">
                        <a href="index.html">
                          @if ($parametre->logo && File::exists(public_path("uploads/logos/".$parametre->logo)))
                          <img src="{{ asset('uploads/logos/' . $parametre->logo) }}" alt="{{ $parametre->title }}" />
                          @else
                          <img src="{{asset('images/logo.png')}}" alt="" title="Carhut">
                          @endif
                        </a>
                    </div>
                </div>

                <div class="pull-right upper-right clearfix">

                    <!--Info Box-->
                    @if ($parametre->open_time)
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="flaticon-clock"></span>
                        </div>
                        {{ $parametre->open_time }}
                        <div class="light-text">{{ $parametre->close_time }}</div>
                    </div>
                    @endif
                    @if ($parametre->adresse)
                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="flaticon-location"></span>
                        </div>
                        {{ $parametre->adresse }}
                        <div class="light-text">{{ $parametre->city }}, {{ $parametre->country }}</div>
                    </div>
                    @endif
                    @if ($parametre->phone)
                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="flaticon-smartphone-call"></span>
                        </div>
                        {{ $parametre->phone }}
                        @if ($parametre->email)<div class="light-text">{{ $parametre->email }}</div>@endif
                    </div>
                    @endif


                </div>

            </div>
        </div>
    </div>

    <!--Header-Lower-->
    <div class="header-lower">

        <div class="auto-container">
            <div class="nav-outer clearfix">

                @include('front.layouts.menu')

            </div>
        </div>
    </div>

    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="index.html" class="img-responsive">
                  @if ($parametre->small_logo && File::exists(public_path("uploads/logos/".$parametre->small_logo)))
                  <img src="{{ asset('uploads/logos/' . $parametre->small_logo) }}" alt="{{ $parametre->title }}" />
                  @else
                  <img src="{{asset('images/logo-small.png')}}" alt="Carhut">
                  @endif
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
