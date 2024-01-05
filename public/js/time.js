// function updateClock() {
//     var currentTime = new Date();

//     var optionsDate = {
//         timeZone: 'Asia/Makassar',
//         weekday: 'long',
//         year: 'numeric',
//         month: 'long',
//         day: 'numeric'
//     };
    
//     var optionsTime = {
//         timeZone: 'Asia/Makassar',
//         hour12: false, 
//         hour: '2-digit',
//         minute: '2-digit',
//         second: '2-digit',
//         timeZoneName: 'short'
//     };
    
//     var formattedDate = currentTime.toLocaleDateString('id-ID', optionsDate);
//     var formattedTime = currentTime.toLocaleTimeString('id-ID', optionsTime);
    
//     document.getElementById('current-time').innerHTML = formattedDate + ' | ' + formattedTime;

//     requestAnimationFrame(updateClock);
// }

// // Update the clock every second
// updateClock();

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