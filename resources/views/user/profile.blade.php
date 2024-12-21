<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile User</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</head>
<body>
    <style>
        body {
            background: #606161
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #87CEEB
        }

        .profile-button {
            background: #00b7ff
            box-shadow: none;
            border: none
        }

        .profile-button:hover {
            background: #00b7ff
        }

        /* .profile-button:focus {
            background: #00b7ff;
            box-shadow: none
        } */

        /* .profile-button:active {
            background: #00b7ff;
            box-shadow: none
        } */

        .back:hover {
            color: #682773;
            cursor: pointer
        }

        .labels {
            font-size: 11px
        }

        .add-experience:hover {
            background: #00b7ff;
            color: #fff;
            cursor: pointer;
            border: solid 1px #00b7ff
        }
    </style>
    
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <!-- Tombol Back -->
                    <button class="btn btn-secondary mb-3" style="position: absolute; top: 10px; left: 10px;" onclick="window.location.href='/user'">Back</button>
                    
                    <!-- Gambar Profil -->
                    <img class="rounded-circle mt-5" width="150px" src="{{ asset('assets/Yummy/assets/img/testimonials/testimonials-1.jpg') }}"><br>
                    <span class="font-weight-bold">{{ $user->name}}</span>
                    <span class="text-black-50">{{ $user->email }}</span>
                    <span> </span>
                </div>
            </div>
            <form method="POST" action="{{ route('saveProfile') }}">
                @csrf
                <div class="col-md-12 border-bottom">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile</h4>
                        </div>
                        <div class="row mt-2">
                            <!-- Nama -->
                            <div class="col-md-12">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{ $user->name }}" readonly>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <!-- Email -->
                            <div class="col-md-6">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" value="{{ $user->email }}" readonly>
                            </div>
                            <!-- No Telepon -->
                            <div class="col-md-6">
                                <label>No Telepon</label>
                                <input type="text" class="form-control" name="no_telepon" value="{{ $user->phone }}" readonly>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <label>Gender</label>
                                <br>
                                <input type="radio" id="pria" name="gender" value="Pria" {{ old('gender', session('profile_data.gender')) == 'Pria' ? 'checked' : '' }}>
                                <label for="pria">Pria</label>
                            </div>
                            <div class="col-md-3">
                                <br>
                                <input type="radio" id="wanita" name="gender" value="Wanita" {{ old('gender', session('profile_data.gender')) == 'Wanita' ? 'checked' : '' }}>
                                <label for="wanita">Wanita</label>
                            </div>
                            <div class="col-md-6">
                                <label>NIK</label>
                                <input type="text" class="form-control" name="nik" value="{{ old('nik', session('profile_data.nik') ?? '') }}">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label for="alamat">Alamat</label>
                                <textarea name="alamat" id="alamat" class="form-control">{{ $user->address }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 border-bottom">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Detail Pengantin</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label>Nama Pengantin Pria</label>
                                <input type="text" class="form-control" name="pengantin_pria" value="{{ old('pengantin_pria', session('profile_data.pengantin_pria') ?? '') }}">
                            </div>
                            <div class="col-md-6">
                                <label>Nama Pengantin Wanita</label>
                                <input type="text" class="form-control" name="pengantin_wanita" value="{{ old('pengantin_wanita', session('profile_data.pengantin_wanita') ?? '') }}">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label>Tanggal Lahir Pengantin Pria</label>
                                <input type="date" class="form-control" name="tanggal_lahir_pria" value="{{ old('tanggal_lahir_pria', session('profile_data.tanggal_lahir_pria') ?? '') }}">
                            </div>
                            <div class="col-md-6">
                                <label>Tanggal Lahir Pengantin Wanita</label>
                                <input type="date" class="form-control" name="tanggal_lahir_wanita" value="{{ old('tanggal_lahir_wanita', session('profile_data.tanggal_lahir_wanita') ?? '') }}">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email_pengantin" value="{{ old('email_pengantin', session('profile_data.email_pengantin') ?? '') }}">
                            </div>
                            <div class="col-md-6">
                                <label>No Telepon</label>
                                <input type="text" class="form-control" name="no_telepon_pengantin" value="{{ old('no_telepon_pengantin', session('profile_data.no_telepon_pengantin') ?? '') }}">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label for="alamat_pengantin">Alamat</label>
                                <textarea name="alamat_pengantin" id="alamat_pengantin" class="form-control">{{ old('alamat_pengantin', session('profile_data.alamat_pengantin') ?? '') }}</textarea>
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <button class="btn btn-primary profile-button" type="submit">Save Profile</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    @if (Session::has('success'))
        Swal.fire({
            title: "Profile berhasil diperbarui!",
            // text: "You clicked the button!",
            icon: "success"
        });
    @endif
</script>

</html>