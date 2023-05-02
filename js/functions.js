function toggleNav() {

                let nav = document.getElementById("navbar"); 
                if (!nav.style.display || nav.style.display === "none") {
                    nav.style.display = "block";
                } else {
                    nav.style.display = "none";
                }
            };
