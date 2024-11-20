// Set the date we're counting down to (May 5, 2025)
const countDownDate = new Date("May 5, 2025 00:00:00").getTime();

// Update the countdown every 1 second
const countdownTimer = setInterval(function() {
    // Get today's date and time
    const now = new Date().getTime();

    // Find the distance between now and the countdown date
    const distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Update the HTML elements
    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours.toString().padStart(2, '0');
    document.getElementById("minutes").innerHTML = minutes.toString().padStart(2, '0');
    document.getElementById("seconds").innerHTML = seconds.toString().padStart(2, '0');

    // If the countdown is finished, display expired message
    if (distance < 0) {
        clearInterval(countdownTimer);
        document.getElementById("countdown").innerHTML = "The Summit Has Started!";
    }
}, 1000);
