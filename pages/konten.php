<div data-elementor-type="wp-post" data-elementor-id="68" class="elementor elementor-68">
<section class="elementor-section elementor-top-section elementor-element elementor-element-601441e elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="601441e" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;shape_divider_bottom&quot;:&quot;curve&quot;}">
   <div class="elementor-shape elementor-shape-bottom" data-negative="false">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
         <path class="elementor-shape-fill" d="M1000,4.3V0H0v4.3C0.9,23.1,126.7,99.2,500,100S1000,22.7,1000,4.3z"/>
      </svg>
   </div>
   <div class="elementor-container elementor-column-gap-no">
   <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4492f8d" data-id="4492f8d" data-element_type="column">
      <div class="elementor-widget-wrap elementor-element-populated">
         <section class="elementor-section elementor-inner-section elementor-element elementor-element-51737a8 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="51737a8" data-element_type="section">
            <div class="elementor-container elementor-column-gap-wider">
               <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-9989f7d" data-id="9989f7d" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <?= $row00['static_content']; ?>
                     <!-- <div class="elementor-element elementor-element-ed46f43 elementor-widget elementor-widget-heading" data-id="ed46f43" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                           <h2 class="elementor-heading-title elementor-size-default">Software development agency</h2>
                        </div>
                        </div> -->
                     <!-- <div class="elementor-element elementor-element-dfe6f9a elementor-widget elementor-widget-text-editor" data-id="dfe6f9a" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                           <p>Dengan pengalaman telah mengerjakan beberapa proyek di bidang Teknologi Informasi selama ini</p>
                        </div>
                        </div> -->
                     <div class="elementor-element elementor-element-6a74029 elementor-widget elementor-widget-button" data-id="6a74029" data-element_type="widget" data-widget_type="button.default">
                        <div class="elementor-widget-container">
                           <div class="elementor-button-wrapper">
                              <a href="#" class="elementor-button-link elementor-button elementor-size-lg" role="button">
                              <span class="elementor-button-content-wrapper">
                              <span class="elementor-button-text">Get in touch</span>
                              </span>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-a079347" data-id="a079347" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-a49bd7e elementor-align-center elementor-widget elementor-widget-lottie" data-id="a49bd7e" data-element_type="widget" data-settings="{&quot;source_json&quot;:{&quot;url&quot;:&quot;https:\/\/elementor.deverust.com\/techvisio\/wp-content\/uploads\/sites\/20\/2022\/03\/90404-office-365-automation-abstract-animation.json&quot;,&quot;id&quot;:79,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;loop&quot;:&quot;yes&quot;,&quot;source&quot;:&quot;media_file&quot;,&quot;caption_source&quot;:&quot;none&quot;,&quot;link_to&quot;:&quot;none&quot;,&quot;trigger&quot;:&quot;arriving_to_viewport&quot;,&quot;viewport&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;play_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;start_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;0&quot;,&quot;sizes&quot;:[]},&quot;end_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;100&quot;,&quot;sizes&quot;:[]},&quot;renderer&quot;:&quot;svg&quot;}" data-widget_type="lottie.default">
                        <div class="elementor-widget-container">
                           <div class="e-lottie__container">
                              <div class="e-lottie__animation">
                                 <!-- disini bro -->
                                 <!-- disini -->
                                 <!-- isi disini -->
                                 <div class="slideshow-container">
                                    <?php 
                                       $no = 1; 
                                       $query37 = $db->query("SELECT nama_slide, link_slide, gambar_slide FROM slide WHERE aktif = 'Y' ORDER BY id_slide ASC");
                                       $row37   = $query37->fetch_assoc();
                                       while ( $row337 = $query37->fetch_assoc() ){ ?>
                                    <div class="mySlides fade">
                                       <div class="numbertext">
                                       </div>
                                       <img src="gambar/slide/<?= $row337['gambar_slide']; ?>" style="width:100%">
                                       <div class="text"><?= $row337['nama_slide']; ?></div>
                                    </div>
                                    <?php } ?>
                                 </div>
                                 <div style="text-align:center">
                                    <span class="dot"></span> 
                                    <span class="dot"></span> 
                                    <span class="dot"></span> 
                                 </div>
                                 <script>
                                    let slideIndex = 0;
                                    showSlides();
                                    
                                    function showSlides() {
                                    let i;
                                    let slides = document.getElementsByClassName("mySlides");
                                    let dots = document.getElementsByClassName("dot");
                                    for (i = 0; i < slides.length; i++) {
                                    slides[i].style.display = "none";  
                                    }
                                    slideIndex++;
                                    if (slideIndex > slides.length) {slideIndex = 1}    
                                    for (i = 0; i < dots.length; i++) {
                                    dots[i].className = dots[i].className.replace(" active", "");
                                    }
                                    slides[slideIndex-1].style.display = "block";  
                                    dots[slideIndex-1].className += " active";
                                    setTimeout(showSlides, 2000); // Change image every 2 seconds
                                    }
                                 </script>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="elementor-element elementor-element-6e4fd1c elementor-widget__width-initial elementor-absolute elementor-align-center elementor-widget elementor-widget-lottie" data-id="6e4fd1c" data-element_type="widget" data-settings="{&quot;source_json&quot;:{&quot;url&quot;:&quot;https:\/\/elementor.deverust.com\/techvisio\/wp-content\/uploads\/sites\/20\/2022\/03\/68792-cute-astronaut-flying-in-space-animation.json&quot;,&quot;id&quot;:133,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;loop&quot;:&quot;yes&quot;,&quot;_position&quot;:&quot;absolute&quot;,&quot;source&quot;:&quot;media_file&quot;,&quot;caption_source&quot;:&quot;none&quot;,&quot;link_to&quot;:&quot;none&quot;,&quot;trigger&quot;:&quot;arriving_to_viewport&quot;,&quot;viewport&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;play_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;start_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;0&quot;,&quot;sizes&quot;:[]},&quot;end_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;100&quot;,&quot;sizes&quot;:[]},&quot;renderer&quot;:&quot;svg&quot;}" data-widget_type="lottie.default">
                        <div class="elementor-widget-container">
                        </div>
                     </div>
                  </div>
               </div>
         </section>
         <section class="elementor-section elementor-inner-section elementor-element elementor-element-e5f9e8c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e5f9e8c" data-element_type="section">
         <div class="elementor-container elementor-column-gap-wider">
         <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-8b0bd1e" data-id="8b0bd1e" data-element_type="column">
         <div class="elementor-widget-wrap elementor-element-populated">
         <div class="elementor-element elementor-element-813a7d1 elementor-widget__width-auto elementor-widget elementor-widget-counter" data-id="813a7d1" data-element_type="widget" data-widget_type="counter.default">
         <div class="elementor-widget-container">
         <div class="elementor-counter">
         <div class="elementor-counter-number-wrapper">
         <span class="elementor-counter-number-prefix"></span>
         <!-- <span class="elementor-counter-number" data-duration="2000" data-to-value="782" data-from-value="0" data-delimiter=",">0</span> -->
         <span class="elementor-counter-number-suffix">Customers</span>
         </div>
         </div>
         </div>
         </div>
         <div class="elementor-element elementor-element-7ed86f7 elementor-widget elementor-widget-heading" data-id="7ed86f7" data-element_type="widget" data-widget_type="heading.default">
         <div class="elementor-widget-container">
         <h2 class="elementor-heading-title elementor-size-default">Loyality</h2>		</div>
         </div>
         </div>
         </div>
         <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6673c81" data-id="6673c81" data-element_type="column">
         <div class="elementor-widget-wrap elementor-element-populated">
         <div class="elementor-element elementor-element-77b6f89 elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-spacer" data-id="77b6f89" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="spacer.default">
         <div class="elementor-widget-container">
         <div class="elementor-spacer">
         <div class="elementor-spacer-inner"></div>
         </div>
         </div>
         </div>
         <div class="elementor-element elementor-element-0a6e5ab elementor-widget__width-auto elementor-widget elementor-widget-counter" data-id="0a6e5ab" data-element_type="widget" data-widget_type="counter.default">
         <div class="elementor-widget-container">
         <div class="elementor-counter">
         <div class="elementor-counter-number-wrapper">
         <span class="elementor-counter-number-prefix"></span>
         <!-- <span class="elementor-counter-number" data-duration="2000" data-to-value="98" data-from-value="0" data-delimiter=",">0</span> -->
         <span class="elementor-counter-number-suffix">Satisfaction</span>
         </div>
         </div>
         </div>
         </div>
         <div class="elementor-element elementor-element-e033207 elementor-widget elementor-widget-heading" data-id="e033207" data-element_type="widget" data-widget_type="heading.default">
         <div class="elementor-widget-container">
         <h2 class="elementor-heading-title elementor-size-default">Our Service</h2>		</div>
         </div>
         </div>
         </div>
         <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-f8bc554" data-id="f8bc554" data-element_type="column">
         <div class="elementor-widget-wrap elementor-element-populated">
         <div class="elementor-element elementor-element-9332c91 elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-spacer" data-id="9332c91" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="spacer.default">
         <div class="elementor-widget-container">
         <div class="elementor-spacer">
         <div class="elementor-spacer-inner"></div>
         </div>
         </div>
         </div>
         <div class="elementor-element elementor-element-e1deae3 elementor-widget__width-auto elementor-widget elementor-widget-counter" data-id="e1deae3" data-element_type="widget" data-widget_type="counter.default">
         <div class="elementor-widget-container">
         <div class="elementor-counter">
         <div class="elementor-counter-number-wrapper">
         <span class="elementor-counter-number-prefix"></span>
         <!-- <span class="elementor-counter-number" data-duration="2000" data-to-value="4862" data-from-value="0" data-delimiter=",">0</span> -->
         <span class="elementor-counter-number-suffix"> Experts</span>
         </div>
         </div>
         </div>
         </div>
         <div class="elementor-element elementor-element-35376cb elementor-widget elementor-widget-heading" data-id="35376cb" data-element_type="widget" data-widget_type="heading.default">
         <div class="elementor-widget-container">
         <h2 class="elementor-heading-title elementor-size-default">Arround The World</h2>		</div>
         </div>
         </div>
         </div>
         </div>
         </section>
         </div>
      </div>
   </div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-25760c5 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="25760c5" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
   <div class="elementor-container elementor-column-gap-wider">
      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-861a6f0" data-id="861a6f0" data-element_type="column">
         <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-f677e07 elementor-skin-carousel elementor-pagination-type-bullets elementor-pagination-position-outside elementor-widget elementor-widget-media-carousel" data-id="f677e07" data-element_type="widget" data-settings="{&quot;slides_per_view&quot;:&quot;4&quot;,&quot;space_between&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;slides_per_view_tablet&quot;:&quot;4&quot;,&quot;skin&quot;:&quot;carousel&quot;,&quot;effect&quot;:&quot;slide&quot;,&quot;pagination&quot;:&quot;bullets&quot;,&quot;speed&quot;:500,&quot;autoplay&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;loop&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;space_between_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;space_between_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]}}" data-widget_type="media-carousel.default">
               <div class="elementor-widget-container">
                  <div class="elementor-swiper">
                     <div class="elementor-main-swiper swiper-container">
                        <div class="swiper-wrapper">
                           <?php
                              $query100       = $db->query("SELECT judul_banner, keterangan, gambar, url FROM banner where aktif = 'Y'");
                              while ( $row100 = $query100->fetch_assoc() ){
                               ?>
                           <div class="swiper-slide">
                              <div class="elementor-carousel-image" style="background-image: url(gambar/banner/<?php echo $row100['gambar']; ?>)">
                              </div>
                           </div>
                           <?php } ?>
                        </div>
                        <div class="swiper-pagination"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-dc23ec4 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="dc23ec4" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
   <div class="elementor-container elementor-column-gap-wider">
   
   <?php
   $homepage1 = $db->query("SELECT * FROM `halaman_statis` WHERE `link_halaman` LIKE '%homepage%' ORDER BY `id_halaman` LIMIT 1");
   $contentone = $homepage1->fetch_assoc();?>

   <?= $contentone['isi_halaman']; ?>

   </div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-9b65b01 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="9b65b01" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
   <div class="elementor-container elementor-column-gap-wider">
      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-93158fa" data-id="93158fa" data-element_type="column">
         <div class="elementor-widget-wrap elementor-element-populated">
            <section class="elementor-section elementor-inner-section elementor-element elementor-element-c12ea49 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c12ea49" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
               <div class="elementor-container elementor-column-gap-wider">
                  <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-d5375ff" data-id="d5375ff" data-element_type="column">
                     <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-ed50819 elementor-widget__width-initial elementor-align-center elementor-widget elementor-widget-lottie" data-id="ed50819" data-element_type="widget" data-settings="{&quot;source_json&quot;:{&quot;url&quot;:&quot;https:\/\/elementor.deverust.com\/techvisio\/wp-content\/uploads\/sites\/20\/2022\/03\/lf20_vsg5kswn.json&quot;,&quot;id&quot;:1638,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;loop&quot;:&quot;yes&quot;,&quot;source&quot;:&quot;media_file&quot;,&quot;caption_source&quot;:&quot;none&quot;,&quot;link_to&quot;:&quot;none&quot;,&quot;trigger&quot;:&quot;arriving_to_viewport&quot;,&quot;viewport&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;play_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;start_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;0&quot;,&quot;sizes&quot;:[]},&quot;end_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;100&quot;,&quot;sizes&quot;:[]},&quot;renderer&quot;:&quot;svg&quot;}" data-widget_type="lottie.default">
                           <div class="elementor-widget-container">
                              <div class="e-lottie__container">
                                 <div class="e-lottie__animation"></div>
                              </div>
                           </div>
                        </div>
                        <div class="elementor-element elementor-element-5b85e51 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="5b85e51" data-element_type="widget" data-widget_type="heading.default">
                           <div class="elementor-widget-container">
                              <h2 class="elementor-heading-title elementor-size-default">Our Service</h2>
                           </div>
                        </div>
                        <!-- delivering layout -->
                        <div class="elementor-element elementor-element-d5ebffb elementor-widget elementor-widget-heading" data-id="d5ebffb" data-element_type="widget" data-widget_type="heading.default">
                           <div class="elementor-widget-container">
                              <h2 class="elementor-heading-title elementor-size-default">Memberikan Solusi yang Tepat.</h2>
                           </div>
                        </div>
                        <div class="elementor-element elementor-element-027af28 elementor-widget elementor-widget-text-editor" data-id="027af28" data-element_type="widget" data-widget_type="text-editor.default">
                           <div class="elementor-widget-container">
                              <p>Sebuah bisnis biasanya sangat bergantung pada aplikasi, layanan, dan data yang terdapat dalam data center, Solusi kami mencakup bidang-bidang berikut </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section class="elementor-section elementor-inner-section elementor-element elementor-element-bd6d7e0 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="bd6d7e0" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
               <div class="elementor-container elementor-column-gap-wider">
                  <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-af4855d" data-id="af4855d" data-element_type="column">
                     <div class="elementor-widget-wrap elementor-element-populated">
                        <?php
                           $query1234      = $db->query("SELECT id_galeri, judul_galeri, gambar FROM galeri WHERE aktif = 'Y' ORDER BY id_galeri DESC");
                           while( $row1234 = $query1234->fetch_assoc() ){
                           	$query12345 = $db->query("SELECT COUNT(id_foto) AS jumlah FROM foto WHERE id_galeri = '$row1234[id_galeri]'");
                           	$row12345   = $query12345->fetch_assoc();
                           ?>
                        <!-- loop here -->
                        <div class="elementor-element elementor-element-0857d0e elementor-position-left elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-hidden-tablet elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="0857d0e" data-element_type="widget" data-widget_type="icon-box.default">
                           <div class="elementor-widget-container">
                              <div class="elementor-icon-box-wrapper">
                                 <div class="elementor-icon-box-icon">
                                    <a href="foto-galeri-<?php echo $row1234['id_galeri']; ?>.html">
                                       <span class="elementor-icon elementor-animation-" >
                                          <center>
                                          <img class="radius-circle" src="gambar/thumb_galeri/<?php echo $row1234['gambar']; ?>" width="48" height="48" />
                                          <center>
                                       </span>
                                    </a>
                                 </div>
                                 <div class="elementor-icon-box-content">
                                    <h3 class="elementor-icon-box-title">
                                       <span><?php echo $row1234['judul_galeri']; ?></span>
                                    </h3>
                                    <!-- <p class="elementor-icon-box-description">Solusi kami mencakup bidang-bidang berikut:</p> -->
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end here -->
                        <?php } ?>
                      
                        <div class="elementor-element elementor-element-29e9e20 elementor-position-left elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-hidden-desktop elementor-hidden-mobile elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="29e9e20" data-element_type="widget" data-widget_type="icon-box.default">
                           <div class="elementor-widget-container">
                              <div class="elementor-icon-box-wrapper">
                                 <div class="elementor-icon-box-icon">
                                    <span class="elementor-icon elementor-animation-" >
                                       <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                                          <g clip-path="url(#clip0_803_701)">
                                             <path d="M47 1H31V13H47V1Z" fill="#2A2E32"></path>
                                             <path d="M26 23C26.0014 23.9742 25.7183 24.9275 25.1853 25.743C24.6524 26.5584 23.8928 27.2004 23 27.59V25C23 24.4696 22.7893 23.9609 22.4142 23.5858C22.0391 23.2107 21.5304 23 21 23C20.4696 23 19.9609 23.2107 19.5858 23.5858C19.2107 23.9609 19 24.4696 19 25V27.59C18.1741 27.2296 17.461 26.6526 16.936 25.9202C16.4111 25.1877 16.0938 24.327 16.0178 23.4291C15.9418 22.5312 16.1099 21.6294 16.5043 20.8192C16.8987 20.0089 17.5047 19.3203 18.2583 18.8262C19.0119 18.3321 19.885 18.0508 20.7853 18.0121C21.6856 17.9734 22.5796 18.1787 23.3728 18.6063C24.166 19.034 24.8289 19.668 25.2913 20.4415C25.7538 21.2149 25.9987 22.0989 26 23V23Z" fill="#C44FAB"></path>
                                             <path d="M29.44 31.71L24 31.1V25C24 24.2044 23.6839 23.4413 23.1213 22.8787C22.5587 22.3161 21.7956 22 21 22C20.2044 22 19.4413 22.3161 18.8787 22.8787C18.3161 23.4413 18 24.2044 18 25V33C17.2044 33 16.4413 33.3161 15.8787 33.8787C15.3161 34.4413 15 35.2044 15 36V40C15 40.8655 15.2807 41.7076 15.8 42.4C18.25 45.66 18 45 18 47C18 47.2652 18.1054 47.5196 18.2929 47.7071C18.4804 47.8946 18.7348 48 19 48H30C30.2652 48 30.5196 47.8946 30.7071 47.7071C30.8946 47.5196 31 47.2652 31 47C31 46 30.92 45.43 31.34 44.8C33.34 41.8 33 42.91 33 35.69C33.0011 34.7046 32.6383 33.7535 31.9814 33.019C31.3244 32.2845 30.4194 31.8184 29.44 31.71V31.71ZM31 41.09C31 42.65 29 43.47 29 46H20C20 45.1345 19.7193 44.2924 19.2 43.6C17.22 41 17 40.84 17 40V36C17 35.7348 17.1054 35.4804 17.2929 35.2929C17.4804 35.1054 17.7348 35 18 35H19C19.2652 35 19.5196 34.8946 19.7071 34.7071C19.8946 34.5196 20 34.2652 20 34V25C20 24.7348 20.1054 24.4804 20.2929 24.2929C20.4804 24.1054 20.7348 24 21 24C21.2652 24 21.5196 24.1054 21.7071 24.2929C21.8946 24.4804 22 24.7348 22 25V32C21.9985 32.2472 22.0886 32.4862 22.253 32.6709C22.4173 32.8556 22.6443 32.9728 22.89 33L29.22 33.71C29.7114 33.7644 30.1653 33.9989 30.494 34.3682C30.8227 34.7376 31.003 35.2156 31 35.71V41.09Z" fill="#50565E"></path>
                                             <path d="M47 0H31C30.7348 0 30.4804 0.105357 30.2929 0.292893C30.1054 0.48043 30 0.734784 30 1V13C30 13.2652 30.1054 13.5196 30.2929 13.7071C30.4804 13.8946 30.7348 14 31 14H47C47.2652 14 47.5196 13.8946 47.7071 13.7071C47.8946 13.5196 48 13.2652 48 13V1C48 0.734784 47.8946 0.48043 47.7071 0.292893C47.5196 0.105357 47.2652 0 47 0V0ZM46 12H40V10H43C43.2652 10 43.5196 9.89464 43.7071 9.70711C43.8946 9.51957 44 9.26522 44 9V5C44 4.73478 43.8946 4.48043 43.7071 4.29289C43.5196 4.10536 43.2652 4 43 4C42.7348 4 42.4804 4.10536 42.2929 4.29289C42.1054 4.48043 42 4.73478 42 5V8H39C38.7348 8 38.4804 8.10536 38.2929 8.29289C38.1054 8.48043 38 8.73478 38 9V12H32V2H38V4H35C34.7348 4 34.4804 4.10536 34.2929 4.29289C34.1054 4.48043 34 4.73478 34 5V9C34 9.26522 34.1054 9.51957 34.2929 9.70711C34.4804 9.89464 34.7348 10 35 10C35.2652 10 35.5196 9.89464 35.7071 9.70711C35.8946 9.51957 36 9.26522 36 9V6H39C39.2652 6 39.5196 5.89464 39.7071 5.70711C39.8946 5.51957 40 5.26522 40 5V2H46V12Z" fill="#50565E"></path>
                                             <path d="M1 4H13C13.2652 4 13.5196 3.89464 13.7071 3.70711C13.8946 3.51957 14 3.26522 14 3C14 2.73478 13.8946 2.48043 13.7071 2.29289C13.5196 2.10536 13.2652 2 13 2H1C0.734784 2 0.48043 2.10536 0.292893 2.29289C0.105357 2.48043 0 2.73478 0 3C0 3.26522 0.105357 3.51957 0.292893 3.70711C0.48043 3.89464 0.734784 4 1 4V4Z" fill="#50565E"></path>
                                             <path d="M13 6H7C6.73478 6 6.48043 6.10536 6.29289 6.29289C6.10536 6.48043 6 6.73478 6 7C6 7.26522 6.10536 7.51957 6.29289 7.70711C6.48043 7.89464 6.73478 8 7 8H13C13.2652 8 13.5196 7.89464 13.7071 7.70711C13.8946 7.51957 14 7.26522 14 7C14 6.73478 13.8946 6.48043 13.7071 6.29289C13.5196 6.10536 13.2652 6 13 6Z" fill="#50565E"></path>
                                             <path d="M1 12H9C9.26522 12 9.51957 11.8946 9.70711 11.7071C9.89464 11.5196 10 11.2652 10 11C10 10.7348 9.89464 10.4804 9.70711 10.2929C9.51957 10.1054 9.26522 10 9 10H1C0.734784 10 0.48043 10.1054 0.292893 10.2929C0.105357 10.4804 0 10.7348 0 11C0 11.2652 0.105357 11.5196 0.292893 11.7071C0.48043 11.8946 0.734784 12 1 12V12Z" fill="#50565E"></path>
                                             <path d="M1 8H3C3.26522 8 3.51957 7.89464 3.70711 7.70711C3.89464 7.51957 4 7.26522 4 7C4 6.73478 3.89464 6.48043 3.70711 6.29289C3.51957 6.10536 3.26522 6 3 6H1C0.734784 6 0.48043 6.10536 0.292893 6.29289C0.105357 6.48043 0 6.73478 0 7C0 7.26522 0.105357 7.51957 0.292893 7.70711C0.48043 7.89464 0.734784 8 1 8V8Z" fill="#50565E"></path>
                                             <path d="M42 18.18V17C42 16.7348 41.8946 16.4804 41.7071 16.2929C41.5196 16.1054 41.2652 16 41 16C40.7348 16 40.4804 16.1054 40.2929 16.2929C40.1054 16.4804 40 16.7348 40 17V18.18C39.5806 18.3293 39.1997 18.5701 38.8849 18.8849C38.5701 19.1997 38.3293 19.5806 38.18 20H29C28.7348 20 28.4804 20.1054 28.2929 20.2929C28.1054 20.4804 28 20.7348 28 21C28 21.2652 28.1054 21.5196 28.2929 21.7071C28.4804 21.8946 28.7348 22 29 22H38.18C38.3471 22.4797 38.6333 22.909 39.0117 23.2479C39.3901 23.5867 39.8483 23.824 40.3434 23.9373C40.8386 24.0507 41.3544 24.0365 41.8425 23.896C42.3307 23.7556 42.7751 23.4935 43.1343 23.1343C43.4935 22.7751 43.7556 22.3307 43.896 21.8425C44.0365 21.3544 44.0507 20.8386 43.9373 20.3434C43.824 19.8483 43.5867 19.3901 43.2479 19.0117C42.909 18.6333 42.4797 18.3471 42 18.18V18.18ZM41 22C40.8022 22 40.6089 21.9414 40.4444 21.8315C40.28 21.7216 40.1518 21.5654 40.0761 21.3827C40.0004 21.2 39.9806 20.9989 40.0192 20.8049C40.0578 20.6109 40.153 20.4327 40.2929 20.2929C40.4327 20.153 40.6109 20.0578 40.8049 20.0192C40.9989 19.9806 41.2 20.0004 41.3827 20.0761C41.5654 20.1518 41.7216 20.28 41.8315 20.4444C41.9414 20.6089 42 20.8022 42 21C42 21.2652 41.8946 21.5196 41.7071 21.7071C41.5196 21.8946 41.2652 22 41 22Z" fill="#50565E"></path>
                                             <path d="M22.0003 8.82004V15C22.0003 15.2653 22.1056 15.5196 22.2932 15.7072C22.4807 15.8947 22.7351 16 23.0003 16C23.2655 16 23.5199 15.8947 23.7074 15.7072C23.8949 15.5196 24.0003 15.2653 24.0003 15V8.82004C24.4197 8.67073 24.8006 8.42994 25.1154 8.11514C25.4302 7.80035 25.671 7.41944 25.8203 7.00004H27.0003C27.2655 7.00004 27.5199 6.89469 27.7074 6.70715C27.8949 6.51962 28.0003 6.26526 28.0003 6.00004C28.0003 5.73483 27.8949 5.48047 27.7074 5.29294C27.5199 5.1054 27.2655 5.00004 27.0003 5.00004H25.8203C25.6532 4.52038 25.367 4.09101 24.9886 3.75216C24.6102 3.41331 24.152 3.17609 23.6568 3.06273C23.1617 2.94937 22.6459 2.96358 22.1578 3.10403C21.6696 3.24448 21.2252 3.50657 20.866 3.86574C20.5068 4.22491 20.2447 4.66939 20.1043 5.15753C19.9638 5.64566 19.9496 6.16147 20.063 6.6566C20.1763 7.15172 20.4136 7.60996 20.7524 7.98836C21.0912 8.36676 21.5206 8.65293 22.0003 8.82004V8.82004ZM23.0003 5.00004C23.1981 5.00004 23.3914 5.05869 23.5559 5.16858C23.7203 5.27846 23.8485 5.43464 23.9242 5.61736C23.9999 5.80009 24.0197 6.00115 23.9811 6.19514C23.9425 6.38912 23.8472 6.5673 23.7074 6.70715C23.5675 6.847 23.3894 6.94224 23.1954 6.98083C23.0014 7.01942 22.8003 6.99961 22.6176 6.92392C22.4349 6.84824 22.2787 6.72006 22.1688 6.55561C22.0589 6.39117 22.0003 6.19783 22.0003 6.00004C22.0003 5.73483 22.1056 5.48047 22.2932 5.29294C22.4807 5.1054 22.7351 5.00004 23.0003 5.00004V5.00004Z" fill="#50565E"></path>
                                             <path d="M15 18C14.46 18 14.41 17.82 12.59 16H1C0.734784 16 0.48043 15.8946 0.292893 15.7071C0.105357 15.5196 0 15.2652 0 15C0 14.7348 0.105357 14.4804 0.292893 14.2929C0.48043 14.1054 0.734784 14 1 14H13C13.54 14 13.57 14.15 15.71 16.29C15.851 16.4299 15.9472 16.6086 15.9863 16.8033C16.0253 16.9981 16.0055 17.2 15.9294 17.3835C15.8532 17.5669 15.7241 17.7235 15.5586 17.8333C15.3931 17.9431 15.1986 18.0012 15 18Z" fill="#50565E"></path>
                                          </g>
                                          <defs>
                                             <clipPath id="clip0_803_701">
                                                <rect width="48" height="48" fill="white"></rect>
                                             </clipPath>
                                          </defs>
                                       </svg>
                                    </span>
                                 </div>
                                 <div class="elementor-icon-box-content">
                                    <h3 class="elementor-icon-box-title">
                                       <span  >
                                       Dedicated Development Team					</span>
                                    </h3>
                                    <p class="elementor-icon-box-description">
                                       Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.					
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="elementor-element elementor-element-44fc425 elementor-position-left elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-hidden-desktop elementor-hidden-mobile elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="44fc425" data-element_type="widget" data-widget_type="icon-box.default">
                           <div class="elementor-widget-container">
                              <div class="elementor-icon-box-wrapper">
                                 <div class="elementor-icon-box-icon">
                                    <span class="elementor-icon elementor-animation-" >
                                       <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                                          <g clip-path="url(#clip0_803_700)">
                                             <path d="M22.25 30H25.58C25.23 30.8008 24.6763 31.4959 23.974 32.016C23.2717 32.5361 22.4453 32.863 21.5772 32.9642C20.7091 33.0654 19.8297 32.9373 19.0266 32.5926C18.2235 32.248 17.5247 31.6989 17 31H7C6.20435 31 5.44129 30.6839 4.87868 30.1213C4.31607 29.5587 4 28.7956 4 28C4 27.2043 4.31607 26.4413 4.87868 25.8787C5.44129 25.3161 6.20435 25 7 25H17C17.5257 24.306 18.2234 23.7613 19.0242 23.4197C19.8251 23.0782 20.7012 22.9517 21.5659 23.0527C22.4306 23.1537 23.254 23.4788 23.9545 23.9957C24.655 24.5126 25.2085 25.2035 25.56 26H22.25L20.75 28L22.25 30Z" fill="#2A2E32"></path>
                                             <path d="M44 39V44C44 44.7956 43.6839 45.5587 43.1213 46.1213C42.5587 46.6839 41.7956 47 41 47H19C18.2044 47 17.4413 46.6839 16.8787 46.1213C16.3161 45.5587 16 44.7956 16 44V39H44Z" fill="#2A2E32"></path>
                                             <path d="M44 4V6H35L34 7H26L25 6H16V4C16 3.20435 16.3161 2.44129 16.8787 1.87868C17.4413 1.31607 18.2044 1 19 1H41C41.7956 1 42.5587 1.31607 43.1213 1.87868C43.6839 2.44129 44 3.20435 44 4Z" fill="#2A2E32"></path>
                                             <path d="M40.6701 29.17L39.8801 28.85C39.9802 28.2878 39.9802 27.7122 39.8801 27.15L40.6701 26.83C40.7997 26.7708 40.9019 26.6644 40.9557 26.5324C41.0096 26.4005 41.0112 26.253 40.9601 26.12L40.5401 25.12C40.4868 24.9877 40.3832 24.8818 40.252 24.8256C40.1209 24.7694 39.9728 24.7674 39.8401 24.82L39.0501 25.15C38.7231 24.6831 38.317 24.277 37.8501 23.95L38.1801 23.16C38.2328 23.0274 38.2307 22.8793 38.1745 22.7481C38.1183 22.6169 38.0125 22.5134 37.8801 22.46L36.8801 22.04C36.7471 21.9889 36.5996 21.9905 36.4677 22.0444C36.3358 22.0983 36.2294 22.2004 36.1701 22.33L35.8501 23.12C35.2879 23.0199 34.7124 23.0199 34.1501 23.12L33.8301 22.33C33.7709 22.2004 33.6645 22.0983 33.5326 22.0444C33.4006 21.9905 33.2532 21.9889 33.1201 22.04L32.1201 22.46C31.9878 22.5134 31.8819 22.6169 31.8257 22.7481C31.7695 22.8793 31.7675 23.0274 31.8201 23.16L32.1501 23.95C31.6832 24.277 31.2771 24.6831 30.9501 25.15L30.1601 24.82C30.0275 24.7674 29.8794 24.7694 29.7482 24.8256C29.6171 24.8818 29.5135 24.9877 29.4601 25.12L29.0401 26.12C28.9891 26.253 28.9906 26.4005 29.0445 26.5324C29.0984 26.6644 29.2005 26.7708 29.3301 26.83L30.1201 27.15C30.02 27.7122 30.02 28.2878 30.1201 28.85L29.3301 29.17C29.2005 29.2292 29.0984 29.3357 29.0445 29.4676C28.9906 29.5995 28.9891 29.747 29.0401 29.88L29.4601 30.88C29.5135 31.0124 29.6171 31.1182 29.7482 31.1744C29.8794 31.2306 30.0275 31.2326 30.1601 31.18L30.9501 30.85C31.2771 31.3169 31.6832 31.723 32.1501 32.05L31.8201 32.84C31.7675 32.9726 31.7695 33.1207 31.8257 33.2519C31.8819 33.3831 31.9878 33.4866 32.1201 33.54L33.1201 33.96C33.2532 34.0111 33.4006 34.0095 33.5326 33.9556C33.6645 33.9017 33.7709 33.7996 33.8301 33.67L34.1501 32.88C34.7124 32.9801 35.2879 32.9801 35.8501 32.88L36.1701 33.67C36.2294 33.7996 36.3358 33.9017 36.4677 33.9556C36.5996 34.0095 36.7471 34.0111 36.8801 33.96L37.8801 33.54C38.0125 33.4866 38.1183 33.3831 38.1745 33.2519C38.2307 33.1207 38.2328 32.9726 38.1801 32.84L37.8501 32.05C38.317 31.723 38.7231 31.3169 39.0501 30.85L39.8401 31.18C39.9728 31.2326 40.1209 31.2306 40.252 31.1744C40.3832 31.1182 40.4868 31.0124 40.5401 30.88L40.9601 29.88C41.0112 29.747 41.0096 29.5995 40.9557 29.4676C40.9019 29.3357 40.7997 29.2292 40.6701 29.17V29.17ZM35.0001 30C34.6046 30 34.2179 29.8827 33.889 29.6629C33.5601 29.4432 33.3037 29.1308 33.1524 28.7654C33.001 28.3999 32.9614 27.9978 33.0386 27.6098C33.1157 27.2219 33.3062 26.8655 33.5859 26.5858C33.8656 26.3061 34.222 26.1156 34.6099 26.0384C34.9979 25.9613 35.4 26.0009 35.7655 26.1522C36.1309 26.3036 36.4433 26.56 36.6631 26.8889C36.8828 27.2178 37.0001 27.6044 37.0001 28C37.0001 28.5304 36.7894 29.0391 36.4143 29.4142C36.0393 29.7893 35.5306 30 35.0001 30Z" fill="#C44FAB"></path>
                                             <path d="M31 42H29C28.7348 42 28.4804 42.1054 28.2929 42.2929C28.1054 42.4804 28 42.7348 28 43C28 43.2652 28.1054 43.5196 28.2929 43.7071C28.4804 43.8946 28.7348 44 29 44H31C31.2652 44 31.5196 43.8946 31.7071 43.7071C31.8946 43.5196 32 43.2652 32 43C32 42.7348 31.8946 42.4804 31.7071 42.2929C31.5196 42.1054 31.2652 42 31 42Z" fill="#50565E"></path>
                                             <path d="M45 13.77C44.964 13.6263 44.8966 13.4925 44.8026 13.378C44.7086 13.2636 44.5903 13.1715 44.4564 13.1083C44.3224 13.0452 44.1761 13.0126 44.028 13.0129C43.8799 13.0131 43.7337 13.0463 43.6 13.11L41.6 14.11C41.39 14.21 41.47 14.17 39.71 15.93L37.25 15.52L38.5 14.89C38.97 14.66 38.93 14.52 39.85 11.76L44.42 9.93C44.5915 9.84168 44.736 9.70862 44.8381 9.5449C44.9402 9.38119 44.9962 9.19291 45 9V4C45 2.93913 44.5786 1.92172 43.8284 1.17157C43.0783 0.421427 42.0609 0 41 0L19 0C17.9391 0 16.9217 0.421427 16.1716 1.17157C15.4214 1.92172 15 2.93913 15 4V24H7C5.93913 24 4.92172 24.4214 4.17157 25.1716C3.42143 25.9217 3 26.9391 3 28C3 29.0609 3.42143 30.0783 4.17157 30.8284C4.92172 31.5786 5.93913 32 7 32H15V44C15 45.0609 15.4214 46.0783 16.1716 46.8284C16.9217 47.5786 17.9391 48 19 48H41C42.0609 48 43.0783 47.5786 43.8284 46.8284C44.5786 46.0783 45 45.0609 45 44C45 11.93 45 14 45 13.77ZM38.68 10.07C38.5448 10.1234 38.4229 10.2057 38.3227 10.311C38.2225 10.4164 38.1465 10.5423 38.1 10.68L37.23 13.29L33.6 15.11C33.4078 15.1994 33.2489 15.3477 33.1464 15.5333C33.0439 15.7189 33.0031 15.9323 33.0298 16.1426C33.0565 16.353 33.1494 16.5494 33.295 16.7035C33.4407 16.8576 33.6315 16.9614 33.84 17L39.84 18C39.9968 18.0258 40.1576 18.0139 40.3089 17.9652C40.4602 17.9165 40.5977 17.8325 40.71 17.72C42.9 15.53 42.46 15.9 43 15.63V38H17V32.45C17.7058 33.0835 18.5517 33.5406 19.4683 33.7839C20.3849 34.0272 21.3462 34.0497 22.2732 33.8497C23.2003 33.6496 24.0667 33.2327 24.8014 32.6331C25.5361 32.0334 26.1182 31.2681 26.5 30.4C26.5665 30.2475 26.594 30.0809 26.5799 29.9152C26.5658 29.7494 26.5105 29.5898 26.4192 29.4508C26.3278 29.3118 26.2033 29.1978 26.0567 29.1191C25.9102 29.0403 25.7463 28.9994 25.58 29H22.75L22 28L22.75 27H25.58C25.7463 27.0006 25.9102 26.9597 26.0567 26.8809C26.2033 26.8022 26.3278 26.6882 26.4192 26.5492C26.5105 26.4102 26.5658 26.2506 26.5799 26.0848C26.594 25.9191 26.5665 25.7525 26.5 25.6C26.1182 24.7319 25.5361 23.9666 24.8014 23.3669C24.0667 22.7673 23.2003 22.3504 22.2732 22.1503C21.3462 21.9503 20.3849 21.9728 19.4683 22.2161C18.5517 22.4594 17.7058 22.9165 17 23.55V7H24.59C25.23 7.65 25.47 8 26 8H34C34.5 8 34.66 7.76 35.41 7H43V8.32L38.68 10.07ZM19 2H41C41.5304 2 42.0391 2.21071 42.4142 2.58579C42.7893 2.96086 43 3.46957 43 4V5H35C34.5 5 34.34 5.24 33.59 6H26.41C25.77 5.35 25.53 5 25 5H17V4C17 3.46957 17.2107 2.96086 17.5858 2.58579C17.9609 2.21071 18.4696 2 19 2V2ZM5 28C5 27.4696 5.21071 26.9609 5.58579 26.5858C5.96086 26.2107 6.46957 26 7 26H17C17.64 26 17.78 25.55 18.16 25.18C18.884 24.4712 19.8474 24.0596 20.86 24.0262C21.8726 23.9929 22.861 24.3404 23.63 25H22.25C22.0948 25 21.9416 25.0361 21.8028 25.1056C21.6639 25.175 21.5431 25.2758 21.45 25.4L19.95 27.4C19.8202 27.5731 19.75 27.7836 19.75 28C19.75 28.2164 19.8202 28.4269 19.95 28.6L21.45 30.6C21.5431 30.7242 21.6639 30.825 21.8028 30.8944C21.9416 30.9639 22.0948 31 22.25 31H23.63C23.2167 31.3592 22.7341 31.6298 22.2121 31.7949C21.69 31.9601 21.1396 32.0162 20.5949 31.96C20.0502 31.9037 19.5229 31.7363 19.0456 31.4679C18.5683 31.1996 18.1511 30.8361 17.82 30.4C17.7248 30.2731 17.6009 30.1706 17.4583 30.101C17.3157 30.0315 17.1586 29.9969 17 30H7C6.46957 30 5.96086 29.7893 5.58579 29.4142C5.21071 29.0391 5 28.5304 5 28ZM41 46H19C18.4696 46 17.9609 45.7893 17.5858 45.4142C17.2107 45.0391 17 44.5304 17 44V40H43V44C43 44.5304 42.7893 45.0391 42.4142 45.4142C42.0391 45.7893 41.5304 46 41 46Z" fill="#50565E"></path>
                                          </g>
                                          <defs>
                                             <clipPath id="clip0_803_700">
                                                <rect width="48" height="48" fill="white"></rect>
                                             </clipPath>
                                          </defs>
                                       </svg>
                                    </span>
                                 </div>
                                 <div class="elementor-icon-box-content">
                                    <h3 class="elementor-icon-box-title">
                                       <span  >
                                       Mobile App Development Team					</span>
                                    </h3>
                                    <p class="elementor-icon-box-description">
                                       Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.					
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="elementor-element elementor-element-ee01064 elementor-position-left elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-hidden-desktop elementor-hidden-mobile elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="ee01064" data-element_type="widget" data-widget_type="icon-box.default">
                           <div class="elementor-widget-container">
                              <div class="elementor-icon-box-wrapper">
                                 <div class="elementor-icon-box-icon">
                                    <span class="elementor-icon elementor-animation-" >
                                       <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                                          <g clip-path="url(#clip0_803_699)">
                                             <path d="M7 3H1V9H7V3Z" fill="#2A2E32"></path>
                                             <path d="M7 39H1V45H7V39Z" fill="#2A2E32"></path>
                                             <path d="M41 9H47V3L41 3V9Z" fill="#2A2E32"></path>
                                             <path d="M41 45H47V39H41V45Z" fill="#2A2E32"></path>
                                             <path d="M36 6V8H29L28 9H20L19 8H12V6C12 5.20435 12.3161 4.44129 12.8787 3.87868C13.4413 3.31607 14.2044 3 15 3H33C33.7956 3 34.5587 3.31607 35.1213 3.87868C35.6839 4.44129 36 5.20435 36 6Z" fill="#2A2E32"></path>
                                             <path d="M36 37V42C36 42.7956 35.6839 43.5587 35.1213 44.1213C34.5587 44.6839 33.7956 45 33 45H15C14.2044 45 13.4413 44.6839 12.8787 44.1213C12.3161 43.5587 12 42.7956 12 42V37H36Z" fill="#2A2E32"></path>
                                             <path d="M25 40H23C22.7348 40 22.4804 40.1054 22.2929 40.2929C22.1054 40.4804 22 40.7348 22 41C22 41.2652 22.1054 41.5196 22.2929 41.7071C22.4804 41.8946 22.7348 42 23 42H25C25.2652 42 25.5196 41.8946 25.7071 41.7071C25.8946 41.5196 26 41.2652 26 41C26 40.7348 25.8946 40.4804 25.7071 40.2929C25.5196 40.1054 25.2652 40 25 40Z" fill="#50565E"></path>
                                             <path d="M47 10C47.2652 10 47.5196 9.89464 47.7071 9.70711C47.8946 9.51957 48 9.26522 48 9V3C48 2.73478 47.8946 2.48043 47.7071 2.29289C47.5196 2.10536 47.2652 2 47 2H41C40.7348 2 40.4804 2.10536 40.2929 2.29289C40.1054 2.48043 40 2.73478 40 3V9C40 9.26522 40.1054 9.51957 40.2929 9.70711C40.4804 9.89464 40.7348 10 41 10H43V18.14C42.1435 18.3611 41.3845 18.8599 40.8417 19.5584C40.2989 20.2568 40.0029 21.1154 40 22V23H37V6C37 4.93913 36.5786 3.92172 35.8284 3.17157C35.0783 2.42143 34.0609 2 33 2H15C13.9391 2 12.9217 2.42143 12.1716 3.17157C11.4214 3.92172 11 4.93913 11 6V23H8V22C7.99713 21.1154 7.70113 20.2568 7.15831 19.5584C6.61549 18.8599 5.85648 18.3611 5 18.14V10H7C7.26522 10 7.51957 9.89464 7.70711 9.70711C7.89464 9.51957 8 9.26522 8 9V3C8 2.73478 7.89464 2.48043 7.70711 2.29289C7.51957 2.10536 7.26522 2 7 2H1C0.734784 2 0.48043 2.10536 0.292893 2.29289C0.105357 2.48043 0 2.73478 0 3L0 9C0 9.26522 0.105357 9.51957 0.292893 9.70711C0.48043 9.89464 0.734784 10 1 10H3V18.14C2.14352 18.3611 1.38451 18.8599 0.841689 19.5584C0.298871 20.2568 0.00287235 21.1154 0 22L0 26C0.00287235 26.8846 0.298871 27.7432 0.841689 28.4416C1.38451 29.1401 2.14352 29.6389 3 29.86V38H1C0.734784 38 0.48043 38.1054 0.292893 38.2929C0.105357 38.4804 0 38.7348 0 39L0 45C0 45.2652 0.105357 45.5196 0.292893 45.7071C0.48043 45.8946 0.734784 46 1 46H7C7.26522 46 7.51957 45.8946 7.70711 45.7071C7.89464 45.5196 8 45.2652 8 45V39C8 38.7348 7.89464 38.4804 7.70711 38.2929C7.51957 38.1054 7.26522 38 7 38H5V29.86C5.85648 29.6389 6.61549 29.1401 7.15831 28.4416C7.70113 27.7432 7.99713 26.8846 8 26V25H11V42C11 43.0609 11.4214 44.0783 12.1716 44.8284C12.9217 45.5786 13.9391 46 15 46H33C34.0609 46 35.0783 45.5786 35.8284 44.8284C36.5786 44.0783 37 43.0609 37 42V25H40V26C40.0029 26.8846 40.2989 27.7432 40.8417 28.4416C41.3845 29.1401 42.1435 29.6389 43 29.86V38H41C40.7348 38 40.4804 38.1054 40.2929 38.2929C40.1054 38.4804 40 38.7348 40 39V45C40 45.2652 40.1054 45.5196 40.2929 45.7071C40.4804 45.8946 40.7348 46 41 46H47C47.2652 46 47.5196 45.8946 47.7071 45.7071C47.8946 45.5196 48 45.2652 48 45V39C48 38.7348 47.8946 38.4804 47.7071 38.2929C47.5196 38.1054 47.2652 38 47 38H45V29.86C45.8565 29.6389 46.6155 29.1401 47.1583 28.4416C47.7011 27.7432 47.9971 26.8846 48 26V22C47.9971 21.1154 47.7011 20.2568 47.1583 19.5584C46.6155 18.8599 45.8565 18.3611 45 18.14V10H47ZM2 4H6V8H2V4ZM6 44H2V40H6V44ZM6 26C6.00317 26.3541 5.91226 26.7027 5.73657 27.0102C5.56087 27.3176 5.30669 27.573 5 27.75C4.93424 27.5499 4.807 27.3757 4.63641 27.2522C4.46582 27.1287 4.2606 27.0623 4.05 27.0623C3.8394 27.0623 3.63418 27.1287 3.46359 27.2522C3.293 27.3757 3.16576 27.5499 3.1 27.75C2.77466 27.5861 2.50026 27.3365 2.3064 27.0281C2.11254 26.7197 2.0066 26.3642 2 26V22C1.99683 21.6459 2.08774 21.2973 2.26343 20.9898C2.43913 20.6824 2.69331 20.427 3 20.25C3.06576 20.4501 3.193 20.6243 3.36359 20.7478C3.53418 20.8713 3.7394 20.9377 3.95 20.9377C4.1606 20.9377 4.36582 20.8713 4.53641 20.7478C4.707 20.6243 4.83424 20.4501 4.9 20.25C5.22534 20.4139 5.49974 20.6635 5.6936 20.9719C5.88746 21.2803 5.9934 21.6358 6 22V23C5.73478 23 5.48043 23.1054 5.29289 23.2929C5.10536 23.4804 5 23.7348 5 24C5 24.2652 5.10536 24.5196 5.29289 24.7071C5.48043 24.8946 5.73478 25 6 25V26ZM13 9H18.59C19.23 9.65 19.47 10 20 10H28C28.5 10 28.66 9.76 29.41 9H35V36H13V9ZM15 4H33C33.5304 4 34.0391 4.21071 34.4142 4.58579C34.7893 4.96086 35 5.46957 35 6V7H29C28.5 7 28.34 7.24 27.59 8H20.41C19.77 7.35 19.53 7 19 7H13V6C13 5.46957 13.2107 4.96086 13.5858 4.58579C13.9609 4.21071 14.4696 4 15 4ZM33 44H15C14.4696 44 13.9609 43.7893 13.5858 43.4142C13.2107 43.0391 13 42.5304 13 42V38H35V42C35 42.5304 34.7893 43.0391 34.4142 43.4142C34.0391 43.7893 33.5304 44 33 44ZM46 44H42V40H46V44ZM46 22V26C46.0032 26.3541 45.9123 26.7027 45.7366 27.0102C45.5609 27.3176 45.3067 27.573 45 27.75C44.9342 27.5499 44.807 27.3757 44.6364 27.2522C44.4658 27.1287 44.2606 27.0623 44.05 27.0623C43.8394 27.0623 43.6342 27.1287 43.4636 27.2522C43.293 27.3757 43.1658 27.5499 43.1 27.75C42.7747 27.5861 42.5003 27.3365 42.3064 27.0281C42.1125 26.7197 42.0066 26.3642 42 26V25C42.2652 25 42.5196 24.8946 42.7071 24.7071C42.8946 24.5196 43 24.2652 43 24C43 23.7348 42.8946 23.4804 42.7071 23.2929C42.5196 23.1054 42.2652 23 42 23V22C41.9968 21.6459 42.0877 21.2973 42.2634 20.9898C42.4391 20.6824 42.6933 20.427 43 20.25C43.0658 20.4501 43.193 20.6243 43.3636 20.7478C43.5342 20.8713 43.7394 20.9377 43.95 20.9377C44.1606 20.9377 44.3658 20.8713 44.5364 20.7478C44.707 20.6243 44.8342 20.4501 44.9 20.25C45.2253 20.4139 45.4997 20.6635 45.6936 20.9719C45.8875 21.2803 45.9934 21.6358 46 22V22ZM42 4H46V8H42V4Z" fill="#50565E"></path>
                                             <path d="M25 21C25 20.7348 24.8946 20.4804 24.7071 20.2929C24.5196 20.1054 24.2652 20 24 20H22V22H24C24.2652 22 24.5196 21.8946 24.7071 21.7071C24.8946 21.5196 25 21.2652 25 21Z" fill="#C44FAB"></path>
                                             <path d="M25 24H22V26H25C25.2652 26 25.5196 25.8946 25.7071 25.7071C25.8946 25.5196 26 25.2652 26 25C26 24.7348 25.8946 24.4804 25.7071 24.2929C25.5196 24.1054 25.2652 24 25 24Z" fill="#C44FAB"></path>
                                             <path d="M24 15C22.4178 15 20.871 15.4692 19.5554 16.3482C18.2399 17.2273 17.2145 18.4767 16.609 19.9385C16.0035 21.4003 15.845 23.0089 16.1537 24.5607C16.4624 26.1126 17.2243 27.538 18.3431 28.6569C19.462 29.7757 20.8874 30.5376 22.4393 30.8463C23.9911 31.155 25.5997 30.9965 27.0615 30.391C28.5233 29.7855 29.7727 28.7602 30.6518 27.4446C31.5308 26.129 32 24.5823 32 23C32 20.8783 31.1572 18.8434 29.6569 17.3431C28.1566 15.8429 26.1217 15 24 15V15ZM26 27.82V28C26 28.2652 25.8946 28.5196 25.7071 28.7071C25.5196 28.8946 25.2652 29 25 29C24.7348 29 24.4804 28.8946 24.2929 28.7071C24.1054 28.5196 24 28.2652 24 28H23C23 28.2652 22.8946 28.5196 22.7071 28.7071C22.5196 28.8946 22.2652 29 22 29C21.7348 29 21.4804 28.8946 21.2929 28.7071C21.1054 28.5196 21 28.2652 21 28C20.7348 28 20.4804 27.8946 20.2929 27.7071C20.1054 27.5196 20 27.2652 20 27V19C20 18.7348 20.1054 18.4804 20.2929 18.2929C20.4804 18.1054 20.7348 18 21 18C21 17.7348 21.1054 17.4804 21.2929 17.2929C21.4804 17.1054 21.7348 17 22 17C22.2652 17 22.5196 17.1054 22.7071 17.2929C22.8946 17.4804 23 17.7348 23 18H24C24 17.7348 24.1054 17.4804 24.2929 17.2929C24.4804 17.1054 24.7348 17 25 17C25.2652 17 25.5196 17.1054 25.7071 17.2929C25.8946 17.4804 26 17.7348 26 18V18.78C26.5125 19.23 26.8526 19.8442 26.962 20.5174C27.0715 21.1905 26.9435 21.8808 26.6 22.47C27.0721 22.7719 27.4502 23.2 27.6915 23.7058C27.9327 24.2116 28.0275 24.7748 27.965 25.3317C27.9026 25.8886 27.6854 26.4169 27.3381 26.8567C26.9908 27.2965 26.5273 27.6302 26 27.82V27.82Z" fill="#C44FAB"></path>
                                          </g>
                                          <defs>
                                             <clipPath id="clip0_803_699">
                                                <rect width="48" height="48" fill="white"></rect>
                                             </clipPath>
                                          </defs>
                                       </svg>
                                    </span>
                                 </div>
                                 <div class="elementor-icon-box-content">
                                    <h3 class="elementor-icon-box-title">
                                       <span  >
                                       Custom Software Development 					</span>
                                    </h3>
                                    <p class="elementor-icon-box-description">
                                       Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.					
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="elementor-element elementor-element-4c3ac62 elementor-position-left elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-hidden-desktop elementor-hidden-mobile elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="4c3ac62" data-element_type="widget" data-widget_type="icon-box.default">
                           <div class="elementor-widget-container">
                              <div class="elementor-icon-box-wrapper">
                                 <div class="elementor-icon-box-icon">
                                    <span class="elementor-icon elementor-animation-" >
                                       <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                                          <g clip-path="url(#clip0_803_761)">
                                             <path d="M23.9999 42.11C23.0778 43.9064 21.5783 45.3405 19.7427 46.1818C17.907 47.023 15.8418 47.2225 13.879 46.7482C11.9163 46.2738 10.17 45.1532 8.92113 43.5665C7.67221 41.9798 6.99316 40.0193 6.99316 38C6.99316 35.9808 7.67221 34.0202 8.92113 32.4335C10.17 30.8468 11.9163 29.7262 13.879 29.2518C15.8418 28.7775 17.907 28.977 19.7427 29.8182C21.5783 30.6595 23.0778 32.0936 23.9999 33.89C23.3423 35.1602 22.9991 36.5697 22.9991 38C22.9991 39.4303 23.3423 40.8398 23.9999 42.11V42.11Z" fill="#2A2E32"></path>
                                             <path d="M18.6 37.47C18.9435 36.8808 19.0715 36.1905 18.962 35.5174C18.8526 34.8442 18.5125 34.23 18 33.78V33C18 32.7348 17.8946 32.4804 17.7071 32.2929C17.5196 32.1054 17.2652 32 17 32C16.7348 32 16.4804 32.1054 16.2929 32.2929C16.1054 32.4804 16 32.7348 16 33H15C15 32.7348 14.8946 32.4804 14.7071 32.2929C14.5196 32.1054 14.2652 32 14 32C13.7348 32 13.4804 32.1054 13.2929 32.2929C13.1054 32.4804 13 32.7348 13 33C12.7348 33 12.4804 33.1054 12.2929 33.2929C12.1054 33.4804 12 33.7348 12 34V42C12 42.2652 12.1054 42.5196 12.2929 42.7071C12.4804 42.8946 12.7348 43 13 43C13 43.2652 13.1054 43.5196 13.2929 43.7071C13.4804 43.8946 13.7348 44 14 44C14.2652 44 14.5196 43.8946 14.7071 43.7071C14.8946 43.5196 15 43.2652 15 43H16C16 43.2652 16.1054 43.5196 16.2929 43.7071C16.4804 43.8946 16.7348 44 17 44C17.2652 44 17.5196 43.8946 17.7071 43.7071C17.8946 43.5196 18 43.2652 18 43V42.82C18.5272 42.6302 18.9908 42.2965 19.3381 41.8567C19.6854 41.4169 19.9026 40.8886 19.965 40.3317C20.0275 39.7748 19.9327 39.2116 19.6915 38.7058C19.4502 38.2 19.0721 37.7719 18.6 37.47V37.47ZM16 35C16.2652 35 16.5196 35.1054 16.7071 35.2929C16.8946 35.4804 17 35.7348 17 36C17 36.2652 16.8946 36.5196 16.7071 36.7071C16.5196 36.8946 16.2652 37 16 37H14V35H16ZM17 41H14V39H17C17.2652 39 17.5196 39.1054 17.7071 39.2929C17.8946 39.4804 18 39.7348 18 40C18 40.2652 17.8946 40.5196 17.7071 40.7071C17.5196 40.8946 17.2652 41 17 41Z" fill="#50565E"></path>
                                             <path d="M45 22C45.0002 23.3511 44.6963 24.6848 44.1107 25.9024C43.5251 27.1199 42.6729 28.19 41.6173 29.0332C40.5618 29.8765 39.3299 30.4713 38.0131 30.7735C36.6963 31.0757 35.3284 31.0775 34.0107 30.7789C32.6931 30.4803 31.4596 29.8888 30.4018 29.0485C29.3439 28.2081 28.4888 27.1403 27.8999 25.9244C27.3111 24.7084 27.0035 23.3755 27 22.0245C26.9966 20.6735 27.2973 19.339 27.88 18.12C29.7364 17.2329 31.2329 15.7365 32.12 13.88C33.4918 13.2246 35.0074 12.9273 36.5252 13.0161C38.043 13.1048 39.5136 13.5766 40.7997 14.3874C42.0858 15.1982 43.1456 16.3217 43.8801 17.6529C44.6146 18.9841 44.9999 20.4797 45 22Z" fill="#2A2E32"></path>
                                             <path d="M23.9999 9C23.8022 9 23.6088 8.94135 23.4444 8.83147C23.2799 8.72159 23.1518 8.56541 23.0761 8.38268C23.0004 8.19996 22.9806 7.99889 23.0192 7.80491C23.0577 7.61093 23.153 7.43275 23.2928 7.29289C23.4327 7.15304 23.6109 7.0578 23.8049 7.01921C23.9988 6.98063 24.1999 7.00043 24.3826 7.07612C24.5654 7.15181 24.7215 7.27998 24.8314 7.44443C24.9413 7.60888 24.9999 7.80222 24.9999 8C24.9999 8.26522 25.1053 8.51957 25.2928 8.70711C25.4804 8.89464 25.7347 9 25.9999 9C27.6599 9 27.2099 6 24.9999 5.18V5C24.9999 4.73478 24.8946 4.48043 24.7071 4.29289C24.5195 4.10536 24.2652 4 23.9999 4C23.7347 4 23.4804 4.10536 23.2928 4.29289C23.1053 4.48043 22.9999 4.73478 22.9999 5V5.18C22.3386 5.41998 21.7826 5.88477 21.4292 6.49313C21.0758 7.10149 20.9474 7.81471 21.0665 8.50811C21.1857 9.20151 21.5447 9.83098 22.081 10.2865C22.6172 10.742 23.2964 10.9945 23.9999 11C24.1977 11 24.3911 11.0586 24.5555 11.1685C24.72 11.2784 24.8481 11.4346 24.9238 11.6173C24.9995 11.8 25.0193 12.0011 24.9807 12.1951C24.9421 12.3891 24.8469 12.5673 24.7071 12.7071C24.5672 12.847 24.389 12.9422 24.195 12.9808C24.0011 13.0194 23.8 12.9996 23.6173 12.9239C23.4345 12.8482 23.2784 12.72 23.1685 12.5556C23.0586 12.3911 22.9999 12.1978 22.9999 12C22.9999 11.7348 22.8946 11.4804 22.7071 11.2929C22.5195 11.1054 22.2652 11 21.9999 11C20.3399 11 20.7899 14 22.9999 14.82V15C22.9999 15.2652 23.1053 15.5196 23.2928 15.7071C23.4804 15.8946 23.7347 16 23.9999 16C24.2652 16 24.5195 15.8946 24.7071 15.7071C24.8946 15.5196 24.9999 15.2652 24.9999 15V14.82C25.6613 14.58 26.2173 14.1152 26.5707 13.5069C26.9241 12.8985 27.0525 12.1853 26.9333 11.4919C26.8142 10.7985 26.4551 10.169 25.9189 9.71352C25.3827 9.25801 24.7035 9.00546 23.9999 9Z" fill="#C44FAB"></path>
                                             <path d="M35.89 41.25C35.691 41.0752 35.4307 40.9865 35.1664 41.0034C34.902 41.0202 34.6552 41.1413 34.48 41.34C34.2685 41.5708 34.0058 41.7487 33.713 41.8594C33.4202 41.9702 33.1055 42.0106 32.7942 41.9776C32.4829 41.9445 32.1837 41.8388 31.9207 41.669C31.6577 41.4992 31.4383 41.2701 31.28 41H32C32.2652 41 32.5196 40.8946 32.7071 40.7071C32.8946 40.5196 33 40.2652 33 40C33 39.7348 32.8946 39.4804 32.7071 39.2929C32.5196 39.1054 32.2652 39 32 39H31V38H32C32.2652 38 32.5196 37.8946 32.7071 37.7071C32.8946 37.5196 33 37.2652 33 37C33 36.7348 32.8946 36.4804 32.7071 36.2929C32.5196 36.1054 32.2652 36 32 36H31.28C31.4345 35.7347 31.6481 35.5085 31.9041 35.339C32.1601 35.1695 32.4517 35.0612 32.7563 35.0225C33.0609 34.9839 33.3703 35.0158 33.6605 35.116C33.9508 35.2161 34.2141 35.3817 34.43 35.6C34.6023 35.7649 34.8279 35.8628 35.066 35.876C35.3041 35.8892 35.5391 35.8168 35.7286 35.672C35.9181 35.5272 36.0496 35.3194 36.0994 35.0861C36.1491 34.8529 36.1139 34.6096 36 34.4C35.6289 33.966 35.1691 33.6166 34.6516 33.3751C34.1342 33.1336 33.571 33.0057 33 33C32.1154 33.0029 31.2568 33.2989 30.5584 33.8417C29.8599 34.3845 29.3611 35.1435 29.14 36H28C27.7348 36 27.4804 36.1054 27.2929 36.2929C27.1054 36.4804 27 36.7348 27 37C27 37.2652 27.1054 37.5196 27.2929 37.7071C27.4804 37.8946 27.7348 38 28 38H29V39H28C27.7348 39 27.4804 39.1054 27.2929 39.2929C27.1054 39.4804 27 39.7348 27 40C27 40.2652 27.1054 40.5196 27.2929 40.7071C27.4804 40.8946 27.7348 41 28 41H29.14C29.3213 41.7018 29.6898 42.3411 30.2063 42.8497C30.7227 43.3583 31.3676 43.717 32.0721 43.8875C32.7766 44.058 33.5142 44.0338 34.206 43.8176C34.8979 43.6014 35.5179 43.2013 36 42.66C36.0854 42.5602 36.1502 42.4446 36.1909 42.3197C36.2316 42.1948 36.2473 42.0631 36.237 41.9322C36.2268 41.8013 36.1909 41.6736 36.1314 41.5566C36.0718 41.4395 35.9898 41.3354 35.89 41.25Z" fill="#2A2E32"></path>
                                             <path d="M46.0002 22C46 20.4948 45.6601 19.0091 45.0056 17.6536C44.3512 16.298 43.3992 15.1078 42.2207 14.1715C41.0421 13.2352 39.6674 12.577 38.199 12.246C36.7306 11.9151 35.2065 11.9198 33.7402 12.26C34.085 10.7923 34.0935 9.26566 33.765 7.79424C33.4365 6.32282 32.7795 4.94471 31.8432 3.76302C30.907 2.58132 29.7156 1.62662 28.3583 0.970333C27.001 0.31404 25.5129 -0.0268555 24.0052 -0.0268555C22.4976 -0.0268555 21.0095 0.31404 19.6521 0.970333C18.2948 1.62662 17.1035 2.58132 16.1672 3.76302C15.231 4.94471 14.574 6.32282 14.2455 7.79424C13.917 9.26566 13.9255 10.7923 14.2702 12.26C11.7908 11.6773 9.18256 12.0626 6.97756 13.3374C4.77256 14.6121 3.13705 16.6801 2.40472 19.1195C1.6724 21.5589 1.89846 24.1858 3.03677 26.4642C4.17509 28.7426 6.13988 30.5008 8.53024 31.38C7.60717 32.3833 6.89899 33.5647 6.44921 34.8517C5.99943 36.1386 5.81756 37.504 5.91476 38.8638C6.01197 40.2237 6.3862 41.5493 7.01446 42.7592C7.64272 43.9691 8.51174 45.0378 9.56812 45.8996C10.6245 46.7613 11.846 47.398 13.1574 47.7704C14.4688 48.1429 15.8426 48.2432 17.1942 48.0653C18.5459 47.8874 19.8469 47.435 21.0173 46.7359C22.1877 46.0368 23.2028 45.1058 24.0002 44C24.7977 45.1058 25.8128 46.0368 26.9832 46.7359C28.1536 47.435 29.4546 47.8874 30.8062 48.0653C32.1579 48.2432 33.5316 48.1429 34.8431 47.7704C36.1545 47.398 37.376 46.7613 38.4324 45.8996C39.4887 45.0378 40.3578 43.9691 40.986 42.7592C41.6143 41.5493 41.9885 40.2237 42.0857 38.8638C42.1829 37.504 42.001 36.1386 41.5513 34.8517C41.1015 33.5647 40.3933 32.3833 39.4702 31.38C41.3866 30.671 43.0398 29.3918 44.2073 27.7148C45.3748 26.0378 46.0005 24.0434 46.0002 22V22ZM24.0002 2.00001C25.1896 1.99677 26.3647 2.25875 27.44 2.76689C28.5153 3.27504 29.4638 4.01655 30.2165 4.93746C30.9691 5.85837 31.5069 6.93551 31.7908 8.09048C32.0747 9.24545 32.0975 10.4492 31.8575 11.6141C31.6176 12.779 31.1209 13.8757 30.4037 14.8244C29.6864 15.7732 28.7667 16.55 27.7113 17.0985C26.656 17.647 25.4917 17.9533 24.303 17.995C23.1144 18.0368 21.9315 17.8131 20.8402 17.34C19.9 15.5573 18.443 14.1003 16.6602 13.16C16.1373 11.9438 15.9244 10.6168 16.0405 9.29809C16.1567 7.97934 16.5983 6.71003 17.3258 5.60396C18.0532 4.49789 19.0438 3.58964 20.2087 2.96065C21.3736 2.33165 22.6764 2.00158 24.0002 2.00001V2.00001ZM24.0002 32C22.843 30.4495 21.2633 29.2655 19.4502 28.59C20.5205 27.4008 21.2869 25.9701 21.6839 24.4202C22.081 22.8703 22.0969 21.2474 21.7302 19.69C23.2194 20.0449 24.7711 20.0449 26.2602 19.69C25.9029 21.2462 25.9235 22.8654 26.3201 24.412C26.7168 25.9587 27.4781 27.3879 28.5402 28.58C26.7307 29.2619 25.155 30.4489 24.0002 32V32ZM4.00024 22C3.99436 20.6549 4.32773 19.3301 4.96952 18.148C5.61132 16.9659 6.5408 15.9647 7.67204 15.237C8.80328 14.5093 10.0997 14.0785 11.4416 13.9846C12.7834 13.8907 14.1272 14.1366 15.3488 14.6996C16.5704 15.2626 17.6303 16.1246 18.4305 17.2058C19.2307 18.2869 19.7454 19.5524 19.9269 20.8852C20.1085 22.218 19.9511 23.575 19.4693 24.8309C18.9874 26.0867 18.1967 27.2007 17.1702 28.07C14.7409 27.7828 12.291 28.4024 10.2902 29.81C8.50859 29.4202 6.91363 28.4333 5.76966 27.0129C4.6257 25.5925 4.0014 23.8238 4.00024 22V22ZM16.0002 46C14.5939 46.0085 13.2103 45.6461 11.9887 44.9493C10.7671 44.2526 9.75071 43.2461 9.04205 42.0314C8.33339 40.8167 7.95747 39.4366 7.95217 38.0303C7.94688 36.624 8.31239 35.2411 9.01187 34.0211C9.71136 32.8011 10.7201 31.787 11.9364 31.081C13.1527 30.3751 14.5336 30.0023 15.94 30.0002C17.3463 29.998 18.7283 30.3667 19.9468 31.0689C21.1652 31.7711 22.177 32.7821 22.8802 34C22.3018 35.2701 22.0026 36.6494 22.0026 38.045C22.0026 39.4406 22.3018 40.8199 22.8802 42.09C22.1709 43.2824 21.1637 44.2698 19.9576 44.9553C18.7514 45.6408 17.3876 46.0008 16.0002 46ZM32.0002 46C30.0323 45.9919 28.1363 45.2587 26.675 43.9407C25.2136 42.6226 24.2894 40.8121 24.079 38.8554C23.8686 36.8987 24.3868 34.9331 25.5345 33.3344C26.6823 31.7358 28.379 30.6163 30.3002 30.19C32.2987 31.5944 34.7442 32.2138 37.1702 31.93C38.4075 32.9921 39.2906 34.4069 39.7013 35.985C40.1121 37.563 40.0308 39.2288 39.4684 40.7593C38.906 42.2899 37.8894 43.612 36.5546 44.5486C35.2199 45.4853 33.6308 45.9917 32.0002 46ZM37.3302 29.89C35.9124 30.1261 34.4572 29.9759 33.1175 29.4552C31.7779 28.9345 30.6032 28.0624 29.7171 26.9307C28.831 25.799 28.2661 24.4495 28.0819 23.024C27.8977 21.5986 28.1009 20.1498 28.6702 18.83C30.4453 17.8954 31.8956 16.445 32.8302 14.67C33.8702 14.2126 34.9956 13.9819 36.1316 13.9933C37.2676 14.0047 38.3882 14.2579 39.4187 14.7361C40.4492 15.2143 41.3661 15.9066 42.1083 16.7667C42.8504 17.6269 43.4009 18.6352 43.723 19.7247C44.0451 20.8141 44.1315 21.9597 43.9764 23.0851C43.8213 24.2106 43.4283 25.2901 42.8235 26.2518C42.2187 27.2135 41.416 28.0353 40.4688 28.6627C39.5216 29.29 38.4517 29.7084 37.3302 29.89V29.89Z" fill="#50565E"></path>
                                             <path d="M15 25H11.43C11.7666 24.3841 11.9614 23.7008 12 23H13C13.2652 23 13.5196 22.8946 13.7071 22.7071C13.8946 22.5195 14 22.2652 14 22C14 21.7347 13.8946 21.4804 13.7071 21.2929C13.5196 21.1053 13.2652 21 13 21H12V19.11C11.99 18.8604 12.066 18.615 12.2152 18.4148C12.3645 18.2145 12.578 18.0716 12.82 18.01C12.9647 17.9835 13.1135 17.9892 13.2557 18.0269C13.3979 18.0645 13.5301 18.133 13.6428 18.2275C13.7555 18.3221 13.8459 18.4403 13.9076 18.5738C13.9694 18.7074 14.0009 18.8529 14 19C14 19.2652 14.1054 19.5195 14.2929 19.7071C14.4804 19.8946 14.7348 20 15 20C17.08 20 15.77 15.5 12.5 16C11.7829 16.1392 11.1384 16.528 10.6807 17.0973C10.223 17.6667 9.98188 18.3797 10 19.11V21H9C8.73478 21 8.48043 21.1053 8.29289 21.2929C8.10536 21.4804 8 21.7347 8 22C8 22.2652 8.10536 22.5195 8.29289 22.7071C8.48043 22.8946 8.73478 23 9 23H10C9.96383 23.4438 9.81425 23.871 9.56561 24.2404C9.31696 24.6099 8.97758 24.9093 8.58 25.11C8.38267 25.2107 8.2244 25.3742 8.13003 25.5746C8.03565 25.7751 8.01053 26.0012 8.05859 26.2175C8.10665 26.4338 8.22519 26.628 8.39558 26.7696C8.56597 26.9112 8.77857 26.9923 9 27H15C15.2652 27 15.5196 26.8946 15.7071 26.7071C15.8946 26.5195 16 26.2652 16 26C16 25.7347 15.8946 25.4804 15.7071 25.2929C15.5196 25.1053 15.2652 25 15 25Z" fill="#2A2E32"></path>
                                             <path d="M39.7102 17.2899C39.6172 17.1962 39.5066 17.1218 39.3848 17.071C39.2629 17.0203 39.1322 16.9941 39.0002 16.9941C38.8682 16.9941 38.7375 17.0203 38.6156 17.071C38.4938 17.1218 38.3831 17.1962 38.2902 17.2899L36.0002 19.5899L33.7102 17.2899C33.5219 17.1016 33.2665 16.9958 33.0002 16.9958C32.7339 16.9958 32.4785 17.1016 32.2902 17.2899C32.1019 17.4782 31.9961 17.7336 31.9961 17.9999C31.9961 18.2662 32.1019 18.5216 32.2902 18.7099L34.5902 20.9999H34.0002C33.735 20.9999 33.4806 21.1053 33.2931 21.2928C33.1055 21.4804 33.0002 21.7347 33.0002 21.9999C33.0002 22.2652 33.1055 22.5195 33.2931 22.707C33.4806 22.8946 33.735 22.9999 34.0002 22.9999H35.0002V23.9999H34.0002C33.735 23.9999 33.4806 24.1053 33.2931 24.2928C33.1055 24.4804 33.0002 24.7347 33.0002 24.9999C33.0002 25.2652 33.1055 25.5195 33.2931 25.707C33.4806 25.8946 33.735 25.9999 34.0002 25.9999H35.0002V26.9999C35.0002 27.2652 35.1055 27.5195 35.2931 27.707C35.4806 27.8946 35.735 27.9999 36.0002 27.9999C36.2654 27.9999 36.5198 27.8946 36.7073 27.707C36.8948 27.5195 37.0002 27.2652 37.0002 26.9999V25.9999H38.0002C38.2654 25.9999 38.5198 25.8946 38.7073 25.707C38.8948 25.5195 39.0002 25.2652 39.0002 24.9999C39.0002 24.7347 38.8948 24.4804 38.7073 24.2928C38.5198 24.1053 38.2654 23.9999 38.0002 23.9999H37.0002V22.9999H38.0002C38.2654 22.9999 38.5198 22.8946 38.7073 22.707C38.8948 22.5195 39.0002 22.2652 39.0002 21.9999C39.0002 21.7347 38.8948 21.4804 38.7073 21.2928C38.5198 21.1053 38.2654 20.9999 38.0002 20.9999H37.4102L39.7102 18.7099C39.8039 18.617 39.8783 18.5064 39.9291 18.3845C39.9798 18.2627 40.006 18.132 40.006 17.9999C40.006 17.8679 39.9798 17.7372 39.9291 17.6154C39.8783 17.4935 39.8039 17.3829 39.7102 17.2899Z" fill="#50565E"></path>
                                          </g>
                                          <defs>
                                             <clipPath id="clip0_803_761">
                                                <rect width="48" height="48" fill="white"></rect>
                                             </clipPath>
                                          </defs>
                                       </svg>
                                    </span>
                                 </div>
                                 <div class="elementor-icon-box-content">
                                    <h3 class="elementor-icon-box-title">
                                       <span  >
                                       Business intelligence					</span>
                                    </h3>
                                    <p class="elementor-icon-box-description">
                                       Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.					
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="elementor-element elementor-element-c15d06d elementor-position-left elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-hidden-desktop elementor-hidden-mobile elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="c15d06d" data-element_type="widget" data-widget_type="icon-box.default">
                           <div class="elementor-widget-container">
                              <div class="elementor-icon-box-wrapper">
                                 <div class="elementor-icon-box-icon">
                                    <span class="elementor-icon elementor-animation-" >
                                       <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                                          <g clip-path="url(#clip0_803_730)">
                                             <path d="M30 45H18C18.2854 43.8579 18.9442 42.844 19.8719 42.1192C20.7996 41.3945 21.9428 41.0006 23.12 41H24.88C26.0572 41.0006 27.2004 41.3945 28.1281 42.1192C29.0558 42.844 29.7146 43.8579 30 45V45Z" fill="#2A2E32"></path>
                                             <path d="M31 21H17L20 17H28L31 21Z" fill="#2A2E32"></path>
                                             <path d="M22 13H20L18.78 12.19C18.2321 11.8244 17.7829 11.3292 17.4724 10.7482C17.1618 10.1673 16.9996 9.51871 17 8.86V3H18C19.0609 3 20.0783 3.42143 20.8284 4.17157C21.5786 4.92172 22 5.93913 22 7V13Z" fill="#2A2E32"></path>
                                             <path d="M26 13H28L29.22 12.19C29.7679 11.8244 30.2171 11.3292 30.5277 10.7482C30.8382 10.1673 31.0004 9.51871 31 8.86V3H30C28.9391 3 27.9217 3.42143 27.1716 4.17157C26.4214 4.92172 26 5.93913 26 7V13Z" fill="#2A2E32"></path>
                                             <path d="M13 26H1V36H13V26Z" fill="#2A2E32"></path>
                                             <path d="M35 36H47V26H35V36Z" fill="#2A2E32"></path>
                                             <path d="M25 48H23L22 46H26L25 48Z" fill="#2A2E32"></path>
                                             <path d="M21 38C21.5523 38 22 37.5523 22 37C22 36.4477 21.5523 36 21 36C20.4477 36 20 36.4477 20 37C20 37.5523 20.4477 38 21 38Z" fill="#2A2E32"></path>
                                             <path d="M27 38C27.5523 38 28 37.5523 28 37C28 36.4477 27.5523 36 27 36C26.4477 36 26 36.4477 26 37C26 37.5523 26.4477 38 27 38Z" fill="#2A2E32"></path>
                                             <path d="M27 24H21C20.4477 24 20 24.4477 20 25V27C20 27.5523 20.4477 28 21 28H27C27.5523 28 28 27.5523 28 27V25C28 24.4477 27.5523 24 27 24Z" fill="#C44FAB"></path>
                                             <path d="M47 25H35C34.7348 25 34.4804 25.1054 34.2929 25.2929C34.1054 25.4804 34 25.7348 34 26V27H32C32 20.45 32 20.86 31.89 20.57C31.78 20.28 32.2 20.93 29 16.67V13.54L29.77 13.02C30.4555 12.5638 31.0177 11.9454 31.4068 11.2197C31.7958 10.494 31.9996 9.68341 32 8.86V1C32 0.734784 31.8946 0.48043 31.7071 0.292893C31.5196 0.105357 31.2652 0 31 0C30.7348 0 30.4804 0.105357 30.2929 0.292893C30.1054 0.48043 30 0.734784 30 1V2C28.6739 2 27.4021 2.52678 26.4645 3.46447C25.5268 4.40215 25 5.67392 25 7V12H23V7C23 6.34339 22.8707 5.69321 22.6194 5.08658C22.3681 4.47995 21.9998 3.92876 21.5355 3.46447C21.0712 3.00017 20.52 2.63188 19.9134 2.3806C19.3068 2.12933 18.6566 2 18 2V1C18 0.734784 17.8946 0.48043 17.7071 0.292893C17.5196 0.105357 17.2652 0 17 0C16.7348 0 16.4804 0.105357 16.2929 0.292893C16.1054 0.48043 16 0.734784 16 1V8.86C16.0037 9.68003 16.2091 10.4866 16.5979 11.2085C16.9868 11.9305 17.5473 12.5457 18.23 13L19 13.52V16.65L16.2 20.4C15.93 20.74 16 21.05 16 27H14V26C14 25.7348 13.8946 25.4804 13.7071 25.2929C13.5196 25.1054 13.2652 25 13 25H1C0.734784 25 0.48043 25.1054 0.292893 25.2929C0.105357 25.4804 0 25.7348 0 26L0 36C0 36.2652 0.105357 36.5196 0.292893 36.7071C0.48043 36.8946 0.734784 37 1 37H13C13.2652 37 13.5196 36.8946 13.7071 36.7071C13.8946 36.5196 14 36.2652 14 36V35H16V39C15.9925 39.7265 16.2489 40.431 16.7215 40.9827C17.1942 41.5344 17.851 41.8959 18.57 42C17.8178 42.7695 17.277 43.7202 17 44.76C16.9629 44.9097 16.961 45.066 16.9943 45.2166C17.0277 45.3672 17.0954 45.5081 17.1923 45.6282C17.2891 45.7483 17.4124 45.8443 17.5525 45.9088C17.6927 45.9733 17.8458 46.0045 18 46H30C30.1542 46.0045 30.3073 45.9733 30.4475 45.9088C30.5876 45.8443 30.7109 45.7483 30.8077 45.6282C30.9046 45.5081 30.9723 45.3672 31.0057 45.2166C31.039 45.066 31.0371 44.9097 31 44.76C30.723 43.7202 30.1822 42.7695 29.43 42C30.149 41.8959 30.8058 41.5344 31.2785 40.9827C31.7511 40.431 32.0075 39.7265 32 39V35H34V36C34 36.2652 34.1054 36.5196 34.2929 36.7071C34.4804 36.8946 34.7348 37 35 37H47C47.2652 37 47.5196 36.8946 47.7071 36.7071C47.8946 36.5196 48 36.2652 48 36V26C48 25.7348 47.8946 25.4804 47.7071 25.2929C47.5196 25.1054 47.2652 25 47 25ZM4 35H2V32H4V35ZM4 30H2V27H4V30ZM8 35H6V32H8V35ZM8 30H6V27H8V30ZM12 35H10V32H12V35ZM12 30H10V27H12V30ZM16 33H14V29H16V33ZM27 7C27 6.20435 27.3161 5.44129 27.8787 4.87868C28.4413 4.31607 29.2044 4 30 4V8.86C30.0002 9.35491 29.8779 9.84217 29.6441 10.2784C29.4103 10.7146 29.0722 11.0862 28.66 11.36L27.66 12H27V7ZM27 14V16H21V14H27ZM18 8.86V4C18.7956 4 19.5587 4.31607 20.1213 4.87868C20.6839 5.44129 21 6.20435 21 7V12H20.3L19.3 11.36C18.8952 11.0816 18.5649 10.708 18.3382 10.2721C18.1115 9.83621 17.9954 9.3513 18 8.86V8.86ZM20.5 18H27.5L29 20H19L20.5 18ZM19.5 44C19.8853 43.3879 20.4194 42.8835 21.0524 42.5337C21.6854 42.184 22.3968 42.0004 23.12 42H24.88C25.6032 42.0004 26.3146 42.184 26.9476 42.5337C27.5806 42.8835 28.1147 43.3879 28.5 44H19.5ZM30 39C30 39.2652 29.8946 39.5196 29.7071 39.7071C29.5196 39.8946 29.2652 40 29 40H19C18.7348 40 18.4804 39.8946 18.2929 39.7071C18.1054 39.5196 18 39.2652 18 39V22H30V39ZM34 33H32V29H34V33ZM38 35H36V32H38V35ZM38 30H36V27H38V30ZM42 35H40V32H42V35ZM42 30H40V27H42V30ZM46 35H44V32H46V35ZM46 30H44V27H46V30Z" fill="#50565E"></path>
                                          </g>
                                          <defs>
                                             <clipPath id="clip0_803_730">
                                                <rect width="48" height="48" fill="white"></rect>
                                             </clipPath>
                                          </defs>
                                       </svg>
                                    </span>
                                 </div>
                                 <div class="elementor-icon-box-content">
                                    <h3 class="elementor-icon-box-title">
                                       <span  >
                                       Machine Learning Agency					</span>
                                    </h3>
                                    <p class="elementor-icon-box-description">
                                       Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.					
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="elementor-element elementor-element-7e92901 elementor-position-left elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-hidden-desktop elementor-hidden-mobile elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="7e92901" data-element_type="widget" data-widget_type="icon-box.default">
                           <div class="elementor-widget-container">
                              <div class="elementor-icon-box-wrapper">
                                 <div class="elementor-icon-box-icon">
                                    <span class="elementor-icon elementor-animation-" >
                                       <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                                          <path d="M43.0001 36.92V47H5.00012V36.92C4.99149 35.5271 5.46773 34.1747 6.34716 33.0946C7.2266 32.0144 8.45444 31.2739 9.82011 31L20.0001 29L22.4401 32C22.6275 32.2336 22.865 32.4221 23.135 32.5516C23.405 32.6812 23.7006 32.7484 24.0001 32.7484C24.2996 32.7484 24.5952 32.6812 24.8652 32.5516C25.1352 32.4221 25.3727 32.2336 25.5601 32L28.0001 29L38.1801 31C39.5458 31.2739 40.7736 32.0144 41.6531 33.0946C42.5325 34.1747 43.0087 35.5271 43.0001 36.92Z" fill="#2A2E32"></path>
                                          <path d="M35 19H33V13H35C35.5304 13 36.0391 13.2107 36.4142 13.5858C36.7893 13.9609 37 14.4696 37 15V17C37 17.5304 36.7893 18.0391 36.4142 18.4142C36.0391 18.7893 35.5304 19 35 19V19Z" fill="#2A2E32"></path>
                                          <path d="M24 13H27C27.5304 13 28.0391 13.2107 28.4142 13.5858C28.7893 13.9609 29 14.4696 29 15V17C29 17.5304 28.7893 18.0391 28.4142 18.4142C28.0391 18.7893 27.5304 19 27 19H24V13Z" fill="#2A2E32"></path>
                                          <path d="M32.94 8H31L30 10L28 9V6L24 5V1H25C26.949 0.999331 28.8312 1.71019 30.2932 2.99909C31.7552 4.28799 32.6964 6.06627 32.94 8Z" fill="#2A2E32"></path>
                                          <path d="M24 0V10.9C20.68 12.17 18.33 12 15 12V8C15 5.87827 15.8429 3.84344 17.3431 2.34315C18.8434 0.842855 20.8783 0 23 0L24 0Z" fill="#C44FAB"></path>
                                          <path d="M38.38 30.06L29 28.18V27.18C30.1112 26.4041 31.1192 25.4901 32 24.46C33.187 23.2661 33.8981 21.6805 34 20H35C35.7957 20 36.5587 19.6839 37.1213 19.1213C37.6839 18.5587 38 17.7956 38 17V15C38 14.2044 37.6839 13.4413 37.1213 12.8787C36.5587 12.3161 35.7957 12 35 12H34V9C34 6.61305 33.0518 4.32387 31.364 2.63604C29.6761 0.948212 27.387 0 25 0L24 0C23.7348 0 23.4804 0.105357 23.2929 0.292893C23.1054 0.48043 23 0.734784 23 1V25.85C21.69 25.5 21.26 24.85 19.46 23.05C18.996 22.5848 18.6282 22.0327 18.3777 21.4253C18.1272 20.8179 17.9988 20.167 18 19.51V12H16.17C15.1516 11.9798 14.1619 12.3376 13.3918 13.0043C12.6217 13.6709 12.1259 14.5992 12 15.61C11.9454 16.1671 12.0084 16.7295 12.1848 17.2607C12.3612 17.792 12.6472 18.2803 13.0242 18.6941C13.4013 19.1079 13.8609 19.4379 14.3735 19.6629C14.8861 19.8878 15.4402 20.0027 16 20C16.2 22.8 17.68 24.11 19 25.41V28.18L9.63 30.05C8.04168 30.367 6.61242 31.2249 5.58581 32.4777C4.5592 33.7304 3.99876 35.3004 4 36.92V47C4 47.2652 4.10536 47.5196 4.2929 47.7071C4.48043 47.8946 4.73479 48 5 48C5.26522 48 5.51957 47.8946 5.70711 47.7071C5.89464 47.5196 6 47.2652 6 47V36.92C5.99514 35.7639 6.39106 34.6419 7.12035 33.7448C7.84965 32.8478 8.86727 32.2312 10 32L19.6 30.1L21.66 32.67C21.9411 33.0204 22.2973 33.3032 22.7023 33.4975C23.1073 33.6918 23.5508 33.7927 24 33.7927C24.4492 33.7927 24.8927 33.6918 25.2977 33.4975C25.7027 33.3032 26.0589 33.0204 26.34 32.67L28.4 30.1L38 32C39.1294 32.2305 40.1444 32.8442 40.8733 33.7371C41.6022 34.63 42.0002 35.7473 42 36.9V47C42 47.2652 42.1054 47.5196 42.2929 47.7071C42.4804 47.8946 42.7348 48 43 48C43.2652 48 43.5196 47.8946 43.7071 47.7071C43.8946 47.5196 44 47.2652 44 47V36.92C43.9994 35.3035 43.4393 33.737 42.4149 32.4865C41.3905 31.2361 39.9648 30.3787 38.38 30.06V30.06ZM34 14H35C35.2652 14 35.5196 14.1054 35.7071 14.2929C35.8946 14.4804 36 14.7348 36 15V17C36 17.2652 35.8946 17.5196 35.7071 17.7071C35.5196 17.8946 35.2652 18 35 18H34V14ZM16 18C15.4696 18 14.9609 17.7893 14.5858 17.4142C14.2107 17.0391 14 16.5304 14 16C14 15.4696 14.2107 14.9609 14.5858 14.5858C14.9609 14.2107 15.4696 14 16 14V18ZM25 2C26.5078 1.99961 27.9754 2.48607 29.1844 3.38698C30.3934 4.28788 31.2792 5.55509 31.71 7H31C30.8153 7.00056 30.6344 7.05224 30.4773 7.14932C30.3202 7.2464 30.1931 7.38509 30.11 7.55L29.55 8.66L29 8.38V6C29.0067 5.77157 28.9349 5.54774 28.7966 5.36579C28.6583 5.18385 28.4619 5.05475 28.24 5L25 4.22V2ZM25 6.28L27 6.78V9C27.0006 9.18467 27.0522 9.36557 27.1493 9.52267C27.2464 9.67976 27.3851 9.8069 27.55 9.89L29.55 10.89C29.7862 11.0086 30.0597 11.0289 30.3108 10.9465C30.5619 10.864 30.7701 10.6855 30.89 10.45L31.62 9H32V15H30C30 14.2044 29.6839 13.4413 29.1213 12.8787C28.5587 12.3161 27.7957 12 27 12H25V6.28ZM25 14H27C27.2652 14 27.5196 14.1054 27.7071 14.2929C27.8946 14.4804 28 14.7348 28 15V17C28 17.2652 27.8946 17.5196 27.7071 17.7071C27.5196 17.8946 27.2652 18 27 18H25V14ZM27 28.65L24.78 31.42C24.6863 31.5368 24.5676 31.6311 24.4326 31.6958C24.2976 31.7606 24.1497 31.7942 24 31.7942C23.8503 31.7942 23.7024 31.7606 23.5674 31.6958C23.4324 31.6311 23.3137 31.5368 23.22 31.42L21 28.65V27.16C22.67 28.16 23.91 28 26 28C26.3351 27.9953 26.6694 27.9652 27 27.91V28.65ZM25 26V20H27C27.7957 20 28.5587 19.6839 29.1213 19.1213C29.6839 18.5587 30 17.7956 30 17H32V19.51C32.0012 20.167 31.8728 20.8179 31.6223 21.4253C31.3718 22.0327 31.004 22.5848 30.54 23.05C28 25.61 28 26 25 26Z" fill="#50565E"></path>
                                          <path d="M21 17C21.5523 17 22 16.5523 22 16C22 15.4477 21.5523 15 21 15C20.4477 15 20 15.4477 20 16C20 16.5523 20.4477 17 21 17Z" fill="#2A2E32"></path>
                                          <path d="M35 38C34.7348 38 34.4804 38.1054 34.2929 38.2929C34.1054 38.4804 34 38.7348 34 39V47C34 47.2652 34.1054 47.5196 34.2929 47.7071C34.4804 47.8946 34.7348 48 35 48C35.2652 48 35.5196 47.8946 35.7071 47.7071C35.8946 47.5196 36 47.2652 36 47V39C36 38.7348 35.8946 38.4804 35.7071 38.2929C35.5196 38.1054 35.2652 38 35 38Z" fill="#50565E"></path>
                                          <path d="M13 38C12.7348 38 12.4804 38.1054 12.2929 38.2929C12.1054 38.4804 12 38.7348 12 39V47C12 47.2652 12.1054 47.5196 12.2929 47.7071C12.4804 47.8946 12.7348 48 13 48C13.2652 48 13.5196 47.8946 13.7071 47.7071C13.8946 47.5196 14 47.2652 14 47V39C14 38.7348 13.8946 38.4804 13.7071 38.2929C13.5196 38.1054 13.2652 38 13 38Z" fill="#50565E"></path>
                                          <path d="M31 39H27C26.7348 39 26.4804 39.1054 26.2929 39.2929C26.1054 39.4804 26 39.7348 26 40C26 40.2652 26.1054 40.5196 26.2929 40.7071C26.4804 40.8946 26.7348 41 27 41H31C31.2652 41 31.5196 40.8946 31.7071 40.7071C31.8946 40.5196 32 40.2652 32 40C32 39.7348 31.8946 39.4804 31.7071 39.2929C31.5196 39.1054 31.2652 39 31 39Z" fill="#50565E"></path>
                                       </svg>
                                    </span>
                                 </div>
                                 <div class="elementor-icon-box-content">
                                    <h3 class="elementor-icon-box-title">
                                       <span  >
                                       User experience design					</span>
                                    </h3>
                                    <p class="elementor-icon-box-description">
                                       Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.					
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <div class="elementor-element elementor-element-efbc6ec elementor-widget__width-initial elementor-absolute elementor-align-center elementor-widget elementor-widget-lottie" data-id="efbc6ec" data-element_type="widget" data-settings="{&quot;source_json&quot;:{&quot;url&quot;:&quot;https:\/\/elementor.deverust.com\/techvisio\/wp-content\/uploads\/sites\/20\/2022\/03\/lf20_pbmohvcz.json&quot;,&quot;id&quot;:1359,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;loop&quot;:&quot;yes&quot;,&quot;_position&quot;:&quot;absolute&quot;,&quot;source&quot;:&quot;media_file&quot;,&quot;caption_source&quot;:&quot;none&quot;,&quot;link_to&quot;:&quot;none&quot;,&quot;trigger&quot;:&quot;arriving_to_viewport&quot;,&quot;viewport&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;play_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;start_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;0&quot;,&quot;sizes&quot;:[]},&quot;end_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;100&quot;,&quot;sizes&quot;:[]},&quot;renderer&quot;:&quot;svg&quot;}" data-widget_type="lottie.default">
               <div class="elementor-widget-container">
                  <div class="e-lottie__container">
                     <div class="e-lottie__animation"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- section our CLIENT -->
