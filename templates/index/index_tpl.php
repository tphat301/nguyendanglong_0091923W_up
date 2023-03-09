<!-- SẢN PHẨM NỔI BẬT -->
<?php if (count($pronb)) { ?>
<div class="wrap-product wrap-content">
    <div class="product_show-name"><span>Sản phẩm nổi bật</span></div>
    <div class="product_show-subName"><span><?=$sloganSp['name'.$lang]?></span></div>
    <div class="paging-product"></div>
</div>
<?php } ?>

<!-- SẢN PHẨM CẤP 1 -->
<?php if (count($splistnb)) { ?>
    <?php foreach ($splistnb as $k => $vlist) { ?>
        <div class="<?=$k %2 == 0 ? "category_product active" : ""?>">
            <div class="wrap-product1 wrap-content">
                <div class="title-main-sp1"><span><?= $vlist['name' . $lang] ?></span></div>
                <div class="paging-product-category paging-product-category-<?= $vlist['id'] ?>" data-list="<?= $vlist['id'] ?>">
                </div>
            </div>
        </div>
        <?php if($k == 0 && $k < 1) { ?>
            <div class="banner1">
                <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/1366x400x1/assets/images/noimage.png';"
                data-src="<?= THUMBS ?>/1366x400x1/<?= UPLOAD_PHOTO_L . $Banner1['photo'] ?>"
                alt="<?= $Banner1['name' . $lang] ?>" title="<?= $Banner1['name' . $lang] ?>" />
            </div>
        <?php } ?>
        <?php if($k == 1 && $k < 2) { ?>
            <div class="banner1">
                <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/1366x400x1/assets/images/noimage.png';"
                data-src="<?= THUMBS ?>/1366x400x1/<?= UPLOAD_PHOTO_L . $Banner2['photo'] ?>"
                alt="<?= $Banner2['name' . $lang] ?>" title="<?= $Banner2['name' . $lang] ?>" />
            </div>
        <?php } ?>
        <?php if($k == 2 && $k < 3) { ?>
            <!-- VỀ CHÚNG TÔI -->
            <div class="about">
                <div class="wrap-content">
                    <div class="about_bx">
                        <div class="about_left">
                            <img class="lazy" onerror="this.src='<?= THUMBS ?>/590x520x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/590x520x1/<?= UPLOAD_NEWS_L . $about['photo'] ?>" alt="<?= $about['name' . $lang] ?>" title="<?= $about['name' . $lang] ?>" />
                        </div>
                        <div class="about_right">
                            <div class="about_right_info">
                                <div class="about_right-title">
                                    <span>
                                        Về chúng tôi
                                    </span>
                                </div>
                                <div class="about_right-name">
                                    <span>
                                        <?=$about['name'.$lang]?>
                                    </span>
                                </div>
                                <div class="about_right-content">
                                    <?=htmlspecialchars($about['desc'.$lang])?>
                                </div>
                                <div class="about_right_bx_more">
                                    <a href="gioi-thieu" class="text-uppercase text-decoration-none about_right-more">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="banner1">
                <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/1366x400x1/assets/images/noimage.png';"
                data-src="<?= THUMBS ?>/1366x400x1/<?= UPLOAD_PHOTO_L . $Banner3['photo'] ?>"
                alt="<?= $Banner3['name' . $lang] ?>" title="<?= $Banner3['name' . $lang] ?>" />
            </div>
        <?php } ?>
    <?php } ?>
<?php } ?>

