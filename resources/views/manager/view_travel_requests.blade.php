@extends('layouts.master')
@section('content')
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 100px; background-image: url(assets/img/logo.png); background-size: cover; background-position: center top;">
        <span class="mask bg-gradient-default opacity-8"></span>

    </div>
    <div class="container-fluid mt--7">
        <!-- Table -->
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">View {{ $page }}s</h3>
                            </div>

                        </div>

                    </div>
                    @if(Session::has('message'))
                        <div class="alert alert-success">{{ Session::get('message') }}</div>
                    @elseif(Session::has('error'))
                        <div class="alert alert-success">{{ Session::get('error') }}</div>
                    @endif

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">From</th>
                                <th scope="col">To</th>
                                <th scope="col">Date</th>
                                <th scope="col">Purpose</th>
                                <th scope="col">Reason</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>


                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($applications as $application )
                                <tr>
                                    <th scope="row">
                                        {{ $application->id }}
                                    </th>
                                    <td>
                                        {{ $application->from }}
                                    </td>
                                    <td>
                                        {{ $application->to }}
                                    </td>
                                    <td>
                                        {{ $application->date }}
                                    </td>
                                    <td>
                                        {{ $application->purpose_of_travel}}
                                    </td>
                                    <td>
                                        {{ $application->reason }}
                                    </td>
                                    <td>
                                        {{ $application->status }}
                                    </td>

                                    <td>
                                        <a href="{{route('view_application',['id'=>$application->id])}}" class="btn btn-primary">View</a>
                                        <a href="{{route('reject_application',['id'=>$application->id])}}" class="btn btn-danger">Reject</a>

                                    </td>

                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <nav aria-label="...">
                            <ul class="pagination justify-content-end mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">
                                        <i class="fas fa-angle-left"></i>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="fas fa-angle-right"></i>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>



    </div>

@endsection
