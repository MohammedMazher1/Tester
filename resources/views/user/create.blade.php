    @extends('layouts.admin')
    @section('content')
    <div class="col-sm-10 mb-5">
        <form method="POST"  action="{{Route('users.store')}}">
            @csrf
        <div class="card" style="margin-right: 25%;margin-top: 10%;">
            <div class="card-header">
                <strong>اضافة مستخدم </strong>
            </div>
            <div class="card-block">
                @if (Session::get('error'))
                <div class="alert alert-danger" role="alert">
                    {{Session::get('error')}}
                </div>
                @endif
                <div class="form-group">
                    <label for="company">اسم المستخدم</label>
                    <input type="text" required class="form-control" name="name" id="name" placeholder="اسم المستخدم">
                </div>

                <div class="form-group">
                    <label for="vat">الرقم الجوال</label>
                    <input type="tel" required class="form-control" name="phone" id="vat" placeholder="776533887">
                </div>

                <div class="row">

                    <div class="form-group col-sm-8">
                        <label for="city">الايميل</label>
                        <input type="email" class="form-control" required name="email" id="city" placeholder="example@outlook.sa">
                    </div>

                    <div class="form-group col-sm-4">
                        <label for="postal-code">الجنس</label>
                        <select name="gender" class="form-control">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                        <div class="select-dropdown"></div>
                    </div>

                <div class="row">

                    <div class="form-group col-sm-8">
                        <label for="city">نوع المستخدم</label>
                        <select name="type" class="form-control">
                            <option>trainer</option>
                            <option>trainee</option>
                        </select>
                        <div class="select-dropdown"></div>
                    </div>


                </div>
                <!--/row-->

                <div class="card-footer" style="text-align: left;">
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> حفظ</button>
                    <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> الغاء</button>
                </div>

                </div>
            </div>
        </div>
        </form>
    </div>
    @endsection

