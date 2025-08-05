@extends('compoent.master')
@section('title', 'welcome page')
@section('style')

@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create Student</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Create Student</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            {{--     @if ($errors->any())
                     <div class="alert alert-danger">
                         <ul>
                             @foreach ($errors->all() as $error)
                                 <li>{{ $error }}</li>
                             @endforeach
                         </ul>
                     </div>
                 @endif--}}

            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Create Student</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/student/update/{{$student->id}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input value="{{$student->name}}" type="text" class="form-control" id="Name" placeholder="Enter Name" name="Name">
                                    @error('Name')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input value="{{$student->email}}" type="text" class="form-control" id="exampleInputEmail1" name="Email" placeholder="Enter email">
                                    @error('Email')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input value="{{$student->password}}" type="password" class="form-control" id="exampleInputPassword1" name="Password" placeholder="Password">
                                    @error('Password')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                {{--                                <div class="form-group">--}}
                                {{--                                    <label for="exampleInputFile">File input</label>--}}
                                {{--                                    <div class="input-group">--}}
                                {{--                                        <div class="custom-file">--}}
                                {{--                                            <input type="file" class="custom-file-input" id="exampleInputFile">--}}
                                {{--                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="input-group-append">--}}
                                {{--                                            <span class="input-group-text">Upload</span>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                {{--   <div class="form-check">
                                       <label class="form-check-label" >Interest</label>
                                       <br>

                                       <input type="checkbox" class="form-check-input" id="Coding" name="Interest[]" value="Coding">
                                       <label class="form-check-label" for="Coding">Coding</label>
                                       <br>
                                       <input type="checkbox" class="form-check-input" id="Bloging" name="Interest[]" value="Bloging">
                                       <label class="form-check-label" for="Bloging">Bloging</label>
                                       <br>
                                       <input type="checkbox" class="form-check-input" id="Programing" name="Interest[]" value="Programing">
                                       <label class="form-check-label" for="Programing">Programing</label>
                                   </div>--}}
                                {{--   @error('Interest')
                                   <small class="text-danger">{{ $message }}</small>
                                   @enderror--}}
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->


                </div>
                <!--/.col (left) -->
                <!-- right column -->

                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
