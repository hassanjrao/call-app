@extends('layouts.app')

@section('content')
    <div class="card m-5">
        <div class="card-header border-transparent">
            <h3 class="card-title">Number Details</h3>


        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table m-0">
                    <tbody>
                    <tr>
                        <th>Number</th>
                        <td>{{$number->number }}</td>
                    </tr>
                    <tr>
                        <th>Country</th>
                        <td>USA</td>
                    </tr>


                    <!-- Add more attributes as needed -->
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            <a href="{{ route('phone.index') }}" class="btn btn-sm btn-secondary float-right">Back to Phone Numbers List</a>
        </div>
        <!-- /.card-footer -->
    </div>
@endsection
