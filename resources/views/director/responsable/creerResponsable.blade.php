@extends('layouts.backend')
@section('content')
<div class="row">
        <div class="col-12">
            <form method="post" action="/dashboard/addResponsable/director">
                @csrf
          <div class="card">
            <div class="card-header text-md-center">
              <h4>ADD RESPONSABLE</h4>
            </div>
            <div class="card-body">
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">name</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="name">
                </div>
              </div>
              <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">email</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="text" class="form-control"  name="email">
                    </div>
                </div>
                <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">phone</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" nname="phone">
                        </div>
                </div>
                <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">password</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="password" class="form-control"  name="password">
                        </div>
                </div>
              
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                <div class="col-sm-12 col-md-7">
                  <button class="btn btn-secondary">cancel</button>
                  <button class="btn btn-primary">add</button>
                </div>
              </div>
            </div>
          </div>
        </form>
        </div>
      </div>
      @endsection