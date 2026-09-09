<!-- Footer -->
    <footer class="bg-dark py-4 text-center text-light border-top border-info">
        <div class="container">
            <p class="mb-0 text-muted text-monospace small">&copy; 2026 Huda Nidhar.</p>
        </div>
    </footer>

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
    <!-- 1. JQUERY (Mesin Utama - Wajib Paling Atas) -->
    <!-- Saya menggunakan versi penuh (min.js) agar fungsinya lebih stabil -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- 2. BOOTSTRAP JS (Modul Tampilan) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- 3. CHART.JS & AOS (Modul Tambahan) -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- 4. SKRIP ANIMASI AOS -->
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });
    </script>

    <!-- 5. SKRIP PENGGERAK SLIDER PROJECT -->
    <script>
        $(document).ready(function(){
            $('#projectCarousel').carousel({
                interval: 4000, 
                pause: "hover"  
            });
        });
    </script>

    <!-- 6. SKRIP RADAR CHART REAL-TIME -->
    <!-- (Biarkan kode panjang Chart.js Anda tetap berada di sini, di urutan paling bawah) -->
