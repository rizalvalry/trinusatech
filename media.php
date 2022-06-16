<?php
    error_reporting(0);
	session_start();
   header('Access-Control-Allow-Origin: *');
	require "config/koneksi.php";
	$query00     = $db->query("SELECT nama_toko,email_pengelola,nomor_hp,meta_deskripsi,static_content, alamat, nomor_hp, email_protokol, alamat_web, gambar FROM profil");
	$row00       = $query00->fetch_assoc();
	$nama_toko00 = explode(" ", $row00['nama_toko']);
	$tahun       = date("Y");
?>
<!doctype html>
<html lang="en-US">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="profile" href="https://gmpg.org/xfn/11">
      <title><?php include "pages/judul.php"; ?> | <?php include 'seo/dina_meta1.php'; ?></title>
      <meta name='robots' content='max-image-preview:large' />
      <link rel='dns-prefetch' href='http://s.w.org/' />
      <link rel='stylesheet' id='wp-block-library-css'  href='wp-includes/css/dist/block-library/style.min7404.css?ver=5.9.3' type='text/css' media='all' />
      <link rel='stylesheet' id='template-kit-export-css'  href='style.css' type='text/css' media='all' />
      <link rel='stylesheet' id='template-kit-export-css'  href='wp-content/plugins/template-kit-export/public/assets/css/template-kit-export-public.min365c.css?ver=1.0.21' type='text/css' media='all' />
      <link rel='stylesheet' id='hello-elementor-css'  href='wp-content/themes/hello-elementor/style.min0875.css?ver=2.5.0' type='text/css' media='all' />
      <link rel='stylesheet' id='hello-elementor-theme-style-css'  href='wp-content/themes/hello-elementor/theme.min0875.css?ver=2.5.0' type='text/css' media='all' />
      <link rel='stylesheet' id='elementor-icons-css'  href='wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min7816.css?ver=5.15.0' type='text/css' media='all' />
      <link rel='stylesheet' id='elementor-frontend-css'  href='wp-content/plugins/elementor/assets/css/frontend.min3ab2.css?ver=3.6.5' type='text/css' media='all' />
      <link rel='stylesheet' id='elementor-post-6-css'  href='wp-content/uploads/sites/20/elementor/css/post-62567.css?ver=1652314481' type='text/css' media='all' />
      <link rel='stylesheet' id='elementor-pro-css'  href='wp-content/plugins/elementor-pro/assets/css/frontend.mina767.css?ver=3.6.3' type='text/css' media='all' />
      <link rel='stylesheet' id='elementor-post-68-css'  href='wp-content/uploads/sites/20/elementor/css/post-68bb79.css?ver=1652314482' type='text/css' media='all' />
      <link rel='stylesheet' id='elementor-post-3624-css'  href='wp-content/uploads/sites/20/elementor/css/post-362425aa.css?ver=1652314483' type='text/css' media='all' />
      <link rel='stylesheet' id='elementor-post-161-css'  href='wp-content/uploads/sites/20/elementor/css/post-16125aa.css?ver=1652314483' type='text/css' media='all' />
      <link rel='stylesheet' id='elementor-post-2141-css'  href='wp-content/uploads/sites/20/elementor/css/post-214125aa.css?ver=1652314483' type='text/css' media='all' />
      <link rel='stylesheet' id='elementor-post-2005-css'  href='wp-content/uploads/sites/20/elementor/css/post-20055d09.css?ver=1652314551' type='text/css' media='all' />
      <!-- <link rel='stylesheet' id='google-fonts-1-css'  href='https://fonts.googleapis.com/css?family=Manrope%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CSource+Code+Pro%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7COrbitron%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=5.9.3' type='text/css' media='all' /> -->
      <link rel='stylesheet' id='elementor-icons-shared-0-css'  href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css' type='text/css' media='all' />
      <script type='text/javascript' src='wp-includes/js/jquery/jquery.minaf6c.js?ver=3.6.0' id='jquery-core-js'></script>
      <script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2' id='jquery-migrate-js'></script>
      <script type='text/javascript' src='wp-content/plugins/template-kit-export/public/assets/js/template-kit-export-public.min365c.js?ver=1.0.21' id='template-kit-export-js'></script>
      <link rel="https://api.w.org/" href="https://elementor.deverust.com/techvisio/wp-json/" />
      <!-- meta code -->
      <meta name="description" content="<?php include 'seo/dina_meta2.php'; ?>" />
      <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
      <link rel="canonical" href="index.html" />
      <meta property="og:locale" content="en_US" />
      <meta property="og:type" content="website" />
      <meta property="og:title" content="PT Trinusa Technologies" />
      <meta property="og:description" content="<?php include 'seo/dina_meta2.php'; ?>" />
      <meta property="og:url" content="<?= $row00['alamat_web']; ?>" />
      <meta property="og:site_name" content="PT Trinusa Technologies" />
      <meta property="og:image" content="<?= $row00['alamat_web']; ?>gambar/toko/logo.png" />
      <meta property="og:image:secure_url" content="<?= $row00['alamat_web']; ?>gambar/toko/logo.png" />
      <meta property="og:image:width" content="686" />
      <meta property="og:image:height" content="687" />
      <meta name="twitter:card" content="summary_large_image" />
      <meta name="twitter:description" content="<?php include 'seo/dina_meta2.php'; ?>" />
      <meta name="twitter:title" content="PT Trinusa Technologies" />
      <meta name="twitter:image" content="<?= $row00['alamat_web']; ?>gambar/toko/logo.png" />
      <meta name="generator" content="WordPress 5.9.3" />
      <!-- end meta code -->
      <!-- fa-icon -->
      <link rel="canonical" href="#" />
      <link rel='shortlink' href='https://elementor.deverust.com/techvisio/?p=68' />
      <link rel="alternate" type="application/json+oembed" href="https://elementor.deverust.com/techvisio/wp-json/oembed/1.0/embed?url=https%3A%2F%2Felementor.deverust.com%2Ftechvisio%2Ftemplate-kit%2Fhomepage%2F" />
      <link rel="alternate" type="text/xml+oembed" href="https://elementor.deverust.com/techvisio/wp-json/oembed/1.0/embed?url=https%3A%2F%2Felementor.deverust.com%2Ftechvisio%2Ftemplate-kit%2Fhomepage%2F&amp;format=xml" />
      <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
      <link rel="manifest" href="favicon/site.webmanifest">
      <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
      <meta name="msapplication-TileColor" content="#da532c">
      <meta name="theme-color" content="#ffffff">
      <meta name="msapplication-TileImage" content="https://elementor.deverust.com/techvisio/wp-content/uploads/sites/20/2022/04/favicon-tech.png" />
      <!-- end fa-icon -->
   
      <!-- contact us -->
      <link rel='stylesheet' id='elementor-post-1866-css' href='wp-content/uploads/sites/20/elementor/css/post-18664dae.css?ver=1653842061' type='text/css' media='all' />
      <!-- end contactus -->

      <!-- karir -->
      <link rel='stylesheet' id='elementor-post-2462-css' href='wp-content/uploads/sites/20/elementor/css/post-24623eeb.css?ver=1653862049' type='text/css' media='all' />
      <!-- end karir -->

      <!-- artikel -->
      <link rel='stylesheet' id='elementor-post-2301-css' href='wp-content/uploads/sites/20/elementor/css/post-2301c661.css?ver=1653857462' type='text/css' media='all' />
      <!-- end artikel -->

      <!-- Detail artikel -->
    <link rel='stylesheet' id='elementor-post-2189-css' href='wp-content/uploads/sites/20/elementor/css/post-2189f673.css?ver=1653842604' type='text/css' media='all' />
      <!-- end Detail artikel -->

      <!-- Galeri -->
      <link rel='stylesheet' id='elementor-post-2337-css' href='wp-content/uploads/sites/20/elementor/css/post-23375004.css?ver=1653842176' type='text/css' media='all' />
      <!-- End Galeri -->
   
      <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

      <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
      <!-- <script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css"> -->



   </head>
   <body class="envato_tk_templates-template-default single single-envato_tk_templates postid-68 elementor-default elementor-template-full-width elementor-kit-6 elementor-page elementor-page-68">
	<!--header-->
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
         <defs>
            <filter id="wp-duotone-dark-grayscale">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
               <feComponentTransfer color-interpolation-filters="sRGB" >
                  <feFuncR type="table" tableValues="0 0.49803921568627" />
                  <feFuncG type="table" tableValues="0 0.49803921568627" />
                  <feFuncB type="table" tableValues="0 0.49803921568627" />
                  <feFuncA type="table" tableValues="1 1" />
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in" />
            </filter>
         </defs>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
         <defs>
            <filter id="wp-duotone-grayscale">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
               <feComponentTransfer color-interpolation-filters="sRGB" >
                  <feFuncR type="table" tableValues="0 1" />
                  <feFuncG type="table" tableValues="0 1" />
                  <feFuncB type="table" tableValues="0 1" />
                  <feFuncA type="table" tableValues="1 1" />
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in" />
            </filter>
         </defs>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
         <defs>
            <filter id="wp-duotone-purple-yellow">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
               <feComponentTransfer color-interpolation-filters="sRGB" >
                  <feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />
                  <feFuncG type="table" tableValues="0 1" />
                  <feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />
                  <feFuncA type="table" tableValues="1 1" />
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in" />
            </filter>
         </defs>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
         <defs>
            <filter id="wp-duotone-blue-red">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
               <feComponentTransfer color-interpolation-filters="sRGB" >
                  <feFuncR type="table" tableValues="0 1" />
                  <feFuncG type="table" tableValues="0 0.27843137254902" />
                  <feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" />
                  <feFuncA type="table" tableValues="1 1" />
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in" />
            </filter>
         </defs>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
         <defs>
            <filter id="wp-duotone-midnight">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
               <feComponentTransfer color-interpolation-filters="sRGB" >
                  <feFuncR type="table" tableValues="0 0" />
                  <feFuncG type="table" tableValues="0 0.64705882352941" />
                  <feFuncB type="table" tableValues="0 1" />
                  <feFuncA type="table" tableValues="1 1" />
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in" />
            </filter>
         </defs>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
         <defs>
            <filter id="wp-duotone-magenta-yellow">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
               <feComponentTransfer color-interpolation-filters="sRGB" >
                  <feFuncR type="table" tableValues="0.78039215686275 1" />
                  <feFuncG type="table" tableValues="0 0.94901960784314" />
                  <feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" />
                  <feFuncA type="table" tableValues="1 1" />
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in" />
            </filter>
         </defs>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
         <defs>
            <filter id="wp-duotone-purple-green">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
               <feComponentTransfer color-interpolation-filters="sRGB" >
                  <feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" />
                  <feFuncG type="table" tableValues="0 1" />
                  <feFuncB type="table" tableValues="0.44705882352941 0.4" />
                  <feFuncA type="table" tableValues="1 1" />
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in" />
            </filter>
         </defs>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
         <defs>
            <filter id="wp-duotone-blue-orange">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
               <feComponentTransfer color-interpolation-filters="sRGB" >
                  <feFuncR type="table" tableValues="0.098039215686275 1" />
                  <feFuncG type="table" tableValues="0 0.66274509803922" />
                  <feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" />
                  <feFuncA type="table" tableValues="1 1" />
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in" />
            </filter>
         </defs>
      </svg>
      <div data-elementor-type="header" data-elementor-id="3624" class="elementor elementor-3624 elementor-location-header">
         <section class="elementor-section elementor-top-section elementor-element elementor-element-5956578 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="5956578" data-element_type="section">
            <div class="elementor-container elementor-column-gap-no">
               <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8b04ea1" data-id="8b04ea1" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-ee5e807 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="ee5e807" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-no">
                           <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-b82491b" data-id="b82491b" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-ccdcc13 elementor-widget elementor-widget-menu-anchor" data-id="ccdcc13" data-element_type="widget" data-widget_type="menu-anchor.default">
                                    <div class="elementor-widget-container">
                                       <div id="gotop" class="elementor-menu-anchor"></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                     <!-- for desktop views -->
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-4264706 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="4264706" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;background_motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;background_motion_fx_opacity_effect&quot;:&quot;yes&quot;,&quot;background_motion_fx_opacity_range&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:1}},&quot;background_motion_fx_range&quot;:&quot;page&quot;,&quot;sticky&quot;:&quot;top&quot;,&quot;background_motion_fx_opacity_direction&quot;:&quot;out-in&quot;,&quot;background_motion_fx_opacity_level&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;background_motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0}">
                        <div class="elementor-container elementor-column-gap-wider">
                           <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-b4415c7" data-id="b4415c7" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-2aa1c5b elementor-widget__width-initial elementor-widget elementor-widget-image" data-id="2aa1c5b" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                       <a href="#">
                                       <img width="240" height="135" src="gambar/toko/<?php echo $row00['gambar']; ?>" class="attachment-full size-full" alt="" loading="lazy" />								</a>
                                    </div>
                                 </div>
                                 <div class="elementor-element elementor-element-26c93b7 elementor-nav-menu--stretch elementor-widget__width-auto elementor-hidden-mobile elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu" data-id="26c93b7" data-element_type="widget" data-settings="{&quot;full_width&quot;:&quot;stretch&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;i class=\&quot;fas fa-chevron-down\&quot;&gt;&lt;\/i&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;layout&quot;:&quot;horizontal&quot;,&quot;toggle&quot;:&quot;burger&quot;}" data-widget_type="nav-menu.default">
                                    <div class="elementor-widget-container">
                                       <nav migration_allowed="1" migrated="0" role="navigation" class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-none">
                                          <ul id="menu-1-26c93b7" class="elementor-nav-menu">
                                             <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-89"><a href="<?= $row00['alamat_web']; ?>" aria-current="page" class="elementor-item">Home</a></li>
                                             <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-89"><a href="tentang-kami" aria-current="page" class="elementor-item">Tentang Kami</a></li>
											 

                                             <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-97">
                                                <a href="#" class="elementor-item elementor-item-anchor">IT Solutions</a>
                                                
												<ul class="sub-menu elementor-nav-menu--dropdown">
												<?php 
												$query2 = $db->prepare("SELECT nama_kategori, id_kategori FROM kategori_produk");
												$query2->execute();
												$result2      = $query2->get_result();
												while ( $row2         = $result2->fetch_assoc() ){ ?>
													<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-98"><a href="solutions-<?= $row2['id_kategori']; ?>" class="elementor-sub-item"><?= $row2['nama_kategori']; ?></a></li>
													
													<?php } ?>
												</ul>
                                             </li>

											 <!-- code -->
											 <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-93">
                                                <a href="galeri" class="elementor-item elementor-item-anchor">Partnerships</a>
                                                <!-- <ul class="sub-menu elementor-nav-menu--dropdown"> -->
												<?php
											// $query3 = $db->prepare("SELECT judul_galeri FROM galeri");
											// $query3->bind_param("s", $aktif3);
											// $aktif3 = "Y";
											// $query3->execute();
											// $result3= $query3->get_result();
											// while ( $row3 = $result3->fetch_assoc() ){
                                     ?>
                                       <?php
                                          // $query1234      = $db->query("SELECT id_galeri, judul_galeri, gambar FROM galeri WHERE aktif = 'Y' ORDER BY id_galeri DESC");
                                          // while( $row1234 = $query1234->fetch_assoc() ){
                                          //    $query12345 = $db->query("SELECT COUNT(id_foto) AS jumlah FROM foto WHERE id_galeri = '$row1234[id_galeri]'");
                                          //    $row12345   = $query12345->fetch_assoc();
                                       ?>
                                                   <!-- <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-91"><a href="foto-galeri-<?php echo $row1234['id_galeri']; ?>.html" class="elementor-sub-item"><?php echo $row1234['judul_galeri']; ?></a></li> -->
                                                  
											<?php //} ?> 
                                                <!-- </ul> -->
                                             </li>
											 <!-- code -->
											 
                                             <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-93">
                                                <a href="" class="elementor-item elementor-item-anchor">Artikel</a>
                                                <ul class="sub-menu elementor-nav-menu--dropdown">
												<?php
											$query3 = $db->prepare("SELECT id_kategori,nama_kategori,kategori_seo FROM kategori_artikel WHERE aktif=? ORDER BY nama_kategori ASC");
											$query3->bind_param("s", $aktif3);
											$aktif3 = "Y";
											$query3->execute();
											$result3= $query3->get_result();
											while ( $row3 = $result3->fetch_assoc() ){ ?>
                                                   <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-91"><a href="label-<?= $row3['id_kategori']; ?>-<?= $row3['kategori_seo']; ?>" class="elementor-sub-item"><?= $row3['nama_kategori']; ?></a></li>
                                                  
											<?php } ?> 
                                                </ul>
                                             </li>


											 <?php
												$query4  = $db->prepare("SELECT nama_menu,link FROM menuutama WHERE nama_menu NOT LIKE '%Tentang%' AND aktif=? AND lokasi=? ORDER BY urutan ASC");
												$query4->bind_param("ss", $aktif4,$lokasi4);
												$lokasi4 = "Public";
												$aktif4  = "Y";
												$query4->execute();
												$result4 = $query4->get_result();
												while ( $row4 = $result4->fetch_assoc() ){ ?>
												<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-89"><a href="<?= $row4['link']; ?>" aria-current="page" class="elementor-item"><?= $row4['nama_menu']; ?></a></li>
												
											<?php } ?>
                                             
                                             
                                             <!-- <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-106">
                                                <a href="#" class="elementor-item elementor-item-anchor">Blog</a>
                                                <ul class="sub-menu elementor-nav-menu--dropdown">
                                                   <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-107"><a href="https://elementor.deverust.com/techvisio/template-kit/our-blog/" class="elementor-sub-item">Our Blog</a></li>
                                                   <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-108"><a href="https://elementor.deverust.com/techvisio/category/optimization/" class="elementor-sub-item">Post Archive</a></li>
                                                   <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-109"><a href="https://elementor.deverust.com/techvisio/2022/02/07/the-ultimate-guide-to-email-marketing-benchmarks-for-2022/" class="elementor-sub-item">Single Post</a></li>
                                                </ul>
                                             </li> -->
                                          </ul>
                                       </nav>
                                       <div class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Menu Toggle" aria-expanded="false">
									   <i class="fa-solid fa-bars"></i>	<span class="elementor-screen-only">Menu</span>
                                       </div>
                                       <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" role="navigation" aria-hidden="true">
                                          <ul id="menu-2-26c93b7" class="elementor-nav-menu">
                                             <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-89"><a href="<?= $row00['alamat_web']; ?>" aria-current="page" class="elementor-item elementor-item-active" tabindex="-1">Home</a></li>
                                             <!-- <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-90"><a href="#" class="elementor-item" tabindex="-1">About Us</a></li> -->
                                             <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-93">
                                                <a href="#" class="elementor-item elementor-item-anchor" tabindex="-1">Service</a>
                                                <ul class="sub-menu elementor-nav-menu--dropdown">
                                                   <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-91"><a href="#" class="elementor-sub-item" tabindex="-1">Service Set</a></li>
                                                   <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-92"><a href="#" class="elementor-sub-item" tabindex="-1">Service Detail</a></li>
                                                </ul>
                                             </li>
                                             <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-95"><a href="#" class="elementor-item" tabindex="-1">Career</a></li>
                                             <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-97">
                                                <a href="#" class="elementor-item elementor-item-anchor" tabindex="-1">Pages</a>
                                                <ul class="sub-menu elementor-nav-menu--dropdown">
                                                   <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-98"><a href="#" class="elementor-sub-item" tabindex="-1">Our Team</a></li>
                                                   <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-99"><a href="#" class="elementor-sub-item" tabindex="-1">Testimonials</a></li>
                                                   <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-100"><a href="#" class="elementor-sub-item" tabindex="-1">Pricing &#038; Plans</a></li>
                                                   <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-101"><a href="#" class="elementor-sub-item" tabindex="-1">FAQ &#038; Help Center</a></li>
                                                   <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-103"><a href="#" class="elementor-sub-item" tabindex="-1">404</a></li>
                                                   <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-104"><a href="#" class="elementor-sub-item" tabindex="-1">Coming Soon</a></li>
                                                   <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2256"><a href="#" class="elementor-sub-item" tabindex="-1">Login</a></li>
                                                   <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2300"><a href="#" class="elementor-sub-item" tabindex="-1">Register</a></li>
                                                   <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-105"><a href="#" class="elementor-sub-item" tabindex="-1">Contact Us</a></li>
                                                </ul>
                                             </li>
                                             <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-106">
                                                <a href="#" class="elementor-item elementor-item-anchor" tabindex="-1">Blog</a>
                                                <ul class="sub-menu elementor-nav-menu--dropdown">
                                                   <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-107"><a href="#" class="elementor-sub-item" tabindex="-1">Our Blog</a></li>
                                                   <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-108"><a href="#" class="elementor-sub-item" tabindex="-1">Post Archive</a></li>
                                                   <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-109"><a href="#" class="elementor-sub-item" tabindex="-1">Single Post</a></li>
                                                </ul>
                                             </li>
                                          </ul>
                                       </nav>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ffb75de" data-id="ffb75de" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-86aeecb elementor-widget__width-initial elementor-hidden-mobile elementor-search-form--skin-classic elementor-search-form--button-type-icon elementor-search-form--icon-search elementor-widget elementor-widget-search-form" data-id="86aeecb" data-element_type="widget" data-settings="{&quot;skin&quot;:&quot;classic&quot;}" data-widget_type="search-form.default">
                                    <!-- <div class="elementor-widget-container"> -->
                                       <!-- <form class="elementor-search-form" role="search" action="https://elementor.deverust.com/techvisio" method="get">
                                          <div class="elementor-search-form__container">
                                             <input placeholder="Search..." class="elementor-search-form__input" type="search" name="s" title="Search" value="">
                                             <button class="elementor-search-form__submit" type="submit" title="Search" aria-label="Search">
                                             <i aria-hidden="true" class="fas fa-search"></i>							<span class="elementor-screen-only">Search</span>
                                             </button>
                                          </div>
                                       </form> -->
                                    <!-- </div> -->
                                 </div>
                                 <div class="elementor-element elementor-element-3be5ae8 elementor-widget__width-auto elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-button" data-id="3be5ae8" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                       <div class="elementor-button-wrapper">
                                          <a href="#" class="elementor-button-link elementor-button elementor-size-md" role="button">
                                             <span class="elementor-button-content-wrapper">
                                                <!-- <span class="elementor-button-text">Login</span> -->
                                             </span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="elementor-element elementor-element-d441c8d elementor-widget__width-auto elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-button" data-id="d441c8d" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                      <div id="google_translate_element"></div>
                                    </div>
                                 </div>
                                 <div class="elementor-element elementor-element-3d8f33a elementor-widget__width-auto elementor-widget elementor-widget-image" data-id="3d8f33a" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                       <a href="#elementor-action%3Aaction%3Dpopup%3Aopen%26settings%3DeyJpZCI6IjIxMTEiLCJ0b2dnbGUiOmZhbHNlfQ%3D%3D">
                                       <img width="40" height="40" src="wp-content/uploads/sites/20/2022/03/hamburger.png" class="attachment-full size-full" alt="" loading="lazy" />								</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-fb89f82 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="fb89f82" data-element_type="section" data-settings="{&quot;sticky&quot;:&quot;top&quot;,&quot;sticky_offset&quot;:88,&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_effects_offset&quot;:0}">
                        <div class="elementor-container elementor-column-gap-no">
                           <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-600d6d4" data-id="600d6d4" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-6d3a6be elementor-widget elementor-widget-spacer" data-id="6d3a6be" data-element_type="widget" data-widget_type="spacer.default">
                                    <div class="elementor-widget-container">
                                       <div class="elementor-spacer">
                                          <div class="elementor-spacer-inner"></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                  </div>
               </div>
            </div>
         </section>
      </div>
	<!--//header-->


	<!-- Body -->
	<?php include "tengah.php"; ?>
	<!-- //Body -->


	<!--footer-->
	<div data-elementor-type="footer" data-elementor-id="161" class="elementor elementor-161 elementor-location-footer">
         <section class="elementor-section elementor-top-section elementor-element elementor-element-623267b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="623267b" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-no">
               <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3b71276" data-id="3b71276" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-c298a76 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c298a76" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-wider">
                           <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-0c5c0f2" data-id="0c5c0f2" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                
                              <?php
                                 $footer = $db->query("SELECT testimoni FROM testimoni");
                                 $endfooter = $footer->fetch_assoc();
                               ?>
                               
                               <?= $endfooter['testimoni'] ?>
                              

                              </div>
                           </div>
                        </div>
                     </section>
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-6361e62 elementor-reverse-tablet elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6361e62" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-wider">
                           <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7f68231" data-id="7f68231" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <section class="elementor-section elementor-inner-section elementor-element elementor-element-e22dc70 elementor-reverse-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e22dc70" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-no">
                                       <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-82e6039" data-id="82e6039" data-element_type="column">
                                          <div class="elementor-widget-wrap elementor-element-populated">
                                             <div class="elementor-element elementor-element-bed0287 elementor-widget elementor-widget-heading" data-id="bed0287" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                   <h2 class="elementor-heading-title elementor-size-default"><?= $row00['email_pengelola']; ?></h2>
                                                </div>
                                             </div>
                                             <div class="elementor-element elementor-element-d242c7d elementor-widget elementor-widget-heading" data-id="d242c7d" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                   <h2 class="elementor-heading-title elementor-size-default">General Support</h2>
                                                </div>
                                             </div>
                                             <div class="elementor-element elementor-element-a9e1118 elementor-widget elementor-widget-heading" data-id="a9e1118" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                <?php
                                                   $homepage1 = $db->query("SELECT email, foto FROM user WHERE nama_lengkap LIKE '%direktur%' ");
                                                   $contentone = $homepage1->fetch_assoc();?>

                                                   
                                                   <h2 class="elementor-heading-title elementor-size-default"><?= $contentone['email']; ?></h2>
                                                </div>
                                             </div>
                                             <div class="elementor-element elementor-element-2d1c98a elementor-widget elementor-widget-heading" data-id="2d1c98a" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                   <h2 class="elementor-heading-title elementor-size-default">Layanan Terbaik</h2>
                                                </div>
                                             </div>
                                             <div class="elementor-element elementor-element-48c6779 elementor-shape-circle e-grid-align-left e-grid-align-tablet-left e-grid-align-mobile-center elementor-widget-mobile__width-inherit elementor-grid-4 elementor-widget elementor-widget-social-icons" data-id="48c6779" data-element_type="widget" data-widget_type="social-icons.default">
                                                <div class="elementor-widget-container">
                                                   <div class="elementor-social-icons-wrapper elementor-grid">
                                                      <span class="elementor-grid-item">
                                                      <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-20b9e71" target="_blank">
                                                      <span class="elementor-screen-only">Facebook</span>
                                                      <i class="fab fa-facebook"></i>					</a>
                                                      </span>
                                                      <span class="elementor-grid-item">
                                                      <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-bec210c" target="_blank">
                                                      <span class="elementor-screen-only">Twitter</span>
                                                      <i class="fab fa-twitter"></i>					</a>
                                                      </span>
                                                      <span class="elementor-grid-item">
                                                      <a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-repeater-item-8f490e2" target="_blank">
                                                      <span class="elementor-screen-only">Youtube</span>
                                                      <i class="fab fa-youtube"></i>					</a>
                                                      </span>
                                                      <span class="elementor-grid-item">
                                                      <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-repeater-item-60bcc90" target="_blank">
                                                      <span class="elementor-screen-only">Linkedin</span>
                                                      <i class="fab fa-linkedin"></i>					</a>
                                                      </span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-46ddfc5" data-id="46ddfc5" data-element_type="column">
                                          <div class="elementor-widget-wrap elementor-element-populated">
                                             <div class="elementor-element elementor-element-b9e1d4a elementor-widget elementor-widget-text-editor" data-id="b9e1d4a" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                   <p><?= $row00['alamat']; ?></p>
                                                </div>
                                             </div>
                                             <div class="elementor-element elementor-element-c1e5cd3 elementor-widget__width-auto elementor-widget elementor-widget-counter" data-id="c1e5cd3" data-element_type="widget" data-widget_type="counter.default">
                                                <div class="elementor-widget-container">
                                                   <div class="elementor-counter">
                                                      <div class="elementor-counter-number-wrapper">
                                                         <span class="elementor-counter-number-prefix"></span>
                                                         <!-- <span class="elementor-counter-number" data-duration="2000" data-to-value="1415" data-from-value="0" data-delimiter=",">0</span> -->
                                                         <span class="elementor-counter-number-suffix"><?= $row00['nama_toko']; ?></span>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="elementor-element elementor-element-dfda685 elementor-widget elementor-widget-heading" data-id="dfda685" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                   <h2 class="elementor-heading-title elementor-size-default"><?= $row00['meta_deskripsi']; ?></h2>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </section>
                                 <section class="elementor-section elementor-inner-section elementor-element elementor-element-e5238da elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e5238da" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-no">
                                       <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-97e8494" data-id="97e8494" data-element_type="column">
                                          <div class="elementor-widget-wrap elementor-element-populated">
                                             <div class="elementor-element elementor-element-99cc893 elementor-widget elementor-widget-heading" data-id="99cc893" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                   <h2 class="elementor-heading-title elementor-size-default">Company</h2>
                                                </div>
                                             </div>
                                             <div class="elementor-element elementor-element-6385073 elementor-tablet-align-left elementor-mobile-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="6385073" data-element_type="widget" data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                   <ul class="elementor-icon-list-items">
                                                   <?php
                                                   $urutanmenu = $db->query("SELECT nama_menu FROM menuutama WHERE link <> ''  AND aktif='Y' ORDER BY urutan");
                                                   while( $menulinks = $urutanmenu->fetch_assoc() ) {?>
                                                      <li class="elementor-icon-list-item">
                                                         <a href="#">
                                                         <span class="elementor-icon-list-text"><?= $menulinks['nama_menu']; ?></span>
                                                         </a>
                                                      </li>
                                                      <?php } ?>
                                                      
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3151e46" data-id="3151e46" data-element_type="column">
                                          <div class="elementor-widget-wrap elementor-element-populated">
                                             <div class="elementor-element elementor-element-9376ac6 elementor-widget elementor-widget-heading" data-id="9376ac6" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                   <h2 class="elementor-heading-title elementor-size-default">Quick Link</h2>
                                                </div>
                                             </div>
                                             <div class="elementor-element elementor-element-d2790e4 elementor-tablet-align-left elementor-mobile-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="d2790e4" data-element_type="widget" data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                   <ul class="elementor-icon-list-items">

                                                   <?php
                                                   $urutanmenu2 = $db->query("SELECT `nama_menu` FROM `menuutama` WHERE aktif='Y' AND link NOT LIKE '%#%' AND link NOT LIKE ''");
                                                   while( $menulinks2 = $urutanmenu2->fetch_assoc() ) {?>
                                                      

                                                      <li class="elementor-icon-list-item">
                                                         <a href="#">
                                                         <span class="elementor-icon-list-text"><?= $menulinks2['nama_menu']; ?></span>
                                                         </a>
                                                      </li>
                                                    
                                                      <?php } ?>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-562e647" data-id="562e647" data-element_type="column">
                                          <div class="elementor-widget-wrap elementor-element-populated">
                                             <div class="elementor-element elementor-element-c6627e6 elementor-widget elementor-widget-heading" data-id="c6627e6" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                   <h2 class="elementor-heading-title elementor-size-default">Useful Link</h2>
                                                </div>
                                             </div>
                                             <div class="elementor-element elementor-element-194442b elementor-tablet-align-left elementor-mobile-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="194442b" data-element_type="widget" data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                   <ul class="elementor-icon-list-items">
                                                      <!-- <li class="elementor-icon-list-item">
                                                         <a href="#">
                                                         <span class="elementor-icon-list-text">Help Center</span>
                                                         </a>
                                                      </li>
                                                      <li class="elementor-icon-list-item">
                                                         <a href="#">
                                                         <span class="elementor-icon-list-text">Knowledgebase</span>
                                                         </a>
                                                      </li> -->
                                                      <li class="elementor-icon-list-item">
                                                         <a href="hubungi-kami">
                                                         <span class="elementor-icon-list-text">Contact Us</span>
                                                         </a>
                                                      </li>
                                                      
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </section>
                              </div>
                           </div>
                           <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-e837f73" data-id="e837f73" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-2b8165e elementor-widget elementor-widget-heading" data-id="2b8165e" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                       <h2 class="elementor-heading-title elementor-size-default">Sampaikan kepada kami</h2>
                                    </div>
                                 </div>
                                 <div class="elementor-element elementor-element-f6b8098 elementor-button-align-stretch elementor-widget elementor-widget-form" data-id="f6b8098" data-element_type="widget" data-settings="{&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;button_width&quot;:&quot;100&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}" data-widget_type="form.default">
                                    <div class="elementor-widget-container">
                                       <form class="elementor-form" method="post" name="New Form">
                                          <input type="hidden" name="post_id" value="161"/>
                                          <input type="hidden" name="form_id" value="f6b8098"/>
                                          <input type="hidden" name="referer_title" value="Homepage" />
                                          <input type="hidden" name="queried_id" value="68"/>
                                          <div class="elementor-form-fields-wrapper elementor-labels-above">
                                             <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100">
                                                <label for="form-field-name" class="elementor-field-label">
                                                Name							</label>
                                                <input size="1" type="text" name="form_fields[name]" id="form-field-name" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Name">
                                             </div>
                                             <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-100 elementor-field-required">
                                                <label for="form-field-email" class="elementor-field-label">
                                                Email							</label>
                                                <input size="1" type="email" name="form_fields[email]" id="form-field-email" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Email" required="required" aria-required="true">
                                             </div>
                                             <div class="elementor-field-type-textarea elementor-field-group elementor-column elementor-field-group-message elementor-col-100">
                                                <label for="form-field-message" class="elementor-field-label">
                                                Message							</label>
                                                <textarea class="elementor-field-textual elementor-field  elementor-size-sm" name="form_fields[message]" id="form-field-message" rows="4" placeholder="Message"></textarea>				
                                             </div>
                                             <div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
                                                <button type="submit" class="elementor-button elementor-size-sm">
                                                <span >
                                                <span class=" elementor-button-icon">
                                                </span>
                                                <span class="elementor-button-text">Send</span>
                                                </span>
                                                </button>
                                             </div>
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-f8eb478 elementor-reverse-mobile elementor-reverse-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f8eb478" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-wider">
                           <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-c7e77fd" data-id="c7e77fd" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-fe6f65e elementor-widget__width-auto elementor-fixed elementor-widget elementor-widget-heading" data-id="fe6f65e" data-element_type="widget" data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_effect&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;motion_fx_translateY_affectedRange&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:50}},&quot;motion_fx_range&quot;:&quot;page&quot;,&quot;_position&quot;:&quot;fixed&quot;,&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                       <h2 class="elementor-heading-title elementor-size-default"><a href="#gotop">Top</a></h2>
                                    </div>
                                 </div>
                                 <div class="elementor-element elementor-element-ed5967c elementor-widget__width-auto elementor-widget-mobile__width-inherit elementor-widget elementor-widget-text-editor" data-id="ed5967c" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                       &copy; 2022 @Copyright						
                                    </div>
                                 </div>
                                 <div class="elementor-element elementor-element-4792627 elementor-widget__width-auto elementor-widget-mobile__width-inherit elementor-widget elementor-widget-text-editor" data-id="4792627" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                       <p><a href="#">by Trinusa Technologies</a></p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7e79f28" data-id="7e79f28" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-cd0630e elementor-widget__width-auto elementor-widget elementor-widget-image" data-id="cd0630e" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                       <a href="#">
                                       <img width="240" height="135" src="gambar/user/<?php echo $contentone['foto']; ?>" class="attachment-full size-full" alt="" loading="lazy" />								</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-b41cf48" data-id="b41cf48" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-9923c6e elementor-icon-list--layout-inline elementor-align-right elementor-mobile-align-center elementor-widget__width-auto elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="9923c6e" data-element_type="widget" data-widget_type="icon-list.default">
                                    <div class="elementor-widget-container">
                                       <ul class="elementor-icon-list-items elementor-inline-items">
                                          <li class="elementor-icon-list-item elementor-inline-item">
                                             <a href="#">
                                             <span class="elementor-icon-list-text">Privacy Policy</span>
                                             </a>
                                          </li>
                                          <li class="elementor-icon-list-item elementor-inline-item">
                                             <a href="#">
                                             <span class="elementor-icon-list-text">Terms of Use</span>
                                             </a>
                                          </li>
                                          <li class="elementor-icon-list-item elementor-inline-item">
                                             <a href="#">
                                             <span class="elementor-icon-list-text">GDPR</span>
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="elementor-element elementor-element-cbc4076 elementor-widget__width-auto elementor-fixed elementor-view-default elementor-widget elementor-widget-icon" data-id="cbc4076" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;fixed&quot;}" data-widget_type="icon.default">
                                    <div class="elementor-widget-container">
                                       <div class="elementor-icon-wrapper">
                                          <a class="elementor-icon" href="#elementor-action%3Aaction%3Dpopup%3Aopen%26settings%3DeyJpZCI6IjIxNDYiLCJ0b2dnbGUiOmZhbHNlfQ%3D%3D">
                                          <i aria-hidden="true" class="far fa-comment"></i>			</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                  </div>
               </div>
            </div>
         </section>
      </div>
      <div data-elementor-type="popup" data-elementor-id="2111" class="elementor elementor-2111 elementor-location-popup" data-elementor-settings="{&quot;entrance_animation&quot;:&quot;fadeInRight&quot;,&quot;exit_animation&quot;:&quot;fadeInRight&quot;,&quot;entrance_animation_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1.2,&quot;sizes&quot;:[]},&quot;timing&quot;:[]}">
         <section class="elementor-section elementor-top-section elementor-element elementor-element-297d2e3 elementor-section-height-min-height elementor-section-items-stretch elementor-section-boxed elementor-section-height-default" data-id="297d2e3" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-wider">
               <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-86a5ed5" data-id="86a5ed5" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-938e2b4 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="938e2b4" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-no">
                           <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-5980e80" data-id="5980e80" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-4999800 elementor-widget__width-initial elementor-widget elementor-widget-image" data-id="4999800" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                       <a href="#">
                                       <img width="240" height="135" src="gambar/toko/<?php echo $row00['gambar']; ?>" class="attachment-full size-full" alt="" loading="lazy" />								</a>
                                    </div>
                                 </div>
                                 <div class="elementor-element elementor-element-ee95a98 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="ee95a98" data-element_type="widget" data-widget_type="divider.default">
                                    <div class="elementor-widget-container">
                                       <div class="elementor-divider">
                                          <span class="elementor-divider-separator">
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="elementor-element elementor-element-ee09e26 elementor-position-left elementor-vertical-align-middle elementor-widget__width-auto elementor-hidden-mobile elementor-view-default elementor-mobile-position-top elementor-widget elementor-widget-icon-box" data-id="ee09e26" data-element_type="widget" data-widget_type="icon-box.default">
                                    <div class="elementor-widget-container">
                                       <div class="elementor-icon-box-wrapper">
                                          <div class="elementor-icon-box-icon">
                                             <span class="elementor-icon elementor-animation-" >
                                             <i aria-hidden="true" class="fas fa-envelope"></i>				</span>
                                          </div>
                                          <div class="elementor-icon-box-content">
                                             <h3 class="elementor-icon-box-title">
                                                <span  >
                                                Gabung					
                                                </span>
                                             </h3>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="elementor-element elementor-element-8ec25dd elementor-position-left elementor-vertical-align-middle elementor-widget__width-auto elementor-hidden-mobile elementor-view-default elementor-mobile-position-top elementor-widget elementor-widget-icon-box" data-id="8ec25dd" data-element_type="widget" data-widget_type="icon-box.default">
                                    <div class="elementor-widget-container">
                                       <div class="elementor-icon-box-wrapper">
                                          <div class="elementor-icon-box-icon">
                                             <span class="elementor-icon elementor-animation-" >
                                             <i aria-hidden="true" class="fas fa-phone-alt"></i>				</span>
                                          </div>
                                          <div class="elementor-icon-box-content">
                                             <h3 class="elementor-icon-box-title">
                                                <span  >
                                                <?= $row00['nomor_hp']; ?>					</span>
                                             </h3>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="elementor-element elementor-element-f396158 elementor-hidden-mobile elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="f396158" data-element_type="widget" data-widget_type="divider.default">
                                    <div class="elementor-widget-container">
                                       <div class="elementor-divider">
                                          <span class="elementor-divider-separator">
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="elementor-element elementor-element-b261752 elementor-hidden-mobile elementor-widget elementor-widget-gallery" data-id="b261752" data-element_type="widget" data-settings="{&quot;columns&quot;:3,&quot;columns_tablet&quot;:3,&quot;columns_mobile&quot;:3,&quot;aspect_ratio&quot;:&quot;1:1&quot;,&quot;lazyload&quot;:&quot;yes&quot;,&quot;gallery_layout&quot;:&quot;grid&quot;,&quot;gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;link_to&quot;:&quot;file&quot;,&quot;overlay_background&quot;:&quot;yes&quot;,&quot;content_hover_animation&quot;:&quot;fade-in&quot;}" data-widget_type="gallery.default">
                                    <div class="elementor-widget-container">
                                       <div class="elementor-gallery__container">
                                          <?php $beside = $db->query("SELECT gambar FROM produk WHERE aktif= 'Y' LIMIT 6");
                                          while($sideimage       = $beside->fetch_assoc()) { ?>



                                          <a class="e-gallery-item elementor-gallery-item elementor-animated-content" href="#" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-b261752" data-elementor-lightbox-title="playing-virtual-game-in-vr-goggles-ZQUNFS7" e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTYxNiwidXJsIjoiaHR0cHM6XC9cL2VsZW1lbnRvci5kZXZlcnVzdC5jb21cL3RlY2h2aXNpb1wvd3AtY29udGVudFwvdXBsb2Fkc1wvc2l0ZXNcLzIwXC8yMDIyXC8wM1wvcGxheWluZy12aXJ0dWFsLWdhbWUtaW4tdnItZ29nZ2xlcy1aUVVORlM3LmpwZyIsInNsaWRlc2hvdyI6ImFsbC1iMjYxNzUyIn0%3D">
                                             <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="gambar/produk/<?= $sideimage['gambar']; ?>" data-width="1885" data-height="1258" alt="" ></div>
                                             <div class="elementor-gallery-item__overlay"></div>
                                          </a>

                                          <?php } ?>
                                          <!-- <a class="e-gallery-item elementor-gallery-item elementor-animated-content" href="wp-content/uploads/sites/20/2022/03/digital-business-and-technology-SNQVNDV.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-b261752" data-elementor-lightbox-title="digital-business-and-technology-SNQVNDV" e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTYwMCwidXJsIjoiaHR0cHM6XC9cL2VsZW1lbnRvci5kZXZlcnVzdC5jb21cL3RlY2h2aXNpb1wvd3AtY29udGVudFwvdXBsb2Fkc1wvc2l0ZXNcLzIwXC8yMDIyXC8wM1wvZGlnaXRhbC1idXNpbmVzcy1hbmQtdGVjaG5vbG9neS1TTlFWTkRWLmpwZyIsInNsaWRlc2hvdyI6ImFsbC1iMjYxNzUyIn0%3D">
                                             <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="<?= $row00['alamat_web']; ?>/wp-content/uploads/sites/20/2022/03/digital-business-and-technology-SNQVNDV.jpg" data-width="1900" data-height="1069" alt="" ></div>
                                             <div class="elementor-gallery-item__overlay"></div>
                                          </a>
                                          <a class="e-gallery-item elementor-gallery-item elementor-animated-content" href="wp-content/uploads/sites/20/2021/06/technologies-making-business-easier-4BJ2BZZ.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-b261752" data-elementor-lightbox-title="technologies-making-business-easier-4BJ2BZZ" e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTU3MywidXJsIjoiaHR0cHM6XC9cL2VsZW1lbnRvci5kZXZlcnVzdC5jb21cL3RlY2h2aXNpb1wvd3AtY29udGVudFwvdXBsb2Fkc1wvc2l0ZXNcLzIwXC8yMDIxXC8wNlwvdGVjaG5vbG9naWVzLW1ha2luZy1idXNpbmVzcy1lYXNpZXItNEJKMkJaWi5qcGciLCJzbGlkZXNob3ciOiJhbGwtYjI2MTc1MiJ9">
                                             <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="<?= $row00['alamat_web']; ?>/wp-content/uploads/sites/20/2021/06/technologies-making-business-easier-4BJ2BZZ.jpg" data-width="1885" data-height="1258" alt="" ></div>
                                             <div class="elementor-gallery-item__overlay"></div>
                                          </a>
                                          <a class="e-gallery-item elementor-gallery-item elementor-animated-content" href="wp-content/uploads/sites/20/2021/06/hi-tech-of-business-and-financial-concept-76U5KNE.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-b261752" data-elementor-lightbox-title="hi-tech-of-business-and-financial-concept-76U5KNE" e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTU3MiwidXJsIjoiaHR0cHM6XC9cL2VsZW1lbnRvci5kZXZlcnVzdC5jb21cL3RlY2h2aXNpb1wvd3AtY29udGVudFwvdXBsb2Fkc1wvc2l0ZXNcLzIwXC8yMDIxXC8wNlwvaGktdGVjaC1vZi1idXNpbmVzcy1hbmQtZmluYW5jaWFsLWNvbmNlcHQtNzZVNUtORS5qcGciLCJzbGlkZXNob3ciOiJhbGwtYjI2MTc1MiJ9">
                                             <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="<?= $row00['alamat_web']; ?>/wp-content/uploads/sites/20/2021/06/hi-tech-of-business-and-financial-concept-76U5KNE.jpg" data-width="1890" data-height="1260" alt="" ></div>
                                             <div class="elementor-gallery-item__overlay"></div>
                                          </a>
                                          <a class="e-gallery-item elementor-gallery-item elementor-animated-content" href="wp-content/uploads/sites/20/2021/06/womans-hands-typing-on-keyboard-at-desk-working-in-JDKKPMP.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-b261752" data-elementor-lightbox-title="womans-hands-typing-on-keyboard-at-desk-working-in-JDKKPMP" e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTU3MSwidXJsIjoiaHR0cHM6XC9cL2VsZW1lbnRvci5kZXZlcnVzdC5jb21cL3RlY2h2aXNpb1wvd3AtY29udGVudFwvdXBsb2Fkc1wvc2l0ZXNcLzIwXC8yMDIxXC8wNlwvd29tYW5zLWhhbmRzLXR5cGluZy1vbi1rZXlib2FyZC1hdC1kZXNrLXdvcmtpbmctaW4tSkRLS1BNUC5qcGciLCJzbGlkZXNob3ciOiJhbGwtYjI2MTc1MiJ9">
                                             <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="<?= $row00['alamat_web']; ?>/wp-content/uploads/sites/20/2021/06/womans-hands-typing-on-keyboard-at-desk-working-in-JDKKPMP.jpg" data-width="1823" data-height="1215" alt="" ></div>
                                             <div class="elementor-gallery-item__overlay"></div>
                                          </a> -->
                                          <!-- <a class="e-gallery-item elementor-gallery-item elementor-animated-content" href="wp-content/uploads/sites/20/2022/02/developing-programming-working-in-a-software-engin-BEKL65Q.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-b261752" data-elementor-lightbox-title="developing-programming-working-in-a-software-engin-BEKL65Q" e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTU3MCwidXJsIjoiaHR0cHM6XC9cL2VsZW1lbnRvci5kZXZlcnVzdC5jb21cL3RlY2h2aXNpb1wvd3AtY29udGVudFwvdXBsb2Fkc1wvc2l0ZXNcLzIwXC8yMDIyXC8wMlwvZGV2ZWxvcGluZy1wcm9ncmFtbWluZy13b3JraW5nLWluLWEtc29mdHdhcmUtZW5naW4tQkVLTDY1US5qcGciLCJzbGlkZXNob3ciOiJhbGwtYjI2MTc1MiJ9">
                                             <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="<?= $row00['alamat_web']; ?>/wp-content/uploads/sites/20/2022/02/developing-programming-working-in-a-software-engin-BEKL65Q.jpg" data-width="1920" data-height="1280" alt="" ></div>
                                             <div class="elementor-gallery-item__overlay"></div>
                                          </a> -->
                                       </div>
                                    </div>
                                 </div>
                                 <!-- for mobile views -->
                                 <div class="elementor-element elementor-element-8d04f4e elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-nav-menu" data-id="8d04f4e" data-element_type="widget" data-settings="{&quot;layout&quot;:&quot;dropdown&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;i class=\&quot;fas fa-chevron-down\&quot;&gt;&lt;\/i&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;}}" data-widget_type="nav-menu.default">
                                    <div class="elementor-widget-container">
                                       <!-- <div class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Menu Toggle" aria-expanded="false">
                                       <i class="fa fa-window-close" aria-hidden="true"></i>   
									   			<span class="elementor-screen-only">Menu</span>
                                       </div> -->
                                       <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" role="navigation" aria-hidden="true">
                                          <ul id="menu-2-8d04f4e" class="elementor-nav-menu">
                                             <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-89"><a href="<?= $row00['alamat_web']; ?>" aria-current="page" class="elementor-item elementor-item-active" tabindex="-1">Home</a></li>
                                             <!-- <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-90"><a href="#" class="elementor-item" tabindex="-1">About Us</a></li> -->
                                             <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-90"><a href="tentang-kami" aria-current="page" class="elementor-item">Tentang Kami</a></li>
                                             <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-93">
                                                <a href="#" class="elementor-item elementor-item-anchor" tabindex="-1">IT Solutions</a>
                                                <ul class="sub-menu elementor-nav-menu--dropdown">
                                                <?php 
												$querymobile2 = $db->prepare("SELECT nama_kategori, id_kategori FROM kategori_produk");
												$querymobile2->execute();
												$resultmobile1      = $querymobile2->get_result();
												while ( $rowmobile1         = $resultmobile1->fetch_assoc() ){ ?>
                                                   <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-91"><a href="solutions-<?= $rowmobile1['id_kategori']; ?>" class="elementor-sub-item" tabindex="-1"><?= $rowmobile1['nama_kategori']; ?></a></li>
                                                   <?php } ?>
                                                </ul>
                                             </li>
                                             <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-97">
                                                <a href="galeri" class="elementor-item elementor-item-anchor" tabindex="-1">Partnerships</a>
                                                <!-- <ul class="sub-menu elementor-nav-menu--dropdown"> -->
                                                <?php
                                                // $query3 = $db->prepare("SELECT judul_galeri FROM galeri");
                                                // $query3->bind_param("s", $aktif3);
                                                // $aktif3 = "Y";
                                                // $query3->execute();
                                                // $result3= $query3->get_result();
                                                // while ( $row3 = $result3->fetch_assoc() ){ ?>                                                               
                                                                  <!-- <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-105"><a href="#" class="elementor-sub-item" tabindex="-1"><?= $row3['judul_galeri']; ?></a></li> -->
                                                <?php 
                                             // } ?> 
                                                <!-- </ul> -->
                                             </li>
                                             <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-106">
                                                <a href="#" class="elementor-item elementor-item-anchor" tabindex="-1">Artikel</a>
                                                <ul class="sub-menu elementor-nav-menu--dropdown">
                                                <?php
                                                $query3 = $db->prepare("SELECT id_kategori,nama_kategori,kategori_seo FROM kategori_artikel WHERE aktif=? ORDER BY nama_kategori ASC");
                                                $query3->bind_param("s", $aktif3);
                                                $aktif3 = "Y";
                                                $query3->execute();
                                                $result3= $query3->get_result();
                                                while ( $row3 = $result3->fetch_assoc() ){ ?>                                                               
                                                                  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-107"><a href="label-<?= $row3['id_kategori']; ?>-<?= $row3['kategori_seo']; ?>" class="elementor-sub-item" tabindex="-1"><?= $row3['nama_kategori']; ?></a></li>
                                                <?php } ?> 
                                                   
                                                </ul>
                                             </li>
                                             <?php
												$query4  = $db->prepare("SELECT nama_menu,link FROM menuutama WHERE nama_menu NOT LIKE '%Tentang%' AND aktif=? AND lokasi=? ORDER BY urutan ASC");
												$query4->bind_param("ss", $aktif4,$lokasi4);
												$lokasi4 = "Public";
												$aktif4  = "Y";
												$query4->execute();
												$result4 = $query4->get_result();
												while ( $row4 = $result4->fetch_assoc() ){ ?>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-95"><a href="<?= $row4['link']; ?>" class="elementor-item" tabindex="-1"><?= $row4['nama_menu']; ?></a></li>
                                    <?php } ?>

                                          </ul>
                                       </nav>
                                    </div>
                                 </div>
                                 <div class="elementor-element elementor-element-f94ec4d elementor-hidden-desktop elementor-hidden-tablet elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="f94ec4d" data-element_type="widget" data-widget_type="divider.default">
                                    <div class="elementor-widget-container">
                                       <div class="elementor-divider">
                                          <span class="elementor-divider-separator">
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-b57ddfd elementor-hidden-desktop elementor-hidden-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b57ddfd" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-no">
                           <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-1eb5237" data-id="1eb5237" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <!-- <div class="elementor-element elementor-element-d79b37a elementor-widget__width-auto elementor-hidden-tablet elementor-hidden-desktop elementor-widget elementor-widget-button" data-id="d79b37a" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                       <div class="elementor-button-wrapper">
                                          <a href="#" class="elementor-button-link elementor-button elementor-size-md" role="button">
                                          <span class="elementor-button-content-wrapper">
                                          <span class="elementor-button-text">Login</span>
                                          </span>
                                          </a>
                                       </div>
                                    </div>
                                 </div> -->
                                 <div class="elementor-element elementor-element-cb372ef elementor-widget__width-auto elementor-hidden-tablet elementor-hidden-desktop elementor-widget elementor-widget-button" data-id="cb372ef" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                       <div class="elementor-button-wrapper">
                                          <a href="#" class="elementor-button-link elementor-button elementor-size-md" role="button">
                                          <span class="elementor-button-content-wrapper">
                                          <span class="elementor-button-text">Konsultasi Gratis</span>
                                          </span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-c11b3b6 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c11b3b6" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-no">
                           <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-4fbdecc" data-id="4fbdecc" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-d89678a elementor-widget elementor-widget-heading" data-id="d89678a" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                       <h2 class="elementor-heading-title elementor-size-default">hi@trinusatech.com</h2>
                                    </div>
                                 </div>
                                 <div class="elementor-element elementor-element-dc13a69 elementor-widget elementor-widget-heading" data-id="dc13a69" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                       <h2 class="elementor-heading-title elementor-size-default">General Support</h2>
                                    </div>
                                 </div>
                                 <!-- <div class="elementor-element elementor-element-3f4e6a7 elementor-widget elementor-widget-heading" data-id="3f4e6a7" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                       <h2 class="elementor-heading-title elementor-size-default">help@trinusatech.com</h2>
                                    </div>
                                 </div>
                                 <div class="elementor-element elementor-element-4e97ef5 elementor-widget elementor-widget-heading" data-id="4e97ef5" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                       <h2 class="elementor-heading-title elementor-size-default">Layanan Konsultan</h2>
                                    </div>
                                 </div> -->
                                 <div class="elementor-element elementor-element-134e90c elementor-widget elementor-widget-text-editor" data-id="134e90c" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                       <p><em><?= $row00['alamat']; ?></em></p>
                                    </div>
                                 </div>
                                 <div class="elementor-element elementor-element-b44321d elementor-shape-circle e-grid-align-left e-grid-align-tablet-left e-grid-align-mobile-center elementor-widget-mobile__width-inherit elementor-grid-4 elementor-widget elementor-widget-social-icons" data-id="b44321d" data-element_type="widget" data-widget_type="social-icons.default">
                                    <div class="elementor-widget-container">
                                       <div class="elementor-social-icons-wrapper elementor-grid">
                                          <span class="elementor-grid-item">
                                          <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-20b9e71" target="_blank">
                                          <span class="elementor-screen-only">Facebook</span>
                                          <i class="fab fa-facebook"></i>					</a>
                                          </span>
                                          <span class="elementor-grid-item">
                                          <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-bec210c" target="_blank">
                                          <span class="elementor-screen-only">Twitter</span>
                                          <i class="fab fa-twitter"></i>					</a>
                                          </span>
                                          <span class="elementor-grid-item">
                                          <a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-repeater-item-8f490e2" target="_blank">
                                          <span class="elementor-screen-only">Youtube</span>
                                          <i class="fab fa-youtube"></i>					</a>
                                          </span>
                                          <span class="elementor-grid-item">
                                          <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-repeater-item-60bcc90" target="_blank">
                                          <span class="elementor-screen-only">Linkedin</span>
                                          <i class="fab fa-linkedin"></i>					</a>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                  </div>
               </div>
            </div>
         </section>
      </div>
      <div data-elementor-type="popup" data-elementor-id="2146" class="elementor elementor-2146 elementor-location-popup" data-elementor-settings="{&quot;entrance_animation&quot;:&quot;fadeIn&quot;,&quot;exit_animation&quot;:&quot;fadeIn&quot;,&quot;prevent_close_on_background_click&quot;:&quot;yes&quot;,&quot;avoid_multiple_popups&quot;:&quot;yes&quot;,&quot;entrance_animation_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1.2,&quot;sizes&quot;:[]},&quot;timing&quot;:[]}">
         <section class="elementor-section elementor-top-section elementor-element elementor-element-2860724 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2860724" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-no">
               <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-02cd4ce" data-id="02cd4ce" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-01ab50a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="01ab50a" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-wider">
                           <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-69bcda7" data-id="69bcda7" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-abfec7e elementor-widget__width-auto elementor-widget elementor-widget-button" data-id="abfec7e" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                       <div class="elementor-button-wrapper">
                                          <a href="#" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                          <span class="elementor-button-content-wrapper">
                                          <span class="elementor-button-icon elementor-align-icon-left">
                                          <i aria-hidden="true" class="fas fa-search"></i>			</span>
                                          <span class="elementor-button-text">Answer</span>
                                          </span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="elementor-element elementor-element-031d8db elementor-widget__width-auto elementor-widget elementor-widget-button" data-id="031d8db" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                       <div class="elementor-button-wrapper">
                                          <a href="#" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                          <span class="elementor-button-content-wrapper">
                                          <span class="elementor-button-icon elementor-align-icon-left">
                                          <i aria-hidden="true" class="far fa-comment"></i>			</span>
                                          <span class="elementor-button-text">Talk Us</span>
                                          </span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="elementor-element elementor-element-3576ada elementor-widget elementor-widget-heading" data-id="3576ada" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                       <h2 class="elementor-heading-title elementor-size-default">Instan Answer</h2>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-783d004 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default" data-id="783d004" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                           <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-0ccadfe" data-id="0ccadfe" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-e0b8448 elementor-align-justify elementor-invisible elementor-widget elementor-widget-button" data-id="e0b8448" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                       <div class="elementor-button-wrapper">
                                          <a href="#" class="elementor-button-link elementor-button elementor-size-xl" role="button">
                                          <span class="elementor-button-content-wrapper">
                                          <span class="elementor-button-icon elementor-align-icon-right">
                                          <i aria-hidden="true" class="fas fa-external-link-alt"></i>			</span>
                                          <span class="elementor-button-text">Term of Service</span>
                                          </span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="elementor-element elementor-element-46e326b elementor-align-justify elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-button" data-id="46e326b" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                       <div class="elementor-button-wrapper">
                                          <a href="#" class="elementor-button-link elementor-button elementor-size-xl" role="button">
                                          <span class="elementor-button-content-wrapper">
                                          <span class="elementor-button-icon elementor-align-icon-right">
                                          <i aria-hidden="true" class="fas fa-external-link-alt"></i>			</span>
                                          <span class="elementor-button-text">Payment & Refund</span>
                                          </span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="elementor-element elementor-element-9479c1b elementor-align-justify elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-button" data-id="9479c1b" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                       <div class="elementor-button-wrapper">
                                          <a href="#" class="elementor-button-link elementor-button elementor-size-xl" role="button">
                                          <span class="elementor-button-content-wrapper">
                                          <span class="elementor-button-icon elementor-align-icon-right">
                                          <i aria-hidden="true" class="fas fa-external-link-alt"></i>			</span>
                                          <span class="elementor-button-text">Job Hiring</span>
                                          </span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- <div class="elementor-element elementor-element-5a19e07 elementor-grid-1 elementor-grid-tablet-1 elementor-posts--thumbnail-none elementor-hidden-mobile elementor-grid-mobile-1 elementor-invisible elementor-widget elementor-widget-posts" data-id="5a19e07" data-element_type="widget" data-settings="{&quot;classic_columns&quot;:&quot;1&quot;,&quot;classic_columns_tablet&quot;:&quot;1&quot;,&quot;classic_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:8,&quot;sizes&quot;:[]},&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;classic_columns_mobile&quot;:&quot;1&quot;,&quot;classic_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;classic_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="posts.classic">
                                    <div class="elementor-widget-container">
                                       <div class="elementor-posts-container elementor-posts elementor-posts--skin-classic elementor-grid">
                                          <article class="elementor-post elementor-grid-item post-1281 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
                                             <div class="elementor-post__text">
                                                <h3 class="elementor-post__title">
                                                   <a href="#" >
                                                   The Ultimate Guide to Email Marketing Benchmarks for 2022			</a>
                                                </h3>
                                             </div>
                                          </article>
                                       </div>
                                    </div>
                                 </div> -->
                                 <!-- <div class="elementor-element elementor-element-fd36b2a elementor-grid-1 elementor-grid-tablet-1 elementor-posts--thumbnail-none elementor-hidden-mobile elementor-grid-mobile-1 elementor-invisible elementor-widget elementor-widget-posts" data-id="fd36b2a" data-element_type="widget" data-settings="{&quot;classic_columns&quot;:&quot;1&quot;,&quot;classic_columns_tablet&quot;:&quot;1&quot;,&quot;classic_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:8,&quot;sizes&quot;:[]},&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;classic_columns_mobile&quot;:&quot;1&quot;,&quot;classic_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;classic_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="posts.classic">
                                    <div class="elementor-widget-container">
                                       <div class="elementor-posts-container elementor-posts elementor-posts--skin-classic elementor-grid">
                                          <article class="elementor-post elementor-grid-item post-374 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
                                             <div class="elementor-post__text">
                                                <h3 class="elementor-post__title">
                                                   <a href="#" >
                                                   Business Trend In Financial Field			</a>
                                                </h3>
                                             </div>
                                          </article>
                                       </div>
                                    </div>
                                 </div> -->
                                 <div class="elementor-element elementor-element-3d592a6 elementor-grid-1 elementor-grid-tablet-1 elementor-posts--thumbnail-none elementor-hidden-mobile elementor-grid-mobile-1 elementor-invisible elementor-widget elementor-widget-posts" data-id="3d592a6" data-element_type="widget" data-settings="{&quot;classic_columns&quot;:&quot;1&quot;,&quot;classic_columns_tablet&quot;:&quot;1&quot;,&quot;classic_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:8,&quot;sizes&quot;:[]},&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;classic_columns_mobile&quot;:&quot;1&quot;,&quot;classic_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;classic_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="posts.classic">
                                    <div class="elementor-widget-container">
                                       <div class="elementor-posts-container elementor-posts elementor-posts--skin-classic elementor-grid">
                                          <article class="elementor-post elementor-grid-item post-1270 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
                                             <div class="elementor-post__text">
                                                <h3 class="elementor-post__title">
                                                   <a href="#" >
                                                   Merasa lama mendapatkan respon kami ? chat via whatsapp aja			</a>
                                                </h3>
                                             </div>
                                          </article>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-ea2f12c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ea2f12c" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-no">
                           <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-ebf1572" data-id="ebf1572" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-6c6d55a elementor-search-form--skin-classic elementor-search-form--button-type-icon elementor-search-form--icon-search elementor-widget elementor-widget-search-form" data-id="6c6d55a" data-element_type="widget" data-settings="{&quot;skin&quot;:&quot;classic&quot;}" data-widget_type="search-form.default">
                                    <div class="elementor-widget-container">
                                       <form class="elementor-search-form" role="search" onsubmit="return showInput()">
                                          <div class="elementor-search-form__container">
                                             
                                             <input placeholder="apa bisa kami bantu?" class="elementor-search-form__input" type="search" id="user_pesan">
                                             <a onclick="showInput();" id="link2" target="_blank">
                                             <!-- <button class="elementor-search-form__submit" type="submit" title="Search" aria-label="Search"> -->
                                             <i class="fa fa-paper-plane" aria-hidden="true"></i>						
                                             <!-- <span class="elementor-screen-only">Search</span> -->
                                             </button>
                                             </a>
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-6e6bed8 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6e6bed8" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-no">
                           <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-4062d27" data-id="4062d27" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-32b15b3 elementor-widget__width-auto elementor-view-default elementor-widget elementor-widget-icon" data-id="32b15b3" data-element_type="widget" data-widget_type="icon.default">
                                    <div class="elementor-widget-container">
                                       <div class="elementor-icon-wrapper">
                                          <div class="elementor-icon">
                                             <i aria-hidden="true" class="fas fa-times"></i>			
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                  </div>
               </div>
            </div>
         </section>
      </div>
      <div data-elementor-type="popup" data-elementor-id="2141" class="elementor elementor-2141 elementor-location-popup" data-elementor-settings="{&quot;entrance_animation&quot;:&quot;fadeInDown&quot;,&quot;exit_animation&quot;:&quot;fadeInDown&quot;,&quot;entrance_animation_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1.2,&quot;sizes&quot;:[]},&quot;triggers&quot;:{&quot;page_load_delay&quot;:5,&quot;page_load&quot;:&quot;yes&quot;},&quot;timing&quot;:{&quot;times_times&quot;:1,&quot;times&quot;:&quot;yes&quot;}}">
         <section class="elementor-section elementor-top-section elementor-element elementor-element-cdbb6e1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="cdbb6e1" data-element_type="section">
            <div class="elementor-container elementor-column-gap-no">
               <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-fd3429d" data-id="fd3429d" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-f9a6810 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f9a6810" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-no">
                           <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-69983e2" data-id="69983e2" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-b4aa3af elementor-widget elementor-widget-spacer" data-id="b4aa3af" data-element_type="widget" data-widget_type="spacer.default">
                                    <div class="elementor-widget-container">
                                       <div class="elementor-spacer">
                                          <div class="elementor-spacer-inner"></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-d04d3aa elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d04d3aa" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-wider">
                           <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-24d7039" data-id="24d7039" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-03ea0b0 elementor-widget elementor-widget-heading" data-id="03ea0b0" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                       <h2 class="elementor-heading-title elementor-size-default">Subscribe Our Newsletter</h2>
                                    </div>
                                 </div>
                                 <div class="elementor-element elementor-element-f006042 elementor-button-align-stretch elementor-widget elementor-widget-form" data-id="f006042" data-element_type="widget" data-settings="{&quot;button_width&quot;:&quot;30&quot;,&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;button_width_tablet&quot;:&quot;25&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}" data-widget_type="form.default">
                                    <div class="elementor-widget-container">
                                       <form class="elementor-form" method="post" name="New Form">
                                          <input type="hidden" name="post_id" value="2141"/>
                                          <input type="hidden" name="form_id" value="f006042"/>
                                          <input type="hidden" name="referer_title" value="Homepage" />
                                          <input type="hidden" name="queried_id" value="68"/>
                                          <div class="elementor-form-fields-wrapper elementor-labels-">
                                             <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-70 elementor-md-75 elementor-field-required">
                                                <label for="form-field-email" class="elementor-field-label elementor-screen-only">
                                                Email							</label>
                                                <input size="1" type="email" name="form_fields[email]" id="form-field-email" class="elementor-field elementor-size-md  elementor-field-textual" placeholder="Email" required="required" aria-required="true">
                                             </div>
                                             <div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-30 e-form__buttons elementor-md-25">
                                                <button type="submit" class="elementor-button elementor-size-md">
                                                <span >
                                                <span class=" elementor-button-icon">
                                                </span>
                                                <span class="elementor-button-text">Subscribe</span>
                                                </span>
                                                </button>
                                             </div>
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                                 <div class="elementor-element elementor-element-4d00a3e elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="4d00a3e" data-element_type="widget" data-widget_type="icon-list.default">
                                    <div class="elementor-widget-container">
                                       <ul class="elementor-icon-list-items">
                                          <li class="elementor-icon-list-item">
                                             <span class="elementor-icon-list-icon">
                                             <i aria-hidden="true" class="far fa-lightbulb"></i>						</span>
                                             <span class="elementor-icon-list-text">We promise you will not recieve spam from us. You can unsubscribe anytime</span>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                  </div>
               </div>
            </div>
         </section>
      </div>
      
      <link rel='stylesheet' id='elementor-post-2111-css'  href='wp-content/uploads/sites/20/elementor/css/post-2111eb25.css?ver=1652314470' type='text/css' media='all' />
      <link rel='stylesheet' id='elementor-gallery-css'  href='wp-content/plugins/elementor/assets/lib/e-gallery/css/e-gallery.min7359.css?ver=1.2.0' type='text/css' media='all' />
      <link rel='stylesheet' id='elementor-post-2146-css'  href='wp-content/uploads/sites/20/elementor/css/post-2146ed6f.css?ver=1652314471' type='text/css' media='all' />
      <link rel='stylesheet' id='e-animations-css'  href='wp-content/plugins/elementor/assets/lib/animations/animations.min3ab2.css?ver=3.6.5' type='text/css' media='all' />
      <script type='text/javascript' src='wp-content/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.minf269.js?ver=1.0.1' id='smartmenus-js'></script>
      <script type='text/javascript' src='wp-content/plugins/elementor-pro/assets/lib/lottie/lottie.min3f90.js?ver=5.6.6' id='lottie-js'></script>
      <script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/jquery-numerator/jquery-numerator.min3958.js?ver=0.2.1' id='jquery-numerator-js'></script>
      <script type='text/javascript' src='wp-includes/js/imagesloaded.mineda1.js?ver=4.1.4' id='imagesloaded-js'></script>
      <script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/e-gallery/js/e-gallery.min7359.js?ver=1.2.0' id='elementor-gallery-js'></script>
      <!-- <script type='text/javascript' src='wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.mina767.js?ver=3.6.3' id='elementor-pro-webpack-runtime-js'></script> -->
      <script type='text/javascript' src='wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.minf43b.js?ver=3.7.1' id='elementor-pro-webpack-runtime-js'></script>
      <script type='text/javascript' src='wp-content/plugins/elementor/assets/js/webpack.runtime.min3ab2.js?ver=3.6.5' id='elementor-webpack-runtime-js'></script>
      <script type='text/javascript' src='wp-content/plugins/elementor/assets/js/frontend-modules.min3ab2.js?ver=3.6.5' id='elementor-frontend-modules-js'></script>
      <script type='text/javascript' src='wp-includes/js/dist/vendor/regenerator-runtime.min3937.js?ver=0.13.9' id='regenerator-runtime-js'></script>
      <script type='text/javascript' src='wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0' id='wp-polyfill-js'></script>
      <script type='text/javascript' src='wp-includes/js/dist/hooks.min8cbb.js?ver=1e58c8c5a32b2e97491080c5b10dc71c' id='wp-hooks-js'></script>
      <script type='text/javascript' src='wp-includes/js/dist/i18n.mina28b.js?ver=30fcecb428a0e8383d3776bcdd3a7834' id='wp-i18n-js'></script>
      <!-- <script type='text/javascript' src='wp-includes/js/dist/hooks.mincbb5.js?ver=c6d64f2cb8f5c6bb49caca37f8828ce3' id='wp-hooks-js'></script> -->
      <!-- <script type='text/javascript' src='wp-includes/js/dist/i18n.min771a.js?ver=ebee46757c6a411e38fd079a7ac71d94' id='wp-i18n-js'></script> -->
      <script type="text/javascript">
      function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'id', includedLanguages : 'ar,en,id'}, 'google_translate_element');
      }
      </script>

      <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>




    <script type='text/javascript' id='wp-i18n-js-after'>
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
    </script>
    <script type='text/javascript' id='whatsapp'>
    var str = "<?php echo $row00['nomor_hp']; ?>";

