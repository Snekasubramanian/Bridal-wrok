<?php $file_name = "contact";
include('templates/header.php') ?>
<?php include('templates/navbar.php') ?>
<!-- banner abouts -->
<div class="about-pages  ">
    <h2>Contact Us</h2>
</div>
<!-- banner abouts end -->
<!-- contact design -->
<div class="my-3 w-95 d-flex-wrap cont-sess">
    <div class="col-md-7 col-12 px-3 my-2">
        <div class="title-design text-center">
            <h2>Quick Find Us</h2>
        </div>
        <div class="d-flex-jc my-4">
            <div class="col-md-6 col-12 px-3 mt-5 mb-2">
                <div class="cont-box">
                    <div class="box-icon">
                        <i class="fa-solid fa-phone  "></i>
                    </div>
                    <div class="cont-details mt-4">
                        <h4>Contact US</h4>
                        <ul>
                            <li><a href="tel:+919791171204">+91-97911 71204</a></li>
                            <li><a href="tel:+919791171204">+91-97911 71204</a></li>
                        </ul>

                    </div>

                </div>
            </div>
            <div class="col-md-6 col-12 px-3 mt-5 mb-2">
                <div class="cont-box">
                    <div class="box-icon">
                        <i class="fa-solid fa-paper-plane"></i>
                    </div>
                    <div class="cont-details mt-4">
                        <h4>E-mail</h4>
                        <ul>
                            <li><a href="mailto:demo@gmail.com">demo@gmail.com</a></li>
                            <li><a href="mailto:demo@gmail.com">demo@gmail.com</a></li>
                        </ul>

                    </div>

                </div>
            </div>
            <div class="col-md-6 col-12 px-3 mt-5 mb-2">
                <div class="cont-box">
                    <div class="box-icon">
                        <i class="fa-solid fa-location-crosshairs"></i>
                    </div>
                    <div class="cont-details mt-4">
                        <h4>Location</h4>
                        <ul>
                            <li><a href=" ">168/170, Ave 01,Old York Drive Rich Mirpur, Dhaka, Bangladesh</a></li>
                        </ul>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-md-5 col-12 px-3 my-2">
        <div class="enquiry-design">
            <h2>Enquiry Now</h2>
            <form action="" method="post">
                <div class="my-2 px-3">
                    <label for="name">Name</label>
                    <input type="name" class="form-control" id="name" required placeholder="Enter Name" name="name" />
                </div>
                <div class="my-2 px-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" class="form-control" required placeholder="Enter Email" name="email" />
                </div>
                <div class="my-2 px-3">
                    <label for="">Phone</label>
                    <input type="number" class="form-control" id="mobile" required placeholder="Enter Phone Number" name="mobile" pattern="[6-9]{1}[0-9]{9}" minlength="10" return false; />

                </div>
                <div class="my-2 px-3">
                    <label for="">Subject</label>
                    <input type="text" class="form-control" id="subject" required placeholder="Enter Subject" />

                </div>
                <div class="my-2 px-3">
                    <label for="message">Message</label>
                    <textarea class="form-control" placeholder="type here..." required name="message" rows="2" id="message"></textarea>
                </div>
                <div class="re_ser text-center py-2">
                    <input class="btn-des" type="submit" name="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>

</div>
<div class="col-12 ">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.7952461931977!2d80.20555237478992!3d13.048701287273824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52679ae0ce952d%3A0x151ec64ced2d16a5!2sRaahat%20Plaza!5e0!3m2!1sen!2sin!4v1685092280707!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- contact design end -->
<?php include('templates/footer.php') ?>