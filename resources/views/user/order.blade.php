<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabel Pemesanan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f4f6f9;
        }

        .table-container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .table th {
            background-color: #00b7ff;
            color: white;
        }

        .badge-success {
            background-color: #28a745; /* Hijau standar */
            color: white;
        }

        .badge-confirm {
            background-color: #32c76d; /* Hijau sedikit lebih terang */
            color: white;
        }

        .badge-warning {
            background-color: #ffc107;
            color: #000;
        }

        .badge-danger {
            background-color: #dc3545;
        }

        .badge-secondary {
            background-color: #808080;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="table-container">
            <!-- Tombol Back -->
            <button class="btn btn-secondary mb-3" style="position: absolute; top: 10px; left: 10px;" onclick="window.location.href='/user'">Back</button>
            <div class="d-flex justify-content-between mb-3">
                <h4 class="text-uppercase">Tabel Pemesanan</h4>
            </div>
            <div class="row">
                <div class="mb-3 col-6">
                    <select id="filterStatus" class="form-select w-25">
                        <option value="">Semua Status</option>
                        <option value="Pending">Pending</option>
                        <option value="Confirm">Confirm</option>
                        <option value="Ongoing">Ongoing</option>
                        <option value="Finished">Finished</option>
                    </select>
                </div>
                <div class="mb-3 col-6">
                    <input id="searchInput" type="text" class="form-control " placeholder="Cari...">
                </div>
            </div>
            
            <table class="table table-hover text-center align-middle" id="dataTable">
                <thead>
                    <tr>
                        <th>ID Pemesanan</th>
                        <th>ID Customer</th>
                        <th>Tanggal Pemesanan</th>
                        <th>Tanggal Acara</th>
                        <th>Total Biaya</th>
                        <th>Status Pemesanan</th>
                        <th>Bukti Pembayaran</th>
                        <th>Invoice</th>
                        <th>Testimoni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pemesanan as $pm)
                        <tr>
                            <td>{{$pm->id_pemesanan}}</td>
                            <td>{{$pm->id_customer}}</td>
                            <td>{{$pm->tanggal_pemesanan}}</td>
                            <td>{{$pm->tanggal_acara}}</td>
                            <td>Rp.{{ number_format($pm->total_biaya, 0, ',', '.') }}</td>
                            <td>
                                @if ($pm->status_pemesanan === 'Pending')
                                    <span class="badge badge-secondary">Pending</span>
                                @elseif ($pm->status_pemesanan === 'Confirm')
                                    <span class="badge badge-confirm">Confirm</span>
                                @elseif ($pm->status_pemesanan === 'Ongoing')
                                    <span class="badge badge-warning">Ongoing</span>
                                @elseif ($pm->status_pemesanan === 'Finished')
                                    <span class="badge badge-success">Finished</span>
                                @else
                                    <span class="badge badge-light">Unknown</span>
                                @endif
                            </td>
                            <td style="text-align: center">
                                <!-- Tombol Upload -->
                                <button class="btn btn-primary align-items-center" type="button" data-bs-toggle="modal" data-bs-target="#uploadModal{{$pm->id_pemesanan}}">
                                    <i class="fas fa-upload me-2"></i> Upload
                                </button>
                            </td>
                            <td style="text-align: center">
                                <!-- Tombol Invoice -->
                                <a href="{{ route('view.invoice', $pm->id_pemesanan) }}" class="btn btn-primary align-items-center">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('download.invoice', $pm->id_pemesanan) }}" class="btn btn-success align-items-center">
                                    <i class="fas fa-download"></i>
                                </a>
                            </td>
                            <td style="text-align: center">
                                <!-- Tombol Testimoni -->
                                <button class="btn btn-success align-items-center" type="button">
                                    <span>Berikan Testimoni</span>
                                </button>
                            </td>

                            <!-- Modal Upload Bukti Pembayaran -->
                            <div class="modal" id="uploadModal{{$pm->id_pemesanan}}" tabindex="-1" aria-labelledby="uploadModalLabel{{$pm->id_pemesanan}}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="uploadModalLabel{{$pm->id_pemesanan}}">Upload Bukti Pembayaran</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{-- <form method="POST" action="{{ route('upload.payment') }}" enctype="multipart/form-data"> --}}
                                                {{-- @csrf --}}
                                                <!-- Input Bukti Pembayaran -->
                                                <div class="mb-3">
                                                    <label for="buktiPembayaran{{$pm->id_pemesanan}}" class="form-label">Pilih Bukti Pembayaran</label>
                                                    <input type="file" class="form-control form-control-lg w-100" id="buktiPembayaran{{$pm->id_pemesanan}}" name="bukti_pembayaran" required>
                                                </div>

                                                <!-- Tombol Submit -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                    <button type="submit" class="btn btn-primary">Upload</button>
                                                </div>
                                            {{-- </form> --}}
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            <nav>
                <ul class="pagination justify-content-center" id="pagination"></ul>
            </nav>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Pencarian
        const searchInput = document.getElementById("searchInput");
        const filterStatus = document.getElementById("filterStatus");
        const table = document.getElementById("dataTable");
        const rows = table.getElementsByTagName("tbody")[0].getElementsByTagName("tr");

        searchInput.addEventListener("keyup", filterTable);
        filterStatus.addEventListener("change", filterTable);

        function filterTable() {
            const query = searchInput.value.toLowerCase();
            const status = filterStatus.value;
            for (let row of rows) {
                const cells = row.getElementsByTagName("td");
                const idPemesanan = cells[0].innerText.toLowerCase();
                const idCustomer = cells[1].innerText.toLowerCase();
                const statusText = cells[5].innerText;

                const matchesQuery = idPemesanan.includes(query) || idCustomer.includes(query);
                const matchesStatus = status === "" || statusText === status;

                if (matchesQuery && matchesStatus) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            }
        }

        // Pagination
        const rowsPerPage = 5;
        const pagination = document.getElementById("pagination");

        function showPage(page) {
            const start = (page - 1) * rowsPerPage;
            const end = start + rowsPerPage;

            for (let i = 0; i < rows.length; i++) {
                if (i >= start && i < end) {
                    rows[i].style.display = "";
                } else {
                    rows[i].style.display = "none";
                }
            }

            Array.from(pagination.children).forEach((btn, index) => {
                btn.classList.toggle("active", index + 1 === page);
            });
        }

        function setupPagination() {
            const totalPages = Math.ceil(rows.length / rowsPerPage);
            pagination.innerHTML = "";

            for (let i = 1; i <= totalPages; i++) {
                const li = document.createElement("li");
                li.classList.add("page-item");
                li.innerHTML = `<a class="page-link" href="#">${i}</a>`;
                li.addEventListener("click", (e) => {
                    e.preventDefault();
                    showPage(i);
                });
                pagination.appendChild(li);
            }

            showPage(1);
        }

        setupPagination();
    </script>
</body>

</html>
