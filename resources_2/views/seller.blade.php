@extends('layouts.app')

@section('content')
<div class="container">
    <form class="form-horizontal">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Property Name</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
        </div>
         <div class="form-group">
            <label for="role" class="col-sm-2 control-label">Property Type</label>
             <div class="col-md-6">
                <select name="role" class="form-control" required>
                    <option value="">House</option>
                    <option value="1"> Apartment</option>
                    <option value="0"> Land</option>
                    <option value="0"> Commercial</option>
                    <option value="0"> Office Space</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Description</label>
            <div class="col-sm-10">
                <input type="" class="form-control" id="input3" placeholder="">
            </div>
        </div> 
        <div class="form-group">
            <label for="exampleInputFile" class="col-sm-2 control-label" >Upload Image</label>
            <div class="col-sm-10">
               <input type="file" id="exampleInputFile">
            </div>
            
        </div>
        <div class="form-group">
            <label  class="col-sm-2 control-label">Property Location</label>
            <div class="col-sm-10">
                <input type="" class="form-control" id="input3" placeholder="">
            </div>
        </div>

        <div class="form-group">
            <label  class="col-sm-2 control-label">Price</label>
            <div class="col-sm-10">
                <input type="" class="form-control" id="input3" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <label  class="col-sm-2 control-label">Land Size</label>
            <div class="col-sm-10">
                <input type="" class="form-control" id="input3" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <label  class="col-sm-2 control-label">Built up (sq.ft)</label>
            <div class="col-sm-10">
                <input type="" class="form-control" id="input3" placeholder="">
            </div>
        </div>

        <div class="form-group">
            <label  class="col-sm-2 control-label">Floors</label>
            <div class="col-sm-10">
                <input type="" class="form-control" id="input3" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <label  class="col-sm-2 control-label">Bedrooms</label>
            <div class="col-sm-10">
                <input type="" class="form-control" id="input3" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <label  class="col-sm-2 control-label">Bathroom</label>
            <div class="col-sm-10">
                <input type="" class="form-control" id="input3" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <label  class="col-sm-2 control-label">Living Room</label>
            <div class="col-sm-10">
                <input type="" class="form-control" id="input3" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <label for="role" class="col-sm-2 control-label">Water Supply</label>
             <div class="col-md-6">
                <select name="role" class="form-control" >
                    <option value="1"> Yes</option>
                    <option value="0"> No</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label  class="col-sm-2 control-label">Furnishing</label>
            <div class="col-sm-10">
                <input type="" class="form-control" id="input3" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <label  class="col-sm-2 control-label"> Features</label>
            <div class="col-sm-10">
                <div class="checkbox">
                <label><input type="checkbox"> Parking</label>
                <label><input type="checkbox"> Garden</label>
                <label><input type="checkbox"> Garage</label>
                <label><input type="checkbox"> Internet</label>
              </div>
            </div>
        </div>
        <div class="form-group">
            <label  class="col-sm-2 control-label"><button type="submit" class="btn btn-primary">Submit</button></label>
                
        </div>     
    </form> 
</div>
@endsection
