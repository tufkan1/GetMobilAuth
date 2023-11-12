@extends("layout._lay")
@section("content")
    <form action="{{ route("users.update", $user) }}" method="post">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label class="form-label">Kullanıcı Adı</label>
            <input type="text" class="form-control" autocomplete="false" name="name" value="{{ $user->name }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" autocomplete="false" name="email" value="{{ $user->email }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Kullanıcı Departmanı</label>
            <select name="department_id" class="form-control" autocomplete="false">
                <option value="" selected disabled>Lütfen Seçiniz</option>
                @foreach($departments as $department)
                    <option value="{{ $department->id }}" {{ $user->department_id == $department->id ? "selected" : "" }}>{{ $department->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Kullanıcı Rolü</label>
            <select name="role_id" class="form-control" autocomplete="false">
                <option value="" selected disabled>Lütfen Seçiniz</option>
                @foreach($roles as $role)
                    <option value="{{ $role->id }}" {{ $user->role_id == $role->id ? "selected" : "" }}>{{ $role->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Kullanıcı Şifresi</label>
            <input type="password" class="form-control" autocomplete="false" name="password" value="" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
