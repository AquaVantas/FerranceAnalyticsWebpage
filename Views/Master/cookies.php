<?php 
if(!isset($_COOKIE['cookies'])) { ?>
    <div class="cookies">
        <div class="image-and-title">
            <div class="image-wrapper">
                <img src="Content/Icons/cookie-bite-icon.svg" alt="Icon of a cookie" />
            </div>
            <h2>Cookies</h2>
        </div>
        <p>Wij gebruiken cookies en vergelijkbare technologieën om uw ervaring te verbeteren, inhoud te personaliseren en ons verkeer te analyseren. Sommige cookies zijn noodzakelijk voor de werking van de website, terwijl andere ons helpen uw ervaring te verbeteren of u gepersonaliseerde inhoud aan te bieden.</p>
        <p>Door op “Alles Accepteren” te klikken, gaat u akkoord met ons gebruik van cookies. U kunt uw voorkeuren ook aanpassen door “Cookie-instellingen” te selecteren.</p>
        <div class="choice">
            <a class="btn btn-secondary" onclick="cookiePolicy('cookies', 'no', 365)" aria-label="Ik wijs het gebruik van cookies af op deze website">Afwijzen</a>
            <a class="btn btn-primary" onclick="cookiePolicy('cookies', 'yes', 365)" aria-label="Ik sta het gebruik van cookies toe op deze website">Toestaan</a>
        </div>
    </div>
<?php }  ?>
<!-- TODO: Add cookie functionality -->