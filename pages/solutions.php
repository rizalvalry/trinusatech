<?php
		// $query55->bind_param("iss", $id_kategori);
		$id_kategori = $_GET['id'];
		$query55          = $db->prepare("SELECT id_subkategori,nama_subkategori,subkategori_seo FROM subkategori_produk WHERE id_kategori=$id_kategori ORDER BY nama_subkategori ASC");
		$query55->execute();
		$result55         = $query55->get_result();
		
	
		
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



<div data-elementor-type="wp-post" data-elementor-id="2462" class="elementor elementor-2462">
                       
                        <section class="elementor-section elementor-top-section elementor-element elementor-element-e16636a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e16636a" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ccd1796" data-id="ccd1796" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-0782bc2 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0782bc2" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-wider">
                                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-753f06c" data-id="753f06c" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-7b429bd elementor-widget__width-initial elementor-align-center elementor-widget elementor-widget-lottie" data-id="7b429bd" data-element_type="widget" data-settings="{&quot;source_json&quot;:{&quot;url&quot;:&quot;https:\/\/elementor.deverust.com\/techvisio\/wp-content\/uploads\/sites\/20\/2022\/03\/lf20_vsg5kswn.json&quot;,&quot;id&quot;:1638,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;loop&quot;:&quot;yes&quot;,&quot;source&quot;:&quot;media_file&quot;,&quot;caption_source&quot;:&quot;none&quot;,&quot;link_to&quot;:&quot;none&quot;,&quot;trigger&quot;:&quot;arriving_to_viewport&quot;,&quot;viewport&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;play_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;start_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;0&quot;,&quot;sizes&quot;:[]},&quot;end_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;100&quot;,&quot;sizes&quot;:[]},&quot;renderer&quot;:&quot;svg&quot;}"
                                                            data-widget_type="lottie.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="e-lottie__container">
                                                                    <div class="e-lottie__animation"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                       
                                                        <div class="elementor-element elementor-element-ea4db54 elementor-widget elementor-widget-heading" data-id="ea4db54" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default wow fadeInRight animated"><?php 
                                                                $judulproduk = $db->query("SELECT id_kategori,nama_kategori FROM kategori_produk WHERE id_kategori = $id_kategori");
                                                                $technologi = $judulproduk->fetch_assoc();
                                                                echo $technologi['nama_kategori']; ?></h2>
                                                            </div>
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </section>


                                        <!-- loop here -->

                                        <?php 
                                        while ( $row55 = $result55->fetch_assoc() ){
                                        ?>
                                      
                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-3245845 elementor-section-boxed elementor-section-height-default elementor-section-height-default wow fadeInUp animated" data-id="3245845" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-container elementor-column-gap-wider">
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2fbf59b" data-id="2fbf59b" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-02ea1be elementor-widget elementor-widget-heading" data-id="02ea1be" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default"><?= $row55['nama_subkategori'] ?></h2>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-adb6e44" data-id="adb6e44" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-68e4ad5 elementor-widget elementor-widget-heading" data-id="68e4ad5" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <!-- <h2 class="elementor-heading-title elementor-size-default">Job Description:</h2> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-da9ec79" data-id="da9ec79" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-9b70529 elementor-align-center elementor-mobile-align-left elementor-widget elementor-widget-button" data-id="9b70529" data-element_type="widget" data-widget_type="button.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-button-wrapper">
                                                                    <a href="kategori-<?= $row55['id_subkategori']?>-<?= $row55['subkategori_seo']?>" class="elementor-button-link elementor-button elementor-size-md" role="button">
                                                                        <span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Lihat</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <?php } ?>
                                        <!-- end here -->
                                       
                                    </div>
                                </div>
                            </div>
                        </section>
                        
                    </div>
                    
                    



</div>