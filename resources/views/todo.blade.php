@extends('index-dashboard')
@section('content')
    <!-- BEGIN: Header-->
    <header class="page-topbar" id="header">
        <div class="navbar navbar-fixed">
          <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-indigo-purple no-shadow">
            <div class="nav-wrapper">
              <div class="header-search-wrapper hide-on-med-and-down"><i class="material-icons">search</i>
                <input class="header-search-input z-depth-2" type="text" name="Search" placeholder="Explore Materialize">
              </div>
              <ul class="navbar-list right">
                <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light translation-button" href="javascript:void(0);" data-target="translation-dropdown"><span class="flag-icon flag-icon-gb"></span></a></li>
                <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);"><i class="material-icons">settings_overscan</i></a></li>
                <li class="hide-on-large-only"><a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);"><i class="material-icons">search</i></a></li>
                <li><a class="waves-effect waves-block waves-light notification-button" href="javascript:void(0);" data-target="notifications-dropdown"><i class="material-icons">notifications_none<small class="notification-badge">5</small></i></a></li>
                <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online"><img src="../app-assets/images/avatar/avatar-7.png" alt="avatar"><i></i></span></a></li>
                <li><a class="waves-effect waves-block waves-light sidenav-trigger" href="#" data-target="slide-out-right"><i class="material-icons">format_indent_increase</i></a></li>
              </ul>
              <!-- translation-button-->
              <ul class="dropdown-content" id="translation-dropdown">
                <li><a class="grey-text text-darken-1" href="#!"><i class="flag-icon flag-icon-gb"></i> English</a></li>
                <li><a class="grey-text text-darken-1" href="#!"><i class="flag-icon flag-icon-fr"></i> French</a></li>
                <li><a class="grey-text text-darken-1" href="#!"><i class="flag-icon flag-icon-cn"></i> Chinese</a></li>
                <li><a class="grey-text text-darken-1" href="#!"><i class="flag-icon flag-icon-de"></i> German</a></li>
              </ul>
              <!-- notifications-dropdown-->
              <ul class="dropdown-content" id="notifications-dropdown">
                <li>
                  <h6>NOTIFICATIONS<span class="new badge">5</span></h6>
                </li>
                <li class="divider"></li>
                <li><a class="grey-text text-darken-2" href="#!"><span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> A new order has been placed!</a>
                  <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
                </li>
                <li><a class="grey-text text-darken-2" href="#!"><span class="material-icons icon-bg-circle red small">stars</span> Completed the task</a>
                  <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
                </li>
                <li><a class="grey-text text-darken-2" href="#!"><span class="material-icons icon-bg-circle teal small">settings</span> Settings updated</a>
                  <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
                </li>
                <li><a class="grey-text text-darken-2" href="#!"><span class="material-icons icon-bg-circle deep-orange small">today</span> Director meeting started</a>
                  <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
                </li>
                <li><a class="grey-text text-darken-2" href="#!"><span class="material-icons icon-bg-circle amber small">trending_up</span> Generate monthly report</a>
                  <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
                </li>
              </ul>
              <!-- profile-dropdown-->
              <ul class="dropdown-content" id="profile-dropdown">
                <li><a class="grey-text text-darken-1" href="user-profile-page.html"><i class="material-icons">person_outline</i> Profile</a></li>
                <li><a class="grey-text text-darken-1" href="app-chat.html"><i class="material-icons">chat_bubble_outline</i> Chat</a></li>
                <li><a class="grey-text text-darken-1" href="page-faq.html"><i class="material-icons">help_outline</i> Help</a></li>
                <li class="divider"></li>
                <li><a class="grey-text text-darken-1" href="user-lock-screen.html"><i class="material-icons">lock_outline</i> Lock</a></li>
                <li><a class="grey-text text-darken-1" href="user-login.html"><i class="material-icons">keyboard_tab</i> Logout</a></li>
              </ul>
            </div>
            <nav class="display-none search-sm">
              <div class="nav-wrapper">
                <form>
                  <div class="input-field">
                    <input class="search-box-sm" type="search" required="">
                    <label class="label-icon" for="search"><i class="material-icons search-sm-icon">search</i></label><i class="material-icons search-sm-close">close</i>
                  </div>
                </form>
              </div>
            </nav>
          </nav>
        </div>
      </header>
      <!-- END: Header-->



      <!-- BEGIN: SideNav-->
      <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
        <div class="brand-sidebar">
          <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="index.html"><img src="../app-assets/images/logo/materialize-logo-color.png" alt="materialize logo"/><span class="logo-text hide-on-med-and-down">Materialize</span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
        </div>
        <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
          <li class="active bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="">Dashboard</span><span class="badge badge pill orange float-right mr-10">3</span></a>
            <div class="collapsible-body">
              <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <li class="active"><a class="collapsible-body active" href="dashboard-modern.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Modern</span></a>
                </li>
                <li><a class="collapsible-body" href="dashboard-ecommerce.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>eCommerce</span></a>
                </li>
                <li><a class="collapsible-body" href="dashboard-analytics.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Analytics</span></a>
                </li>
              </ul>
            </div>
          </li>
          <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">dvr</i><span class="menu-title" data-i18n="">Templates</span></a>
            <div class="collapsible-body">
              <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <li><a class="collapsible-body collapsible-header waves-effect waves-cyan" href="#" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Vertical</span></a>
                  <div class="collapsible-body">
                    <ul class="collapsible" data-collapsible="accordion">
                      <li><a class="collapsible-body" href="../vertical-modern-menu-template/" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Modern  Menu</span></a>
                      </li>
                      <li><a class="collapsible-body" href="../vertical-menu-nav-dark-template/" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Navbar Dark</span></a>
                      </li>
                      <li><a class="collapsible-body" href="../vertical-gradient-menu-template/" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Gradient Menu</span></a>
                      </li>
                      <li><a class="collapsible-body" href="../vertical-dark-menu-template/" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Dark Menu</span></a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li><a class="collapsible-body collapsible-header waves-effect waves-cyan" href="#" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Horizontal</span></a>
                  <div class="collapsible-body">
                    <ul class="collapsible" data-collapsible="accordion">
                      <li><a class="collapsible-body" href="../horizontal-menu-template/" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Horizontal Menu</span></a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li class="navigation-header"><a class="navigation-header-text">Applications</a><i class="navigation-header-icon material-icons">more_horiz</i>
          </li>
          <li class="bold"><a class="waves-effect waves-cyan " href="app-email.html"><i class="material-icons">mail_outline</i><span class="menu-title" data-i18n="">Mail</span><span class="badge new badge pill pink accent-2 float-right mr-10">5</span></a>
          </li>
          <li class="bold"><a class="waves-effect waves-cyan " href="app-chat.html"><i class="material-icons">chat_bubble_outline</i><span class="menu-title" data-i18n="">Chat</span></a>
          </li>
          <li class="bold"><a class="waves-effect waves-cyan " href="app-todo.html"><i class="material-icons">check</i><span class="menu-title" data-i18n="">ToDo</span></a>
          </li>
          <li class="bold"><a class="waves-effect waves-cyan " href="app-contacts.html"><i class="material-icons">import_contacts</i><span class="menu-title" data-i18n="">Contacts</span></a>
          </li>
          <li class="bold"><a class="waves-effect waves-cyan " href="app-calendar.html"><i class="material-icons">today</i><span class="menu-title" data-i18n="">Calendar</span></a>
          </li>
          <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">add_shopping_cart</i><span class="menu-title" data-i18n="">eCommerce</span></a>
            <div class="collapsible-body">
              <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <li><a class="collapsible-body" href="eCommerce-products-page.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Products Page</span></a>
                </li>
                <li><a class="collapsible-body" href="eCommerce-pricing.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Pricing</span></a>
                </li>
                <li><a class="collapsible-body" href="eCommerce-invoice.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Invoice</span></a>
                </li>
              </ul>
            </div>
          </li>
          <li class="navigation-header"><a class="navigation-header-text">Pages </a><i class="navigation-header-icon material-icons">more_horiz</i>
          </li>
          <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">content_paste</i><span class="menu-title" data-i18n="">Pages</span></a>
            <div class="collapsible-body">
              <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <li><a class="collapsible-body" href="page-contact.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Contact</span></a>
                </li>
                <li><a class="collapsible-body" href="page-blog-list.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Blog</span></a>
                </li>
                <li><a class="collapsible-body" href="page-search.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Search</span></a>
                </li>
                <li><a class="collapsible-body" href="page-knowledge.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Knowledge</span></a>
                </li>
                <li><a class="collapsible-body" href="page-faq.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>FAQs</span></a>
                </li>
                <li><a class="collapsible-body" href="page-blank.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Page Blank</span></a>
                </li>
              </ul>
            </div>
          </li>
          <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">crop_original</i><span class="menu-title" data-i18n="">Medias</span></a>
            <div class="collapsible-body">
              <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <li><a class="collapsible-body" href="media-gallery-page.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Gallery Page</span></a>
                </li>
                <li><a class="collapsible-body" href="media-hover-effects.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Media Hover Effects</span></a>
                </li>
              </ul>
            </div>
          </li>
          <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">face</i><span class="menu-title" data-i18n="">User</span><span class="badge badge pill purple float-right mr-10">10</span></a>
            <div class="collapsible-body">
              <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <li><a class="collapsible-body" href="user-profile-page.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>User Profile</span></a>
                </li>
                <li><a class="collapsible-body" href="user-login.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Login</span></a>
                </li>
                <li><a class="collapsible-body" href="user-register.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Register</span></a>
                </li>
                <li><a class="collapsible-body" href="user-forgot-password.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Forgot Password</span></a>
                </li>
                <li><a class="collapsible-body" href="user-lock-screen.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Lock Screen</span></a>
                </li>
              </ul>
            </div>
          </li>
          <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">filter_tilt_shift</i><span class="menu-title" data-i18n="">Misc</span></a>
            <div class="collapsible-body">
              <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <li><a class="collapsible-body" href="page-404.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>404</span></a>
                </li>
                <li><a class="collapsible-body" href="page-maintenance.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Page Maintenanace</span></a>
                </li>
                <li><a class="collapsible-body" href="page-500.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>500</span></a>
                </li>
              </ul>
            </div>
          </li>
          <li class="navigation-header"><a class="navigation-header-text">User Interface </a><i class="navigation-header-icon material-icons">more_horiz</i>
          </li>
          <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">cast</i><span class="menu-title" data-i18n="">Cards</span></a>
            <div class="collapsible-body">
              <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <li><a class="collapsible-body" href="cards-basic.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Cards</span></a>
                </li>
                <li><a class="collapsible-body" href="cards-advance.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Cards Advance</span></a>
                </li>
                <li><a class="collapsible-body" href="cards-extended.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Cards Extended</span></a>
                </li>
              </ul>
            </div>
          </li>
          <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">invert_colors</i><span class="menu-title" data-i18n="">CSS</span></a>
            <div class="collapsible-body">
              <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <li><a class="collapsible-body" href="css-typography.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Typograpy</span></a>
                </li>
                <li><a class="collapsible-body" href="css-color.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Color</span></a>
                </li>
                <li><a class="collapsible-body" href="css-grid.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Grid</span></a>
                </li>
                <li><a class="collapsible-body" href="css-helpers.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Helpers</span></a>
                </li>
                <li><a class="collapsible-body" href="css-media.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Media</span></a>
                </li>
                <li><a class="collapsible-body" href="css-pulse.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Pulse</span></a>
                </li>
                <li><a class="collapsible-body" href="css-sass.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Sass</span></a>
                </li>
                <li><a class="collapsible-body" href="css-shadow.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Shadow</span></a>
                </li>
                <li><a class="collapsible-body" href="css-animations.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Animations</span></a>
                </li>
                <li><a class="collapsible-body" href="css-transitions.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Transitions</span></a>
                </li>
              </ul>
            </div>
          </li>
          <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">photo_filter</i><span class="menu-title" data-i18n="">Basic UI</span></a>
            <div class="collapsible-body">
              <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <li><a class="collapsible-body collapsible-header waves-effect waves-cyan" href="#" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Buttons</span></a>
                  <div class="collapsible-body">
                    <ul class="collapsible" data-collapsible="accordion">
                      <li><a class="collapsible-body" href="ui-basic-buttons.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Basic</span></a>
                      </li>
                      <li><a class="collapsible-body" href="ui-extended-buttons.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Extended</span></a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li><a class="collapsible-body" href="ui-icons.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Icons</span></a>
                </li>
                <li><a class="collapsible-body" href="ui-alerts.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Alerts</span></a>
                </li>
                <li><a class="collapsible-body" href="ui-badges.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Badges</span></a>
                </li>
                <li><a class="collapsible-body" href="ui-breadcrumbs.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Breadcrumbs</span></a>
                </li>
                <li><a class="collapsible-body" href="ui-chips.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Chips</span></a>
                </li>
                <li><a class="collapsible-body" href="ui-collections.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Collections</span></a>
                </li>
                <li><a class="collapsible-body" href="ui-navbar.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Navbar</span></a>
                </li>
                <li><a class="collapsible-body" href="ui-pagination.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Pagination</span></a>
                </li>
                <li><a class="collapsible-body" href="ui-preloader.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Preloader</span></a>
                </li>
              </ul>
            </div>
          </li>
          <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">settings_brightness</i><span class="menu-title" data-i18n="">Advanced UI</span></a>
            <div class="collapsible-body">
              <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <li><a class="collapsible-body" href="advance-ui-carousel.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Carousel</span></a>
                </li>
                <li><a class="collapsible-body" href="advance-ui-collapsibles.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Collapsibles</span></a>
                </li>
                <li><a class="collapsible-body" href="advance-ui-toasts.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Toasts</span></a>
                </li>
                <li><a class="collapsible-body" href="advance-ui-tooltip.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Tooltip</span></a>
                </li>
                <li><a class="collapsible-body" href="advance-ui-dropdown.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Dropdown</span></a>
                </li>
                <li><a class="collapsible-body" href="advance-ui-feature-discovery.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Discovery</span></a>
                </li>
                <li><a class="collapsible-body" href="advance-ui-media.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Media</span></a>
                </li>
                <li><a class="collapsible-body" href="advance-ui-modals.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Modals</span></a>
                </li>
                <li><a class="collapsible-body" href="advance-ui-scrollspy.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Scrollspy</span></a>
                </li>
                <li><a class="collapsible-body" href="advance-ui-tabs.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Tabs</span></a>
                </li>
                <li><a class="collapsible-body" href="advance-ui-waves.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Waves</span></a>
                </li>
              </ul>
            </div>
          </li>
          <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">add_to_queue</i><span class="menu-title" data-i18n="">Extra Components</span></a>
            <div class="collapsible-body">
              <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <li><a class="collapsible-body" href="extra-components-range-slider.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Range Slider</span></a>
                </li>
                <li><a class="collapsible-body" href="extra-components-sweetalert.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Sweetalert</span></a>
                </li>
                <li><a class="collapsible-body" href="extra-components-nestable.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Nestable</span></a>
                </li>
                <li><a class="collapsible-body" href="extra-components-translation.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Translation</span></a>
                </li>
                <li><a class="collapsible-body" href="extra-components-highlight.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Highlight</span></a>
                </li>
              </ul>
            </div>
          </li>
          <li class="navigation-header"><a class="navigation-header-text">Tables &amp; Forms </a><i class="navigation-header-icon material-icons">more_horiz</i>
          </li>
          <li class="bold"><a class="waves-effect waves-cyan " href="table-basic.html"><i class="material-icons">border_all</i><span class="menu-title" data-i18n="">Basic Tables</span></a>
          </li>
          <li class="bold"><a class="waves-effect waves-cyan " href="table-data-table.html"><i class="material-icons">grid_on</i><span class="menu-title" data-i18n="">Data Tables</span></a>
          </li>
          <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">chrome_reader_mode</i><span class="menu-title" data-i18n="">Forms</span></a>
            <div class="collapsible-body">
              <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <li><a class="collapsible-body" href="form-elements.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Form Elements</span></a>
                </li>
                <li><a class="collapsible-body" href="form-validation.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Form Validation</span></a>
                </li>
                <li><a class="collapsible-body" href="form-masks.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Form Masks</span></a>
                </li>
                <li><a class="collapsible-body" href="form-file-uploads.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>File Uploads</span></a>
                </li>
              </ul>
            </div>
          </li>
          <li class="bold"><a class="waves-effect waves-cyan " href="form-layouts.html"><i class="material-icons">image_aspect_ratio</i><span class="menu-title" data-i18n="">Form Layouts</span></a>
          </li>
          <li class="bold"><a class="waves-effect waves-cyan " href="form-wizard.html"><i class="material-icons">settings_ethernet</i><span class="menu-title" data-i18n="">Form Wizard</span></a>
          </li>
          <li class="navigation-header"><a class="navigation-header-text">Charts &amp; Maps </a><i class="navigation-header-icon material-icons">more_horiz</i>
          </li>
          <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">pie_chart_outlined</i><span class="menu-title" data-i18n="">Chart</span></a>
            <div class="collapsible-body">
              <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <li><a class="collapsible-body" href="charts-chartjs.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>ChartJS</span></a>
                </li>
                <li><a class="collapsible-body" href="charts-chartist.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Chartist</span></a>
                </li>
                <li><a class="collapsible-body" href="charts-sparklines.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Sparkline Charts</span></a>
                </li>
              </ul>
            </div>
          </li>
          <li class="navigation-header"><a class="navigation-header-text">Misc </a><i class="navigation-header-icon material-icons">more_horiz</i>
          </li>
          <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">photo_filter</i><span class="menu-title" data-i18n="">Menu levels</span></a>
            <div class="collapsible-body">
              <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <li><a class="collapsible-body" href="#" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Second level</span></a>
                </li>
                <li><a class="collapsible-body collapsible-header waves-effect waves-cyan" href="#" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Second level child</span></a>
                  <div class="collapsible-body">
                    <ul class="collapsible" data-collapsible="accordion">
                      <li><a class="collapsible-body" href="#" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Third level</span></a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li class="bold"><a class="waves-effect waves-cyan " href="changelog.html"><i class="material-icons">track_changes</i><span class="menu-title" data-i18n="">Changelog</span><span class="badge badge pill light-blue float-right mr-10">5.1</span></a>
          </li>
          <li class="bold"><a class="waves-effect waves-cyan " href="../../../documentation/index.html"><i class="material-icons">import_contacts</i><span class="menu-title" data-i18n="">Documentation</span></a>
          </li>
          <li class="bold"><a class="waves-effect waves-cyan " href="https://pixinvent.ticksy.com/"><i class="material-icons">help_outline</i><span class="menu-title" data-i18n="">Support</span></a>
          </li>
        </ul>
        <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
      </aside>
      <!-- END: SideNav-->

      <!-- BEGIN: Page Main-->
      <div id="main">
        <div class="row">
          <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
          <div class="col s12">
            <div class="container">
              <!-- Current balance & total transactions cards-->
  <div class="row mt-4">
     <div class="col s12 m4 l4">
        <!-- Current Balance -->
        <div class="card animate fadeLeft">
           <div class="card-content">
              <h4 class="card-title mb-0">Current Balance <i class="material-icons float-right">more_vert</i></h4>
              <p class="medium-small">This billing cycle</p>
              <div class="current-balance-container">
                 <div id="current-balance-donut-chart" class="current-balance-shadow"></div>
              </div>
              <h5 class="center-align">$ 50,150.00</h5>
              <p class="medium-small center-align">Used balance this billing cycle</p>
           </div>
        </div>
     </div>
     <div class="col s12 m8 l8 animate fadeRight">
        <!-- Total Transaction -->
        <div class="card">
           <div class="card-content">
              <h4 class="card-title mb-0">Total Transaction <i class="material-icons float-right">more_vert</i></h4>
              <p class="medium-small">This month transaction</p>
              <div class="total-transaction-container">
                 <div id="total-transaction-line-chart" class="total-transaction-shadow"></div>
              </div>
           </div>
        </div>
     </div>
  </div>
  <!--/ Current balance & total transactions cards-->

  <!-- User statistics & appointment cards-->
  <div class="row">
     <div class="col s12 l5">
        <!-- User Statistics -->
        <div class="card user-statistics-card animate fadeLeft">
           <div class="card-content">
              <h4 class="card-title mb-0">User Statistics <i class="material-icons float-right">more_vert</i></h4>
              <div class="row">
                 <div class="col s12 m6">
                    <ul class="collection border-none mb-0">
                       <li class="collection-item avatar">
                          <i class="material-icons circle pink accent-2">trending_up</i>
                          <p class="medium-small">This year</p>
                          <h5 class="mt-0 mb-0">60%</h5>
                       </li>
                    </ul>
                 </div>
                 <div class="col s12 m6">
                    <ul class="collection border-none mb-0">
                       <li class="collection-item avatar">
                          <i class="material-icons circle purple accent-4">trending_down</i>
                          <p class="medium-small">Last year</p>
                          <h5 class="mt-0 mb-0">40%</h5>
                       </li>
                    </ul>
                 </div>
              </div>
              <div class="user-statistics-container">
                 <div id="user-statistics-bar-chart" class="user-statistics-shadow"></div>
              </div>
           </div>
        </div>
     </div>
     <div class="col s12 l4">
        <!-- Recent Buyers -->
        <div class="card recent-buyers-card animate fadeUp">
           <div class="card-content">
              <h4 class="card-title mb-0">Recent Buyers <i class="material-icons float-right">more_vert</i></h4>
              <p class="medium-small pt-2">Today</p>
              <ul class="collection mb-0">
                 <li class="collection-item avatar">
                    <img src="../app-assets/images/avatar/avatar-7.png" alt="" class="circle" />
                    <p class="font-weight-600">John Doe</p>
                    <p class="medium-small">18, January 2019</p>
                    <a href="#!" class="secondary-content"><i class="material-icons">star_border</i></a>
                 </li>
                 <li class="collection-item avatar">
                    <img src="../app-assets/images/avatar/avatar-3.png" alt="" class="circle" />
                    <p class="font-weight-600">Adam Garza</p>
                    <p class="medium-small">20, January 2019</p>
                    <a href="#!" class="secondary-content"><i class="material-icons">star_border</i></a>
                 </li>
                 <li class="collection-item avatar">
                    <img src="../app-assets/images/avatar/avatar-5.png" alt="" class="circle" />
                    <p class="font-weight-600">Jennifer Rice</p>
                    <p class="medium-small">25, January 2019</p>
                    <a href="#!" class="secondary-content"><i class="material-icons">star_border</i></a>
                 </li>
              </ul>
           </div>
        </div>
     </div>
     <div class="col s12 l3">
        <div class="card animate fadeRight">
           <div class="card-content">
              <h4 class="card-title mb-0">Conversion Ratio</h4>
              <div class="conversion-ration-container mt-8">
                 <div id="conversion-ration-bar-chart" class="conversion-ration-shadow"></div>
              </div>
              <p class="medium-small center-align">This month conversion ratio</p>
              <h5 class="center-align mb-0 mt-0">62%</h5>
           </div>
        </div>
     </div>
  </div>
  <!--/ Current balance & appointment cards-->

  <div class="row">
     <div class="col s12 m6 l4">
        <div class="card padding-4 animate fadeLeft">
           <div class="col s5 m5">
              <h5 class="mb-0">1885</h5>
              <p class="no-margin">New</p>
              <p class="mb-0 pt-8">1,12,900</p>
           </div>
           <div class="col s7 m7 right-align">
              <i class="material-icons background-round mt-5 mb-5 gradient-45deg-purple-amber gradient-shadow white-text">perm_identity</i>
              <p class="mb-0">Total Clients</p>
           </div>
        </div>
        <div id="chartjs" class="card pt-0 pb-0 animate fadeLeft">
           <div class="padding-2 ml-2">
              <span class="new badge gradient-45deg-indigo-purple gradient-shadow mt-2 mr-2">+ $900</span>
              <p class="mt-2 mb-0 font-weight-600">Today's revenue</p>
              <p class="no-margin grey-text lighten-3">$40,512 avg</p>
              <h5>$ 22,300</h5>
           </div>
           <div class="row">
              <div class="sample-chart-wrapper card-gradient-chart">
                 <canvas id="custom-line-chart-sample-three" class="center"></canvas>
              </div>
           </div>
        </div>
     </div>
     <div class="col s12 m6 l8">
        <div class="card subscriber-list-card animate fadeRight">
           <div class="card-content pb-1">
              <h4 class="card-title mb-0">Subscriber List <i class="material-icons float-right">more_vert</i></h4>
           </div>
           <table class="subscription-table responsive-table highlight">
              <thead>
                 <tr>
                    <th>Name</th>
                    <th>Company</th>
                    <th>Start Date</th>
                    <th>Status</th>
                    <th>Amount</th>
                    <th>Action</th>
                 </tr>
              </thead>
              <tbody>
                 <tr>
                    <td>Michael Austin</td>
                    <td>ABC Fintech LTD.</td>
                    <td>Jan 1,2019</td>
                    <td><span class="badge pink lighten-5 pink-text text-accent-2">Close</span></td>
                    <td>$ 1000.00</td>
                    <td class="center-align"><a href="#"><i class="material-icons pink-text">clear</i></a></td>
                 </tr>
                 <tr>
                    <td>Aldin Rakić</td>
                    <td>ACME Pvt LTD.</td>
                    <td>Jan 10,2019</td>
                    <td><span class="badge green lighten-5 green-text text-accent-4">Open</span></td>
                    <td>$ 3000.00</td>
                    <td class="center-align"><a href="#"><i class="material-icons pink-text">clear</i></a></td>
                 </tr>
                 <tr>
                    <td>İris Yılmaz</td>
                    <td>Collboy Tech LTD.</td>
                    <td>Jan 12,2019</td>
                    <td><span class="badge green lighten-5 green-text text-accent-4">Open</span></td>
                    <td>$ 2000.00</td>
                    <td class="center-align"><a href="#"><i class="material-icons pink-text">clear</i></a></td>
                 </tr>
                 <tr>
                    <td>Lidia Livescu</td>
                    <td>My Fintech LTD.</td>
                    <td>Jan 14,2019</td>
                    <td><span class="badge pink lighten-5 pink-text text-accent-2">Close</span></td>
                    <td>$ 1100.00</td>
                    <td class="center-align"><a href="#"><i class="material-icons pink-text">clear</i></a></td>
                 </tr>
              </tbody>
           </table>
        </div>
     </div>
  </div><!-- START RIGHT SIDEBAR NAV -->
  <aside id="right-sidebar-nav">
     <div id="slide-out-right" class="slide-out-right-sidenav sidenav rightside-navigation">
        <div class="row">
           <div class="slide-out-right-title">
              <div class="col s12 border-bottom-1 pb-0 pt-1">
                 <div class="row">
                    <div class="col s2 pr-0 center">
                       <i class="material-icons vertical-text-middle"><a href="#" class="sidenav-close">clear</a></i>
                    </div>
                    <div class="col s10 pl-0">
                       <ul class="tabs">
                          <li class="tab col s4 p-0">
                             <a href="#messages" class="active">
                                <span>Messages</span>
                             </a>
                          </li>
                          <li class="tab col s4 p-0">
                             <a href="#settings">
                                <span>Settings</span>
                             </a>
                          </li>
                          <li class="tab col s4 p-0">
                             <a href="#activity">
                                <span>Activity</span>
                             </a>
                          </li>
                       </ul>
                    </div>
                 </div>
              </div>
           </div>
           <div class="slide-out-right-body">
              <div id="messages" class="col s12">
                 <div class="collection border-none">
                    <input class="header-search-input mt-4 mb-2" type="text" name="Search" placeholder="Search Messages" />
                    <ul class="collection p-0">
                       <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                          <span class="avatar-status avatar-online avatar-50"
                             ><img src="../app-assets/images/avatar/avatar-7.png" alt="avatar" />
                             <i></i>
                          </span>
                          <div class="user-content">
                             <h6 class="line-height-0">Elizabeth Elliott</h6>
                             <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank you</p>
                          </div>
                          <span class="secondary-content medium-small">5.00 AM</span>
                       </li>
                       <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                          <span class="avatar-status avatar-online avatar-50"
                             ><img src="../app-assets/images/avatar/avatar-1.png" alt="avatar" />
                             <i></i>
                          </span>
                          <div class="user-content">
                             <h6 class="line-height-0">Mary Adams</h6>
                             <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello Boo</p>
                          </div>
                          <span class="secondary-content medium-small">4.14 AM</span>
                       </li>
                       <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                          <span class="avatar-status avatar-off avatar-50"
                             ><img src="../app-assets/images/avatar/avatar-2.png" alt="avatar" />
                             <i></i>
                          </span>
                          <div class="user-content">
                             <h6 class="line-height-0">Caleb Richards</h6>
                             <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello Boo</p>
                          </div>
                          <span class="secondary-content medium-small">4.14 AM</span>
                       </li>
                       <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                          <span class="avatar-status avatar-online avatar-50"
                             ><img src="../app-assets/images/avatar/avatar-3.png" alt="avatar" />
                             <i></i>
                          </span>
                          <div class="user-content">
                             <h6 class="line-height-0">Caleb Richards</h6>
                             <p class="medium-small blue-grey-text text-lighten-3 pt-3">Keny !</p>
                          </div>
                          <span class="secondary-content medium-small">9.00 PM</span>
                       </li>
                       <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                          <span class="avatar-status avatar-online avatar-50"
                             ><img src="../app-assets/images/avatar/avatar-4.png" alt="avatar" />
                             <i></i>
                          </span>
                          <div class="user-content">
                             <h6 class="line-height-0">June Lane</h6>
                             <p class="medium-small blue-grey-text text-lighten-3 pt-3">Ohh God</p>
                          </div>
                          <span class="secondary-content medium-small">4.14 AM</span>
                       </li>
                       <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                          <span class="avatar-status avatar-off avatar-50"
                             ><img src="../app-assets/images/avatar/avatar-5.png" alt="avatar" />
                             <i></i>
                          </span>
                          <div class="user-content">
                             <h6 class="line-height-0">Edward Fletcher</h6>
                             <p class="medium-small blue-grey-text text-lighten-3 pt-3">Love you</p>
                          </div>
                          <span class="secondary-content medium-small">5.15 PM</span>
                       </li>
                       <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                          <span class="avatar-status avatar-online avatar-50"
                             ><img src="../app-assets/images/avatar/avatar-6.png" alt="avatar" />
                             <i></i>
                          </span>
                          <div class="user-content">
                             <h6 class="line-height-0">Crystal Bates</h6>
                             <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can we</p>
                          </div>
                          <span class="secondary-content medium-small">8.00 AM</span>
                       </li>
                       <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                          <span class="avatar-status avatar-off avatar-50"
                             ><img src="../app-assets/images/avatar/avatar-7.png" alt="avatar" />
                             <i></i>
                          </span>
                          <div class="user-content">
                             <h6 class="line-height-0">Nathan Watts</h6>
                             <p class="medium-small blue-grey-text text-lighten-3 pt-3">Great!</p>
                          </div>
                          <span class="secondary-content medium-small">9.53 PM</span>
                       </li>
                       <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                          <span class="avatar-status avatar-off avatar-50"
                             ><img src="../app-assets/images/avatar/avatar-8.png" alt="avatar" />
                             <i></i>
                          </span>
                          <div class="user-content">
                             <h6 class="line-height-0">Willard Wood</h6>
                             <p class="medium-small blue-grey-text text-lighten-3 pt-3">Do it</p>
                          </div>
                          <span class="secondary-content medium-small">4.20 AM</span>
                       </li>
                       <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                          <span class="avatar-status avatar-online avatar-50"
                             ><img src="../app-assets/images/avatar/avatar-1.png" alt="avatar" />
                             <i></i>
                          </span>
                          <div class="user-content">
                             <h6 class="line-height-0">Ronnie Ellis</h6>
                             <p class="medium-small blue-grey-text text-lighten-3 pt-3">Got that</p>
                          </div>
                          <span class="secondary-content medium-small">5.20 AM</span>
                       </li>
                       <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                          <span class="avatar-status avatar-online avatar-50"
                             ><img src="../app-assets/images/avatar/avatar-9.png" alt="avatar" />
                             <i></i>
                          </span>
                          <div class="user-content">
                             <h6 class="line-height-0">Daniel Russell</h6>
                             <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank you</p>
                          </div>
                          <span class="secondary-content medium-small">12.00 AM</span>
                       </li>
                       <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                          <span class="avatar-status avatar-off avatar-50"
                             ><img src="../app-assets/images/avatar/avatar-10.png" alt="avatar" />
                             <i></i>
                          </span>
                          <div class="user-content">
                             <h6 class="line-height-0">Sarah Graves</h6>
                             <p class="medium-small blue-grey-text text-lighten-3 pt-3">Okay you</p>
                          </div>
                          <span class="secondary-content medium-small">11.14 PM</span>
                       </li>
                       <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                          <span class="avatar-status avatar-off avatar-50"
                             ><img src="../app-assets/images/avatar/avatar-11.png" alt="avatar" />
                             <i></i>
                          </span>
                          <div class="user-content">
                             <h6 class="line-height-0">Andrew Hoffman</h6>
                             <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can do</p>
                          </div>
                          <span class="secondary-content medium-small">7.30 PM</span>
                       </li>
                       <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                          <span class="avatar-status avatar-online avatar-50"
                             ><img src="../app-assets/images/avatar/avatar-12.png" alt="avatar" />
                             <i></i>
                          </span>
                          <div class="user-content">
                             <h6 class="line-height-0">Camila Lynch</h6>
                             <p class="medium-small blue-grey-text text-lighten-3 pt-3">Leave it</p>
                          </div>
                          <span class="secondary-content medium-small">2.00 PM</span>
                       </li>
                    </ul>
                 </div>
              </div>
              <div id="settings" class="col s12">
                 <p class="mt-8 mb-0 ml-5 font-weight-900">GENERAL SETTINGS</p>
                 <ul class="collection border-none">
                    <li class="collection-item border-none mt-3">
                       <div class="m-0">
                          <span>Notifications</span>
                          <div class="switch right">
                             <label>
                                <input checked type="checkbox" />
                                <span class="lever"></span>
                             </label>
                          </div>
                       </div>
                    </li>
                    <li class="collection-item border-none mt-3">
                       <div class="m-0">
                          <span>Show recent activity</span>
                          <div class="switch right">
                             <label>
                                <input type="checkbox" />
                                <span class="lever"></span>
                             </label>
                          </div>
                       </div>
                    </li>
                    <li class="collection-item border-none mt-3">
                       <div class="m-0">
                          <span>Show recent activity</span>
                          <div class="switch right">
                             <label>
                                <input type="checkbox" />
                                <span class="lever"></span>
                             </label>
                          </div>
                       </div>
                    </li>
                    <li class="collection-item border-none mt-3">
                       <div class="m-0">
                          <span>Show Task statistics</span>
                          <div class="switch right">
                             <label>
                                <input type="checkbox" />
                                <span class="lever"></span>
                             </label>
                          </div>
                       </div>
                    </li>
                    <li class="collection-item border-none mt-3">
                       <div class="m-0">
                          <span>Show your emails</span>
                          <div class="switch right">
                             <label>
                                <input type="checkbox" />
                                <span class="lever"></span>
                             </label>
                          </div>
                       </div>
                    </li>
                    <li class="collection-item border-none mt-3">
                       <div class="m-0">
                          <span>Email Notifications</span>
                          <div class="switch right">
                             <label>
                                <input checked type="checkbox" />
                                <span class="lever"></span>
                             </label>
                          </div>
                       </div>
                    </li>
                 </ul>
                 <p class="mt-8 mb-0 ml-5 font-weight-900">SYSTEM SETTINGS</p>
                 <ul class="collection border-none">
                    <li class="collection-item border-none mt-3">
                       <div class="m-0">
                          <span>System Logs</span>
                          <div class="switch right">
                             <label>
                                <input type="checkbox" />
                                <span class="lever"></span>
                             </label>
                          </div>
                       </div>
                    </li>
                    <li class="collection-item border-none mt-3">
                       <div class="m-0">
                          <span>Error Reporting</span>
                          <div class="switch right">
                             <label>
                                <input type="checkbox" />
                                <span class="lever"></span>
                             </label>
                          </div>
                       </div>
                    </li>
                    <li class="collection-item border-none mt-3">
                       <div class="m-0">
                          <span>Applications Logs</span>
                          <div class="switch right">
                             <label>
                                <input checked type="checkbox" />
                                <span class="lever"></span>
                             </label>
                          </div>
                       </div>
                    </li>
                    <li class="collection-item border-none mt-3">
                       <div class="m-0">
                          <span>Backup Servers</span>
                          <div class="switch right">
                             <label>
                                <input type="checkbox" />
                                <span class="lever"></span>
                             </label>
                          </div>
                       </div>
                    </li>
                    <li class="collection-item border-none mt-3">
                       <div class="m-0">
                          <span>Audit Logs</span>
                          <div class="switch right">
                             <label>
                                <input type="checkbox" />
                                <span class="lever"></span>
                             </label>
                          </div>
                       </div>
                    </li>
                 </ul>
              </div>
              <div id="activity" class="col s12">
                 <div class="activity">
                    <p class="mt-5 mb-0 ml-5 font-weight-900">SYSTEM LOGS</p>
                    <ul class="collection with-header">
                       <li class="collection-item">
                          <div class="font-weight-900">
                             Homepage mockup design <span class="secondary-content">Just now</span>
                          </div>
                          <p class="mt-0 mb-2">Melissa liked your activity.</p>
                          <span class="new badge amber" data-badge-caption="Important"> </span>
                       </li>
                       <li class="collection-item">
                          <div class="font-weight-900">
                             Melissa liked your activity Drinks. <span class="secondary-content">10 mins</span>
                          </div>
                          <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                          <span class="new badge light-green" data-badge-caption="Resolved"></span>
                       </li>
                       <li class="collection-item">
                          <div class="font-weight-900">
                             12 new users registered <span class="secondary-content">30 mins</span>
                          </div>
                          <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                       </li>
                       <li class="collection-item">
                          <div class="font-weight-900">
                             Tina is attending your activity <span class="secondary-content">2 hrs</span>
                          </div>
                          <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                       </li>
                       <li class="collection-item">
                          <div class="font-weight-900">
                             Josh is now following you <span class="secondary-content">5 hrs</span>
                          </div>
                          <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                          <span class="new badge red" data-badge-caption="Pending"></span>
                       </li>
                    </ul>
                    <p class="mt-5 mb-0 ml-5 font-weight-900">APPLICATIONS LOGS</p>
                    <ul class="collection with-header">
                       <li class="collection-item">
                          <div class="font-weight-900">
                             New order received urgent <span class="secondary-content">Just now</span>
                          </div>
                          <p class="mt-0 mb-2">Melissa liked your activity.</p>
                       </li>
                       <li class="collection-item">
                          <div class="font-weight-900">System shutdown. <span class="secondary-content">5 min</span></div>
                          <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                          <span class="new badge blue" data-badge-caption="Urgent"> </span>
                       </li>
                       <li class="collection-item">
                          <div class="font-weight-900">
                             Database overloaded 89% <span class="secondary-content">20 min</span>
                          </div>
                          <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                       </li>
                    </ul>
                    <p class="mt-5 mb-0 ml-5 font-weight-900">SERVER LOGS</p>
                    <ul class="collection with-header">
                       <li class="collection-item">
                          <div class="font-weight-900">System error <span class="secondary-content">10 min</span></div>
                          <p class="mt-0 mb-2">Melissa liked your activity.</p>
                       </li>
                       <li class="collection-item">
                          <div class="font-weight-900">
                             Production server down. <span class="secondary-content">1 hrs</span>
                          </div>
                          <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                          <span class="new badge blue" data-badge-caption="Urgent"></span>
                       </li>
                    </ul>
                 </div>
              </div>
           </div>
        </div>
     </div>

     <!-- Slide Out Chat -->
     <ul id="slide-out-chat" class="sidenav slide-out-right-sidenav-chat">
        <li class="center-align pt-2 pb-2 sidenav-close chat-head">
           <a href="#!"><i class="material-icons mr-0">chevron_left</i>Elizabeth Elliott</a>
        </li>
        <li class="chat-body">
           <ul class="collection">
              <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                 <span class="avatar-status avatar-online avatar-50"
                    ><img src="../app-assets/images/avatar/avatar-7.png" alt="avatar" />
                 </span>
                 <div class="user-content speech-bubble">
                    <p class="medium-small">hello!</p>
                 </div>
              </li>
              <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                 <div class="user-content speech-bubble-right">
                    <p class="medium-small">How can we help? We're here for you!</p>
                 </div>
              </li>
              <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                 <span class="avatar-status avatar-online avatar-50"
                    ><img src="../app-assets/images/avatar/avatar-7.png" alt="avatar" />
                 </span>
                 <div class="user-content speech-bubble">
                    <p class="medium-small">I am looking for the best admin template.?</p>
                 </div>
              </li>
              <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                 <div class="user-content speech-bubble-right">
                    <p class="medium-small">Materialize admin is the responsive materializecss admin template.</p>
                 </div>
              </li>

              <li class="collection-item display-grid width-100 center-align">
                 <p>8:20 a.m.</p>
              </li>

              <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                 <span class="avatar-status avatar-online avatar-50"
                    ><img src="../app-assets/images/avatar/avatar-7.png" alt="avatar" />
                 </span>
                 <div class="user-content speech-bubble">
                    <p class="medium-small">Ohh! very nice</p>
                 </div>
              </li>
              <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                 <div class="user-content speech-bubble-right">
                    <p class="medium-small">Thank you.</p>
                 </div>
              </li>
              <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                 <span class="avatar-status avatar-online avatar-50"
                    ><img src="../app-assets/images/avatar/avatar-7.png" alt="avatar" />
                 </span>
                 <div class="user-content speech-bubble">
                    <p class="medium-small">How can I purchase it?</p>
                 </div>
              </li>

              <li class="collection-item display-grid width-100 center-align">
                 <p>9:00 a.m.</p>
              </li>

              <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                 <div class="user-content speech-bubble-right">
                    <p class="medium-small">From ThemeForest.</p>
                 </div>
              </li>
              <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                 <div class="user-content speech-bubble-right">
                    <p class="medium-small">Only $24</p>
                 </div>
              </li>
              <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                 <span class="avatar-status avatar-online avatar-50"
                    ><img src="../app-assets/images/avatar/avatar-7.png" alt="avatar" />
                 </span>
                 <div class="user-content speech-bubble">
                    <p class="medium-small">Ohh! Thank you.</p>
                 </div>
              </li>
              <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                 <span class="avatar-status avatar-online avatar-50"
                    ><img src="../app-assets/images/avatar/avatar-7.png" alt="avatar" />
                 </span>
                 <div class="user-content speech-bubble">
                    <p class="medium-small">I will purchase it for sure.</p>
                 </div>
              </li>
              <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                 <div class="user-content speech-bubble-right">
                    <p class="medium-small">Great, Feel free to get in touch on</p>
                 </div>
              </li>
              <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                 <div class="user-content speech-bubble-right">
                    <p class="medium-small">https://pixinvent.ticksy.com/</p>
                 </div>
              </li>
           </ul>
        </li>
        <li class="center-align chat-footer">
           <form class="col s12" onsubmit="slide_out_chat()" action="javascript:void(0);">
              <div class="input-field">
                 <input id="icon_prefix" type="text" class="search" />
                 <label for="icon_prefix">Type here..</label>
                 <a onclick="slide_out_chat()"><i class="material-icons prefix">send</i></a>
              </div>
           </form>
        </li>
     </ul>
  </aside>
  <!-- END RIGHT SIDEBAR NAV -->
              <!-- Intro -->

  <div id="intro">
      <div class="row">
          <div class="col s12">

              <div id="img-modal" class="modal white">
                  <div class="modal-content">
                      <div class="bg-img-div"></div>
                      <p class="modal-header right modal-close">
                          Skip Intro <span class="right"><i class="material-icons right-align">clear</i></span>
                      </p>
                      <div class="carousel carousel-slider center intro-carousel">
                          <div class="carousel-fixed-item center middle-indicator">
                              <div class="left">
                                  <button class="movePrevCarousel middle-indicator-text btn btn-flat purple-text waves-effect waves-light btn-prev">
                                      <i class="material-icons">navigate_before</i> <span class="hide-on-small-only">Prev</span>
                                  </button>
                              </div>

                              <div class="right">
                                  <button class=" moveNextCarousel middle-indicator-text btn btn-flat purple-text waves-effect waves-light btn-next">
                                      <span class="hide-on-small-only">Next</span> <i class="material-icons">navigate_next</i>
                                  </button>
                              </div>
                          </div>
                          <div class="carousel-item slide-1">
                              <img src="../app-assets/images/gallery/intro-slide-1.png" alt="" class="responsive-img animated fadeInUp slide-1-img">
                              <h5 class="intro-step-title mt-7 center animated fadeInUp">Welcome to Materialize</h5>
                              <p class="intro-step-text mt-5 animated fadeInUp">Materialize is a Material Design Admin
                                  Template is the excellent responsive google material design inspired multipurpose admin
                                  template. Materialize has a huge collection of material design animation & widgets, UI
                                  Elements.</p>
                          </div>
                          <div class="carousel-item slide-2">
                              <img src="../app-assets/images/gallery/intro-features.png" alt="" class="responsive-img slide-2-img">
                              <h5 class="intro-step-title mt-7 center">Example Request Information</h5>
                              <p class="intro-step-text mt-5">Lorem ipsum dolor sit amet consectetur,
                                  adipisicing elit.
                                  Aperiam deserunt nulla
                                  repudiandae odit quisquam incidunt, maxime explicabo.</p>
                              <div class="row">
                                  <div class="col s6">
                                      <div class="input-field">
                                          <label for="first_name">Name</label>
                                          <input placeholder="Name" id="first_name" type="text" class="validate">
                                      </div>
                                  </div>
                                  <div class="col s6">
                                      <div class="input-field">
                                          <select>
                                              <option value="" disabled selected>Choose your option</option>
                                              <option value="1">Option 1</option>
                                              <option value="2">Option 2</option>
                                              <option value="3">Option 3</option>
                                          </select>
                                          <label>Materialize Select</label>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="carousel-item slide-3">
                              <img src="../app-assets/images/gallery/intro-app.png" alt="" class="responsive-img slide-1-img">
                              <h5 class="intro-step-title mt-7 center">Showcase App Features</h5>
                              <div class="row">
                                  <div class="col m5 offset-m1 s12">
                                      <ul class="feature-list left-align">
                                          <li><i class="material-icons">check</i> Email Application</li>
                                          <li><i class="material-icons">check</i> Chat Application</li>
                                          <li><i class="material-icons">check</i> Todo Application</li>
                                      </ul>
                                  </div>
                                  <div class="col m6 s12">
                                      <ul class="feature-list left-align">
                                          <li><i class="material-icons">check</i>Contacts Application</li>
                                          <li><i class="material-icons">check</i>Full Calendar</li>
                                          <li><i class="material-icons">check</i> Ecommerce Application</li>
                                      </ul>
                                  </div>
                                  <div class="row">
                                      <div class="col s12 center">
                                          <button class="get-started btn waves-effect waves-light gradient-45deg-purple-deep-orange mt-3 modal-close">Get
                                              Started</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- / Intro -->
            </div>
          </div>
        </div>
      </div>
      <!-- END: Page Main-->

      <!-- Theme Customizer -->

  <a
     href="#"
     data-target="theme-cutomizer-out"
     class="btn btn-customizer pink accent-2 white-text sidenav-trigger theme-cutomizer-trigger"
     ><i class="material-icons">settings</i></a
  >

  <div id="theme-cutomizer-out" class="theme-cutomizer sidenav row">
     <div class="col s12">
        <a class="sidenav-close" href="#!"><i class="material-icons">close</i></a>
        <h5 class="theme-cutomizer-title">Theme Customizer</h5>
        <p class="medium-small">Customize & Preview in Real Time</p>
        <div class="menu-options">
           <h6 class="mt-6">Menu Options</h6>
           <hr class="customize-devider" />
           <div class="menu-options-form row">
              <div class="input-field col s12 menu-color mb-0">
                 <p class="mt-0">Menu Color</p>
                 <div class="gradient-color center-align">
                    <span class="menu-color-option gradient-45deg-indigo-blue" data-color="gradient-45deg-indigo-blue"></span>
                    <span
                       class="menu-color-option gradient-45deg-purple-deep-orange"
                       data-color="gradient-45deg-purple-deep-orange"
                    ></span>
                    <span
                       class="menu-color-option gradient-45deg-light-blue-cyan"
                       data-color="gradient-45deg-light-blue-cyan"
                    ></span>
                    <span
                       class="menu-color-option gradient-45deg-purple-amber"
                       data-color="gradient-45deg-purple-amber"
                    ></span>
                    <span
                       class="menu-color-option gradient-45deg-purple-deep-purple"
                       data-color="gradient-45deg-purple-deep-purple"
                    ></span>
                    <span
                       class="menu-color-option gradient-45deg-deep-orange-orange"
                       data-color="gradient-45deg-deep-orange-orange"
                    ></span>
                    <span class="menu-color-option gradient-45deg-green-teal" data-color="gradient-45deg-green-teal"></span>
                    <span
                       class="menu-color-option gradient-45deg-indigo-light-blue"
                       data-color="gradient-45deg-indigo-light-blue"
                    ></span>
                    <span class="menu-color-option gradient-45deg-red-pink" data-color="gradient-45deg-red-pink"></span>
                 </div>
                 <div class="solid-color center-align">
                    <span class="menu-color-option red" data-color="red"></span>
                    <span class="menu-color-option purple" data-color="purple"></span>
                    <span class="menu-color-option pink" data-color="pink"></span>
                    <span class="menu-color-option deep-purple" data-color="deep-purple"></span>
                    <span class="menu-color-option cyan" data-color="cyan"></span>
                    <span class="menu-color-option teal" data-color="teal"></span>
                    <span class="menu-color-option light-blue" data-color="light-blue"></span>
                    <span class="menu-color-option amber darken-3" data-color="amber darken-3"></span>
                    <span class="menu-color-option brown darken-2" data-color="brown darken-2"></span>
                 </div>
              </div>
              <div class="input-field col s12 menu-bg-color mb-0">
                 <p class="mt-0">Menu Background Color</p>
                 <div class="gradient-color center-align">
                    <span
                       class="menu-bg-color-option gradient-45deg-indigo-blue"
                       data-color="gradient-45deg-indigo-blue"
                    ></span>
                    <span
                       class="menu-bg-color-option gradient-45deg-purple-deep-orange"
                       data-color="gradient-45deg-purple-deep-orange"
                    ></span>
                    <span
                       class="menu-bg-color-option gradient-45deg-light-blue-cyan"
                       data-color="gradient-45deg-light-blue-cyan"
                    ></span>
                    <span
                       class="menu-bg-color-option gradient-45deg-purple-amber"
                       data-color="gradient-45deg-purple-amber"
                    ></span>
                    <span
                       class="menu-bg-color-option gradient-45deg-purple-deep-purple"
                       data-color="gradient-45deg-purple-deep-purple"
                    ></span>
                    <span
                       class="menu-bg-color-option gradient-45deg-deep-orange-orange"
                       data-color="gradient-45deg-deep-orange-orange"
                    ></span>
                    <span class="menu-bg-color-option gradient-45deg-green-teal" data-color="gradient-45deg-green-teal"></span>
                    <span
                       class="menu-bg-color-option gradient-45deg-indigo-light-blue"
                       data-color="gradient-45deg-indigo-light-blue"
                    ></span>
                    <span class="menu-bg-color-option gradient-45deg-red-pink" data-color="gradient-45deg-red-pink"></span>
                 </div>
                 <div class="solid-color center-align">
                    <span class="menu-bg-color-option red" data-color="red"></span>
                    <span class="menu-bg-color-option purple" data-color="purple"></span>
                    <span class="menu-bg-color-option pink" data-color="pink"></span>
                    <span class="menu-bg-color-option deep-purple" data-color="deep-purple"></span>
                    <span class="menu-bg-color-option cyan" data-color="cyan"></span>
                    <span class="menu-bg-color-option teal" data-color="teal"></span>
                    <span class="menu-bg-color-option light-blue" data-color="light-blue"></span>
                    <span class="menu-bg-color-option amber darken-3" data-color="amber darken-3"></span>
                    <span class="menu-bg-color-option brown darken-2" data-color="brown darken-2"></span>
                 </div>
              </div>
              <div class="input-field col s12">
                 <div class="switch">
                    Menu Dark
                    <label class="float-right"
                       ><input class="menu-dark-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                    ></label>
                 </div>
              </div>
              <div class="input-field col s12">
                 <div class="switch">
                    Menu Collapsed
                    <label class="float-right"
                       ><input class="menu-collapsed-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                    ></label>
                 </div>
              </div>
              <div class="input-field col s12">
                 <div class="switch">
                    <p class="mt-0">Menu Selection</p>
                    <label>
                       <input
                          class="menu-selection-radio with-gap"
                          value="sidenav-active-square"
                          name="menu-selection"
                          type="radio"
                       />
                       <span>Square</span>
                    </label>
                    <label>
                       <input
                          class="menu-selection-radio with-gap"
                          value="sidenav-active-rounded"
                          name="menu-selection"
                          type="radio"
                       />
                       <span>Rounded</span>
                    </label>
                    <label>
                       <input class="menu-selection-radio with-gap" value="" name="menu-selection" type="radio" />
                       <span>Normal</span>
                    </label>
                 </div>
              </div>
           </div>
        </div>
        <h6 class="mt-6">Navbar Options</h6>
        <hr class="customize-devider" />
        <div class="navbar-options row">
           <div class="input-field col s12 navbar-color mb-0">
              <p class="mt-0">Navbar Color</p>
              <div class="gradient-color center-align">
                 <span class="navbar-color-option gradient-45deg-indigo-blue" data-color="gradient-45deg-indigo-blue"></span>
                 <span
                    class="navbar-color-option gradient-45deg-purple-deep-orange"
                    data-color="gradient-45deg-purple-deep-orange"
                 ></span>
                 <span
                    class="navbar-color-option gradient-45deg-light-blue-cyan"
                    data-color="gradient-45deg-light-blue-cyan"
                 ></span>
                 <span class="navbar-color-option gradient-45deg-purple-amber" data-color="gradient-45deg-purple-amber"></span>
                 <span
                    class="navbar-color-option gradient-45deg-purple-deep-purple"
                    data-color="gradient-45deg-purple-deep-purple"
                 ></span>
                 <span
                    class="navbar-color-option gradient-45deg-deep-orange-orange"
                    data-color="gradient-45deg-deep-orange-orange"
                 ></span>
                 <span class="navbar-color-option gradient-45deg-green-teal" data-color="gradient-45deg-green-teal"></span>
                 <span
                    class="navbar-color-option gradient-45deg-indigo-light-blue"
                    data-color="gradient-45deg-indigo-light-blue"
                 ></span>
                 <span class="navbar-color-option gradient-45deg-red-pink" data-color="gradient-45deg-red-pink"></span>
              </div>
              <div class="solid-color center-align">
                 <span class="navbar-color-option red" data-color="red"></span>
                 <span class="navbar-color-option purple" data-color="purple"></span>
                 <span class="navbar-color-option pink" data-color="pink"></span>
                 <span class="navbar-color-option deep-purple" data-color="deep-purple"></span>
                 <span class="navbar-color-option cyan" data-color="cyan"></span>
                 <span class="navbar-color-option teal" data-color="teal"></span>
                 <span class="navbar-color-option light-blue" data-color="light-blue"></span>
                 <span class="navbar-color-option amber darken-3" data-color="amber darken-3"></span>
                 <span class="navbar-color-option brown darken-2" data-color="brown darken-2"></span>
              </div>
           </div>
           <div class="input-field col s12">
              <div class="switch">
                 Navbar Dark
                 <label class="float-right"
                    ><input class="navbar-dark-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                 ></label>
              </div>
           </div>
           <div class="input-field col s12">
              <div class="switch">
                 Navbar Fixed
                 <label class="float-right"
                    ><input class="navbar-fixed-checkbox" type="checkbox" checked/> <span class="lever ml-0"></span
                 ></label>
              </div>
           </div>
        </div>
        <h6 class="mt-6">Footer Options</h6>
        <hr class="customize-devider" />
        <div class="navbar-options row">
           <div class="input-field col s12">
              <div class="switch">
                 Footer Dark
                 <label class="float-right"
                    ><input class="footer-dark-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                 ></label>
              </div>
           </div>
           <div class="input-field col s12">
              <div class="switch">
                 Footer Fixed
                 <label class="float-right"
                    ><input class="footer-fixed-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                 ></label>
              </div>
           </div>
        </div>
     </div>
  </div>
  <!--/ Theme Customizer -->

  <a
     href="https://1.envato.market/materialize_admin"
     target="_blank"
     class="btn btn-buy-now gradient-45deg-indigo-purple gradient-shadow white-text tooltipped buy-now-animated tada"
     data-position="left"
     data-tooltip="Buy Now!"
     ><i class="material-icons">add_shopping_cart</i></a
  >
@endsection
