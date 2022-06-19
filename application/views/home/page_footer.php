  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<script src="<?=base_url('assets')?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url('assets')?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('assets')?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url('assets')?>/dist/js/demo.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?=base_url('assets')?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url('assets')?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=base_url('assets')?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=base_url('assets')?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?=base_url('assets')?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<!-- Page specific script -->
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
    $(function () {
        $("#example1").DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "language": {
                <?php if(($this->session->userdata('language')==='croatian')):?>
                    "sEmptyTable":      "Nema podataka u tablici",
                    "sInfo":            "Prikazano _START_ do _END_ od _TOTAL_ rezultata",
                    "sInfoEmpty":       "Prikazano 0 do 0 od 0 rezultata",
                    "sInfoFiltered":    "(filtrirano iz _MAX_ ukupnih rezultata)",
                    "sInfoPostFix":     "",
                    "sInfoThousands":   ",",
                    "sLengthMenu":      "Prikaži _MENU_ rezultata po stranici",
                    "sLoadingRecords":  "Dohvaćam...",
                    "sProcessing":      "Obrađujem...",
                    "sSearch":          "Pretraži:",
                    "sZeroRecords":     "Ništa nije pronađeno",
                    "oPaginate": {
                        "sFirst":       "Prva",
                        "sPrevious":    "Nazad",
                        "sNext":        "Naprijed",
                        "sLast":        "Zadnja"
                    },
                    "oAria": {
                        "sSortAscending":  ": aktiviraj za rastući poredak",
                        "sSortDescending": ": aktiviraj za padajući poredak"
                    }
                <?php elseif (($this->session->userdata('language')==='english')):?>
                    "sEmptyTable":     "No data available in table",
                    "sInfo":           "Showing _START_ to _END_ of _TOTAL_ entries",
                    "sInfoEmpty":      "Showing 0 to 0 of 0 entries",
                    "sInfoFiltered":   "(filtered from _MAX_ total entries)",
                    "sInfoPostFix":    "",
                    "sInfoThousands":  ",",
                    "sLengthMenu":     "Show _MENU_ entries",
                    "sLoadingRecords": "Loading...",
                    "sProcessing":     "Processing...",
                    "sSearch":         "Search:",
                    "sZeroRecords":    "No matching records found",
                    "oPaginate": {
                        "sFirst":    "First",
                        "sLast":     "Last",
                        "sNext":     "Next",
                        "sPrevious": "Previous"
                    },
                    "oAria": {
                        "sSortAscending":  ": activate to sort column ascending",
                        "sSortDescending": ": activate to sort column descending"
                    }
                <?php endif;?>
            },
            
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
</body>
</html>
