<main>
    <!--Home page with Carousel-->
    <div class="max-width">
        <div class="home-content">
            <p class="text-2 text-center"> Bienvenue sur Aziri ! <br> Venez découvrir notre actualité Gaming</p>
        </div>
    </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" class="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <!-- rss News  -->
                <?php 
                $rssLinkNews = "https://www.jeuxactu.com/rss/news.rss";
                $rssLoadNews = simplexml_load_file($rssLinkNews);
                $counter = 0;
                $limit = 4;
                foreach($rssLoadNews ->channel->item as $item) {
                    $counter++;
                    if ($counter == $limit){
                        break;
                    }
                }?>
                <div class="carousel-item active">
                    <img src="<?= $item->enclosure['url'] ?>" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="<?= $item->enclosure['url'] ?>" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="<?= $item->enclosure['url'] ?>" class="d-block w-100">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Next</span>
            </button>
            <div class="count"></div>
        </div>
    <div class="alert text-center">
        <h6>Sélectionner vos actualités favorites en cliquant sur ⚙️</h6>
    </div>
</main>