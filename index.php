<?php 
// 1. Language Detection Logic
$kw = $_GET['kw'] ?? '';
$kw = trim($kw); // Remove whitespace
$kw_lower = mb_strtolower($kw, 'UTF-8');

// Default Language
$lang = 'fr';
$dir = 'ltr';

// Keywords that trigger Darija/Arabic
$darija_keywords = ['الترويض', 'طبي', 'darija', 'kine', 'reeducation', 'massage']; 

function isArabic($string) {
    return preg_match('/\p{Arabic}/u', $string);
}

if (isArabic($kw) || stripos($kw, 'darija') !== false) {
    $lang = 'ar';
    $dir = 'rtl';
}

// 2. Define Content Variables (Dictionary)

// --- DEFAULTS (FRENCH) ---
$content = [
    'page_title' => "Fares Medical Center Marrakech | Kinésithérapie & Médecine du Sport",
    'page_desc'  => "Centre médical pluridisciplinaire à Marrakech (Izidihar). Dr. Amine Fares & Mme Qassimi. Spécialistes en Kinésithérapie, Ostéopathie, et Médecine du Sport.",
    'hero_h1'    => "Bienvenue au <br><span style='color:var(--accent-600)'>Fares Medical Center</span>",
    'hero_p'     => "Centre médical pluridisciplinaire de référence à Marrakech. Kinésithérapie, Ostéopathie, et Médecine du Sport dans un environnement moderne et humain.",
    'cta_rdv'    => "Demander un Rendez-vous",
    'cta_services' => "Nos Services",
    'recommended' => "Recommandé par nos patients",
    
    // Professionals
    'dr_title' => "Dr. Amine Fares",
    'dr_desc' => "Médecin physique, médecin du sport",
    'mme_title' => "Mme Qassimi Amina",
    'mme_desc' => "Kinésithérapeute",
    
    // Mission
    'mission_sub' => "Notre Mission",
    'mission_h2' => "Votre Santé, <br>Notre Priorité",
    'mission_p1' => "Au Fares Medical Center, nous plaçons l'humain au cœur de notre démarche thérapeutique.",
    'mission_p2' => "Dirigé par le <strong>Dr. Amine Fares</strong> et <strong>Mme Qassimi Amina</strong>, notre centre allie expertise médicale de pointe et technologies innovantes pour vous offrir les meilleurs soins en rééducation et médecine physique.",
    'cta_discover' => "Découvrir le Centre",
    
    // Tech
    'tech_sub' => "Innovation",
    'tech_h2'  => "Plateau Technique <br>De Pointe",
    'tech_intro' => "Nous disposons d'équipements de dernière génération pour assurer une prise en charge optimale :",
    'tech_list' => [
        "Système de marche robotique", "Table de décompression spinale", "Laser Médical", 
        "Ondes de Choc", "Tecar Thérapie", "Cryothérapie", "Arthromoteur", 
        "Ultrasons", "Balnéothérapie", "Electrothérapie", "Pressothérapie", "Gym Médicale"
    ],
    
    // Team
    'team_sub' => "Notre Équipe",
    'team_h2'  => "Vos Experts Santé",
    'dr_bio'   => "Spécialiste en rééducation neurologique et traumatologie sportive.",
    'mme_bio'  => "Spécialiste en Kinésithérapie, thérapie manuelle, et kinésithérapie du sport.",
    
    // Services
    'services_sub' => "Nos Spécialités",
    'services_h2'  => "Une Prise en Charge Complète",
    
    's1_title' => "Kinésithérapie",
    's1_desc'  => "Notre centre de kinésithérapie à Marrakech prend en charge les douleurs chroniques (dos, cervicales), les traumatismes et les suites opératoires. Nous visons à restaurer la mobilité et renforcer la musculature.",
    
    's2_title' => "Balnéothérapie",
    's2_desc'  => "Réalisée dans une piscine chauffée, elle soulage les douleurs articulaires et favorise le renforcement musculaire en douceur. Idéale pour la rééducation post-traumatique et les rhumatismes.",
    
    's3_title' => "Neuro-rééducation",
    's3_desc'  => "Pour les patients ayant subi un AVC ou un traumatisme neurologique. Nous utilisons un appareil de marche robotisée pour favoriser la récupération motrice et l'autonomie.",
    
    'card_recovery' => "Autonomie & Récupération",
    'card_recovery_desc' => "Prévention des blessures et optimisation des performances pour sportifs amateurs et professionnels.",
    
    'card_osteo' => "Ostéopathie",
    'card_osteo_desc' => "Approche thérapeutique manuelle douce pour soulager les douleurs et rétablir l'équilibre fonctionnel du corps.",
    
    'card_hijama' => "Hijama (Cupping)",
    'card_hijama_desc' => "Ventouses sèches ou humides pour la circulation et la détente, dans un cadre médicalisé.",
    
    // Why Choose Us
    'why_sub' => "Excellence",
    'why_h2'  => "Pourquoi choisir Fares Medical Center ?",
    'why_list' => [
        "Approche médicale basée sur les preuves scientifiques",
        "Équipe pluridisciplinaire expérimentée",
        "Plateau technique moderne",
        "Prise en charge personnalisée",
        "Accompagnement humain et professionnel"
    ],
    
    // Reviews
    'reviews_trust' => "Ils nous font confiance",
    'reviews_more'  => "Lire plus d'avis sur Google",
    'rev1_text' => "J'ai eu une excellente expérience au Centre Médical Fares. Le personnel était très professionnel, amical et attentif. La clinique était propre, bien organisée et avait un design moderne.",
    'rev2_text' => "Très satisfait des séances de kinésithérapie. Mme Qassimi et le Dr Fares sont très compétents et à l'écoute. Je recommande vivement pour toute rééducation sportive.",
    'rev3_text' => "Un centre moderne avec un équipement de pointe. Merci au Dr Amine pour son diagnostic précis et son suivi durant toute ma convalescence.",
    
    // FAQ
    'faq_sub' => "Questions Fréquentes",
    'faq_title' => "FAQ",
    'faq_q1' => "Faut-il une ordonnance pour consulter ?",
    'faq_a1' => "Non, ce n'est pas obligatoire. Notre médecin peut vous consulter sur place et vous prescrire une ordonnance si nécessaire.",
    'faq_q2' => "Combien de séances sont nécessaires ?",
    'faq_a2' => "Cela dépend de votre pathologie. Un protocole personnalisé est établi après le bilan initial.",
    'faq_q3' => "Prenez-vous les sportifs ?",
    'faq_a3' => "Oui, nous prenons en charge les sportifs amateurs et professionnels en prévention et récupération.",
    'faq_q4' => "Travaillez-vous avec les assurances ?",
    'faq_a4' => "Oui, nous fournissons les documents nécessaires pour vos démarches de remboursement.",
    
    // Gallery
    'gallery_sub' => "Notre Centre",
    'gallery_h2'  => "Visite Guidée",
    
    // Fixed UI
    'open_badge' => "Ouvert ●"
];

