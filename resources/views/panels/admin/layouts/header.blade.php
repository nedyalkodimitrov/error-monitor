<!--Main Navigation-->
<header>
    <!-- Sidebar -->
    <nav
        id="sidebarMenu"
        class="collapse d-lg-block sidebar collapse bg-white"
    >
        <div class="position-sticky">
            <div class="list-group list-group-flush mx-3 mt-4">
                <a href="{{route("admin.app.showAll")}}"
                   class="list-group-item list-group-item-action py-2 ripple">
                    <i class="fas fa-building fa-fw me-3"></i><span>{{__("Apps")}}</span>
                </a>

{{--                <a href="#"--}}
{{--                   class="list-group-item list-group-item-action py-2 ripple">--}}
{{--                    <i class="fas fa-building fa-fw me-3"></i><span>{{__("Apps")}}</span>--}}
{{--                </a>--}}
                <a href="#"
                        class="list-group-item list-group-item-action py-2 ripple">
                    <i class="fas fa-building fa-fw me-3"></i><span>{{__("Technologies")}}</span>
                </a> <a href="#"
                        class="list-group-item list-group-item-action py-2 ripple">
                    <i class="fas fa-building fa-fw me-3"></i><span>{{__("Roles")}}</span>
                </a>
                <a href="#"
                   class="list-group-item list-group-item-action py-2 ripple">
                    <i class="fas fa-users fa-fw me-3"></i><span>{{__("Users")}}</span>
                </a>

            </div>
        </div>
    </nav>
    <!-- Sidebar -->

    <!-- Navbar -->
    <nav
        id="main-navbar"
        class="navbar navbar-expand-lg navbar-light bg-white fixed-top"
    >
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#sidebarMenu"
                aria-controls="sidebarMenu"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <i class="fas fa-bars"></i>
            </button>

            <!-- Brand -->
            <a class="navbar-brand" href="#">
                <h2>Error Tracking</h2>
            </a>
            <!-- Search form -->

            <!-- Right links -->
            <ul class="navbar-nav ms-auto d-flex flex-row">
                <!-- Notification dropdown -->

                <!-- Icon dropdown -->
                <li class="nav-item dropdown">
                    <a
                        class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow"
                        href="#"
                        id="navbarDropdown"
                        role="button"
                        data-mdb-toggle="dropdown"
                        aria-expanded="false"
                    >
                        <i class="united kingdom flag m-0"></i>
                    </a>

                </li>

                <!-- Avatar -->
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center"
                        href="#"
                        id="navbarDropdownMenuLink"
                        role="button"
                        data-mdb-toggle="dropdown"
                        aria-expanded="false"
                    >
                        <img
                            src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg"
                            class="rounded-circle"
                            height="45"
                            alt=""
                            loading="lazy"
                        />
                    </a>
                    <ul
                        class="dropdown-menu dropdown-menu-end"
                        aria-labelledby="navbarDropdownMenuLink"
                    >
                        <li><a class="dropdown-item" href="#">Излез</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
</header>
<!--Main Navigation-->

