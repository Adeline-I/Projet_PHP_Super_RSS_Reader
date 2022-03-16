<!-- rss ps5  -->
<?php 
    $rssLinkPS5 = "https://www.jeuxactu.com/rss/ps5.rss";
    $rssLoadPS5 = simplexml_load_file($rssLinkPS5);
    $counter = 0;
    $limit = 13;
    foreach($rssLoadPS5 ->channel->item as $item) {
        $counter++;
        if ($counter == $limit){
            break;
        }
        $originalDate = $item->children('dc',true);
        $timestamp = strtotime($originalDate); 
        $newDate = date("d-m-Y H:i:s", $timestamp );
?>
    <br><img src="<?= $item->enclosure['url'] ?>" alt="<?=$item->enclosure['url']?>"><br>
    <a href="<?= $item->link ?>"><span class="title"><b><?= $item->title ?></b></span></a>
    <br><span class="description"><?= $item->description ?></span>
    
    <br><span class="date"><?=$newDate ?></span><br>
<?php } ?>

<!-- rss Xbox série X  -->
<?php 
    $rssLinkXbox = "https://www.jeuxactu.com/rss/xbox-series-x.rss";
    $rssLoadXbox = simplexml_load_file($rssLinkXbox);
    $counter = 0;
    $limit = 13;
    foreach($rssLoadXbox ->channel->item as $item) {
        $counter++;
        if ($counter == $limit){
            break;
        }
        $originalDate = $item->children('dc',true);
        $timestamp = strtotime($originalDate); 
        $newDate = date("d-m-Y H:i:s", $timestamp );
?>
    <br><img src="<?= $item->enclosure['url'] ?>" alt="<?=$item->enclosure['url']?>"><br>
    <a href="<?= $item->link ?>"><span class="title"><b><?= $item->title ?></b></span></a>
    <br><span class="description"><?= $item->description ?></span>
    
    <br><span class="date"><?=$newDate ?></span><br>
<?php } ?>

<!-- rss switch  -->
<?php 
    $rssLinkSwitch = "https://www.jeuxactu.com/rss/switch.rss";
    $rssLoadSwitch = simplexml_load_file($rssLinkSwitch);
    $counter = 0;
    $limit = 13;
    foreach($rssLoadSwitch ->channel->item as $item) {
        $counter++;
        if ($counter == $limit){
            break;
        }
        $originalDate = $item->children('dc',true);
        $timestamp = strtotime($originalDate); 
        $newDate = date("d-m-Y H:i:s", $timestamp );
?>
    <br><img src="<?= $item->enclosure['url'] ?>" alt="<?=$item->enclosure['url']?>"><br>
    <a href="<?= $item->link ?>"><span class="title"><b><?= $item->title ?></b></span></a>
    <br><span class="description"><?= $item->description ?></span>
    
    <br><span class="date"><?=$newDate ?></span><br>
<?php } ?>

<!-- rss PC  -->
<?php 
    $rssLinkPC = "https://www.jeuxactu.com/rss/pc.rss";
    $rssLoadPC = simplexml_load_file($rssLinkPC);
    $counter = 0;
    $limit = 13;
    foreach($rssLoadPC ->channel->item as $item) {
        $counter++;
        if ($counter == $limit){
            break;
        }
        $originalDate = $item->children('dc',true);
        $timestamp = strtotime($originalDate); 
        $newDate = date("d-m-Y H:i:s", $timestamp );
?>
    <br><img src="<?= $item->enclosure['url'] ?>" alt="<?=$item->enclosure['url']?>"><br>
    <a href="<?= $item->link ?>"><span class="title"><b><?= $item->title ?></b></span></a>
    <br><span class="description"><?= $item->description ?></span>
    
    <br><span class="date"><?=$newDate ?></span><br>
<?php } ?>

<!-- rss News  -->
<?php 
    $rssLinkNews = "https://www.jeuxactu.com/rss/news.rss";
    $rssLoadNews = simplexml_load_file($rssLinkNews);
    $counter = 0;
    $limit = 13;
    foreach($rssLoadNews ->channel->item as $item) {
        $counter++;
        if ($counter == $limit){
            break;
        }
        $originalDate = $item->children('dc',true);
        $timestamp = strtotime($originalDate); 
        $newDate = date("d-m-Y H:i:s", $timestamp );
?>
    <br><img src="<?= $item->enclosure['url'] ?>" alt="<?=$item->enclosure['url']?>"><br>
    <a href="<?= $item->link ?>"><span class="title"><b><?= $item->title ?></b></span></a>
    <br><span class="description"><?= $item->description ?></span>
    
    <br><span class="date"><?=$newDate ?></span><br>
<?php } ?>