@extends('layouts.backend')
@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card author-box">
                        <div class="card-body">
                            <div class="author-box-center">
                                <img alt="image" src="assets/img/users/user-1.png" class="rounded-circle author-box-picture">
                                <div class="clearfix"></div>
                                <div class="author-box-name">
                                    <a href="{{ route('my_profile', Auth::user()->email) }}">{{ Auth::user()->name }}</a>
                                </div>
                                <div class="author-box-job">{{ Auth::user()->role->name }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ __('messages.personal_details') }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="py-4">
                                <p class="clearfix">
                        <span class="float-left">
                          {{ __('messages.name') }}
                        </span>
                                    <span class="float-right text-muted">
                          {{ Auth::user()->name}}
                        </span>
                                </p>
                                <p class="clearfix">
                        <span class="float-left">
                          Phone
                        </span>
                                    <span class="float-right text-muted">
                          {{ Auth::user()->telephone }}
                        </span>
                                </p>
                                <p class="clearfix">
                        <span class="float-left">
                          Mail
                        </span>
                        <span class="float-right text-muted">
                          {{ Auth::user()->email }}
                        </span>
                        </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-8">
                    <div class="card">
                        <div class="padding-20">
                            <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="profile-tab2" data-toggle="tab" href="#settings" role="tab"
                                       aria-selected="false">{{ __('messages.setting') }}</a>
                                </li>
                            </ul>
                            <div class="tab-content tab-bordered" id="myTab3Content">
                                <div class="tab-pane fade show active" id="settings" role="tabpanel" aria-labelledby="profile-tab2">
                                    <form method="post" class="needs-validation" action="{{ route('update_profile', Auth::user()->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="card-header">
                                            <h4>{{ __('messages.edit_profile') }}</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="form-group col-md-6 col-12">
                                                    <label>{{ __('messages.name') }}</label>
                                                    <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required>
                                                    <div class="invalid-feedback">
                                                        Please fill in the first name
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 col-12">
                                                    <label>Telephone</label>
                                                    <input type="tel" class="form-control" value="{{ Auth::user()->telephone }}" name="telephone">
                                                    <div class="invalid-feedback">
                                                        Please fill in the last name
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-7 col-12">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}">
                                                    <div class="invalid-feedback">
                                                        Please fill in the email
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <button class="btn btn-primary">{{ __('messages.save') }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
