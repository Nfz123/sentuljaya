@extends('layouts.siode.app')
@section('title', 'Kartu Keluarga')
@section('content')

    <div class="card card-dark card-outline rounded-0">
        <form method="POST" action="{!! route('siode.kependudukan.kepala-keluarga.update', $kartukeluargaanggota->id) !!}" enctype="multipart/form-data" autocomplete="off">
            @csrf
            @method('PUT')
            {{--  <input type="text" name="memberid" value="{{ $kartukeluargaanggota->id }}">  --}}
            <input type="hidden" name="famillyid" value="{{ $kartukeluargaanggota->no_kk }}">
            <div class="card-header">
                <div class="card-title">
                    <strong>EDIT DATA KEPALA KELUARGA</strong>
                </div>
            </div>
            <div class="card-body text-sm">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">No Kartu Keluarga</label>
                            <input type="number" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" name="no_kk" id="no_kk"
                                value="{{ $kartukeluargaanggota->kartukeluarga->no_kk }}" required>
                        </div>
                    </div>
                </div>
                <div class="bg-gray mt-2 mb-2 py-2 px-2">
                    <h6 class="mb-0">
                        <strong>ALAMAT KARTU KELUARGA :</strong>
                    </h6>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Provinsi</label>
                            <select class="form-control select2 rounded-0" style="text-transform:uppercase"
                                style="width: 100%;" name="provinsi" id="province" required>
                                <option value="" hidden>Pilih Provinsi</option>
                                @foreach ($provinces as $id => $name)
                                    <option value="{{ $id }}">{{ $name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Kabupaten / Kota</label>
                            <select class="form-control select2 rounded-0" style="text-transform:uppercase"
                                style="width: 100%;" name="kabkot" id="city" required>
                                <option value="" hidden>Pilih Kab/Kota</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Kecamatan</label>
                            <select class="form-control select2 rounded-0" style="text-transform:uppercase"
                                style="width: 100%;" name="kecamatan" id="district" required>
                                <option value="" hidden>Pilih Kab/Kota</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Desa</label>
                            <select class="form-control select2 rounded-0" style="text-transform:uppercase"
                                style="width: 100%;" name="desa" id="village" required>
                                <option value="" hidden>Pilih Kab/Kota</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 mb-0">
                        <div class="form-group">
                            <label for="">Dusun / Kampung</label>
                            <input type="text" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" name="kp" id=""
                                value="{{ $kartukeluargaanggota->kartukeluarga->kp }}" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Rt</label>
                                    <select name="rt" class="form-select form-control form-control-sm rounded-0"
                                        style="text-transform:uppercase" name="rt" required>
                                        @foreach ($rtrw->whereNotNull('rt')->pluck('rt') as $id => $nama)
                                            <option value="{!! $nama !!}" {!! $nama == $kartukeluargaanggota->kartukeluarga->rt ? 'selected' : '' !!}>
                                                {!! $nama !!}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Rw</label>
                                    <select name="rw" class="form-select form-control form-control-sm rounded-0"
                                        style="text-transform:uppercase" name="rw" required>
                                        @foreach ($rtrw->whereNotNull('rw')->pluck('rw') as $id => $nama)
                                            <option value="{!! $nama !!}" {!! $nama == $kartukeluargaanggota->kartukeluarga->rw ? 'selected' : '' !!}>
                                                {!! $nama !!}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">

                        <div class="form-group">
                            <label for="">Kode Pos</label>
                            <input type="number" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" name="kodepos" id="" required
                                value="{{ $kartukeluargaanggota->kartukeluarga->kodepos }}">
                        </div>
                    </div>
                </div>
                <div class="bg-gray mt-2 mb-2 py-2 px-2">
                    <h6 class="mb-0">
                        <strong>IDENTITAS KEPALA KELUARGA :</strong>
                    </h6>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">No Induk Keluarga (NIK)</label>
                            <input type="number" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" name="no_nik" id="no_nik"
                                value="{{ $kartukeluargaanggota->no_nik }}" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" name="nama" id=""
                                value="{{ $kartukeluargaanggota->nama }}" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <select class="form-control select2 rounded-0" style="text-transform:uppercase"
                                style="width: 100%;" name="jenkel" id="" required>
                                <option value="" hidden>Pilih Jenis Kelamin</option>
                                @foreach ($jeniskelamin as $id => $nama)
                                    <option value="{!! $id !!}" {!! $id == $kartukeluargaanggota->jenkel ? 'selected' : '' !!}>
                                        {!! $nama !!}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" name="tmpt_lahir" id=""
                                value="{{ $kartukeluargaanggota->tmpt_lahir }}" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" name="tgl_lahir" id=""
                                value="{{ $kartukeluargaanggota->tgl_lahir }}" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Agama</label>
                            <select class="form-control select2 rounded-0" style="text-transform:uppercase"
                                style="width: 100%;" name="agama" id="" required>
                                <option value="" hidden>Pilih Agama</option>
                                @foreach ($agama as $id => $nama)
                                    <option value="{!! $id !!}" {!! $id == $kartukeluargaanggota->agama ? 'selected' : '' !!}>
                                        {!! $nama !!}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Pendidikan</label>
                            <select class="form-control select2 rounded-0" style="text-transform:uppercase"
                                style="width: 100%;" name="pendidikan" id=""required>
                                <option value="" hidden>Pilih Pendidikan</option>
                                @foreach ($pendidikankeluarga as $id => $nama)
                                    <option value="{!! $id !!}" {!! $id == $kartukeluargaanggota->pendidikan ? 'selected' : '' !!}>
                                        {!! $nama !!}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Jenis Pekerjaan</label>
                            <select class="form-control select2 rounded-0" style="text-transform:uppercase"
                                style="width: 100%;" name="jns_pekerjaan" id="" required>
                                <option value="" hidden>Pilih Pekerjaan</option>
                                @foreach ($pekerjaan as $id => $nama)
                                    <option value="{!! $id !!}" {!! $id == $kartukeluargaanggota->jns_pekerjaan ? 'selected' : '' !!}>
                                        {!! $nama !!}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Golongan Darah</label>
                            <select class="form-control select2 rounded-0" style="text-transform:uppercase"
                                style="width: 100%;" name="gol_darah" id="" required>
                                <option value="" hidden>Pilih Gol. Darah</option>
                                @foreach ($goldarah as $id => $nama)
                                    <option value="{!! $id !!}" {!! $id == $kartukeluargaanggota->gol_darah ? 'selected' : '' !!}>
                                        {!! $nama !!}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="bg-gray mt-2 mb-2 py-2 px-2">
                    <h6 class="mb-0">
                        <strong>STATUS PERKAWINAN :</strong>
                    </h6>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Status Perkawinan</label>
                            <select class="form-control select2 rounded-0" style="text-transform:uppercase"
                                style="width: 100%;" name="sts_perkawinan" id="" required>
                                <option value="" hidden>Pilih Status Perkawinan</option>
                                @foreach ($pernikahan as $id => $nama)
                                    <option value="{!! $id !!}" {!! $id == $kartukeluargaanggota->sts_perkawinan ? 'selected' : '' !!}>
                                        {!! $nama !!}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Tanggal Perkawinan</label>
                            <input type="date" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" name="tgl_perkawinan"
                                value="{{ $kartukeluargaanggota->tgl_perkawinan }}" id="tgl_perkawinan">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Hubungan Dalam Keluarga</label>
                            <select class="form-control select2 rounded-0" style="text-transform:uppercase"
                                style="width: 100%;" name="sts_hub_kel" id="" required>
                                <option value="1" selected>KEPALA KELUARGA</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="bg-gray mt-2 mb-2 py-2 px-2">
                    <h6 class="mb-0">
                        <strong>KEWARGANEGARAAN :</strong>
                    </h6>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Kewarganegaraan</label>
                            <select class="form-control select2 rounded-0" style="text-transform:uppercase"
                                style="width: 100%;" name="sts_kwn" id="sts_kawin" required>
                                <option value="" hidden>Pilih Kewarganegaraan</option>
                                @foreach ($kewarganegaraan as $id => $nama)
                                    <option value="{!! $id !!}" {!! $id == $kartukeluargaanggota->sts_kwn ? 'selected' : '' !!}>
                                        {!! $nama !!}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">No Paspor</label>
                            <input type="number" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" value="{{ $kartukeluargaanggota->no_paspor }}"
                                name="no_paspor" id="no_paspor">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">No Kitap</label>
                            <input type="number" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" value="{{ $kartukeluargaanggota->no_kitap }}"
                                name="no_kitap" id="no_kitap">
                        </div>
                    </div>
                </div>
                <div class="bg-gray mt-2 mb-2 py-2 px-2">
                    <h6 class="mb-0">
                        <strong>ORANG TUA :</strong>
                    </h6>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">No Induk Keluarga (NIK) Ayah</label>
                            <input type="number" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" value="{{ $kartukeluargaanggota->nik_ayah }}"
                                name="nik_ayah" id="nik_ayah" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Nama Ayah</label>
                            <input type="text" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" value="{{ $kartukeluargaanggota->nm_ayah }}"
                                name="nm_ayah" id="" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">No Induk Keluarga (NIK) Ibu</label>
                            <input type="number" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" value="{{ $kartukeluargaanggota->nik_ibu }}"
                                name="nik_ibu" id="nik_ibu" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Nama ibu</label>
                            <input type="text" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" value="{{ $kartukeluargaanggota->nm_ibu }}"
                                name="nm_ibu" id="" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="col-6">
                    <a style="margin-top:0px;" class="btn bg-gradient-secondary btn-sm rounded-0"
                        style="text-transform:uppercase" href="#">
                        {{ trans('Cancel') }}
                    </a>
                    <input type="submit" value="Submit" class="btn bg-gradient-primary rounded-0 btn-sm">
                </div>
            </div>
        </form>
    </div>

@endsection

@push('styles')
    <link rel="stylesheet" href="{!! URL::asset('assets/dist/plugins/select2/css/select2.min.css') !!}">
    <link rel="stylesheet" href="{!! URL::asset('assets/dist/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') !!}">
@endpush

@push('scripts')
    <script src="{!! URL::asset('assets/dist/plugins/select2/js/select2.full.min.js') !!}"></script>
    <script src="{!! URL::asset('assets/dist/plugins/axios/axios.min.js') !!}"></script>
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })


            // Depent dropdown
            $('#province').on('change', function() {
                axios.post('{{ route('dependent-dropdown.store.city') }}', {
                        id: $(this).val()
                    })
                    .then(function(response) {
                        $('#city').empty();

                        $.each(response.data, function(id, name) {
                            $('#city').append(new Option(name, id))
                        })
                    });
            });
            $('#city').on('change', function() {
                axios.post('{{ route('dependent-dropdown.store.district') }}', {
                        id: $(this).val()
                    })
                    .then(function(response) {
                        $('#district').empty();

                        $.each(response.data, function(id, name) {
                            $('#district').append(new Option(name, id))
                        })
                    });
            });
            $('#district').on('change', function() {
                axios.post('{{ route('dependent-dropdown.store.village') }}', {
                        id: $(this).val()
                    })
                    .then(function(response) {
                        $('#village').empty();

                        $.each(response.data, function(id, name) {
                            $('#village').append(new Option(name, id))
                        })
                    });
            });
            // end depentdropdown
        })
    </script>
@endpush