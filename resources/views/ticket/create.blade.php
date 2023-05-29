 <x-app-layout>

 <div class=" min-h-screen mt-4 flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-300 dark:bg-gray-600">

 <div class=" w-full sm:max-w-xl mt-6 mb-6 px-6 py-4 bg-gray-500 dark:bg-gray-900 shadow-md overflow-hidden sm:rounded-lg">
  <h1 class="text-white text-lg text-center font-bold">Add Tickets</h1>

 @if(session('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('message')}}
        </div>
        @endif


<form method="POST" action="{{  route('ticket.store')}}" enctype="multipart/form-data">
@csrf

<div class="mt-6 mb-6">
<x-input-label for="title" :value="__('Title')" />

                          <x-text-input id="title" class="block mt-1 w-full"
                                          type="text"
                                          name="title"
                                         />

                          <x-input-error :messages="$errors->get('title')" class="mt-2" />
</div>


<div class="mt-6 mb-6">
            <x-input-label for="description" :value="__('Description')" />

           <x-textarea id="description"  type="text"  name="description"/>

            <x-input-error :messages="$errors->get('description')" class="mt-2" />
</div>
<div class="mt-6 mb-6">
            <x-input-label for="attachment" :value="__('Attachment')" />

            <x-file-input id="attachment" class="block mt-1 w-full"

                            name="attachment"
                             />

            <x-input-error :messages="$errors->get('attachment')" class="mt-2" />
</div>
<div class="flex items-center justify-end">
        <x-primary-button class="ml-3 mt-4 mb-4">
                        {{ __('Submit') }}
                    </x-primary-button>
                    </div>
</form>
        </div>
</div>

</x-app-layout>
