@extends('admin.layout.master')
@section('content')



<div class="main-container">
<div class="pd-ltr-20 xs-pd-20-10">
<div class="pd-20 card-box mb-30">
    <div class="clearfix">
        <div class="pull-left">
            <h4 class="text-blue h4">Add Employ</h4>
        </div>
<br><br>
    </div>
    <form action="{{route('employ.store')}}" method="POST" enctype="multipart/form-data">
       @csrf
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">First Name</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" value="{{old('firstrname')}}" name="firstname" >
                <p style="color:red">@error('firstname'){{$message}}@enderror</p>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Last Name</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" value="{{old('lastname')}}" name="lastname">
                <p style="color:red">@error('lastname'){{$message}}@enderror</p>
            </div>
        </div>
         <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Company</label>
            <div class="col-sm-12 col-md-10">

                <select class="custom-select col-12"  name="companies_id">

                    @foreach($data as $dat)
                        <option  value="{{$dat->id}}">{{$dat->name}}</option>
                @endforeach
                <p style="color:red">@error('companies_id'){{$message}}@enderror</p>

            </select>

            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Email</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" value="{{old('email')}}" name="email" >
                <p style="color:red">@error('email'){{$message}}@enderror</p>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Phone</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" value="{{old('phone')}}" name="phone" >
                <p style="color:red">@error('phone'){{$message}}@enderror</p>
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
