<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        .invoice-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .invoice-details {
            margin-bottom: 20px;
        }
        .total {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="invoice-header">
        <h1>Invoice</h1>
        <p>ID Pemesanan: {{ $id_pemesanan }}</p>
    </div>
    <div class="invoice-details">
        <p><strong>Customer ID:</strong> {{ $id_customer }}</p>
        <p><strong>Tanggal Pemesanan:</strong> {{ $tanggal_pemesanan }}</p>
        <p><strong>Tanggal Acara:</strong> {{ $tanggal_acara }}</p>
        <p class="total"><strong>Total Biaya:</strong> Rp.{{ number_format($total_biaya, 0, ',', '.') }}</p>
    </div>
</body>
</html>
