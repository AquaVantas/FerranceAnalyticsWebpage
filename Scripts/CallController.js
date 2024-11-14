function talkToDatabase(path, data, lang) {
    $.ajax({
        url: path,
        type: 'POST',
        data: data,
        dataType: 'json',
        success: function (response) {
            Swal.fire({
                icon: "success",
                title: (lang == "en") ? "Your message has been sent successfully." : "Bericht verzonden!",
                text: (lang == "en") ? "You will hear back from us shortly." : "Wij komen zo snel mogelijk bij u terug."
            });
        },
        error: function (response) {
            Swal.fire({
                icon: "error",
                title: (lang == "en") ? "Oops..." : "Oeps...",
                text: (lang == "en") ? "Something went wrong. Please try again later." : "Er is iets fout gegaan. Probeer het later nog eens."
            });
        }
    });
}

function sendMessage(event, lang) {
    event.preventDefault();

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const message = document.getElementById('message').value;

    const data = {
        name: name,
        email: email,
        phone: phone,
        message: message
    };
    
    talkToDatabase("/Controllers/sendForm.php", data, lang);
}