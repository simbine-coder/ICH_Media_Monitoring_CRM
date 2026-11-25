
/* =========================================
   FONTE CULTURE — PORTAL
   INTRO ANIMATION CONTROL
   ========================================= */

document.addEventListener("DOMContentLoaded", () => {

  const introScreen = document.getElementById("introScreen");
  const portalScreen = document.getElementById("portalScreen");

  const reducedMotion = window.matchMedia(
    "(prefers-reduced-motion: reduce)"
  ).matches;


  // Total duration of the introductory sequence
  const introDuration = reducedMotion ? 100 : 4000;


  function showPortal() {

    // Begin the intro screen exit
    introScreen.classList.add("is-exiting");

    // Reveal the final portal screen
    portalScreen.classList.add("is-visible");

    // Remove the intro screen from interaction
    window.setTimeout(() => {
      introScreen.style.display = "none";
    }, 700);

    // Restore normal page scrolling if required
    document.body.style.overflow = "hidden";
  }


  // Start the final screen after the intro animation
  window.setTimeout(showPortal, introDuration);

});
