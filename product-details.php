<?php $file_name = "product";
include('templates/header.php') ?>
<?php include('templates/navbar.php') ?>
<!-- banner abouts -->
<div class="about-pages  ">
    <h2>Bridal Work</h2>
</div>
<!-- banner abouts end -->
<!-- product details -->
<div class="w-95 my-3 proud-detail">
    <div class="d-flex-wrap">
        <div class="col-md-6 col-12 px-3 my-2">
            <div class="prdcs-imgs">
                <figure class="zoom" onmousemove="zoom(event)" style="background-image: url(./assets/img/product-sec.jpg)">
                    <img src="./assets/img/product-sec.jpg" alt="product" class=" imges-design">
                </figure>
            </div>
            <!-- <div class="prdcs-imgs">
                <img src="./assets/img/product-sec.jpg" alt="product.jpg" class="image-preview image-preview-js imges-design">
            </div> -->
        </div>
    </div>
</div>

<!-- product details end -->
<?php include('templates/footer.php') ?>
<script type="text/javascript">
    function zoom(e) {
        var zoomer = e.currentTarget;
        e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX
        e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX
        x = offsetX / zoomer.offsetWidth * 100
        y = offsetY / zoomer.offsetHeight * 100
        zoomer.style.backgroundPosition = x + '% ' + y + '%';
    }
</script>