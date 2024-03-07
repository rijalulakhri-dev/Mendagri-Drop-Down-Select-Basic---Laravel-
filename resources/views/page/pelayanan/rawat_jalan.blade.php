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
                    <form>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="form-label">Nomor MR</label>
                                    <input type="text" class="form-control" placeholder="Nomor MR">
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="form-label">Nama </label>
                                    <input type="text" class="form-control" placeholder="Nama">
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="form-label">Tanggal Masuk/SEP</label>
                                    <input type="date" class="form-control" placeholder="tanggal_masuk_sep">
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label for="cara_masuk" class="form-label">Cara Masuk</label>
                                    <select class="form-select" id="cara_masuk">
                                        <option selected disabled>--Pilih--</option>
                                        <option>Asuransi</option>
                                        <option>Umum</option>
                                    </select>
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label for="jaminan" class="form-label">Jaminan </label>
                                    <select class="form-select" id="jaminan">
                                        <option selected disabled>--Pilih--</option>
                                        <option>JKN</option>
                                        <option>Sinarmas</option>
                                        <option>Jasa Raharja</option>
                                        <option>Sultan's Insurance</option>
                                        <option>Asuransi Anak Sultan</option>
                                    </select>
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label for="nomor_jaminan" class="form-label">Nomor Jaminan</label>
                                    <input type="text" class="form-control" placeholder="Nomor Jaminan">


                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label for="tenaga_medis" class="form-label">Tenaga Medis</label>
                                    <select class="form-select" id="tenaga_medis">
                                        <option selected disabled>--Pilih--</option>
                                        <option>Tenaga Medis 1102</option>
                                        <option>Tenaga Medis 1103</option>
                                        <option>Tenaga Medis 1104</option>
                                        <option>Tenaga Medis 1105</option>
                                    </select>
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label for="diagnosa_masuk" class="form-label">Diagnosa Masuk</label>
                                    <input type="text" class="form-control" placeholder="Diagnosa Masuk">

                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="form-label">Poli Tujuan</label>
                                    <select class="form-select" id="poli_tujuan">
                                        <option selected disabled>--Pilih--</option>
                                        <option>Dalam </option>
                                        <option>Anak </option>
                                        <option>Jantung </option>
                                        <option>Obgyn </option>
                                        <option>Bedah </option>
                                        <option>Saraf </option>
                                        <option>Umum </option>
                                        <option>Gigi </option>
                                        <option>Medical Checkup </option>
                                        <option>Paru </option>
                                        <option>Radiologi </option>
                                        <option>Laboratorium </option>
                                        <option>Mata </option>
                                        <option>Jiwa </option>
                                        <option>Kulit dan Kelamin </option>
                                        <option>THT </option>
                                        <option>Hemodialisa </option>
                                        <option>Urologi </option>
                                    </select>
                                </div>
                            </div><!-- Col -->
                        </div>
                    </form>
                    <button type="button" class="btn btn-primary submit">Submit form</button>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection








