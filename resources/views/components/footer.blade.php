<div x-data="{ isVisible: true }" @mousewheel.window="isVisible = false">
    <div x-show="isVisible">
        <footer
            x-data="{show: true}" x-show="show"
            class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-14 mt-24 opacity-90 md:justify-center"
            >
            <p class="ml-2">Copyright &copy; 2023, Some Rights Reserved</p>
        </footer>
    </div>
</div>