// --- DARIJA OVERRIDES ---
if ($lang === 'ar') {
    $content = [
        'page_title' => "مركز فارس للترويض الطبي بمراكش | خبيرك فالصحة",
        'page_desc'  => "أحسن مركز للترويض الطبي والعلاج الفيزيائي فمراكش. الدكتور أمين فارس ومدام قاسمي أمينة كيرحبو بكم لعلاج جميع الآلام والإصابات.",
        'hero_h1'    => "مرحباً بكم فـ <br><span style='color:var(--accent-600)'>مركز فارس للترويض الطبي</span>",
        'hero_p'     => "جينا باش نعاونوك ترجع صحتك وحيويتك. عندنا أحدث التجهيزات وطاقم طبي خبير فمراكش باش تهنا من آلام الظهر، المفاصل، وإصابات الرياضة.",
        'cta_rdv'    => "طلب موعد دابا",
        'cta_services' => "الخدمات ديالنا",
        'recommended' => "المرضى ديالنا كينصحو بينا",
        
        'dr_title' => "د. أمين فارس",
        'dr_desc' => "طبيب فيزيائي وطبيب رياضي",
        'mme_title' => "مدام أمينة قاسمي",
        'mme_desc' => "أخصائية الترويض الطبي",
        
        'mission_sub' => "المهمة ديالنا",
        'mission_h2' => "صحتك هي <br>الأولوية ديالنا",
        'mission_p1' => "فمركز فارس، كنعتبرو كل مريض بحال واحد من العائلة.",
        'mission_p2' => "تحت إشراف **د. أمين فارس** و **مدام أمينة قاسمي**، كنقدمو ليك أحدث العلاجات فالترويض الطبي والطب الرياضي باش ترجع لحياتك الطبيعية فسرع وقت.",
        'cta_discover' => "كتشف المركز",
        
        'tech_sub' => "الجودة",
        'tech_h2'  => "تجهيزات طبية <br>متطورة",
        'tech_intro' => "ما كنبخلوش على صحتك، جبنا ليك أحدث الماكينات فالعالم باش العلاج يكون فعال وسريع:",
        'tech_list' => [
            "روبوت المشي (لإعادة التأهيل)", "طاولة شد الظهر (للسياتيك والديسك)", "الليزر الطبي", 
            "الموجات التصادمية (Ondes de Choc)", "تيكار تيرابي (Tecar)", "العلاج بالتبريد (Cryothérapie)", "جهاز تحريك المفاصل", 
            "الموجات فوق الصوتية", "العلاج بالماء (Balnéothérapie)", "العلاج بالكهرباء", "العلاج بالضغط (Pressothérapie)", "الرياضة الطبية"
        ],
        
        'team_sub' => "الفريق الطبي",
        'team_h2'  => "الخبراء ديالنا",
        'dr_bio'   => "خبير فإعادة التأهيل العصبي وعلاج إصابات الملاعب والرياضيين.",
        'mme_bio'  => "خبرة طويلة فالتدليك العلاجي، الترويض الطبي، والعناية بالرياضيين.",
        
        'services_sub' => "التخصصات",
        'services_h2'  => "علاج متكامل ليك",
        
        's1_title' => "الترويض الطبي (Kinésithérapie)",
        's1_desc'  => "كنعالجوا آلام الظهر، العنق، والمفاصل. سواء كان عندك مشكل قديم أو عاد درتي عملية، حنا هنا باش نعاونوك ترجع الحركة ديالك كولها.",
        
        's2_title' => "الترويض فالمسبح (Balnéothérapie)",
        's2_desc'  => "مسبح طبي سخون كيعاون بزاف فتخفيف الألم وترخية العضلات. ممتاز للناس اللي عندهم الروماتيزم أو كيديرو ترويض من بعد شي كسيدة لا قدر الله.",
        
        's3_title' => "الترويض العصبي (Neuro-rééducation)",
        's3_desc'  => "بالنسبة للناس اللي عندهم شلل نصفي أو مشاكل فالجهاز العصبي. كنستعملو الروبوت باش نعاونوهم يرجعو يتمشاو ويسترجعو الاستقلالية ديالهم.",
        
        'card_recovery' => "الاسترجاع والرياضة",
        'card_recovery_desc' => "برامج خاصة للرياضيين باش يحمييو راسهم من الإصابات ويرفعو من الأداء ديالهم.",
        
        'card_osteo' => "الأوستيوبات (Ostéopathie)",
        'card_osteo_desc' => "علاج يدوي ناعم كيقاد العظام والمفاصل وكيريح الجسم من التزيا",
        
        'card_hijama' => "الحجامة الطبية",
        'card_hijama_desc' => "حجامة جافة أو دموية بطريقة طبية ومعقمة 100% لتحسين الدورة الدموية.",
        
        'why_sub' => "علاش حنا؟",
        'why_h2'  => "علاش تختار مركز فارس؟",
        'why_list' => [
            "علاج مبني على الطب والعلم ماشي غير الهضرة",
            "فريق طبي متكامل (طبيب + مروضين)",
            "أحدث التجهيزات فمراكش",
            "متابعة شخصية لكل مريض",
            "معاملة إنسانية وجو عائلي"
        ],
        
        'reviews_trust' => "الناس تاقو فينا",
        'reviews_more'  => "شوف آراء كثر فـ Google",
        'rev1_text' => "تجربة ممتازة فمركز فارس. الطاقم ضريف ومحترف بزاف. العيادة نقية ومنظمة، حسيت براسي مرتاح.",
        'rev2_text' => "فرحان بزاف بحصص الترويض. مدام قاسمي والدكتور فارس عارفين خدمتهم مزيان. كننصح أي واحد رياضي يجي عندهم.",
        'rev3_text' => "مركز عصري وفيه ماكينات واعرين. شكرا دكتور أمين على التشخيص الدقيق والمتابعة ديالك.",
        
        'faq_sub' => "أسئلة وإجابات",
        'faq_title' => "أسئلة كيتطرحو بزاف",
        'faq_q1' => "واش ضروري ورقة الطبيب (Ordonnance)؟",
        'faq_a1' => "ماشي ضروري. الدكتور ديالنا كاين فالمركز، يقدر يدوز ليك ويكتب ليك الوصفة يلا احتاجها الحال.",
        'faq_q2' => "شحال من حصة غيخصني؟",
        'faq_a2' => "على حسب الحالة ديالك. فالزيارة الأولى كنديرو تشخيص وديك الساعة كنقولو ليك البرنامج المناسب.",
        'faq_q3' => "واش كداويو الرياضيين؟",
        'faq_a3' => "أكيد، عندنا برامج خاصة للرياضيين (محترفين وهواة) للعلاج والوقاية من الإصابات.",
        'faq_q4' => "واش كتعاملو مع التأمين (Mutuelle)؟",
        'faq_a4' => "آه، كنعطيوك وراقك وفواتيرك مقادين باش تدفعهم للتعاضدية أو التأمين ديالك.",
        
        'gallery_sub' => "الصور",
        'gallery_h2'  => "جولة فالمركز",
        
        'open_badge' => "مفتوح ●"
    ];
}

