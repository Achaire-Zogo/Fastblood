@extends('layouts.backend')
@section('content') <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4> Nouvelle banque de sang</h4>
                  </div>
                  <form method="post" action="/addBank">
                     @csrf
        {{csrf_field()}}
                  <div class="card-body">
                 
                    <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Region</label>
                      <div class="col-sm-12 col-md-7">
                      <select name="name" class="form-control">
                        <option>Centre</option>
</select>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">District</label>
                      <div class="col-sm-12 col-md-7">
                      <select name="name" class="form-control">
                        <option>Biyem Assi</option>
</select>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Departement</label>
                      <div class="col-sm-12 col-md-7">
                      <select name="name" class="form-control">
                        <option>Mfoundi</option>
                      </select>
                      </div>
                    </div>
                    
                    
                    <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Formation sanitaire</label>
                      <div class="col-sm-12 col-md-7">
                      <select name="name" class="form-control">
                        <option>CHU</option>
</select>
                      </div>
                    </div>
                     
                   
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                      <button class="btn btn-success">Enregistrer</button>
                        <button class="btn btn-success">Reinitialiser</button>
                      </div>
                    </div>
                  </div>
                </div>
             </form> 
@endsection