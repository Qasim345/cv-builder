if ("serviceWorker" in navigator) {
  navigator.serviceWorker.register("sw.js").then(registeration => {
    console.log("SW Registered!");
  //  console.log(registeration);
  }).catch(error => {
    //console.log("SW Registered filed");
    console.log(error);
  })
}

window.onload = ()=> {
  setTimeout(()=> {
    $(".loader").fadeOut(100);
  }, 1000)
}
// toggle navbar
$("#nav-btn").click(() => {
  $(".back,#nav-btn,#sidebar").toggleClass("act");
});
document.onclick = ((e) => {
  if (e.target.id !== 'sidebar' && e.target.id !== 'nav-btn') {
    $(".back,#nav-btn,#sidebar").removeClass("act");
  }
})
$("#about").click(() => {
  $(".about-modol").css("top", "50%");
  $(".modol-container").css("display", "block");
})
$("#close-about").click(() => {
  $(".about-modol").css("top", "-100%");
  $(".modol-container").css("display", "none");
});
$("form").on("submit", () => {
  $("form button").html(`<div class="btn-loader"></div>`);
})