<?php include 'header.php'; ?>
    <main class="main">

        <section id="hero" class="testi section dark-background"></section>
        <!-- Page Title -->
        <section id="kalkulator" class="contact section">

          <!-- Section Title -->
          <div class="container section-title" data-aos="fade-up">
            <h2>Kalkulator Product</h2>
            <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> -->
          </div><!-- End Section Title -->
    
          <div class="container" data-aos="fade-up" data-aos-delay="100">
    
            <div class="row gy-4">
              <div class="col-lg-7">
                <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                  <div class="row gy-4">                    	
                    <h2>Jenis Product</h2>
                    <div class="col-md-12 kal">
                      <!-- <label for="subject-field" class="pb-2">Product</label> -->
                      <select class="kal" name="product" id="product" >
                        <option selected>Pilih Product Anda</option>
                        <option value="">Vinyl 2mm/3mm</option>
                        <option value="">Wallpanel</option>
                        <option value="">Wallpaper</option>
                      </select>                                            

                    </div>

                    <H2>Ukuran Bidang 1</H2>
                    <div class="col-md-6">
                      <label for="name-field" class="pb-2">Lebar/Panjang</label>
                      <input type="text" name="name" id="name-field" class="form-control" required="" placeholder="Masukan Dalam Satuan Meter">                      
                    </div>
    
                    <div class="col-md-6">
                      <label for="email-field" class="pb-2">Tinggi/Lebar</label>
                      <input type="email"class="form-control" name="email" id="email-field" required="" placeholder="Masukan Dalam Satuan Meter">
                    </div>
                    
                    <H2>Ukuran Bidang 2</H2>
                    <div class="col-md-6">
                      <label for="name-field" class="pb-2">Lebar/Panjang</label>
                      <input type="text" name="name" id="name-field" class="form-control" required="" placeholder="Masukan Dalam Satuan Meter">                      
                    </div>
    
                    <div class="col-md-6">
                      <label for="email-field" class="pb-2">Tinggi/Lebar</label>
                      <input type="email"class="form-control" name="email" id="email-field" required="" placeholder="Masukan Dalam Satuan Meter">
                    </div>
                    <H2>Ukuran Bidang 3</H2>
                    <div class="col-md-6">
                      <label for="name-field" class="pb-2">Lebar/Panjang</label>
                      <input type="text" name="name" id="name-field" class="form-control" required="" placeholder="Masukan Dalam Satuan Meter">                      
                    </div>
    
                    <div class="col-md-6">
                      <label for="email-field" class="pb-2">Tinggi/Lebar</label>
                      <input type="email"class="form-control" name="email" id="email-field" required="" placeholder="Masukan Dalam Satuan Meter">
                    </div>
                    <H2>Ukuran Bidang 4</H2>
                    <div class="col-md-6">
                      <label for="name-field" class="pb-2">Lebar/Panjang</label>
                      <input type="text" name="name" id="name-field" class="form-control" required="" placeholder="Masukan Dalam Satuan Meter">                      
                    </div>
    
                    <div class="col-md-6">
                      <label for="email-field" class="pb-2">Tinggi/Lebar</label>
                      <input type="email"class="form-control" name="email" id="email-field" required="" placeholder="Masukan Dalam Satuan Meter">
                    </div>

                    <div class="col-md-12 text-center">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your message has been sent. Thank you!</div>
    
                      <button type="submit">Hitung</button>
                    </div>
    
                  </div>
                </form>
              </div><!-- End Contact Form -->
              <div class="col-lg-5">
    
                <div class="info-wrap">
                  <h1>Product information</h1>
                    <ul>
                      <li><strong>Product</strong>: Lantai Vinyl</li>
                      <li>
                          <tr><strong>Ukuran Bidang 1</strong>: 1 m x 3 m </tr>
                          <tr>&nbsp;</tr>
                          <tr><strong>Kebutuhan</strong>: 1 box</tr>
                      </li>
                      <li>
                        <tr><strong>Ukuran Bidang 2</strong>: 2 m x 3 m </tr>
                        <tr>&nbsp;</tr>
                        <tr><strong>Kebutuhan</strong>: 2 box</tr>
                    </li>
                    <li>
                      <tr><strong>Ukuran Bidang 3</strong>: - </tr>
                      <tr>&nbsp;</tr>
                      <tr><strong>Kebutuhan</strong>: 0 box</tr>
                  </li>
                  <li>
                    <tr><strong>Ukuran Bidang 4</strong>: - </tr>
                    <tr>&nbsp;</tr>
                    <tr><strong>Kebutuhan</strong>: 0 box</tr>
                </li>
                      <li><strong>Jumlah Product</strong>: 3 box</li>
                      <li><a href="https://api.whatsapp.com/send?phone=6281573544444&text=Hello Rensa Cimahi!" class="btn btn-primary">Konsultasi</a></li>
                    </ul>
    
                  
                </div>
              </div>
    
              
    
            </div>
    
          </div>
    
        </section><!-- /Portfolio Section --><!-- End Page Title -->
    
      </main>
<?php include 'footer.php'; ?>