<html>
    <head>
        <title>

        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script
            src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

        <!-- Popper JS -->
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
            <script>
                function hello() {
                    alert("Selamat Anda mndapatkan hadiah 1 milyar !");
                }

                function tambah() 
                {
                    var bilangan1 = document.getElementById("bil1").value ;
                    var bilangan2 = document.getElementById("bil2").value ;


                    hasil = parseInt(bilangan1) + parseInt(bilangan2) ;

                    document.getElementById("hasil").innerHTML = hasil;
                }
            </script>
    </head>
    <body>
<div class="container">
    <form action="https://google.id" method="get">
        <b3>Form Pendaftaran</b3>
NRP :
<input type="text" name="" id="bil1" class="form-control" 
    value="0">
    <br>
Nama:
<input type="text" name="" id="bil2" class="form-control" 
    value="0">
    <br>
    </form>

<p>
    <h3>Kalkulator</h3>
    Bilangan 1 :
    <input type="text" name="" id="bil1" class="form-control" 
    value="0">
    <br>
    Bilangan 2 :
    <input type="text" name="" id="bil2" class="form-control" 
    value="0">
    <br>
    Hasil penjumahan : <div id="hasil"></div>
    <br>
    <button type="button" class="btn btn-primary" onclick="tambah();">
        Klik Disini
    </button>
</p>


</div>
    </body>
</html>