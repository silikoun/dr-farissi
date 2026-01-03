<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section id="hero">
    <div class="container hero-wrapper">
        <div class="hero-content">
            <div style="display:inline-block; padding:0.5rem 1rem; background:var(--accent-100); color:var(--accent-600); border-radius:20px; font-size:0.85rem; font-weight:600; margin-bottom:1.5rem;">
                ✨ No 205, LOT izidihar, Marrakech
            </div>
            <h1>Bienvenue au <br><span style="color:var(--accent-600)">Fares Medical Center</span></h1>
            <p>Centre médical pluridisciplinaire. Médecins experts, prise en charge personnalisée. Kinésithérapie, Rééducation, et plus.</p>
            
            <div style="display:flex; gap:1rem; flex-wrap:wrap; justify-content:center;">
                <a href="#appointment" class="btn btn-primary btn-pulse">
                    Demander un Rendez-vous
                </a>
                <a href="#services" class="btn btn-secondary">Nos Services</a>
            </div>

            <div style="margin-top:2rem; display:flex; align-items:center; gap:1rem; justify-content:center;">
                <div style="display:flex;">
                    <?php for($i=0;$i<5;$i++): ?><span style="color:#fbbf24">★</span><?php endfor; ?>
                </div>
                <span style="font-size:0.9rem; font-weight:500; color:var(--text-muted);">Recommandé par nos patients</span>
            </div>
        </div>
        
        <div class="hero-image">
            <!-- Updated with User Image -->
            <img src="assets/images/hero.jpg" alt="Dr Farissi Fares Medical Center">
            
            <div class="trust-badge">
                <div style="background:#dcfce7; padding:0.5rem; border-radius:50%; color:#16a34a;">✓</div>
                <div>
                    <div style="font-weight:700; color:var(--primary-900);">Dr. Farissi</div>
                    <div style="font-size:0.8rem; color:var(--text-muted);">Expertise & Dévouement</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Details -->
<section id="services" class="py-5" style="background:var(--primary-50); padding: 5rem 0;">
    <div class="container">
        <div class="section-title">
            <span>Nos Spécialités</span>
            <h2>Soins & Bien-être</h2>
        </div>
        
        <!-- Kinésithérapie (Highlighted) -->
        <div style="background:white; border-radius:var(--radius-lg); padding:2rem; margin-bottom:3rem; border:1px solid var(--accent-100); box-shadow:var(--shadow-md);">
            <div class="hero-wrapper" style="gap:2rem;">
                <div>
                    <div class="card-icon">👐</div>
                    <h2 style="font-size:1.8rem; margin-bottom:1rem;">Kinésithérapie</h2>
                    <p style="margin-bottom:1rem; color:var(--text-muted);">Notre centre d'excellence en kinésithérapie vous accompagne dans votre récupération physique. Que ce soit pour des douleurs chroniques, des traumatismes ou des suites opératoires, nos experts utilisent des techniques manuelles et instrumentales avancées.</p>
                    <p style="color:var(--text-muted);">Nous élaborons un protocole de soin personnalisé visant à restaurer votre mobilité, renforcer votre musculature et améliorer votre qualité de vie au quotidien.</p>
                </div>
                <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
                    <img src="assets/images/unname1d.jpg" alt="Kinésithérapie séance" style="width:100%; height:100%; object-fit:cover; border-radius:var(--radius-md);">
                    <img src="assets/images/2025-12-10.jpg" alt="Centre Kiné Equipement" style="width:100%; height:100%; object-fit:cover; border-radius:var(--radius-md);">
                </div>
            </div>
        </div>

        <div class="grid-3">
             <!-- New Specialties from Image -->
            <div class="card">
                <div class="card-icon">🗣️</div>
                <h3>Orthophonie</h3>
                <p style="color:var(--text-muted); margin-top:0.5rem;">Prise en charge des troubles de la communication, du langage, de la voix et de la déglutition pour enfants et adultes.</p>
            </div>
            <div class="card">
                <div class="card-icon">🧠</div>
                <h3>Neuro Rehab</h3>
                <p style="color:var(--text-muted); margin-top:0.5rem;">Rééducation neurologique spécialisée pour la récupération après un AVC, traumatisme ou maladies dégénératives.</p>
            </div>
            <div class="card">
                <div class="card-icon">🏊</div>
                <h3>Balnéothérapie</h3>
                <p style="color:var(--text-muted); margin-top:0.5rem;">Soins par l'eau pour soulager les douleurs articulaires, améliorer la mobilité et favoriser la détente musculaire.</p>
            </div>
            <div class="card">
                <div class="card-icon">⚡</div>
                <h3>Recovery & Sport</h3>
                <p style="color:var(--text-muted); margin-top:0.5rem;">Récupération sportive optimisée et médecine du sport pour prévenir et traiter les blessures des athlètes.</p>
            </div>
             <div class="card">
                <div class="card-icon">💉</div>
                <h3>Infiltration</h3>
                <p style="color:var(--text-muted); margin-top:0.5rem;">Infiltrations articulaires et traitements interventionnels pour la gestion de la douleur et l'inflammation.</p>
            </div>

            <!-- Existing Key Specialties -->
            <div class="card">
                <div class="card-icon">💆</div>
                <h3>Bien-Être</h3>
                <p style="color:var(--text-muted); margin-top:0.5rem;">Massages adaptés : décontracturant, relaxant et drainage lymphatique.</p>
            </div>
            <div class="card">
                <div class="card-icon">🤸</div>
                <h3>Rééducation Fonctionnelle</h3>
                <p style="color:var(--text-muted); margin-top:0.5rem;">Thérapie manuelle et exercices pour retrouver mobilité et force après blessure ou chirurgie.</p>
            </div>
            <div class="card">
                <div class="card-icon">✨</div>
                <h3>Soins du Visage</h3>
                <p style="color:var(--text-muted); margin-top:0.5rem;">Hydrafacial et soins esthétiques avancés.</p>
            </div>
            <div class="card">
                <div class="card-icon">🏺</div>
                <h3>Cupping Therapy (Hijama)</h3>
                <p style="color:var(--text-muted); margin-top:0.5rem;">Ventouses sèches et humides pour la détoxification et la circulation.</p>
            </div>
        </div>
    </div>