// 3. Specific Keyword Overrides (Logic preserved from original, adapted for array)
// If we are in French mode, we keep the specific overrides. 
// If in Darija, we might want to stick to the main Darija content unless specific Darija variations are asked.
// For now, let's keep the French overrides active only if $lang == 'fr'.

if ($lang == 'fr') {
    if (stripos($kw, 'osteo') !== false) {
        $content['page_title'] = "Meilleur Ostéopathe à Marrakech | Dr. Amine Fares";
        $content['hero_h1'] = "Votre Expert <br><span style='color:var(--accent-600)'>Ostéopathe à Marrakech</span>";
        $content['s1_title'] = "Complémentarité Kiné & Ostéo";
        $content['s1_desc'] = "Nous associons l'Ostéopathie à la Kinésithérapie pour une guérison durable. Idéal pour les blocages articulaires et douleurs de dos.";
    } elseif (stripos($kw, 'sport') !== false || stripos($kw, 'physio') !== false) {
        $content['page_title'] = "Médecin du Sport & Physiothérapie Marrakech";
        $content['hero_h1'] = "Centre de <br><span style='color:var(--accent-600)'>Physiothérapie & Sport</span>";
        $content['s1_title'] = "Kinésithérapie du Sport";
        $content['s1_desc'] = "Spécialisation en traumatologie sportive (LCA, ménisques, entorses). Réathlétisation et retour sur terrain pour amateurs et professionnels.";
    } elseif (stripos($kw, 'bebe') !== false || stripos($kw, 'respiratoire') !== false) {
        $content['page_title'] = "Kinésithérapie Respiratoire & Pédiatrique Marrakech";
        $content['hero_h1'] = "Kiné Respiratoire <br><span style='color:var(--accent-600)'>Pour Bébés & Enfants</span>";
        $content['s1_title'] = "Kiné Respiratoire & Pédiatrie";
        $content['s1_desc'] = "Techniques douces de désencombrement bronchique et rééducation motrice pour les nourrissons. Prise en charge experte.";
    }
}

