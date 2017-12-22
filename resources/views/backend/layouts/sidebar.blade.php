<!-- sidebar menu -->
<div id="sidebar" class="sidebar" >
  <div class="tabbable-panel">
    <div class="tabbable-line">
      <ul class="nav nav-tabs nav-justified">
        <li id="tab_menu_a" class="active">
          <a href="#tab_menu_1" data-toggle="tab">
            <i class="fa fa-reorder"></i>
          </a>
        </li>
        <li id="contact-tab">
          <a href="#tab_contact_2" data-toggle="tab">
            <i class="fa fa-user"></i>
          </a>
        </li>
        <li id="report-tab">
          <a href="#tab_report_3" data-toggle="tab">
            <i class="fa fa-pie-chart"></i>
          </a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="tab_menu_1">
          <form class="search-menu-form" >
            <div class="">
              <input id="menu-list-search" placeholder="Search Menu..." type="text" class="form-control search-menu">
            </div>
          </form>

          <!-- sidebar Menu -->
          <div id="MainMenu" class="">

            <ul id="menu-list" class="nav nav-list">
              <li class="separate-menu"><span>Main Menu</span></li>
              <li>
                <a href="#">
                  <i class="menu-icon fa fa-tachometer"></i>
                  <span class="menu-text"> Dashboard </span>
                </a>

                <b class="arrow"></b>
              </li>

              <li class="">
                <a href="#" class="dropdown-toggle">
                  <i class="menu-icon fa fa-desktop"></i>
                  <span class="menu-text"> Articles </span>

                  <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>
                <ul class="submenu nav-show"  >
                  <li class="">
                    <a href="{{ route('posts.index') }}" >
                      <i class="menu-icon fa fa-caret-right"></i>
                      <span class="menu-text">Tous les articles</span>
                    </a>

                    <b class="arrow"></b>
                  </li>

                  <li >
                    <a href="{{ route('posts.create') }}">
                      <i class="menu-icon fa fa-caret-right"></i>
                      <span class="menu-text">Ajouter un article</span>
                    </a>

                    <b class="arrow"></b>
                  </li>
                  <li >
                    <a href="{{ route('categories.index') }}">
                      <i class="menu-icon fa fa-caret-right"></i>
                      <span class="menu-text">Tous les catégories</span>
                    </a>

                    <b class="arrow"></b>
                  </li>

                  <li >
                    <a href="{{ route('categories.create') }}">
                      <i class="menu-icon fa fa-caret-right"></i>
                      <span class="menu-text">Ajouter une catégorie</span>
                    </a>

                    <b class="arrow"></b>
                  </li>

                </ul>
              </li>

              <li class="">
                <a href="#" class="dropdown-toggle">
                  <i class="menu-icon fa fa-desktop"></i>
                  <span class="menu-text"> Commentaires </span>

                  <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>
                <ul class="submenu nav-show"  >
                  <li class="">
                    <a href="{{ route('comments.index') }}" >
                      <i class="menu-icon fa fa-caret-right"></i>
                      <span class="menu-text">Tous les commentaires</span>
                    </a>

                    <b class="arrow"></b>
                  </li>
                </ul>
              </li>

           </ul>


            <a class="sidebar-collapse" id="sidebar-collapse" data-toggle="collapse" data-target="#test">
              <i id="icon-sw-s-b" class="fa fa-angle-double-left"></i>
            </a>
          </div>
        </div>
        <div class="tab-pane" id="tab_contact_2">

                  <div class="search-menu-form" role="search">
            <div class="">
              <input id="contact-list-search" placeholder="Search Contact..." type="text" class="form-control search-menu">
              <a href="#modal-add-contact" data-toggle="modal" class="btn-modal btn-link" title="Add Contact">
                <i class="fa fa-plus"></i>
              </a>
            </div>
          </div>


                   <ul class="list-group" id="contact-list">

                    <li class="separate-menu"><span>Online</span></li>

                      <li class="list-group-item">
                          <div class="col-xs-12 col-sm-3 avatar-contact">
                              <img src="{{asset('../assets/img/avatars/avatar-6-ct.jpg')}}" alt="Scott Stevens" class="img-responsive img-flat" />
                          </div>
                          <div class="col-xs-12 col-sm-9 ">
                              <span class="name">Scott Stevens</span><br/>
                              <span class="glyphicon glyphicon-map-marker text-muted c-info" data-toggle="tooltip" title="5842 Hillcrest Rd"></span>
                              <span class="visible-xs"> <span class="text-muted">5842 Hillcrest Rd</span><br/></span>
                              <span class="glyphicon glyphicon-earphone text-muted c-info" data-toggle="tooltip" title="(870) 288-4149"></span>
                              <span class="visible-xs"> <span class="text-muted">(870) 288-4149</span><br/></span>
                              <span class="fa fa-comments text-muted c-info" data-toggle="tooltip" title="scott.stevens@example.com"></span>
                              <span class="visible-xs"> <span class="text-muted">scott.stevens@example.com</span><br/></span>
                          </div>
                          <div class="clearfix"></div>
                      </li>
                      <li class="list-group-item">
                          <div class="col-xs-12 col-sm-3 avatar-contact">
                              <img src="{{asset('../assets/img/avatars/avatar-7-ct.jpg')}}" alt="Seth Frazier" class="img-responsive img-flat" />
                          </div>
                          <div class="col-xs-12 col-sm-9 ">
                              <span class="name">Seth Frazier</span><br/>
                              <span class="glyphicon glyphicon-map-marker text-muted c-info" data-toggle="tooltip" title="7396 E North St"></span>
                              <span class="visible-xs"> <span class="text-muted">7396 E North St</span><br/></span>
                              <span class="glyphicon glyphicon-earphone text-muted c-info" data-toggle="tooltip" title="(560) 180-4143"></span>
                              <span class="visible-xs"> <span class="text-muted">(560) 180-4143</span><br/></span>
                              <span class="fa fa-comments text-muted c-info" data-toggle="tooltip" title="seth.frazier@example.com"></span>
                              <span class="visible-xs"> <span class="text-muted">seth.frazier@example.com</span><br/></span>
                          </div>
                          <div class="clearfix"></div>
                      </li>

                      <li class="list-group-item">
                          <div class="col-xs-12 col-sm-3 avatar-contact">
                              <img src="../assets/img/avatars/avatar-8-ct.jpg" alt="Todd Shelton" class="img-responsive img-flat" />
                          </div>
                          <div class="col-xs-12 col-sm-9">
                              <span class="name">Todd Shelton</span><br/>
                              <span class="glyphicon glyphicon-map-marker text-muted c-info" data-toggle="tooltip" title="5133 Pecan Acres Ln"></span>
                              <span class="visible-xs"> <span class="text-muted">5133 Pecan Acres Ln</span><br/></span>
                              <span class="glyphicon glyphicon-earphone text-muted c-info" data-toggle="tooltip" title="(522) 991-3367"></span>
                              <span class="visible-xs"> <span class="text-muted">(522) 991-3367</span><br/></span>
                              <span class="fa fa-comments text-muted c-info" data-toggle="tooltip" title="todd.shelton@example.com"></span>
                              <span class="visible-xs"> <span class="text-muted">todd.shelton@example.com</span><br/></span>
                          </div>
                          <div class="clearfix"></div>
                      </li>
                      <li class="list-group-item">
                          <div class="col-xs-12 col-sm-3 avatar-contact">
                              <img src="{{asset('../assets/img/avatars/avatar-9-ct.jpg')}}" alt="Rosemary Porter" class="img-responsive img-flat" />
                          </div>
                          <div class="col-xs-12 col-sm-9">
                              <span class="name">Rosemary Porter</span><br/>
                              <span class="glyphicon glyphicon-map-marker text-muted c-info" data-toggle="tooltip" title="5267 Cackson St"></span>
                              <span class="visible-xs"> <span class="text-muted">5267 Cackson St</span><br/></span>
                              <span class="glyphicon glyphicon-earphone text-muted c-info" data-toggle="tooltip" title="(497) 160-9776"></span>
                              <span class="visible-xs"> <span class="text-muted">(497) 160-9776</span><br/></span>
                              <span class="fa fa-comments text-muted c-info" data-toggle="tooltip" title="rosemary.porter@example.com"></span>
                              <span class="visible-xs"> <span class="text-muted">rosemary.porter@example.com</span><br/></span>
                          </div>
                          <div class="clearfix"></div>
                      </li>
                      <li class="list-group-item">
                          <div class="col-xs-12 col-sm-3 avatar-contact">
                              <img src="../assets/img/avatars/avatar-10-ct.jpg" alt="Debbie Schmidt" class="img-responsive img-flat" />
                          </div>
                          <div class="col-xs-12 col-sm-9">
                              <span class="name">Debbie Schmidt</span><br/>
                              <span class="glyphicon glyphicon-map-marker text-muted c-info" data-toggle="tooltip" title="3903 W Alexander Rd"></span>
                              <span class="visible-xs"> <span class="text-muted">3903 W Alexander Rd</span><br/></span>
                              <span class="glyphicon glyphicon-earphone text-muted c-info" data-toggle="tooltip" title="(867) 322-1852"></span>
                              <span class="visible-xs"> <span class="text-muted">(867) 322-1852</span><br/></span>
                              <span class="fa fa-comments text-muted c-info" data-toggle="tooltip" title="debbie.schmidt@example.com"></span>
                              <span class="visible-xs"> <span class="text-muted">debbie.schmidt@example.com</span><br/></span>
                          </div>
                          <div class="clearfix"></div>
                      </li>

                      <li class="separate-menu"><span>offline</span></li>
                      <li class="list-group-item">
                          <div class="col-xs-12 col-sm-3 avatar-contact">
                              <img src="{{asset('../assets/img/avatars/avatar-11-ct.jpg')}}" alt="Glenda Patterson" class="img-responsive img-flat" />
                          </div>
                          <div class="col-xs-12 col-sm-9 ">
                              <span class="name">Glenda Patterson</span><br/>
                              <span class="glyphicon glyphicon-map-marker text-muted c-info" data-toggle="tooltip" title="5020 Poplar Dr"></span>
                              <span class="visible-xs"> <span class="text-muted">5020 Poplar Dr</span><br/></span>
                              <span class="glyphicon glyphicon-earphone text-muted c-info" data-toggle="tooltip" title="(538) 718-7548"></span>
                              <span class="visible-xs"> <span class="text-muted">(538) 718-7548</span><br/></span>
                              <span class="fa fa-comments text-muted c-info" data-toggle="tooltip" title="glenda.patterson@example.com"></span>
                              <span class="visible-xs"> <span class="text-muted">glenda.patterson@example.com</span><br/></span>
                          </div>
                          <div class="clearfix"></div>
                      </li>
                  </ul>

        </div>
        <div class="tab-pane " id="tab_report_3">

          <div class="search-menu-form" role="search">
            <div class="">
              <input id="task-list-search" placeholder="Search Task..." type="text" class="form-control search-menu">
              <a href="#modal-add-task" data-toggle="modal" class="btn-modal btn-link" title="Add Task">
                <i class="fa fa-plus"></i>
              </a>
            </div>
          </div>
          <div class="task-content tasks-widget">
                            <ul id="sortable" class="task-list ui-sortable">
                                <li class="list-primary">
                                    <i class=" fa fa-ellipsis-v"></i>
                                    <div class="task-checkbox m-checkbox">
                                        <input type="checkbox" class="list-child">
                                    </div>
                                    <div class="task-title">
                                        <span class="task-title-sp">Flatlab is Modern Dashboard</span>
                                        <span class="badge badge-sm label-success">2 Days</span>

                                    </div>
                                </li>

                                <li class="list-danger">
                                    <i class=" fa fa-ellipsis-v"></i>
                                    <div class="task-checkbox m-checkbox">
                                        <input type="checkbox" class="list-child">
                                    </div>
                                    <div class="task-title">
                                        <span class="task-title-sp"> Fully Responsive &amp; Bootstrap 3.0.2 Compatible </span>
                                        <span class="badge badge-sm label-danger">Done</span>

                                    </div>
                                </li>
                                <li class="list-success">
                                    <i class=" fa fa-ellipsis-v"></i>
                                    <div class="task-checkbox m-checkbox">
                                        <input type="checkbox" class="list-child">
                                    </div>
                                    <div class="task-title">
                                        <span class="task-title-sp"> Daily Standup Meeting </span>
                                        <span class="badge badge-sm label-warning">Company</span>

                                    </div>
                                </li>
                                <li class="list-warning">
                                    <i class=" fa fa-ellipsis-v"></i>
                                    <div class="task-checkbox m-checkbox">
                                        <input type="checkbox" class="list-child">
                                    </div>
                                    <div class="task-title">
                                        <span class="task-title-sp"> Write well documentation for this theme </span>
                                        <span class="badge badge-sm label-primary">3 Days</span>

                                    </div>
                                </li>
                                <li class="list-info">
                                    <i class=" fa fa-ellipsis-v"></i>
                                    <div class="task-checkbox m-checkbox">
                                        <input type="checkbox" class="list-child">
                                    </div>
                                    <div class="task-title">
                                        <span class="task-title-sp"> We have a plan to include more features in future update </span>
                                        <span class="badge badge-sm label-info">Tomorrow</span>

                                    </div>
                                </li>
                                <li class="list-inverse">
                                    <i class=" fa fa-ellipsis-v"></i>
                                    <div class="task-checkbox m-checkbox">
                                        <input type="checkbox" class="list-child">
                                    </div>
                                    <div class="task-title">
                                        <span class="task-title-sp"> Don't be hesitate to purchase this Dashbord </span>
                                        <span class="badge badge-sm label-inverse">Now</span>

                                    </div>
                                </li>
                                <li class="list-primary">
                                    <i class=" fa fa-ellipsis-v"></i>
                                    <div class="task-checkbox m-checkbox">
                                        <input type="checkbox" class="list-child">
                                    </div>
                                    <div class="task-title">
                                        <span class="task-title-sp"> Code compile and upload </span>
                                        <span class="badge badge-sm label-success">2 Days</span>

                                    </div>
                                </li>

                                <li class="list-success">
                                    <i class=" fa fa-ellipsis-v"></i>
                                    <div class="task-checkbox m-checkbox">
                                        <input type="checkbox" class="list-child">
                                    </div>
                                    <div class="task-title">
                                        <span class="task-title-sp"> Tell your friends to buy this dashboad </span>
                                        <span class="badge badge-sm label-danger">Now</span>

                                    </div>
                                </li>
              <li class="">
                                    <div class="task-title">
                                        <a href="#" class="center"> See All Tasks ...</a>
                                    </div>
                                </li>
                            </ul>
                        </div>



        </div>
      </div><!-- end tab-content-->
    </div><!-- end tabbable-line -->
  </div><!-- end tabbable-panel -->
</div>
<!-- /end #sidebar -->
