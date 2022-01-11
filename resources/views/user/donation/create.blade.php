@extends('layouts.social')
@section('title')
{{ trans('messages.message') }}
@endsection
@section('content')
<div class="col-lg-6">
        <div class="central-meta">
            <div class="">
                <h5 class="f-title"><i class="ti-lock"></i>Nouvelle Don De Sang</h5>

            <form method="POST" action="{{ route('user.association.store') }}">
                    @csrf
                <div>
                    <label>Choississez la banque</label>
                    <div>
                            <label>{{ __('messages.name') }}</label>
                            <input type="text" placeholder="nom" name="nom" class="form-control" required>
                            {{-- <textarea type="text" placeholder="nom" name="nom" required></textarea> --}}
                        </div>
                </div>
                <div>
                    <div>
                        <label>Groupe Sanguins</label>
                        <input type="text" placeholder="abreviation" name="abreviation" class="form-control" required>
                            {{-- <textarea type="text" placeholder="nom" name="nom" required></textarea> --}}
                    </div>
                </div>

                <input type="text" name="user_id" value="{{ Auth::user()->id }}" hidden class="form-control" required>
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-success">{{ __('messages.save') }}</button>
                </div>
                </form>
            </div>
        </div>
    </div><!-- centerl meta -->
@endsection
