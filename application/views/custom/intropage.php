<!-- intropage -->
<div class="owl-carousel owl-carousel-light owl-theme manual dots-inside dots-horizontal-center nav-style-2 nav-inside nav-inside-plus nav-light nav-md nav-font-size-2xl show-nav-hover mb-0 owl-drag" data-plugin-options="{'items': 1, 'margin': 10, 'loop': true, 'autoplay': true, 'lazyLoad': true, 'smartSpeed': 3000, 'autoplayTimeout': 8000}" style="height: 100vh;">
    <div class="owl-stage-outer">
        <div class="owl-stage">

            <!-- Carousel Slide 1 -->
            <?php foreach($files as $key=>$file):?>
            <div class="owl-item position-relative" style="background-image: url(<?=base_url($file)?>); background-size: cover; background-position: center; height: 100vh;">
                <div class="container-fluid position-relative z-index-3 h-100">
                    <div class="row justify-content-right align-items-right h-100">
                        <div class="col-lg-3 offset-lg-9 text-right pull-right">
                            <div class="d-flex flex-column align-items-right justify-content-right h-100 mpy-signature px-2">
                                <div class="px-3 introdesc">
                                    <h2 class="descborder text-color-light text-5-5 line-height-1 line-height-sm-3 mb-2 appear-animation positive-ls-1" data-appear-animation="fadeInUpShorter" style="color: white;" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">
                                        <?=($this->session->userdata('language')=="croatian")?$titles[$key]:$etitles[$key]?>
                                    </h2>
                                    <a href="<?=base_url('details/'.$ids[$key])?>" style="text-align: right;">
                                        <p class="text-4 text-color-light font-weight-light" style="margin-bottom: 0px; color: white;" data-plugin-animated-letters data-plugin-options="{'startDelay': 100, 'minWindowWidth': 0, 'animationSpeed': 30}">
                                            <?=$language[$this->session->userdata('language')]['main.more']?> >>>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
    <div class="owl-nav">
        <button type="button" role="presentation" class="owl-prev"></button>
        <button type="button" role="presentation" class="owl-next"></button>
    </div>
    <div class="owl-dots mb-5">
        <?php foreach($files as $key=>$file):?>
        <button role="button" class="owl-dot <?=($key==0)?'active':''?>"><span></span></button>
        <?php endforeach;?>
    </div>
</div>
<!-- /intropage/ -->