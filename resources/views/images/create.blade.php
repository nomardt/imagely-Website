@extends('layout')

@section('content')
    <body class="mb-48">
        <main>
            <div class="mx-4">
                <div
                    class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
                >
                    <header class="text-center">
                        <h2 class="text-2xl font-bold uppercase mb-1">
                            Upload an Image
                        </h2>
                        <p class="mb-4">File extension should either be .jpg or .png</p>
                    </header>

                    <form method="POST" action="/" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <input
                                type="file"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="image"
                            />
                            @error('image')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <button
                                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                            >
                                Upload
                            </button>

                            <a href="/" class="text-black ml-4"> Back </a>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </body>
@endsection