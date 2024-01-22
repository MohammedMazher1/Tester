@extends('layouts.admin')
@section('content')
<div>
    <div class="row">

        <div class="col-lg-12">
            <div class="card" style="margin-top: 10%">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> قائمة المستخدمين
                </div>
                <div class="card-block">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>اسم المتدرب</th>
                                <th>الإيميل</th>
                                <th>الجنس</th>
                                <th>الاختبار القبلي</th>
                                <td>الاختبار البعدي</td>
                                <td>نسبة التقدم</td>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0 ; $i < count($traineesDetails['traineesPre']) ; $i++)
                            <tr>
                                <td class="traineeName">{{$traineesDetails['traineesPre'][$i]['name'][0]->name}}</td>
                                <td>{{$traineesDetails['traineesPre'][$i]['email'][0]->email}}</td>
                                <td>{{$traineesDetails['traineesPre'][$i]['gender'][0]->gender}}</td>
                                <td>{{$traineesDetails['traineesPre'][$i]['totalTrueOptios']}}/{{$traineesDetails['traineesPre'][$i]['total']}}</td>
                                @isset($traineesDetails['traineesPost'][$i])
                                @for ($j = 0 ; $j < count($traineesDetails['traineesPost']) ; $j++)
                                @if ($traineesDetails['traineesPost'][$j]['name'][0]->name == $traineesDetails['traineesPre'][$i]['name'][0]->name)
                                <td>{{$traineesDetails['traineesPost'][$j]['totalTrueOptios']}}/{{$traineesDetails['traineesPost'][$j]['total']}}</td>
                                @php
                                    $post = $traineesDetails['traineesPost'][$j]['totalTrueOptios']/$traineesDetails['traineesPost'][$j]['total'];
                                    $pre = $traineesDetails['traineesPre'][$i]['totalTrueOptios']/$traineesDetails['traineesPre'][$i]['total'];
                                    $preRatio = ($post - $pre )* 100;
                                @endphp
                                <td class="ratio" value={{$preRatio}}>
                                    {{$preRatio.'%'}}
                                </td>
                                @endif
                                @endfor

                                @endisset

                            </tr>
                            @endfor
                        </tbody>
                    </table>
                    <button type="button" id="showChart" class="showModelChar">
                        الرسم البياني
                     </button>
                     {{-- start model --}}
                     <div class="modal" id="myModal">
                        <div class="modal-dialog">
                          <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title">الرسم البياني</h4>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                                <div>
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                              <button type="button" id="modelClose" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>

                          </div>
                        </div>
                      </div>
                     {{-- end  model --}}
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
