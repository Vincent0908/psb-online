<?php
include 'service/register.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pendaftaran Online</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="shortcut icon" href="assets/img/65eaaffb57741-TUT-WURI-HANDAYANI.png" type="image/x-icon">
  <script type="text/javascript" src="script/script.js"></script>
</head>

<body>

  <!-- form -->
  <section class="bg-gray-100">
    <div class="lg:grid lg:min-h-screen lg:grid-cols-12">
      <aside class="relative block h-16 lg:col-span-5 lg:h-full xl:col-span-6 flex items-center justify-center">
        <div class="relative w-4/5 h-4/5">
          <img
        
            alt=""
            src="assets/img/65eaaffb57741-TUT-WURI-HANDAYANI.png"
            class="absolute inset-0 w-full h-full object-contain" />
        </div>
      </aside>

      <main
        class="flex items-center justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6 lg:order-last">
        <div class="max-w-xl lg:max-w-3xl">
          <h1 class="mt-6 text-2xl font-bold text-gray-900 sm:text-3xl md:text-4xl">
            Selamat Datang Ke Website Pendaftaran 🎓
          </h1>

          <p class="mt-4 leading-relaxed text-gray-500">
            Silahkan masukkan data diri anda sesuai dengan format yang diberikan. Masuk kehalaman login untuk melihat status pendaftaran anda.
          </p>

          <form action="" class="mt-8 grid grid-cols-6 gap-6" method="POST" id="register-form">
            <div class="col-span-6">
              <label for="nisn" class="block text-sm font-medium text-gray-700"> NISN </label>
              <input
                type="number"
                name="nisn"
                id="nisn"
                required
                placeholder="Masukkan NISN"
                class="block w-full rounded-md border-0 border-gray-200 p-2 pe-12 text-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-200 sm:text-sm p-2 pe-12 text-sm sm:leading-6 shadow-sm
                    [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none">
            </div>

            <div class="col-span-6 sm:col-span-3">
              <label for="nama" class="block text-sm font-medium text-gray-700">
                Nama Lengkap :
              </label>

              <input
                type="text"
                id="nama"
                name="nama"
                required
                placeholder="Masukkan Nama Lengkap"
                class="w-full rounded-md border-gray-200 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-200 sm:text-sm p-2 pe-12 text-sm sm:leading-6  p-2 pe-12 text-sm shadow-sm" />
            </div>

            <div class="col-span-6 sm:col-span-3">
              <label for="asal" class="block text-sm font-medium text-gray-700">
                Asal Sekolah (SMP):
              </label>

              <input
                type="text"
                id="asal"
                name="asal"
                required
                placeholder="Masukkan Asal Sekolah"
                class="w-full rounded-md border-gray-200 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-200 sm:text-sm p-2 pe-12 text-sm sm:leading-6 p-2 pe-12 text-sm shadow-sm" />
            </div>

            <div class="col-span-6 sm:col-span-3">
              <label for="tpt_lahir" class="block text-sm font-medium text-gray-700">
                Tempat Lahir :
              </label>

              <input
                type="text"
                id="tpt_lahir"
                name="tpt_lahir"
                required
                placeholder="Masukkan Tempat Lahir"
                class="w-full rounded-md border-gray-200 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-200 sm:text-sm p-2 pe-12 text-sm sm:leading-6 p-2 pe-12 text-sm shadow-sm" />
            </div>

            <div class="col-span-6 sm:col-span-3">
              <label for="tgl_lahir" class="block text-sm font-medium text-gray-700">
                Tanggal Lahir
              </label>

              <input
                type="date"
                id="tgl_lahir"
                name="tgl_lahir"
                required
                class="w-full rounded-md border-gray-200 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-200 sm:text-sm p-2 pe-12 text-sm sm:leading-6 p-2 pe-12 text-sm shadow-sm" />
            </div>

            <div class="col-span-6 sm:col-span-3">
              <label for="jk" class="block text-sm font-medium text-gray-700">
                Jenis Kelamin
              </label>


              <select class="w-full rounded-md border-gray-200 p-2 pe-12 text-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-200 sm:text-sm p-2 pe-12 text-sm sm:leading-6 shadow-sm" id="jk" name="jk" required>
                <option value="">-- Pilih Jenis Kelamin --</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>

            <div class="col-span-6 sm:col-span-3">
              <label for="alamat" class="block text-sm font-medium text-gray-700">
                Alamat
              </label>

              <input
                type="text"
                id="alamat"
                name="alamat"
                placeholder="Masukkan Alamat"
                required
                class="w-full rounded-md border-gray-200 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-200 sm:text-sm p-2 pe-12 text-sm sm:leading-6 p-2 pe-12 text-sm shadow-sm" />
            </div>

            <div class="col-span-6">
              <label for="jurusan" class="block text-sm font-medium text-gray-700"> Jurusan </label>

              <select name="jurusan" id="jurusan" class="w-full rounded-md border-gray-200 p-2 pe-12 text-sm shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-200 sm:text-sm p-2 pe-12 text-sm sm:leading-6" required>
                <option value="">-- Pilih Jurusan --</option>
                <option value="Desain bangunan">Desain bangunan</option>
                <option value="Teknik Konstruksi">Teknik Konstruksi</option>
                <option value="Teknik Kendaraan">Teknik Kendaraan</option>
                <option value="Teknik Sepeda Motor">Teknik Sepeda Motor</option>
                <option value="Teknik Elektro">Teknik Elektro</option>
                <option value="Teknik Mesin">Teknik Mesin</option>
                <option value="Teknik Listrik">Teknik Listrik</option>
                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                <option value="Perhotelan">Perhotelan</option>
              </select>
            </div>

            <div class="col-span-6">
              <label for="agama" class="block text-sm font-medium text-gray-700"> Agama </label>

              <select name="agama" id="agama" class="w-full rounded-md border-gray-200 p-2 pe-12 text-sm shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-200 sm:text-sm p-2 pe-12 text-sm sm:leading-6" required>
                <option value="">-- Pilih --</option>
                <option value="islam">Islam</option>
                <option value="kristen">Kristen</option>
                <option value="katolik">Katolik</option>
                <option value="hindu">Hindu</option>
                <option value="buddha">Buddha</option>
                <option value="konghucu">Konghucu</option>
              </select>
            </div>

            <div class="col-span-6 sm:col-span-3">
              <label for="hp" class="block text-sm font-medium text-gray-700">
                Nomor Handphone
              </label>
              <input
                type="number"
                id="hp"
                name="hp"
                placeholder="Masukkan Nomor Handphone"
                class="w-full rounded-md border-gray-200 p-2 pe-12 text-sm shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-200 sm:text-sm p-2 pe-12 text-sm sm:leading-6
                             [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none" />
            </div>

            <div class="col-span-6 sm:col-span-3">
              <label for="email" class="block text-sm font-medium text-gray-700">
                Email
              </label>

              <input
                type="email"
                id="email"
                name="email"
                required
                placeholder="Masukkan Email"
                class="w-full rounded-md border-gray-200 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-200 sm:text-sm p-2 pe-12 text-sm sm:leading-6 p-2 pe-12 text-sm shadow-sm" />
            </div>

            <div class="col-span-6">
              <p class="text-sm text-gray-500 font-bold">
                Pastikan semua data yang di input sudah sesuai
              </p>
            </div>

            <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
              <button
                class="inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-blue-500  focus:outline-none focus:ring"
                type="submit"
                name="daftar"
                value="submit">
                Daftar Sekarang
              </button>

              <p class="mt-4 text-sm text-gray-500 sm:mt-0">
                Sudah Pernah mendaftar?
                <a href="login.php" require class="font-semibold leading-6 text-blue-600 hover:text-blue-500">Log in</a>.
              </p>
            </div>
          </form>
        </div>
      </main>
    </div>
  </section>



</body>

</html>