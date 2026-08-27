<div id="locationModal" class="location-modal" style="display:none;">
  <div class="location-box">
    <div class="location-head">
      <h3>Change Location</h3>
      <button type="button" id="closeLocationModal" class="location-close">×</button>
    </div>

    <p class="location-subtitle">
      Enter area, city or pincode, or pick your location on the map.
    </p>

    <input
      type="text"
      id="locationInput"
      class="location-input"
      placeholder="Enter area, city or pincode"
      autocomplete="off"
    >

    <a
      id="locationMapLink"
      href="javascript:void(0);"
      class="location-map-link"
    >
      Pick location on map
    </a>

    <div id="locationMapWrap" style="display:none; margin-top:12px;">
      <div id="locationMap" style="height:300px; border-radius:12px; overflow:hidden;"></div>
      <div id="pickedLocationText" style="margin-top:10px; font-size:13px; color:#475569;"></div>
    </div>

    <div class="location-actions">
      <button type="button" id="detectLocation" class="location-btn-secondary">
        Use Current Location
      </button>

      <div class="location-action-row">
        <button type="button" id="saveLocation" class="location-btn-primary">
          Save Location
        </button>

        <button type="button" id="cancelLocation" class="location-btn-cancel">
          Cancel
        </button>
      </div>
    </div>
  </div>