</section>

<!-- Appointment Form Section -->
<section id="appointment" style="padding: 5rem 0;">
    <div class="container">
        <div class="hero-wrapper" style="align-items:start;">
            
            <!-- Contact Info Side -->
            <div>
                 <div class="section-title" style="text-align:left;">
                    <span>Contactez-nous</span>
                    <h2>Demande de Rendez-vous</h2>
                </div>
                <p style="margin-bottom:2rem; color:var(--text-muted);">Remplissez le formulaire ci-dessous pour planifier votre visite au Fares Medical Center. Nous vous confirmerons votre rendez-vous dans les plus brefs délais.</p>

                <div style="display:flex; flex-direction:column; gap:1.5rem;">
                     <div style="display:flex; gap:1rem;">
                        <div style="color:var(--accent-600); font-size:1.5rem;">📞</div>
                        <div>
                            <strong>Appel</strong><br>
                            <a href="tel:+212689583829">0689-583829</a>
                        </div>
                    </div>
                     <div style="display:flex; gap:1rem;">
                        <div style="color:var(--teal-500); font-size:1.5rem;">💬</div>
                        <div>
                            <strong>WhatsApp</strong><br>
                            <a href="https://wa.me/212689583829">Discuter sur WhatsApp</a>
                        </div>
                    </div>
                     <div style="display:flex; gap:1rem;">
                        <div style="color:var(--accent-600); font-size:1.5rem;">📧</div>
                        <div>
                            <strong>Email</strong><br>
                            <a href="mailto:complexe.medical.marrakech@gmail.com">complexe.medical.marrakech@gmail.com</a>
                        </div>
                    </div>
                     <div style="display:flex; gap:1rem;">
                        <div style="color:var(--accent-600); font-size:1.5rem;">📍</div>
                        <div>
                            <strong>Localisation</strong><br>
                            No 205, LOT izidihar, Marrakech 40100
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form Side -->
            <div style="background:var(--primary-50); padding:2.5rem; border-radius:var(--radius-lg);">
                <form action="#" method="POST" style="display:grid; gap:1rem;">
                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
                        <div>
                            <label style="font-size:0.9rem; font-weight:600; margin-bottom:0.5rem; display:block;">Prénom</label>
                            <input type="text" name="prenom" style="width:100%; padding:0.8rem; border:1px solid #cbd5e1; border-radius:var(--radius-sm);" required>
                        </div>
                        <div>
                            <label style="font-size:0.9rem; font-weight:600; margin-bottom:0.5rem; display:block;">Nom</label>
                            <input type="text" name="nom" style="width:100%; padding:0.8rem; border:1px solid #cbd5e1; border-radius:var(--radius-sm);" required>
                        </div>
                    </div>

                    <div>
                        <label style="font-size:0.9rem; font-weight:600; margin-bottom:0.5rem; display:block;">Email</label>
                        <input type="email" name="email" style="width:100%; padding:0.8rem; border:1px solid #cbd5e1; border-radius:var(--radius-sm);" required>
                    </div>

                    <div>
                        <label style="font-size:0.9rem; font-weight:600; margin-bottom:0.5rem; display:block;">Téléphone</label>
                        <input type="tel" name="telephone" style="width:100%; padding:0.8rem; border:1px solid #cbd5e1; border-radius:var(--radius-sm);" required>
                    </div>

                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
                         <div>
                            <label style="font-size:0.9rem; font-weight:600; margin-bottom:0.5rem; display:block;">Date souhaitée</label>
                            <input type="date" name="date" style="width:100%; padding:0.8rem; border:1px solid #cbd5e1; border-radius:var(--radius-sm);">
                        </div>
                         <div>
                            <label style="font-size:0.9rem; font-weight:600; margin-bottom:0.5rem; display:block;">Service</label>
                            <select name="service" style="width:100%; padding:0.8rem; border:1px solid #cbd5e1; border-radius:var(--radius-sm);">
                                <option>Kinésithérapie</option>
                                <option>Rééducation</option>
                                <option>Bien-être / Massage</option>
                                <option>Hydrafacial</option>
                                <option>Cupping Therapy</option>
                                <option>Consultation Dr. Farissi</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label style="font-size:0.9rem; font-weight:600; margin-bottom:0.5rem; display:block;">Message</label>
                        <textarea name="message" rows="4" style="width:100%; padding:0.8rem; border:1px solid #cbd5e1; border-radius:var(--radius-sm);"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" style="width:100%; margin-top:1rem;">Envoyer la demande</button>
                </form>
            </div>

        </div>
    </div>
</section>

<!-- Map Section -->
<section style="height:400px; width:100%;">
    <!-- Embed Map using coordinates from user link: 31.6679513,-8.0272461 -->
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3395.733596547614!2d-8.029434784846435!3d31.66795128132103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafed670ed5d3af%3A0xd5ae7233fa42230b!2sNo%20205%2C%20LOT%20izidihar%2C%20Marrakech%2040100!5e0!3m2!1sen!2sma!4v1622549495484!5m2!1sen!2sma" 
        width="100%" 
        height="100%" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy">
    </iframe>
</section>

<?php include 'includes/footer.php'; ?>
