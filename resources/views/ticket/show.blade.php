<x-app-layout>

    <div class=" min-h-screen mt-4 flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-200 dark:bg-slate-300">
        <h1 class="text-white text-lg text-center font-bold">{{$ticket->title}}</h1>
        <div class=" w-full sm:max-w-xl mt-6 mb-6 px-6 py-4 bg-white dark:bg-gray-900 shadow-xl overflow-hidden sm:rounded-lg border border-slate-200">


                <div class="text-white flex justify-between py-4 mb-4 px-2 border border-slate-200">

                    <p  class="">{{$ticket->description}}</p>
                    <p>{{$ticket->created_at->diffForHumans()}}</p>
                    @if($ticket->attachment)
                    <a href="{{'/storage/'. $ticket->attachment}}" target="_blank">{{'Attachment'}}</a>
                    @endif
                </div>
<div >
    <div class="flex flex-row ">
        <div><a href="{{route('ticket.edit',$ticket->id)}}">
                <x-primary-button class="ml-3">
                    Edit
                </x-primary-button>
            </a>
        </div>

<div><form class="ml-2" action="{{route('ticket.destroy', $ticket->id)}}" method="post">
        @method('delete')
        @csrf
        <x-primary-button class="ml-3">
            Delete
        </x-primary-button>
    </form></div>


    </div>
</div>

        </div>
    </div>
</x-app-layout>
