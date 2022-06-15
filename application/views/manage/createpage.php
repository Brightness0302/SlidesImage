	<div id="loadcontent" role="main" class="main">
		<div class="container">
			<div>
				<h1><?=$language[$this->session->userdata('language')]['edit.createpage']?></h1>
			</div>
			<form method="post" id="editpage" enctype="multipart/form-data">
				<div class="form-group rows">
					<div class="col-12">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
						  <li class="nav-item">
						    <a class="nav-link active" id="HR-tab" data-toggle="tab" href="#HR" role="tab" aria-controls="HR" aria-selected="true">HR</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" id="EN-tab" data-toggle="tab" href="#EN" role="tab" aria-controls="EN" aria-selected="false">EN</a>
						  </li>
						</ul>

						<div class="tab-content mt-4">
						  <div class="tab-pane active" id="HR" role="tabpanel" aria-labelledby="HR-tab">
						  	<div class="form-group row">
					        	<div class="col-6">
							      <div class="form-group row">
							        <label class="col-4 col-form-label" for="category"><?=$language["croatian"]['db.category']?></label> 
							        <div class="col-8">
							          <select id="category" name="category" class="custom-select" required="required" onchange="changeText(this,1)">
							            <option value="Culture" selected><?=$language["croatian"]['edit.culture']?></option>
							            <option value="Public"><?=$language["croatian"]['edit.public']?></option>
							            <option value="Business"><?=$language["croatian"]['edit.business']?></option>
							            <option value="Interior" ><?=$language["croatian"]['edit.interior']?></option>
							            <option value="House" ><?=$language["croatian"]['edit.house']?></option>
							            <option value="Tenders" ><?=$language["croatian"]['edit.tender']?></option>
							          </select>
							        </div>
							      </div>
							      <div class="form-group row">
							        <label class="col-4 col-form-label" for="featured"><?=$language["croatian"]['db.featured']?></label> 
							        <div class="col-8">
							          <select id="featured" name="featured" class="custom-select" required="required" onchange="changeText(this,1)">
							            <option value="1" selected><?=$language["croatian"]['edit.active']?></option>
							            <option value="0" ><?=$language["croatian"]['edit.inactive']?></option>
							          </select>
							        </div>
							      </div>
							      <div class="form-group row">
							        <label class="col-4 col-form-label" for="product"><?=$language["croatian"]['db.product']?></label> 
							        <div class="col-8">
							          <select id="product" name="product" class="custom-select" required="required" onchange="changeText(this,1)">
							            <option value="1" selected><?=$language["croatian"]['edit.active']?></option>
							            <option value="0" ><?=$language["croatian"]['edit.inactive']?></option>
							          </select>
							        </div>
							      </div>
							      <div class="form-group row">
							        <label class="col-4 col-form-label" for="slideshowimage"><?=$language["croatian"]['db.slideshowimage']?></label> 
							        <div class="col-8">
							          <select id="slideshowimage" name="slideshowimage" class="custom-select" required="required" onchange="changeText(this,1)">
							            <option value="1" selected><?=$language["croatian"]['edit.active']?></option>
							            <option value="0" ><?=$language["croatian"]['edit.inactive']?></option>
							          </select>
							        </div>
							      </div>
							      <div class="form-group row">
							        <label class="col-4 col-form-label" for="finest"><?=$language["croatian"]['db.finest']?></label> 
							        <div class="col-8">
							          <select id="finest" name="finest" class="custom-select" required="required" onchange="changeText(this,1)">
							            <option value="1" selected><?=$language["croatian"]['edit.active']?></option>
							            <option value="0" ><?=$language["croatian"]['edit.inactive']?></option>
							          </select>
							        </div>
							      </div>
							      <div class="form-group row">
							        <label class="col-4 col-form-label" for="status"><?=$language["croatian"]['db.status']?></label> 
							        <div class="col-8">
							          <select id="status" name="status" class="custom-select" required="required" onchange="changeText(this,1)">
							            <option value="1" selected><?=$language["croatian"]['edit.active']?></option>
							            <option value="0" ><?=$language["croatian"]['edit.inactive']?></option>
							          </select>
							        </div>
							      </div>

					        	</div>
					        	<div class="col-6">
									<div class="form-group row">
										<label for="name" class="col-4 col-form-label"><?=$language["croatian"]['db.name']?></label> 
										<div class="col-8">
										  <div class="input-group">
										    <div class="input-group-prepend">
										      <div class="input-group-text">
										        <i class="fa fa-amazon"></i>
										      </div>
										    </div> 
										    <input id="name" name="name" type="text" class="form-control" onchange="changeText(this,1)">
										  </div>
										</div>
									</div>
									<div class="form-group row">
								        <label for="location" class="col-4 col-form-label"><?=$language["croatian"]['db.location']?></label> 
								        <div class="col-8">
								          <div class="input-group">
								            <div class="input-group-prepend">
								              <div class="input-group-text">
								                <i class="fa fa-location-arrow"></i>
								              </div>
								            </div> 
								            <input id="location" name="location" type="text" class="form-control" onchange="changeText(this,1)">
								          </div>
								        </div>
								      </div>
								      <div class="form-group row">
								        <label for="investor" class="col-4 col-form-label"><?=$language["croatian"]['db.investor']?></label> 
								        <div class="col-8">
								          <div class="input-group">
								            <div class="input-group-prepend">
								              <div class="input-group-text">
								                <i class="fa fa-money"></i>
								              </div>
								            </div> 
								            <input id="investor" name="investor" type="text" class="form-control" onchange="changeText(this,1)">
								          </div>
								        </div>
								      </div>
								      <div class="form-group row">
								        <label for="author" class="col-4 col-form-label"><?=$language["croatian"]['db.author']?></label> 
								        <div class="col-8">
								          <div class="input-group">
								            <div class="input-group-prepend">
								              <div class="input-group-text">
								                <i class="fa fa-file-text-o"></i>
								              </div>
								            </div> 
								            <input id="author" name="author" type="text" class="form-control" onchange="changeText(this,1)">
								          </div>
								        </div>
								      </div>
								      <div class="form-group row">
								        <label for="collaborator" class="col-4 col-form-label"><?=$language["croatian"]['db.collaborator']?></label> 
								        <div class="col-8">
								          <div class="input-group">
								            <div class="input-group-prepend">
								              <div class="input-group-text">
								                <i class="fa fa-address-book-o"></i>
								              </div>
								            </div> 
								            <input id="collaborator" name="collaborator" type="text" class="form-control" onchange="changeText(this,1)">
								          </div>
								        </div>
								      </div>
								      <div class="form-group row">
								        <label for="year" class="col-4 col-form-label"><?=$language["croatian"]['db.year']?></label> 
								        <div class="col-8">
								          <div class="input-group">
								            <div class="input-group-prepend">
								              <div class="input-group-text">
								                <i class="fa fa-calendar"></i>
								              </div>
								            </div> 
								            <input id="year" name=" " type="text" class="form-control" onchange="changeText(this,1)">
								          </div>
								        </div>
								      </div>
								      <div class="form-group row">
								        <label for="square" class="col-4 col-form-label"><?=$language["croatian"]['db.square']?></label> 
								        <div class="col-8">
								          <div class="input-group">
								            <div class="input-group-prepend">
								              <div class="input-group-text">
								                <i class="fa fa-behance-square"></i>
								              </div>
								            </div> 
								            <input id="square" name="square" type="text" class="form-control" onchange="changeText(this,1)">
								          </div>
								        </div>
								      </div>
								</div>
					        </div>
					      
							<div class="form-group row">
								<label for="text" class="col-2 col-form-label"><?=$language["croatian"]['db.description']?></label> 
								<div class="col-10">
								  <textarea id="text" name="text" cols="40" rows="5" class="form-control" style="overflow:auto" onchange="changeText(this,1)"></textarea>
								</div>
							</div>
						  </div>
						  <div class="tab-pane" id="EN" role="tabpanel" aria-labelledby="EN-tab">
						  	<div class="form-group row">
					        	<div class="col-6">
							      <div class="form-group row">
							        <label class="col-4 col-form-label" for="category"><?=$language["croatian"]['db.category']?></label> 
							        <div class="col-8">
							          <select id="ecategory" name="ecategory" class="custom-select" required="required" onchange="changeText(this,2)">
							            <option value="Culture" selected><?=$language["english"]['edit.culture']?></option>
							            <option value="Public" ><?=$language["english"]['edit.public']?></option>
							            <option value="Business" ><?=$language["english"]['edit.business']?></option>
							            <option value="Interior" ><?=$language["english"]['edit.interior']?></option>
							            <option value="House" ><?=$language["english"]['edit.house']?></option>
							            <option value="Tenders" ><?=$language["english"]['edit.tender']?></option>
							          </select>
							        </div>
							      </div> 
							      <div class="form-group row">
							        <label class="col-4 col-form-label" for="featured"><?=$language["croatian"]['db.featured']?></label> 
							        <div class="col-8">
							          <select id="efeatured" name="efeatured" class="custom-select" required="required" onchange="changeText(this,2)">
							            <option value="1" selected><?=$language["english"]['edit.active']?></option>
							            <option value="0" ><?=$language["english"]['edit.inactive']?></option>
							          </select>
							        </div>
							      </div>
							      <div class="form-group row">
							        <label class="col-4 col-form-label" for="product"><?=$language["croatian"]['db.product']?></label> 
							        <div class="col-8">
							          <select id="eproduct" name="eproduct" class="custom-select" required="required" onchange="changeText(this,2)">
							            <option value="1" selected><?=$language["english"]['edit.active']?></option>
							            <option value="0" ><?=$language["english"]['edit.inactive']?></option>
							          </select>
							        </div>
							      </div>
							      <div class="form-group row">
							        <label class="col-4 col-form-label" for="slideshowimage"><?=$language["croatian"]['db.slideshowimage']?></label> 
							        <div class="col-8">
							          <select id="eslideshowimage" name="eslideshowimage" class="custom-select" required="required" onchange="changeText(this,2)">
							            <option value="1" selected><?=$language["english"]['edit.active']?></option>
							            <option value="0" ><?=$language["english"]['edit.inactive']?></option>
							          </select>
							        </div>
							      </div>
							      <div class="form-group row">
							        <label class="col-4 col-form-label" for="finest"><?=$language["croatian"]['db.finest']?></label> 
							        <div class="col-8">
							          <select id="efinest" name="efinest" class="custom-select" required="required" onchange="changeText(this,2)">
							            <option value="1" selected><?=$language["english"]['edit.active']?></option>
							            <option value="0" ><?=$language["english"]['edit.inactive']?></option>
							          </select>
							        </div>
							      </div>
							      <div class="form-group row">
							        <label class="col-4 col-form-label" for="status"><?=$language["croatian"]['db.status']?></label> 
							        <div class="col-8">
							          <select id="estatus" name="estatus" class="custom-select" required="required" onchange="changeText(this,2)">
							            <option value="1" selected><?=$language["english"]['edit.active']?></option>
							            <option value="0" ><?=$language["english"]['edit.inactive']?></option>
							          </select>
							        </div>
							      </div>
					        	</div>
					        	<div class="col-6">
									<div class="form-group row">
										<label for="ename" class="col-4 col-form-label"><?=$language["croatian"]['db.name']?></label> 
										<div class="col-8">
										  <div class="input-group">
										    <div class="input-group-prepend">
										      <div class="input-group-text">
										        <i class="fa fa-amazon"></i>
										      </div>
										    </div> 
										    <input id="ename" name="ename" type="text" class="form-control">
										  </div>
										</div>
									</div>
									<div class="form-group row">
								        <label for="elocation" class="col-4 col-form-label"><?=$language["croatian"]['db.location']?></label> 
								        <div class="col-8">
								          <div class="input-group">
								            <div class="input-group-prepend">
								              <div class="input-group-text">
								                <i class="fa fa-location-arrow"></i>
								              </div>
								            </div> 
								            <input id="elocation" name="elocation" type="text" class="form-control">
								          </div>
								        </div>
								      </div>
								      <div class="form-group row">
								        <label for="investor" class="col-4 col-form-label"><?=$language["croatian"]['db.investor']?></label> 
								        <div class="col-8">
								          <div class="input-group">
								            <div class="input-group-prepend">
								              <div class="input-group-text">
								                <i class="fa fa-money"></i>
								              </div>
								            </div> 
								            <input id="einvestor" name="einvestor" type="text" class="form-control" onchange="changeText(this,2)">
								          </div>
								        </div>
								      </div>
								      <div class="form-group row">
								        <label for="author" class="col-4 col-form-label"><?=$language["croatian"]['db.author']?></label> 
								        <div class="col-8">
								          <div class="input-group">
								            <div class="input-group-prepend">
								              <div class="input-group-text">
								                <i class="fa fa-file-text-o"></i>
								              </div>
								            </div> 
								            <input id="eauthor" name="eauthor" type="text" class="form-control" onchange="changeText(this,2)">
								          </div>
								        </div>
								      </div>
								      <div class="form-group row">
								        <label for="collaborator" class="col-4 col-form-label"><?=$language["croatian"]['db.collaborator']?></label> 
								        <div class="col-8">
								          <div class="input-group">
								            <div class="input-group-prepend">
								              <div class="input-group-text">
								                <i class="fa fa-address-book-o"></i>
								              </div>
								            </div> 
								            <input id="ecollaborator" name="ecollaborator" type="text" class="form-control" onchange="changeText(this,2)">
								          </div>
								        </div>
								      </div>
								      <div class="form-group row">
								        <label for="year" class="col-4 col-form-label"><?=$language["croatian"]['db.year']?></label> 
								        <div class="col-8">
								          <div class="input-group">
								            <div class="input-group-prepend">
								              <div class="input-group-text">
								                <i class="fa fa-calendar"></i>
								              </div>
								            </div> 
								            <input id="eyear" name="eyear" type="text" class="form-control" onchange="changeText(this,2)">
								          </div>
								        </div>
								      </div>
								      <div class="form-group row">
								        <label for="square" class="col-4 col-form-label"><?=$language["croatian"]['db.square']?></label> 
								        <div class="col-8">
								          <div class="input-group">
								            <div class="input-group-prepend">
								              <div class="input-group-text">
								                <i class="fa fa-behance-square"></i>
								              </div>
								            </div> 
								            <input id="esquare" name="esquare" type="text" class="form-control" onchange="changeText(this,2)">
								          </div>
								        </div>
								      </div>
								</div>
					        </div>
					      
							<div class="form-group row">
								<label for="text" class="col-2 col-form-label"><?=$language["croatian"]['db.description']?></label> 
								<div class="col-10">
								  <textarea id="etext" name="etext" cols="40" rows="5" class="form-control" style="overflow:auto"></textarea>
								</div>
							</div>
						  </div>
						  	<div class="form-group row border-top border-primary">
								<div class="col-12">
									<div class="form-group row">
										<div class="col-6">
											<div class="form-group row">
										        <label for="vimeo" class="col-4 col-form-label">Vimeo URL</label> 
												<div class="col-8">
										          <div class="input-group">
										            <input id="vimeo" name="vimeo" type="text" class="form-control" placeholder="Vimeo ID">
										          </div>
										        </div>
											</div>
											<div class="form-group row">
												<label for="text" class="col-4 col-form-label"><?=$language[$this->session->userdata('language')]['upload.imagecount']?></label> 
												<div class="col-8">
													<div class="input-group">
														<div class="input-group-prepend">
															<div class="input-group-text">
																<i class="fa fa-sort-numeric-asc"></i>
															</div>
														</div> 
														<input id="gcount" name="gcount" type="text" class="form-control" disabled>
													</div>
												</div>
											</div> 
											<div class="form-group row" style="float: right;">
												<label class="custom-file-upload btn btn-dark">
												    <input class="" type="file" id="image_file" multiple="multiple" />
												    <?=$language[$this->session->userdata('language')]['upload.uploadimage']?>
												</label>
												<button type="button" class="btn btn-danger" onclick="clearfileinput()"><?=$language[$this->session->userdata('language')]['upload.clearqueue']?></button>
											</div>
										</div>
										<div class="col-6" id="uploadPreview">
											<div class="form-group row">
						        				<label for="title" class="col-4 col-form-label">Uploaded Images</label> 	
											</div>
											<div id="main">
												<div class="uploadrow" id="uploadrow">
												</div>
											</div>
										</div> 
										<style type="text/css">
											input[type="file"] {
											    display: none;
											}
											.custom-file-upload {
											    border: 1px solid #ccc;
											    display: inline-block;
											    padding: 6px 12px;
											    cursor: pointer;
											    margin: 0px;
											}
											#upload-photo {
												opacity: 0;
												position: absolute;
												z-index: -1;
											}
											#main .block { 
												height: 100px; 
												border: 1px black solid; 
											}
											.uploadrow { 
												min-height: 100px; 
												border: 1px #777 dashed; 
												display: flex; 
												flex-wrap:wrap;
											}
											.drag-list {
												overflow: hidden;
												width: 500px;
												border: 1px solid #ccc;
											}
											.drag-item {
												float: left;
												width: 25%;
												height: 60px;
												text-align: center;
												color: #555;
												background: #ddd;
												border: 1px solid #ccc;
												box-sizing: border-box;
												transition: 0.1s;
											}
											.drag-start {
												opacity: 0.8;
												-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
												filter: alpha(opacity=80);
											}
											.drag-enter {
												opacity: 0.5;
												-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
												filter: alpha(opacity=50);
												transform: scale(0.9);
											}
										</style>
										<script type="text/javascript">
											var COL_WIDTH = 62 // should be calculated dynamically, and recalculated at window resize
											var GUTTER_WIDTH = 30

											var COL_WIDTHS = {
											  750: 62,
											  970: 81,
											  1170: 97
											}
											var d;

											$(function() {								  
											  d = dragula({
											    invalid: function(el, target) {
											      return $(el).hasClass('ui-resizable-handle')
											    }
											  })
											  $('.uploadrow').each(function() {
											    d.containers.push(this)
											  })
											  
											  var colWidth = COL_WIDTHS[$('.container').width()] || COL_WIDTHS[0]
											  $(window).resize(function() {
											    colWidth = COL_WIDTHS[$('.container').width()] || COL_WIDTHS[0]
											    console.log('set colWidth to', colWidth, $('.container').width())
											  })
											  
											})
										</script>
										<script type="text/javascript">
											function clearfileinput() {
												$("#image_file").val('');
												$(".uploadrow").html('');
												$("#gcount").val(0);
											}
											var count=0, maxcount=0;
											function readImage(file) {
												var reader = new FileReader();
												var image  = new Image();
												reader.readAsDataURL(file);  
												reader.onload = function(_file) {
													image.src = _file.target.result; // url.createObjectURL(file);
													image.onload = function() {
														count++;
														var w = this.width,
														h = this.height,
														t = file.type, // ext only: // file.type.split('/')[1],
														n = file.name,
														s = ~~(file.size/1024) +'KB';
														$('.uploadrow').append("<img class='block col-sm-4' name='"+count+"' src='"+this.src+"'>");
														if (count===maxcount) {
															console.log("uploaded");
															$('.uploadrow').each(function() {
																d.containers.push(this)
															})
														}
													};
													image.onerror= function() {
														alert('Invalid file type: '+ file.type);
													};
												};
											}
											$("#image_file").change(function (e) {
												if(this.disabled) {
													return alert('File upload not supported!');
												}
												$('.uploadrow').html("");
												d.containers.splice(0, d.containers.length);
												var F = this.files;
												maxcount=0;
												if (F && F[0]) {
													maxcount=F.length;
													for (var i = 0; i < F.length; i++) {
														readImage(F[i]);
													}
												}
											});
										</script>
									</div>
								</div>
					        </div>
						</div>

						<script>
						  $(function () {
						    $('#myTab li:first-child a').tab('show')
						  })
						</script>
					</div>
				</div>
				<div class="form-group rows" hidden>
					<div>
				      <div class="form-group row">
				        <label for="gname" class="col-4 col-form-label">Editor Name</label> 
				        <div class="col-8">
				          <div class="input-group">
				            <div class="input-group-prepend">
				              <div class="input-group-text">
				                <i class="fa fa-amazon"></i>
				              </div>
				            </div> 
				            <input id="gname" name="gname" type="text" class="form-control">
				          </div>
				        </div>
				      </div>
				      <div class="form-group row">
				        <label for="gtype" class="col-4 col-form-label">Editor type</label> 
				        <div class="col-8">
				          <div class="input-group">
				            <div class="input-group-prepend">
				              <div class="input-group-text">
				                <i class="fa fa-id-card-o"></i>
				              </div>
				            </div> 
				            <input id="gtype" name="gtype" type="text" class="form-control">
				          </div>
				        </div>
				      </div> 
					</div>
				</div>
				<div class="form-group rows">
					<div class="offset-4">
					  <button name="submit" type="submit" class="btn btn-primary"><?=$language[$this->session->userdata('language')]['upload.save']?></button>
					  <a href="<?=base_url('home/manage')?>" name="submit" class="btn btn-danger"><?=$language[$this->session->userdata('language')]['upload.cancel']?></a>
					</div>
				</div>
			</form>
			<script type="text/javascript">
				function changeText(e, t) {
		            var id=e.id;
		            id=(t===1)?"e"+id:id.slice(1,id.length);
		            var c=document.getElementById(e.id);
		            var c1=document.getElementById(id);
		            c1.value=c.value;
		        }
		        function changecheckbox(e, t) {

		        }
				$('#editpage').on('submit', function(e){
					e.preventDefault();
					{
						var name = $('#name').val();
						var ename = $('#ename').val();
				        var category = $('#category').val();
				        var featured = (document.getElementById('featured').value==='1')?true:false;
				        var product = (document.getElementById('product').value==='1')?true:false;
				        var slideshowimage = (document.getElementById('slideshowimage').value==='1')?true:false;
				        var finest = (document.getElementById('finest').value==='1')?true:false;
				        var location = $('#location').val();
				        var elocation = $('#elocation').val();
				        var investor = $('#investor').val();
				        var author = $('#author').val();
				        var collaborator = $('#collaborator').val();
				        var year = $('#year').val();
				        var square = $('#square').val();
				        var status = (document.getElementById('status').value==='1')?true:false;
				        var text = $('#text').val();
				        var etext = $('#etext').val();
				        var gname = $('#gname').val();
				        var gtype = $('#gtype').val();
				        var vimeo = $('#vimeo').val();
				        var imageorder = "";

						var targetDiv = document.getElementById("uploadrow").getElementsByTagName("img");
						for(var i=0;i<targetDiv.length;i++) {
							imageorder+=targetDiv[i].name+",";
						}
						console.log("imageorder:",imageorder,"||vimeo:",vimeo);

				        var form_data = {name:name, ename:ename, category:category, featured:featured, product:product, slideshowimage:slideshowimage, finest:finest, location:location, elocation:elocation, investor:investor, author:author, collaborator:collaborator, year:year, square:square, status:status, text:text, etext:etext, gname:gname, gtype:gtype, imageorder:imageorder, vimeo:vimeo};

				        // alert(form_data);

				        $.ajax({
				        	url: "<?=base_url('home/saveclick')?>",
				        	method:"POST",
				        	data:form_data,
				        	success:function(res) 
				        	{
				        		var id=res;
				        	    alert("success");
				        		if (id===null||id==='') {
				        			alert('failed');
				        			return;
				        		}
								if($('#image_file').val() != '')  
								{  
									var form_data = new FormData();
									var ins = document.getElementById('image_file').files.length;
									for (var x = 0; x < ins; x++) {
										form_data.append("files[]", document.getElementById('image_file').files[x]);
									}
									$.ajax({  
										url:"<?=base_url('home/multipleImageStore?id=')?>"+id,
										method:"POST",  
										data:form_data,  
										contentType: false,  
										cache: false,  
										processData:false,  
										async:false,
										success:function(res) {
											var b=(res===''||res===null)?'true':'false';
											if (b==='false') {
												alert('failed upload');
												return;
											}
											$("#gcount").val(ins);
											window.location.href = "<?=base_url('home/manage')?>";
										}
									});  
								}
								else {
								    window.location.href = "<?=base_url('home/manage')?>";
								}
				        	}
				        });
					}
					
				});  
			</script>
		</div>
	</div>
</div>