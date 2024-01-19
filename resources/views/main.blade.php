<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dinas Pekerjaan Umum dan Penataan Ruang Kota Samarinda</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

    @livewireStyles
</head>

<body>
    @include('partials.navbar')

    <livewire:agenda />

    {{-- javascript --}}
    @livewireScripts

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

    <script src="{{ asset('js/navbar.js') }}"></script>
    <script src="{{ asset('js/agenda.js') }}"></script>

    <!-- Skrip JavaScript untuk Pembaruan Status -->
    <script>
        function updateStatusBasedOnTime(itemId, tanggal, waktu, duration) {
        var statusElement = document.querySelector("#status-" + itemId + " .status-text");
        var dotElement = document.getElementById("dot-" + itemId);

        var now = new Date();
        var currentTime = now.getTime();

        var waktuMulaiString = tanggal + " " + waktu;
        var waktuMulai = new Date(waktuMulaiString);

        // Logika perubahan status
        if (currentTime < waktuMulai.getTime()) {
            // Belum Dimulai
            statusElement.innerHTML = 'Belum Dimulai';
            dotElement.style.display = 'none';
        } else if (currentTime >= waktuMulai.getTime() && currentTime <= waktuMulai.getTime() + duration) {
            // Sedang Berlangsung
            statusElement.innerHTML = 'Sedang Berlangsung';
            dotElement.style.display = 'inline';
        } else if (currentTime > waktuMulai.getTime() + duration) {
            // Selesai
            statusElement.innerHTML = 'Selesai';
            dotElement.style.display = 'none';
        } else {
            // Logika tambahan jika diperlukan
        }
    }

    // Panggil fungsi saat DOM telah dimuat
    document.addEventListener('DOMContentLoaded', function () {
        // Panggil API server untuk mendapatkan data kegiatan
        fetch('/api/agenda-kegiatan')
            .then(response => response.json())
            .then(data => {
                // Daftar item kegiatan yang perlu pembaruan status
                var kegiatanItems = data; // Data dari server

                // Iterasi untuk setiap item kegiatan
                kegiatanItems.forEach(function (item) {
                    // Panggil fungsi untuk setiap item yang membutuhkan pembaruan status
                    updateStatusBasedOnTime(item.id, item.tanggal, item.waktu, 10800000); // Gantilah dengan durasi yang sesuai
                });

                // Atur interval pembaruan status
                setInterval(function () {
                    kegiatanItems.forEach(function (item) {
                        updateStatusBasedOnTime(item.id, item.tanggal, item.waktu, 10800000); // Gantilah dengan durasi yang sesuai
                    });
                }, 1000);
            })
            .catch(error => console.error('Error:', error));
    });
    </script>
</body>

</html>