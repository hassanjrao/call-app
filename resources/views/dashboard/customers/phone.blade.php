@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Phone Numbers</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <a href="{{ route('phone.create') }}" class="btn btn-primary float-right">Add New Number</a>
                </div>

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">User List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Numbers</th>
                                    <th>Country</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($phoneNumbers as $phoneNumber)
                                    <tr>
                                        <td>{{ $phoneNumber->number }}</td>
                                        <td>USA</td>
                                        <td>
                                            <a href="{{ route('phone.edit', $phoneNumber->id) }}"
                                               class="btn btn-xs btn-info">View</a>
                                            <button type="button" class="btn btn-xs btn-danger"
                                                    onclick="confirmDelete({{ $phoneNumber->id }})">Delete</button>
                                            <form id="delete-form-{{ $phoneNumber->id }}"
                                                  action="{{ route('phone.destroy', $phoneNumber->id) }}" method="POST"
                                                  style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- Your dashboard content goes here -->
        </div><!-- /.container-fluid -->
    </section>
    <div class="col-sm-6">
        <a href="{{ route('sms') }}" class="btn btn-primary float-right">Send An Sms </a>
    </div><!-- /.col -->
    <!-- /.content -->
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            bsCustomFileInput.init();
        });



    {{-- SWEETALERT --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function confirmDelete(userId) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + userId).submit();
                }
            });
        }
    </script>

@endsection



