<body class="m-0 font-sans h-screen overflow-hidden bg-gray-100 transition-colors duration-300">
<script src="https://cdn.tailwindcss.com"></script>

    <div class="flex h-full">
        <!-- Menu Hambúrguer -->
        <input type="checkbox" id="checkbox" class="block sm:hidden">
        <label for="checkbox" class="fixed top-4 left-4 z-[1001] cursor-pointer ">
            <div class="w-8 h-1 bg-black my-1.5 transition-all duration-300 transform origin-top-left"
                id="bar1"></div>
            <div class="w-8 h-1 bg-black my-1.5 transition-all duration-300" id="bar2"></div>
            <div class="w-8 h-1 bg-black my-1.5 transition-all duration-300 transform origin-bottom-left"
                id="bar3"></div>
        </label>

        <!-- Menu Lateral -->
        <div id="sidebar" class="fixed top-0 left-0 w-64 h-full bg-white dark:bg-black pt-16 transform transition-transform duration-300 z-[1000]">
            <h2 class="text-black text-center mb-5 text-xl font-bold">Menu</h2>
            <ul class="list-none p-0 m-0">
                <li class="flex items-center px-5 py-3">
                    <i class="mr-3 fa-solid fa-home"></i>
                    <a href="#" class="text-black no-underline text-base block flex-1 hover:bg-gray-100 hover:pl-2 transition-all duration-300">Home</a>
                </li>
                <li class="flex items-center px-5 py-3">
                    <i class="mr-3 fa-solid fa-user-graduate"></i>
                    <a href="#" class="text-black no-underline text-base block flex-1 hover:bg-gray-100 hover:pl-2 transition-all duration-300">Área do Aluno</a>
                </li>
                <li class="flex items-center px-5 py-3">
                    <i class="mr-3 fa-solid fa-calendar-alt"></i>
                    <a href="#" class="text-black no-underline text-base block flex-1 hover:bg-gray-100 hover:pl-2 transition-all duration-300">Calendário</a>
                </li>
                <li class="flex items-center px-5 py-3">
                    <i class="mr-3 fa-solid fa-list"></i>
                    <a href="#" class="text-black no-underline text-base block flex-1 hover:bg-gray-100 hover:pl-2 transition-all duration-300">Cronograma</a>
                </li>
                <li class="flex items-center px-5 py-3">
                    <i class="mr-3 fa-solid fa-book"></i>
                    <a href="#" class="text-black no-underline text-base block flex-1 hover:bg-gray-100 hover:pl-2 transition-all duration-300">Matérias</a>
                </li>
                <li class="flex items-center px-5 py-3">
                    <i class="mr-3 fa-solid fa-pencil-ruler"></i>
                    <a href="#" class="text-black no-underline text-base block flex-1 hover:bg-gray-100 hover:pl-2 transition-all duration-300">Simulados</a>
                </li>
                <li class="flex items-center px-5 py-3">
                    <i class="mr-3 fa-solid fa-comments"></i>
                    <a href="#" class="text-black no-underline text-base block flex-1 hover:bg-gray-100 hover:pl-2 transition-all duration-300">Fórum</a>
                </li>
                <li class="flex items-center px-5 py-3">
                    <i class="mr-3 fa-solid fa-file-alt"></i>
                    <a href="#" class="text-black no-underline text-base block flex-1 hover:bg-gray-100 hover:pl-2 transition-all duration-300">Redação</a>
                </li>
                <li class="flex items-center px-5 py-3">
                    <i class="mr-3 fa-solid fa-question-circle"></i>
                    <a href="#" class="text-black no-underline text-base block flex-1 hover:bg-gray-100 hover:pl-2 transition-all duration-300">Questões</a>
                </li>
                <li class="flex items-center px-5 py-3">
                    <i class="mr-3 fa-solid fa-cogs"></i>
                    <a href="#" class="text-red-500 no-underline text-base block flex-1 hover:bg-gray-100 hover:pl-2 transition-all duration-300">Configurações</a>
                </li>
                <li class="flex items-center px-5 py-3">
                    <i class="mr-3 fa-solid fa-sign-in-alt"></i>
                    <a href="#" class="text-red-500 no-underline text-base block flex-1 hover:bg-gray-100 hover:pl-2 transition-all duration-300">Log-out</a>
                </li>
            </ul>
        </div>

    
    </div>

    <!-- Ícones no Canto Superior Direito -->
    <div class="fixed top-4 right-4 space-x-4 z-[1001]">
        <i class="fas fa-calendar-alt text-2xl cursor-pointer"></i>
        <i class="fas fa-clock text-2xl cursor-pointer"></i>
    </div>

    <!-- Botão Dark Mode -->
    <button id="theme-toggle" type="button"
        class="dark-mode-toggle fixed bottom-4 right-4 w-12 h-12 bg-gray-200 dark:bg-gray-800 rounded-full cursor-pointer shadow-lg flex items-center justify-center transition-colors duration-300 z-[1001]">
        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
        </svg>
        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                fill-rule="evenodd" clip-rule="evenodd"></path>
        </svg>
    </button>

    <script>
        // Alternar menu lateral
        const checkbox = document.getElementById('checkbox');
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('main-content');
        const bars = document.querySelectorAll('.bars');

        checkbox.addEventListener('change', function () {
            sidebar.classList.toggle('-translate-x-64');
            mainContent.classList.toggle('ml-64');
            bars.forEach(bar => bar.classList.toggle('open'));
        });

        function handleResize() {
            const isSmallScreen = window.innerWidth < 640; // Considera 640px como breakpoint para 'sm'
            if (isSmallScreen) {
                sidebar.classList.add('-translate-x-64');
                mainContent.classList.remove('ml-64');
            } else {
                sidebar.classList.remove('-translate-x-64');
                mainContent.classList.add('ml-64');
            }
        }

        // Chama a função na inicialização da página e no redimensionamento da janela
        window.addEventListener('load', handleResize);
        window.addEventListener('resize', handleResize);
    </script>
</body>


