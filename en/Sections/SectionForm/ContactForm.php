<section class="ContactForm" id="contact-me">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3">
                <h2>Do you have any questions for us?</h2>
                <p>You want to learn more about what we can offer or inquire about other things? Write to us and we'll gladly reply!</p>
            </div>
            <div class="col-12 col-lg-8 offset-lg-1">
                <div class="content-wrapper">
                    <form id="contactForm" onsubmit="sendMessage(event, 'en')">
                        <div class="top-line">
                        <label class="sr-only" for="name">Name and surname:</label>
                        <input type="text" id="name" name="name" placeholder="John Doe">
                        <label class="sr-only" for="email">Email:</label>
                        <input type="text" id="email" name="email" placeholder="john.doe@gmail.com">
                        <label class="sr-only" for="phone">Phone:</label>
                        <input type="text" id="phone" name="phone" placeholder="+31612738533">
                        </div>
                        <div class="bottom-line">                        
                        <label class="sr-only" for="message">Message:</label>
                        <textarea type="text" id="message" name="message" placeholder="Message"></textarea>
                        <input class="btn btn-primary" type="submit" value="Send message" aria-label="Submit button">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>