// Pass variables to header
$page_title = $content['page_title'];
$page_description = $content['page_desc'];

include 'includes/header.php'; 
?>

<!-- Main Content -->
<main>
<!-- Hero Section -->
<section id="hero" class="<?php echo ($lang === 'ar') ? 'rtl' : ''; ?>">
    <div class="container hero-wrapper">
        <div class="hero-content">
            <div style="display:inline-block; padding:0.5rem 1rem; background:var(--accent-100); color:var(--accent-600); border-radius:20px; font-size:0.85rem; font-weight:600; margin-bottom:1.5rem;">
                ✨ No 205, LOT izidihar, Marrakech <span style="margin-left:10px; background:#dcfce7; color:#15803d; padding:2px 8px; border-radius:10px; font-size:0.75rem;"><?php echo $content['open_badge']; ?></span>
            </div>
            <h1><?php echo $content['hero_h1']; ?></h1>
            <p><?php echo $content['hero_p']; ?></p>
            
            <div style="display:flex; gap:1rem; flex-wrap:wrap; justify-content:<?php echo ($lang==='ar')?'flex-start':'center'; ?>;">
                <a href="#contact" class="btn btn-primary btn-pulse">
                    <?php echo $content['cta_rdv']; ?>
                </a>
                <a href="#services" class="btn btn-secondary"><?php echo $content['cta_services']; ?></a>
            </div>

            <div style="margin-top:2rem; display:flex; align-items:center; gap:1rem; justify-content:<?php echo ($lang==='ar')?'flex-start':'center'; ?>;">
                <div style="display:flex;">
                    <?php for($i=0;$i<5;$i++): ?><span style="color:#fbbf24">★</span><?php endfor; ?>
                </div>
                <span style="font-size:0.9rem; font-weight:500; color:var(--text-muted);"><?php echo $content['recommended']; ?></span>
            </div>
        </div>
        
        <div class="hero-image">
            <img src="assets/images/hero.jpg?v=2" alt="Dr Fares Medical Center" width="600" height="400" style="width:100%; height:auto;" fetchpriority="high" decoding="async">
            
            <div class="trust-badge" style="flex-direction:column; align-items:flex-start; gap:0.8rem; padding:1.2rem; <?php echo ($lang==='ar')?'direction:rtl; text-align:right;':''; ?>">
                <!-- Dr Fares -->
                <div style="display:flex; align-items:center; gap:0.8rem;">
                    <div style="background:#dcfce7; padding:0.25rem; border-radius:50%; color:#15803d; display:flex; align-items:center; justify-content:center; width:24px; height:24px; font-size:0.8rem;">✓</div>
                    <div>
                        <div style="font-weight:700; color:var(--primary-900); font-size:0.95rem; line-height:1.2;"><?php echo $content['dr_title']; ?></div>
                        <div style="font-size:0.75rem; color:var(--text-muted);"><?php echo $content['dr_desc']; ?></div>
                    </div>
                </div>
                <!-- Mme Qassimi -->
                <div style="display:flex; align-items:center; gap:0.8rem; border-top:1px solid #f1f5f9; padding-top:0.8rem; width:100%;">
                    <div style="background:#dcfce7; padding:0.25rem; border-radius:50%; color:#15803d; display:flex; align-items:center; justify-content:center; width:24px; height:24px; font-size:0.8rem;">✓</div>
                    <div>
                         <div style="font-weight:700; color:var(--primary-900); font-size:0.95rem; line-height:1.2;"><?php echo $content['mme_title']; ?></div>
                         <div style="font-size:0.75rem; color:var(--text-muted);"><?php echo $content['mme_desc']; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Introduction Section: Notre Mission -->
