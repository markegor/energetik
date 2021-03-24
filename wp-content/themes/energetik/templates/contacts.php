<div class="row g-0">
    <h2 class="mb-5">Контакти:</h2>
    <div class="col-12 col-lg-6">
        <div class="col-12 mb-5">
            <h3 class="mb-2">Керівник Вовк Вадим</h3>
            <div class="images d-flex align-items-center">
                <a href="mailto:<?php echo PermaLinks("email")["value"] ?>"><img class="contacts-item me-2" src="<?php echo PermaLinks("email")["icon"] ?>" /></a>
                <a href="mailto:<?php echo PermaLinks("email")["value"] ?>"><?php echo PermaLinks("email")["value"] ?></a>
            </div>
        </div>
        <div class="col-12 mb-5">
            <h3 class="mb-2">Телефон і месенджери</h3>
            <div class="images d-flex align-items-center">
            <a href="mailto:<?php echo PermaLinks("whatsapp")["value"] ?>"><img class="contacts-item me-2" src="<?php echo PermaLinks("whatsapp")["icon"] ?>" /></a>
                <a href="tel:<?php echo PermaLinks("phone")["value"] ?>">+<?php echo PermaLinks("phone")["value"] ?></a>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6">
        <h3 class="mb-3">Соц.мережі:</h3>
        <div class="social d-flex align-items-center">
            <a class="social-item" href="<?php echo PermaLinks("linkedin")["value"] ?>">
                <img class="me-2" src="<?php echo PermaLinks("linkedin")["icon"] ?>" />
            </a>
            <a class="social-item" href="<?php echo PermaLinks("facebook")["value"] ?>">
                <img class="contacts-item me-2" src="<?php echo PermaLinks("facebook")["icon"] ?>" />
            </a>
        </div>
    </div>
</div>