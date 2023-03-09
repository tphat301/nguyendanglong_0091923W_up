<?php 
	include "config.php";

	/* Paginations */
	include LIBRARIES."class/class.PaginationsAjax.php";
	$pagingAjax = new PaginationsAjax();
	$pagingAjax->perpage = (!empty($_GET['perpage'])) ? htmlspecialchars($_GET['perpage']) : 1;
	$eShow = htmlspecialchars($_GET['eShow']);
	$idList = (!empty($_GET['idList'])) ? htmlspecialchars($_GET['idList']) : 0;
	$p = (!empty($_GET['p'])) ? htmlspecialchars($_GET['p']) : 1;
	$start = ($p-1) * $pagingAjax->perpage;
	$pageLink = "api/product.php?perpage=".$pagingAjax->perpage;
	$tempLink = "";
	$where = "";
	$params = array();

	/* Math url */
	if($idList)
	{
		$tempLink .= "&idList=".$idList;
		$where .= " and id_list = ?";
		array_push($params, $idList);
	}
	$tempLink .= "&p=";
	$pageLink .= $tempLink;

	/* Get data */
	$sql = "select name$lang, slugvi, slugen, id, photo, regular_price, sale_price, discount, type from #_product where type='san-pham' $where and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc";
	$sqlCache = $sql." limit $start, $pagingAjax->perpage";
    $items = $cache->get($sqlCache, $params, 'result', 7200);

	/* Count all data */
	$countItems = count($cache->get($sql, $params, 'result', 7200));

	/* Get page result */
	$pagingItems = $pagingAjax->getAllPageLinks($countItems, $pageLink, $eShow);
?>
<?php if($countItems) { ?>
	<div class="flex-cus row">
		<?php foreach($items as $k => $v) { ?>
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
	<div class="pagination-ajax"><?=$pagingItems?></div>
<?php } ?>