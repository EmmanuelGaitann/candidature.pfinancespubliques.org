<!DOCTYPE html>
<html lang="en"><head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Programme Suipérieur de Spécialisation en Finances Publiques</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <!--pour la date et autres élments de jquerry-->
	
<!--        <link type="text/css" href="<?php echo base_url(); ?>resources/css/jquerry-css/ui.all.css" rel="stylesheet" />
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/jquerry-js/jquery-1.3.2.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/jquerry-js/ui.datepicker.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/personal_js_erc.js"></script>
	<link type="text/css" href="<?php echo base_url(); ?>resources/css/jquerry-css/demos.css" rel="stylesheet" />
	
	<script src="<?php echo base_url(); ?>resources/js/mainAjax.js"></script>-->
        
        <link href="<?php echo base_url(); ?>resources/bootstrap-lib/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>resources/bootstrap-lib/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>resources/bootstrap-lib/css/docs.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>resources/bootstrap-lib/js/google-code-prettify/prettify.css" rel="stylesheet">
        <link rel="shortcut icon" type="image/png" href="http://candidature.pfinancespubliques.org/favicon.png"/>
        
        <script type="text/javascript">
	$(function() {
		$("#datepicker").datepicker();
	});
	</script>
        
        
        <link rel="stylesheet" href="<?php echo base_url(); ?>resources/org_lib/bootstrap.css" media="screen">
        <link rel="stylesheet" href="<?php echo base_url(); ?>resources/org_lib/bootstrap11.css" media="screen">
        <!--<link rel="stylesheet" href="<?php echo base_url(); ?>resources/org_lib/bootswatch.css">-->
        <!--<link rel="stylesheet" href="<?php echo base_url(); ?>resources/org_lib/bootstrap-min.css">-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/style.css">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="../bower_components/bootstrap/assets/js/html5shiv.js"></script>
          <script src="../bower_components/bootstrap/assets/js/respond.min.js"></script>
        <![endif]-->
        <script src="<?php echo base_url(); ?>resources/org_lib/ga.js" async="" type="text/javascript"></script><script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-23019901-1']);
            _gaq.push(['_setDomainName', "bootswatch.com"]);
            _gaq.push(['_setAllowLinker', true]);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();

        </script>
        <!--<script src="<?php echo base_url(); ?>resources/org_lib/bsa_002.js" async="" type="text/javascript"></script><script async="async" src="<?php echo base_url(); ?>resources/org_lib/s_c466df00a3cd5ee8568b5c4983b6bb19.js" id="_bsap_js_c466df00a3cd5ee8568b5c4983b6bb19" type="text/javascript"></script><style id="bsa_css" type="text/css">.one{position:relative}.one .bsa_it_ad{display:block;padding:15px;border:1px solid #e1e1e1;background:#f9f9f9;font-family:helvetica,arial,sans-serif;line-height:100%;position:relative}.one .bsa_it_ad a{text-decoration:none}.one .bsa_it_ad a:hover{text-decoration:none}.one .bsa_it_ad .bsa_it_t{display:block;font-size:12px;font-weight:bold;color:#212121;line-height:125%;padding:0 0 5px 0}.one .bsa_it_ad .bsa_it_d{display:block;font-size:11px;color:#434343;font-size:12px;line-height:135%}.one .bsa_it_ad .bsa_it_i{float:left;margin:0 15px 10px 0}.one .bsa_it_p{display:block;text-align:right;position:absolute;bottom:10px;right:15px}.one .bsa_it_p a{font-size:10px;color:#666;text-decoration:none}.one .bsa_it_ad .bsa_it_p a:hover{font-style:italic}</style></head>-->
    <body>
        <!--<script src="<?php echo base_url(); ?>resources/org_lib/bsa.js"></script>-->

        

         <!-- Navbar
    ================================================== -->
    <div style="width:100%; height: 30px; background-color: #2FA4E7;">
		<div class="container" >
		<div class="row" style="color:#fff; margin-top: 3px;">
			
			<div id="menu-principal" class="col-lg-10" style="color:#fff;">
				<a href="<?php echo base_url(); ?>index.php"> Accueil</a> &nbsp;|&nbsp;
				<a href="<?php echo base_url(); ?>index.php/candidature/add"> Inscription</a> &nbsp;|&nbsp;
				<a href="<?php echo base_url(); ?>index.php/adminAuth"> Administration</a> 
				
			</div>
		</div>
		</div>
	</div>
         
         
        
        <div class="container" >
            <div class="row" >
                <div class="col-lg-1">
                    <img src='<?php echo base_url(); ?>resources/images/logo5.png' width="75" height="35" />
                </div>
                <div class="col-lg-11">
                    <div class="page-header" >
                        <h2 id="forms" style="text-aligne:center; margin-top: -15px;"> <font style="color: #683884; "><center>Candidature au Master Professionnel en Finances Publiques au PSSFP <br/> Année académique: 2015/2016  </center></font></h2>
						<div class="row" style="">
						   <div class="col-lg-16 right_align" >
									 <a  href="<?php echo base_url(); ?>index.php/candidature/add" class="btn btn-danger">S'inscrire ici</a> 
									 <a  href="<?php echo base_url(); ?>index.php/candidature/initupdate" class="btn btn-warning">Modifier son inscription</a> 
									 <!--<a  href="<?php echo base_url(); ?>index.php" class="btn btn-success">Nous contacter</a>--> 

			 
		   
						   </div>
						</div>
                    </div>
                </div>
            </div>
			<?php echo $content; ?>
            
            <div class="footer">
             <div class="row" >
                 
                 <div class="col-lg-12" >
                     <center>
                    &COPY; 2014: <a href="http://www.pfinancespubliques.org" >Programme Supérieur de Spécialisation en Finances Publiques <a/>
                     </center>
                 </div>
             </div>
         </div>
       </div>
         
         
<!--        <script src="<?php echo base_url(); ?>resources/org_lib/jquery.js"></script>
        <script src="<?php echo base_url(); ?>resources/org_lib/bootstrap.js"></script>
        <script href="<?php echo base_url(); ?>resources/org_lib/bootswatch.js"></script>-->
        
            <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="<?php echo base_url(); ?>resources/bootstrap-lib/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>resources/bootstrap-lib/js/google-code-prettify/prettify.js"></script>
    <script src="<?php echo base_url(); ?>resources/bootstrap-lib/js/bootstrap-transition.js"></script>
    <script src="<?php echo base_url(); ?>resources/bootstrap-lib/js/bootstrap-alert.js"></script>
    <script src="<?php echo base_url(); ?>resources/bootstrap-lib/js/bootstrap-modal.js"></script>
    <script src="<?php echo base_url(); ?>resources/bootstrap-lib/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo base_url(); ?>resources/bootstrap-lib/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo base_url(); ?>resources/bootstrap-lib/js/bootstrap-tab.js"></script>
    <script src="<?php echo base_url(); ?>resources/bootstrap-lib/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url(); ?>resources/bootstrap-lib/js/bootstrap-popover.js"></script>
    <script src="<?php echo base_url(); ?>resources/bootstrap-lib/js/bootstrap-button.js"></script>
    <script src="<?php echo base_url(); ?>resources/bootstrap-lib/js/bootstrap-collapse.js"></script>
    <script src="<?php echo base_url(); ?>resources/bootstrap-lib/js/bootstrap-carousel.js"></script>
    <script src="<?php echo base_url(); ?>resources/bootstrap-lib/js/bootstrap-typeahead.js"></script>
    <script src="<?php echo base_url(); ?>resources/bootstrap-lib/js/application.js"></script>
    </body></html>