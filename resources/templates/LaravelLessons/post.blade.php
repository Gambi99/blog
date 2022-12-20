<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel c нуля</title>

    <link href="https://unpkg.com/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <nav class="font-sans flex flex-col text-center content-center sm:flex-row sm:text-left sm:justify-between py-2 px-6 bg-white shadow sm:items-baseline w-full">
        <div class="mb-2 sm:mb-0 inner">

            <a href="/" class="text-2xl no-underline text-grey-darkest hover:text-blue-dark font-sans font-bold">Laravel с нуля</a><br>
            <span class="text-xs text-grey-dark">Уроки от CutCode</span>

        </div>

        <div class="sm:mb-0 self-center">
            <a href="#" class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">Войти</a>
        </div>
    </nav>

    <div>
        <div class="m-auto px-4 py-8 max-w-xl">
            <div class="bg-white shadow-2xl" >
                <div>
                    <img src="https://images.unsplash.com/photo-1571171637578-41bc2dd41cd2?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80">
                </div>
                <div class="px-4 py-2 mt-2 bg-white">
                    <h2 class="font-bold text-2xl text-gray-800">Who uses Tailwind?</h2>
                    <p class="sm:text-sm text-xs text-gray-700 px-2 mr-1 my-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora reiciendis ad architecto at aut placeat quia, minus dolor praesentium officia maxime deserunt porro amet ab debitis deleniti modi soluta similique...
                    </p>
                </div>
            </div>


            <div>
                <section class="rounded-b-lg mt-4">
                    <form>
                        <textarea class="w-full shadow-inner p-4 border-0 mb-4 rounded-lg focus:shadow-outline text-2xl" placeholder="Ваш комментарий..." spellcheck="false"></textarea>
                        <button type="submit" class="font-bold py-2 px-4 w-full bg-purple-400 text-lg text-white shadow-md rounded-lg ">Написать </button>
                    </form>

                    <div id="task-comments" class="pt-4">
                        <!--     comment-->
                        <div class="bg-white rounded-lg p-3  flex flex-col justify-center items-center md:items-start shadow-lg mb-4">
                            <div class="flex flex-row justify-center mr-2">
                                <h3 class="text-purple-600 font-semibold text-lg text-center md:text-left ">Иванов Иван</h3>
                            </div>


                            <p style="width: 90%" class="text-gray-600 text-lg text-center md:text-left ">Отличная статья</p>
                        </div>
                        <!--  comment end-->
                    </div>
                </section>

            </div>
        </div>
    </div>
</body>
</html>
