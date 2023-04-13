<x-layout title="All Users" atributts="bg-white">


    <table class="w-full my-3 align-middle text-left">
        <thead class="w-full bg-gray-50 h-10 uppercase text-[0.75rem] font-thin opacity-60 border-y">
            <tr>
                <th class="pl-5 w-16">
                    <input type="checkbox" class="rounded-md focus:outline-none focus:border-none opacity-30"
                        name="" id="">
                </th>
                <th>Name</th>
                <th>Created At</th>
                <th>Last Update</th>
            </tr>
        </thead>
        <tbody class="w-full">
            @for ($i = 0; $i < 110; $i++)
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
                                <div class="font-semibold leading-4">José Marcos</div>
                                <span class="text-sm">jose.ferreira@xpmlogistica.com</span>
                            </div>
                        </div>
                    </td>
                    <td>22/03/2023</td>
                    <td>22/03/2023</td>

                </tr>
            @endfor
        </tbody>
    </table>


</x-layout>
