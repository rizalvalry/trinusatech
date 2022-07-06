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
                                
                                    <div id="slideshow">
                                    <?php 
                                       $no = 1; 
                                       $query37 = $db->query("SELECT nama_slide, link_slide, gambar_slide FROM slide WHERE aktif = 'Y' ORDER BY id_slide DESC");
                                  
                                       while ( $row337 = $query37->fetch_assoc() ){ ?>
                                       <div>
                                       <img src="gambar/slide/<?= $row337['gambar_slide']; ?>">
                                       </div>
                                       
                                       <?php } ?>
                                    </div>
                              
                                 
                                 <script>
                                    $("#slideshow > div:gt(0)").hide();

                                    setInterval(function() {
                                    $('#slideshow > div:first')
                                       .fadeOut(1000)
                                       .next()
                                       .fadeIn(1000)
                                       .end()
                                       .appendTo('#slideshow');
                                    }, 5000);
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
   $homepage1 = $db->query("SELECT isi_halaman FROM `halaman_statis` WHERE `link_halaman` LIKE '%homepage%' ORDER BY `id_halaman` LIMIT 1");
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
												$queryservices = $db->prepare("SELECT nama_kategori, icon FROM kategori_produk");
												$queryservices->execute();
												$servicesresult      = $queryservices->get_result();
												while ( $row1234         = $servicesresult->fetch_assoc() ){ ?>
                        <!-- loop here -->
                        <div class="elementor-element elementor-element-0857d0e elementor-position-left elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-hidden-tablet elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="0857d0e" data-element_type="widget" data-widget_type="icon-box.default">
                           <div class="elementor-widget-container">
                              <div class="elementor-icon-box-wrapper">
                                 <div class="elementor-icon-box-icon">
                                    <a href="foto-galeri-<?php echo $row1234['id_galeri']; ?>">
                                       <span class="elementor-icon elementor-animation-" >
                                          <center>
                                          <!-- <img class="radius-circle" src="gambar/thumb_produk1/<?php echo $row1234['gambar']; ?>" width="48" height="48" /> -->
                                          <?php echo $row1234['icon']; ?>
                                          <center>
                                       </span>
                                    </a>
                                 </div>
                                 <div class="elementor-icon-box-content">
                                    <h3 class="elementor-icon-box-title">
                                       <span><?php echo $row1234['nama_kategori']; ?></span>
                                    </h3>
                                    <!-- <p class="elementor-icon-box-description">Solusi kami mencakup bidang-bidang berikut:</p> -->
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end here -->
                        <?php } ?>

                        <?php 
												$queryservices = $db->prepare("SELECT nama_kategori, icon FROM kategori_produk");
												$queryservices->execute();
												$servicesresult      = $queryservices->get_result();
												while ( $row1234         = $servicesresult->fetch_assoc() ){ ?>
                      
                        <div class="elementor-element elementor-element-29e9e20 elementor-position-left elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-hidden-desktop elementor-hidden-mobile elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="29e9e20" data-element_type="widget" data-widget_type="icon-box.default">
                           <div class="elementor-widget-container">
                              <div class="elementor-icon-box-wrapper">
                                 <div class="elementor-icon-box-icon">
                                 <a href="foto-galeri-<?php echo $row1234['id_galeri']; ?>">
                                       <span class="elementor-icon elementor-animation-" >
                                          <center>
                                          <!-- <img class="radius-circle" src="gambar/thumb_produk1/<?php echo $row1234['gambar']; ?>" width="48" height="48" /> -->
                                          <?php echo $row1234['icon']; ?>
                                          <center>
                                       </span>
                                    </a>
                                 </div>
                                 <div class="elementor-icon-box-content">
                                    <h3 class="elementor-icon-box-title">
                                       <span><?php echo $row1234['nama_kategori']; ?></span>
                                    </h3>
                                    <!-- <p class="elementor-icon-box-description">Solusi kami mencakup bidang-bidang berikut:</p> -->
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end here -->
                        <?php } ?>
                        
                        
                        
                        
                        
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
   $porto = $db->query("SELECT metode_pengiriman FROM pengiriman WHERE urutan = 1 AND aktif = 'Y'");
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
   
   	
   ?>
