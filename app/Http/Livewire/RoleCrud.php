<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class RoleCrud extends Component
{
    // Define the role property to store the list of role
    public Role $role;
    public $roleName, $roleDescription, $name;

    // Define the currentRole property to store the current role being edited
    public $currentRole = null;

    // Define the events for your CRUD
    // public function mount()
    // {
    //     // Load the list of role from the database
    //     $this->role = Role::all();
    // }
    public function addRole()
    {

        // Validate the input
        $this->validate([
            'roleName' => 'required|unique:roles,name'
        ]);

        // dd($validatedData);
        try {
            Role::create(['name' => $this->roleName]);
            // $this->reset('roleName');
            // $this->emit('refreshComponent');
            // $this->showModal = false;
            // $this->emit('successAlert', 'New Role Created');
        } catch (\Exception $e) {
            $this->addError('roleName', $e->getMessage());
        }
    }


    public function editRole($id)
    {
        // Load the role to be edited
        $this->currentRole = Role::find($id);
    }

    public function updateRole()
    {
        // Validate the input
        $this->validate([
            'currentRole.name' => 'required|unique:role,name',
        ]);

        // Save the updated role
        $this->currentRole->save();

        // Refresh the role list
        $this->role = Role::all();
    }

    public function deleteRole($id)
    {
        // Delete the role
        Role::destroy($id);

        // Refresh the role list
        $this->role = Role::all();
    }

    public function render()
    {
        return view('livewire.role-crud');
    }
}
