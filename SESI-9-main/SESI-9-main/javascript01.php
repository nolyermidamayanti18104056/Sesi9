<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 - Output</title>
</head>
<body>
    
    <div id="Pesan">Letak Text dengan innerHTML</div>

    <script>
        document.write("Belajar Script Javascript");
        alert("Belajar Script Javascript");
        document.getElementById("Pesan").innerHTML = "Teks dibuat dari script javascript";
    </script>
</body>
</html>