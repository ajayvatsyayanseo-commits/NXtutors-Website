@extends('super.layouts.app')
@section('title','Create Teacher')

@section('content')  

<h3 class="mb-3">Generate Teacher (AI + SEO Reviews)</h3>

@if(session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif
@if(session('error'))
  <div class="alert alert-danger">{{ session('error') }}</div>
@endif
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

@if($errors->any())
  <div class="alert alert-danger">
    <ul class="mb-0">
      @foreach($errors->all() as $err)
        <li>{{ $err }}</li>
      @endforeach
    </ul>
  </div>
@endif


<form method="POST" action="{{ route('super.teacher.generate.store') }}">
  @csrf

  <div class="row">
    <div class="col-md-4 mb-3">
      <label>Pincode</label>
      <input type="text" name="pincode" id="pincode" class="form-control" required>
    </div>

    <div class="col-md-4 mb-3">
      <label>Select Area</label>
      <select id="areaDropdown" class="form-control" style="width:100%; display:none;"></select>

      {{-- Selected area store here --}}
      <input type="hidden" name="area" id="area" />
    </div>

    <div class="col-md-4 mb-3">
      <label>City (Auto)</label>
      <input type="text" name="city" id="city" class="form-control" readonly>
    </div>

    <div class="col-md-4 mb-3">
      <label>District (Auto)</label>
      <input type="text" name="district" id="district" class="form-control" readonly>
    </div>

    <div class="col-md-4 mb-3">
      <label>State (Auto)</label>
      <input type="text" name="state" id="state" class="form-control" readonly>
    </div>

    <div class="col-md-4 mb-3">
      <label>For Class</label>
      <input type="text" name="for_class" class="form-control" placeholder="6-10 / 11-12" required>
    </div>

    <div class="col-md-4 mb-3">
      <label>Class Type</label>
      <select class="form-control" name="class_type" required>
        <option value="Home">Home</option>
        <option value="Online">Online</option>
        <option value="Institute">Institute</option>
      </select>
    </div>
  </div>

  <hr>

  <div class="mb-3">
    <label>Subjects (multiple)</label>
    <div id="subjectsWrap">
      <input class="form-control mb-2" name="subjects[]" placeholder="Maths" required>
    </div>
    <button type="button" class="btn btn-sm btn-secondary" onclick="addSubject()">+ Add Subject</button>
  </div>

  <div class="mb-3">
    <label>Boards (multiple)</label>
    <div id="boardsWrap">
      <input class="form-control mb-2" name="boards[]" placeholder="CBSE" required>
    </div>
    <button type="button" class="btn btn-sm btn-secondary" onclick="addBoard()">+ Add Board</button>
  </div>

  <button class="btn btn-primary">Generate & Add Teacher</button>
</form>

<script>
function addSubject() {
  const wrap = document.getElementById('subjectsWrap');
  const input = document.createElement('input');
  input.name = "subjects[]";
  input.className = "form-control mb-2";
  input.placeholder = "Science / English / SST";
  wrap.appendChild(input);
}
function addBoard() {
  const wrap = document.getElementById('boardsWrap');
  const input = document.createElement('input');
  input.name = "boards[]";
  input.className = "form-control mb-2";
  input.placeholder = "ICSE / State Board";
  wrap.appendChild(input);
}
</script>

{{-- ✅ Your same PINCODE JS (admin page) --}}
<script>
$(document).ready(function () {
  let timer;

  $('#pincode').on('input', function () {
    const pincode = $(this).val().trim();
    clearTimeout(timer);

    if ($.isNumeric(pincode)) {
      timer = setTimeout(function () {
        $.ajax({
          url: "{{ url('/') }}/get-pincode-details",
          method: "POST",
          data: { pincode: pincode },
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          success: function (response) {
            if (response && response.data && Array.isArray(response.data.all_offices) && response.data.all_offices.length > 0) {

              const areas = response.data.all_offices.map(function(data) {
                return `<option value="${data.post_office}"
                          data-state="${data.state}"
                          data-district="${data.district}">
                          ${data.pincode} (${data.post_office})
                        </option>`;
              });

              $('#areaDropdown').html(areas.join('')).show().select2({
                placeholder: 'Select Area',
                allowClear: true
              });

              // Autofill from first result
              $('#state').val(response.data.all_offices[0].state || '');
              $('#district').val(response.data.all_offices[0].district || '');

              // Clear city/area until selection
              $('#city').val('');
              $('#area').val('');

            } else {
              $('#state, #district, #city, #area').val('');
              $('#areaDropdown').html('').hide();
            }
          },
          error: function () {
            $('#state, #district, #city, #area').val('');
            $('#areaDropdown').html('').hide();
          }
        });
      }, 500);
    } else {
      $('#state, #district, #city, #area').val('');
      $('#areaDropdown').html('').hide();
    }
  });

  $('#areaDropdown').on('change', function () {
    const selectedArea = $(this).val();
    const state = $('#areaDropdown option:selected').data('state') || '';
    const district = $('#areaDropdown option:selected').data('district') || '';

    $('#city').val(selectedArea || '');
    $('#area').val(selectedArea || '');
    $('#state').val(state);
    $('#district').val(district);
  });
});
</script>

@endsection