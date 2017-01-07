$(document).ready(function () {
    
        $(".request a").on("click", function () {
            $('#thankyou').bPopup({
                closeClass: 'thank-you-btn'
            });
            return false;
        });
    
        $(".registerBtn").on("click", function () {
            $('#registered').bPopup({
                closeClass: 'thank-you-btn'
            });
            return false;
        });



        /* Jquery for the radio button */
        $(".radioContainer label").click(function () {
            var parent = $(this).parent();
            parent.children("label").children(".radio_box").removeClass("radio_tick");
            if ($(this).children(".radio_box").children().is(':checked')) {
                $(this).children(".radio_box").addClass("radio_tick");
            } else {
                $(this).children(".radio_box").removeClass("radio_tick");
            }
        });

        //juqery for select
        $(".selectMe").change(function () {
            $(this).siblings(".selectVal").html($(this).find(":selected").text());
        });

        //Code for the input type file name
        var elements = document.getElementsByClassName("selectFile");
        for (var i = 0, length = elements.length; i < length; i++) {

            elements[i].onchange = function () {
                var val = this.value;
                var n = val.lastIndexOf("\\") + 1;
                val = val.substring(n);
                $(".fileVal").html(val);
            }
        };

		
    $(".menuIcon").on("click", function (e) {
        e.preventDefault();
        $(".headerMenu").slideToggle();
    });
});