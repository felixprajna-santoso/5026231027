<html>
    <head>
        <title>Form Pendaftaran</title>
  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    /* Styling tombol submit jadi hijau */
    button[type="submit"] {
      background-color: #28a745; /* hijau */
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }

    button[type="submit"]:hover {
      background-color: #218838;
    }
  </style>
</head>
<body>
  <h2>Form Pendaftaran</h2>
  <form id="myForm">
    <label for="nama">Nama:</label><br>
    <input type="text" id="nama" name="nama"><br><br>

    <label for="nrp">NRP:</label><br>
    <input type="text" id="nrp" name="nrp"><br><br>

    <button type="submit">Daftar</button>
  </form>

  <script>
    document.getElementById('myForm').addEventListener('submit', function(event) {
      event.preventDefault(); // Mencegah form terkirim

      const nama = document.getElementById('nama').value.trim();
      const nrp = document.getElementById('nrp').value.trim();

      // Validasi nama: tidak boleh ada angka
      if (/\d/.test(nama)) {
        Swal.fire({
          icon: 'error',
          title: 'Nama Tidak Valid',
          text: 'Nama tidak boleh mengandung angka!'
        });
        return;
      }

      // Validasi nama: minimal 2 huruf
      if (nama.length < 2) {
        Swal.fire({
          icon: 'warning',
          title: 'Nama Terlalu Pendek',
          text: 'Nama minimal 2 huruf.'
        });
        return;
      }

      // Validasi NRP: tidak boleh kosong (optional: bisa juga ditambah harus angka)
      if (nrp === '') {
        Swal.fire({
          icon: 'warning',
          title: 'NRP Kosong',
          text: 'NRP wajib diisi.'
        });
        return;
      }

      // Semua validasi lolos
      Swal.fire({
        title: "Pendaftaran Berhasil!",
        text: `Selamat datang, ${nama}!`,
        icon: "success"
      });

      // Reset form setelah sukses
      document.getElementById('myForm').reset();
    });
  </script>
</body>
</html>