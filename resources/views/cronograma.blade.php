<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Cronograma</title>
</head>
<body>
    <div>
        @include('menuteste')
    </div>

    <div class="max-w-4xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mt-6">
            <!-- Cronograma -->
            <div class="col-span-3">
                <div class="bg-white rounded-lg shadow p-6 mb-4 w-80 h-40">
                    <div class="flex justify-between items-center flex-col">
                        <h2 class="text-lg font-semibold flex items-center"><i class="fas fa-calendar-week mr-2"></i>Semana 1</h2>
                        <span class="text-gray-500 text-sm">01/01/2024 - 02:41:15</span>
                        <button class="bg-sky-800 font-bold text-sm text-white rounded-xl w-auto h-10 hover:bg-sky-500 transition-all duration-100 px-2 hover:px-4 mt-5">Conteúdos da Semana</button>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow p-6 mb-4 w-80 h-40">
                    <div class="flex justify-between items-center flex-col">
                        <h2 class="text-lg font-semibold flex items-center"><i class="fas fa-calendar-week mr-2"></i>Semana 2</h2>
                        <span class="text-gray-500 text-sm">08/01/2024 - 02:30:10</span>
                        <button class="bg-sky-800 font-bold text-sm text-white rounded-xl w-auto h-10 hover:bg-sky-500 transition-all duration-100 px-2 hover:px-4 mt-5">Conteúdos da Semana</button>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow p-6 mb-4 w-80 h-40">
                    <div class="flex justify-between items-center flex-col">
                        <h2 class="text-lg font-semibold flex items-center"><i class="fas fa-calendar-week mr-2"></i>Semana 3</h2>
                        <span class="text-gray-500 text-sm">15/01/2024 - 03:20:30</span>
                        <button class="bg-sky-800 font-bold text-sm text-white rounded-xl w-auto h-10 hover:bg-sky-500 transition-all duration-100 px-2 hover:px-4 mt-5">Conteúdos da Semana</button>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow p-6 mb-4 w-80 h-40">
                    <div class="flex justify-between items-center flex-col">
                        <h2 class="text-lg font-semibold flex items-center"><i class="fas fa-calendar-week mr-2"></i>Semana 4</h2>
                        <span class="text-gray-500 text-sm">22/01/2024 - 01:50:45</span>
                        <button class="bg-sky-800 font-bold text-sm text-white rounded-xl w-auto h-10 hover:bg-sky-500 transition-all duration-100 px-2 hover:px-4 mt-5">Conteúdos da Semana</button>
                    </div>
                </div>
            </div>
            <!-- Filtro de Matérias -->
             <aside class="left-3/4 ml-32 absolute w-full h-full md:w-64 bg-white shadow-lg p-6">
             <div class="col-span-1">
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-lg font-semibold mb-4">Filtrar matérias</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-blue-600 flex items-center hover:text-blue-800"><i class="fas fa-calculator mr-2"></i>MATEMÁTICA</a></li>
                        <li><a href="#" class="text-gray-600 flex items-center hover:text-gray-800"><i class="fas fa-dna mr-2"></i>BIOLOGIA</a></li>
                        <li><a href="#" class="text-gray-600 flex items-center hover:text-gray-800"><i class="fas fa-flask mr-2"></i>QUÍMICA</a></li>
                        <li><a href="#" class="text-gray-600 flex items-center hover:text-gray-800"><i class="fas fa-atom mr-2"></i>FÍSICA</a></li>
                        <li><a href="#" class="text-gray-600 flex items-center hover:text-gray-800"><i class="fas fa-landmark mr-2"></i>HISTÓRIA</a></li>
                        <li><a href="#" class="text-gray-600 flex items-center hover:text-gray-800"><i class="fas fa-globe mr-2"></i>GEOGRAFIA</a></li>
                        <li><a href="#" class="text-gray-600 flex items-center hover:text-gray-800"><i class="fas fa-users mr-2"></i>SOCIOLOGIA</a></li>
                        <li><a href="#" class="text-gray-600 flex items-center hover:text-gray-800"><i class="fas fa-book mr-2"></i>FILOSOFIA</a></li>
                        <li><a href="#" class="text-gray-600 flex items-center hover:text-gray-800"><i class="fas fa-pencil-alt mr-2"></i>GRAMÁTICA</a></li>
                        <li><a href="#" class="text-gray-600 flex items-center hover:text-gray-800"><i class="fas fa-book-open mr-2"></i>LITERATURA</a></li>
                        <li><a href="#" class="text-gray-600 flex items-center hover:text-gray-800"><i class="fas fa-pen mr-2"></i>REDAÇÃO</a></li>
                        <li><a href="#" class="text-gray-600 flex items-center hover:text-gray-800"><i class="fas fa-language mr-2"></i>INGLÊS</a></li>
                        <li><a href="#" class="text-gray-600 flex items-center hover:text-gray-800"><i class="fas fa-paint-brush mr-2"></i>ARTE</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
             </aside>
           
</body>
</html>