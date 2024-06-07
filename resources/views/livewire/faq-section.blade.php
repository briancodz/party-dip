<div class=" flex  flex-col items-center justify-center text-center mb-20">
    <div class="container mx-auto flex flex-col-reverse lg:flex-row justify-between items-center mb-4"  x-data="{ openFaq: null }">

            <div class="lg:w-1/4 mb-6 lg:mb-0 order-2 lg:order-1 p-4  ">
                <h1 class="text-slate-900 mt-10 text-left tracking-normal font-dmsans text-dmsans-large font-medium">
                    Frequently asked questions
                </h1>
                <p
                    class="text-slate-600 mb-6 text-left py-5 tracking-normal font-dmsans text-dmsans-lsmall font-light leading-loose">
                    Here are some of the questions commonly asked by our community. If you have any questions regarding
                    Partydip,
                    please don’t hesitate to reach out to us.
                </p>
            </div>

            <!-- FAQ Section -->
            <div class="space-y-4 lg:w-3/4 order-1 lg:order-2 lg:ml-10">
                <!-- FAQ Item -->
                <div class="bg-customWhite p-5 rounded-lg shadow-md" x-data="{ id: 1 }">
                    <div class="flex items-center justify-between cursor-pointer"
                        x-on:click="openFaq === id ? openFaq = null : openFaq = id">
                        <h2 class="text-slate-900 text-left font-dmsans text-dmsans-medium font-semibold">
                            Who can list on Partydip? </h2>
                        <img src="images/openfaq.png" alt="Aplus Icon" class="w-6 h-6">
                    </div>
                    <p x-show="openFaq === id" 
                        class="text-slate-600 text-left font-dmsans text-dmsans-lsmall font-light leading-loose mt-2"
                        x-transition>
                        Partydip is an online marketplace and booking platform dedicated to children's parties. We're
                        currently accepting vendor applications for small party businesses, such as face painters,
                        balloon
                        artists, cake bakers, bounce house rentals, venues and so much more! Our platform is designed
                        for
                        parents to "discover" fun and unique vendors and venues they may not have heard about before,
                        and to
                        help you grow your business. </p>
                </div>

                <!-- FAQ Item -->
                <div class="bg-customWhite p-5 rounded-lg shadow-md" x-data="{ id: 2 }">
                    <div class="flex items-center justify-between cursor-pointer"
                        x-on:click="openFaq === id ? openFaq = null : openFaq = id">
                        <h2 class="text-slate-900 text-left font-dmsans text-dmsans-medium font-semibold">
                            How does the commission work? </h2>
                        <img src="images/openfaq.png" alt="Aplus Icon" class="w-6 h-6">
                    </div>
                    <p x-show="openFaq === id"
                        class="text-slate-600 text-left font-dmsans text-dmsans-lsmall font-light leading-loose mt-2"
                        x-transition>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi adipisci quasi molestiae
                        aperiam
                        aut temporibus impedit suscipit alias laborum! Ratione quam porro molestiae, ea ipsum sequi!
                        Ducimus
                        architecto et distinctio. </p>
                </div>

                <!-- FAQ Item -->
                <div class="bg-customWhite p-5 rounded-lg shadow-md" x-data="{ id: 3 }">
                    <div class="flex items-center justify-between cursor-pointer"
                        x-on:click="openFaq === id ? openFaq = null : openFaq = id">
                        <h2 class="text-slate-900 text-left font-dmsans text-dmsans-medium font-semibold">
                            How do I get paid for bookings? </h2>
                        <img src="images/openfaq.png" alt="Aplus Icon" class="w-6 h-6">
                    </div>
                    <p x-show="openFaq === id"
                        class="text-slate-600 text-left font-dmsans text-dmsans-lsmall font-light leading-loose mt-2"
                        x-transition>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus ut recusandae unde
                        necessitatibus
                        labore ducimus officiis nesciunt saepe mollitia. Quos, temporibus. Sit eos eaque enim maiores
                        vel
                        minima quos molestias! </p>
                </div>

                <!-- FAQ Item -->
                <div class="bg-customWhite p-5 rounded-lg shadow-md" x-data="{ id: 4 }">
                    <div class="flex items-center justify-between cursor-pointer"
                        x-on:click="openFaq === id ? openFaq = null : openFaq = id">
                        <h2 class="text-slate-900 text-left font-dmsans text-dmsans-medium font-semibold">
                            Can I take payments outside of Partydip? </h2>
                        <img src="images/openfaq.png" alt="Aplus Icon" class="w-6 h-6">
                    </div>
                    <p x-show="openFaq === id"
                        class="text-slate-600 text-left font-dmsans text-dmsans-lsmall font-light leading-loose mt-2"
                        x-transition>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed necessitatibus autem tempore
                        soluta
                        cum perferendis provident deleniti obcaecati fuga suscipit. Ad aliquid fugiat tempore
                        necessitatibus
                        esse debitis maiores explicabo! Quasi! </p>
                </div>
                <!-- FAQ Item -->
                <div class="bg-customWhite p-5 rounded-lg shadow-md" x-data="{ id: 5 }">
                    <div class="flex items-center justify-between cursor-pointer"
                        x-on:click="openFaq === id ? openFaq = null : openFaq = id">
                        <h2 class="text-slate-900 text-left font-dmsans text-dmsans-medium font-semibold">
                            Have more questions ? </h2>
                        <img src="images/openfaq.png" alt="Aplus Icon" class="w-6 h-6">
                    </div>
                    <p x-show="openFaq === id"
                        class="text-slate-600 text-left font-dmsans text-dmsans-lsmall font-light leading-loose mt-2"
                        x-transition>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed necessitatibus autem tempore
                        soluta
                        cum perferendis provident deleniti obcaecati fuga suscipit. Ad aliquid fugiat tempore
                        necessitatibus
                        esse debitis maiores explicabo! Quasi! </p>
                </div>

            </div>

    </div>
</div>
