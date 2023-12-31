let questionNo = 4;
$("#submitTest").click(function() {
    var quizArray = []; // Array to store questions and options
    var exam_info={
        'exam_name': $('#exam_name').val(),
        'date_of_preTest':$('#date_of_preTest').val(),
        'date_of_postTest':$('#date_of_postTest').val()
    }
    quizArray.push(exam_info);
    $(".question").each(function() {
        var question = $(this).find(".questionInput").val();
        var options = {};

        // Iterate through options within the current question container
        $(this).find(".options-list li").each(function () {
            var optionInput = $(this).find(".optionInput").val();
            var radioValue = $(this).find("input[type='radio']").is(':checked') ? 'true' : 'false';

            // Add option to options object with radio button value as the key
            options[optionInput] = radioValue;
        });

        // Create a question object and add it to the quizArray
        var questionObject = {
            question: question,
            options: options
        };

        quizArray.push(questionObject);
    });

    // Send the quizArray to the Laravel route using AJAX
    $.ajax({
        url: 'http://127.0.0.1:8000/exam', // Replace with the actual route URL
        type: 'POST',
        data: { quizArray: JSON.stringify(quizArray) }, // Send the quizArray as JSON string
        success: function(response) {
            // Handle the server's response if needed
            document.write(response);
        },
        error: function(error) {
            // Handle errors if any
            console.log("Error submitting quiz:");
        }
    });
});


$("#addQuestion").click(function(){
$('.questions').append(
    `
    <div class="question" >
    <input type="text" class="questionInput" placeholder="اكتب سوالك هنا ..." name="q" value="">
    <ul class="options-list">
        <li>
        <label for="q${questionNo}-firstOption"><input type="text" name="optionInput" class="optionInput" placeholder="OPTION" required></label>
        <input type="radio" id="q${questionNo}-firstOption" name="q${questionNo}-firstOption" value="HTML">
        <i class="fa-solid fa-xmark"></i>
        </li>
        <li>
        <label for="q${questionNo}-secondOption"><input type="text" name="optionInput" class="optionInput" placeholder="OPTION" required></label>
        <input type="radio" id="q2-secondOption" name="q${questionNo}-firstOption" value="HTML">
        <i class="fa-solid fa-xmark"></i>
        </li>
        <li>
        <label for="q${questionNo}-thirdOption"><input type="text" name="optionInput" class="optionInput" placeholder="OPTION" required></label>
        <input type="radio" id="q${questionNo}-thirdOption" name="q${questionNo}-firstOption" value="HTML">
        <i class="fa-solid fa-xmark"></i>
        </li>
        <li>
        <label for="q${questionNo}-fourthOption"><input type="text" name="optionInput" class="optionInput" placeholder="OPTION" required></label>
        <input type="radio" id="q${questionNo}-fourthOption" name="q${questionNo}-firstOption" value="HTML">
        <i class="fa-solid fa-xmark"></i>
        </li>
    </ul>
    <div class="addOptionBtn">
    <span>اضافة خيار</span>
    <i class="fa-solid fa-square-plus"></i>
    </div>
    <div class="icons">
        <i class="fa-solid fa-up-down-left-right"></i>
        <i class="fa-solid fa-trash"></i>
    </div>
    </div>
    `
)
questionNo++;
});

$(".questions").on("click",'.addOptionBtn', function() {
    var optionsList = $(this).prev(".options-list");
    let name = optionsList.find('li > input').attr('name');
    let labelAttr = optionsList.find('label').attr('for');
    var newOption = $(`
    <li>
    <label for="new-question${questionNo}"><input type="text" name="optionInput" class="optionInput" placeholder="OPTION" required></label>
    <input type="radio" id="new-question${questionNo}" name="${name}" value="HTML">
    <i class="fa-solid fa-xmark"></i>
    </li>
    `);
    optionsList.append(newOption);
});

$(".questions").on('click','.icons .fa-trash',function(){
$(this).closest('.question').remove();
});

$(".questions").on('click','ul li .fa-xmark',function(){
$(this).closest('li').remove();
});
/* this code to submit student exam */
$("#saveTest").click(function() {
    console.log("some thing")
    var quizArray = []; // Array to store questions and options
    // Iterate through question containers
    $(".question").each(function() {
        var question = $(this).find(".questionText").html();
        var questionOptin = '';
        // Iterate through options within the current question container
        $(this).find(".options-list li").each(function () {
            if($(this).find("input[type='radio']").is(':checked')){
                questionOptin = $(this).find(".questionOptin").html();
            }
        });
        var questionObject = {
            question: question,
            option: questionOptin
            };

        quizArray.push(questionObject);
    });

    // Display the quiz array in the console (you can replace this with your desired logic)
    console.log("Quiz Array:", quizArray);
});


// fetch('http://127.0.0.1:8000/exam', {
//             method: 'POST',
//             })
//             .then(response => {
//                 if (!response.ok) {
//                 throw new Error('Network response was not ok');
//                 }
//                 return response.json();
//             })
//             .then(data => { data
//                 data.forEach(author => {
//                     $('#Dauthors').eq(0).val(author.name);
//                 });
//             })
//             .catch(error => {
//                 console.error('Error during fetch operation:', error);
//             });
//             let row = button.parentNode.parentNode;
//             const postId = parseInt(row.querySelectorAll('input[type="hidden"]')[0].value);

