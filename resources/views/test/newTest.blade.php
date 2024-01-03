@extends('layouts.createTest')
@section('content')
  <!-- start main -->
  <main>
    <section class="questions" dir="ltr">
        <div class="container">
         <input type="text" id="exam_name" required placeholder="......اسم الاختبار">
         <div class="testInformation">
            <div>
                <input type="date" name="date_of_postTest" id="date_of_postTest" required placeholder="تاريخ الاختبار البعدي">
                <label for="date_of_postTest">الاختبار البعدي</label>
            </div>
             <div>
               <input type="date" name="date_of_preTest" id="date_of_preTest" required placeholder="تاريخ الاختبار القبلي">
               <label for="date_of_preTest">الاختبار القبلي</label>
             </div>
              <div>
                <input type="time" name="time_of_postTest" id="time_of_postTest" required>
                <label for="time_of_postTest">الساعة</label>
              </div>
              <div>
                <input type="time" name="time_of_preTest" id="time_of_preTest" required >
                <label for="time_of_preTest">الساعة</label>
              </div>
         </div>
         <input type="hidden" name="_token" value="{{ Session::token() }}">
         <div class="question" >
           <input type="text" class="questionInput" required placeholder="اكتب سوالك هنا ..." name="q" value="">
           <ul class="options-list">
             <li>
               <label for="q1-firstOption"><input type="text" name="optionInput" class="optionInput" placeholder="OPTION" required></label>
               <input type="radio" id="q1-firstOption" name="q1-Option" value="HTML">
               <i class="fa-solid fa-xmark"></i>
             </li>
             <li>
               <label for="q1-secondOption"><input type="text" name="optionInput" class="optionInput" placeholder="OPTION" required></label>
               <input type="radio" id="q1-secondOption" name="q1-Option" value="HTML">
               <i class="fa-solid fa-xmark"></i>
             </li>
             <li>
               <label for="q1-thirdOption"><input type="text" name="optionInput" class="optionInput" placeholder="OPTION" required></label>
               <input type="radio" id="q1-thirdOption" name="q1-Option" value="HTML">
               <i class="fa-solid fa-xmark"></i>
             </li>
             <li>
               <label for="q1-fourthOption"><input type="text" name="optionInput" class="optionInput" placeholder="OPTION" required></label>
               <input type="radio" id="q1-fourthOption" name="q1-Option" value="HTML">
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
         <div class="question" >
           <input type="text" class="questionInput" required placeholder="اكتب سوالك هنا ..." name="q" value="">
           <ul class="options-list">
             <li>
               <label for="q2-firstOption"><input type="text" name="optionInput" class="optionInput" placeholder="OPTION" required></label>
               <input type="radio" id="q2-firstOption" name="q2-Option" value="HTML">
               <i class="fa-solid fa-xmark"></i>
             </li>
             <li>
               <label for="q2-secondOption"><input type="text" name="optionInput" class="optionInput" placeholder="OPTION" required></label>
               <input type="radio" id="q2-secondOption" name="q2-Option" value="HTML">
               <i class="fa-solid fa-xmark"></i>
             </li>
             <li>
               <label for="q2-thirdOption"><input type="text" name="optionInput" class="optionInput" placeholder="OPTION" required></label>
               <input type="radio" id="q2-thirdOption" name="q2-Option" value="HTML">
               <i class="fa-solid fa-xmark"></i>
             </li>
             <li>
               <label for="q2-fourthOption"><input type="text" name="optionInput" class="optionInput" placeholder="OPTION" required></label>
               <input type="radio" id="q2-fourthOption" name="q2-Option" value="HTML">
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
         <div class="question" >
           <input type="text" class="questionInput" required placeholder="اكتب سوالك هنا ..." name="q" value="">
           <ul class="options-list">
             <li>
               <label for="q3-firstOption"><input type="text" name="optionInput" class="optionInput" placeholder="OPTION" required></label>
               <input type="radio" id="q3-firstOption" name="q3-Option" value="HTML">
               <i class="fa-solid fa-xmark"></i>
             </li>
             <li>
               <label for="q3-secondOption"><input type="text" name="optionInput" class="optionInput" placeholder="OPTION" required></label>
               <input type="radio" id="q3-secondOption" name="q3-Option" value="HTML">
               <i class="fa-solid fa-xmark"></i>
             </li>
             <li>
               <label for="q3-thirdOption"><input type="text" name="optionInput" class="optionInput" placeholder="OPTION" required></label>
               <input type="radio" id="q3-thirdOption" name="q3-Option" value="HTML">
               <i class="fa-solid fa-xmark"></i>
             </li>
             <li>
               <label for="q3-fourthOption"><input type="text" name="optionInput" class="optionInput" placeholder="OPTION" required></label>
               <input type="radio" id="q3-fourthOption" name="q3-Option" value="HTML">
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
        </div>
       </section>
    <div class="control">
      <div class="addmore" id="addQuestion">
        <span>اضافة سوال</span>
        <i class="fa-solid fa-square-plus"></i>
      </div>
      <button id="submitTest">إرسال</button>
    </div>
</main>
<!-- end main -->
@endsection
