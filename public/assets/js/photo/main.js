$(function(){
    var form = $("#wizard");

	$("#wizard").steps({
        headerTag: "h4",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        transitionEffectSpeed: 500,
        onStepChanging: function (event, currentIndex, newIndex) { 
            if ( newIndex === 1 ) {
                $('.steps ul').addClass('step-2');
            } else {
                $('.steps ul').removeClass('step-2');
            }
            if ( newIndex === 2 ) {
                $('.steps ul').addClass('step-3');
            } else {
                $('.steps ul').removeClass('step-3');
            }

            if ( newIndex === 3 ) {
                $('.steps ul').addClass('step-4');
                $('.actions ul').addClass('step-last');
            } else {
                $('.steps ul').removeClass('step-4');
                $('.actions ul').removeClass('step-last');
            }
            return true; 
        },
        // onFinishing: function (event, currentIndex)
        // {
            // var form = $(this);
        //
        //     // var result = $('ul[aria-label=Pagination]').children().find('a');
        //     // $(result).each(function () {
        //     //     if ($(this).text() == 'Finish') {
        //     //         $(this).attr('disabled', 'disabled');
        //     //         $(this).css('background', 'red');
        //     //     }
        //     // });
        //     // not up to date
        //     form.validate().settings.ignore = ":disabled";
        //     return form.valid();
        // },
        onFinished: function (event, currentIndex)
        {
            var form = $(this);

            var result = $('ul[aria-label=Pagination]').children().find('a');
            $(result).each(function () {
                if ($(this).text() == 'Finish') {
                    // $(this).attr('disabled', 'disabled');
                    // $(this).css('background', 'green');
                    $(this).submit();
                    alert('hi');
                    $("#wizard").submit();
                }
            });

            $("#actualWizard").submit();
            // alert('hi');
        },
        labels: {
            finish: "Finish",
            next: "Next",
            previous: "Previous"
        }
    });
    // Custom Steps Jquery Steps
    $('.wizard > .steps li a').click(function(){
    	$(this).parent().addClass('checked');
		$(this).parent().prevAll().addClass('checked');
		$(this).parent().nextAll().removeClass('checked');
    });
    // Custom Button Jquery Steps
    $('.forward').click(function(){
    	$("#wizard").steps('next');
    })
    $('.backward').click(function(){
        $("#wizard").steps('previous');
    })
    // Checkbox
    $('.checkbox-circle label').click(function(){
        $('.checkbox-circle label').removeClass('active');
        $(this).addClass('active');
    })
})
