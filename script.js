    $(document).ready(function () {
      $('.root').css('display', 'flex');
      $('.loader').css('display', 'none');
      
      $("#menu").click(function () {
        var menu = $("#menu");
        var menuCt = $("#menu-ct");

        if (menu.attr("src") === "menu.png") {
          menu.attr("src", "menu2.png");
        } else {
          menu.attr("src", "menu.png");
        }

        menuCt.slideToggle();
      });
      var slider = $('#slider');
      slider.on('hover', function () {
        $('#btn1').show();
      });
      const imglist = [
        'apt1/IMG-20231219-WA0027.jpg',
        'apt1/IMG-20231219-WA0028.jpg',
        'apt1/IMG-20231219-WA0029.jpg',
        'apt1/IMG-20231219-WA0030.jpg',
        'apt1/IMG-20231219-WA0032.jpg',
        'apt1/IMG-20231219-WA0033.jpg',
        'apt1/IMG-20231219-WA0034.jpg',
        'apt1/IMG-20231219-WA0035.jpg',
        'apt1/IMG-20231219-WA0036.jpg'
      ];
      slider.prepend('<img id="sImage" src="apt1/IMG-20231219-WA0036.jpg" />');
      let currentIndex = 0;
      $('#c-slider li').eq(currentIndex).addClass('active');

      function updateImage() {
        $('#sImage').attr('src', imglist[currentIndex]);
        $('#c-slider li').removeClass('active');
        if (currentIndex < 3) {
          $('#c-slider li').eq(currentIndex).addClass('active');
        } else {
          $('#c-slider li').eq(3).addClass('active');
        }
      }
      $('#c-slider li').on('click', function () {
        currentIndex = $(this).index();
        $('#sImage').attr('src', imglist[currentIndex]);
        updateImage();
      });
      function showNextImage() {
        currentIndex = (currentIndex + 1) % imglist.length;
        updateImage();
      }
      function showPreviousImage() {
        currentIndex = (currentIndex - 1 + imglist.length) % imglist.length;
        updateImage();
      }
      $('#btn2').on('click', showNextImage);
      $('#btn1').on('click', showPreviousImage);

      var textElement = $("#changingText");
      var words = ["Rental", "Home"];
      var currentindex = 0;

      function changeText() {
        textElement.fadeOut(1000, function () {
          // This callback is executed after the fadeOut is complete
          textElement.text(words[currentindex]).fadeIn(1000);
          currentindex = (currentindex + 1) % words.length;
        });
      }

      setInterval(changeText, 3000); // Change every 2000 milliseconds (2 seconds)
      changeText(); // Initial texF
      const apts = document.querySelectorAll(".room_id");
      apts.forEach((apt) => {
          apt.addEventListener("click", function () {
            let text = apt.childNodes[0].textContent;
            window.open("room.php?id="+text, "_self");
          });
        });
    });
    function link(location) {
      window.open(location,"_self");
    }