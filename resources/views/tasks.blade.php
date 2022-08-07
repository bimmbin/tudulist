<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tasks') }}
        </h2>
    </x-slot>

    <div class="pt-12">
        <div class="sm:max-w-7xl mx-auto px-6 lg:px-8">
            <div class="overflow-hidden">

                @auth
                <form action="{{ route('tasks') }}" method="post" class="flex flex-col sm:flex-row w-full h-[10rem]">
                    @csrf
                    <textarea name="task" placeholder="Task description" id="task" cols="30" rows="10" class="text-md sm:text-xl resize-none w-full rounded-md mr-3 bg-lesle"></textarea>
                    <div class="w-full sm:w-[15rem] flex sm:flex-col mt-1 sm:mt-0">
                        <button class="bg-orangee px-3 py-2 rounded-md text-2xl font-bold w-full h-full mr-1 sm:mr-0">Create</button>
                        <input type="number" placeholder="OrderNum" name="poscount" class="bg-lesle w-full h-full rounded-md  appearance-none sm:mt-2 text-md sm:text-xl px-5">
                    </div>
                </form>

                @error('task')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror

                @error('poscount')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror

                @endauth


                <div class="py-6 text-xl sm:text-2xl font-semibold">
                    
                    Tasks
                    
                </div>


                @if(!$tasks->isEmpty())
                
                    @foreach ($tasks as $task)
                    
                    <div class="flex flex-col sm:flex-row py-5 border-b-2 border-gray-800 taskCount justify-between">
                        <div class="flex">
                            <form action="{{ route('task.finished', $task->id) }}" method="post">
                                @csrf
                                <button id="chk-btn{{ $loop->index }}" class="w-6 h-6 sm:w-7 sm:h-7 border-white border-2"><img src="/img/check.png" alt="" id="check{{ $loop->index }}" class="opacity-0 absolute h-9 -translate-x-1.5 -translate-y-[1.50rem] "></button>
                            </form>
                            <p class="px-3 sm:px-5 sm:text-xl pt-[5px] sm:pt-0">{{ $task->task }}</p>
                        </div>
                        @auth
                        <div class="text-gray-500 whitespace-nowrap px-5 sm:text-xl text-end pt-1">
                            {{ $task->poscount }}
                        </div>
                        @endauth
                    </div>

                    @endforeach

                @else
                    <div class="flex align-center justify-center mt-[5rem] text-2xl">
                        There's no current tasks
                    </div>
                @endif
                
                
               
            </div>
        </div>
    </div>
</x-app-layout>
