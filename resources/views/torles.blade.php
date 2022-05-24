<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Foglalások') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Foglalások megjelenítéséhez táblázat-->
                    <table class="table table-fixed">
                        <thead>
                        <x-success-status class="mb-4" :status="session('message')" />
                        <tr>
                            <th >Név</th>
                            <th >email</th>
                            <th >Mire</th>
                            <th >Dátum</th>
                            <th >#</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $bookings = DB::table('bookings')->where('name', 'like',Auth::user()->name)->get();?>
                        @forelse ($bookings as $booking)
                            <tr>
                                <td>{{$booking->name}}</td>
                                <td>{{$booking->email}}</td>
                                <td>{{$booking->type}}</td>
                                <td>{{$booking->date}}</td>
                                <td>
                                    <form action="{{url('foglalás-torlese/'.$booking->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <x-button class="btn btn-danger ease-in duration-300">Törlés</x-button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td calspan="6"> nincs foglalás</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
