<div class="row  justify-content-center">

    <form action="{{ route('pemesanandokumentasi.store') }}" method="POST">
        @csrf
        <div class="row">
            @foreach ($dokumentasi as $dok)
                <div class="col-12 col-lg-4 menu-item">
                    <div class="col mb-5">
                        <input type="radio" id="dokumentasi{{ $dok->id_dokumentasi }}" name="dokumentasi" value="{{ $dok->id_dokumentasi }}" class="d-none">
                        <label for="dokumentasi{{ $dok->id_dokumentasi }}">
                            <div class="card h-100">
                                @if($dok->foto_dokumentasi)
                                    <a href="#" class="open-second-modal" data-bs-toggle="modal" data-bs-target="#secondModal{{ $dok->id_dokumentasi }}" style="height: 250px; overflow: hidden">
                                        <img src="{{ asset('storage/' . $dok->foto_dokumentasi) }}" alt="Foto Menu" class="img-thumbnail">
                                    </a>
                                @else
                                    <p>Tidak ada Foto Thumbnail</p>
                                @endif
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-bolder">{{ $dok->nama_paket_dokumentasi }}</h5>
                                        Rp.{{ number_format($dok->harga_dokumentasi, 0, ',', '.') }}
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
        <form action="{{ route('skip.pemesanandokumentasi') }}" method="POST" class="d-inline d-flex justify-content-center">
            @csrf
            <button type="submit" class="btn custom-btn btn-lg btn-block col-md-12">Skip Dokumentasi</button>
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
        border: 4px solid #87CEEB; /* Ganti dengan warna border sesuai keinginan */
    }

    .card {
        transition: all 0.1s ease-in-out;
    }

    /* Menambahkan efek hover pada card */
    label:hover .card {
        border: 2px solid #87CEEB; /* Ganti dengan warna hover border sesuai keinginan */
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }



    .custom-btn {
        background-color: #fff;
        border-color: #87CEEB;
        color: #87CEEB;
    }

    .custom-btn:hover {
        background-color: #87CEEB;
        color: white;
    }

</style>