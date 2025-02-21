<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="card card-primary control-sidebar-dark">
        <div class="card-body box-profile">
            <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" src="{{asset('/images/user.png')}}"
                    alt="User profile picture">
            </div>

            <h3 class=" text-center ellipsis">{{ userFullName() }}</h3>

            <p class="text-muted text-center">Software Engineer</p>

            <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                    <a href="#" class="d-flex align-items-center"><i class="fa fa-lock pr-2"></i><b>Mot de pass</b></a>
                </li>
                <li class="list-group-item">
                    <a href="#" class="d-flex align-items-center"><i class="fa fa-user pr-2"></i><b>Mon profil</b></a>
                </li>
            </ul>

            <a class="btn btn-primary btn-block" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                                                         document.getElementById('logout-form').submit();">
                <b>Decconexion</b>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
        <!-- /.card-body -->
    </div>
</aside>
<!-- /.control-sidebar -->
