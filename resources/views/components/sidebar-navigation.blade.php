<div
    class="hidden font-sans col-span-3 lg:block fixed z-20 overflow-y-auto right-auto bg-white h-full w-64 top-[4.4rem] border-r">
    <ul class="mx-3 mt-5">

        <x-menu.item route='/dashboard' title="Dashboard" icon='bx-grid-alt' />
        <x-menu.item route='/users' title="Users" icon='bx-user' />

        <x-menu.dropdown title="DropTest" icon='bx-grid'>
            <x-slot:dropitems>
                <x-menu.drop-items title="Fist Item" route='/first' />
                <x-menu.drop-items title="Second Item" route='/second' />
                <x-menu.drop-items title="Third Item" route='/third' />
            </x-slot:dropitems>
        </x-menu.dropdown>

    </ul>
</div>
