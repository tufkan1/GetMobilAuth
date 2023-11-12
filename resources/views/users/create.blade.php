@extends("layout._lay")
@section("content")
    <form action="{{ route("users.store") }}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Kullanıcı Adı</label>
            <input type="text" class="form-control" autocomplete="false" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" autocomplete="false" name="email">
        </div>
        <div class="mb-3">
            <label class="form-label">Kullanıcı Departmanı</label>
            <select name="department_id" class="form-control" autocomplete="false">
                <option value="" selected disabled>Lütfen Seçiniz</option>
                @foreach($departments as $department)
                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Kullanıcı Rolü</label>
            <select name="role_id" class="form-control" autocomplete="false">
                <option value="" selected disabled>Lütfen Seçiniz</option>
                @foreach($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Kullanıcı Şifresi</label>
            <input type="password" class="form-control" autocomplete="false" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
