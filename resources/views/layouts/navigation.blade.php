 <nav x-data="{ open: false }" > 
    <!-- Primary Navigation Menu -->

        <!-- Responsive Settings Options -->
       {{--  <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">Your Name : {{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">Your Email :  {{ Auth::user()->email }}</div>
            </div> --}}

           {{--  <div class="mt-3 space-y-1"> --}}

          
            <br>


                <x-responsive-nav-link :href="route('profile.edit')">
                 <button class="btn btn-info-inline"> {{ __('Profile Update') }}</button>  
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                     onclick="event.preventDefault();
                    this.closest('form').submit();">
                    <button class="btn btn-danger-inline">  {{ __('Log Out') }}</button>      
                    </x-responsive-nav-link>
                </form>
           {{--  </div> --}}
        </div>
    </div>
 </nav> 
