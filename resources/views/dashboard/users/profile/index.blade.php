@extends('layouts.app')

@section('content')
    <div class="card m-5">
        <div class="card-header border-transparent">
            <h3 class="card-title">My Profile</h3>


        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table m-0">
                    <tbody>
                        <tr>
                            <th>First Name</th>
                            <td>{{ Auth::user()->first_name }}</td>
                        </tr>
                        <tr>
                            <th>Last Name</th>
                            <td>{{ Auth::user()->last_name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ Auth::user()->email }}</td>
                        </tr>
                        @if( Auth::user()->role->roleName  == "customer")
                        <tr>
                            <th>Phone Number</th>
                            <td>{{ Auth::user()->customer->number }}</td>
                        </tr>
                        @endif
                        <!-- Add more attributes as needed -->
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            <a href="{{ route('profile.edit') }}" class="btn btn-sm btn-info float-left">Edit Profile</a>
            <a href="{{ route('dashboard') }}" class="btn btn-sm btn-secondary float-right">Back to Dashboard</a>
        </div>
        <!-- /.card-footer -->
    </div>
@endsection
