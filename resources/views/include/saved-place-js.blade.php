@once
<script>
// The place the visitor saved on the site (header location or geolocation:
// nx_city / nx_area), merged under a page's own context. The page's place
// wins; the saved area is used under the page's city only when it is the
// same city. Values the server would reject are dropped, never sent.
window.nxSavedPlace = function (page) {
  var out = Object.assign({}, page || {});
  var pick = function (key, re, max) {
    try {
      var v = String(localStorage.getItem(key) || '').replace(/\s+/g, ' ').trim();
      return v.length <= max && re.test(v) ? v : '';
    } catch (e) { return ''; }
  };
  var norm = function (c) {
    return String(c || '').toLowerCase().trim().replace(/^gurgaon$/, 'gurugram').replace(/^bangalore$/, 'bengaluru').replace(/^new delhi$/, 'delhi');
  };
  var city = pick('nx_city', /^[\p{L}\p{N} .,()&'-]+$/u, 60);
  var area = pick('nx_area', /^[\p{L}\p{N} .,()&'\/-]+$/u, 100);
  if (area && norm(area) === norm(city)) area = '';

  if (!out.city && !out.area && (city || area)) {
    if (city) out.city = city;
    if (area) out.area = area;
    out.location_source = 'visitor';
  } else if (out.city && !out.area && city && area && norm(out.city) === norm(city)) {
    out.area = area;
    out.location_source = 'visitor';
  }

  return out;
};
</script>
@endonce
