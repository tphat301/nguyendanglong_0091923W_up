<?php
    /* Kiến thức */
    $nametype = "kien-thuc";
    $config['news'][$nametype]['title_main'] = "Kiến thức";
    $config['news'][$nametype]['dropdown'] = false;
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['office'] = false;/*chuc vu*/
    $config['news'][$nametype]['copy'] = false;
    $config['news'][$nametype]['copy_image'] = false;
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['gallery'] = array
    (
        $nametype => array
        (
            "title_main_photo" => "Hình ảnh kiến thức",
            "title_sub_photo" => "Hình ảnh",
            "check_photo" => array("hienthi" => "Hiển thị"),
            "number_photo" => 3,
            "images_photo" => true,
            "avatar_photo" => true,
            "name_photo" => true,
            "width_photo" => 590,
            "height_photo" => 380,
            "thumb_photo" => '100x100x1',
            "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif'
        )
    );
    $config['news'][$nametype]['desc'] = true;
    $config['news'][$nametype]['content'] = true;
    $config['news'][$nametype]['content_cke'] = true;
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['width'] = 590;
    $config['news'][$nametype]['height'] = 380;
    $config['news'][$nametype]['thumb'] = '100x100x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /*Tài liệu */
    $nametype = "tai-lieu";
    $config['news'][$nametype]['title_main'] = "Tài liệu";
    $config['news'][$nametype]['dropdown'] = false;
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['office'] = false;/*chuc vu*/
    $config['news'][$nametype]['copy'] = false;
    $config['news'][$nametype]['copy_image'] = false;
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['gallery'] = array
    (
        $nametype => array
        (
            "title_main_photo" => "Hình ảnh tài liệu",
            "title_sub_photo" => "Hình ảnh",
            "check_photo" => array("hienthi" => "Hiển thị"),
            "number_photo" => 3,
            "images_photo" => true,
            "avatar_photo" => true,
            "name_photo" => true,
            "width_photo" => 590,
            "height_photo" => 380,
            "thumb_photo" => '100x100x1',
            "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif'
        )
    );
    $config['news'][$nametype]['desc'] = true;
    $config['news'][$nametype]['content'] = true;
    $config['news'][$nametype]['content_cke'] = true;
    $config['news'][$nametype]['file'] = true;
    $config['news'][$nametype]['file_type'] = '.pdf';
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['width'] = 590;
    $config['news'][$nametype]['height'] = 380;
    $config['news'][$nametype]['thumb'] = '100x100x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Chính sách */
    $nametype = "chinh-sach";
    $config['news'][$nametype]['title_main'] = "Chính sách";
    $config['news'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['copy'] = false;
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['content'] = true;
    $config['news'][$nametype]['content_cke'] = true;
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['width'] = 576;
    $config['news'][$nametype]['height'] = 432;
    $config['news'][$nametype]['thumb'] = '100x100x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Hình thức thanh toán */
    $nametype = "hinh-thuc-thanh-toan";
    $config['news'][$nametype]['title_main'] = "Hình thức thanh toán";
    $config['news'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['news'][$nametype]['copy'] = false;
    $config['news'][$nametype]['desc'] = true;

    /* Quản lý mục (Không cấp) */
    if(isset($config['news']))
    {
        foreach($config['news'] as $key => $value)
        {
            if(!isset($value['dropdown']) || (isset($value['dropdown']) && $value['dropdown'] == false))
            { 
                $config['shownews'] = 1;
                break;
            }
        }
    }
?>