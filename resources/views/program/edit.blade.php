    @extends('layouts.admin')
    @section('content')
    <div class="col-sm-10">
        <form method="POST"  action="{{ route('programs.update', $program['id']) }}">
            @method('PUT')
            @csrf
        <div class="card" style="margin-right: 25%;margin-top: 7%;">
            <div class="card-header">
                <strong>تعديل برنامج</strong>

            </div>
            <div class="card-block">
                @if (Session::get('error'))
                <div class="alert alert-danger" role="alert">
                    {{Session::get('error')}}
                </div>
                @endif
                <div class="form-group">
                    <label for="company">اسم البرنامج</label>
                    <input type="text" required class="form-control" value="{{$program->name}}" name="name" id="name" placeholder="اسم البرنامج">
                </div>

                <div class="form-group">
                    <label for="vat">وصف البرنامج</label>
                    <textarea required class="form-control" name="description" id="programDescription" cols="30" rows="10">{{$program->name}}</textarea>
                </div>

                <div class="row" style="margin: 0 ; position: relative;">
                    <div class="form-group col-sm-4" style="padding: 0">
                        <label for="postal-code">المدرب</label>
                        <select name="trainer_id" class="form-control">
                            @foreach ($trainers as $trainer)
                            <option value="{{ $trainer->id }}">{{ $trainer->user['name'] }}</option>
                             @endforeach
                        </select>
                        <div class="select-dropdown"></div>

                    </div>
                <!--/row-->
                <div class="form-group" style="position: absolute;bottom: 0;left: 0;">
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> حفظ</button>
                </div>

                </div>
            </div>
        </div>
        </form>
    </div>
    @endsection
