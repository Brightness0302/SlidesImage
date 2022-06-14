<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=base_url('home')?>" class="brand-link">
      <img src="<?=base_url('assets')?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <div class="header-row flex-row justify-content-center text-center">
          <div class="header-logo">
              <span onclick="select('language_HR')" class="langbtn-sidemenu <?=($this->session->userdata('language')=='croatian')?"langbtn-sidemenu-active":""?>" style="cursor: pointer;">HR
              </span>
              |
              <span onclick="select('language_EN')" class="langbtn-sidemenu <?=($this->session->userdata('language')=='english')?"langbtn-sidemenu-active":""?>" style="cursor: pointer;">EN
              </span>
          </div>
      </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            
          </li>
          <li class="nav-item">
            <a href="<?=base_url('home/managestudio')?>" class="nav-link <?=($this->session->userdata("clicked")=="studio")?"active":""?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                <?=$language[$this->session->userdata('language')]['mproj.gotostudio']?>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?=base_url('home/manage')?>" class="nav-link <?=($this->session->userdata("clicked")=="projects")?"active":""?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                <?=$language[$this->session->userdata('language')]['mproj.gotoproject']?>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>