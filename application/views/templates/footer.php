<!--============================= FOOTER =============================-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="foot-logo">
                    <p style="font-size:15px">© <?php echo date('Y'); ?> <a href=""></a> | Puskesmas Tanah Abang<br></p>
                    <br>
                </div>
            </div>
            <div class="col-md-3">
                <div class="address">
                    <h3 style="font-size:20px">Alamat</h3>
                    <p style="font-size:15px"><span></span> Desa Tanah Abang Kec. Batanghari Leko Kab. Musi Banyuasin</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="address">
                    <h3 style="font-size:20px"> Kontak Kami</h3>
                        <p style="font-size:15px"> Email : puskesmastanahabang.muba@gmail.com
                        <br> Phone : 0812-7371-2815</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="address">
                    <h3 style="font-size:20px"> Akun Sosial Media</h3>
                        <ul class="footer-social-icons">
                    <li><a href="https://web.facebook.com/puskesmas.taba.5" target="blank">
                        <img src="<?php echo base_url() . 'theme/images/FB.png' ?>" width="50px;" class="img-fluid" alt="">
                        &nbsp;
                        <a href="https://web.facebook.com/puskesmas.taba.5" target="blank"></a>
                    </a>
                    
                    <li><a href="https://instagram.com/tanahabangpuskesmas?igshid=YmMyMTA2M2Y=" target="blank">
                        <img src="<?php echo base_url() . 'theme/images/IG.png' ?>" width="50px;" class="img-fluid" alt="">
                        &nbsp;
                        <a href="https://instagram.com/tanahabangpuskesmas?igshid=YmMyMTA2M2Y=" target="blank"></a>
                    </a>
                
                    <li><a href="https://www.youtube.com/channel/UCPKUOUQQ1G4Me0h7_8IsHfQ" target="blank">
                        <img src="<?php echo base_url() . 'theme/images/youtube.png' ?>" width="50px;" class="img-fluid" alt="">
                        &nbsp;
                        <a href="https://www.youtube.com/channel/UCPKUOUQQ1G4Me0h7_8IsHfQ" target="blank"></a>
                    </a>
                    </ul>
                </div>
            </div>
             <div class="col-md-12">
                <!-- back to top -->
                <script>
                    $(document).ready(function() {
                        $(window).scroll(function() {
                            if ($(window).scrollTop() > 100) {
                                $('#tombolScrollTop').fadeIn();
                            } else {
                                $('#tombolScrollTop').fadeOut();
                            }
                        });
                    });

                    function scrolltotop() {
                        $('html, body').animate({
                            scrollTop: 0
                        }, 500);
                    }
                </script>

                <!-- <i class="fa fa-home" aria-hidden="true"></i> -->
                <img src="<?php echo base_url() . 'theme/images/top1.png' ?>" width="60px;" class="img-fluid" alt="" type="button" value="" id="tombolScrollTop" onclick="scrolltotop()">


            </div>
        </div>

    </div>



    </div>
</footer>
<!--//END FOOTER -->
<!-- jQuery, Bootstrap JS. -->
<script src="<?php echo base_url() . 'theme/js/jquery.min.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/tether.min.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/bootstrap.min.js' ?>"></script>
<!-- tambahan download -->
<script src="<?php echo base_url() . 'theme/js/owl.carousel.min.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/validate.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/tweetie.min.js' ?>"></script>


<!-- Plugins -->
<script src="<?php echo base_url() . 'theme/js/slick.min.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/waypoints.min.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/counterup.min.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/owl.carousel.min.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/validate.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/tweetie.min.js' ?>"></script>

<!-- Subscribe -->
<script src="<?php echo base_url() . 'theme/js/subscribe.js' ?>"></script>
<!-- tambahan download -->
<script src="<?php echo base_url() . 'theme/js/contact.js' ?>"></script>

<!-- tambahan galery -->
<script src="<?php echo base_url() . 'theme/js/jquery-ui-1.10.4.min.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/jquery.isotope.min.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/animated-masonry-gallery.js' ?>"></script>
<!-- Magnific popup JS -->
<script src="<?php echo base_url() . 'theme/js/jquery.magnific-popup.js' ?>"></script>


<!-- Script JS -->

<script src="<?php echo base_url() . 'theme/js/script.js' ?>"></script>
<!-- tambahan download -->

<script src="<?php echo base_url() . 'theme/js/jquery.dataTables.min.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/dataTables.bootstrap4.min.js' ?>"></script>
<script>
    $(document).ready(function() {
        $('#display').DataTable();
    });
</script>

<script src="<?php echo base_url() . 'theme/js/myscript.js' ?>"></script>


</body>

</html>