<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    </head>
    <body>
<form action="{{ route('post') }}" method="POST">
    @csrf
    <div>
        <label for=""> Provinsi</label>
        <select name="provinsi" id="reg_provinces">
            <option value=""> --PILIH--</option>
        </select>
    </div>
    <div>
        <label for=""> Kabupaten</label>
        <select name="kabupaten" id="reg_regencies">
           <option value=""> --PILIH--</option>
        </select>
    </div>
    <div>
        <label for=""> Kecamatan</label>
        <select name="kecamatan" id="reg_districts">
            <option value=""> --PILIH--</option>
        </select>
    </div>
    <div>
        <label for=""> Desa</label>
        <select name="desa" id="reg_villages">
            <option value=""> --PILIH--</option>
        </select>
    </div>
    <button type="submit">Result</button>
</form>

        <script src="" async defer></script>
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
