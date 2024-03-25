<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-full">
        <div class="flex justify-between h-16 px-2">
            <div class="shrink-0 flex items-center">
                <button @click="sideMenu = !sideMenu" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-white text-gray-800 hover:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none focus:outline-none">
                    <svg class="size-4" viewBox="0 0 40 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2 4H38C38.5304 4 39.0391 3.78929 39.4142 3.41421C39.7893 3.03914 40 2.53043 40 2C40 1.46957 39.7893 0.96086 39.4142 0.585787C39.0391 0.210714 38.5304 0 38 0H2C1.46957 0 0.960859 0.210714 0.585786 0.585787C0.210714 0.96086 0 1.46957 0 2C0 2.53043 0.210714 3.03914 0.585786 3.41421C0.960859 3.78929 1.46957 4 2 4ZM38 20H2C1.46957 20 0.960859 20.2107 0.585786 20.5858C0.210714 20.9609 0 21.4696 0 22C0 22.5304 0.210714 23.0391 0.585786 23.4142C0.960859 23.7893 1.46957 24 2 24H38C38.5304 24 39.0391 23.7893 39.4142 23.4142C39.7893 23.0391 40 22.5304 40 22C40 21.4696 39.7893 20.9609 39.4142 20.5858C39.0391 20.2107 38.5304 20 38 20ZM38 10H2C1.46957 10 0.960859 10.2107 0.585786 10.5858C0.210714 10.9609 0 11.4696 0 12C0 12.5304 0.210714 13.0391 0.585786 13.4142C0.960859 13.7893 1.46957 14 2 14H38C38.5304 14 39.0391 13.7893 39.4142 13.4142C39.7893 13.0391 40 12.5304 40 12C40 11.4696 39.7893 10.9609 39.4142 10.5858C39.0391 10.2107 38.5304 10 38 10Z"
                            fill="black" />
                    </svg>
                </button>
            </div>

            <!-- Settings Dropdown -->
            <div class="flex items-center">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
    </div>
</nav>
