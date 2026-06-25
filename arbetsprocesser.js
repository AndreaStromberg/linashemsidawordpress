// Hämta in element från DOM
const loadMoreArbetsprocesserButton = document.getElementById(
  "load-more-arbetsprocesser",
)
const arbetsprocesserCards = document.getElementById("arbetsprocesser-cards")

// Funktioner
// Funktion för att visa fler illustrationer
const loadMoreArbetsprocesser = () => {
  // Eventlyssnare
  loadMoreArbetsprocesserButton.addEventListener("click", function () {
    console.log(
      "--> Nu klickar du på knappen för att visa fler världar och karaktärer",
    )

    let currentPage = parseInt(
      loadMoreArbetsprocesserButton.getAttribute(
        "data-current-arbetsprocesser-page",
      ),
    )
    let nextPage = currentPage + 1
    let maxPages = parseInt(
      loadMoreArbetsprocesserButton.getAttribute(
        "data-max-arbetsprocesser-pages",
      ),
    )

    // Skapa en förfrågan till WordPress admin-ajax.php
    let formData = new FormData()
    formData.append("action", "load_more_arbetsprocesser")
    formData.append("page", nextPage)

    fetch("/wp-admin/admin-ajax.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.text())
      .then((html) => {
        if (html.trim() !== "") {
          // Lägg till de nya inläggen i listan
          arbetsprocesserCards.insertAdjacentHTML("beforeend", html)
          // Uppdatera knappen med det nya sidnumret
          loadMoreArbetsprocesserButton.setAttribute(
            "data-current-arbetsprocesser-page",
            nextPage,
          )

          // Om vi nått sista sidan, göm knappen
          if (nextPage >= maxPages) {
            loadMoreArbetsprocesserButton.remove()
          }
        }
      })
      .catch((err) => console.error("Det sket sig", err))
  })
}

console.log("laddat in filen arbetsprocesser.js")

loadMoreArbetsprocesser()
