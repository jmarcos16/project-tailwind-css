<div class="flex justify-between mx-4 items-center">
    <input type="text" placeholder="Search" class="rounded-lg  w-1/4 mb-2">
    <div class="flex">
        <x-button.submit title="Add User" icon='bx-plus' />
        <x-button.submit title="Export" icon='bxs-file-export' atributts='bg-white text-black border' />
    </div>
</div>

<table class="w-full my-3 align-middle text-left">
    <thead class="w-full bg-gray-50 h-10 uppercase text-[0.75rem] font-thin opacity-60 border-y">
        <tr>
            <th class="pl-5 w-16">
                <input type="checkbox" class="rounded-md focus:outline-none focus:border-none opacity-30" name=""
                    id="">
            </th>
            <th>Name</th>
            <th>Created At</th>
            <th>Last Update</th>
            <td></td>
        </tr>
    </thead>
    <tbody class="w-full">
        @foreach ($users as $user)
            <tr class="border-b h-20 hover:bg-gray-50">
                <td class="pl-5">
                    <input type="checkbox" class="rounded-md focus:outline-none focus:border-none opacity-30"
                        name="" id="">
                </td>
                <td>
                    <div class="flex">
                        <img class="rounded-[100%] w-10"
                            src="https://flowbite.com/application-ui/demo/images/users/neil-sims.png"
                            alt="Neil Sims avatar">
                        <div class="ml-2">
                            <div class="font-semibold leading-4">{{ $user->name }}</div>
                            <span class="text-sm">{{ $user->email }}</span>
                        </div>
                    </div>
                </td>
                <td>{{ date('d-m-y h:m:s', strtotime($user->created_at)) }}</td>
                <td>{{ date('d-m-y h:m:s', strtotime($user->updated_at)) }}</td>
                <td>
                    <div class="flex items-center justify-center">
                        <x-button.submit title="Edit User" icon='bxs-file-export' />
                        <x-button.submit title="Edit User" icon='bxs-file-export' />
                    </div>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>

{{ $users->links() }}
