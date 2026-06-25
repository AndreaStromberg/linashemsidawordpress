// Hämta in element från DOM
const loadMoreTexterButton = document.getElementById("load-more-texter")
const texterCards = document.getElementById("texter-cards")

// Funktioner
// Funktion för att visa fler illustrationer
const loadMoreTexter = () => {
  // Eventlyssnare
  loadMoreTexterButton.addEventListener("click", function () {
    console.log("--> Nu klickar du på knappen för att visa fler texter")

    let currentPage = parseInt(
      loadMoreTexterButton.getAttribute("data-current-texter-page"),
    )
    let nextPage = currentPage + 1
    let maxPages = parseInt(
      loadMoreTexterButton.getAttribute("data-max-texter-pages"),
    )

    // Skapa en förfrågan till WordPress admin-ajax.php
    let formData = new FormData()
    formData.append("action", "load_more_texter")
    formData.append("page", nextPage)

    fetch("/wp-admin/admin-ajax.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.text())
      .then((html) => {
        if (html.trim() !== "") {
          // Lägg till de nya inläggen i listan
          texterCards.insertAdjacentHTML("beforeend", html)
          // Uppdatera knappen med det nya sidnumret
          loadMoreTexterButton.setAttribute(
            "data-current-texter-page",
            nextPage,
          )

          // Om vi nått sista sidan, göm knappen
          if (nextPage >= maxPages) {
            loadMoreTexterButton.remove()
          }
        }
      })
      .catch((err) => console.error("Det sket sig", err))
  })
}

console.log("laddat in filen texter.js")

loadMoreTexter()
