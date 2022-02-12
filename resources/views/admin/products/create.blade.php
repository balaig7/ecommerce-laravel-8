  @extends('layouts.admin.master')

  <!-- Start right Content here -->
  {{-- @dd($categories) --}}
    @section('admin.content')
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading"><h3 class="panel-title">Create Category</h3></div>
                                    <div class="panel-body">
                                        <form method="POST">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Name</label>
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                            <button type="submit" class="btn btn-dark waves-effect waves-light">Submit</button>

                                        </form>
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
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
