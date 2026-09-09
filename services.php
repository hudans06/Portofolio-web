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