<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('isiDataDiri') }}">
                        @csrf
                        <!-- Nama lengkap orang tua -->
                        <div>
                            <x-input-label for="nameortu" :value="__('Nama Lengkap Orang Tua')" />
                            <x-text-input id="nameortu" class="block mt-1 w-full" type="text" name="nameortu"
                                :value="old('nameortu')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Nama Calon Siswa-->
                        <div class="mt-4">
                            <x-input-label for="name" :value="__('Nama Calon Siswa')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Tanggal Lahir -->
                        <div class="mt-4">
                            <x-input-label for="birthday" :value="__('Tangaal Lahir Calon Siswa')" />
                            <x-text-input id="birthday" class="block mt-1 w-full" type="date" name="birthday"
                                :value="old('birthday')" required autofocus autocomplete="birthday" />
                            <x-input-error :messages="$errors->get('birthday')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email Aktif')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Nomor Telefon -->
                        <div class="mt-4">
                            <x-input-label for="phone" :value="__('Nomor Telefon')" />
                            <x-text-input id="phone" class="block mt-1 w-full" type="number" name="phone"
                                :value="old('phone')" autocomplete="off" />
                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                href="">
                                {{ __('Already registered?') }}
                            </a>

                            <x-primary-button class="ml-4">
                                {{ __('Masukkan Data') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
