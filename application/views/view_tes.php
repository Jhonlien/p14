<!DOCTYPE html>
<html>
    <head>
        <title>Form Input</title>
        <style> 
            body {font-family: Arial, Helvetica, sans-serif;}
            input[type=text], input[type=password], select, textarea {
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
            <form action="tes/tampil" method="POST">
                <label>Bilangan 1 :</label>
                <input type="number" name="bil1">
                <label>Bilangan 2 :</label>
                <input type="number" name="bil2">
                <input type="submit" value="Hitung"> 
            </form>   
        </div>
    </body>
</html>