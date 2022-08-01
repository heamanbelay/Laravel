
<!-- ====== Navbar Section Start -->
<header
  x-data="{navbarOpen: false}"
  class="fixed left-0 top-0 z-50 bg-white w-full flex items-center shadow-md dark:bg-slate-900 h-24"
>
  <div class="container">
    <div class="flex -mx-4 items-center justify-between relative">
      <div class="pr-4 w-60 max-w-full">
        <a href="/" class="w-full flex items-center py-2">
          <img
            src="{{ url('/img/logo1.jpg') }}"
            alt="logo"
            class="w-[48px] lg:w-[64px] inline-block dark:hidden"
          />
          <img
            src="{{ url('/img/logo1.jpg') }}"
            alt="logo"
            class="w-[48px] lg:w-[64px] hidden dark:inline-block"
          />
          <span class="text-xl xl:text-2xl font-bold text-[#0c7187] dark:text-white">Heaman Belay</span>
        </a>
      </div>
      <div class="flex px-4 justify-end items-center w-full">
        <div>
          <x-layout.navbar-in @click="navbarOpen = !navbarOpen"
                                     x-bind:class="navbarOpen && 'navbarTogglerActive'"></x-layout.navbar-in>
          <nav
            :class="!navbarOpen && 'hidden' "
            id="navbarCollapse"
            class="absolute right-0 top-full bg-white py-5 px-6 z-50 shadow rounded-lg w-full dark:bg-slate-900 dark:text-gray-300 lg:px-0 lg:max-w-full lg:w-full lg:right-4 lg:block lg:static lg:shadow-none"
          >
            <ul class="block lg:flex lg:items-center">
            @foreach($navigationItems as $item)
                <x-layout.navbar-item :href="$item['href']">{{ $item['label'] }}</x-layout.navbar-item>
              @endforeach
              <div class="ml-0 lg:ml-10 xl:ml-16 relative top-1">
              <div class="g-ytsubscribe" data-channelid="UCugBCkhwd-Z1czfDj93MlgA" data-layout="default"
                 data-count="default">
                </div>
                </div>

            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <div class="pl-[10px]">
            <button class="flex items-center px-[6px] cursor-pointer w-[50px] h-8 bg-body-color-2 dark:bg-primary 
            rounded-full outline-none"                
             x-data="{
                    toggle: () => {
                        if (localStorage.theme === 'dark') {
                            localStorage.theme = 'light';
                            document.documentElement.classList.remove('dark');
                        } else {
                            localStorage.theme = 'dark';
                            document.documentElement.classList.add('dark');
                        }
                    },
                }"
                class="mt-2 px-3 py-2 bg-pink-400 rounded-lg font-semibold text-white focus:outline-none"
                @click="toggle"
            >

                <span class="w-5 h-5 rounded-full flex items-center justify-center bg-white transition-all
                 text-body-color dark:translate-x-[18px]">
                    <svg viewBox="0 0 16 16" class="dark:hidden fill-current w-[14px] h-[14px]">
                        <path d="M4.50663 3.2267L3.30663 2.03337L2.36663 2.97337L3.55996 4.1667L4.50663 3.2267ZM2.66663
                         7.00003H0.666626V8.33337H2.66663V7.00003ZM8.66663 0.366699H7.33329V2.33337H8.66663V0.366699V0.366699ZM13.6333 
                         2.97337L12.6933 2.03337L11.5 3.2267L12.44 4.1667L13.6333 2.97337ZM11.4933 12.1067L12.6866
                          13.3067L13.6266 12.3667L12.4266 11.1734L11.4933 12.1067ZM13.3333 
                          7.00003V8.33337H15.3333V7.00003H13.3333ZM7.99996 3.6667C5.79329 3.6667 3.99996 5.46003 3.99996
                           7.6667C3.99996 9.87337 5.79329 11.6667 7.99996 11.6667C10.2066 11.6667 12 9.87337 12 7.6667C12 
                           5.46003 10.2066 3.6667 7.99996 3.6667ZM7.33329 14.9667H8.66663V13H7.33329V14.9667ZM2.36663 
                           12.36L3.30663 13.3L4.49996 12.1L3.55996 11.16L2.36663 12.36Z">

                        </path></svg><svg viewBox="0 0 23 23" class="hidden dark:block fill-current w-[18px] h-[18px]">
                            <g clip-path="url(#clip0_40_125)"><path d="M16.6111 15.855C17.591 15.1394 18.3151 14.1979 18.7723
                             13.1623C16.4824 13.4065 14.1342 12.4631 12.6795 10.4711C11.2248 8.47905 11.0409 5.95516 
                             11.9705 3.84818C10.8449 3.9685 9.72768 4.37162 8.74781 5.08719C5.7759 7.25747 5.12529 
                             11.4308 7.29558 14.4028C9.46586 17.3747 13.6392 18.0253 16.6111 15.855Z">
                            
                        </path></g></svg></span></button></div>
</header>

<!-- ====== Navbar Section End -->
