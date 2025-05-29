@extends ('layout.app')

@section('content')
    <div class="container">

        <h1 class="justify-content-center">Basic CRUD</h1>

        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('basic_crud.create') }}" class="btn btn-primary mb-3">Create New Item</a>
            </div>


            @include('_message')
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href="{{ route('basic_crud.edit', $user->id) }}" class="btn btn-success"
                                        onclick="return confirm('do you want')">
                                        Edit
                                    </a>

                                    <a href="{{ route('basic_crud.delete', $user->id) }}" class="btn btn-danger"
                                        onclick="return confirm('are you sure?')">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>


            </div>
        </div>
    </div>
@endsection
