$(document).ready(function () {
    // back to top
	
    $(window).scroll(function () {
        if ($(this).scrollTop()) {
            $('.GoingUp').stop(true, true).fadeIn();
        } else {
            $('.GoingUp').stop(true, true).fadeOut();
        }
    });

    $(".GoingUp").click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 300);
    });

    $(".goingUp").click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 300);
    });


    $('.showPrices').click(function (e) {
        e.preventDefault();
        $('.backdrop').fadeIn();
        $.ajaxSetup({
            cache: false
        });
        var ajax_load = "<div class='preloader'><img src='" +base_url + "assets/preload/ajax-loader.png' alt='loading' /></div>";
        var loadUrl = base_url+"assets/ajax/prices.php";
        $(".backdrop").html(ajax_load).load(loadUrl);
    });

    $('.skype, .consultationLink').click(function (e) {
        e.preventDefault();
        $('.backdrop').fadeIn();

        $.ajaxSetup({
            cache: false
        });
        var ajax_load = "<div class='preloader'><img src='" +base_url + "assets/preload/ajax-loader.png' alt='loading' /></div>";
        var loadUrl = base_url+"assets/ajax/booking.php";
        $(".backdrop").html(ajax_load).load(loadUrl);
    });

    $(document).on("click", ".close", function () {
        $('.backdrop').fadeOut();

    });

    $(".SubmitButton").click(function () {
        $(".SubmitButton").text('Checking...');
        var str = $("#contactForm").serialize();
        $.ajax({
            url: base_url+'assets/ajax/contactScript.php',
            type: "POST",
            data: str,
            success: function (data) {
                if (data == 'success') {
                    location.href = base_url;
                } else {
                    $(".SubmitButton").text('submit');
                    $(".validation").fadeIn();
                    $(".validation").html(data);
                }

            }
        });
    });
	
	 $(".hamburger-menu").click(function () {
       $('#MobyNavRow').slideToggle();
    });

    $(document).on("click", ".SubmitButtonBook", function () {
        $(".SubmitButtonBook").text('Checking...');
        var str = $("#Booking").serialize();
        $.ajax({
            url: base_url+'assets/ajax/bookingScript.php',
            type: "POST",
            data: str,
            success: function (data) {
                if (data == 'success') {
                    location.href = base_url;
                } else {
                    $(".SubmitButtonBook").text('submit');
                    $(".labels").hide();
                    var result = $(data).filter("#results").text();
                    $("#" + result).fadeIn();

                }

            }
        });
    });

});


  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-90804160-1', 'auto');
  ga('send', 'pageview');

