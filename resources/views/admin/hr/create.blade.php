@extends('admin.template')

@section('content')
<div class="bg-white p-6 rounded-lg shadow">
    <h1 class="text-xl font-bold mb-4">Add Employee</h1>

    <form action="{{ route('hr.store') }}" method="POST">
        @csrf

        <input name="emp_id" placeholder="Employee ID" class="input"><br>
        <input name="nik_emp" placeholder="NIK" class="input"><br>
        <input name="name" placeholder="Name" class="input"><br>
        <input name="company" placeholder="Company" class="input"><br>
        <input name="division" placeholder="Division" class="input"><br>
        <input name="position" placeholder="Position" class="input"><br>
        <input name="email" placeholder="Email" class="input"><br>

        <button class="bg-blue-500 text-white px-4 py-2 rounded">
            Save
        </button>
    </form>
</div>
@endsection
