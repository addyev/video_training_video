@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Questions
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/dataTables.bootstrap4.css') }}" />
    <link href="{{ asset('css/pages/tables.css') }}" rel="stylesheet" type="text/css" />
@stop

{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>QuestionsList</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    @lang('general.dashboard')
                </a>
            </li>
            <li><a href="#">Question</a></li>
            <li class="active">Questions list</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content pr-3 pl-3">
        <div class="row">
            <div class="col-12">
                <div class="card ">
                    <div class="card-header bg-primary text-white clearfix">
                        <h4 class="card-title float-left"> <i class="livicon" data-name="users" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Question list
                        </h4>
                        <div class="float-right">
                            <a  href="#add" data-toggle="modal"  data-target="#add" class="btn btn-sm btn-light"><span class="fa fa-plus"></span> Add New Question</a>
                        </div>
                    </div>
                    <br />
                    <div class="card-body">
                        <div class="table-responsive-lg table-responsive-md table-responsive-sm">
                            <table class="table table-bordered" id="table">
                                <thead>
                                <tr class="filters">
                                    <th>Id</th>
                                    <th>Questions</th>
                                    <th>Created At</th>

                                </tr>
                                </thead>
                                <tbody>
                                @if(!empty($questions))
                                    @foreach ($questions as $question)
                                        <tr>
                                            <td>{{ $question->id }}</td>
                                            <td>{{ $question->question }}</td>
                                            <td>{{ $question->created_at->diffForHumans() }}</td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- row-->
    </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/jquery.dataTables.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.bootstrap4.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>

@stop
