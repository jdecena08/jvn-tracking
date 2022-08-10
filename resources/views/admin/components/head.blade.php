<!--header-->
<nav class="flex flex-col px-2 justify-left items-center w-72 dotted-bg shadow-md divide-y divide-neutral-200 h-screen z-50"
id="sidebar">
    <div class="py-4 w-full">
        <div class="flex flex-row justify-between items-center px-4 py-2 gap-3 w-full">
            <div id="app-name" class="text-xl text-neutral-200 font-semibold">{{config('app.name')}}</div>
            
            <button onclick="openSidebar()" class="hidden" id="open-sidebar"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-neutral-200" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
            </svg></button>
            
            <button onclick="closeSidebar()" id="close-sidebar"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-neutral-200" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
            </svg></button>
        </div>
    </div>

    <div class="py-4 w-full">
        <a href="#" class="flex flex-row px-4  py-2 justify-left items-center text-base font-semibold text-neutral-200 gap-3 w-full" id="user">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
            </svg>
            <span id="profile-label">User Profile</span>
        </a>
    </div>

    <div class="flex flex-col pt-2 gap-2 w-full">
        <a href="{{route('admin-dashboard')}}" class="flex flex-row px-4 py-2 justify-left items-center text-base font-semibold text-neutral-200 hover:bg-green-400 hover:bg-opacity-25 rounded-md gap-3 w-full" id="vehicle-tracking">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
            </svg>
            <span id="v-tracking-label">Vehicle Tracking</span>
        </a>

        <a href="{{route('driver-management')}}" class="flex flex-row px-4 py-2 justify-left items-center text-base font-semibold text-neutral-200 hover:bg-green-400 hover:bg-opacity-25 rounded-md gap-3 w-full" id="driver-management">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
            </svg>
            <span id="d-management-label">Driver Management</span>
        </a>

        <a href="{{route('vehicle-management')}}" class="flex flex-row px-4 py-2 justify-left items-center text-base font-semibold text-neutral-200 hover:bg-green-400 hover:bg-opacity-25 rounded-md gap-3 w-full" id="vehicle-management">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z" />
            </svg>
            <span id="v-management-label">Vehicle Management</span>
        </a>

        <a href="{{route('trip-tickets')}}" class="flex flex-row px-4 py-2 justify-left items-center text-base font-semibold text-neutral-200 hover:bg-green-400 hover:bg-opacity-25 rounded-md gap-3 w-full" id="trip-tickets">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path d="M2 6a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 100 4v2a2 2 0 01-2 2H4a2 2 0 01-2-2v-2a2 2 0 100-4V6z" />
            </svg>
            <span id="t-tickets-label">Trip Tickets</span>
        </a>
    </div>
</nav>
<!--header ends here-->