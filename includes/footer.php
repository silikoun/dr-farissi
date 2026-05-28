
<?php
$lang = $lang ?? 'fr';
$dir = $dir ?? 'ltr';
// Translation Logic for Footer
$footer = [
    'desc' => "Centre médical pluridisciplinaire.",
    'links_title' => "Liens Rapides",
    'services' => "Services",
    'privacy' => "Politique de Confidentialité",
    'terms' => "Conditions Générales",
    'contact_title' => "Contact",
    'btn_map' => "📍 Itinéraire",
    'btn_wa' => "WhatsApp",
    'sticky_call' => "Appeler",
    'sticky_map' => "Itinéraire",
    'rights' => "Tous droits réservés."
];

if (isset($lang) && $lang === 'ar') {
    $footer = [
        'desc' => "مركز طبي متعدد التخصصات.",
        'links_title' => "روابط سريعة",
        'services' => "الخدمات",
        'privacy' => "سياسة الخصوصية",
        'terms' => "شروط الاستخدام",
        'contact_title' => "اتصل بنا",
        'btn_map' => "📍 الموقع",
        'btn_wa' => "واتساب",
        'sticky_call' => "إتصل دابا",
        'sticky_map' => "الموقع",
        'rights' => "جميع الحقوق محفوظة."
    ];
}

// WhatsApp Message Encoding (Can be customized per lang if needed)
$wa_phone = '212665010699';
$wa_message = "السلام عليكم، بغيت نسول على حصص الترويض الطبي والمواعيد اللي عندكم، شكراً.\n: Bonjour, j'aimerais avoir des informations sur les séances de kiné et la prise de rendez-vous. Merci";
$wa_encoded = urlencode($wa_message);
$wa_link = "https://api.whatsapp.com/send?phone={$wa_phone}&text={$wa_encoded}";
?>
<footer id="contact" style="background-color:#1e3a8a; color:white; margin-top:4rem;">
    <div class="container" style="padding-top:4rem; padding-bottom:4rem;">
        <div class="grid-3" style="gap:2rem;">
            <div>
                <h3 style="color:white; margin-bottom:1.5rem; font-size:1.25rem;">Fares Medical Center</h3>
                <p style="opacity:0.9; line-height:1.6;">No 205, LOT izidihar, Marrakech 40100.<br><?php echo $footer['desc']; ?></p>
            </div>
            <div>
                <h3 style="color:white; margin-bottom:1.5rem; font-size:1.25rem;"><?php echo $footer['links_title']; ?></h3>
                <ul style="list-style:none; padding:0; margin:0; <?php echo (isset($lang) && $lang==='ar')?'padding-right:0':''; ?>">
                    <li style="margin-bottom:0.8rem;"><a href="index.php#services" style="color:rgba(255,255,255,0.8); text-decoration:none;"><?php echo $footer['services']; ?></a></li>
                    <li style="margin-bottom:0.8rem;"><a href="privacy-policy.php" style="color:rgba(255,255,255,0.8); text-decoration:none;"><?php echo $footer['privacy']; ?></a></li>
                    <li><a href="terms-of-service.php" style="color:rgba(255,255,255,0.8); text-decoration:none;"><?php echo $footer['terms']; ?></a></li>
                </ul>
            </div>
            <div>
                <h3 style="color:white; margin-bottom:1.5rem; font-size:1.25rem;"><?php echo $footer['contact_title']; ?></h3>
                <p style="margin-bottom:0.5rem; opacity:0.9;">No 205, LOT izidihar, Marrakech 40100</p>
                <p class="my-2"><a href="tel:+212665010699" style="color:white; text-decoration:none; font-weight:500;" onclick="fbq('track', 'Contact'); gtag('event', 'contact'); return gtag_report_conversion('tel:+212665010699', 'AW-17847107352/Q8RwCJKJut4bEJj-lL5C');">📞 0665010699</a></p>
                <p class="my-2"><a href="mailto:faresmedicalcenter@gmail.com" style="color:white; text-decoration:none;" onclick="fbq('trackCustom', 'Click_Email'); gtag('event', 'contact');">📧 faresmedicalcenter@gmail.com</a></p>
                
                <div style="display:flex; flex-wrap:wrap; gap:0.5rem; margin-top:1.5rem;">
                    <a href="https://www.google.com/maps/dir//No+205,+LOT+izidihar,+Marrakech+40100" target="_blank" class="btn btn-outline" style="border-color:rgba(255,255,255,0.3); color:white; padding:0.5rem 1rem;" onclick="fbq('track', 'FindLocation'); gtag('event', 'view_item_list', {'item_list_name': 'Map Path'}); return gtag_report_conversion('https://www.google.com/maps/dir//No+205,+LOT+izidihar,+Marrakech+40100', 'AW-17847107352/6A8ACOOM7tobEJj-lL5C');">
                        <?php echo $footer['btn_map']; ?>
                    </a>
                    <a href="<?php echo $wa_link; ?>" target="_blank" class="btn btn-outline" style="background:#15803d; border-color:#15803d; color:white; padding:0.5rem 1rem; display:inline-flex; align-items:center; gap:0.5rem;" onclick="fbq('track', 'Lead'); gtag('event', 'generate_lead'); return gtag_report_conversion('<?php echo $wa_link; ?>', 'AW-17847107352/jAtNCPzerd4bEJj-lL5C');">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        <?php echo $footer['btn_wa']; ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="text-center" style="margin-top:3rem; font-size:0.9rem; border-top:1px solid rgba(255,255,255,0.1); padding-top:2rem; opacity:0.7;">
            FARES MEDICAL CENTER ©2026 <?php echo $footer['rights']; ?> <br>
            <span style="font-size:0.8rem;"><?php echo $footer['desc']; ?></span>
            <div style="margin-top:1rem;">
                <a href="?kw=kine" style="color:white; text-decoration:none; opacity:<?php echo ($lang!=='ar')?'1':'0.85'; ?>;">Français</a> 
                <span style="opacity:0.85;">|</span> 
                <a href="?kw=darija" style="color:white; text-decoration:none; opacity:<?php echo ($lang==='ar')?'1':'0.85'; ?>;">العربية (Darija)</a>
            </div>
        </div>
    </div>
