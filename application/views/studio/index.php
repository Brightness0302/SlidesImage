        <div id="loadcontent" role="main" class="main" style="padding-top: 45px;">
            <section class="section section-default border-0 my-1 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="750" style="background-color: #fff!important;padding-bottom:0px;margin-bottom:0px">
                <div class="container">

                    <div class="row align-items-center">
                        <div class="col-md-6 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1000">
                            <div class="owl-carousel owl-theme nav-inside mb-0 dots-inside dots-horizontal-center" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 6000, 'loop': true}">
                                <?php foreach($backgrounds as $key=>$background):?>
                                    <?php if(file_exists('assets/background/'.$background['id'].'.jpg')):?>
                                    <div>
                                        <img alt="" class="img-fluid" src="<?=base_url('assets/background/'.$background['id'].'.jpg')?>">
                                    </div>
                                    <?php endif;?>
                                <?php endforeach;?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <?php foreach($backgrounds as $key=>$background):?>
                            <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">
                            <?= $background[($this->session->userdata('language')=="english")?"description":"edescription"]?>
                            </p>
                            <?php endforeach;?>
                        </div>
                    </div>

                </div>
            </section>
            <section class="section section-default border-0 my-2" style="background-color: #fff!important;">
                <div class="container py-4">

                    <div class="row">
                        <div class="col py-4">
                            <hr class="solid">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col pb-4 text-center">
                            <h2 class="text-color-dark font-weight-normal text-7 mb-0 pt-2"><?=$teaminfo[$this->session->userdata['language']]['teaminfo']?></h2>
                            
                        </div>
                    </div>
                    <div class="row pb-4 mb-2">
                        <?php foreach($employees as $key => $employee):?>
                        <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
                            <span class="thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                    <a href="about-me.html">
                                        <img src="<?=base_url('assets/employee/'.$employee['id'].'.jpg')?>" class="img-employee img-fluid border-radius-0" alt="">
                                    </a>
                                </span>
                                <span class="thumb-info-caption">
                                    <span class="thumb-info-caption-text" style="text-align:center; padding:0px; margin:0px; font-size:20px;color:black;font-weight:bold;"><?=$employee['name']?></span>
                                    <span class="thumb-info-caption-text" style="text-align:center; padding:0px; margin:0px; font-size:14px;"><?=$employee['type']?></span>
                                </span>
                            </span>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </section>

            <div class="container">
                <div class="row">
                    <div class="col py-4">
                        <hr class="solid">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 mx-md-auto text-center">

                        <h2 class="text-color-dark font-weight-normal text-7 mb-0 pt-2"><?=$teaminfo[$this->session->userdata['language']]['history']?></strong></h2>
                        <p><?=$teaminfo[$this->session->userdata['language']]['about']?></p>

                        <section class="timeline" id="timeline">
                            <div class="timeline-body">
                                <?php foreach($studio as $key => $data):?>
                                <div class="timeline-date">
                                    <h3 class="text-primary font-weight-bold"><?=$data['year']?></h3>
                                </div>

                                <article class="timeline-box <?=($key%2==0)?'left':'right'?> text-start appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                                    <div class="timeline-box-arrow"></div>
                                    <div class="p-2">
                                        <!--img alt="" class="img-fluid" src="img/history/history-3.jpg" /-->
                                        <?php if(file_exists("assets/studio/".$data['id'].".jpg")):?>
                                            <img class="col-md-8 border border-danger d-block mx-auto mobile-img" id="uploadimage" src="<?=base_url('assets/studio/'.$data['id'].".jpg")?>">
                                        <?php endif;?>
                                        <h3 class="font-weight-bold text-3 mt-3 mb-1"><?=$data['title']?></h3>
                                        <p class="mb-0 text-2"><?=$data['description']?></p>
                                    </div>
                                </article>
                                <?php endforeach;?>
                            </div>
                        </section>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="footer-copyright footer-copyright-style-2 pt-4 pb-5">
                    <div class="row">
                        <div class="col-12 text-left">
                            <p class="mb-0" style="font-size: 10px;">© 2021 PROTO-ARCH d.o.o. | Sva prava pridržana | Razvoj Kom@ Dig[IT]alna agencija</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>