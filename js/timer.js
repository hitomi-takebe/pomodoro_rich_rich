$(document).ready(function() {
    let minutes = 25;
    let seconds = 0;
    let countdownInterval;
    let totalSeconds = minutes * 60;

    function updateProgressBar() {
        let elapsedSeconds = (25 * 60) - (minutes * 60 + seconds);
        let progress = (elapsedSeconds / totalSeconds) * 100;
        $("#progressBar").css("width", progress + "%");
    }

    function resetTimer() {
        clearInterval(countdownInterval);
        minutes = 25;
        seconds = 0;
        $("#minutes").text("25");
        $("#seconds").text("00");
        $("#progressBar").css("width", "0%");
    }

    $("#startButton").click(function () {
        clearInterval(countdownInterval); // 既存のインターバルをクリア
        countdownInterval = setInterval(function() {
            if (seconds === 0) {
                if (minutes === 0) {
                    clearInterval(countdownInterval);
                    alert("終了しました！");
                    // let audio = new Audio('path/to/your/soundfile.mp3');
                    // audio.play();
                    return;
                }
                minutes--;
                seconds = 59;
            } else {
                seconds--;
            }

            $("#minutes").text(minutes.toString().padStart(2, '0'));
            $("#seconds").text(seconds.toString().padStart(2, '0'));
            updateProgressBar();
        }, 1000);
    });

    $("#stopButton").click(function() {
        clearInterval(countdownInterval);
    });

    $("#resetButton").click(function() {
        resetTimer();
    });
});