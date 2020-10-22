<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Sistem Database - Tugas XML</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container mt-5">
        <h5 class="text-center mt-3">List Teman Kelas D-3 Teknik Informatika Universitas Sumatera Utara</h5>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $xml = simplexml_load_file("tugas1.xml");
                $i = 1;
                foreach ($xml->mahasiswa as $mhs) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $mhs->nama; ?></td>
                        <td><?= $mhs->jk; ?></td>
                        <td><?= $mhs->alamat; ?></td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach ?>

            </tbody>
        </table>
        <h5 class="text-center mt-5">Data Penerimaan Mahasiswa Baru FMIPA 3 Tahun Terakhir</h5>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">2018</th>
                    <th scope="col">2019</th>
                    <th scope="col">2020</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $xml = simplexml_load_file("tugas2.xml");
                foreach ($xml->data as $dt) : ?>
                    <tr>
                        <td><?= $dt->jurusan; ?></td>
                        <td><?= $dt->tahun2018; ?></td>
                        <td><?= $dt->tahun2019; ?></td>
                        <td><?= $dt->tahun2020; ?></td>
                    </tr>
                <?php endforeach ?>

            </tbody>
        </table>
    </div>
</body>

</html>