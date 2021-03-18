<div id="header" <?php if(current_user_can('editor') || current_user_can('administrator')) { echo 'class="adminbar"'; } ?>>
    <div class="header-top">
        <div class="container header-top-content">
            <div class="row align-items-center h-100">
                <div class="header-top-logo col-6 col-lg-3">
                    <a href="/"><img src="<?php echo get_template_directory_uri()?>/img/logo.png" class="w-auto h-100 d-block mr-auto m-lg-auto" /></a>
                </div>
                <div class="header-top-name col-lg-6 d-none d-lg-block text-center text-uppercase">Ефектів енерджи солюшинс</div>
                <div class="header-top-contact col-6 col-lg-3 d-flex flex-row flex-lg-column justify-content-end justify-content-lg-evenly">
                    <div id="header-top-contact-email" class="header-top-contact-item text-center">
                        <div class="header-top-contact-imgs d-flex justify-content-evenly">
                            <a href="mailto:vovkadim1983@gmail.com"><img src="<?php echo get_template_directory_uri()?>/img/contacts/email.png" /></a>
                        </div>
                        <a href="mailto:vovkadim1983@gmail.com">vovkadim1983@gmail.com</a>
                    </div>
                    <div id="header-top-contact-telegram" class="header-top-contact-item text-center">
                        <div class="header-top-contact-imgs d-flex justify-content-evenly">
                            <a href="tel:380979059973"><img src="<?php echo get_template_directory_uri()?>/img/contacts/phone.png" /></a>
                            <img src="<?php echo get_template_directory_uri()?>/img/contacts/telegram.png" />
                        </div>
                        <span>Телефон и месенджеры</span>
                        <br>
                        <a href="tel:380979059973">+380979059973</a>
                    </div>
                </div>
                <div class="header-top-name col-12 d-flex d-lg-none align-items-center justify-content-center text-uppercase">Ефектів енерджи солюшинс</div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container header-bottom-content d-flex justify-content-between">
            <a class="header-bottom-item d-none d-lg-block btn btn-light btn-sm<?php if(is_front_page()) echo " current" ?>" href="/">О нас</a> 
            <a class="header-bottom-item d-none d-lg-block btn btn-light btn-sm<?php if(is_page("news")) echo " current" ?>" href="/news">Новости</a>
            <a class="header-bottom-item d-none d-lg-block btn btn-light btn-sm<?php if(is_page("portfolio")) echo " current" ?>" href="/portfolio">Портфолио</a> 
            <a class="header-bottom-item d-none d-lg-block btn btn-light btn-sm<?php if(is_page("contacts")) echo " current" ?>" href="/contacts">Контакты</a> 
            <div id="header-bottom-item-mob-btn" class="header-bottom-item d-block d-lg-none btn btn-light btn-sm">
                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                </svg>
            </div>
        </div>
    </div>
    <div id="header-mobile" class="header-mobile vw-100 vh-100 position-absolute top-0 start-0 d-none d-lg-none d-flex flex-column justify-content-center p-3">
        <div id="header-mobile-close-btn" class="btn btn-dark btn-sm position-absolute">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg>
        </div>
        <div class="w-100 p-3 bg-dark rounded">
            <div class="w-100 d-flex justify-content-between mb-4">
                <a class="header-mobile-item btn btn-light btn-sm<?php if(is_front_page()) echo " current" ?>" href="/">О нас</a>
                <a class="header-mobile-item btn btn-light btn-sm<?php if(is_page("news")) echo " current" ?>" href="/news">Новости</a>
            </div>
            <div class="w-100 d-flex justify-content-between">
                <a class="header-mobile-item btn btn-light btn-sm<?php if(is_page("portfolio")) echo " current" ?>" href="/portfolio">Портфолио</a>
                <a class="header-mobile-item btn btn-light btn-sm<?php if(is_page("contacts")) echo " current" ?>" href="/contacts">Контакты</a>
            </div>
        </div>
    </div>
</div>