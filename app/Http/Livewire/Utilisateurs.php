<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Utilisateurs extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $isBtnAddClicked = false;

    public $newUser = [];

    protected $rules = [
        'newUser.nom' => 'required',
        'newUser.prenom' => 'required',
        'newUser.email' => 'required|email|unique:users,email',
        'newUser.telephone1' => 'required|numeric|unique:users,telephone1',
        'newUser.pieceIdentite' => 'required',
        'newUser.numeroPieceIdentite' => 'required|unique:users,numeroPieceIdentite',
        'newUser.sexe' => 'required',
    ];

    public function render()
    {
        return view('livewire.utilisateurs.index', [
            "users" => User::latest()->paginate(10)
            ])
                ->extends("layouts.master")
                ->section("contenu");
    }

    public function goToAddUser()
    {
        $this->isBtnAddClicked = true;
    }

    public function goToListUser()
    {
        $this->isBtnAddClicked = false;
    }

    public function AddUser()
    {

        //verifier que les informations sont correctes
        $validationAttributes =  $this->validate();
        $validationAttributes["newUser"]["password"] = "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi";
        $validationAttributes["newUser"]["photo"] = "https://via.placeholder.com/640x480.png/009900?text=voluptas";
        // ajouter un nouvel utilisateur
        User::create($validationAttributes["newUser"]);
        $this->newUser = [];
        $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Utilisateur cree avec succes!"]);
    }

    public function confirmDelete($name, $id)
    {
        $this->dispatchBrowserEvent("showConfirmMessage", ["message" =>
        [
            "text" => "Vous etes sur le point de supprimer $name de la liste des utilisateurs. Vouler-vous continuer",
            "title" => "Etes-vous sur de continuer?",
            "type" => "warning",
            "data" =>
                [
                    "user_id" => $id
                ]
        ]]);
    }

    public function deleteUser($id)
    {
        User::destroy($id);
        $this->dispatchBrowserEvent("showSuccessMessage", ["message" => "Utilisateur supprime avec succes!"]);

    }
}
