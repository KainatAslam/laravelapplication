<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
           User Avatar
        </h2>

    </header>
    <img height="50" width="50"    class=" rounded-full" src="{{ "/storage/$user->avatar" }}" alt="user-avatar" />


          <form action="{{ route('profile.avatar.ai') }} " method="POST">
                      @csrf
                      @method('patch')

              <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                       User Avatar
                    </p>

             <x-primary-button>Generate Avatar from AI</x-primary-button>
            </form>


    @if(session('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('message')}}
        </div>
        @endif


    <form method="post" action="{{ route('profile.avatar') }}" class="mt-6 space-y-6"  enctype= 'multipart/form-data'>
        @csrf
        @method('patch')
        <div>

            <x-input-label for="avatar" :value="__('Avatar')" />
            <x-text-input id="avatar" name="avatar" type="file" class="mt-1 block w-full"
            :value="old('avatar', $user->avatar)"  autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('avatar')" />
        </div>


        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>


        </div>
    </form>
</section>
