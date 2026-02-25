<?php get_header(); ?>
<?php
$menu = array(
  array('category' => 'Breakfast', 'icon' => '🍳', 'items' => array(
    array('name' => 'French Toast (2 pcs)', 'price' => 400),
    array('name' => 'Whole Wheat Paratha', 'price' => 200),
    array('name' => 'Plain Paratha', 'price' => 150),
    array('name' => 'Toast (1 pc)', 'price' => 50),
    array('name' => 'Omelette', 'price' => 200),
    array('name' => 'Cheese Omelette', 'price' => 400),
    array('name' => 'Half Fry', 'price' => 150),
    array('name' => 'Channay', 'price' => 500),
  )),
  array('category' => 'Complimentary Breakfast For 2 (8am to 11am)', 'icon' => '🌅', 'items' => array(
    array('name' => 'Paratha/Slice', 'price' => 0),
    array('name' => 'Omelette/Half Fry', 'price' => 0),
    array('name' => 'Chai', 'price' => 0),
  )),
  array('category' => 'Snacks', 'icon' => '🍟', 'items' => array(
    array('name' => 'Plain Fries', 'price' => 500),
    array('name' => 'Biscuits', 'price' => 80),
    array('name' => 'Extra Sauce', 'price' => 100),
  )),
  array('category' => 'Tandoor', 'icon' => '🔥', 'items' => array(
    array('name' => 'Roti', 'price' => 60),
    array('name' => 'Sada Naan', 'price' => 60),
    array('name' => 'Roghni Naan', 'price' => 150),
  )),
  array('category' => 'Main Course', 'icon' => '🍛', 'items' => array(
    array('name' => 'Chicken Karahi (Half)', 'price' => 1600),
    array('name' => 'Chicken Karahi (Full)', 'price' => 2400),
    array('name' => 'Chicken Biryani', 'price' => 1100),
    array('name' => 'Chicken White Karahi (Half)', 'price' => 1600),
    array('name' => 'Chicken White Karahi (Full)', 'price' => 2600),
    array('name' => 'Daal Mash', 'price' => 700),
    array('name' => 'Mix Vegetables', 'price' => 700),
    array('name' => 'Chicken Chilli Dry', 'price' => 1500),
    array('name' => 'Fried Rice', 'price' => 1000),
    array('name' => 'Beef Chilli Dry', 'price' => 1600),
    array('name' => 'Beef Shakshuka', 'price' => 900),
    array('name' => 'Organic Desi Murgi (1 kg)', 'price' => 4500),
    array('name' => 'Daal Chawal', 'price' => 700),
    array('name' => 'Chicken Steak', 'price' => 1700),
    array('name' => 'Beef Steak', 'price' => 2200),
    array('name' => 'Aloo Qeema', 'price' => 1200),
    array('name' => 'Salad', 'price' => 200),
    array('name' => 'Raita', 'price' => 200),
  )),
  array('category' => 'Drinks', 'icon' => '🥤', 'items' => array(
    array('name' => 'Water (Small)', 'price' => 100),
    array('name' => 'Water (Large)', 'price' => 140),
    array('name' => 'Cold Drink (350 ml)', 'price' => 160),
    array('name' => 'Cold Drink (1.5 Litre)', 'price' => 250),
    array('name' => 'Fresh Lime', 'price' => 200),
    array('name' => 'Black Coffee', 'price' => 600),
    array('name' => 'Coffee Latte', 'price' => 700),
    array('name' => 'Special Green Tea', 'price' => 150),
    array('name' => 'Doodh Patti', 'price' => 200),
    array('name' => 'Seasonal Fruit Shake', 'price' => 600),
    array('name' => 'Karak Chai', 'price' => 150),
    array('name' => 'Juice', 'price' => 120),
    array('name' => 'Ice Tea', 'price' => 300),
    array('name' => 'Cold Coffee', 'price' => 700),
    array('name' => 'Laban (Lassi)', 'price' => 300),
  )),
  array('category' => 'BBQ & Self Cooking', 'icon' => '🍢', 'items' => array(
    array('name' => 'BBQ (per kg)', 'price' => 2400),
    array('name' => 'Fish BBQ (1 kg)', 'price' => 2500),
    array('name' => 'Self BBQ', 'price' => 1000),
    array('name' => 'Self Cooking (Kitchen)', 'price' => 2000),
  )),
  array('category' => 'Pasta & Others', 'icon' => '🍝', 'items' => array(
    array('name' => 'Alfredo Pasta', 'price' => 1500),
    array('name' => 'Spaghetti', 'price' => 1000),
    array('name' => 'Noodles', 'price' => 200),
  )),
  array('category' => 'Bonfire Experience', 'icon' => '🔥', 'items' => array(
    array('name' => 'Bonfire', 'price' => 2000),
  )),
);
?>
<section class="section" style="padding-top:140px;">
  <div class="container">
    <div class="card" style="padding:22px;">
      <p class="kicker">Pinetop Resort Menu</p>
      <h1 style="margin:10px 0 0;">Fine Dining At Its Best</h1>
      <p class="muted">Fresh, local comfort food with lake view. Tap an item, set quantity, add note, and send directly to WhatsApp.</p>
      <p style="margin-top:12px;"><a class="btn btn-primary" href="https://wa.me/923004452015?text=Hi%20PineTop%20Resort%2C%20I%20want%20to%20reserve%20a%20table." target="_blank" rel="noopener">Call to Book (+92 300 445 2015)</a></p>
    </div>

    <div class="dining-layout" style="margin-top:20px;">
      <div class="card" style="padding:16px;">
        <div id="diningFilters" style="display:flex;gap:8px;flex-wrap:wrap;margin-bottom:12px;"></div>
        <div id="menuItems" class="grid-2"></div>
      </div>

      <aside class="card" style="padding:16px;position:sticky;top:90px;">
        <h2 style="margin:0 0 10px;font-size:1.6rem;">Your Order</h2>
        <div id="cartItems" style="display:grid;gap:10px;"></div>
        <div id="emptyCart" style="border:1px dashed rgba(159,183,212,.35);padding:12px;border-radius:10px;color:#96abc3;">Your order is empty. Add items from menu.</div>

        <div style="margin-top:12px;border:1px solid rgba(159,183,212,.35);background:rgba(9,22,39,.85);padding:12px;border-radius:12px;font-size:14px;">
          <div style="display:flex;justify-content:space-between;"><span>Subtotal</span><strong id="subtotal">Rs 0</strong></div>
          <div style="display:flex;justify-content:space-between;margin-top:4px;"><span>Tax (5%)</span><strong id="tax">Rs 0</strong></div>
          <div style="display:flex;justify-content:space-between;margin-top:4px;color:#58ebd9;"><span><strong>Grand Total</strong></span><strong id="total">Rs 0</strong></div>
        </div>

        <label style="display:block;margin-top:10px;font-size:14px;">Special Request
          <textarea id="orderNote" rows="3" style="width:100%;margin-top:6px;border:1px solid rgba(159,183,212,.35);border-radius:10px;padding:8px;background:rgba(8,20,36,.8);color:#eaf3ff;" placeholder="Any extra instructions"></textarea>
        </label>

        <button id="sendOrder" class="btn btn-primary" style="width:100%;border:none;margin-top:10px;">Send Order on WhatsApp</button>

        <p class="muted" style="font-size:12px;line-height:1.5;margin-top:10px;">All food is freshly prepared with estimated time of 40-60 minutes. Breakfast is served from 8:00 AM - 11:00 AM. Orders after 11:00 AM are charged at regular prices. Tax included at checkout.</p>
      </aside>
    </div>
  </div>
