<!-- sidebar menu -->
<div id="sidebar" class="sidebar" >
  <div class="tabbable-panel">
    <div class="tabbable-line">
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
              <li class="separate-menu"><span>Menu</span></li>
              <li>
                <a href="{{ route('admin') }}">
                  <i class="menu-icon fa fa-tachometer"></i>
                  <span class="menu-text"> Accueil </span>
                </a>

                <b class="arrow"></b>
              </li>

              <li>
                <a href="{{ route('settings') }}">
                  <i class="menu-icon fa fa-cog"></i>
                  <span class="menu-text"> Parametre de théme </span>
                </a>
              </li>

              <li class="">
                <a href="#" class="dropdown-toggle">
                  <i class="menu-icon fa fa-user-secret"></i>
                  <span class="menu-text"> Administrateurs </span>

                  <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>
                <ul class="submenu nav-show"  >
                  <li class="">
                    <a href="{{ route('admins.index') }}" >
                      <i class="menu-icon fa fa-users"></i>
                      <span class="menu-text">Tous les administrateurs</span>
                    </a>

                    <b class="arrow"></b>
                  </li>

                  <li >
                    <a href="{{ route('admins.create') }}">
                      <i class="menu-icon fa fa-caret-right"></i>
                      <span class="menu-text">Ajouter un administrateur</span>
                    </a>

                    <b class="arrow"></b>
                  </li>

                </ul>
              </li>

              <li class="">
                <a href="#" class="dropdown-toggle">
                  <i class="menu-icon fa fa-users"></i>
                  <span class="menu-text"> Utilisateurs </span>

                  <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>
                <ul class="submenu nav-show"  >
                  <li class="">
                    <a href="{{ route('users.index') }}" >
                      <i class="menu-icon fa fa-users"></i>
                      <span class="menu-text">Tous les utilisateurs</span>
                    </a>

                    <b class="arrow"></b>
                  </li>

                  <li >
                    <a href="{{ route('users.create') }}">
                      <i class="menu-icon fa fa-caret-right"></i>
                      <span class="menu-text">Ajouter un utilisateur</span>
                    </a>

                    <b class="arrow"></b>
                  </li>

                </ul>
              </li>

              <li class="">
                <a href="#" class="dropdown-toggle">
                  <i class="menu-icon fa fa-file"></i>
                  <span class="menu-text"> Pages </span>

                  <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>
                <ul class="submenu nav-show"  >
                  <li class="">
                    <a href="{{ route('pages.index') }}" >
                      <i class="menu-icon fa fa-caret-right"></i>
                      <span class="menu-text">Tous les pages</span>
                    </a>

                    <b class="arrow"></b>
                  </li>
                  <li >
                    <a href="{{ route('pages.create') }}">
                      <i class="menu-icon fa fa-caret-right"></i>
                      <span class="menu-text">Ajouter une page</span>
                    </a>

                    <b class="arrow"></b>
                  </li>
                </ul>
              </li>

              <li class="">
                <a href="#" class="dropdown-toggle">
                  <i class="menu-icon fa fa-file-text-o"></i>
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
                  <i class="menu-icon fa fa-tags"></i>
                  <span class="menu-text"> Tags </span>

                  <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>
                <ul class="submenu nav-show"  >
                  <li class="">
                    <a href="{{ route('tags.index') }}" >
                      <i class="menu-icon fa fa-caret-right"></i>
                      <span class="menu-text">Tous les tags</span>
                    </a>

                    <b class="arrow"></b>
                  </li>
                  <li class="">
                    <a href="{{ route('tags.create') }}" >
                      <i class="menu-icon fa fa-caret-right"></i>
                      <span class="menu-text">Ajouter un tag</span>
                    </a>

                    <b class="arrow"></b>
                  </li>
                </ul>
              </li>

              <li class="">
                <a href="#" class="dropdown-toggle">
                  <i class="menu-icon fa fa-comments"></i>
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

              <li class="">
                <a href="#" class="dropdown-toggle">
                  <i class="menu-icon fa fa-handshake-o"></i>
                  <span class="menu-text"> Services </span>

                  <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>
                <ul class="submenu nav-show"  >
                  <li class="">
                    <a href="{{ route('services.index') }}" >
                      <i class="menu-icon fa fa-caret-right"></i>
                      <span class="menu-text">Tous les services</span>
                    </a>

                    <b class="arrow"></b>
                  </li>

                  <li >
                    <a href="{{ route('services.create') }}">
                      <i class="menu-icon fa fa-caret-right"></i>
                      <span class="menu-text">Ajouter un service</span>
                    </a>

                    <b class="arrow"></b>
                  </li>

                </ul>
              </li>

              <li class="">
                <a href="#" class="dropdown-toggle">
                  <i class="menu-icon fa fa-picture-o"></i>
                  <span class="menu-text"> Sliders </span>

                  <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>
                <ul class="submenu nav-show"  >
                  <li class="">
                    <a href="{{ route('sliders.index') }}" >
                      <i class="menu-icon fa fa-caret-right"></i>
                      <span class="menu-text">Tous les sliders</span>
                    </a>

                    <b class="arrow"></b>
                  </li>

                  <li >
                    <a href="{{ route('sliders.create') }}">
                      <i class="menu-icon fa fa-caret-right"></i>
                      <span class="menu-text">Ajouter un slider</span>
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
      </div><!-- end tab-content-->
    </div><!-- end tabbable-line -->
  </div><!-- end tabbable-panel -->
</div>
<!-- /end #sidebar -->
