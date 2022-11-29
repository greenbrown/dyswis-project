@extends('layouts.stories')
@section('breadcrumb')
<ul class="navbar-nav float-start me-auto">
    <!-- ============================================================== -->
    <!-- Breadcrumb -->
    <!-- ============================================================== -->
    <li class="nav-item search-box"> 
    
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 d-flex align-items-center">
            <li class="breadcrumb-item"><a href="index.html" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
            <li class="breadcrumb-item active" aria-current="page">Stories</li>
        </ol>
        </nav>
    <h1 class="mb-0 fw-bold">Write Your Stories</h1> 

    </li>
</ul>
@endsection
@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Table -->
        <!-- ============================================================== -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="form-horizontal form-material mx-2" action="{{ route('stories.store') }}" method="POST">
                    @csrf
                        <div class="form-group">
                            <label class="col-md-12">Author</label>
                            <div class="col-md-12">
                                <input id="name" name="name" type="text" placeholder="Author Name"
                                    class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Email</label>
                            <div class="col-md-12">
                                <input id="emai" name="email" type="email" placeholder="Email"
                                    class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Title</label>
                            <div class="col-md-12">
                                <input id="title" name="title" type="text" placeholder="Title"
                                    class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Story</label>
                            <div class="form-check form-switch">
                                <textarea name="story" id="story" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button class="btn btn-success text-white">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Table -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
<br>
@endsection
@section('script')
<script src="//cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
<script>
   var konten = document.getElementById("story");
     CKEDITOR.replace(konten,{
     language:'en-gb'
   });
   CKEDITOR.config.allowedContent = true;
</script>
@endsection