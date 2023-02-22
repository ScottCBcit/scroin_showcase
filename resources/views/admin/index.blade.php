<x-layout>
    <x-slot name="content">
        <div class="bg-white shadow-md rounded my-6">
            <div class="flex items-center justify-between border-b-2 border-gray-200 px-6 py-4">
                <h2 class="text-2xl font-bold text-gray-800">Projects</h2>
                <a href="#" class="inline-block bg-green-500 rounded-lg py-2 px-2 text-white hover:bg-green-600 transition duration-300 ease-in-out">Create Project</a>
            </div>
            <table class="w-full table-auto">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">Project Title</th>
                        <th class="py-3 px-6 text-center"></th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    @foreach ($projects as $key => $project)
                    <tr class="{{ $key % 2 === 0 ? 'bg-gray-100' : 'bg-white' }}">
                        <td class="py-3 px-6 text-left">{{ $project->title }}</td>
                        <td class="py-3 px-6 text-right">
                            <a href="/admin/projects/{{ $project->slug }}/edit" class="mr-3 text-blue-500"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                            <a href="/admin/projects/{{ $project->slug }}/delete" class="text-red-500"><i class="fa-solid fa-trash-can"></i> Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="bg-white shadow-md rounded my-6">
            <div class="flex items-center justify-between border-b-2 border-gray-200 px-6 py-4">
                <h2 class="text-2xl font-bold text-gray-800">Users</h2>
                <a href="#" class="inline-block bg-green-500 rounded-lg py-2 px-4 text-white hover:bg-green-600 transition duration-300 ease-in-out">Create User</a>
            </div>
            <table class="w-full table-auto">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">User Name</th>
                        <th class="py-3 px-6 text-right"></th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    @foreach ($users as $key => $user)
                    <tr class="{{ $key % 2 === 0 ? 'bg-gray-100' : 'bg-white' }}">
                        <td class="py-3 px-6 text-left">{{ $user->name }}</td>
                        <td class="py-3 px-6 text-right">
                            <a href="/admin/users/{{ $project->id }}/edit" class="mr-3 text-blue-500"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                            <a href="/admin/projects/{{ $project->id }}/delete" class="text-red-500"><i class="fa-solid fa-trash-can"></i> Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-slot>
</x-layout>