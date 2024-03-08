@extends('mainlayout')
    @section('meta_title')
    Add New Student
    @endsection

    @section('content')
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-md shadow">
        <h1 class="text-2xl font-bold mb-4">Add New Student</h1>

        <form action="{{ isset($student) ? route('students.update', $student->id) : route('students.store') }}" method="POST">
            @csrf
            @if(isset($student))
            @method('PUT')
            @endif
            <div class="mb-4">
                <label for="name" class="block text-gray-600">Name:</label>
                <input type="text" id="name" name="name" value="{{ isset($student) ? $student->name : old('name') }}" class="mt-1 p-2 w-full border rounded-md" required>
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-600">Email:</label>
                <input type="email" id="email" name="email" value="{{ isset($student) ? $student->email : old('email') }}" class="mt-1 p-2 w-full border rounded-md" required>
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="age" class="block text-gray-600">Age:</label>
                <input type="number" id="age" name="age" value="{{ isset($student) ? $student->age : old('age') }}" class="mt-1 p-2 w-full border rounded-md" required>
                @error('age')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mt-6">
                <button type="submit" class="bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">
                    {{ isset($student) ? 'Update Student' : 'Add Student' }}
                </button>
            </div>
        </form>
    </div>
@endsection
