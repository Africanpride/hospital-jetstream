<x-app-layout>
    <x-admin.pageheader model-name="Roles & Permissions" description="Roles & Permissions" add-button=false />
    <livewire:role-crud>
    <div class="py-6 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="space-y-3">
                <div class="flex justify-between items-center py-3">
                    <a href="{{ route('roles.create') }}"
                        class="btn btn-wide">Create Role</a>
                </div>

                <div class="flex flex-col">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th>
                                    Permissions
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($roles as $role)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            {{ $role->name }}
                                        </div>
                                    </td>
                                    <td>
                                        <form action="">
                                            @foreach ($role->permissions as $permission)
                                            <input type="checkbox" checked="checked" name="{{ $permission->name }}" value="{{ $permission->id }}" class="checkbox checkbox-xs" /> {{ $permission->name }}
                                             <br />
                                            @endforeach
                                        </form>
                                    </td>

                                    <td>
                                        <div class="flex justify-end">
                                            <div class="flex space-x-2">
                                                <a href="{{ route('roles.edit', $role->id) }}"
                                                    class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md">Edit</a>
                                                <form
                                                    class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md"
                                                    method="POST"
                                                    action="{{ route('roles.destroy', $role->id) }}"
                                                    onsubmit="return confirm('Are you sure?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
