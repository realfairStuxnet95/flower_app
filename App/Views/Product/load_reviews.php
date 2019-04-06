<?php 
$reviews=$admin->loadFlowerReview($flower_id);
//var_dump($reviews);
?>
<div class="rattings-wrapper">
    <?php 
    foreach ($reviews as $key => $value) {
        ?>
        <div class="review-ratting">
            <div class="star-author-all">
                <div class="ratting-author">
                    <h3>
                        <?php echo $value['names']; ?>
                    </h3>
                    <span>
                        <?php echo $function->string_date_format($value['regDate']); ?>
                    </span>
                </div>
                <div class="ratting-star">
                    <span class="fa fa-star" aria-hidden="true"></span>
                    <span class="fa fa-star" aria-hidden="true"></span>
                    <span class="fa fa-star" aria-hidden="true"></span>
                    <span class="fa fa-star" aria-hidden="true"></span>
                    <span class="fa fa-star" aria-hidden="true"></span>
                    <span>(5)</span>
                </div>
            </div>

            <div class="reviews_content clearfix" style="max-width: 100vh;">
                <?php echo $value['comment']; ?>
            </div>
        </div>
        <?php
    }
    ?>
</div>