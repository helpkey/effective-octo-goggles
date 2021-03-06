<?php include('includes/header.php'); ?>
<?php include('getData/connectDB.php'); ?>

    <!-- Posts -->
    <section class="section-news">
        <h2 class="section-title text-left">СТАТЬИ</h2>
        <?php
        $list = $collectionArticles->find();
        while($document = $list->getNext()) {

            echo '<article class="news-item style2 padding border-bottom">
            <div class="post-content">
                <div class="post-media">
                    <a href="articles-item/'.$document['link'].'"><img src="/images/articlePreview/'.$document['imgPreview'].'" alt=""></a>
                </div>

                <h4 class="post-title"><a href="articles-item/'.$document['link'].'">'.$document['title'].'</a></h4>

                <div class="post-description">
                    '.$document['textPreview'].'
                </div>

                <div class="row">
                    <div class="col-xs-7">
                        <div class="post-date">Опубликовано: '.$document['date'].'</div>
                    </div>

                    <div class="col-xs-5 text-right">
                        <a class="link-go" href="articles-item/'.$document['link'].'">ПОДРОБНЕЕ</a>
                    </div>
                </div>
            </div>
        </article>';

        }
        ?>

    </section>
    <!--/ Posts -->

    <!-- Pagination -->
    <!--    <div class="pagination-wrapper padding border-bottom">-->
    <!--        <ul class="pagination">-->
    <!--            <li><a class="prev page-numbers" href="#"></a></li>-->
    <!--            <li><a class="page-numbers" href="#">1</a></li>-->
    <!--            <li><span class="current">2</span></li>-->
    <!--            <li><span>&hellip;</span></li>-->
    <!--            <li><a class="page-numbers" href="#">34</a></li>-->
    <!--            <li><a class="page-numbers" href="#">35</a></li>-->
    <!--            <li><a class="next page-numbers" href="#"></a></li>-->
    <!--        </ul>-->
    <!--    </div>-->
    <!--/ Pagination -->

    <!-- Social Widgets -->
<?php include('includes/socialSubscribe.php'); ?>
    <!-- Subscribe Form -->
<?php include('includes/subscribeForm.php'); ?>

<?php include('includes/footer.php'); ?>      