</div>
    <footer class="footer-modern">
  <div class="footer-content">
    <!-- Col 1 -->
    <div class="footer-col footer-col--brand">
      <h3 class="footer-logo">NXTutors</h3>
      <p class="footer-desc">
        Premium home tutoring in Gurugram.
        Trusted by 4,500+ parents for CBSE, ICSE &amp; IB.
      </p>

      {{-- One icon set, one weight, one colour. Brand glyphs drawn inline so
           they can't disagree with each other the way the old files did. --}}
      <div class="footer-social">
        <a href="#" aria-label="NXTutors on Facebook">
          <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M13.5 21v-8h2.7l.4-3.1h-3.1V7.9c0-.9.25-1.5 1.55-1.5h1.65V3.62A22 22 0 0 0 14.3 3.5c-2.4 0-4.05 1.47-4.05 4.16V9.9H7.5V13h2.75v8z"/></svg>
        </a>
        <a href="#" aria-label="NXTutors on Instagram">
          <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 7.1A4.9 4.9 0 1 0 16.9 12A4.9 4.9 0 0 0 12 7.1m0 8.08A3.18 3.18 0 1 1 15.18 12A3.18 3.18 0 0 1 12 15.18M18.25 6.9a1.14 1.14 0 1 1-1.15-1.15a1.15 1.15 0 0 1 1.15 1.15M21.2 8.05a5.66 5.66 0 0 0-1.55-4a5.7 5.7 0 0 0-4-1.55C14.1 2.41 9.9 2.41 8.35 2.5a5.7 5.7 0 0 0-4 1.54a5.68 5.68 0 0 0-1.55 4c-.09 1.56-.09 5.75 0 7.31a5.66 5.66 0 0 0 1.55 4a5.72 5.72 0 0 0 4 1.55c1.56.09 5.75.09 7.31 0a5.66 5.66 0 0 0 4-1.55a5.68 5.68 0 0 0 1.55-4c.09-1.56.09-5.74 0-7.3m-2.06 8.98a3.22 3.22 0 0 1-1.82 1.82c-1.26.5-4.26.39-5.66.39s-4.4.1-5.66-.39a3.22 3.22 0 0 1-1.82-1.82c-.5-1.26-.39-4.26-.39-5.66s-.1-4.4.39-5.66A3.22 3.22 0 0 1 6.34 3.9c1.26-.5 4.26-.39 5.66-.39s4.4-.1 5.66.39a3.22 3.22 0 0 1 1.82 1.82c.5 1.26.39 4.26.39 5.66s.11 4.4-.39 5.65"/></svg>
        </a>
        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $setting->phone);}}"
           target="_blank" rel="noopener" aria-label="NXTutors on WhatsApp">
          <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.47 14.38c-.3-.15-1.76-.87-2.03-.97-.28-.1-.48-.15-.68.15s-.76.96-.94 1.16c-.17.2-.34.22-.64.08s-1.26-.47-2.39-1.48c-.89-.79-1.48-1.76-1.66-2.06s-.02-.46.13-.6c.14-.14.3-.35.45-.52s.2-.3.3-.5s.05-.37-.03-.52c-.07-.15-.66-1.61-.91-2.2c-.25-.58-.49-.5-.67-.51h-.57c-.2 0-.52.07-.8.37s-1.03 1.02-1.03 2.48c0 1.46 1.06 2.87 1.21 3.07c.15.2 2.1 3.2 5.08 4.49c.71.3 1.26.49 1.69.62c.71.23 1.36.2 1.87.12c.57-.09 1.76-.72 2-1.42c.25-.69.25-1.29.18-1.41c-.08-.13-.28-.2-.58-.35M12.05 21.8h-.01a9.9 9.9 0 0 1-5.03-1.38l-.36-.22l-3.74.99l1-3.65l-.24-.38A9.86 9.86 0 0 1 2.16 12c0-5.45 4.44-9.89 9.89-9.89c2.64 0 5.12 1.03 6.99 2.9a9.83 9.83 0 0 1 2.89 6.99c0 5.45-4.44 9.89-9.88 9.89m8.41-18.3A11.82 11.82 0 0 0 12.05 0C5.5 0 .16 5.34.16 11.89c0 2.1.55 4.14 1.59 5.95L.06 24l6.3-1.65a11.88 11.88 0 0 0 5.69 1.45h.01c6.55 0 11.89-5.34 11.89-11.89c0-3.18-1.23-6.17-3.48-8.42"/></svg>
        </a>
      </div>
    </div>

    <!-- Col 2 -->
    <div class="footer-col">
      <h4>Quick Links</h4>
      <ul>
        <li><a href="{{ url('/')}}">Home</a></li>
        <li><a href="{{ url('/')}}/tutors">Find Tutors</a></li>
        <li><a href="#" data-modal-target="tutorModal">Become a Tutor</a></li>
        <li><a href="{{ url('/')}}/demo-class">Demo Class</a></li>
        <li><a href="{{ url('/')}}/pricing">Subscription Plan</a></li>
      </ul>
    </div>

    <!-- Col 3 -->
    <div class="footer-col">
      <h4>Useful Links</h4>
      <ul>
        <li><a href="{{ url('/')}}/blog">Blog &amp; Advice</a></li>
        <li><a href="{{ url('/')}}/pricing-guide">Pricing Guide</a></li>
        <li><a href="{{ url('/')}}/faqs">FAQs</a></li>
        <li><a href="{{ url('/')}}/terms-conditions">Terms &amp; Conditions</a></li>
        <li><a href="{{ url('/')}}/privacy-policy">Privacy Policy</a></li>
      </ul>
    </div>

    <!-- Col 4 -->
    <div class="footer-col">
      <h4>Contact Us</h4>
      <ul class="footer-contact">
        <li>
          <svg viewBox="0 0 16 16" fill="currentColor" aria-hidden="true"><path d="M8 1a5 5 0 0 0-5 5c0 3.6 4.4 8.6 4.6 8.8a.5.5 0 0 0 .8 0C8.6 14.6 13 9.6 13 6a5 5 0 0 0-5-5m0 7a2 2 0 1 1 0-4 2 2 0 0 1 0 4"/></svg>
          <span>{{ $setting->address }}</span>
        </li>
        <li>
          <svg viewBox="0 0 16 16" fill="currentColor" aria-hidden="true"><path d="M3.65 1.5A1.6 1.6 0 0 1 5.9 2l1 1.5a1.6 1.6 0 0 1-.2 2l-.6.6a.4.4 0 0 0-.06.5A9.7 9.7 0 0 0 9.4 9.96a.4.4 0 0 0 .5-.06l.6-.6a1.6 1.6 0 0 1 2-.2l1.5 1a1.6 1.6 0 0 1 .5 2.25l-.9 1.3a1.7 1.7 0 0 1-1.9.63C8.5 13.2 2.8 7.5 1.72 4.3a1.7 1.7 0 0 1 .63-1.9z"/></svg>
          <a href="tel:{{ preg_replace('/[^0-9+]/', '', $setting->phone) }}">{{ $setting->phone }}</a>
        </li>
        <li>
          <svg viewBox="0 0 16 16" fill="currentColor" aria-hidden="true"><path d="M2 3h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1m.4 1.4L8 8.3l5.6-3.9zM2 11.9l4.3-3.2L2 5.7zm12 0V5.7L9.7 8.7z"/></svg>
          <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
        </li>
      </ul>

      <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $setting->phone);}}"
         target="_blank" rel="noopener" class="btn-footer">
        Chat on WhatsApp
      </a>
    </div>
  </div>

  <div class="footer-bottom">
    <span>© <span id="year"></span> NXTutors — All rights reserved.</span>
  </div>
