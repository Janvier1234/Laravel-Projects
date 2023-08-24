window.addEventListener('load', function () {
    if ("geolocation" in navigator) {
        navigator.geolocation.getCurrentPosition(function (position) {
            const latitude = position.coords.latitude;
            const longitude = position.coords.longitude;

            fetchWeather(latitude, longitude);
        });
    } else {
        alert("Geolocation is not available in this browser.");
    }
});

function fetchWeather(latitude, longitude) {
    fetch(`/weather?latitude=${latitude}&longitude=${longitude}`)
        .then(response => response.json())
        .then(data => {
            const temperature = data.main.temp;
            const description = data.weather[0].description;
            const humidity = data.main.humidity;

            document.getElementById('temperature').textContent = temperature;
            document.getElementById('description').textContent = description;
            document.getElementById('humidity').textContent = humidity;
        })
        .catch(error => console.error('Error fetching weather:', error));
}
