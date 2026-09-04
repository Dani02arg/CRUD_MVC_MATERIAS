document.addEventListener("DOMContentLoaded", () => {
    const searchInput = document.getElementById("searchMateria");
    
    if (searchInput) {
        // Escucha el evento 'input' para filtrar inmediatamente al escribir
        searchInput.addEventListener("input", () => {
            const filter = searchInput.value.toLowerCase().trim();
            const rows = document.querySelectorAll(".tabla-admin tbody tr");

            rows.forEach(row => {
                // Obtiene todo el texto de la fila (Nombre, Año, Estado)
                const text = row.textContent.toLowerCase();
                
                // Si coincide muestra la fila, si no la oculta
                if (text.includes(filter)) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        });
    }
});