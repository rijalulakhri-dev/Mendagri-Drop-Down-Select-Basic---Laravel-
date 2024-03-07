@extends('layout')
@section('content')
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Forms</a></li>
            <li class="breadcrumb-item active" aria-current="page">Basic Elements</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">{{ $cardTitle }}</h6>
                    @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                    <form action="{{ route('simpan_pasien') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="form-label">Nomor MR <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" placeholder="Nomor MR" name="nomor_mr">
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="form-label">Nama <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Nama" name="nama_pasien" value="{{ old('nama_pasien') }}">
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="form-label">Nomor KTP <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" placeholder="Nomor KTP" name="nomor_ktp" value="{{ old('nomor_ktp') }}">
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="form-label">Tanggal Lahir <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tgl_lahir" value={{ old('tgl_lahir') }}>
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="form-label">Tempat Lahir <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" value={{ old('tempat_lahir') }}>
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin <span class="text-danger">*</span></label>
                                    <select class="form-select" name="jenis_kelamin" value={{ old('jenis_kelamin') }}>
                                        <option selected disabled>--Pilih--</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>

                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                    <select class="form-select" name="pekerjaan">
                                        <option selected disabled>--Pilih--</option>
                                        @foreach(['Tidak Bekerja', 'Mahasiswa', 'Pelajar', 'Pegawai/Karyawan Lainnya', 'TNI/Polisi', 'Wiraswasta/Pengusaha',
                                                 'Profesional', 'Petani', 'Buruh', 'Guru', 'Pegawai BUMN', 'Pegawai Swasta', 'Pengusaha Tani',
                                                 'Nelayan', 'Pengusaha Nelayan', 'Konsultan/Kontraktor', 'Pedagang/Pengusaha Besar',
                                                 'Pedagang/Pengusaha Kecil', 'Dosen', 'Pensiunan', 'Tidak Ada', 'PNS', 'Ibu Rumah Tangga', 'Swasta'] as $pekerjaan)
                                        <option value="{{ $pekerjaan }}">{{ $pekerjaan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label for="golongan" class="form-label">Golongan (Khusus PNS)</label>
                                    <select class="form-select" name="golongan">
                                        <option selected disabled>--Pilih--</option>
                                        @foreach (['Tidak Ada', 'Golongan I', 'Golongan II', 'Golongan III', 'Golongan IV'] as $golongan)
                                        <option value="{{ $golongan }}">{{ $golongan }}</option>

                                        @endforeach
                                    </select>
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="form-label">Nomor HP</label>
                                    <input type="number" class="form-control" placeholder="Nomor HP" name="nomor_hp" value={{ old('nomor_hp') }}>
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label for="" class="form-label">Provinsi</label>
                                    <select class="form-select" name="provinsi" id="reg_provinces">
                                        <option selected disabled>--Pilih--</option>
                                        <option>Tidak Ada</option>

                                    </select>
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label for="" class="form-label">Kabupaten</label>
                                    <select class="form-select" name="kabupaten" id="reg_regencies">
                                        <option selected disabled>--Pilih--</option>
                                    </select>
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-4">
                                <label for="" class="form-label">Kecamatan</label>
                                <select class="form-select" name="kecamatan" id="reg_districts">
                                    <option selected disabled>--Pilih--</option>
                                </select>
                            </div><!-- Col -->
                        </div><!-- Row -->
                        <div class="row">
                            <div class="col-md-4">
                                <label for="" class="form-label">Desa</label>
                                <select class="form-select" name="desa" id="reg_villages">
                                    <option selected disabled>--Pilih--</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="form-label">Alamat</label>
                                    <input type="text" class="form-control" placeholder="Alamat" value={{ old('Alamat') }}>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary submit">Submit form</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection


{{-- <script>
    function updateKabupaten() {
        var provinsiSelect = document.getElementById("provinsi");
        var kabupatenSelect = document.getElementById("kabupaten");

        // Bersihkan daftar kabupaten saat memilih provinsi baru
        kabupatenSelect.innerHTML = "<option selected disabled>--Pilih--</option>";

        // Daftar kabupaten sesuai dengan provinsi yang dipilih
        var provinsi = provinsiSelect.value;

        switch (provinsi) {
            case "aceh":
            addKabupaten(["Aceh Barat", "Aceh Barat Daya", "Aceh Besar", "Aceh Jaya", "Aceh Selatan", "Aceh Singkil", "Aceh Tamiang", "Aceh Tengah", "Aceh Tenggara", "Aceh Timur", "Aceh Utara", "Bener Meriah", "Bireuen", "Gayo Lues", "Nagan Raya", "Pidie", "Pidie Jaya", "Simeulue"]);
            break;
            case "sumatera-utara":
                addKabupaten(["Asahan", "Batu Bara", "Deli Serdang", /*Tambahkan kabupaten lainnya*/]);
                break;
            // Tambahkan case untuk provinsi lainnya sesuai kebutuhan
        }
    }

    function addKabupaten(kabupatenList) {
        var kabupatenSelect = document.getElementById("kabupaten");

        // Tambahkan opsi kabupaten ke dalam dropdown
        kabupatenList.forEach(function(kabupaten) {
            var option = document.createElement("option");
            option.text = kabupaten;
            kabupatenSelect.add(option);
        });
    }
</script> --}}







