    @extends('layouts.user')
    @section('content')
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">ادخال بينات البرنامج</h2>
                    <form method="POST"  action="{{ route('programs.update', $program['id']) }}">
                        @method('PUT')
                        @csrf
                        <div class="input-group">
                            <input class="input--style-2" type="text" value="{{$program->name}}" required placeholder="الاسم" name="name">
                        </div>
                        <div class="row row-space">
                            <div class="col-4">
                                <div class="input-group">
                                    <textarea name="description" id="programDescription"   cols="30" rows="10">"{{$program->description}}"</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="trainer_id">
                                            <option disabled="disabled" selected="selected">المدرب</option>
                                            @foreach ($trainers as $trainer)
                                            <option value="{{ $trainer->id }}">{{ $trainer->user['name'] }}</option>
                                             @endforeach
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="Registration Code" name="res_code">
                                </div>
                            </div>
                        </div> --}}
                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit">حفظ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection

