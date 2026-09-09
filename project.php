 <!-- Project Section (Carousel / Slider Dinamis) -->
    <section id="project" class="py-5" style="min-height: 100vh; background: linear-gradient(rgba(10, 15, 25, 0.8), rgba(10, 15, 25, 0.9)), url('Assets/img/plcbg2.png') center/cover fixed;">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-down">
                 <h2 class="display-4 font-weight-bold text-white mb-2">Featured Projects</h2>
                 <hr class="bg-info mb-4" style="width: 80px; height: 4px; border: none; border-radius: 2px;">
            </div>

            <!-- Wadah Slider (Carousel) -->
            <div id="projectCarousel" class="carousel slide" data-ride="carousel" data-aos="fade-up">
                <div class="carousel-inner pb-5">
                    
                    <?php
                    // 1. Panggil koneksi database
                    include 'koneksi.php';

                    // 2. Ambil data dari tabel-proyek
                    $query_proyek = "SELECT * FROM `tabel-proyek`";
                    $hasil_proyek = mysqli_query($koneksi, $query_proyek);

                    // 3. Pindahkan data dari database ke dalam sebuah Array
                    $semua_proyek = [];
                    while($baris = mysqli_fetch_assoc($hasil_proyek)) {
                        $semua_proyek[] = $baris;
                    }

                    // 4. Pecah daftar proyek menjadi kelompok-kelompok (1 kelompok isi 3 proyek)
                    $kelompok_proyek = array_chunk($semua_proyek, 3);

                    // 5. Looping untuk setiap SLIDE
                    foreach($kelompok_proyek as $index => $kelompok) {
                        $active_class = ($index == 0) ? 'active' : '';
                    ?>
                        <div class="carousel-item <?php echo $active_class; ?>">
                            <div class="row">
                                <?php foreach($kelompok as $proyek) { ?>
                                    <div class="col-md-4 mb-4">
                                        <div class="card h-100 border-0 shadow-sm bg-white">
                                            <img src="<?php echo $proyek['gambar']; ?>" class="card-img-top p-4" alt="<?php echo $proyek['judul']; ?>">
                                            <div class="card-body d-flex flex-column">
                                                <h5 class="card-title font-weight-bold"><?php echo $proyek['judul']; ?></h5>
                                                <p class="card-text text-muted"><?php echo $proyek['deskripsi']; ?></p>
                                                <a href="#" class="btn btn-outline-info mt-auto font-weight-bold">View System</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>

                </div>

                <!-- PERBAIKAN TOMBOL PANAH: Dibuat menonjol (bulat gelap) dan di dalam frame -->
                <a class="carousel-control-prev" href="#projectCarousel" role="button" data-slide="prev" style="width: 5%;">
                    <span class="carousel-control-prev-icon bg-dark rounded-circle p-3 shadow" aria-hidden="true" style="width: 45px; height: 45px;"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#projectCarousel" role="button" data-slide="next" style="width: 5%;">
                    <span class="carousel-control-next-icon bg-dark rounded-circle p-3 shadow" aria-hidden="true" style="width: 45px; height: 45px;"></span>
                    <span class="sr-only">Next</span>
                </a>
                
                <!-- Indikator Titik-titik di bawah slider -->
                <ol class="carousel-indicators" style="bottom: -20px;">
                    <?php foreach($kelompok_proyek as $index => $kelompok): ?>
                        <li data-target="#projectCarousel" data-slide-to="<?php echo $index; ?>" class="<?php echo $index == 0 ? 'active' : ''; ?>" style="background-color: #17a2b8; height: 5px; width: 30px;"></li>
                    <?php endforeach; ?>
                </ol>
            </div>
        </div>
    </section>