<!-- Pinetop Resort WhatsApp Concierge (Upgraded) -->
<style id="ptwx-style">
  #ptwx-widget, #ptwx-widget * {
    box-sizing: border-box;
    font-family: "Segoe UI", Tahoma, Arial, sans-serif;
  }

  #ptwx-widget {
    position: fixed;
    left: calc(100vw - 86px);
    top: calc(100vh - 86px);
    z-index: 2147483000;
    width: 64px;
    height: 64px;
  }

  #ptwx-widget .ptwx-launcher {
    width: 64px;
    height: 64px;
    border: 0;
    border-radius: 20px;
    background: linear-gradient(140deg, #25d366 0%, #1ea95a 55%, #128c49 100%);
    color: #fff;
    cursor: pointer;
    display: grid;
    place-items: center;
    box-shadow: 0 16px 32px rgba(9, 58, 33, 0.35);
    position: relative;
    overflow: hidden;
    touch-action: none;
    animation: ptwx-float 3s ease-in-out infinite;
  }

  #ptwx-widget .ptwx-launcher::before {
    content: "";
    position: absolute;
    inset: -26px;
    background: radial-gradient(circle at 20% 20%, rgba(255,255,255,0.45), rgba(255,255,255,0) 55%);
    transform: rotate(18deg);
  }

  #ptwx-widget .ptwx-launcher::after {
    content: "";
    position: absolute;
    inset: -8px;
    border: 2px solid rgba(37, 211, 102, 0.35);
    border-radius: 24px;
    animation: ptwx-ring 2.4s infinite;
  }

  #ptwx-widget .ptwx-icon {
    width: 34px;
    height: 34px;
    position: relative;
    z-index: 1;
  }

  #ptwx-widget .ptwx-online-dot {
    position: absolute;
    right: 7px;
    top: 7px;
    width: 11px;
    height: 11px;
    border-radius: 999px;
    background: #d8ff8c;
    border: 2px solid #0f8c49;
    z-index: 2;
    animation: ptwx-blink 1.6s ease-in-out infinite;
  }

  #ptwx-widget .ptwx-tip {
    position: absolute;
    right: 74px;
    bottom: 8px;
    background: #183f2d;
    color: #fff;
    border-radius: 999px;
    padding: 9px 12px;
    white-space: nowrap;
    font-size: 12px;
    font-weight: 700;
    box-shadow: 0 10px 22px rgba(0, 0, 0, 0.25);
    opacity: 0;
    pointer-events: none;
    transform: translateY(6px);
    transition: all 0.2s ease;
  }

  #ptwx-widget.show-tip .ptwx-tip {
    opacity: 1;
    transform: translateY(0);
  }

  #ptwx-widget .ptwx-panel {
    position: absolute;
    right: 0;
    bottom: 76px;
    width: min(92vw, 380px);
    border-radius: 20px;
    overflow: hidden;
    border: 1px solid #cfe8d8;
    background: #f7fcf9;
    box-shadow: 0 30px 60px rgba(8, 42, 25, 0.3);
    opacity: 0;
    pointer-events: none;
    transform: translateY(10px) scale(0.96);
    transform-origin: bottom right;
    transition: opacity 0.2s ease, transform 0.2s ease;
  }

  #ptwx-widget.open .ptwx-panel {
    opacity: 1;
    pointer-events: auto;
    transform: translateY(0) scale(1);
  }

  #ptwx-widget.panel-left .ptwx-panel {
    left: 0;
    right: auto;
    transform-origin: bottom left;
  }

  #ptwx-widget.panel-down .ptwx-panel {
    top: 76px;
    bottom: auto;
    transform-origin: top right;
  }

  #ptwx-widget.panel-left.panel-down .ptwx-panel {
    transform-origin: top left;
  }

  .ptwx-head {
    padding: 12px;
    background: linear-gradient(130deg, #0f7c43 0%, #25d366 100%);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
  }

  .ptwx-head-main {
    display: flex;
    align-items: center;
    gap: 9px;
    min-width: 0;
  }

  .ptwx-head-icon {
    width: 34px;
    height: 34px;
    border-radius: 10px;
    background: rgba(255, 255, 255, 0.2);
    display: grid;
    place-items: center;
    flex: 0 0 34px;
  }

  .ptwx-head-icon .ptwx-icon {
    width: 20px;
    height: 20px;
  }

  .ptwx-head-copy strong {
    display: block;
    font-size: 14px;
    line-height: 1.2;
  }

  .ptwx-head-copy span {
    display: block;
    font-size: 11px;
    opacity: 0.95;
    white-space: nowrap;
  }

  .ptwx-close {
    width: 30px;
    height: 30px;
    border: 0;
    border-radius: 9px;
    background: rgba(255, 255, 255, 0.2);
    color: #fff;
    font-size: 18px;
    line-height: 1;
    cursor: pointer;
  }

  .ptwx-stream {
    background: linear-gradient(180deg, #eef8f1, #f9fcfa);
    padding: 12px;
    max-height: 230px;
    overflow: auto;
    display: grid;
    gap: 8px;
  }

  .ptwx-msg {
    max-width: 88%;
    border-radius: 14px;
    padding: 9px 11px;
    font-size: 13px;
    line-height: 1.35;
    word-wrap: break-word;
    animation: ptwx-message-in 0.18s ease;
  }

  .ptwx-msg.bot {
    background: #fff;
    border: 1px solid #d8ebe0;
    color: #174231;
  }

  .ptwx-msg.bot a {
    color: #11874b;
    text-decoration: none;
    font-weight: 700;
  }

  .ptwx-msg.user {
    margin-left: auto;
    background: linear-gradient(145deg, #23c763, #149a51);
    color: #fff;
  }

  .ptwx-chips {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    padding: 10px 12px;
    background: #fff;
    border-top: 1px solid #e2efe7;
    border-bottom: 1px solid #e2efe7;
  }

  .ptwx-chip {
    border: 1px solid #cfe6d8;
    background: #eef9f3;
    color: #1b4b36;
    border-radius: 999px;
    padding: 7px 10px;
    font-size: 12px;
    font-weight: 700;
    cursor: pointer;
    transition: transform 0.16s ease, background 0.16s ease;
  }

  .ptwx-chip:hover {
    transform: translateY(-1px);
    background: #e4f4ec;
  }

  .ptwx-chip.active {
    background: linear-gradient(140deg, #1ea95a, #128c49);
    color: #fff;
    border-color: #128c49;
  }

  .ptwx-foot {
    padding: 10px 12px 12px;
    background: #fff;
  }

  .ptwx-label {
    display: block;
    margin: 0 0 5px;
    color: #365f4a;
    font-size: 12px;
    font-weight: 700;
  }

  .ptwx-input {
    width: 100%;
    border: 1px solid #cde1d5;
    border-radius: 10px;
    padding: 9px 10px;
    font-size: 13px;
    margin-bottom: 8px;
    outline: none;
  }

  .ptwx-input:focus {
    border-color: #1fb15f;
    box-shadow: 0 0 0 3px rgba(37, 211, 102, 0.14);
  }

  .ptwx-actions {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 8px;
  }

  .ptwx-btn {
    border: 0;
    border-radius: 10px;
    padding: 9px 10px;
    font-size: 12px;
    font-weight: 800;
    cursor: pointer;
  }

  .ptwx-btn.primary {
    color: #fff;
    background: linear-gradient(145deg, #1db760, #128c49);
  }

  .ptwx-btn.secondary {
    color: #1b4a35;
    background: #edf8f1;
    border: 1px solid #d2e8db;
  }

  .ptwx-btn[disabled] {
    opacity: 0.45;
    cursor: not-allowed;
  }

  .ptwx-move-note {
    text-align: center;
    padding-top: 7px;
    font-size: 10px;
    color: #678175;
  }

  .ptwx-toast {
    margin-top: 8px;
    background: #14392a;
    color: #fff;
    border-radius: 999px;
    padding: 8px 11px;
    font-size: 11px;
    font-weight: 700;
    text-align: center;
    opacity: 0;
    transform: translateY(4px);
    transition: all 0.18s ease;
    pointer-events: none;
  }

  .ptwx-toast.show {
    opacity: 1;
    transform: translateY(0);
  }

  @keyframes ptwx-float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-3px); }
  }

  @keyframes ptwx-ring {
    0% { transform: scale(1); opacity: 0.8; }
    75% { transform: scale(1.18); opacity: 0; }
    100% { transform: scale(1.18); opacity: 0; }
  }

  @keyframes ptwx-blink {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.35; }
  }

  @keyframes ptwx-message-in {
    from { opacity: 0; transform: translateY(6px); }
    to { opacity: 1; transform: translateY(0); }
  }

  @media (max-width: 540px) {
    #ptwx-widget {
      width: 60px;
      height: 60px;
    }

    #ptwx-widget .ptwx-launcher {
      width: 60px;
      height: 60px;
      border-radius: 18px;
    }

    #ptwx-widget .ptwx-icon {
      width: 31px;
      height: 31px;
    }

    #ptwx-widget .ptwx-tip {
      display: none;
    }

    #ptwx-widget .ptwx-panel {
      width: min(94vw, 360px);
    }
  }

  @media (prefers-reduced-motion: reduce) {
    #ptwx-widget * {
      animation: none !important;
      transition: none !important;
    }
  }
