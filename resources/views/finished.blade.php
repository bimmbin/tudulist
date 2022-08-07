<x-app-layout>


    <div class="py-12">
        <div class="sm:max-w-7xl mx-auto px-6 lg:px-8">
            <div class="overflow-hidden">

                <div class="py-6 text-xl sm:text-2xl font-semibold">
                    
                    Finished Tasks
                    
                </div>


                @foreach ($finished as $finish)
                    
                <div class="flex flex-col sm:flex-row py-5 border-b-2 border-gray-800 justify-between finishedCount">
                    <div class="flex">
                        <form action="{{ route('task.undo', $finish->id) }}" method="post">
                            @method('patch')
                            @csrf
                            <button id="unchk-btn{{ $loop->index }}" class="w-7 h-7 border-white border-2"><img src="/img/check.png" id="uncheck{{ $loop->index }}" class="absolute h-9 -translate-x-1.5 -translate-y-[1.50rem] "></button>
                        </form>
                        <p class="px-3 sm:px-5 sm:text-xl pt-[5px] sm:pt-0">{{ $finish->task }}</p>
                    </div>
                    <div class="text-gray-500 whitespace-nowrap text-sm sm:text-[1rem] text-end pt-1">
                        {{ $finish->updated_at->diffForHumans() }}
                    </div>
                </div>

                @endforeach

                <div class="">
                    {{ $finished->onEachSide(2)->links() }}
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
