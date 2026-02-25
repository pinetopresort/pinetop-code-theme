<?php get_header(); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<section class="page-hero"><img src="https://pinetopresort.com/wp-content/uploads/2026/02/IMG_7100.jpg" alt="Rooms"><div class="container page-hero-inner"><h1>Book Your Stay at Pinetop Resort</h1></div></section>

<div class="section" style="padding-top:20px;">
  <div class="container">
    <h2>Select Room(s)</h2>
    <div class="grid-2" style="gap:30px;">

      <div class="card"><div class="swiper"><div class="swiper-wrapper"><div class="swiper-slide"><img src="https://pinetopresort.com/wp-content/uploads/2025/05/IMG_3677-scaled.jpg"></div><div class="swiper-slide"><img src="https://pinetopresort.com/wp-content/uploads/2025/05/IMG_3670-scaled.jpg"></div><div class="swiper-slide"><img src="https://pinetopresort.com/wp-content/uploads/2025/05/IMG_3671-scaled.jpg"></div><div class="swiper-slide"><img src="https://pinetopresort.com/wp-content/uploads/2025/05/IMG_3672-scaled.jpg"></div><div class="swiper-slide"><img src="https://pinetopresort.com/wp-content/uploads/2025/05/IMG_3673-scaled.jpg"></div><div class="swiper-slide"><img src="https://pinetopresort.com/wp-content/uploads/2025/05/IMG_3674-scaled.jpg"></div></div></div><div class="card-body"><h3>Standard Room</h3><p class="muted">Max 4 Guests (including children) | 1 Double Bed</p><p class="price">Rs. 10,000 / Night</p><label><input type="checkbox" class="room-checkbox" data-price="10000" value="Standard Room - Rs.10,000"> Select</label></div></div>

      <div class="card"><div class="swiper"><div class="swiper-wrapper"><div class="swiper-slide"><img src="https://pinetopresort.com/wp-content/uploads/2025/05/Pinetop_2267-scaled.jpg"></div><div class="swiper-slide"><img src="https://pinetopresort.com/wp-content/uploads/2025/05/Pinetop_2262-scaled.jpg"></div><div class="swiper-slide"><img src="https://pinetopresort.com/wp-content/uploads/2025/05/Pinetop_2264-scaled.jpg"></div><div class="swiper-slide"><img src="https://pinetopresort.com/wp-content/uploads/2025/05/Pinetop_2265-scaled.jpg"></div></div></div><div class="card-body"><h3>Deluxe Lake View with Terrace</h3><p class="muted">Max 4 Guests | Lake View Terrace</p><p class="price">Rs. 12,000 / Night</p><label><input type="checkbox" class="room-checkbox" data-price="12000" value="Deluxe Lake View with Terrace - Rs.12,000"> Select</label></div></div>

      <div class="card"><div class="swiper"><div class="swiper-wrapper"><div class="swiper-slide"><img src="https://pinetopresort.com/wp-content/uploads/2025/05/Pinetop_0695-scaled.jpg"></div><div class="swiper-slide"><img src="https://pinetopresort.com/wp-content/uploads/2025/05/Pinetop_0691-scaled.jpg"></div><div class="swiper-slide"><img src="https://pinetopresort.com/wp-content/uploads/2025/05/Pinetop_0689-scaled.jpg"></div><div class="swiper-slide"><img src="https://pinetopresort.com/wp-content/uploads/2025/05/Pinetop_6097-scaled.jpg"></div></div></div><div class="card-body"><h3>Executive Lake View with Balcony</h3><p class="muted">Max 4 Guests | Private Balcony</p><p class="price">Rs. 14,000 / Night</p><label><input type="checkbox" class="room-checkbox" data-price="14000" value="Executive Lake View with Balcony - Rs.14,000"> Select</label></div></div>

      <div class="card"><div class="swiper"><div class="swiper-wrapper"><div class="swiper-slide"><img src="https://pinetopresort.com/wp-content/uploads/2025/05/IMG_3223-scaled.jpg"></div><div class="swiper-slide"><img src="https://pinetopresort.com/wp-content/uploads/2025/05/IMG_3218-scaled.jpg"></div><div class="swiper-slide"><img src="https://pinetopresort.com/wp-content/uploads/2025/05/IMG_3221-scaled.jpg"></div><div class="swiper-slide"><img src="https://pinetopresort.com/wp-content/uploads/2025/05/IMG_3222-scaled.jpg"></div><div class="swiper-slide"><img src="https://pinetopresort.com/wp-content/uploads/2025/05/IMG_3224-scaled.jpg"></div></div></div><div class="card-body"><h3>Deluxe Lake View</h3><p class="muted">Max 4 Guests | Lake Facing</p><p class="price">Rs. 12,000 / Night</p><label><input type="checkbox" class="room-checkbox" data-price="12000" value="Deluxe Lake View - Rs.12,000"> Select</label></div></div>

      <div class="card" style="grid-column:1/-1;"><div class="swiper"><div class="swiper-wrapper"><div class="swiper-slide"><img src="https://pinetopresort.com/wp-content/uploads/2026/02/IMG_7100.jpg"></div></div></div><div class="card-body"><h3>A Place of Peace, A Piece of Paradise</h3><p class="muted">Max 18 Guests | Whole House Booking – All 4 Rooms</p><p class="price">Rs. 50,000 / Night</p><label><input type="checkbox" id="wholeHouse" data-price="50000" value="Whole House Booking - Rs.50,000 per night"> Select Whole Resort</label></div></div>
    </div>

    <div class="card" style="margin-top:30px;">
      <div class="card-body">
        <h3>Booking Details</h3>
        <div class="grid-2">
          <input type="text" id="fullname" placeholder="Full Name" required>
          <input type="text" id="cnic" placeholder="CNIC Number" required>
          <input type="text" id="car" placeholder="Car Registration Number" required>
          <input type="number" id="guests" placeholder="Total Guests" required>
          <input type="text" id="contact" placeholder="Contact Number" required>
          <input type="text" id="checkin" placeholder="Check-in Date" required>
          <input type="text" id="checkout" placeholder="Check-out Date" required>
        </div>
        <div id="totalBox" style="margin-top:10px;padding:12px;border-radius:12px;background:#d1e7dd;color:#0f5132;font-weight:700;">Total Price: Rs.0 | Advance (50%): Rs.0</div>
        <button onclick="sendBooking()" class="btn btn-primary" style="border:none;margin-top:12px;">Request Booking via WhatsApp</button>

        <div style="margin-top:16px;padding:18px;border-radius:12px;background:#eaf4ef;">
          <h3>Payment Policy</h3>
          <p>50% advance required to confirm booking.</p>
          <p><strong>Bank:</strong> Bank Alfalah<br><strong>Account Name:</strong> PINETOP RESORT<br><strong>Account Number:</strong> 56265001954966<br><strong>IBAN:</strong> PK66ALFH5626005001954966</p>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
