@extends('layouts/main')
@section('content')
<section class="landing" style="overflow: hidden;" id="home">
    <div class="tester">
        <div>
            <img src="assets/img/logo.png" alt="tester landing">
            <h1>اختبر نفسك</h3>
        </div>
        <div class="images">
            <img src="assets/img/char1.png" alt="">
            <img src="assets/img/char2.png" alt="">
        </div>
        <div>
            <a href="#">دخول اختبار</a>
            <span></span>
            <a href="{{Route('newTest')}}">إنشاء اختبار</a>
        </div>
    </div>
    <div class="img">
        <img src="assets/img/student.png" alt="student image">
    </div>
</section>
<section class="services">
    <div class="container">
        <div class="title">
            <h2>خدماتنا</h2>
            <span></span>
        </div>
        <div class="cards">
            <div class="card">
                <div class="text">
                    <h3>نشر الامتحان online</h3>
                    <p>يقوم النظام بشر الامتحان online </p>
                    <p>كما بالإمكان نشر الامتحان على برامج التواصل</p>
                </div>
                <img src="assets/img/online.png" alt="">
            </div>
            <div class="card">
                <div class="text">
                    <h3>امتحان الطلاب </h3>
                    <p>يقوم النظام بنشر الاختبار في الوقت المحدد  </p>
                    <p>ليستطيع جميع الطلاب الإجابة في نفس الوقت</p>
                </div>
                <img src="assets/img/prepare.png" alt="">
            </div>
            <div class="card">
                <div class="text">
                    <h3>قرأه الإجابات  وتخزينها</h3>
                    <p>يقوم النظام بقراه الأجابات وتصحيحها تلقائيا</p>
                    <p>كما يقوم النظام بالتعرف على الإجابه الصحيحة</p>
                </div>
                <img src="assets/img/omr.png" alt="">
            </div>
            <div class="card">
                <div class="text">
                    <h3>تعديل الامتحان بسهولة</h3>
                    <p>يتيح النظام للأستاذ عملية تخزين الاختيار</p>
                    <p>من خلال هذا العملية يسطيع الأستاذ التعديل علية</p>
                </div>
                <img src="assets/img/crop.png" alt="">
            </div>
        </div>
    </div>
</section>
<section class="about-us" id="about-us">
    <div class="content">
        <div class="title">
            <h2>من نحن ؟</h2>
            <span></span>
        </div>
        <img src="assets/img/logo.png" alt="about us logo">
        <div class="text">
            <p>
                نحن نُقَدِّمُ فكرة مُبتكَرة في مجال التعليم، حيث ترتكب في منصة خاصة مصممة لإدارة الاختبارات في مخيمات
            </p>
            <p>
                التدريب. يُتيح هذا النظام للمدربين إعداد اختبارات قبلية وبعدية للطلاب، حيث يتم إعداد الأسئلة والإجابات بشكل
            </p>
            <p>
                رقمي. يُتاح للمدربين تحديد وقت محدد لإجراء هذه الاختبارات، مما يُيسِّر عليهم تقييم فعالية العملية التعلمية.
            </p>
            <p>
                عندما يدخل الطلاب إلى المنصة، يجدون الاختبارات جاهزة للحل في الوقت المُحدد. يقوم النظام تلقائيًا بتحديد درجات
            </p>
            <p>
                لطلاب وتخزينها بشكل آمن. يُمكن للطلاب العودة لاحقًا لإعادة الاختبار بعد الانتهاء من الدورة التعليمية، حيث يتم
            </p>
            <p>
                تقييم تقدمهم ورسم ملامح تحسنهم بشكل أوضح.
            </p>
            <p>
                هذا النظام ليس فقط وسيلة لتيسير إدارة الاختبارات بل يساهم أيضًا في رصد تطور الطلاب وفهم مستوى
            </p>
            <p>
                تحصيلهم العلمي. يُعزِّز هذا النهج التفاعلي تعلم الطلاب ويمهد الطريق لتحسين فعالية عمليات التدريب وتحقيق
            </p>
            <p>
                أقصى استفادة تعليمية.
            </p>
        </div>
    </div>
</section>
@endsection
