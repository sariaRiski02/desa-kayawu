@extends('app.app')
@section('title', 'dashboard')

@section('content')

<!-- Form for Family -->
<div class="max-w-2xl mx-auto p-4 bg-white shadow-md rounded-md">
    <h2 class="text-2xl font-bold mb-4">Add Family</h2>
    <form action="/families" method="POST">
        <div class="mb-4">
            <label for="kk" class="block text-sm font-medium">Family Card Number (KK)</label>
            <input type="text" id="kk" name="kk" class="input input-bordered w-full" placeholder="Enter KK number" required />
        </div>

        <div class="mb-4">
            <label for="name_family_head" class="block text-sm font-medium">Family Head Name</label>
            <input type="text" id="name_family_head" name="name_family_head" class="input input-bordered w-full" placeholder="Enter head of family name" required />
        </div>

        <button type="submit" class="btn btn-primary w-full">Save Family</button>
    </form>
</div>

<!-- Form for Member Family -->
<div class="max-w-2xl mx-auto p-4 bg-white shadow-md rounded-md mt-6">
    <h2 class="text-2xl font-bold mb-4">Add Member Family</h2>
    <form action="/member-families" method="POST">
        <div class="mb-4">
            <label for="id_family" class="block text-sm font-medium">Family</label>
            <select id="id_family" name="id_family" class="select select-bordered w-full" required>
                <option value="" disabled selected>Select Family</option>
                <!-- Populate dynamically -->
                <option value="1">Family 1</option>
                <option value="2">Family 2</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium">Name</label>
            <input type="text" id="name" name="name" class="input input-bordered w-full" placeholder="Enter member name" required />
        </div>

        <div class="mb-4">
            <label for="gender" class="block text-sm font-medium">Gender</label>
            <select id="gender" name="gender" class="select select-bordered w-full" required>
                <option value="" disabled selected>Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="address" class="block text-sm font-medium">Address</label>
            <input type="text" id="address" name="address" class="input input-bordered w-full" placeholder="Enter address" required />
        </div>

        <div class="mb-4">
            <label for="marital_status" class="block text-sm font-medium">Marital Status</label>
            <input type="text" id="marital_status" name="marital_status" class="input input-bordered w-full" placeholder="Enter marital status" />
        </div>

        <div class="mb-4">
            <label for="birth_place" class="block text-sm font-medium">Birth Place</label>
            <input type="text" id="birth_place" name="birth_place" class="input input-bordered w-full" placeholder="Enter birth place" />
        </div>

        <div class="mb-4">
            <label for="birth_date" class="block text-sm font-medium">Birth Date</label>
            <input type="date" id="birth_date" name="birth_date" class="input input-bordered w-full" />
        </div>

        <div class="mb-4">
            <label for="religion" class="block text-sm font-medium">Religion</label>
            <input type="text" id="religion" name="religion" class="input input-bordered w-full" placeholder="Enter religion" />
        </div>

        <div class="mb-4">
            <label for="education_level" class="block text-sm font-medium">Education Level</label>
            <input type="text" id="education_level" name="education_level" class="input input-bordered w-full" placeholder="Enter education level" />
        </div>

        <div class="mb-4">
            <label for="occupation" class="block text-sm font-medium">Occupation</label>
            <input type="text" id="occupation" name="occupation" class="input input-bordered w-full" placeholder="Enter occupation" />
        </div>

        <div class="mb-4">
            <label for="family_position" class="block text-sm font-medium">Family Position</label>
            <input type="text" id="family_position" name="family_position" class="input input-bordered w-full" placeholder="Enter family position" required />
        </div>

        <div class="mb-4">
            <label for="nik" class="block text-sm font-medium">NIK</label>
            <input type="text" id="nik" name="nik" class="input input-bordered w-full" placeholder="Enter NIK" required />
        </div>

        <button type="submit" class="btn btn-primary w-full">Save Member</button>
    </form>
</div>

    
@endsection
    
