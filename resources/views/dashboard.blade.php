<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="-12" style="margin-top:30px;">
        <div class="max-w-7x2 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <a href="{{route('adminpage.index')}}" style="color:teal;border-radius:5px; font-size:12px; padding:10px 10px;"
   onmouseover="this.style.backgroundColor='teal'; this.style.color='white';"
   onmouseout="this.style.backgroundColor='transparent'; this.style.color='teal'; ;">
   Bato Farmland Geolocation and Mapping System
</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