<section class="section-mission reveal <?php echo ($lang === 'ar') ? 'rtl' : ''; ?>" style="background: #fff;">
    <div class="container">
        <div class="hero-wrapper gap-lg" style="align-items:center;">
            <div style="flex:1;">
                <img src="assets/images/gallery/img_0854.webp?v=2" alt="Centre Medical" class="img-chapter" style="box-shadow: 0 20px 40px rgba(0,0,0,0.1);" width="600" height="400" loading="lazy">
            </div>
            <div style="flex:1;">
                <div class="section-title" style="text-align:<?php echo ($lang==='ar')?'right':'left'; ?>; margin-bottom:1.5rem;">
                    <span><?php echo $content['mission_sub']; ?></span>
                    <h2 style="font-size:2.5rem; line-height:1.2;"><?php echo $content['mission_h2']; ?></h2>
                </div>
                <p class="lead" style="margin-bottom:1.5rem; color:var(--primary-700); font-weight:500;">
                    <?php echo $content['mission_p1']; ?>
                </p>
                <p style="color:var(--text-muted); line-height:1.8; margin-bottom:2rem;">
                    <?php echo $content['mission_p2']; ?>
                </p>
                <a href="#services" class="btn btn-outline"><?php echo $content['cta_discover']; ?></a>
            </div>
        </div>
    </div>
</section>

<!-- Plateau Technique -->
<section class="section-tech reveal <?php echo ($lang === 'ar') ? 'rtl' : ''; ?>" style="background: var(--primary-50);">
    <div class="container">
        <div class="hero-wrapper gap-lg" style="align-items:center; flex-direction:<?php echo ($lang==='ar')?'row':'row-reverse'; ?>;">
            <div style="flex:1;">
                <img src="assets/images/plateau-new.jpg?v=2" alt="Plateau Technique" class="img-chapter" style="box-shadow: 0 20px 40px rgba(0,0,0,0.1);" width="600" height="400" loading="lazy">
            </div>
            <div style="flex:1;">
                <div class="section-title" style="text-align:<?php echo ($lang==='ar')?'right':'left'; ?>; margin-bottom:1.5rem;">
                    <span><?php echo $content['tech_sub']; ?></span>
                    <h2 style="font-size:2.5rem; line-height:1.2;"><?php echo $content['tech_h2']; ?></h2>
                </div>
                <p style="color:var(--text-muted); line-height:1.8; margin-bottom:1.5rem;">
                    <?php echo $content['tech_intro']; ?>
                </p>
                <ul class="feature-list" style="<?php echo ($lang==='ar')?'padding-right:0;':''; ?>">
                    <?php foreach ($content['tech_list'] as $item): ?>
                    <li><span style="font-size:1.2rem; color:var(--accent-600);">✓</span> <?php echo $item; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="section-team <?php echo ($lang === 'ar') ? 'rtl' : ''; ?>">
    <div class="container">
        <div class="section-title">
            <span><?php echo $content['team_sub']; ?></span>
            <h2><?php echo $content['team_h2']; ?></h2>
        </div>
        <div class="grid-2">
            <!-- Dr Fares -->
            <div class="card reveal" style="text-align:center;">
                <div style="width:120px; height:120px; margin:0 auto 1.5rem; border-radius:50%; overflow:hidden; background:#f0f9ff;">
                     <img src="assets/images/dr-amine-fares.jpg?v=2" class="img-chapter" style="width:100%; height:100%; object-fit:cover;" alt="Dr. Amine Fares" width="300" height="300" loading="lazy">
                </div>
                <h3><?php echo $content['dr_title']; ?></h3>
                <p style="color:var(--accent-600); font-weight:600; font-size:0.9rem; margin-bottom:1rem;"><?php echo $content['dr_desc']; ?></p>
                <p style="font-size:0.9rem; color:var(--text-muted);"><?php echo $content['dr_bio']; ?></p>
            </div>
            <!-- Mme Qassimi -->
            <div class="card reveal" style="text-align:center; transition-delay: 0.2s;">
                 <div style="width:120px; height:120px; margin:0 auto 1.5rem; border-radius:50%; overflow:hidden; background:#f0f9ff;">
                     <img src="assets/images/coach.webp?v=2" class="img-chapter" style="width:100%; height:100%; object-fit:cover;" alt="Mme Qassimi Amina" width="300" height="300" loading="lazy">
                </div>
                <h3><?php echo $content['mme_title']; ?></h3>
                <p style="color:var(--accent-600); font-weight:600; font-size:0.9rem; margin-bottom:1rem;"><?php echo $content['mme_desc']; ?></p>
                <p style="font-size:0.9rem; color:var(--text-muted);"><?php echo $content['mme_bio']; ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Services Expanded -->
