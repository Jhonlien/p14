<!DOCTYPE html>
<html>
    <head>
        <title>Form Entri Barang</title>
        <style> 
            body {font-family: Arial, Helvetica, sans-serif;}
            input[type=text], input[type=number], input[type=password], select, textarea {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                margin-top: 6px;
                margin-bottom: 16px;
            }

            input[type=radio] {
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                margin-top: 6px;
                margin-bottom: 16px;
            }

            input[type=submit] {
                background-color: #4CAF50;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            input[type=submit]:hover {
                background-color: #107c15;
            }

            .container {
                border-radius: 15px;
                background-color: #f2f2f2;
                padding: 20px;
            }
        </style>
    </head>
    <body>
        <h3>Formulir Pendaftaran</h3>
        <div class="container">
            <form action="./proses_entri" method="POST">
                <label>Kode Barang :</label>
                <input type="text" name="kode_barang">
                <label>Nama Barang :</label>
                <input type="text" name="nama_barang">
                <label>Jumlah Stok Barang :</label>
                <input type="number" name="jumlah_stok">
                <input type="submit" value="Simpan"> 
            </form>   
        </div>
    </body>
</html>