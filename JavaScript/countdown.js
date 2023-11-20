const min = document.getElementById("minutos");
const seg = document.getElementById("segundos");

let totalSeconds = 10 * 60;

function countdown() {
    const minutos = Math.floor(totalSeconds / 60);
    const segundos = totalSeconds % 60;

    min.innerHTML = formatTimer(minutos);
    seg.innerHTML = formatTimer(segundos);

    if (totalSeconds > 0) {
        totalSeconds--;
    } else {
        clearInterval(intervalId);
        console.log("Tempo expirado!");
        window.location.href = "html/login.html";

    }
}

function formatTimer(time) {
    return time < 10 ? `0${time}` : time;
}

countdown();
const intervalId = setInterval(countdown, 1000);