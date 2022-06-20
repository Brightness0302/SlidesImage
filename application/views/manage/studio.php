  <div class="card-header">
    <h3 class="float-left"><?=$language[$this->session->userdata('language')]['mproj.title']?></h3>
    <a href="<?=base_url((($this->session->userdata('language')=="english")?"en":"hr").'/studio/timeline/createpage')?>" class="btn btn-default float-right"><h4><?=$language[$this->session->userdata('language')]['manage.add']?></h4></a>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th><?=$language[$this->session->userdata('language')]['db.no']?></th>
        <th>Title</th>
        <th>Year</th>
        <th>Description</th>
        <th><?=$language[$this->session->userdata('language')]['db.options']?></th>
      </tr>
    </thead>
    <tbody>
      <?php
        for ($i=0;$i<count($projects);$i++) {
          $data=$projects[$i];
          echo "<tr>
                  <td>".($i+1)."</td>
                  <td>".$data[($this->session->userdata('language')=="croatian")?"title":"etitle"]."</td>
                  <td>".$data['year']."</td>
                  <td>".$data[($this->session->userdata('language')=="croatian")?"description":"edescription"]."</td>
                  <td><a href='".base_url((($this->session->userdata('language')=="english")?"en":"hr")."/studio/timeline/clickedit/$data[id]")."' class='btn btn-primary'>".$language[$this->session->userdata('language')]['manage.edit']."</a><button class='btn btn-danger' onclick='onclickmdelete(".$data['id'].",this)'>".$language[$this->session->userdata('language')]['manage.delete']."</button></td>
                </tr>";
        }
      ?>
      <script type="text/javascript">
        function onclickmdelete(id,r) {
          var index = r.parentNode.parentNode.rowIndex;
          if(confirm('Are you sure?')) {
            $.ajax({
                url: "<?=base_url('home/clickmdelete')?>",
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
      </script>
    </tbody>
    <tfoot>
      <tr>
        <th><?=$language[$this->session->userdata('language')]['db.no']?></th>
        <th>Title</th>
        <th>Year</th>
        <th>Description</th>
        <th><?=$language[$this->session->userdata('language')]['db.options']?></th>
      </tr>
    </tfoot>
    </table>
  </div>
  <!-- /.card-body -->
<!-- /.card -->