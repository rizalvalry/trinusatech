<?php
				include "config/tgl_indo.php";
				$db->query("UPDATE artikel SET dibaca = dibaca + 1 WHERE id_artikel = '$_GET[id]'");
				$query89     = $db->prepare("SELECT kategori_artikel.nama_kategori, artikel.judul_artikel, artikel.isi_artikel, artikel.tanggal, artikel.jam, artikel.dibaca, artikel.gambar, artikel.judul_seo, user.nama_lengkap FROM artikel INNER JOIN kategori_artikel ON artikel.id_kategori=kategori_artikel.id_kategori LEFT JOIN user ON artikel.id_user=user.id_user WHERE artikel.id_artikel = ?");
				$query89->bind_param("i", $id_artikel);
				$id_artikel  = $_GET['id'];
				$query89->execute();
				$result89    = $query89->get_result();
				$row89       = $result89->fetch_assoc();
				$tanggal     = tgl_indo( $row89['tanggal'] );
			?>
    
    
    <div data-elementor-type="single-post" data-elementor-id="2189" class="elementor elementor-2189 elementor-location-single post-1270 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
        <section class="elementor-section elementor-top-section elementor-element elementor-element-6a33dc2 elementor-section-height-min-height elementor-section-items-stretch elementor-section-boxed elementor-section-height-default" data-id="6a33dc2" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-background-overlay"></div>
            <div class="elementor-container elementor-column-gap-wider">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c072446" data-id="c072446" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-7fc51bb elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7fc51bb" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-91157ac" data-id="91157ac" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-cb8bfa3 elementor-icon-list--layout-inline elementor-align-left elementor-mobile-align-left elementor-list-item-link-full_width elementor-invisible elementor-widget elementor-widget-icon-list" data-id="cb8bfa3"
                                            data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_delay&quot;:400}" data-widget_type="icon-list.default">
                                            <div class="elementor-widget-container">
                                                <ul class="elementor-icon-list-items elementor-inline-items">
                                                    <li class="elementor-icon-list-item elementor-inline-item">
                                                        <a href="<?= $row00['alamat_web']; ?>">

                                                            <span class="elementor-icon-list-text">Home</span>
                                                        </a>
                                                    </li>
                                                    <li class="elementor-icon-list-item elementor-inline-item">
                                                        <span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-chevron-right"></i>						</span>
                                                        <span class="elementor-icon-list-text"><a href="#" rel="tag"><?= $row89['nama_kategori']; ?></a></span>
                                                    </li>
                                                    <li class="elementor-icon-list-item elementor-inline-item">
                                                        <a href="index.html">

                                                            <span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-chevron-right"></i>						</span>
                                                            <span class="elementor-icon-list-text"><?php echo $row89['judul_artikel']; ?></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-7fb3864 elementor-widget-mobile__width-inherit elementor-invisible elementor-widget elementor-widget-theme-post-title elementor-page-title elementor-widget-heading" data-id="7fb3864" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_delay&quot;:300}" data-widget_type="theme-post-title.default">
                                            <!-- <div class="elementor-widget-container">
                                                <div class="elementor-heading-title elementor-size-default">6 Reasons Why A Full TOP Creative Agency Matters</div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </section>
        <section class="elementor-section elementor-top-section elementor-element elementor-element-57b6bc4 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="57b6bc4" data-element_type="section">
            <div class="elementor-container elementor-column-gap-wider">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-49fafe9" data-id="49fafe9" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-7576038 elementor-widget elementor-widget-theme-post-excerpt" data-id="7576038" data-element_type="widget" data-widget_type="theme-post-excerpt.default">
                            <div class="elementor-widget-container">
                                <!-- Duis id ipsum pellentesque, -->
								<?php echo $row89['judul_artikel']; ?>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-36a2115 elementor-widget elementor-widget-theme-post-featured-image elementor-widget-image" data-id="36a2115" data-element_type="widget" data-widget_type="theme-post-featured-image.default">
                            <div class="elementor-widget-container">
                                <img width="1920" height="1280" src="gambar/artikel/<?php echo $row89['gambar']; ?>" class="attachment-full size-full" alt="" loading="lazy" srcset="gambar/artikel/<?php echo $row89['gambar']; ?> 1920w, gambar/artikel/<?php echo $row89['gambar']; ?> 300w, gambar/artikel/<?php echo $row89['gambar']; ?> 1024w, gambar/artikel/<?php echo $row89['gambar']; ?> 768w, gambar/artikel/<?php echo $row89['gambar']; ?> 1536w, gambar/artikel/<?php echo $row89['gambar']; ?> 800w"
                                    sizes="(max-width: 1920px) 100vw, 1920px" /> </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="elementor-section elementor-top-section elementor-element elementor-element-f56c877 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f56c877" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-wider">
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-da45baa" data-id="da45baa" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <!-- dead -->
                    </div>
                </div>
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-56c63af" data-id="56c63af" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-e9c4215 elementor-toc--minimized-on-tablet elementor-widget elementor-widget-table-of-contents" data-id="e9c4215" data-element_type="widget" data-settings="{&quot;headings_by_tags&quot;:[&quot;h1&quot;,&quot;h2&quot;,&quot;h3&quot;,&quot;h4&quot;,&quot;h5&quot;,&quot;h6&quot;],&quot;exclude_headings_by_selector&quot;:[],&quot;marker_view&quot;:&quot;numbers&quot;,&quot;minimize_box&quot;:&quot;yes&quot;,&quot;minimized_on&quot;:&quot;tablet&quot;,&quot;min_height&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;min_height_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;min_height_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                            data-widget_type="table-of-contents.default">
							<?php echo $row89['isi_artikel']; ?>
                        </div>
                        
                        <div class="elementor-element elementor-element-8990e20 elementor-widget elementor-widget-heading" data-id="8990e20" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-heading-title elementor-size-default">Dibuat: <?php echo ''.$tanggal.' | Jam : '.$row89['jam'].' WIB | Diposting : '.$row89['nama_lengkap'].'';?></div>
                            </div>
                        </div>
                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-1dc39e9 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1dc39e9" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-d0fe208" data-id="d0fe208" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-4cb6cb0 elementor-widget__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-image" data-id="4cb6cb0" data-element_type="widget" data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <img src="https://secure.gravatar.com/avatar/adaf45d30ad5f49ad9468fb99ab7dc3c?s=96&amp;d=mm&amp;r=g" title="" alt="" /> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-9458161" data-id="9458161" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-38ec43c elementor-widget elementor-widget-heading" data-id="38ec43c" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-heading-title elementor-size-default">Ditulis Oleh</div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-47466bd elementor-widget elementor-widget-heading" data-id="47466bd" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-heading-title elementor-size-default"><?= $row00['nama_toko']; ?></div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-256274b elementor-widget elementor-widget-text-editor" data-id="256274b" data-element_type="widget" data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
											Seorang pemimpi yang ingin membangun masa depan dengan berkontribusi menciptakan berbagai macam karya luar biasa yang membantu orang-orang dari seluruh dunia </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-a83eb59 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="a83eb59" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-wider">
                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-fe0840e" data-id="fe0840e" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-ea739f7 elementor-widget elementor-widget-heading" data-id="ea739f7" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-heading-title elementor-size-default">Do You Enjoyed This Article?</div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-3320864 elementor-widget elementor-widget-heading" data-id="3320864" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-heading-title elementor-size-default">Join our community of 3 million people and get updated every week We have a lot more just for you! Lets join us now</div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-614a937 elementor-button-align-stretch elementor-widget elementor-widget-form" data-id="614a937" data-element_type="widget" data-settings="{&quot;button_width&quot;:&quot;30&quot;,&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;button_width_tablet&quot;:&quot;40&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}"
                                            data-widget_type="form.default">
                                            <div class="elementor-widget-container">
                                                <form class="elementor-form" method="post" name="New Form">
                                                    <input type="hidden" name="post_id" value="2189" />
                                                    <input type="hidden" name="form_id" value="614a937" />
                                                    <input type="hidden" name="referer_title" value="6 Reasons Why A Full Service Creative Agency Matters" />

                                                    <input type="hidden" name="queried_id" value="1270" />

                                                    <div class="elementor-form-fields-wrapper elementor-labels-">
                                                        <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-70 elementor-md-60 elementor-field-required">
                                                            <label for="form-field-email" class="elementor-field-label elementor-screen-only">
								Email							</label>
                                                            <input size="1" type="email" name="form_fields[email]" id="form-field-email" class="elementor-field elementor-size-md  elementor-field-textual" placeholder="Email" required="required" aria-required="true">
                                                        </div>
                                                        <div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-30 e-form__buttons elementor-md-40">
                                                            <button type="submit" class="elementor-button elementor-size-md">
						<span >
															<span class=" elementor-button-icon">
																										</span>
																						<span class="elementor-button-text">Subscribe Now</span>
													</span>
					</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-8ffa5fb elementor-icon-list--layout-inline elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="8ffa5fb" data-element_type="widget" data-widget_type="icon-list.default">
                                            <div class="elementor-widget-container">
                                                <ul class="elementor-icon-list-items elementor-inline-items">
                                                    <li class="elementor-icon-list-item elementor-inline-item">
                                                        <span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-check"></i>						</span>
                                                        <span class="elementor-icon-list-text">No charge</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item elementor-inline-item">
                                                        <span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-check"></i>						</span>
                                                        <span class="elementor-icon-list-text"> Unsubscribe anytime</span>
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

				
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-54ff14b" data-id="54ff14b" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-ae21663 elementor-widget__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-heading" data-id="ae21663" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-heading-title elementor-size-default">Artikel Saat ini</div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-06f9344 elementor-grid-1 elementor-posts--thumbnail-left elementor-grid-tablet-2 elementor-grid-mobile-1 elementor-widget elementor-widget-posts" data-id="06f9344" data-element_type="widget" data-settings="{&quot;classic_columns&quot;:&quot;1&quot;,&quot;classic_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:8,&quot;sizes&quot;:[]},&quot;classic_columns_tablet&quot;:&quot;2&quot;,&quot;classic_columns_mobile&quot;:&quot;1&quot;,&quot;classic_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;classic_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                            data-widget_type="posts.classic">
                            <div class="elementor-widget-container">
                                <div class="elementor-posts-container elementor-posts elementor-posts--skin-classic elementor-grid">
                                    
								<!-- loop here -->

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
                                        <a class="elementor-post__thumbnail__link" href="artikel-<?php echo $row0['id_artikel']; ?>-<?php echo $row0['judul_seo']; ?>">
                                            <div class="elementor-post__thumbnail"><img width="300" height="200" src="gambar/thumb_artikel/<?php echo $row0['gambar']; ?>" class="attachment-medium size-medium" alt="" loading="lazy" /></div>
                                        </a>
                                        <div class="elementor-post__text">
                                            <div class="elementor-post__title">
                                                <a href="artikel-<?php echo $row0['id_artikel']; ?>-<?php echo $row0['judul_seo']; ?>">
												<?php echo $row0['judul_artikel']; ?>			
												</a>
                                            </div>
                                            <div class="elementor-post__meta-data">
                                                <span class="elementor-post-date">
												<?= $tanggal; ?>
													</span>
                                            </div>
                                        </div>
                                    </article>
									<?php
										}
									?>
									<!-- end here -->

                                    <!-- <article class="elementor-post elementor-grid-item post-1278 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
                                        <a class="elementor-post__thumbnail__link" href="https://elementor.deverust.com/techvisio/2022/02/07/how-we-are-using-our-business-as-a-force-for-good/">
                                            <div class="elementor-post__thumbnail"><img width="300" height="169" src="wp-content/uploads/sites/20/2022/02/innovative-business-technology-RW8XPGW-300x169.jpg" class="attachment-medium size-medium" alt="" loading="lazy" /></div>
                                        </a>
                                        <div class="elementor-post__text">
                                            <div class="elementor-post__title">
                                                <a href="https://elementor.deverust.com/techvisio/2022/02/07/how-we-are-using-our-business-as-a-force-for-good/">
				How We Are Using Our Business as a Force For Good			</a>
                                            </div>
                                            <div class="elementor-post__meta-data">
                                                <span class="elementor-post-date">
			February 7, 2022		</span>
                                            </div>
                                        </div>
                                    </article> -->
                                    <!-- <article class="elementor-post elementor-grid-item post-1274 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
                                        <a class="elementor-post__thumbnail__link" href="https://elementor.deverust.com/techvisio/2022/02/07/why-the-digital-creative-agency-model-needs-a-rethink/">
                                            <div class="elementor-post__thumbnail"><img width="300" height="200" src="wp-content/uploads/sites/20/2022/02/technologies-in-business-VSH2THX-300x200.jpg" class="attachment-medium size-medium" alt="" loading="lazy" /></div>
                                        </a>
                                        <div class="elementor-post__text">
                                            <div class="elementor-post__title">
                                                <a href="https://elementor.deverust.com/techvisio/2022/02/07/why-the-digital-creative-agency-model-needs-a-rethink/">
				Why the digital creative agency model needs a rethink			</a>
                                            </div>
                                            <div class="elementor-post__meta-data">
                                                <span class="elementor-post-date">
			February 7, 2022		</span>
                                            </div>
                                        </div>
                                    </article> -->
                                    <!-- <article class="elementor-post elementor-grid-item post-1270 post type-post status-publish format-standard has-post-thumbnail hentry category-optimization tag-business tag-creative tag-deadline tag-insight tag-marketing">
                                        <a class="elementor-post__thumbnail__link" href="index.html">
                                            <div class="elementor-post__thumbnail"><img width="300" height="200" src="wp-content/uploads/sites/20/2022/02/developing-programming-working-in-a-software-engin-BEKL65Q-300x200.jpg" class="attachment-medium size-medium" alt="" loading="lazy" /></div>
                                        </a>
                                        <div class="elementor-post__text">
                                            <div class="elementor-post__title">
                                                <a href="index.html">
				6 Reasons Why A Full Service Creative Agency Matters			</a>
                                            </div>
                                            <div class="elementor-post__meta-data">
                                                <span class="elementor-post-date">
			February 7, 2022		</span>
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
    