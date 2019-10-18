@extends('layouts.master')
@section('content')
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 100px; background-image: url(assets/img/logo.png); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->

    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                @if(Session::has('message'))
                    <div class="alert alert-success">{{Session::get('message')}}</div>
                @elseif(Session::has('error'))
                    <div class="alert alert-danger">{{Session::get('error')}}</div>
                @endif
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Add Distance</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('view_distance') }}" class="btn btn-sm btn-primary">View DIstances</a>

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('save_distance') }}">
                            {{ csrf_field() }}
                            <h6 class="heading-small text-muted mb-4">Distance information</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">From</label>
                                            <select type="text" name="from" class="form-control form-control-alternative" placeholder="From" required>
                                                @foreach($branches as $branch)
                                                <option>{{$branch->name}}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">To</label>
                                            <select type="text" name="to" class="form-control form-control-alternative" placeholder="To" required>
                                                @foreach($branches as $branch)
                                                    <option>{{$branch->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">KM</label>
                                            <input type="number" name="km" class="form-control form-control-alternative" placeholder="KM" required>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary my-4" value="Save" />
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
