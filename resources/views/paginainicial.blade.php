<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progresso de Estudo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
            overflow: hidden;
            background-color: #f5f5f5;
            color: #000;
            transition: background-color 0.3s, color 0.3s;
        }

        /* Estilo para o tema escuro */
        body.dark-mode {
            background-color: #333;
            color: #f5f5f5;
        }

        /* Menu Lateral */
        .sidebar {
            width: 250px;
            height: 100%;
            background-color: #fff;
            padding-top: 60px;
            position: fixed;
            top: 0;
            left: 0;
            transition: transform 0.3s ease;
            transform: translateX(0); /* Mostra o menu por padrão */
            z-index: 1000;
            overflow-y: auto; /* Permite rolar o menu se necessário */
        }

        .sidebar.dark-mode {
            background-color: #444;
        }

        .sidebar.hidden {
            transform: translateX(-250px); /* Esconde o menu */
        }

        .sidebar.visible {
            transform: translateX(0); /* Mostra o menu */
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .sidebar ul li {
            padding: 10px;
            text-align: left;
            display: flex;
            align-items: center;
            padding-left: 20px;
        }

        .sidebar ul li a {
            color: #000;
            text-decoration: none;
            font-size: 16px;
            display: block;
            flex: 1;
        }

        .sidebar ul li a:hover {
            background-color: #f0f0f0;
            padding-left: 10px;
            transition: padding-left 0.3s;
        }

        .sidebar ul li a.logout {
            color: red;
        }

        .sidebar.dark-mode ul li a {
            color: #f5f5f5;
        }

        .sidebar.dark-mode ul li a:hover {
            background-color: #555;
        }

        /* Menu Hambúrguer */
        .toggle {
            position: fixed;
            top: 15px;
            width: 40px;
            height: 30px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition-duration: .3s;
            z-index: 1100;
        }

        /* Estilo para os ícones */
        .toggle i {
            font-size: 24px;
            color: rgb(76, 189, 151);
            transition: transform 0.3s, opacity 0.3s;
        }

        /* Inicialmente mostrar o ícone de barras */
        .toggle i.fa-bars {
            display: block;
        }

        .toggle i.fa-times {
            display: none;
        }

        /* Quando o menu está aberto */
        .sidebar.visible ~ .toggle i.fa-bars {
            display: none;
        }

        .sidebar.visible ~ .toggle i.fa-times {
            display: block;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100%; /* Largura total da tela */
                height: 100%;
                position: fixed;
                top: 0;
                right: 0; /* Menu alinhado à direita */
                left: auto; /* Remove alinhamento à esquerda */
                transform: translateX(100%); /* Esconde o menu fora da tela à direita */
                z-index: 1000;
                transition: transform 0.3s ease;
            }

            .sidebar.visible {
                transform: translateX(0); /* Mostra o menu quando visível */
            }

            .toggle {
                top: 15px; /* Mantém a distância do topo */
                right: 15px; /* Move o ícone para o lado direito */
                left: auto; /* Remove o alinhamento à esquerda */
            }
        }

        /* Botão de alternância de tema */
        .theme-toggle {
            display: flex;
            align-items: center;
            padding: 10px;
            cursor: pointer;
            margin: 20px;
            color: #000;
            transition: color 0.3s;
        }

        .theme-toggle i {
            margin-right: 10px;
        }

        .theme-toggle:hover {
            background-color: #f0f0f0;
        }

        .sidebar.dark-mode .theme-toggle {
            color: #f5f5f5;
        }

        .sidebar.dark-mode .theme-toggle:hover {
            background-color: #555;
        }

        /* Conteúdo Principal */
        .main-content {
            margin-left: 250px; /* Espaço para o menu lateral */
            padding: 1rem; /* Padding padrão */
            transition: margin-left 0.3s ease;
            flex: 1; /* Preenche o restante do espaço */
            overflow-y: auto;
            background-color: #f5f5f5;
        }

        .sidebar.hidden ~ .main-content {
            margin-left: 0; /* Remove o espaço quando o menu está oculto */
        }

        @media (max-width: 768px) {
            .main-content {
                margin-left: 0; /* Remove o espaço em dispositivos móveis */
                padding: 0.5rem; /* Padding menor em dispositivos móveis */
            }
        }

        /* Estilo para o tema escuro no conteúdo principal */
        body.dark-mode .main-content {
            background-color: #333;
        }
    </style>
