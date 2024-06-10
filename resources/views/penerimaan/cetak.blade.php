<!DOCTYPE html>
<html>
<head>
    <title>Laporan Penerimaan</title>
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
    <h1>Laporan Penerimaan</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Waktu Diterima</th>
                <th>No HP</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($penerimaan as $data)
            <tr>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->waktu_diterima }}</td>
                <td>{{ $data->no_hp }}</td>
                <td>{{ $data->alamat }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
