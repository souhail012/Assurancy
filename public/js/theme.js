import { docReady } from "./utils";
import navbarInit from "./navbar-darken-on-scroll";
import detectorInit from "./detector";

/* -------------------------------------------------------------------------- */
/*                            Theme Initialization                            */
/* -------------------------------------------------------------------------- */
docReady(navbarInit);
docReady(detectorInit);

function toggleComments(commentsId) {
    var commentsDiv = document.getElementById(commentsId);
    if (commentsDiv.style.display === "none") {
        commentsDiv.style.display = "block";
        // Ajoutez ici le code pour charger dynamiquement les commentaires depuis votre source de données pour la publication correspondante
    } else {
        commentsDiv.style.display = "none";
    }
}
