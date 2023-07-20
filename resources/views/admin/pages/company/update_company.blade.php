@extends('admin.layout.master')
@section('content')



<div class="main-container">
<div class="pd-ltr-20 xs-pd-20-10">
<div class="pd-20 card-box mb-30">
    <div class="clearfix">
        <div class="pull-left">
            <h4 class="text-blue h4">Update Company</h4>
        </div>

    </div>
    <form action="{{route('company.update',$data->id)}}" method="POST" enctype="multipart/form-data">
       @csrf
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Company Name</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" name="name" value="{{$data->name}}" placeholder="Title">
                {{-- <p style="color:red">@error('title'){{$message}}@enderror</p> --}}
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Email</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" placeholder="Email Here" type="text" name="email" value="{{$data->email}}">
                {{-- <p style="color:red">@error('discription'){{$message}}@enderror</p> --}}
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Website</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" placeholder="Email Here" type="text" name="website" value="{{$data->website}}">
                {{-- <p style="color:red">@error('discription'){{$message}}@enderror</p> --}}
            </div>
        </div>

        <div class="form-group">
            <label>logo</label>
            <div class="custom-file">
                <input type="file" name="logo" class="custom-file-input" >
                <img src="{{asset('/companyimage/'.$data->logo)}}" width="80px" alt="">

                <label class="custom-file-label">Choose file</label>
                <p style="color:red">@error('logo'){{$message}}@enderror</p>

            </div>
        </div><br><br><br>

            <div style="text-align:center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>

               </div>
            </div>
    </div>
 </div>



@endsection
