<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	
    <?php
  $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
    $host = $_SERVER['HTTP_HOST'];
    $baseUrl = $protocol . $host;


  echo ' <link rel="stylesheet" href="'. $baseUrl .  '/assets/plugins/fontawesome/css/fontawesome.min.css">';
 echo ' <link rel="stylesheet" href="'. $baseUrl .  '/assets/plugins/fontawesome/css/all.min.css">';
?>
    @vite('resources/js/app.js')
    @inertiaHead
  </head>
  <body>
    @inertia

 
    <?php
    // If you have a subdirectory, append it like this:
    // $baseUrl .= '/subdirectory';
   echo ' <script src="'. $baseUrl .'/assets/js/jquery-3.7.1.min.js"></script>';
  echo '  <script src="'. $baseUrl .'/assets/js/moment.min.js"></script>';
   echo ' <script src="'. $baseUrl .'/assets/js/bootstrap-scrollspy.js"></script>';
 

   echo '   <script src="'. $baseUrl .'/assets/js/jquery.isotope.min.js"></script>';	
   echo '   <script src="'. $baseUrl .'/assets/plugins/select2/js/select2.js"></script>';	
	
  echo '	<script src="'. $baseUrl .'/assets/js/feather.min.js"></script>';
  echo '	<script src="'. $baseUrl .'/assets/js/script.js"></script>';


?>





	
 
<!--

 
  

    <script src="assets/js/jquery.isotope.min.js"></script>	
    <script src="assets/plugins/select2/js/select2.js"></script>	

	<script src="assets/js/feather.min.js"></script>
	<script src="assets/js/script.js"></script> -->

  </body>
</html>