<!-- <section class="elementor-section elementor-top-section elementor-element elementor-element-ba424da elementor-section-height-min-height elementor-section-items-stretch elementor-section-boxed elementor-section-height-default" data-id="ba424da" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
   <div class="elementor-container elementor-column-gap-wider">
      <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-dbf7d54" data-id="dbf7d54" data-element_type="column">
         <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-b9433a3 elementor-widget__width-initial elementor-align-center elementor-widget elementor-widget-lottie" data-id="b9433a3" data-element_type="widget" data-settings="{&quot;source_json&quot;:{&quot;url&quot;:&quot;https:\/\/elementor.deverust.com\/techvisio\/wp-content\/uploads\/sites\/20\/2022\/03\/lf20_vsg5kswn.json&quot;,&quot;id&quot;:1638,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;loop&quot;:&quot;yes&quot;,&quot;source&quot;:&quot;media_file&quot;,&quot;caption_source&quot;:&quot;none&quot;,&quot;link_to&quot;:&quot;none&quot;,&quot;trigger&quot;:&quot;arriving_to_viewport&quot;,&quot;viewport&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;play_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;start_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;0&quot;,&quot;sizes&quot;:[]},&quot;end_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;100&quot;,&quot;sizes&quot;:[]},&quot;renderer&quot;:&quot;svg&quot;}" data-widget_type="lottie.default">
               <div class="elementor-widget-container">
                  <div class="e-lottie__container">
                     <div class="e-lottie__animation"></div>
                  </div>
               </div>
            </div>
            <div class="elementor-element elementor-element-7c8f7fc elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="7c8f7fc" data-element_type="widget" data-widget_type="heading.default">
               <div class="elementor-widget-container">
                  <h2 class="elementor-heading-title elementor-size-default">Testimonials</h2>
               </div>
            </div>
            <div class="elementor-element elementor-element-f056e4c elementor-widget elementor-widget-heading" data-id="f056e4c" data-element_type="widget" data-widget_type="heading.default">
               <div class="elementor-widget-container">
                  <h2 class="elementor-heading-title elementor-size-default">Thousand Stories of Our Customers.</h2>
               </div>
            </div>
            <div class="elementor-element elementor-element-e15351e elementor-widget elementor-widget-text-editor" data-id="e15351e" data-element_type="widget" data-widget_type="text-editor.default">
               <div class="elementor-widget-container">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
               </div>
            </div>
            <div class="elementor-element elementor-element-55613cb elementor-widget__width-auto elementor-widget elementor-widget-button" data-id="55613cb" data-element_type="widget" data-widget_type="button.default">
               <div class="elementor-widget-container">
                  <div class="elementor-button-wrapper">
                     <a href="#" class="elementor-button-link elementor-button elementor-size-lg" role="button">
                     <span class="elementor-button-content-wrapper">
                     <span class="elementor-button-text">Get In Touch</span>
                     </span>
                     </a>
                  </div>
               </div>
            </div>
            <div class="elementor-element elementor-element-a5b4a83 elementor-widget__width-auto elementor-widget elementor-widget-button" data-id="a5b4a83" data-element_type="widget" data-widget_type="button.default">
               <div class="elementor-widget-container">
                  <div class="elementor-button-wrapper">
                     <a href="#" class="elementor-button-link elementor-button elementor-size-lg" role="button">
                     <span class="elementor-button-content-wrapper">
                     <span class="elementor-button-text">More Testimonials</span>
                     </span>
                     </a>
                  </div>
               </div>
            </div>
            <div class="elementor-element elementor-element-14bba07 elementor-position-left elementor-vertical-align-middle elementor-widget__width-initial elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-image-box" data-id="14bba07" data-element_type="widget" data-widget_type="image-box.default">
               <div class="elementor-widget-container">
                  <div class="elementor-image-box-wrapper">
                     <figure class="elementor-image-box-img"><img width="647" height="647" src="wp-content/uploads/sites/20/2022/03/amazed-man-with-opened-mouth-pointing-away-3ABC46M.jpg" class="attachment-full size-full" alt="" loading="lazy" /></figure>
                     <div class="elementor-image-box-content">
                        <h3 class="elementor-image-box-title">Nerva Gualo</h3>
                        <p class="elementor-image-box-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="elementor-element elementor-element-4ba397c elementor-position-left elementor-vertical-align-middle elementor-widget__width-initial elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-image-box" data-id="4ba397c" data-element_type="widget" data-widget_type="image-box.default">
               <div class="elementor-widget-container">
                  <div class="elementor-image-box-wrapper">
                     <figure class="elementor-image-box-img"><img width="1857" height="1857" src="wp-content/uploads/sites/20/2022/03/woman-9S9BGA9.jpg" class="attachment-full size-full" alt="" loading="lazy" /></figure>
                     <div class="elementor-image-box-content">
                        <h3 class="elementor-image-box-title">Angela Blyhte </h3>
                        <p class="elementor-image-box-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="elementor-element elementor-element-35701eb elementor-position-left elementor-vertical-align-middle elementor-widget__width-initial elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-image-box" data-id="35701eb" data-element_type="widget" data-widget_type="image-box.default">
               <div class="elementor-widget-container">
                  <div class="elementor-image-box-wrapper">
                     <figure class="elementor-image-box-img"><img width="1772" height="1772" src="wp-content/uploads/sites/20/2022/03/smiling-adult-man-in-winter-ZNYPVD9.jpg" class="attachment-full size-full" alt="" loading="lazy" /></figure>
                     <div class="elementor-image-box-content">
                        <h3 class="elementor-image-box-title">Edric Floyd </h3>
                        <p class="elementor-image-box-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="elementor-element elementor-element-99033fb elementor-position-left elementor-vertical-align-middle elementor-widget__width-initial elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-image-box" data-id="99033fb" data-element_type="widget" data-widget_type="image-box.default">
               <div class="elementor-widget-container">
                  <div class="elementor-image-box-wrapper">
                     <figure class="elementor-image-box-img"><img width="487" height="487" src="wp-content/uploads/sites/20/2022/03/cropped-cheerful-businessman-GM4STHG.jpg" class="attachment-full size-full" alt="" loading="lazy" /></figure>
                     <div class="elementor-image-box-content">
                        <h3 class="elementor-image-box-title">George Ebner </h3>
                        <p class="elementor-image-box-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-82e3a1e elementor-hidden-mobile" data-id="82e3a1e" data-element_type="column">
         <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-d40c7c8 elementor-hidden-desktop elementor-widget elementor-widget-spacer" data-id="d40c7c8" data-element_type="widget" data-widget_type="spacer.default">
               <div class="elementor-widget-container">
                  <div class="elementor-spacer">
                     <div class="elementor-spacer-inner"></div>
                  </div>
               </div>
            </div>
            <div class="elementor-element elementor-element-a7ba9c0 elementor-position-left elementor-vertical-align-middle elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image-box" data-id="a7ba9c0" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image-box.default">
               <div class="elementor-widget-container">
                  <div class="elementor-image-box-wrapper">
                     <figure class="elementor-image-box-img"><img width="647" height="647" src="wp-content/uploads/sites/20/2022/03/amazed-man-with-opened-mouth-pointing-away-3ABC46M.jpg" class="attachment-full size-full" alt="" loading="lazy" /></figure>
                     <div class="elementor-image-box-content">
                        <h3 class="elementor-image-box-title">Nerva Gualo</h3>
                        <p class="elementor-image-box-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="elementor-element elementor-element-97bb811 elementor-position-left elementor-vertical-align-middle elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image-box" data-id="97bb811" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image-box.default">
               <div class="elementor-widget-container">
                  <div class="elementor-image-box-wrapper">
                     <figure class="elementor-image-box-img"><img width="1857" height="1857" src="wp-content/uploads/sites/20/2022/03/woman-9S9BGA9.jpg" class="attachment-full size-full" alt="" loading="lazy" /></figure>
                     <div class="elementor-image-box-content">
                        <h3 class="elementor-image-box-title">Angela Blyhte </h3>
                        <p class="elementor-image-box-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="elementor-element elementor-element-79520be elementor-position-left elementor-vertical-align-middle elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image-box" data-id="79520be" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image-box.default">
               <div class="elementor-widget-container">
                  <div class="elementor-image-box-wrapper">
                     <figure class="elementor-image-box-img"><img width="1772" height="1772" src="wp-content/uploads/sites/20/2022/03/smiling-adult-man-in-winter-ZNYPVD9.jpg" class="attachment-full size-full" alt="" loading="lazy" /></figure>
                     <div class="elementor-image-box-content">
                        <h3 class="elementor-image-box-title">Edric Floyd </h3>
                        <p class="elementor-image-box-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="elementor-element elementor-element-bf815f9 elementor-position-left elementor-vertical-align-middle elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image-box" data-id="bf815f9" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image-box.default">
               <div class="elementor-widget-container">
                  <div class="elementor-image-box-wrapper">
                     <figure class="elementor-image-box-img"><img width="401" height="401" src="wp-content/uploads/sites/20/2022/03/creative-designer-in-office-7KUFA5B.jpg" class="attachment-full size-full" alt="" loading="lazy" /></figure>
                     <div class="elementor-image-box-content">
                        <h3 class="elementor-image-box-title">Kelvin Haven </h3>
                        <p class="elementor-image-box-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="elementor-element elementor-element-e250c58 elementor-position-left elementor-vertical-align-middle elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image-box" data-id="e250c58" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image-box.default">
               <div class="elementor-widget-container">
                  <div class="elementor-image-box-wrapper">
                     <figure class="elementor-image-box-img"><img width="1009" height="1009" src="wp-content/uploads/sites/20/2022/03/young-trendy-man-winking-with-smile-as-if-having-f-CU2TFSR.jpg" class="attachment-full size-full" alt="" loading="lazy" /></figure>
                     <div class="elementor-image-box-content">
                        <h3 class="elementor-image-box-title">Addy Bavol </h3>
                        <p class="elementor-image-box-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="elementor-element elementor-element-5510c31 elementor-position-left elementor-vertical-align-middle elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image-box" data-id="5510c31" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image-box.default">
               <div class="elementor-widget-container">
                  <div class="elementor-image-box-wrapper">
                     <figure class="elementor-image-box-img"><img width="1186" height="1186" src="wp-content/uploads/sites/20/2022/03/businessman-portrait-in-a-studio-WUFDDGT.jpg" class="attachment-full size-full" alt="" loading="lazy" /></figure>
                     <div class="elementor-image-box-content">
                        <h3 class="elementor-image-box-title">Blackton Britney</h3>
                        <p class="elementor-image-box-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="elementor-element elementor-element-371d05f elementor-position-left elementor-vertical-align-middle elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image-box" data-id="371d05f" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image-box.default">
               <div class="elementor-widget-container">
                  <div class="elementor-image-box-wrapper">
                     <figure class="elementor-image-box-img"><img width="590" height="590" src="wp-content/uploads/sites/20/2022/03/man-working-at-office-HZ2SC8X.jpg" class="attachment-full size-full" alt="" loading="lazy" /></figure>
                     <div class="elementor-image-box-content">
                        <h3 class="elementor-image-box-title">Garth Hugo </h3>
                        <p class="elementor-image-box-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="elementor-element elementor-element-b554a06 elementor-position-left elementor-vertical-align-middle elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image-box" data-id="b554a06" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image-box.default">
               <div class="elementor-widget-container">
                  <div class="elementor-image-box-wrapper">
                     <figure class="elementor-image-box-img"><img width="487" height="487" src="wp-content/uploads/sites/20/2022/03/cropped-cheerful-businessman-GM4STHG.jpg" class="attachment-full size-full" alt="" loading="lazy" /></figure>
                     <div class="elementor-image-box-content">
                        <h3 class="elementor-image-box-title">George Ebner </h3>
                        <p class="elementor-image-box-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="elementor-element elementor-element-27ed94a elementor-position-left elementor-vertical-align-middle elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image-box" data-id="27ed94a" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image-box.default">
               <div class="elementor-widget-container">
                  <div class="elementor-image-box-wrapper">
                     <figure class="elementor-image-box-img"><img width="528" height="528" src="wp-content/uploads/sites/20/2022/03/woman-portrait-indoors-GJ96G46.jpg" class="attachment-full size-full" alt="" loading="lazy" /></figure>
                     <div class="elementor-image-box-content">
                        <h3 class="elementor-image-box-title">Callie Dawn </h3>
                        <p class="elementor-image-box-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="elementor-element elementor-element-204d354 elementor-position-left elementor-vertical-align-middle elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image-box" data-id="204d354" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image-box.default">
               <div class="elementor-widget-container">
                  <div class="elementor-image-box-wrapper">
                     <figure class="elementor-image-box-img"><img width="579" height="579" src="wp-content/uploads/sites/20/2022/03/cropped-mature-arabian-businessman-freelancer-financial-ad-M2AZ47H.jpg" class="attachment-full size-full" alt="" loading="lazy" /></figure>
                     <div class="elementor-image-box-content">
                        <h3 class="elementor-image-box-title">Carly Dariel </h3>
                        <p class="elementor-image-box-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="elementor-element elementor-element-513351e elementor-position-left elementor-vertical-align-middle elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image-box" data-id="513351e" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image-box.default">
               <div class="elementor-widget-container">
                  <div class="elementor-image-box-wrapper">
                     <figure class="elementor-image-box-img"><img width="1888" height="1888" src="wp-content/uploads/sites/20/2022/03/young-adult-man-millennial-at-the-seaside-beach-NVHXJQ8.jpg" class="attachment-full size-full" alt="" loading="lazy" /></figure>
                     <div class="elementor-image-box-content">
                        <h3 class="elementor-image-box-title">Iefan Jorell </h3>
                        <p class="elementor-image-box-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="elementor-element elementor-element-442c5fa elementor-position-left elementor-vertical-align-middle elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image-box" data-id="442c5fa" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image-box.default">
               <div class="elementor-widget-container">
                  <div class="elementor-image-box-wrapper">
                     <figure class="elementor-image-box-img"><img width="1890" height="1890" src="wp-content/uploads/sites/20/2022/03/woman-LEKTAVD.jpg" class="attachment-full size-full" alt="" loading="lazy" /></figure>
                     <div class="elementor-image-box-content">
                        <h3 class="elementor-image-box-title">Edrie Fonda </h3>
                        <p class="elementor-image-box-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </section> -->
