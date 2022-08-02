<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tasks') }}
        </h2>
    </x-slot>

    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">

                <div class="py-6 text-2xl font-semibold">
                    
                    Tasks
                    
                </div>

                <div class="flex py-5 border-b-2 border-gray-800">
                    <form action="post" method="">
                        <button id="chk-btn" class="w-7 h-7 border-white border-2"><img src="/img/check.png" alt="" id="check" class="opacity-0 absolute h-9 -translate-x-1.5 -translate-y-[1.50rem] "></button>
                    </form>
                    <p class="px-5 sm:text-xl">make it functional immediately make it functional immediately make it functional immediately make it functional immediately make it functional immediately make it functional immediately make it functional immediately</p>
                </div>

               
            </div>
        </div>
    </div>
</x-app-layout>
