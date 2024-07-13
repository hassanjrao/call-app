@extends('layouts.app')

@section('content')
    <div class="card m-5">
        <div class="card-header border-transparent">
            <h3 class="card-title">User Details</h3>


        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table m-0">
                    <tbody>
                    <tr>
                        <th>First Name</th>
                        <td>{{ $user->first_name }}</td>
                    </tr>
                    <tr>
                        <th>Last Name</th>
                        <td>{{ $user->last_name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $user->email }}</td>
                    </tr>
                    @if( $user->role->roleName  == "customer")
                        <tr>
                            <th>Phone Number</th>
                            <td>{{ $user->customer->number }}</td>
                        </tr>
                        <tr>
                            <th>Country</th>
                            <td>{{ $user->customer->country }}</td>
                        </tr>
                        <tr>
                            <th>Plan</th>
                            <td>{{ $user->customer->plan->name }}</td>
                        </tr>
                        <tr>
                            <th>Payment Method</th>
                            <td>{{ $user->customer->paymentMethod->methodType}}</td>
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
            <a href="{{ route('users.edit',$user->id) }}" class="btn btn-sm btn-info float-left">Edit User</a>
            <a href="{{ route('users.index') }}" class="btn btn-sm btn-secondary float-right">Back to User List</a>
        </div>
        <!-- /.card-footer -->
    </div>
@endsection
