
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="../../assets/prev/css/page2_style.css">
  <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
  <script src="../../assets/prev/jquery/custom.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <link rel="stylesheet" href="likebtn.css">

  <link rel="stylesheet" href="../../assets/css/navigation.css">
  <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/css/normalize.min.css" rel="stylesheet">
  <link href="../../assets/css/style1.css" rel="stylesheet">
  <link href="../../assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

  <link rel="apple-touch-icon" sizes="180x180" href="../../assets/images/icon-180x180.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../assets/images/icon-32x32.png">
  <link rel="mask-icon" href="../..//safari-pinned-tab.svg" color="#5bbad5">
  <link rel="stylesheet" href="../../assets\css\responsive.css">
  <link rel="stylesheet" href="slider.css">
  <!--META TAGS-->
  <meta name="msapplication-TileColor" content="#603cba">
  <meta name="theme-color" content="#ffffff">
  <meta name="robots" content="noindex,nofollow">
  <style>
    .section-lena-inner {
      padding-left: 0;
    }

    body {
      overflow: auto;
    }

    nav.navbar {
      height: 60px;
      top: 0;
    }

    .c9 {
      padding-left: 0 !important;
      padding-right: 0 !important;
      max-width: 100%;
    }

    .likebtn {
      margin-bottom: 2rem;
    }

    .spacerx {
      margin-top: 3rem;
    }

    .nodeco {
      color: white !important;
      text-decoration: none !important;
    }

    .nowrap1 {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    @media print {
      body * {
        visibility: hidden;
      }

      .section-to-print,
      .section-to-print * {
        visibility: visible;
      }

      .section-to-print {
        position: absolute;
        left: 0;
        top: 0;
      }
    }

    .section1 {
      margin-top: 4rem;
      background-color: white;
    }

    .w100p {
      width: 100% !important;
      max-width: 100% !important;
    }

    .mid-highlight.container {
      max-width: 100%;
    }

    .section-lena-kitchen {
      max-width: 100%;
    }

    .section-simple-way {
      background-color: white;
    }

    .page-3_stage.page-4_stage {
      background-color: white;
    }
  </style>
  

<section class="section-slider1 section-slider2 no-print">
        <div class="section-slider-center text-center">
          <div class="wrap" style="z-index: 0;">
            <div class="slider2">
              <div class="item">
                <div class="inner-item">
                    <div>
                        <h3>Benefits
</h3>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle9">
                  Easily changeable with the season
                  </button>
                </div>
              </div>
              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle8">
                  Save costs with plant based dishes
                  </button>
                </div>
              </div>
              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle10">
                  Increase profit with better meat
                  </button>
                </div>
              </div>
              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle12">
                  Stand out from the competition
                  </button>
                </div>
              </div>

              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle13">
                  Keep up with social trends
                  </button>
                </div>
              </div>

              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle14">
                  Cater to new costumers
                  </button>
                </div>
              </div>

              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle15">
                  Stable, profitable business
                  </button>
                </div>
              </div>

              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle16">
                  Revive the local economy
                  </button>
                </div>
              </div>

              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle17">
                  Varied and delicious dishes
                  </button>
                </div>
              </div>


              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle18">
                  Positive, restorative impact on local community and global environment
                  </button>
                </div>
              </div>


              <!-- <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle19">
                  Save natural resources
                  </button>
                </div>
              </div> -->


            </div>
          </div>

        </div>
      </section>

  


    <script>
      var x, i, j, l, ll, selElmnt, a, b, c;
      /*look for any elements with the class "custom-select":*/
      x = document.getElementsByClassName("custom-select");
      l = x.length;
      for (i = 0; i < l; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        ll = selElmnt.length;
        /*for each element, create a new DIV that will act as the selected item:*/
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        /*for each element, create a new DIV that will contain the option list:*/
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");
        for (j = 1; j < ll; j++) {
          /*for each option in the original select element,
          create a new DIV that will act as an option item:*/
          c = document.createElement("DIV");
          c.innerHTML = selElmnt.options[j].innerHTML;
          c.addEventListener("click", function(e) {
            /*when an item is clicked, update the original select box,
            and the selected item:*/
            var y, i, k, s, h, sl, yl;
            s = this.parentNode.parentNode.getElementsByTagName("select")[0];
            sl = s.length;
            h = this.parentNode.previousSibling;
            for (i = 0; i < sl; i++) {
              if (s.options[i].innerHTML == this.innerHTML) {
                s.selectedIndex = i;
                h.innerHTML = this.innerHTML;
                y = this.parentNode.getElementsByClassName("same-as-selected");
                yl = y.length;
                for (k = 0; k < yl; k++) {
                  y[k].removeAttribute("class");
                }
                this.setAttribute("class", "same-as-selected");
                break;
              }
            }
            h.click();
          });
          b.appendChild(c);
        }
        x[i].appendChild(b);
        a.addEventListener("click", function(e) {
          /*when the select box is clicked, close any other select boxes,
          and open/close the current select box:*/
          e.stopPropagation();
          closeAllSelect(this);
          this.nextSibling.classList.toggle("select-hide");
          this.classList.toggle("select-arrow-active");
        });
      }

      function closeAllSelect(elmnt) {
        /*a function that will close all select boxes in the document,
        except the current select box:*/
        var x, y, i, xl, yl, arrNo = [];
        x = document.getElementsByClassName("select-items");
        y = document.getElementsByClassName("select-selected");
        xl = x.length;
        yl = y.length;
        for (i = 0; i < yl; i++) {
          if (elmnt == y[i]) {
            arrNo.push(i)
          } else {
            y[i].classList.remove("select-arrow-active");
          }
        }
        for (i = 0; i < xl; i++) {
          if (arrNo.indexOf(i)) {
            x[i].classList.add("select-hide");
          }
        }
      }
      /*if the user clicks anywhere outside the select box,
      then close all select boxes:*/
      document.addEventListener("click", closeAllSelect);



      $('.slider').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        centerMode: true,
        variableWidth: true,
        infinite: true,
        focusOnSelect: true,
        cssEase: 'linear',
        touchMove: true,
        prevArrow: '<button class="slick-prev"> < </button>',
        nextArrow: '<button class="slick-next"> > </button>',

        //         responsive: [                        
        //             {
        //               breakpoint: 576,
        //               settings: {
        //                 centerMode: false,
        //                 variableWidth: false,
        //               }
        //             },
        //         ]
      });



      var imgs = $('.slider img');
      imgs.each(function() {
        var item = $(this).closest('.item');
        item.css({
          'background-image': 'url(' + $(this).attr('src') + ')',
          'background-position': 'center',
          '-webkit-background-size': 'cover',
          'background-size': 'cover',
        });
        $(this).hide();
      });

      $('.slider2').slick({
        slidesToShow: 3,
        arrows: true,
        dots: false,
        centerMode: true,
        variableWidth: true,
        infinite: true,
        focusOnSelect: true,
        cssEase: 'linear',
        touchMove: true,
        prevArrow: '<button class="slick-prev"> < </button>',
        nextArrow: '<button class="slick-next"> > </button>',

        //         responsive: [                        
        //             {
        //               breakpoint: 576,
        //               settings: {
        //                 centerMode: false,
        //                 variableWidth: false,
        //               }
        //             },
        //         ]
      });

      var imgs = $('.slider2 img');
      imgs.each(function() {
        var item = $(this).closest('.item');
        item.css({
          'background-image': 'url(' + $(this).attr('src') + ')',
          'background-position': 'center',
          '-webkit-background-size': 'cover',
          'background-size': 'cover',
        });
        $(this).hide();
      });




      let collapsibleHeaders = document.getElementsByClassName('collapsible__header');

      Array.from(collapsibleHeaders).forEach(header => {
        header.addEventListener('click', () => {
          header.parentElement.classList.toggle('collapsible--open');
        });
      });

      // Quick & dirty toggle to demonstrate modal toggle behavior
      $('.modal-toggle1').on('click', function(e) {
        e.preventDefault();
        $('.vegan-modal').toggleClass('is-visible');
      });
      $('.modal-toggle2').on('click', function(e) {
        e.preventDefault();
        $('.vegi-modal').toggleClass('is-visible');
      });
      $('.modal-toggle3').on('click', function(e) {
        e.preventDefault();
        $('.paleo-modal').toggleClass('is-visible');
      });
      $(' .modal-toggle4').on('click', function(e) {
        e.preventDefault();
        $('.keto-modal').toggleClass('is-visible');
      });
      $('.modal-toggle5').on('click', function(e) {
        e.preventDefault();
        $('.fruit-modal').toggleClass('is-visible');
      });
      $('.modal-toggle6').on('click', function(e) {
        e.preventDefault();
        $('.omni-modal').toggleClass('is-visible');
      });
      $('.modal-toggle7').on('click', function(e) {
        e.preventDefault();
        $('.flexi-modal').toggleClass('is-visible');
      });
      $('.modal-toggle8').on('click', function(e) {
        e.preventDefault();
        $('.eng-modal').toggleClass('is-visible');
      });
      $('.modal-toggle9').on('click', function(e) {
        e.preventDefault();
        $('.redu-modal').toggleClass('is-visible');
      });
      $('.modal-toggle10').on('click', function(e) {
        e.preventDefault();
        $('.intro-modal').toggleClass('is-visible');
      });
      $('.modal-toggle11').on('click', function(e) {
        e.preventDefault();
        $('.source-modal').toggleClass('is-visible');
      });
      $('.modal-toggle12').on('click', function(e) {
        e.preventDefault();
        $('.use-modal').toggleClass('is-visible');
      });

      $('.modal-toggle13').on('click', function(e) {
        e.preventDefault();
        $('.set-modal').toggleClass('is-visible');
      });
      $('.modal-toggle14').on('click', function(e) {
        e.preventDefault();
        $('.ver-modal').toggleClass('is-visible');
      });
      $('.modal-toggle15').on('click', function(e) {
        e.preventDefault();
        $('.exp-modal').toggleClass('is-visible');
      });
      $('.modal-toggle16').on('click', function(e) {
        e.preventDefault();
        $('.neh-modal').toggleClass('is-visible');
      });
      $('.modal-toggle17').on('click', function(e) {
        e.preventDefault();
        $('.setsie-modal').toggleClass('is-visible');
      });

      $('.modal-toggle18').on('click', function(e) {
        e.preventDefault();
        $('.introdiv-modal').toggleClass('is-visible');
      });
      $('.modal-toggle19').on('click', function(e) {
        e.preventDefault();
        $('.introdiv-modal').toggleClass('is-visible');
      });


      $(document).on('click', '.read-more-btn, .read-text', function() {
        var $el = $(this),
          $el_wrap = $el.closest('.more-text'),
          $content = $el_wrap.find('[id^="more"]'),
          target = $el.attr('target');
        if (target != null) {
          $content = $(target);
        }
        if ($content.hasClass('active')) {
          $content.slideUp('fast').removeClass('active');
          $el.html('Read more').removeClass('btn-active');
        } else {
          $content.slideDown('fast').addClass('active');
          $el.html('Read less').addClass('btn-active');
        }
      });
    </script>

    <script src="../../assets/prev/jquery/page1.js"></script>

    <script type="text/javascript" src="../../assets/prev/assets/js/common.js"></script>

    <script>
      document.addEventListener("DOMContentLoaded", function() {
        // make it as accordion for smaller screens
        if (window.innerWidth < 992) {

          // close all inner dropdowns when parent is closed
          document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown) {
            everydropdown.addEventListener('hidden.bs.dropdown', function() {
              // after dropdown is hidden, then find all submenus
              this.querySelectorAll('.submenu').forEach(function(everysubmenu) {
                // hide every submenu as well
                everysubmenu.style.display = 'none';
              });
            })
          });
          //hover reference https://stackoverflow.com/questions/8318591/javascript-addeventlistener-using-to-create-a-mouseover-effect
          document.querySelectorAll('.dropdown-menu a').forEach(function(element) {
            element.addEventListener('click', function(e) {
              let nextEl = this.nextElementSibling;
              if (nextEl && nextEl.classList.contains('submenu')) {
                // prevent opening link if link needs to open dropdown
                e.preventDefault();
                if (nextEl.style.display == 'block') {
                  nextEl.style.display = 'none';
                } else {
                  nextEl.style.display = 'block';
                }

              }
            });
          });
        }
        // end if innerWidth
      });
      // DOMContentLoaded  end
    </script>

    <script>
      $(document).ready(function() {
        var cur_page_name = "Sustainable Menu";
        var cur_nav_link_id = "3";
        var eng_page_path = "explore-sustainable-menu-eng.php";
        var deu_page_path = "explore-sustainable-menu-deu.php";
        //manipulation
        pagemanipulation(cur_page_name, cur_nav_link_id, eng_page_path, deu_page_path);
        var menuIdVal = "0";
        menumanipulation(menuIdVal, "e");


         //like share stats
        $(document).ready(function(){
            $.ajax({
                url : 'isliked.php?q=SUSTAINABLE MENU',
                type : 'POST',
                success : function (result) {
                    var retVal=parseInt(result);
                    if(retVal>0){
                        $("#likeBtn").addClass("liked");
                    }
                },
                error : function () {
                    console.log (error);
                }
            });
            return false;
         });

        $("#likeBtn").click(function(){
            $.ajax({
                url : 'isliked.php?q=SUSTAINABLE MENU',
                type : 'POST',
                success : function (result) {
                    var retVal=parseInt(result);
                    if(retVal>0){
                        //dislike
                        $.ajax({
                            url : 'dislike.php?q=SUSTAINABLE MENU',
                            type : 'POST',
                            success : function (result) {
                                var retVal=parseInt(result);
                                if(retVal="1"){
                                    $("#likeBtn").removeClass("liked");
                                }else{
                                    console.log("DISLIKE ERROR")
                                }
                            },
                            error : function () {
                                console.log ("error");
                            }
                        });
                    }else{
                        $.ajax({
                            url : 'like.php?q=SUSTAINABLE MENU',
                            type : 'POST',
                            success : function (result) {
                                var retVal=parseInt(result);
                                if(retVal="1"){
                                    $("#likeBtn").addClass("liked");
                                }else{
                                    console.log("LIKE ERROR")
                                }
                            },
                            error : function () {
                                console.log ("error");
                            }
                        });
                    }
                },
                error : function () {
                    console.log ("error");
                }
            });
            return false;
        });
      });
    </script>

  

    <script src="../../assets/js/navigation.js"></script>
    <script src="../../assets/js/common.js"></script>
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/pageparams.js"></script>
    <script src="../../assets/js/likeshare-eng.js"></script>


      


