<div class="owl-carousel owl-theme blog-slider">
    <?php
    $sql = "SELECT * FROM `project` ";
    $result = mysqli_query($conn, $sql);
    while ($data = mysqli_fetch_array($result)) {

    ?>
        <div class="card blog__slide text-center">
            <div class="blog__slide__img">
                <img class="card-img rounded-0" src="/project/img/<?php echo $data['project_pic']; ?>" alt="...">
            </div>
            <div class="blog__slide__content">
                <a class="blog__slide__label" href="#">Fashion</a>
                <h3><a href="#">New york fashion week's continued the evolution</a></h3>
                <p>2 days ago</p>
            </div>
        </div>
    <?php } ?>
</div>