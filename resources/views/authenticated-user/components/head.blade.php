<!--header-->
<header class="flex flex-col text-base fixed top-0 z-50 shadow w-full">
    <div class="flex flex-row justify-between px-4 py-2 text-sm bg-neutral-200 h-11">
        <div class="flex flex-row justify-center items-center">
            <span class="text-left text-emerald-600">© 2022 Joint Venture National. All Rights Reserved.</span>
        </div>
        <div class="flex flex-row justify-center items-center">
            <div class="flex flex-row items-center text-emerald-600 font-semibold gap-2">
                <!--hover:text-green-400-->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                </svg>
                <span id="language" class="cursor-default">English</span>
            </div>
        </div>
    </div>

    <div class="flex flex-row justify-between px-4 py-2 dotted-bg h-11" id="header_frame">
        <div class="flex flex-row justify-center items-center">
            <a href="{{route('home')}}" class="hidden md:flex text-left text-white font-bold">JVN Tracking</a>
            <button onclick="toggleSidebar()" id="menu-button" class="flex md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
        <div class="hidden md:flex flex-row justify-center items-center gap-4">
            <a href="{{route('home')}}" id="book" class="text-left text-white hover:text-green-400 font-bold">Book</a>
            <a href="{{route('track-and-trace')}}" id="track-trace" class="text-left text-white hover:text-green-400 font-bold">Track & Trace</a>
            <a href="{{route('transaction-history')}}" id="transaction" class="text-left text-white hover:text-green-400 font-bold">Transaction History</a>
            <a href="{{route('about-us')}}" id="about-us" class="text-left text-white hover:text-green-400 font-bold">About Us</a>
            <a href="{{route('help-page')}}" id="help" class="text-left text-white hover:text-green-400 font-bold">Help</a>
        </div>
        <div class="flex flex-row justify-center items-center gap-4">
            @if(auth()->user())
                <a href="#" class="text-left text-white hover:text-green-400 font-semibold">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </a>
                <a href="#" class="text-left text-white hover:text-green-400 font-semibold" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
            @else
                <button class="text-left text-white hover:text-green-400 font-semibold" data-bs-toggle="modal" data-bs-target="#login-modal">Login</button>
                <button class="text-left text-white hover:text-green-400 font-semibold" data-bs-toggle="modal" data-bs-target="#signup-modal">Sign Up</button>

            @endif
        </div>
    </div>
</header>
<!--header ends here-->

<!--aside-->
<div class="hidden md:invisible bg-black bg-opacity-20 w-full min-h-screen fixed top-0 bottom-0 left-0 right-0 z-30" id="bg-sidebar" onclick="toggleSidebar()"></div>

<aside class="hidden md:invisible flex-col justify-center items-center min-h-screen tracking-widest fixed left-0 top-0 z-40 w-72 shadow"
id="sidebar">
    <div class="bg-emerald-600 min-h-screen pt-11 w-72">
        <div class="justify-center items-center text-center px-4 py-2 mt-11 w-full">
            <a href="{{route('home')}}" class="font-semibold text-white text-xl">{{config('app.name')}}</a>
        </div>

        <div class="flex flex-col justify-center items-center py-2 font-small text-center text-sm font-bold text-white w-full divide-y divide-opacity-25 divide-white">
            <a href="{{route('home')}}" id="book" class="px-4 py-2 text-center hover:text-green-400 hover:bg-neutral-600 hover:bg-opacity-10 font-bold w-full">Book</a>
            <a href="{{route('track-and-trace')}}" id="track-trace" class="px-4 py-2 hover:text-green-400 hover:bg-neutral-600 hover:bg-opacity-10 font-bold w-full">Track & Trace</a>
            <a href="{{route('transaction-history')}}" id="transaction" class="px-4 py-2 hover:text-green-400 hover:bg-neutral-600 hover:bg-opacity-10 font-bold w-full">Transaction History</a>
            <a href="{{route('about-us')}}" id="about-us" class="px-4 py-2 hover:text-green-400 hover:bg-neutral-600 hover:bg-opacity-10 font-bold w-full">About Us</a>
            <a href="{{route('help-page')}}" id="help" class="px-4 py-2 hover:text-green-400 hover:bg-neutral-600 hover:bg-opacity-10 font-bold w-full">Help</a>
        </div>
    </div>
</aside>
<!--aside ends here-->

