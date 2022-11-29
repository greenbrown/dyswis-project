@extends('layouts.stories')
@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Table -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- column -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="row">
                            <!-- title -->
                            <div class="d-md-flex">
                               
                                <div class="col">
                                    <input class="form-control" type="text" name="q" value="{{ $q }}" placeholder="Search name..." />
                                </div>
                                <div class="col">
                                    <button class="btn btn-success">Search</button>
                                </div>
                                <div class="ms-auto">
                                    <div class="text-end upgrade-btn">
                                        <a href="{{ route('stories.create') }}" class="btn btn-primary text-white"
                                            target="_self">Add Story</a>
                                    </div>
                                </div>
                            </div>
                            <!-- title -->
                            <div class="table-responsive">
                                <table class="table mb-0 table-hover align-middle text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">No</th>
                                            <th class="border-top-0">Name</th>
                                            <th class="border-top-0">Email</th>
                                            <th class="border-top-0">Title</th>
                                            <th class="border-top-0" colspan="3">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(count($stories) > 0) { ?>
                                        <?php
                                            $i = $stories->firstItem();
                                        ?>
                                        @foreach ($stories as $key => $value)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{$value->name}}</td>
                                            <td>{{$value->email}}</td>
                                            <td>{{$value->title}}</td>
                                            <td>

                                                <a class="btn btn-info text-white" href="{{ route('stories.show',$value->id) }}">Show</a> 

                                                <a class="btn btn-primary text-white" href="{{ route('stories.edit',$value->id) }}">Edit</a>

                                            </td>
                                        </tr>
                                        @endforeach
                                        <?php } else { ?>
                                            <td colspan="5"><p align="center">Belum Ada Data, Silakan Melakukan Penambahan Data</p></td>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
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
