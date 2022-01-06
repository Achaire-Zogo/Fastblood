@extends('layouts.backend')
@section('title')

@endsection
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
                                    <li class="breadcrumb-item"><a href="{{ route('directeur.publication_generale.index') }}">directeur</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Creer une publication Generale</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>
                                <a href="{{ route('directeur.publication_generale.index') }}" class="btn btn-primary">{{ __('messages.back') }}</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="#" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>{{ __('messages.bloodbanks') }}</label>
                                    <select class="form-control select2" name="blood_banks_id" required>

                                            <option value="">Banque A</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>{{ __('messages.groupe_sanguin') }}</label>
                                    <select class="form-control select2" name="blood_group" required>
                                            <option value="A+">aaaaaaaaaaa</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>{{ __('messages.address') }}</label>
                                    <input type="area" name="address" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-success">{{ __('messages.save') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
