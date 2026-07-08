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
  <div class="footer-bg"></div>

  <div class="footer-content">
    <!-- Col 1 -->
    <div class="footer-col">
      <h3 class="footer-logo">NXTutors</h3>
      <p class="footer-desc">
        Premium home tutoring in Gurugram.  
        Trusted by 4,500+ parents for CBSE, ICSE &amp; IB.
      </p>

      <div class="footer-social">
        <a href="#"><img src="{{ asset('public/frount/assets') }}/images/facebook.svg" alt="Facebook" /></a>
        <a href="#"><img src="{{ asset('public/frount/assets') }}/images/instagram.svg" alt="Instagram" /></a>
        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $setting->phone);}}"><img src="{{ asset('public/frount/assets') }}/images/whatsapp.svg" alt="WhatsApp" /></a>
      </div>
    </div>

    <!-- Col 2 -->
    <div class="footer-col">
      <h4>Quick Links</h4>
      <ul>
        <li><a href="{{ url('/')}}">Home</a></li>
        <li><a href="{{ url('/')}}/tutors">Find Tutors</a></li>
        <li><a href="#">Become a Tutor</a></li>
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
        <li>📍{{ $setting->address }}</li>
        <li>📞  {{ $setting->phone }}</li>
        <li>✉️ {{ $setting->email }}</li>
      </ul>

      <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $setting->phone);}}" class="btn-footer">
        Chat on WhatsApp
      </a>
    </div>
  </div>

  <div class="footer-bottom">
    <span>© <span id="year"></span> NXTutors — All rights reserved.</span>
  </div>
</footer>



  <script src="{{ asset('public/frount/assets') }}/js/main.js"></script>

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
    // open modal
    document.querySelectorAll('[data-modal-target]').forEach(function (btn) {
      btn.addEventListener('click', function (e) {
        e.preventDefault();
        var id = this.getAttribute('data-modal-target');
        var modal = document.getElementById(id);
        if (modal) modal.classList.add('is-active');
      });
    });

    // close modal (click on backdrop or close button)
    document.querySelectorAll('[data-modal-close]').forEach(function (el) {
      el.addEventListener('click', function () {
        var modal = this.closest('.nx-modal');
        if (modal) modal.classList.remove('is-active');
      });
    });

    // ESC closes any open modal
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape') {
        document.querySelectorAll('.nx-modal.is-active').forEach(function (m) {
          m.classList.remove('is-active');
        });
      }
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

  function detectAndSaveCurrentLocation(reloadPage) {
    if (!navigator.geolocation) {
      alert("Geolocation not supported.");
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
          alert("Could not detect location.");
        }
      },
      function () {
        alert("Location permission denied.");
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
    detectAndSaveCurrentLocation(false);
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