 <x-app-layout>

<div class=" min-h-screen mt-4 flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-200 dark:bg-slate-300">
 <h1 class="text-white text-lg text-center font-bold">Ticket</h1>
  <div class=" w-full sm:max-w-xl mt-6 mb-6 px-6 py-4 bg-white dark:bg-gray-900 shadow-xl overflow-hidden sm:rounded-lg border border-slate-200">

      @foreach($tickets as $ticket)
          <div class="text-white flex justify-between py-4 mb-4 px-2 border border-slate-200">

              <a href="{{route('ticket.show', $ticket->id)}}" class="">{{$ticket->title}}</a>
                <p>{{$ticket->created_at->diffForHumans()}}</p>

          </div>

      @endforeach
</div>
</div>
</x-app-layout>
