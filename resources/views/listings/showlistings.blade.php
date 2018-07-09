@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            
            <div class="panel panel-default">
                <div class="panel-heading">{{ $listing->name }} <a href="/listings" class="pull-right btn btn-default btn-xs">Go Back</a></div>
                <div class="panel-body">
                   
                    <ul class="list-group">
                        <li class="list-group-item">Address: {{ $listing->address }}</li>
                        <li class="list-group-item">Website: {{ $listing->website }}</li>
                        <li class="list-group-item">Email: {{ $listing->emial }}</li>
                        <li class="list-group-item">Phone: {{ $listing->phone }}</li>
                        <li class="list-group-item">Bio: {{ $listing->bio }}</li>
                        
                   </ul>
                
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

