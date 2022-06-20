<!-- Vendor -->
    <script src="<?=base_url('assets');?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url('assets');?>/vendor/jquery.appear/jquery.appear.min.js"></script>
    <script src="<?=base_url('assets');?>/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="<?=base_url('assets');?>/vendor/jquery.cookie/jquery.cookie.min.js"></script>
    <script src="<?=base_url('assets');?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url('assets');?>/vendor/jquery.validation/jquery.validate.min.js"></script>
    <script src="<?=base_url('assets');?>/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="<?=base_url('assets');?>/vendor/jquery.gmap/jquery.gmap.min.js"></script>
    <script src="<?=base_url('assets');?>/vendor/lazysizes/lazysizes.min.js"></script>
    <script src="<?=base_url('assets');?>/vendor/isotope/jquery.isotope.min.js"></script>
    <script src="<?=base_url('assets');?>/vendor/owl.carousel/owl.carousel.js"></script>
    <script src="<?=base_url('assets');?>/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="<?=base_url('assets');?>/vendor/vide/jquery.vide.min.js"></script>
    <script src="<?=base_url('assets');?>/vendor/vivus/vivus.min.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="<?=base_url('assets');?>/js/theme.js"></script>

    <!-- Circle Flip Slideshow Script -->
    <script src="<?=base_url('assets');?>/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
    <!-- Current Page Views -->
    <script src="<?=base_url('assets');?>/js/views/view.home.js"></script>

    <!-- Theme Custom -->
    <script src="<?=base_url('assets');?>/js/custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="<?=base_url('assets');?>/js/theme.init.js"></script>

    <!-- Examples -->
    <script src="<?=base_url('assets');?>/js/examples/examples.portfolio.js"></script>

    <script type="text/javascript">
        function select(lang) {
            $.ajax({
                url: "<?=base_url($this->session->userdata('page'))?>/"+lang,
                type: 'POST',
                data: {},
                error: function() {
                    alert('Something is wrong');
                },
                success: function(data) {
                    var hostname = window.location.hostname;
                    var pathname = window.location.pathname;
                    var array=pathname.split('/');
                    for (var i=0;i<array.length;i++) {
                        if (array[i]==="hr"&&lang==="language_EN") {
                            array[i]="en";
                            break;
                        }
                        else if(array[i]==="en"&&lang==="language_HR") {
                            array[i]="hr";
                            break;
                        }
                    }
                    var path=hostname+array.join('/');
                    // alert(path+","+window.location.href);
                    window.location.href="http://"+(path);
                    // window.location.reload();
                }
            });
        }
    </script>
    
    <script type="text/javascript">
        $('.side-header').addClass('side-header-hide');
        $('.hamburguer-btn .hamburguer').addClass('mysidebarmenuother');
        $('#mylogo').attr('src', '<?=base_url('assets')?>/images/logo/proto-arch-logo-dark.png');
        $('#mylogo').attr('height', '60px');
    </script>
</body>