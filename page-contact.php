<?php get_header(); ?>
<section class="section" style="padding-top:150px;">
  <div class="container grid-2">
    <article class="card">
      <div class="card-body">
        <span class="kicker">Contact</span>
        <h1 style="margin-top:12px;">Get In Touch</h1>
        <p class="muted" style="margin-top:10px;">For reservations, events, and custom stay plans, contact our team directly.</p>
        <p style="margin-top:14px;"><strong>WhatsApp:</strong> <a href="https://wa.me/923004452015" target="_blank" rel="noopener">+92 300 445 2015</a></p>
        <p><strong>Email:</strong> <a href="mailto:info@pinetopresort.com">info@pinetopresort.com</a></p>
        <div class="cta-row">
          <a class="btn btn-primary" href="https://wa.me/923004452015" target="_blank" rel="noopener">Chat on WhatsApp</a>
          <a class="btn btn-primary" href="<?php echo esc_url(home_url('/reservation')); ?>">Open Reservation Page</a>
        </div>
      </div>
    </article>
    <div class="map-wrap">
      <iframe title="PineTop Map" src="https://maps.google.com/maps?q=0x38dfbbebe486d149:0x331d9ed18f573661&z=15&output=embed" loading="lazy"></iframe>
    </div>
  </div>
</section>
<?php get_footer(); ?>
