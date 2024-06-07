<div class="bg-customBlue  overflow-x-hidden">
    <div x-data="headerBehavior()" x-init="init()" class="header fixed top-0 left-0 right-0 bg-customBlue z-50 w-full">
        <div class="flex justify-between items-center py-4 px-4 lg:px-8">
            <div class="hidden lg:flex items-center space-x-4 bg-indigo-200 py-2 px-2 rounded-sm">
                <img src="images/ystar.png" alt="Star" class="w-4 h-4">
                <p class="new-item font-dmsans text-customBlack font-bold text-dmsans-small flex items-center space-x-2">Book More Events, Risk Free!</p>
                <img src="images/ystar.png" alt="Star" class="w-4 h-4">
            </div>
            <h2 class="text-2xl font-bold text-slate-900 font-modak px-2 py-2 tracking-wide">partydip</h2>
            <p class="font-dmsans text-customBlack font-bold text-dmsans-small py-2 px-2 bg-rose-200 rounded-lg">Launching Summer 2024</p>
        </div>
    </div>

    <div class="container mx-auto mt-16 flex flex-col-reverse lg:flex-row lg:justify-between lg:items-center px-4">
        <div class="lg:w-1/2 lg:order-first mt-18">
            <h1 class="text-customBlack text-modak-large mb-2 mt-20 font-modak leading-none text-left">Connect with parents today</h1>
            <p class="text-customBlack mb-6 text-dmsans-medium font-dmsans leading-loose text-left tracking-wide">Party-planning parents are looking for unique vendors and venues like yours. List your business today and start getting leads at no cost!</p>
            <div class="flex justify-start mb-10">
                <button class="bg-yellow-200 text-slate-900 py-4 font-bold px-5 rounded-custom hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-opacity-75">Get started</button>
            </div>
        </div>
        <div class="hidden md:block md:mt-10 md:ml-20">
            <img src="{{ asset('./images/web-landing.png') }}" alt="Desktop Landing Page" class="w-full h-auto">
        </div>

        <div class="lg:w-1/2 relative lg:order-last lg:mt-20 md:hidden">
            <img src="{{ asset('./images/landing-page.png') }}" alt="Partydip" class="w-full h-auto rounded-lg">
            <img src="{{ asset('./images/serena.png') }}" alt="Small Image" class="absolute -bottom-14 left-10 w-1/3 rounded-lg">
            <img src="{{ asset('./images/lp-small.png') }}" alt="Small Image" class="md:top-6 absolute -bottom-3 right-16 w-60">
        </div>
    </div>
</div>
