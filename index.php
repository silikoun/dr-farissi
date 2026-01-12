<?php 
// Dynamic Keyword Insertion Logic
$kw = $_GET['kw'] ?? '';
$kw = strtolower($kw); // Normalize

// Defaults
$page_title = "Fares Medical Center Marrakech | Kinésithérapie & Médecine du Sport";
$hero_h1 = "Bienvenue au <br><span style='color:var(--accent-600)'>Fares Medical Center</span>";
$hero_p = "Centre médical pluridisciplinaire de référence à Marrakech. Kinésithérapie, Ostéopathie, Rééducation, et Médecine du Sport dans un environnement moderne et humain.";

// Custom Logic per Keyword Category
if (stripos($kw, 'osteo') !== false) {
    // Covers: ostéopathe marrakech, medecin osteopathe...
    $page_title = "Meilleur Ostéopathe à Marrakech | Dr. Amine Fares";
    $page_description = "Consultation Ostéopathie à Marrakech avec Dr. Amine Fares. Soulagement des douleurs articulaires et du dos. Rendez-vous au cabinet.";
    $hero_h1 = "Votre Expert <br><span style='color:var(--accent-600)'>Ostéopathe à Marrakech</span>";
    $hero_p = "Soulagez vos douleurs (Dos, Cervicales, Articulations) grâce à l'Ostéopathie. Prise en charge par un Médecin spécialiste.";

} elseif (stripos($kw, 'sport') !== false || stripos($kw, 'physio') !== false) {
    // Covers: kinésithérapie du sport, physiothérapie...
    $page_title = "Médecin du Sport & Physiothérapie Marrakech";
    $hero_h1 = "Centre de <br><span style='color:var(--accent-600)'>Physiothérapie & Sport</span>";
    $hero_p = "Accompagnement des athlètes, rééducation fonctionnelle et prévention des blessures. Expertise reconnue à Marrakech.";

} elseif (stripos($kw, 'bebe') !== false || stripos($kw, 'respiratoire') !== false) {
    // Covers: kinésithérapie respiratoire bébé
    $page_title = "Kinésithérapie Respiratoire & Pédiatrique Marrakech";
    $hero_h1 = "Kiné Respiratoire <br><span style='color:var(--accent-600)'>Pour Bébés & Enfants</span>";
    $hero_p = "Prise en charge douce et experte pour la kinésithérapie respiratoire pédiatrique (Bronchiolite, encombrement).";

} elseif (stripos($kw, 'kine') !== false || stripos($kw, 'reeducation') !== false || stripos($kw, 'massage') !== false) {
    // Default Service content
    $service_kine_title = "Kinésithérapie";
    $service_kine_desc = "Notre centre de kinésithérapie à Marrakech prend en charge les douleurs chroniques (dos, cervicales), les traumatismes et les suites opératoires.";
    
    // Covers: kinésithérapie marrakech, centre, cabinet, massage...
    $page_title = "Centre de Kinésithérapie Marrakech | Rééducation Avancée";
    $hero_h1 = "Centre de <br><span style='color:var(--accent-600)'>Kinésithérapie Avancée</span>";
    $hero_p = "Rééducation post-opératoire, traumatologie, massage thérapeutique et soins du dos. Plateau technique de dernière génération.";
}

// Global Overrides based on keywords
if (stripos($kw, 'sport') !== false || stripos($kw, 'physio') !== false) {
    $service_kine_title = "Kinésithérapie du Sport";
    $service_kine_desc = "Spécialisation en traumatologie sportive (LCA, ménisques, entorses). Réathlétisation et retour sur terrain pour amateurs et professionnels.";
} 
if (stripos($kw, 'osteo') !== false) {
    $service_kine_title = "Complémentarité Kiné & Ostéo";
    $service_kine_desc = "Nous associons l'Ostéopathie à la Kinésithérapie pour une guérison durable. Idéal pour les blocages articulaires et douleurs de dos.";
}
if (stripos($kw, 'bebe') !== false) {
    $service_kine_title = "Kiné Respiratoire & Pédiatrie";
    $service_kine_desc = "Techniques douces de désencombrement bronchique et rééducation motrice pour les nourrissons. Prise en charge experte.";
}

