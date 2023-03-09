<div class="menu-res">
    <div class="menu-bar-res">
        <a id="hamburger" href="#menu" title="Menu"><span></span></a>
        <div class="search-res">
            <p class="icon-search transition"><i class="bi bi-search"></i></p>
            <div class="search-grid w-clear">
                <input type="text" name="keyword-res" id="keyword-res" placeholder="<?=nhaptukhoatimkiem?>" onkeypress="doEnter(event,'keyword-res');" value="<?php if( !empty($_GET['keyword-res']) ) {echo $_GET['keyword-res'];}?>" />
                <p onclick="onSearch('keyword-res');"><i class="bi bi-search"></i></p>
            </div>
        </div>
    </div>
    <nav id="menu">
        <ul>
            <li><a class="<?php if ($com == '' || $com == 'index') echo 'active'; ?> transition" href="" title="<?= trangchu ?>">
                <?= trangchu ?></a>
            </li>
            <li><a class="<?php if ($com == 'gioi-thieu') echo 'active'; ?> transition" href="gioi-thieu" title="<?= gioithieu ?>"><?= gioithieu ?></a></li>
            <li>
                <a class="has-child <?php if ($com == 'san-pham') echo 'active'; ?> transition" href="san-pham"
                title="<?= sanpham ?>"><?= sanpham ?></a>
                <?php if (count($splist)) { ?>
                    <ul>
                        <?php foreach ($splist as $klist => $vlist) {
                                $spcat = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc", array($vlist['id'])); ?>
                            <li>
                                <a class="has-child transition" title="<?= $vlist['name' . $lang] ?>"
                                href="<?= $vlist[$sluglang] ?>"><?= $vlist['name' . $lang] ?></a>
                                <?php if (!empty($spcat)) { ?>
                                    <ul>
                                        <?php foreach ($spcat as $kcat => $vcat) {
                                            $spitem = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_item where id_cat = ? and find_in_set('hienthi',status) order by numb,id desc", array($vcat['id'])); ?>
                                            <li>
                                                <a class="has-child transition" title="<?= $vcat['name' . $lang] ?>"
                                                href="<?= $vcat[$sluglang] ?>"><?= $vcat['name' . $lang] ?></a>
                                                <?php if (!empty($spitem)) { ?>
                                                    <ul>
                                                        <?php foreach ($spitem as $kitem => $vitem) {
                                                            $spsub = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_sub where id_item = ? and find_in_set('hienthi',status) order by numb,id desc", array($vitem['id'])); ?>
                                                            <li>
                                                                <a class="has-child transition" title="<?= $vitem['name' . $lang] ?>" href="<?= $vitem[$sluglang] ?>"><?= $vitem['name' . $lang] ?></a>
                                                                <?php if (!empty($spsub)) { ?>
                                                                    <ul>
                                                                        <?php foreach ($spsub as $ksub => $vsub) { ?>
                                                                            <li>
                                                                                <a class="transition" title="<?= $vsub['name' . $lang] ?>" href="<?= $vsub[$sluglang] ?>"><?= $vsub['name' . $lang] ?></a>
                                                                            </li>
                                                                        <?php } ?>
                                                                    </ul>
                                                                <?php } ?>
                                                            </li>
                                                        <?php } ?>
                                                    </ul>
                                                <?php } ?>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                <?php } ?>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </li>
            <?php if(count($splist)) { ?>
                <?php foreach($splist as $k => $v) { ?>
                    <li>
                        <a class="<?php if ($com == 'san-pham') echo 'active'; ?> transition" href="<?=$v['slug'.$lang]?>" title="<?= $v['name'.$lang] ?>">
                            <?= $v['name'.$lang] ?>
                        </a>
                    </li>
                <?php } ?>
            <?php } ?>
            <li>
                <a class="<?php if ($com == 'tai-lieu') echo 'active'; ?> transition" href="tai-lieu" title="Tài liệu">
                    Tài liệu
                </a>
                <?php if (count($file_pdfs)) { ?>
                    <ul>
                        <?php foreach ($file_pdfs as $klist => $vlist) {?>
                            <li>
                                <a class="has-child transition" title="<?= $vlist['name' . $lang] ?>" href="<?= $vlist[$sluglang] ?>"><?= $vlist['name' . $lang] ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </li>
            <li>
                <a class="<?php if ($com == 'kien-thuc') echo 'active'; ?> transition" href="kien-thuc" title="Kiến thức">
                    Kiến thức
                </a>
                <?php if (count($levels)) { ?>
                    <ul>
                        <?php foreach ($levels as $klist => $vlist) {?>
                            <li>
                                <a class="has-child transition" title="<?= $vlist['name' . $lang] ?>" href="<?= $vlist[$sluglang] ?>"><?= $vlist['name' . $lang] ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </li>
            <li>
                <a class="<?php if ($com == 'lien-he') echo 'active'; ?> transition" href="lien-he" title="<?= lienhe ?>">
                    <?= lienhe ?>
                </a>
            </li>
        </ul>
    </nav>
</div>