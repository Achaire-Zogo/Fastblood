@extends('layouts.backend')
@section('content')
<div class="row">
        <div class="col-12">
          <form method="post" action="/dashboard/addbloodBank/director">
            @csrf
              
          <div class="card">
            <div class="card-header">
              <h4>ADD BLOODBANK</h4>
            </div>
            <div class="card-body">
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">name</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="name">
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">user name</label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric">
                    @foreach ($users as $user)
                    <option>{{$user->name}}</option>
                    
                    <input type="hidden" name="user_id" value="{{$user->id}}"> 
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">address</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control" name="address">
                  </div>
                </div>
                
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                <div class="col-sm-12 col-md-7">
                  <button class="btn btn-primary">cancel</button>
                  <button class="btn btn-primary">add</button>
                </div>
              </div>
            </div>
          </div>
          </form>
        </div>
      </div>
      @endsection