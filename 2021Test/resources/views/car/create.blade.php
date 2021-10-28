<x-app-layout>
    <head>
        <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>
        <style>
            body {
                width: 80%;
                margin: 10px auto 20px;
            }
        </style>
    </head>
    <body >
        <x-slot name="header">
            <h2
                class="font-semibold text-xl text-gray-800 leading-tight"
                style="text-align: center;">
                {{ __('CREATE') }}
            </h2>
        </x-slot>
        <div class="max23" style="margin-top: 110px">
            <form
                action="/store"
                method="post"
                enctype="multipart/form-data"
                class="w-full mx-auto max-w-3xl bg-white shadow p-8 text-gray-700 ">
                @csrf<!-- 토큰 -->
                <div class="flex flex-wrap mb-6">
                    <div class="relative w-full appearance-none label-floating">
                        <input
                            class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                            type="text"
                            name="company"
                            value="{{ old('company')}}"
                            placeholder="제조회사">
                            <label
                                for="company"
                                class="absolute tracking-wide py-2 px-4 mb-4 opacity-0 leading-tight block top-0 left-0 cursor-text">
                                company
                            </label>
                            @error('title')
                            <div>{{$message}}</div>
                            @enderror
                            <!-- 에러 메세지 출력 -->
                        </div>

                        <div class="relative w-full appearance-none label-floating">
                            <input
                                class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                                type="text"
                                name="name"
                                value="{{ old('name')}}"
                                placeholder="자동차명">
                                <label
                                    for="name"
                                    class="absolute tracking-wide py-2 px-4 mb-4 opacity-0 leading-tight block top-0 left-0 cursor-text">
                                    name
                                </label>
                                @error('name')
                                <div>{{$message}}</div>
                                @enderror
                                <!-- 에러 메세지 출력 -->
                            </div>

                            <div class="relative w-full appearance-none label-floating">
                                <input
                                    class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                                    type="text"
                                    name="year"
                                    value="{{ old('year')}}"
                                    placeholder=" 년도">
                                    <label
                                        for="title"
                                        class="absolute tracking-wide py-2 px-4 mb-4 opacity-0 leading-tight block top-0 left-0 cursor-text">
                                        year
                                    </label>
                                    @error('year')
                                    <div>{{$message}}</div>
                                    @enderror
                                    <!-- 에러 메세지 출력 -->
                                </div>

                                <div class="relative w-full appearance-none label-floating">
                                    <input
                                        class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                                        type="text"
                                        name="price"
                                        value="{{ old('price')}}"
                                        placeholder="가격">
                                        <label
                                            for="price"
                                            class="absolute tracking-wide py-2 px-4 mb-4 opacity-0 leading-tight block top-0 left-0 cursor-text">
                                            price
                                        </label>
                                        @error('price')
                                        <div>{{$message}}</div>
                                        @enderror
                                        <!-- 에러 메세지 출력 -->
                                    </div>
                                    <div class="relative w-full appearance-none label-floating">
                                        <input
                                            class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                                            type="text"
                                            name="style"
                                            value="{{ old('style')}}"
                                            placeholder="외형">
                                            <label
                                                for="style"
                                                class="absolute tracking-wide py-2 px-4 mb-4 opacity-0 leading-tight block top-0 left-0 cursor-text">
                                                Title
                                            </label>
                                            @error('style')
                                            <div>{{$message}}</div>
                                            @enderror
                                            <!-- 에러 메세지 출력 -->
                                        </div>
                                        <div class="relative w-full appearance-none label-floating">
                                            <input
                                                class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                                                type="text"
                                                name="kind"
                                                value="{{ old('kind')}}"
                                                placeholder="차종">
                                                <label
                                                    for="kind"
                                                    class="absolute tracking-wide py-2 px-4 mb-4 opacity-0 leading-tight block top-0 left-0 cursor-text">
                                                    kind
                                                </label>
                                                @error('kind')
                                                <div>{{$message}}</div>
                                                @enderror
                                                <!-- 에러 메세지 출력 -->
                                            </div>

                                        </div>
                                        <!-- Message field -->

                                        <div class="file">
                                            <label for="file" class="">File :
                                            </label>
                                            <input type="file" id="file" name="image"></div>
                                            <br>
                                                <div class="dtn">
                                                    <button
                                                        style="margin: 10px 0 0;
        width: 100%;"
                                                        type="submit"
                                                        class="border-2 border-blue-500 rounded-lg font-bold text-blue-500 px-4 py-3 transition duration-300 ease-in-out hover:bg-blue-500 hover:text-white mr-6">
                                                        CREATE</button>
                                                </div>
                                            </form>
                                        </div>
                                    </body>
                                </x-app-layout>