function showInput() {

   //  var a = document.getElementById("user_input").value;
   //  var b = document.getElementById("user_email").value;
   //  var c = document.getElementById("user_goal").value;
    var d = document.getElementById("user_pesan").value;
    var wa = "https://api.whatsapp.com/send?phone=";
    var sap = "&text=Halo%20*Trinusa Technologies*,%20";
	var enter = "%0A";
	
 if(d == "") {
		alert("Mohon isi pesan Anda");
		return false;
  	} else {
		var strLink = wa + str + sap + d;
		document.getElementById("link2").setAttribute("href", strLink);
		console.log(strLink);
	}

}
    </script>
    <script type='text/javascript' id='elementor-pro-frontend-js-before'>
        var ElementorProFrontendConfig = {
            "ajaxurl": "https:\/\/elementor.deverust.com\/techvisio\/wp-admin\/admin-ajax.php",
            "nonce": "318e2b163b",
            "urls": {
                "assets": "https:\/\/elementor.deverust.com\/techvisio\/wp-content\/plugins\/elementor-pro\/assets\/",
                "rest": "https:\/\/elementor.deverust.com\/techvisio\/wp-json\/"
            },
            "shareButtonsNetworks": {
                "facebook": {
                    "title": "Facebook",
                    "has_counter": true
                },
                "twitter": {
                    "title": "Twitter"
                },
                "linkedin": {
                    "title": "LinkedIn",
                    "has_counter": true
                },
                "pinterest": {
                    "title": "Pinterest",
                    "has_counter": true
                },
                "reddit": {
                    "title": "Reddit",
                    "has_counter": true
                },
                "vk": {
                    "title": "VK",
                    "has_counter": true
                },
                "odnoklassniki": {
                    "title": "OK",
                    "has_counter": true
                },
                "tumblr": {
                    "title": "Tumblr"
                },
                "digg": {
                    "title": "Digg"
                },
                "skype": {
                    "title": "Skype"
                },
                "stumbleupon": {
                    "title": "StumbleUpon",
                    "has_counter": true
                },
                "mix": {
                    "title": "Mix"
                },
                "telegram": {
                    "title": "Telegram"
                },
                "pocket": {
                    "title": "Pocket",
                    "has_counter": true
                },
                "xing": {
                    "title": "XING",
                    "has_counter": true
                },
                "whatsapp": {
                    "title": "WhatsApp"
                },
                "email": {
                    "title": "Email"
                },
                "print": {
                    "title": "Print"
                }
            },
            "facebook_sdk": {
                "lang": "en_US",
                "app_id": ""
            },
            "lottie": {
                "defaultAnimationUrl": "https:\/\/elementor.deverust.com\/techvisio\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"
            }
        };
    </script>
    <script type='text/javascript' src='wp-content/plugins/elementor-pro/assets/js/frontend.minf43b.js?ver=3.7.1' id='elementor-pro-frontend-js'></script>
    <script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2' id='elementor-waypoints-js'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/ui/core.min0028.js?ver=1.13.1' id='jquery-ui-core-js'></script>
    <script type='text/javascript' id='elementor-frontend-js-before'>
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Extra",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Extra",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                }
            },
            "version": "3.6.5",
            "is_static": false,
            "experimentalFeatures": {
                "e_dom_optimization": true,
                "e_optimized_assets_loading": true,
                "a11y_improvements": true,
                "e_import_export": true,
                "e_hidden_wordpress_widgets": true,
                "theme_builder_v2": true,
                "landing-pages": true,
                "elements-color-picker": true,
                "favorite-widgets": true,
                "admin-top-bar": true,
                "page-transitions": true,
                "notes": true,
                "form-submissions": true,
                "e_scroll_snap": true
            },
            "urls": {
                "assets": "https:\/\/elementor.deverust.com\/techvisio\/wp-content\/plugins\/elementor\/assets\/"
            },
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "body_background_background": "classic",
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description"
            },
            "post": {
                "id": 68,
                "title": "Homepage%20%E2%80%93%20Techvisio",
                "excerpt": "",
                "featuredImage": "https:\/\/elementor.deverust.com\/techvisio\/wp-content\/uploads\/sites\/20\/2022\/04\/Homepage-159x1024.jpg"
            }
        };
    </script>
      <script type='text/javascript' src='wp-content/plugins/elementor/assets/js/frontend.min3ab2.js?ver=3.6.5' id='elementor-frontend-js'></script>
    <script type='text/javascript' src='wp-content/plugins/elementor-pro/assets/js/elements-handlers.minf43b.js?ver=3.7.1' id='pro-elements-handlers-js'></script>
    <script type='text/javascript' src='wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.minf43b.js?ver=3.7.1' id='e-sticky-js'></script>
   </body>
   
</html>