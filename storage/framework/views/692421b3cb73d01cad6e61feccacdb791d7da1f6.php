<section
    class="relative h-72 bg-laravel flex flex-col justify-center align-center text-center space-y-4 mb-4"
>
    <div
        class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"
        style="background-image: url('/images/laravel-logo.jpg')"
    ></div>

    <div class="z-10">
        <h1 class="text-6xl font-bold uppercase text-white">
            Imagely
        </h1>
        <p class="text-2xl text-gray-200 font-bold my-4">
            Fantastic <span style="color: #54B1CF; background: #FFFFFF;">AI</span> Artwork Collection
        </p>
        <div>
            <?php if(Auth::check()): ?>
                <a
                    href="/create"
                    class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-darklara hover:border-darklara"
                    >upload an image</a
                >
            <?php else: ?>
                <a
                    href="/register"
                    class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-darklara hover:border-darklara"
                    >upload an image</a
                >
            <?php endif; ?>
        </div>
    </div>
</section><?php /**PATH /home/vagrant/imagely_laravel/imagely/resources/views/partials/_hero.blade.php ENDPATH**/ ?>