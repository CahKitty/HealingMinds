<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script> <!---Caraca! só aplica por CDN--->
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="app.js"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <script>
            (function(h,o,t,j,a,r){
                h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
                h._hjSettings={hjid:1836765,hjsv:6};
                a=o.getElementsByTagName('head')[0];
                r=o.createElement('script');r.async=1;
                r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
                a.appendChild(r);
            })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
        </script>
        <title>Healing Minds Terapias Holísticas</title>
    </head>

    <body>
        <header>
               <x-nav/>
        </header>

        <section class="bg-[url('/img/conexão.png')] w-screen h-screen bg-cover bg-center" id"sobre">
                <h1 class="text-2xl md:text-3xl text-white font-bold text-center pt-40 ">
                    Ajudamos pessoas a transformarem <br>suas vidas através da reconexão <br>com o seu
                    verdadeiro EU.
                </h1>
        </section>

       <section class="bg-black flex flex-row justify-center">
            <h2 class="text-xl text-white text-center pb-10 mr-10 ml-10">
                        A Terapia Holistica não possui nenhum viés religioso, pois trabalhamoscom energias presentes no universo e no <br> campo quântico (energético) de cada pessoa.
                        Por isso cada sessão é única.
            </h2>
        </section>

       <section class="bg-white md:flex md:flex-row md:justify-center">
            <div class="bg-black md:w-1/2">
                        <p class="pt-10 md:pb-20 mr-10 ml-10 md:ml-40 md:mr-10 text-center md:text-left text-white font-thin">
                        Estamos vivendo um momento pelo qual muitas pessoas estão se sentindo perdidas, doentes, desconexas da sua identidade, da sua essência, presas em ciclos emocionais. É tanta cobrança para serem alguém, que estão esquecendo realmente de ser aquele alguém que nasceu para ser.

Isso ocorre porque a maioria das pessoas não acordaram do seu sono espiritual e estão vivendo literalmente uma ”vida de formiga” (acordar, levantar, trabalhar, dormir e repetir o script todo denovo)  e não fazem a mínima idëia de como acordar, vivendo uma vida infeliz por acharem que não são merecedores de algo melhor, ou para provar algo a alguém.
                        </p>
            </div>
            <div class="bg-black md:w-1/2">
                        <p class="pt-10 pb-20 md:mr-40 mr-10 ml-10 md:ml-10 text-center md:text-left text-white font-thin">
                        Pensando nisso, O instituto Healing Minds foi criado com a missão de desconstruir toda a crença limitada pela qual você foi criado, desbloquear a sua fonte de abundãncia, e te ajudar a despertar para uma nova perspectiva da sua vida, aquela que você realmente nasceu e merece viver e ser verdadeiramente feliz.

