<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

    @foreach ($maincourse as $mc)
        <div class="col-lg-4 menu-item">
            <div class="col mb-5">
                <input type="radio" id="katering{{ $mc->id_maincourse }}" name="katering" value="{{ $mc->id_maincourse }}" class="d-none">
                <label for="katering{{ $mc->id_maincourse }}">
                    <div class="card h-100">
                        <!-- Product image-->
                        @if($mc->foto_menu)
                            <a href="#" class="open-second-modal" data-bs-toggle="modal" data-bs-target="#secondModal{{ $mc->id_maincourse }}">
                                <img src="{{ asset('storage/' . $mc->foto_menu) }}" alt="Foto Menu" class="img-thumbnail">
                            </a>

                            <!-- Modal Kedua (Gambar dalam Detail Menu) -->
                            <div class="modal fade" id="secondModal{{ $mc->id_maincourse }}" tabindex="-1" aria-labelledby="myModalLabelSecond" aria-hidden="true" role="dialog">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img src="{{ asset('storage/'. $mc->foto_menu) }}" alt="Foto Menu" class="img-thumbnail">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <p>Tidak ada Foto Thumbnail</p>
                        @endif
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">{{ $mc->nama_paket_maincourse }}</h5>
                                <!-- Product price-->
                                Rp.{{ $mc->harga_paket }}
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
        <!-- Menu Item -->
    @endforeach
</div>

<div class="d-flex justify-content-center">
    <button type="submit" class="btn custom-btn btn-lg btn-block col-md-12">Submit</button>
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