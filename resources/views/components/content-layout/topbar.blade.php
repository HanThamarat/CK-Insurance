
<div class="bg-white md:flex gap-6 py-2 border-b-2 border-orange-500 border-dashed">
    <div class="container mx-auto px-4 flex justify-between items-center">
        <div class="font-primaryBold text-[20px] flex items-center">
            <span class="text-red-500 mr-7">CK <span class="text-orange-500">Insurance</span></span>
            {{-- <div class="group relative flex justify-center items-center text-zinc-600 text-sm font-bold">
                <div class="shadow-md flex items-center group-hover:gap-2 bg-gradient-to-br from-orange-200 to-orange-300 p-3 rounded-full cursor-pointer duration-300" onclick="openModal()">
                    <svg fill="none" viewBox="0 0 24 24" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg" class="fill-zinc-600">
                        <path stroke-linejoin="round" stroke-linecap="round" d="M15.4306 7.70172C7.55045 7.99826 3.43929 15.232 2.17021 19.3956C2.07701 19.7014 2.31139 20 2.63107 20C2.82491 20 3.0008 19.8828 3.08334 19.7074C6.04179 13.4211 12.7066 12.3152 15.514 12.5639C15.7583 12.5856 15.9333 12.7956 15.9333 13.0409V15.1247C15.9333 15.5667 16.4648 15.7913 16.7818 15.4833L20.6976 11.6784C20.8723 11.5087 20.8993 11.2378 20.7615 11.037L16.8456 5.32965C16.5677 4.92457 15.9333 5.12126 15.9333 5.61253V7.19231C15.9333 7.46845 15.7065 7.69133 15.4306 7.70172Z"></path>
                    </svg>
                    <span class="text-[0px] group-hover:text-sm duration-300">ค้นหาข้อมูลลูกค้า</span>
                </div>
            </div> --}}

            @include('data_customers.customer')
        </div>


        <div>
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <button
                            class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                                alt="{{ Auth::user()->name }}" />
                        </button>
                    @else
                        @php
                            $text = Auth::user()->name;
                            $textSplit = explode(' ', $text);
                            if (empty($textSplit[1])) {
                                $substring = substr($textSplit[0], 0, 1);
                            } else {
                                $sub01 = substr($textSplit[0], 0, 1);
                                $sub02 = substr($textSplit[1], 0, 1);
                                $substring = $sub01 . $sub02;
                            }
                        @endphp
                        <span class="inline-flex rounded-md">
                            <button type="button"
                                class="inline-flex items-center px-3 py-2 border-white text-sm leading-4 font-medium rounded-md text-orange-700 bg-primary transition ease-in-out duration-150">
                                <div
                                    class="mr-2 h-[40px] w-[40px] rounded-lg bg-red-600 text-white flex justify-center items-center border-2 border-red-400">
                                    <span class="text-[16px] font-medium">{{ $substring }}</span>
                                </div>
                                <div class="flex">
                                    <span>{{ Auth::user()->name }}</span>
                                    <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </div>
                            </button>
                        </span>
                    @endif
                </x-slot>

                <x-slot name="content">
                    <!-- Account Management -->
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Account') }}
                    </div>

                    <x-dropdown-link href="{{ route('profile.show') }}">
                        {{ __('Profile') }}
                    </x-dropdown-link>

                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <x-dropdown-link href="{{ route('api-tokens.index') }}">
                            {{ __('API Tokens') }}
                        </x-dropdown-link>
                    @endif

                    <div class="border-t border-gray-200"></div>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf

                        <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>
    </div>
</div>

{{-- @include('components.content-layout.index') --}}

{{-- @include('data_customers.customer') --}}

@include('data_customers.index')


