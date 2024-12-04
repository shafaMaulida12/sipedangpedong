<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tata Cara Penerimaan Kunjungan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #007bff;
            padding: 10px 20px;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            margin-right: 15px;
        }
        .navbar a:hover {
            text-decoration: underline;
        }
        .content {
            padding: 20px;
            max-width: 900px;
            margin: 20px auto;
        }
        .btn-back {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            margin-top: 20px;
            text-align: center;
        }
        .btn-back:hover {
            background-color: #0056b3;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <div><strong>DPRD Kabupaten Cianjur</strong></div>
        <div>
            <a href="#">Beranda</a>
            <a href="#">Tentang</a>
            <a href="#">Kontak</a>
        </div>
    </div>

    <!-- Konten -->
    <div class="content">
        <div style="background-color: #ffffff; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <!-- Header dengan Garis -->
            <div style="background-color: #f8f9fa; padding: 15px; border-bottom: 3px solid #007bff; border-radius: 8px 8px 0 0;">
                <h1 style="margin: 0; font-size: 24px; text-align: center; color: #333;">Tata Cara Penerimaan Kunjungan</h1>
            </div>

            <!-- Konten -->
            <div style="padding: 30px;">
                <p style="margin-bottom: 20px; font-size: 16px; line-height: 1.6;">
                    Berikut adalah tata cara penerimaan kunjungan di DPRD Kabupaten Cianjur:
                </p>
                <ol style="font-size: 16px; line-height: 1.8; padding-left: 20px;">
                    <li>
                        <b>Surat Permohonan Kunjungan:</b> 
                        Surat permohonan ditujukan kepada Ketua DPRD Kabupaten Cianjur atau Sekretaris DPRD Kabupaten Cianjur. Surat harus diterima paling lambat 3 (tiga) hari kerja sebelum pelaksanaan kunjungan.
                    </li>
                    <li>
                        <b>Surat Tugas Kunjungan:</b> 
                        Unggah surat tugas kunjungan pada halaman yang telah disediakan sebelum kunjungan dimulai.
                    </li>
                    <li>
                        <b>Konfirmasi Rencana Kunjungan:</b> 
                        Hubungi petugas Sub Bagian Protokol melalui nomor <b>0877 1474 2007</b> untuk konfirmasi surat dan detail rencana kunjungan.
                    </li>
                    <li>
                        <b>Surat Perintah Perjalanan Dinas (SPPD):</b> 
                        SPPD harus dilengkapi dengan nama peserta dan tanggal kunjungan. Penandatanganan dilakukan sesuai jumlah peserta yang hadir.
                    </li>
                    <li>
                        <b>Kedisiplinan:</b> 
                        Mohon hadir tepat waktu dan berpakaian rapi atau formal selama kunjungan.
                    </li>
                    <li>
                        <b>Jadwal Kunjungan:</b>
                        <br>Senin - Jumat: pukul 08.00 WIB dan pukul 15.00 WIB. Penerimaan bisa digabung dengan rombongan lain.
                    </li>
                    <li>
                        <b>Penginapan:</b> 
                        Tamu kunjungan wajib menginap di hotel wilayah Kabupaten Cianjur selama kunjungan berlangsung.
                    </li>
                </ol>
                <p style="margin-top: 20px; font-size: 16px; line-height: 1.6;">
                    Terima kasih atas perhatian dan kerjasamanya. Jika membutuhkan informasi lebih lanjut, silakan hubungi pihak Sekretariat DPRD Kabupaten Cianjur.
                </p>
                <!-- Tombol Kembali -->
                <a href="javascript:history.back()" class="btn-back">Kembali</a>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Pengajuan kunjungan
                </button>
            </div>
        </div>
    </div>

    @include('tamu.modal')

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                confirmButtonText: 'OK'
            });
        </script>
    @endif
</body>
</html>
