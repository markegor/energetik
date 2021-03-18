<?php 
function dump($Array) {
    echo "<pre>";
    print_r($Array);
    echo "</pre>";
}

function PermaLinks($Type) {
    if($Type === "email") {
        return [
            "value" => "vovkadim1983@gmail.com",
            "icon" => get_template_directory_uri() . "/img/contacts/email.png",
        ];
    } else if($Type === "phone") {
        return [
            "value" => "380979059973",
            "icon" => get_template_directory_uri() . "/img/contacts/phone.png",
        ];
    } else if($Type === "facebook") {
        return [
            "value" => "https://www.facebook.com/groups/effectiveenergysolutions",
            "icon" => get_template_directory_uri() . "/img/contacts/facebook.png",
        ];
    } else if($Type === "linkedin") {
        return [
            "value" => "https://www.linkedin.com/in/vadim-vovk-a0137467/",
            "icon" => get_template_directory_uri() . "/img/contacts/linkedin.png",
        ];
    } else if($Type === "telegram") {
        return [
            "value" => "",
            "icon" => get_template_directory_uri() . "/img/contacts/telegram.png",
        ];
    }
}
?>