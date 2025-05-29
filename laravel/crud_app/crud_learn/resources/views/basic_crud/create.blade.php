@extends ('layout.app')

@section('content')
    <div class="container">
        <h1 class="justify-content-center">Create New Item</h1>

        <form action="{{ route('basic_crud.store') }}" method="post">

            @csrf

            @if ($errors->any())
                <div class="alert alert-primary" role="alert">
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                </div>
            @endif

            <div class="card">
                <div class="container mb-4">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter your name"
                        value="{{ old('name') }}" required>
                </div>

                <div class="container mb-4">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter your email"
                        value="{{ old('email') }}" required>
                </div>

                <div class="container mb-4">
                    <label for="phone">Phone</label>
                    <input type="number" class="form-control" name="phone" placeholder="Enter your phone number"
                        value="{{ old('phone') }}" required>
                </div>

                <div class="container mb-4">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" name="dob" placeholder="Enter your DOB" required
                        value="{{ old('dob') }}">
                </div>

                <div class="container mb-4">
                    <label for="age">Age</label>
                    <input type="number" class="form-control" name="age" placeholder="Enter your Age"
                        value="{{ old('age') }}" required>
                </div>

                <div class="container mb-4">
                    <label for="address">Address</label>
                    <textarea name="address" class="form-control">{{ old('address') }}</textarea>
                </div>

                <div class="container mb-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>


        </form>

    </div>
@endsection
