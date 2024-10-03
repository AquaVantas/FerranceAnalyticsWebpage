<section class="ContactForm" id="contact-me">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3">
                <h2>Do you have any questions for us?</h2>
                <p>You want to learn more about what we can offer or inquire about other things? Write to us and we'll gladly reply!</p>
            </div>
            <div class="col-12 col-lg-8 offset-lg-1">
                <div class="content-wrapper">
                    <form method="post" action="Controllers/submit-form.php">
                        <div class="top-line">
                        <label class="sr-only" for="first_name">First name:</label>
                        <input type="text" id="first_name" name="first_name" value="John">
                        <label class="sr-only" for="last_name">Last name:</label>
                        <input type="text" id="last_name" name="last_name" value="Doe">
                        <label class="sr-only" for="email">Email:</label>
                        <input type="text" id="email" name="email" value="john.doe@gmail.com">
                        </div>
                        <div class="bottom-line">                        
                        <label class="sr-only" for="message">Message:</label>
                        <textarea type="text" id="message" name="message" value="Message"></textarea>
                        <input class="btn btn-primary" type="submit" value="Submit" aria-label="Submit button">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>