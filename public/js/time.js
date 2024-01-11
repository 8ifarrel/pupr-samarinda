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
    elementJam.innerText = timeString;
}

updateAgenda();
setInterval(updateAgenda, 1000);

// Tanggal pada Minggu ini
var curr = new Date();
var temp = curr.getDate() - curr.getDay();
var senin = temp + 1;
var selasa = temp + 2;
var rabu = temp + 3;
var kamis = temp + 4;
var jumat = temp + 5;
var sabtu = temp + 6;
var minggu = temp + 7;

document.getElementById("senin").innerHTML = senin;
document.getElementById("selasa").innerHTML  = selasa;
document.getElementById("rabu").innerHTML = rabu;
document.getElementById("kamis").innerHTML = kamis;
document.getElementById("jumat").innerHTML = jumat;
document.getElementById("sabtu").innerHTML = sabtu;
document.getElementById("minggu").innerHTML  = minggu;