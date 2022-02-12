  @extends('layouts.admin.master')

  <!-- Start right Content here -->
  {{-- @dd($categories) --}}
    @section('admin.content')
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading d-flex">
                                        <h3 class="panel-title">Categories</h3>
                                        <a href="{{url('/admin/products/create')}}" class="btn btn-dark">Create</a>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table id="datatable" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>S.No</th>
                                                            <th>Name</th>
                                                            <th>Action</th>
                                                            {{-- <th>Age</th>
                                                            <th>Start date</th>
                                                            <th>Salary</th> --}}
                                                        </tr>
                                                    </thead>


                                                    <tbody>
                                                    @foreach($categories as $sno => $value)
                                                        <tr>
                                                            <td>$sno+1</td>
                                                            <td>$value->name</td>
                                                            <td><a href="">Edit</a></td>
                                                            <td><a href="">Delete</a></td>
                                                            {{-- <td>61</td>
                                                            <td>2011/04/25</td>
                                                            <td>$320,800</td> --}}
                                                        </tr>
                                                    @endforeach
                                                        
                                                        
                                                        
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- End Row -->



                    </div> <!-- container -->

                </div> <!-- content -->

                {{-- <footer class="footer">
                    2016 - 2020 © Xadmino.
                </footer> --}}

            </div>
            <!-- End Right content here -->
   @endsection
   @push('custom-scripts')
    <script type="text/javascript">
        $('#datatable').dataTable();
    </script>
   @endpush
