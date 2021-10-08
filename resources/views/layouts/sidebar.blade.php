<!-- main-sidebar -->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar sidebar-scroll">
{{--    Image Logo--}}
    <div class="main-sidebar-header active">
        <a class="desktop-logo logo-light active" href="/">
            <img src="{{ asset('assets/img/kwasu.png') }}" class="main-logo" alt="logo">
        </a>
        <a class="logo-icon mobile-logo icon-light active" href="/">
            <img src="{{ asset('assets/img/kwasu.png') }}" class="logo-icon" alt="logo">
        </a>
    </div>
{{--    image logo close--}}
    <div class="main-sidemenu">
        @auth('user')
            <x-username :user="@auth('user')" />
        @endauth
        @auth('student')
            <x-username :user="@auth('student')" />
        @endauth
        <ul class="side-menu">
            <li class="side-item side-item-category">Main</li>
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('dashboard') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" >
                            <path d="M0 0h24v24H0V0z" fill="none"/>
                            <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/>
                            <path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/>
                        </svg>
                        <span class="side-menu__label">Index</span>
                    </a>
                </li>
                @auth('student')
                    <li class="side-item side-item-category">General</li>
                    <li class="slide">
                        <a class="side-menu__item" href="{{ route('placement') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" >
                                <path d="M0 0h24v24H0V0z" fill="none"/>
                                <path d="M15 11V4H4v8.17l.59-.58.58-.59H6z" opacity=".3"/>
                                <path d="M21 6h-2v9H6v2c0 .55.45 1 1 1h11l4 4V7c0-.55-.45-1-1-1zm-5 7c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1H3c-.55 0-1 .45-1 1v14l4-4h10zM4.59 11.59l-.59.58V4h11v7H5.17l-.58.59z"/>
                            </svg>
                            <span class="side-menu__label">Placement</span>
                        </a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" href="{{ route('report') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                                <path d="M0 0h24v24H0V0z" fill="none"/>
                                <path d="M13 4H6v16h12V9h-5V4zm3 14H8v-2h8v2zm0-6v2H8v-2h8z" opacity=".3"/>
                                <path d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z"/>
                            </svg>
                            <span class="side-menu__label">Report</span>
                        </a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" href="{{ route('showAcceptance') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                                <path d="M0 0h24v24H0V0z" fill="none"/>
                                <path d="M13 4H6v16h12V9h-5V4zm3 14H8v-2h8v2zm0-6v2H8v-2h8z" opacity=".3"/>
                                <path d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z"/>
                            </svg>
                            <span class="side-menu__label">Upload Acceptance</span>
                        </a>
                    </li>
                @endauth

                @if(auth('user')->check() && auth('user')->user()->isGlobalAdmin())
                    <li class="side-item side-item-category">Admin</li>
                    <li class="slide">
                        <a class="side-menu__item" href="{{ route('addOrganization') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                                <path d="M0 0h24v24H0V0z" fill="none"/>
                                <path d="M4 12c0 4.08 3.06 7.44 7 7.93V4.07C7.05 4.56 4 7.92 4 12z" opacity=".3"/>
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93s3.05-7.44 7-7.93v15.86zm2-15.86c1.03.13 2 .45 2.87.93H13v-.93zM13 7h5.24c.25.31.48.65.68 1H13V7zm0 3h6.74c.08.33.15.66.19 1H13v-1zm0 9.93V19h2.87c-.87.48-1.84.8-2.87.93zM18.24 17H13v-1h5.92c-.2.35-.43.69-.68 1zm1.5-3H13v-1h6.93c-.04.34-.11.67-.19 1z"/>
                            </svg>
                            <span class="side-menu__label">Add Organisation</span>
                        </a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item"  href="{{ route('organizationsFalse') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                                <path d="M0 0h24v24H0V0z" fill="none"/>
                                <path d="M6 20h12V10H6v10zm6-7c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2z" opacity=".3"/>
                                <path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM9 6c0-1.66 1.34-3 3-3s3 1.34 3 3v2H9V6zm9 14H6V10h12v10zm-6-3c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z"/>
                            </svg>
                            <span class="side-menu__label">Organization request</span>
                            @if((\App\Models\Organization::where('verified', false)) && (\App\Models\Organization::where('verified', false))->count() > 0)
                                <span class="badge badge-danger side-badge">New</span>
                            @endif
                        </a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item"  href="{{ route('newAcceptance') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                                <path d="M0 0h24v24H0V0z" fill="none"/>
                                <path d="M6 20h12V10H6v10zm6-7c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2z" opacity=".3"/>
                                <path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM9 6c0-1.66 1.34-3 3-3s3 1.34 3 3v2H9V6zm9 14H6V10h12v10zm-6-3c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z"/>
                            </svg>
                            <span class="side-menu__label">New Acceptance</span>
                            @if((\App\Models\Acceptance::where('verified', false)) && (\App\Models\Acceptance::where('verified', false))->get()->count() > 0)
                                <span class="badge badge-danger side-badge">New</span>
                            @endif
                        </a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                                <path d="M0 0h24v24H0V0z" fill="none"/>
                                <path d="M6.26 9L12 13.47 17.74 9 12 4.53z" opacity=".3"/>
                                <path d="M19.37 12.8l-7.38 5.74-7.37-5.73L3 14.07l9 7 9-7zM12 2L3 9l1.63 1.27L12 16l7.36-5.73L21 9l-9-7zm0 11.47L6.26 9 12 4.53 17.74 9 12 13.47z"/>
                            </svg>
                            <span class="side-menu__label">Add</span>
                            <i class="angle fe fe-chevron-down">
                            </i>
                        </a>
                        <ul class="slide-menu">
                            @if(auth('user')->check() && auth('user')->user()->isSuperAdmin())
                                <li><a class="slide-item" href="{{ route('addUser') }}">Add Admin/Lecturer</a></li>
                                <li><a class="slide-item" href="{{ route('addStudent') }}">Add Student</a></li>
                            @endif
                            @if(auth('user')->check() && auth('user')->user()->isAdmin() )
                                <li><a class="slide-item" href="{{ route('addLecturer') }}">Add Lecturer</a></li>
                                <li><a class="slide-item" href="{{ route('addStudent') }}">Add Student</a></li>
                                <li><a class="slide-item" href="{{ route('addOrganization') }}">Add Organization</a></li>
                            @endif
                        </ul>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" href="{{ route('unassignedStudent') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                                <path d="M0 0h24v24H0V0z" fill="none"/>
                                <path d="M6.26 9L12 13.47 17.74 9 12 4.53z" opacity=".3"/>
                                <path d="M19.37 12.8l-7.38 5.74-7.37-5.73L3 14.07l9 7 9-7zM12 2L3 9l1.63 1.27L12 16l7.36-5.73L21 9l-9-7zm0 11.47L6.26 9 12 4.53 17.74 9 12 13.47z"/>
                            </svg>
                            <span class="side-menu__label">Unassigned Students</span>
                        </a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" >
                                <path d="M0 0h24v24H0V0z" fill="none"/>
                                <path d="M5 5h15v3H5zm12 5h3v9h-3zm-7 0h5v9h-5zm-5 0h3v9H5z" opacity=".3"/>
                                <path d="M20 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM8 19H5v-9h3v9zm7 0h-5v-9h5v9zm5 0h-3v-9h3v9zm0-11H5V5h15v3z"/>
                            </svg>
                            <span class="side-menu__label">Tables</span>
                            <i class="angle fe fe-chevron-down"></i>
                        </a>
                        <ul class="slide-menu">
                            <li><a class="slide-item" href="{{ route('adminLecturer') }}">Supervisors Table</a></li>
                            <li><a class="slide-item" href="{{ route('listStudent') }}">Students Tables</a></li>
                            <li><a class="slide-item" href="{{ route('org-list') }}">Organization Tables</a></li>
                            @if(auth('user')->check() && auth('user')->user()->isSuperAdmin())
                                <li><a class="slide-item" href="{{ route('adminList') }}">Admin Tables</a></li>
                            @endif
                        </ul>
                    </li>
                @endif

                @if(auth('user')->check() && auth('user')->user()->isLecturer())
                    <li class="side-item side-item-category">Lecturer</li>
                    <li class="slide">
                        <a class="side-menu__item" href="{{ route('studentsReports') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                                <path d="M0 0h24v24H0V0z" fill="none"/>
                                <path d="M4 12c0 4.08 3.06 7.44 7 7.93V4.07C7.05 4.56 4 7.92 4 12z" opacity=".3"/>
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93s3.05-7.44 7-7.93v15.86zm2-15.86c1.03.13 2 .45 2.87.93H13v-.93zM13 7h5.24c.25.31.48.65.68 1H13V7zm0 3h6.74c.08.33.15.66.19 1H13v-1zm0 9.93V19h2.87c-.87.48-1.84.8-2.87.93zM18.24 17H13v-1h5.92c-.2.35-.43.69-.68 1zm1.5-3H13v-1h6.93c-.04.34-.11.67-.19 1z"/>
                            </svg>
                            <span class="side-menu__label">Students Reports</span>
                        </a>
                    </li><li class="slide">
                        <a class="side-menu__item" href="{{ route('message') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                                <path d="M0 0h24v24H0V0z" fill="none"/>
                                <path d="M4 12c0 4.08 3.06 7.44 7 7.93V4.07C7.05 4.56 4 7.92 4 12z" opacity=".3"/>
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93s3.05-7.44 7-7.93v15.86zm2-15.86c1.03.13 2 .45 2.87.93H13v-.93zM13 7h5.24c.25.31.48.65.68 1H13V7zm0 3h6.74c.08.33.15.66.19 1H13v-1zm0 9.93V19h2.87c-.87.48-1.84.8-2.87.93zM18.24 17H13v-1h5.92c-.2.35-.43.69-.68 1zm1.5-3H13v-1h6.93c-.04.34-.11.67-.19 1z"/>
                            </svg>
                            <span class="side-menu__label">Broadcast Message</span>
                        </a>
                    </li>
                @endif
        </ul>
    </div>
</aside>
