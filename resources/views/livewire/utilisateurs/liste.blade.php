<div class="row p-4 pt-5">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-gradient-primary align-items-center">
                <h2 class="card-title d-block"><i class=" fas fa-users fa-2x mr-2"></i>Liste des Utilisateurs</h2>

                <div class="card-tools d-flex align-items-center">
                    <a href="http://" class="btn btn-link text-white mr-4 bg-gradient-green mr-2"
                        wire:click.prevent="goToAddUser()"><i class=" fas fa-user-plus"> </i> Nouvel Utilisateur</a>
                    <div class="input-group input-group-md" style="width: 250px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 500px;">
                <table class="table table-head-fixed text-nowrap table-striped">
                    <thead>
                        <tr>
                            <th style="width:5%"></th>
                            <th style="width:25%">Utilisateur</th>
                            <th style="width:20%">Role</th>
                            <th class="text-center" style="width:20%">Ajoute</th>
                            <th class="text-center" style="width:30%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user )
                        <tr>
                            <td>
                                @if($user->sexe == "Femme")

                                <img src="{{asset('images/female.png')}}" alt="Female" width="24px">

                                @else
                                <img src="{{asset('images/male.png')}}" alt="Male" width="24px">
                                @endif
                            </td>
                            <td>{{$user->prenom}} {{$user->nom}}</td>
                            <td class="text-uppercase">{{ $user->allRoleNames}}</td>
                            <td class="text-center"><span
                                    class="tag tag-success">{{$user->created_at->diffForHumans()}}</span></td>
                            <td class="text-center">
                                <button  class="btn btn-link"><i class="far fa-edit"></i></button>
                                <button  class="btn btn-link" wire:click="confirmDelete('{{$user->prenom}} {{$user->nom}}', {{$user->id}})"><i class="far fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        @endforeach
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <div class="float-right">
                    {{$users->links()}}
                </div>
            </div>
        </div>
        <!-- /.card -->
    </div>
</div>

<script>
    window.addEventListener("showConfirmMessage", event=>
        {
            Swal.fire(
            {
                title: event.detail.message.title,
                text: event.detail.message.text,
                icon: event.detail.message.type,
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Continuer",
                cancelButtonText: "Annuler"
            }).then((result) =>
            {
                if (result.isConfirmed)
                {
                    @this.deleteUser(event.detail.message.data.user_id)
                }
            })
            window.addEventListener
            ("showSuccessMessage", event=>
            {
            Swal.fire
            ({
            position: 'top-end',
            icon: 'success',
            toast: true,
            title: event.detail.message || "Operation effectuee avec succes !",
            showConfirmButton: false,
            timer : 2000
            })
            }
            )
        }
    )


</script>