<section class="elementor-section elementor-top-section elementor-element elementor-element-224be63 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="224be63" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
   <div class="elementor-container elementor-column-gap-wider">
      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-690c6eb" data-id="690c6eb" data-element_type="column">
         <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-31174b4 elementor-widget__width-initial elementor-align-center elementor-widget elementor-widget-lottie" data-id="31174b4" data-element_type="widget" data-settings="{&quot;source_json&quot;:{&quot;url&quot;:&quot;https:\/\/elementor.deverust.com\/techvisio\/wp-content\/uploads\/sites\/20\/2022\/03\/lf20_vsg5kswn.json&quot;,&quot;id&quot;:1638,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;loop&quot;:&quot;yes&quot;,&quot;source&quot;:&quot;media_file&quot;,&quot;caption_source&quot;:&quot;none&quot;,&quot;link_to&quot;:&quot;none&quot;,&quot;trigger&quot;:&quot;arriving_to_viewport&quot;,&quot;viewport&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;play_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;start_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;0&quot;,&quot;sizes&quot;:[]},&quot;end_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;100&quot;,&quot;sizes&quot;:[]},&quot;renderer&quot;:&quot;svg&quot;}" data-widget_type="lottie.default">
               <div class="elementor-widget-container">
                  <div class="e-lottie__container">
                     <div class="e-lottie__animation"></div>
                  </div>
               </div>
            </div>
            <div class="elementor-element elementor-element-4d06915 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="4d06915" data-element_type="widget" data-widget_type="heading.default">
               <div class="elementor-widget-container">
                  <h2 class="elementor-heading-title elementor-size-default">Produk Kami</h2>
               </div>
            </div>
            <div class="elementor-element elementor-element-b273545 elementor-widget elementor-widget-heading" data-id="b273545" data-element_type="widget" data-widget_type="heading.default">
               <div class="elementor-widget-container">
                  <h2 class="elementor-heading-title elementor-size-default">Berbagai Layanan Terbaik Kami untuk Anda</h2>
               </div>
            </div>
            <section class="elementor-section elementor-inner-section elementor-element elementor-element-7bdb2fc elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7bdb2fc" data-element_type="section">
               <div class="elementor-container elementor-column-gap-no">
                  <!-- loop here -->
                  <?php
                     $users = [
                     	'wp-content/uploads/sites/20/2022/03/hardware.png', 
                     	'wp-content/uploads/sites/20/2022/03/software.png'];
                     $i = 0;
                     $query1234      = $db->query("SELECT nama_kategori FROM kategori_produk");
                     while( $rowkategoriproduct = $query1234->fetch_assoc() ){
                     	
                     ?>
                  <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-ae8bf1e" data-id="ae8bf1e" data-element_type="column">
                     <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-7746943 elementor-cta--skin-cover elementor-cta--valign-bottom elementor-animated-content elementor-bg-transform elementor-bg-transform-zoom-in elementor-widget elementor-widget-call-to-action" data-id="7746943" data-element_type="widget" data-widget_type="call-to-action.default">
                           <div class="elementor-widget-container">
                              <div class="elementor-cta">
                                 <div class="elementor-cta__bg-wrapper">
                                    <div class="elementor-cta__bg elementor-bg" style="background-image: url(<?= $users[$i]; $i++; ?>);"></div>
                                    <div class="elementor-cta__bg-overlay"></div>
                                 </div>
                                 <div class="elementor-cta__content">
                                    <h2 class="elementor-cta__title elementor-cta__content-item elementor-content-item elementor-animated-item--move-up">
                                       <?= $rowkategoriproduct['nama_kategori']; ?>
                                    </h2>
                                    <!-- <div class="elementor-cta__description elementor-cta__content-item elementor-content-item elementor-animated-item--move-up"> -->
                                    <!--text here  -->
                                    <!-- </div> -->
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php } ?>
                  <!-- end here -->
                  <!-- <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-44f40b2" data-id="44f40b2" data-element_type="column">
                     <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-e07c680 elementor-cta--skin-cover elementor-cta--valign-bottom elementor-animated-content elementor-bg-transform elementor-bg-transform-zoom-in elementor-widget elementor-widget-call-to-action" data-id="e07c680" data-element_type="widget" data-widget_type="call-to-action.default">
                           <div class="elementor-widget-container">
                              <div class="elementor-cta">
                                 <div class="elementor-cta__bg-wrapper">
                                    <div class="elementor-cta__bg elementor-bg" style="background-image: url(wp-content/uploads/sites/20/2022/03/african-american-woman-in-beige-suit-portrait-L73F7LP-684x1024.jpg);"></div>
                                    <div class="elementor-cta__bg-overlay"></div>
                                 </div>
                                 <div class="elementor-cta__content">
                                    <h2 class="elementor-cta__title elementor-cta__content-item elementor-content-item elementor-animated-item--move-up">Bestie Clann</h2>
                                    <div class="elementor-cta__description elementor-cta__content-item elementor-content-item elementor-animated-item--move-up">
                                       Business Intelligence 					
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     </div> -->
                  <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-4dc2dde" data-id="4dc2dde" data-element_type="column">
                     <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-94891a2 elementor-widget elementor-widget-text-editor" data-id="94891a2" data-element_type="widget" data-widget_type="text-editor.default">
                           <div class="elementor-widget-container">
                              <p>Trinusa akan bekerja dengan Anda untuk menghadirkan infrastruktur Data Center yang efisien dan gesit, yang memungkinkan Anda memberikan layanan aplikasi dan bisnis yang lebih otomatis dan responsif dari sebelumnya.</p>
                           </div>
                        </div>
                        <div class="elementor-element elementor-element-e176ff1 elementor-widget elementor-widget-progress" data-id="e176ff1" data-element_type="widget" data-widget_type="progress.default">
                           <div class="elementor-widget-container">
                              <div class="elementor-progress-wrapper" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="98" aria-valuetext="Web Development">
                                 <div class="elementor-progress-bar" data-max="98">
                                    <span class="elementor-progress-text">Web Development</span>
                                    <span class="elementor-progress-percentage">98%</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="elementor-element elementor-element-7e13f5e elementor-widget elementor-widget-progress" data-id="7e13f5e" data-element_type="widget" data-widget_type="progress.default">
                           <div class="elementor-widget-container">
                              <div class="elementor-progress-wrapper" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="89" aria-valuetext="Business Plan">
                                 <div class="elementor-progress-bar" data-max="89">
                                    <span class="elementor-progress-text">Business Plan</span>
                                    <span class="elementor-progress-percentage">89%</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="elementor-element elementor-element-7f566f2 elementor-widget elementor-widget-progress" data-id="7f566f2" data-element_type="widget" data-widget_type="progress.default">
                           <div class="elementor-widget-container">
                              <div class="elementor-progress-wrapper" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="83" aria-valuetext="Machine Learning">
                                 <div class="elementor-progress-bar" data-max="83">
                                    <span class="elementor-progress-text">Machine Learning</span>
                                    <span class="elementor-progress-percentage">83%</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="elementor-element elementor-element-e31ffba elementor-widget__width-auto elementor-widget elementor-widget-button" data-id="e31ffba" data-element_type="widget" data-widget_type="button.default">
                           <div class="elementor-widget-container">
                              <div class="elementor-button-wrapper">
                                 <a href="#" class="elementor-button-link elementor-button elementor-size-lg" role="button">
                                 <span class="elementor-button-content-wrapper">
                                 <span class="elementor-button-text">Meet Our Team</span>
                                 </span>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="elementor-element elementor-element-607d024 elementor-headline--style-highlight elementor-widget elementor-widget-animated-headline" data-id="607d024" data-element_type="widget" data-settings="{&quot;highlighted_text&quot;:&quot;Join Us&quot;,&quot;headline_style&quot;:&quot;highlight&quot;,&quot;marker&quot;:&quot;circle&quot;,&quot;loop&quot;:&quot;yes&quot;,&quot;highlight_animation_duration&quot;:1200,&quot;highlight_iteration_delay&quot;:8000}" data-widget_type="animated-headline.default">
                           <div class="elementor-widget-container">
                              <a href="#">
                                 <h3 class="elementor-headline">
                                    <span class="elementor-headline-plain-text elementor-headline-text-wrapper">Apa kamu Tertarik?</span>
                                    <span class="elementor-headline-dynamic-wrapper elementor-headline-text-wrapper">
                                    <span class="elementor-headline-dynamic-text elementor-headline-text-active">Join Us</span>
                                    </span>
                                 </h3>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <div class="elementor-element elementor-element-a2308af elementor-widget__width-initial elementor-absolute elementor-align-center elementor-widget elementor-widget-lottie" data-id="a2308af" data-element_type="widget" data-settings="{&quot;source_json&quot;:{&quot;url&quot;:&quot;https:\/\/elementor.deverust.com\/techvisio\/wp-content\/uploads\/sites\/20\/2022\/03\/lf20_pbmohvcz.json&quot;,&quot;id&quot;:1359,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;loop&quot;:&quot;yes&quot;,&quot;_position&quot;:&quot;absolute&quot;,&quot;source&quot;:&quot;media_file&quot;,&quot;caption_source&quot;:&quot;none&quot;,&quot;link_to&quot;:&quot;none&quot;,&quot;trigger&quot;:&quot;arriving_to_viewport&quot;,&quot;viewport&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;play_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;start_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;0&quot;,&quot;sizes&quot;:[]},&quot;end_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;100&quot;,&quot;sizes&quot;:[]},&quot;renderer&quot;:&quot;svg&quot;}" data-widget_type="lottie.default">
               <div class="elementor-widget-container">
                  <div class="e-lottie__container">
                     <div class="e-lottie__animation"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-a0c3156 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="a0c3156" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
   <div class="elementor-container elementor-column-gap-no">
      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7c5c783" data-id="7c5c783" data-element_type="column">
         <div class="elementor-widget-wrap elementor-element-populated">
            <section class="elementor-section elementor-inner-section elementor-element elementor-element-96ad70b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="96ad70b" data-element_type="section">
               <div class="elementor-container elementor-column-gap-wider">
                  <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-66ac490" data-id="66ac490" data-element_type="column">
                     <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-fcb29f7 elementor-widget__width-initial elementor-align-center elementor-widget elementor-widget-lottie" data-id="fcb29f7" data-element_type="widget" data-settings="{&quot;source_json&quot;:{&quot;url&quot;:&quot;https:\/\/elementor.deverust.com\/techvisio\/wp-content\/uploads\/sites\/20\/2022\/03\/lf20_vsg5kswn.json&quot;,&quot;id&quot;:1638,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;loop&quot;:&quot;yes&quot;,&quot;source&quot;:&quot;media_file&quot;,&quot;caption_source&quot;:&quot;none&quot;,&quot;link_to&quot;:&quot;none&quot;,&quot;trigger&quot;:&quot;arriving_to_viewport&quot;,&quot;viewport&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;play_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;start_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;0&quot;,&quot;sizes&quot;:[]},&quot;end_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;100&quot;,&quot;sizes&quot;:[]},&quot;renderer&quot;:&quot;svg&quot;}" data-widget_type="lottie.default">
                           <div class="elementor-widget-container">
                              <div class="e-lottie__container">
                                 <div class="e-lottie__animation"></div>
                              </div>
                           </div>
                        </div>
                       
                        <?php
                        $homepage2 = $db->query("SELECT * FROM `halaman_statis` WHERE `link_halaman` LIKE '%homepage%' ORDER BY id_halaman DESC LIMIT 1,1");
                        $contenttwo = $homepage2->fetch_assoc();?>

                        <?= $contenttwo['isi_halaman']; ?>
                     </div>
                  </div>
                  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-9d2d76d" data-id="9d2d76d" data-element_type="column">
                     <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-f016fa1 elementor-widget elementor-widget-spacer" data-id="f016fa1" data-element_type="widget" data-widget_type="spacer.default">
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
<section class="elementor-section elementor-top-section elementor-element elementor-element-42c25e2 elementor-hidden-tablet elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="42c25e2" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
   <div class="elementor-container elementor-column-gap-no">
   <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-7112921" data-id="7112921" data-element_type="column">
   <div class="elementor-widget-wrap elementor-element-populated">
   <!-- <section class="elementor-section elementor-inner-section elementor-element elementor-element-d09a2aa elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d09a2aa" data-element_type="section">
      <div class="elementor-container elementor-column-gap-no">
         <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-0e85756" data-id="0e85756" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
               <div class="elementor-element elementor-element-e143574 elementor-widget__width-initial elementor-widget elementor-widget-image" data-id="e143574" data-element_type="widget" data-widget_type="image.default">
                  <div class="elementor-widget-container">
                     <img width="493" height="104" src="wp-content/uploads/sites/20/2022/03/logo-brand-dummy-9.png" class="attachment-full size-full" alt="" loading="lazy" srcset="https://elementor.deverust.com/techvisio/wp-content/uploads/sites/20/2022/03/logo-brand-dummy-9.png 493w, https://elementor.deverust.com/techvisio/wp-content/uploads/sites/20/2022/03/logo-brand-dummy-9-300x63.png 300w" sizes="(max-width: 493px) 100vw, 493px" />															
                  </div>
               </div>
               <div class="elementor-element elementor-element-d53442c elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="d53442c" data-element_type="widget" data-widget_type="divider.default">
                  <div class="elementor-widget-container">
                     <div class="elementor-divider">
                        <span class="elementor-divider-separator">
                        </span>
                     </div>
                  </div>
               </div>
               <div class="elementor-element elementor-element-dbef0cf elementor-widget__width-initial elementor-widget elementor-widget-spacer" data-id="dbef0cf" data-element_type="widget" data-widget_type="spacer.default">
                  <div class="elementor-widget-container">
                     <div class="elementor-spacer">
                        <div class="elementor-spacer-inner"></div>
                     </div>
                  </div>
               </div>
               <div class="elementor-element elementor-element-78fe53d elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="78fe53d" data-element_type="widget" data-widget_type="divider.default">
                  <div class="elementor-widget-container">
                     <div class="elementor-divider">
                        <span class="elementor-divider-separator">
                        </span>
                     </div>
                  </div>
               </div>
               <div class="elementor-element elementor-element-b7bfa2b elementor-widget__width-initial elementor-widget elementor-widget-spacer" data-id="b7bfa2b" data-element_type="widget" data-widget_type="spacer.default">
                  <div class="elementor-widget-container">
                     <div class="elementor-spacer">
                        <div class="elementor-spacer-inner"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-b5e7aef" data-id="b5e7aef" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
               <div class="elementor-element elementor-element-e39ebfd elementor-widget__width-initial elementor-widget elementor-widget-image" data-id="e39ebfd" data-element_type="widget" data-widget_type="image.default">
                  <div class="elementor-widget-container">
                     <img width="428" height="104" src="wp-content/uploads/sites/20/2022/03/logo-brand-dummy-11.png" class="attachment-full size-full" alt="" loading="lazy" srcset="https://elementor.deverust.com/techvisio/wp-content/uploads/sites/20/2022/03/logo-brand-dummy-11.png 428w, https://elementor.deverust.com/techvisio/wp-content/uploads/sites/20/2022/03/logo-brand-dummy-11-300x73.png 300w" sizes="(max-width: 428px) 100vw, 428px" />															
                  </div>
               </div>
               <div class="elementor-element elementor-element-1e3cc3b elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="1e3cc3b" data-element_type="widget" data-widget_type="divider.default">
                  <div class="elementor-widget-container">
                     <div class="elementor-divider">
                        <span class="elementor-divider-separator">
                        </span>
                     </div>
                  </div>
               </div>
               <div class="elementor-element elementor-element-db72b65 elementor-widget__width-initial elementor-widget elementor-widget-spacer" data-id="db72b65" data-element_type="widget" data-widget_type="spacer.default">
                  <div class="elementor-widget-container">
                     <div class="elementor-spacer">
                        <div class="elementor-spacer-inner"></div>
                     </div>
                  </div>
               </div>
               <div class="elementor-element elementor-element-8a1c9bc elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="8a1c9bc" data-element_type="widget" data-widget_type="divider.default">
                  <div class="elementor-widget-container">
                     <div class="elementor-divider">
                        <span class="elementor-divider-separator">
                        </span>
                     </div>
                  </div>
               </div>
               <div class="elementor-element elementor-element-297106f elementor-widget__width-initial elementor-widget elementor-widget-spacer" data-id="297106f" data-element_type="widget" data-widget_type="spacer.default">
                  <div class="elementor-widget-container">
                     <div class="elementor-spacer">
                        <div class="elementor-spacer-inner"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-20c3c58" data-id="20c3c58" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
               <div class="elementor-element elementor-element-1518b2b elementor-widget__width-initial elementor-widget elementor-widget-image" data-id="1518b2b" data-element_type="widget" data-widget_type="image.default">
                  <div class="elementor-widget-container">
                     <img width="449" height="104" src="wp-content/uploads/sites/20/2022/03/logo-brand-dummy-5.png" class="attachment-full size-full" alt="" loading="lazy" srcset="https://elementor.deverust.com/techvisio/wp-content/uploads/sites/20/2022/03/logo-brand-dummy-5.png 449w, https://elementor.deverust.com/techvisio/wp-content/uploads/sites/20/2022/03/logo-brand-dummy-5-300x69.png 300w" sizes="(max-width: 449px) 100vw, 449px" />															
                  </div>
               </div>
               <div class="elementor-element elementor-element-8e3e52a elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="8e3e52a" data-element_type="widget" data-widget_type="divider.default">
                  <div class="elementor-widget-container">
                     <div class="elementor-divider">
                        <span class="elementor-divider-separator">
                        </span>
                     </div>
                  </div>
               </div>
               <div class="elementor-element elementor-element-5db19b6 elementor-widget__width-initial elementor-widget elementor-widget-spacer" data-id="5db19b6" data-element_type="widget" data-widget_type="spacer.default">
                  <div class="elementor-widget-container">
                     <div class="elementor-spacer">
                        <div class="elementor-spacer-inner"></div>
                     </div>
                  </div>
               </div>
               <div class="elementor-element elementor-element-ab9c9ba elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="ab9c9ba" data-element_type="widget" data-widget_type="divider.default">
                  <div class="elementor-widget-container">
                     <div class="elementor-divider">
                        <span class="elementor-divider-separator">
                        </span>
                     </div>
                  </div>
               </div>
               <div class="elementor-element elementor-element-0377bde elementor-widget__width-initial elementor-widget elementor-widget-spacer" data-id="0377bde" data-element_type="widget" data-widget_type="spacer.default">
                  <div class="elementor-widget-container">
                     <div class="elementor-spacer">
                        <div class="elementor-spacer-inner"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-998aac9" data-id="998aac9" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
               <div class="elementor-element elementor-element-46994f8 elementor-widget__width-initial elementor-widget elementor-widget-image" data-id="46994f8" data-element_type="widget" data-widget_type="image.default">
                  <div class="elementor-widget-container">
                     <img width="397" height="104" src="wp-content/uploads/sites/20/2022/03/logo-brand-dummy-3.png" class="attachment-full size-full" alt="" loading="lazy" srcset="https://elementor.deverust.com/techvisio/wp-content/uploads/sites/20/2022/03/logo-brand-dummy-3.png 397w, https://elementor.deverust.com/techvisio/wp-content/uploads/sites/20/2022/03/logo-brand-dummy-3-300x79.png 300w" sizes="(max-width: 397px) 100vw, 397px" />															
                  </div>
               </div>
               <div class="elementor-element elementor-element-08deae7 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="08deae7" data-element_type="widget" data-widget_type="divider.default">
                  <div class="elementor-widget-container">
                     <div class="elementor-divider">
                        <span class="elementor-divider-separator">
                        </span>
                     </div>
                  </div>
               </div>
               <div class="elementor-element elementor-element-c8243d0 elementor-widget__width-initial elementor-widget elementor-widget-spacer" data-id="c8243d0" data-element_type="widget" data-widget_type="spacer.default">
                  <div class="elementor-widget-container">
                     <div class="elementor-spacer">
                        <div class="elementor-spacer-inner"></div>
                     </div>
                  </div>
               </div>
               <div class="elementor-element elementor-element-834d6fa elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="834d6fa" data-element_type="widget" data-widget_type="divider.default">
                  <div class="elementor-widget-container">
                     <div class="elementor-divider">
                        <span class="elementor-divider-separator">
                        </span>
                     </div>
                  </div>
               </div>
               <div class="elementor-element elementor-element-df3d412 elementor-widget__width-initial elementor-widget elementor-widget-spacer" data-id="df3d412" data-element_type="widget" data-widget_type="spacer.default">
                  <div class="elementor-widget-container">
                     <div class="elementor-spacer">
                        <div class="elementor-spacer-inner"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </section> -->
   <!-- <div class="elementor-element elementor-element-8d15e2d elementor-widget elementor-widget-counter" data-id="8d15e2d" data-element_type="widget" data-widget_type="counter.default">
      <div class="elementor-widget-container">
         <div class="elementor-counter">
            <div class="elementor-counter-number-wrapper">
               <span class="elementor-counter-number-prefix"></span>
               <span class="elementor-counter-number" data-duration="2000" data-to-value="1276" data-from-value="0" data-delimiter=",">0</span>
               <span class="elementor-counter-number-suffix">+</span>
            </div>
            <div class="elementor-counter-title">Project Completed</div>
         </div>
      </div>
      </div>
      <div class="elementor-element elementor-element-46c4f47 elementor-widget elementor-widget-heading" data-id="46c4f47" data-element_type="widget" data-widget_type="heading.default">
      <div class="elementor-widget-container">
         <h2 class="elementor-heading-title elementor-size-default">1998 - 2013</h2>
      </div>
      </div>
      </div>
      </div>
      <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-95b6542" data-id="95b6542" data-element_type="column">
      <div class="elementor-widget-wrap elementor-element-populated">
         <section class="elementor-section elementor-inner-section elementor-element elementor-element-448f88f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="448f88f" data-element_type="section">
            <div class="elementor-container elementor-column-gap-no">
               <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-79694dc" data-id="79694dc" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-ea5045c elementor-widget__width-initial elementor-widget elementor-widget-image" data-id="ea5045c" data-element_type="widget" data-widget_type="image.default">
                        <div class="elementor-widget-container">
                           <img width="397" height="104" src="wp-content/uploads/sites/20/2022/03/logo-brand-dummy-7.png" class="attachment-full size-full" alt="" loading="lazy" srcset="https://elementor.deverust.com/techvisio/wp-content/uploads/sites/20/2022/03/logo-brand-dummy-7.png 397w, https://elementor.deverust.com/techvisio/wp-content/uploads/sites/20/2022/03/logo-brand-dummy-7-300x79.png 300w" sizes="(max-width: 397px) 100vw, 397px" />															
                        </div>
                     </div>
                     <div class="elementor-element elementor-element-88626aa elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="88626aa" data-element_type="widget" data-widget_type="divider.default">
                        <div class="elementor-widget-container">
                           <div class="elementor-divider">
                              <span class="elementor-divider-separator">
                              </span>
                           </div>
                        </div>
                     </div>
                     <div class="elementor-element elementor-element-45308ce elementor-widget__width-initial elementor-widget elementor-widget-spacer" data-id="45308ce" data-element_type="widget" data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                           <div class="elementor-spacer">
                              <div class="elementor-spacer-inner"></div>
                           </div>
                        </div>
                     </div>
                     <div class="elementor-element elementor-element-d73179d elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="d73179d" data-element_type="widget" data-widget_type="divider.default">
                        <div class="elementor-widget-container">
                           <div class="elementor-divider">
                              <span class="elementor-divider-separator">
                              </span>
                           </div>
                        </div>
                     </div>
                     <div class="elementor-element elementor-element-b111184 elementor-widget__width-initial elementor-widget elementor-widget-spacer" data-id="b111184" data-element_type="widget" data-widget_type="spacer.default">
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
         <div class="elementor-element elementor-element-38e8b57 elementor-widget elementor-widget-counter" data-id="38e8b57" data-element_type="widget" data-widget_type="counter.default">
            <div class="elementor-widget-container">
               <div class="elementor-counter">
                  <div class="elementor-counter-number-wrapper">
                     <span class="elementor-counter-number-prefix"></span>
                     <span class="elementor-counter-number" data-duration="2000" data-to-value="367" data-from-value="0" data-delimiter=",">0</span>
                     <span class="elementor-counter-number-suffix">+ </span>
                  </div>
                  <div class="elementor-counter-title">Machine Learning Projects</div>
               </div>
            </div>
         </div>
         <div class="elementor-element elementor-element-622a950 elementor-widget elementor-widget-heading" data-id="622a950" data-element_type="widget" data-widget_type="heading.default">
            <div class="elementor-widget-container">
               <h2 class="elementor-heading-title elementor-size-default">2014 - 2017</h2>
            </div>
         </div>
      </div>
      </div> -->
   <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-1791bbb" data-id="1791bbb" data-element_type="column">
      <div class="elementor-widget-wrap elementor-element-populated">
         <!-- <section class="elementor-section elementor-inner-section elementor-element elementor-element-f73ed10 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f73ed10" data-element_type="section">
            <div class="elementor-container elementor-column-gap-no">
               <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-22d0317" data-id="22d0317" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-baf2148 elementor-widget__width-initial elementor-widget elementor-widget-image" data-id="baf2148" data-element_type="widget" data-widget_type="image.default">
                        <div class="elementor-widget-container">
                           <img width="408" height="104" src="wp-content/uploads/sites/20/2022/03/logo-brand-dummy-1.png" class="attachment-full size-full" alt="" loading="lazy" srcset="https://elementor.deverust.com/techvisio/wp-content/uploads/sites/20/2022/03/logo-brand-dummy-1.png 408w, https://elementor.deverust.com/techvisio/wp-content/uploads/sites/20/2022/03/logo-brand-dummy-1-300x76.png 300w" sizes="(max-width: 408px) 100vw, 408px" />															
                        </div>
                     </div>
                     <div class="elementor-element elementor-element-307f7ed elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="307f7ed" data-element_type="widget" data-widget_type="divider.default">
                        <div class="elementor-widget-container">
                           <div class="elementor-divider">
                              <span class="elementor-divider-separator">
                              </span>
                           </div>
                        </div>
                     </div>
                     <div class="elementor-element elementor-element-1a73659 elementor-widget__width-initial elementor-widget elementor-widget-spacer" data-id="1a73659" data-element_type="widget" data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                           <div class="elementor-spacer">
                              <div class="elementor-spacer-inner"></div>
                           </div>
                        </div>
                     </div>
                     <div class="elementor-element elementor-element-18ffbe4 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="18ffbe4" data-element_type="widget" data-widget_type="divider.default">
                        <div class="elementor-widget-container">
                           <div class="elementor-divider">
                              <span class="elementor-divider-separator">
                              </span>
                           </div>
                        </div>
                     </div>
                     <div class="elementor-element elementor-element-a2fe934 elementor-widget__width-initial elementor-widget elementor-widget-spacer" data-id="a2fe934" data-element_type="widget" data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                           <div class="elementor-spacer">
                              <div class="elementor-spacer-inner"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            </section> -->
         <!-- <div class="elementor-element elementor-element-e6b0e4b elementor-widget elementor-widget-counter" data-id="e6b0e4b" data-element_type="widget" data-widget_type="counter.default">
            <div class="elementor-widget-container">
               <div class="elementor-counter">
                  <div class="elementor-counter-number-wrapper">
                     <span class="elementor-counter-number-prefix"></span>
                     <span class="elementor-counter-number" data-duration="2000" data-to-value="837" data-from-value="0" data-delimiter=",">0</span>
                     <span class="elementor-counter-number-suffix"> +</span>
                  </div>
                  <div class="elementor-counter-title">Project Completed</div>
               </div>
            </div>
            </div>
            <div class="elementor-element elementor-element-19f44d6 elementor-widget elementor-widget-heading" data-id="19f44d6" data-element_type="widget" data-widget_type="heading.default">
            <div class="elementor-widget-container">
               <h2 class="elementor-heading-title elementor-size-default">2018 - 2020</h2>
            </div>
            </div>
            </div>
            </div> -->
         <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-c04e523" data-id="c04e523" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
               <!-- <section class="elementor-section elementor-inner-section elementor-element elementor-element-e4e0633 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e4e0633" data-element_type="section">
                  <div class="elementor-container elementor-column-gap-no">
                     <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-5dada86" data-id="5dada86" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                           <div class="elementor-element elementor-element-79ca425 elementor-widget__width-initial elementor-widget elementor-widget-image" data-id="79ca425" data-element_type="widget" data-widget_type="image.default">
                              <div class="elementor-widget-container">
                                 <img width="356" height="104" src="wp-content/uploads/sites/20/2022/03/logo-brand-dummy-12.png" class="attachment-full size-full" alt="" loading="lazy" srcset="https://elementor.deverust.com/techvisio/wp-content/uploads/sites/20/2022/03/logo-brand-dummy-12.png 356w, https://elementor.deverust.com/techvisio/wp-content/uploads/sites/20/2022/03/logo-brand-dummy-12-300x88.png 300w" sizes="(max-width: 356px) 100vw, 356px" />															
                              </div>
                           </div>
                           <div class="elementor-element elementor-element-67609e6 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="67609e6" data-element_type="widget" data-widget_type="divider.default">
                              <div class="elementor-widget-container">
                                 <div class="elementor-divider">
                                    <span class="elementor-divider-separator">
                                    </span>
                                 </div>
                              </div>
                           </div>
                           <div class="elementor-element elementor-element-32746b1 elementor-widget__width-initial elementor-widget elementor-widget-spacer" data-id="32746b1" data-element_type="widget" data-widget_type="spacer.default">
                              <div class="elementor-widget-container">
                                 <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="elementor-element elementor-element-8a8191c elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="8a8191c" data-element_type="widget" data-widget_type="divider.default">
                              <div class="elementor-widget-container">
                                 <div class="elementor-divider">
                                    <span class="elementor-divider-separator">
                                    </span>
                                 </div>
                              </div>
                           </div>
                           <div class="elementor-element elementor-element-a73b6c3 elementor-widget__width-initial elementor-widget elementor-widget-spacer" data-id="a73b6c3" data-element_type="widget" data-widget_type="spacer.default">
                              <div class="elementor-widget-container">
                                 <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  </section> -->
               <!-- <div class="elementor-element elementor-element-dd4625a elementor-widget elementor-widget-counter" data-id="dd4625a" data-element_type="widget" data-widget_type="counter.default">
                  <div class="elementor-widget-container">
                     <div class="elementor-counter">
                        <div class="elementor-counter-number-wrapper">
                           <span class="elementor-counter-number-prefix"></span>
                           <span class="elementor-counter-number" data-duration="2000" data-to-value="98" data-from-value="0" data-delimiter=",">0</span>
                           <span class="elementor-counter-number-suffix"></span>
                        </div>
                        <div class="elementor-counter-title">World Appreciations</div>
                     </div>
                  </div>
                  </div>
                  <div class="elementor-element elementor-element-47abae8 elementor-widget elementor-widget-heading" data-id="47abae8" data-element_type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                     <h2 class="elementor-heading-title elementor-size-default">2021 - Now</h2>
                  </div>
                  </div> -->
            </div>
         </div>
      </div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-3d47d9a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3d47d9a" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-container elementor-column-gap-wider">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0ebb98e" data-id="0ebb98e" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<section class="elementor-section elementor-inner-section elementor-element elementor-element-66c6ad7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="66c6ad7" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5d1353d" data-id="5d1353d" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-1eda0ed elementor-widget__width-initial elementor-align-center elementor-widget elementor-widget-lottie" data-id="1eda0ed" data-element_type="widget" data-settings="{&quot;source_json&quot;:{&quot;url&quot;:&quot;https:\/\/elementor.deverust.com\/techvisio\/wp-content\/uploads\/sites\/20\/2022\/03\/lf20_vsg5kswn.json&quot;,&quot;id&quot;:1638,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;loop&quot;:&quot;yes&quot;,&quot;source&quot;:&quot;media_file&quot;,&quot;caption_source&quot;:&quot;none&quot;,&quot;link_to&quot;:&quot;none&quot;,&quot;trigger&quot;:&quot;arriving_to_viewport&quot;,&quot;viewport&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;play_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;start_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;0&quot;,&quot;sizes&quot;:[]},&quot;end_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;100&quot;,&quot;sizes&quot;:[]},&quot;renderer&quot;:&quot;svg&quot;}" data-widget_type="lottie.default">
