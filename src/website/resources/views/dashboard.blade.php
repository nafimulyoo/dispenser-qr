<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    You're logged in! Welcome, {{ Auth::user()->nickname }}!
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900" >
                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{$user->qrcode}}" alt="Profile Photo" class="rounded-full h-20 w-20 object-cover">
                </div>
                <div class="p-6 text-gray-900" >
                    {{-- user water usage --}}
                    <p>User Water Usage: {{$dispense_data->where('NIM', auth::user()->NIM)->sum('water_usage')/1000}} L</p>
                </div>
                <div class="p-6 text-gray-900" >
                    {{-- user water usage --}}
                    <p>Total Water Usage: {{$dispense_data->sum('water_usage')/1000}} L</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

