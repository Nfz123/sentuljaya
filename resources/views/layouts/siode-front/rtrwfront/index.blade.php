@extends('layouts.siode-front.app-master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <P>RT RW DESA SENTUL JAYA</P>
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
                    <div class="info-box bg-primary">
                        <span class="info-box-icon">
                            {{-- <i class="far fa-bookmark"></i> --}}
                            <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                                height="100px">
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">KETUA RW 1
                            </span>
                            <span class="info-box-number">DEDI HIDAYAT
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
                <div class="col-md-4  mx-auto">
                    <div class="info-box bg-primary">
                        <span class="info-box-icon">
                            {{-- <i class="far fa-bookmark"></i> --}}
                            <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                                height="100px">
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">Ketua RW 2</span>
                            <span class="info-box-number">SAEPUL BAHRI
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
                <div class="col-md-4  mx-auto">
                    <div class="info-box bg-primary">
                        <span class="info-box-icon">
                            {{-- <i class="far fa-bookmark"></i> --}}
                            <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                                height="100px">
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">Ketua RW 3</span>
                            <span class="info-box-number">SUDARYA
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
                <div class="col-md-4  mx-auto">
                    <div class="info-box bg-primary">
                        <span class="info-box-icon">
                            {{-- <i class="far fa-bookmark"></i> --}}
                            <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                                height="100px">
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">Ketua RW 4</span>
                            <span class="info-box-number">SUDRAJAT
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
                        <div class="info-box bg-primary">
                            <span class="info-box-icon">
                                {{-- <i class="far fa-bookmark"></i> --}}
                                <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                                    height="100px">
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">Ketua RT 01</span>
                                <span class="info-box-number">SAMUDI
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
                        <div class="info-box bg-primary">
                            <span class="info-box-icon">
                                {{-- <i class="far fa-bookmark"></i> --}}
                                <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                                    height="100px">
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">Ketua RT 02</span>
                                <span class="info-box-number">SAMSUDIN
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
                        <div class="info-box bg-primary">
                            <span class="info-box-icon">
                                {{-- <i class="far fa-bookmark"></i> --}}
                                <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                                    height="100px">
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">Ketua RT 03</span>
                                <span class="info-box-number">USUP HIDAYAT</span>
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
                        <div class="info-box bg-primary">
                            <span class="info-box-icon">
                                {{-- <i class="far fa-bookmark"></i> --}}
                                <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                                    height="100px">
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">Ketua RT 04</span>
                                <span class="info-box-number">SAHRUDIN</span>
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
                        <div class="info-box bg-primary">
                            <span class="info-box-icon">
                                {{-- <i class="far fa-bookmark"></i> --}}
                                <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                                    height="100px">
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">Ketua RT 05</span>
                                <span class="info-box-number">MOHAMAD DALIUS
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
                        <div class="info-box bg-primary">
                            <span class="info-box-icon">
                                {{-- <i class="far fa-bookmark"></i> --}}
                                <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                                    height="100px">
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">Ketua RT 06</span>
                                <span class="info-box-number">AMIRUDIN
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
                        <div class="info-box bg-primary">
                            <span class="info-box-icon">
                                {{-- <i class="far fa-bookmark"></i> --}}
                                <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                                    height="100px">
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">Ketua RT 07</span>
                                <span class="info-box-number">SUTISNA
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
                        <div class="info-box bg-primary">
                            <span class="info-box-icon">
                                {{-- <i class="far fa-bookmark"></i> --}}
                                <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                                    height="100px">
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">Ketua RT 08</span>
                                <span class="info-box-number">ANDI JUANDI
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
                        <div class="info-box bg-primary">
                            <span class="info-box-icon">
                                {{-- <i class="far fa-bookmark"></i> --}}
                                <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                                    height="100px">
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">Ketua RT 09</span>
                                <span class="info-box-number">AHMAD SAHRONI
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
                        <div class="info-box bg-primary">
                            <span class="info-box-icon">
                                {{-- <i class="far fa-bookmark"></i> --}}
                                <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                                    height="100px">
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">Ketua RT 10</span>
                                <span class="info-box-number">ANHAR
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
                        <div class="info-box bg-primary">
                            <span class="info-box-icon">
                                {{-- <i class="far fa-bookmark"></i> --}}
                                <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                                    height="100px">
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">Ketua RT 11</span>
                                <span class="info-box-number">AKHIAR
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