<div class="elementor-widget-container">
<div class="e-lottie__container">
<div class="e-lottie__animation"></div>
</div>
</div>
</div>
<!-- <div class="elementor-element elementor-element-250cefd elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="250cefd" data-element_type="widget" data-widget_type="heading.default">
   <div class="elementor-widget-container">
      <h2 class="elementor-heading-title elementor-size-default">Latest Work</h2>
   </div>
   </div> -->
<div class="elementor-element elementor-element-2f73e37 elementor-widget elementor-widget-heading" data-id="2f73e37" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h2 class="elementor-heading-title elementor-size-default">See Our Portofolio.</h2>
</div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-445f72f" data-id="445f72f" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-d0369e1 elementor-widget__width-auto elementor-widget elementor-widget-button" data-id="d0369e1" data-element_type="widget" data-widget_type="button.default">
<div class="elementor-widget-container">
<div class="elementor-button-wrapper">
<a href="#" class="elementor-button-link elementor-button elementor-size-lg" role="button">
<span class="elementor-button-content-wrapper">
<span class="elementor-button-text">See All</span>
</span>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="elementor-section elementor-inner-section elementor-element elementor-element-3e94b53 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default" data-id="3e94b53" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-container elementor-column-gap-wider">
<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-005b006" data-id="005b006" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<section class="elementor-section elementor-inner-section elementor-element elementor-element-16f5fb8 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="16f5fb8" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-8326cf1" data-id="8326cf1" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<?php
   $porto = $db->query("SELECT * FROM pengiriman WHERE urutan = 1 AND aktif = 'Y'");
   $portofolio = $porto->fetch_assoc();
   ?>