include 'includes/header.php'; 
?>

<!-- Hero Section -->
<section id="hero">
    <div class="container hero-wrapper">
        <div class="hero-content">
            <div style="display:inline-block; padding:0.5rem 1rem; background:var(--accent-100); color:var(--accent-600); border-radius:20px; font-size:0.85rem; font-weight:600; margin-bottom:1.5rem;">
                ✨ No 205, LOT izidihar, Marrakech <span style="margin-left:10px; background:#dcfce7; color:#15803d; padding:2px 8px; border-radius:10px; font-size:0.75rem;">Ouvert ●</span>
            </div>
            <h1><?php echo $hero_h1; ?></h1>
            <p><?php echo $hero_p; ?></p>
            
            <div style="display:flex; gap:1rem; flex-wrap:wrap; justify-content:center;">
                <a href="#contact" class="btn btn-primary btn-pulse">
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
            <img src="assets/images/hero.jpg" alt="Dr Fares Medical Center" width="600" height="400" style="width:100%; height:auto;">
            
            <div class="trust-badge" style="flex-direction:column; align-items:flex-start; gap:0.8rem; padding:1.2rem;">
                <!-- Dr Fares -->
                <div style="display:flex; align-items:center; gap:0.8rem;">
                    <div style="background:#dcfce7; padding:0.25rem; border-radius:50%; color:#16a34a; display:flex; align-items:center; justify-content:center; width:24px; height:24px; font-size:0.8rem;">✓</div>
                    <div>
                        <div style="font-weight:700; color:var(--primary-900); font-size:0.95rem; line-height:1.2;">Dr. Amine Fares</div>
                        <div style="font-size:0.75rem; color:var(--text-muted);">Médecin physique, médecin du sport</div>
                    </div>
                </div>
                <!-- Mme Qassimi -->
                <div style="display:flex; align-items:center; gap:0.8rem; border-top:1px solid #f1f5f9; padding-top:0.8rem; width:100%;">
                    <div style="background:#dcfce7; padding:0.25rem; border-radius:50%; color:#16a34a; display:flex; align-items:center; justify-content:center; width:24px; height:24px; font-size:0.8rem;">✓</div>
                    <div>
                         <div style="font-weight:700; color:var(--primary-900); font-size:0.95rem; line-height:1.2;">Mme Qassimi Amina</div>
                         <div style="font-size:0.75rem; color:var(--text-muted);">Kinésithérapeute</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Introduction Section: Notre Mission -->
<section class="section-mission reveal" style="background: #fff;">
    <div class="container">
        <div class="hero-wrapper gap-lg" style="align-items:center;">
            <div style="flex:1;">
                <img src="assets/images/gallery/img_0854.webp" alt="Centre Medical" class="img-chapter" style="box-shadow: 0 20px 40px rgba(0,0,0,0.1);" width="600" height="400" loading="lazy">
            </div>
            <div style="flex:1;">
                <div class="section-title" style="text-align:left; margin-bottom:1.5rem;">
                    <span>Notre Mission</span>
                    <h2 style="font-size:2.5rem; line-height:1.2;">Votre Santé, <br>Notre Priorité</h2>
                </div>
                <p class="lead" style="margin-bottom:1.5rem; color:var(--primary-700); font-weight:500;">
                    Au Fares Medical Center, nous plaçons l'humain au cœur de notre démarche thérapeutique.
                </p>
                <p style="color:var(--text-muted); line-height:1.8; margin-bottom:2rem;">
                    Dirigé par le <strong>Dr. Amine Fares</strong> et <strong>Mme Qassimi Amina</strong>, notre centre allie expertise médicale de pointe et technologies innovantes pour vous offrir les meilleurs soins en rééducation et médecine physique.
                </p>
                <a href="#services" class="btn btn-outline">Découvrir le Centre</a>
            </div>
        </div>
    </div>
</section>

