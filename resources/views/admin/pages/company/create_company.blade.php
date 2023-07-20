@extends('admin.layout.master')
@section('content')



<div class="main-container">
<div class="pd-ltr-20 xs-pd-20-10">
<div class="pd-20 card-box mb-30">
    <div class="clearfix">
        <div class="pull-left">
            <h4 class="text-blue h4">Add Company</h4>
        </div>
        <br><br>
    </div>

    <form action="{{route('company.store')}}" method="POST" enctype="multipart/form-data">
       @csrf
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Company Name</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" name="name" value="{{old('name')}}"placeholder="Company Name">
                <p style="color:red">@error('name'){{$message}}@enderror</p>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Email</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" placeholder="email" value="{{old('email')}}" type="text" name="email">
                <p style="color:red">@error('email'){{$message}}@enderror</p>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Website</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" name="website" value="{{old('website')}}" placeholder="www.">
                <p style="color:red">@error('website'){{$message}}@enderror</p>
            </div>
        </div>
        <div class="form-group">
            <label>Image</label>
            <div class="custom-file">

                <input type="file" name="logo" class="custom-file-input" >

                <label class="custom-file-label">Choose file</label>
                <p style="color:red">@error('logo'){{$message}}@enderror</p>

            </div>
        </div>
        <div style="text-align:center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>

               </div>
            </div>
    </div>
 </div>



@endsection
