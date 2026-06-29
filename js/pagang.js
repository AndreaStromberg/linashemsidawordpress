// Hämta in element från DOM
const loadMorePagangButton = document.getElementById("load-more-pagang")
const pagangCards = document.getElementById("pagang-cards")

// Funktioner
// Funktion för att visa fler illustrationer
const loadMorePagang = () => {
  // Eventlyssnare
  loadMorePagangButton.addEventListener("click", function () {
    console.log(
      "--> Nu klickar du på knappen för att visa fler på-gång-händelser",
    )

    let currentPage = parseInt(
      loadMorePagangButton.getAttribute("data-current-pagang-page"),
    )
    let nextPage = currentPage + 1
    let maxPages = parseInt(
      loadMorePagangButton.getAttribute("data-max-pagang-pages"),
    )

    // Skapa en förfrågan till WordPress admin-ajax.php
    let formData = new FormData()
    formData.append("action", "load_more_pagang")
    formData.append("page", nextPage)

    fetch("/wp-admin/admin-ajax.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.text())
      .then((html) => {
        if (html.trim() !== "") {
          // Lägg till de nya inläggen i listan
          pagangCards.insertAdjacentHTML("beforeend", html)
          // Uppdatera knappen med det nya sidnumret
          loadMorePagangButton.setAttribute(
            "data-current-pagang-page",
            nextPage,
          )

          // Om vi nått sista sidan, göm knappen
          if (nextPage >= maxPages) {
            loadMorePagangButton.remove()
          }
        }
      })
      .catch((err) => console.error("Det sket sig", err))
  })
}

console.log("laddat in filen pagang.js")

loadMorePagang()
