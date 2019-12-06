@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard
                <span class="float-right">
                    <a href="{{route('listings.create')}}" class="btn btn-outline-success btn-sm">Add Listing</a>
                </span>
            </div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <h3>Your Listings</h3>
                @if(count($listings) > 0)
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Company</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($listings as $listing)
                            <tr>
                                <td>{{$listing->name}}</td>
                                <td>{{$listing->email}}</td>
                                <td>
                                    
                                        <div class='btn-group'>
                                            <a href="{!! route('listings.show', [$listing->id]) !!}" class='btn btn-outline-primary btn-sm mr-1'>View</a>
                                            <a href="{!! route('listings.edit', [$listing->id]) !!}" class='btn btn-outline-warning btn-sm mr-1'>Edit</a>

                                            {!! Form::open(['route' => ['listings.destroy', $listing->id], 'method' => 'DELETE']) !!}

                                            {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-outline-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                        </div>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <h4>No Listings Found!</h4>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
