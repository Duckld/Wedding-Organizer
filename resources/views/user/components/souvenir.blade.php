<div class="row  justify-content-center">

    <form action="{{ route('pemesanansouvenir.store') }}" method="POST">
        @csrf

        <!-- Search Feature -->
        <div class="mb-4">
            <input type="text" id="searchBoxsouvenir" class="form-control" placeholder="Cari souvenir..." onkeyup="searchSouvenir()">
        </div>

        <script>
            function searchSouvenir() {
                // Get the input field and filter text
                const input = document.getElementById('searchBoxsouvenir');
                const filter = input.value.toLowerCase();
                const souvenirContainer = document.getElementById('souvenirContainer');
                const items = souvenirContainer.getElementsByClassName('menu-item');
        
                // Loop through all cards and hide those that don't match the search query
                for (let i = 0; i < items.length; i++) {
                    const item = items[i];
                    const name = item.querySelector('.souvenir-name').textContent || item.querySelector('.souvenir-name').innerText;
        
                    if (name.toLowerCase().indexOf(filter) > -1) {
                        item.style.display = '';
                    } else {
                        item.style.display = 'none';
                    }
                }
            }
        </script>  

        <div class="row" id="souvenirContainer">
            @foreach ($souvenir as $sv)
                <div class="col-12 col-lg-4 menu-item">
                    <div class="col mb-5">
                        <input type="radio" id="souvenir{{ $sv->id_souvenir }}" name="souvenir" value="{{ $sv->id_souvenir }}" class="d-none">
                        <label for="souvenir{{ $sv->id_souvenir }}">
                            <div class="card h-100">
                                @if($sv->foto_souvenir)
                                    <a href="#" class="open-second-modal" data-bs-toggle="modal" data-bs-target="#secondModal{{ $sv->id_souvenir }}" style="height: 250px; overflow: hidden">
                                        <img src="{{ asset('storage/' . $sv->foto_souvenir) }}" alt="Foto Menu" class="img-thumbnail">
                                    </a>
                                @else
                                    <p>Tidak ada Foto Thumbnail</p>
                                @endif
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-bolder souvenir-name">{{ $sv->nama_paket_souvenir }}</h5>
                                        Rp.{{ number_format($sv->harga_paket_souvenir, 0, ',', '.') }}
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn custom-btn btn-block mt-auto" data-bs-toggle="modal" data-bs-target="#viewOptionsModal{{ $sv->id_souvenir }}">Lihat Detailnya</a></div>
                                </div>

                                <!-- Modal Structure -->
                                <div class="modal fade" id="viewOptionsModal{{ $sv->id_souvenir }}" tabindex="-1" aria-labelledby="viewOptionsModalLabel{{ $sv->id_souvenir }}" aria-hidden="true">
                                    <div class="modal-dialog modal-xl modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="viewOptionsModalLabel{{ $sv->id_souvenir }}">Detail {{ $sv->nama_paket_souvenir }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Product section-->
                                                <section class="py-5">
                                                    <div class="container px-4 px-lg-5 my-5">
                                                        <div class="row gx-4 gx-lg-5 align-items-center">
                                                            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ asset('storage/' . $sv->foto_souvenir) }}" alt="..." /></div>
                                                            <div class="col-md-6">
                                                                {{-- <div class="small mb-1">SKU: BST-498</div> --}}
                                                                <h1 class="display-5 fw-bolder">Desain {{ $sv->nama_paket_souvenir }}</h1>
                                                                <div class="fs-5 mb-5">
                                                                    {{-- <span class="text-decoration-line-through">$45.00</span> --}}
                                                                    <span>Rp.{{ number_format($sv->harga_paket_souvenir, 0, ',', '.') }}</span>
                                                                </div>
                                                                <p class="lead">{{$sv->deskripsi_paket_souvenir}}</p>
                                                            </div>
                                                        </div>
                                                        <br><br>
                                                        <div class="col-12">
                                                            <label class="d-flex">Souvenir :</label>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <input type="text" class="form-control" value="{{ $sv->deskripsi_paket_souvenir }}" readonly>
                                                            </div>
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
        {{-- <form action="{{ route('skip.pemesanansouvenir') }}" method="POST" class="d-inline d-flex justify-content-center">
            @csrf
            <button type="submit" class="btn custom-btn btn-lg btn-block col-md-12">Skip souvenir</button>
        </form> --}}
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