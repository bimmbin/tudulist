<x-app-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">

                <div class="py-6 text-2xl font-semibold">
                    
                    Finished Tasks
                    
                </div>


                @foreach ($finished as $finish)
                    
                <div class="flex py-5 border-b-2 border-gray-800 justify-between">
                    <div class="flex">
                        <form action="post" method="">
                            <button id="chk-btn" class="w-7 h-7 border-white border-2"><img src="/img/check.png" alt="" class="absolute h-9 -translate-x-1.5 -translate-y-[1.50rem] "></button>
                        </form>
                        <p class="px-5 sm:text-xl">{{ $finish->task }}</p>
                    </div>
                    <div class="text-gray-500">
                        {{ $finish->updated_at->diffForHumans() }}
                    </div>
                </div>

                @endforeach

                <div class="">
                    {{ $finished->links() }}
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
