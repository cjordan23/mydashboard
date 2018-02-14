@extends('layouts.layout')
@section('content')

@include('includes.adminMenu')

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 gutter">

        <div class="row">
            <div class="panel panel-default col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel-body">
                    <div id="map-container"></div>
                </div>
            </div>

            {{--  <div class="col-lg-6 col-md-4 col-xs-12">
                <div class="card">
                    <div class="card-header">Coordinate</div>
                    <div class="card-body">
                       <form>
                            <div class="form-row">
                                <div class="col">
                                    <input id="longPlaceholder" type="text" class="form-control" placeholder="Longtitude">
                                </div>
                                <div class="col">
                                    <input id="latPlaceholder" type="text" class="form-control" placeholder="Latitude">
                                </div>
                            </div>
                        </form>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-8 col-xs-12">
                <div class="card">
                    <div class="card-header">Location Detail Registration Form</div>
                    <div class="card-body">
                        <form id="card-body-form">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Password</label>
                                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Address 2</label>
                                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">City</label>
                                    <input type="text" class="form-control" id="inputCity">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">State</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputZip">Zip</label>
                                    <input type="text" class="form-control" id="inputZip">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox"> Check me out
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>  --}}
        </div>
    </div>
</div>
@endsection