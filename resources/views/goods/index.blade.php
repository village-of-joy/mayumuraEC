<!DOCTYPE html>
<html lang="{{ str_replace('_', '_', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>まゆ村 嵐山店</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="css/style.css" rel="stylesheet">
        
    </head>
    
    <body class="text-gray-1500 body-font">
        <x-app-layout>
            <div  class="ml-4">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">まゆ村 嵐山店</h1>
                <div class="lg:w-1/3 lg:pr-10 lg:py-6 mb-6 lg:mb-0 border-gray-400 border p-4 rounded-lg">
                    <h2 class="sm:text-3xl text-2xl title-font font-medium text-gray-900 mt-4 mb-4">購入手順</h2>
                    <p　class="text-left">1.本ページで人形の土台となるものを選んでください。<br>2.ページ移動先で人形を選び、選択した土台の種類を選択してください。<br>3.メッセージには人形に付けるメッセージを入力してください。<br>コメントには要望をご記入ください。</p>
                    <p class="text-red-500 mt-2">メッセージ、コメントはご記入いただかなくても大丈夫です。<br>ブラウザバックは使わないでください。</p>
                </div>
                <h2 class="sm:text-3xl text-2xl title-font font-medium text-gray-900 mt-4 mb-4 p-1 text-black border-left p-2 w-1/3" id="DesignHeadline">購入</h2>
                <div>
                    <h3 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">土台を選択</h3>
                        <div class="img_p">
                            <p class="p-4">木版</p>
                            <img src="https://res.cloudinary.com/dsnxdprqj/image/upload/v1676088555/board_z2i0xy.jpg" alt="木板ノーマル画像" width="30%" height="30%">
                        </div>
                    <a href="/board"><button class="mt-1 inline-flex text-white bg-orange-500 border-0 py-2 px-6 focus:outline-none hover:bg-orange-200 rounded text-lg">木板</button></a>
                    <br>
                        <div class="img_p">
                            <p class="p-4">色紙</p>
                            <img src="https://res.cloudinary.com/dsnxdprqj/image/upload/v1676088544/taketatu_dh6m4m.jpg" alt="色紙ノーマル画像" width="30%" height="30%">
                        </div>
                    <a href="/shikishi"><button class="mt-1 inline-flex text-white bg-orange-500 border-0 py-2 px-6 focus:outline-none hover:bg-orange-200 rounded text-lg">色紙</button></a>
                </div>
                
                <div class="flex flex-wrap -m-2">
                    <div class="p-2 lg:w-1/4 md:w-1/2">
                        <a href="/cart/show">
                            <div class="h-full flex items-center border-gray-400 border p-4 rounded-lg hover:bg-gray-200 mt-5">
                                <img alt="team" class="w-16 h-16 bg-gray-300 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://res.cloudinary.com/dsnxdprqj/image/upload/v1676881226/%E3%82%AB%E3%83%BC%E3%83%88_k9bs6x.png">
                                <div class="flex-grow">
                                    <h2 class="text-gray-900 title-font font-medium">カートを確認</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h2 class="sm:text-3xl text-2xl title-font font-medium text-gray-900 mt-10 mb-4 p2 w-1/3" id="DesignHeadline">Contact</h2>
                    <h3 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">Access</h3>
                    
                    <section class="text-gray-600 body-font relative">
                      <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
                        <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
                            <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3267.6429554778115!2d135.67525451429418!3d35.01564187379498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6001a9ff97f2a6fd%3A0x7029f73138b13048!2z44G-44KG5p2RIOW1kOWxseW6lw!5e0!3m2!1sja!2sjp!4v1676097487531!5m2!1sja!2sjp" ></iframe>
                            <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
                                <div class="lg:h-1/4 px-5 mt-2 lg:mt-0">
                                    <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">メール</h2>
                                    <a class="text-indigo-500 leading-relaxed">example@email.com</a>
                                    <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-2">電話番号</h2>
                                    <p class="leading-relaxed">075-882-0564</p>
                                </div>
                            </div>
                        </div>
                        <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
                            <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">フィードバック</h2>
                            <p class="leading-relaxed mb-5 text-gray-600">質問・ご意見など承ります</p>
                            <form action="/contact" method="POST">
                              @csrf
                              <div class="relative mb-4">
                                <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                                <input type="text" id="name" name="contacts[name]" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
                              </div>
                              <div class="relative mb-4">
                                <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                                <input type="email" id="email" name="contacts[mail]" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
                              </div>
                              <div class="relative mb-4">
                                <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                                <textarea id="message" name="contacts[message]" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out" required></textarea>
                              </div>
                              <input type="hidden" name="contacts[user_id]" value="{{ Auth::user()->id }}">
                              <button class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">送信</button>
                          </form>
                          <p class="text-xs text-gray-500 mt-3">.mayumura</p>
                        </div>
                      </div>
                    </section>
                </div>
            </div>
        </x-app-layout>
        
        <script></script>
    </body>
</html>