<!-- Plateau Technique -->
<section class="section-tech reveal" style="background: var(--primary-50);">
    <div class="container">
        <div class="hero-wrapper gap-lg" style="align-items:center; flex-direction:row-reverse;">
            <div style="flex:1;">
                <img src="assets/images/plateau-new.jpg" alt="Plateau Technique" class="img-chapter" style="box-shadow: 0 20px 40px rgba(0,0,0,0.1);" width="600" height="400" loading="lazy">
            </div>
            <div style="flex:1;">
                <div class="section-title" style="text-align:left; margin-bottom:1.5rem;">
                    <span>Innovation</span>
                    <h2 style="font-size:2.5rem; line-height:1.2;">Plateau Technique <br>De Pointe</h2>
                </div>
                <p style="color:var(--text-muted); line-height:1.8; margin-bottom:1.5rem;">
                    Nous disposons d'équipements de dernière génération pour assurer une prise en charge optimale :
                </p>
                <ul class="feature-list">
                    <li><span style="font-size:1.2rem;">🤖</span> Système de marche robotique</li>
                    <li><span style="font-size:1.2rem;">🦴</span> Table de décompression spinale</li>
                    <li><span style="font-size:1.2rem;">🔴</span> Laser Médical</li>
                    <li><span style="font-size:1.2rem;">⚡</span> Ondes de Choc</li>
                    <li><span style="font-size:1.2rem;">🔋</span> Tecar Thérapie</li>
                    <li><span style="font-size:1.2rem;">❄️</span> Cryothérapie</li>
                    <li><span style="font-size:1.2rem;">⚙️</span> Arthromoteur</li>
                    <li><span style="font-size:1.2rem;">🔊</span> Ultrasons</li>
                    <li><span style="font-size:1.2rem;">💧</span> Balnéothérapie</li>
                    <li><span style="font-size:1.2rem;">🔌</span> Electrothérapie</li>
                    <li><span style="font-size:1.2rem;">👖</span> Pressothérapie</li>
                    <li><span style="font-size:1.2rem;">🧘</span> Gym Médicale</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="section-team">
    <div class="container">
        <div class="section-title">
            <span>Notre Équipe</span>
            <h2>Vos Experts Santé</h2>
        </div>
        <div class="grid-2">
            <!-- Dr Fares -->
            <div class="card reveal" style="text-align:center;">
                <div style="width:120px; height:120px; margin:0 auto 1.5rem; border-radius:50%; overflow:hidden; background:#f0f9ff;">
                     <img src="assets/images/dr-amine-fares.jpg" class="img-chapter" style="width:100%; height:100%; object-fit:cover;" alt="Dr. Amine Fares - Médecin physique et médecin du sport Marrakech" width="300" height="300" loading="lazy">
                </div>
                <h3>Dr. Amine Fares</h3>
                <p style="color:var(--accent-600); font-weight:600; font-size:0.9rem; margin-bottom:1rem;">Médecin physique, médecin du sport</p>
                <p style="font-size:0.9rem; color:var(--text-muted);">Spécialiste en rééducation neurologique et traumatologie sportive.</p>
            </div>
            <!-- Mme Qassimi -->
            <div class="card reveal" style="text-align:center; transition-delay: 0.2s;">
                 <div style="width:120px; height:120px; margin:0 auto 1.5rem; border-radius:50%; overflow:hidden; background:#f0f9ff;">
                     <img src="assets/images/mme-amina-qassimi.jpg" class="img-chapter" style="width:100%; height:100%; object-fit:cover;" alt="Mme Qassimi Amina - Kinésithérapeute Marrakech" width="300" height="300" loading="lazy">
                </div>
                <h3>Mme Qassimi Amina</h3>
                <p style="color:var(--accent-600); font-weight:600; font-size:0.9rem; margin-bottom:1rem;">Kinésithérapeute</p>
                <p style="font-size:0.9rem; color:var(--text-muted);">Spécialiste en Kinésithérapie, thérapie manuelle, et kinésithérapie du sport.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Expanded -->
