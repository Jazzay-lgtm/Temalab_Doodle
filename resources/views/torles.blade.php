<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Foglalások') }}
        </h2>
    </x-slot>
    <style>
        #adatok{
            text-align:center;


        }
        @media (max-width: 768px){
            #teljes_tabla,#teljes_tabla tbody, #teljes_tabla tr, #teljes_tabla td {
                display: block;
                width: 100%;
            }
            #adatok{
                text-align:center;
                border: 2px solid ;
                padding: 10px;
                border-radius: 5px;
            }

            #teljes_tabla tr td{
                text-align: right;
                padding-left: 50%;
                position: relative;
                margin-bottom: 10px;

            }
            #teljes_tabla tr{
                margin-bottom: 15px;
            }



            #teljes_tabla td:before{
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 50%;
                padding-left: 15px;
                font-size: 16px;
                text-align: left;
                font-weight: bold;

            }
            #tabla {
                font-size: 0px;
                visibility: hidden;
            }






        }
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Foglalások megjelenítéséhez táblázat-->
                    <table id="teljes_tabla" class="table table-fixed">
                        <thead>
                        <x-success-status class="mb-4" :status="session('message')" />
                        <tr id="tabla">
                            <th >Név</th>
                            <th >e-mail</th>
                            <th >Mire</th>
                            <th >Dátum</th>
                            <th >#</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $bookings = DB::table('bookings')->where('name', 'like',Auth::user()->name)->get();?>
                        @forelse ($bookings as $booking)
                            <tr id="adatok" style="text-align: center">
                                <td data-label="Név">{{$booking->name}}</td>
                                <td data-label="e-mail">{{$booking->email}}</td>
                                <td data-label="Mire">{{$booking->type}}</td>
                                <td data-label="Dátum">{{$booking->date}}</td>
                                <td>
                                    <form style="padding-top: 14px" action="{{url('foglalás-torlese/'.$booking->id) }}" method="POST">
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
