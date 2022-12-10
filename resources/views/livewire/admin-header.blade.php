<nav class="w-screen px-[15%] bg-gray-800 py-4 flex items-center justify-between gap-4">
    <a href="{{ route('index') }}">
        <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500"
            alt="Your Company" /></a>
    <div class="grow flex items-center md:justify-start gap-6 capitalize font-bold text-white">
        <a href="{{ route('admin.index') }}" class="hover:bg-white hover:bg-opacity-10 py-1 px-4 rounded">dashboard</a>
        <a href="{{ route('admin.create') }}" class="hover:bg-white hover:bg-opacity-10 py-1 px-4 rounded">tables</a>
    </div>
    <div class="flex items-center gap-4 relative">
        <img class="h-10 w-10 rounded-full cursor-pointer" wire:click="toggleAdminMenu"
            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
            alt="" />
        <div
            class="absolute p-6 w-48 rounded-md :flex hidden flex-col gap-2 shadow-md top-20 right-0 bg-white text-sm text-gray-700">
            <a href="#" class="block whitespace-nowrap ">Your Profile</a>
            <a href="#" class="block whitespace-nowrap ">settings</a>
            <a href="#" class="block whitespace-nowrap ">sign out</a>
        </div>
    </div>
</nav>
