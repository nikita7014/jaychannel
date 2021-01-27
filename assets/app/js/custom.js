

 function signin() {

    document.getElementById("loginDropdown").classList.toggle("show");

  }




{
    /* // Close the dropdown if the user clicks outside of it */
}

window.onclick = function (event) {

    if (!event.target.matches('.dropbtn')) {

        var dropdowns = document.getElementsByClassName("dropdown-content");

        var i;

        for (i = 0; i < dropdowns.length; i++) {

            var openDropdown = dropdowns[i];

            if (openDropdown.classList.contains('show')) {

                openDropdown.classList.remove('show');

            }

        }

    }

}

var coll = document.getElementsByClassName("collapsible");

var i;



for (i = 0; i < coll.length; i++) {

    coll[i].addEventListener("click", function () {

        this.classList.toggle("active1");

        var content = this.nextElementSibling;

        if (content.style.maxHeight) {

            content.style.maxHeight = null;

        } else {

            content.style.maxHeight = content.scrollHeight + "px";

        }

    });

}
// <!-- hide and show div -->

function myFunction() {

    document.getElementById("panel").style.display = "block";

}

//   <!-- hide and show div for active day -->


function activeDay() {

    document.getElementById("activeDay").style.display = "block";

}
//   <!-- search -->

/* When the user clicks on the button,

 toggle between hiding and showing the dropdown content */
function search() {

    document.getElementById("searchDown").classList.toggle("showw");

}

function filterFunction() {

    var input, filter, ul, li, a, i;

    input = document.getElementById("Input");

    filter = input.value.toUpperCase();

    div = document.getElementById("searchDown");

    a = div.getElementsByTagName("a");

    for (i = 0; i < a.length; i++) {

      txtValue = a[i].textContent || a[i].innerText;

      if (txtValue.toUpperCase().indexOf(filter) > -1) {

        a[i].style.display = "";

      } else {

        a[i].style.display = "none";

      }

    }

  }


  $(function(){

    $('.fadein img:gt(0)').hide();

    setInterval(function(){

      $('.fadein :first-child').fadeOut()

         .next('img').fadeIn()

         .end().appendTo('.fadein');}, 

      3000);

});


$(document).ready(function(){

    $("#subscribe").click(function(){

      $("#subs").toggle();

    });

  });


  function btnsubmit(){
      var Idwayswecare = document.getElementById('Idwayswecare');
      var Idwayswecareform = document.getElementById('Idwayswecareform')
      var Idgreatchoice = document.getElementById('Idgreatchoice');
      if(Idwayswecare.style.display == 'block' && Idwayswecareform.style.display == 'block'){
        Idwayswecare.style.display = 'none';
        Idwayswecareform.style.display = 'none'
        Idgreatchoice.style.display ='block'
      }
  }


  // Select all links with hashes
$('a.nav-link[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
