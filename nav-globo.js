$(document).ready(function () {
    const $mainButton = $("#main-button");
    const $bubbleLinks = $("#bubble-links");
    const $links = [
        $("#globo-inicio"),
        $("#globo-servicios"),
        $("#globo-nosotros"),
        $("#globo-agenda"),
        $("#globo-contacto"),
    ];

    // Invertir el array de enlaces
    const reversedLinks = $links.reverse();

    // Establecer el estilo inicial de los enlaces
    reversedLinks.forEach(function ($link) {
        $link.css({
            opacity: 0,
            transform: "translateY(20px)",
            transition: "opacity 0.5s ease, transform 0.5s ease",
        });
    });

    $mainButton.on("click", function () {
        if ($bubbleLinks.hasClass("hidden")) {
            // Abrir los globos
            $bubbleLinks.removeClass("hidden");

            setTimeout(function () {
                $bubbleLinks.css({
                    opacity: 1,
                    transform: "translateY(0)",
                });

                // Animación secuencial para cada enlace al abrir
                reversedLinks.forEach(function ($link, index) {
                    setTimeout(function () {
                        $link.css({
                            opacity: 1,
                            transform: "translateY(0)",
                        });
                    }, index * 100); // Retraso de 100ms por cada enlace
                });
            }, 50);
        } else {
            // Cerrar los globos en orden inverso
            reversedLinks.forEach(function ($link, index) {
                setTimeout(function () {
                    $link.css({
                        opacity: 0,
                        transform: "translateY(20px)",
                    });
                }, index * 100); // Retraso de 100ms por cada enlace
            });

            // Ocultar el contenedor después de un pequeño retraso adicional
            setTimeout(function () {
                $bubbleLinks.css({
                    opacity: 0,
                    transform: "translateY(20px)",
                });
                $bubbleLinks.addClass("hidden");
            }, reversedLinks.length * 100 + 200); // Tiempo total de los enlaces + 200ms extra
        }
    });
});
