<?php get_header(); ?>
<section class="section" style="padding-top:150px;">
  <div class="container">
    <article class="card reveal in">
      <div class="card-body">
        <span class="kicker">Reservation Request</span>
        <h1 style="margin-top:14px;">Book Your Stay</h1>
        <p class="muted" style="margin-top:8px;">Send complete booking details directly on WhatsApp for confirmation.</p>

        <form id="pinetopReservationForm" class="grid-2" style="margin-top:18px;gap:14px;">
          <input id="resName" type="text" placeholder="Full Name" required>
          <input id="resContact" type="tel" placeholder="Contact Number" required>
          <input id="resCheckin" type="date" required>
          <input id="resCheckout" type="date" required>
          <input id="resGuests" type="number" min="1" value="2" placeholder="Guests" required>
          <select id="resRoom" required>
            <option value="">Select Room Type</option>
            <option>Executive Lake View with Balcony</option>
            <option>Deluxe Lake View with Terrace</option>
            <option>Deluxe Lake View</option>
            <option>Standard Room</option>
            <option>Whole Resort Booking</option>
          </select>
          <label class="booking-consent">
            <input id="resConsent" type="checkbox" required>
            <span>I agree to the <a href="<?php echo esc_url(home_url('/terms-and-conditions')); ?>" target="_blank">Terms and Conditions</a> and <a href="<?php echo esc_url(home_url('/privacy-policy')); ?>" target="_blank">Privacy Policy</a>.</span>
          </label>
          <button type="submit" class="btn btn-primary" style="border:none;grid-column:1 / -1;">Request Booking via WhatsApp</button>
        </form>
      </div>
    </article>
  </div>
</section>

<script>
(function(){
  var form = document.getElementById('pinetopReservationForm');
  if (!form) return;
  form.addEventListener('submit', function(e){
    e.preventDefault();
    var name = document.getElementById('resName').value.trim();
    var contact = document.getElementById('resContact').value.trim();
    var checkin = document.getElementById('resCheckin').value;
    var checkout = document.getElementById('resCheckout').value;
    var guests = document.getElementById('resGuests').value;
    var room = document.getElementById('resRoom').value;

    if (!name || !contact || !checkin || !checkout || !guests || !room) {
      alert('Please complete all required fields.');
      return;
    }

    var lines = [
      'Hi PineTop Resort,',
      'I want to request a reservation:',
      'Name: ' + name,
      'Contact: ' + contact,
      'Check-in: ' + checkin,
      'Check-out: ' + checkout,
      'Guests: ' + guests,
      'Room Type: ' + room,
      'Please confirm availability.'
    ];

    window.open('https://wa.me/923004452015?text=' + encodeURIComponent(lines.join('\n')), '_blank');
  });
})();
</script>
<?php get_footer(); ?>
