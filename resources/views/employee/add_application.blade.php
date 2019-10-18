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
                                <h3 class="mb-0">Add Application</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('view_applications') }}" class="btn btn-sm btn-primary">View Requests</a>
                            </div>
                        </div>
                    </div>
                    @if(Session::has('message'))
                        <div class="alert alert-success">{{ Session::get('message') }}</div>
                    @elseif(Session::has('error'))
                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                    @endif
                    <div class="card-body">
                        <form method="POST" action="{{ route('save_application') }}">
                            {{ csrf_field() }}
                            <h6 class="heading-small text-muted mb-4">Trip information</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">To</label>
                                            <select name="to" class="form-control form-control-alternative" required>

                                                <option value="branch">Branch</option>
                                                <option value="other">Other</option>


                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">Branch</label>
                                            <select name="branch" class="form-control form-control-alternative">
                                                <option value="">Pick Branch</option>
                                                @foreach ($branches as $branch)
                                                    <option value="{{ $branch->name }}">{{ $branch->name }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-email">Other</label>
                                            <input type="text" name="other" class="form-control form-control-alternative"
                                                   placeholder="If other please Specify">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">Number of
                                                Days</label>
                                            <input type="number" name="days"
                                                   class="form-control form-control-alternative" placeholder="days"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">Date</label>
                                            <input type="date" name="date"
                                                   class="form-control form-control-alternative" placeholder="days"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">Mode Of Transport</label>
                                            <select name="transport" class="form-control form-control-alternative" required>

                                                <option>Road</option>
                                                <option>Air</option>
                                                <option>Train</option>


                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">Type Of Travel</label>
                                            <select name="type_of_travel" class="form-control form-control-alternative" required>
                                                    <option>Local</option>
                                                <option>International</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">Number of
                                                Travellers</label>
                                            <input type="number" name="number_of_travellers"
                                                   class="form-control form-control-alternative" placeholder="Number of Travellers"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">Purpose Of Travel</label>
                                            <select name="purpose_of_travel" class="form-control form-control-alternative" required>

                                                @foreach ($purposes as $purpose)
                                                    <option value="{{ $purpose->type }}">{{ $purpose->type }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div>

                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label>Reason</label>
                                    <textarea rows="4" name="reason" class="form-control form-control-alternative"
                                              placeholder="Reason" required></textarea>
                                </div>
                            </div>

                            <div class="pl-lg-4">


                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Submit Application"/>
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
