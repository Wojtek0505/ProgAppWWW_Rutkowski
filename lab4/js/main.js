function initThemeToggle() {
    const button = document.querySelector("#theme-toggle");

    if (!button) {
        return;
    }

    const savedTheme = localStorage.getItem("theme");
    const theme = savedTheme === "dark" ? "dark" : "light";

    document.documentElement.dataset.theme = theme;
    button.setAttribute("aria-pressed", theme === "dark");
    button.textContent = theme === "dark" ? "Tryb jasny" : "Tryb ciemny";

    button.addEventListener("click", function () {
        const isDark = document.documentElement.dataset.theme === "dark";
        const newTheme = isDark ? "light" : "dark";

        document.documentElement.dataset.theme = newTheme;
        button.setAttribute("aria-pressed", newTheme === "dark");
        button.textContent = newTheme === "dark" ? "Tryb jasny" : "Tryb ciemny";
        localStorage.setItem("theme", newTheme);
    });
}

initThemeToggle();

function updateClock() {
    const clock = document.querySelector("#clock");

    if (!clock) {
        return;
    }

    const now = new Date();

    const formatter = new Intl.DateTimeFormat("pl-PL", {
        year: "numeric",
        month: "2-digit",
        day: "2-digit",
        hour: "2-digit",
        minute: "2-digit",
        second: "2-digit",
        hour12: false
    });

    clock.textContent = formatter.format(now);
}

let clockInterval = null;

function startClock() {
    if (clockInterval !== null) {
        return;
    }

    updateClock();
    clockInterval = setInterval(updateClock, 1000);
}

function stopClock() {
    clearInterval(clockInterval);
    clockInterval = null;
}

const clockStart = document.querySelector("#clock-start");
const clockStop = document.querySelector("#clock-stop");

if (clockStart) {
    clockStart.addEventListener("click", startClock);
}

if (clockStop) {
    clockStop.addEventListener("click", stopClock);
}

updateClock();

function initProductFilter() {
    const searchInput = document.querySelector("#product-search");
    const products = document.querySelectorAll("main article");
    const filterCount = document.querySelector("#filter-count");
    const filterEmpty = document.querySelector("#filter-empty");

    if (!searchInput || !filterCount || !filterEmpty || products.length === 0) {
        console.error("Filtr: nie znaleziono wymaganych elementów HTML.");
        return;
    }

    function filterProducts() {
        const query = searchInput.value.trim().toLowerCase();
        let visibleCount = 0;

        products.forEach(function (product) {
            const matches = product.textContent.toLowerCase().includes(query);

            product.hidden = !matches;

            if (matches) {
                visibleCount++;
            }
        });

        filterCount.textContent = "Liczba produktów: " + visibleCount;
        filterEmpty.hidden = visibleCount > 0;
    }

    searchInput.addEventListener("input", filterProducts);
    filterProducts();

    console.log("Filtr produktów uruchomiony. Liczba kart:", products.length);
}

initProductFilter();

const productsData = [
    {id: "telewizor", nazwa: "Telewizor Samsung UE55U8092HU", cenaGrosze: 299900},
    {id: "sluchawki", nazwa: "Słuchawki JLab GO Lux ANC", cenaGrosze: 16999},
    {id: "termorobot", nazwa: "Termorobot MPM TRM-01", cenaGrosze: 189500}
];

function initContactForm() {
    const form = document.querySelector("form");
    if (!form) return;
    const productSelect = document.querySelector("#produkt");
    const quantityInput = document.querySelector("#ilosc");
    productSelect.addEventListener("change", function () {
        formSummary.hidden = true;
    });

    quantityInput.addEventListener("input", function () {
        formSummary.hidden = true;
    });
    const messageInput = document.querySelector("#wiadomosc");

    const quotePreview = document.querySelector("#quote-preview");
    const formError = document.querySelector("#form-error");
    const formSummary = document.querySelector("#form-summary");

    if (
        !form ||
        !productSelect ||
        !quantityInput ||
        !messageInput ||
        !quotePreview ||
        !formError ||
        !formSummary
    ) {
        console.error("Formularz: nie znaleziono wymaganych elementów HTML.");
        return;
    }

    function calculateQuote() {
        const selectedId = productSelect.value;
        const quantity = Number(quantityInput.value);

        const product = productsData.find(function (item) {
            return item.id === selectedId;
        });

        if (!product || !Number.isInteger(quantity) || quantity < 1 || quantity > 5) {
            quotePreview.textContent =
                "Wybierz produkt i poprawną liczbę sztuk (1–5).";
            return;
        }

        const totalPriceGrosze = product.cenaGrosze * quantity;

        const formattedPrice = new Intl.NumberFormat("pl-PL", {
            style: "currency",
            currency: "PLN"
        }).format(totalPriceGrosze / 100);

        quotePreview.textContent =
            "Cena za " + quantity + " szt.: " + formattedPrice;
    }

    productSelect.addEventListener("change", calculateQuote);
    quantityInput.addEventListener("input", calculateQuote);

    calculateQuote();

    messageInput.addEventListener("input", function () {
        formError.hidden = true;
        formError.textContent = "";
        formSummary.hidden = true;
    });
    form.addEventListener("submit", function (event) {
        event.preventDefault();

        formError.hidden = true;
        formError.textContent = "";
        formSummary.hidden = true;

        const message = messageInput.value.trim();

        if (message.length < 10) {
            formError.textContent =
                "Wiadomość musi zawierać co najmniej 10 znaków.";
            formError.hidden = false;
            messageInput.focus();
            return;
        }
        const selectedProduct = productsData.find(function (item) {
            return item.id === productSelect.value;
        });

        const quantity = Number(quantityInput.value);
        const totalPrice = selectedProduct.cenaGrosze * quantity / 100;

        const formattedTotal = new Intl.NumberFormat("pl-PL", {
            style: "currency",
            currency: "PLN"
        }).format(totalPrice);

        document.querySelector("#summary-product").textContent =
            "Produkt: " + selectedProduct.nazwa;

        document.querySelector("#summary-quantity").textContent =
            "Liczba sztuk: " + quantity;

        document.querySelector("#summary-price").textContent =
            "Łączna cena: " + formattedTotal;

        document.querySelector("#summary-message").textContent =
            "Wiadomość: " + message;

        formSummary.hidden = false;
    });
}

initContactForm();
