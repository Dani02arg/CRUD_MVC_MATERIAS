<?php
/** @var mysqli_result $materias */
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

    <header>
        <a href="#inicio" class="logo">Daniela</a>
        <nav>
            <a href="#inicio" class="active">inicio</a>
            <a href="#Servicios">Servicios</a>
            <a href="#Proyectos">Proyectos</a>
            <a href="#Educacion">Educación</a>
            <a href="#Materias">Materias</a> <!-- Nuevo enlace en menú -->
            <a href="#Contacto">Contacto</a>
        </nav>

        <div class="lang-container">
            <button id="btn-lang" onclick="toggleLanguage()">
                <i class="fas fa-globe"></i> <span id="lang-text">EN</span>
            </button>
        </div>

        <div id="google_translate_element" style="display:none;"></div>
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({
                    pageLanguage: 'es',
                    includedLanguages: 'en,es',
                    autoDisplay: false
                }, 'google_translate_element');
            }
        </script>
        <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    </header>

    <section class="inicio" id="inicio">
        <div class="home-img">
            <img src="assets/imagenyo.jpeg" alt="Foto de perfil">
        </div>
        <div class="home-content">
            <h1>Hola, Soy <span>Daniela</span></h1>
            <h3 class="typing-text">soy <span>Desarrolladora de software</span></h3>
            <p>Estudiante de programación apasionada por el desarrollo de software y la creación de soluciones digitales.</p>

            <div class="social-icons">
                <a href="https://www.linkedin.com/in/daniela-acosta-b06780206/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://github.com/Dani02arg" target="_blank"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>

            <a href="assets/cv-AcostaDaniela.pdf" download class="btn">download CV</a>
        </div>
    </section>

    <section class="Servicios" id="Servicios">
        <h2 class="heading">Mis <span>Servicios</span></h2>
        <div class="services-container">
            <div class="services-box">
                <i class="fas fa-mobile-alt"></i>
                <h3>Desarrollo Móvil</h3>
                <p>Creación de aplicaciones móviles funcionales e intuitivas, con enfoque en interfaces modernas e integración de herramientas como escaneo y captura de datos.</p>
            </div>
            <div class="services-box">
                <i class="fas fa-code"></i>
                <h3>Desarrollo Web</h3>
                <p>Diseño y maquetación de sitios web atractivos, limpios y completamente adaptables a cualquier dispositivo (computadoras, tablets y celulares).</p>
            </div>
            <div class="services-box">
                <i class="fas fa-database"></i>
                <h3>Bases de Datos</h3>
                <p>Diseño, estructuración y optimización de bases de datos relacionales asegurando la integridad de la información y la eficiencia en las consultas.</p>
            </div>
        </div>
    </section>

    <section class="Proyectos" id="Proyectos">
        <h2 class="heading">Mis <span>Proyectos</span></h2>
        <div class="portfolio-container">
            <div class="portfolio-box">
                <div class="portfolio-content">
                    <i class="fas fa-mobile-alt project-icon"></i>
                    <h3>App Móvil con Escaneo OCR</h3>
                    <p>Aplicación orientada a instituciones educativas para agilizar la inscripción de alumnos mediante la lectura inteligente de documentos.</p>
                    <div class="tech-tags">
                        <span>Flutter</span>
                        <span>Dart</span>
                        <span>OCR</span>
                    </div>
                    <div class="portfolio-layer">
                        <a href="https://github.com/Dani02arg" target="_blank" aria-label="Ver en GitHub">
                            <i class="fab fa-github"></i> Ver Código
                        </a>
                    </div>
                </div>
            </div>

            <div class="portfolio-box">
                <div class="portfolio-content">
                    <i class="fas fa-desktop project-icon"></i>
                    <h3>Sistema de Gestión en Java</h3>
                    <p>Aplicación de escritorio enfocada en el procesamiento de datos, lógica de negocio y aplicación de patrones POO.</p>
                    <div class="tech-tags">
                        <span>Java</span>
                        <span>POO</span>
                        <span>SQL</span>
                    </div>
                    <div class="portfolio-layer">
                        <a href="https://github.com/Dani02arg" target="_blank" aria-label="Ver en GitHub">
                            <i class="fab fa-github"></i> Ver Código
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="Educacion" id="Educacion">
        <h2 class="heading">Mi <span>Educación</span></h2>
        <div class="timeline-container">
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">En Curso</div>
                <div class="timeline-content">
                    <h3>Tecnicatura Universitaria en Programación</h3>
                    <p class="institution">Universidad Nacional de Salta (UNSa)</p>
                    <p>Formación enfocada en desarrollo de software, estructuras de datos, programación orientada a objetos, bases de datos y algoritmos avanzados.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">Finalizado</div>
                <div class="timeline-content">
                    <h3>Técnica en Electrónica</h3>
                    <p class="institution">Educación Secundaria Técnica</p>
                    <p>Base técnica orientada al pensamiento lógico-matemático, análisis de circuitos, resolución de problemas de hardware y fundamentos del análisis de sistemas.</p>
                </div>
            </div>
        </div>

        <div class="courses-container">
            <h3 class="sub-heading">Cursos & <span>Certificaciones</span></h3>
            <div class="courses-grid">
                <div class="course-card">
                    <div class="course-info">
                        <i class="fas fa-certificate course-icon"></i>
                        <h4>Diseño UX/UI</h4>
                        <p class="platform">Capacitación / Plataforma Online</p>
                        <span class="course-date">2026</span>
                    </div>
                    <div class="certificate-overlay">
                        <img src="assets/certificado1.png" alt="Certificado Diseño">
                        <a href="certificado1.png" target="_blank" class="view-btn">
                            <i class="fas fa-expand"></i> Ver Certificado
                        </a>
                    </div>
                </div>

                <div class="course-card">
                    <div class="course-info">
                        <i class="fas fa-code course-icon"></i>
                        <h4>Metodologia de proyectos</h4>
                        <p class="platform">Capacitación Académica</p>
                        <span class="course-date">2026</span>
                    </div>
                    <div class="certificate-overlay">
                        <img src="assets/certificado2.png" alt="Certificado Taller">
                        <a href="certificado2.png" target="_blank" class="view-btn">
                            <i class="fas fa-expand"></i> Ver Certificado
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- NUEVA SECCIÓN: Materias desde MySQL -->
<section class="Materias" id="Materias">
    <h2 class="heading">Plan de <span>Materias</span></h2>
    <div class="tabla-container" style="overflow-x:auto; margin: 2rem 0;">
        <?php if (isset($materias) && $materias && $materias->num_rows > 0): ?>
            <table>
                <thead>
                    <tr>
                       
                        <th>Materia</th>
                        <th>AÑO</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $materias->fetch_assoc()): ?>
                        <?php
                        // Asignar texto y clase CSS según el estado de la BD
                        switch ((int)$row['estado']) {
                            case 1:
                                $estadoTexto = 'Aprobada';
                                $claseBadge  = 'badge-aprobada';
                                break;
                            case 2:
                                $estadoTexto = 'En curso';
                                $claseBadge  = 'badge-encurso';
                                break;
                            default:
                                $estadoTexto = 'Pendiente';
                                $claseBadge  = 'badge-pendiente';
                                break;
                        }
                        ?>
                        <tr>
                           
                            <td><?= htmlspecialchars($row['nombre']) ?></td>
                            <td><?= htmlspecialchars($row['año']) ?></td>
                            <td>
                                <span class="badge-estado <?= $claseBadge ?>">
                                    <?= htmlspecialchars($estadoTexto) ?>
                                </span>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No hay materias para mostrar.</p>
        <?php endif; ?>
    </div>
