<!DOCTYPE html>
<html>
<head>
  <title>Imagely</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/logo.png" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#54B1CF",
                            darklara: "#003366",
                        },
                    },
                },
            };
        </script>
        <title>Imagely | AI Image Collection</title>
        <style>
            body {
                color:black;
            }
            .grid {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(500px, 1fr));
                grid-gap: 10px;
            }

            .grid img {
                width: 100%;
            }
        </style>
    </head>
    <body class="mb-0">
        <nav class="flex justify-between items-center" style="background-color: #003366;">
            <a href="/"
                ><img class="w-14 h-14" src="images/logo.png" alt="" class="logo"
            /></a>
            <ul class="flex space-x-6 mr-6 text-lg">
                <?php if(auth()->guard()->check()): ?>
                <li>
                    <form class='inline' method='POST' action='/logout'>
                        <?php echo csrf_field(); ?>
                        <button type="submit" style="color:white">
                            <i class="fa-solid fa-door-open"></i> Logout
                        </button>
                    </form>
                </li>
                <?php else: ?>
                <li>
                    <a href="register" class="text-white hover:text-laravel"
                        ><i class="fa-solid fa-pen-nib"></i> Sign Up</a
                    >
                </li>
                <li>
                    <a href="login" class="text-white hover:text-laravel"
                        ><i class="fa-solid fa-user"></i>
                        Login</a
                    >
                </li>
                <?php endif; ?>
            </ul>
        </nav>
    
        <main>
            <?php echo $__env->yieldContent('content'); ?>
        </main>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.flash-message','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('flash-message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </body>
</html>
<?php /**PATH /home/vagrant/imagely_laravel/imagely/resources/views/layout.blade.php ENDPATH**/ ?>