@extends('layouts.backend')
@section('content')
<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('directeur.dashboard.index') }}">{{ __('messages.dashboard') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">directeur</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>directeur</h4>
                        <div class="float-right">
                            <a href="{{route('directeur.publication_generale.create')}}" class="btn btn-primary">Creer</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-2">
                                <thead>
                                <tr>
                                    <th>Associations</th>
                                    <th>{{__('messages.ask_date')}}</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>
                                                <div class="badge badge-success badge-shadow">{{ __('messages.approuved') }}</div>

                                        </td>
                                        <td>
                                            <a class="btn btn-outline-primary" href="#" >
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <a class="btn btn-outline-danger" href="" onclick="event.preventDefault();
                                                 document.getElementById('delete-form').submit();" title=" {{ __('messages.delete') }}">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                            <form id="delete-form" action="#" method="POST" class="d-none">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
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
