<div class="form-group">
    {!! Form::label('property_name', 'Property Name:') !!}
    <p>{!! Form::text('property_name',null) !!}</p>
</div>
<div class="form-group">
    {!! Form::label('property_type', 'Property Type:') !!}
    <p>{{ Form::select('property_type', ['Select Property Type', 'Commercial', 'Room','Apartment', 'House','Land'],['class' => 'form-control']) }}</p>
</div>
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! Form::textarea('description',null) !!}</p>
</div>
<div class="form-group">
    {!! Form::label('file', 'Image:') !!}
    <p>{!! Form::file('image',null) !!}</p>
</div>
<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    <p>{!! Form::number('price',null) !!}</p>
</div>
<div class="form-group">
    {!! Form::label('land_size', 'Land Size (Sq.Ft:') !!}
    <p>{!! Form::number('land_size',null) !!}</p>
</div>
<div class="form-group">
    {!! Form::label('builtup', 'builtup:') !!}
    <p>{!! Form::number('builtup',null) !!}</p>
</div>
<div class="form-group">
    {!! Form::label('floors', 'floors:') !!}
    <p>{!! Form::number('floors',null) !!}</p>
</div>
<div class="form-group">
    {!! Form::label('bedrooms', 'bedrooms:') !!}
    <p>{!! Form::number('bedrooms',null) !!}</p>
</div>
<div class="form-group">
    {!! Form::label('bathrooms', 'bathrooms:') !!}
    <p>{!! Form::number('bathrooms',null) !!}</p>
</div>
<div class="form-group">
    {!! Form::label('living_room', 'living_room:') !!}
    <p>{!! Form::number('living_room',null) !!}</p>
</div>
<div class="form-group">
    {!! Form::label('water_supply', 'water_supply:') !!}
    <p>{{ Form::select('features', ['1'=> 'Yes','0'=>'No'],['class' => 'form-control']) }}</p>
</div>
<div class="form-group">
    {!! Form::label('furnishing', 'furnishing:') !!}
    <p>{{ Form::select('furnishing', ['1'=> 'Yes','0'=>'No'],['class' => 'form-control']) }}</p>
</div>
<div class="form-group">
    {!! Form::label('features', 'features:') !!}
     <p>{{ Form::select('features', ['Parking Space','Garden', 'Internet'],['class' => 'form-control']) }}</p>
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('properties.index') !!}" class="btn btn-default">Cancel</a>
</div>
