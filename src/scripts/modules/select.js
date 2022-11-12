import "select2/dist/js/select2.full.min";
import $ from "jquery";

window.addEventListener('load', function(event) {
    let $customSelects = $('.template-contact-page-container select');
    $customSelects.each(function () {
        let selectClassList = $(this).data("class");
        let holderID;

        if ( $(this).attr("id") ) {
            holderID = $(this).attr("id");
        } else {
            holderID = $(this).attr("name");
        }

        holderID = holderID.concat("-holder");

        $(this).wrap(
            '<div style="position: relative;" class="select-2-holder" id="' + holderID + '"></div>'
        );

        let selectHolder = $( "#" + holderID );

        $(this).select2({
            dropdownParent: selectHolder,
            width: "100%",
            minimumResultsForSearch: -1,
        });
        selectHolder.addClass( selectClassList );
    });

    $(".clear-filter").on('click', function(){
        $("select").val(null).trigger("change");
    });
});