<div class="elementor-widget-container">
<?= $portofolio['metode_pengiriman']; ?>
</div>
<!-- <div class="elementor-element elementor-element-3da005b elementor-widget elementor-widget-heading" data-id="3da005b" data-element_type="widget" data-widget_type="heading.default">
   <div class="elementor-widget-container">
      <h2 class="elementor-heading-title elementor-size-default">What can we do for your needs</h2>
   </div>
   </div> -->
<!-- <div class="elementor-element elementor-element-19ae134 elementor-widget elementor-widget-text-editor" data-id="19ae134" data-element_type="widget" data-widget_type="text-editor.default">
   <div class="elementor-widget-container">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
   </div>
   </div> -->
</div>
</div>
</div>
</section>
<!-- <section class="elementor-section elementor-inner-section elementor-element elementor-element-90df197 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="90df197" data-element_type="section">
   <div class="elementor-container elementor-column-gap-no">
      <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7056761" data-id="7056761" data-element_type="column">
         <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-48fdd13 elementor-widget__width-auto elementor-widget elementor-widget-counter" data-id="48fdd13" data-element_type="widget" data-widget_type="counter.default">
               <div class="elementor-widget-container">
                  <div class="elementor-counter">
                     <div class="elementor-counter-number-wrapper">
                        <span class="elementor-counter-number-prefix"></span>
                        <span class="elementor-counter-number" data-duration="2000" data-to-value="9763" data-from-value="0" data-delimiter=",">0</span>
                        <span class="elementor-counter-number-suffix">+</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="elementor-element elementor-element-f0e24f8 elementor-widget elementor-widget-heading" data-id="f0e24f8" data-element_type="widget" data-widget_type="heading.default">
               <div class="elementor-widget-container">
                  <h2 class="elementor-heading-title elementor-size-default">Project Completed</h2>
               </div>
            </div>
         </div>
      </div>
      <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-f8a4c63" data-id="f8a4c63" data-element_type="column">
         <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-8dec6cf elementor-widget__width-auto elementor-widget elementor-widget-counter" data-id="8dec6cf" data-element_type="widget" data-widget_type="counter.default">
               <div class="elementor-widget-container">
                  <div class="elementor-counter">
                     <div class="elementor-counter-number-wrapper">
                        <span class="elementor-counter-number-prefix"></span>
                        <span class="elementor-counter-number" data-duration="2000" data-to-value="289" data-from-value="0" data-delimiter=",">0</span>
                        <span class="elementor-counter-number-suffix">+</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="elementor-element elementor-element-a743f8c elementor-widget elementor-widget-heading" data-id="a743f8c" data-element_type="widget" data-widget_type="heading.default">
               <div class="elementor-widget-container">
                  <h2 class="elementor-heading-title elementor-size-default">Community Network</h2>
               </div>
            </div>
         </div>
      </div>
   </div>
   </section>
   <section class="elementor-section elementor-inner-section elementor-element elementor-element-3720e37 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3720e37" data-element_type="section">
   <div class="elementor-container elementor-column-gap-no">
      <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-b49f30f" data-id="b49f30f" data-element_type="column">
         <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-c9c7cdd elementor-widget__width-auto elementor-widget elementor-widget-counter" data-id="c9c7cdd" data-element_type="widget" data-widget_type="counter.default">
               <div class="elementor-widget-container">
                  <div class="elementor-counter">
                     <div class="elementor-counter-number-wrapper">
                        <span class="elementor-counter-number-prefix"></span>
                        <span class="elementor-counter-number" data-duration="2000" data-to-value="156" data-from-value="0" data-delimiter=",">0</span>
                        <span class="elementor-counter-number-suffix"></span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="elementor-element elementor-element-3e09c19 elementor-widget elementor-widget-heading" data-id="3e09c19" data-element_type="widget" data-widget_type="heading.default">
               <div class="elementor-widget-container">
                  <h2 class="elementor-heading-title elementor-size-default">On Going Contract</h2>
               </div>
            </div>
         </div>
      </div>
      <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-6c2acfd" data-id="6c2acfd" data-element_type="column">
         <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-fb89930 elementor-widget__width-auto elementor-widget elementor-widget-counter" data-id="fb89930" data-element_type="widget" data-widget_type="counter.default">
               <div class="elementor-widget-container">
                  <div class="elementor-counter">
                     <div class="elementor-counter-number-wrapper">
                        <span class="elementor-counter-number-prefix"></span>
                        <span class="elementor-counter-number" data-duration="2000" data-to-value="25" data-from-value="0" data-delimiter=",">0</span>
                        <span class="elementor-counter-number-suffix">+</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="elementor-element elementor-element-7021cc6 elementor-widget elementor-widget-heading" data-id="7021cc6" data-element_type="widget" data-widget_type="heading.default">
               <div class="elementor-widget-container">
                  <h2 class="elementor-heading-title elementor-size-default">Years Experience</h2>
               </div>
            </div>
         </div>
      </div>
   </div>
   </section> -->
