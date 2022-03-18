<section class="articleSection">
    <div class="container-fluid">
        <div class="row">
        <div class="col-12 col-md-5 col-lg-12 col-xxl-4">
            <div class="mb-3">
                <div class="row mt-3">
                    <div class="col-2 ms-3">
                        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="GET" id="formSelect">
                            <select name="numberArticle" id="numberArticle"
                                class="form-select form-select-sm">
                                <?php 
                                    foreach ($askValue as $value) { 
                                        $isSelected = ($numberArticle == $value) ? 'selected' : '';
                                        echo "<option $isSelected>$value</option>";
                                        if ($numberArticle == 6) {
                                            $limit = 7;
                                        } elseif ($numberArticle == 9) {
                                            $limit = 10;
                                        } else {
                                            $limit = 13;
                                        }
                                    }
                                ?>
                            </select>
                        </form>
                    </div>
                    <div class="col-1">
                        <label class="form-label art" for="numberArticle">articles</label>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="row">
            <!-- Première Thématique -->
            <div class="col-12 col-lg-4 pt-3 px-4 mb-5 pb-5">
                <div>
                    <div class="row align-items-center pb-3 pb-md-5 pb-lg-3 pb-xl-3 my-3 themeArticleHeader">
                        <div class="col-12 col-md-7 col-lg-12 col-xxl-8 mb-3 d-flex">
                            <h4 class="themeArticle m-0 display-6" id="xbox">Xbox série X</h4>
                        </div>
                    </div>
                </div>
                <!-- rss Xbox série X  -->
                <?php 
                    $rssLinkXbox = "https://www.jeuxactu.com/rss/xbox-series-x.rss";
                    $rssLoadXbox = simplexml_load_file($rssLinkXbox);
                    $counter = 0;
                    foreach($rssLoadXbox ->channel->item as $item) {
                        $counter++;
                        if ($counter == $limit){
                            break;
                        }
                        $originalDate = $item->children('dc',true);
                        $timestamp = strtotime($originalDate); 
                        $newDate = date("d-m-Y H:i:s", $timestamp );
                ?>
                <div class="card mb-3">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <img src="<?=$item->enclosure['url']?>" class="img-fluid rounded-start imgArticle ms-2"
                                alt="...">
                        </div>
                        <div class="col-8">
                            <div class="card-header">
                                <p class="dateArticle mb-2"><?=$newDate ?></p>
                                <h5 class="card-title titleArticle"><?= $item->title ?></h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text descriptionArticle">
                                <?= $item->description ?>
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="<?= $item->link ?>" role="button" class="linkArticle">Lire l'article... </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <!-- Deuxième Thématique -->
            <div class="col-12 col-lg-4 pt-3 px-4 mb-5 pb-5">
                <div>
                    <div class="row align-items-center pb-3 pb-md-5 pb-lg-3 pb-xl-3 my-3 themeArticleHeader">
                        <div class="col-12 col-md-7 col-lg-12 col-xxl-8 mb-3">
                            <h4 class="themeArticle m-0 display-6" id="ps5">PS5</h4>
                        </div>
                    </div>
                </div>
                <!-- rss ps5  -->
                <?php 
                    $rssLinkPS5 = "https://www.jeuxactu.com/rss/ps5.rss";
                    $rssLoadPS5 = simplexml_load_file($rssLinkPS5);
                    $counter = 0;
                    foreach($rssLoadPS5 ->channel->item as $item) {
                        $counter++;
                        if ($counter == $limit){
                            break;
                        }
                        $originalDate = $item->children('dc',true);
                        $timestamp = strtotime($originalDate); 
                        $newDate = date("d-m-Y H:i:s", $timestamp );
                ?>
                <div class="card mb-3">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <img src="<?= $item->enclosure['url'] ?>" class="img-fluid rounded-start imgArticle ms-2"
                                alt="...">
                        </div>
                        <div class="col-8">
                            <div class="card-header">
                                <p class="dateArticle mb-2"><?=$newDate ?></p>
                                <h5 class="card-title titleArticle"><?= $item->title ?></h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text descriptionArticle">
                                    <?= $item->description ?>
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="<?= $item->link ?>" role="button" class="linkArticle">Lire l'article... </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <!-- Troisième Thématique -->
            <div class="col-12 col-lg-4 pt-3 px-4 mb-5 pb-5">
                <div>
                    <div class="row align-items-center pb-3 pb-md-5 pb-lg-3 pb-xl-3 my-3 themeArticleHeader">
                        <div class="col-12 col-md-7 col-lg-12 col-xxl-8 mb-3">
                            <h4 class="themeArticle m-0 display-6" id="switch">SWITCH</h4>
                        </div>
                    </div>
                </div>
                <!-- rss switch  -->
                <?php 
                    $rssLinkSwitch = "https://www.jeuxactu.com/rss/switch.rss";
                    $rssLoadSwitch = simplexml_load_file($rssLinkSwitch);
                    $counter = 0;
                    foreach($rssLoadSwitch ->channel->item as $item) {
                        $counter++;
                        if ($counter == $limit){
                            break;
                        }
                        $originalDate = $item->children('dc',true);
                        $timestamp = strtotime($originalDate); 
                        $newDate = date("d-m-Y H:i:s", $timestamp );
                ?>
                <div class="card mb-3">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <img src="<?=$item->enclosure['url']?>" class="img-fluid rounded-start imgArticle ms-2"
                                alt="...">
                        </div>
                        <div class="col-8">
                            <div class="card-header">
                                <p class="dateArticle mb-2"><?=$newDate ?></p>
                                <h5 class="card-title titleArticle"><?= $item->title ?></h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text descriptionArticle">
                                <?= $item->description ?>
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="<?= $item->link ?>" role="button" class="linkArticle">Lire l'article... </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<section class="articleSection">
    <div class="container-fluid">
        <div class="row">
            <!-- Quatrième Thématique -->
            <div class="col-12 col-lg-4 pt-3 px-4 mb-5 pb-5">
                <div>
                    <div class="row align-items-center pb-3 pb-md-5 pb-lg-3 pb-xl-3 my-3 themeArticleHeader">
                        <div class="col-12 col-md-7 col-lg-12 col-xxl-8 mb-3">
                            <h4 class="themeArticle m-0 display-6" id="pc">PC</h4>
                        </div>
                    </div>
                </div>
                <!-- rss PC  -->
                <?php 
                    $rssLinkPC = "https://www.jeuxactu.com/rss/pc.rss";
                    $rssLoadPC = simplexml_load_file($rssLinkPC);
                    $counter = 0;
                    foreach($rssLoadPC ->channel->item as $item) {
                        $counter++;
                        if ($counter == $limit){
                            break;
                        }
                        $originalDate = $item->children('dc',true);
                        $timestamp = strtotime($originalDate); 
                        $newDate = date("d-m-Y H:i:s", $timestamp );
                ?>
                <div class="card mb-3">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <img src="<?=$item->enclosure['url']?>" class="img-fluid rounded-start imgArticle ms-2"
                                alt="...">
                        </div>
                        <div class="col-8">
                            <div class="card-header">
                                <p class="dateArticle mb-2"><?=$newDate ?></p>
                                <h5 class="card-title titleArticle"><?= $item->title ?></h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text descriptionArticle">
                                <?= $item->description ?>
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="<?= $item->link ?>" role="button" class="linkArticle">Lire l'article... </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <!-- Cinquième Thématique -->
            <div class="col-12 col-lg-4 pt-3 px-4 mb-5 pb-5">
                <div>
                    <div class="row align-items-center pb-3 pb-md-5 pb-lg-3 pb-xl-3 my-3 themeArticleHeader">
                        <div class="col-12 col-md-7 col-lg-12 col-xxl-8 mb-3">
                            <h4 class="themeArticle m-0 display-6" id="news">Dernières News</h4>
                        </div>
                    </div>
                </div>
                <!-- rss News  -->
                <?php 
                    $rssLinkNews = "https://www.jeuxactu.com/rss/news.rss";
                    $rssLoadNews = simplexml_load_file($rssLinkNews);
                    $counter = 0;
                    foreach($rssLoadNews ->channel->item as $item) {
                        $counter++;
                        if ($counter == $limit){
                            break;
                        }
                        $originalDate = $item->children('dc',true);
                        $timestamp = strtotime($originalDate); 
                        $newDate = date("d-m-Y H:i:s", $timestamp );
                ?>
                <div class="card mb-3">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <img src="<?= $item->enclosure['url'] ?>" class="img-fluid rounded-start imgArticle ms-2"
                                alt="...">
                        </div>
                        <div class="col-8">
                            <div class="card-header">
                                <p class="dateArticle mb-2"><?=$newDate ?></p>
                                <h5 class="card-title titleArticle"><?= $item->title ?></h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text descriptionArticle">
                                    <?= $item->description ?>
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="<?= $item->link ?>" role="button" class="linkArticle">Lire l'article... </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>