<!-- component -->
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Loopple/loopple-public-assets@main/motion-tailwind/motion-tailwind.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white rounded-lg py-5">

    <div class="container flex flex-col mx-auto bg-white rounded-lg pt-12 my-5">
        @if(session('error'))
        <div class="flex w-96 shadow-lg rounded-lg mx-auto">
            <div class="bg-red-600 py-4 px-6 rounded-l-lg flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="fill-current text-white" width="20" height="20">
                    <path fill-rule="evenodd" d="M4.47.22A.75.75 0 015 0h6a.75.75 0 01.53.22l4.25 4.25c.141.14.22.331.22.53v6a.75.75 0 01-.22.53l-4.25 4.25A.75.75 0 0111 16H5a.75.75 0 01-.53-.22L.22 11.53A.75.75 0 010 11V5a.75.75 0 01.22-.53L4.47.22zm.84 1.28L1.5 5.31v5.38l3.81 3.81h5.38l3.81-3.81V5.31L10.69 1.5H5.31zM8 4a.75.75 0 01.75.75v3.5a.75.75 0 01-1.5 0v-3.5A.75.75 0 018 4zm0 8a1 1 0 100-2 1 1 0 000 2z"></path>
                </svg>
            </div>
            <div class="px-4 py-6 bg-white rounded-r-lg flex justify-between items-center w-full border border-l-transparent border-gray-200">
                <div>     {{ session('error') }}</div>
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-700" viewBox="0 0 16 16" width="20" height="20">
                        <path fill-rule="evenodd" d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    @endif
    <div class="flex justify-center w-full h-full my-auto xl:gap-14 lg:justify-normal md:gap-5 draggable">
        <div class="flex items-center justify-center w-full lg:p-12">
            <div class="flex items-center xl:p-10">
                <form class="flex flex-col w-full h-full pb-6 text-center bg-white rounded-3xl" method="post">
                    @csrf
                    <h3 class="mb-3 text-xl font-extrabold text-dark-grey-900">Selamat datang di rancang bangun sistem E posyandu <br> wilayah kel grogol selatan</h3>
           

                    <label for="email" class="mb-2 text-sm text-start text-grey-900">Email*</label>
                    <input id="email" type="email" placeholder="email pengelola" class="flex items-center w-full px-5 py-4 mr-2 text-sm font-medium outline-none focus:bg-grey-400 mb-7 placeholder:text-grey-700 bg-grey-200 text-dark-grey-900 rounded-2xl" name="email" />
                    <label for="password" class="mb-2 text-sm text-start text-grey-900">Password*</label>
                    <input id="password" type="password" placeholder="Enter a password" class="flex items-center w-full px-5 py-4 mb-5 mr-2 text-sm font-medium outline-none focus:bg-grey-400 placeholder:text-grey-700 bg-grey-200 text-dark-grey-900 rounded-2xl" name="password" />
                    <div class="flex flex-row justify-between mb-8">
                        <label class="relative inline-flex items-center mr-3 cursor-pointer select-none">
                            <input type="checkbox" checked value="" class="sr-only peer">
                            <div class="w-5 h-5 bg-white border-2 rounded-sm border-grey-500 peer peer-checked:border-0 peer-checked:bg-purple-blue-500">
                                <img class="" src="https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/motion-tailwind/img/icons/check.png" alt="tick">
                            </div>
                            <span class="ml-3 text-sm font-normal text-grey-900">Keep me logged in</span>
                        </label>
                        <a href="javascript:void(0)" class="mr-4 text-sm font-medium text-purple-blue-500">Forget password?</a>
                    </div>
                    <button class="mx-auto px-6 py-5 mb-5 text-sm font-bold leading-none text-white transition duration-300 md:w-96 rounded-2xl hover:bg-purple-blue-600 focus:ring-4 focus:ring-purple-blue-100 bg-purple-blue-500">masuk</button>
                   
                </form>
            </div>
        </div>
    </div>
    </div>
    <div class="flex flex-wrap -mx-3 my-5">
        <div class="w-full max-w-full sm:w-3/4 mx-auto text-center">
            <p class="text-sm text-slate-500 py-1">
            rancang bangun sistem E posyandu, wilayah kel grogol selatan
            </p>
        </div>
    </div>
</body>
<html>