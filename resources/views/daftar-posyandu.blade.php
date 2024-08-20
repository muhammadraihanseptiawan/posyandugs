<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com">

    </script>
    <title>Webiste official posyandu grogol selatan</title>
    <style>
    /* Hide scrollbar for Chrome, Safari and Opera */
    .product::-webkit-scrollbar {
        display: none;
    }

    /* Hide scrollbar for IE, Edge and Firefox */
    .product {
        -ms-overflow-style: none;
        /* IE and Edge */
        scrollbar-width: none;
        /* Firefox */
    }

    * {
        -ms-overflow-style: none;
        /* IE and Edge */
        scrollbar-width: none;
        /* Firefox */
    }

    #toTopBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 50%;
        /* Make it round */
        padding: 20px 20px;
        cursor: pointer;
        transition: opacity 0.3s;
    }
</style>
</head>

<body>
    <!-- navbar -->

    <nav class="flex flex-wrap items-center justify-between w-full py-4 md:py-0 px-4 text-lg text-gray-700 bg-white">
        <div>
            <!-- logo -->
            <a href="/">
                <img src="/storage/img/images.png" alt="" width="150" height="150" class="md:mt-5 md:ml-9 ml-4" /> </a>
        </div>

     

    </nav>

    <!-- navbar -->
    <section class="bg-white" id="penyakit">
        <div class="container px-6 py-10 mx-auto">
            <h1 class="text-2xl font-semibold text-center text-gray-800 capitalize lg:text-3xl">
                cari posyandu deket rumah kamu <br> ke posyandu aja jangan takut :D
            </h1>

            <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-16 md:grid-cols-2 xl:grid-cols-3">
                @foreach ($list_posyandu as $posyandu)
                <div class="relative group overflow-hidden p-8 rounded-xl bg-white border border-gray-200 ">
                    <div aria-hidden="true" class="inset-0 absolute aspect-video border rounded-full -translate-y-1/2 group-hover:-translate-y-1/4 duration-300 bg-gradient-to-b from-blue-500 to-white"></div>
                    <div class="relative">
                        <h1 class="text-2xl font-bold">{{ $posyandu['nama'] }}</h1>
                        <div class="mt-6 pb-6 rounded-b-[--card-border-radius] text-xl">
                            <span class="font-extrabold"> No. Telp:</span>{{ $posyandu['no_hp'] }}
                            <br><br>
                            <span class="font-extrabold"> Alamat: </span>{{ $posyandu['alamat'] }}
                        </div>
                        <div class="flex gap-3 -mb-8 py-4 border-t border-gray-200 ">



                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <a href="/" class="fixed bottom-5 right-5 p-4 bg-green-500 text-white rounded-full focus:outline-none hover:bg-green-600 transition-colors duration-300" onclick="scrollToTop()">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
  <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
  <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
</svg>

</a>

    </section>





    <script>
        const button = document.querySelector("#menu-button");
        const menu = document.querySelector("#menu");

        button.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });

        // Get the button
        var mybutton = document.getElementById("toTopBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            var mybutton = document.getElementById("toTopBtn");

            if (
                document.body.scrollTop > 20 ||
                document.documentElement.scrollTop > 20
            ) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }


        // When the user clicks on the button, scroll to the top of the document
        function scrollToTop() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
        }
    </script>
</body>

</html>