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
                      <h3 class="mb-0">Add Manager</h3>
                    </div>
                    <div class="col-4 text-right">
                      <a href="{{ route('view_employees') }}" class="btn btn-sm btn-primary">View Managers</a>
                    </div>
                  </div>
                </div>
                @if(Session::has('message'))
                <div class="alert alert-success">{{ Session::get('message') }}</div>
                @elseif(Session::has('error'))
                <div class="alert alert-success">{{ Session::get('error') }}</div>
                @endif
                <div class="card-body">
                  <form method="POST" action="{{ route('save_manager') }}">
                      {{ csrf_field() }}
                    <h6 class="heading-small text-muted mb-4">User information</h6>
                    <div class="pl-lg-4">
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label" for="input-username">Name</label>
                            <input type="text" name="name" class="form-control form-control-alternative" placeholder="Name" required>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label" for="input-email">Surname</label>
                            <input type="text" name="surname" class="form-control form-control-alternative" placeholder="Surname" required>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label" for="input-first-name">Email</label>
                            <input type="email" name="email" class="form-control form-control-alternative" placeholder="email" required>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label" for="input-last-name">Phonenumber</label>
                            <input type="number" name="phonenumber" class="form-control form-control-alternative" placeholder="phonenumber" required>
                          </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label" for="input-last-name">National ID</label>
                              <input type="text" name="national_id" class="form-control form-control-alternative" placeholder="National ID" required>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label" for="input-last-name">Employee ID</label>
                              <input type="text" name="employee_id" class="form-control form-control-alternative" placeholder="Employee ID" required>
                            </div>
                          </div>

                          <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label" for="input-last-name">Branch</label>
                              <select  name="branch" class="form-control form-control-alternative" required>
                              @foreach ( $branches as $branch )
                              <option>{{ $branch->name }}</option>
                              @endforeach

                              </select>
                            </div>
                          </div>

                      </div>
                    </div>
                    <div class="pl-lg-4">
                      <div class="form-group">
                        <label>Address</label>
                        <textarea rows="4" name="address" class="form-control form-control-alternative" placeholder="Address"></textarea>
                      </div>
                    </div>
                    <div class="pl-lg-4">
                    <div class="row">
                      <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label" for="input-last-name">Password</label>
                              <input type="password" name="password" class="form-control form-control-alternative" placeholder="Password" required>
                            </div>
                          </div>
                          <div class="col-lg-6">
                                <div class="form-group">
                                  <label class="form-control-label" for="input-last-name">Confirm Password</label>
                                  <input type="password" name="confirm_password" class="form-control form-control-alternative" placeholder="Confirm Password" required>
                                </div>
                              </div>
                    </div>

                    <div class="col-lg-6">
                          <div class="form-group">
                            <input type="submit"  class="btn btn-primary" value="Save"/>
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
