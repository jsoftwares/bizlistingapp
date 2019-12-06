@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Edit Listing <a href="/dashboard" class="btn btn-success btn-sm float-right">Back</a> </div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {{Form::open(['action'=>['ListingsController@update', $listing->id], 'method'=>'PATCH'])}}

                	{{Form::bsText('name', $listing->name, ['placeholder'=>'Company Name'])}}
                	{{Form::bsText('website', $listing->website, ['placeholder'=>'Company Website'])}}
                	{{Form::bsEmail('email', $listing->email, ['placeholder'=>'Contact Email'])}}
                	{{Form::bsTel('phone', $listing->phone, ['placeholder'=>'Contact Phone'])}}
                	{{Form::bsText('address', $listing->address, ['placeholder'=>'Business Address'])}}
                	{{Form::bsTextArea('bio', $listing->bio, ['placeholder'=>'About This Business'])}}
                	
                	{!!Form::bsSubmit('Update', ['class'=>'btn btn-success'])!!}

                {{Form::close()}}
            </div>
        </div>
    </div>
</div>

@endsection