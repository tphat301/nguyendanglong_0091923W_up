<div class="toolbar">
    <ul>
        <li>
            <a id="goidien" href="tel:<?=$func->parsePhone($optsetting['hotline'])?>" title="title">
                <img data-src="assets/images/icon-t1.png" alt="Phone" class="lazy"><br>
                <span><?=goingay?></span>
            </a>
        </li>
        <li>
            <a id="nhantin" href="sms:<?=$func->parsePhone($optsetting['hotline'])?>" title="title">
                <img data-src="assets/images/icon-t2.png" alt="Message" class="lazy"><br>
                <span><?=nhantin?></span>
            </a>
        </li>
        <li>
            <a id="chatzalo" href="https://zalo.me/<?=$func->parsePhone($optsetting['zalo'])?>" title="title">
                <img data-src="assets/images/icon-t3.png" alt="Zalo" class="lazy"><br>
                <span><?=zalochat?></span>
            </a>
        </li>
        <li>
            <a id="chatfb" href="<?=$optsetting['fanpage']?>" title="title">
                <img data-src="assets/images/icon-t4.png" alt="Facebook" class="lazy"><br>
                <span><?=facebookchat?></span>
            </a>
        </li>
        <li>
            <a id="chiduong" href="<?=$optsetting['link_googlemaps']?>" title="title">
                <img data-src="assets/images/chiduong.png" alt="Chỉ đường" class="lazy"><br>
                <span><?=chiduong?></span>
            </a>
        </li>
    </ul>
</div>