</div>
</div>
<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-892f01f" data-id="892f01f" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-f9b9d09 elementor-widget elementor-widget-heading" data-id="f9b9d09" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h2 class="elementor-heading-title elementor-size-default">We show you evidence</h2>
</div>
</div>
<!-- <div class="elementor-element elementor-element-7444513 elementor-position-left elementor-vertical-align-middle elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-image-box" data-id="7444513" data-element_type="widget" data-widget_type="image-box.default">
   <div class="elementor-widget-container">
      <div class="elementor-image-box-wrapper">
         <figure class="elementor-image-box-img"><a href="#"><img width="1920" height="1120" src="wp-content/uploads/sites/20/2022/03/robots-hands-typing-on-keyboard-B5XW2CS.jpg" class="attachment-full size-full" alt="" loading="lazy" /></a></figure>
         <div class="elementor-image-box-content">
            <h3 class="elementor-image-box-title"><a href="#">Machine Learning </a></h3>
            <p class="elementor-image-box-description">356 Projects</p>
         </div>
      </div>
   </div>
   </div>
   <div class="elementor-element elementor-element-d7856d3 elementor-widget__width-auto elementor-view-default elementor-widget elementor-widget-icon" data-id="d7856d3" data-element_type="widget" data-widget_type="icon.default">
   <div class="elementor-widget-container">
      <div class="elementor-icon-wrapper">
         <a class="elementor-icon" href="#">
         <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>			</a>
      </div>
   </div>
   </div>
   <div class="elementor-element elementor-element-3ef7d45 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="3ef7d45" data-element_type="widget" data-widget_type="divider.default">
   <div class="elementor-widget-container">
      <div class="elementor-divider">
         <span class="elementor-divider-separator">
         </span>
      </div>
   </div>
   </div> -->