<section id="services" class="section-services reveal <?php echo ($lang === 'ar') ? 'rtl' : ''; ?>" style="background:var(--primary-50);">
    <div class="container">
        <div class="section-title">
            <span><?php echo $content['services_sub']; ?></span>
            <h2><?php echo $content['services_h2']; ?></h2>
        </div>
        
        <!-- Service 1: Kinésithérapie -->
        <div style="background:white; border-radius:var(--radius-lg); padding:2rem; margin-bottom:3rem; box-shadow:var(--shadow-md);">
            <div class="hero-wrapper" style="gap:2rem;">
                <div style="flex:1;">
                    <h3 style="font-size:1.8rem; margin-bottom:1rem; color:var(--primary-900);"><?php echo $content['s1_title']; ?></h3>
                    <p style="margin-bottom:1rem; color:var(--text-muted);"><?php echo $content['s1_desc']; ?></p>
                </div>
                <div style="flex:1; max-width:500px;">
                     <img src="assets/images/kinesitherapie-real.jpg" style="width:100%; border-radius:var(--radius-md); object-fit:cover; height:250px;" alt="Service 1" width="500" height="250" loading="lazy">
                </div>
            </div>
        </div>

        <!-- Service 2: Balnéothérapie -->
        <div style="background:white; border-radius:var(--radius-lg); padding:2rem; margin-bottom:3rem; box-shadow:var(--shadow-md);">
             <div class="hero-wrapper" style="gap:2rem; flex-direction:<?php echo ($lang==='ar')?'row':'row-reverse'; ?>;">
                <div style="flex:1;">
                    <h3 style="font-size:1.8rem; margin-bottom:1rem; color:var(--primary-900);"><?php echo $content['s2_title']; ?></h3>
                    <p style="margin-bottom:1rem; color:var(--text-muted);"><?php echo $content['s2_desc']; ?></p>
                </div>
                <div style="flex:1; max-width:500px;">
                     <img src="assets/images/plateau-new.jpg?v=2" style="width:100%; border-radius:var(--radius-md); object-fit:cover; height:250px;" alt="Service 2" width="500" height="250" loading="lazy">
                </div>
            </div>
        </div>

        <!-- Service 3: Neuro-Rééducation -->
        <div style="background:white; border-radius:var(--radius-lg); padding:2rem; margin-bottom:3rem; box-shadow:var(--shadow-md);">
            <div class="hero-wrapper" style="gap:2rem;">
                <div style="flex:1;">
                    <h3 style="font-size:1.8rem; margin-bottom:1rem; color:var(--primary-900);"><?php echo $content['s3_title']; ?></h3>
                    <p style="margin-bottom:1rem; color:var(--text-muted);"><?php echo $content['s3_desc']; ?></p>
                </div>
                <div style="flex:1; max-width:500px;">
                     <img src="assets/images/neuro-real.jpg" style="width:100%; border-radius:var(--radius-md); object-fit:cover; height:250px;" alt="Service 3" width="500" height="250" loading="lazy">
                </div>
            </div>
        </div>

        <!-- Grid for others -->
        <div class="grid-3">
            <div class="card">
                <div class="card-icon">⚡</div>
                <h3><?php echo $content['card_recovery']; ?></h3>
                <p style="color:var(--text-muted); margin-top:0.5rem;"><?php echo $content['card_recovery_desc']; ?></p>
            </div>
            <div class="card">
                <div class="card-icon">👐</div>
                <h3><?php echo $content['card_osteo']; ?></h3>
                <p style="color:var(--text-muted); margin-top:0.5rem;"><?php echo $content['card_osteo_desc']; ?></p>
            </div>
            <div class="card">
                <div class="card-icon">🏺</div>
                <h3><?php echo $content['card_hijama']; ?></h3>
                <p style="color:var(--text-muted); margin-top:0.5rem;"><?php echo $content['card_hijama_desc']; ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-5 <?php echo ($lang === 'ar') ? 'rtl' : ''; ?>" style="background:#f8fafc;">
    <div class="container">
        <div class="hero-wrapper" style="gap:4rem;">
            <div>
                 <img src="assets/images/gallery/img_9907.webp" class="img-chapter" alt="Salle d'attente" width="600" height="400" loading="lazy">
            </div>
            <div>
                <div class="section-title" style="text-align:<?php echo ($lang==='ar')?'right':'left'; ?>;">
                    <span><?php echo $content['why_sub']; ?></span>
                    <h2><?php echo $content['why_h2']; ?></h2>
                </div>
                <ul style="display:grid; gap:1rem; margin-top:1rem; <?php echo ($lang==='ar')?'padding-right:0':''; ?>">
                    <?php foreach ($content['why_list'] as $item): ?>
                    <li style="display:flex; align-items:center; gap:0.5rem; font-weight:500;">
                        <span style="color:#16a34a;">✓</span> <?php echo $item; ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Reviews Section -->
