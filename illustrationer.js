// Hämta in element från DOM
const flerIllustrationerButton = document.getElementById(
  "show-more-illustrations",
)
const visiblePosts = document.getElementById("visible-posts")
const hiddenPosts = document.getElementById("hidden-posts")

// Funktioner
// Funktion för att visa fler illustrationer
const showMoreIllustrationer = () => {
  if (flerIllustrationerButton && hiddenPosts) {
    // Eventlyssnare
    flerIllustrationerButton.addEventListener("click", function () {
      console.log(
        "--> Nu klickar du på knappen för att visa fler illustrationer",
      )
      hiddenPosts.style.display = "block"
      visiblePosts.style.display = "none"
      flerIllustrationerButton.style.display = "none"
    })
  }
}

console.log("laddat in filen illustrationer.js")

showMoreIllustrationer()
