@extends('layouts.backend')
@section('content')
<section class="section">
        
     
      

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Associations</h4>
                        <div class="card-header-form">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                <tr>
                                    <th>Numero de l'association</th>
                                    <th>Nom de l'association</th>
                                    <th>Chef</th>
                                    <th>Date de creation</th>
                                    <th>Nombre de membres</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>ass1 </td>
                                    <td>chef1 </td>
                                    <td>11-08-2018</td>
                                    <td>23</td>
                                    <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>ass2 </td>
                                    <td>chef2 </td>
                                    <td>11-08-2019</td>
                                    <td>33</td>
                                    <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>ass3 </td>
                                    <td>chef3 </td>
                                    <td>11-09-2018</td>
                                    <td>28</td>
                                    <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>ass4</td>
                                    <td>chef5 </td>
                                    <td>11-08-2020</td>
                                    <td>22</td>
                                    <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>ass5</td>
                                    <td>chef9 </td>
                                    <td>11-08-2021</td>
                                    <td>44</td>
                                    <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>ass6</td>
                                    <td>chef10 </td>
                                    <td>11-03-2018</td>
                                    <td>12</td>
                                    <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>ass7</td>
                                    <td>chef11 </td>
                                    <td>10-08-2018</td>
                                    <td>23</td>
                                    <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection