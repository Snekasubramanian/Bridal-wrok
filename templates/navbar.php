<div class="nav-menu">
    <div class="top-bar">
        <ul class="d-flex-al justify-content-center justify-content-lg-between w-95">
            <li>
                <a href="mailto: info@bridalaariworks.com ">
                    <i class='bx bxs-envelope  '></i>
                    info@bridalaariworks.com</a>
            </li>

            <li>
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-twitter'></i></a>
            </li>
        </ul>
    </div>
    <div class="logo_des w-95 py-3">
        <ul class=" d-flex-al-jb">
            <li>
                <a href="https://api.whatsapp.com/send?phone=+919791171024&text=Hi%20Sir.%2C%20" target="_blank">
                    <img src="./assets/img/whatsapp.png" alt="whatsapp" class="what-icon">Chat with us : +91 97911 71024</a>
            </li>
            <li> <a href="index.php" class="navbar-brand d-md-block d-none">
                    <img src="./assets/img/logo.png" alt="logo" />
                </a></li>
            <li>
                <div class="search-container">
                    <form action="">
                        <div id="searchform">
                            <input type="text" id="search-bar" autocomplete="off" type="text" class="form-control" placeholder="Search here" />
                            <ul class="output" style="display: none"></ul>
                            <button class="btn-sea  " type="submit">
                                <i class="fa fa-search"></i>
                            </button>

                        </div>
                    </form>
                </div>
            </li>
        </ul>

    </div>
    <div class="nav-background">
        <nav class="navbar navbar-expand-md navbar-light w-95 ">
            <a href="index.php" class="navbar-brand d-md-none d-block">
                <img src="./assets/img/logow.png" alt="logo" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-center min-nav" id="navbarScroll">
                <ul class="navbar-nav navbar-nav-scroll nav_a">
                    <li class="nav-item">
                        <a class="nav-link  <?php if ($file_name == "home") {
                                                echo "active";
                                            } ?>" aria-current="page" href="index.php">Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  <?php if ($file_name == "about") {
                                                echo "active";
                                            } ?>" aria-current="page" href="about.php">About Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  <?php if ($file_name == "portfolio") {
                                                echo "active";
                                            } ?>" aria-current="page" href="portfolio.php">Portfolio
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link  <?php if ($file_name == "product") {
                                                                echo "active";
                                                            } ?>" aria-current="page" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Product <span class="caret"></span></a>
                        <ul class="dropdown-menu">

                            <li><a class="trigger right-caret">Blouse</a>
                                <ul class="dropdown-menu sub-menu"> 
                                    <li>
                                        <a class="trigger right-caret">Bridal Work</a>
                                        <ul class="dropdown-menu sub-menu">
                                            <li><a href="product.php">Bridal Work 1</a></li>
                                            <li><a href="#">Bridal Work 2</a></li>
                                            <li><a href="#">Bridal Work 3</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="trigger right-caret">Saree</a>
                                <ul class="dropdown-menu sub-menu"> 
                                    <li>
                                        <a class="trigger right-caret">Saree Work</a>
                                        <ul class="dropdown-menu sub-menu">
                                            <li><a href="product.php">Saree Work 1</a></li>
                                            <li><a href="#">Saree Work 2</a></li>
                                            <li><a href="#">Saree Work 3</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="trigger right-caret">Salwars</a>
                                <ul class="dropdown-menu sub-menu"> 
                                    <li>
                                        <a class="trigger right-caret">Bridal Work</a>
                                        <ul class="dropdown-menu sub-menu">
                                            <li><a href="product.php">Bridal Work 1</a></li>
                                            <li><a href="#">Bridal Work 2</a></li>
                                            <li><a href="#">Bridal Work 3</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  <?php if ($file_name == "blog") {
                                                echo "active";
                                            } ?>" aria-current="page" href="blog.php">Our Blog
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  <?php if ($file_name == "contact") {
                                                echo "active";
                                            } ?>" aria-current="page" href="contact.php">Contact Us
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>