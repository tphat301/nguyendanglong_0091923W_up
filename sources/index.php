<?php
    if (!defined('SOURCES')) die("Error");
    /* static */
    $banner_seo_home = $cache->get("select id, photo, options from #_photo where type = ? and act = ? limit 0,1", array('banner-seo-home', 'photo_static'), 'fetch', 7200);
    $Banner1 = $cache->get("select name$lang, photo, link from #_photo where type = ? and act = ? and find_in_set('hienthi',status) limit 0,1", array('banner1', 'photo_static'), 'fetch', 7200);
    $Banner2 = $cache->get("select name$lang, photo, link from #_photo where type = ? and act = ? and find_in_set('hienthi',status) limit 0,1", array('banner2', 'photo_static'), 'fetch', 7200);
    $Banner3 = $cache->get("select name$lang, photo, link from #_photo where type = ? and act = ? and find_in_set('hienthi',status) limit 0,1", array('banner3', 'photo_static'), 'fetch', 7200);
    $avatarForm = $cache->get("select name$lang, photo, link from #_photo where type = ? and act = ? and find_in_set('hienthi',status) limit 0,1", array('banner-form', 'photo_static'), 'fetch', 7200);
    $about = $cache->get("select id, name$lang, desc$lang, photo from #_static where type = ? limit 0,1", array('gioi-thieu'), 'fetch', 7200);

    /* multi */
    $slider = $cache->get("select name$lang, desc$lang, photo, link from #_photo where type = ? and find_in_set('hienthi',status) order by numb asc", array('slide'), 'result', 7200);
    $pronb = $cache->get("select name$lang, slugvi, slugen, id, photo, regular_price, sale_price, discount, type from #_product where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by id desc", array('san-pham'), 'result', 7200);
    $splistnb = $cache->get("select name$lang, slugvi, slugen, id from #_product_list where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb asc", array('san-pham'), 'result', 7200);

    /* SEO */
    $seoDB = $seo->getOnDB(0, 'setting', 'update', 'setting');
    if (!empty($seoDB['title' . $seolang])) $seo->set('h1', $seoDB['title' . $seolang]);
    if (!empty($seoDB['title' . $seolang])) $seo->set('title', $seoDB['title' . $seolang]);
    if (!empty($seoDB['keywords' . $seolang])) $seo->set('keywords', $seoDB['keywords' . $seolang]);
    if (!empty($seoDB['description' . $seolang])) $seo->set('description', $seoDB['description' . $seolang]);
    $seo->set('url', $func->getPageURL());
    $imgJson = (!empty($banner_seo_home['options'])) ? json_decode($banner_seo_home['options'], true) : null;
    if (empty($imgJson) || ($imgJson['p'] != $banner_seo_home['photo'])) {
        $imgJson = $func->getImgSize($banner_seo_home['photo'], UPLOAD_PHOTO_L . $banner_seo_home['photo']);
        $seo->updateSeoDB(json_encode($imgJson), 'photo', $banner_seo_home['id']);
    }
    if (!empty($imgJson)) {
        $seo->set('photo', $configBase . THUMBS . '/' . $imgJson['w'] . 'x' . $imgJson['h'] . 'x2/' . UPLOAD_PHOTO_L . $banner_seo_home['photo']);
        $seo->set('photo:width', $imgJson['w']);
        $seo->set('photo:height', $imgJson['h']);
        $seo->set('photo:type', $imgJson['m']);
    }
?>