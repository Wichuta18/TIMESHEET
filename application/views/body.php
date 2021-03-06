<!-- ////////////////////////////////////////////////////////////////////////////-->
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

<!-- fixed-top-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
  <div class="navbar-wrapper">
    <div class="navbar-container content">
      <div class="collapse navbar-collapse show" id="navbar-mobile">
        <ul class="nav navbar-nav mr-auto float-left">
          <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
          <li class="nav-item dropdown navbar-search"><a class="nav-link dropdown-toggle hide" data-toggle="dropdown" href="#"><i class="ficon ft-search"></i></a>
            <ul class="dropdown-menu">
              <li class="arrow_box">
                <form method="get" action="<?php echo base_url("project_ctrl/project");?>">
                  <div class="input-group search-box">
                    <div class="position-relative has-icon-right full-width">
                      <input class="form-control" id="search" type="text" name="search" placeholder="Search here..." 
                      value="<?php if($this->input->get('search')) echo $this->input->get('search');?>">
                      <div class="form-control-position navbar-search-close"><i class="ft-x">   </i></div>
                    </div>
                  </div>
                </form>
              </li>
            </ul>
          </li>
        </ul>
        
        <ul class="nav navbar-nav float-right">
          <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail">             </i></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="arrow_box_right"><a class="dropdown-item" href="#"><i class="ft-book"></i> Read Mail</a><a class="dropdown-item" href="#"><i class="ft-bookmark"></i> Read Later</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Mark all Read       </a></div>
            </div>
          </li>
          <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">             <span class="avatar avatar-online"><img src="<?php echo base_url("/theme-assets/images/portrait/small/man.png")?>" alt="avatar"><i></i></span></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="<?php echo base_url("/theme-assets/images/portrait/small/man.png")?>" alt="avatar"><span class="user-name text-bold-700 ml-1"></span></span></a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="<?php echo base_url() ?>login_ctrl/index"><i class="ft-power"></i> Logout</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<!-- ////////////////////////////////////////////////////////////////////////////-->