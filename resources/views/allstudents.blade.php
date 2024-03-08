@extends('mainlayout')
    @section('content')
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-md shadow">
        <h1 class="text-2xl font-bold mb-4">All Students</h1>

        @if(count($students) > 0)
            <table class="min-w-full border border-gray-300">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">ID</th>
                        <th class="py-2 px-4 border-b">Name</th>
                        <th class="py-2 px-4 border-b">Email</th>
                        <th class="py-2 px-4 border-b">Age</th>
                        <th class="py-2 px-4 border-b">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                        <tr>
                            <td class="py-2 px-4 border-b">{{ $student->id }}</td>
                            <td class="py-2 px-4 border-b">
                                <!-- <a href="/students/{{ $student->id }}" class="text-blue-500 hover:underline">
                                    {{ $student->name }}
                                </a> -->
                                <a href="{{ route('students.show', $student->id) }}" class="text-blue-500 hover:underline">
                                    {{ $student->name }}
                                </a>

                            </td>
                            <td class="py-2 px-4 border-b">{{ $student->email }}</td>
                            <td class="py-2 px-4 border-b">{{ $student->age }}</td>
                            <td class="py-2 px-4 border-b">
                                <a href="{{ route('students.edit', $student->id) }}" class="text-blue-500 hover:text-blue-900">Edit</a>/<form action="{{ route('students.destroy', $student->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="text-red-500 hover:text-red-900">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>


            <div class="mt-4">
                {{ $students->links() }}
            </div>
            <a href="/" class="text-blue-500 hover:underline">
                Go to main
            </a>
        @else
            <p>No students found.</p>
        @endif
    </div>
    @endsection
