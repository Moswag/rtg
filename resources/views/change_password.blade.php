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
              <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                  <div class="row align-items-center">
                    <div class="col-8">
                      <h3 class="mb-0">Change Password</h3>
                    </div>

                  </div>
                </div>
                @if(Session::has('message'))
                <div class="alert alert-success">{{ Session::get('message') }}</div>
                @elseif(Session::has('error'))
                <div class="alert alert-success">{{ Session::get('error') }}</div>
                @endif
                <div class="card-body">
                  <form method="POST" action="{{ route('update_password') }}">
                      {{ csrf_field() }}
                    <h6 class="heading-small text-muted mb-4">Change Password</h6>

                    <div class="pl-lg-4">
                    <div class="row">
                      <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label" for="input-last-name">New Password</label>
                              <input type="password" name="password" class="form-control form-control-alternative" placeholder="Password" required>
                            </div>
                          </div>
                          <div class="col-lg-6">
                                <div class="form-group">
                                  <label class="form-control-label" for="input-last-name">Confirm New Password</label>
                                  <input type="password" name="confirm_password" class="form-control form-control-alternative" placeholder="Confirm Password" required>
                                </div>
                              </div>
                    </div>

                    <div class="col-lg-6">
                          <div class="form-group">
                            <input type="submit"  class="btn btn-primary" value="Change Password"/>
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
