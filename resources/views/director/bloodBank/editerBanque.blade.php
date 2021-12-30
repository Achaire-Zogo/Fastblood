@extends('layouts.backend')
@section('content')
<div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Simple Summernote</h4>
            </div>
            <div class="card-body">
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">name</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">user name</label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric">
                    @foreach ($users as $user)
                    <option>{{$user->name}}</option> 
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">address</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">O</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="number" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">AB</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">A</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row mb-4">
                          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">B</label>
                          <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control">
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
        </div>
      </div>
      @endsection