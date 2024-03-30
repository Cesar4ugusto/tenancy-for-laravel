<aside class="flex h-screen flex-col justify-between bg-white w-[300px] overflow-y-auto overflow-x-hidden" x-show="sideMenu" x-transition>
    <div class="px-4 py-6">
        <a href="{{ route('dashboard') }}">
            <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
        </a>

        <ul class="mt-6 space-y-1">
            <li>
                <x-dropdown-link-sidebar>
                    <x-slot name="menu">
                        <svg class="size-4" viewBox="0 0 38 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 16H12C12.5304 16 13.0391 15.7893 13.4142 15.4142C13.7893 15.0391 14 14.5304 14 14C14 13.4696 13.7893 12.9609 13.4142 12.5858C13.0391 12.2107 12.5304 12 12 12H10C9.46957 12 8.96086 12.2107 8.58579 12.5858C8.21071 12.9609 8 13.4696 8 14C8 14.5304 8.21071 15.0391 8.58579 15.4142C8.96086 15.7893 9.46957 16 10 16ZM18 28H10C9.46957 28 8.96086 28.2107 8.58579 28.5858C8.21071 28.9609 8 29.4696 8 30C8 30.5304 8.21071 31.0391 8.58579 31.4142C8.96086 31.7893 9.46957 32 10 32H18C18.5304 32 19.0391 31.7893 19.4142 31.4142C19.7893 31.0391 20 30.5304 20 30C20 29.4696 19.7893 28.9609 19.4142 28.5858C19.0391 28.2107 18.5304 28 18 28ZM18 20H10C9.46957 20 8.96086 20.2107 8.58579 20.5858C8.21071 20.9609 8 21.4696 8 22C8 22.5304 8.21071 23.0391 8.58579 23.4142C8.96086 23.7893 9.46957 24 10 24H18C18.5304 24 19.0391 23.7893 19.4142 23.4142C19.7893 23.0391 20 22.5304 20 22C20 21.4696 19.7893 20.9609 19.4142 20.5858C19.0391 20.2107 18.5304 20 18 20ZM31.84 14.76C31.9932 14.3958 32.035 13.9944 31.9603 13.6064C31.8855 13.2184 31.6975 12.8612 31.42 12.58L19.42 0.58C19.2547 0.424432 19.0656 0.296162 18.86 0.2C18.8003 0.19152 18.7397 0.19152 18.68 0.2L18.12 0H6C4.4087 0 2.88258 0.632141 1.75736 1.75736C0.632141 2.88258 0 4.4087 0 6V34C0 35.5913 0.632141 37.1174 1.75736 38.2426C2.88258 39.3679 4.4087 40 6 40H18C18.5304 40 19.0391 39.7893 19.4142 39.4142C19.7893 39.0391 20 38.5304 20 38C20 37.4696 19.7893 36.9609 19.4142 36.5858C19.0391 36.2107 18.5304 36 18 36H6C5.46957 36 4.96086 35.7893 4.58579 35.4142C4.21071 35.0391 4 34.5304 4 34V6C4 5.46957 4.21071 4.96086 4.58579 4.58579C4.96086 4.21071 5.46957 4 6 4H16V10C16 11.5913 16.6321 13.1174 17.7574 14.2426C18.8826 15.3679 20.4087 16 22 16H30C30.3949 15.998 30.7803 15.8792 31.1077 15.6586C31.4352 15.4379 31.69 15.1252 31.84 14.76ZM22 12C21.4696 12 20.9609 11.7893 20.5858 11.4142C20.2107 11.0391 20 10.5304 20 10V6.82L25.18 12H22ZM36 20H26C25.4696 20 24.9609 20.2107 24.5858 20.5858C24.2107 20.9609 24 21.4696 24 22V38C24.001 38.3618 24.1001 38.7166 24.2867 39.0265C24.4734 39.3365 24.7406 39.5899 25.06 39.76C25.3727 39.9206 25.7223 39.9959 26.0734 39.9783C26.4245 39.9608 26.7648 39.851 27.06 39.66L31 37.06L35 39.66C35.2988 39.8328 35.6372 39.9253 35.9823 39.9286C36.3275 39.9319 36.6676 39.8458 36.9696 39.6786C37.2716 39.5115 37.5252 39.2691 37.7058 38.975C37.8863 38.6808 37.9877 38.3449 38 38V22C38 21.4696 37.7893 20.9609 37.4142 20.5858C37.0391 20.2107 36.5304 20 36 20ZM34 34.24L32.12 32.98C31.7893 32.7564 31.3992 32.637 31 32.637C30.6008 32.637 30.2107 32.7564 29.88 32.98L28 34.24V24H34V34.24Z"
                                fill="black" />
                        </svg>
                        <span class="text-sm font-medium">{{ __('messages.sidebar.courses.name') }}</span>
                    </x-slot>

                    <x-slot name="content">
                        <x-nav-link-dropdown-sidebar>
                            {{ __('messages.sidebar.courses.items.curricular_structure') }}
                        </x-nav-link-dropdown-sidebar>
                    </x-slot>
                </x-dropdown-link-sidebar>
            </li>

            <li>
                <x-dropdown-link-sidebar>
                    <x-slot name="menu">
                        <svg class="size-4" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M38 24H36V4H38C38.5304 4 39.0391 3.78929 39.4142 3.41421C39.7893 3.03914 40 2.53043 40 2C40 1.46957 39.7893 0.960859 39.4142 0.585786C39.0391 0.210714 38.5304 0 38 0H2C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2C0 2.53043 0.210714 3.03914 0.585786 3.41421C0.960859 3.78929 1.46957 4 2 4H4V24H2C1.46957 24 0.960859 24.2107 0.585786 24.5858C0.210714 24.9609 0 25.4696 0 26C0 26.5304 0.210714 27.0391 0.585786 27.4142C0.960859 27.7893 1.46957 28 2 28H18V30.3L8.9 36.3C8.52667 36.5311 8.23976 36.8786 8.08354 37.289C7.92732 37.6993 7.91047 38.1496 8.03559 38.5705C8.16071 38.9914 8.42085 39.3594 8.77587 39.6177C9.13089 39.8761 9.56105 40.0104 10 40C10.3932 40.0045 10.7779 39.8856 11.1 39.66L18 35.1V38C18 38.5304 18.2107 39.0391 18.5858 39.4142C18.9609 39.7893 19.4696 40 20 40C20.5304 40 21.0391 39.7893 21.4142 39.4142C21.7893 39.0391 22 38.5304 22 38V35.1L28.9 39.66C29.2221 39.8856 29.6068 40.0045 30 40C30.4273 39.9967 30.8423 39.8566 31.1842 39.6003C31.5261 39.344 31.7769 38.9849 31.8999 38.5757C32.0229 38.1665 32.0116 37.7286 31.8677 37.3263C31.7237 36.924 31.4547 36.5783 31.1 36.34L22 30.34V28H38C38.5304 28 39.0391 27.7893 39.4142 27.4142C39.7893 27.0391 40 26.5304 40 26C40 25.4696 39.7893 24.9609 39.4142 24.5858C39.0391 24.2107 38.5304 24 38 24ZM32 24H8V4H32V24ZM15.22 20.52C15.7531 20.8349 16.3609 21.0011 16.98 21.0011C17.5991 21.0011 18.2069 20.8349 18.74 20.52L24.74 17.04C25.2529 16.7252 25.6766 16.2841 25.9705 15.7589C26.2644 15.2337 26.4187 14.6419 26.4187 14.04C26.4187 13.4381 26.2644 12.8463 25.9705 12.3211C25.6766 11.7959 25.2529 11.3548 24.74 11.04L18.74 7.56C18.2069 7.24506 17.5991 7.07893 16.98 7.07893C16.3609 7.07893 15.7531 7.24506 15.22 7.56C14.6829 7.8628 14.2376 8.30518 13.9313 8.84033C13.625 9.37548 13.469 9.98349 13.48 10.6V17.56C13.4833 18.163 13.646 18.7544 13.9516 19.2742C14.2572 19.794 14.6948 20.2238 15.22 20.52ZM17.48 11.36L22 14L17.44 16.64L17.48 11.36Z"
                                fill="black" />
                        </svg>
                        <span class="text-sm font-medium">{{ __('messages.sidebar.classes.name') }}</span>
                    </x-slot>

                    <x-slot name="content">
                        <x-nav-link-dropdown-sidebar>
                            {{ __('messages.sidebar.classes.items.warnings') }}
                        </x-nav-link-dropdown-sidebar>
                        <x-nav-link-dropdown-sidebar>
                            {{ __('messages.sidebar.classes.items.grades') }}
                        </x-nav-link-dropdown-sidebar>
                        <x-nav-link-dropdown-sidebar>
                            {{ __('messages.sidebar.classes.items.presence') }}
                        </x-nav-link-dropdown-sidebar>
                    </x-slot>
                </x-dropdown-link-sidebar>
            </li>
            <li>
                <x-dropdown-link-sidebar>
                    <x-slot name="menu">
                        <svg class="size-4" viewBox="0 0 44 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M22.6 17.44C23.6672 16.5163 24.5231 15.3738 25.1097 14.09C25.6964 12.8063 26 11.4114 26 10C26 7.34783 24.9464 4.8043 23.0711 2.92893C21.1957 1.05357 18.6522 -1.19015e-07 16 -1.19015e-07C13.3478 -1.19015e-07 10.8043 1.05357 8.92893 2.92893C7.05357 4.8043 6 7.34783 6 10C5.99998 11.4114 6.3036 12.8063 6.89025 14.09C7.4769 15.3738 8.33285 16.5163 9.4 17.44C6.60028 18.7078 4.22493 20.7551 2.55796 23.3371C0.89099 25.9191 0.00294371 28.9266 0 32C0 32.5304 0.210714 33.0391 0.585786 33.4142C0.960859 33.7893 1.46957 34 2 34C2.53043 34 3.03914 33.7893 3.41421 33.4142C3.78929 33.0391 4 32.5304 4 32C4 28.8174 5.26428 25.7652 7.51472 23.5147C9.76516 21.2643 12.8174 20 16 20C19.1826 20 22.2348 21.2643 24.4853 23.5147C26.7357 25.7652 28 28.8174 28 32C28 32.5304 28.2107 33.0391 28.5858 33.4142C28.9609 33.7893 29.4696 34 30 34C30.5304 34 31.0391 33.7893 31.4142 33.4142C31.7893 33.0391 32 32.5304 32 32C31.9971 28.9266 31.109 25.9191 29.442 23.3371C27.7751 20.7551 25.3997 18.7078 22.6 17.44ZM16 16C14.8133 16 13.6533 15.6481 12.6666 14.9888C11.6799 14.3295 10.9108 13.3925 10.4567 12.2961C10.0026 11.1997 9.88378 9.99334 10.1153 8.82946C10.3468 7.66557 10.9182 6.59647 11.7574 5.75736C12.5965 4.91824 13.6656 4.3468 14.8295 4.11529C15.9933 3.88378 17.1997 4.0026 18.2961 4.45672C19.3925 4.91085 20.3295 5.67988 20.9888 6.66658C21.6481 7.65327 22 8.81331 22 10C22 11.5913 21.3679 13.1174 20.2426 14.2426C19.1174 15.3679 17.5913 16 16 16ZM35.48 16.64C36.7599 15.1987 37.596 13.4181 37.8876 11.5127C38.1792 9.60725 37.9139 7.65815 37.1235 5.9C36.3332 4.14185 35.0516 2.64959 33.4329 1.60285C31.8143 0.5561 29.9276 -0.000515677 28 -1.19015e-07C27.4696 -1.19015e-07 26.9609 0.210713 26.5858 0.585786C26.2107 0.960859 26 1.46957 26 2C26 2.53043 26.2107 3.03914 26.5858 3.41421C26.9609 3.78929 27.4696 4 28 4C29.5913 4 31.1174 4.63214 32.2426 5.75736C33.3679 6.88258 34 8.4087 34 10C33.9972 11.0505 33.7186 12.0818 33.1921 12.9908C32.6657 13.8999 31.9097 14.6548 31 15.18C30.7035 15.351 30.4558 15.5953 30.2807 15.8895C30.1056 16.1836 30.009 16.5178 30 16.86C29.9916 17.1995 30.0699 17.5356 30.2273 17.8365C30.3848 18.1374 30.6163 18.3933 30.9 18.58L31.68 19.1L31.94 19.24C34.3508 20.3834 36.3846 22.192 37.802 24.4526C39.2193 26.7133 39.9611 29.3319 39.94 32C39.94 32.5304 40.1507 33.0391 40.5258 33.4142C40.9009 33.7893 41.4096 34 41.94 34C42.4704 34 42.9791 33.7893 43.3542 33.4142C43.7293 33.0391 43.94 32.5304 43.94 32C43.9563 28.9309 43.1876 25.9085 41.7069 23.2201C40.2262 20.5317 38.0827 18.2666 35.48 16.64Z"
                                fill="black" />
                        </svg>
                        <span class="text-sm font-medium">{{ __('messages.sidebar.people.name') }}</span>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link-sub-menu-sidebar>
                            <x-slot name="menu">
                                <span class="text-sm font-medium">{{ __('messages.sidebar.people.items.coordinator.name') }}</span>
                            </x-slot>

                            <x-slot name="content">
                                <x-nav-link-dropdown-sidebar>
                                    {{ __('messages.sidebar.people.items.coordinator.items.courses') }}
                                </x-nav-link-dropdown-sidebar>
                            </x-slot>
                        </x-dropdown-link-sub-menu-sidebar>

                        <x-dropdown-link-sub-menu-sidebar>
                            <x-slot name="menu">
                                <span class="text-sm font-medium">{{ __('messages.sidebar.people.items.students.name') }}</span>
                            </x-slot>

                            <x-slot name="content">
                                <x-nav-link-dropdown-sidebar>
                                    {{ __('messages.sidebar.people.items.students.items.documents') }}
                                </x-nav-link-dropdown-sidebar>
                                <x-nav-link-dropdown-sidebar>
                                    {{ __('messages.sidebar.people.items.students.items.historic') }}
                                </x-nav-link-dropdown-sidebar>
                            </x-slot>
                        </x-dropdown-link-sub-menu-sidebar>

                        <x-dropdown-link-sub-menu-sidebar>
                            <x-slot name="menu">
                                <span class="text-sm font-medium">{{ __('messages.sidebar.people.items.teachers.name') }}</span>
                            </x-slot>

                            <x-slot name="content">
                                <x-nav-link-dropdown-sidebar>
                                    {{ __('messages.sidebar.people.items.teachers.items.classes') }}
                                </x-nav-link-dropdown-sidebar>
                            </x-slot>
                        </x-dropdown-link-sub-menu-sidebar>
                    </x-slot>
                </x-dropdown-link-sidebar>
            </li>

            <li>
                <x-dropdown-link-sidebar>
                    <x-slot name="menu">
                        <svg class="size-4" viewBox="0 0 34 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2 20C1.46957 20 0.96086 20.2107 0.585787 20.5858C0.210714 20.9609 0 21.4696 0 22V38C0 38.5304 0.210714 39.0391 0.585787 39.4142C0.96086 39.7893 1.46957 40 2 40C2.53043 40 3.03914 39.7893 3.41421 39.4142C3.78929 39.0391 4 38.5304 4 38V22C4 21.4696 3.78929 20.9609 3.41421 20.5858C3.03914 20.2107 2.53043 20 2 20ZM12 0C11.4696 0 10.9609 0.210714 10.5858 0.585786C10.2107 0.960859 10 1.46957 10 2V38C10 38.5304 10.2107 39.0391 10.5858 39.4142C10.9609 39.7893 11.4696 40 12 40C12.5304 40 13.0391 39.7893 13.4142 39.4142C13.7893 39.0391 14 38.5304 14 38V2C14 1.46957 13.7893 0.960859 13.4142 0.585786C13.0391 0.210714 12.5304 0 12 0ZM32 28C31.4696 28 30.9609 28.2107 30.5858 28.5858C30.2107 28.9609 30 29.4696 30 30V38C30 38.5304 30.2107 39.0391 30.5858 39.4142C30.9609 39.7893 31.4696 40 32 40C32.5304 40 33.0391 39.7893 33.4142 39.4142C33.7893 39.0391 34 38.5304 34 38V30C34 29.4696 33.7893 28.9609 33.4142 28.5858C33.0391 28.2107 32.5304 28 32 28ZM22 12C21.4696 12 20.9609 12.2107 20.5858 12.5858C20.2107 12.9609 20 13.4696 20 14V38C20 38.5304 20.2107 39.0391 20.5858 39.4142C20.9609 39.7893 21.4696 40 22 40C22.5304 40 23.0391 39.7893 23.4142 39.4142C23.7893 39.0391 24 38.5304 24 38V14C24 13.4696 23.7893 12.9609 23.4142 12.5858C23.0391 12.2107 22.5304 12 22 12Z"
                                fill="black" />
                        </svg>
                        <span class="text-sm font-medium">{{ __('messages.sidebar.administrative.name') }}</span>
                    </x-slot>

                    <x-slot name="content">
                        <x-nav-link-dropdown-sidebar>
                            {{ __('messages.sidebar.administrative.items.schedule') }}
                        </x-nav-link-dropdown-sidebar>

                        <x-nav-link-dropdown-sidebar>
                            {{ __('messages.sidebar.administrative.items.leads') }}
                        </x-nav-link-dropdown-sidebar>

                        <x-dropdown-link-sub-menu-sidebar>
                            <x-slot name="menu">
                                <span class="text-sm font-medium">{{ __('messages.sidebar.administrative.items.reports.name') }}</span>
                            </x-slot>

                            <x-slot name="content">
                                <x-nav-link-dropdown-sidebar>
                                    {{ __('messages.sidebar.administrative.items.reports.items.classes') }}
                                </x-nav-link-dropdown-sidebar>
                                <x-nav-link-dropdown-sidebar>
                                    {{ __('messages.sidebar.administrative.items.reports.items.coordinators') }}
                                </x-nav-link-dropdown-sidebar>
                                <x-nav-link-dropdown-sidebar>
                                    {{ __('messages.sidebar.administrative.items.reports.items.courses') }}
                                </x-nav-link-dropdown-sidebar>
                                <x-nav-link-dropdown-sidebar>
                                    {{ __('messages.sidebar.administrative.items.reports.items.financial') }}
                                </x-nav-link-dropdown-sidebar>
                                <x-nav-link-dropdown-sidebar>
                                    {{ __('messages.sidebar.administrative.items.reports.items.students') }}
                                </x-nav-link-dropdown-sidebar>
                                <x-nav-link-dropdown-sidebar>
                                    {{ __('messages.sidebar.administrative.items.reports.items.teachers') }}
                                </x-nav-link-dropdown-sidebar>
                            </x-slot>
                        </x-dropdown-link-sub-menu-sidebar>

                        <x-nav-link-dropdown-sidebar>
                            {{ __('messages.sidebar.administrative.items.announcements') }}
                        </x-nav-link-dropdown-sidebar>

                        <x-dropdown-link-sub-menu-sidebar>
                            <x-slot name="menu">
                                <span class="text-sm font-medium">{{ __('messages.sidebar.administrative.items.documents.name') }}</span>
                            </x-slot>

                            <x-slot name="content">
                                <x-nav-link-dropdown-sidebar>
                                    {{ __('messages.sidebar.administrative.items.documents.items.certificates') }}
                                </x-nav-link-dropdown-sidebar>
                                <x-nav-link-dropdown-sidebar>
                                    {{ __('messages.sidebar.administrative.items.documents.items.declaration') }}
                                </x-nav-link-dropdown-sidebar>
                                <x-nav-link-dropdown-sidebar>
                                    {{ __('messages.sidebar.administrative.items.documents.items.historic') }}
                                </x-nav-link-dropdown-sidebar>
                            </x-slot>
                        </x-dropdown-link-sub-menu-sidebar>
                    </x-slot>
                </x-dropdown-link-sidebar>
            </li>

            <li>
                <x-dropdown-link-sidebar>
                    <x-slot name="menu">
                        <svg class="size-4" viewBox="0 0 40 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M38 16C38.2627 16.0001 38.5228 15.9484 38.7654 15.8479C39.0081 15.7474 39.2286 15.6001 39.4144 15.4144C39.6001 15.2286 39.7474 15.0081 39.8479 14.7654C39.9484 14.5228 40.0001 14.2627 40 14V8C40.0002 7.58035 39.8682 7.1713 39.6228 6.83089C39.3774 6.49048 39.031 6.23599 38.6328 6.10352L20.6328 0.10352C20.222 -0.0331983 19.778 -0.0331983 19.3672 0.10352L1.36718 6.10352C0.968986 6.23599 0.622617 6.49048 0.377212 6.83089C0.131806 7.1713 -0.000172502 7.58035 -6.96702e-08 8V14C-6.83887e-05 14.2627 0.0516167 14.5228 0.152102 14.7654C0.252587 15.0081 0.399903 15.2286 0.585634 15.4144C0.771365 15.6001 0.99187 15.7474 1.23455 15.8479C1.47723 15.9484 1.73734 16.0001 2 16H4V30.3685C2.83347 30.7794 1.82273 31.5413 1.10653 32.5496C0.390339 33.558 0.00380471 34.7632 -6.96702e-08 36V40C-6.83887e-05 40.2627 0.0516167 40.5228 0.152102 40.7655C0.252587 41.0081 0.399903 41.2286 0.585634 41.4144C0.771365 41.6001 0.99187 41.7474 1.23455 41.8479C1.47723 41.9484 1.73734 42.0001 2 42H38C38.2627 42.0001 38.5228 41.9484 38.7654 41.8479C39.0081 41.7474 39.2286 41.6001 39.4144 41.4144C39.6001 41.2286 39.7474 41.0081 39.8479 40.7655C39.9484 40.5228 40.0001 40.2627 40 40V36C39.9962 34.7632 39.6097 33.558 38.8935 32.5496C38.1773 31.5413 37.1665 30.7794 36 30.3685V16H38ZM36 38H4V36C4.00053 35.4697 4.21141 34.9613 4.58637 34.5864C4.96133 34.2114 5.46973 34.0005 6 34H34C34.5303 34.0005 35.0387 34.2114 35.4136 34.5864C35.7886 34.9613 35.9995 35.4697 36 36V38ZM8 30V16H12V30H8ZM16 30V16H24V30H16ZM28 30V16H32V30H28ZM4 12V9.4414L20 4.1074L36 9.4414V12H4Z"
                                fill="black" />
                        </svg>
                        <span class="text-sm font-medium">{{ __('messages.sidebar.financial.name') }}</span>
                    </x-slot>

                    <x-slot name="content">
                        <x-nav-link-dropdown-sidebar>
                            {{ __('messages.sidebar.financial.items.bank_accounts') }}
                        </x-nav-link-dropdown-sidebar>
                        <x-nav-link-dropdown-sidebar>
                            {{ __('messages.sidebar.financial.items.bills') }}
                        </x-nav-link-dropdown-sidebar>
                        <x-nav-link-dropdown-sidebar>
                            {{ __('messages.sidebar.financial.items.defaulters') }}
                        </x-nav-link-dropdown-sidebar>
                        <x-nav-link-dropdown-sidebar>
                            {{ __('messages.sidebar.financial.items.negotiation') }}
                        </x-nav-link-dropdown-sidebar>
                        <x-nav-link-dropdown-sidebar>
                            {{ __('messages.sidebar.financial.items.nfse') }}
                        </x-nav-link-dropdown-sidebar>
                    </x-slot>
                </x-dropdown-link-sidebar>
            </li>
        </ul>
    </div>
</aside>
