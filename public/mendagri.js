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
