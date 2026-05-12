const expandableMenu = () => {
  console.log("laddat in filen expandableMenu.js")

  // Hämta in element från DOM
  const menuButton = document.querySelector(".hamburger-menu")
  const expandedMenu = document.querySelector(".hamburgermenu-expanded")
  const closeButton = document.querySelector(".close-button")

  //Funktioner
  //   Funktion för att toggla utfälld meny
  const toggleExpandableMenu = () => {
    console.log("Klickat på knappen...")
    expandedMenu.classList.toggle("visible")
  }

  //   Funktion för att stänga utfälld meny när man trycker på krysset
  const closeExpandableMenu = () => {
    expandedMenu.classList.remove("visible")
  }

  // Eventlyssnare
  menuButton.addEventListener("click", toggleExpandableMenu)
  closeButton.addEventListener("click", closeExpandableMenu)
}

expandableMenu()
