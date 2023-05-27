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
        <div class="col-md-5 col-12 px-3 my-2">
            <div class="post-sticky">
                <div class="prdcs-imgs">
                    <div class="product-img--main" data-scale="2.1" data-image="./assets/img/product-sec.jpg">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7 col-12 px-3 my-2">
            <div class="prod-text">
                <h3>Peacock Bridal Work</h3>
                <div class="re-star d-flex-al my-2">
                    <i class="fa-solid fa-star "></i>
                    <i class="fa-solid fa-star "></i>
                    <i class="fa-solid fa-star "></i>
                    <i class="fa-solid fa-star "></i>
                    <i class="fa-solid fa-star "></i>
                    <p>4.5 rating</p>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat eius voluptatem sit pariatur, expedita magni laboriosam, excepturi nemo totam cum quae vero minima molestias sint perspiciatis aliquam laudantium. Eaque, amet.</p>
                <div class="review-design">
                    <ul class="nav nav-pills   my-3" role="tablist" id="list-example">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="pill" href="#description">Describtion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="pill" href="#review">Rating & reviews</a>
                        </li>

                    </ul>
                    <div class="tab-content my-3 mx-2">
                        <div id="description" class="tab-pane active">
                            <div class="proud-descript">
                                <div class="descrip-der">
                                    <h4> Peacock Bridal Blose Aari works</h4>
                                    <p>Ethnic dresses truly are dressing with a soul. The popular Aari and Tilla Embroidered Velvet Tunic will keep you stylish, and comfy and impress others with its style because the joy of dressing is an Art</p>
                                    <h5>How to select your size and measure yourself:</h5>
                                    <ul>
                                        <li><i class='bx bx-right-arrow-circle'></i> While taking measurements, always keep the measuring tape parallel to the ground.</li>
                                        <li><i class='bx bx-right-arrow-circle'></i>It’s always best to ask someone else to take your measurements. </li>
                                        <li><i class='bx bx-right-arrow-circle'></i>BUST: Measured around the fullest part of the bust. Make sure to go under your arms, not around them! </li>
                                        <li><i class='bx bx-right-arrow-circle'></i> WAIST: Measured around the natural waistline, about the height of the belly button is usually a good guideline.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="review" class="tab-pane  ">
                            <div class="proud-descript">
                                <div class="d-flex-al-jb">
                                    <h4>Rating & reviews</h4>
                                    <div class="">
                                        <button class="btn-des" onclick="myFunction()">Add a Review</button>
                                    </div>
                                </div>
                                <div class="" id="add-review">
                                    <div class="status-meeting">
                                        <div class="review-box my-3">
                                            <div class="res-star d-flex-al my-2">
                                                <h5> Priya Dharshani
                                                </h5>
                                                <h6><i class="fa-solid fa-star "></i>4.5 </h6>
                                            </div>
                                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum earum minus, consequatur asperiores dolorum voluptate! Quam illum corrupti numquam dignissimos iure quis magni, asperiores qui impedit deleniti laborum possimus voluptate!</p>
                                        </div>
                                        <div class="review-box my-3">
                                            <div class="res-star d-flex-al my-2">
                                                <h5> Priya Dharshani
                                                </h5>
                                                <h6><i class="fa-solid fa-star "></i>4.5 </h6>
                                            </div>
                                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum earum minus, consequatur </p>
                                        </div>
                                    </div>
                                    <div class="read-more-content">
                                        <div class="review-box my-3">
                                            <div class="res-star d-flex-al my-2">
                                                <h5> Dharshani
                                                </h5>
                                                <h6><i class="fa-solid fa-star "></i>5 </h6>
                                            </div>
                                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum earum minus, consequatur asperiores dolorum voluptate! Quam illum corrupti numquam dignissimos iure quis magni, asperiores qui impedit deleniti laborum possimus voluptate!</p>
                                        </div>
                                        <div class="review-box my-3">
                                            <div class="res-star d-flex-al my-2">
                                                <h5> Priya Dharshani
                                                </h5>
                                                <h6><i class="fa-solid fa-star "></i>4.5 </h6>
                                            </div>
                                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum earum minus, consequatur </p>
                                        </div>
                                    </div>
                                    <div class="my-2 text-center">
                                        <a class="read-more btn-des" title="View More" href="javascript:void(0);">View more</a>
                                    </div>
                                </div>
                                <div class="rating-designs" id="enq-review">

                                    <form action="" method="post">
                                        <div class="my-3 ">
                                            <label for="">Your Rating</label>
                                            <div class="rating-star  my-3">
                                                <i class="fa-solid fa-star "></i>
                                                <i class="fa-solid fa-star "></i>
                                                <i class="fa-solid fa-star "></i>
                                                <i class="fa-solid fa-star "></i>
                                                <i class="fa-solid fa-star "></i>
                                            </div>
                                        </div>
                                        <div class="my-3  ">
                                            <input type="name" class="form-control" id="name" required placeholder="Enter Name" name="name" />
                                        </div>
                                        <div class="my-3">
                                            <input type="email" class="form-control" id="email" class="form-control" required placeholder="Enter Email" name="email" />
                                        </div>
                                        <div class="my-3">
                                            <textarea class="form-control" placeholder="Your review..." required name="message" rows="2" id="message"></textarea>
                                        </div>
                                        <div class="re_ser text-center py-2">
                                            <input class="btn-des" type="submit" name="submit" value="Submit">
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- review form -->


<!-- review form end -->

<!-- product details end -->
<?php include('templates/footer.php') ?>