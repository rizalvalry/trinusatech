
    
                    
                    <div data-elementor-type="wp-post" data-elementor-id="2301" class="elementor elementor-2301">
                        <section class="elementor-section elementor-top-section elementor-element elementor-element-c12f14d elementor-section-full_width elementor-section-height-min-height elementor-section-height-default elementor-section-items-middle" data-id="c12f14d" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-wider">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c5103b3" data-id="c5103b3" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-48c15f4 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="48c15f4" data-element_type="widget" data-widget_type="divider.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-divider">
                                                    <span class="elementor-divider-separator">
													</span>
                                                </div>
                                            </div>
                                        </div>
                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-471b146 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="471b146" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-no">
                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-8209268" data-id="8209268" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-6227b54 elementor-icon-list--layout-inline elementor-mobile-align-center elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="6227b54" data-element_type="widget" data-widget_type="icon-list.default">
                                                            <div class="elementor-widget-container">
                                                                <ul class="elementor-icon-list-items elementor-inline-items">
																<?php
											$query3 = $db->prepare("SELECT id_kategori,nama_kategori,kategori_seo FROM kategori_artikel WHERE aktif=? ORDER BY nama_kategori ASC");
											$query3->bind_param("s", $aktif3);
											$aktif3 = "Y";
											$query3->execute();
											$result3= $query3->get_result();
											while ( $row3 = $result3->fetch_assoc() ){ ?>
											
                                                                    <li class="elementor-icon-list-item elementor-inline-item">
                                                                        <a href="label-<?= $row3['id_kategori']; ?>-<?= $row3['kategori_seo']; ?>">

                                                                            <span class="elementor-icon-list-text"><?= $row3['nama_kategori']; ?></span>
                                                                        </a>
                                                                    </li>
                                                                    <!-- <li class="elementor-icon-list-item elementor-inline-item">
                                                                        <a href="#">

                                                                            <span class="elementor-icon-list-text">Designer</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="elementor-icon-list-item elementor-inline-item">
                                                                        <a href="#">

                                                                            <span class="elementor-icon-list-text">Programming</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="elementor-icon-list-item elementor-inline-item">
                                                                        <a href="#">

                                                                            <span class="elementor-icon-list-text">Machine Learning</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="elementor-icon-list-item elementor-inline-item">
                                                                        <a href="#">

                                                                            <span class="elementor-icon-list-text">Tips & Tricks</span>
                                                                        </a>
                                                                    </li> -->
																	<?php } ?> 
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-6794634" data-id="6794634" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-e319ce5 elementor-shape-circle e-grid-align-right e-grid-align-tablet-right e-grid-align-mobile-center elementor-widget-mobile__width-inherit elementor-grid-0 elementor-widget elementor-widget-social-icons"
                                                            data-id="e319ce5" data-element_type="widget" data-widget_type="social-icons.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-social-icons-wrapper elementor-grid">
                                                                    <span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-e1b9914" target="_blank">
						<span class="elementor-screen-only">Facebook</span>
                                                                    <i class="fab fa-facebook"></i> </a>
                                                                    </span>
                                                                    <span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-091c081" target="_blank">
						<span class="elementor-screen-only">Twitter</span>
                                                                    <i class="fab fa-twitter"></i> </a>
                                                                    </span>
                                                                    <span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-repeater-item-33e459b" target="_blank">
						<span class="elementor-screen-only">Youtube</span>
                                                                    <i class="fab fa-youtube"></i> </a>
                                                                    </span>
                                                                    <span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-73c1f11" target="_blank">
						<span class="elementor-screen-only">Instagram</span>
                                                                    <i class="fab fa-instagram"></i> </a>
                                                                    </span>
                                                                    <span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-pinterest elementor-repeater-item-ef09b24" target="_blank">
						<span class="elementor-screen-only">Pinterest</span>
                                                                    <i class="fab fa-pinterest"></i> </a>
                                                                    </span>
                                                                    <span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-rss elementor-repeater-item-d7cb4ff" target="_blank">
						<span class="elementor-screen-only">Rss</span>
                                                                    <i class="fas fa-rss"></i> </a>
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

						<?php
							$query55          = $db->prepare("SELECT kategori_artikel.nama_kategori FROM artikel INNER JOIN kategori_artikel ON artikel.id_kategori=kategori_artikel.id_kategori WHERE kategori_artikel.id_kategori = ?");
							$query55->bind_param("i", $id_artikel55);
							$id_artikel55 = $_GET['id'];
							$query55->execute();
							$result55         = $query55->get_result();
							$row55            = $result55->fetch_assoc();
							$jumlah55         = $result55->num_rows;
							
							if ( $jumlah55 > 0 ){
							
							
						?>
                        
                        <section class="elementor-section elementor-top-section elementor-element elementor-element-dfc953a elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="dfc953a" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3dccd2b" data-id="3dccd2b" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-596dd5b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="596dd5b" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-wider">
                                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-898d4e9" data-id="898d4e9" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-8c8060a elementor-widget__width-initial elementor-align-center elementor-widget elementor-widget-lottie" data-id="8c8060a" data-element_type="widget" data-settings="{&quot;source_json&quot;:{&quot;url&quot;:&quot;https:\/\/elementor.deverust.com\/techvisio\/wp-content\/uploads\/sites\/20\/2022\/03\/lf20_vsg5kswn.json&quot;,&quot;id&quot;:1638,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;loop&quot;:&quot;yes&quot;,&quot;source&quot;:&quot;media_file&quot;,&quot;caption_source&quot;:&quot;none&quot;,&quot;link_to&quot;:&quot;none&quot;,&quot;trigger&quot;:&quot;arriving_to_viewport&quot;,&quot;viewport&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;play_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;start_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;0&quot;,&quot;sizes&quot;:[]},&quot;end_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;100&quot;,&quot;sizes&quot;:[]},&quot;renderer&quot;:&quot;svg&quot;}"
                                                            data-widget_type="lottie.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="e-lottie__container">
                                                                    <div class="e-lottie__animation"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-d5afa81 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="d5afa81" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default"><?php echo $row55['nama_kategori']; ?></h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-050c4b3 elementor-grid-2 elementor-grid-tablet-2 elementor-grid-mobile-1 elementor-posts--thumbnail-top elementor-widget elementor-widget-posts" data-id="050c4b3" data-element_type="widget" data-settings="{&quot;classic_columns&quot;:&quot;2&quot;,&quot;classic_columns_tablet&quot;:&quot;2&quot;,&quot;classic_columns_mobile&quot;:&quot;1&quot;,&quot;classic_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:35,&quot;sizes&quot;:[]},&quot;classic_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;classic_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                                            data-widget_type="posts.classic">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-posts-container elementor-posts elementor-posts--skin-classic elementor-grid">
                                                                    
																<!-- loop here -->
																<?php
																	include "config/tgl_indo.php";
																	$batas                   = 9;
																	if ( empty($_GET['hallabel']) ){
																		$posisi              = 0;
																		$_GET['hallabel'] = 1;
																	} else if ( $_GET['hallabel'] > 0 ){
																		$posisi              = ( $_GET['hallabel'] - 1 ) * $batas;
																	}
																	$query5                  = $db->prepare("SELECT artikel.id_artikel, artikel.judul_artikel, artikel.judul_seo, artikel.isi_artikel, artikel.gambar, artikel.dibaca, artikel.tanggal, artikel.hari FROM artikel INNER JOIN kategori_artikel ON artikel.id_kategori=kategori_artikel.id_kategori WHERE kategori_artikel.id_kategori=? ORDER BY artikel.id_artikel DESC limit $posisi, $batas");
																	$query5->bind_param("i", $id_artikel5);
																	$id_artikel5             = $_GET['id'];
																	$query5->execute();
																	$result5                 = $query5->get_result();
																	while ( $row5            = $result5->fetch_assoc() ){
																		$tanggal             = tgl_indo($row5['tanggal']);
																		$isi_artikel         = $row5['isi_artikel'];
																		$isi                 = substr($isi_artikel,0,150); // ambil sebanyak 220 karakter
																		$isi                 = substr($isi_artikel,0,strrpos($isi," ")); // potong per spasi kalimat

																?>
																	<article class="elementor-post elementor-grid-item post-1270 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
                                                                        <a class="elementor-post__thumbnail__link" href="artikel-<?php echo $row5['id_artikel']; ?>-<?php echo $row5['judul_seo']; ?>">
                                                                            <div class="elementor-post__thumbnail"><img width="1920" height="1280" src="gambar/artikel/<?php echo $row5['gambar']; ?>" class="attachment-full size-full" alt=""
                                                                                    loading="lazy" /></div>
                                                                        </a>
                                                                        <div class="elementor-post__text">
                                                                            <h3 class="elementor-post__title">
                                                                                <a href="artikel-<?php echo $row5['id_artikel']; ?>-<?php echo $row5['judul_seo']; ?>">
																				<?php echo $row5['judul_artikel']; ?>			</a>
                                                                            </h3>
                                                                            <div class="elementor-post__meta-data">
                                                                                <span class="elementor-post-author">
																				<?php echo $row55['nama_kategori']; ?>		</span>
                                                                                <span class="elementor-post-date">
																				<?php echo $row5['hari'].' ,'.$tanggal; ?>		</span>
                                                                            </div>
                                                                        </div>
                                                                    </article>
																	<?php
																		}
																	?>
																	<!-- end here -->

                                                                    <!-- <article class="elementor-post elementor-grid-item post-374 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
                                                                        <a class="elementor-post__thumbnail__link" href="https://elementor.deverust.com/techvisio/2021/06/18/business-trend-in-financial-field/">
                                                                            <div class="elementor-post__thumbnail"><img width="1752" height="1168" src="wp-content/uploads/sites/20/2021/06/business-solutions-technology-and-strategy-concept-LZCD7LG.jpg" class="attachment-full size-full" alt=""
                                                                                    loading="lazy" /></div>
                                                                        </a>
                                                                        <div class="elementor-post__text">
                                                                            <h3 class="elementor-post__title">
                                                                                <a href="https://elementor.deverust.com/techvisio/2021/06/18/business-trend-in-financial-field/">
				Business Trend In Financial Field			</a>
                                                                            </h3>
                                                                            <div class="elementor-post__meta-data">
                                                                                <span class="elementor-post-author">
			Hamilton Serafin		</span>
                                                                                <span class="elementor-post-date">
			June 18, 2021		</span>
                                                                            </div>
                                                                        </div>
                                                                    </article> -->
                                                                    <!-- <article class="elementor-post elementor-grid-item post-1259 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
                                                                        <a class="elementor-post__thumbnail__link" href="https://elementor.deverust.com/techvisio/2021/06/18/how-employees-can-benefit-from-team-building/">
                                                                            <div class="elementor-post__thumbnail"><img width="1885" height="1258" src="wp-content/uploads/sites/20/2021/06/technologies-making-business-easier-4BJ2BZZ.jpg" class="attachment-full size-full" alt="" loading="lazy"
                                                                                /></div>
                                                                        </a>
                                                                        <div class="elementor-post__text">
                                                                            <h3 class="elementor-post__title">
                                                                                <a href="https://elementor.deverust.com/techvisio/2021/06/18/how-employees-can-benefit-from-team-building/">
				How Employees Can Benefit from Team Building			</a>
                                                                            </h3>
                                                                            <div class="elementor-post__meta-data">
                                                                                <span class="elementor-post-author">
			Hamilton Serafin		</span>
                                                                                <span class="elementor-post-date">
			June 18, 2021		</span>
                                                                            </div>
                                                                        </div>
                                                                    </article> -->
                                                                    <!-- <article class="elementor-post elementor-grid-item post-1260 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
                                                                        <a class="elementor-post__thumbnail__link" href="https://elementor.deverust.com/techvisio/2021/06/18/how-to-effectively-plan-a-workshop/">
                                                                            <div class="elementor-post__thumbnail"><img width="1890" height="1260" src="wp-content/uploads/sites/20/2021/06/hi-tech-of-business-and-financial-concept-76U5KNE.jpg" class="attachment-full size-full" alt="" loading="lazy"
                                                                                /></div>
                                                                        </a>
                                                                        <div class="elementor-post__text">
                                                                            <h3 class="elementor-post__title">
                                                                                <a href="https://elementor.deverust.com/techvisio/2021/06/18/how-to-effectively-plan-a-workshop/">
				How to Effectively Plan a Workshop			</a>
                                                                            </h3>
                                                                            <div class="elementor-post__meta-data">
                                                                                <span class="elementor-post-author">
			Hamilton Serafin		</span>
                                                                                <span class="elementor-post-date">
			June 18, 2021		</span>
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
                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-b864efe elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b864efe" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-container elementor-column-gap-wider">
                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-12541dd" data-id="12541dd" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-79bf71c elementor-widget__width-initial elementor-align-center elementor-widget elementor-widget-lottie" data-id="79bf71c" data-element_type="widget" data-settings="{&quot;source_json&quot;:{&quot;url&quot;:&quot;https:\/\/elementor.deverust.com\/techvisio\/wp-content\/uploads\/sites\/20\/2022\/03\/lf20_vsg5kswn.json&quot;,&quot;id&quot;:1638,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;loop&quot;:&quot;yes&quot;,&quot;source&quot;:&quot;media_file&quot;,&quot;caption_source&quot;:&quot;none&quot;,&quot;link_to&quot;:&quot;none&quot;,&quot;trigger&quot;:&quot;arriving_to_viewport&quot;,&quot;viewport&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;play_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;start_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;0&quot;,&quot;sizes&quot;:[]},&quot;end_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;100&quot;,&quot;sizes&quot;:[]},&quot;renderer&quot;:&quot;svg&quot;}"
                                                            data-widget_type="lottie.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="e-lottie__container">
                                                                    <div class="e-lottie__animation"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-c452a37 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="c452a37" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Your Insight Today</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-8c30c04 elementor-grid-1 elementor-posts--thumbnail-none elementor-grid-tablet-1 elementor-grid-mobile-1 elementor-widget elementor-widget-posts" data-id="8c30c04" data-element_type="widget" data-settings="{&quot;classic_columns&quot;:&quot;1&quot;,&quot;classic_columns_tablet&quot;:&quot;1&quot;,&quot;classic_columns_mobile&quot;:&quot;1&quot;,&quot;classic_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:35,&quot;sizes&quot;:[]},&quot;classic_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;classic_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                                            data-widget_type="posts.classic">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-posts-container elementor-posts elementor-posts--skin-classic elementor-grid">
                                                                    <article class="elementor-post elementor-grid-item post-1278 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
                                                                        <div class="elementor-post__text">
                                                                            <h3 class="elementor-post__title">
                                                                                <a href="https://elementor.deverust.com/techvisio/2022/02/07/how-we-are-using-our-business-as-a-force-for-good/">
				How We Are Using Our Business as a Force For Good			</a>
                                                                            </h3>
                                                                            <div class="elementor-post__meta-data">
                                                                                <span class="elementor-post-date">
			February 7, 2022		</span>
                                                                                <span class="elementor-post-avatar">
			No Comments		</span>
                                                                            </div>
                                                                            <div class="elementor-post__excerpt">
                                                                                <p>Maecenas dignissim urna vitae aliquet ullamcorper. Vivamus non purus aliquet, ornare metus ut, finibus turpis. Proin a orci ut neque elementum condimentum eget vel quam. Vivamus
                                                                                    enim lacus, elementum sed velit at, posuere congue neque</p>
                                                                            </div>

                                                                            <a class="elementor-post__read-more" href="https://elementor.deverust.com/techvisio/2022/02/07/how-we-are-using-our-business-as-a-force-for-good/">
			Read More		</a>

                                                                        </div>
                                                                    </article>
                                                                </div>



                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-749567d" data-id="749567d" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-b083d09 elementor-grid-1 elementor-grid-tablet-1 elementor-grid-mobile-1 elementor-posts--thumbnail-top elementor-widget elementor-widget-posts" data-id="b083d09" data-element_type="widget" data-settings="{&quot;classic_columns&quot;:&quot;1&quot;,&quot;classic_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;classic_columns_tablet&quot;:&quot;1&quot;,&quot;classic_columns_mobile&quot;:&quot;1&quot;,&quot;classic_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;classic_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                                            data-widget_type="posts.classic">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-posts-container elementor-posts elementor-posts--skin-classic elementor-grid">
                                                                    <article class="elementor-post elementor-grid-item post-1278 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
                                                                        <a class="elementor-post__thumbnail__link" href="https://elementor.deverust.com/techvisio/2022/02/07/how-we-are-using-our-business-as-a-force-for-good/">
                                                                            <div class="elementor-post__thumbnail"><img width="1800" height="1014" src="wp-content/uploads/sites/20/2022/02/innovative-business-technology-RW8XPGW.jpg" class="attachment-full size-full" alt="" loading="lazy" /></div>
                                                                        </a>
                                                                        <div class="elementor-post__text">
                                                                        </div>
                                                                    </article>
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
                        <section class="elementor-section elementor-top-section elementor-element elementor-element-3eb0a6d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3eb0a6d" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-wider">
                                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-b34c0a5" data-id="b34c0a5" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-8224096 elementor-widget__width-initial elementor-align-center elementor-widget elementor-widget-lottie" data-id="8224096" data-element_type="widget" data-settings="{&quot;source_json&quot;:{&quot;url&quot;:&quot;https:\/\/elementor.deverust.com\/techvisio\/wp-content\/uploads\/sites\/20\/2022\/03\/lf20_vsg5kswn.json&quot;,&quot;id&quot;:1638,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;loop&quot;:&quot;yes&quot;,&quot;source&quot;:&quot;media_file&quot;,&quot;caption_source&quot;:&quot;none&quot;,&quot;link_to&quot;:&quot;none&quot;,&quot;trigger&quot;:&quot;arriving_to_viewport&quot;,&quot;viewport&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;play_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;start_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;0&quot;,&quot;sizes&quot;:[]},&quot;end_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;100&quot;,&quot;sizes&quot;:[]},&quot;renderer&quot;:&quot;svg&quot;}"
                                            data-widget_type="lottie.default">
                                            <div class="elementor-widget-container">
                                                <div class="e-lottie__container">
                                                    <div class="e-lottie__animation"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-3b02900 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="3b02900" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Recommended to Read</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-39b61b4 elementor-widget elementor-widget-heading" data-id="39b61b4" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Our Blogs</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-c970adb elementor-grid-1 elementor-posts--thumbnail-none elementor-grid-tablet-2 elementor-grid-mobile-1 elementor-widget elementor-widget-posts" data-id="c970adb" data-element_type="widget" data-settings="{&quot;classic_columns&quot;:&quot;1&quot;,&quot;classic_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:16,&quot;sizes&quot;:[]},&quot;classic_columns_tablet&quot;:&quot;2&quot;,&quot;classic_columns_mobile&quot;:&quot;1&quot;,&quot;classic_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;classic_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                            data-widget_type="posts.classic">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-posts-container elementor-posts elementor-posts--skin-classic elementor-grid">
                                                    <article class="elementor-post elementor-grid-item post-1274 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
                                                        <div class="elementor-post__text">
                                                            <h3 class="elementor-post__title">
                                                                <a href="https://elementor.deverust.com/techvisio/2022/02/07/why-the-digital-creative-agency-model-needs-a-rethink/">
				Why the digital creative agency model needs a rethink			</a>
                                                            </h3>
                                                            <div class="elementor-post__meta-data">
                                                                <span class="elementor-post-date">
			February 7, 2022		</span>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="elementor-post elementor-grid-item post-1281 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
                                                        <div class="elementor-post__text">
                                                            <h3 class="elementor-post__title">
                                                                <a href="https://elementor.deverust.com/techvisio/2022/02/07/the-ultimate-guide-to-email-marketing-benchmarks-for-2022/">
				The Ultimate Guide to Email Marketing Benchmarks for 2022			</a>
                                                            </h3>
                                                            <div class="elementor-post__meta-data">
                                                                <span class="elementor-post-date">
			February 7, 2022		</span>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="elementor-post elementor-grid-item post-1111 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
                                                        <div class="elementor-post__text">
                                                            <h3 class="elementor-post__title">
                                                                <a href="https://elementor.deverust.com/techvisio/2021/06/18/the-irreplaceable-role-of-internal-publications/">
				The Irreplaceable Role of Internal Publications			</a>
                                                            </h3>
                                                            <div class="elementor-post__meta-data">
                                                                <span class="elementor-post-date">
			June 18, 2021		</span>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="elementor-post elementor-grid-item post-1278 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
                                                        <div class="elementor-post__text">
                                                            <h3 class="elementor-post__title">
                                                                <a href="https://elementor.deverust.com/techvisio/2022/02/07/how-we-are-using-our-business-as-a-force-for-good/">
				How We Are Using Our Business as a Force For Good			</a>
                                                            </h3>
                                                            <div class="elementor-post__meta-data">
                                                                <span class="elementor-post-date">
			February 7, 2022		</span>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-9f89d0d" data-id="9f89d0d" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-42e4822 elementor-grid-1 elementor-grid-tablet-1 elementor-grid-mobile-1 elementor-posts--thumbnail-top elementor-widget elementor-widget-posts" data-id="42e4822" data-element_type="widget" data-settings="{&quot;classic_columns&quot;:&quot;1&quot;,&quot;classic_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;classic_columns_tablet&quot;:&quot;1&quot;,&quot;classic_columns_mobile&quot;:&quot;1&quot;,&quot;classic_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;classic_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                            data-widget_type="posts.classic">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-posts-container elementor-posts elementor-posts--skin-classic elementor-grid">
                                                    <article class="elementor-post elementor-grid-item post-1274 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
                                                        <a class="elementor-post__thumbnail__link" href="https://elementor.deverust.com/techvisio/2022/02/07/why-the-digital-creative-agency-model-needs-a-rethink/">
                                                            <div class="elementor-post__thumbnail"><img width="1844" height="1229" src="wp-content/uploads/sites/20/2022/02/technologies-in-business-VSH2THX.jpg" class="attachment-full size-full" alt="" loading="lazy" /></div>
                                                        </a>
                                                        <div class="elementor-post__text">
                                                        </div>
                                                    </article>
                                                </div>



                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-f1d3725 elementor-grid-1 elementor-posts--thumbnail-none elementor-posts--align-center elementor-grid-tablet-1 elementor-grid-mobile-1 elementor-widget elementor-widget-posts" data-id="f1d3725" data-element_type="widget"
                                            data-settings="{&quot;classic_columns&quot;:&quot;1&quot;,&quot;classic_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:24,&quot;sizes&quot;:[]},&quot;classic_columns_tablet&quot;:&quot;1&quot;,&quot;classic_columns_mobile&quot;:&quot;1&quot;,&quot;classic_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;classic_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                            data-widget_type="posts.classic">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-posts-container elementor-posts elementor-posts--skin-classic elementor-grid">
                                                    <article class="elementor-post elementor-grid-item post-1274 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
                                                        <div class="elementor-post__text">
                                                            <h3 class="elementor-post__title">
                                                                <a href="https://elementor.deverust.com/techvisio/2022/02/07/why-the-digital-creative-agency-model-needs-a-rethink/">
				Why the digital creative agency model needs a rethink			</a>
                                                            </h3>
                                                        </div>
                                                    </article>
                                                </div>



                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-ae0de83 elementor-grid-1 elementor-posts--thumbnail-none elementor-posts--align-center elementor-grid-tablet-1 elementor-grid-mobile-1 elementor-widget elementor-widget-posts" data-id="ae0de83" data-element_type="widget"
                                            data-settings="{&quot;classic_columns&quot;:&quot;1&quot;,&quot;classic_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:24,&quot;sizes&quot;:[]},&quot;classic_columns_tablet&quot;:&quot;1&quot;,&quot;classic_columns_mobile&quot;:&quot;1&quot;,&quot;classic_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;classic_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                            data-widget_type="posts.classic">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-posts-container elementor-posts elementor-posts--skin-classic elementor-grid">
                                                    <article class="elementor-post elementor-grid-item post-1274 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
                                                        <div class="elementor-post__text">
                                                            <div class="elementor-post__meta-data">
                                                                <span class="elementor-post-author">
			Hamilton Serafin		</span>
                                                                <span class="elementor-post-date">
			February 7, 2022		</span>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-07112eb" data-id="07112eb" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-b1872c3 elementor-grid-1 elementor-posts--thumbnail-left elementor-grid-tablet-2 elementor-grid-mobile-1 elementor-widget elementor-widget-posts" data-id="b1872c3" data-element_type="widget" data-settings="{&quot;classic_columns&quot;:&quot;1&quot;,&quot;classic_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:24,&quot;sizes&quot;:[]},&quot;classic_columns_tablet&quot;:&quot;2&quot;,&quot;classic_columns_mobile&quot;:&quot;1&quot;,&quot;classic_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;classic_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                            data-widget_type="posts.classic">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-posts-container elementor-posts elementor-posts--skin-classic elementor-grid">
                                                    <article class="elementor-post elementor-grid-item post-374 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
                                                        <a class="elementor-post__thumbnail__link" href="https://elementor.deverust.com/techvisio/2021/06/18/business-trend-in-financial-field/">
                                                            <div class="elementor-post__thumbnail"><img width="1752" height="1168" src="wp-content/uploads/sites/20/2021/06/business-solutions-technology-and-strategy-concept-LZCD7LG.jpg" class="attachment-full size-full" alt="" loading="lazy"
                                                                /></div>
                                                        </a>
                                                        <div class="elementor-post__text">
                                                            <h3 class="elementor-post__title">
                                                                <a href="https://elementor.deverust.com/techvisio/2021/06/18/business-trend-in-financial-field/">
				Business Trend In Financial Field			</a>
                                                            </h3>
                                                            <div class="elementor-post__meta-data">
                                                                <span class="elementor-post-date">
			June 18, 2021		</span>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="elementor-post elementor-grid-item post-1259 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
                                                        <a class="elementor-post__thumbnail__link" href="https://elementor.deverust.com/techvisio/2021/06/18/how-employees-can-benefit-from-team-building/">
                                                            <div class="elementor-post__thumbnail"><img width="1885" height="1258" src="wp-content/uploads/sites/20/2021/06/technologies-making-business-easier-4BJ2BZZ.jpg" class="attachment-full size-full" alt="" loading="lazy" /></div>
                                                        </a>
                                                        <div class="elementor-post__text">
                                                            <h3 class="elementor-post__title">
                                                                <a href="https://elementor.deverust.com/techvisio/2021/06/18/how-employees-can-benefit-from-team-building/">
				How Employees Can Benefit from Team Building			</a>
                                                            </h3>
                                                            <div class="elementor-post__meta-data">
                                                                <span class="elementor-post-date">
			June 18, 2021		</span>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="elementor-post elementor-grid-item post-1260 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
                                                        <a class="elementor-post__thumbnail__link" href="https://elementor.deverust.com/techvisio/2021/06/18/how-to-effectively-plan-a-workshop/">
                                                            <div class="elementor-post__thumbnail"><img width="1890" height="1260" src="wp-content/uploads/sites/20/2021/06/hi-tech-of-business-and-financial-concept-76U5KNE.jpg" class="attachment-full size-full" alt="" loading="lazy" /></div>
                                                        </a>
                                                        <div class="elementor-post__text">
                                                            <h3 class="elementor-post__title">
                                                                <a href="https://elementor.deverust.com/techvisio/2021/06/18/how-to-effectively-plan-a-workshop/">
				How to Effectively Plan a Workshop			</a>
                                                            </h3>
                                                            <div class="elementor-post__meta-data">
                                                                <span class="elementor-post-date">
			June 18, 2021		</span>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="elementor-post elementor-grid-item post-1111 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
                                                        <a class="elementor-post__thumbnail__link" href="https://elementor.deverust.com/techvisio/2021/06/18/the-irreplaceable-role-of-internal-publications/">
                                                            <div class="elementor-post__thumbnail"><img width="1823" height="1215" src="wp-content/uploads/sites/20/2021/06/womans-hands-typing-on-keyboard-at-desk-working-in-JDKKPMP.jpg" class="attachment-full size-full" alt="" loading="lazy"
                                                                /></div>
                                                        </a>
                                                        <div class="elementor-post__text">
                                                            <h3 class="elementor-post__title">
                                                                <a href="https://elementor.deverust.com/techvisio/2021/06/18/the-irreplaceable-role-of-internal-publications/">
				The Irreplaceable Role of Internal Publications			</a>
                                                            </h3>
                                                            <div class="elementor-post__meta-data">
                                                                <span class="elementor-post-date">
			June 18, 2021		</span>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div data-elementor-type="footer" data-elementor-id="161" class="elementor elementor-161 elementor-location-footer">
                        <section class="elementor-section elementor-top-section elementor-element elementor-element-623267b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="623267b" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3b71276" data-id="3b71276" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-c298a76 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c298a76" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-wider">
                                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-0c5c0f2" data-id="0c5c0f2" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-61dc0cf elementor-widget elementor-widget-heading" data-id="61dc0cf" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Let's Discuss</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-19c6139 elementor-widget elementor-widget-heading" data-id="19c6139" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">You Have Questions and We have answer</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-6361e62 elementor-reverse-tablet elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6361e62"
                                            data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-wider">
                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7f68231" data-id="7f68231" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-e22dc70 elementor-reverse-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e22dc70" data-element_type="section">
                                                            <div class="elementor-container elementor-column-gap-no">
                                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-82e6039" data-id="82e6039" data-element_type="column">
                                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                                        <div class="elementor-element elementor-element-bed0287 elementor-widget elementor-widget-heading" data-id="bed0287" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2 class="elementor-heading-title elementor-size-default">hi@techvisio.dom</h2>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-d242c7d elementor-widget elementor-widget-heading" data-id="d242c7d" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2 class="elementor-heading-title elementor-size-default">General Enquiries</h2>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-a9e1118 elementor-widget elementor-widget-heading" data-id="a9e1118" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2 class="elementor-heading-title elementor-size-default">help@techvisio.dom</h2>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-2d1c98a elementor-widget elementor-widget-heading" data-id="2d1c98a" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2 class="elementor-heading-title elementor-size-default">Service Complaint</h2>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-48c6779 elementor-shape-circle e-grid-align-left e-grid-align-tablet-left e-grid-align-mobile-center elementor-widget-mobile__width-inherit elementor-grid-4 elementor-widget elementor-widget-social-icons"
                                                                            data-id="48c6779" data-element_type="widget" data-widget_type="social-icons.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-social-icons-wrapper elementor-grid">
                                                                                    <span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-20b9e71" target="_blank">
						<span class="elementor-screen-only">Facebook</span>
                                                                                    <i class="fab fa-facebook"></i> </a>
                                                                                    </span>
                                                                                    <span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-bec210c" target="_blank">
						<span class="elementor-screen-only">Twitter</span>
                                                                                    <i class="fab fa-twitter"></i> </a>
                                                                                    </span>
                                                                                    <span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-repeater-item-8f490e2" target="_blank">
						<span class="elementor-screen-only">Youtube</span>
                                                                                    <i class="fab fa-youtube"></i> </a>
                                                                                    </span>
                                                                                    <span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-repeater-item-60bcc90" target="_blank">
						<span class="elementor-screen-only">Linkedin</span>
                                                                                    <i class="fab fa-linkedin"></i> </a>
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
                                                                                <p><em>Suzy Queue </em><em>4455 Landing Lange, </em><em>Louisville, KY 40018-1234</em></p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-c1e5cd3 elementor-widget__width-auto elementor-widget elementor-widget-counter" data-id="c1e5cd3" data-element_type="widget" data-widget_type="counter.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-counter">
                                                                                    <div class="elementor-counter-number-wrapper">
                                                                                        <span class="elementor-counter-number-prefix"></span>
                                                                                        <span class="elementor-counter-number" data-duration="2000" data-to-value="1415" data-from-value="0" data-delimiter=",">0</span>
                                                                                        <span class="elementor-counter-number-suffix">+ Customer</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-dfda685 elementor-widget elementor-widget-heading" data-id="dfda685" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2 class="elementor-heading-title elementor-size-default">Registered during 2022</h2>
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
                                                                        <div class="elementor-element elementor-element-6385073 elementor-tablet-align-left elementor-mobile-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="6385073"
                                                                            data-element_type="widget" data-widget_type="icon-list.default">
                                                                            <div class="elementor-widget-container">
                                                                                <ul class="elementor-icon-list-items">
                                                                                    <li class="elementor-icon-list-item">
                                                                                        <a href="#">

                                                                                            <span class="elementor-icon-list-text">About</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="elementor-icon-list-item">
                                                                                        <a href="#">

                                                                                            <span class="elementor-icon-list-text">News</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="elementor-icon-list-item">
                                                                                        <a href="#">

                                                                                            <span class="elementor-icon-list-text">Pricing</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="elementor-icon-list-item">
                                                                                        <a href="#">

                                                                                            <span class="elementor-icon-list-text">Team</span>
                                                                                        </a>
                                                                                    </li>
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
                                                                        <div class="elementor-element elementor-element-d2790e4 elementor-tablet-align-left elementor-mobile-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="d2790e4"
                                                                            data-element_type="widget" data-widget_type="icon-list.default">
                                                                            <div class="elementor-widget-container">
                                                                                <ul class="elementor-icon-list-items">
                                                                                    <li class="elementor-icon-list-item">
                                                                                        <a href="#">

                                                                                            <span class="elementor-icon-list-text">Blog</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="elementor-icon-list-item">
                                                                                        <a href="#">

                                                                                            <span class="elementor-icon-list-text">Career</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="elementor-icon-list-item">
                                                                                        <a href="#">

                                                                                            <span class="elementor-icon-list-text">FAQ</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="elementor-icon-list-item">
                                                                                        <a href="#">

                                                                                            <span class="elementor-icon-list-text">Testimonials</span>
                                                                                        </a>
                                                                                    </li>
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
                                                                        <div class="elementor-element elementor-element-194442b elementor-tablet-align-left elementor-mobile-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="194442b"
                                                                            data-element_type="widget" data-widget_type="icon-list.default">
                                                                            <div class="elementor-widget-container">
                                                                                <ul class="elementor-icon-list-items">
                                                                                    <li class="elementor-icon-list-item">
                                                                                        <a href="#">

                                                                                            <span class="elementor-icon-list-text">Help Center</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="elementor-icon-list-item">
                                                                                        <a href="#">

                                                                                            <span class="elementor-icon-list-text">Knowledgebase</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="elementor-icon-list-item">
                                                                                        <a href="#">

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
                                                                <h2 class="elementor-heading-title elementor-size-default">Ready to talk with us?</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-f6b8098 elementor-button-align-stretch elementor-widget elementor-widget-form" data-id="f6b8098" data-element_type="widget" data-settings="{&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;button_width&quot;:&quot;100&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}"
                                                            data-widget_type="form.default">
                                                            <div class="elementor-widget-container">
                                                                <form class="elementor-form" method="post" name="New Form">
                                                                    <input type="hidden" name="post_id" value="161" />
                                                                    <input type="hidden" name="form_id" value="f6b8098" />
                                                                    <input type="hidden" name="referer_title" value="Our Blog" />

                                                                    <input type="hidden" name="queried_id" value="2301" />

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
                                                                            <textarea class="elementor-field-textual elementor-field  elementor-size-sm" name="form_fields[message]" id="form-field-message" rows="4" placeholder="Message"></textarea> </div>
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
                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-f8eb478 elementor-reverse-mobile elementor-reverse-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f8eb478"
                                            data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-wider">
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-c7e77fd" data-id="c7e77fd" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-fe6f65e elementor-widget__width-auto elementor-fixed elementor-widget elementor-widget-heading" data-id="fe6f65e" data-element_type="widget" data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_effect&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;motion_fx_translateY_affectedRange&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:50}},&quot;motion_fx_range&quot;:&quot;page&quot;,&quot;_position&quot;:&quot;fixed&quot;,&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}"
                                                            data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default"><a href="#gotop">Top</a></h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-ed5967c elementor-widget__width-auto elementor-widget-mobile__width-inherit elementor-widget elementor-widget-text-editor" data-id="ed5967c" data-element_type="widget" data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                &copy; 2022 Enovasien Elementor Kit </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-4792627 elementor-widget__width-auto elementor-widget-mobile__width-inherit elementor-widget elementor-widget-text-editor" data-id="4792627" data-element_type="widget" data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                <p><a href="https://themeforest.net/user/deverust">by Deverust Studio</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7e79f28" data-id="7e79f28" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-cd0630e elementor-widget__width-auto elementor-widget elementor-widget-image" data-id="cd0630e" data-element_type="widget" data-widget_type="image.default">
                                                            <div class="elementor-widget-container">
                                                                <a href="https://elementor.deverust.com/techvisio/template-kit/homepage/">
                                                                    <img width="240" height="135" src="wp-content/uploads/sites/20/2022/03/white-techvisio.png" class="attachment-full size-full" alt="" loading="lazy" /> </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-b41cf48" data-id="b41cf48" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-9923c6e elementor-icon-list--layout-inline elementor-align-right elementor-mobile-align-center elementor-widget__width-auto elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                            data-id="9923c6e" data-element_type="widget" data-widget_type="icon-list.default">
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
                                                        <div class="elementor-element elementor-element-cbc4076 elementor-widget__width-auto elementor-fixed elementor-view-default elementor-widget elementor-widget-icon" data-id="cbc4076" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;fixed&quot;}"
                                                            data-widget_type="icon.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-icon-wrapper">
                                                                    <a class="elementor-icon" href="#elementor-action%3Aaction%3Dpopup%3Aopen%26settings%3DeyJpZCI6IjIxNDYiLCJ0b2dnbGUiOmZhbHNlfQ%3D%3D">
                                                                        <i aria-hidden="true" class="far fa-comment"></i> </a>
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
                        <section class="elementor-section elementor-top-section elementor-element elementor-element-297d2e3 elementor-section-height-min-height elementor-section-items-stretch elementor-section-boxed elementor-section-height-default" data-id="297d2e3" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-wider">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-86a5ed5" data-id="86a5ed5" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-938e2b4 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="938e2b4" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-no">
                                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-5980e80" data-id="5980e80" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-4999800 elementor-widget__width-initial elementor-widget elementor-widget-image" data-id="4999800" data-element_type="widget" data-widget_type="image.default">
                                                            <div class="elementor-widget-container">
                                                                <a href="https://elementor.deverust.com/techvisio/template-kit/homepage/">
                                                                    <img width="240" height="135" src="wp-content/uploads/sites/20/2022/03/color-white-techvisio.png" class="attachment-full size-full" alt="" loading="lazy" /> </a>
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
                                                        <div class="elementor-element elementor-element-ee09e26 elementor-position-left elementor-vertical-align-middle elementor-widget__width-auto elementor-hidden-mobile elementor-view-default elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                                                            data-id="ee09e26" data-element_type="widget" data-widget_type="icon-box.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-icon-box-wrapper">
                                                                    <div class="elementor-icon-box-icon">
                                                                        <span class="elementor-icon elementor-animation-">
				<i aria-hidden="true" class="fas fa-envelope"></i>				</span>
                                                                    </div>
                                                                    <div class="elementor-icon-box-content">
                                                                        <h3 class="elementor-icon-box-title">
                                                                            <span>
						Get Quote					</span>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-8ec25dd elementor-position-left elementor-vertical-align-middle elementor-widget__width-auto elementor-hidden-mobile elementor-view-default elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                                                            data-id="8ec25dd" data-element_type="widget" data-widget_type="icon-box.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-icon-box-wrapper">
                                                                    <div class="elementor-icon-box-icon">
                                                                        <span class="elementor-icon elementor-animation-">
				<i aria-hidden="true" class="fas fa-phone-alt"></i>				</span>
                                                                    </div>
                                                                    <div class="elementor-icon-box-content">
                                                                        <h3 class="elementor-icon-box-title">
                                                                            <span>
						+92 296 387					</span>
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
                                                        <div class="elementor-element elementor-element-b261752 elementor-hidden-mobile elementor-widget elementor-widget-gallery" data-id="b261752" data-element_type="widget" data-settings="{&quot;columns&quot;:3,&quot;columns_tablet&quot;:3,&quot;columns_mobile&quot;:3,&quot;aspect_ratio&quot;:&quot;1:1&quot;,&quot;lazyload&quot;:&quot;yes&quot;,&quot;gallery_layout&quot;:&quot;grid&quot;,&quot;gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;link_to&quot;:&quot;file&quot;,&quot;overlay_background&quot;:&quot;yes&quot;,&quot;content_hover_animation&quot;:&quot;fade-in&quot;}"
                                                            data-widget_type="gallery.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-gallery__container">
                                                                    <a class="e-gallery-item elementor-gallery-item elementor-animated-content" href="wp-content/uploads/sites/20/2022/03/playing-virtual-game-in-vr-goggles-ZQUNFS7.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-b261752" data-elementor-lightbox-title="playing-virtual-game-in-vr-goggles-ZQUNFS7"
                                                                        e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTYxNiwidXJsIjoiaHR0cHM6XC9cL2VsZW1lbnRvci5kZXZlcnVzdC5jb21cL3RlY2h2aXNpb1wvd3AtY29udGVudFwvdXBsb2Fkc1wvc2l0ZXNcLzIwXC8yMDIyXC8wM1wvcGxheWluZy12aXJ0dWFsLWdhbWUtaW4tdnItZ29nZ2xlcy1aUVVORlM3LmpwZyIsInNsaWRlc2hvdyI6ImFsbC1iMjYxNzUyIn0%3D">
                                                                        <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://elementor.deverust.com/techvisio/wp-content/uploads/sites/20/2022/03/playing-virtual-game-in-vr-goggles-ZQUNFS7.jpg" data-width="1885" data-height="1258" alt=""></div>
                                                                        <div class="elementor-gallery-item__overlay"></div>
                                                                    </a>
                                                                    <a class="e-gallery-item elementor-gallery-item elementor-animated-content" href="wp-content/uploads/sites/20/2022/03/digital-business-and-technology-SNQVNDV.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-b261752" data-elementor-lightbox-title="digital-business-and-technology-SNQVNDV"
                                                                        e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTYwMCwidXJsIjoiaHR0cHM6XC9cL2VsZW1lbnRvci5kZXZlcnVzdC5jb21cL3RlY2h2aXNpb1wvd3AtY29udGVudFwvdXBsb2Fkc1wvc2l0ZXNcLzIwXC8yMDIyXC8wM1wvZGlnaXRhbC1idXNpbmVzcy1hbmQtdGVjaG5vbG9neS1TTlFWTkRWLmpwZyIsInNsaWRlc2hvdyI6ImFsbC1iMjYxNzUyIn0%3D">
                                                                        <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://elementor.deverust.com/techvisio/wp-content/uploads/sites/20/2022/03/digital-business-and-technology-SNQVNDV.jpg" data-width="1900" data-height="1069" alt=""></div>
                                                                        <div class="elementor-gallery-item__overlay"></div>
                                                                    </a>
                                                                    <a class="e-gallery-item elementor-gallery-item elementor-animated-content" href="wp-content/uploads/sites/20/2021/06/technologies-making-business-easier-4BJ2BZZ.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-b261752" data-elementor-lightbox-title="technologies-making-business-easier-4BJ2BZZ"
                                                                        e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTU3MywidXJsIjoiaHR0cHM6XC9cL2VsZW1lbnRvci5kZXZlcnVzdC5jb21cL3RlY2h2aXNpb1wvd3AtY29udGVudFwvdXBsb2Fkc1wvc2l0ZXNcLzIwXC8yMDIxXC8wNlwvdGVjaG5vbG9naWVzLW1ha2luZy1idXNpbmVzcy1lYXNpZXItNEJKMkJaWi5qcGciLCJzbGlkZXNob3ciOiJhbGwtYjI2MTc1MiJ9">
                                                                        <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://elementor.deverust.com/techvisio/wp-content/uploads/sites/20/2021/06/technologies-making-business-easier-4BJ2BZZ.jpg" data-width="1885" data-height="1258" alt=""></div>
                                                                        <div class="elementor-gallery-item__overlay"></div>
                                                                    </a>
                                                                    <a class="e-gallery-item elementor-gallery-item elementor-animated-content" href="wp-content/uploads/sites/20/2021/06/hi-tech-of-business-and-financial-concept-76U5KNE.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-b261752"
                                                                        data-elementor-lightbox-title="hi-tech-of-business-and-financial-concept-76U5KNE" e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTU3MiwidXJsIjoiaHR0cHM6XC9cL2VsZW1lbnRvci5kZXZlcnVzdC5jb21cL3RlY2h2aXNpb1wvd3AtY29udGVudFwvdXBsb2Fkc1wvc2l0ZXNcLzIwXC8yMDIxXC8wNlwvaGktdGVjaC1vZi1idXNpbmVzcy1hbmQtZmluYW5jaWFsLWNvbmNlcHQtNzZVNUtORS5qcGciLCJzbGlkZXNob3ciOiJhbGwtYjI2MTc1MiJ9">
                                                                        <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://elementor.deverust.com/techvisio/wp-content/uploads/sites/20/2021/06/hi-tech-of-business-and-financial-concept-76U5KNE.jpg" data-width="1890" data-height="1260" alt=""></div>
                                                                        <div class="elementor-gallery-item__overlay"></div>
                                                                    </a>
                                                                    <a class="e-gallery-item elementor-gallery-item elementor-animated-content" href="wp-content/uploads/sites/20/2021/06/womans-hands-typing-on-keyboard-at-desk-working-in-JDKKPMP.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-b261752"
                                                                        data-elementor-lightbox-title="womans-hands-typing-on-keyboard-at-desk-working-in-JDKKPMP" e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTU3MSwidXJsIjoiaHR0cHM6XC9cL2VsZW1lbnRvci5kZXZlcnVzdC5jb21cL3RlY2h2aXNpb1wvd3AtY29udGVudFwvdXBsb2Fkc1wvc2l0ZXNcLzIwXC8yMDIxXC8wNlwvd29tYW5zLWhhbmRzLXR5cGluZy1vbi1rZXlib2FyZC1hdC1kZXNrLXdvcmtpbmctaW4tSkRLS1BNUC5qcGciLCJzbGlkZXNob3ciOiJhbGwtYjI2MTc1MiJ9">
                                                                        <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://elementor.deverust.com/techvisio/wp-content/uploads/sites/20/2021/06/womans-hands-typing-on-keyboard-at-desk-working-in-JDKKPMP.jpg" data-width="1823" data-height="1215"
                                                                            alt=""></div>
                                                                        <div class="elementor-gallery-item__overlay"></div>
                                                                    </a>
                                                                    <a class="e-gallery-item elementor-gallery-item elementor-animated-content" href="wp-content/uploads/sites/20/2022/02/developing-programming-working-in-a-software-engin-BEKL65Q.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-b261752"
                                                                        data-elementor-lightbox-title="developing-programming-working-in-a-software-engin-BEKL65Q" e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTU3MCwidXJsIjoiaHR0cHM6XC9cL2VsZW1lbnRvci5kZXZlcnVzdC5jb21cL3RlY2h2aXNpb1wvd3AtY29udGVudFwvdXBsb2Fkc1wvc2l0ZXNcLzIwXC8yMDIyXC8wMlwvZGV2ZWxvcGluZy1wcm9ncmFtbWluZy13b3JraW5nLWluLWEtc29mdHdhcmUtZW5naW4tQkVLTDY1US5qcGciLCJzbGlkZXNob3ciOiJhbGwtYjI2MTc1MiJ9">
                                                                        <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://elementor.deverust.com/techvisio/wp-content/uploads/sites/20/2022/02/developing-programming-working-in-a-software-engin-BEKL65Q.jpg" data-width="1920" data-height="1280"
                                                                            alt=""></div>
                                                                        <div class="elementor-gallery-item__overlay"></div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-8d04f4e elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-nav-menu" data-id="8d04f4e" data-element_type="widget" data-settings="{&quot;layout&quot;:&quot;dropdown&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;i class=\&quot;fas fa-chevron-down\&quot;&gt;&lt;\/i&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;}}"
                                                            data-widget_type="nav-menu.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Menu Toggle" aria-expanded="false">
                                                                    <i aria-hidden="true" role="presentation" class="elementor-menu-toggle__icon--open eicon-menu-bar"></i><i aria-hidden="true" role="presentation" class="elementor-menu-toggle__icon--close eicon-close"></i>                                                                    <span class="elementor-screen-only">Menu</span>
                                                                </div>
                                                                <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" role="navigation" aria-hidden="true">
                                                                    <ul id="menu-2-8d04f4e" class="elementor-nav-menu">
                                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-89"><a href="https://elementor.deverust.com/techvisio/template-kit/homepage/" class="elementor-item" tabindex="-1">Home</a></li>
                                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-90"><a href="https://elementor.deverust.com/techvisio/template-kit/about-us/" class="elementor-item" tabindex="-1">About Us</a></li>
                                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-93"><a href="#" class="elementor-item elementor-item-anchor" tabindex="-1">Service</a>
                                                                            <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-91"><a href="https://elementor.deverust.com/techvisio/template-kit/service-set/" class="elementor-sub-item" tabindex="-1">Service Set</a></li>
                                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-92"><a href="https://elementor.deverust.com/techvisio/template-kit/mobile-development/" class="elementor-sub-item" tabindex="-1">Service Detail</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-95"><a href="https://elementor.deverust.com/techvisio/template-kit/career-page/" class="elementor-item" tabindex="-1">Career</a></li>
                                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-97"><a href="#" class="elementor-item elementor-item-anchor" tabindex="-1">Pages</a>
                                                                            <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-98"><a href="https://elementor.deverust.com/techvisio/template-kit/our-team/" class="elementor-sub-item" tabindex="-1">Our Team</a></li>
                                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-99"><a href="https://elementor.deverust.com/techvisio/template-kit/testimonials/" class="elementor-sub-item" tabindex="-1">Testimonials</a></li>
                                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-100"><a href="https://elementor.deverust.com/techvisio/template-kit/pricing/" class="elementor-sub-item" tabindex="-1">Pricing &#038; Plans</a></li>
                                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-101"><a href="https://elementor.deverust.com/techvisio/template-kit/help-center/" class="elementor-sub-item" tabindex="-1">FAQ &#038; Help Center</a></li>
                                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-103"><a href="https://elementor.deverust.com/techvisio/nulled" class="elementor-sub-item" tabindex="-1">404</a></li>
                                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-104"><a href="https://elementor.deverust.com/techvisio/template-kit/coming-soon/" class="elementor-sub-item" tabindex="-1">Coming Soon</a></li>
                                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2256"><a href="https://elementor.deverust.com/techvisio/template-kit/login/" class="elementor-sub-item" tabindex="-1">Login</a></li>
                                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2300"><a href="https://elementor.deverust.com/techvisio/template-kit/register/" class="elementor-sub-item" tabindex="-1">Register</a></li>
                                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-105"><a href="https://elementor.deverust.com/techvisio/template-kit/contact-us/" class="elementor-sub-item" tabindex="-1">Contact Us</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-106"><a href="#" class="elementor-item elementor-item-anchor" tabindex="-1">Blog</a>
                                                                            <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-107"><a href="index.html" aria-current="page" class="elementor-sub-item elementor-item-active" tabindex="-1">Our Blog</a></li>
                                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-108"><a href="https://elementor.deverust.com/techvisio/category/optimization/" class="elementor-sub-item" tabindex="-1">Post Archive</a></li>
                                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-109"><a href="https://elementor.deverust.com/techvisio/2022/02/07/the-ultimate-guide-to-email-marketing-benchmarks-for-2022/" class="elementor-sub-item" tabindex="-1">Single Post</a></li>
                                                                            </ul>
                                                                        </li>
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
                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-b57ddfd elementor-hidden-desktop elementor-hidden-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b57ddfd"
                                            data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-no">
                                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-1eb5237" data-id="1eb5237" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-d79b37a elementor-widget__width-auto elementor-hidden-tablet elementor-hidden-desktop elementor-widget elementor-widget-button" data-id="d79b37a" data-element_type="widget" data-widget_type="button.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-button-wrapper">
                                                                    <a href="https://elementor.deverust.com/techvisio/template-kit/login/" class="elementor-button-link elementor-button elementor-size-md" role="button">
                                                                        <span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Login</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-cb372ef elementor-widget__width-auto elementor-hidden-tablet elementor-hidden-desktop elementor-widget elementor-widget-button" data-id="cb372ef" data-element_type="widget" data-widget_type="button.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-button-wrapper">
                                                                    <a href="https://elementor.deverust.com/techvisio/template-kit/register/" class="elementor-button-link elementor-button elementor-size-md" role="button">
                                                                        <span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Register</span>
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
                                                                <h2 class="elementor-heading-title elementor-size-default">hi@techvisio.dom</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-dc13a69 elementor-widget elementor-widget-heading" data-id="dc13a69" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">General Enquiries</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-3f4e6a7 elementor-widget elementor-widget-heading" data-id="3f4e6a7" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">help@techvisio.dom</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-4e97ef5 elementor-widget elementor-widget-heading" data-id="4e97ef5" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Service Complaint</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-134e90c elementor-widget elementor-widget-text-editor" data-id="134e90c" data-element_type="widget" data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                <p><em>Suzy Queue </em><em>4455 Landing Lange, </em><em>Louisville, KY 40018-1234</em></p>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-b44321d elementor-shape-circle e-grid-align-left e-grid-align-tablet-left e-grid-align-mobile-center elementor-widget-mobile__width-inherit elementor-grid-4 elementor-widget elementor-widget-social-icons"
                                                            data-id="b44321d" data-element_type="widget" data-widget_type="social-icons.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-social-icons-wrapper elementor-grid">
                                                                    <span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-20b9e71" target="_blank">
						<span class="elementor-screen-only">Facebook</span>
                                                                    <i class="fab fa-facebook"></i> </a>
                                                                    </span>
                                                                    <span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-bec210c" target="_blank">
						<span class="elementor-screen-only">Twitter</span>
                                                                    <i class="fab fa-twitter"></i> </a>
                                                                    </span>
                                                                    <span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-repeater-item-8f490e2" target="_blank">
						<span class="elementor-screen-only">Youtube</span>
                                                                    <i class="fab fa-youtube"></i> </a>
                                                                    </span>
                                                                    <span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-repeater-item-60bcc90" target="_blank">
						<span class="elementor-screen-only">Linkedin</span>
                                                                    <i class="fab fa-linkedin"></i> </a>
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
                                                                    <a href="https://elementor.deverust.com/techvisio/template-kit/contact-us/#talkus" class="elementor-button-link elementor-button elementor-size-sm" role="button">
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
                                                        <div class="elementor-element elementor-element-5a19e07 elementor-grid-1 elementor-grid-tablet-1 elementor-posts--thumbnail-none elementor-hidden-mobile elementor-grid-mobile-1 elementor-invisible elementor-widget elementor-widget-posts" data-id="5a19e07"
                                                            data-element_type="widget" data-settings="{&quot;classic_columns&quot;:&quot;1&quot;,&quot;classic_columns_tablet&quot;:&quot;1&quot;,&quot;classic_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:8,&quot;sizes&quot;:[]},&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;classic_columns_mobile&quot;:&quot;1&quot;,&quot;classic_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;classic_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                                            data-widget_type="posts.classic">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-posts-container elementor-posts elementor-posts--skin-classic elementor-grid">
                                                                    <article class="elementor-post elementor-grid-item post-1281 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
                                                                        <div class="elementor-post__text">
                                                                            <h3 class="elementor-post__title">
                                                                                <a href="https://elementor.deverust.com/techvisio/2022/02/07/the-ultimate-guide-to-email-marketing-benchmarks-for-2022/">
				The Ultimate Guide to Email Marketing Benchmarks for 2022			</a>
                                                                            </h3>
                                                                        </div>
                                                                    </article>
                                                                </div>



                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-fd36b2a elementor-grid-1 elementor-grid-tablet-1 elementor-posts--thumbnail-none elementor-hidden-mobile elementor-grid-mobile-1 elementor-invisible elementor-widget elementor-widget-posts" data-id="fd36b2a"
                                                            data-element_type="widget" data-settings="{&quot;classic_columns&quot;:&quot;1&quot;,&quot;classic_columns_tablet&quot;:&quot;1&quot;,&quot;classic_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:8,&quot;sizes&quot;:[]},&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;classic_columns_mobile&quot;:&quot;1&quot;,&quot;classic_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;classic_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                                            data-widget_type="posts.classic">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-posts-container elementor-posts elementor-posts--skin-classic elementor-grid">
                                                                    <article class="elementor-post elementor-grid-item post-374 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
                                                                        <div class="elementor-post__text">
                                                                            <h3 class="elementor-post__title">
                                                                                <a href="https://elementor.deverust.com/techvisio/2021/06/18/business-trend-in-financial-field/">
				Business Trend In Financial Field			</a>
                                                                            </h3>
                                                                        </div>
                                                                    </article>
                                                                </div>



                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-3d592a6 elementor-grid-1 elementor-grid-tablet-1 elementor-posts--thumbnail-none elementor-hidden-mobile elementor-grid-mobile-1 elementor-invisible elementor-widget elementor-widget-posts" data-id="3d592a6"
                                                            data-element_type="widget" data-settings="{&quot;classic_columns&quot;:&quot;1&quot;,&quot;classic_columns_tablet&quot;:&quot;1&quot;,&quot;classic_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:8,&quot;sizes&quot;:[]},&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;classic_columns_mobile&quot;:&quot;1&quot;,&quot;classic_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;classic_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                                            data-widget_type="posts.classic">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-posts-container elementor-posts elementor-posts--skin-classic elementor-grid">
                                                                    <article class="elementor-post elementor-grid-item post-1270 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
                                                                        <div class="elementor-post__text">
                                                                            <h3 class="elementor-post__title">
                                                                                <a href="https://elementor.deverust.com/techvisio/2022/02/07/6-reasons-why-a-full-service-creative-agency-matters/">
				6 Reasons Why A Full Service Creative Agency Matters			</a>
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
                                                        <div class="elementor-element elementor-element-6c6d55a elementor-search-form--skin-classic elementor-search-form--button-type-icon elementor-search-form--icon-search elementor-widget elementor-widget-search-form" data-id="6c6d55a" data-element_type="widget"
                                                            data-settings="{&quot;skin&quot;:&quot;classic&quot;}" data-widget_type="search-form.default">
                                                            <div class="elementor-widget-container">
                                                                <form class="elementor-search-form" role="search" action="https://elementor.deverust.com/techvisio" method="get">
                                                                    <div class="elementor-search-form__container">
                                                                        <input placeholder="What can we help for you?" class="elementor-search-form__input" type="search" name="s" title="Search" value="">
                                                                        <button class="elementor-search-form__submit" type="submit" title="Search" aria-label="Search">
													<i aria-hidden="true" class="fas fa-search"></i>							<span class="elementor-screen-only">Search</span>
											</button>
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
                                                                        <i aria-hidden="true" class="fas fa-times"></i> </div>
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
                                                        <div class="elementor-element elementor-element-f006042 elementor-button-align-stretch elementor-widget elementor-widget-form" data-id="f006042" data-element_type="widget" data-settings="{&quot;button_width&quot;:&quot;30&quot;,&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;button_width_tablet&quot;:&quot;25&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}"
                                                            data-widget_type="form.default">
                                                            <div class="elementor-widget-container">
                                                                <form class="elementor-form" method="post" name="New Form">
                                                                    <input type="hidden" name="post_id" value="2141" />
                                                                    <input type="hidden" name="form_id" value="f006042" />
                                                                    <input type="hidden" name="referer_title" value="Our Blog" />

                                                                    <input type="hidden" name="queried_id" value="2301" />

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
					<?php
		} else {
			$query45 = $db->query("SELECT nama_kategori FROM kategori_artikel WHERE id_kategori='$_GET[id]'");
			$row45   = $query45->fetch_assoc();
			echo '<div class="breadcrumbs">';
			echo '<div class="container">';
			echo '<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">';
			echo '<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Beranda</a></li>';
			echo '<li class="active">Belum Ada Artikel Untuk Kategori : '.$row45['nama_kategori'].'</li>';
			echo '</ol>';
			echo '</div>';
			echo '</div>';
		}
	?>