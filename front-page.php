<?php get_header(); ?>
<main>
<!-- Hero -->
<section class="hero">
<div class="container hero-grid">
<div>
<div class="eyebrow">Turn up the good times</div>
<h1>MAKE EVERY<br>MOMENT<br>BRIGHTER.</h1>
<p>Meet Dawn Cold Drink — a bold, refreshing burst of flavour made for the moments worth celebrating.</p>
<a class="button" href="#flavours">EXPLORE PRODUCTS</a>
</div>
<div class="hero-art" aria-label="Dawn cold drink cans in an ice and citrus refreshment scene">
<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/dawn-citrus-poster.png'); ?>" alt="Dawn cold drink cans surrounded by lemons and ice">
</div>
</div>
</section>

<!-- Our Products -->
<section class="section" id="flavours">
<div class="container">
<div class="section-heading">
<div class="eyebrow">Our Products</div>
<h2>A FLAVOUR FOR EVERY MOOD.</h2>
<p>Big flavour, bright energy and a refreshing taste in every sip.</p>
</div>
<div class="flavours">
<article class="flavour-card">
<img class="product-image" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/dawn-black-red.png'); ?>" alt="Dawn Classic Cola cold drink can">
<h3>Classic Cola</h3>
<p class="muted">A timeless, bold cola-inspired taste.</p>
</article>
<article class="flavour-card">
<img class="product-image" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/dawn-splash-ad.png'); ?>" alt="Dawn Lemon Twist cold drink can">
<h3>Lemon Twist</h3>
<p class="muted">A zesty citrus-inspired refreshment.</p>
</article>
<article class="flavour-card">
<img class="product-image" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/dawn-chilled-refreshment.png'); ?>" alt="Dawn Orange Burst cold drink cans">
<h3>Orange Burst</h3>
<p class="muted">A bright, juicy orange-inspired flavour.</p>
</article>
</div>
</div>
</section>

<!-- About Us -->
<section class="section story" id="about">
<div class="container story-grid">
<div>
<div class="eyebrow">About Us</div>
<h2>GOOD TIMES<br>START HERE.</h2>
<p>Dawn is all about bringing a little more colour to everyday moments — from a quick break with friends to the celebrations you never want to end.</p>
<p>Our mission is simple: craft cold drinks that spark joy and energy. Our vision is a world where every moment feels a little brighter with Dawn.</p>
<p>Open a can, share a smile, and make the moment yours.</p>
</div>
<div class="story-stamp"><strong>SPARK<br>YOUR<br>DAY.</strong></div>
</div>
</section>

<!-- Why Dawn -->
<section class="section" id="why">
<div class="container">
<div class="section-heading">
<div class="eyebrow">Why Dawn</div>
<h2>WHAT MAKES US DIFFERENT.</h2>
<p>Four reasons people reach for Dawn when they want to turn up the good times.</p>
</div>
<div class="why-grid">
<article class="why-card">
<div class="why-icon" aria-hidden="true">☀</div>
<h3>Bold Flavour</h3>
<p class="muted">Vibrant taste profiles designed to stand out and refresh.</p>
</article>
<article class="why-card">
<div class="why-icon" aria-hidden="true">⚡</div>
<h3>Everyday Energy</h3>
<p class="muted">Made for the moments between work, play and celebration.</p>
</article>
<article class="why-card">
<div class="why-icon" aria-hidden="true">★</div>
<h3>Youthful Spirit</h3>
<p class="muted">Modern branding and packaging that feels current and fun.</p>
</article>
<article class="why-card">
<div class="why-icon" aria-hidden="true">♥</div>
<h3>Shareable Moments</h3>
<p class="muted">Built for friends, gatherings and the photos you want to keep.</p>
</article>
</div>
</div>
</section>

<!-- Gallery -->
<section class="section gallery-section" id="gallery">
<div class="container">
<div class="section-heading">
<div class="eyebrow">Gallery</div>
<h2>LIFE IN COLOUR.</h2>
<p>Product shots and lifestyle moments inspired by the Dawn vibe.</p>
</div>
<div class="gallery-grid">
<img class="gallery-item" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/dawn-refreshing-flavours.png'); ?>" alt="Dawn refreshing flavours with citrus and ice">
<img class="gallery-item" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/dawn-citrus-poster.png'); ?>" alt="Dawn cold drink cans on a blue background">
<img class="gallery-item" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/dawn-chilled-refreshment.png'); ?>" alt="Chilled Dawn cold drinks with citrus">
<img class="gallery-item" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/dawn-splash-ad.png'); ?>" alt="Dawn cold drink splashing with citrus">
<img class="gallery-item" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/dawn-black-red.png'); ?>" alt="Dawn cold drink can with red splash">
<img class="gallery-item" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/dawn-refreshing-flavours.png'); ?>" alt="Dawn classic and flavoured cans">
</div>
</div>
</section>

<!-- Contact Us -->
<section class="section contact-section" id="contact">
<div class="container">
<div class="section-heading">
<div class="eyebrow">Contact Us</div>
<h2>LET'S MAKE IT A DAWN MOMENT.</h2>
<p>Want to stock Dawn or collaborate with us? Send a message or reach out directly.</p>
</div>
<div class="contact-grid">
<div class="contact-details">
<p><strong>Email</strong><br><a href="mailto:contact@dawncolddrink.com">contact@dawncolddrink.com</a></p>
<p><strong>Phone</strong><br><a href="tel:+919689639764">+91 96896 39764</a></p>
<p><strong>Location</strong><br>Mumbai, India</p>
<p class="muted">Social: Instagram · Facebook · X</p>
</div>
<form class="contact-form" id="dawn-contact-form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
<input type="hidden" name="action" value="dawn_contact_form">
<?php wp_nonce_field('dawn_contact_nonce', 'dawn_contact_nonce'); ?>
<label>
<span>Name</span>
<input type="text" name="dawn_name" required placeholder="Your name" autocomplete="name">
</label>
<label>
<span>Email</span>
<input type="email" name="dawn_email" required placeholder="you@example.com" autocomplete="email">
</label>
<label>
<span>Message</span>
<textarea name="dawn_message" rows="5" required placeholder="How can we help?"></textarea>
</label>
<button type="submit" class="button">Send Message</button>
<p class="form-note muted">After proper configuration (SMTP / mail settings), this form will deliver messages to the brand email.</p>
</form>
</div>
</div>
</section>
</main>
<?php get_footer(); ?>
