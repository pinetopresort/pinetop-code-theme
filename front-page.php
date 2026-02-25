<?php get_header(); ?>
<section class="hero">
  <video autoplay muted loop playsinline poster="https://pinetopresort.com/wp-content/uploads/2025/10/IMG_5146-scaled.jpg">
    <source src="https://pinetopresort.com/wp-content/uploads/2026/02/pinetop-front.mp4" type="video/mp4">
    <source src="https://pinetopresort.com/wp-content/uploads/2026/02/1.mp4" type="video/mp4">
  </video>
  <div class="container hero-inner reveal in">
    <span class="kicker">Welcome To Pinetop Resort</span>
    <h1>A Place Of Peace, A Piece Of Paradise</h1>
    <p>Escape from routine and enjoy a calm lake-facing retreat with premium rooms, mountain air, and thoughtfully prepared hospitality.</p>
    <div class="chips"><span class="chip">Lake-facing rooms</span><span class="chip">Family and group friendly</span><span class="chip">Private whole-house bookings</span></div>
    <form class="booking-bar" action="https://wa.me/923004452015" method="get" target="_blank">
      <label>Check-in<input type="date" required></label>
      <label>Check-out<input type="date" required></label>
      <label>Guests<input type="number" min="1" value="2" required></label>
      <button class="btn btn-gold" style="border:none">Check Availability</button>
      <label class="booking-consent"><input type="checkbox" required><span>I agree to the <a href="<?php echo esc_url(home_url('/terms-and-conditions')); ?>" target="_blank">Terms and Conditions</a> and <a href="<?php echo esc_url(home_url('/privacy-policy')); ?>" target="_blank">Privacy Policy</a>.</span></label>
    </form>
  </div>
</section>

<section class="section reveal" id="rooms">
  <div class="container">
    <h2>All Rooms</h2><p class="muted">Executive, Deluxe, Standard, and full-resort private booking options.</p>
    <div class="grid-2">
      <?php foreach (pinetop_rooms_data() as $r) : ?>
      <article class="card<?php echo stripos($r[0], 'Whole Resort') !== false ? ' card-wide' : ''; ?>"><img src="<?php echo esc_url($r[3]); ?>" alt="<?php echo esc_attr($r[0]); ?>"><div class="card-body"><h3><?php echo esc_html($r[0]); ?></h3><p class="muted"><?php echo esc_html($r[1]); ?></p><p class="price"><?php echo esc_html($r[2]); ?></p></div></article>
      <?php endforeach; ?>
    </div>
    <p style="margin-top:20px;"><a class="btn btn-primary" href="<?php echo esc_url(home_url('/rooms')); ?>">View Rooms</a></p>
  </div>
</section>

<section class="section reveal band" id="activities">
  <div class="container grid-2">
    <div>
      <h2>Activities</h2>
      <p class="muted">Water rides, adventure, evening experiences, and free family activities at PineTop Resort.</p>
      <p style="margin-top:20px;"><a class="btn btn-primary" href="<?php echo esc_url(home_url('/activities')); ?>">Explore Activities</a></p>
    </div>
    <div class="media-card">
      <video autoplay muted loop playsinline poster="https://pinetopresort.com/wp-content/uploads/2026/02/IMG_5146-scaled.jpg">
        <source src="https://pinetopresort.com/wp-content/uploads/2026/02/1.mp4" type="video/mp4">
      </video>
    </div>
  </div>
</section>

<section class="section reveal" id="dining">
  <div class="container grid-2">
    <div>
      <h2>Dining</h2>
      <p class="muted">Fresh and local comfort food prepared with care. Breakfast, main course, drinks, and bonfire menu options available.</p>
      <p style="margin-top:20px;"><a class="btn btn-primary" href="<?php echo esc_url(home_url('/dining')); ?>">View Full Menu</a></p>
    </div>
    <article class="card">
      <div class="card-body">
        <h3>Popular Items</h3>
        <p class="muted">French Toast (2 pcs) — Rs 400</p>
        <p class="muted">Chicken Karahi (Half) — Rs 1,600</p>
        <p class="muted">Chicken Biryani — Rs 1,100</p>
        <p class="muted">Fresh Lime — Rs 200</p>
      </div>
    </article>
  </div>
</section>

<section class="section reveal band" id="reservation">
  <div class="container">
    <h2>Reservation</h2>
    <p class="muted">Share your dates and room preference and our team will confirm availability quickly.</p>
    <div class="cta-row">
      <a class="btn btn-primary" href="<?php echo esc_url(home_url('/reservation')); ?>">Start Reservation</a>
      <a class="btn btn-primary" href="https://wa.me/923004452015?text=Hi%20PineTop%20Resort%2C%20I%20want%20to%20reserve%20a%20room." target="_blank" rel="noopener">Reserve via WhatsApp</a>
    </div>
  </div>
</section>

<section class="section reveal" id="location">
  <div class="container grid-2">
    <div>
      <h2>Location & Contact</h2>
      <p class="muted">Find PineTop Resort on Google Maps and contact us directly for bookings and events.</p>
      <p><strong>WhatsApp:</strong> +92 300 445 2015</p>
      <p><strong>Email:</strong> info@pinetopresort.com</p>
      <div class="cta-row">
        <a class="btn btn-primary" href="<?php echo esc_url(home_url('/contact')); ?>">Contact Us</a>
        <a class="btn btn-primary" href="https://maps.google.com/maps?q=0x38dfbbebe486d149:0x331d9ed18f573661&z=15&output=embed" target="_blank" rel="noopener">Get Directions</a>
      </div>
    </div>
    <div class="map-wrap">
      <iframe title="PineTop Map" src="https://maps.google.com/maps?q=0x38dfbbebe486d149:0x331d9ed18f573661&z=15&output=embed" loading="lazy"></iframe>
    </div>
  </div>
</section>
<?php get_footer(); ?>
