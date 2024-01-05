function updateClock() {
    var currentTime = new Date();

    var optionsDate = {
        timeZone: 'Asia/Makassar',
        weekday: 'long',
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    };
    
    var optionsTime = {
        timeZone: 'Asia/Makassar',
        hour12: false, 
        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit',
        timeZoneName: 'short'
    };
    
    var formattedDate = currentTime.toLocaleDateString('id-ID', optionsDate);
    var formattedTime = currentTime.toLocaleTimeString('id-ID', optionsTime);
    
    document.getElementById('current-time').innerHTML = formattedDate + ' | ' + formattedTime;

    requestAnimationFrame(updateClock);
}

// Update the clock every second
updateClock();