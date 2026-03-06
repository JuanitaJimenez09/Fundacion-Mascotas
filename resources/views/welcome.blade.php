<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PataVida – Fundación Animal</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body>

    <!-- NAV -->
    <nav class="nav">
        <div class="nav__logo">
            <span class="nav__logo-icon">🐾</span>
            <span class="nav__logo-text">PataVida</span>
        </div>
        <a href="/login" class="nav__cta">Ingresar</a>
    </nav>

    <!-- HERO -->
    <section class="hero">
        <div class="hero__bg">
            <div class="hero__circle hero__circle--1"></div>
            <div class="hero__circle hero__circle--2"></div>
            <div class="hero__circle hero__circle--3"></div>
        </div>
        <div class="hero__content">
            <p class="hero__eyebrow">Fundación Animal</p>
            <h1 class="hero__title">
                Cada vida<br>
                <em>merece</em><br>
                un hogar.
            </h1>
            <p class="hero__subtitle">
                Conectamos animales en situación de calle con familias que los esperan.
                Adopción, rescate y bienestar en un solo lugar.
            </p>
            <div class="hero__actions">
                <a href="/login" class="btn btn--primary">
                    <span>Acceder a la plataforma</span>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <a href="#about" class="btn btn--ghost">Conocer más</a>
            </div>
        </div>
        <div class="hero__visual">
            <div class="hero__card hero__card--dog">
                <div class="hero__card-img">🐶</div>
                <div class="hero__card-info">
                    <strong>Max</strong>
                    <span>Listo para adoptar</span>
                </div>
                <span class="hero__badge hero__badge--green">Disponible</span>
            </div>
            <div class="hero__card hero__card--cat">
                <div class="hero__card-img">🐱</div>
                <div class="hero__card-info">
                    <strong>Luna</strong>
                    <span>En proceso</span>
                </div>
                <span class="hero__badge hero__badge--yellow">En seguimiento</span>
            </div>
            <div class="hero__card hero__card--rabbit">
                <div class="hero__card-img">🐰</div>
                <div class="hero__card-info">
                    <strong>Coco</strong>
                    <span>Adoptado ✓</span>
                </div>
                <span class="hero__badge hero__badge--blue">Adoptado</span>
            </div>
            <div class="hero__stat hero__stat--1">
                <strong>+1,200</strong>
                <span>animales rescatados</span>
            </div>
            <div class="hero__stat hero__stat--2">
                <strong>98%</strong>
                <span>adopciones exitosas</span>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section class="about" id="about">
        <div class="about__container">
            <div class="about__text">
                <p class="section__eyebrow">¿Quiénes somos?</p>
                <h2 class="section__title">Una plataforma construida con amor</h2>
                <p class="about__body">
                    PataVida nació para simplificar la gestión de fundaciones animales.
                    Desde el registro de animales rescatados hasta el seguimiento de cada proceso
                    de adopción, todo en un sistema pensado para quienes hacen el trabajo de campo.
                </p>
            </div>
            <div class="about__features">
                <div class="feature">
                    <div class="feature__icon">🐕</div>
                    <h3>Gestión de animales</h3>
                    <p>Registra, actualiza y da seguimiento a cada animal bajo tu cuidado.</p>
                </div>
                <div class="feature">
                    <div class="feature__icon">🏡</div>
                    <h3>Proceso de adopción</h3>
                    <p>Administra postulantes y lleva el historial completo de cada adopción.</p>
                </div>
                <div class="feature">
                    <div class="feature__icon">📋</div>
                    <h3>Registros organizados</h3>
                    <p>Toda la información centralizada, accesible y fácil de gestionar.</p>
                </div>
                <div class="feature">
                    <div class="feature__icon">❤️</div>
                    <h3>Impacto real</h3>
                    <p>Cada registro es una vida. Mide el impacto de tu fundación en tiempo real.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA FINAL -->
    <section class="cta-section">
        <div class="cta-section__inner">
            <h2 class="cta-section__title">¿Listo para marcar<br><em>la diferencia?</em></h2>
            <p class="cta-section__sub">Accede al panel y comienza a gestionar tu fundación hoy.</p>
            <a href="/login" class="btn btn--primary btn--large">
                <span>Ir al login</span>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>
        <div class="cta-section__paws">
            <span>🐾</span><span>🐾</span><span>🐾</span><span>🐾</span><span>🐾</span>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer">
        <span class="nav__logo-icon">🐾</span>
        <span>PataVida – Fundación Animal &copy; {{ date('Y') }}</span>
    </footer>

</body>
</html>