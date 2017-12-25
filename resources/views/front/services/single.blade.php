@extends('front.layouts.app')

@section('title')
    | {{ $service->service_title }}
@endsection

@section('content')
<!--Page Title-->
    <section class="page-title" style="background-image:url({{asset('images/background/page-title-1.jpg')}});">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Title -->
                <div class="title-column col-md-6 col-sm-12 col-xs-12">
                    <h1>{{ $service->service_title }}</h1>
                </div>
                <!--Bread Crumb -->
                <div class="breadcrumb-column col-md-6 col-sm-12 col-xs-12">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ route('home') }}">Accueil</a>
                        </li>
                        <li><a href="{{ route('services.index') }}">services</a>
                        </li>
                        <li class="active">{{ $service->service_title }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!--Sidebar Page-->
        <div class="sidebar-page-container sec-pdd-90">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Sidebar-->
                    @include('front.services.sidebar')
                    <!--Sidebar-->

                    <!--Content Side-->
                    <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                        <section class="content-section services-content">
                            <div class="normal-title">
                                <h3>{{ $service->service_title }}</h3>
                            </div>
                            <figure class="bigger-image">
                              <img src="{{asset('/uploads/services')}}/{{ $service->service_thumbnail }}" alt="{{ $service->service_title }}">
                            </figure>

                            <div class="text-block">
                                {{ $service->service_content }}
                            </div>



                            <div class="faqs-container">
                                <div class="normal-title">
                                    <h3>FAQ sur le {{ $service->service_title }}</h3>
                                </div>

                                <!--Accordion Box-->
                                <ul class="accordion-box">

                                    <!--Block-->
                                    <li class="accordion block margin-bot-10">
                                        <div class="acc-btn active">
                                            <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span>
                                            </div> What payment methods are available?</div>
                                        <div class="acc-content current">
                                            <div class="content">
                                                <p>Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
                                            </div>
                                        </div>
                                    </li>

                                    <!--Block-->
                                    <li class="accordion block margin-bot-10">
                                        <div class="acc-btn">
                                            <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span>
                                            </div> What should I do if the alternator light comes on?</div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <p>Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
                                            </div>
                                        </div>
                                    </li>

                                    <!--Block-->
                                    <li class="accordion block margin-bot-10">
                                        <div class="acc-btn">
                                            <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span>
                                            </div> Why do we sell popular oil change and auto repair services online?</div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <p>Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
                                            </div>
                                        </div>
                                    </li>

                                    <!--Block-->
                                    <li class="accordion block margin-bot-10">
                                        <div class="acc-btn">
                                            <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span>
                                            </div>What are the advantages of synthetic oils?</div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <p>Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
                                            </div>
                                        </div>
                                    </li>

                                    <!--Block-->
                                    <li class="accordion block margin-bot-10">
                                        <div class="acc-btn">
                                            <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span>
                                            </div> Do I have to get my car serviced by a main dealer?</div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <p>Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
                                            </div>
                                        </div>
                                    </li>

                                    <!--Block-->
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span>
                                            </div> Must I get air conditioning serviced?</div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <p>Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                                <!--End Accordion Box-->


                            </div>

                        </section>


                    </div>
                    <!--Content Side-->



                </div>
            </div>
        </div>
@endsection
