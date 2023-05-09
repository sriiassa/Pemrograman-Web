<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Javascript</title>
</head>
<body>

    <script>
        document.write("Belajar <strong>Script</strong> Javascript");

        // var digunakan untuk global
        // let digunakan untuk private
        var bil1 = 5;
        var bil2 = 7;
        var hasil = bil1 + bil2;

        document.write("<br>Hasil penjumlahan dari " +bil1+ " dengan " +bil2+ " adalah " +hasil);

        // perulangan for
        document.write("<br><hr><strong>Perulangan For</strong>");
        for(let i=0; i<10; i++) {
            document.write("<br>Perulangan ke-" +i);
        }


    </script>
    
</body>
</html>