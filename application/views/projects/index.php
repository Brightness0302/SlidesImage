	<div id="loadcontent" role="main" class="main" style="padding-top: 105px;">

        <section class="section section-default border-0 my-2" style="background-color: #fff!important;">
            <div class="container py-4">
                <div class="row pb-5 mb-2">

                	<?php foreach ($projects as $key=>$data):?>
                		<div class='col-sm-6 col-lg-4 mb-3 pb-5 mb-lg-0 appear-animation' data-appear-animation='fadeInRightShorter'>
	                        <a href="<?=base_url('details/'.$data['id'])?>">
		                        <span class='thumb-info bg-transparent border-radius-0'>
		                            <span class='thumb-info-wrapper border-radius-0 position-relative'>
	                                    <img src="<?=base_url().$files[$key]?>" class='img-fluid border-radius-0 height-230' alt=''>
	                                    <span class='thumb-info-title bg-transparent position-absolute top-50 start-50 translate-middle'>
                                        	<span class='thumb-info-inner text-white fs-3 text-center'><?=$data[($this->session->userdata('language')=="croatian")?"name":"ename"]?></span>
	                                    </span>
		                            </span>
		                        </span>
	                        </a>
	                    </div>
                	<?php endforeach;?>
                </div>
            </div>
        </section>
	</div>

</div>