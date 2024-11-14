<?php 
if(!isset($_COOKIE['cookies'])) { ?>
    <div class="cookies">
        <div class="image-and-title">
            <div class="image-wrapper">
                <img src="../Content/Icons/cookie-bite-icon.svg" alt="Icon of a cookie" />
            </div>
            <h2>Cookies</h2>
        </div>
        <p>We use cookies and similar technologies to improve your experience, personalize content, and analyze our traffic. Some cookies are necessary for the website to function, while others help us enhance your experience or provide you with tailored content.</p>
        <p>By clicking “Accept All,” you agree to our use of cookies. You can also customize your preferences by selecting “Cookie Settings.”</p>
        <div class="choice">
            <a class="btn btn-secondary" onclick="cookiePolicy('cookies', 'no', 365)" aria-label="I reject the usage of cookies on the site">Decline</a>
            <a class="btn btn-primary" onclick="cookiePolicy('cookies', 'yes', 365)" aria-label="I accept the usage of cookies on the site">Accept</a>
        </div>
    </div>
<?php }  ?>
<!-- TODO: Add cookie functionality -->