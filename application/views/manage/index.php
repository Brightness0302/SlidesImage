  <div class="card-header">
    <h3 class="float-left"><?=$language[$this->session->userdata('language')]['manage.title']?></h3>
    <a href="<?=base_url('home/createpage')?>" class="btn btn-default float-right"><h4><?=$language[$this->session->userdata('language')]['manage.add']?></h4></a>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th><?=$language[$this->session->userdata('language')]['db.no']?></th>
        <th><?=$language[$this->session->userdata('language')]['db.name']?></th>
        <th><?=$language[$this->session->userdata('language')]['db.category']?></th>
        <th>F</th>
        <th>P</th>
        <th>S</th>
        <th><?=$language[$this->session->userdata('language')]['db.location']?></th>
        <th><?=$language[$this->session->userdata('language')]['db.investor']?></th>
        <th><?=$language[$this->session->userdata('language')]['db.collaborator']?></th>
        <th><?=$language[$this->session->userdata('language')]['db.year']?></th>
        <th><?=$language[$this->session->userdata('language')]['db.square']?></th>
        <th><?=$language[$this->session->userdata('language')]['db.options']?></th>
      </tr>
    </thead>
    <tbody>
      <?php
        for ($i=0;$i<count($projects);$i++) {
          $data=$projects[$i];
          echo "<tr>
                  <td>".($i+1)."</td>
                  <td>".$data[($this->session->userdata('language')=="croatian")?"name":"ename"]."</td>
                  <td>".$data['category']."</td>
                  <td>".($data['featured']==1?'T':'F')."</td>
                  <td>".($data['product']==1?'T':'F')."</td>
                  <td>".($data['slideshowimage']==1?'T':'F')."</td>
                  <td>".$data[($this->session->userdata('language')=="croatian")?"location":"elocation"]."</td>
                  <td>".$data['investor']."</td>
                  <td>".$data['collaborators']."</td>
                  <td>".$data['year']."</td>
                  <td>".$data['square']."</td>
                  <td><a href='".base_url("home/clickedit/$data[id]")."' class='btn btn-primary'>".$language[$this->session->userdata('language')]['manage.edit']."</a><button class='btn btn-danger' onclick='onclickdelete(".$data['id'].",this)'>".$language[$this->session->userdata('language')]['manage.delete']."</button></td>
                </tr>";
        }
      ?>
      <script type="text/javascript">
        function onclickdelete(id,r) {
          var index = r.parentNode.parentNode.rowIndex;
          if(confirm('Are you sure?')) {
            $.ajax({
                url: "<?=base_url('home/clickdelete')?>",
                type: 'POST',
                data: {id:id},
                error: function() {
                    alert('Something is wrong');
                },
                success: function(data) {
                    alert("success");
                    window.location.reload();
                }
            });
          }
        }
        function onclickedit(id,r) {
          var index = r.parentNode.parentNode.rowIndex;
          alert(confirm('Are you sure?-'+id+'-'+index));
        }
      </script>
    </tbody>
    <tfoot>
      <tr>
        <th><?=$language[$this->session->userdata('language')]['db.no']?></th>
        <th><?=$language[$this->session->userdata('language')]['db.name']?></th>
        <th><?=$language[$this->session->userdata('language')]['db.category']?></th>
        <th>F</th>
        <th>P</th>
        <th>S</th>
        <th><?=$language[$this->session->userdata('language')]['db.location']?></th>
        <th><?=$language[$this->session->userdata('language')]['db.investor']?></th>
        <th><?=$language[$this->session->userdata('language')]['db.collaborator']?></th>
        <th><?=$language[$this->session->userdata('language')]['db.year']?></th>
        <th><?=$language[$this->session->userdata('language')]['db.square']?></th>
        <th><?=$language[$this->session->userdata('language')]['db.options']?></th>
      </tr>
    </tfoot>
    </table>
  </div>
  <!-- /.card-body -->
<!-- /.card -->