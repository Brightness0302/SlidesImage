	<div id="loadcontent" role="main" class="main">
		<div class="container">
			<div>
				<h1><?=$language[$this->session->userdata('language')]['edit.editpage']?></h1>
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

						<div class="form-group row">
							<div class="col-6">
								<div class="tab-content">
									<div class="tab-pane active" id="HR" role="tabpanel" aria-labelledby="HR-tab">
										<div class="form-group row">
											<div class="col-12">
										      <div class="form-group row">
										        <label for="title" class="col-4 col-form-label"><?=$language["croatian"]['mproj.name']?></label> 
										        <div class="col-8">
										          <div class="input-group">
										            <div class="input-group-prepend">
										              <div class="input-group-text">
										                <i class="fa fa-amazon" style="font-size: 24px;"></i>
										              </div>
										            </div> 
										            <input id="title" name="title" type="text" class="form-control" onblur="myFunction(this, 1)">
										          </div>
										        </div>
										      </div>
										      <div class="form-group row">
										        <label for="year" class="col-4 col-form-label"><?=$language["croatian"]['mproj.year']?></label>
										        <div class="col-8">
										          <div class="input-group">
										            <div class="input-group-prepend">
										              <div class="input-group-text">
										                <i class="fa fa-calendar" style="font-size: 24px;"></i>
										              </div>
										            </div> 
										            <input id="year" name="year" type="text" class="form-control" onblur="myFunction(this, 1)">
										          </div>
										        </div>
										      </div>
										      <div class="form-group row">
										        <label for="description" class="col-4 col-form-label"><?=$language["croatian"]['mproj.description']?></label> 
										        <div class="col-8">
										          <textarea id="description" name="description" cols="40" rows="5" class="form-control" onblur="myFunction(this, 1)"></textarea>
										        </div>
										      </div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="EN" role="tabpanel" aria-labelledby="EN-tab">
								  		<div class="form-group row">
								  			<div class="col-12">
										      <div class="form-group row">
										        <label for="etitle" class="col-4 col-form-label"><?=$language["croatian"]['mproj.name']?></label> 
										        <div class="col-8">
											      <div class="input-group">
											        <div class="input-group-prepend">
										              <div class="input-group-text">
										                <i class="fa fa-amazon" style="font-size: 24px;"></i>
										              </div>
											        </div> 
											        <input id="etitle" name="etitle" type="text" class="form-control" required="required" onblur="myFunction(this, 2)">
											      </div>
											    </div>
										      </div>
										      <div class="form-group row">
										        <label for="eyear" class="col-4 col-form-label"><?=$language["croatian"]['mproj.year']?></label>
										        <div class="col-8">
										          <div class="input-group">
										            <div class="input-group-prepend">
										              <div class="input-group-text">
										                <i class="fa fa-calendar" style="font-size: 24px;"></i>
										              </div>
										            </div> 
										            <input id="eyear" name="eyear" type="text" class="form-control" onblur="myFunction(this, 2)">
										          </div>
										        </div>
										      </div>
										      <div class="form-group row">
										        <label for="edescription" class="col-4 col-form-label"><?=$language["croatian"]['mproj.description']?></label> 
										        <div class="col-8">
										          <textarea id="edescription" name="edescription" cols="40" rows="5" class="form-control" onblur="myFunction(this, 2)"></textarea>
										        </div>
										      </div>
											</div>
								  		</div>
								  	</div>
								</div>
							</div>
							<div class="col-6">
								<div class="form-group row">
									<div class="col-6">
										<label class="custom-file-upload btn btn-dark">
										    <input class="" type="file" id="image_file" />
										    <?=$language[$this->session->userdata('language')]['upload.uploadimage']?>
										</label>
									</div>
									<div class="col-6">
										<img class="col-md-8 border border-danger" id="uploadimage" src="<?=base_url('assets/studio/plus.png')?>">
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
								</style>
								<script type="text/javascript">
									$("#image_file").change(function (e) {
										if(this.disabled) {
											return alert('File upload not supported!');
										}
										var F = this.files;
										var reader = new FileReader();
										var image  = new Image();
										reader.readAsDataURL(F[0]);  
										reader.onload = function(_file) {
											image.src = _file.target.result; // url.createObjectURL(file);
											image.onload = function() {
												$("#uploadimage").attr("src",this.src);
											};
											image.onerror= function() {
												alert('Invalid file type: '+ file.type);
											};
										};
									});
								</script>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<div class="offset-4">
					  <button name="submit" type="submit" class="btn btn-primary"><?=$language[$this->session->userdata('language')]['upload.save']?></button>
					  <a href="<?=base_url((($this->session->userdata('language')=="english")?"en":"hr").'/home/managestudio/timeline')?>" name="submit" class="btn btn-danger"><?=$language[$this->session->userdata('language')]['upload.cancel']?></a>
					</div>
				</div>
			</form>
			<script type="text/javascript">
				function myFunction(e, t) {
		            var id=e.id;
		            id=(t===1)?"e"+id:id.slice(1,id.length);
		            var c=document.getElementById(e.id);
		            var c1=document.getElementById(id);
		            c1.value=c.value;
		        }
				$('#editpage').on('submit', function(e){
					e.preventDefault();
					{
						var title = $('#title').val();
						var etitle = $('#etitle').val();
				        var year = $('#year').val();
				        var description = $('#description').val();
				        var edescription = $('#edescription').val();

				        var form_data = {title:title, etitle:etitle, year:year, description:description, edescription:edescription};

				        $.ajax({
				        	url: "<?=base_url('home/msaveclick')?>",
				        	method:"POST",
				        	data:form_data,
				        	success:function(res) 
				        	{
				        		alert("success");
				        		var id=res;
				        		if (id===null||id==='') {
				        			alert('failed');
				        			return;
				        		}
				        		if($('#image_file').val() != '')  
								{  
									var form_data = new FormData();
									var ins = document.getElementById('image_file').files.length;
									alert(ins);
									form_data.append("files[]", document.getElementById('image_file').files[0]);
									$.ajax({  
										url:"<?=base_url('home/singleImageStore/timeline/?id=')?>"+id,
										method:"POST",  
										data:form_data,  
										contentType: false,  
										cache: false,  
										processData:false,  
										async:false,
										success:function(res) {
											alert("uploaded:"+res);
											window.location.href = "<?=base_url((($this->session->userdata('language')=="english")?"en":"hr").'/home/managestudio/timeline')?>";
										}
									});  
								}
								else {
									window.location.href = "<?=base_url((($this->session->userdata('language')=="english")?"en":"hr").'/home/managestudio/timeline')?>";
								}
				        	}
				        });
					}
				});  
			</script>
		</div>
	</div>
</div>