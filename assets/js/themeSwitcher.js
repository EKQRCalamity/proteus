function setCookie(name,value,expiry) {
  var date = new Date();
  date.setTime(date.getTime() + (expiry * 60 * 1000));
  const expires = (!expiry) ? "" : "; expires=" + date.toUTCString();
  document.cookie = `${name}=${encodeURIComponent(value) || ""}${expires}; path=/; SameSite=Lax`;
}

function getCookie(_name) {
  const name = _name + "=";
  const cookie = document.cookie.split("; ").find(c => c.indexOf(name) === 0);
  return (!cookie) ? null : cookie.slice(_name.length + 1);
}

function resetCookie(_name) {
  const date = new Date();
  date.setDate(0);
  document.cookie = `${_name}=; expires=${date.toUTCString()}; path=/; SameSite=Lax`;
}

document.addEventListener("DOMContentLoaded", () => {
  const body = document.getElementById("docroot");

  const cookie = getCookie("theme");
  if (!cookie) {
    setCookie("theme", "dark-theme");
  } else {
    if (cookie != "dark-theme") {
      body.classList.remove("dark-theme");
      body.classList.add(cookie);
    }
  }

  const tswitch = document.getElementById("theme-switch");
  tswitch.addEventListener("click", () => {
    if (body.classList.contains("light-theme")) {
      body.classList.remove("light-theme");
      body.classList.add("dark-theme");
      setCookie("theme", "dark-theme", 240000);
    } else {
      body.classList.remove("dark-theme");
      body.classList.add("light-theme");
      setCookie("theme", "light-theme", 240000);
    }
  })
});