</style>

<script id="ptwx-script">
(function () {
  if (window.__ptwxLoaded) return;
  window.__ptwxLoaded = true;

  var CONFIG = {
    resort: "Pinetop Resort",
    number: "923004452015",
    mapUrl: "https://maps.google.com/?q=Pinetop+Resort+Khanpur"
  };

  var FAQ = [
    {
      id: "booking",
      label: "Booking availability",
      answer: "Yes. Share your date and guest count and we will confirm availability quickly.",
      prefill: "I want to check booking availability."
    },
    {
      id: "location",
      label: "Location and map",
      answer: 'Use this map link: <a href="' + CONFIG.mapUrl + '" target="_blank" rel="noopener">Open location</a>. You can ask for a live pin too.',
      prefill: "Please send exact location pin and directions."
    },
    {
      id: "prebooking",
      label: "Pre-booking process",
      answer: "Send your stay date, guest count, and room preference. Team will guide advance/payment and confirmation.",
      prefill: "Please explain pre-booking and advance payment process."
    },
    {
      id: "packages",
      label: "Food and activities",
      answer: "BBQ, bonfire and meal setups are available. Share your date and number of guests for options.",
      prefill: "Please share food/activity setup options for my date."
    }
  ];

  var POS_KEY = "ptwx_position_v3";
  var WA_ICON = '' +
    '<svg class="ptwx-icon" viewBox="0 0 32 32" aria-hidden="true">' +
    '<path fill="#fff" d="M16.03 3.2c-7.08 0-12.8 5.72-12.8 12.79 0 2.24.59 4.43 1.69 6.36L3 29l6.83-1.79a12.73 12.73 0 0 0 6.19 1.55h.01c7.07 0 12.8-5.72 12.8-12.79 0-3.43-1.34-6.65-3.77-9.08A12.7 12.7 0 0 0 16.03 3.2zm0 23.39h-.01c-1.91 0-3.79-.51-5.44-1.48l-.39-.23-4.06 1.07 1.08-3.96-.25-.4a10.66 10.66 0 0 1-1.62-5.62c0-5.9 4.8-10.7 10.69-10.7 2.86 0 5.55 1.11 7.58 3.13a10.66 10.66 0 0 1 3.13 7.57c0 5.9-4.8 10.7-10.71 10.7z"/>' +
    '<path fill="#fff" d="M19.11 17.21c-.27-.14-1.6-.79-1.85-.88-.25-.09-.43-.13-.61.13-.18.27-.7.88-.86 1.06-.16.18-.31.2-.58.07-.27-.13-1.13-.42-2.15-1.34-.8-.72-1.34-1.59-1.5-1.86-.16-.27-.02-.42.12-.56.12-.12.27-.31.4-.47.13-.16.18-.27.27-.45.09-.18.04-.34-.02-.47-.07-.13-.61-1.47-.84-2.01-.22-.53-.45-.46-.61-.47-.16-.01-.34-.01-.52-.01-.18 0-.47.07-.72.34-.25.27-.95.93-.95 2.27 0 1.33.98 2.62 1.11 2.8.13.18 1.92 2.93 4.65 4.11.65.28 1.15.45 1.55.58.65.21 1.24.18 1.71.11.52-.08 1.6-.65 1.83-1.28.23-.63.23-1.16.16-1.28-.07-.11-.25-.18-.52-.31z"/>' +
    '</svg>';

  function init() {
    if (!document.body || document.getElementById("ptwx-widget")) return;

    var root = document.createElement("div");
    root.id = "ptwx-widget";
    root.innerHTML = ''
      + '<div class="ptwx-tip" id="ptwxTip">Need help? Booking, location, pre-booking.</div>'
      + '<button type="button" class="ptwx-launcher" id="ptwxLauncher" aria-label="Open WhatsApp concierge" aria-expanded="false">'
      + WA_ICON
      + '<span class="ptwx-online-dot" aria-hidden="true"></span>'
      + '</button>'
      + '<section class="ptwx-panel" id="ptwxPanel" role="dialog" aria-label="Pinetop WhatsApp concierge">'
      + '  <div class="ptwx-head">'
      + '    <div class="ptwx-head-main">'
      + '      <div class="ptwx-head-icon">' + WA_ICON + '</div>'
      + '      <div class="ptwx-head-copy"><strong>' + CONFIG.resort + '</strong><span>Quick answers + real chat</span></div>'
      + '    </div>'
      + '    <button type="button" class="ptwx-close" id="ptwxClose" aria-label="Close">&times;</button>'
      + '  </div>'
      + '  <div class="ptwx-stream" id="ptwxStream"></div>'
      + '  <div class="ptwx-chips" id="ptwxChips"></div>'
      + '  <div class="ptwx-foot">'
      + '    <label class="ptwx-label" for="ptwxName">Guest name (optional)</label>'
      + '    <input class="ptwx-input" id="ptwxName" type="text" placeholder="Enter your name">'
      + '    <label class="ptwx-label" for="ptwxCustom">Your message (optional)</label>'
      + '    <input class="ptwx-input" id="ptwxCustom" type="text" placeholder="Type any extra question">'
      + '    <div class="ptwx-actions">'
      + '      <button type="button" class="ptwx-btn secondary" id="ptwxAsk" disabled>Send selected topic</button>'
      + '      <button type="button" class="ptwx-btn primary" id="ptwxReal">Real chat now</button>'
      + '    </div>'
      + '    <div class="ptwx-move-note">Drag the round button to move it anywhere.</div>'
      + '    <div class="ptwx-toast" id="ptwxToast"></div>'
      + '  </div>'
      + '</section>';

    document.body.appendChild(root);

    var launcher = document.getElementById("ptwxLauncher");
    var closeBtn = document.getElementById("ptwxClose");
    var stream = document.getElementById("ptwxStream");
    var chipsWrap = document.getElementById("ptwxChips");
    var nameInput = document.getElementById("ptwxName");
    var customInput = document.getElementById("ptwxCustom");
    var askBtn = document.getElementById("ptwxAsk");
    var realBtn = document.getElementById("ptwxReal");
    var toast = document.getElementById("ptwxToast");

    var selectedTopic = null;
    var drag = { active: false, moved: false, startX: 0, startY: 0, originX: 0, originY: 0 };
    var isOpen = false;

    function clamp(v, min, max) {
      return Math.max(min, Math.min(max, v));
    }

    function toastMsg(msg) {
      toast.textContent = msg;
      toast.classList.add("show");
      clearTimeout(toastMsg.t);
      toastMsg.t = setTimeout(function () {
        toast.classList.remove("show");
      }, 2200);
    }

    function addMsg(role, text, html) {
      var line = document.createElement("div");
      line.className = "ptwx-msg " + (role === "bot" ? "bot" : "user");
      if (html) line.innerHTML = text;
      else line.textContent = text;
      stream.appendChild(line);
      stream.scrollTop = stream.scrollHeight;
    }

    function renderChips() {
      chipsWrap.innerHTML = FAQ.map(function (q) {
        return '<button type="button" class="ptwx-chip" data-id="' + q.id + '">' + q.label + '</button>';
      }).join("");
    }

    function setActiveChip(id) {
      var all = chipsWrap.querySelectorAll(".ptwx-chip");
      for (var i = 0; i < all.length; i++) {
        all[i].classList.toggle("active", all[i].getAttribute("data-id") === id);
      }
    }

    function updateAskState() {
      var custom = customInput.value.trim();
      askBtn.disabled = !(selectedTopic || custom);
    }

    function updatePlacement() {
      var rect = root.getBoundingClientRect();
      root.classList.toggle("panel-left", rect.left < window.innerWidth / 2);
      root.classList.toggle("panel-down", rect.top < 330);
    }

    function setPosition(x, y, shouldSave) {
      var margin = 10;
      var maxX = window.innerWidth - root.offsetWidth - margin;
      var maxY = window.innerHeight - root.offsetHeight - margin;
      var left = clamp(x, margin, maxX);
      var top = clamp(y, margin, maxY);

      root.style.left = left + "px";
      root.style.top = top + "px";
      updatePlacement();

      if (shouldSave) {
        try {
          localStorage.setItem(POS_KEY, JSON.stringify({ x: left, y: top }));
        } catch (e) {}
      }
    }

    function setDefaultPosition() {
      var x = window.innerWidth - root.offsetWidth - 16;
      var y = window.innerHeight - root.offsetHeight - 16;
      setPosition(x, y, false);
    }

    function loadPosition() {
      try {
        var raw = localStorage.getItem(POS_KEY);
        if (!raw) {
          setDefaultPosition();
          return;
        }
        var pos = JSON.parse(raw);
        if (typeof pos.x === "number" && typeof pos.y === "number") {
          setPosition(pos.x, pos.y, false);
        } else {
          setDefaultPosition();
        }
      } catch (e) {
        setDefaultPosition();
      }
    }

    function openPanel() {
      isOpen = true;
      root.classList.add("open");
      root.classList.remove("show-tip");
      launcher.setAttribute("aria-expanded", "true");
      updatePlacement();
    }

    function closePanel() {
      isOpen = false;
      root.classList.remove("open");
      launcher.setAttribute("aria-expanded", "false");
    }

    function togglePanel() {
      if (isOpen) closePanel();
      else openPanel();
    }

    function openWhatsApp(realOnly) {
      var name = nameInput.value.trim();
      var custom = customInput.value.trim();

      if (!realOnly && !selectedTopic && !custom) {
        toastMsg("Choose a topic or type a message.");
        return;
      }

      var lines = ["Hi " + CONFIG.resort + ","];
      if (name) lines.push("Guest Name: " + name);

      if (realOnly) {
        if (custom) lines.push(custom);
        else lines.push("I want to chat with your team.");
      } else {
        if (selectedTopic) {
          lines.push("Topic: " + selectedTopic.label);
          lines.push(selectedTopic.prefill);
        }
        if (custom) lines.push("Question: " + custom);
        lines.push("Please guide me.");
      }

      var url = "https://wa.me/" + CONFIG.number + "?text=" + encodeURIComponent(lines.join("\n"));
      window.open(url, "_blank", "noopener");
    }

    function seedIntro() {
      addMsg("bot", "Welcome to Pinetop Resort.");
      addMsg("bot", "Choose a question below, then continue in WhatsApp for real chat.");
    }

    chipsWrap.addEventListener("click", function (e) {
      var chip = e.target.closest(".ptwx-chip");
      if (!chip) return;

      var id = chip.getAttribute("data-id");
      var topic = FAQ.find(function (q) { return q.id === id; });
      if (!topic) return;

      selectedTopic = topic;
      setActiveChip(id);
      addMsg("user", topic.label, false);
      addMsg("bot", topic.answer, true);
      updateAskState();
    });

    customInput.addEventListener("input", updateAskState);

    askBtn.addEventListener("click", function () {
      openWhatsApp(false);
    });

    realBtn.addEventListener("click", function () {
      openWhatsApp(true);
    });

    closeBtn.addEventListener("click", closePanel);

    launcher.addEventListener("keydown", function (e) {
      if (e.key === "Enter" || e.key === " ") {
        e.preventDefault();
        togglePanel();
      }
    });

    launcher.addEventListener("pointerdown", function (e) {
      if (typeof e.button === "number" && e.button !== 0) return;
      drag.active = true;
      drag.moved = false;
      drag.startX = e.clientX;
      drag.startY = e.clientY;
      var rect = root.getBoundingClientRect();
      drag.originX = rect.left;
      drag.originY = rect.top;
      if (launcher.setPointerCapture) launcher.setPointerCapture(e.pointerId);
    });

    launcher.addEventListener("pointermove", function (e) {
      if (!drag.active) return;
      var dx = e.clientX - drag.startX;
      var dy = e.clientY - drag.startY;
      if (Math.abs(dx) > 3 || Math.abs(dy) > 3) drag.moved = true;
      setPosition(drag.originX + dx, drag.originY + dy, false);
    });

    function endDrag(e) {
      if (!drag.active) return;
      drag.active = false;
      if (launcher.releasePointerCapture) launcher.releasePointerCapture(e.pointerId);

      if (drag.moved) {
        setPosition(parseFloat(root.style.left), parseFloat(root.style.top), true);
      } else {
        togglePanel();
      }
    }

    launcher.addEventListener("pointerup", endDrag);
    launcher.addEventListener("pointercancel", endDrag);

    document.addEventListener("click", function (e) {
      if (!isOpen) return;
      if (!root.contains(e.target)) closePanel();
    });

    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape") closePanel();
    });

    window.addEventListener("resize", function () {
      var rect = root.getBoundingClientRect();
      setPosition(rect.left, rect.top, true);
    });

    renderChips();
    seedIntro();
    loadPosition();
    updateAskState();

    setTimeout(function () {
      if (!isOpen) root.classList.add("show-tip");
    }, 1100);

    setTimeout(function () {
      root.classList.remove("show-tip");
    }, 7600);
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", init);
  } else {
    init();
  }
})();
</script>
