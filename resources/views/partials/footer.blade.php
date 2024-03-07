<footer
    class="footer d-flex flex-column flex-md-row align-items-center justify-content-between px-4 py-3 border-top small">
    <p class="text-muted mb-1 mb-md-0">Copyright © 2022 <a href="https://www.nobleui.com" target="_blank">NobleUI</a>.
    </p>
    <p class="text-muted">Handcrafted With <i class="mb-1 text-primary ms-1 icon-sm" data-feather="heart"></i></p>
</footer>
<!-- partial -->

</div>
</div>

<!-- core:js -->
<script src="assets/vendors/core/core.js"></script>
<!-- endinject -->

<!-- Plugin js for this page -->
<script src="assets/vendors/flatpickr/flatpickr.min.js"></script>
<script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
<!-- End plugin js for this page -->

<!-- inject:js -->
<script src="assets/vendors/feather-icons/feather.min.js"></script>
<script src="assets/js/template.js"></script>
<!-- endinject -->

<!-- Custom js for this page -->
<script src="assets/js/dashboard-light.js"></script>
<!-- End custom js for this page -->

<script src="assets/mendagri.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      // Get provinces
      $.ajax({
        url: '/api/provinces',
        success: function(provinces) {
          $.each(provinces, function(name, id) {

            $('#reg_provinces').append('<option value="' + id + '">' + name + '</option>');
          });
        }
      });

      // On province change, get regencies
      $('#reg_provinces').on('change', function() {
        var provinceId = $(this).val();
        if (provinceId) {
          $.ajax({
            url: '/api/regencies/' + provinceId,
            success: function(regencies) {
              $('#reg_regencies').empty();
              $('#reg_regencies').append('<option value="">--Pilih--</option>');
              $.each(regencies, function(name, id) {
                $('#reg_regencies').append('<option value="' + id + '">' + name + '</option>');
              });
            }
          });
        } else {
          $('#reg_regencies').empty();
          $('#reg_districts').empty();
          $('#reg_villages').empty();
        }
      });

      // On regency change, get districts
      $('#reg_regencies').on('change', function() {
        var regencyId = $(this).val();
        if (regencyId) {
          $.ajax({
            url: '/api/districts/' + regencyId,
            success: function(districts) {
              $('#reg_districts').empty();
              $('#reg_districts').append('<option value="">--Pilih--</option>');
              $.each(districts, function(name, id) {
                $('#reg_districts').append('<option value="' + id + '">' + name + '</option>');
              });
            }
          });
        } else {
          $('#reg_districts').empty();
          $('#reg_villages').empty();
        }
      });

      // On district change, get villages
      $('#reg_districts').on('change', function() {
        var districtId = $(this).val();
        if (districtId) {
          $.ajax({
            url: '/api/villages/' + districtId,
            success: function(villages) {
              $('#reg_villages').empty();
              $('#reg_villages').append('<option value="">--Pilih--</option>');
              $.each(villages, function(name, id) {
                $('#reg_villages').append('<option value="' + id + '">' + name + '</option>');
              });
            }
          });
        } else {
          $('#reg_villages').empty();
        }
      });
    });

            </script>

</body>

</html>
