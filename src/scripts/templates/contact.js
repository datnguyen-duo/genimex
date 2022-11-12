import 'jquery-ui';
import datepickerFactory from 'jquery-datepicker';

datepickerFactory($);

(function ($) {
    
    $("footer input").focus(function() {
        $("footer button").addClass('focused')
    });

    $("footer input").focusout(function() {
        $("footer button").removeClass('focused')
    });


    $('#datepicker').datepicker({});
    
    if($('.template-contact-page-container').length){
        
        //first textarea
        var textArea = document.getElementById("limited-characters");
        var characterCounter = document.getElementById("char_count");
        var maxNumOfChars = 1000;
    
        const countCharacters = () => {
            var numOfEnteredChars = textArea.value.length;
            var counter = 0 + numOfEnteredChars;
            characterCounter.textContent = counter + " of 1000";
    
            if (counter >= 1000) {
                characterCounter.style.color = "red";
            } else if (counter > 500) {
                characterCounter.style.color = "orange";
            } else {
                characterCounter.style.color = "#4B4C4D";
            }
        };
        
        textArea.addEventListener("input", countCharacters);
    
        //second textarea
        var textAreaSecond = document.getElementById("limited-characters-second");
        var characterCounterSecond = document.getElementById("char_count_second");
        var maxNumOfChars = 1000;
    
        const countCharactersSecond = () => {
            var numOfEnteredChars = textAreaSecond.value.length;
            var counter = 0 + numOfEnteredChars;
            characterCounterSecond.textContent = counter + " of 1000";
    
            if (counter >= 1000) {
                characterCounterSecond.style.color = "red";
            } else if (counter > 500) {
                characterCounterSecond.style.color = "orange";
            } else {
                characterCounterSecond.style.color = "#4B4C4D";
            }
        };
        
        textAreaSecond.addEventListener("input", countCharactersSecond);
    }

    
})(jQuery);