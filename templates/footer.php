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
                     <li><a href="bus-rental-chennai.php">Bus Rental</a></li>
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
 <!-- <script>
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
 </script> -->
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

 <!-- navbar dropdown starts -->
 <script>
     $(function() {
         $(".dropdown-menu > li > a.trigger").on("click", function(e) {
             var current = $(this).next();
             var grandparent = $(this).parent().parent();
             if ($(this).hasClass('left-caret') || $(this).hasClass('right-caret'))
                 $(this).toggleClass('right-caret left-caret');
             grandparent.find('.left-caret').not(this).toggleClass('right-caret left-caret');
             grandparent.find(".sub-menu:visible").not(current).hide();
             current.toggle();
             e.stopPropagation();
         });
         $(".dropdown-menu > li > a:not(.trigger)").on("click", function() {
             var root = $(this).closest('.dropdown');
             root.find('.left-caret').toggleClass('right-caret left-caret');
             root.find('.sub-menu:visible').hide();
         });
     });
 </script>
 <!-- navbar dropdown ends -->

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
     const parseHTML = htmlStr => {
         const range = document.createRange()
         range.selectNode(document.body)
         return range.createContextualFragment(htmlStr)
     }
     const makeImgMagnifiable = img => {
         const magnifierFragment = parseHTML(`
    <div class="magnifier-container">
      <div class="magnifier">
        <img class="magnifier__img" src="${img.src}"/>
      </div>
    </div>
  `)
         img.parentElement.insertBefore(magnifierFragment, img)
         const magnifierContainerEl = document.querySelector('.magnifier-container')
         img.remove()
         magnifierContainerEl.appendChild(img)
         const magnifierEl = magnifierContainerEl.querySelector('.magnifier')
         const magnifierImg = magnifierEl.querySelector('.magnifier__img')
         const transform = {
             translate: [0, 0],
             scale: 1,
         }

         const setTransformStyle = (el, {
             translate,
             scale
         }) => {
             const [xPercent, yRawPercent] = translate
             const yPercent = yRawPercent < 0 ? 0 : yRawPercent
             const [xOffset, yOffset] = [
                 `calc(-${xPercent}% + 250px)`,
                 `calc(-${yPercent}% + 70px)`,
             ]

             el.style = `
      transform: scale(${scale}) translate(${xOffset}, ${yOffset});
    `
         }
         img.addEventListener('mousemove', event => {
             const [mouseX, mouseY] = [event.pageX + 40, event.pageY - 20]
             const {
                 top,
                 left,
                 bottom,
                 right
             } = img.getBoundingClientRect()
             transform.translate = [
                 ((mouseX - left) / right) * 100,
                 ((mouseY - top) / bottom) * 100,
             ]
             magnifierEl.style = `
      display: block;
      top: ${mouseY}px;
      left: ${mouseX}px;
    `
             setTransformStyle(magnifierImg, transform)
         })
         img.addEventListener('wheel', event => {
             event.preventDefault()
             const scrollingUp = event.deltaY < 0
             const {
                 scale
             } = transform
             transform.scale = scrollingUp && scale < 3 ?
                 scale + 0.1 :
                 !scrollingUp && scale > 1 ?
                 scale - 0.1 :
                 scale
             setTransformStyle(magnifierImg, transform)
         })
         img.addEventListener('mouseleave', () => {
             magnifierEl.style = ''
             magnifierImg.style = ''
         })
     }
     const img = document.querySelector('.image-preview-js')
     makeImgMagnifiable(img)
 </script>
 <!-- product detail zoom end -->