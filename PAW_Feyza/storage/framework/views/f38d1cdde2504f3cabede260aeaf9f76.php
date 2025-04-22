<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to bottom right, #a0e9ff, #bdfcc9); /* biru langit & hijau dedaunan */
            color: #333;
            margin: 0;
            padding: 40px;
        }

        h1 {
            text-align: center;
            color: #2d6a4f;
            margin-bottom: 30px;
        }

        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            background-color: #ffffffcc; /* putih transparan */
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            border-radius: 12px;
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #48cae4; /* biru langit */
            color: white;
        }

        tr:nth-child(even) {
            background-color: #d8f3dc; /* hijau lembut */
        }

        tr:nth-child(odd) {
            background-color: #edf6f9;
        }

        tr:hover {
            background-color: #b5ead7;
        }
    </style>
</head>
<body>
    <h1>📚 Daftar Buku</h1>
    <table>
        <thead>
            <tr>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($book['judul']); ?></td>
                    <td><?php echo e($book['penulis']); ?></td>
                    <td><?php echo e($book['penerbit']); ?></td>
                    <td><?php echo e($book['tahun']); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html>
<?php /**PATH C:\Users\Feyza Adyani\test\PAW_Feyza\resources\views/books/index.blade.php ENDPATH**/ ?>