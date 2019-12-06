@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header font-weight-bold">Latest Business Listings</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                @if(count($listings) > 0)
                    <ul class="list-group">
	                    @foreach($listings as $listing)
	                    	<li class="list-group-item"><a href="/listings/{{$listing->id}}" class="item-link">{{$listing->name}}</a></li>
	                    @endforeach
                    </ul>
                @else
                    <h6>No Listings Found!</h6>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
