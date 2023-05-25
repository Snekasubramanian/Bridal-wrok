<?php $file_name = "home";
include('templates/header.php') ?>
<?php include('templates/navbar.php') ?>
<!-- banner design -->
<div class="banner-design">
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">
        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-flex-al-jc w-95">
                    <div class="col-md-6 col-12 px-3  ">
                        <h1>Aari embroidery sequence work</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia voluptates quas iure suscipit incidunt sint officia eligendi dolore nemo, excepturi quod deserunt facilis qui necessitatibus eius aliquam, deleniti hic ducimus.</p>
                        <div class="my-2">
                            <a href="about.php" class="btn-des">Our Works</a>
                        </div>
                    </div>
                    <div class="col-md-5 col-12 px-3  ">
                        <div class="baner-img">
                            <img src="./assets/img/banner.png" alt="blouse">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item  ">
                <div class="d-flex-al-jc w-95">
                    <div class="col-md-6 col-12 px-3  ">
                        <h1>BestAari embroidery sequence work</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia voluptates quas iure suscipit incidunt sint officia eligendi dolore nemo, excepturi quod deserunt facilis qui necessitatibus eius aliquam, deleniti hic ducimus.</p>
                        <div class="my-2">
                            <a href="about.php" class="btn-des">Our Works</a>
                        </div>
                    </div>
                    <div class="col-md-5 col-12 px-3  ">
                        <div class="baner-img">
                            <img src="./assets/img/banner1.png" alt="blouse">
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</div>
<!-- banner design end -->
<!-- about design -->
<div class="my-3 w-95 about-sess">
    <div class="d-flex-al">
        <div class="col-md-6 col-12 px-3 my-2">
            <div class="ab-imgs text-center">
                <img src="./assets/img/about.png" alt="about">
            </div>
        </div>
        <div class="col-md-6 col-12 px-3 my-2">
            <div class="about-cotn">
                <h2>About US</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora quas culpa voluptatibus nobis animi eius nostrum doloribus aperiam velit iure assumenda fugiat nesciunt odit, error repellendus ullam in necessitatibus. Possimus.</p>
                <div class="d-flex-wrap ">
                    <div class="col-md-6 col-12 my-2 pe-md-3 px-2">
                        <div class="our-vis">
                            <h4>Our Vision</h4>
                            <p>We at AARI aim to provide a world recognitation to indian craftmanship through our countre,</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 my-2 ps-md-3 px-2">
                        <div class="our-vis">
                            <h4>Our Mision</h4>
                            <p>We at AARI aim to provide a world recognitation to indian craftmanship through our countre,</p>
                        </div>
                    </div>
                </div>
                <div class="my-3">
                    <a href="about.php" class="btn-des">Our Works</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about design end -->
