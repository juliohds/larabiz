@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            
            <div class="panel panel-default">
                <div class="panel-heading" style="width: 100%">Dashboard <a href="/listings/create" class="btn btn-success pull-right">Create</a></div>
                <div class="panel-body">
                    <h3>Your Listings</h3> 
                    @if(count($listings))
                        <table class="table table-striped">
                            <tr>
                                <th>Company</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($listings as $listing)
                                <tr>
                                    <td>{{$listing->name}}</td>
                                    <td><a href="/listings/{{ $listing->id }}/edit" class="btn btn-primary">Edit</a></td>
                                    <td>
                                        <form action="{{ route('listings.delete', $listing->id, '') }}" method="POST">
                                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>                                        
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @endif
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

