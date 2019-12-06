<!DOCTYPE html>
<head>
    <title>Data Barang</title>
    <style>
        .uui_table {
            border: solid 1px #DDEEEE;
            border-collapse: collapse;
            border-spacing: 0;
            font: normal 13px Arial, sans-serif;
        }
        .uui_table thead th {
            background-color: #DDEFEF;
            border: solid 1px #DDEEEE;
            color: #336B6B;
            padding: 2px;
            text-shadow: 1px 1px 1px #fff;
        }
        .uui_table tbody td {
            border: solid 1px #DDEEEE;
            color: #333;
            padding: 10px;
            text-shadow: 1px 1px 1px #fff;
        }
    </style>
</head>
<body>
    <h1>List data barang</h1>
    <p><a href="./entri">Tambah Barang</a></p>
    <table class="uui_table" style="width: 80%;">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th align="center">Jumlah Stok</th>
                <th align="center">Aksi</th>
            </tr>
        </thead>
        <tbody>    
            <?php //print_r($barang);
            $no=1;
            foreach($barang as $value){ ?>
                <tr>
                    <td style="width: 10px;"><?php echo $no; ?></td>
                    <td><?php echo $value->kode_barang; ?></td>
                    <td><?php echo $value->nama_barang; ?></td>
                    <td><?php echo $value->jumlah_stok; ?></td>
                    <td>
                        <a href="./edit?kode_barang=<?php echo $value->kode_barang; ?>">Edit</a> | 
                        <a href="./hapus?kode_barang=<?php echo $value->kode_barang; ?>">Hapus</a>
                    </td>
                </tr> <?php
                $no++;
            } ?>
        </tbody>
    </table>
</body>