<!-- KIẾN THỨC -->
<?php if (count($levels)) { ?>
    <div class="service-us">
        <div class="wrap-product wrap-content">
            <div class="product_show-name"><span>Kiến thức</span></div>
            <div class="product_show-subName"><span><?=$sloganLv['name'.$lang]?></span></div>
            <div class="list-service row">
                <div class="col-item-sv-l col-md-6 aos-init aos-animate" data-aos="fade-up-right">
                    <div class="service-item-left">
                        <a href="<?= $levels[0][$sluglang] ?>" title="<?= $levels[0]['name' . $lang] ?>" class="d-block hover_xam">
                            <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/590x380x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/590x380x1/<?= UPLOAD_NEWS_L . $levels[0]['photo'] ?>" alt="<?= $levels[0]['name' . $lang] ?>" title="<?= $levels[0]['name' . $lang] ?>" />
                        </a>
                        <div class="lv_text">
                            <a href="<?= $levels[0]['slug' . $lang] ?>" class="text-decoration-none name-duan">
                                <?= $levels[0]['name' . $lang] ?>
                            </a>
                            <div class="lv_content text-split">
                                <?=$levels[0]['desc'.$lang]?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-item-sv col-md-6 aos-init aos-animate" data-aos="fade-up-left">
                    <div class="row">
                        <?php foreach ($levels as $k => $v) {
                            if ($k > 0) { ?>
                                <div class="col-item-sv-r col-6">
                                    <a href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>" class="service-img-link-img d-block hover_xam">
                                        <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/285x200x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/285x200x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                                    </a>
                                    <a href="<?= $v['slug' . $lang] ?>" class="text-decoration-none name-duans">
                                        <?= $v['name' . $lang] ?>
                                    </a>
                                </div>
                        <?php }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<!-- ĐĂNG KÝ NHẬN TIN -->
<div class="form_sendding">
    <div class="wrap-content">
        <div class="row">
            <div class="form_sendding-left col-sm-12 col-md-6 col-lg-6">
                <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/600x440x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/600x440x1/<?= UPLOAD_PHOTO_L . $avatarForm['photo'] ?>" alt="<?= $avatarForm['name' . $lang] ?>" title="<?= $avatarForm['name' . $lang] ?>" />
            </div>
            <div class="form_sendding-right col-sm-12 col-md-6 col-lg-6">
                <div class="form_sendding-main">
                    <h3 class="form_sendding-title text-uppercase">
                        Liên hệ với chúng tôi
                    </h3>
                    <div class="form_sendding-slogan">
                        <span>
                            <?=$sloganForm['name'.$lang]?>
                        </span>
                    </div>
                    <div class="form_sendding-group">
                        <form class="form-contact validation-contact" novalidate method="POST" action="" enctype="multipart/form-data">
                            <div class="form_sendding-field row">
                                <div class="col-sm-12 col-md-6 col-lg-6 form_sendding-fullname">
                                    <input type="text" class="fullname" id="fullname-contact" name="dataContact[fullname]" placeholder="Họ và tên" value="<?= $flash->get('fullname') ?>" required />
                                    <div class="invalid-feedback"><?= vuilongnhaphoten ?></div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6 form_sendding-phone">
                                    <input type="number" class="phone" id="phone-contact" name="dataContact[phone]" placeholder="Điện thoại" value="<?= $flash->get('phone') ?>" required />
                                    <div class="invalid-feedback"><?= vuilongnhapsodienthoai ?></div>
                                </div>
                            </div>
                            <div class="form_sendding-field row">
                                <div class="col-sm-12 col-md-6 col-lg-6 form_sendding-email">
                                    <input type="number" class="email" id="phone-contact" name="dataContact[email]" placeholder="Email" value="<?= $flash->get('email') ?>" required />
                                    <div class="invalid-feedback"><?= vuilongnhapdiachiemail ?></div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6 form_sendding-address">
                                    <input type="text" class="address" id="address-contact" name="dataContact[address]" placeholder="Địa chỉ" value="<?= $flash->get('address') ?>" required />
                                    <div class="invalid-feedback"><?= vuilongnhapdiachi ?></div>
                                </div>
                            </div>
                            <div class="form_sendding-field">
                                <textarea id="t_content" cols="12" rows="2" name="dataContact[content]" placeholder="<?= noidung ?>" required /><?= $flash->get('content') ?></textarea>
                            </div>
                            <input type="submit" class="btn-res" name="btn-res" value="ĐĂNG KÝ">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
