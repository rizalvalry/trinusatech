
                    <div data-elementor-type="wp-post" data-elementor-id="2462" class="elementor elementor-2462">
                        <section class="elementor-section elementor-top-section elementor-element elementor-element-689600b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="689600b" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-background-overlay"></div>
                            <div class="elementor-container elementor-column-gap-wider">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-13f53d2" data-id="13f53d2" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-c5ca5f7 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default" data-id="c5ca5f7" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-container elementor-column-gap-wider">
                                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3629d7c" data-id="3629d7c" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-fd129a1 elementor-icon-list--layout-inline elementor-align-left elementor-mobile-align-left elementor-list-item-link-full_width elementor-invisible elementor-widget elementor-widget-icon-list" data-id="fd129a1"
                                                            data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_delay&quot;:400}" data-widget_type="icon-list.default">
                                                            <div class="elementor-widget-container">
                                                                <ul class="elementor-icon-list-items elementor-inline-items">
                                                                    <li class="elementor-icon-list-item elementor-inline-item">
                                                                        <a href="https://elementor.deverust.com/bronson/template-kit/homepage/">

                                                                            <span class="elementor-icon-list-text">Home</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="elementor-icon-list-item elementor-inline-item">
                                                                        <a href="index.html">

                                                                            <span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-chevron-right"></i>						</span>
                                                                            <span class="elementor-icon-list-text">Career Page</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-4453511 elementor-invisible elementor-widget elementor-widget-heading" data-id="4453511" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_delay&quot;:600}"
                                                            data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h1 class="elementor-heading-title elementor-size-default">Career Page</h1>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="elementor-element elementor-element-32ef031 elementor-invisible elementor-widget elementor-widget-text-editor" data-id="32ef031" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_delay&quot;:800}"
                                                            data-widget_type="text-editor.default">
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
                            </div>
                        </section>
                        <section class="elementor-section elementor-top-section elementor-element elementor-element-b3964dd elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b3964dd" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9080634" data-id="9080634" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-a3923d1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="a3923d1" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-wider">
                                               

                                            <?php
                                            $karir1 = $db->query("SELECT isi_halaman FROM `halaman_statis` WHERE `link_halaman` LIKE '%karir%' AND aktif='Y' ORDER BY `id_halaman` ASC LIMIT 1");
                                            $statickarir = $karir1->fetch_assoc();?>

                                            <?= $statickarir['isi_halaman']; ?>
                                                       
                                            </div>
                                        </section>
                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-cdad45c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="cdad45c" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-wider">
                                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-c5ef89c" data-id="c5ef89c" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                    <?php
                                                    $socmed = $db->query("SELECT `link_sosmed` FROM sosmed WHERE `nama_sosmed` LIKE '%youtube%'");
                                                    $linksocmed = $socmed->fetch_assoc();?>

                                                        <iframe width="560" height="415" src="<?= $linksocmed['link_sosmed']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="elementor-section elementor-top-section elementor-element elementor-element-dea36b2 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="dea36b2" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-wider">
                               
                                        
                                        
                                    <!-- sini -->
                                    <?php
                                            $karir1 = $db->query("SELECT isi_halaman FROM `halaman_statis` WHERE `link_halaman` LIKE '%karir%' ORDER BY id_halaman ASC LIMIT 1,2");
                                            $statickarir = $karir1->fetch_assoc();?>

                                            <?= $statickarir['isi_halaman']; ?>
                                        
                                        
                                        
                                  
                            </div>
                        </section>
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
                                                        <div class="elementor-element elementor-element-32cac47 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="32cac47" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Pilih Jalur Karir Anda</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-ea4db54 elementor-widget elementor-widget-heading" data-id="ea4db54" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Putuskan Sesuai Keterampilanmu</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-066c22f elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="066c22f" data-element_type="widget" data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                <p>Kami ingin menawarkan kepada anggota tim kami peluang yang dipersonalisasi untuk berkembang, berdasarkan tingkat pengalaman mereka. Selalu ada ruang untuk pengembangan.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- loop here -->
                                        <?php
                                        $karir = $db->query("SELECT * FROM pembayaran ORDER BY urutan ASC");
                                        while ($job = $karir->fetch_assoc() ) {
                                            $isi_job         = $job['rincian_pembayaran'];
                                            $isi_desc                 = substr($isi_job,0,150); // ambil sebanyak 220 karakter
                                            $isi_desc                 = substr($isi_job,0,strrpos($isi_desc," ")); // potong per spasi kalimat
                                            ?>

                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-3245845 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3245845" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-container elementor-column-gap-wider">
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2fbf59b" data-id="2fbf59b" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-02ea1be elementor-widget elementor-widget-heading" data-id="02ea1be" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default"><?= $job['metode_pembayaran']; ?></h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-71f50dc elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="71f50dc" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Jenis:</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-d467a06 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="d467a06" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default"><?= $job['total_minimum']; ?></h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-2d6d3f8 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="2d6d3f8" data-element_type="widget" data-widget_type="divider.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-divider">
                                                                    <span class="elementor-divider-separator">
						</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-091d2a7 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="091d2a7" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Pengalaman:</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-a449461 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="a449461" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">1-4 years/Fresh Graduate</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-244d5d1 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="244d5d1" data-element_type="widget" data-widget_type="divider.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-divider">
                                                                    <span class="elementor-divider-separator">
						</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="elementor-element elementor-element-43ef1f0 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="43ef1f0" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Date Opened:</h2>
                                                            </div>
                                                        </div> -->
                                                        <!-- <div class="elementor-element elementor-element-90c3977 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="90c3977" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">03/11/2022</h2>
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-adb6e44" data-id="adb6e44" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-68e4ad5 elementor-widget elementor-widget-heading" data-id="68e4ad5" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Deskripsi Pekerjaan:</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-6e3f64f elementor-widget elementor-widget-text-editor" data-id="6e3f64f" data-element_type="widget" data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                            <p><?php echo 'Buka dan Lihat'; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-71ae894 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="71ae894" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Status:</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-1ab9bae elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="1ab9bae" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default"><?= $job['aktif'] == 'Y' ? 'Dibuka' : 'Kadaluarsa'; ?></h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-da9ec79" data-id="da9ec79" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-9b70529 elementor-align-center elementor-mobile-align-left elementor-widget elementor-widget-button" data-id="9b70529" data-element_type="widget" data-widget_type="button.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-button-wrapper">
                                                                    <a href="#openModal<?= $job['id_pembayaran'] ?>" class="elementor-button-link elementor-button elementor-size-md" role="button">
                                                                        <span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Lihat dan Lamar</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>

                                        <!-- <a href="#openModal">Open Modal</a> -->
                                        <!-- <div class="container"> -->
                                            <div id="openModal<?= $job['id_pembayaran'] ?>" class="modalDialog">
                                                <div>	<a href="#close" title="Close" class="close">X</a>

                                                        <h2><?= $job['metode_pembayaran']; ?></h2>

                                                    <?= $job['rincian_pembayaran']; ?>
                                                </div>
                                            </div>
                                        <!-- </div> -->
                                        <?php } ?>
                                        <!-- end loop here -->

                                        

                                        <!-- <section class="elementor-section elementor-inner-section elementor-element elementor-element-28974a2 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="28974a2" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-container elementor-column-gap-wider">
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-51b5ffe" data-id="51b5ffe" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-3f32d68 elementor-widget elementor-widget-heading" data-id="3f32d68" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">DevOps Engineer</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-90f8adf elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="90f8adf" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Job Type:</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-18c3396 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="18c3396" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Full time</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-793df3e elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="793df3e" data-element_type="widget" data-widget_type="divider.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-divider">
                                                                    <span class="elementor-divider-separator">
						</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-96a2e9e elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="96a2e9e" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Work Experience:</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-2332399 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="2332399" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">5 years</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-64e9a7a elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="64e9a7a" data-element_type="widget" data-widget_type="divider.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-divider">
                                                                    <span class="elementor-divider-separator">
						</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-86e9c38 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="86e9c38" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Date Opened:</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-d2277e6 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="d2277e6" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">15/12/2022</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-c11bc12" data-id="c11bc12" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-31d0ca4 elementor-widget elementor-widget-heading" data-id="31d0ca4" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Job Description:</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-3d84419 elementor-widget elementor-widget-text-editor" data-id="3d84419" data-element_type="widget" data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-ba63b56 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="ba63b56" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Remote Job:</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-3702016 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="3702016" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Yes</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-be90106" data-id="be90106" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-25f77b5 elementor-align-center elementor-mobile-align-left elementor-widget elementor-widget-button" data-id="25f77b5" data-element_type="widget" data-widget_type="button.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-button-wrapper">
                                                                    <a href="#" class="elementor-button-link elementor-button elementor-size-md" role="button">
                                                                        <span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Apply Now</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section> -->
                                        <!-- <section class="elementor-section elementor-inner-section elementor-element elementor-element-155d6d9 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="155d6d9" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-container elementor-column-gap-wider">
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-09183f4" data-id="09183f4" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-aefa3e7 elementor-widget elementor-widget-heading" data-id="aefa3e7" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Business Analyst</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-7d0717e elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="7d0717e" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Job Type:</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-ffd0ac5 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="ffd0ac5" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Full time</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-5ab821b elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="5ab821b" data-element_type="widget" data-widget_type="divider.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-divider">
                                                                    <span class="elementor-divider-separator">
						</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-eb413e9 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="eb413e9" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Work Experience:</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-b55fa00 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="b55fa00" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">3 years</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-7df72e4 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="7df72e4" data-element_type="widget" data-widget_type="divider.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-divider">
                                                                    <span class="elementor-divider-separator">
						</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-9561f6b elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="9561f6b" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Date Opened:</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-248d759 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="248d759" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">02/10/2022</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-414347e" data-id="414347e" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-00220ec elementor-widget elementor-widget-heading" data-id="00220ec" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Job Description:</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-1b861cb elementor-widget elementor-widget-text-editor" data-id="1b861cb" data-element_type="widget" data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-ef9acde elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="ef9acde" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Remote Job:</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-282a0fb elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="282a0fb" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">No</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-fd32f67" data-id="fd32f67" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-5373a10 elementor-align-center elementor-mobile-align-left elementor-widget elementor-widget-button" data-id="5373a10" data-element_type="widget" data-widget_type="button.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-button-wrapper">
                                                                    <a href="#" class="elementor-button-link elementor-button elementor-size-md" role="button">
                                                                        <span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Apply Now</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section> -->
                                        <!-- <section class="elementor-section elementor-inner-section elementor-element elementor-element-56ff05d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="56ff05d" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-container elementor-column-gap-wider">
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-405e455" data-id="405e455" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-490f3eb elementor-widget elementor-widget-heading" data-id="490f3eb" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Project Manager</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-768d64f elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="768d64f" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Job Type:</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-5f8560c elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="5f8560c" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Full time</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-8678695 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="8678695" data-element_type="widget" data-widget_type="divider.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-divider">
                                                                    <span class="elementor-divider-separator">
						</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-83d864b elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="83d864b" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Work Experience:</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-8b3e7d1 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="8b3e7d1" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">2 years</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-cae95f8 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="cae95f8" data-element_type="widget" data-widget_type="divider.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-divider">
                                                                    <span class="elementor-divider-separator">
						</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-a75fc9c elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="a75fc9c" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Date Opened:</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-2564be9 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="2564be9" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">03/17/2022</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-927ca62" data-id="927ca62" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-4a075ff elementor-widget elementor-widget-heading" data-id="4a075ff" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Job Description:</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-27ca4ff elementor-widget elementor-widget-text-editor" data-id="27ca4ff" data-element_type="widget" data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-d431537 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="d431537" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Remote Job:</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-2bcdb1b elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="2bcdb1b" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Yes</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2cbec7a" data-id="2cbec7a" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-1258ca2 elementor-align-center elementor-mobile-align-left elementor-widget elementor-widget-button" data-id="1258ca2" data-element_type="widget" data-widget_type="button.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-button-wrapper">
                                                                    <a href="#" class="elementor-button-link elementor-button elementor-size-md" role="button">
                                                                        <span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Apply Now</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section> -->
                                        <!-- <section class="elementor-section elementor-inner-section elementor-element elementor-element-ab15249 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ab15249" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-container elementor-column-gap-wider">
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-91db886" data-id="91db886" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-464660f elementor-widget elementor-widget-heading" data-id="464660f" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Senior IT Business Analyst</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-de62241 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="de62241" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Job Type:</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-5f0d098 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="5f0d098" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Full time</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-346ca56 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="346ca56" data-element_type="widget" data-widget_type="divider.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-divider">
                                                                    <span class="elementor-divider-separator">
						</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-2a3d928 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="2a3d928" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Work Experience:</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-c0cebbb elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="c0cebbb" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">2 years</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-ff299e2 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="ff299e2" data-element_type="widget" data-widget_type="divider.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-divider">
                                                                    <span class="elementor-divider-separator">
						</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-3e95de0 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="3e95de0" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Date Opened:</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-4383830 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="4383830" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">03/17/2022</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-f8d1730" data-id="f8d1730" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-e0f296b elementor-widget elementor-widget-heading" data-id="e0f296b" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Job Description:</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-c598f5b elementor-widget elementor-widget-text-editor" data-id="c598f5b" data-element_type="widget" data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-372e6a2 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="372e6a2" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Remote Job:</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-ddcb5e5 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="ddcb5e5" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Yes</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-f955062" data-id="f955062" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-9854d77 elementor-align-center elementor-mobile-align-left elementor-widget elementor-widget-button" data-id="9854d77" data-element_type="widget" data-widget_type="button.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-button-wrapper">
                                                                    <a href="#" class="elementor-button-link elementor-button elementor-size-md" role="button">
                                                                        <span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Apply Now</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section> -->
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="elementor-section elementor-top-section elementor-element elementor-element-54f31a5 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="54f31a5" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-background-overlay"></div>
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a2de353" data-id="a2de353" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-47de71b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="47de71b" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-wider">
                                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-5088f46" data-id="5088f46" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-0c2ef03 elementor-widget__width-initial elementor-align-center elementor-widget elementor-widget-lottie" data-id="0c2ef03" data-element_type="widget" data-settings="{&quot;source_json&quot;:{&quot;url&quot;:&quot;https:\/\/elementor.deverust.com\/techvisio\/wp-content\/uploads\/sites\/20\/2022\/03\/lf20_vsg5kswn.json&quot;,&quot;id&quot;:1638,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;loop&quot;:&quot;yes&quot;,&quot;source&quot;:&quot;media_file&quot;,&quot;caption_source&quot;:&quot;none&quot;,&quot;link_to&quot;:&quot;none&quot;,&quot;trigger&quot;:&quot;arriving_to_viewport&quot;,&quot;viewport&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;play_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;start_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;0&quot;,&quot;sizes&quot;:[]},&quot;end_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;100&quot;,&quot;sizes&quot;:[]},&quot;renderer&quot;:&quot;svg&quot;}"
                                                            data-widget_type="lottie.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="e-lottie__container">
                                                                    <div class="e-lottie__animation"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-6b90ca6 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="6b90ca6" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Kesulitan?</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-bdb369b elementor-widget elementor-widget-heading" data-id="bdb369b" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Tidak Dapat Menemukan Apa yang Anda Cari?</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-3131c86 elementor-widget__width-initial elementor-headline--style-highlight elementor-widget elementor-widget-animated-headline" data-id="3131c86" data-element_type="widget" data-settings="{&quot;highlighted_text&quot;:&quot;Send us your CV &quot;,&quot;headline_style&quot;:&quot;highlight&quot;,&quot;marker&quot;:&quot;circle&quot;,&quot;loop&quot;:&quot;yes&quot;,&quot;highlight_animation_duration&quot;:1200,&quot;highlight_iteration_delay&quot;:8000}"
                                                            data-widget_type="animated-headline.default">
                                                            <div class="elementor-widget-container">
                                                                <a href="#">

                                                                    <h3 class="elementor-headline">
                                                                        <span class="elementor-headline-plain-text elementor-headline-text-wrapper">Kami selalu mencari orang dengan keterampilan unik. Kirimkan CV Anda kepada Kami dan kami akan menghubungi Anda jika ada lowongan yang sesuai dengan harapan Anda.</span>
                                                                        <span class="elementor-headline-dynamic-wrapper elementor-headline-text-wrapper">
					<span class="elementor-headline-dynamic-text elementor-headline-text-active">Kirim CV Anda </span>
                                                                        </span>
                                                                        <span class="elementor-headline-plain-text elementor-headline-text-wrapper">dan kami akan menghubungi Anda ketika kami memiliki pembukaan yang sesuai dengan harapan Anda.</span>
                                                                    </h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-2263be5 elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="2263be5" data-element_type="widget" data-widget_type="button.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-button-wrapper">
                                                                    <a href="#" class="elementor-button-link elementor-button elementor-size-md" role="button">
                                                                        <span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Let's stay in touch</span>
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
                                </div>
                            </div>
                        </section>
                    </div>
                    
                    