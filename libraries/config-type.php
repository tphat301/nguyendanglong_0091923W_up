<?php

    /* Config type - Product */
    require_once LIBRARIES.'type/config-type-product.php';

    /* Config type - Tags */
    require_once LIBRARIES.'type/config-type-tags.php';

    /* Config type - Newsletter */
    require_once LIBRARIES.'type/config-type-newsletter.php';

    /* Config type - News */
    require_once LIBRARIES.'type/config-type-news.php';

    /* Config type - Static */
    require_once LIBRARIES.'type/config-type-static.php';

    /* Config type - Photo */
    require_once LIBRARIES.'type/config-type-photo.php';

    /* Seo page */
    $config['seopage']['page'] = array(
        "san-pham" => "Sản phẩm",
        "gioi-thieu" => "Giới thiệu",
        "tai-lieu" => "Tài liệu",
        "kien-thuc" => "Kiến thức",
        "lien-he" => "Liên hệ"
    );
    $config['seopage']['width'] = 300;
    $config['seopage']['height'] = 200;
    $config['seopage']['thumb'] = '300x200x1';
    $config['seopage']['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Setting */
    $config['setting']['address'] = false;
    $config['setting']['phone'] = true;
    $config['setting']['hotline'] = true;
    $config['setting']['zalo'] = true;
    $config['setting']['oaidzalo'] = false;
    $config['setting']['email'] = true;
    $config['setting']['website'] = true;
    $config['setting']['worktime'] = false;
    $config['setting']['fanpage'] = true;
    $config['setting']['coords'] = true;
    $config['setting']['coords_iframe'] = true;
    $config['setting']['link_googlemaps'] = true;

    /* Quản lý import */
    $config['import']['images'] = true;
    $config['import']['thumb'] = '100x100x1';
    $config['import']['img_type'] = ".jpg|.gif|.png|.jpeg|.gif";

    /* Quản lý export */
    $config['export']['category'] = true;

    /* Quản lý tài khoản */
    $config['user']['active'] = false;
    $config['user']['admin'] = true;
    $config['user']['check_admin'] = array("hienthi" => "Kích hoạt");
    $config['user']['member'] = true;
    $config['user']['check_member'] = array("hienthi" => "Kích hoạt");

    /* Quản lý giỏ hàng */
    $config['order']['active'] = true;
    $config['order']['search'] = false;
    $config['order']['excel'] = true;
    $config['order']['word'] = true;
    $config['order']['excelall'] = true;
    $config['order']['wordall'] = true;
    $config['order']['thumb'] = '100x100x1';
?>