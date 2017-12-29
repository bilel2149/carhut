<!-- Header -->
<header id="header">

  <nav class="navbar navbar-default nopadding" >
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <button type="button" id="menu-open" class="navbar-toggle menu-toggler pull-left">
        <span class="sr-only">Toggle sidebar</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" id="logo-panel" style="padding:0 15px;">
        @if ($parametre->small_logo && File::exists(public_path("uploads/logos/".$parametre->small_logo)))
        <img src="{{ asset('uploads/logos/' . $parametre->small_logo) }}" alt="{{ $parametre->title }}" />
        @else
        <img src="{{asset('../assets/img/logo.png')}}" alt="Golabi Admin">
        @endif
        <!-- <i class="fa fa-slack"></i> Golabi Admin -->
      </a>


    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


      <ul class="nav navbar-nav navbar-right">
        <li id="search-show-li" class="dropdown">
          <a href="#" id="search-mobile-show" class="dropdown-toggle" >
            <i class="fa fa-search"></i>
          </a>
        </li>
        <li class="dropdown yep-dropdown-notify">
          <a href="#" class="dropdown-toggle" >
            <i class="fa fa-bell-o"></i>
            <span class="label">1</span>
          </a>
          <ul class="dropdown-menu yep-notify">
            <li>
              <div class="btn-group btn-group-justified yep-btn-group-notify">
                <a href="#msgs" class="btn btn-default active">Msgs (14)</a>
                <a href="#notify" class="btn btn-default">notify (3)</a>
                <a href="#task" class="btn btn-default">Tasks (4)</a>
              </div>
              <div class="tab-content yep-notify-content" >
                <div class="tab-pane active thin-scroll" id="msgs">

                  <ul class="notify-content-body ">
                    <li>
                      <span class="unread">
                        <a href="javascript:void(0);" class="msg" >
                          <img src="{{asset('../assets/img/avatars/avatar.png')}}" alt="" class="item item-top-left" >
                          <span class="from">John Doe <i class="icon-paperclip"></i></span>
                          <span class="time">2 minutes ago</span>
                          <span class="subject">Msed quia non numquam eius modi tempora</span>
                          <span class="msg-body">Hello again and thanks for being a part of the newsletter. </span>
                        </a>
                      </span>
                    </li>
                    <li>
                      <span>
                        <a href="javascript:void(0);" class="msg">
                          <img src="{{asset('../assets/img/avatars/female.png')}}" alt="" class="item item-top-left">
                          <span class="from">Sonya Birthday</span>
                          <span class="time">Thursday, September 19th</span>
                          <span class="subject">Incidunt ut labor</span>
                          <span class="msg-body">sed quia non numquam eius modi tempora incidunt ut labor</span>
                        </a>
                      </span>
                    </li>
                    <li>
                      <span>
                        <a href="javascript:void(0);" class="msg">
                          <img src="{{asset('../assets/img/avatars/female.png')}}" alt="" class="item item-top-left">
                          <span class="from">Sonya Birthday</span>
                          <span class="time">Thursday, September 19th</span>
                          <span class="subject">Incidunt ut labor</span>
                          <span class="msg-body">sed quia non numquam eius modi tempora incidunt ut labor</span>
                        </a>
                      </span>
                    </li>
                    <li>
                      <span>
                        <a href="javascript:void(0);" class="msg">
                          <img src="{{asset('../assets/img/avatars/avatar3.png')}}" alt="" class="item item-top-left">
                          <span class="from">Cristina Algera</span>
                          <span class="time">Sunday, September 15th</span>
                          <span class="subject">Best-Selling Teethers</span>
                          <span class="msg-body"> ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</span>
                        </a>
                      </span>
                    </li>
                    <li>
                      <span>
                        <a href="javascript:void(0);" class="msg">
                          <img src="../assets/img/avatars/male.png" alt="" class="item item-top-left">
                          <span class="from">Lam Tampora</span>
                          <span class="time">Saturday, September 14th</span>
                          <span class="subject">Deadline due date</span>
                          <span class="msg-body">imus qui blanditiis praesentium voluptatum deleniti atque corrup</span>
                        </a>
                      </span>
                    </li>
                    <li>
                      <span class="unread">
                        <a href="javascript:void(0);" class="msg">
                          <img src="{{asset('../assets/img/avatars/avatar2.png')}}" alt="" class="item item-top-left">
                          <span class="from">Project approved! <i class="icon-paperclip"></i></span>
                          <span class="time">September 14th</span>
                          <span class="subject">Et harum quidem rerum facilis est et expedita distinctio</span>
                          <span class="msg-body">...</span>
                        </a>
                      </span>
                    </li>
                    <li>
                      <span>
                        <a href="javascript:void(0);" class="msg">
                          <img src="{{asset('../assets/img/avatars/male.png')}}" alt="" class="item item-top-left" >
                          <span class="from">JEFF, me</span>
                          <span class="time">Friday, September 13th</span>
                          <span class="subject">Bugs fixed! </span>
                          <span class="msg-body">Nam libero tempore, cum soluta nobis est eligendi optio cumque</span>
                        </a>
                      </span>
                    </li>
                  </ul>
                </div>
                <div class="tab-pane" id="notify">
                  <ul class="notify-content-body ">
                    <li>
                      <span class="padding-10 unread">
                        <em class="badge img-notify">
                        <i class="fa fa-user fa-fw fa-2x"></i>
                        </em>

                        <span>
                          2 new users just signed up! <span class="text-primary">martin.luther</span> and <span class="text-primary">kevin.reliey</span>

                          <span class="pull-right font-xs text-muted"><i>1 min ago...</i></span>
                        </span>
                      </span>
                    </li>
                    <li>
                      <span class="padding-10">
                        <em class="badge img-notify">
                        <i class="fa fa-check fa-fw fa-2x"></i>
                        </em>

                        <span>
                          2 projects were completed on time! Submitted for your approval - <a href="javascript:void(0);" class="display-normal">Click here</a>

                          <span class="pull-right font-xs text-muted"><i>1 day ago...</i></span>
                        </span>

                      </span>
                    </li>
                    <li>
                      <span class="padding-10 unread">
                        <em class="badge img-notify">
                        <i class="fa fa-user fa-fw fa-2x"></i>
                        </em>

                        <span>
                          2 new users just signed up! <span class="text-primary">martin.luther</span> and <span class="text-primary">kevin.reliey</span>

                          <span class="pull-right font-xs text-muted"><i>1 min ago...</i></span>
                        </span>
                      </span>
                    </li>
                    <li>
                      <span class="padding-10">
                        <em class="badge img-notify">
                        <i class="fa fa-lock fa-fw fa-2x"></i>
                        </em>

                        <span>
                          Your password was recently updated. Please complete your security questions from your profile page.

                          <span class="pull-right font-xs text-muted"><i>2 weeks ago...</i></span>
                        </span>
                      </span>
                    </li>
                    <li>
                      <span class="padding-10">
                        <em class="badge img-notify">
                        <i class="fa fa-user fa-fw fa-2x"></i>
                        </em>

                        <span>
                          <a href="javascript:void(0);" class="display-normal">Sofia</a> as contact? &nbsp;
                          <button class="btn btn-xs btn-primary margin-top-5">accept</button>
                          <button class="btn btn-xs btn-danger margin-top-5">reject</button>
                          <span class="pull-right font-xs text-muted"><i>3 hrs ago...</i></span>
                        </span>
                      </span>
                    </li>
                  </ul>
                </div>
                <div class="tab-pane" id="task">
                  <ul class="notify-content-body ">

                    <li>
                      <div class="task-progress">
                        <div class="clearfix">
                          <span class="pull-left">Software Update</span>
                          <span class="pull-right">65%</span>
                        </div>
                        <div class="progress progress-xs">
                          <div style="width:65%" class="progress-bar"></div>
                        </div>
                        <span  class="progress-bottom"><a href="#">More Details </a><i class="fa fa-external-link"></i></span>
                      </div>
                    </li>
                    <li>
                      <div class="task-progress">
                        <div class="clearfix">
                          <span class="pull-left">Hardware Upgrade</span>
                          <span class="pull-right">35%</span>
                        </div>
                        <div class="progress progress-xs">
                          <div style="width:35%" class="progress-bar progress-bar-danger"></div>
                        </div>
                        <span  class="progress-bottom">2015/05/06 <i class="fa fa-clock-o"></i></span>
                      </div>
                    </li>
                    <li>
                      <div class="task-progress">
                        <div class="clearfix">
                          <span class="pull-left">Unit Testing</span>
                          <span class="pull-right">15%</span>
                        </div>
                        <div class="progress progress-xs">
                          <div style="width:15%" class="progress-bar progress-bar-warning"></div>
                        </div>
                        <span  class="progress-bottom">Last update: 2015/05/06</span>
                      </div>
                    </li>

                    <li>
                      <div class="task-progress">
                        <div class="clearfix">
                          <span class="pull-left">Bug Fixes</span>
                          <span class="pull-right">90%</span>
                        </div>
                        <div class="progress progress-xs progress-striped active">
                          <div style="width:90%" class="progress-bar progress-bar-success"></div>
                        </div>
                        <span  class="progress-bottom">Last update: 2015/05/06</span>
                      </div>
                    </li>
                    <li>
                      <div class="task-progress">
                        <div class="clearfix">
                          <i class="fa fa-exclamation-triangle red icon-task"></i>
                          <span class="pull-left">Admin template change</span>
                          <span class="pull-right">20%</span>
                        </div>
                        <div class="progress progress-xs progress-striped active">
                          <div style="width:20%" class="progress-bar progress-bar-primary"></div>
                        </div>
                        <span  class="progress-bottom">Last update: 2015/05/06</span>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <span> Last updated on: 12/12/2013 9:43AM
                <button type="button"  class="btn btn-xs btn-default pull-right">
                <i class="fa fa-refresh"></i>
                </button>
              </span>
            </li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            @if (Auth::user()->avatar && File::exists(public_path("uploads/admins/".Auth::user()->avatar)))
              <img src="{{asset('/uploads/admins')}}/{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}" height="50" width="50" class="img-circle"/>
            @else
            <img alt="Golabi Avatar Admin" src="{{asset('../assets/img/avatars/avatar.png')}}" height="50" width="50" class="img-circle" />
            @endif
            {{ Auth::user()->name }} {{ Auth::user()->surname }}
            <strong class="caret"></strong>
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="{{ route('admins.edit', Auth::user()->id) }}">Profile<span class="fa fa-user pull-right"></span></a>
            </li>
            <li>
              <a href="{{ route('settings') }}">Parametre<span class="fa fa-cog pull-right"></span></a>
            </li>
            <li class="divider">
            </li>
            <li>
              <a href="{{ route('admin.logout') }}">Déconnexion<span class="fa fa-power-off pull-right"></span></a>
            </li>
          </ul>
        </li>

      </ul>

      <ul class="nav navbar-nav navbar-right">

        <li id="fullscreen-li">
          <a href="#" id="fullscreen" class="dropdown-toggle" >
            <i class="fa fa-arrows-alt"></i>
          </a>
        </li>

        <li id="side-hide-li" class="dropdown">
          <a href="#" id="side-hide" class="dropdown-toggle" >
            <i class="fa fa-reorder"></i>
          </a>
        </li>


      </ul>


    </div>

  </nav>
</header>
<!-- /end Header -->
