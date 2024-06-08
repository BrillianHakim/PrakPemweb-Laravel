<!-- resources/views/pengiriman/pengiriman-cetak.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Laporan Pengiriman</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Laporan Pengiriman</h1>
    <table>
        <thead>
            <tr>
                <th>Nama Pengiriman</th>
                <th>Nomor Telepon</th>
                <th>Jenis Barang</th>
                <th>Berat Barang</th>
                <th>Tujuan Barang</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pengiriman as $data)
            <tr>
                <td>{{ $data->nama_pengiriman }}</td>
                <td>{{ $data->nomer_telepon }}</td>
                <td>{{ $data->jenis_barang }}</td>
                <td>{{ $data->berat_barang }}</td>
                <td>{{ $data->tujuan_barang }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
