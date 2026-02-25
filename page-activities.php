<?php get_header(); ?>
<section class="section" style="padding-top:120px;">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&family=Outfit:wght@500;700;800&display=swap" rel="stylesheet">

  <div id="pta-page">
    <section class="pta-hero">
      <div class="pta-hero-overlay"></div>
      <div class="pta-hero-glow pta-g1"></div>
      <div class="pta-hero-glow pta-g2"></div>
      <div class="pta-hero-content">
        <h1>Pinetop Resort Activities</h1>
        <p>Adventure, water fun, and chill experiences at Khanpur Lake.</p>
        <a class="pta-hero-btn" href="https://wa.me/923004452015?text=Hi%20Pinetop%20Resort%2C%20I%20want%20details%20about%20activities." target="_blank" rel="noopener">Ask on WhatsApp</a>
      </div>
    </section>
    <section class="pta-toolbar"><div id="pta-filters" class="pta-filters"></div></section>
    <section id="pta-grid" class="pta-grid"></section>
  </div>
</section>

<div id="pta-modal" class="pta-modal" aria-hidden="true">
  <div class="pta-dialog">
    <button class="pta-close" id="pta-close" aria-label="Close">&times;</button>
    <img id="pta-modal-img" src="" alt="Activity photo">
    <div class="pta-dialog-body">
      <p id="pta-modal-cat" class="pta-cat"></p>
      <h3 id="pta-modal-name"></h3>
      <p id="pta-modal-price" class="pta-price"></p>
      <p id="pta-modal-note" class="pta-note"></p>
      <label for="pta-guest">Guest Name (optional)</label>
      <input id="pta-guest" type="text" placeholder="Enter guest name">
      <button id="pta-book" class="pta-book">Book This Activity on WhatsApp</button>
    </div>
  </div>
</div>

<style>
#pta-page,
#pta-page * {
  box-sizing: border-box;
}

#pta-page {
  --bg: #081426;
  --panel: #10213a;
  --text: #e9f1fd;
  --muted: #9cb1ca;
  --green: #13a98e;
  --green2: #24c5a8;
  --border: rgba(157, 183, 214, 0.26);
  --shadow: 0 20px 34px rgba(0, 0, 0, 0.32);
  max-width: 1220px;
  margin: 0 auto;
  border-radius: 24px;
  overflow: hidden;
  background: radial-gradient(900px 460px at 0% -20%, rgba(32, 194, 164, 0.2) 0%, transparent 58%), var(--bg);
  font-family: Manrope, sans-serif;
  color: var(--text);
}

.pta-hero {
  position: relative;
  min-height: 300px;
  display: grid;
  place-items: center;
  padding: 50px 18px;
  text-align: center;
  background: url('https://pinetopresort.com/wp-content/uploads/2025/05/Pinetop_1385-scaled.jpg') center/cover no-repeat;
  overflow: hidden;
  isolation: isolate;
}

.pta-hero-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(160deg, rgba(3, 12, 24, 0.88), rgba(3, 12, 24, 0.55));
  z-index: -2;
}

.pta-hero-glow {
  position: absolute;
  width: 320px;
  height: 320px;
  border-radius: 999px;
  filter: blur(40px);
  opacity: 0.35;
  z-index: -1;
  animation: ptaFloat 8s ease-in-out infinite;
}

