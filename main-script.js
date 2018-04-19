$( document ).ready(function() {
    main();
});

console.log("hello world - 0.68");

function render_animation () {
    console.log("render_animation triggered");
    ajax_call("/animation/Bloodwork_SnapSVGAnimator.json", 30, 100, 100, "bloodwork-animation");
    ajax_call("/animation/IV.json", 30, 100, 100, "IV-animation");
}


function ajax_call (jsonfile_name_input, fps_input, width_input, height_input, target_id) {
    var jsonfile = jsonfile_name_input,
        fps = fps_input,
        width = width_input,
        height = height_input,
        AJAX_req;
    
    AJAX_JSON_Req(jsonfile);
    
    
    function handle_AJAX_Complete() {
        if( AJAX_req.readyState == 4 && AJAX_req.status == 200 ) {
            json = JSON.parse(AJAX_req.responseText);
            // console.log("wait for it (json) =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=");
            // console.log(json["DOMDocument"]["Shape2"]);
            comp = new SVGAnim(
                           json,
                           width,
                           height,
                           fps
                           );
            document.getElementById(target_id).appendChild(comp.s.node); // Add this line of code
        }
    }
    
    function AJAX_JSON_Req( url ) {
        AJAX_req = new XMLHttpRequest();
        AJAX_req.open("GET", url, true);
        AJAX_req.setRequestHeader("Content-type", "application/json");
        
        AJAX_req.onreadystatechange = handle_AJAX_Complete;
        AJAX_req.send();
    }
    
}


function init_buttons () {
    console.log("init_buttons triggered");
    init_buttons_helper("#btn-choice-child", "#choice-list-age-specific", "#section-tips-children");
    init_buttons_helper("#btn-choice-baby", "#choice-list-age-specific", "#section-tips-babies");
    init_buttons_helper("#btn-choice-teen", "#choice-list-age-specific", "#section-tips-teens");
}

function init_buttons_helper (btn_id_name, choice_list_name, section_tips_name) {
    $(btn_id_name).click(function() {
        console.log("button has been clicked");
        if ($(btn_id_name).hasClass("choice-unselected") == true) {
            console.log("if function has been triggered");
            $(choice_list_name+" .choice-selected").removeClass('choice-selected').addClass('choice-unselected');
            $(btn_id_name).removeClass("choice-unselected").addClass("choice-selected");
            $(".age-specific-section").hide();
            $(section_tips_name).show();
        }
    });
}

















function main () {
    render_animation();
    init_buttons();
}

