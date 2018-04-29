<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Buku</title>
</head>
<body>
    <h1>Data Buku Perpustakaan</h1>
    <hr>
    <table>
        <thead>
            <tr>
                <td>Judul</td>
                <td>Jumlah</td>
                <td>Stock</td>
                <td>Penulis</td>
            </tr>
        </thead>
        <tbody>
            @forelse ($books as $book)
                <tr>
                    <td> {{ $book->title }} </td>
                    <td> {{ $book->amount }} </td>
                    <td> {{ $book->stock }} </td>
                    <td> {{ $book->author->name }} </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" align="center">Data Tidak di Temukan</td>
                </tr>
            @endforelse
        </tbody>
    </table>


</body>
</html>