<div class="elementor-element elementor-element-f886a39 elementor-position-left elementor-vertical-align-middle elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-image-box" data-id="f886a39" data-element_type="widget" data-widget_type="image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper">
<figure class="elementor-image-box-img"><a href="#"><img width="1885" height="1258" src="<?= $users[$i]; $i++; ?>" class="attachment-full size-full" alt="" loading="lazy" /></a></figure>
<div class="elementor-image-box-content">
<h3 class="elementor-image-box-title"><a href="#">Hardware & Software </a></h3>
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
               $porto2 = $db->query("SELECT metode_pengiriman FROM pengiriman WHERE urutan = 2 AND aktif = 'Y'");
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
            <!-- <div class="elementor-element elementor-element-4e55f42 elementor-icon-list--layout-inline elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="4e55f42" data-element_type="widget" data-widget_type="icon-list.default">
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
            </div> -->
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
               $homepage1 = $db->query("SELECT isi_halaman,aktif FROM `halaman_statis` WHERE `link_halaman` AND aktif='Y' LIKE '%homepage%' ORDER BY id_halaman LIMIT 1 OFFSET 2 ");
               $contentone = $homepage1->fetch_assoc();?>

               <?= $contentone['isi_halaman']; ?>

               </div>
            </section>
         </div>
      </div>
   </div>