<section id="reviews" class="py-5 <?php echo ($lang === 'ar') ? 'rtl' : ''; ?>" style="background:#fff;">
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
            <h2><?php echo $content['reviews_trust']; ?></h2>
        </div>

        <div class="grid-3" style="margin-bottom:2rem;">
            <!-- Review 1 -->
            <div class="review-card">
                <div class="review-header" style="<?php echo ($lang==='ar')?'flex-direction:row-reverse; text-align:right':''; ?>">
                    <div class="reviewer-avatar">A</div>
                    <div class="reviewer-info">
                        <h3>Abdelaali Sabah</h3>
                        <div class="review-meta">Il y a un an</div>
                    </div>

                </div>
                <div class="stars">★★★★★</div>
                <p style="color:var(--text-muted); font-size:0.95rem; line-height:1.6;">"<?php echo $content['rev1_text']; ?>"</p>
                <div style="margin-top:auto; padding-top:1rem;">
                    <span style="font-size:0.8rem; background:#f1f5f9; padding:0.2rem 0.5rem; border-radius:4px; color:#475569;">Consultation</span>
                </div>
            </div>

            <!-- Review 2 -->
            <div class="review-card">
                <div class="review-header" style="<?php echo ($lang==='ar')?'flex-direction:row-reverse; text-align:right':''; ?>">
                    <div class="reviewer-avatar" style="background:#e0f2fe; color:#0284c7;">H</div>
                    <div class="reviewer-info">
                        <h3>Hicham El Amrani</h3>
                        <div class="review-meta">Il y a 2 mois</div>
                    </div>
                </div>
                <div class="stars">★★★★★</div>
                <p style="color:var(--text-muted); font-size:0.95rem; line-height:1.6;">"<?php echo $content['rev2_text']; ?>"</p>
                 <div style="margin-top:auto; padding-top:1rem;">
                    <span style="font-size:0.8rem; background:#f1f5f9; padding:0.2rem 0.5rem; border-radius:4px; color:#475569;">Kinésithérapie</span>
                </div>
            </div>

            <!-- Review 3 -->
            <div class="review-card">
                <div class="review-header" style="<?php echo ($lang==='ar')?'flex-direction:row-reverse; text-align:right':''; ?>">
                    <div class="reviewer-avatar" style="background:#dcfce7; color:#16a34a;">S</div>
                    <div class="reviewer-info">
                        <h3>Sarah Benali</h3>
                        <div class="review-meta">Il y a 6 mois</div>
                    </div>
                </div>
                <div class="stars">★★★★★</div>
                <p style="color:var(--text-muted); font-size:0.95rem; line-height:1.6;">"<?php echo $content['rev3_text']; ?>"</p>
                 <div style="margin-top:auto; padding-top:1rem;">
                    <span style="font-size:0.8rem; background:#f1f5f9; padding:0.2rem 0.5rem; border-radius:4px; color:#475569;">Médecine du Sport</span>
                </div>
            </div>
        </div>

        <div style="text-align:center;">
             <a href="https://www.google.com/search?sca_esv=2b20dab580b1b2c9&q=avis+sur+fares+m%C3%A9dical+et+kin%C3%A9sith%C3%A9rapie+center+-+marrakech&uds=ALYpb_leiSiwJJwS1ngbeyUv3AZmql0LJLSPXPX4C6IbGEfd7qbHuYaMZRMylWmj9mxw7PfnEH2pOefT3y1G-oTDBkgdNehFAZNsDNWKMsiCHrF2XJ13QJyZYvwk1X4R8J1LX3bIOl8z_CbTS9Ao77k3csitkkeXT6KG2bAkt2AXn4MDf3QasvzWszIPTKlh0ttw8tSaU5oSiXU9Ipj3iR7fFy3XM39E0FOdXpdrVJAbIOMnGP0MU6rwpzWx_aw-Ifv8uXFQ_Hbsz6uLClzUC3dGp56Jf2KGsZX824ckN8aKkKTdl1MLMo1WiKSBU7zYLXIECG5GvY2FX0BzXv160KvVI5rIxFnvupTMx-ouu7Aq4Pcx4ylf8iMxiZCw_Lk2GMelUcXp_JHoqX0Wr1d2r7mvUB_wjsRMZbpE9lwWbSkRZPrGv9geeIoAD-MMQrnJiWB6VxyOqC-VlCZ_B5XDgu1b2IUs0m9bdvdyVE_vpPpCxeEht5OQqXS-sDYm8_2AC2CBMTfAZ9f8UDvFnaJBUxRtofCkczNGxQ&si=AL3DRZEsmMGCryMMFSHJ3StBhOdZ2-6yYkXd_doETEE1OR-qOfFad9d7OYJRrV2D8YiNs3JYIO4j2byMuEs39Gaj54DI5sDDBSwcAKOYg20IRNn_7nECv6nloWxK2pA4W7AjkQLstrO27OHnVL0Pjqwt3jAViKFTnFv9wzLlQioCeSOWNEyXF-iCke1BCFFDIEKRaL2Jd5M2&sa=X&ved=2ahUKEwiH5u3Z4YSSAxVf_rsIHQ_-GC4Qk8gLegQIFxAB&ictx=1&stq=1&cs=1&lei=u0JkacecBt_87_UPj_zj8AI#ebo=1" target="_blank" class="btn btn-outline" style="border:1px solid #d1d5db; color:var(--primary-900);">
                <?php echo $content['reviews_more']; ?>
            </a>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5 <?php echo ($lang === 'ar') ? 'rtl' : ''; ?>">
    <div class="container">
        <div class="section-title">
            <span><?php echo $content['faq_sub']; ?></span>
            <h2><?php echo $content['faq_title']; ?></h2>
        </div>
        <div style="max-width:800px; margin:0 auto; display:grid; gap:1rem;">
             <details style="padding:1rem; background:white; border-radius:var(--radius-md); box-shadow:var(--shadow-sm); cursor:pointer;">
                <summary style="font-weight:600; color:var(--primary-900);"><?php echo $content['faq_q1']; ?></summary>
                <p style="margin-top:0.5rem; color:var(--text-muted);"><?php echo $content['faq_a1']; ?></p>
            </details>
             <details style="padding:1rem; background:white; border-radius:var(--radius-md); box-shadow:var(--shadow-sm); cursor:pointer;">
                <summary style="font-weight:600; color:var(--primary-900);"><?php echo $content['faq_q2']; ?></summary>
                <p style="margin-top:0.5rem; color:var(--text-muted);"><?php echo $content['faq_a2']; ?></p>
            </details>
             <details style="padding:1rem; background:white; border-radius:var(--radius-md); box-shadow:var(--shadow-sm); cursor:pointer;">
                <summary style="font-weight:600; color:var(--primary-900);"><?php echo $content['faq_q3']; ?></summary>
                <p style="margin-top:0.5rem; color:var(--text-muted);"><?php echo $content['faq_a3']; ?></p>
            </details>
             <details style="padding:1rem; background:white; border-radius:var(--radius-md); box-shadow:var(--shadow-sm); cursor:pointer;">
                <summary style="font-weight:600; color:var(--primary-900);"><?php echo $content['faq_q4']; ?></summary>
                <p style="margin-top:0.5rem; color:var(--text-muted);"><?php echo $content['faq_a4']; ?></p>
            </details>
        </div>
    </div>