<!--login modal-->
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="login-modal" tabindex="-1" aria-labelledby="login-modal" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
        <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div class="modal-header flex flex-shrink-0 items-center justify-between py-4 px-8 border-b border-neutral-200 rounded-t-md">
                <h5 class="text-xl font-medium leading-normal text-neutral-800" id="exampleModalScrollableLabel">
                Login
                </h5>
                <button type="button" class="btn-close box-content p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                data-bs-dismiss="modal" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                </svg>
                </button>
            </div>
            <div class="flex flex-col modal-body relative py-4 px-8 gap-2">
                <label for="login-email">Email</label>
                <input type="email" id="login-email" class="outline-none border border-emerald-600 rounded-md px-4 py-2">
                <label for="login-password">Password</label>
                <input type="password" id="login-password" class="outline-none border border-emerald-600 focus:ring-green-400 focus:ring-4 focus:ring-opacity-50 rounded-md px-4 py-2">
            </div>
            <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end py-4 px-8 border-t border-gray-200 rounded-b-md gap-2">
            <div class="flex flex-row gap-1">
                    <div>
                        <span>Don't have an account?</span>
                    </div>
                    <div>
                        <button class="text-emerald-600 hover:text-green-400 underline underline-offset-1"
                        data-bs-toggle="modal" data-bs-target="#signup-modal" data-bs-dismiss="modal">Sign up</buttton>
                    </div>
                    <div>
                        <span>here.</span>
                    </div>
                </div>
                <button type="button"
                class="inline-block px-6 py-2.5 bg-emerald-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-400 hover:shadow-lg transition duration-150 ease-in-out ml-1">
                Login
                </button>
            </div>
        </div>
    </div>
</div>

<!--sign up modal-->
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="signup-modal" tabindex="-1" aria-labelledby="signup-modal" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
        <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div class="modal-header flex flex-shrink-0 items-center justify-between py-4 px-8 border-b border-neutral-200 rounded-t-md">
                <h5 class="text-xl font-medium leading-normal text-neutral-800" id="exampleModalScrollableLabel">
                Sign Up
                </h5>
                <button type="button" class="btn-close box-content p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                data-bs-dismiss="modal" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                </svg>
                </button>
            </div>
            <div class="flex flex-col modal-body relative py-4 px-8 gap-2">
                <label for="signup-name">Name</label>
                <input type="text" id="signup-name" class="outline-none border border-emerald-600 rounded-md px-4 py-2">
                
                <label for="signup-email">Email</label>
                <input type="email" id="signup-email" class="outline-none border border-emerald-600 rounded-md px-4 py-2">
                
                <label for="signup-agency">Agency</label>
                <input type="text" id="signup-agency" class="outline-none border border-emerald-600 rounded-md px-4 py-2">
                
                <label for="signup-agency-address">Agency Business Address</label>
                <input type="text" id="signup-agency-address" class="outline-none border border-emerald-600 rounded-md px-4 py-2">

                <div class="flex flex-row gap-2">
                    <div class="flex flex-col gap-2 w-full">
                        <label for="signup-agency-phone">Agency Phone Number</label>
                        <input type="tel" id="signup-agency-phone" class="outline-none border border-emerald-600 rounded-md px-4 py-2 container">
                    </div>

                    <div class="flex flex-col gap-2 w-full">
                        <label for="signup-agency-mobile">Mobile Number</label>
                        <input type="tel" id="signup-agency-mobile" class="outline-none border border-emerald-600 rounded-md px-4 py-2 container">
                    </div>
                </div>

                <label for="signup-username">Username</label>
                <input type="text" id="signup-username" class="outline-none border border-emerald-600 rounded-md px-4 py-2">

                <div class="flex flex-row gap-2">
                    <div class="flex flex-col gap-2 w-full">
                        <label for="signup-password">Password</label>
                        <input type="password" id="signup-password" class="outline-none border border-emerald-600 focus:ring-green-400 focus:ring-4 focus:ring-opacity-50 rounded-md px-4 py-2 container">
                    </div>
                    
                    <div class="flex flex-col gap-2 w-full">
                        <label for="signup-confirm">Confirm Password</label>
                        <input type="password" id="signup-confirm" class="outline-none border border-emerald-600 focus:ring-green-400 focus:ring-4 focus:ring-opacity-50 rounded-md px-4 py-2 container">
                    </div>
                </div>
            </div>
            <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end py-4 px-8 border-t border-gray-200 rounded-b-md gap-2">
                <div class="flex flex-row gap-1">
                    <div>
                        <span>Already have an account?</span>
                    </div>
                    <div>
                        <button class="text-emerald-600 hover:text-green-400 underline underline-offset-1"
                        data-bs-toggle="modal" data-bs-target="#login-modal" data-bs-dismiss="modal">Login</buttton>
                    </div>
                    <div>
                        <span>here.</span>
                    </div>
                </div>
                <button type="button"
                class="inline-block px-6 py-2.5 bg-emerald-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-400 hover:shadow-lg transition duration-150 ease-in-out ml-1">
                Login
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    jQuery(window).on('scroll', function() {
        if(jQuery(window).scrollTop() > 0) {
            jQuery('#header-frame').css('opacity', '0.8');
        }
        else {
            jQuery('#header-frame').css('opacity', '1');
        }
    });

    $(document).scroll(function() {})

    function toggleSidebar() {
        jQuery('#sidebar').animate({
            width: 'toggle'
        });

        jQuery('#bg-sidebar').fadeToggle();
    }
</script>