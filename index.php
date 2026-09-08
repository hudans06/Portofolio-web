<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Huda | Mechatronics & Automation</title>
    
    <!-- Link to Bootstrap 4.6 CSS -->
    <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
    <!-- FontAwesome for Social Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Link to AOS (Animate On Scroll) CSS -->
    <link rel="stylesheet" href="Assets/css/aos.css" >
    <!-- Link to Custom CSS -->
    <link rel="stylesheet" href="Assets/css/mystyle.css">
</head>
<body class="bg-light text-dark">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top py-3 border-bottom border-info shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="Assets/img/HNlogo.png" alt="Logo" width="45" height="45" class="rounded-circle mr-3 bg-white p-1">
            </a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto text-monospace small">
                    <li class="nav-item active"><a class="nav-link text-uppercase px-3 text-light" href="#hero">HOME</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase px-3 text-light" href="#about">ABOUT</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase px-3 text-light" href="#services">EXPERTISE</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase px-3 text-light" href="#project">PROJECT</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase px-3 text-light" href="#contact">CONTACT</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero" class="d-flex align-items-center bg-dark text-white" style="min-height: 100vh; background: linear-gradient(rgba(10, 15, 25, 0.9), rgba(10, 15, 25, 0.95)), url('Assets/img/plcbg2.png') center/cover fixed;">
        <div class="container mt-5 pt-5" data-aos="fade-down">
            <div class="row">
                <div class="col-lg-8">
                    <span class="badge border border-info text-info p-2 mb-3 text-monospace">MECHATRONICS & AUTOMATION SYSTEM</span>
                    <h1 class="display-3 font-weight-bolder mb-4">Bridging Software Logic <br> <span class="text-info">& Physical Motion</span></h1>
                    <p class="lead mb-5 border-left border-info pl-4 py-2" style="background-color: rgba(23, 162, 184, 0.1);">
                        Specializing in industrial automation, IoT monitoring, and embedded systems development, building energy auditor.
                    </p>
                    <a href="#contact" class="btn btn-outline-info btn-lg font-weight-bold px-5 py-3 shadow" style="margin-right: 15px;">Execute Connection</a>
                    <a href="#project" class="btn btn-outline-info btn-lg font-weight-bold px-5 py-3 shadow">View Project</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About & Education Section (3 Kolom Sejajar) -->
    <section id="about" class="py-5 bg-secondary " data-aos="fade-down">
        <div class="container py-5">
            <div class="row">
                
                <!-- KOLOM 1: Foto Profil (Kiri) -->
                <div class="col-lg-4 col-md-12 mb-5 mb-lg-0 text-center text-lg-left">
                    <div class="border-0 p-3 d-inline-block shadow-sm bg-secondary">
                        <!-- Tambahan max-width agar foto tidak terlalu mendominasi kolom -->
                        <img src="Assets/img/huda2.jfif" alt="Profile Picture" class="img-fluid shadow" style="max-width: 250px;">
                    </div>
                    <p class="mt-3 font-monospace small text-muted text-uppercase tracking-widest pl-lg-2">ITS_ME.PNG</p>
                </div>

                <!-- KOLOM 2: Education (Tengah, posisinya di sebelah kiri About Me) -->
                <div class="col-lg-4 col-md-6 mb-5 mb-md-0">
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-custom-gray mr-3" style="width: 25px; height: 1px;"></div>
                        <span class="text-custom-gray text-uppercase font-weight-bold tracking-widest small">Background</span>
                    </div>

                    <!-- Timeline Minimalis -->
                    <div class="border-left pl-4 position-relative ml-2" style="border-color: #d1d4d8 !important;">
                        <div class="position-relative">
                           <div class="timeline-diamond bg-custom-gray position-absolute"></div>
                                <p class="text-custom-gray font-monospace small mb-1 tracking-widest font-weight-bold">2024 - 2027</p>
                                
                                <!-- Duplikasi nama kampus digabung menjadi satu tag h5 agar proporsional -->
                                <h5 class="font-weight-bold mb-1">Politeknik ATMI Surakarta</h5>

                                <!-- Menghapus style manual dan menggunakan mb-2 agar jarak bawahnya lebih lega -->
                                <h6 class="font-weight-bold mb-2">Undergraduate Student • Surakarta, Indonesia</h6>
                                                                
                                <p class="text-dark small" style="line-height: 1.6;">
                                    Specialized study in Teknik Mekatronika. Core focus on Programmable Logic Controller (PLC) programming, pneumatic control circuits, embedded C++ systems, and 3D CAD design for industrial machinery.
                                </p>
                        </div>
                    </div>
                </div>

                <!-- KOLOM 3: About Me (Kanan) -->
                <div class="col-lg-4 col-md-6">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-custom-gray mr-3" style="width: 25px; height: 1px;"></div>
                        <span class="text-custom-gray text-uppercase font-weight-bold tracking-widest small">About Me</span>
                    </div>

                    <!-- Menggunakan h2 biasa (tanpa display-4) agar proporsional di kolom sempit -->
                    <h2 class="font-weight-bold mb-4">Huda Nidhar</h2>

                    <!-- Inline style font-size dihapus agar menyesuaikan ukuran standar paragraf Bootstrap -->
                    <p class="mb-3 text-dark">
                        I am an undergraduate studying Teknik Mekatronika at Politeknik ATMI Surakarta. My background bridges mechanical systems, electronics, and informatics, but my real passion lies in building electrical system, troubleshooting hardware, and orchestrating complex automation architectures.
                    </p>

                    <!-- Socials -->
                    <div>
                        <p class="font-weight-bold mb-3 small">Socials:</p>
                        <div class="d-flex">
                            <a href="#" class="btn btn-secondary rounded-circle d-flex align-items-center justify-content-center mr-3 btn-social" style="width: 40px; height: 40px;">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="btn btn-secondary rounded-circle d-flex align-items-center justify-content-center btn-social" style="width: 40px; height: 40px;">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Expertise Section -->
    <section id="services" class="py-5 bg-secondary" data-aos="fade-down">
        <div class="container py-5">
            <!-- Section Title -->
            <div class="text-center mb-5" >
                <h2 class="font-weight-bold display-4 text-white">Technical Capabilities</h2>
                <hr class="bg-info mb-4" style="width: 80px; height: 4px; border: none; border-radius: 2px;">
            </div>
            
            <!-- Cards Row -->
            <div class="row mt-5">
                <div class="col-md-4 mb-4">
                    <!-- Penambahan border-top berwarna biru (info) dan shadow-lg -->
                    <div class="card h-100 border-0 shadow-lg bg-white p-4" style="border-top: 4px solid #17a2b8 !important;">
                        <img src="Assets/img/webpage.png" alt="Embedded Systems" class="w-25 mb-4">
                        <h4 class="font-weight-bold mb-3">Embedded Logic</h4>
                        <p class="text-muted">Multi-protocol IoT monitoring systems utilizing Arduino Mega 2560, ESP8266, and Nextion displays.</p>
                        <div class="mt-auto">
                            <!-- Kombinasi badge Biru dan Abu-abu -->
                            <span class="badge badge-info p-2 mb-1">C++</span>
                            <span class="badge text-white p-2 mb-1 bg-custom-gray">Microcontrollers</span>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow-lg bg-white p-4" style="border-top: 4px solid #17a2b8 !important;">
                        <img src="Assets/img/rocket.png" alt="Industrial Automation" class="w-25 mb-4">
                        <h4 class="font-weight-bold mb-3">Industrial Control</h4>
                        <p class="text-muted">Designing state machines, VSD inverter configurations, and PLC ladder logic for automated sequencing.</p>
                        <div class="mt-auto">
                            <span class="badge badge-info p-2 mb-1">PLC</span>
                            <span class="badge text-white p-2 mb-1 bg-custom-gray">Pneumatics</span>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow-lg bg-white p-4" style="border-top: 4px solid #17a2b8 !important;">
                        <img src="Assets/img/book-stack.png" alt="CAD Design" class="w-25 mb-4">
                        <h4 class="font-weight-bold mb-3">Mechanical & CAD</h4>
                        <p class="text-muted">Developing scalable mass-production designs, analyzing robotic kinematics, and formatting 3-axis CNC workflows.</p>
                        <div class="mt-auto">
                            <span class="badge badge-info p-2 mb-1">3D CAD</span>
                            <span class="badge text-white p-2 mb-1 bg-custom-gray">Robotics</span>
                        </div>
                    </div>
                </div>
            </div>

           <!-- Chart.js Skill Graph (Real-time Dashboard Style) -->
            <div class="row mt-5 pt-4">
                <div class="col-lg-10 mx-auto">
                    <div class="card border-0 shadow-lg p-3 p-md-4 bg-custom-gray" style="border-radius: 15px; border-left: 5px solid #17a2b8 !important;">
                        
                        <!-- TAMBAHAN: Label Semester yang akan berubah dinamis -->
                        <h4 id="labelSemester" class="text-info text-center font-weight-bold mb-3 tracking-widest text-uppercase">Memuat Data...</h4>
                        
                        <div style="position: relative; height: 450px; width: 100%;">
                            <canvas id="skillsChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
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

                    // 3. Pindahkan data dari database ke dalam sebuah Array (Daftar)
                    $semua_proyek = [];
                    while($baris = mysqli_fetch_assoc($hasil_proyek)) {
                        $semua_proyek[] = $baris;
                    }

                    // 4. Pecah daftar proyek menjadi kelompok-kelompok (1 kelompok isi 3 proyek)
                    // Ini seperti membagi komponen ke dalam rak-rak berbeda
                    $kelompok_proyek = array_chunk($semua_proyek, 3);

                    // 5. Looping untuk setiap SLIDE (Kelompok)
                    foreach($kelompok_proyek as $index => $kelompok) {
                        // Slide pertama harus diberi class 'active' agar muncul pertama kali
                        $active_class = ($index == 0) ? 'active' : '';
                    ?>
                        <div class="carousel-item <?php echo $active_class; ?>">
                            <div class="row">
                                <?php 
                                // 6. Looping untuk mencetak KARTU di dalam Slide tersebut
                                foreach($kelompok as $proyek) { 
                                ?>
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
                                <?php 
                                } // Penutup loop KARTU 
                                ?>
                            </div>
                        </div>
                    <?php 
                    } // Penutup loop SLIDE 
                    ?>

                </div>

                <!-- Tombol Panah Kiri dan Kanan untuk Navigasi Manual -->
                <!-- Hanya akan berfungsi/terlihat rapi jika proyek lebih dari 3 -->
                <a class="carousel-control-prev" href="#projectCarousel" role="button" data-slide="prev" style="width: 5%; left: -5%;">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(50%) sepia(100%) saturate(500%) hue-rotate(140deg);"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#projectCarousel" role="button" data-slide="next" style="width: 5%; right: -5%;">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(50%) sepia(100%) saturate(500%) hue-rotate(140deg);"></span>
                    <span class="sr-only">Next</span>
                </a>
                
                <!-- Indikator Titik-titik di bawah slider -->
                <ol class="carousel-indicators" style="bottom: -20px;">
                    <?php foreach($kelompok_proyek as $index => $kelompok): ?>
                        <li data-target="#projectCarousel" data-slide-to="<?php echo $index; ?>" class="<?php echo $index == 0 ? 'active' : ''; ?>" style="background-color: #17a2b8;"></li>
                    <?php endforeach; ?>
                </ol>

            </div>
        </div>
    </section>
   
   <!-- Contact Section -->
    <section id="contact" class="contact-section d-flex align-items-center bg-secondary" data-aos="fade-down">
        <div class="container py-5">
            
            <div class="d-flex justify-content-center align-items-center mb-4 text-center" data-aos="fade-down">
                <span class="contact-line mr-3"></span>
                <span class="text-uppercase font-weight-bold contact-accent-text tracking-widest" >Contact</span>
                <span class="contact-line ml-3"></span>
            </div>

            <h2 class="display-4 font-weight-bold text-white mb-2 text-center">Let's build something</h2>

            <p class="contact-subtitle mb-5 mx-auto text-center" style="max-width: 600px; color: #e9ecef;">
                Open to freelance projects, collaborations, and interesting conversations.
            </p>

            <!-- FORM START (Maksimal lebar disamakan dengan sub-judul agar rapi) -->
            <form action="simpan_pesan.php" method="POST" class="mx-auto mb-5" style="max-width: 600px;">
                <div class="form-row">
                    <!-- Input Nama -->
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control form-control-lg custom-input" id="visitorName" name="name" placeholder="Your Name" required>
                    </div>
                    <!-- Input Email -->
                    <div class="form-group col-md-6">
                        <input type="email" class="form-control form-control-lg custom-input" id="visitorEmail" name="email" placeholder="Your Email" required>
                    </div>
                </div>
                <!-- Input Pesan -->
                <div class="form-group">
                    <textarea class="form-control form-control-lg custom-input" id="visitorMessage" name="message" rows="5" placeholder="How can we collaborate?" required></textarea>
                </div>
                
                <!-- Tombol Submit (Menggunakan class chamfered abu-abu Anda) -->
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-custom-gray font-weight-bold px-5 py-3">
                        Send a message
                    </button>
                </div>
            </form>
            <!-- FORM END -->

            <!-- Social Links -->
            <div class="d-flex justify-content-center flex-wrap contact-links mt-4">
                <a href="#" class="mx-3 small font-monospace"><span class="contact-accent-text mr-2">•</span>GitHub</a>
                <a href="#" class="mx-3 small font-monospace"><span class="contact-accent-text mr-2">•</span>LinkedIn</a>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark py-4 text-center text-light border-top border-info">
        <div class="container">
            <p class="mb-0 text-muted text-monospace small">&copy; 2026 Huda Nidhar.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="Assets/js/jquery"></script>
    <script src="Assets/js/chart.js"></script>
    <script src="Assets/js/bootstrap.bundle.min.js"></script>

   <!-- Inisialisasi Chart.js Dinamis -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const canvasEl = document.getElementById('skillsChart');
            
            if (canvasEl) {
                const ctx = canvasEl.getContext('2d');
                
                // 1. Buat cetakan grafik kosong terlebih dahulu
                const skillsChart = new Chart(ctx, {
                    type: 'radar',
                    data: {
                        labels: [
                            ['PLC &', 'Ladder Logic'], 
                            ['Microcontrollers', '(Arduino/ESP)'], 
                            ['C++', '(Embedded Systems)'], 
                            ['3-Axis CNC', '& CAD'], 
                            ['Pneumatic', 'Circuits'], 
                            ['Robotic', 'Kinematics']
                        ],
                        datasets: [
                            {
                                label: 'Practical Implementation',
                                data: [0,0,0,0,0,0], // Data awal 0
                                backgroundColor: 'rgba(23, 162, 184, 0.45)', 
                                borderColor: '#17a2b8',
                                pointBackgroundColor: '#17a2b8',
                                pointBorderColor: '#fff',
                                borderWidth: 2,
                                fill: true
                            },
                            {
                                label: 'Theoretical Knowledge',
                                data: [0,0,0,0,0,0], // Data awal 0
                                backgroundColor: 'rgba(209, 212, 216, 0.15)',
                                borderColor: '#d1d4d8', 
                                pointBackgroundColor: '#d1d4d8',
                                pointBorderColor: '#fff',
                                borderWidth: 2,
                                fill: true
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false, 
                        plugins: {
                            legend: {
                                position: 'top',
                                labels: { color: '#e9ecef', font: { size: 14, weight: 'bold' }, usePointStyle: true, padding: 25 }
                            },
                            tooltip: { backgroundColor: 'rgba(0,0,0,0.8)', titleFont: { size: 14 }, bodyFont: { size: 14, weight: 'bold' }, padding: 12, cornerRadius: 8 }
                        },
                        scales: {
                            r: {
                                min: 0, max: 100,
                                angleLines: { color: 'rgba(255, 255, 255, 0.1)' }, 
                                grid: { color: 'rgba(255, 255, 255, 0.1)' },       
                                pointLabels: { font: { size: 13, weight: 'bold' }, color: '#e9ecef', padding: 15 },
                                ticks: { display: false, stepSize: 20 }
                            }
                        }
                    }
                });

                // 2. Ambil data dari database menggunakan Fetch API
                fetch('data_chart.php')
                    .then(response => response.json())
                    .then(databaseData => {
                        
                        if(databaseData.length > 0) {
                            let stateIndex = 0; // State awal (Semester 1)
                            const labelEl = document.getElementById('labelSemester');

                            // Fungsi untuk memperbarui data ke dalam grafik
                            function updateChartSCADA() {
                                // Pecah data string "80,90,70" menjadi array [80, 90, 70]
                                const arrayPraktik = databaseData[stateIndex].nilai_praktik.split(',');
                                const arrayTeori = databaseData[stateIndex].nilai_teori.split(',');

                                // Suntikkan data ke grafik
                                skillsChart.data.datasets[0].data = arrayPraktik;
                                skillsChart.data.datasets[1].data = arrayTeori;
                                
                                // Ubah teks Judul Semester
                                labelEl.innerText = databaseData[stateIndex].semester;
                                
                                // Animasikan perubahannya!
                                skillsChart.update();

                                // State Machine Logic: Jika sudah di data terakhir, kembali ke 0
                                stateIndex++;
                                if(stateIndex >= databaseData.length) {
                                    stateIndex = 0;
                                }
                            }

                            // Jalankan update pertama kali secara instan
                            updateChartSCADA();

                            // Buat Loop Timer (Interupt Timer) setiap 3000ms (3 detik)
                            setInterval(updateChartSCADA, 3000);
                        } else {
                            document.getElementById('labelSemester').innerText = "Data Kosong";
                        }

                    })
                    .catch(error => console.error('Gagal mengambil data:', error));
            }
        });
    </script>
    <!-- AOS JS -->
    <script src="Assets/js/aos.js"></script>
    <script>
        // Inisialisasi AOS
        AOS.init({
            duration: 800, // Durasi animasi dalam milidetik (0.8 detik)
            once: true,    // Animasi hanya berjalan satu kali saat pertama kali dilihat
            offset: 100    // Jarak pemicu animasi dari bawah layar
        });
    </script>
</body>
</html>