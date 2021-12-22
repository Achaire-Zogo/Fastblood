@extends('layouts.backend')
@section('content') <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Creer un association</h4>
                  </div>
                  <div class="card-body">
                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">groupe sanguin</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric">
                          <option>O+</option>
                          <option>O-</option>
                          <option>A+</option>
                          <option>A-</option>
                          <option>B+</option>
                          <option>B-</option>
                          <option>AB+</option>
                          <option>AB-</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Banque de sang</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric">
                          <option>hopital centre </option>
                         
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea class="summernote-simple"></textarea>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                      <button class="btn btn-primary">Ánnuler</button>
                        <button class="btn btn-primary">Demander</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
@endsection