new Swiper('.swiper',{loop:true,autoplay:{delay:2500}});
const checkinFP=flatpickr('#checkin',{altInput:true,altFormat:'d-m-Y',dateFormat:'Y-m-d',minDate:'today'});
const checkoutFP=flatpickr('#checkout',{altInput:true,altFormat:'d-m-Y',dateFormat:'Y-m-d',minDate:'today'});
const roomCheckboxes=document.querySelectorAll('.room-checkbox');
const wholeHouse=document.getElementById('wholeHouse');
const totalBox=document.getElementById('totalBox');
const fullnameEl=document.getElementById('fullname');
const cnicEl=document.getElementById('cnic');
const carEl=document.getElementById('car');
const guestsEl=document.getElementById('guests');
const contactEl=document.getElementById('contact');

wholeHouse.addEventListener('change',function(){if(this.checked) roomCheckboxes.forEach(cb=>cb.checked=false); updateTotal();});
roomCheckboxes.forEach(cb=>cb.addEventListener('change',function(){if(this.checked) wholeHouse.checked=false; updateTotal();}));
function updateTotal(){
  let total=0;
  if(wholeHouse.checked) total=parseInt(wholeHouse.dataset.price,10);
  else roomCheckboxes.forEach(cb=>{if(cb.checked) total+=parseInt(cb.dataset.price,10)});
  let advance=Math.ceil(total/2);
  totalBox.innerText=`Total Price: Rs.${total} | Advance (50%): Rs.${advance}`;
}
function sendBooking(){
  let selected=[];
  if(wholeHouse.checked) selected=['Whole House Booking - Rs.50,000 per night'];
  else roomCheckboxes.forEach(cb=>{if(cb.checked) selected.push(cb.value)});
  if(selected.length===0){alert('Please select at least one room.');return;}

  let total=0;
  if(wholeHouse.checked) total=50000;
  else roomCheckboxes.forEach(cb=>{if(cb.checked) total+=parseInt(cb.dataset.price,10)});
  let advance=Math.ceil(total/2);

  let msg=`🌲 PINETOP RESORT BOOKING REQUEST 🌲\n\nSelected Room(s):\n${selected.join('\n')}\n\nFull Name: ${fullnameEl.value}\nCNIC: ${cnicEl.value}\nCar Reg: ${carEl.value}\nGuests: ${guestsEl.value}\nContact: ${contactEl.value}\nCheck-in: ${checkinFP.input.value}\nCheck-out: ${checkoutFP.input.value}\n\nTotal Price: Rs.${total}\nAdvance (50%): Rs.${advance}\n\nKindly confirm availability.`;
  window.open('https://wa.me/923004452015?text='+encodeURIComponent(msg),'_blank');
}
</script>
<?php get_footer(); ?>
