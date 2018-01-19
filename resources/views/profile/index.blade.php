@extends('layouts.master')

@section('content')
 <div class="col-md-12">
   <div class="row">
     <h1 class="lead">Hello {{Auth::user()->name}}</h1>
     
   </div>
 </div>
@endsection

@section('body')
<section class="basic-elements pt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Connect Steam Profile</h4>
                </div>
                <div class="card-body">
                   
                    
                    <form action="{{ route('profileSteamConnect') }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('POST') }}  
                    
                        <div class="row"> <!-- Basic Inputs Input Row -->
                            <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                <fieldset class="form-group">
                                    <label for="basicInput">Name</label>
                                    <input type="text" class="form-control" id="basicInput" name="name">
                                </fieldset>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                <fieldset class="form-group">
                                    <label for="basicInput">Steam id</label>
                                    <input type="text" class="form-control" id="basicInput" name="name">
                                </fieldset>
                            </div>
                        </div>
                    
                        <div class="row"> <!-- Button Row -->
                            <div class="col-sm-6 col-xs-12">
                            <fieldset class="form-group">
                                <button type="submit" class="btn btn-success btn-block btn-min-width">Connect</button>
                            </fieldset>
                            </div>
                        </div>

                    </form> <!-- Form Ending -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection