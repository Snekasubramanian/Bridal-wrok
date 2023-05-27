 <div class="footer">
     <div class="d-flex-wrap w-95">
         <div class="col-md-5 col-sm-6 col-12 px-3">
             <div class="foot-content">
                 <h5> Bridal Aari Works</h5>
                 <ul>
                     <li><i class='bx bx-current-location'></i> <a href="" class="w-100">Shop No:9,Basement Floor,Arcot Road,Raahat Plaza,
                             Vadapalani, Chennai - 600026</a></li>
                     <li><i class='bx bxs-phone-call'></i><a href="tel:+919791171204">+91-97911 71204</a>
                         <br>
                         <a href="">+91-97911 71204</a>
                     </li>
                     <li> <i class='bx bxs-envelope  '></i><a href="mailto: info@bridalaariworks.com ">info@bridalaariworks.com</a></li>
                 </ul>
             </div>
         </div>
         <div class="col-md-3 col-sm-6 col-12 px-3">
             <div class="foot-content">
                 <h5> About Company</h5>
                 <ul>
                     <li><a href="index.php">Home</a></li>
                     <li><a href="about.php">About Us</a></li>
                     <li><a href="portfolio.php">Portfolio</a></li>
                     <li><a href="testimonial.php">Testimonial</a></li>
                     <li><a href="blog.php">Our Blog</a></li>
                     <li><a href="contact.php">Contact Us</a></li>
                 </ul>
             </div>
         </div>

         <div class="col-md-4 col-sm-6 col-12 px-3">
             <div class="foot-content">
                 <ul>
                     <li class="justify-content-center">
                         <a href="#"><i class='bx bxl-facebook'></i></a>
                         <a href="#"><i class='bx bxl-instagram'></i></a>
                         <a href="#"><i class='bx bxl-twitter'></i></a>
                     </li>

                 </ul>
                 <p>All rights reserved to Aari
                     <br>
                     Design and Developed by
                     <a href="www.ninositsolution.com" target="_blank"> Ninos IT Solution</a>

                 </p>
             </div>

         </div>
     </div>
 </div>
 <!-- script -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

 <!-- search -->
 <script>
     $(document).ready(function() {

         var $terms = [
                 'search',
                 'test',
                 'css',
                 'apple',
                 'bear',
                 'cat',
                 'crabapple',
                 'creep',
                 'czar',
                 'danger',
                 'dominant',
                 'doppler',
                 'everclear',
                 'evangelism',
                 'frodo'
             ].sort(),
             $return = [];

         function strInArray(str, strArray) {
             for (var j = 0; j < strArray.length; j++) {
                 if (strArray[j].match(str) && $return.length < 5) {
                     var $h = strArray[j].replace(str, '<strong>' + str + '</strong>');
                     $return.push('<li class="prediction-item"><span class="prediction-text">' + $h + '</span></li>');
                 }
             }
         }

         function nextItem(kp) {
             if ($('.focus').length > 0) {
                 var $next = $('.focus').next(),
                     $prev = $('.focus').prev();
             }

             if (kp == 38) { // Up

                 if ($('.focus').is(':first-child')) {
                     $prev = $('.prediction-item:last-child');
                 }

                 $('.prediction-item').removeClass('focus');
                 $prev.addClass('focus');

             } else if (kp == 40) { // Down

                 if ($('.focus').is(':last-child')) {
                     $next = $('.prediction-item:first-child');
                 }

                 $('.prediction-item').removeClass('focus');
                 $next.addClass('focus');
             }
         }

         $(function() {
             $('#search-bar').keydown(function(e) {
                 $key = e.keyCode;
                 if ($key == 38 || $key == 40) {
                     nextItem($key);
                     return;
                 }

                 setTimeout(function() {
                     var $search = $('#search-bar').val();
                     $return = [];

                     strInArray($search, $terms);

                     if ($search == '' || !$('input').val) {
                         $('.output').html('').slideUp();
                     } else {
                         $('.output').html($return).slideDown();
                     }

                     $('.prediction-item').on('click', function() {
                         $text = $(this).find('span').text();
                         $('.output').slideUp(function() {
                             $(this).html('');
                         });
                         $('#search-bar').val($text);
                     });

                     $('.prediction-item:first-child').addClass('focus');

                 }, 50);
             });
         });

         $('#search-bar').focus(function() {
             if ($('.prediction-item').length > 0) {
                 $('.output').slideDown();
             }

             $('#searchform').submit(function(e) {
                 e.preventDefault();
                 $text = $('.focus').find('span').text();
                 $('.output').slideUp();
                 $('#search-bar').val($text);
                 $('input').blur();
             });
         });

         $('#search-bar').blur(function() {
             if ($('.prediction-item').length > 0) {
                 $('.output').slideUp();
             }
         });

     });
 </script>
 <!-- search end -->
 <!-- image zooom -->
 <script>
     $(document).ready(function() {
         $('.gallerys').magnificPopup({
             type: 'image',
             delegate: 'a',
             gallery: {
                 enabled: true
             },
         });
     });
 </script>
 <!-- image zooom end -->
 <!-- modal start -->

 <div class="modal job-form" id="mymodal">
     <div class="modal-dialog modal-dialog-centered mo-di">
         <div class="modal-content ">

             <button data-bs-dismiss="modal" class="clse_btn">
                 <i class="fa-solid fa-xmark "></i>
             </button>
             <div class="modal-body">
                 <h4>Enquiry Now</h4>
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
 </div>

 <!-- modal ends -->
 <!-- modal start testimonial -->
 <div class="modal fade" id="testread">
     <div class="modal-dialog modal-dialog-centered mo-di">
         <div class="modal-content  ">
             <button data-bs-dismiss="modal" class="clse_btn">
                 <i class="fa-solid fa-xmark "></i>
             </button>

             <div class="modal-body modal-box">
                 <div class="client-con">
                     <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus rerum sapiente impedit eum minima exercitationem ducimus vero odio hic molestiae deleniti nam et reiciendis recusandae, dolore at? Hic, nulla voluptas.</p>
                     <div class="img-client mt-5">
                         <img src="./assets/img/testi.jpg" alt="client">
                         <h6>Priya</h6>
                         <div class="re-star  ">
                             <i class="fa-solid fa-star "></i>
                             <i class="fa-solid fa-star "></i>
                             <i class="fa-solid fa-star "></i>
                             <i class="fa-solid fa-star "></i>
                             <i class="fa-solid fa-star "></i>
                         </div>
                         <p>Designer in ABC company</p>
                     </div>
                     <div class="bots-imgs">
                         <img src="./assets/img/testimonial.png" alt="testimonial">
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <!-- modal end testimonial -->
 <!-- product detail zoom -->
 <script>
     $('.product-img--main')
         .on('mouseover', function() {
             $(this).children('.product-img--main__image').css({
                 'transform': 'scale(' + $(this).attr('data-scale') + ')'
             });
         })
         .on('mouseout', function() {
             $(this).children('.product-img--main__image').css({
                 'transform': 'scale(1)'
             });
         })
         .on('mousemove', function(e) {
             $(this).children('.product-img--main__image').css({
                 'transform-origin': ((e.pageX - $(this).offset().left) / $(this).width()) * 100 + '% ' + ((e.pageY - $(this).offset().top) / $(this).height()) * 100 + '%'
             });
         })
         // tiles set up
         .each(function() {
             $(this)
                 .append('<div class="product-img--main__image"></div>')
                 .children('.product-img--main__image').css({
                     'background-image': 'url(' + $(this).attr('data-image') + ')'
                 });
         });
 </script>
 <!-- product detail zoom end -->

 <!-- scroll down  -->

 <script>
     $('.right-bar li').on('click', 'a[href^="#"]', function(e) {
         var id = $(this).attr('href');
         var $id = $(id);
         if ($id.length === 0) {
             return;
         }

         e.preventDefault();
         var pos = $id.offset().top;
         $('body, html').animate({
             scrollTop: pos
         }, 100);
     });

     $(document).ready(
         function() {
             var bh = $('.right-bar').height();
             $('.holder').height;
         });

     $(window).scroll(function() {


         var scrollpos = $(window).scrollTop();
         $('.holder').each(function(i) {
             if ($(this).position().top <= scrollpos + 5) {
                 $('.right-bar li a.act').removeClass('act');
                 $('.right-bar li a').eq(i).addClass('act');
                 var viewportheight = $('.right-bar').height();
                 var licount = $(".right-bar li").length;
                 $('.right-bar').animate({
                     scrollTop: scrollpos / licount
                 }, 0);

             }

         });

     }).scroll();
 </script>
 <!-- scroll down  end -->
 <!-- read more -->
 <script>
     $('.read-more').click(function() {
         $('.read-more-content').slideToggle();
         if (($('.read-more').text()) == "View more") {
             $(this).text("View less");
         } else {
             $(this).text("View more");
         }
     });
 </script>
 <!-- read less end -->

 <!-- rating design -->

 <script>
     function myFunction() {
         if (document.getElementById('add-review')) {

             if (document.getElementById('add-review').style.display == 'none') {
                 document.getElementById('add-review').style.display = 'block';
                 document.getElementById('enq-review').style.display = 'none';
             } else {
                 document.getElementById('add-review').style.display = 'none';
                 document.getElementById('enq-review').style.display = 'block';
             }
         }
     }
 </script>
 <!-- rating design end -->
 <!-- testimonial -->
 <script>
     $('.testim-carousel').owlCarousel({
         loop: true,
         margin: 30,
         nav: true,
         autoplay: true,
         autoplayTimeout: 2000,
         autoplayHoverPause: true,
         responsive: {
             0: {
                 items: 1
             },
             600: {
                 items: 1
             },
             1000: {
                 items: 1
             }
         }
     })
 </script>
 <!-- testimonial end -->