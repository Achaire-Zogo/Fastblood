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
                              <th>Email</th>
                              <th>phone</th>
                              <th>Status</th>
                              <th>Action</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($users as $user)
                            
                      
                                <tr>
                                  
    
                                  <td>{{$user->name}}</td>
                                  <td class="align-middle">
                                    {{$user->email}}
                                  </td>
                                  <td>
                                    {{$user->telephone}}
                                  </td>
                                 
                                  <td>
                                    <div class="badge badge-success">attante</div>
                                  </td>
                                  <td>
                                  <a type="button" href="{{url('dashbord/'.$user->id)}}" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">details</a></td>
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

        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="sticky_header_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Sticky Header</span>
                  </label>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">profil du DCTS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  @csrf
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">name:</label>
                    <input type="text" class="form-control" id="recipient-name" value="{{$user->name}}">
                  </div>
                  <div class="form-group">
                      <label for="recipient-name" class="col-form-label">email:</label>
                      <input type="text" class="form-control" id="recipient-name" value="{{$user->email}}">
                    </div>
                  <div class="form-group">
                      <label for="recipient-name" class="col-form-label">role:</label>
                      <input type="text" class="form-control" id="recipient-name" value="{{$user->role}}">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">telephone:</label>
                        <input type="text" class="form-control" id="recipient-name" value="{{$user->telephone}}">
                      </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">validation</button>
              </div>
            </div>
    </section>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">profil du DCTS</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              @csrf
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">name:</label>
                <input type="text" class="form-control" id="recipient-name" value="{{$user->name}}">
              </div>
              <div class="form-group">
                  <label for="recipient-name" class="col-form-label">email:</label>
                  <input type="text" class="form-control" id="recipient-name" value="{{$user->email}}">
                </div>
              <div class="form-group">
                  <label for="recipient-name" class="col-form-label">role:</label>
                  <input type="text" class="form-control" id="recipient-name" value="{{$user->role}}">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">telephone:</label>
                    <input type="text" class="form-control" id="recipient-name" value="{{$user->telephone}}">
                  </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">validation</button>
          </div>
        </div>
      </div>
    </div>
@endsection