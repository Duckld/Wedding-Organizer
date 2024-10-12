<div class="tab-header text-center">
    <p>Menu</p>
    <h3>Dekorasi</h3>
</div>

<div class="row  justify-content-center">

    {{-- @foreach ($dekorasi as $dek)
        <form action="{{ route('pemesanan.store') }}" method="POST">
            @csrf
            <div class="col-lg-4 menu-item">
                <div class="col mb-5">
                    <input type="radio" id="dekorasi{{ $dek->id_dekorasi }}" name="dekorasi" value="{{ $dek->id_dekorasi }}" class="d-none">
                    <label for="dekorasi{{ $dek->id_dekorasi }}">
                        <div class="card h-100">
                            @if($dek->foto_dekorasi)
                                <a href="#" class="open-second-modal" data-bs-toggle="modal" data-bs-target="#secondModal{{ $dek->id_dekorasi }}">
                                    <img src="{{ asset('storage/' . $dek->foto_dekorasi) }}" alt="Foto Menu" class="img-thumbnail">
                                </a>
                            @else
                                <p>Tidak ada Foto Thumbnail</p>
                            @endif
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">{{ $dek->nama_dekorasi }}</h5>
                                    Rp.{{ $dek->harga_dekorasi }}
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn custom-btn btn-block mt-auto" href="#">View options</a></div>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Dekorasi</button>
        </form>
    
        <!-- Menu Item -->
    @endforeach --}}

    <form action="{{ route('pemesanandekorasi.store') }}" method="POST">
        @csrf
        <div class="row">
            @foreach ($dekorasi as $dek)
                <div class="col-12 col-lg-4 menu-item">
                    <div class="col mb-5">
                        <input type="radio" id="dekorasi{{ $dek->id_dekorasi }}" name="dekorasi" value="{{ $dek->id_dekorasi }}" class="d-none">
                        <label for="dekorasi{{ $dek->id_dekorasi }}">
                            <div class="card h-100">
                                @if($dek->foto_dekorasi)
                                    <a href="#" class="open-second-modal" data-bs-toggle="modal" data-bs-target="#secondModal{{ $dek->id_dekorasi }}" style="height: 250px; overflow: hidden">
                                        <img src="{{ asset('storage/' . $dek->foto_dekorasi) }}" alt="Foto Menu" class="img-thumbnail">
                                    </a>
                                @else
                                    <p>Tidak ada Foto Thumbnail</p>
                                @endif
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-bolder">{{ $dek->nama_dekorasi }}</h5>
                                        Rp.{{ $dek->harga_dekorasi }}
                                    </div>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
            @endforeach
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn custom-btn btn-lg btn-block col-md-12">Pilih</button>
            </div>
        </div>
        <br>
        <form action="{{ route('skip.pemesanandekorasi') }}" method="POST" class="d-inline d-flex justify-content-center">
            @csrf
            <button type="submit" class="btn custom-btn btn-lg btn-block col-md-12">Skip Dekorasi</button>
        </form>
    </form>
</div>


<br><br>

<!-- CSS untuk menampilkan border pada label -->
<style>
    label {
        cursor: pointer;
    }

    /* Mengatur tampilan label agar menyerupai card */
    input[type="radio"]:checked + label .card {
        border: 4px solid #ce1212; /* Ganti dengan warna border sesuai keinginan */
    }

    .card {
        transition: all 0.1s ease-in-out;
    }

    /* Menambahkan efek hover pada card */
    label:hover .card {
        border: 2px solid #ce1212; /* Ganti dengan warna hover border sesuai keinginan */
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }



    .custom-btn {
        background-color: #fff;
        border-color: #ce1212;
        color: #ce1212;
    }

    .custom-btn:hover {
        background-color: #ce1212;
        color: white;
    }

</style>