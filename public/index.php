<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>홍길동 IT기술 블로그</title>

    <!-- 제이쿼리 불러오기 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- 폰트어썸 불러오기 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- 테일윈드 불러오기 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.4/tailwind.min.css">

    <!-- 공통 CSS 불러오기 -->
    <link rel="stylesheet" href="/resource/common.css">
    <!-- 공통 JS 불러오기 -->
    <script src="/resource/common.js" defer></script>
</head>

<body>
    <div class="site-wrap min-h-screen flex flex-col">
        <header class="top-bar bg-gray-500 text-white h-10 flex-shrink-0">
            <div class="container mx-auto h-full flex">
                <a href="/" class="logo flex items-center px-4">
                    <span><i class="far fa-lemon"></i></span>
                    <span class="font-bold">&nbsp;LEMON IT</span>
                </a>

                <div class="flex-grow"></div>

                <nav class="top-bar__menu-box-1">
                    <ul class="flex h-full">
                        <li>
                            <a href="/" class="h-full flex items-center px-4 hover:underline">
                                <span><i class="fas fa-home"></i></span>
                                <span class="font-bold hidden sm:block">&nbsp;HOME</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/jhs512" target="_blank"
                                class="h-full flex items-center px-4 hover:underline">
                                <span><i class="fab fa-github"></i></span>
                                <span class="font-bold hidden sm:block">&nbsp;GITHUB</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/UCiw6ewVgQkLMmgWjQp1-gKQ" target="_blank"
                                class="h-full flex items-center px-4 hover:underline">
                                <i class="fab fa-youtube"></i>
                                <span class="font-bold hidden sm:block">&nbsp;YOUTUBE</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <main class="flex-grow">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut voluptas laboriosam ipsam in quaerat nemo, iure ducimus eum suscipit soluta esse laudantium itaque consequuntur accusamus alias eos nobis sed quas?
        </main>

        <footer class="bottom-bar bg-gray-500 text-white h-10 flex-shrink-0">
            <div class="container mx-auto h-full flex justify-center">
                <a href="/" class="logo flex items-center">
                    <span><i class="far fa-lemon"></i></span>
                    <span class="font-bold">&nbsp;LEMON IT</span>
                </a>
                <div class="flex items-center">
                    &nbsp;IS GOOD!
                </div>
            </div>
        </footer>
    </div>
</body>

</html>