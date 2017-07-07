@extends('layouts.app')

@section('content')
    @include('properties.show_fields')

    <div class="form-group">
           <a href="{!! route('properties.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
