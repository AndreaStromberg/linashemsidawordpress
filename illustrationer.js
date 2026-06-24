// Hämta in element från DOM
const loadMoreIllustrationsButton = document.getElementById(
  "load-more-illustrations",
)
const masonryGrid = document.getElementById("masonry")

// Funktioner
// Funktion för att visa fler illustrationer
const loadMoreIllustrations = () => {
  // Eventlyssnare
  loadMoreIllustrationsButton.addEventListener("click", function () {
    console.log("--> Nu klickar du på knappen för att visa fler illustrationer")

    let currentPage = parseInt(
      loadMoreIllustrationsButton.getAttribute("data-current-ill-page"),
    )
    let nextPage = currentPage + 1
    let maxPages = parseInt(
      loadMoreIllustrationsButton.getAttribute("data-max-ill-pages"),
    )

    // Skapa en förfrågan till WordPress admin-ajax.php
    let formData = new FormData()
    formData.append("action", "load_more_illustrations")
    formData.append("page", nextPage)

    fetch("/wp-admin/admin-ajax.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.text())
      .then((html) => {
        if (html.trim() !== "") {
          // Lägg till de nya inläggen i listan
          masonryGrid.insertAdjacentHTML("beforeend", html)
          // Uppdatera knappen med det nya sidnumret
          loadMoreIllustrationsButton.setAttribute(
            "data-current-ill-page",
            nextPage,
          )

          // Om vi nått sista sidan, göm knappen
          if (nextPage >= maxPages) {
            loadMoreIllustrationsButton.remove()
          }
        }
      })
  })
}

console.log("laddat in filen illustrationer.js")

loadMoreIllustrations()
