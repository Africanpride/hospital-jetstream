<div class="container mt-4">
    <div class="mb-4 p-8">
    <form wire:submit.prevent="addRole"  method="POST" class=" space-y-2 ">

        <input
            wire:model="roleName"
            type="text"
            class="border rounded w-full py-2 px-3"
            placeholder="Add new role name"
        >

        {{-- <textarea class="textarea textarea-primary rounded w-full py-2 px-3"
        wire:model="roleDescription"
        type="text"
        placeholder="Add new role name"> --}}
        </textarea>

        <button
            wire:click="addRole"
            class="btn btn-block"
        >
            Add Role
        </button>
    </form>
    </div>

    {{-- {{ \App\Models\Role::get()->pluck('id', 'name') }} --}}

    {{-- <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $role)
            <tr>
                <td class="border px-4 py-2">{{ $role->id }}</td>
                <td class="border px-4 py-2">{{ $role->name }}</td>
                <td class="border px-4 py-2">
                    <button
                        wire:click="editRole({{ $role->id }})"
                        class="text-blue-500 hover:text-blue-700"
                    >
                        Edit
                    </button>
                    <button
                        wire:click="deleteRole({{ $role->id }})"
                        class="text-red-500 hover:text-red-700"
                    >
                        Delete
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table> --}}
</div>
