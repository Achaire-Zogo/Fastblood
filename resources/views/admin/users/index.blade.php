@extends('layouts.backend')
@section('title')
{{ __('messages.users') }}
@endsection
@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ __('messages.users') }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-2">
                                    <thead>
                                    <tr>
                                        <th class="text-center pt-3">
                                            <div class="custom-checkbox custom-checkbox-table custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                                                       class="custom-control-input" id="checkbox-all">
                                                <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </th>
                                        <th>{{ __('messages.name') }}</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td class="text-center pt-2">
                                            <div class="custom-checkbox custom-control">
                                                <input name="{{ $user->id }}" type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                       id="checkbox-{{ $user->id }}">
                                                <label for="checkbox-{{ $user->id }}" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>Create a mobile app</td>
                                        <td class="align-middle">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar width-per-70"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="assets/img/users/user-5.png" width="35">
                                        </td>
                                        <td>2018-01-20</td>
                                        <td>
                                            <div class="badge badge-success badge-shadow">Completed</div>
                                        </td>
                                        <td><a href="#" class="btn btn-primary">Detail</a></td>
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
    </section>
@endsection
