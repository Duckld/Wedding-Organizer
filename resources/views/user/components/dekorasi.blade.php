<div class="row  justify-content-center">

    <form action="{{ route('pemesanandekorasi.store') }}" method="POST">
        @csrf

        <!-- Search Feature -->
        <div class="mb-4">
            <input type="text" id="searchBox" class="form-control" placeholder="Cari dekorasi..." onkeyup="searchDekorasi()">
        </div>

        <script>
            function searchDekorasi() {
                // Get the input field and filter text
                const input = document.getElementById('searchBox');
                const filter = input.value.toLowerCase();
                const dekorasiContainer = document.getElementById('dekorasiContainer');
                const items = dekorasiContainer.getElementsByClassName('menu-item');
        
                // Loop through all cards and hide those that don't match the search query
                for (let i = 0; i < items.length; i++) {
                    const item = items[i];
                    const name = item.querySelector('.dekorasi-name').textContent || item.querySelector('.dekorasi-name').innerText;
        
                    if (name.toLowerCase().indexOf(filter) > -1) {
                        item.style.display = '';
                    } else {
                        item.style.display = 'none';
                    }
                }
            }
        </script>        

        <div class="row" id="dekorasiContainer">
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
                                        <h5 class="fw-bolder dekorasi-name">{{ $dek->nama_dekorasi }}</h5>
                                        Rp.{{ number_format($dek->harga_dekorasi, 0, ',', '.') }}
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn custom-btn btn-block mt-auto" data-bs-toggle="modal" data-bs-target="#viewOptionsModal{{ $dek->id_dekorasi }}">Lihat Detail</a></div>
                                </div>

                                <!-- Modal Structure -->
                                <div class="modal fade" id="viewOptionsModal{{ $dek->id_dekorasi }}" tabindex="-1" aria-labelledby="viewOptionsModalLabel{{ $dek->id_dekorasi }}" aria-hidden="true">
                                    <div class="modal-dialog modal-xl modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="viewOptionsModalLabel{{ $dek->id_dekorasi }}">Detail {{ $dek->nama_dekorasi }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Product section-->
                                                <section class="py-5">
                                                    <div class="container px-4 px-lg-5 my-5">
                                                        <div class="row gx-4 gx-lg-5 align-items-center">
                                                            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ asset('storage/' . $dek->foto_dekorasi) }}" alt="..." /></div>
                                                            <div class="col-md-6">
                                                                {{-- <div class="small mb-1">SKU: BST-498</div> --}}
                                                                <h1 class="display-5 fw-bolder">{{ $dek->nama_dekorasi }}</h1>
                                                                <div class="fs-5 mb-5">
                                                                    {{-- <span class="text-decoration-line-through">$45.00</span> --}}
                                                                    <span>Rp.{{ number_format($dek->harga_dekorasi, 0, ',', '.') }}</span>
                                                                </div>
                                                                <p class="lead">{{$dek->deskripsi_dekorasi}}</p>
                                                            </div>
                                                        </div>
                                                        <br><br>
                                                        <div class="d-flex">
                                                            <button class="btn custom-btn col-12" type=" ">
                                                                <i class="bi-cart-fill me-1"></i>
                                                                Add to cart
                                                            </button>
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