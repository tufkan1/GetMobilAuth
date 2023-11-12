@extends("layout._lay")
@section("content")
    @foreach($departments as $department)
        <div class="p-8 mb-4 border rounded-2">
            <div class="row justify-content-between align-items-center">
                <div class="col-12 col-lg-auto mb-8 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <img src="https://ui-avatars.com/api/?background=random&amp;bold=true&amp;background=E1F1F9&amp;color=000&amp;name={{ $department->name }}" class="d-inline-flex flex-shrink-0 align-items-center justify-content-center me-4 rounded-2 bg-primary-light text-primary" style="width: 48px; height: 48px;" />
                        <div>
                            <p class="mb-0 text-dark">{{ $department->name }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 mt-8 mt-xl-0 col-xl-auto d-flex flex-row">
                    <a class="btn btn-outline-light d-inline-flex align-items-center justify-content-center p-0 me-2 shadow rounded-2" href="{{ route("departments.edit", $department) }}" style="width: 40px; height: 40px;">
                        <svg width="12" height="12" stroke="#7A899B" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.2635 2.29289C20.873 1.90237 20.2398 1.90237 19.8493 2.29289L18.9769 3.16525C17.8618 2.63254 16.4857 2.82801 15.5621 3.75165L4.95549 14.3582L10.6123 20.0151L21.2189 9.4085C22.1426 8.48486 22.338 7.1088 21.8053 5.99367L22.6777 5.12132C23.0682 4.7308 23.0682 4.09763 22.6777 3.70711L21.2635 2.29289ZM16.9955 10.8035L10.6123 17.1867L7.78392 14.3582L14.1671 7.9751L16.9955 10.8035ZM18.8138 8.98525L19.8047 7.99429C20.1953 7.60376 20.1953 6.9706 19.8047 6.58007L18.3905 5.16586C18 4.77534 17.3668 4.77534 16.9763 5.16586L15.9853 6.15683L18.8138 8.98525Z" fill="currentColor" /><path d="M2 22.9502L4.12171 15.1717L9.77817 20.8289L2 22.9502Z" fill="currentColor" /></svg>
                    </a>
                    <form action="{{ route("departments.destroy", $department) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <input type="hidden" name="id" value="{{ $department->id }}">

                        <button type="submit" class="btn d-inline-flex align-items-center justify-content-center p-0 btn-outline-light shadow rounded-2" style="width: 40px; height: 40px;">
                            <svg width="12" height="12" viewBox="0 0 24 24" stroke="#7A899B" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 11C7.44772 11 7 11.4477 7 12C7 12.5523 7.44772 13 8 13H16C16.5523 13 17 12.5523 17 12C17 11.4477 16.5523 11 16 11H8Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12ZM21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" fill="currentColor" /></svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