</section>

<script>
(function(){
  var WA='923004452015';
  var TAX=0.05;
  var MENU=<?php echo wp_json_encode($menu); ?>;
  var allItems=[];
  MENU.forEach(function(section){(section.items||[]).forEach(function(it){allItems.push({category:section.category,icon:section.icon,name:it.name,price:Number(it.price||0)});});});
  var active='All';
  var cart=[];

  var filtersEl=document.getElementById('diningFilters');
  var menuEl=document.getElementById('menuItems');
  var cartEl=document.getElementById('cartItems');
  var emptyEl=document.getElementById('emptyCart');
  var subtotalEl=document.getElementById('subtotal');
  var taxEl=document.getElementById('tax');
  var totalEl=document.getElementById('total');
  var noteEl=document.getElementById('orderNote');
  var sendEl=document.getElementById('sendOrder');

  function fmt(v){return 'Rs '+Number(v||0).toLocaleString('en-PK');}

  function renderFilters(){
    filtersEl.innerHTML='';
    var btnAll=document.createElement('button'); btnAll.className='btn'; btnAll.textContent='All'; btnAll.style.border='1px solid rgba(159,183,212,.35)'; btnAll.style.background=(active==='All'?'#15b8a4':'rgba(9,22,39,.8)'); btnAll.style.color=(active==='All'?'#05201d':'#d8e6f8'); btnAll.onclick=function(){active='All';renderFilters();renderMenu();}; filtersEl.appendChild(btnAll);
    MENU.forEach(function(section){
      var b=document.createElement('button'); b.className='btn'; b.style.border='1px solid rgba(159,183,212,.35)'; b.style.background=(active===section.category?'#15b8a4':'rgba(9,22,39,.8)'); b.style.color=(active===section.category?'#05201d':'#d8e6f8'); b.textContent=section.icon+' '+section.category; b.onclick=function(){active=section.category;renderFilters();renderMenu();}; filtersEl.appendChild(b);
    });
  }

  function addToCart(item){
    var ex=cart.find(function(c){return c.key===item.name;});
    if(ex){ex.qty+=1; renderCart(); return;}
    cart.push({key:item.name,category:item.category,name:item.name,price:item.price,qty:1,note:''});
    renderCart();
  }

  function renderMenu(){
    var list=(active==='All')?allItems:allItems.filter(function(i){return i.category===active;});
    menuEl.innerHTML='';
    list.forEach(function(item){
      var card=document.createElement('article'); card.className='card'; card.style.background='rgba(9,22,39,.8)';
      card.innerHTML='<div class="card-body"><p style="font-size:13px;color:#58ebd9;margin:0">'+item.category+'</p><h3 style="margin:6px 0 0;font-size:1rem;">'+item.name+'</h3><p style="margin:6px 0 0;font-size:14px;color:#d7e6f8;">'+fmt(item.price)+'</p><button class="btn btn-primary" style="border:none;margin-top:10px;padding:8px 12px;">Add to Order</button></div>';
      card.querySelector('button').onclick=function(){addToCart(item);};
      menuEl.appendChild(card);
    });
  }

  function renderCart(){
    cartEl.innerHTML='';
    emptyEl.style.display=cart.length?'none':'block';
    cart.forEach(function(item){
      var box=document.createElement('div'); box.style.border='1px solid rgba(159,183,212,.35)'; box.style.borderRadius='10px'; box.style.padding='10px'; box.style.background='rgba(9,22,39,.72)';
      box.innerHTML='<p style="margin:0;font-weight:700">'+item.name+'</p><p style="margin:2px 0 0;font-size:12px;color:#96abc3">'+fmt(item.price)+' each</p><div style="display:flex;align-items:center;gap:8px;margin-top:8px;"><button class="minus" type="button" style="height:28px;width:28px;border:1px solid rgba(159,183,212,.35);border-radius:8px;background:rgba(8,20,36,.9);color:#e9f3ff;">-</button><span style="font-weight:700">'+item.qty+'</span><button class="plus" type="button" style="height:28px;width:28px;border:1px solid rgba(159,183,212,.35);border-radius:8px;background:rgba(8,20,36,.9);color:#e9f3ff;">+</button></div><textarea rows="2" style="width:100%;margin-top:8px;border:1px solid rgba(159,183,212,.35);border-radius:8px;padding:6px;background:rgba(8,20,36,.8);color:#eaf3ff;" placeholder="Item note (optional)">'+(item.note||'')+'</textarea>';
      box.querySelector('.minus').onclick=function(){item.qty=Math.max(0,item.qty-1); if(item.qty===0){cart=cart.filter(function(c){return c.key!==item.key;});} renderCart();};
      box.querySelector('.plus').onclick=function(){item.qty+=1; renderCart();};
      box.querySelector('textarea').oninput=function(e){item.note=e.target.value;};
      cartEl.appendChild(box);
    });

    var subtotal=cart.reduce(function(s,i){return s+(i.price*i.qty);},0);
    var tax=Math.round(subtotal*TAX);
    var total=subtotal+tax;
    subtotalEl.textContent=fmt(subtotal);
    taxEl.textContent=fmt(tax);
    totalEl.textContent=fmt(total);
  }

  sendEl.onclick=function(){
    if(!cart.length){alert('Your order is empty. Add menu items first.');return;}
    var subtotal=cart.reduce(function(s,i){return s+(i.price*i.qty);},0);
    var tax=Math.round(subtotal*TAX);
    var total=subtotal+tax;
    var lines=['Pinetop Resort - New Food Order','','Order Items:'];
    cart.forEach(function(i){lines.push('- '+i.name+' x'+i.qty+' = '+fmt(i.price*i.qty)); if(i.note){lines.push('  Note: '+i.note);}});
    lines.push('', 'Subtotal: '+fmt(subtotal), 'Tax (5%): '+fmt(tax), 'Grand Total: '+fmt(total));
    if((noteEl.value||'').trim()){lines.push('Special Request: '+noteEl.value.trim());}
    lines.push('','Please confirm this order. Thank you.');
    window.open('https://wa.me/'+WA+'?text='+encodeURIComponent(lines.join('\n')),'_blank');
  };

  renderFilters();
  renderMenu();
  renderCart();
})();
</script>
<?php get_footer(); ?>