</section>

<!-- Gallery Section (Swiper) -->
<section id="gallery" class="<?php echo ($lang === 'ar') ? 'rtl' : ''; ?>" style="background:white; padding: 5rem 0; overflow:hidden;">
    <div class="container">
        <div class="section-title">
            <span><?php echo $content['gallery_sub']; ?></span>
            <h2><?php echo $content['gallery_h2']; ?></h2>
        </div>
        
        <!-- Swiper -->
        <div class="swiper mySwiper" style="width:100%; height:500px; border-radius:var(--radius-lg);">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="assets/images/hero.jpg?v=2" style="width:100%; height:100%; object-fit:cover;" loading="lazy" alt="Accueil du Centre Médical Fares" width="800" height="500"></div>
                <div class="swiper-slide"><img src="assets/images/plateau-new.jpg?v=2" style="width:100%; height:100%; object-fit:cover;" loading="lazy" alt="Plateau technique de rééducation" width="800" height="500"></div>
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
<section id="location" style="height:400px; width:100%;">
    <?php 
    // Dynamic language for Google Maps embed (fr or ar)
    $map_lang = ($lang === 'ar') ? 'ar' : 'fr';
    // Use the coordinates: 31.6679513,-8.0272461
    // We update the hl (language) parameter and ensure the embed URL is robust
    $map_src = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3395.733596547614!2d-8.029434784846435!3d31.66795128132103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafed670ed5d3af%3A0xd5ae7233fa42230b!2sNo%20205%2C%20LOT%20izidihar%2C%20Marrakech%2040100!5e0!3m2!1s" . $map_lang . "!2sma!4v1622549495484!5m2!1s" . $map_lang . "!2sma";
    ?>
    <iframe 
        title="Google Map location of Fares Medical Center"
        src="<?php echo $map_src; ?>" 
        width="100%" 
        height="100%" 
        style="border:0;" 
        allowfullscreen="" 
        referrerpolicy="no-referrer-when-downgrade"
        loading="lazy">
    </iframe>
</section>
</main>

<?php include 'includes/footer.php'; ?>
