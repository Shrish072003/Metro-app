<link rel="stylesheet" href="slider.css">
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
    .slick-slide .inner-item h3 {
    text-transform: capitalize !important;
}
  </style>
  

<section class="section-slider1 section-slider2 no-print">
        <div class="section-slider-center text-center">
          <div class="wrap" style="z-index: 0;">
            <div class="slider2">
              <div class="item">
                <div class="inner-item">
                    <div>
                        <h3>Benefits</h3>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle8">
                  Opportunity to increase profit
                  </button>
                </div>
              </div>
              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle10">
                  Improve livelihoods of local and global farmers
                  </button>
                </div>
              </div>
              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle12">
                  Fresher and tasty produce

                  </button>
                </div>
              </div>

              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle13">
                  Menu easily updated with the season
                  </button>
                </div>
              </div>

              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle14">
                  Win new customers
                  </button>
                </div>
              </div>

              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle15">
                  Positive morale for staff
                  </button>
                </div>
              </div>

              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle16">
                  Positive image
                  </button>
                </div>
              </div>

              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle17">
                  Stand out from the competition
                  </button>
                </div>
              </div>


               <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle18">
                  Regional products have shorter supply chains
                  </button>
                </div>
              </div>


              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle19">
                  Comply with upcoming regulations
                  </button>
                </div>
              </div>


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
    </script>


      


