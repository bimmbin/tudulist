<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tasks') }}
        </h2>
    </x-slot>

    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">

                @auth
                <form action="{{ route('tasks') }}" method="post" class="flex w-full h-[10rem]">
                    @csrf
                    <textarea name="task" id="task" cols="30" rows="10" class="text-xl resize-none w-full rounded-md mr-3 bg-lesle"></textarea>
                    <button class="bg-orangee px-3 py-2 rounded-md text-2xl font-bold w-[15rem]">Create</button>
                </form>

                @error('task')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
                @endauth


                <div class="py-6 text-2xl font-semibold">
                    
                    Tasks
                    
                </div>


                @if(!$tasks->isEmpty())
                
                    @foreach ($tasks as $task)
                    
                    <div class="flex py-5 border-b-2 border-gray-800 taskCount">
                        <form action="{{ route('task.finished', $task->id) }}" method="post">
                            @csrf
                            <button id="chk-btn{{ $loop->index }}" class="w-7 h-7 border-white border-2"><img src="/img/check.png" alt="" id="check{{ $loop->index }}" class="opacity-0 absolute h-9 -translate-x-1.5 -translate-y-[1.50rem] "></button>
                        </form>
                        <p class="px-5 sm:text-xl">{{ $task->task }}</p>
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
