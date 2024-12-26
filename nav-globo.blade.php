<div class="fixed bottom-8 right-8 z-20 flex flex-col-reverse">
    <!-- Botón principal -->
    <div id="main-button"
        class="w-16 h-16 bg-sky-400 rounded-full flex items-center justify-center cursor-pointer shadow-md shadow-cyan-950 hover:bg-sky-500">
        <i class="fa-solid fa-magnifying-glass fa-xl" style="color: #ffffff;"></i>
    </div>

    <!-- Globitos de enlaces -->
    <div id="bubble-links"
        class="text-white font-bold hidden flex flex-col items-center justify-center space-y-4 mb-4 transition-all duration-500 "
        style="opacity: 0; transform: translateY(20px); transition: opacity 0.5s ease, transform 0.5s ease;">
        @foreach ([
            ['url' => '/', 'id' => 'globo-inicio', 'text' => 'Inicio', 'bg' => 'bg-sky-500', 'hover' => 'hover:bg-sky-600'],
            ['url' => '/servicios', 'id' => 'globo-servicios', 'text' => 'Servicios', 'bg' => 'bg-sky-400', 'hover' => 'hover:bg-sky-500'],
            ['url' => '/nosotros', 'id' => 'globo-nosotros', 'text' => 'Nosotros', 'bg' => 'bg-sky-500', 'hover' => 'hover:bg-sky-600'],
            ['url' => '/agenda', 'id' => 'globo-agenda', 'text' => 'Agenda', 'bg' => 'bg-sky-400', 'hover' => 'hover:bg-sky-500'],
            ['url' => '/#contacto', 'id' => 'globo-contacto', 'text' => 'Contacto', 'bg' => 'bg-sky-500', 'hover' => 'hover:bg-sky-600']
        ] as $item)
            <a href="{{ $item['url'] }}" id="{{ $item['id'] }}"
                class="w-16 h-16 {{ $item['bg'] }} text-sm rounded-full flex items-center justify-center shadow-md shadow-cyan-950  {{ $item['hover'] }}">
                {{ $item['text'] }}
            </a>
        @endforeach
    </div>
</div>
