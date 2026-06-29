// Hämta in element från DOM
const loadMoreVarldarButton = document.getElementById("load-more-varldar")
const varldarCards = document.getElementById("varldar-cards")

// Funktioner
// Funktion för att visa fler illustrationer
const loadMoreVarldar = () => {
  // Eventlyssnare
  loadMoreVarldarButton.addEventListener("click", function () {
    console.log(
      "--> Nu klickar du på knappen för att visa fler världar och karaktärer",
    )

    let currentPage = parseInt(
      loadMoreVarldarButton.getAttribute("data-current-varldar-page"),
    )
    let nextPage = currentPage + 1
    let maxPages = parseInt(
      loadMoreVarldarButton.getAttribute("data-max-varldar-pages"),
    )

    // Skapa en förfrågan till WordPress admin-ajax.php
    let formData = new FormData()
    formData.append("action", "load_more_varldar")
    formData.append("page", nextPage)

    fetch("/wp-admin/admin-ajax.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.text())
      .then((html) => {
        if (html.trim() !== "") {
          // Lägg till de nya inläggen i listan
          varldarCards.insertAdjacentHTML("beforeend", html)
          // Uppdatera knappen med det nya sidnumret
          loadMoreVarldarButton.setAttribute(
            "data-current-varldar-page",
            nextPage,
          )

          // Om vi nått sista sidan, göm knappen
          if (nextPage >= maxPages) {
            loadMoreVarldarButton.remove()
          }
        }
      })
      .catch((err) => console.error("Det sket sig", err))
  })
}

console.log("laddat in filen varldarOchKaraktarer.js")

loadMoreVarldar()
