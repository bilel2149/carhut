<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
    <aside class="sidebar about-sidebar">

        <!-- Tabbed Links -->
        <div class="sidebar-widget tabbed-links">
            <ul class="tabbed-nav">
                <?php $services = Helper::get_services(); ?>
                <?php foreach ($services as $service): ?>
                    <li class="">
                      <a href="{{ route('home') }}/service/{{ $service->service_slug }}">{{ $service->service_title }}</a>
                    </li>
                <?php endforeach; ?>
            </ul>

        </div>

        <!-- Tabbed Links -->
        <div class="sidebar-widget download-links">
            <div class="sidebar-title">
                <h3>Brochure</h3>
            </div>
            <ul class="files">
                <li><a href="#"><span class="fa fa-file-pdf-o"></span> Download.pdf</a>
                </li>
                <li><a href="#"><span class="fa fa-file-word-o"></span> Download.doc</a>
                </li>
                <li><a href="#"><span class="fa fa-file-powerpoint-o"></span> Download.ppt</a>
                </li>
            </ul>

        </div>


        <!-- Tabbed Links -->
        <div class="sidebar-widget contact-info">
            <div class="sidebar-title">
                <h3>Notre bureau</h3>
            </div>
            <ul>
                <?php $parametre = Helper::get_settings(); ?>
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

    </aside>


</div>
