<?php
    if(!defined('SOURCES')) die("Error");
    /* static */
    $copyright = $cache->get("select name$lang from #_static where type = ? limit 0,1", array('copyright'), 'fetch', 7200);
    $favicon = $cache->get("select photo from #_photo where type = ? and act = ? and find_in_set('hienthi',status) limit 0,1", array('favicon','photo_static'), 'fetch', 7200);
    $logo = $cache->get("select id, photo, options from #_photo where type = ? and act = ? limit 0,1", array('logo','photo_static'), 'fetch', 7200);
    $banner = $cache->get("select photo from #_photo where type = ? and act = ? limit 0,1", array('banner','photo_static'), 'fetch', 7200);
    $slogan = $cache->get("select name$lang from #_static where type = ? limit 0,1", array('slogan'), 'fetch', 7200);
    $sloganSp = $cache->get("select name$lang from #_static where type = ? limit 0,1", array('slogan-sp'), 'fetch', 7200);
    $sloganLv = $cache->get("select name$lang from #_static where type = ? limit 0,1", array('slogan-kien-thuc'), 'fetch', 7200);
    $sloganForm = $cache->get("select name$lang from #_static where type = ? limit 0,1", array('slogan-lien-he'), 'fetch', 7200);
    $address1 = $cache->get("select name$lang from #_static where type = ? limit 0,1", array('dia-chi-1'), 'fetch', 7200);
    $address2 = $cache->get("select name$lang from #_static where type = ? limit 0,1", array('dia-chi-2'), 'fetch', 7200);

    /* multi */
    $social = $cache->get("select name$lang, photo, link from #_photo where type = ? and find_in_set('hienthi',status) order by numb asc", array('social'), 'result', 7200);
    $splist = $cache->get("select name$lang, slugvi, slugen, id from #_product_list where type = ? and find_in_set('hienthi',status) order by numb asc", array('san-pham'), 'result', 7200);
    $ttlist = $cache->get("select name$lang, slugvi, slugen, id from #_news_list where type = ? and find_in_set('hienthi',status) order by numb asc", array('tin-tuc'), 'result', 7200);
    $footer = $cache->get("select name$lang, content$lang from #_static where type = ? limit 0,1", array('footer'), 'fetch', 7200);
    $policy = $cache->get("select name$lang, slugvi, slugen, id, photo from #_news where type = ? and find_in_set('hienthi',status) order by numb asc", array('chinh-sach'), 'result', 7200);
    $levels = $cache->get("select name$lang, slugvi, slugen, desc$lang, date_created, id, photo from #_news where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by id asc", array('kien-thuc'), 'result', 7200);
    $file_pdfs = $cache->get("select name$lang, file_attach, slugvi, slugen, desc$lang, date_created, id, photo from #_news where type = ? and find_in_set('hienthi',status) order by id asc", array('tai-lieu'), 'result', 7200);

    /* Get statistic */
    $counter = $statistic->getCounter();
    $online = $statistic->getOnline();

    /* Newsletter */
    if(!empty($_POST['submit-newsletter']))
    {
        $responseCaptcha = $_POST['recaptcha_response_newsletter'];
        $resultCaptcha = $func->checkRecaptcha($responseCaptcha);
        $scoreCaptcha = (!empty($resultCaptcha['score'])) ? $resultCaptcha['score'] : 0;
        $actionCaptcha = (!empty($resultCaptcha['action'])) ? $resultCaptcha['action'] : '';
        $testCaptcha = (!empty($resultCaptcha['test'])) ? $resultCaptcha['test'] : false;
        $dataNewsletter = array();
        $dataNewsletter = (!empty($_POST['dataNewsletter'])) ? $_POST['dataNewsletter'] : null;

        /* Valid data */
        if(empty($dataNewsletter['email']))
        {
            $flash->set('error', 'Email không được trống');
        }

        if(!empty($dataNewsletter['email']) && !$func->isEmail($dataNewsletter['email']))
        {
            $flash->set('error', 'Email không hợp lệ');
        }

        $error = $flash->get('error');

        if(!empty($error))
        {
            $func->transfer($error, $configBase, false);
        }

        /* Save data */
        if(($scoreCaptcha >= 0.5 && $actionCaptcha == 'Newsletter') || $testCaptcha == true)
        {
            foreach($dataNewsletter as $column => $value)
            {
                $data[$column] = htmlspecialchars($value);
            }
            $dataNewsletter['date_created'] = time();
            $dataNewsletter['type'] = 'dangkynhantin';

            if($d->insert('newsletter',$dataNewsletter))
            {
                $func->transfer("Đăng ký nhận tin thành công. Chúng tôi sẽ liên hệ với bạn sớm.", $configBase);
            }
            else
            {
                $func->transfer("Đăng ký nhận tin thất bại. Vui lòng thử lại sau.", $configBase, false);
            }
        }
        else
        {
            $func->transfer("Đăng ký nhận tin thất bại. Vui lòng thử lại sau.", $configBase, false);
        }
    }
?>