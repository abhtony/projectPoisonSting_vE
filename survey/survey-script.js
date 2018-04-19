array_question_numbers = [];
array_answers = [];
temp_array = [];
$( document ).ready(function() {
    main();
});

console.log("hello world - survey - 0.12");





function init_buttons () {
    console.log("init_buttons triggered");
    
    $("#to-consent-btn").click(function() {
        console.log("clicked");
        $("#section-1-btn").removeClass("active").addClass("complete");
        $("#section-1-btn").next().hide();
        $("#section-2-btn").addClass("active");
        $("#section-2-btn").next().show();
        
        $("#section-intro").slideUp(function(){
            $("#section-consent").slideDown();
        });
    });
    
    
    $("#to-infographic-btn").click(function() {
        $("#section-2-btn").removeClass("active").addClass("complete");
        $("#section-2-btn").next().hide();
        $("#section-3-btn").addClass("active");
        $("#section-3-btn").next().show();
        
        $("#section-consent").slideUp(function(){
            $("#infographic-section").slideDown();
        });
    });
    
    
    $("#to-survey1-btn").click(function() {
        $("#section-3-btn").removeClass("active").addClass("complete");
        $("#section-3-btn").next().hide();
        $("#section-4-btn").addClass("active");
        $("#section-4-btn").next().show();
        
        $("#infographic-section").slideUp(function(){
            $("#section-survey1").slideDown();
        });
    });
    
    $("#to-survey2-btn").click(function() {
        $("#section-4-btn").removeClass("active").addClass("complete");
        $("#section-4-btn").next().hide();
        $("#section-5-btn").addClass("active");
        $("#section-5-btn").next().show();
        
        $("#section-survey1").slideUp(function(){
            $("#section-survey2").slideDown();
        });
    });
    
    $("#to-complete-btn").click(function() {
        $("#section-5-btn").removeClass("active").addClass("complete");
        $("#section-5-btn").next().hide();
        $("#section-6-btn").addClass("active");
        $("#section-6-btn").next().show();
        
        collect_written_answers();
        
        $("#section-survey2").slideUp(function(){
            $("#section-complete").slideDown();
            send_data();
            // window.open("/survey/record.php");
        });
    });
    
    
    $(".choice-list .btn-label").click(function() {
        // console.log("clicked");
        $(this).parent().addClass("selected");
        // console.log($(this).parent().parent().siblings().find(".question-choice"));
        console.log($(this).parent().parent().parent().prev().prev().children("h5").text());
        console.log($(this).parent().parent().parent().prev().children("p").text());
        console.log($(this).text());
        $(this).parent().parent().siblings().find(".question-choice").removeClass("selected");
        
        var question_number = $(this).parent().parent().parent().prev().prev().children("h5").text();
        var question_text = $(this).parent().parent().parent().prev().children("p").text();
        var question_answer = $(this).text();
        log_answer(question_number, question_text, question_answer);
    });
    
}

// function init_buttons_helper (btn_id_name, choice_list_name, section_tips_name) {
//     $(btn_id_name).click(function() {
//         console.log("button has been clicked");
//         if ($(btn_id_name).hasClass("choice-unselected") == true) {
//             console.log("if function has been triggered");
//             $(choice_list_name+" .choice-selected").removeClass('choice-selected').addClass('choice-unselected');
//             $(btn_id_name).removeClass("choice-unselected").addClass("choice-selected");
//             $(".age-specific-section").hide();
//             $(section_tips_name).show();
//         }
//     });
// }


function log_answer (question_number, question_text, question_answer) {
    if ($.inArray(question_number, array_question_numbers) == -1) {
        console.log("if statement triggered");
        array_answers.push([question_number, question_text, question_answer]);
        array_question_numbers.push(question_number);
        console.log(array_answers);
    }
}

function collect_written_answers () {
    max_range = $(".written-answer").length;
    for (i = 0; i<max_range; i++) {
        var question_number = $("#"+$(".written-answer")[i].id).parent().parent().prev().prev().children("h5").text();
        var question_text = $("#"+$(".written-answer")[i].id).parent().parent().prev().children("p").text();
        var question_answer = $("#"+$(".written-answer")[i].id).val();
        log_answer(question_number, question_text, question_answer);
        
        
        // console.log($("#"+$(".written-answer")[i].id).parent().parent().prev().prev().children("h5").text());
        // console.log($("#"+$(".written-answer")[i].id).parent().parent().prev().children("p").text());
        // console.log($("#"+$(".written-answer")[i].id).val());
        
        // $("#"+($(".written-answer")[1].id)).val();
    }
}



function send_data () {
    var data = array_answers;
    
    console.log("send data triggered");
    $.ajax({
        method: 'POST',
        url: '/survey/record.php',
        data: { data: data },
        success: function() {
            console.log("AJAX successful");
        }
    });
    
    // $.post('/survey/record.php', { data: data }, function(result) {
    //     // success
    //     alert('the data was successfully sent to the server');
    // });
}


// $("#"+$(".written-answer")[i].id).val()

function main () {
    init_buttons();
}