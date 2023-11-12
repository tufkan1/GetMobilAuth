
<!DOCTYPE html>
<html lang="en">
<head>
    <title>GetMobile Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="{{ asset("/css/bootstrap/bootstrap.min.css") }}">
</head>
<body>
<div class="">

    <div>
        <div class="position-relative navbar-menu d-none d-lg-block" style="z-index: 9999;">
            <div class="navbar-backdrop d-lg-none position-fixed top-0 end-0 bottom-0 start-0 bg-dark" style="opacity: .5"></div>
            <div class="position-fixed top-0 start-0 bottom-0 col-8 mw-xs px-6 pt-8 pb-8 bg-dark overflow-auto">
                <ul class="mb-8 mb-md-24 list-unstyled">
                    <li class="mb-2">
                        <a class="d-flex py-3 px-4 align-items-center text-decoration-none text-white fw-bold" href="#" data-bs-toggle="collapse" data-bs-target="#menus1-1">
                            <svg class="me-3" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.8125 16.25H2.1875" stroke="#7A899B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M7.8125 16.25V6.875H12.1875" stroke="#7A899B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M16.5625 3.125H12.1875V16.25H16.5625V3.125Z" stroke="#7A899B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M3.4375 16.25V10.625H7.8125" stroke="#7A899B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span>Departmanlar</span>
                            <span class="ms-auto">
                                <svg width="10" height="7" viewbox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M8.75 1.5L5 5.25L1.25 1.5" stroke="#7A899B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                              </span>
                        </a>
                        <div class="collapse ps-6" id="menus1-1">
                            <a class="d-flex mb-2 py-3 px-4 align-items-center text-decoration-none text-white fw-bold" href="{{ route("departments.index") }}">
                                <svg class="me-3" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#7A899B" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M20 4H4C3.44771 4 3 4.44772 3 5V19C3 19.5523 3.44772 20 4 20H20C20.5523 20 21 19.5523 21 19V5C21 4.44771 20.5523 4 20 4ZM4 2C2.34315 2 1 3.34315 1 5V19C1 20.6569 2.34315 22 4 22H20C21.6569 22 23 20.6569 23 19V5C23 3.34315 21.6569 2 20 2H4ZM6 7H8V9H6V7ZM11 7C10.4477 7 10 7.44772 10 8C10 8.55228 10.4477 9 11 9H17C17.5523 9 18 8.55228 18 8C18 7.44772 17.5523 7 17 7H11ZM8 11H6V13H8V11ZM10 12C10 11.4477 10.4477 11 11 11H17C17.5523 11 18 11.4477 18 12C18 12.5523 17.5523 13 17 13H11C10.4477 13 10 12.5523 10 12ZM8 15H6V17H8V15ZM10 16C10 15.4477 10.4477 15 11 15H17C17.5523 15 18 15.4477 18 16C18 16.5523 17.5523 17 17 17H11C10.4477 17 10 16.5523 10 16Z" fill="currentColor" /></svg>
                                <span>Listele</span>
                            </a>
                            <a class="d-flex mb-2 py-3 px-4 align-items-center text-decoration-none text-white fw-bold" href="{{ route("departments.create") }}">
                                <svg class="me-3" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#7A899B" xmlns="http://www.w3.org/2000/svg"><path d="M12 6C12.5523 6 13 6.44772 13 7V11H17C17.5523 11 18 11.4477 18 12C18 12.5523 17.5523 13 17 13H13V17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17V13H7C6.44772 13 6 12.5523 6 12C6 11.4477 6.44772 11 7 11H11V7C11 6.44772 11.4477 6 12 6Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M5 22C3.34315 22 2 20.6569 2 19V5C2 3.34315 3.34315 2 5 2H19C20.6569 2 22 3.34315 22 5V19C22 20.6569 20.6569 22 19 22H5ZM4 19C4 19.5523 4.44772 20 5 20H19C19.5523 20 20 19.5523 20 19V5C20 4.44772 19.5523 4 19 4H5C4.44772 4 4 4.44772 4 5V19Z" fill="currentColor" /></svg>
                                <span>Ekle</span>
                            </a>
                        </div>
                    </li>
                    <li class="mb-2">
                        <a class="d-flex py-3 px-4 align-items-center text-decoration-none text-white fw-bold" href="#" data-bs-toggle="collapse" data-bs-target="#menus1-2">
                            <svg class="me-3" width="20" height="20" viewBox="0 0 24 24" stroke="#7A899B" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 21.5L17.5 13L13 10L15 2.5L6.5 11L11 14L9 21.5Z" fill="currentColor" /></svg>
                            <span>Roller</span>
                            <span class="ms-auto">
                                <svg width="10" height="7" viewbox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M8.75 1.5L5 5.25L1.25 1.5" stroke="#7A899B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                              </span>
                        </a>
                        <div class="collapse ps-6" id="menus1-2">
                            <a class="d-flex mb-2 py-3 px-4 align-items-center text-decoration-none text-white fw-bold" href="{{ route("roles.index") }}">
                                <svg class="me-3" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#7A899B" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M20 4H4C3.44771 4 3 4.44772 3 5V19C3 19.5523 3.44772 20 4 20H20C20.5523 20 21 19.5523 21 19V5C21 4.44771 20.5523 4 20 4ZM4 2C2.34315 2 1 3.34315 1 5V19C1 20.6569 2.34315 22 4 22H20C21.6569 22 23 20.6569 23 19V5C23 3.34315 21.6569 2 20 2H4ZM6 7H8V9H6V7ZM11 7C10.4477 7 10 7.44772 10 8C10 8.55228 10.4477 9 11 9H17C17.5523 9 18 8.55228 18 8C18 7.44772 17.5523 7 17 7H11ZM8 11H6V13H8V11ZM10 12C10 11.4477 10.4477 11 11 11H17C17.5523 11 18 11.4477 18 12C18 12.5523 17.5523 13 17 13H11C10.4477 13 10 12.5523 10 12ZM8 15H6V17H8V15ZM10 16C10 15.4477 10.4477 15 11 15H17C17.5523 15 18 15.4477 18 16C18 16.5523 17.5523 17 17 17H11C10.4477 17 10 16.5523 10 16Z" fill="currentColor" /></svg>
                                <span>Listele</span>
                            </a>
                            <a class="d-flex mb-2 py-3 px-4 align-items-center text-decoration-none text-white fw-bold" href="{{ route("roles.create") }}">
                                <svg class="me-3" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#7A899B" xmlns="http://www.w3.org/2000/svg"><path d="M12 6C12.5523 6 13 6.44772 13 7V11H17C17.5523 11 18 11.4477 18 12C18 12.5523 17.5523 13 17 13H13V17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17V13H7C6.44772 13 6 12.5523 6 12C6 11.4477 6.44772 11 7 11H11V7C11 6.44772 11.4477 6 12 6Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M5 22C3.34315 22 2 20.6569 2 19V5C2 3.34315 3.34315 2 5 2H19C20.6569 2 22 3.34315 22 5V19C22 20.6569 20.6569 22 19 22H5ZM4 19C4 19.5523 4.44772 20 5 20H19C19.5523 20 20 19.5523 20 19V5C20 4.44772 19.5523 4 19 4H5C4.44772 4 4 4.44772 4 5V19Z" fill="currentColor" /></svg>
                                <span>Ekle</span>
                            </a>
                            <a class="d-flex mb-2 py-3 px-4 align-items-center text-decoration-none text-white fw-bold" href="{{ route("permissions.list") }}">
                                <svg class="me-3" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#7A899B" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M20 4H4C3.44771 4 3 4.44772 3 5V19C3 19.5523 3.44772 20 4 20H20C20.5523 20 21 19.5523 21 19V5C21 4.44771 20.5523 4 20 4ZM4 2C2.34315 2 1 3.34315 1 5V19C1 20.6569 2.34315 22 4 22H20C21.6569 22 23 20.6569 23 19V5C23 3.34315 21.6569 2 20 2H4ZM6 7H8V9H6V7ZM11 7C10.4477 7 10 7.44772 10 8C10 8.55228 10.4477 9 11 9H17C17.5523 9 18 8.55228 18 8C18 7.44772 17.5523 7 17 7H11ZM8 11H6V13H8V11ZM10 12C10 11.4477 10.4477 11 11 11H17C17.5523 11 18 11.4477 18 12C18 12.5523 17.5523 13 17 13H11C10.4477 13 10 12.5523 10 12ZM8 15H6V17H8V15ZM10 16C10 15.4477 10.4477 15 11 15H17C17.5523 15 18 15.4477 18 16C18 16.5523 17.5523 17 17 17H11C10.4477 17 10 16.5523 10 16Z" fill="currentColor" /></svg>
                                <span>İzinleri Listele</span>
                            </a>
                        </div>
                    </li>
                    <li class="mb-2">
                        <a class="d-flex py-3 px-4 align-items-center text-decoration-none text-white fw-bold" href="#" data-bs-toggle="collapse" data-bs-target="#menus1-3">
                            <svg class="me-3" width="20" height="20" stroke="#7A899B" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7ZM14 7C14 8.10457 13.1046 9 12 9C10.8954 9 10 8.10457 10 7C10 5.89543 10.8954 5 12 5C13.1046 5 14 5.89543 14 7Z" fill="currentColor" /><path d="M16 15C16 14.4477 15.5523 14 15 14H9C8.44772 14 8 14.4477 8 15V21H6V15C6 13.3431 7.34315 12 9 12H15C16.6569 12 18 13.3431 18 15V21H16V15Z" fill="currentColor" /></svg>
                            <span>Kullanıcılar</span>
                            <span class="ms-auto">
                                <svg width="10" height="7" viewbox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M8.75 1.5L5 5.25L1.25 1.5" stroke="#7A899B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                              </span>
                        </a>
                        <div class="collapse ps-6" id="menus1-3">
                            <a class="d-flex mb-2 py-3 px-4 align-items-center text-decoration-none text-white fw-bold" href="{{ route("users.index") }}">
                                <svg class="me-3" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#7A899B" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M20 4H4C3.44771 4 3 4.44772 3 5V19C3 19.5523 3.44772 20 4 20H20C20.5523 20 21 19.5523 21 19V5C21 4.44771 20.5523 4 20 4ZM4 2C2.34315 2 1 3.34315 1 5V19C1 20.6569 2.34315 22 4 22H20C21.6569 22 23 20.6569 23 19V5C23 3.34315 21.6569 2 20 2H4ZM6 7H8V9H6V7ZM11 7C10.4477 7 10 7.44772 10 8C10 8.55228 10.4477 9 11 9H17C17.5523 9 18 8.55228 18 8C18 7.44772 17.5523 7 17 7H11ZM8 11H6V13H8V11ZM10 12C10 11.4477 10.4477 11 11 11H17C17.5523 11 18 11.4477 18 12C18 12.5523 17.5523 13 17 13H11C10.4477 13 10 12.5523 10 12ZM8 15H6V17H8V15ZM10 16C10 15.4477 10.4477 15 11 15H17C17.5523 15 18 15.4477 18 16C18 16.5523 17.5523 17 17 17H11C10.4477 17 10 16.5523 10 16Z" fill="currentColor" /></svg>
                                <span>Listele</span>
                            </a>
                            <a class="d-flex mb-2 py-3 px-4 align-items-center text-decoration-none text-white fw-bold" href="{{ route("users.create") }}">
                                <svg class="me-3" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#7A899B" xmlns="http://www.w3.org/2000/svg"><path d="M12 6C12.5523 6 13 6.44772 13 7V11H17C17.5523 11 18 11.4477 18 12C18 12.5523 17.5523 13 17 13H13V17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17V13H7C6.44772 13 6 12.5523 6 12C6 11.4477 6.44772 11 7 11H11V7C11 6.44772 11.4477 6 12 6Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M5 22C3.34315 22 2 20.6569 2 19V5C2 3.34315 3.34315 2 5 2H19C20.6569 2 22 3.34315 22 5V19C22 20.6569 20.6569 22 19 22H5ZM4 19C4 19.5523 4.44772 20 5 20H19C19.5523 20 20 19.5523 20 19V5C20 4.44772 19.5523 4 19 4H5C4.44772 4 4 4.44772 4 5V19Z" fill="currentColor" /></svg>
                                <span>Ekle</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="mx-auto ms-lg-80 ps-lg-4">
            <section class="py-6">
                <div class="container">
            @yield("content")
                </div>
            </section>
        </div>
    </div>
</div>
<script src="{{ asset("/js/bootstrap/bootstrap.bundle.min.js") }}"></script>
<script src="{{ asset("/js/main.js") }}"></script>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="{{ asset("/js/charts-demo.js") }}"></script>
</body>
</html>
