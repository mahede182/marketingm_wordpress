<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="<?php get_language_attributes();?>"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="<?php bloginfo('charset');?>">
	<title><?php bloginfo('name');?> | <?php bloginfo('description');?></title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/Items/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/<?php echo get_template_directory_uri();?>/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
	
<?php wp_head();?>
<!-- before head you sould add wp_head(); it bring custom css of wordpress... -->
</head>

<body <?php body_class();?>>
<div class="wrap-body">

	<!--////////////////////////////////////Header-->
	<header class="zerogrid">
		<div class="logo"><img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt=""/></div>
		<div id='cssmenu' class="align-center">
			<ul>
			   <li class="active"><a href='<?php echo site_url();?>'><span>Home</span></a></li>
			   <li class=' has-sub'><a href='<?php echo site_url('/menu');?>'><span>Menu</span></a>
				  <ul >
					 <li class='has-sub'><a href='<?php echo site_url('/item_1');?>'><span>Item 1</span></a>
						<ul>
						   <li><a href='<?php echo site_url('/sub_item');?>'><span>Sub Item</span></a></li>
						   <li class='last'><a href='<?php echo site_url('/sub_item2');?>'><span>Sub Item</span></a></li>
						</ul>
					 </li>
					 <li class='has-sub'><a href='<?php echo site_url('/item2');?>'><span>Item 2</span></a>
						<ul>
						   <li><a href='<?php echo site_url('/sub_item3');?>'><span>Sub Item</span></a></li>
						   <li class='last'><a href='<?php echo site_url('/sub_item4');?>'><span>Sub Item</span></a></li>
						</ul>
					 </li>
				  </ul>
			   </li>
			   <li><a href='<?php echo site_url('/single');?>'><span>About</span></a></li>
			   <li><a href='<?php echo site_url('/archive');?>'><span>Blog</span></a></li>
			   <li class='last'><a href='<?php echo site_url('/contact');?>'><span>Contacts</span></a></li>
			</ul>
		</div>
	</header>