</section>

    <section class="Contacto" id="Contacto">
        <h2 class="heading">Contactame <span>!</span></h2>
        <div class="contact-container">
            <div class="contact-info">
                <h3>¿Tenés un proyecto o propuesta?</h3>
                <p>Estoy disponible para responder consultas, colaborar en proyectos o conversar sobre oportunidades laborales.</p>
                <div class="info-item">
                    <i class="fas fa-envelope"></i>
                    <span>Daniela2000.acosta@gmail.com</span>
                </div>
                <div class="info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Salta, Argentina</span>
                </div>
                <div class="social-icons">
                    <a href="https://github.com/Dani02arg" target="_blank" aria-label="Visitar perfil de GitHub"><i class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/daniela-acosta-b06780206/" target="_blank" aria-label="Visitar perfil de LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="mailto:Daniela2000.acosta@gmail.com" aria-label="Enviar correo electrónico"><i class="fas fa-envelope"></i></a>
                </div>
            </div>

            <!-- Formulario modificado para accionar hacia enviar.php -->
            <form action="enviar.php" method="POST" class="contact-form">
                <div class="input-group">
                    <label for="name" class="sr-only">Nombre completo</label>
                    <input type="text" id="name" name="name" placeholder="Tu nombre completo" required autocomplete="name">
                </div>
                <div class="input-group">
                    <label for="email" class="sr-only">Correo electrónico</label>
                    <input type="email" id="email" name="email" placeholder="Tu correo electrónico" required autocomplete="email">
                </div>
                <div class="input-group">
                    <label for="subject" class="sr-only">Asunto</label>
                    <input type="text" id="subject" name="subject" placeholder="Asunto del mensaje" required>
                </div>
                <div class="input-group">
                    <label for="message" class="sr-only">Mensaje</label>
                    <textarea id="message" name="message" rows="5" placeholder="Escribí tu mensaje..." required></textarea>
                </div>
                <button type="submit" class="btn">Enviar Mensaje</button>
            </form>
        </div>
    </section>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/script.js"></script>
    <script>
        ScrollReveal({
            reset: true,
            distance: '80px',
            duration: 1000,
            delay: 200
        });

        ScrollReveal().reveal('.home-content, .heading', { origin: 'top' });
        ScrollReveal().reveal('.home-img, .services-container, .portfolio-box, .timeline-container, .Materias, .contact-form', { origin: 'bottom' });
        ScrollReveal().reveal('.home-content h1', { origin: 'left' });
    </script>

</body>
</html>
