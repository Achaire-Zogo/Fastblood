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
                            <div class="float-right">
                                <a href="{{ route('admin.user.create') }}" class="btn btn-primary">{{ __('messages.add') }}</a>
                            </div>
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
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->telephone }}</td>
                                        <td>{{ $user->email }}</td>

                                        <td>
                                            @if($user->enabled == 1)
                                                <div class="badge badge-success badge-shadow">{{ __('messages.enabled') }}</div>
                                            @else
                                                <div class="badge badge-danger badge-shadow">{{ __('messages.disabled') }}</div>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="dropdown d-inline">
                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton2"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Actions
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item has-icon" href="#"><i class="far fa-eye"></i> {{ __('messages.show') }}</a>
                                                    <a class="dropdown-item has-icon" href="{{ route('admin.user.destroy', $user->id) }}" onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();">
                                                        <i class="fas fa-trash-alt"></i>
                                                        {{ __('messages.delete') }}
                                                    </a>
                                                    <form id="delete-form" action="{{ route('admin.user.destroy', $user->id) }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
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
