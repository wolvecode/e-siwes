@props(['user' => $user ?? ''])

<div class="app-sidebar__user clearfix">
    <div class="dropdown user-pro-body">
        <div class="">
            <img alt="user-img" class="avatar avatar-xl brround" src="../../assets/img/faces/6.jpg"><span
                class="avatar-status profile-status bg-green"></span>
        </div>
        <div class="user-info">
            <h4 class="font-weight-semibold mt-3 mb-0"> {{ $user ?? ''->user()->name }} </h4>
            <span class="mb-0 text-muted">
                {{ ($user ?? ''->user()->role == 1 || $user ?? ''->user()->role == 2
                        ? 's'
                        : $user ?? ''->user()->role == 3)
                    ? 'Admin'
                    : 'Student' }}
                Member
            </span>
        </div>
    </div>
</div>
