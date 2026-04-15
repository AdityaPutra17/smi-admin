@extends('admin.template')

@section('content')

<div class="container mx-auto px-4">
    <div class="bg-white shadow-lg rounded-lg p-6 border border-gray-200">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Edit Data Karyawan</h2>

        <form id="employeeForm" method="POST" action="{{ route('admin.update', $employee->id) }}" class="space-y-6">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                {{-- EMP ID --}}
                <div>
                    <label class="text-sm font-medium">Employee ID</label>
                    {{-- <input type="text" name="emp_id" value="{{ old('emp_id', $employee->emp_id) }}" class="form-input w-full" readonly> --}}
                    <p>{{$employee->emp_id}}</p>
                </div>

                {{-- NIK --}}
                <div>
                    <label class="text-sm font-medium">NIK</label>
                    {{-- <input type="text" name="nik_emp" value="{{ old('nik_emp', $employee->nik_emp) }}" class="form-input w-full" readonly> --}}
                    <p>{{$employee->nik_emp}}</p>
                </div>

                {{-- NAME --}}
                <div>
                    <label class="text-sm font-medium">Nama</label>
                    <input type="text" name="name" value="{{ old('name', $employee->name) }}" class="form-input w-full editable" readonly>
                </div>

                {{-- EMAIL --}}
                <div>
                    <label class="text-sm font-medium">Email</label>
                    <input type="email" name="email" value="{{ old('email', $employee->email) }}" class="form-input w-full editable" readonly>
                </div>

                {{-- PHONE --}}
                <div>
                    <label class="text-sm font-medium">Phone</label>
                    <input type="text" name="phone" value="{{ old('phone', $employee->phone) }}" class="form-input w-full editable" readonly>
                </div>

                {{-- GENDER --}}
                <div>
                    <label class="text-sm font-medium">Gender</label>
                    <select name="gender" class="form-input w-full editable" disabled>
                        <option value="">-- Pilih --</option>
                        <option value="Laki-laki" {{ $employee->gender == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="Perempuan" {{ $employee->gender == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>

                {{-- BIRTH --}}
                <div>
                    <label class="text-sm font-medium">Tanggal Lahir</label>
                    <input type="date" name="birth_date" value="{{ $employee->birth_date }}" class="form-input w-full editable" readonly>
                </div>

                <div>
                    <label class="text-sm font-medium">Tempat Lahir</label>
                    <input type="text" name="birth_place" value="{{ $employee->birth_place }}" class="form-input w-full editable" readonly>
                </div>

                {{-- STATUS --}}
                <div>
                    <label class="text-sm font-medium">Status Pernikahan</label>
                    <input type="text" name="marital_status" value="{{ $employee->marital_status }}" class="form-input w-full editable" readonly>
                </div>

                <div>
                    <label class="text-sm font-medium">Pendidikan</label>
                    <input type="text" name="education" value="{{ $employee->education }}" class="form-input w-full editable" readonly>
                </div>

                {{-- KTP --}}
                <div>
                    <label class="text-sm font-medium">No KTP</label>
                    <input type="text" name="ktp_number" value="{{ $employee->ktp_number }}" class="form-input w-full editable" readonly>
                </div>

                <div>
                    <label class="text-sm font-medium">Alamat</label>
                    <textarea name="address" class="form-input w-full editable" readonly>{{ $employee->address }}</textarea>
                </div>

                <div>
                    <label class="text-sm font-medium">Domisili</label>
                    <input type="text" name="residence" value="{{ $employee->residence }}" class="form-input w-full editable" readonly>
                </div>

                {{-- COMPANY --}}
                <div>
                    <label class="text-sm font-medium">Company</label>
                    <input type="text" name="company" value="{{ $employee->company }}" class="form-input w-full editable" readonly>
                </div>

                <div>
                    <label class="text-sm font-medium">Branch</label>
                    <input type="text" name="branch" value="{{ $employee->branch }}" class="form-input w-full editable" readonly>
                </div>

                <div>
                    <label class="text-sm font-medium">Location</label>
                    <input type="text" name="location" value="{{ $employee->location }}" class="form-input w-full editable" readonly>
                </div>

                <div>
                    <label class="text-sm font-medium">Division</label>
                    <input type="text" name="division" value="{{ $employee->division }}" class="form-input w-full editable" readonly>
                </div>

                <div>
                    <label class="text-sm font-medium">Position</label>
                    <input type="text" name="position" value="{{ $employee->position }}" class="form-input w-full editable" readonly>
                </div>

                {{-- CONTRACT --}}
                <div>
                    <label class="text-sm font-medium">Join Date</label>
                    <input type="date" name="join_date" value="{{ $employee->join_date }}" class="form-input w-full editable" readonly>
                </div>

                <div>
                    <label class="text-sm font-medium">Contract Start</label>
                    <input type="date" name="contract_start" value="{{ $employee->contract_start }}" class="form-input w-full editable" readonly>
                </div>

                <div>
                    <label class="text-sm font-medium">Contract End</label>
                    <input type="date" name="contract_end" value="{{ $employee->contract_end }}" class="form-input w-full editable" readonly>
                </div>

                <div>
                    <label class="text-sm font-medium">Contract Type</label>
                    <input type="text" name="contract_type" value="{{ $employee->contract_type }}" class="form-input w-full editable" readonly>
                </div>

                {{-- ATTENDANCE --}}
                <div>
                    <label class="text-sm font-medium">Attendance Type</label>
                    <input type="text" name="attendance_type" value="{{ $employee->attendance_type }}" class="form-input w-full editable" readonly>
                </div>

                {{-- STATUS --}}
                <div>
                    <label class="text-sm font-medium">Status</label>
                    <select name="status" class="form-input w-full">
                        <option value="Active" {{ $employee->status == 'Active' ? 'selected' : '' }}>Active</option>
                        <option value="Inactive" {{ $employee->status == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>

            </div>

            <div class="flex justify-end mt-6 gap-3">
        
                <button type="button" id="editBtn"
                    class="bg-yellow-500 text-white px-6 py-2 rounded-lg">
                    Edit
                </button>
        
                <button type="submit" id="saveBtn"
                    class="bg-blue-600 text-white px-6 py-2 rounded-lg hidden">
                    Simpan
                </button>
        
                <button type="button" id="cancelBtn"
                    class="bg-gray-500 text-white px-6 py-2 rounded-lg hidden">
                    Batal
                </button>
        
            </div>
        </form>
    </div>

   <script>
        const editBtn = document.getElementById('editBtn');
        const saveBtn = document.getElementById('saveBtn');
        const cancelBtn = document.getElementById('cancelBtn');

        const inputs = document.querySelectorAll('.editable');

        editBtn.addEventListener('click', () => {
            inputs.forEach(el => {
                el.removeAttribute('readonly');
                el.removeAttribute('disabled');
            });

            editBtn.classList.add('hidden');
            saveBtn.classList.remove('hidden');
            cancelBtn.classList.remove('hidden');
        });

        cancelBtn.addEventListener('click', () => {
            location.reload(); // reset ke awal
        });
    </script> 

</div>

@endsection