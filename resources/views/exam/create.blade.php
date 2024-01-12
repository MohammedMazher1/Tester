@extends('layouts.main')
@section('content')
    <!-- exam Start -->
    <div class="container-fluid py-5">
        <div id="error" class="danger"></div>
        <div class="container questions">
            <form action="" id="examCreateForm">
                <div>
                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                    <input type="text" class="form-control w-50 mx-auto px-5" id="exam_name" required
                        placeholder="اسم الاختبار">
                    <div class="row row-cols-1 row-cols-md-3 justify-content-around  gap-3">
                        <div
                            class="form-group  row row-cols-1 gap-3 text-right rounded  text-white  p-2 position-relative mt-4 bg-primary">
                            <span>الاختبار القبلي</span>
                            <input type="date" class="form-control" name="date_of_preTest" id="date_of_preTest" required
                                placeholder="التاريخ">
                            <input type="time" class="form-control" name="time_of_preTest" id="time_of_preTest" required
                                placeholder="الوقت">
                        </div>
                        <div
                            class="form-group row row-cols-1 gap-3 rounded text-white text-right p-2 position-relative mt-4 bg-primary">
                            <span class="text"> الاختبار البعدي</span>
                            <input type="date" class="form-control" name="date_of_postTest" id="date_of_postTest" required
                                placeholder="التاريخ">
                            <input type="time" class="form-control" name="time_of_postTest" id="time_of_postTest" required
                                placeholder="الوقت">
                        </div>
                    </div>
                </div>
                <div class="question p-3 bg-primary mb-4" dir="ltr">
                    <input type="text" class="questionInput form-control mb-2 w-50" required placeholder="اكتب سوالك هنا ..."
                        name="q" value="">
                    <ul class="options-list list-unstyled">
                        <li>
                            <input type="radio" id="q1-firstOption" name="q1-Option"  value="HTML">
                            <label for="q1-firstOption">
                                <input type="text" name="q1-Option" required class="form-control optionInput" placeholder="OPTION"
                                    required>
                            </label>
                            <i class="fa-solid fa-xmark"></i>
                        </li>
                        <li>
                            <input type="radio" id="q1-secondOption"  name="q1-Option" value="HTML">
                            <label for="q1-secondOption">
                                <input type="text" name="q1-Option" class="form-control optionInput" placeholder="OPTION"
                                    required>
                            </label>
                            <i class="fa-solid fa-xmark"></i>
                        </li>
                        <li>
                            <input type="radio" id="q1-thirdOption" name="q1-Option" value="HTML">
                            <label for="q1-thirdOption">
                                <input type="text" name="q1-Option" required class="form-control optionInput" placeholder="OPTION"
                                    required>
                            </label>
                            <i class="fa-solid fa-xmark"></i>
                        </li>
                        <li>
                            <input type="radio" id="q1-fourthOption" name="q1-Option" value="HTML">
                            <label for="q1-fourthOption">
                                <input type="text" name="q1-Option" class="form-control optionInput" placeholder="OPTION"
                                    required>
                            </label>
                            <i class="fa-solid fa-xmark"></i>
                        </li>
                    </ul>
                    <div class="addOptionBtn text-white border">
                        <span>اضافة خيار</span>
                        <i class="fa fa-plus"></i>
                    </div>
                    <div class="icons">
                        <i class="fa fa-trash"></i>
                    </div>
                </div>
                <div class="question p-3 bg-primary mb-4" dir="ltr">
                    <input type="text" class="questionInput form-control mb-2 w-50" required placeholder="اكتب سوالك هنا ..."
                        name="q" value="">
                    <ul class="options-list list-unstyled">
                        <li>
                            <input type="radio" id="q2-firstOption" name="q2-Option" value="HTML">
                            <label for="q2-firstOption">
                                <input type="text" name="q2-Option" class="form-control optionInput" placeholder="OPTION"
                                    required>
                            </label>
                            <i class="fa-solid fa-xmark"></i>
                        </li>
                        <li>
                            <input type="radio" id="q2-secondOption" name="q2-Option" value="HTML">
                            <label for="q2-secondOption">
                                <input type="text" name="q2-Option" class="form-control optionInput" placeholder="OPTION"
                                    required>
                            </label>
                            <i class="fa-solid fa-xmark"></i>
                        </li>
                        <li>
                            <input type="radio" id="q2-thirdOption" name="q2-Option" value="HTML">
                            <label for="q2-thirdOption">
                                <input type="text" name="q2-Option" class="form-control optionInput" placeholder="OPTION"
                                    required>
                            </label>
                            <i class="fa-solid fa-xmark"></i>
                        </li>
                        <li>
                            <input type="radio" id="q2-fourthOption" name="q2-Option" value="HTML">
                            <label for="q2-fourthOption">
                                <input type="text" name="q2-Option" class="form-control optionInput" placeholder="OPTION"
                                    required>
                            </label>
                            <i class="fa-solid fa-xmark"></i>
                        </li>
                    </ul>
                    <div class="addOptionBtn text-white border">
                        <span>اضافة خيار</span>
                        <i class="fa fa-plus"></i>
                    </div>
                    <div class="icons">
                        <i class="fa fa-trash"></i>
                    </div>
                </div>
                <div class="question p-3 bg-primary mb-4" dir="ltr">
                    <input type="text" class="questionInput form-control mb-2 w-50" required
                        placeholder="اكتب سوالك هنا ..." name="q" value="">
                    <ul class="options-list list-unstyled">
                        <li>
                            <input type="radio" id="q1-firstOption" name="q3-Option" value="HTML">
                            <label for="q1-firstOption">
                                <input type="text" name="q3-Option" class="form-control optionInput" placeholder="OPTION"
                                    required>
                            </label>
                            <i class="fa-solid fa-xmark"></i>
                        </li>
                        <li>
                            <input type="radio" id="q1-secondOption" name="q3-Option" value="HTML">
                            <label for="q1-secondOption">
                                <input type="text" name="q3-Option" class="form-control optionInput" placeholder="OPTION"
                                    required>
                            </label>
                            <i class="fa-solid fa-xmark"></i>
                        </li>
                        <li>
                            <input type="radio" id="q1-thirdOption" name="q3-Option" value="HTML">
                            <label for="q1-thirdOption">
                                <input type="text" name="q3-Option" class="form-control optionInput" placeholder="OPTION"
                                    required>
                            </label>
                            <i class="fa-solid fa-xmark"></i>
                        </li>
                        <li>
                            <input type="radio" id="q1-fourthOption" name="q3-Option" value="HTML">
                            <label for="q1-fourthOption">
                                <input type="text" name="q3-Option" class="form-control optionInput" placeholder="OPTION"
                                    required>
                            </label>
                            <i class="fa-solid fa-xmark"></i>
                        </li>
                    </ul>
                    <div class="addOptionBtn text-white border">
                        <span>اضافة خيار</span>
                        <i class="fa fa-plus"></i>
                    </div>
                    <div class="icons">
                        <i class="fa fa-trash"></i>
                    </div>
                </div>
                <div class="question p-3 bg-primary mb-4" dir="ltr">
                    <input type="text" class="questionInput form-control mb-2 w-50" required
                        placeholder="اكتب سوالك هنا ..." name="q" value="">
                    <ul class="options-list list-unstyled">
                        <li>
                            <input type="radio" id="q1-firstOption" name="q4-Option" value="HTML">
                            <label for="q1-firstOption">
                                <input type="text" name="q4-Option" class="form-control optionInput" placeholder="OPTION"
                                    required>
                            </label>
                            <i class="fa-solid fa-xmark"></i>
                        </li>
                        <li>
                            <input type="radio" id="q1-secondOption" name="q4-Option" value="HTML">
                            <label for="q1-secondOption">
                                <input type="text" name="q4-Option" class="form-control optionInput" placeholder="OPTION"
                                    required>
                            </label>
                            <i class="fa-solid fa-xmark"></i>
                        </li>
                        <li>
                            <input type="radio" id="q1-thirdOption" name="q4-Option" value="HTML">
                            <label for="q1-thirdOption">
                                <input type="text" name="q4-Option" class="form-control optionInput" placeholder="OPTION"
                                    required>
                            </label>
                            <i class="fa-solid fa-xmark"></i>
                        </li>
                        <li>
                            <input type="radio" id="q1-fourthOption" name="q4-Option" value="HTML">
                            <label for="q1-fourthOption">
                                <input type="text" name="q4-Option" class="form-control optionInput" placeholder="OPTION"
                                    required>
                            </label>
                            <i class="fa-solid fa-xmark"></i>
                        </li>
                    </ul>
                    <div class="addOptionBtn text-white border">
                        <span>اضافة خيار</span>
                        <i class="fa fa-plus"></i>
                    </div>
                    <div class="icons">
                        <i class="fa fa-trash"></i>
                    </div>
                </div>
            </form>
        </div>
        <div class="container">
            <button class="bg-primary text-white border-0 px-2 py-2 rounded " id="addQuestion">
                <span>اضافة سوال</span>
                <i class="fa-solid fa-square-plus"></i>
            </button>
            <button id="submitTest"
                class="border-0 bg-primary px-4 py-2 text-white mx-auto d-block rounded">ارسال</button>
        </div>
    </div>
    <!-- exam End -->
@endsection
