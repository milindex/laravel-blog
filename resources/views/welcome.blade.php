<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Blog</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

</head>

<body>
    <header class="py-5 mb-10">
        <div class="container mx-auto px-5 lg:max-w-screen">
            <div class="flex items-center flex-col lg:flex-row">
                <a href="/" class="flex items-center no-underline text-brand text-primary uppercase font-bold text-xl">
                    <img class="text-xl ml-3 w-36" src="{{ asset('img/logo_200x72.png') }}" alt="">
                </a>
                <div class="lg:ml-auto mt-10 lg:mt-0 flex items-center">
                    <a href="/" class="no-underline hover:underline uppercase">Home</a>
                    <a href="/trending" class="ml-5 no-underline hover:underline uppercase">What's Hot!
                        @svg('img/fire-icon.svg', 'w-6 h-6 inline align-bottom')
                    </a>
                    <a href="/about" class="ml-5 no-underline hover:underline uppercase">About</a>
                    <a href="/hogwarts" class="ml-5 no-underline hover:underline uppercase">Login</a>
                </div>
            </div>
        </div>
    </header>

    <footer>
        <div class="container mx-auto px-5 lg:max-w-screen">
            <div class="pt-5">
                <div class="text-gray-800 sm:grid md:grid-cols-4 sm:grid-cols-2 mx-auto">
                    <div class="p-5">
                        <a href="/"
                            class="flex items-center no-underline text-brand text-primary uppercase font-bold text-xl">
                            <img class="text-xl ml-3 w-36" src="{{ asset('img/logo_200x72.png') }}" alt="">
                        </a>
                    </div>
                    <div class="p-5">
                        <div class="text-sm uppercase text-indigo-600 font-bold">Resources</div>
                        <a class="my-3 block" href="/#">Documentation <span
                                class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#">Tutorials
                            <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#">Support
                            <span class="text-teal-600 text-xs p-1">New</span></a>
                    </div>
                    <div class="p-5">
                        <div class="text-sm uppercase text-indigo-600 font-bold">Support</div>
                        <a class="my-3 block" href="/#">Help Center <span
                                class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#">Privacy
                            Policy <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block"
                            href="/#">Conditions
                            <span class="text-teal-600 text-xs p-1"></span></a>
                    </div>
                    <div class="p-5">
                        <div class="text-sm uppercase text-indigo-600 font-bold">Contact us</div>
                        <a class="my-3 block" href="/#">XXX XXXX, Floor 4 San Francisco, CA <span
                                class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block"
                            href="/#">contact@company.com <span class="text-teal-600 text-xs p-1"></span></a>
                    </div>
                </div>
            </div>
            <div class="pt-2 socials">
                <div class="flex pb-5 px-3 m-auto pt-5 border-t text-gray-800 text-sm flex-col items-center">
                    <div class="md:flex-auto md:flex-row-reverse mt-2 flex-row flex">
                        <a href="https://github.com/milindex" class="p-2 rounded-full text-white mx- bg-accentGitlab" target="_blank">
                            @svg('img/github.svg', 'github')
                        </a>
                        <a href="https://gitlab.com/milindks" class="p-2 rounded-full text-white mx-1 bg-accentGithub"
                            target="_blank">
                            @svg('img/github.svg', 'github')
                        </a>
                        <a href="https://www.linkedin.com/in/milindks/"
                            class="p-2 rounded-full text-white mx-1 bg-accentLinkedin" target="_blank">
                            @svg('img/linkedin-brands.svg', 'linkedin')
                        </a>
                        <a href="mailto:milind4j@gmail.com" class="p-2 rounded-full text-white mx-1 bg-accentMail"
                            target="_blank">
                            @svg('img/at-mail.svg', 'mail')
                        </a>
                        <a href="https://www.instagram.com/milindex"
                            class="p-2 rounded-full text-white mx-1 bg-accentInstagram" target="_blank">
                            @svg('img/instagram-brands.svg', 'instagram')
                        </a>
                        <a href="https://twitter.com/milinded" class="p-2 rounded-full text-white mx-1 bg-accentTwitter"
                            target="_blank">
                            @svg('img/twitter_icon.svg', 'twitter_icon')
                        </a>
                    </div>
                    <div class="my-5"> Milind Sonawane © 2021 -
                        {{ date('Y') }}
                    </div>
                </div>
            </div>
        </div>

    </footer>

</body>

</html>
