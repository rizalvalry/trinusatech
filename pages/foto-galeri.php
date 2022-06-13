<?php
	$query567 = $db->query("SELECT DISTINCT foto.judul_foto ,galeri.judul_galeri FROM galeri LEFT JOIN foto ON foto.id_galeri=galeri.id_galeri WHERE galeri.id_galeri = '$_GET[id]' ");
	$jml567   = $query567->num_rows;
	$row567   = $query567->fetch_assoc();
	
?>

<div data-elementor-type="wp-post" data-elementor-id="68" class="elementor elementor-68">
   <section class="elementor-section elementor-top-section elementor-element elementor-element-601441e elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="601441e" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;shape_divider_bottom&quot;:&quot;curve&quot;}">
      <div class="elementor-shape elementor-shape-bottom" data-negative="false">
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path class="elementor-shape-fill" d="M1000,4.3V0H0v4.3C0.9,23.1,126.7,99.2,500,100S1000,22.7,1000,4.3z"/>
         </svg>
      </div>
      <div class="elementor-container elementor-column-gap-no-landingpage">
         <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4492f8d" data-id="4492f8d" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
            </div>
         </div>
      </div>
   </section>
   <div data-elementor-type="wp-post" data-elementor-id="2337" class="elementor elementor-2337">
      <section class="elementor-section elementor-top-section elementor-element elementor-element-1bd1539 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1bd1539" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
         <div class="elementor-container elementor-column-gap-wider">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-803b5f6" data-id="803b5f6" data-element_type="column">
               <div class="elementor-widget-wrap elementor-element-populated">
                  <div class="elementor-element elementor-element-ffe136c elementor-widget__width-initial elementor-align-center elementor-widget elementor-widget-lottie" data-id="ffe136c" data-element_type="widget" data-settings="{&quot;source_json&quot;:{&quot;url&quot;:&quot;https:\/\/elementor.deverust.com\/techvisio\/wp-content\/uploads\/sites\/20\/2022\/03\/lf20_vsg5kswn.json&quot;,&quot;id&quot;:1638,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;loop&quot;:&quot;yes&quot;,&quot;source&quot;:&quot;media_file&quot;,&quot;caption_source&quot;:&quot;none&quot;,&quot;link_to&quot;:&quot;none&quot;,&quot;trigger&quot;:&quot;arriving_to_viewport&quot;,&quot;viewport&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;play_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;start_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;0&quot;,&quot;sizes&quot;:[]},&quot;end_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;100&quot;,&quot;sizes&quot;:[]},&quot;renderer&quot;:&quot;svg&quot;}"
                     data-widget_type="lottie.default">
                     <div class="elementor-widget-container">
                        <div class="e-lottie__container">
                           <div class="e-lottie__animation"></div>
                        </div>
                     </div>
                  </div>
                  <!-- <div class="elementor-element elementor-element-033512f elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="033512f" data-element_type="widget" data-widget_type="heading.default">
                     <div class="elementor-widget-container">
                         <h2 class="elementor-heading-title elementor-size-default">Our Hero Team</h2>
                     </div>
                     </div> -->
                  <div class="elementor-element elementor-element-2d031da elementor-widget elementor-widget-heading" data-id="2d031da" data-element_type="widget" data-widget_type="heading.default">
                     <div class="elementor-widget-container">
					 <?php if ($row567['judul_foto']  == "") { ?>
						<h2 class="elementor-heading-title elementor-size-default">Kosong</h2>
				<?php } else { ?>
					<h2 class="elementor-heading-title elementor-size-default"><?= $row567['judul_foto']; ?></h2>
				
				<?php } ?>
                        
                     </div>
                  </div>
                  <div class="elementor-element elementor-element-a77e51e elementor-widget__width-initial elementor-absolute elementor-align-center elementor-widget elementor-widget-lottie" data-id="a77e51e" data-element_type="widget" data-settings="{&quot;source_json&quot;:{&quot;url&quot;:&quot;https:\/\/elementor.deverust.com\/techvisio\/wp-content\/uploads\/sites\/20\/2022\/03\/lf20_pbmohvcz.json&quot;,&quot;id&quot;:1359,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;loop&quot;:&quot;yes&quot;,&quot;_position&quot;:&quot;absolute&quot;,&quot;source&quot;:&quot;media_file&quot;,&quot;caption_source&quot;:&quot;none&quot;,&quot;link_to&quot;:&quot;none&quot;,&quot;trigger&quot;:&quot;arriving_to_viewport&quot;,&quot;viewport&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;play_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;start_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;0&quot;,&quot;sizes&quot;:[]},&quot;end_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;100&quot;,&quot;sizes&quot;:[]},&quot;renderer&quot;:&quot;svg&quot;}"
                     data-widget_type="lottie.default">
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
      <div class="container">
         <div class="main">
            <ul class="cards">
			<?php
				$query1234      = $db->query("SELECT foto, judul_foto, keterangan FROM foto WHERE id_galeri = '$_GET[id]' ORDER BY judul_foto ASC");
				while( $row1234 = $query1234->fetch_assoc() ){
			?>
               <!-- loop here -->
               <li class="cards_item">
                  <div class="card">
                     <a href="foto-galeri-<?php echo $row1234['id_galeri']; ?>.html">
                        <div class="card_image"><img src="gambar/foto/<?php echo $row1234['foto']; ?>" class="contain-gall"></div>
                     </a>
                     <div class="card_content">
                        <p class="card_title"><?php echo $row1234['judul_foto']; ?></p>
                        <p class="card_text"><?php echo $row1234['keterangan']; ?></p>
                        </div>
                  </div>
               </li>
               <!-- end loop here -->
               <?php
                  }
                  ?>
            </ul>
         </div>
      </div>
   </div>
</div>