<!-- product design -->
<div class="my-3 product-back">
    <div class="aari-title">
        <h2>Products</h2>
    </div>
    <div class="prod-tab ">
        <ul class="nav nav-pills justify-content-center my-4" role="tablist" id="list-example">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="pill" href="#blose">Blouse</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="pill" href="#saree">Saree</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="pill" href="#salwars">Salwars</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="pill" href="#half-saree">Half Saree</a>
            </li>
        </ul>
        <div class="tab-content mt-5 mb-3 w-95 scrollspy-example"  data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0"   tabindex="0">
            <div id="blose" class="tab-pane active">
                <div class="d-flex-wrap">
                    <div class="col-md-4 col-12 px-3 my-2">
                        <div class="prod-work ">
                            <a href="product.php">
                                <div class="prod-img">
                                    <img src="./assets/img/product.jpg" alt="product.jpg">
                                </div>
                                <div class="prod-btn my-3">
                                    <div class="prod-text">
                                        <h4>Bridal Work</h4>
                                        <p>10 products</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 px-3 my-2">
                        <div class="prod-work ">
                            <a href="product.php">
                                <div class="prod-img">
                                    <img src="./assets/img/product-first.jpg" alt="product.jpg">
                                </div>
                                <div class="prod-btn my-3">
                                    <div class="prod-text">
                                        <h4>Heavy Work</h4>
                                        <p>10 products</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 px-3 my-2">
                        <div class="prod-work ">
                            <a href="product.php">
                                <div class="prod-img">
                                    <img src="./assets/img/product-sec.jpg" alt="product.jpg">
                                </div>
                                <div class="prod-btn my-3">
                                    <div class="prod-text">
                                        <h4>Fancy Work</h4>
                                        <p>10 products</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="saree" class="tab-pane  ">
                <div class="d-flex-wrap">
                    <div class="col-md-4 col-12 px-3 my-2">
                        <div class="prod-work ">
                            <a href="product.php">
                                <div class="prod-img">
                                    <img src="./assets/img/saree-arri.jpg" alt="product.jpg">
                                </div>
                                <div class="prod-btn my-3">
                                    <div class="prod-text">
                                        <h4>Bridal Work</h4>
                                        <p>10 products</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 px-3 my-2">
                        <div class="prod-work ">
                            <a href="product.php">
                                <div class="prod-img">
                                    <img src="./assets/img/product-first.jpg" alt="product.jpg">
                                </div>
                                <div class="prod-btn my-3">
                                    <div class="prod-text">
                                        <h4>Heavy Work</h4>
                                        <p>10 products</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 px-3 my-2">
                        <div class="prod-work ">
                            <a href="product.php">
                                <div class="prod-img">
                                    <img src="./assets/img/product-sec.jpg" alt="product.jpg">
                                </div>
                                <div class="prod-btn my-3">
                                    <div class="prod-text">
                                        <h4>Fancy Work</h4>
                                        <p>10 products</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="salwars" class="tab-pane  ">
                <div class="d-flex-wrap">
                    <div class="col-md-4 col-12 px-3 my-2">
                        <div class="prod-work ">
                            <a href="product.php">
                                <div class="prod-img">
                                    <img src="./assets/img/product.jpg" alt="product.jpg">
                                </div>
                                <div class="prod-btn my-3">
                                    <div class="prod-text">
                                        <h4>Bridal Work</h4>
                                        <p>10 products</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 px-3 my-2">
                        <div class="prod-work ">
                            <a href="product.php">
                                <div class="prod-img">
                                    <img src="./assets/img/product-first.jpg" alt="product.jpg">
                                </div>
                                <div class="prod-btn my-3">
                                    <div class="prod-text">
                                        <h4>Heavy Work</h4>
                                        <p>10 products</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 px-3 my-2">
                        <div class="prod-work ">
                            <a href="product.php">
                                <div class="prod-img">
                                    <img src="./assets/img/product-sec.jpg" alt="product.jpg">
                                </div>
                                <div class="prod-btn my-3">
                                    <div class="prod-text">
                                        <h4>Fancy Work</h4>
                                        <p>10 products</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="half-saree" class="tab-pane  ">
                <div class="d-flex-wrap">
                    <div class="col-md-4 col-12 px-3 my-2">
                        <div class="prod-work ">
                            <a href="product.php">
                                <div class="prod-img">
                                    <img src="./assets/img/hal-aari.jpg" alt="product.jpg">
                                </div>
                                <div class="prod-btn my-3">
                                    <div class="prod-text">
                                        <h4>Bridal Work</h4>
                                        <p>10 products</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 px-3 my-2">
                        <div class="prod-work ">
                            <a href="product.php">
                                <div class="prod-img">
                                    <img src="./assets/img/product-first.jpg" alt="product.jpg">
                                </div>
                                <div class="prod-btn my-3">
                                    <div class="prod-text">
                                        <h4>Heavy Work</h4>
                                        <p>10 products</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 px-3 my-2">
                        <div class="prod-work ">
                            <a href="product.php">
                                <div class="prod-img">
                                    <img src="./assets/img/product-sec.jpg" alt="product.jpg">
                                </div>
                                <div class="prod-btn my-3">
                                    <div class="prod-text">
                                        <h4>Fancy Work</h4>
                                        <p>10 products</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product design end -->
<!-- Portfolio design -->
<div class="portfolio-design my-4 w-95">
    <div class="aari-title">
        <h2>Portfolio</h2>
    </div>
    <div class="d-flex-wrap my-4">
        <div class="col-md-4 col-12 px-3 my-2">
            <div class="port-img">
                <img src="./assets/img/peacock.jpg" alt="peacock">
                <div class="peac-conte">
                    <h5>Peacock Design</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique aut eligendi placeat mollitia, accusamus architecto. </p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-12 px-3 my-2">
            <div class="port-img">
                <img src="./assets/img/stone.jpg" alt="peacock">
                <div class="peac-conte">
                    <h5>Stone Design</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique aut eligendi placeat mollitia, accusamus architecto. </p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-12 px-3 my-2">
            <div class="port-img">
                <img src="./assets/img/skill.jpg" alt="peacock">
                <div class="peac-conte">
                    <h5>Silk Design</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique aut eligendi placeat mollitia, accusamus architecto. </p>
                </div>
            </div>
        </div>
    </div>
    <div class="my-3 text-center">
        <a href="portfolio.php" class="btn-des">View All</a>
    </div>
