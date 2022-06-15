	<div id="loadcontent" role="main" class="main" style="padding-top: 105px;">
		<section class="page-header bg-color-light-scale-1 page-header-md" style="padding:15px 0;background:#fff!important;margin-bottom:20px">
			<div class="container">
				<div class="row align-items-center">

					<div class="col-2">
						<a href="<?=base_url("details/$prev[id]")?>" class="portfolio-prev text-decoration-none d-block appear-animation" data-appear-animation="fadeInRightShorter">
							<div class="d-inline-flex align-items-center line-height-1">
								<i class="fas fa-thin fa-chevron-left text-dark text-4 me-3"></i>
								<div class="d-none d-sm-block line-height-1">
									<span class="text-dark opacity-4 text-1"><?=$language[$this->session->userdata('language')]['proj.prev']?></span>
									<h4 class="font-weight-bold text-3 mb-0"><?=$prev[($this->session->userdata('language')=="croatian")?"name":"ename"]?></h4>
								</div>
							</div>
						</a>
					</div>

					<div class="col-8">
						<div class="row">
							<div class="col-md-12 align-self-center p-static order-2 text-center">
								<div class="overflow-hidden pt-0">
									<h class="text-dark text-6 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100"><?=$projects[($this->session->userdata('language')=="croatian")?"name":"ename"]?></h>
								</div>
							</div>
						</div>
					</div>

					<div class="col-2">
						<a href="<?=base_url("details/$next[id]")?>" class="portfolio-next text-decoration-none d-block float-end appear-animation" data-appear-animation="fadeInLeftShorter">
							<div class="d-inline-flex align-items-center text-end line-height-1">
								<div class="d-none d-sm-block line-height-1">
									<span class="text-dark opacity-4 text-1"><?=$language[$this->session->userdata('language')]['proj.next']?></span>
									<h4 class="font-weight-bold text-3 mb-0"><?=$next[($this->session->userdata('language')=="croatian")?"name":"ename"]?></h4>
								</div>
								<i class="fas fa-thin fa-chevron-right text-dark text-4 ms-3"></i>
							</div>
						</a>
					</div>

				</div>
			</div>
		</section>

		<div class="container py-0">

			<div class="row">
				<div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">

					<div class="owl-carousel owl-theme dots-inside dots-horizontal-center nav-style-2 nav-inside nav-inside-plus nav-light nav-md nav-font-size-2xl show-nav-hover mb-0" 
					data-plugin-options="{'items': 1, 'margin': 10, 'loop': true, 'nav': true, 'dots': true, 'autoHeight': true, 'video':true}">
						<?php
							foreach($files as $file) {
								echo "<div>
										<div class='img-thumbnail border-0 border-radius-0 p-0 d-block'>
											<img src='".base_url($file)."' class=' border-radius-0 height-75' alt=''>
										</div>
									</div>";
							}
						?>
						<?php if(!($projects['videourl']==NULL||is_null($projects['videourl'])||$projects['videourl']=="")):?>
							<div class="img-thumbnail border-0 border-radius-0 p-0 d-block projectdetails">
								<iframe class="projectdetails-iframe height-75" type="text/html"  src="https://player.vimeo.com/video/<?=$projects['videourl']?>" frameborder="0" allowfullscreen><p>Can't show now</p></iframe>
							</div>
						<?php endif;?>
					</div>

				</div>
			</div>
			<div class="row pt-4 mt-2 mb-5">
				<div class="col-md-5">
					<h2 class="text-color-dark font-weight-normal text-5 mb-2"><?=$projects['category']?></h2>
					<ul class="list list-icons list-primary list-borders text-4">
						<li style="padding-left: 0px;"><span class="text-muted" style="padding-right: 8px;">/ <?=$language[$this->session->userdata('language')]['proj.proj_location']?> </span> <strong class="text-color-primary"><?=$projects[($this->session->userdata('language')=="croatian")?"location":"elocation"]?></strong></li>
						<li style="padding-left: 0px;"><span class="text-muted" style="padding-right: 8px;">/ <?=$language[$this->session->userdata('language')]['proj.proj_investor']?> </span> <strong class="text-color-primary"><?=$projects['investor']?></strong></li>
						<li style="padding-left: 0px;"><span class="text-muted" style="padding-right: 8px;">/ <?=$language[$this->session->userdata('language')]['proj.proj_author']?> </span> <strong class="text-color-primary"><?=$projects['author']?></strong></li>
						<li style="padding-left: 0px;"><span class="text-muted" style="padding-right: 8px;">/ <?=$language[$this->session->userdata('language')]['proj.proj_collaborators']?> </span> <strong class="text-color-primary"><?=$projects['collaborators']?></strong></li>
						<li style="padding-left: 0px;"><span class="text-muted" style="padding-right: 8px;">/ <?=$language[$this->session->userdata('language')]['proj.proj_year']?> </span> <strong class="text-color-primary"><?=$projects['year']?></strong></li>
						<li style="padding-left: 0px;"><span class="text-muted" style="padding-right: 8px;">/ <?=$language[$this->session->userdata('language')]['proj.proj_square']?> </span> <strong class="text-color-primary"><?=$projects['square']?></strong></li>
						<li style="padding-left: 0px;"><span class="text-muted" style="padding-right: 8px;">/ <?=$language[$this->session->userdata('language')]['proj.proj_status']?> </span> <strong class="text-color-primary"><?=($projects['status']==1)?$language[$this->session->userdata('language')]['edit.active']:$language[$this->session->userdata('language')]['edit.inactive']?></strong></li>
					</ul>
					<a class="tooglemore" style="cursor:pointer;">
						<h4 class="text-color-dark font-weight-normal text-3 mt-2"><?=$language[$this->session->userdata('language')]['proj.proj_more']?></h4>
					</a>
					<ul class="list list-icons list-primary list-borders text-4 tooglemoredata">
						<li style="padding-left: 0px;"><span class="text-muted" style="padding-right: 8px;">/ opis 1 </span><strong class="text-color-primary">1</strong></li>
						<li style="padding-left: 0px;"><span class="text-muted" style="padding-right: 8px;">/ opis 2 </span><strong class="text-color-primary">2</strong></li>

					</ul>
				</div>
				<div class="col-md-7 mb-4 mb-md-0">

					<h2 class="text-color-dark font-weight-normal text-5 mb-2"><?=$language[$this->session->userdata('language')]['proj.proj_description']?></h2>

					<p class="text-justify">
						<?=$projects[($this->session->userdata('language')=="croatian")?"text":"etext"]?>
					</p>
				</div>
			</div>
		</div>
	</div>

</div>