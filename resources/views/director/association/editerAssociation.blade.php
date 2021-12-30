@extends('layouts.backend')
@section('content')
<div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>ADD ASSOCIATON</h4>
            </div>
            <div class="card-body">
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">name</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control">
                </div>
              </div>
             
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Banque de sang</label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric">
                    @foreach ($bank as $banks)
                    <option>{{$banks->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">description</label>
                <div class="col-sm-12 col-md-7">
                  <textarea class="summernote-simple"></textarea>
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