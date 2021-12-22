@extends('layouts.backend')
@section('content')
<section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Export Table</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                             
                              <th> Nom association</th>
                              <th>Drescription</th>
                              <th>date</th>
                            
                              <th>Action</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                                <tr>
                                  <td>hopital centrale</td>
                                  <td class="align-middle">
                                    present dans la villle de yaounde
                                  </td>
                                  <td>1967</td>
                                  <td>
                                  <a type="button" href="" class="btn btn-primary" >interger</a></td>
                                </tr>   
                                <tr>
                                  <td>hopital jamo</td>
                                  <td class="align-middle">
                                    present dans la ville de yaounde
                                  </td>
                                  <td>1990</td>
                                  <td>
                                  <a type="button" href="" class="btn btn-primary" >interger</a></td>
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