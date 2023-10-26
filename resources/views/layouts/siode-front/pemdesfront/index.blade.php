@extends('layouts.siode-front.app-master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <P>PEMERINTAH DESA</P>
            </h3>
            {{-- <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 250px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div> --}}
        </div>
        <div class="card-body">
            <div class="container">
                {{-- <h1 class="mt-5">Struktur Organisasi KARANG TARUNA DESA</h1> --}}
                <div class="row mt-4">
                    {{-- <div class="col-md-4 mx-auto">
                        <div class="card">
                            <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                                height="150px">
                            <div class="card-body">
                                <h5 class="card-title">Ketua</h5>
                                <p class="card-text">Nama: John Doe</p>
                                <p class="card-text">Alamat: Jalan Contoh No. 123</p>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-md-4 mx-auto">
                        <div class="info-box bg-warning">
                            <span class="info-box-icon">
                                {{-- <i class="far fa-bookmark"></i> --}}
                                <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                                    height="100px">
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">Kepala Desa</span>
                                <span class="info-box-number">MUHAMAD SUKRON</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                </div>
                                <span class="progress-description">
                                    Periode 2020-2025
                                </span>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4  mx-auto">
                    {{-- <div class="card mb-4">
                        <img src="path-to-your-image.jpg" class="card-img-top" alt="Foto Sekretaris">
                        <div class="card-body">
                            <h5 class="card-title">Sekretaris</h5>
                            <p class="card-text">Nama: John Doe</p>
                            <p class="card-text">Alamat: Jalan Contoh No. 123</p>
                        </div>
                    </div> --}}
                    <div class="info-box bg-warning">
                        <span class="info-box-icon">
                            {{-- <i class="far fa-bookmark"></i> --}}
                            <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                                height="100px">
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">Sekretaris Desa</span>
                            <span class="info-box-number">IVAN ALVIADIN</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                            <span class="progress-description">
                                Periode 2020-2025
                            </span>
                        </div>

                    </div>
                </div>
                <div class="col-md-4  mx-auto">
                    <div class="info-box bg-warning">
                        <span class="info-box-icon">
                            {{-- <i class="far fa-bookmark"></i> --}}
                            <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                                height="100px">
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">Kepala Urusan Keuangan</span>
                            <span class="info-box-number">AHMAD DENI FADILLAH
                            </span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                            <span class="progress-description">
                                Periode 2020-2025
                            </span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="info-box bg-warning">
                            <span class="info-box-icon">
                                {{-- <i class="far fa-bookmark"></i> --}}
                                <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                                    height="100px">
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">Kepala Seksi Pemerintahan</span>
                                <span class="info-box-number">ADI MULYONO
                                </span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                </div>
                                <span class="progress-description">
                                    Periode 2020-2025
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="info-box bg-warning">
                            <span class="info-box-icon">
                                {{-- <i class="far fa-bookmark"></i> --}}
                                <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                                    height="100px">
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">Kepala Seksi Kesejahteraan</span>
                                <span class="info-box-number">UCU SURIP
                                </span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                </div>
                                <span class="progress-description">
                                    Periode 2020-2025
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="info-box bg-warning">
                            <span class="info-box-icon">
                                {{-- <i class="far fa-bookmark"></i> --}}
                                <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                                    height="100px">
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">Kepala Seksi Pelayanan</span>
                                <span class="info-box-number">NENA KOSASIH
                                </span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                </div>
                                <span class="progress-description">
                                    Periode 2020-2025
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="info-box bg-warning">
                            <span class="info-box-icon">
                                {{-- <i class="far fa-bookmark"></i> --}}
                                <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                                    height="100px">
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">Kepala Urusan Tata Usaha Dan Umum</span>
                                <span class="info-box-number">AHYANI
                                </span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                </div>
                                <span class="progress-description">
                                    Periode 2020-2025
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="info-box bg-warning">
                            <span class="info-box-icon">
                                {{-- <i class="far fa-bookmark"></i> --}}
                                <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                                    height="100px">
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">Kepala Urusan Perencanaan</span>
                                <span class="info-box-number">MUHAMAD NURZEN
                                </span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                </div>
                                <span class="progress-description">
                                    Periode 2020-2025
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="info-box bg-warning">
                            <span class="info-box-icon">
                                {{-- <i class="far fa-bookmark"></i> --}}
                                <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                                    height="100px">
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">Jaro I</span>
                                <span class="info-box-number">MUHAMAD SIBLI
                                </span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                </div>
                                <span class="progress-description">
                                    Periode 2020-2025
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="info-box bg-warning">
                            <span class="info-box-icon">
                                {{-- <i class="far fa-bookmark"></i> --}}
                                <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                                    height="100px">
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">Jaro II</span>
                                <span class="info-box-number">SURYANI
                                </span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                </div>
                                <span class="progress-description">
                                    Periode 2020-2025
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@push('scripts')
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endpush