</div>
<!-- Portfolio design end -->
<!-- Our blog design -->
<div class="our-blog my-3">
    <div class="aari-title text-center">
        <h2>Our Blog</h2>
    </div>
    <div class="d-flex-wrap my-4 w-95">
        <div class="col-md-4 col-12 px-3 my-2">
            <div class="port-img">
                <img src="./assets/img/hal-aari.jpg" alt="peacock">
                <div class="peac-conte">
                    <div class="date-destign my-3">
                        <h6>23/05/2023</h6>
                    </div>
                    <div class="blog-design">
                        <h5>
                            Bridal Saree </h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique aut eligendi placeat mollitia, accusamus architecto. </p>
                        <div class="my-3 text-center">
                            <a href="blog-view.php" class="btn-des">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-12 px-3 my-2">
            <div class="port-img">
                <img src="./assets/img/saree-arri.jpg" alt="peacock">
                <div class="peac-conte">
                    <div class="date-destign my-3">
                        <h6>23/05/2023</h6>
                    </div>
                    <div class="blog-design">
                        <h5>
                            Bridal Saree </h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique aut eligendi placeat mollitia, accusamus architecto. </p>
                        <div class="my-3 text-center">
                            <a href="blog-view.php" class="btn-des">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-12 px-3 my-2">
            <div class="port-img">
                <img src="./assets/img/blog.jpg" alt="peacock">
                <div class="peac-conte">
                    <div class="date-destign my-3">
                        <h6>23/05/2023</h6>
                    </div>
                    <div class="blog-design">
                        <h5>
                            Bridal Saree </h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique aut eligendi placeat mollitia, accusamus architecto. </p>
                        <div class="my-3 text-center">
                            <a href="blog-view.php" class="btn-des">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our blog design end -->
<!-- our client says start  -->
<div class="our-client my-3">
    <div class="aari-title text-center">
        <h2>Our client Says</h2>
    </div>
    <div class="d-flex-wrap my-4 w-95">
        <div class="col-md-4 col-12 px-3 my-2">
            <div class="client-con">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus rerum sapiente impedit eum minima exercitationem ducimus vero odio hic molestiae deleniti nam et reiciendis recusandae, dolore at? Hic, nulla voluptas.</p>
                <div class="img-client mt-4">
                    <img src="./assets/img/testi.jpg" alt="client">
                    <h6>Priya</h6>
                    <p>Designer in ABC company</p>
                </div>
                <div class="bots-imgs">
                    <img src="./assets/img/testimonial.png" alt="testimonial">
                </div>
            </div>
        </div>
        <div class="col-md-4 col-12 px-3 my-2">
            <div class="client-con">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus rerum sapiente impedit eum minima exercitationem ducimus vero odio hic molestiae deleniti nam et reiciendis recusandae, dolore at? Hic, nulla voluptas.</p>
                <div class="img-client mt-4">
                    <img src="./assets/img/testi.jpg" alt="client">
                    <h6>Priya</h6>
                    <p>Designer in ABC company</p>
                </div>
                <div class="bots-imgs">
                    <img src="./assets/img/testimonial.png" alt="testimonial">
                </div>
            </div>
        </div>
        <div class="col-md-4 col-12 px-3 my-2">
            <div class="client-con">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus rerum sapiente impedit eum minima exercitationem ducimus vero odio hic molestiae deleniti nam et reiciendis recusandae, dolore at? Hic, nulla voluptas.</p>
                <div class="img-client mt-4">
                    <img src="./assets/img/testi.jpg" alt="client">
                    <h6>Priya</h6>
                    <p>Designer in ABC company</p>
                </div>
                <div class="bots-imgs">
                    <img src="./assets/img/testimonial.png" alt="testimonial">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- our client says end -->
<?php include('templates/footer.php') ?>