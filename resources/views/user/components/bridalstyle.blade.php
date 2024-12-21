<div class="row  justify-content-center">

    <form action="{{ route('pemesananbridalstyle.store') }}" method="POST">
        @csrf

        <!-- Search Feature -->
        <div class="mb-4">
            <input type="text" id="searchBoxbridal" class="form-control" placeholder="Cari bridal..." onkeyup="searchBridal()">
        </div>

        <script>
            function searchBridal() {
                // Get the input field and filter text
                const input = document.getElementById('searchBoxbridal');
                const filter = input.value.toLowerCase();
                const bridalContainer = document.getElementById('bridalContainer');
                const items = bridalContainer.getElementsByClassName('menu-item');
        
                // Loop through all cards and hide those that don't match the search query
                for (let i = 0; i < items.length; i++) {
                    const item = items[i];
                    const name = item.querySelector('.bridal-name').textContent || item.querySelector('.bridal-name').innerText;
        
                    if (name.toLowerCase().indexOf(filter) > -1) {
                        item.style.display = '';
                    } else {
                        item.style.display = 'none';
                    }
                }
            }
        </script>  

        <div class="row" id="bridalContainer">
            @foreach ($bridalstyle as $bs)
                <div class="col-12 col-lg-4 menu-item">
                    <div class="col mb-5">
                        <input type="radio" id="bridalstyle{{ $bs->id_bridalstyle }}" name="bridalstyle" value="{{ $bs->id_bridalstyle }}" class="d-none">
                        <label for="bridalstyle{{ $bs->id_bridalstyle }}">
                            <div class="card h-100">
                                @if($bs->foto_bridalstyle)
                                    <a href="#" class="open-second-modal" data-bs-toggle="modal" data-bs-target="#secondModal{{ $bs->id_bridalstyle }}" style="height: 250px; overflow: hidden">
                                        <img src="{{ asset('storage/' . $bs->foto_bridalstyle) }}" alt="Foto Menu" class="img-thumbnail">
                                    </a>
                                @else
                                    <p>Tidak ada Foto Thumbnail</p>
                                @endif
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-bolder bridal-name">{{ $bs->nama_paket_bridalstyle }}</h5>
                                        Rp.{{ number_format($bs->harga_paket, 0, ',', '.') }}
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn custom-btn btn-block mt-auto" href="#">View options</a></div>
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
        {{-- <form action="{{ route('skip.pemesananbridalstyle') }}" method="POST" class="d-inline d-flex justify-content-center">
            @csrf
            <button type="submit" class="btn custom-btn btn-lg btn-block col-md-12">Skip bridalstyle</button>
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