</head>

<body>
    <!-- Menu Hambúrguer -->
    <label for="menu-toggle" class="toggle">
        <i class="fas fa-times"></i>
        <i class="fas fa-bars"></i>
    </label>

    <!-- Menu Lateral -->
    <div class="sidebar visible">
        <ul>
        <li><a href="/paginainicial"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="/usuario"><i class="fas fa-user-graduate"></i> Área do Aluno</a></li>
            <li><a href="/calendario"><i class="fas fa-calendar-alt"></i> Calendário</a></li>
            <li><a href="/cronograma"><i class="fas fa-list"></i> Cronograma</a></li>
            <li><a href="/materias"><i class="fas fa-book"></i> Matérias</a></li>
            <li><a href="#"><i class="fas fa-pencil-ruler"></i> Simulados</a></li>
            <li><a href="#"><i class="fas fa-comments"></i> Fórum</a></li>
            <li><a href="#"><i class="fas fa-file-alt"></i> Redação</a></li>
            <li><a href="questao"><i class="fas fa-question-circle"></i> Questões</a></li>
            <li><a href="#" style="color: #4cbd97;"><i class="fas fa-cog"></i> Configurações</a></li>
            <li><a href="#" class="logout" style="color: #4cbd97!important;"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            <li class="theme-toggle"><i class="fas fa-moon"></i> Alternar Tema</li> <!-- Botão de alternância de tema -->
        </ul>
    </div>

    <!-- Conteúdo principal -->
    <div id="main-content" class="main-content">
        <!-- Seção de Banner -->
        <div class="bg-teal-500 text-white p-6 rounded-lg shadow-lg mb-6">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-2/3">
                    <h1 class="text-3xl md:text-4xl font-bold mb-4">A PREPARAÇÃO QUE VOCÊ PRECISA PARA GABARITAR</h1>
                    <span class="bg-orange-500 text-white py-2 px-4 rounded-full inline-block mb-4">NOTA 1000</span>
                    <ul class="text-lg list-disc pl-6">
                        <li>Vídeo aulas online</li>
                        <li>Correção de redações</li>
                        <li>Dicas e mentorias</li>
                        <li>Aulas e correções ao vivo</li>
                        <li>Mais de 1000 questões</li>
                        <li>Simulados semanais</li>
                    </ul>
                </div>
                <div class="md:w-1/3 flex justify-center mt-6 md:mt-0">
                    <img src="https://via.placeholder.com/300" alt="Livros" class="w-64 h-64">
                </div>
            </div>
        </div>

        <!-- Seção de Progresso -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold mb-4 text-black dark:text-white">Progresso diário</h2>
                <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-4 mb-4">
                    <div class="bg-teal-500 h-4 rounded-full" style="width: 10%;"></div>
                </div>
                <p class="text-teal-500 text-lg font-semibold">10%</p>
            </div>

            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold mb-4 text-black dark:text-white">Progresso mensal</h2>
                <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-4 mb-4">
                    <div class="bg-teal-500 h-4 rounded-full" style="width: 25%;"></div>
                </div>
                <p class="text-teal-500 text-lg font-semibold">25%</p>
            </div>

            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold mb-4 text-black dark:text-white">Progresso anual</h2>
                <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-4 mb-4">
                    <div class="bg-teal-500 h-4 rounded-full" style="width: 45%;"></div>
                </div>
                <p class="text-teal-500 text-lg font-semibold">45%</p>
            </div>
        </div>
    </div>

    <script>
        document.querySelector('.toggle').addEventListener('click', function () {
            const sidebar = document.querySelector('.sidebar');
            const mainContent = document.querySelector('.main-content');
            
            if (sidebar.classList.contains('visible')) {
                sidebar.classList.add('hidden');
                sidebar.classList.remove('visible');
                mainContent.style.marginLeft = '0'; // Remove o espaço quando o menu está oculto
            } else {
                sidebar.classList.add('visible');
                sidebar.classList.remove('hidden');
                mainContent.style.marginLeft = '250px'; // Espaço para o menu lateral
            }
        });

        // Alternar entre o tema claro e escuro
        document.querySelector('.theme-toggle').addEventListener('click', function () {
            document.body.classList.toggle('dark-mode');
            document.querySelector('.sidebar').classList.toggle('dark-mode');
        });
    </script>
</body>
</html>