</footer>



  <script src="{{ asset('frount/assets') }}/js/main.js?v={{ $nxtAssetV ?? 1 }}"></script>

  <script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('demoForm');
    if (!form) return;

    const chips = document.querySelectorAll('.nx-chip');
    const subjectInput = document.getElementById('selectedSubject');
    const submitBtn = document.getElementById('demoSubmitBtn');

    const whatsappNumber = "{{ preg_replace('/[^0-9]/', '', $setting->phone) }}";
    const locationText = @json($locationText ?? 'Sector 30, Gurugram');
    const storeUrl = "{{ route('demo.lead.store') }}";
    const sourcePage = window.location.href;

    chips.forEach(chip => {
        chip.addEventListener('click', function () {
            chips.forEach(c => c.classList.remove('nx-chip--active'));
            this.classList.add('nx-chip--active');
            if (subjectInput) {
                subjectInput.value = this.getAttribute('data-subject') || this.textContent.trim();
            }
        });
    });

    form.addEventListener('submit', async function (e) {
        e.preventDefault();

        const formData = {
            name: form.querySelector('[name="name"]')?.value.trim() || '',
            phone: form.querySelector('[name="phone"]')?.value.trim() || '',
            service: form.querySelector('[name="service"]')?.value.trim() || '',
            subject: form.querySelector('[name="subject"]')?.value.trim() || '',
            child_class: form.querySelector('[name="child_class"]')?.value.trim() || '',
            preferred_time: form.querySelector('[name="preferred_time"]')?.value.trim() || '',
            mode: form.querySelector('[name="mode"]')?.value.trim() || '',
            location: locationText,
            message: form.querySelector('[name="message"]')?.value.trim() || '',
            source_page: sourcePage
        };

        if (!formData.name) {
            alert('Please enter your name.');
            return;
        }

        if (!/^[0-9]{10}$/.test(formData.phone)) {
            alert('Please enter a valid 10-digit phone number.');
            return;
        }

        submitBtn.disabled = true;
        submitBtn.innerText = 'Please wait...';

        try {
            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

            if (!csrfToken) {
                alert('CSRF token not found. Please add <meta name="csrf-token" content=\"{{ csrf_token() }}\"> in head.');
                submitBtn.disabled = false;
                submitBtn.innerText = 'Book demo on WhatsApp';
                return;
            }

            const response = await fetch(storeUrl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify(formData)
            });

            const rawText = await response.text();
            let result = {};

            try {
                result = JSON.parse(rawText);
            } catch (jsonError) {
                console.error('Non-JSON response from server:', rawText);
                alert('Server returned invalid response. Check Laravel route/controller/logs.');
                submitBtn.disabled = false;
                submitBtn.innerText = 'Book demo on WhatsApp';
                return;
            }

            if (!response.ok) {
                console.error('Laravel error response:', result);

                if (result.errors) {
                    const firstError = Object.values(result.errors)[0][0];
                    alert(firstError);
                } else {
                    alert(result.message || 'Something went wrong.');
                }

                submitBtn.disabled = false;
                submitBtn.innerText = 'Book demo on WhatsApp';
                return;
            }

            const whatsappMessage = `Hello, I want to book a demo class.

Name: ${formData.name}
Phone: +91 ${formData.phone}
Service: ${formData.service || '-'}
Subject: ${formData.subject || '-'}
Class: ${formData.child_class || '-'}
Preferred Time: ${formData.preferred_time || '-'}
Mode: ${formData.mode || '-'}
Location: ${formData.location || '-'}
Message: ${formData.message || '-'}`;

            const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(whatsappMessage)}`;
            window.open(whatsappUrl, '_blank');

            form.reset();
            if (subjectInput) subjectInput.value = 'Math';
            chips.forEach(c => c.classList.remove('nx-chip--active'));
            if (chips[0]) chips[0].classList.add('nx-chip--active');

            submitBtn.disabled = false;
            submitBtn.innerText = 'Book demo on WhatsApp';
        } catch (error) {
            console.error('Fetch error:', error);
            alert('Something went wrong. Please check console and Laravel logs.');
            submitBtn.disabled = false;
            submitBtn.innerText = 'Book demo on WhatsApp';
        }
    });
});
</script>
  <script>
  document.addEventListener('DOMContentLoaded', function () {
    var lastTrigger = null;

    function openModal(modal, trigger) {
      if (!modal) return;
      lastTrigger = trigger || null;
      modal.classList.add('is-active');
      modal.setAttribute('aria-hidden', 'false');
      document.body.classList.add('nxt-modal-open');
      var first = modal.querySelector('input, select, textarea, button:not([data-modal-close])');
      if (first) first.focus({ preventScroll: true });
    }

    function closeModal(modal) {
      if (!modal) return;
      modal.classList.remove('is-active');
      modal.setAttribute('aria-hidden', 'true');
      if (!document.querySelector('.nx-modal.is-active')) {
        document.body.classList.remove('nxt-modal-open');
      }
      if (lastTrigger) { lastTrigger.focus({ preventScroll: true }); lastTrigger = null; }
    }

    // open modal
    document.querySelectorAll('[data-modal-target]').forEach(function (btn) {
      btn.addEventListener('click', function (e) {
        e.preventDefault();
        openModal(document.getElementById(this.getAttribute('data-modal-target')), this);
      });
    });

    // close modal (click on backdrop or close button)
    document.querySelectorAll('[data-modal-close]').forEach(function (el) {
      el.addEventListener('click', function () {
        closeModal(this.closest('.nx-modal'));
      });
    });

    // ESC closes any open modal; Tab stays inside it
    document.addEventListener('keydown', function (e) {
      var open = document.querySelector('.nx-modal.is-active');
      if (!open) return;

      if (e.key === 'Escape') {
        document.querySelectorAll('.nx-modal.is-active').forEach(closeModal);
        return;
      }

      if (e.key !== 'Tab') return;
      var f = open.querySelectorAll('a[href], button, input, select, textarea, [tabindex]:not([tabindex="-1"])');
      f = Array.prototype.filter.call(f, function (el) { return !el.disabled && el.offsetParent !== null; });
      if (!f.length) return;
      var first = f[0], last = f[f.length - 1];
      if (e.shiftKey && document.activeElement === first) { e.preventDefault(); last.focus(); }
      else if (!e.shiftKey && document.activeElement === last) { e.preventDefault(); first.focus(); }
    });
  });
</script>
<script>
document.addEventListener("DOMContentLoaded", function () {
  const locationBtn = document.getElementById("locationBtn");
  const userLocation = document.getElementById("userLocation");
  const locationModal = document.getElementById("locationModal");
  const locationInput = document.getElementById("locationInput");
  const saveLocationBtn = document.getElementById("saveLocation");
  const detectLocationBtn = document.getElementById("detectLocation");
  const closeLocationModalBtn = document.getElementById("closeLocationModal");
  const cancelLocationBtn = document.getElementById("cancelLocation");
  const locationMapLink = document.getElementById("locationMapLink");
  const locationMapWrap = document.getElementById("locationMapWrap");
  const pickedLocationText = document.getElementById("pickedLocationText");

  let map = null;
  let marker = null;
  let pickedLocation = null;

  function getStoredLocation() {
    return {
      area: localStorage.getItem("nx_area") || "",
      city: localStorage.getItem("nx_city") || "",
      pin: localStorage.getItem("nx_pin") || "",
      lat: localStorage.getItem("nx_lat") || "",
      lon: localStorage.getItem("nx_lon") || ""
    };
  }

  function buildLocationText(area, city, pin) {
    const parts = [];
    if (area) parts.push(area);
    if (city) parts.push(city);
    let text = parts.join(", ");
    if (pin) text = text ? text + " - " + pin : pin;
    return text || "Set location";
  }

  function updateLocationButton(area, city, pin) {
    userLocation.textContent = buildLocationText(area, city, pin);
  }

  function saveLocationData(area, city, pin, lat, lon) {
    if (area) localStorage.setItem("nx_area", area); else localStorage.removeItem("nx_area");
    if (city) localStorage.setItem("nx_city", city); else localStorage.removeItem("nx_city");
    if (pin) localStorage.setItem("nx_pin", pin); else localStorage.removeItem("nx_pin");
    if (lat) localStorage.setItem("nx_lat", lat); else localStorage.removeItem("nx_lat");
    if (lon) localStorage.setItem("nx_lon", lon); else localStorage.removeItem("nx_lon");

    updateLocationButton(area, city, pin);
  }

  async function reverseGeocode(lat, lon) {
    const url =
      "https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=" +
      encodeURIComponent(lat) +
      "&lon=" +
      encodeURIComponent(lon) +
      "&addressdetails=1";

    const res = await fetch(url, { headers: { "Accept": "application/json" } });
    if (!res.ok) throw new Error("Reverse geocode failed");

    const data = await res.json();
    const addr = data.address || {};

    const area =
      addr.suburb ||
      addr.neighbourhood ||
      addr.residential ||
      addr.quarter ||
      addr.hamlet ||
      addr.road ||
      addr.city_district ||
      "";

    const city =
      addr.city ||
      addr.town ||
      addr.village ||
      addr.county ||
      addr.state_district ||
      "";

    const pin = addr.postcode || "";

    return {
      area,
      city,
      pin,
      lat: String(lat),
      lon: String(lon)
    };
  }

  async function getLocationFromPincode(pin) {
    const url =
      "https://nominatim.openstreetmap.org/search?format=jsonv2&country=India&postalcode=" +
      encodeURIComponent(pin) +
      "&limit=1&addressdetails=1";

    const res = await fetch(url, { headers: { "Accept": "application/json" } });
    if (!res.ok) throw new Error("Pincode lookup failed");

    const data = await res.json();
    if (!Array.isArray(data) || !data.length) return null;

    const item = data[0];
    const addr = item.address || {};

    const area =
      addr.suburb ||
      addr.neighbourhood ||
      addr.residential ||
      addr.quarter ||
      addr.hamlet ||
      addr.road ||
      addr.city_district ||
      "";

    const city =
      addr.city ||
      addr.town ||
      addr.village ||
      addr.county ||
      addr.state_district ||
      "";

    return {
      area,
      city,
      pin,
      lat: item.lat || "",
      lon: item.lon || ""
    };
  }

  async function getLocationFromText(query) {
    const url =
      "https://nominatim.openstreetmap.org/search?format=jsonv2&q=" +
      encodeURIComponent(query + ", India") +
      "&limit=1&addressdetails=1";

    const res = await fetch(url, { headers: { "Accept": "application/json" } });
    if (!res.ok) throw new Error("Text lookup failed");

    const data = await res.json();
    if (!Array.isArray(data) || !data.length) return null;

    const item = data[0];
    const addr = item.address || {};

    const area =
      addr.suburb ||
      addr.neighbourhood ||
      addr.residential ||
      addr.quarter ||
      addr.hamlet ||
      addr.road ||
      addr.city_district ||
      "";

    const city =
      addr.city ||
      addr.town ||
      addr.village ||
      addr.county ||
      addr.state_district ||
      "";

    return {
      area,
      city,
      pin: addr.postcode || "",
      lat: item.lat || "",
      lon: item.lon || ""
    };
  }

  function initMap(lat, lon) {
    const startLat = parseFloat(lat || 28.4595);
    const startLon = parseFloat(lon || 77.0266);

    if (!map) {
      map = L.map("locationMap").setView([startLat, startLon], 13);

      L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
        maxZoom: 19,
        attribution: "&copy; OpenStreetMap"
      }).addTo(map);

      map.on("click", async function (e) {
        const clickedLat = e.latlng.lat;
        const clickedLon = e.latlng.lng;

        if (!marker) {
          marker = L.marker([clickedLat, clickedLon]).addTo(map);
        } else {
          marker.setLatLng([clickedLat, clickedLon]);
        }

        pickedLocationText.textContent = "Fetching selected location...";
        pickedLocation = null;

        try {
          const result = await reverseGeocode(clickedLat, clickedLon);
          pickedLocation = result;
          pickedLocationText.textContent =
            "Selected: " + buildLocationText(result.area, result.city, result.pin);
          locationInput.value = buildLocationText(result.area, result.city, result.pin);
        } catch (err) {
          console.error(err);
          pickedLocationText.textContent = "Could not fetch location for selected point.";
        }
      });
    } else {
      map.setView([startLat, startLon], 13);
      setTimeout(function () {
        map.invalidateSize();
      }, 200);
    }

    if (marker) {
      map.removeLayer(marker);
      marker = null;
    }
  }

  function openMapPicker() {
    locationMapWrap.style.display = "block";
    const stored = getStoredLocation();
    initMap(stored.lat, stored.lon);
    setTimeout(function () {
      if (map) map.invalidateSize();
    }, 200);
  }

  function openLocationModal() {
    const stored = getStoredLocation();
    locationModal.style.display = "flex";
    locationInput.value = buildLocationText(stored.area, stored.city, stored.pin) === "Set location"
      ? ""
      : buildLocationText(stored.area, stored.city, stored.pin);
    pickedLocation = null;
    pickedLocationText.textContent = "";
    locationMapWrap.style.display = "none";
  }

  function closeLocationModal() {
    locationModal.style.display = "none";
  }

  // silent = background attempt (page load). Only a person pressing the
  // "Use Current Location" button earns feedback — a denied permission on
  // load must never interrupt the visit with a dialog.
  function detectAndSaveCurrentLocation(reloadPage, silent) {
    if (!navigator.geolocation) {
      if (!silent) alert("Geolocation is not supported by this browser.");
      return;
    }

    navigator.geolocation.getCurrentPosition(
      async function (pos) {
        try {
          const lat = pos.coords.latitude;
          const lon = pos.coords.longitude;
          const result = await reverseGeocode(lat, lon);

          saveLocationData(result.area, result.city, result.pin, result.lat, result.lon);
          closeLocationModal();

          if (reloadPage) location.reload();
        } catch (e) {
          console.error(e);
          if (!silent) alert("Could not detect location. Please type your area or pick it on the map.");
        }
      },
      function () {
        if (!silent) alert("Location access is blocked for this site. Type your area or pick it on the map instead.");
        // Header shows "Set location" so the visitor still has a way in.
        updateLocationButton("", "", "");
      },
      {
        timeout: 7000,
        maximumAge: 600000,
        enableHighAccuracy: true
      }
    );
  }

  async function saveManualLocation() {
    try {
      if (pickedLocation) {
        saveLocationData(
          pickedLocation.area || "",
          pickedLocation.city || "",
          pickedLocation.pin || "",
          pickedLocation.lat || "",
          pickedLocation.lon || ""
        );
        closeLocationModal();
        location.reload();
        return;
      }

      const value = (locationInput.value || "").trim();
      if (!value) {
        alert("Please enter area, city or pincode");
        return;
      }

      let result = null;

      if (/^\d{6}$/.test(value)) {
        result = await getLocationFromPincode(value);
      } else {
        result = await getLocationFromText(value);
      }

      if (!result) {
        alert("Location not found.");
        return;
      }

      saveLocationData(
        result.area || "",
        result.city || "",
        result.pin || "",
        result.lat || "",
        result.lon || ""
      );

      closeLocationModal();
      location.reload();
    } catch (e) {
      console.error(e);
      alert("Unable to save location.");
    }
  }

  const initial = getStoredLocation();
  updateLocationButton(initial.area, initial.city, initial.pin);

  if (!initial.area && !initial.city && !initial.pin) {
    detectAndSaveCurrentLocation(false, true);   // background: never alerts
  }

  locationBtn?.addEventListener("click", openLocationModal);
  closeLocationModalBtn?.addEventListener("click", closeLocationModal);
  cancelLocationBtn?.addEventListener("click", closeLocationModal);
  saveLocationBtn?.addEventListener("click", saveManualLocation);
  detectLocationBtn?.addEventListener("click", function () {
    detectAndSaveCurrentLocation(true);
  });
  locationMapLink?.addEventListener("click", function () {
    openMapPicker();
  });

  locationInput?.addEventListener("keydown", function (e) {
    if (e.key === "Enter") {
      e.preventDefault();
      saveManualLocation();
    }
  });

  locationModal?.addEventListener("click", function (e) {
    if (e.target === locationModal) {
      closeLocationModal();
    }
  });
});
</script>

</body>
</html>