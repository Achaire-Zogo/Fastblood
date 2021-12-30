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
                             
                              <th> Name</th>
                              <th>groupe sanguin</th>
                              <th>nombre de poche</th>
                              <th>Action</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($bank as $banks)
                            
                      
                                <tr>
                                  
    
                                  <td>{{$banks->name}}</td>
                                  <td class="align-middle">
                                    Groupe sanguin B
                                  </td>
                                  <td>
                                    {{$banks->num_b}}
                                  </td>
                                 
                                
                                  <td>
                                  <a type="button" href="" class="btn btn-primary" >Demander</a></td>
                                </tr>
                                @endforeach
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