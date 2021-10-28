<x-app-layout>
    <head>
        <style>
            body{
                width: 80%;
                margin: 0 auto;
                margin-top: 10px;
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body >
        <x-slot name="header" >
            <h2
                class="font-semibold text-xl text-gray-800 leading-tight"
                style="text-align: center">
                {{ __('HOME') }}
            </h2>
        </x-slot>
        <div>
            @foreach ($cars as $car)
            <div class="p-16" style="padding: 10px">
                <div
                    class="bg-white overflow-hidden hover:bg-green-100 border border-gray-200 p-3">
                    <div class="m-2 text-justify text-sm">
                        <p class="text-right text-xs">
                            {{  $car-> created_at }}</p>
                        <span>
                            <p>Car Name :
                                {{ $car->name }}</p>
                        </span>
                        <br>
                        <div class="box2">
                            <p> Company :
                                {{ $car->company }}</p>
                        </div>
                        <p> Year :
                            {{ $car->year }}</p>
                        <div class="w-full text-right mt-4">
                            <a href="{{route('show', ['id'=>$car->id, 'page'=>$cars->currentPage()])}}">Read More</a>
                        </div>

                    </div>
                </div>

            </div>
            @endforeach
            <div class="a" style="padding: 20px">
                {{ $cars->links()}}
            </div>
        </div>
    </body>
</x-app-layout>