.pta-g1 { background: #35d5b9; top: -100px; left: -60px; }
.pta-g2 { background: #4e9dff; right: -80px; bottom: -120px; animation-delay: 1.6s; }

.pta-hero-content h1 {
  margin: 0;
  color: #fff;
  font-family: Outfit, sans-serif;
  font-size: clamp(2rem, 4vw, 3.2rem);
}

.pta-hero-content p {
  margin: 10px auto 18px;
  color: #e5eef8;
  max-width: 760px;
  font-weight: 500;
}

.pta-hero-btn {
  display: inline-block;
  padding: 11px 16px;
  border-radius: 999px;
  color: #fff;
  font-weight: 800;
  background: linear-gradient(145deg, var(--green2), var(--green));
  box-shadow: 0 12px 24px rgba(6, 52, 33, 0.35);
}

.pta-toolbar {
  padding: 16px 12px 4px;
  background: linear-gradient(180deg, rgba(9, 22, 40, 0.95) 0%, rgba(8, 20, 36, 0.95) 100%);
}

.pta-filters {
  display: flex;
  gap: 8px;
  overflow-x: auto;
  padding: 4px 2px 10px;
}

.pta-chip {
  border: 0;
  cursor: pointer;
  padding: 10px 14px;
  border-radius: 999px;
  font-size: 13px;
  font-weight: 800;
  white-space: nowrap;
  color: #d7e6f8;
  background: rgba(12, 30, 51, 0.88);
}

.pta-chip.active {
  color: #04211e;
  background: linear-gradient(145deg, var(--green), var(--green2));
}

.pta-grid {
  padding: 10px 12px 24px;
  display: grid;
  gap: 14px;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
}

.pta-card {
  border-radius: 18px;
  overflow: hidden;
  background: var(--panel);
  border: 1px solid var(--border);
  box-shadow: var(--shadow);
}

.pta-media {
  position: relative;
  height: 160px;
  overflow: hidden;
  background: #0f2540;
}

.pta-media img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.pta-price-tag {
  position: absolute;
  right: 10px;
  top: 10px;
  padding: 6px 10px;
  border-radius: 999px;
  font-size: 11px;
  font-weight: 800;
  background: rgba(4, 15, 27, 0.82);
  color: #fff;
}

.pta-content { padding: 12px; }
.pta-cat { margin: 0; color: #92a8c3; font-size: 12px; font-weight: 700; }
.pta-content h3 { margin: 5px 0 6px; font-size: 17px; }
.pta-note { margin: 0; color: var(--muted); font-size: 13px; }

.pta-open {
  margin-top: 10px;
  width: 100%;
  border: 1px solid var(--border);
  background: rgba(8, 20, 36, 0.8);
  color: #eaf3ff;
  border-radius: 10px;
  padding: 9px 10px;
  font-weight: 800;
  cursor: pointer;
}

.pta-modal {
  position: fixed;
  inset: 0;
  z-index: 10000;
  display: none;
  align-items: center;
  justify-content: center;
  padding: 12px;
  background: rgba(4, 11, 20, 0.72);
}

.pta-modal.open { display: flex; }

.pta-dialog {
  width: min(680px, 100%);
  max-height: 92vh;
  overflow: auto;
  background: #0f2037;
  border-radius: 18px;
  border: 1px solid var(--border);
}

.pta-dialog img {
  width: 100%;
  height: 260px;
  object-fit: cover;
}

.pta-dialog-body { padding: 14px; }
.pta-price { margin: 0 0 6px; color: #4ef4df; font-weight: 800; font-size: 17px; }

.pta-dialog input {
  width: 100%;
  border: 1px solid var(--border);
  border-radius: 10px;
  padding: 10px 11px;
  background: rgba(8, 20, 36, 0.84);
  color: #ecf4ff;
}

.pta-book {
  margin-top: 12px;
  width: 100%;
  border: 0;
  border-radius: 12px;
  padding: 11px 14px;
  font-size: 14px;
  font-weight: 800;
  color: #fff;
  background: linear-gradient(145deg, #1fb86f, #0f7d4a);
}

.pta-close {
  position: absolute;
  right: 8px;
  top: 8px;
  width: 34px;
  height: 34px;
  border: 0;
  border-radius: 10px;
  background: rgba(0, 0, 0, 0.45);
  color: #fff;
  font-size: 24px;
  cursor: pointer;
}

@keyframes ptaFloat {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-14px); }
}
</style>

<script>
(function(){var root=document.getElementById('pta-page');if(!root||root.dataset.init==='1')return;root.dataset.init='1';var WA='923004452015';var activities=[{id:1,name:'Family Boat Ride',category:'Water',price:'Rs 3,000',note:'Max 8 persons',img:'https://images.pexels.com/photos/240561/pexels-photo-240561.jpeg'},{id:2,name:'Jet Ski',category:'Water',price:'Rs 2,000',note:'Per ride',img:'https://images.pexels.com/photos/35569682/pexels-photo-35569682.jpeg'},{id:3,name:'Sofa Ride',category:'Water',price:'Rs 3,000',note:'Inflatable sofa water ride',img:'https://images.pexels.com/photos/29346172/pexels-photo-29346172.jpeg'},{id:4,name:'Flying Fish Ride',category:'Water',price:'Rs 3,000',note:'High-speed water fun',img:'https://images.pexels.com/photos/13315546/pexels-photo-13315546.jpeg'},{id:5,name:'Parasailing (Dry Landing)',category:'Water',price:'Rs 4,000',note:'Dry landing option',img:'https://images.pexels.com/photos/163341/parasailing-start-beach-coast-163341.jpeg'},{id:6,name:'Parasailing (Water Landing)',category:'Water',price:'Rs 5,000',note:'Water landing option',img:'https://images.pexels.com/photos/28259571/pexels-photo-28259571.jpeg'},{id:7,name:'Pellet Gun',category:'Adventure',price:'Rs 500',note:'10 shots included',img:'https://images.pexels.com/photos/5202431/pexels-photo-5202431.jpeg'},{id:8,name:'Kite Flying',category:'Free',price:'Free',note:'Free with stay',img:'https://images.pexels.com/photos/3942545/pexels-photo-3942545.jpeg'},{id:9,name:'Cricket',category:'Free',price:'Free',note:'Ground play activity',img:'https://images.pexels.com/photos/9420724/pexels-photo-9420724.jpeg'},{id:10,name:'Swing',category:'Free',price:'Free',note:'Relaxing outdoor swing',img:'https://images.pexels.com/photos/10809405/pexels-photo-10809405.jpeg'},{id:11,name:'Hammock Swing',category:'Free',price:'Free',note:'Lakeside relaxing hammock',img:'https://images.pexels.com/photos/5272998/pexels-photo-5272998.jpeg'},{id:12,name:'Bonfire',category:'Evening',price:'Rs 2,000',note:'Evening bonfire setup',img:'https://images.pexels.com/photos/752538/pexels-photo-752538.jpeg'},{id:13,name:'Open Theatre Movie Night',category:'Evening',price:'On Demand',note:'Available on demand',img:'https://images.pexels.com/photos/7991318/pexels-photo-7991318.jpeg'},{id:14,name:'Archery',category:'Adventure',price:'Rs 500',note:'Per session',img:'https://images.pexels.com/photos/6655608/pexels-photo-6655608.jpeg'}];
var filters=document.getElementById('pta-filters'),grid=document.getElementById('pta-grid'),modal=document.getElementById('pta-modal');var mImg=document.getElementById('pta-modal-img'),mCat=document.getElementById('pta-modal-cat'),mName=document.getElementById('pta-modal-name'),mPrice=document.getElementById('pta-modal-price'),mNote=document.getElementById('pta-modal-note'),mGuest=document.getElementById('pta-guest'),mBook=document.getElementById('pta-book'),mClose=document.getElementById('pta-close');var current='All',selected=null;
function renderFilters(){var cats=['All'];activities.forEach(function(a){if(cats.indexOf(a.category)===-1)cats.push(a.category)});filters.innerHTML=cats.map(function(c){return '<button class="pta-chip '+(c===current?'active':'')+'" data-cat="'+c+'">'+c+'</button>'}).join('')}
function renderCards(){var list=current==='All'?activities:activities.filter(function(a){return a.category===current});grid.innerHTML=list.map(function(a){return '<article class="pta-card" data-id="'+a.id+'"><div class="pta-media"><img src="'+a.img+'" alt="'+a.name+'"><span class="pta-price-tag">'+a.price+'</span></div><div class="pta-content"><p class="pta-cat">'+a.category+'</p><h3>'+a.name+'</h3><p class="pta-note">'+a.note+'</p><button class="pta-open" type="button">View Details</button></div></article>'}).join('')}
function openModal(a){selected=a;mImg.src=a.img;mCat.textContent=a.category;mName.textContent=a.name;mPrice.textContent=a.price;mNote.textContent=a.note||'';mGuest.value='';modal.classList.add('open')}
function closeModal(){modal.classList.remove('open')}
filters.addEventListener('click',function(e){var b=e.target.closest('.pta-chip');if(!b)return;current=b.getAttribute('data-cat')||'All';renderFilters();renderCards()});
grid.addEventListener('click',function(e){var c=e.target.closest('.pta-card');if(!c)return;var id=Number(c.getAttribute('data-id'));var a=activities.find(function(x){return x.id===id});if(a)openModal(a)});
mClose.addEventListener('click',closeModal);modal.addEventListener('click',function(e){if(e.target===modal)closeModal()});
mBook.addEventListener('click',function(){if(!selected)return;var guest=mGuest.value.trim();var lines=['Hi Pinetop Resort,','I want to book this activity:','Activity: '+selected.name,'Price: '+selected.price,selected.note?'Details: '+selected.note:'',guest?'Guest Name: '+guest:'','Please confirm availability.'].filter(Boolean);window.open('https://wa.me/'+WA+'?text='+encodeURIComponent(lines.join('\n')),'_blank')});
renderFilters();renderCards();})();
</script>
<?php get_footer(); ?>
