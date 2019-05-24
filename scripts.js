


/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */

function myFunction() {
  var x = document.getElementById("links");
  if (x.className === "navbar") {
    x.className += " responsive";
  } else {
    x.className = "navbar";
  }
}

    // window.onscroll = function() {scrollFunction()};
    //.scrolltop property sets or returns the number of pixels an elemen'ts content is scrolled vertically.
    // function scrollFunction() {
    //   if (document.body.scrollTop > 116 || document.documentElement.scrollTop > 116) {
    //     document.getElementById("mainNav").style.padding = "0px 0px";
    //     document.getElementById("logo1").style.height = "30px";
    //     // document.getElementById("logo1").style.width = "100px";
    //   } else {
    //     document.getElementById("mainNav").style.padding = "1px 1px";
    //     document.getElementById("logo1").style.height = "70px";
    //     // document.getElementById("logo1").style.width = "300px";
    //   }
    
    // }

    //on click page transition https://www.superhi.com/video/simple-page-transitions-with-jquery-and-javascript
    
    $("links li a").on("click", function (event){
//this even prevents the default thing from hapening.
      event.preventDefault()
//Get the attribute called "href"
      const href = $(this).attr("href")
//will take the code and put it into here
      window.history.pushState(null, null, href)
//pick links and remove the active class
      $("links li a").removeClass("active")
      //add the class to what was just clicked
      $(this).addClass("active")

//use ajax to make the page transitions and pull the content in.
      $.ajax({
        url: href,
        success: function (data) {
          $("body").fadeOut(350, function (){
            const newPage = $(data).filter("body").html()

            $("body").html(newPage)

            $("body").fadeIn(350)
            
          })
        }
      })
    })

