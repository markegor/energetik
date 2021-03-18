<div class="row g-0">
    <h2 class="mb-5">Контакты:</h2>
    <div class="col-12 col-lg-6">
        <div class="col-12 mb-5">
            <h3 class="mb-2">Руководитель Вовк Вадим</h3>
            <div class="images d-flex align-items-center">
                <img class="contacts-item me-2" src="<?php echo PermaLinks("email")["icon"] ?>" />
                <a href="mailto:<?php echo PermaLinks("email")["value"] ?>"><?php echo PermaLinks("email")["value"] ?></a>
            </div>
        </div>
        <div class="col-12 mb-5">
            <h3 class="mb-2">Телефон и месенджеры</h3>
            <div class="images d-flex align-items-center">
                <img class="contacts-item me-2" src="<?php echo PermaLinks("telegram")["icon"] ?>" />
                <a href="tel:<?php echo PermaLinks("phone")["value"] ?>">+<?php echo PermaLinks("phone")["value"] ?></a>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6">
        <h3 class="mb-3">Соц.сети:</h3>
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