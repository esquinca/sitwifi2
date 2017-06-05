
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/mousescroll.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.inview.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/main.js"></script>
<script src="js/contactform.js"></script>
<!-- Slider Productos y Clientes -->
<script src="js/jquery.bxSlider.js"></script>


<script type="text/javascript" src="js/percircle.js"></script>
<script type="text/javascript">
    $(function(){
        $("#bluecircle").percircle();
    });
    $('#main-slider a').click(function(e){
    	e.preventDefault();
    	$('html, body').stop().animate({scrollTop: $($(this).attr('href')).offset().top}, 1000);
    });
    $('#services a').click(function(e){
      e.preventDefault();
      $('html, body').stop().animate({scrollTop: $($(this).attr('href')).offset().top}, 1000);
    });

    $('a.navbar-brand').click(function(e){
      e.preventDefault();
      $('html, body').stop().animate({scrollTop: $($(this).attr('href')).offset().top}, 1000);
    });

</script>
@stack('scripts')
