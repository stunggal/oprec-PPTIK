@extends('layout.main')
@section('content')
    <!-- Recent Sales -->
    <div class="col-12">
        <div class="card recent-sales overflow-auto">
            <div class="card-body">
                <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                <table class="table table-borderless datatable">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Period</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><a href="#">#2457</a></th>
                            <td>$64</td>
                            <td><span class="badge bg-success">Approved</span></td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">View</a>
                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>
    </div><!-- End Recent Sales -->
@endsection