<section id="services" class="section-services reveal" style="background:var(--primary-50);">
    <div class="container">
        <div class="section-title">
            <span>Nos Spécialités</span>
            <h2>Une Prise en Charge Complète</h2>
        </div>
        
        <!-- Service 1: Kinésithérapie -->
        <div style="background:white; border-radius:var(--radius-lg); padding:2rem; margin-bottom:3rem; box-shadow:var(--shadow-md);">
            <div class="hero-wrapper" style="gap:2rem;">
                <div style="flex:1;">
                    <h2 style="font-size:1.8rem; margin-bottom:1rem; color:var(--primary-900);"><?php echo isset($service_kine_title) ? $service_kine_title : "Kinésithérapie"; ?></h2>
                    <p style="margin-bottom:1rem; color:var(--text-muted);"><?php echo isset($service_kine_desc) ? $service_kine_desc : "Notre centre de kinésithérapie à Marrakech prend en charge les douleurs chroniques (dos, cervicales), les traumatismes et les suites opératoires. Nous visons à restaurer la mobilité et renforcer la musculature."; ?></p>
                </div>
                <div style="flex:1; max-width:500px;">
                     <img src="assets/images/kinesitherapie-real.jpg" style="width:100%; border-radius:var(--radius-md); object-fit:cover; height:250px;" alt="Séance de Kinésithérapie à Marrakech" width="500" height="250" loading="lazy">
                </div>
            </div>
        </div>

        <!-- Service 2: Balnéothérapie -->
        <div style="background:white; border-radius:var(--radius-lg); padding:2rem; margin-bottom:3rem; box-shadow:var(--shadow-md);">
             <div class="hero-wrapper" style="gap:2rem; flex-direction:row-reverse;">
                <div style="flex:1;">
                    <h2 style="font-size:1.8rem; margin-bottom:1rem; color:var(--primary-900);">Balnéothérapie</h2>
                    <p style="margin-bottom:1rem; color:var(--text-muted);">Réalisée dans une piscine chauffée, elle soulage les douleurs articulaires et favorise le renforcement musculaire en douceur. Idéale pour la rééducation post-traumatique et les rhumatismes.</p>
                </div>
                <div style="flex:1; max-width:500px;">
                     <img src="assets/images/plateau-new.jpg" style="width:100%; border-radius:var(--radius-md); object-fit:cover; height:250px;" alt="Piscine de Balnéothérapie Médicale" width="500" height="250" loading="lazy">
                </div>
            </div>
        </div>

        <!-- Service 3: Neuro-Rééducation -->
        <div style="background:white; border-radius:var(--radius-lg); padding:2rem; margin-bottom:3rem; box-shadow:var(--shadow-md);">
            <div class="hero-wrapper" style="gap:2rem;">
                <div style="flex:1;">
                    <h2 style="font-size:1.8rem; margin-bottom:1rem; color:var(--primary-900);">Neuro-rééducation</h2>
                    <p style="margin-bottom:1rem; color:var(--text-muted);">Pour les patients ayant subi un AVC ou un traumatisme neurologique. Nous utilisons un appareil de marche robotisée pour favoriser la récupération motrice et l'autonomie.</p>
                </div>
                <div style="flex:1; max-width:500px;">
                     <img src="assets/images/neuro-real.jpg" style="width:100%; border-radius:var(--radius-md); object-fit:cover; height:250px;" alt="Appareil de marche robotisée pour Neuro-rééducation" width="500" height="250" loading="lazy">
                </div>
            </div>
        </div>

        <!-- Grid for others -->
        <div class="grid-3">
            <div class="card">
                <div class="card-icon">⚡</div>
                <h3>Recovery & Sport</h3>
                <p style="color:var(--text-muted); margin-top:0.5rem;">Prévention des blessures et optimisation des performances pour sportifs amateurs et professionnels.</p>
            </div>
            <div class="card">
                <div class="card-icon">👐</div>
                <h3>Ostéopathie</h3>
                <p style="color:var(--text-muted); margin-top:0.5rem;">Approche thérapeutique manuelle douce pour soulager les douleurs et rétablir l'équilibre fonctionnel du corps.</p>
            </div>
            <div class="card">
                <div class="card-icon">🏺</div>
                <h3>Hijama (Cupping)</h3>
                <p style="color:var(--text-muted); margin-top:0.5rem;">Ventouses sèches ou humides pour la circulation et la détente, dans un cadre médicalisé.</p>
            </div>
        </div>
    </div>
