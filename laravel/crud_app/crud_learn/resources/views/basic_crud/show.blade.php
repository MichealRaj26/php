@extends('layout.app')

@section('content')
    <div class="container">
        <h1 class="justify-content-center">Create New Item</h1>

        <form>


            <div class="card">
                <div class="container mb-4">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter your name"
                        value="{{ old('name', $basicCrud->name) }}" readonly>
                </div>

                <div class="container mb-4">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter your email"
                        value="{{ old('email', $basicCrud->email) }}" readonly>
                </div>

                <div class="container mb-4">
                    <label for="phone">Phone</label>
                    <input type="number" class="form-control" name="phone" placeholder="Enter your phone number"
                        value="{{ old('phone', $basicCrud->phone) }}" readonly>
                </div>

                <div class="container mb-4">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" name="dob" placeholder="Enter your DOB" readonly
                        value="{{ old('dob', $basicCrud->dob) }}">
                </div>

                <div class="container mb-4">
                    <label for="age">Age</label>
                    <input type="number" class="form-control" name="age" placeholder="Enter your Age"
                        value="{{ old('age', $basicCrud->age) }}" readonly>
                </div>

                <div class="container mb-4">
                    <label for="address">Address</label>
                    <textarea name="address" class="form-control" readonly>{{ old('address', $basicCrud->address) }}</textarea>
                </div>

                <div class="container mb-4">
                    <a href="{{ route('basic_crud.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>

        </form>

    </div>
@endsection
