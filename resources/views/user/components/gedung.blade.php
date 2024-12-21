<div class="row justify-content-center">
    <form action="{{ route('pemesanangedung.store') }}" method="POST">
        @csrf

        <!-- Search Feature -->
        <div class="mb-4">
            <input type="text" id="searchGedungBox" class="form-control" placeholder="Cari gedung..." onkeyup="searchGedung()">
        </div>

        <script>
            function searchGedung() {
                // Get the input field and filter text
                const input = document.getElementById('searchGedungBox');
                const filter = input.value.toLowerCase();
                const gedungContainer = document.getElementById('gedungContainer');
                const items = gedungContainer.getElementsByClassName('menu-item');
        
                // Loop through all cards and hide those that don't match the search query
                for (let i = 0; i < items.length; i++) {
                    const item = items[i];
                    const name = item.querySelector('.gedung-name').textContent || item.querySelector('.gedung-name').innerText;
        
                    if (name.toLowerCase().indexOf(filter) > -1) {
                        item.style.display = '';
                    } else {
                        item.style.display = 'none';
                    }
                }
            }
        </script>

        <div class="row" id="gedungContainer">
            @foreach ($gedung as $gd)
                <div class="col-12 col-lg-4 menu-item">
                    <div class="col mb-5">
                        <input type="radio" id="gedung{{ $gd->id_gedung }}" name="gedung" value="{{ $gd->id_gedung }}" class="d-none">
                        <label for="gedung{{ $gd->id_gedung }}">
                            <div class="card h-100">
                                @if($gd->foto_gedung)
                                    <a href="#" class="open-second-modal" data-bs-toggle="modal" data-bs-target="#secondModal{{ $gd->id_gedung }}" style="height: 250px; overflow: hidden">
                                        <img src="{{ asset('storage/' . $gd->foto_gedung) }}" alt="Foto Menu" class="img-thumbnail">
                                    </a>
                                @else
                                    <p>Tidak ada Foto Thumbnail</p>
                                @endif
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-bolder gedung-name">{{ $gd->nama_gedung }}</h5>
                                        Rp.{{ number_format($gd->harga_sewa_gedung, 0, ',', '.') }}
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn custom-btn btn-block mt-auto" data-bs-toggle="modal" data-bs-target="#viewOptionsModal{{ $gd->id_gedung }}">Lihat Detail</a></div>
                                </div>
                                <!-- Modal Structure -->
                                <div class="modal fade" id="viewOptionsModal{{ $gd->id_gedung }}" tabindex="-1" aria-labelledby="viewOptionsModalLabel{{ $gd->id_gedung }}" aria-hidden="true">
                                    <div class="modal-dialog modal-xl modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="viewOptionsModalLabel{{ $gd->id_gedung }}">Detail {{ $gd->nama_gedung }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Product section-->
                                                <section class="py-5">
                                                    <div class="container px-4 px-lg-5 my-5">
                                                        <div class="row gx-4 gx-lg-5 align-items-center">
                                                            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ asset('storage/' . $gd->foto_gedung) }}" alt="..." /></div>
                                                            <div class="col-md-6">
                                                                <h1 class="display-5 fw-bolder">{{ $gd->nama_gedung }}</h1>
                                                                <div class="fs-5 mb-5">
                                                                    <span>Rp.{{ number_format($gd->harga_sewa_gedung, 0, ',', '.') }}</span>
                                                                </div>
                                                                <p class="lead">{{$gd->deskripsi_gedung}}</p>
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
    </form>
</div>
