<?php // $Id$   ?>     
<!DOCTYPE html>     
<html lang="<?php print $language->language; ?>"  dir="<?php print $language->dir; ?>">         
<head> 
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"><?php print $head; ?>       
<title><?php print $head_title; ?></title>       
<?php print $styles; ?>       
<?php print $scripts; ?> 
 	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--></head>   
<body class="<?php print $classes; ?>" <?php print $attributes; ?>>        
<?php print $page_top; ?>       
<?php print $page; ?>       
<?php print $page_bottom; ?>  

 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php print base_path() . path_to_theme(); ?>/js/bootstrap.min.js"></script>    
	<script src="<?php print base_path() . path_to_theme(); ?>/js/backstretch.js"></script>
     <script> $("#slideshow").backstretch([
    "<?php print base_path() . path_to_theme(); ?>/images/bg1.jpg",
    "<?php print base_path() . path_to_theme(); ?>/images/bg2.jpg",
    "<?php print base_path() . path_to_theme(); ?>/images/bg3.jpg"    
  ], {duration: 4000}); </script>
    
          
</body> 
</html>