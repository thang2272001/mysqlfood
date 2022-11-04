const toggle = document.querySelectorAll(".card.scaleOnHover");
toggle.forEach(btn => {
    const ul = btn.querySelector(".ul-1");
    const icon = btn.querySelector(".toggle");
    icon.onclick = () => {
        ul.classList.toggle("active");
        icon.classList.toggle("active")
    }
})
