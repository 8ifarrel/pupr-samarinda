// Jam Navbar
function updateClock() {
    var elementJam = document.getElementById("current-time");
    var now = new Date();
    var days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
    var day = days[now.getDay()];
    var date = now.getDate();
    var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    var month = months[now.getMonth()];
    var year = now.getFullYear();
    var hours = now.getHours();
    var minutes = now.getMinutes();
    var seconds = now.getSeconds();
    var timeString = day + ', ' + date + ' ' + month + ' ' + year + ' | ' + (hours < 10 ? "0" : "") + hours + ':' + (minutes < 10 ? "0" : "") + minutes + ':' + (seconds < 10 ? "0" : "") + seconds + ' WITA ' ;
    elementJam.innerText = timeString;
}

updateClock();
setInterval(updateClock, 1000);

// Bulan agenda
function updateAgenda() {
    var elementJam = document.getElementById("current-agenda");
    var now = new Date();
    var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    var month = months[now.getMonth()];
    var year = now.getFullYear();
    var timeString = month + ' ' + year;
}

updateAgenda();
setInterval(updateAgenda, 1000);

// Tanggal pada Minggu ini
var curr = new Date();
var first = curr.getDate() - curr.getDay();
var senin = first + 1;
var selasa = first + 2;
var rabu = first + 3;
var kamis = first + 4;
var jumat = first + 5;
var sabtu = first + 6;
var minggu = first + 7;

document.getElementById("senin").innerHTML = senin;
document.getElementById("selasa").innerHTML  = selasa;
document.getElementById("rabu").innerHTML = rabu;
document.getElementById("kamis").innerHTML = kamis;
document.getElementById("jumat").innerHTML = jumat;
document.getElementById("sabtu").innerHTML = sabtu;
document.getElementById("minggu").innerHTML  = minggu;

// Tanggal yang dipilih pada agenda kegiatan

function updateStatus() {
    var statusElement = document.getElementById("status-{{ $item->id }}"); // Perbaikan ID disini
    var now = new Date();
    var startTime = new Date("{{ $item->waktu }}").getTime(); // Gantilah dengan cara mendapatkan waktu mulai dari data Anda

    // Waktu saat ini
    var currentTime = now.getTime();

    // Durasi kegiatan dalam milidetik (misal: 1 jam = 3600000 milidetik)
    var duration = 3600000; // Gantilah dengan durasi yang sesuai

    // Logika perubahan status
    if (currentTime >= startTime && currentTime <= startTime + duration) {
        statusElement.innerHTML = '<small id="status-text">Sedang Berlangsung</small>';
    } else if (currentTime > startTime + duration) {
        statusElement.innerHTML = '<small id="status-text">Selesai</small>';
    } else {
        statusElement.innerHTML = '<small id="status-text">Akan Berlangsung</small>';
    }
}

updateStatus();
setInterval(updateStatus, 1000);




