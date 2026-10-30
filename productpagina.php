<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Producten | LevelUp Hardware</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&display=swap" rel="stylesheet">
    <script src="productpagina.js" defer></script>
    <link rel="stylesheet" href="productpagina.css">
    <script src="productpagina.js" defer></script>
</head>

<body>

    <!-- Header -->
    <header>
        <div class="navbar">
            <a href="index.html" class="logo">
                <img src="img/logo.png" alt="LevelUp Hardware">
            </a>

            <nav>
                <a href="index.html">Home</a>
                <a href="overons.html">Over ons</a>
                <a href="productpagina.php">Producten</a>
            </nav>
        </div>
    </header>

    <main>

        <!-- Titel -->
        <section class="products-header">
            <h1>Onze producten</h1>
            <p>Ontdek hardware voor jouw ultieme gaming setup.</p>
        </section>

        <!-- Zoeken -->
        <section class="product-controls">

            <input type="search" id="searchInput" placeholder="Zoek een product..." aria-label="Zoek producten">

            <!-- Categorieën -->
            <div class="filter-buttons">
                <button type="button" class="filter-button active" data-category="all">
                    Alles
                </button>

                <button type="button" class="filter-button" data-category="videokaarten">
                    Videokaarten
                </button>

                <button type="button" class="filter-button" data-category="processors">
                    Processors
                </button>

                <button type="button" class="filter-button" data-category="geheugen">
                    Geheugen
                </button>

                <button type="button" class="filter-button" data-category="opslag">
                    Opslag
                </button>

                <button type="button" class="filter-button" data-category="randapparatuur">
                    Randapparatuur
                </button>

                <button type="button" class="filter-button" data-category="computers">
                    Gaming pc's
                </button>
            </div>

            <p id="productCount" aria-live="polite">Producten laden...</p>

        </section>

        <!-- Producten -->
        <section class="product-grid" id="productGrid">

            <article class="product-card" data-category="videokaarten">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1591488320449-011701bb6704?auto=format&fit=crop&w=700&q=80"
                        alt="Videokaart">
                </div>
                <div class="product-info">
                    <span class="category">Videokaarten</span>
                    <h2>NVIDIA Gaming Videokaart</h2>
                    <p>Een krachtige videokaart voor gaming en grafische toepassingen.</p>
                    <p class="price">€ 599,99</p>
                    <button type="button" class="view-button">Bekijk product</button>
                </div>
            </article>

            <article class="product-card" data-category="videokaarten">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1587202372775-e229f172b9d7?auto=format&fit=crop&w=700&q=80"
                        alt="Computerhardware">
                </div>
                <div class="product-info">
                    <span class="category">Videokaarten</span>
                    <h2>Gaming GPU Pro</h2>
                    <p>Geschikt voor moderne games en hoge grafische instellingen.</p>
                    <p class="price">€ 749,99</p>
                    <button type="button" class="view-button">Bekijk product</button>
                </div>
            </article>

            <article class="product-card" data-category="processors">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1555617981-dac3880eac6e?auto=format&fit=crop&w=700&q=80"
                        alt="Processor en computeronderdelen">
                </div>
                <div class="product-info">
                    <span class="category">Processors</span>
                    <h2>Intel Core Processor</h2>
                    <p>Een snelle processor voor gaming en dagelijks gebruik.</p>
                    <p class="price">€ 329,99</p>
                    <button type="button" class="view-button">Bekijk product</button>
                </div>
            </article>

            <article class="product-card" data-category="processors">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1591799264318-7e6ef8ddb7ea?auto=format&fit=crop&w=700&q=80"
                        alt="Computerprocessor">
                </div>
                <div class="product-info">
                    <span class="category">Processors</span>
                    <h2>AMD Ryzen Processor</h2>
                    <p>Een veelzijdige processor voor games en multitasking.</p>
                    <p class="price">€ 289,99</p>
                    <button type="button" class="view-button">Bekijk product</button>
                </div>
            </article>

            <article class="product-card" data-category="geheugen">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1562976540-1502c2145186?auto=format&fit=crop&w=700&q=80"
                        alt="Computergeheugen">
                </div>
                <div class="product-info">
                    <span class="category">Geheugen</span>
                    <h2>DDR5 Gaming RAM</h2>
                    <p>Werkgeheugen voor soepel gamen en meerdere programma's tegelijk.</p>
                    <p class="price">€ 119,99</p>
                    <button type="button" class="view-button">Bekijk product</button>
                </div>
            </article>

            <article class="product-card" data-category="geheugen">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1541029071515-84cc54f84dc5?auto=format&fit=crop&w=700&q=80"
                        alt="Computeronderdelen">
                </div>
                <div class="product-info">
                    <span class="category">Geheugen</span>
                    <h2>Gaming RAM Kit</h2>
                    <p>Een geheugenupgrade voor een snelle en responsieve pc.</p>
                    <p class="price">€ 89,99</p>
                    <button type="button" class="view-button">Bekijk product</button>
                </div>
            </article>

            <article class="product-card" data-category="opslag">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1597872200969-2b65d56bd16b?auto=format&fit=crop&w=700&q=80"
                        alt="SSD opslag">
                </div>
                <div class="product-info">
                    <span class="category">Opslag</span>
                    <h2>NVMe SSD 1TB</h2>
                    <p>Snelle opslag voor games, bestanden en programma's.</p>
                    <p class="price">€ 99,99</p>
                    <button type="button" class="view-button">Bekijk product</button>
                </div>
            </article>

            <article class="product-card" data-category="opslag">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1531492746076-161ca9bcad58?auto=format&fit=crop&w=700&q=80"
                        alt="Opslagapparatuur">
                </div>
                <div class="product-info">
                    <span class="category">Opslag</span>
                    <h2>SSD 2TB</h2>
                    <p>Extra ruimte voor je gamebibliotheek en grote bestanden.</p>
                    <p class="price">€ 159,99</p>
                    <button type="button" class="view-button">Bekijk product</button>
                </div>
            </article>

            <article class="product-card" data-category="randapparatuur">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1587829741301-dc798b83add3?auto=format&fit=crop&w=700&q=80"
                        alt="Gaming toetsenbord">
                </div>
                <div class="product-info">
                    <span class="category">Randapparatuur</span>
                    <h2>Mechanisch Gaming Toetsenbord</h2>
                    <p>Een stevig toetsenbord voor gamen en typen.</p>
                    <p class="price">€ 79,99</p>
                    <button type="button" class="view-button">Bekijk product</button>
                </div>
            </article>

            <article class="product-card" data-category="randapparatuur">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1527814050087-3793815479db?auto=format&fit=crop&w=700&q=80"
                        alt="Gaming muis">
                </div>
                <div class="product-info">
                    <span class="category">Randapparatuur</span>
                    <h2>Gaming Muis</h2>
                    <p>Een nauwkeurige muis voor snelle bewegingen en controle.</p>
                    <p class="price">€ 49,99</p>
                    <button type="button" class="view-button">Bekijk product</button>
                </div>
            </article>

            <article class="product-card" data-category="randapparatuur">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1599669454699-248893623440?auto=format&fit=crop&w=700&q=80"
                        alt="Gaming headset">
                </div>
                <div class="product-info">
                    <span class="category">Randapparatuur</span>
                    <h2>Gaming Headset</h2>
                    <p>Hoor gamegeluiden duidelijk en communiceer met je team.</p>
                    <p class="price">€ 69,99</p>
                    <button type="button" class="view-button">Bekijk product</button>
                </div>
            </article>

            <article class="product-card" data-category="computers">
                <div class="product-image">
                    <img src="img/pc.png" alt="Gaming pc">
                </div>
                <div class="product-info">
                    <span class="category">Gaming pc's</span>
                    <h2>Gaming PC Build</h2>
                    <p>Een gamingcomputer voor je favoriete games.</p>
                    <p class="price">€ 1.499,99</p>
                    <button type="button" class="view-button">Bekijk product</button>
                </div>
            </article>

            <article class="product-card" data-category="computers">
                <div class="product-image">
                    <img src="img/laptop.webp" alt="Gaming laptop">
                </div>
                <div class="product-info">
                    <span class="category">Gaming pc's</span>
                    <h2>Gaming Laptop</h2>
                    <p>Speel je favoriete games op een laptop die je makkelijk meeneemt.</p>
                    <p class="price">€ 899,99</p>
                    <button type="button" class="view-button">Bekijk product</button>
                </div>
            </article>

            <article class="product-card" data-category="randapparatuur">
                <div class="product-image">
                    <img src="img/headset.webp" alt="Gaming headset Pro">
                </div>
                <div class="product-info">
                    <span class="category">Randapparatuur</span>
                    <h2>Gaming Headset Pro</h2>
                    <p>Comfortabele headset voor lange gamesessies.</p>
                    <p class="price">€ 89,99</p>
                    <button type="button" class="view-button">Bekijk product</button>
                </div>
            </article>

        </section>

        <p id="noResults" hidden>Geen producten gevonden. Probeer een andere zoekopdracht.</p>

    </main>

    <!-- Productpopup -->
    <div class="product-modal" id="productModal" hidden>
        <div class="modal-content" role="dialog" aria-modal="true" aria-labelledby="modalTitle">

            <img id="modalImage" src="" alt="">

            <span class="category" id="modalCategory"></span>
            <h2 id="modalTitle"></h2>
            <p id="modalDescription"></p>
            <p class="price" id="modalPrice"></p>

            <button type="button" id="modalDone" class="view-button">
                Sluiten
            </button>

        </div>
    </div>

</body>

</html>