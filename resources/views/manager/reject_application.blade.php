@extends('layouts.master')
@section('content')
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
         style="min-height: 100px; background-image: url(assets/img/logo.png); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->

    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Reject Application</h3>
                            </div>

                        </div>
                    </div>
                    @if(Session::has('message'))
                        <div class="alert alert-success">{{ Session::get('message') }}</div>
                    @elseif(Session::has('error'))
                        <div class="alert alert-success">{{ Session::get('error') }}</div>
                    @endif
                    <div class="card-body">
                        <form method="POST" action="{{ route('reject_emp_application') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{$application->id}}">
                            <h6 class="heading-small text-muted mb-4">Trip information</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">To</label>
                                            <input name="to" value="{{$application->to}}" class="form-control form-control-alternative" disabled/>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">From</label>
                                            <input name="to" value="{{$application->from}}" class="form-control form-control-alternative" disabled/>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">Number of
                                                Days</label>
                                            <input type="number" name="days" value="{{$application->number_of_travellers}}"
                                                   class="form-control form-control-alternative" placeholder="days"
                                                   disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">Date</label>
                                            <input type="text" name="date" value="{{$application->date}}"
                                                   class="form-control form-control-alternative" placeholder="days"
                                                   disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">Mode Of Transport</label>
                                            <input type="text" name="date" value="{{$application->mode_of_transport}}"
                                                   class="form-control form-control-alternative" placeholder="days"
                                                   disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">Type Of Travel</label>
                                            <input type="text" name="date" value="{{$application->type_of_travel}}"
                                                   class="form-control form-control-alternative" placeholder="days"
                                                   disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">Number of
                                                Travellers</label>
                                            <input type="text" name="date" value="{{$application->number_of_travellers}}"
                                                   class="form-control form-control-alternative" placeholder="days"
                                                   disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">Purpose Of Travel</label>
                                            <input type="text" name="date" value="{{$application->purpose_of_travel}}"
                                                   class="form-control form-control-alternative" placeholder="days"
                                                   disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="pl-lg-4">
                                    <div class="form-group">
                                        <label>Travel Reason</label>
                                        <textarea rows="4" name="reason" class="form-control form-control-alternative"
                                                  placeholder="{{$application->reason}}" disabled></textarea>
                                    </div>
                                </div>

                                <div class="pl-lg-4">
                                    <div class="form-group">
                                        <label>Reject Reason</label>
                                        <textarea rows="4" name="reject_reason" class="form-control form-control-alternative"
                                                  placeholder="Rejection Reason"></textarea>
                                    </div>
                                </div>
                                <div class="pl-lg-4">


                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary" value="Reject Application"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->

    </div>

@endsection
