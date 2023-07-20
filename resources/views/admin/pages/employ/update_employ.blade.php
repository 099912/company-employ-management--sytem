@extends('admin.layout.master')
@section('content')



<div class="main-container">
<div class="pd-ltr-20 xs-pd-20-10">
<div class="pd-20 card-box mb-30">
    <div class="clearfix">
        <div class="pull-left">
            <h4 class="text-blue h4">Update Employ</h4>
        </div>

    </div>
    <form action="{{route('employ.update',$data->id)}}" method="POST" enctype="multipart/form-data">
       @csrf
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">First Name</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" name="firstname" value="{{$data->firstname}}">
                <p style="color:red">@error('title'){{$message}}@enderror</p>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Last Name</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" name="lastname"  value="{{$data->lastname}}">
                <p style="color:red">@error('title'){{$message}}@enderror</p>
            </div>
        </div>
         <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Company</label>
            <div class="col-sm-12 col-md-10">

                <select class="custom-select col-12"  name="companies_id"  value="{{$data->companies_id}}">

                    @foreach($dat as $da)
                        <option  value="{{$da->id}}">{{$da->name}}</option>
                @endforeach
                <p style="color:red">@error('companies_id'){{$message}}@enderror</p>

            </select>

            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Email</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" name="email" value="{{$data->email}}" >
                <p style="color:red">@error('website'){{$message}}@enderror</p>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">phone</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" name="phone" value="{{$data->phone}}" >
                <p style="color:red">@error('website'){{$message}}@enderror</p>
            </div>
        </div>



            <button type="submit" class="btn btn-primary">Submit</button>


    </form>

               </div>
            </div>
    </div>
 </div>



@endsection
