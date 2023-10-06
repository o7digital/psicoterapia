<?php

$ref = 'nosotros : sicoterapia del Valle : psicoterapia individual y de pareja';
$ref_mot_cle ='nosotros : sicoterapia del Valle : psicoterapia individual y de pareja';
$id_page = "2";
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES"
	  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">

<head>
	
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KRC4WQJ');</script>
<!-- End Google Tag Manager -->
	
		<meta http-equiv="Content-Language" content="es,es-mx,es-ar,es-cl,es-co,es-cu,es-pe,es-pr,es-es,es-ve" />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

<meta name="robots" content="all" />
<title><?php echo $ref ?></title>
        <meta name="keywords" content="<?php echo $ref_mot_cle ?>" />
        <meta name="description" content="<?php echo $ref ?>" />
        
		<meta name="robots" content="index,follow,noodp" />
        
    <meta name="viewport" content="width=device-width" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider();
                randomStart: true;
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function(){

            $("ul.subnav").parent().append("<span></span>"); //Only shows drop down trigger when js is enabled (Adds empty span tag after ul.subnav*)
            
            $("ul.topnav li a").hover(function() { //When trigger is clicked...
                //Following events are applied to the subnav itself (moving subnav up and down)
                $(this).parent().find("ul.subnav").slideDown('fast').show(); //Drop down the subnav on click

                $(this).parent().hover(function() {
                }, function(){  
                    $(this).parent().find("ul.subnav").slideUp('slow'); //When the mouse hovers out of the subnav, move it back up
                });

                //Following events are applied to the trigger (Hover events for the trigger)
                }).hover(function() { 
                    $(this).addClass("subhover"); //On hover over, add class "subhover"
                }, function(){  //On Hover Out
                    $(this).removeClass("subhover"); //On hover out, remove class "subhover"
            });

        });
        </script>
    
    <!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = '7862d13a3b460b0032cc279d00c1faf8b8993822';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
    
    
</head>
<body>
	
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KRC4WQJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	
        <?php include ('header.php') ?>
        
    <div class="cboth"></div> 
    <div class="contenido row">
        <div class="col-xs-6">
            <h2>¿QUIEN SOY?</h2><br />
            <p class="texto-justificado text20">Soy Psicóloga Clínica con una amplia experiencia  en terapia individual y de pareja,  producto de la práctica profesional por más de 25 años, con Cédula Profesional No. 3814455.</p><br />
        </div>
        <div class="col-xs-6">
            <h3>¿QUÉ HAGO?</h3><br />
            <p class="texto-justificado text20">Aplico en el proceso terapéutico la Terapia Cognitiva, que está orientada  a ayudarte a entender  tu sistema personal de creencias, los temores que éstas generan en ti y  al mismo tiempo te ayudan a aprender nuevos patrones de conducta que te permitan un desempeño sin dolor,  más libre, más armónico  y más feliz.</p>
        </div>
        <br />
        <div class="cboth"></div> 
    </div>
    <div class="cboth"></div>
  
      <?php include ('footer.php'); ?>
      
</body>
</html>