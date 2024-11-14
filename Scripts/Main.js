var script = document.createElement('script');
script.src = 'https://code.jquery.com/jquery-3.4.1.min.js';
script.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(script);

function cookiePolicy(name, value, expirationDays) {
    const expiration = new Date();
    expiration.setTime(expiration.getTime() + (expirationDays * 24 * 60 * 60 * 1000));

    const cookieValue = encodeURIComponent(value) + "; expires=" + expiration.toUTCString() + "; path=/";
    document.cookie = name + "=" + cookieValue;
    location.reload();
}

$(document).ready(function () {
    // Function to animate the numbers
    function animateValue(id, start, end, duration, suffix = '') {
        const obj = $(`#${id}`);
        let current = start;
        const range = end - start;
        const increment = end > start ? 1 : -1;
        const stepTime = Math.abs(Math.floor(duration / range));

        const timer = setInterval(function () {
            current += increment;
            obj.text(current + suffix); // Add suffix or prefix
            if (current == end) {
                clearInterval(timer);
            }
        }, stepTime);
    }

    // Call the function for each number with suffix
    animateValue("years", 0, 15, 2000, '+');             // 15+
    animateValue("certificates", 0, 50, 2000, '+');      // 50+
    animateValue("employee", 0, 100, 2000, '%');         // 100%
    animateValue("penguins", 0, 1000, 2000, '+');        // 1000+ penguin photos liked
});