
document.addEventListener("DOMContentLoaded", function () {

    // Elementen ophalen
    const searchInput = document.getElementById("searchInput");
    const filterButtons = document.querySelectorAll(".filter-button");
    const products = document.querySelectorAll(".product-card");
    const productCount = document.getElementById("productCount");
    const noResults = document.getElementById("noResults");

    // Popup-elementen
    const modal = document.getElementById("productModal");
    const modalImage = document.getElementById("modalImage");
    const modalCategory = document.getElementById("modalCategory");
    const modalTitle = document.getElementById("modalTitle");
    const modalDescription = document.getElementById("modalDescription");
    const modalPrice = document.getElementById("modalPrice");
    const modalDone = document.getElementById("modalDone");

    // Controleren of alle belangrijke elementen bestaan
    if (
        !searchInput ||
        !productCount ||
        !noResults ||
        !modal ||
        !modalImage ||
        !modalCategory ||
        !modalTitle ||
        !modalDescription ||
        !modalPrice ||
        !modalDone
    ) {
        console.error("Er ontbreekt een HTML-element. Controleer productpagina.php.");
        return;
    }

    let selectedCategory = "all";

    // Producten filteren en zoeken
    function updateProducts() {
        const searchText = searchInput.value.toLowerCase().trim();
        let visibleCount = 0;

        products.forEach(function (product) {
            const productText = product.textContent.toLowerCase();
            const productCategory = product.dataset.category;

            const matchesSearch = productText.includes(searchText);

            const matchesCategory =
                selectedCategory === "all" ||
                productCategory === selectedCategory;

            const isVisible = matchesSearch && matchesCategory;

            product.hidden = !isVisible;

            if (isVisible) {
                visibleCount++;
            }
        });

        if (visibleCount === 1) {
            productCount.textContent = "1 product gevonden";
        } else {
            productCount.textContent = visibleCount + " producten gevonden";
        }

        noResults.hidden = visibleCount !== 0;
    }

    searchInput.addEventListener("input", updateProducts);

    filterButtons.forEach(function (button) {
        button.addEventListener("click", function () {
            selectedCategory = button.dataset.category;

            filterButtons.forEach(function (filterButton) {
                filterButton.classList.remove("active");
            });

            button.classList.add("active");

            updateProducts();
        });
    });

    function openProduct(product) {
        const image = product.querySelector(".product-image img");
        const category = product.querySelector(".category");
        const title = product.querySelector(".product-info h2");
        const description = product.querySelector(".product-info p:not(.price)");
        const price = product.querySelector(".price");

        if (!image || !category || !title || !description || !price) {
            console.error("De informatie van dit product ontbreekt.", product);
            return;
        }

        modalImage.src = image.src;
        modalImage.alt = image.alt;
        modalCategory.textContent = category.textContent;
        modalTitle.textContent = title.textContent;
        modalDescription.textContent = description.textContent;
        modalPrice.textContent = price.textContent;

        modal.hidden = false;
        document.body.classList.add("modal-open");

        modalDone.focus();
    }

    function closeProduct() {
        modal.hidden = true;
        document.body.classList.remove("modal-open");
    }

    products.forEach(function (product) {
        const button = product.querySelector(".view-button");

        if (button) {
            button.addEventListener("click", function () {
                openProduct(product);
            });
        }
    });

    // Sluiten met de rode knop
    modalDone.addEventListener("click", closeProduct);

    // Sluiten door buiten de popup te klikken
    modal.addEventListener("click", function (event) {
        if (event.target === modal) {
            closeProduct();
        }
    });

    // Sluiten met Escape
    document.addEventListener("keydown", function (event) {
        if (event.key === "Escape" && !modal.hidden) {
            closeProduct();
        }
    });

    // Begin met alle producten zichtbaar
    updateProducts();

});