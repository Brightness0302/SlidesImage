  <div class="card-header">
    <h3 class="float-left"><?=$language[$this->session->userdata('language')]['mproj.employee_title']?></h3>
    <a href="<?=base_url('studio/employee/createpage')?>" class="btn btn-default float-right"><h4><?=$language[$this->session->userdata('language')]['manage.add']?></h4></a>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th><?=$language[$this->session->userdata('language')]['db.no']?></th>
        <th><?=$language[$this->session->userdata('language')]['mproj.name']?></th>
        <th><?=$language[$this->session->userdata('language')]['mproj.state']?></th>
        <th><?=$language[$this->session->userdata('language')]['mproj.facebook']?></th>
        <th><?=$language[$this->session->userdata('language')]['mproj.twitter']?></th>
        <th><?=$language[$this->session->userdata('language')]['mproj.linkedin']?></th>
        <th><?=$language[$this->session->userdata('language')]['db.options']?></th>
      </tr>
    </thead>
    <tbody>
      <?php
        for ($i=0;$i<count($projects);$i++) {
          $data=$projects[$i];
          echo "<tr>
                  <td>".($i+1)."</td>
                  <td>".$data['name']."</td>
                  <td>".$data['type']."</td>
                  <td>".$data['facebook']."</td>
                  <td>".$data['twitter']."</td>
                  <td>".$data['linkedin']."</td>
                  <td><a href='".base_url("studio/employee/clickedit/$data[id]")."' class='btn btn-primary'>".$language[$this->session->userdata('language')]['manage.edit']."</a><button class='btn btn-danger' onclick='onclickmdelete(".$data['id'].",this)'>".$language[$this->session->userdata('language')]['manage.delete']."</button></td>
                </tr>";
        }
      ?>
      <script type="text/javascript">
        function onclickmdelete(id,r) {
          var index = r.parentNode.parentNode.rowIndex;
          if(confirm('Are you sure?')) {
            $.ajax({
                url: "<?=base_url('home/clickmedelete')?>",
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
        <th><?=$language[$this->session->userdata('language')]['mproj.name']?></th>
        <th><?=$language[$this->session->userdata('language')]['mproj.state']?></th>
        <th><?=$language[$this->session->userdata('language')]['mproj.facebook']?></th>
        <th><?=$language[$this->session->userdata('language')]['mproj.twitter']?></th>
        <th><?=$language[$this->session->userdata('language')]['mproj.linkedin']?></th>
        <th><?=$language[$this->session->userdata('language')]['db.options']?></th>
      </tr>
    </tfoot>
    </table>
  </div>
  <!-- /.card-body -->
<!-- /.card -->