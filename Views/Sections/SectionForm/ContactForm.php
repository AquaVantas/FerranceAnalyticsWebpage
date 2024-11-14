<section class="ContactForm" id="contact-me">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3">
                <h2>Heeft u een vraag voor ons?</h2>
                <p>Wilt u meer weten over ons aanbod, onze tarieven of toch iets anders? Contacteer ons vrijblijvend!</p>
            </div>
            <div class="col-12 col-lg-8 offset-lg-1">
                <div class="content-wrapper">
                    <form id="contactForm" onsubmit="sendMessage(event, 'ne')">
                        <div class="top-line">
                        <label class="sr-only" for="name">Naam:</label>
                        <input type="text" id="name" name="name" placeholder="Daan Jansen">
                        <label class="sr-only" for="email">E-mailadres:</label>
                        <input type="text" id="email" name="email" placeholder="daan.jansen@gmail.com">
                        <label class="sr-only" for="phone">Telefoonnummer:</label>
                        <input type="text" id="phone" name="phone" placeholder="+31612738533">
                        </div>
                        <div class="bottom-line">                        
                        <label class="sr-only" for="message">Bericht:</label>
                        <textarea type="text" id="message" name="message" placeholder="Bericht"></textarea>
                        <input class="btn btn-primary" type="submit" value="Versturen" aria-label="Submit button">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>