</section>

        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-5" style="background:#f8fafc;">
    <div class="container">
        <div class="hero-wrapper" style="gap:4rem;">
            <div>
                 <img src="assets/images/gallery/img_9907.webp" class="img-chapter" alt="Salle d'attente Fares Medical Center" width="600" height="400" loading="lazy">
            </div>
            <div>
                <div class="section-title" style="text-align:left;">
                    <span>Excellence</span>
                    <h2>Pourquoi choisir Fares Medical Center ?</h2>
                </div>
                <ul style="display:grid; gap:1rem; margin-top:1rem;">
                    <li style="display:flex; align-items:center; gap:0.5rem; font-weight:500;">
                        <span style="color:#16a34a;">✓</span> Approche médicale basée sur les preuves scientifiques
                    </li>
                    <li style="display:flex; align-items:center; gap:0.5rem; font-weight:500;">
                        <span style="color:#16a34a;">✓</span> Équipe pluridisciplinaire expérimentée
                    </li>
                    <li style="display:flex; align-items:center; gap:0.5rem; font-weight:500;">
                        <span style="color:#16a34a;">✓</span> Plateau technique moderne
                    </li>
                    <li style="display:flex; align-items:center; gap:0.5rem; font-weight:500;">
                        <span style="color:#16a34a;">✓</span> Prise en charge personnalisée
                    </li>
                    <li style="display:flex; align-items:center; gap:0.5rem; font-weight:500;">
                        <span style="color:#16a34a;">✓</span> Accompagnement humain et professionnel
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Reviews Section -->
<section id="reviews" class="py-5" style="background:#fff;">
    <div class="container">
        <div class="section-title">
            <div class="google-badge">
                <svg class="google-G" viewBox="0 0 24 24" width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                    <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                    <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                    <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                </svg>
                <span>4.9/5 sur Google</span>
                <span style="color:#fbbf24; margin-left:5px;">★★★★★</span>
                <span style="color:var(--text-muted); font-weight:400; font-size:0.9rem;">(200+ avis)</span>
            </div>
            <h2>Ils nous font confiance</h2>
        </div>

        <div class="grid-3" style="margin-bottom:2rem;">
            <!-- Review 1 -->
            <div class="review-card">
                <div class="review-header">
                    <div class="reviewer-avatar">A</div>
                    <div class="reviewer-info">
                        <h4>Abdelaali Sabah</h4>
                        <div class="review-meta">Il y a un an</div>
                    </div>

                </div>
                <div class="stars">★★★★★</div>
                <p style="color:var(--text-muted); font-size:0.95rem; line-height:1.6;">"J'ai eu une excellente expérience au Centre Médical Fares. Le personnel était très professionnel, amical et attentif. La clinique était propre, bien organisée et avait un design moderne, ce qui m'a mis à l'aise tout au long de ma visite."</p>
                <div style="margin-top:auto; padding-top:1rem;">
                    <span style="font-size:0.8rem; background:#f1f5f9; padding:0.2rem 0.5rem; border-radius:4px; color:var(--text-muted);">Consultation</span>
                </div>
            </div>

            <!-- Review 2 -->
            <div class="review-card">
                <div class="review-header">
                    <div class="reviewer-avatar" style="background:#e0f2fe; color:#0284c7;">H</div>
                    <div class="reviewer-info">
                        <h4>Hicham El Amrani</h4>
                        <div class="review-meta">Il y a 2 mois</div>
                    </div>
                </div>
                <div class="stars">★★★★★</div>
                <p style="color:var(--text-muted); font-size:0.95rem; line-height:1.6;">"Très satisfait des séances de kinésithérapie. Mme Qassimi et le Dr Fares sont très compétents et à l'écoute. Je recommande vivement pour toute rééducation sportive."</p>
                 <div style="margin-top:auto; padding-top:1rem;">
                    <span style="font-size:0.8rem; background:#f1f5f9; padding:0.2rem 0.5rem; border-radius:4px; color:var(--text-muted);">Kinésithérapie</span>
                </div>
            </div>

            <!-- Review 3 -->
            <div class="review-card">
                <div class="review-header">
                    <div class="reviewer-avatar" style="background:#dcfce7; color:#16a34a;">S</div>
                    <div class="reviewer-info">
                        <h4>Sarah Benali</h4>
                        <div class="review-meta">Il y a 6 mois</div>
                    </div>
                </div>
                <div class="stars">★★★★★</div>
                <p style="color:var(--text-muted); font-size:0.95rem; line-height:1.6;">"Un centre moderne avec un équipement de pointe. Merci au Dr Amine pour son diagnostic précis et son suivi durant toute ma convalescence. Le meilleur centre à Marrakech."</p>
                 <div style="margin-top:auto; padding-top:1rem;">
                    <span style="font-size:0.8rem; background:#f1f5f9; padding:0.2rem 0.5rem; border-radius:4px; color:var(--text-muted);">Médecine du Sport</span>
                </div>
            </div>
        </div>

        <div style="text-align:center;">
             <a href="https://www.google.com/search?sca_esv=2b20dab580b1b2c9&q=avis+sur+fares+m%C3%A9dical+et+kin%C3%A9sith%C3%A9rapie+center+-+marrakech&uds=ALYpb_leiSiwJJwS1ngbeyUv3AZmql0LJLSPXPX4C6IbGEfd7qbHuYaMZRMylWmj9mxw7PfnEH2pOefT3y1G-oTDBkgdNehFAZNsDNWKMsiCHrF2XJ13QJyZYvwk1X4R8J1LX3bIOl8z_CbTS9Ao77k3csitkkeXT6KG2bAkt2AXn4MDf3QasvzWszIPTKlh0ttw8tSaU5oSiXU9Ipj3iR7fFy3XM39E0FOdXpdrVJAbIOMnGP0MU6rwpzWx_aw-Ifv8uXFQ_Hbsz6uLClzUC3dGp56Jf2KGsZX824ckN8aKkKTdl1MLMo1WiKSBU7zYLXIECG5GvY2FX0BzXv160KvVI5rIxFnvupTMx-ouu7Aq4Pcx4ylf8iMxiZCw_Lk2GMelUcXp_JHoqX0Wr1d2r7mvUB_wjsRMZbpE9lwWbSkRZPrGv9geeIoAD-MMQrnJiWB6VxyOqC-VlCZ_B5XDgu1b2IUs0m9bdvdyVE_vpPpCxeEht5OQqXS-sDYm8_2AC2CBMTfAZ9f8UDvFnaJBUxRtofCkczNGxQ&si=AL3DRZEsmMGCryMMFSHJ3StBhOdZ2-6yYkXd_doETEE1OR-qOfFad9d7OYJRrV2D8YiNs3JYIO4j2byMuEs39Gaj54DI5sDDBSwcAKOYg20IRNn_7nECv6nloWxK2pA4W7AjkQLstrO27OHnVL0Pjqwt3jAViKFTnFv9wzLlQioCeSOWNEyXF-iCke1BCFFDIEKRaL2Jd5M2&sa=X&ved=2ahUKEwiH5u3Z4YSSAxVf_rsIHQ_-GC4Qk8gLegQIFxAB&ictx=1&stq=1&cs=1&lei=u0JkacecBt_87_UPj_zj8AI#ebo=1" target="_blank" class="btn btn-outline" style="border:1px solid #d1d5db; color:var(--primary-900);">
                Lire plus d'avis sur Google
            </a>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5">
    <div class="container">
        <div class="section-title">
            <span>Questions Fréquentes</span>
            <h2>FAQ</h2>
        </div>
        <div style="max-width:800px; margin:0 auto; display:grid; gap:1rem;">
             <details style="padding:1rem; background:white; border-radius:var(--radius-md); box-shadow:var(--shadow-sm); cursor:pointer;">
                <summary style="font-weight:600; color:var(--primary-900);">Faut-il une ordonnance pour consulter ?</summary>
                <p style="margin-top:0.5rem; color:var(--text-muted);">Non, ce n'est pas obligatoire. Notre médecin peut vous consulter sur place et vous prescrire une ordonnance si nécessaire.</p>
            </details>
             <details style="padding:1rem; background:white; border-radius:var(--radius-md); box-shadow:var(--shadow-sm); cursor:pointer;">
                <summary style="font-weight:600; color:var(--primary-900);">Combien de séances sont nécessaires ?</summary>
                <p style="margin-top:0.5rem; color:var(--text-muted);">Cela dépend de votre pathologie. Un protocole personnalisé est établi après le bilan initial.</p>
            </details>
             <details style="padding:1rem; background:white; border-radius:var(--radius-md); box-shadow:var(--shadow-sm); cursor:pointer;">
                <summary style="font-weight:600; color:var(--primary-900);">Prenez-vous les sportifs ?</summary>
                <p style="margin-top:0.5rem; color:var(--text-muted);">Oui, nous prenons en charge les sportifs amateurs et professionnels en prévention et récupération.</p>
            </details>
             <details style="padding:1rem; background:white; border-radius:var(--radius-md); box-shadow:var(--shadow-sm); cursor:pointer;">
                <summary style="font-weight:600; color:var(--primary-900);">Travaillez-vous avec les assurances ?</summary>
                <p style="margin-top:0.5rem; color:var(--text-muted);">Oui, nous fournissons les documents nécessaires pour vos démarches de remboursement.</p>
            </details>
        </div>
    </div>
