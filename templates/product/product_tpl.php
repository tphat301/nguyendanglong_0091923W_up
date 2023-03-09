<div class="title-main"><span><?= (!empty($titleCate)) ? $titleCate : @$titleMain ?></span></div>
<?php if ($com == 'tim-kiem') { ?>
    <div class="div_kq_search mb-4"><?= $titleMain ?> (<?= $total ?>): <span>"<?php echo $tukhoa_show; ?>"</span></div>
<?php } ?>

<div class="content-main">
    <?php if (!empty($product)) { ?>
        <div class="flex-cus row">
		<?php foreach($product as $k => $v) { ?>
			<div class="items col-6 col-sm-6 col-md-4 col-lg-3 mg-cus">
				<div class="box-product" data-aos="fade-up" data-aos-duration="1000">
					<div class="pic-product">
						<a class="text-decoration-none scale-img" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
							<img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/281x281x1/assets/images/noimage.png';" data-src="<?= WATERMARK ?>/product/281x281x1/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
						</a>
					</div>
					<h3 class="mb-0"><a class="text-decoration-none text-split name-product text-center" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a></h3>
					<p class="price-product text-center">
						<?php if ($v['discount']) { ?>
							<span class="price-new"><?= $func->formatMoney($v['sale_price']) ?></span>
							<span class="price-old"><?= $func->formatMoney($v['regular_price']) ?></span>
							<span class="price-per"><?= '-' . $v['discount'] . '%' ?></span>
						<?php } else { ?>
							<span class="tilte_price_new">Giá: </span><span class="price-new"><?= ($v['regular_price']) ? $func->formatMoney($v['regular_price']) : lienhe ?></span>
						<?php } ?>
					</p>
					<p class="cart-product d-flex flex-wrap justify-content-between">
						<span class="cart-add addcart transition" data-id="<?= $v['id'] ?>" data-action="addnow">Thêm vào giỏ</span>
						<span class="cart-buy addcart transition" data-id="<?= $v['id'] ?>" data-action="buynow"><?= muangay ?></span>
					</p>
				</div>
			</div>
		<?php } ?>
        </div>
    <?php } else { ?>
        <div class="alert alert-warning w-100" role="alert">
            <strong><?= khongtimthayketqua ?></strong>
        </div>
    <?php } ?>
    <div class="pagination-home w-100"><?= (!empty($paging)) ? $paging : '' ?></div>
</div>