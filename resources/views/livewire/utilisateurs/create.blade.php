<div class="row pt-5 pl-5">`
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"><i class=" fas fa-user-plus fa-2x"> </i> Formulaire de creation d'utilisateur
                </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" wire:submit.prevent="AddUser()">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input type="text" wire:model="newUser.nom" class="form-control @error('newUser.nom') is-invalid @enderror" id="nom" placeholder="Entrer le Nom">
                                @error("newUser.nom")
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="prenom">Prenom</label>
                                <input type="text" wire:model="newUser.prenom" class="form-control @error('newUser.prenom') is-invalid @enderror" id="prenom" placeholder="Entrer le Prenom">
                                @error("newUser.prenom")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="sexe">Sexe</label>
                                <select class="form-control @error('newUser.sexe') is-invalid @enderror" name="sexe" id="sexe" wire:model="newUser.sexe">
                                    @error("newUser.sexe")
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <option value="">----------</option>
                                    <option value="Homme">Homme</option>
                                    <option value="Femme">Femme</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control @error('newUser.email') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter email" wire:model="newUser.email">
                                @error("newUser.email")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="telephone1">Telephone 1</label>
                                <input type="text" class="form-control @error('newUser.telephone1') is-invalid @enderror" placeholder="Entrer le premiere numero de telephone" wire:model="newUser.telephone1">
                                @error("newUser.telephone1")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="telephone2">Telephone 2</label>
                                <input type="text" class="form-control" placeholder="Entrer le deuxieme numero de telephone" wire:model="newUser.telephone2">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="sexe">Piece d'identite</label>
                                <select class="form-control @error('newUser.pieceIdentite') is-invalid @enderror" name="pieceIdentite" wire:model="newUser.pieceIdentite">
                                    <option value="">----------</option>
                                    <option value="CNI">CNI</option>
                                    <option value="Permis de Conduire">Permis de Conduire</option>
                                    <option value="Passport">Passport</option>
                                </select>
                                @error("newUser.pieceIdentite")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="numeroPieceIdentite">Numero Piece d'identite</label>
                                <input type="text" class="form-control @error('newUser.numeroPieceIdentite') is-invalid @enderror"  placeholder="Entrer le numero de la piece d'identite" wire:model="newUser.numeroPieceIdentite">
                                @error("newUser.numeroPieceIdentite")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="exampleInputPassword1">Mot de passe</label>
                        <input type="password" class="form-control" disabled placeholder="Password">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                    <button type="button" wire:click="goToListUser()" class="btn btn-danger">Retourner a la liste
                        d'utilisateurs</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>

<script>
    window.addEventListener("showSuccessMessage", event=>
        {
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                toast: true,
                title: event.detail.message || "Operation effectuee avec succes !",
                showConfirmButton: false,
                timer : 2000
            })
        }
    )
</script>
