document.addEventListener('DOMContentLoaded', function () {
    "use strict";
    var audioElement = document.getElementById('audioElement'),
        playPauseButton = document.getElementById('playPauseButton');

    // Set up play/pause button functionality
    playPauseButton.addEventListener('click', function () {
        if (audioElement.paused) {
            audioElement.play();
            playPauseButton.innerHTML = '<i class="material-icons icon-size">pause</i>'; // for pause
        } else {
            audioElement.pause();
            playPauseButton.innerHTML = '<i class="material-icons icon-size">play_arrow</i>'; // for play
        }
    });

    audioElement.onended = function () {
        playPauseButton.innerHTML = '<i class="material-icons icon-size">play_arrow</i>'; // for play
    };

    // Set up countdown
  // Set the date and time for the countdown
    const countdownDate = new Date("September 29, 2024 17:00:00 PDT").getTime();

// Function to update the display based on the countdown
function updateCountdownDisplay() {
  const now = new Date().getTime();
  const distance = countdownDate - now;

  if (distance <= 0) {
    clearInterval();
    document.getElementById("countdown").style.display = "none";
    document.querySelector(".countdown-container").style.display = "none";
	{
    document.querySelector(".on-air").style.display = "block";
    }
  } else {

    // Calculate days, hours, minutes, and seconds
    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the countdown
    document.getElementById("countdown").innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;
    {
    document.querySelector(".countdown-container").style.display = "block"; 
    }
  }
}

// Update the display immediately when the page loads
updateCountdownDisplay();

// Update the countdown every second
const x = setInterval(updateCountdownDisplay, 1000);
});