</section>

<!-- Gallery Section (Swiper) -->
<section id="gallery" style="background:white; padding: 5rem 0; overflow:hidden;">
    <div class="container">
        <div class="section-title">
            <span>Notre Centre</span>
            <h2>Visite Guidée</h2>
        </div>
        
        <!-- Swiper -->
        <div class="swiper mySwiper" style="width:100%; height:500px; border-radius:var(--radius-lg);">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="assets/images/hero.jpg" style="width:100%; height:100%; object-fit:cover;" loading="lazy" alt="Accueil du Centre Médical Fares" width="800" height="500"></div>
                <div class="swiper-slide"><img src="assets/images/plateau-new.jpg" style="width:100%; height:100%; object-fit:cover;" loading="lazy" alt="Plateau technique de rééducation" width="800" height="500"></div>
                <div class="swiper-slide"><img src="assets/images/2025-12-10.jpg" style="width:100%; height:100%; object-fit:cover;" loading="lazy" alt="Équipement de physiothérapie moderne" width="800" height="500"></div>
                <div class="swiper-slide"><img src="assets/images/gallery/img_0850.webp" style="width:100%; height:100%; object-fit:cover;" loading="lazy" alt="Salle de consultation médicale" width="800" height="500"></div>
                <div class="swiper-slide"><img src="assets/images/gallery/img_0852.webp" style="width:100%; height:100%; object-fit:cover;" loading="lazy" alt="Cabinet de kinésithérapie" width="800" height="500"></div>
                <div class="swiper-slide"><img src="assets/images/gallery/img_0854.webp" style="width:100%; height:100%; object-fit:cover;" loading="lazy" alt="Couloir du centre médical" width="800" height="500"></div>
                <div class="swiper-slide"><img src="assets/images/gallery/img_0855.webp" style="width:100%; height:100%; object-fit:cover;" loading="lazy" alt="Espace de rééducation" width="800" height="500"></div>
                <div class="swiper-slide"><img src="assets/images/gallery/img_9907.webp" style="width:100%; height:100%; object-fit:cover;" loading="lazy" alt="Salle d'attente confortable" width="800" height="500"></div>
            </div>
            <div class="swiper-button-next" style="color:var(--white); text-shadow:0 0 10px rgba(0,0,0,0.5);"></div>
            <div class="swiper-button-prev" style="color:var(--white); text-shadow:0 0 10px rgba(0,0,0,0.5);"></div>
            <div class="swiper-pagination"></div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var swiper = new Swiper(".mySwiper", {
                    spaceBetween: 30,
                    centeredSlides: true,
                    autoplay: {
                        delay: 2500,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    },
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    loop: true,
                    effect: 'fade',
                });
            });
        </script>
    </div>
</section>



<!-- Map Section -->
<section style="height:400px; width:100%;">
    <!-- Embed Map using coordinates from user link: 31.6679513,-8.0272461 -->
    <iframe 
        title="Google Map location of Fares Medical Center"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3395.733596547614!2d-8.029434784846435!3d31.66795128132103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafed670ed5d3af%3A0xd5ae7233fa42230b!2sNo%20205%2C%20LOT%20izidihar%2C%20Marrakech%2040100!5e0!3m2!1sen!2sma!4v1622549495484!5m2!1sen!2sma" 
        width="100%" 
        height="100%" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy">
    </iframe>
</section>

<?php include 'includes/footer.php'; ?>