</footer>

<!-- Sticky Mobile CTA -->
<div class="sticky-footer-cta" style="<?php echo (isset($lang) && $lang==='ar')?'flex-direction:row-reverse':''; ?>">
        <a href="tel:+212665010699" class="btn-call-sticky" onclick="fbq('track', 'Contact'); gtag('event', 'contact'); return gtag_report_conversion('tel:+212665010699', 'AW-17847107352/Q8RwCJKJut4bEJj-lL5C');">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.05 12.05 0 0 0 .57 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.05 12.05 0 0 0 2.81.57A2 2 0 0 1 22 16.92z"></path>
            </svg>
            <?php echo $footer['sticky_call']; ?>
        </a>
    <a href="https://www.google.com/maps/dir//No+205,+LOT+izidihar,+Marrakech+40100/@33.5773696,-7.651328,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0xdafed670ed5d3af:0xd5ae7233fa42230b!2m2!1d-8.0272461!2d31.6679513" target="_blank" class="btn btn-map-sticky" onclick="fbq('track', 'FindLocation'); gtag('event', 'view_item_list', {'item_list_name': 'Map Path'}); return gtag_report_conversion('https://www.google.com/maps/dir//No+205,+LOT+izidihar,+Marrakech+40100/@33.5773696,-7.651328,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0xdafed670ed5d3af:0xd5ae7233fa42230b!2m2!1d-8.0272461!2d31.6679513', 'AW-17847107352/6A8ACOOM7tobEJj-lL5C');">
        <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
        <span><?php echo $footer['sticky_map']; ?></span>
    </a>
</div>

<!-- Floating WhatsApp Button -->
<a href="<?php echo $wa_link; ?>" class="btn-whatsapp-pulse" target="_blank" title="Contactez-nous sur WhatsApp" aria-label="Contactez-nous sur WhatsApp" onclick="fbq('track', 'Lead'); gtag('event', 'generate_lead'); return gtag_report_conversion('<?php echo $wa_link; ?>', 'AW-17847107352/jAtNCPzerd4bEJj-lL5C');">
    <svg width="32" height="32" viewBox="0 0 24 24" fill="white" aria-hidden="true">
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
    </svg>
</a>

<!-- Back to Top Button -->
<a href="#top" id="back-to-top" title="Retour en haut" aria-label="Retour en haut">
    <span aria-hidden="true">↑</span>
</a>

<script>
    // Scroll Reveal Animation
    function reveal() {
        var reveals = document.querySelectorAll(".reveal");
        for (var i = 0; i < reveals.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = reveals[i].getBoundingClientRect().top;
            var elementVisible = 150;
            if (elementTop < windowHeight - elementVisible) {
                reveals[i].classList.add("active");
            }
        }
    }
    window.addEventListener("scroll", reveal);
    
    // Trigger once on load
    reveal();

    // Back to Top Logic
    var backToTop = document.getElementById("back-to-top");
    window.addEventListener("scroll", function() {
        if (window.scrollY > 300) {
            backToTop.classList.add("visible");
        } else {
            backToTop.classList.remove("visible");
        }
    });
</script>
</body>
</html>
