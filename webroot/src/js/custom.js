$(document).ready(function() {
    $(".preloader").hide();
    if(('#checkout-form').length) {
        $("#card-number").keydown(function (e) {
            if (!((e.keyCode == 8) || (e.keyCode == 46) || (e.keyCode >= 35 && e.keyCode <= 40) || (e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105))) {
                return false;
            }
        });

        $("#expiration-month, #expiration-year, #security-code" ).keydown(function (e) {
            if (!((e.keyCode == 8) || (e.keyCode == 46) || (e.keyCode >= 35 && e.keyCode <= 40) || (e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105))) {
                return false;
            }
        });
    }

    $('#questionnaire-submit').click(function(){
        //$(".preloader").show();
    });

    if(('#about-you').length) {
        $('#dob').datepicker();
    }

    //Handle accordion header icon
    if (('#user-supplements').length) {
            $(".headerTab").click(function(event) {
            var divId = $(this).attr("id");
            $('.expand-sign-'+divId).toggle();
        });
    }

    /*Code to retain tab after form submit on Edit profile. Source: Stackoverflow*/
    if($("#profile-info").length) {
        if (location.hash) {
            $('a[href=\'' + location.hash + '\']').tab('show');
        }
        var activeTab = localStorage.getItem('activeTab');
        if (activeTab) {
            $('a[href="' + activeTab + '"]').tab('show');
        }

        $('body').on('click', 'a[data-toggle=\'tab\']', function (e) {
            e.preventDefault()
            var tab_name = this.getAttribute('href')
            if (history.pushState) {
                history.pushState(null, null, tab_name)
            }
            else {
                location.hash = tab_name
            }
            localStorage.setItem('activeTab', tab_name)

            $(this).tab('show');
            return false;
        });
        $(window).on('popstate', function () {
            var anchor = location.hash ||
            $('a[data-toggle=\'tab\']').first().attr('href');
            $('a[href=\'' + anchor + '\']').tab('show');
        });
    }

    if($("#your-lifestyle").length) {
		$(".select2").select2();    	
    }    

});
