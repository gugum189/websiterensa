
<footer id="footer" class="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h4>Join Our Buletin</h4>
            <p>Subscribe to our Buletin and receive the latest news about our products and services!</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your subscription request has been sent. Thank you!</div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.php" class="d-flex align-items-center">
            <!-- <span class="sitename">Arsha</span> -->
            <img src="assets/img/logo_kecil.png" class="img-fluid">
          </a>
          <div class="footer-contact pt-3">
            <p>Jl. Baros No.52 Kota Cimahi</p>
            <p>Jawa Barat 40521</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+62 815-4600-4444</span></p>
            <p><strong>Email:</strong> <span>info@rensa.id</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Product</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
          </ul>
        </div>

        <!-- <div class="col-lg-2 col-md-3 footer-links"> 
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
          </ul>
        </div>-->

        <div class="col-lg-4 col-md-12">
          <h4>Follow Us</h4>
          <!-- <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p> -->
          <div class="social-links d-flex">
            <a href="https://www.facebook.com/profile.php?id=61565434780323"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/rensa_id?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="bi bi-instagram"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Rensa ID</strong> <span>All Rights Reserved</span></p>
      <!-- <div class="credits">        
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div> -->
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

  
<!-- js for video slider nav -->
<script type="text/javascript">
  //slider video hero
  const btns = document.querySelectorAll(".nav-btn");
const slides = document.querySelectorAll(".vid-slider"); // Ini bisa berupa video atau gambar
const text = document.querySelectorAll(".text-slider");

let currentSlide = 0;
const slideInterval = 5000; // Interval waktu per slide (5 detik)

function sliderNav(manual) {
  // Pastikan elemen 'manual' valid
  if (!btns[manual] || !slides[manual] || !text[manual]) {
    console.error(`Slide ${manual} tidak ditemukan`);
    return;
  }

  // Hapus kelas aktif dari semua tombol, slide, dan teks
  btns.forEach((btn) => btn.classList.remove("active"));
  slides.forEach((slide) => {
    slide.classList.remove("active");

    // Jika slide adalah video, hentikan video
    if (slide.tagName.toLowerCase() === 'video') {
      slide.pause();
      slide.currentTime = 0;
    }
  });

  text.forEach((txt) => txt.classList.remove("active"));

  // Aktifkan slide yang dipilih
  btns[manual].classList.add("active");
  slides[manual].classList.add("active");

  // Jika slide adalah video, putar video
  if (slides[manual].tagName.toLowerCase() === 'video') {
    slides[manual].play();
  }

  text[manual].classList.add("active");
}

function autoSlider() {
  // Pindah ke slide berikutnya, jika di slide terakhir, kembali ke slide pertama
  currentSlide = (currentSlide + 1) % slides.length;
  sliderNav(currentSlide);
}

btns.forEach((btn, i) => {
  btn.addEventListener("click", () => {
    sliderNav(i);
    currentSlide = i; // Set slide aktif berdasarkan klik
  });
});

// Jalankan auto slider secara otomatis
setInterval(autoSlider, slideInterval);

 </script>
</body>

</html>