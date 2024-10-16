@extends('main.layouts.default')
@section('page_css')
<link rel="stylesheet" type="text/css" href="/assets/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="/assets/css/dataTables.dateTime.min.css">
<link rel="stylesheet" type="text/css" href="/assets/css/buttons.dataTables.min.css">
@stop
@section('title', 'マイページポイント履歴')
@section('content')
<main role="main"  class="page">
        <div class="user-page" id="page-wrapper">
            <!-- Top content -->
            <div class="container">
                <div class="user-page-bg shadow">
                    <div class="row">
                    <div class="col-12 col-md-12">
                        <div class="userinfo">
                            <h3 class="pb-4">ポイント履歴</h3>
                            <div class="responsive-table">
                                <table id="point_datatable" class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th class="text-center">日付</th>
                                        <th class="text-center">ポイント</th>
                                        <th class="text-center">メッセージ</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($point_history as $c_point)
                                    <tr>
                                        <td>{{$c_point->created_at}}</td>
                                        <td>{{$c_point->point}}</td>
                                        <td>{{$c_point->message}}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('page_script')
<script type="text/javascript" charset="utf8" src="/assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="/assets/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="/assets/js/buttons.html5.min.js"></script>
<script>
        $(document).ready(function(){
            $('#point_datatable').DataTable({
                // 日本語表示
                "language": {
                    "sProcessing": "処理中...",
                    "sLengthMenu": "_MENU_ 件表示",
                    "sZeroRecords": "データはありません。",
                    "sInfo": " _TOTAL_ 件中 _START_ から _END_ まで表示",
                    "sInfoEmpty": " 0 件中 0 から 0 まで表示",
                    "sInfoFiltered": "（全 _MAX_ 件より抽出）",
                    "sInfoPostFix": "",
                    "sSearch": "検索:",
                    "sUrl": "",
                    "oPaginate": {
                        "sFirst": "先頭",
                        "sPrevious": "前",
                        "sNext": "次",
                        "sLast": "最終"
                    },
                },
                "order": [[0, "desc"]]
            });
        });
    </script>
@stop