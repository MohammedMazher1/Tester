@extends('layouts/main')
@section('content')
      <!-- Header Start -->
      <div class="container-fluid bg-primary px-0 px-md-5 mb-5">
        <div class="row row-cols-1 row-cols-md-2 align-items-center px-3 ml-0">
          <div class="col-lg-6 text-center text-lg-right">
            <h2 class="text-white mb-4 mt-5 mt-lg-0 ">تستر اختبر نفسك</h2>
            <h4 class="display-3  text-white">
              إدارة الاختبارات ومقارنة الأداء
            </h4>
            <p class="text-white mb-4 text-right">
               تستر يسهل عملية الاختبار ومقارنة أداء المدربين وعرضها على شكل بيانات رسومية
            </p>
            <a href="" class="btn btn-secondary mt-1 py-3 px-5 border">المزيد</a>
          </div>
          <div class="col-lg-6 text-center text-lg-right">
            <img class="img-fluid mt-5" width="592" height="654"  src="{{asset('/assets/img/header.png')}}" alt="" />
          </div>
        </div>
      </div>
      <!-- Header End -->
       <!-- Facilities Start -->
    <div class="container-fluid pt-5 mt-5 mb-5" id="services">
      <div class="container pb-3">
        <div class="position-relative mx-auto mb-5" style="width: 150px;">
          <h2 class="text-center mx-auto pb-3 " style="border-bottom: 2px solid var(--primary); width: 150px;" >الخدمات</h2>
          <span class="d-block mx-auto rounded-circle position-absolute m-0" style=" width:
           20px;height: 20px; bottom: 0;left: 50%; border: 2px solid #325662; background-color: #fff;
          transform: translate(-50%,50%);"></span>
        </div>
        <div class="row row-cols-1 row-cols-md-2 mt-5 row-gap-5">
            <div class="col d-flex rounded text-right  justify-content-between ">
              <div class="text">
                  <h3>نشر الاختبار online</h3>
                  <p>يقوم النظام بشر الامتحان online </p>
                  <p>كما بالإمكان نشر الاختبار على برامج التواصل</p>
              </div>
              <img class="landingImg" src="{{asset('/assets/img/online.png')}}" alt="">
            </div>
            <div class="col d-flex rounded text-right justify-content-between">
              <div class="text">
                <h3>تعديل الامتحان بسهولة</h3>
                <p>يتيح النظام للأستاذ عملية تخزين الاختيار</p>
                <p>من خلال هذا العملية يسطيع الأستاذ التعديل علية</p>
              </div>
              <img  class="landingImg"  src="{{asset('/assets/img/crop.png')}}" alt="">
            </div>
            <div class="col d-flex rounded text-right justify-content-between ">
              <div class="text">
                <h3>امتحان المتدربين </h3>
                <p>يقوم النظام بنشر الاختبار في الوقت المحدد  </p>
                <p>ليستطيع جميع المتدربين الإجابة في نفس الوقت</p>
              </div>
              <img  class="landingImg" src="{{asset('/assets/img/prepare.png')}}" alt="">
            </div>
            <div class="col d-flex rounded text-right justify-content-between">
              <div class="text">
                  <h3>قرأه الإجابات  وتخزينها</h3>
                  <p>يقوم النظام بقراه الأجابات وتصحيحها تلقائيا</p>
                  <p>كما يقوم النظام بالتعرف على الإجابه الصحيحة</p>
              </div>
              <img  class="landingImg" src="{{asset('/assets/img/omr.png')}}" alt="">
            </div>

        </div>
      </div>
    </div>
    <!-- Facilities Start -->
     <!-- About Start -->
     <div class="container-fluid py-5 mt-5 mb-5" id="about-us">
      <div class="container pb-3">
        <div class="position-relative mx-auto mb-5" style="width: 150px;">
          <h2 class="text-center mx-auto pb-3" style="border-bottom: 2px solid var(--primary); width: 150px;" >من نحن ؟</h2>
          <span class="  d-block mx-auto rounded-circle position-absolute m-0" style=" width:
           20px;height: 20px; bottom: 0;left: 50%;border: 2px solid #325662; background-color: #fff;
          transform: translate(-50%,50%);"></span>
        </div>
        <div class="row align-items-center">
          <div class="col-lg-7">
            <h3 class="mb-4 text-right">أفضل منصة اختبارات محلية</h3>
            <p class="text-right">
              نحن نُقَدِّمُ فكرة مُبتكَرة في مجال التعليم، حيث ترتكب في منصة خاصة مصممة لإدارة الاختبارات في مخيمات
              التدريب. يُتيح هذا النظام للمدربين إعداد اختبارات قبلية وبعدية للطلاب، حيث يتم إعداد الأسئلة والإجابات بشكل
              رقمي. يُتاح للمدربين تحديد وقت محدد لإجراء هذه الاختبارات، مما يُيسِّر عليهم تقييم فعالية العملية التعلمية.
              عندما يدخل المتدربين إلى المنصة، يجدون الاختبارات جاهزة للحل في الوقت المُحدد. يقوم النظام تلقائيًا بتحديد درجات
              لطلاب وتخزينها بشكل آمن.
            </p>
            <div class="row pt-2 pb-4">
              <div class="col-6 col-md-4">
                <img class="img-fluid rounded"  src="{{asset('/assets/img/about-1.png')}}" alt="" />
              </div>
              <div class="col-6 col-md-8">
                <ul class="list-inline m-0">
                  <li class="py-2 border-top border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>إنشاء وتعديل اختبارات
                  </li>
                  <li class="py-2 border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>إحصائيات ورسوم بيانية
                  </li>
                  <li class="py-2 border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>الأمان والخصوصية
                  </li>
                </ul>
              </div>
            </div>
            <a href="" class="btn btn-primary mt-2 py-2 px-4 d-black mb-3">المزيد عن منصة تستر</a>
          </div>
          <div class="col-lg-5">
            <img
              class="img-fluid rounded mb-5 mb-lg-0"
              src="{{asset('/assets/img/about.png')}}"
              alt=""
            />
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

     <!-- programs Start -->
     <div class="container-fluid pt-5" id="programs">
      <div class="container">
        <div class="text-center pb-2">
          <div class="position-relative mx-auto" style="width: 150px;">
            <h2 class="text-center mx-auto pb-3" style="border-bottom: 2px solid var(--primary); width: 150px;" >البرامج</h2>
            <span class="  d-block mx-auto rounded-circle position-absolute m-0" style=" width:
             20px;height: 20px; bottom: 0;left: 50%; border: 2px solid #325662; background-color: #fff;
            transform: translate(-50%,50%);"></span>
          </div>
          <h5 class="mb-4 mt-5">بعض البرامج التي ساعدها تستر في تحقيق نجاح عالي</h5>
        </div>
        <div class="row">
          <div class="col-lg-4 mb-5">
            <div class="card border-0 bg-light shadow-sm pb-2">
              <img class="card-img-top mb-2 border" src="{{asset('assets/img/webBootcamp.png')}}" alt="" />
              <div class="card-body text-center">
                <h4 class="card-title">مخيم الويب</h4>
                <p class="card-text">
                  أحد المخيمات البرمجية التي تم تنفيذها في 2023-2024 من مؤسسة حضرموت تنمية بشرية
                </p>
              </div>
              <div class="card-footer bg-transparent py-4 px-5">
                <div class="row border-bottom">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>المتدربين</strong>
                  </div>
                  <div class="col-6 py-1">20</div>
                </div>
                <div class="row border-bottom">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>المدربين</strong>
                  </div>
                  <div class="col-6 py-1">2</div>
                </div>
                <div class="row border-bottom">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>عدد الساعات</strong>
                  </div>
                  <div class="col-6 py-1">500</div>
                </div>
              </div>
              <a href="" class="btn btn-primary px-4 mx-auto mb-4">تفاصيل أكثر</a>
            </div>
          </div>
          <div class="col-lg-4 mb-5">
            <div class="card border-0 bg-light shadow-sm pb-2">
              <img class="card-img-top mb-2" src="{{asset('/assets/img/mobileBootcamp.png')}}" alt="" />
              <div class="card-body text-center">
                <h4 class="card-title">مخيم الموبايل</h4>
                <p class="card-text">
                  أحد المخيمات البرمجية التي تم تنفيذها في 2023-2024 من مؤسسة حضرموت تنمية بشرية
                </p>
              </div>
              <div class="card-footer bg-transparent py-4 px-5">
                <div class="row border-bottom">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>المتدربين</strong>
                  </div>
                  <div class="col-6 py-1">20</div>
                </div>
                <div class="row border-bottom">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>المدربين</strong>
                  </div>
                  <div class="col-6 py-1">2</div>
                </div>
                <div class="row border-bottom">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>عدد الساعات</strong>
                  </div>
                  <div class="col-6 py-1">500</div>
                </div>
              </div>
              <a href="" class="btn btn-primary px-4 mx-auto mb-4">تفاصيل أكثر</a>
            </div>
          </div>
          <div class="col-lg-4 mb-5">
            <div class="card border-0 bg-light shadow-sm pb-2">
              <img class="card-img-top mb-2" src="{{asset('/assets/img/desinBootcamp.png')}}" alt="" />
              <div class="card-body text-center">
                <h4 class="card-title"> التصميم</h4>
                <p class="card-text">
                  أحد المخيمات البرمجية التي تم تنفيذها في 2023-2024 من مؤسسة حضرموت تنمية بشرية
                </p>
              </div>
              <div class="card-footer bg-transparent py-4 px-5">
                <div class="row border-bottom">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>المتدربين</strong>
                  </div>
                  <div class="col-6 py-1">20</div>
                </div>
                <div class="row border-bottom">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>المدربين</strong>
                  </div>
                  <div class="col-6 py-1">2</div>
                </div>
                <div class="row border-bottom">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>عدد الساعات</strong>
                  </div>
                  <div class="col-6 py-1">500</div>
                </div>
              </div>
              <a href="" class="btn btn-primary px-4 mx-auto mb-4">تفاصيل أكثر</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- programs End -->
@endsection
