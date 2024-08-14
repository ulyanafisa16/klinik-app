<!DOCTYPE html>
<html>
<head>
    <title>Kartu Pasien</title>
    <style>
        /* Tambahkan CSS untuk tata letak kartu pasien */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }

        .card {
            border: 1px solid #000;
            padding: 20px;
            width: 350px;
            margin: 0 auto;
            text-align: center;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card h1 {
            font-size: 24px;
            margin-bottom: 15px;
        }

        .card p {
            font-size: 18px;
            margin: 5px 0;
        }

        .card p strong {
            display: block;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Kartu Pasien</h1>
        <p><strong> {{ $pasien->kode_pasien }}:</strong></p>
        <p><strong>{{ $pasien->nama_pasien }}</strong> </p>
        <p><strong>Nomor HP:</strong> {{ $pasien->nomor_hp }}</p>
    </div>
</body>
</html>
