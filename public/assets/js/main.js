let questionNo = 4;
$("#submitTest").click(function() {
    var quizArray = []; // Array to store questions and options

    // Iterate through question containers
    $(".question").each(function() {
        var question = $(this).find(".questionInput").val();
        var options = {};

        // Iterate through options within the current question container
        $(this).find(".options-list li").each(function () {
            var optionInput = $(this).find(".optionInput").val();
            if($(this).find("input[type='radio']").is(':checked')){
            var radioValue = 'true';
            }else{
            var radioValue = 'false';
            }
            // var radioValue = $(this).find("input[type='radio']:checked").val();

            // Add option to options object with radio button value as the key
            options[optionInput] =radioValue ;
        });


        // Create a question object and add it to the quizArray
        var questionObject = {
            question: question,
            options: options
        };

        quizArray.push(questionObject);
    });

    // Display the quiz array in the console (you can replace this with your desired logic)
    console.log("Quiz Array:", quizArray);
});

$("#addQuestion").click(function(){
$('.questions').append(
    `
    <div class="question" >
    <input type="text" class="questionInput" placeholder="اكتب سوالك هنا ..." name="q" value="">
    <ul class="options-list">
        <li>
        <label for="q${questionNo}-firstOption"><input type="text" name="optionInput" class="optionInput" placeholder="option" value="OPTION"></label>
        <input type="radio" id="q${questionNo}-firstOption" name="q${questionNo}-firstOption" value="HTML">
        <i class="fa-solid fa-xmark"></i>
        </li>
        <li>
        <label for="q${questionNo}-secondOption"><input type="text" name="optionInput" class="optionInput" placeholder="option" value="OPTION"></label>
        <input type="radio" id="q2-secondOption" name="q${questionNo}-firstOption" value="HTML">
        <i class="fa-solid fa-xmark"></i>
        </li>
        <li>
        <label for="q${questionNo}-thirdOption"><input type="text" name="optionInput" class="optionInput" placeholder="option" value="OPTION"></label>
        <input type="radio" id="q${questionNo}-thirdOption" name="q${questionNo}-firstOption" value="HTML">
        <i class="fa-solid fa-xmark"></i>
        </li>
        <li>
        <label for="q${questionNo}-fourthOption"><input type="text" name="optionInput" class="optionInput" placeholder="option" value="OPTION"></label>
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
    <label for="new-question${questionNo}"><input type="text" name="optionInput" class="optionInput" placeholder="option" value="OPTION"></label>
    <input type="radio" id="new-question${questionNo}" name="${name}" value="HTML">
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

