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