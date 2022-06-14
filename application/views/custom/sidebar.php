<!-- sidebar -->
<header id="header" class="side-header side-header-lg side-header-hide d-flex">
    <div class="header-body">
        <div class="header-container container d-flex h-100">
            <div class="header-column flex-column justify-content-center h-100">
                <div class="header-row">
            
                    <button class="hamburguer-btn hamburguer-btn-side-header hamburguer-btn-side-header-mobile-show active" data-set-active="false">
                        <span class="close">
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                </div>
                <div class="header-row flex-row justify-content-center">
                    <div class="header-logo">
                    <button class="btn text-3-4 p-0">
                        <a href="javascript:;" onclick="select('language_HR')" class="langbtn-sidemenu <?=($this->session->userdata('language')=='croatian')?'langbtn-sidemenu-active':''?>">HR</a> | <a href="javascript:;" onclick="select('language_EN')" class="langbtn-sidemenu <?=($this->session->userdata('language')=='english')?'langbtn-sidemenu-active':''?>">EN</a>
                        <script>
                            function select(lang) {
                                $.ajax({
                                    url: "<?=base_url($this->session->userdata('page'))?>/"+lang,
                                    type: 'POST',
                                    data: {},
                                    error: function() {
                                        alert('Something is wrong');
                                    },
                                    success: function(data) {
                                        window.location.reload();
                                    }
                                });
                            }
                        </script>
                    </button>
                    </div>
                </div>
                <div class="side-header-scrollable scrollable colored-slider" data-plugin-scrollable>
                    <div>
                        <div class="header-nav header-nav-links header-nav-links-side-header header-nav-links-vertical header-nav-links-vertical-expand header-nav-click-to-open align-self-start">
                            <div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-4 header-nav-main-sub-effect-1">
                                <nav>
                                    <ul class="nav nav-pills" id="mainNav">
                                        <!-- <li><a class="dropdown-item" href="<?php echo base_url();?>/home/adminlogin">/ <span class="mlink"> Admin Page </span></a></li> -->
                                        <li><a class="dropdown-item" href="<?php echo base_url();?>">/ <span class="mlink"> <?=$language[$this->session->userdata('language')]['proj.home']?> </span></a></li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle active" href="#">
                                                / <span class="mlink"> <?=$language[$this->session->userdata('language')]['proj.projects']?> </span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="<?=base_url($language[$this->session->userdata('language')]['url.url1'])?>">
                                                    <?=$language[$this->session->userdata('language')]['proj.proj_sel']?>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="<?=base_url($language[$this->session->userdata('language')]['url.url2'])?>">
                                                    <?=$language[$this->session->userdata('language')]['proj.products']?>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="<?=base_url($language[$this->session->userdata('language')]['url.url3'])?>">
                                                    <?=$language[$this->session->userdata('language')]['proj.proj_all']?>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="<?=base_url($language[$this->session->userdata('language')]['url.url4'])?>">
                                                    <?=$language[$this->session->userdata('language')]['proj.proj_public']?>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="<?=base_url($language[$this->session->userdata('language')]['url.url5'])?>">
                                                    <?=$language[$this->session->userdata('language')]['proj.proj_culture']?>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="<?=base_url($language[$this->session->userdata('language')]['url.url6'])?>">
                                                    <?=$language[$this->session->userdata('language')]['proj.proj_housing']?>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="<?=base_url($language[$this->session->userdata('language')]['url.url7'])?>">
                                                    <?=$language[$this->session->userdata('language')]['proj.proj_business']?>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="<?=base_url($language[$this->session->userdata('language')]['url.url8'])?>">
                                                    <?=$language[$this->session->userdata('language')]['proj.proj_tenders']?>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="<?=base_url($language[$this->session->userdata('language')]['url.url9'])?>">
                                                    <?=$language[$this->session->userdata('language')]['proj.proj_interior']?>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item" href="<?=base_url($language[$this->session->userdata('language')]['url.url10'])?>">/ <span class="mlink"><?=$language[$this->session->userdata('language')]['proj.finest']?></span></a></li>
                                        <li><a class="dropdown-item" href="<?=base_url($language[$this->session->userdata('language')]['url.url11'])?>">/ <span class="mlink"><?=$language[$this->session->userdata('language')]['proj.studio']?></span></a></li>
                                        <li><a class="dropdown-item" href="<?=base_url($language[$this->session->userdata('language')]['url.url12'])?>">/ <span class="mlink"><?=$language[$this->session->userdata('language')]['proj.news']?></span></a></li>
                                        <li><a class="dropdown-item" href="<?=base_url($language[$this->session->userdata('language')]['url.url13'])?>">/ <span class="mlink"><?=$language[$this->session->userdata('language')]['proj.contact']?></span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="header-row justify-content-end sidebar-end pb-3">
                    <ul class="header-social-icons social-icons social-icons-clean">
                        <li class="social-icons-facebook"><a href="https://www.facebook.com/protoarchdesign" target="_blank" title="Facebook"><i class="fab fa-facebook-f fa-lg"></i></a></li>
                        <li class="social-icons-instagram"><a href="https://www.instagram.com/proto_arch" target="_blank" title="Instagram"><i class="fab fa-instagram fa-lg"></i></a></li>
                    </ul>
                    <p class="text-1 p-0 m-0">© 2021 PROTO-ARCH d.o.o. | Sva prava pridržana</p>
                    <p class="text-1 p-0 m-0">Razvoj Kom@ Dig[IT]alna Agencija</p>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- /sidebar/ -->