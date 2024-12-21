<div class="row  justify-content-center">

    <form action="{{ route('pemesanankatering2.store') }}" method="POST">
        @csrf
        <div class="row">
            @foreach ($dishes as $ds)
                <div class="col-12 col-lg-4 menu-item">
                    <div class="col mb-5">
                        <input type="radio" id="maincourse{{ $ds->id_dishes }}" name="maincourse" value="{{ $ds->id_dishes }}" class="d-none">
                        <label for="maincourse{{ $ds->id_dishes }}">
                            <div class="card h-100">
                                @if($ds->foto_menu)
                                    <a href="#" class="open-second-modal" data-bs-toggle="modal" data-bs-target="#secondModal{{ $ds->id_dishes }}" style="height: 250px; overflow: hidden">
                                        <img src="{{ asset('storage/' . $ds->foto_menu) }}" alt="Foto Menu" class="img-thumbnail">
                                    </a>
                                @else
                                    <p>Tidak ada Foto Thumbnail</p>
                                @endif
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-bolder">{{ $ds->nama_paket_dishes }}</h5>
                                        Rp.{{ number_format($ds->harga_paket, 0, ',', '.') }}
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn custom-btn btn-block mt-auto" data-bs-toggle="modal" data-bs-target="#viewOptionsModal{{ $ds->id_dishes }}">Lihat Detail</a></div>
                                </div>

                                <!-- Modal Structure -->
                                <div class="modal fade" id="viewOptionsModal{{ $ds->id_dishes }}" tabindex="-1" aria-labelledby="viewOptionsModalLabel{{ $ds->id_dishes }}" aria-hidden="true">
                                    <div class="modal-dialog modal-xl modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="viewOptionsModalLabel{{ $ds->id_dishes }}">Detail {{ $ds->nama_paket_dishes }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Product section-->
                                                <section class="py-5">
                                                    <div class="container px-4 px-lg-5 my-5">
                                                        <div class="row gx-4 gx-lg-5 align-items-center">
                                                            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ asset('storage/' . $ds->foto_menu) }}" alt="..." /></div>
                                                            <div class="col-md-6">
                                                                {{-- <div class="small mb-1">SKU: BST-498</div> --}}
                                                                <h1 class="display-5 fw-bolder">{{ $ds->nama_paket_dishes }}</h1>
                                                                <div class="fs-5 mb-5">
                                                                    {{-- <span class="text-decoration-line-through">$45.00</span> --}}
                                                                    <span>Rp.{{ number_format($ds->harga_paket, 0, ',', '.') }}</span>
                                                                </div>
                                                                <p class="lead">{{$ds->deskripsi_makanan}}</p>

                                                            </div>
                                                        </div>
                                                        <br><br>
                                                        {{-- <div class="col-12">
                                                            <label class="d-flex">Tipe maincourse :</label>
                                                        </div> --}}
                                                        <br>
                                                        <div class="row">
                                                            {{-- <div class="col-6">
                                                                <input type="text" class="form-control" value="{{ $ds->tipe_maincourse }}" readonly>
                                                            </div> --}}
                                                            <div class="col-6">
                                                                <button class="btn custom-btn col-12" type=" ">
                                                                    <i class="bi-cart-fill me-1"></i>
                                                                    Add to cart
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
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