<x-app-layout>
    <x-slot name="header">
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Foglalás') }}--}}
{{--        </h2>--}}
    </x-slot>
<style>
    .py-6{
        color: purple;
    }
</style>

    <div class="py-12">
        <x-success-status class="mb-4" :status="session('message')" />
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>Foglalás</h1>
                    <br>
                    <form action="foglalas" method="POST">
                        @csrf
                        <div class="mt-4" style="color:gray">
                            <x-input id="name" class="block mt-1 w-full"  name="name" type="text" value="{{ Auth::user()->name }}" readonly />

                        </div>
                        <div class="mt-4" style="color:gray" >
                            <x-input id="email" class="block mt-1 w-full"  type="email" name="email" value="{{ Auth::user()->email }}" readonly />
                        </div>
                        <select  class="block mt-1 w-full"name="type">
                            <option id="type" value="Jogosítvány igénylése">Jogosítvány igénylése</option>
                            <option id="type" value="Személyi igazolvány igénylése">Személyi igazolvány igénylése</option>
                            <option id="type" value="Útlevél igénylése">Útlevél igénylése</option>
                            <option id="type" value="Ügyfélkapú, E-ügyintézés">Ügyfélkapú, E-ügyintézés</option>
                            <option id="type" value="Vezetőiengedély honosítása">Vezetőiengedély honosítása</option>
                            <option id="type" value="Oltási igazolvány igénylése">Oltási igazolvány igénylése</option>
                        </select>

                        <input class="block mt-1 w-full" name="date" type="datetime-local" required pattern="\d{4}-\d{2}-\d{2}">
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
