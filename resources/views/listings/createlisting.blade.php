@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            
            <div class="panel panel-default">
                <div class="panel-heading">Create Listing</div>
                <br>
                <div class="panel-body">
                    <form action="{{ action('ListingsController@store') }}" method="POST" class="form-group">
                       <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                       <label for="name">name</label>
                       <input type="text" name="name" id="name" class="form-control">
                       <label for="website">website</label>
                       <input type="text" name="website" id="website" class="form-control">
                       <label for="email">email</label>
                       <input type="text" name="email" id="email" class="form-control">
                       <label for="phone">phone</label>
                       <input type="text" name="phone" id="phone" class="form-control">
                       <label for="address">address</label>
                       <input type="text" name="address" id="address" class="form-control">
                       <label for="bio">mini-bio</label>
                       <textarea name="bio" id="bio" class="form-control" size="120"></textarea>
                       <br>
                       <button type="submit" class="btn btn-primary">enviar</button>
                   </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

