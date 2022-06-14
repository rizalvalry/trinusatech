<?php
   $query10      = $db->prepare("SELECT kategori_produk.id_kategori,kategori_produk.nama_kategori,kategori_produk.kategori_seo,subkategori_produk.id_subkategori,subkategori_produk.nama_subkategori,subkategori_produk.subkategori_seo,produk.id_produk,produk.nama_produk,produk.deskripsi,produk.harga,produk.stok,produk.berat,produk.gambar,produk.diskon, user.nama_lengkap FROM produk LEFT JOIN subkategori_produk ON produk.id_subkategori=subkategori_produk.id_subkategori LEFT JOIN kategori_produk ON subkategori_produk.id_kategori=kategori_produk.id_kategori INNER JOIN user ON produk.id_user=user.id_user WHERE produk.id_produk=?");
   $query10->bind_param("i", $id_produk10);
   $id_produk10  = $_GET['id'];
   $query10->execute();
   $result10     = $query10->get_result();
   $row10        = $result10->fetch_assoc();
	$isi = substr($row10['deskripsi'],0,350); // ambil sebanyak 200 karakter
	$isi = substr($row10['deskripsi'],0,strrpos($isi," ")); // potong per spasi kalimat
   $harga        = number_format( $row10['harga'],0,",","." );
   $disc         = ($row10['diskon']/100)*$row10['harga'];
   $hargadisc    = number_format(( $row10['harga']-$disc),0,",","." );
   
   $cek_diskon   = $row10['diskon'];
   $harga_tetap  = '<h6 class="item_price">Rp. '.$hargadisc.'</h6>';
   $harga_diskon = '<h6 class="item_price">Rp. <del>'.$harga.'</del>  '.$hargadisc.'</h6>';
   if ( $cek_diskon == 0 ){
   	$harga_barang = $harga_tetap;
   } else {
   	$harga_barang = $harga_diskon;
   }
   
   $stok        = $row10['stok'];
   $tombolbeli  = '<button type="submit" class="add-cart item_add"> Beli</button>';
   $tombolhabis = '<a class="add-cart item_add" href="#"> Stok Habis</a>';
   if ( $stok == 0 ){
   	$tombol = $tombolhabis;
   } else {
   	$tombol = $tombolbeli;
   }
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
<div class="container">
   <!-- main images -->
   <div class="holder">
   	
 	  <div class="slides">
         <img src="gambar/produk/<?php echo $row10['gambar']; ?>" alt="" class="middle-show"/>
      </div>

      <?php
         $query11     = $db->prepare("SELECT gambar FROM gambar_produk WHERE id_produk=?");
         $query11->bind_param("i", $id_produk11);
         $id_produk11 = $_GET['id'];
         $query11->execute();
         $result11    = $query11->get_result();
         while ( $row11 = $result11->fetch_assoc() ){ ?>
      <div class="slides">
         <img src="gambar/gambar_produk/<?= $row11['gambar']; ?>" alt="" class="middle-show"/>
      </div>
      <?php } ?>
      <!-- <div class="slides">
         <img src="https://images.unsplash.com/photo-1515870672913-a4c298575776?ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=aa80486fd3343134706e785c034b339d">
         </div>
         
         <div class="slides">
         <img src="https://images.unsplash.com/photo-1521651201144-634f700b36ef?ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=e26ec8c74dc99aff53a60741538cad5f">
         </div>
         
         <div class="slides">
         <img src="https://images.unsplash.com/photo-1504618223053-559bdef9dd5a?ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=583c2bf56c8006e507e2a9905fc1e54c">
         </div>
         
         <div class="slides">
         <img src="https://images.unsplash.com/photo-1504208434309-cb69f4fe52b0?ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=69093505f999d8170e9a1aab3771c07e">
         </div>
         
         <div class="slides">
         <img src="https://images.unsplash.com/photo-1485199433301-8b7102e86995?ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=c7783fe3a697b1a2248450120435cbc3">
         </div> -->
   </div>
   <div class="prevContainer">
      <a class="prev" onclick="plusSlides(-1)">
         <svg viewBox="0 0 24 24">
            <path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z"></path>
         </svg>
      </a>
   </div>
   <div class="nextContainer">
      <a class="next" onclick="plusSlides(1)">
         <svg viewBox="0 0 24 24">
            <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
         </svg>
      </a>
   </div>
   <div class="caption-container">
      <!-- <p id="caption"></p> -->
      <p><?php echo $row10['nama_produk']; ?></p>
   </div>
   <!-- thumnails in a row -->
   <div class="row-jack">

   <div class="column">
         <img class="slide-thumbnail" src="gambar/produk/<?php echo $row10['gambar']; ?>" onclick="currentSlide(1)" alt="Caption One">
      </div>

      <?php
	  $no = 2;
         $query11     = $db->prepare("SELECT gambar FROM gambar_produk WHERE id_produk=?");
         $query11->bind_param("i", $id_produk11);
         $id_produk11 = $_GET['id'];
         $query11->execute();
         $result11    = $query11->get_result();
       
         while ( $row11 = $result11->fetch_assoc() ){ ?>
      <div class="column">
         <img class="slide-thumbnail" src="gambar/gambar_produk/<?= $row11['gambar']; ?>" onclick="currentSlide(<?= $no; ?>)" alt="">
      </div>
      <?php 
         $no++;
         } ?>
      <!-- <div class="column">
         <img class="slide-thumbnail" src="https://images.unsplash.com/photo-1515870672913-a4c298575776?ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=aa80486fd3343134706e785c034b339d" onclick="currentSlide(2)" alt="Caption Two">
         </div>
         <div class="column">
         <img class="slide-thumbnail" src="https://images.unsplash.com/photo-1521651201144-634f700b36ef?ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=e26ec8c74dc99aff53a60741538cad5f" onclick="currentSlide(3)" alt="Caption Three">
         </div>
         <div class="column">
         <img class="slide-thumbnail" src="https://images.unsplash.com/photo-1504618223053-559bdef9dd5a?ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=583c2bf56c8006e507e2a9905fc1e54c" onclick="currentSlide(4)" alt="Caption Four">
         </div>
         <div class="column">
         <img class="slide-thumbnail" src="https://images.unsplash.com/photo-1504208434309-cb69f4fe52b0?ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=69093505f999d8170e9a1aab3771c07e" onclick="currentSlide(5)" alt="Caption Five">
         </div>    
         <div class="column">
         <img class="slide-thumbnail" src="https://images.unsplash.com/photo-1485199433301-8b7102e86995?ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=c7783fe3a697b1a2248450120435cbc3" onclick="currentSlide(6)" alt="Caption Six">
         </div> -->
   </div>
</div>
<div class="clear-cache-margin"></div>


<div class="tabs">
  <input type="radio" name="tabs" id="tabone" checked="checked">
  <label for="tabone">Deskripsi</label>
  <div class="tab">
    <p><?php echo $row10['deskripsi']; ?></p>
  </div>
  
  
  
  <!-- <input type="radio" name="tabs" id="tabthree">
  <label for="tabthree">Tab Three</label>
  <div class="tab">
    <h1>Tab Three</h1>
  </div> -->
  
</div>

<script>
   var slideIndex = 1;
   showSlides(slideIndex);
   
   function plusSlides(n) {
     showSlides(slideIndex += n);
   }
   
   function currentSlide(n) {
     showSlides(slideIndex = n);
   }
   
   function showSlides(n) {
     var i;
     var slides = document.getElementsByClassName("slides");
     var dots = document.getElementsByClassName("slide-thumbnail");
     var captionText = document.getElementById("caption");
     if (n > slides.length) {slideIndex = 1}
     if (n < 1) {slideIndex = slides.length}
     console.log(slideIndex);
   
     for (i = 0; i < slides.length; i++) {
         slides[i].style.display = "none";
         // slides[i].style.display = "inline";
     }
     for (i = 0; i < dots.length; i++) {
         dots[i].className = dots[i].className.replace(" active", "");
     }
     slides[slideIndex-1].style.display = "block";
     // slides[slideIndex-1].style.display = "inline";
     dots[slideIndex-1].className += " active";
     captionText.innerHTML = dots[slideIndex-1].alt;
   }
</script>