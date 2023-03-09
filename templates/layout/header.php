<div class="header">
	<div class="header-top">
		<div class="wrap-content d-flex align-items-center justify-content-between">
			<p class="info-header">
                <span class="ad1"><i class="bi bi-house-door-fill"></i><?=$address1['name'.$lang]?></span>
                <span class="ad2"><i class="bi bi-house-door-fill"></i><?=$address2['name'.$lang]?></span>
            </p>
			<p class="info-header">
                <i class="bi bi-telephone-fill call"></i> Hotline 1: <span class="num-phone"><?=$func->formatPhone($optsetting['hotline'])?></span>
            </p>
        </div>
	</div>
	<div class="header-bottom">
		<div class="wrap-content d-flex align-items-center <?= $deviceType != 'mobile' ? "justify-content-between" : "justify-content-center" ?>">
			<a class="logo-header site-title" href="">
				<img class="lazy" onerror="this.src='<?=THUMBS?>/373x97x1/assets/images/noimage.png';" data-src="<?=THUMBS?>/373x97x1/<?=UPLOAD_PHOTO_L.$logo['photo']?>" alt="logo" title="logo"/>
			</a>
			<a class="banner-header" href="">
				<img class="lazy" onerror="this.src='<?=THUMBS?>/758x110x1/assets/images/noimage.png';" data-src="<?=THUMBS?>/758x110x1/<?=UPLOAD_PHOTO_L.$banner['photo']?>" alt="banner" title="banner"/>
			</a>
		</div>
	</div>
</div>