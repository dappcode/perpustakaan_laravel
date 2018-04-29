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
            <?php $__empty_1 = true; $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td> <?php echo e($book->title); ?> </td>
                    <td> <?php echo e($book->amount); ?> </td>
                    <td> <?php echo e($book->stock); ?> </td>
                    <td> <?php echo e($book->author->name); ?> </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="4" align="center">Data Tidak di Temukan</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>


</body>
</html>