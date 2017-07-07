@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Property</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($property, ['route' => ['properties.update', $property->id], 'method' => 'patch']) !!}

            @include('properties.fields')

            {!! Form::close() !!}
        </div>
@endsection
