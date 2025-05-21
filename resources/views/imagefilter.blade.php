<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Image Filters</title>
    <style>
        img {
            width: 300px;
            height: auto;
            transition: 0.5;
        }
        .grayscale {
            filter: grayscale(100%);
        }
        .sepia {
            filter: sepia(80%);
        }
        .blur {
            filter: blur(5px);
        }
        .brightness {
            filter: brightness(150%);
        }
        .hover-effect:hover {
            filter: contrast(200%) saturate(200%);
        }
    </style>
</head>
<body>
    <h2>Contoh CSS Image Filters</h2>
    <img src="https://cdn.dealeraccelerate.com/gaa/47/27487/287679/790x1024/1967-chevrolet-impala" alt="Contoh Gambar" class="grayscale">
    <img src="https://www.carscoops.com/wp-content/uploads/2015/01/15bc17e8-porsche2btiffany2brwb2bhong2bkong2b2.jpg" alt="Contoh Gambar" class="sepia">
    <img src="https://www.blackxperience.com/assets/content/blackauto/autonews/ferrari-sf90-stadale-le-mans-2.jpg" alt="Contoh Gambar" class="blur">
    <img src="https://www.blackxperience.com/assets/content/blackauto/autonews/ferrari-sf90-stadale-le-mans-2.jpg" alt="Contoh Gambar" class="brightness">
    <img src="https://www.blackxperience.com/assets/content/blackauto/autonews/ferrari-sf90-stadale-le-mans-2.jpg" alt="Contoh Gambar" class="hover-effect">
</body>
</html>