<!-- loop here -->
<?php
   $users = [
   	'wp-content/uploads/sites/20/2022/03/hardware.png', 
   	'wp-content/uploads/sites/20/2022/03/software.png'];
   $i = 0;
   $query1234      = $db->query("SELECT nama_kategori FROM kategori_produk");
   while( $rowkategoriproduct = $query1234->fetch_assoc() ){
   	
   ?>
<div class="elementor-element elementor-element-f886a39 elementor-position-left elementor-vertical-align-middle elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-image-box" data-id="f886a39" data-element_type="widget" data-widget_type="image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper">
<figure class="elementor-image-box-img"><a href="#"><img width="1885" height="1258" src="<?= $users[$i]; $i++; ?>" class="attachment-full size-full" alt="" loading="lazy" /></a></figure>
<div class="elementor-image-box-content">
<h3 class="elementor-image-box-title"><a href="#"><?= $rowkategoriproduct['nama_kategori']; ?> </a></h3>
<!-- <p class="elementor-image-box-description">2046 Projects</p> -->
</div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-ca77586 elementor-widget__width-auto elementor-view-default elementor-widget elementor-widget-icon" data-id="ca77586" data-element_type="widget" data-widget_type="icon.default">
<div class="elementor-widget-container">
<div class="elementor-icon-wrapper">
<a class="elementor-icon" href="#">
<i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>			</a>
</div>
</div>
</div>
<div class="elementor-element elementor-element-e206261 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="e206261" data-element_type="widget" data-widget_type="divider.default">
<div class="elementor-widget-container">
<div class="elementor-divider">
<span class="elementor-divider-separator">
</span>
</div>
</div>
</div>
<?php } ?>
<!-- end here -->
<!-- <div class="elementor-element elementor-element-fce85bd elementor-position-left elementor-vertical-align-middle elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-image-box" data-id="fce85bd" data-element_type="widget" data-widget_type="image-box.default">
   <div class="elementor-widget-container">
      <div class="elementor-image-box-wrapper">
         <figure class="elementor-image-box-img"><a href="#"><img width="1767" height="1179" src="wp-content/uploads/sites/20/2022/03/cropped-view-of-designer-using-graphics-tablet-whi-4WHSQNZ.jpg" class="attachment-full size-full" alt="" loading="lazy" /></a></figure>
         <div class="elementor-image-box-content">
            <h3 class="elementor-image-box-title"><a href="#">User experience design</a></h3>
            <p class="elementor-image-box-description">4936 Projects</p>
         </div>
      </div>
   </div>
   </div>
   <div class="elementor-element elementor-element-f164040 elementor-widget__width-auto elementor-view-default elementor-widget elementor-widget-icon" data-id="f164040" data-element_type="widget" data-widget_type="icon.default">
   <div class="elementor-widget-container">
      <div class="elementor-icon-wrapper">
         <a class="elementor-icon" href="#">
         <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>			</a>
      </div>
   </div>
   </div> -->