</section>
<!-- artikel disembunyikan -->
<!-- <section class="elementor-section elementor-top-section elementor-element elementor-element-5e211f1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5e211f1" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
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
            </section> -->
            <!-- <section class="elementor-section elementor-inner-section elementor-element elementor-element-9158289 elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9158289" data-element_type="section">
               <div class="elementor-container elementor-column-gap-wider">
                  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-420c4e1" data-id="420c4e1" data-element_type="column">
                     <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-7d0f8d0 elementor-grid-1 elementor-posts--thumbnail-none elementor-grid-tablet-1 elementor-grid-mobile-1 elementor-widget elementor-widget-posts" data-id="7d0f8d0" data-element_type="widget" data-settings="{&quot;classic_columns&quot;:&quot;1&quot;,&quot;classic_columns_tablet&quot;:&quot;1&quot;,&quot;classic_columns_mobile&quot;:&quot;1&quot;,&quot;classic_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:35,&quot;sizes&quot;:[]},&quot;classic_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;classic_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="posts.classic">
                           <div class="elementor-widget-container">
                              <div class="elementor-posts-container elementor-posts elementor-posts--skin-classic elementor-grid">
                                 
                               -->
                              <?php
                                 // $hotnews = $db->query("SELECT * FROM `artikel` ORDER BY `id_artikel` DESC  LIMIT 1");
                                 // $artikelutama = $hotnews->fetch_assoc();
                                 // $isi_artikel_hot         = $artikelutama['isi_artikel'];
					                  // $isi_utama                 = substr($isi_artikel_hot,0,110); // ambil sebanyak 220 karakter
					                  // $isi_utama                 = substr($isi_artikel_hot,0,strrpos($isi_utama," ")); // potong per spasi kalimat
                                 ?>


                              <!-- <article class="elementor-post elementor-grid-item post-374 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
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
                  </div> -->
                  <!-- <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2f665bf" data-id="2f665bf" data-element_type="column">
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
            </section> -->
            <!-- <section class="elementor-section elementor-inner-section elementor-element elementor-element-61a832c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="61a832c" data-element_type="section">
               <div class="elementor-container elementor-column-gap-wider">
                  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-98b2106" data-id="98b2106" data-element_type="column">
                     <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-0845a5b elementor-grid-2 elementor-grid-tablet-2 elementor-grid-mobile-1 elementor-posts--thumbnail-top elementor-widget elementor-widget-posts" data-id="0845a5b" data-element_type="widget" data-settings="{&quot;classic_columns&quot;:&quot;2&quot;,&quot;classic_columns_tablet&quot;:&quot;2&quot;,&quot;classic_columns_mobile&quot;:&quot;1&quot;,&quot;classic_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:35,&quot;sizes&quot;:[]},&quot;classic_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;classic_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="posts.classic">
                           <div class="elementor-widget-container">
                              <div class="elementor-posts-container elementor-posts elementor-posts--skin-classic elementor-grid"> -->
                                 <!-- loop here -->
                                 <?php
                                    // include "config/tgl_indo.php";
                                    // $query0                  = $db->prepare("SELECT artikel.id_artikel, artikel.tag, artikel.judul_artikel, artikel.judul_seo, artikel.isi_artikel, artikel.gambar, artikel.dibaca, artikel.tanggal, artikel.hari FROM artikel INNER JOIN kategori_artikel ON artikel.id_kategori=kategori_artikel.id_kategori ORDER BY artikel.id_artikel DESC LIMIT 1,5");
                                    // $query0->execute();
                                    // $result0                 = $query0->get_result();
                                    // while ( $row0            = $result0->fetch_assoc() ){
                                    //    $tanggal             = tgl_indo($row0['tanggal']);
                                    //    $isi_artikel         = $row0['isi_artikel'];
                                    //    $isi                 = substr($isi_artikel,0,50); // ambil sebanyak 220 karakter
                                    //    $isi                 = substr($isi_artikel,0,strrpos($isi," ")); // potong per spasi kalimat
                                    
                                    ?>
                                 <!-- <article class="elementor-post elementor-grid-item post-1281 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
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
                                 </article> -->
                                 <?php //} ?>
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
                              <!-- </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-928826d" data-id="928826d" data-element_type="column">
                     <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-580c453 elementor-grid-1 elementor-posts--thumbnail-none elementor-grid-tablet-2 elementor-grid-mobile-1 elementor-widget elementor-widget-posts" data-id="580c453" data-element_type="widget" data-settings="{&quot;classic_columns&quot;:&quot;1&quot;,&quot;classic_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:8,&quot;sizes&quot;:[]},&quot;classic_columns_tablet&quot;:&quot;2&quot;,&quot;classic_columns_mobile&quot;:&quot;1&quot;,&quot;classic_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;classic_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="posts.classic">
                           <div class="elementor-widget-container">
                              <div class="elementor-posts-container elementor-posts elementor-posts--skin-classic elementor-grid"> -->
                                 
                              <?php
								// include "../config/tgl_indo.php";
								// $query0                  = $db->prepare("SELECT artikel.id_artikel, artikel.judul_artikel, artikel.judul_seo, artikel.isi_artikel, artikel.gambar, artikel.dibaca, artikel.tanggal, artikel.hari FROM artikel INNER JOIN kategori_artikel ON artikel.id_kategori=kategori_artikel.id_kategori ORDER BY artikel.id_artikel DESC LIMIT 4");
								// $query0->execute();
								// $result0                 = $query0->get_result();
								// while ( $row0            = $result0->fetch_assoc() ){
								// 	$tanggal             = tgl_indo($row0['tanggal']);
								// 	$isi_artikel         = $row0['isi_artikel'];
								// 	$isi                 = substr($isi_artikel,0,110); // ambil sebanyak 220 karakter
								// 	$isi                 = substr($isi_artikel,0,strrpos($isi," ")); // potong per spasi kalimat

								?>
                              <!-- <article class="elementor-post elementor-grid-item post-1281 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
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
                                 </article> -->

                                 <?php
										// }
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
                              <!-- </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </div>
   </div>
</section> -->
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