Fazemos isso através das nossas Terapias Holísticas, transmutando energias e crenças, ou seja, mudando de um estado “ruim” para um mais elevado desbloqueando todos os setores da sua vida. Pois entendemos que as pessoas vão se tornar cada vez melhores, quando a mente estiver livre para viver e amar tanto a si mesmas quanto o próximo!
                        </p>
             </div>
        </section>

        <section class="bg-white md:flex md:flex-row justify-center">
            <div class="bg-white md:w-1/2 ">
                <h1 class="pt-20 mr-10 ml-10 md:ml-40 text-2xl md:text-left text-center text-slate-700 font-bold">
                Tá, mas você sabe o que<br>é um Terapeuta Holístico?
                </h1>
                <p class="pt-10 pb-20 mr-10 ml-10 md:ml-40 md:text-left text-center text-slate-700 font-thin">
                        Pensando nisso, O instituto Healing Minds foi criado com a missão de desconstruir toda a crença limitada pela qual você foi criado, desbloquear a sua fonte de abundãncia, e te ajudar a despertar para uma nova perspectiva da sua vida, aquela que você realmente nasceu e merece viver e ser verdadeiramente feliz.

            </div>
            <div class="bg-[url('/img/terapia.png')] md:w-1/2 h-96 bg-cover bg-center">

            </div>
        </section>


        <section class="justify-center bg-orange-300 w-screen h-40 pt-10 pb-10">
                <h1 class="text-slate-700 text-2xl md:text-3xl font-bold text-center">Você nasceu para ser plenamente feliz e abundante!</h1>
                <p class="text-slate-700  text-center font-thin ml-10 mr-10">
                        Chega de viver uma vida de sofrimento e escassez. Você é muito maaior <br> do que pensa, e juntos vamos te conduzir para o caminho de uma vida libertadora!
                <p>
        </section>
        <section class="bg-[url('/img/buddah.png')] w-screen h-screen bg-cover bg-center bg-fixed ">

        </section>
        <section class="bg-white" id="terapias">
        <h1 class="text-slate-700 pt-20 text-2xl mdtext-4xl text-center text-slate-700 font-bold">
               Terapias
                </h1>
        </section>
        <section class="bg-white">
        <div class="md:flex md:flex-row md:items-center justify-center mt-10 md:text-left text-center ml-10 mr-10 md:ml-40">
            <img class="md:mr-10 scale-75"src="img/theta.png" alt="">
                <div>
                    <h2 class="md:ml-10 text-2xl text-slate-700 font-bold">
                            Theta Healing®
                    </h2>
                     <p class="text-slate-700 md:text-left text-center font-thin ml-10 mr-10 md:mr-40">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse aliquet maximus luctus. Vestibulum elementum magna pulvinar orci vehicula feugiat.
                        Curabitur eu vestibulum turpis, quis sodales sem. Aliquam id ante quis leo dictum posuere vel sed lorem. Nullam tempor neque sed urna varius pulvinar eu id elit.
                     <p>
                </div>
        <div>
        </section>
        <section class="bg-white">
        <div class="md:flex md:flex-row md:items-center justify-center mt-10 md:text-left text-center ml-10 mr-10 md:ml-40">
            <img class="md:mr-10 scale-75"src="img/radionica.png" alt="">
                <div>
                    <h2 class="md:ml-10 text-2xl text-slate-700 font-bold">
                            Mesa Radiônica
                    </h2>
                     <p class="text-slate-700 md:text-left text-center font-thin ml-10 mr-10 md:mr-40">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse aliquet maximus luctus. Vestibulum elementum magna pulvinar orci vehicula feugiat.
                        Curabitur eu vestibulum turpis, quis sodales sem. Aliquam id ante quis leo dictum posuere vel sed lorem. Nullam tempor neque sed urna varius pulvinar eu id elit.
                     <p>
                </div>
        <div>
        </section>
        <section class="bg-white">
        <div class="md:flex md:flex-row md:items-center justify-center mt-10 md:text-left text-center ml-10 mr-10 md:ml-40">
            <img class="md:mr-10 scale-75"src="img/tarot.png" alt="">
                <div>
                    <h2 class="md:ml-10 text-2xl text-slate-700 font-bold">
                            Tarot
                    </h2>
                     <p class="text-slate-700 md:text-left text-center font-thin ml-10 mr-10 md:mr-40">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse aliquet maximus luctus. Vestibulum elementum magna pulvinar orci vehicula feugiat.
                        Curabitur eu vestibulum turpis, quis sodales sem. Aliquam id ante quis leo dictum posuere vel sed lorem. Nullam tempor neque sed urna varius pulvinar eu id elit.
                     <p>
                </div>
        <div>
        </section>
        <section class="bg-white">
        <div class="md:flex md:flex-row md:items-center justify-center pb-10 md:pb-20 mt-10 md:text-left text-center ml-10 mr-10 md:ml-40">
            <img class="md:mr-10 scale-75"src="img/reiki.png" alt="">
                <div>
                    <h2 class="md:ml-10 text-2xl text-slate-700 font-bold">
                            Reiki
                    </h2>
                     <p class="text-slate-700 md:text-left text-center font-thin ml-10 mr-10 md:mr-40">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse aliquet maximus luctus. Vestibulum elementum magna pulvinar orci vehicula feugiat.
                        Curabitur eu vestibulum turpis, quis sodales sem. Aliquam id ante quis leo dictum posuere vel sed lorem. Nullam tempor neque sed urna varius pulvinar eu id elit.
                     <p>
                </div>
        <div>
        </section>
        <section class="md:bg-[url('/img/agradecer.png')] md:w-screen md:h-screen md:bg-cover md:bg-center" id="vidas">
            <div class="bg-[url('/img/agradecer.png')] w-screen h-40 bg-cover bg-center md:hidden">
                <h1 class="text-2xl md:text-3xl text-white font-bold text-center pt-10 md:pt-20 ">
                        Vidas <br>Transformadas
                </h1>
            </div>
                <h1 class="text-2xl md:text-3xl md:text-white text-slate-700 font-bold text-center pt-10 md:pt-20  ">
                        Muitas vidas se transformaram <br> pelo nosso trabalho
                </h1>
                <div class="md:flex md:flex-row items-center justify-center">
                        <img class="scale-75" src="img/video.png" alt="">
                </div>
                <p class="text-slate-700 md:text-white text-center ml-10 mr-10 pb-10 font-thin ">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit <br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit <br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit <br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit <br>
                 <p>
        </section>

        <section>
             <div class="bg-stone-400 md:flex md:flex-row items-center justify-center pb-10">
                <div class="">
                  <img class="scale-75" src="img/video.png" alt="">
                        <p class="text-slate-700 text-center font-thin ml-10 mr-10">
                                Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit.
                        <p>
                 </div>
                <div class="">
                  <img class="scale-75" src="img/video.png" alt="">
                        <p class="text-slate-700 text-center font-thin ml-10 mr-10">
                                Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit.
                        <p>
                 </div>
                <div class="">
                  <img class="scale-75" src="img/video.png" alt="">
                        <p class="text-slate-700 text-center font-thin ml-10 mr-10">
                                Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit.
                        <p>
                 </div>
            </div>
        </sectiom>

        <section class="bg-white" id="depoimentos">
        <h1 class="pt-20 text-2xl mdtext-4xl text-center text-slate-700 font-bold pb-10">
               Nosso reconhecimento nas Redes Sociais
                </h1>
        </section>
        <section>
             <div class="bg-white md:flex md:flex-row items-center justify-center pb-10">
                <div class="">
                  <img class="scale-75" src="img/print_dep.png" alt="">
                        <p class="text-slate-700 text-center font-thin ml-10 mr-10">
                                @da_pessoa para ver que é real
                        <p>
                 </div>
                <div class="">
                  <img class="scale-75" src="img/print_dep.png" alt="">
                        <p class="text-slate-700 text-center font-thin ml-10 mr-10">
                            @da_pessoa para ver que é real
                        <p>
                 </div>
                <div class="">
                  <img class="scale-75" src="img/print_dep.png" alt="">
                        <p class="text-slate-700 text-center font-thin ml-10 mr-10">
                         @da_pessoa para ver que é real
                        <p>
                 </div>
            </div>
        </sectiom>
        <section class="bg-orange-300" id="terapeutas">
        <h1 class="text-slate-700 pt-20 text-2xl mdtext-4xl text-center text-slate-700 font-bold">
               Terapeutas
                </h1>
        </section>
        <section class="bg-white md:flex md:flex-row justify-center">
            <div class="bg-orange-300 md:w-1/2 md:pb-10">
                <div class="flex flex-row items-center ml-10 mr-10 md:mt-20 md:ml-40">
                    <img class="mr-10"src="img/adriano.png" alt="">
                    <div>
                        <h2 class="text-2xl text-slate-700 font-bold">
                            Adriano Caetano
                        </h2>
                        <p class="text-slate-700 font-thin">
                            Master Terapeuta Theta Healing®
                        <p>
                    </div>
                </div>

                <p class="pt-10 pb-10 mr-10 ml-10 md:ml-40 text-slate-700 md:text-left text-center font-thin">
                        Pensando nisso, O instituto Healing Minds foi criado com a missão de desconstruir toda a crença limitada pela qual você foi criado, desbloquear a sua fonte de abundãncia, e te ajudar a despertar para uma nova perspectiva da sua vida, aquela que você realmente nasceu e merece viver e ser verdadeiramente feliz.
                </p>
                <div class="flex flex-row justify-center md:justify-start md:ml-40 pb-10">
                   <a href="https://tailwindcss.com/"><x-button/></a>
                </div>
            </div>
            <div class="bg-orange-300 md:w-1/2 ">
                <div class="flex flex-row items-center ml-10 mr-10 md:mt-20 md:mr-40">
                    <img class="mr-10"src="img/carla2.png" alt="">
                    <div>
                        <h2 class="text-2xl text-slate-700 font-bold">
                            Carla Annunciato
                        </h2>
                        <p class="text-slate-700 font-thin">
                           Terapeuta Radiestésica, Oraculista e Theta
                        <p>
                    </div>
                </div>

                <p class="pt-10 pb-10 mr-10 ml-10 md:ml-10 md:mr-40 text-slate-700 md:text-left text-center font-thin">
                        Pensando nisso, O instituto Healing Minds foi criado com a missão de desconstruir toda a crença limitada pela qual você foi criado, desbloquear a sua fonte de abundãncia, e te ajudar a despertar para uma nova perspectiva da sua vida, aquela que você realmente nasceu e merece viver e ser verdadeiramente feliz.
                </p>
                <div class="flex flex-row justify-center  md:justify-start md:ml-10 pb-10">
                    <a href="https://tailwindcss.com/"><x-button/></a>
                </div>
            </div>
        </section>
        <footer class="flex flex-row items-center justify-around bg-slate-900 text-white text-xs font-thin ">
            <img class="ml-10" src="img/logo_footer.png" alt="">
                <p class="ml-5">Todos os Direitos Reservados</p>
            <div class="mrr-10 pt-2 pb-2 flex flex-row scale-50">
                <img class="pr-10 h-8" src="img/icon_insta_w.svg" alt="">
                <img class="h-8"src="img/icon_fb_w.svg" alt="">
            </div>
        </footer>
    </body>
</html>
