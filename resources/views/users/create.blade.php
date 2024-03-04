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
        <h1> Sample Users Form</h1>
       @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <li>{{ session('success') }}</li>
        @endif
        <form action="{{ route('users.store') }}" method="POST" >
    @csrf
    <div>
        <label for="">Nama Depan</label>
        <input type="text" name="first_name" value="{{ old('first_name') }}">
    </div>
    <div>
        <label for="">Nama Belakang</label>
        <input type="text" name="last_name" value="{{ old('last_name') }}">
    </div>
    <div>
        <label for="">Jenis Kelamin</label>
        <select name="gender" id="">
            <option default>--PILIH--</option>
            <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Laki-Laki</option>
            <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Perempuan</option>
        </select>
    </div>

    <div>
        <label for="">Tempat Lahir</label>
        <input type="text" name="birth_place" value="{{ old('birth_place') }}">
    </div>
    <div>
        <label for="">Tanggal Lahir</label>
        <input type="date" name="date_of_birth" value="{{ old('date_of_birth') }}">
    </div>
    <div>
        <label for="">Nomor Hp</label>
        <input type="text" name="phone_number" value="{{ old('phone_number') }}">
    </div>
    <div>
        <label for="">Pekerjaan</label>
        <input type="text" name="occupation" value="{{ old('occupation') }}">
    </div>
    <div>
        <label for="">Alamat Tinggal</label>
        <input type="text" name="address" value="{{ old('address') }}">
    </div>
    <div>
        <label for="">Nomor Induk Kependudukan (NIK)</label>
        <input type="text" name="nik_number" value="{{ old('nik_number') }}">
    </div>
    <div>
        <label for="">Nomor Kartu Keluarga (KK)</label>
        <input type="text" name="kk_number" value="{{ old('kk_number') }}">
    </div>
    <div>
        <label for=""> Provinsi</label>
        <select name="province_id" id="reg_provinces">
            <option value=""> --PILIH--</option>
        </select>
    </div>
    <div>
        <label for=""> Kabupaten</label>
        <select name="regency_id" id="reg_regencies">
           <option value=""> --PILIH--</option>
        </select>
    </div>
    <div>
        <label for=""> Kecamatan</label>
        <select name="district_id" id="reg_districts">
            <option value=""> --PILIH--</option>
        </select>
    </div>
    <div>
        <label for=""> Desa</label>
        <select name="village_id" id="reg_villages">
            <option value=""> --PILIH--</option>
        </select>
    </div>
    <button type="submit">Store Data</button>
</form>

        <script src="" async defer></script>
<script src="mendagri.js"></script>

    {{-- <script>
    $(document).ready(function() {
        const selectedProvince = localStorage.getItem('selectedProvince');
        const selectedRegency = localStorage.getItem('selectedRegency');
        const selectedDistrict = localStorage.getItem('selectedDistrict');
        const selectedVillage = localStorage.getItem('selectedVillage');

        $('#reg_provinces').val(selectedProvince).change(); // Tambahkan .change()
        $('#reg_regencies').val(selectedRegency).change();
        $('#reg_districts').val(selectedDistrict).change();
        $('#reg_villages').val(selectedVillage).change();
    });
    </script> --}}

    </body>
</html>
