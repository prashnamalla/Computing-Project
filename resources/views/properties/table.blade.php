<table class="table table-responsive" id="properties-table">
    <thead>
        <th>Property Name</th>
        <th>Property Type</th>
        <th>Description</th>
        <th>Upload Image</th>
        <th>Price</th>
        <th>Land Size</th>
        <th>Built-Up</th>
        <th>Floors</th>
        <th>No. of Bedrooms</th>
        <th>No. of Bathrooms</th>
        <th>No. of Living Room</th>
        <th>No. Water Supply</th>
        <th>Furnishing</th>
        <th>Features</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($properties as $property)
        <tr>
            <td>{!! $property->property_name !!}</td>
            <td>{!! $property->property_type !!}</td>
            <td>{!! $property->description !!}</td>
            <td>{!! $property->image !!}</td>
            <td>{!! $property->price !!}</td>
            <td>{!! $property->land_size !!}</td>
            <td>{!! $property->builtup !!}</td>
            <td>{!! $property->floors !!}</td>
            <td>{!! $property->bedrooms !!}</td>
            <td>{!! $property->bathrooms !!}</td>
            <td>{!! $property->living_room !!}</td>
            <td>{!! $property->water_supply !!}</td>
            <td>{!! $property->furnishing !!}</td>
            <td>{!! $property->features !!}</td>
            <td>
                {!! Form::open(['route' => ['properties.destroy', $property->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('properties.show', [$property->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('properties.edit', [$property->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