</div>
</div>
</div>
</section>
<section class="elementor-section elementor-inner-section elementor-element elementor-element-a57f60c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="a57f60c" data-element_type="section">
   <div class="elementor-container elementor-column-gap-wider">
      <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-440e548" data-id="440e548" data-element_type="column">
         <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-0820988 elementor-widget elementor-widget-image" data-id="0820988" data-element_type="widget" data-widget_type="image.default">
               <div class="elementor-widget-container">
                  <img width="1926" height="1286" src="wp-content/uploads/sites/20/2022/02/searching-for-solutions-group-of-three-young-and-p-QKN7X76.jpg" class="attachment-full size-full" alt="" loading="lazy" srcset="https://elementor.deverust.com/techvisio/wp-content/uploads/sites/20/2022/02/searching-for-solutions-group-of-three-young-and-p-QKN7X76.jpg 1926w, https://elementor.deverust.com/techvisio/wp-content/uploads/sites/20/2022/02/searching-for-solutions-group-of-three-young-and-p-QKN7X76-300x200.jpg 300w, https://elementor.deverust.com/techvisio/wp-content/uploads/sites/20/2022/02/searching-for-solutions-group-of-three-young-and-p-QKN7X76-1024x684.jpg 1024w, https://elementor.deverust.com/techvisio/wp-content/uploads/sites/20/2022/02/searching-for-solutions-group-of-three-young-and-p-QKN7X76-768x513.jpg 768w, https://elementor.deverust.com/techvisio/wp-content/uploads/sites/20/2022/02/searching-for-solutions-group-of-three-young-and-p-QKN7X76-1536x1026.jpg 1536w, https://elementor.deverust.com/techvisio/wp-content/uploads/sites/20/2022/02/searching-for-solutions-group-of-three-young-and-p-QKN7X76-800x534.jpg 800w" sizes="(max-width: 1926px) 100vw, 1926px" />															
               </div>
            </div>
         </div>
      </div>
      <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1252905" data-id="1252905" data-element_type="column">
         <div class="elementor-widget-wrap elementor-element-populated">
            <!-- <div class="elementor-element elementor-element-81b21d0 elementor-widget elementor-widget-heading" data-id="81b21d0" data-element_type="widget" data-widget_type="heading.default">
               <div class="elementor-widget-container">
                  <h2 class="elementor-heading-title elementor-size-default">Find more our gallery projects</h2>
               </div>
               </div> -->
            <!-- <div class="elementor-element elementor-element-7eae0ce elementor-widget elementor-widget-text-editor" data-id="7eae0ce" data-element_type="widget" data-widget_type="text-editor.default">
               <div class="elementor-widget-container">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
               </div>
               </div> -->
            <?php
               $porto2 = $db->query("SELECT * FROM pengiriman WHERE urutan = 2 AND aktif = 'Y'");
               $portofoliosecond = $porto2->fetch_assoc();
               ?>
            <div class="elementor-widget-container">
               <p><?= $portofoliosecond['metode_pengiriman']; ?></p>
            </div>
            <div class="elementor-element elementor-element-f2f1e40 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="f2f1e40" data-element_type="widget" data-widget_type="divider.default">
               <div class="elementor-widget-container">
                  <div class="elementor-divider">
                     <span class="elementor-divider-separator">
                     </span>
                  </div>
               </div>
            </div>
            <div class="elementor-element elementor-element-4e55f42 elementor-icon-list--layout-inline elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="4e55f42" data-element_type="widget" data-widget_type="icon-list.default">
               <div class="elementor-widget-container">
                  <ul class="elementor-icon-list-items elementor-inline-items">
                     <li class="elementor-icon-list-item elementor-inline-item">
                        <a href="#">
                        <span class="elementor-icon-list-icon">
                        <i aria-hidden="true" class="fab fa-behance"></i>						</span>
                        <span class="elementor-icon-list-text">Behance</span>
                        </a>
                     </li>
                     <li class="elementor-icon-list-item elementor-inline-item">
                        <a href="#">
                        <span class="elementor-icon-list-icon">
                        <i aria-hidden="true" class="fab fa-dribbble"></i>						</span>
                        <span class="elementor-icon-list-text">Dribbble</span>
                        </a>
                     </li>
                     <li class="elementor-icon-list-item elementor-inline-item">
                        <a href="#">
                        <span class="elementor-icon-list-icon">
                        <i aria-hidden="true" class="fab fa-instagram"></i>						</span>
                        <span class="elementor-icon-list-text">Instagram</span>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-c48f564" data-id="c48f564" data-element_type="column">
         <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-5c5ba0c elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-heading" data-id="5c5ba0c" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="heading.default">
               <div class="elementor-widget-container">
                  <h2 class="elementor-heading-title elementor-size-default"><a href="#">Get in <br>
                     touch</a>
                  </h2>
               </div>
            </div>
            <div class="elementor-element elementor-element-6f2767a elementor-widget elementor-widget-image" data-id="6f2767a" data-element_type="widget" data-widget_type="image.default">
               <div class="elementor-widget-container">
                  <img width="1844" height="1229" src="wp-content/uploads/sites/20/2022/02/technologies-in-business-VSH2THX.jpg" class="attachment-full size-full" alt="" loading="lazy" srcset="https://elementor.deverust.com/techvisio/wp-content/uploads/sites/20/2022/02/technologies-in-business-VSH2THX.jpg 1844w, https://elementor.deverust.com/techvisio/wp-content/uploads/sites/20/2022/02/technologies-in-business-VSH2THX-300x200.jpg 300w, https://elementor.deverust.com/techvisio/wp-content/uploads/sites/20/2022/02/technologies-in-business-VSH2THX-1024x682.jpg 1024w, https://elementor.deverust.com/techvisio/wp-content/uploads/sites/20/2022/02/technologies-in-business-VSH2THX-768x512.jpg 768w, https://elementor.deverust.com/techvisio/wp-content/uploads/sites/20/2022/02/technologies-in-business-VSH2THX-1536x1024.jpg 1536w, https://elementor.deverust.com/techvisio/wp-content/uploads/sites/20/2022/02/technologies-in-business-VSH2THX-800x533.jpg 800w" sizes="(max-width: 1844px) 100vw, 1844px" />															
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
<section class="elementor-section elementor-top-section elementor-element elementor-element-b27ac50 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b27ac50" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
   <div class="elementor-container elementor-column-gap-wider">
      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-65a0a9a" data-id="65a0a9a" data-element_type="column">
         <div class="elementor-widget-wrap elementor-element-populated">
            <section class="elementor-section elementor-inner-section elementor-element elementor-element-1d03f73 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1d03f73" data-element_type="section">
               <div class="elementor-container elementor-column-gap-wider">
                  <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-2fa29b7" data-id="2fa29b7" data-element_type="column">
                     <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-c3b593b elementor-widget__width-initial elementor-align-center elementor-widget elementor-widget-lottie" data-id="c3b593b" data-element_type="widget" data-settings="{&quot;source_json&quot;:{&quot;url&quot;:&quot;https:\/\/elementor.deverust.com\/techvisio\/wp-content\/uploads\/sites\/20\/2022\/03\/lf20_vsg5kswn.json&quot;,&quot;id&quot;:1638,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;loop&quot;:&quot;yes&quot;,&quot;source&quot;:&quot;media_file&quot;,&quot;caption_source&quot;:&quot;none&quot;,&quot;link_to&quot;:&quot;none&quot;,&quot;trigger&quot;:&quot;arriving_to_viewport&quot;,&quot;viewport&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;play_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;start_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;0&quot;,&quot;sizes&quot;:[]},&quot;end_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;100&quot;,&quot;sizes&quot;:[]},&quot;renderer&quot;:&quot;svg&quot;}" data-widget_type="lottie.default">
                           <div class="elementor-widget-container">
                              <div class="e-lottie__container">
                                 <div class="e-lottie__animation"></div>
                              </div>
                           </div>
                        </div>
                        <!-- <div class="elementor-element elementor-element-5e5022e elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="5e5022e" data-element_type="widget" data-widget_type="heading.default">
                           <div class="elementor-widget-container">
                              <h2 class="elementor-heading-title elementor-size-default">How We Work</h2>
                           </div>
                        </div> -->
                        <!-- <div class="elementor-element elementor-element-99556e2 elementor-widget elementor-widget-heading" data-id="99556e2" data-element_type="widget" data-widget_type="heading.default">
                           <div class="elementor-widget-container">
                              <h2 class="elementor-heading-title elementor-size-default">We'll show our process.</h2>
                           </div>
                        </div> -->
                     </div>
                  </div>
               </div>
            </section>
          
            <section class="elementor-section elementor-inner-section elementor-element elementor-element-d2a4a80 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d2a4a80" data-element_type="section">
               <div class="elementor-container elementor-column-gap-wider">
               
               <?php
               $homepage1 = $db->query("SELECT * FROM `halaman_statis` WHERE `link_halaman` LIKE '%homepage%' ORDER BY id_halaman LIMIT 1 OFFSET 2");
               $contentone = $homepage1->fetch_assoc();?>

               <?= $contentone['isi_halaman']; ?>

               </div>
            </section>
         </div>
      </div>
   </div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-5e211f1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5e211f1" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
   <div class="elementor-container elementor-column-gap-no">
      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-27a8ec0" data-id="27a8ec0" data-element_type="column">
         <div class="elementor-widget-wrap elementor-element-populated">
            <section class="elementor-section elementor-inner-section elementor-element elementor-element-466cb40 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="466cb40" data-element_type="section">
               <div class="elementor-container elementor-column-gap-wider">
                  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-49ff417" data-id="49ff417" data-element_type="column">
                     <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-4b8e0e9 elementor-widget__width-initial elementor-align-center elementor-widget elementor-widget-lottie" data-id="4b8e0e9" data-element_type="widget" data-settings="{&quot;source_json&quot;:{&quot;url&quot;:&quot;https:\/\/elementor.deverust.com\/techvisio\/wp-content\/uploads\/sites\/20\/2022\/03\/lf20_vsg5kswn.json&quot;,&quot;id&quot;:1638,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;loop&quot;:&quot;yes&quot;,&quot;source&quot;:&quot;media_file&quot;,&quot;caption_source&quot;:&quot;none&quot;,&quot;link_to&quot;:&quot;none&quot;,&quot;trigger&quot;:&quot;arriving_to_viewport&quot;,&quot;viewport&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;play_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;start_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;0&quot;,&quot;sizes&quot;:[]},&quot;end_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;100&quot;,&quot;sizes&quot;:[]},&quot;renderer&quot;:&quot;svg&quot;}" data-widget_type="lottie.default">
                           <div class="elementor-widget-container">
                              <div class="e-lottie__container">
                                 <div class="e-lottie__animation"></div>
                              </div>
                           </div>
                        </div>
                        <div class="elementor-element elementor-element-5d2974e elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="5d2974e" data-element_type="widget" data-widget_type="heading.default">
                           <div class="elementor-widget-container">
                              <h2 class="elementor-heading-title elementor-size-default">Recent Post</h2>
                           </div>
                        </div>
                        <div class="elementor-element elementor-element-1a4efde elementor-widget elementor-widget-heading" data-id="1a4efde" data-element_type="widget" data-widget_type="heading.default">
                           <div class="elementor-widget-container">
                              <h2 class="elementor-heading-title elementor-size-default">Artikel Menarik.</h2>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4f9b528" data-id="4f9b528" data-element_type="column">
                     <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-fee85b3 elementor-widget__width-auto elementor-widget elementor-widget-button" data-id="fee85b3" data-element_type="widget" data-widget_type="button.default">
                           <div class="elementor-widget-container">
                              <div class="elementor-button-wrapper">
                                 <a href="#" class="elementor-button-link elementor-button elementor-size-lg" role="button">
                                 <span class="elementor-button-content-wrapper">
                                 <span class="elementor-button-text">All Blogs</span>
                                 </span>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section class="elementor-section elementor-inner-section elementor-element elementor-element-9158289 elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9158289" data-element_type="section">
               <div class="elementor-container elementor-column-gap-wider">
                  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-420c4e1" data-id="420c4e1" data-element_type="column">
                     <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-7d0f8d0 elementor-grid-1 elementor-posts--thumbnail-none elementor-grid-tablet-1 elementor-grid-mobile-1 elementor-widget elementor-widget-posts" data-id="7d0f8d0" data-element_type="widget" data-settings="{&quot;classic_columns&quot;:&quot;1&quot;,&quot;classic_columns_tablet&quot;:&quot;1&quot;,&quot;classic_columns_mobile&quot;:&quot;1&quot;,&quot;classic_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:35,&quot;sizes&quot;:[]},&quot;classic_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;classic_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="posts.classic">
                           <div class="elementor-widget-container">
                              <div class="elementor-posts-container elementor-posts elementor-posts--skin-classic elementor-grid">
                                 
                              
                              <?php
                                 $hotnews = $db->query("SELECT * FROM `artikel` ORDER BY `id_artikel` DESC  LIMIT 1");
                                 $artikelutama = $hotnews->fetch_assoc();
                                 $isi_artikel_hot         = $artikelutama['isi_artikel'];
					                  $isi_utama                 = substr($isi_artikel_hot,0,110); // ambil sebanyak 220 karakter
					                  $isi_utama                 = substr($isi_artikel_hot,0,strrpos($isi_utama," ")); // potong per spasi kalimat
                                 ?>


                              <article class="elementor-post elementor-grid-item post-374 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
                                    <div class="elementor-post__text">
                                       <h3 class="elementor-post__title">
                                          <a href="artikel-<?php echo $artikelutama['id_artikel']; ?>-<?php echo $artikelutama['judul_seo']; ?>" >
                                          <?= $artikelutama['judul_artikel'] ?>			</a>
                                       </h3>
                                       <div class="elementor-post__meta-data">
                                          <span class="elementor-post-date">
                                          <?= $artikelutama['tanggal'] ?>		</span>
                                         
                                       </div>
                                       <div class="elementor-post__excerpt">
                                          <p><?php echo $isi_utama.' ...'; ?></p>
                                       </div>
                                       <a class="elementor-post__read-more" href="artikel-<?php echo $artikelutama['id_artikel']; ?>-<?php echo $artikelutama['judul_seo']; ?>" >
                                       Read More			</a>
                                    </div>
                                 </article>

                                 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2f665bf" data-id="2f665bf" data-element_type="column">
                     <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-ebf5e21 elementor-grid-1 elementor-grid-tablet-1 elementor-grid-mobile-1 elementor-posts--thumbnail-top elementor-widget elementor-widget-posts" data-id="ebf5e21" data-element_type="widget" data-settings="{&quot;classic_columns&quot;:&quot;1&quot;,&quot;classic_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;classic_columns_tablet&quot;:&quot;1&quot;,&quot;classic_columns_mobile&quot;:&quot;1&quot;,&quot;classic_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;classic_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="posts.classic">
                           <div class="elementor-widget-container">
                              <div class="elementor-posts-container elementor-posts elementor-posts--skin-classic elementor-grid">
                                 <article class="elementor-post elementor-grid-item post-374 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
                                    <a class="elementor-post__thumbnail__link" href="artikel-<?php echo $artikelutama['id_artikel']; ?>-<?php echo $artikelutama['judul_seo']; ?>" >
                                       <div class="elementor-post__thumbnail"><img width="1752" height="1168" src="gambar/artikel/<?php echo $artikelutama['gambar']; ?>" class="attachment-full size-full" alt="" loading="lazy" /></div>
                                    </a>
                                    <div class="elementor-post__text"></div>
                                 </article>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section class="elementor-section elementor-inner-section elementor-element elementor-element-61a832c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="61a832c" data-element_type="section">
               <div class="elementor-container elementor-column-gap-wider">
                  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-98b2106" data-id="98b2106" data-element_type="column">
                     <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-0845a5b elementor-grid-2 elementor-grid-tablet-2 elementor-grid-mobile-1 elementor-posts--thumbnail-top elementor-widget elementor-widget-posts" data-id="0845a5b" data-element_type="widget" data-settings="{&quot;classic_columns&quot;:&quot;2&quot;,&quot;classic_columns_tablet&quot;:&quot;2&quot;,&quot;classic_columns_mobile&quot;:&quot;1&quot;,&quot;classic_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:35,&quot;sizes&quot;:[]},&quot;classic_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;classic_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="posts.classic">
                           <div class="elementor-widget-container">
                              <div class="elementor-posts-container elementor-posts elementor-posts--skin-classic elementor-grid">
                                 <!-- loop here -->
                                 <?php
                                    include "config/tgl_indo.php";
                                    $query0                  = $db->prepare("SELECT artikel.id_artikel, artikel.tag, artikel.judul_artikel, artikel.judul_seo, artikel.isi_artikel, artikel.gambar, artikel.dibaca, artikel.tanggal, artikel.hari FROM artikel INNER JOIN kategori_artikel ON artikel.id_kategori=kategori_artikel.id_kategori ORDER BY artikel.id_artikel DESC LIMIT 1,5");
                                    $query0->execute();
                                    $result0                 = $query0->get_result();
                                    while ( $row0            = $result0->fetch_assoc() ){
                                       $tanggal             = tgl_indo($row0['tanggal']);
                                       $isi_artikel         = $row0['isi_artikel'];
                                       $isi                 = substr($isi_artikel,0,50); // ambil sebanyak 220 karakter
                                       $isi                 = substr($isi_artikel,0,strrpos($isi," ")); // potong per spasi kalimat
                                    
                                    ?>
                                 <article class="elementor-post elementor-grid-item post-1281 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
                                    <a class="elementor-post__thumbnail__link" href="#" >
                                       <div class="elementor-post__thumbnail"><img width="1726px" height="986px" src="gambar/artikel/<?php echo $row0['gambar']; ?>" class="attachment-full size-full" alt="" loading="lazy" /></div>
                                    </a>
                                    <div class="elementor-post__text">
                                       <h3 class="elementor-post__title">
                                          <a href="#belumada-data" >
                                          <?php echo $row0['judul_artikel']; ?>			</a>
                                       </h3>
                                       <div class="elementor-post__meta-data">
                                          <span class="elementor-post-date">
                                          <?php echo $row0['hari'].' ,'.$tanggal; ?>, Dibaca: <?php echo $row0['dibaca']; ?> kali		</span>
                                       </div>
                                       <div class="elementor-post__excerpt">
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis convallis elit sed orci tristique, ac malesuada est mattis. Nam tincidunt lectus nec ipsum aliquam venenatis sed non enim. Nam nec metus metus. </p>
                                       </div>
                                    </div>
                                 </article>
                                 <?php } ?>
                                 <!-- end here -->
                                 <!-- <article class="elementor-post elementor-grid-item post-1278 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
                                    <a class="elementor-post__thumbnail__link" href="https://elementor.deverust.com/techvisio/2022/02/07/how-we-are-using-our-business-as-a-force-for-good/" >
                                       <div class="elementor-post__thumbnail"><img width="1800" height="1014" src="wp-content/uploads/sites/20/2022/02/innovative-business-technology-RW8XPGW.jpg" class="attachment-full size-full" alt="" loading="lazy" /></div>
                                    </a>
                                    <div class="elementor-post__text">
                                       <h3 class="elementor-post__title">
                                          <a href="https://elementor.deverust.com/techvisio/2022/02/07/how-we-are-using-our-business-as-a-force-for-good/" >
                                          How We Are Using Our Business as a Force For Good			</a>
                                       </h3>
                                       <div class="elementor-post__meta-data">
                                          <span class="elementor-post-date">
                                          February 7, 2022		</span>
                                          <span class="elementor-post-avatar">
                                          No Comments		</span>
                                       </div>
                                       <div class="elementor-post__excerpt">
                                          <p>Maecenas dignissim urna vitae aliquet ullamcorper. Vivamus non purus aliquet, ornare metus ut, finibus turpis. Proin a orci ut neque elementum condimentum eget vel quam. Vivamus enim lacus, elementum sed velit at, posuere congue neque</p>
                                       </div>
                                    </div>
                                    </article> -->
                                 <!-- <article class="elementor-post elementor-grid-item post-1274 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
                                    <a class="elementor-post__thumbnail__link" href="https://elementor.deverust.com/techvisio/2022/02/07/why-the-digital-creative-agency-model-needs-a-rethink/" >
                                       <div class="elementor-post__thumbnail"><img width="1844" height="1229" src="wp-content/uploads/sites/20/2022/02/technologies-in-business-VSH2THX.jpg" class="attachment-full size-full" alt="" loading="lazy" /></div>
                                    </a>
                                    <div class="elementor-post__text">
                                       <h3 class="elementor-post__title">
                                          <a href="https://elementor.deverust.com/techvisio/2022/02/07/why-the-digital-creative-agency-model-needs-a-rethink/" >
                                          Why the digital creative agency model needs a rethink			</a>
                                       </h3>
                                       <div class="elementor-post__meta-data">
                                          <span class="elementor-post-date">
                                          February 7, 2022		</span>
                                          <span class="elementor-post-avatar">
                                          No Comments		</span>
                                       </div>
                                       <div class="elementor-post__excerpt">
                                          <p>In vehicula ante vel ex commodo, quis blandit eros fermentum. Nam hendrerit purus sit amet condimentum gravida. Proin at est leo. Curabitur nec odio eros.</p>
                                       </div>
                                    </div>
                                    </article> -->
                                 <!-- <article class="elementor-post elementor-grid-item post-1270 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
                                    <a class="elementor-post__thumbnail__link" href="https://elementor.deverust.com/techvisio/2022/02/07/6-reasons-why-a-full-service-creative-agency-matters/" >
                                       <div class="elementor-post__thumbnail"><img width="1920" height="1280" src="wp-content/uploads/sites/20/2022/02/developing-programming-working-in-a-software-engin-BEKL65Q.jpg" class="attachment-full size-full" alt="" loading="lazy" /></div>
                                    </a>
                                    <div class="elementor-post__text">
                                       <h3 class="elementor-post__title">
                                          <a href="https://elementor.deverust.com/techvisio/2022/02/07/6-reasons-why-a-full-service-creative-agency-matters/" >
                                          6 Reasons Why A Full Service Creative Agency Matters			</a>
                                       </h3>
                                       <div class="elementor-post__meta-data">
                                          <span class="elementor-post-date">
                                          February 7, 2022		</span>
                                          <span class="elementor-post-avatar">
                                          No Comments		</span>
                                       </div>
                                       <div class="elementor-post__excerpt">
                                          <p>Duis id ipsum pellentesque, tempus justo id, tincidunt velit. Donec bibendum sem eget augue bibendum, ut pretium sem lobortis. Duis tellus risus, varius ut ligula non, bibendum tristique ligula.</p>
                                       </div>
                                    </div>
                                    </article> -->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-928826d" data-id="928826d" data-element_type="column">
                     <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-580c453 elementor-grid-1 elementor-posts--thumbnail-none elementor-grid-tablet-2 elementor-grid-mobile-1 elementor-widget elementor-widget-posts" data-id="580c453" data-element_type="widget" data-settings="{&quot;classic_columns&quot;:&quot;1&quot;,&quot;classic_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:8,&quot;sizes&quot;:[]},&quot;classic_columns_tablet&quot;:&quot;2&quot;,&quot;classic_columns_mobile&quot;:&quot;1&quot;,&quot;classic_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;classic_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="posts.classic">
                           <div class="elementor-widget-container">
                              <div class="elementor-posts-container elementor-posts elementor-posts--skin-classic elementor-grid">
                                 
                              <?php
								include "../config/tgl_indo.php";
								$query0                  = $db->prepare("SELECT artikel.id_artikel, artikel.judul_artikel, artikel.judul_seo, artikel.isi_artikel, artikel.gambar, artikel.dibaca, artikel.tanggal, artikel.hari FROM artikel INNER JOIN kategori_artikel ON artikel.id_kategori=kategori_artikel.id_kategori ORDER BY artikel.id_artikel DESC LIMIT 4");
								$query0->execute();
								$result0                 = $query0->get_result();
								while ( $row0            = $result0->fetch_assoc() ){
									$tanggal             = tgl_indo($row0['tanggal']);
									$isi_artikel         = $row0['isi_artikel'];
									$isi                 = substr($isi_artikel,0,110); // ambil sebanyak 220 karakter
									$isi                 = substr($isi_artikel,0,strrpos($isi," ")); // potong per spasi kalimat

								?>
                              <article class="elementor-post elementor-grid-item post-1281 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
                                    <div class="elementor-post__text">
                                       <h3 class="elementor-post__title">
                                          <a href="#" >
                                          <?php echo $row0['judul_artikel']; ?>				</a>
                                       </h3>
                                       <div class="elementor-post__meta-data">
                                          <span class="elementor-post-date">
                                          <?= $tanggal; ?>		</span>
                                          
                                       </div>
                                    </div>
                                 </article>

                                 <?php
										}
									?>
                                 <!-- <article class="elementor-post elementor-grid-item post-1278 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
                                    <div class="elementor-post__text">
                                       <h3 class="elementor-post__title">
                                          <a href="#" >
                                          How We Are Using Our Business as a Force For Good			</a>
                                       </h3>
                                       <div class="elementor-post__meta-data">
                                          <span class="elementor-post-date">
                                          February 7, 2022		</span>
                                          <span class="elementor-post-avatar">
                                          No Comments		</span>
                                       </div>
                                    </div>
                                 </article> -->
                                 <!-- <article class="elementor-post elementor-grid-item post-1274 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
                                    <div class="elementor-post__text">
                                       <h3 class="elementor-post__title">
                                          <a href="#" >
                                          Why the digital creative agency model needs a rethink			</a>
                                       </h3>
                                       <div class="elementor-post__meta-data">
                                          <span class="elementor-post-date">
                                          February 7, 2022		</span>
                                          <span class="elementor-post-avatar">
                                          No Comments		</span>
                                       </div>
                                    </div>
                                 </article> -->
                                 <!-- <article class="elementor-post elementor-grid-item post-1270 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
                                    <div class="elementor-post__text">
                                       <h3 class="elementor-post__title">
                                          <a href="#" >
                                          6 Reasons Why A Full Service Creative Agency Matters			</a>
                                       </h3>
                                       <div class="elementor-post__meta-data">
                                          <span class="elementor-post-date">
                                          February 7, 2022		</span>
                                          <span class="elementor-post-avatar">
                                          No Comments		</span>
                                       </div>
                                    </div>
                                 </article> -->
                                 <!-- <article class="elementor-post elementor-grid-item post-1111 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
                                    <div class="elementor-post__text">
                                       <h3 class="elementor-post__title">
                                          <a href="#" >
                                          The Irreplaceable Role of Internal Publications			</a>
                                       </h3>
                                       <div class="elementor-post__meta-data">
                                          <span class="elementor-post-date">
                                          June 18, 2021		</span>
                                          <span class="elementor-post-avatar">
                                          1 Comment		</span>
                                       </div>
                                    </div>
                                 </article> -->
                                 <!-- <article class="elementor-post elementor-grid-item post-1260 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
                                    <div class="elementor-post__text">
                                       <h3 class="elementor-post__title">
                                          <a href="#" >
                                          How to Effectively Plan a Workshop			</a>
                                       </h3>
                                       <div class="elementor-post__meta-data">
                                          <span class="elementor-post-date">
                                          June 18, 2021		</span>
                                          <span class="elementor-post-avatar">
                                          No Comments		</span>
                                       </div>
                                    </div>
                                 </article> -->
                                 <!-- <article class="elementor-post elementor-grid-item post-1259 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
                                    <div class="elementor-post__text">
                                       <h3 class="elementor-post__title">
                                          <a href="#" >
                                          How Employees Can Benefit from Team Building			</a>
                                       </h3>
                                       <div class="elementor-post__meta-data">
                                          <span class="elementor-post-date">
                                          June 18, 2021		</span>
                                          <span class="elementor-post-avatar">
                                          No Comments		</span>
                                       </div>
                                    </div>
                                 </article> -->
                                 <!-- <article class="elementor-post elementor-grid-item post-374 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
                                    <div class="elementor-post__text">
                                       <h3 class="elementor-post__title">
                                          <a href="#" >
                                          Business Trend In Financial Field			</a>
                                       </h3>
                                       <div class="elementor-post__meta-data">
                                          <span class="elementor-post-date">
                                          June 18, 2021		</span>
                                          <span class="elementor-post-avatar">
                                          No Comments		</span>
                                       </div>
                                    </div>
                                 </article> -->
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
<section class="elementor-section elementor-top-section elementor-element elementor-element-df23087 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="df23087" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
   <div class="elementor-container elementor-column-gap-no">
      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2865b93" data-id="2865b93" data-element_type="column">
         <div class="elementor-widget-wrap elementor-element-populated">
            <section class="elementor-section elementor-inner-section elementor-element elementor-element-9e27d90 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9e27d90" data-element_type="section">
               <div class="elementor-container elementor-column-gap-wider">
                  <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-a88c905" data-id="a88c905" data-element_type="column">
                     <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-c16aa72 elementor-widget__width-initial elementor-align-center elementor-widget elementor-widget-lottie" data-id="c16aa72" data-element_type="widget" data-settings="{&quot;source_json&quot;:{&quot;url&quot;:&quot;https:\/\/elementor.deverust.com\/techvisio\/wp-content\/uploads\/sites\/20\/2022\/03\/lf20_vsg5kswn.json&quot;,&quot;id&quot;:1638,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;loop&quot;:&quot;yes&quot;,&quot;source&quot;:&quot;media_file&quot;,&quot;caption_source&quot;:&quot;none&quot;,&quot;link_to&quot;:&quot;none&quot;,&quot;trigger&quot;:&quot;arriving_to_viewport&quot;,&quot;viewport&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;play_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;start_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;0&quot;,&quot;sizes&quot;:[]},&quot;end_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;100&quot;,&quot;sizes&quot;:[]},&quot;renderer&quot;:&quot;svg&quot;}" data-widget_type="lottie.default">
                           <div class="elementor-widget-container">
                              <div class="e-lottie__container">
                                 <div class="e-lottie__animation"></div>
                              </div>
                           </div>
                        </div>
                        <div class="elementor-element elementor-element-ae079f8 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="ae079f8" data-element_type="widget" data-widget_type="heading.default">
                           <div class="elementor-widget-container">
                              <h2 class="elementor-heading-title elementor-size-default">Lokasi</h2>
                           </div>
                        </div>
                        <div class="elementor-element elementor-element-f8d80f2 elementor-widget elementor-widget-heading" data-id="f8d80f2" data-element_type="widget" data-widget_type="heading.default">
                           <div class="elementor-widget-container">
                              <h2 class="elementor-heading-title elementor-size-default">Temukan Kami Dengan Mudah.</h2>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section class="elementor-section elementor-inner-section elementor-element elementor-element-630d11c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="630d11c" data-element_type="section">
               <div class="elementor-container elementor-column-gap-wider">
                  <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-24ac299" data-id="24ac299" data-element_type="column">
                     <div class="elementor-widget-wrap elementor-element-populated">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15864.562685454992!2d106.8433534!3d-6.2451859!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x160234e756fdf17b!2sWisma%20NH!5e0!3m2!1sid!2sid!4v1653851215571!5m2!1sid!2sid" width="auto" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </div>
   </div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-f546d9f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f546d9f" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
   <div class="elementor-container elementor-column-gap-wider">
      <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-b684a13" data-id="b684a13" data-element_type="column">
         <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-4586b7f elementor-widget elementor-widget-heading" data-id="4586b7f" data-element_type="widget" data-widget_type="heading.default">
               <div class="elementor-widget-container">
                  <h2 class="elementor-heading-title elementor-size-default">Ingin Berencana Memulai Project baru Anda ?</h2>
               </div>
            </div>
            <div class="elementor-element elementor-element-560ed19 elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-headline--style-highlight elementor-widget elementor-widget-animated-headline" data-id="560ed19" data-element_type="widget" data-settings="{&quot;highlighted_text&quot;:&quot;info@trinusatech.com&quot;,&quot;headline_style&quot;:&quot;highlight&quot;,&quot;marker&quot;:&quot;circle&quot;,&quot;loop&quot;:&quot;yes&quot;,&quot;highlight_animation_duration&quot;:1200,&quot;highlight_iteration_delay&quot;:8000}" data-widget_type="animated-headline.default">
               <div class="elementor-widget-container">
                  <h3 class="elementor-headline">
                     <span class="elementor-headline-plain-text elementor-headline-text-wrapper">Biarkan kami membantu Anda</span>
                     <span class="elementor-headline-dynamic-wrapper elementor-headline-text-wrapper">
                     <span class="elementor-headline-dynamic-text elementor-headline-text-active">info@trinusatech.com</span>
                     </span>
                  </h3>
               </div>
            </div>
         </div>
      </div>
      <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-296be8e" data-id="296be8e" data-element_type="column">
         <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-3d7f02d elementor-widget__width-auto elementor-widget elementor-widget-button" data-id="3d7f02d" data-element_type="widget" data-widget_type="button.default">
               <div class="elementor-widget-container">
                  <div class="elementor-button-wrapper">
                     <a href="#" class="elementor-button-link elementor-button elementor-size-lg" role="button">
                     <span class="elementor-button-content-wrapper">
                     <span class="elementor-button-text">Request Proposal</span>
                     </span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
</div>