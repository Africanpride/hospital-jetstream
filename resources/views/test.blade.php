<x-app-layout>

    <!-- app/resources/views/roles-permissions.blade.php -->

<!-- Roles and Permissions Section -->
<section class="bg-white py-8">
  <div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Roles and Permissions</h1>

    <!-- Roles Table -->
    <div class="mb-4">
      <h2 class="text-lg font-semibold mb-2">Roles</h2>
      <table class="table-auto w-full">
        <thead>
          <tr>
            <th class="px-4 py-2">Role</th>
            <th class="px-4 py-2">Permissions</th>
            <th class="px-4 py-2"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($roles as $role)
          <tr>
            <td class="border px-4 py-2">{{ $role->name }}</td>
            <td class="border px-4 py-2">
              @foreach($role->permissions as $permission)
              {{ $permission->name }}
              @endforeach
            </td>
            <td class="border px-4 py-2 flex justify-between">
              <a href="{{ route('roles.edit', $role->id) }}" class="text-blue-500 hover:underline">Edit</a>
              <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-500 hover:underline">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

      <!-- Create Role Form -->
      <form action="{{ route('roles.store') }}" method="POST" class="my-4">
        @csrf
        <div class="mb-2">
          <label for="name" class="form-label">Role Name</label>
          <input type="text" name="name" id="name" class="form-input" required>
        </div>
        <div class="mb-2">
          <label for="permissions" class="form-label">Permissions</label>
          <select name="permissions[]" id="permissions" class="form-select" multiple>
            @foreach($permissions as $permission)
            <option value="{{ $permission->id }}">{{ $permission->name }}</option>
            @endforeach
          </select>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Create Role</button>
      </form>
    </div>






</x-app-layout>
