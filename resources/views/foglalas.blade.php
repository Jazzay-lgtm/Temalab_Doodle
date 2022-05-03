<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Foglalás') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>Foglalás</h1>
                    <br>
                    <form action="Regex.php" target="_popup" method="post">
                        <div class="mt-4">
                            <x-input id="nev_ter" class="block mt-1 w-full" placeholder="Név" type="text" name="Nev" :value="old('name')" required autofocus />
                        </div>
                        <div class="mt-4">
                            <x-input id="email_ter" class="block mt-1 w-full" placeholder="E-mail" type="email" name="Email" :value="old('email')" required />
                        </div>
                        <select  class="block mt-1 w-full">
                            <option value="Jogositvany">Jogosítvány igénylése</option>
                            <option value="Szemelyi">Személyi igazolvány igénylése</option>
                            <option value="Utlevel">Útlevél igénylése</option>
                            <option value="Ugyfelkapu">Ügyfélkapú, E-ügyintézés</option>
                            <option value="vezet_hon">Vezetőiengedély honosítása</option>
                            <option value="oltasi">Oltási igazolvány igénylése</option>
                        </select>
                        <input class="block mt-1 w-full" name="Calendar" type="datetime-local" required pattern="\d{4}-\d{2}-\d{2}">
                        <br>
                        <br>
                        <x-button class="ml-4">
                            {{ __('Foglalás') }}
                        </x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
