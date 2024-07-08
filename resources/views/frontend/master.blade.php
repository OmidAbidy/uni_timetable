<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="frontend/styles/home.css" />
    <link rel="stylesheet" href="frontend/styles/all.min.css" />
    <link rel="icon" type="image/png" href="frontend/favicon.ico" />
    <title>Home</title>
  </head>
  <body>
    <header>
      <section class="left-sect">
        <div class="logo"><img src="images/logo3.png" alt="" /></div>
        <ul class="nav-links">
          <li><a class="active" href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </section>
      <span class="right-sect">
        <select id="language">
          <option value="english" selected>Eng</option>
          <option value="pashto">پښتو</option>
          <option value="dari">دری</option>
        </select>
        <a href="dashboard" class="login-link">Login</a>
      </span>
    </header>
    @yield('content')





    

    <p
      style="
        text-align: center;
        font-size: 1.3rem;
        color: var(--Dark-gray-blue);
      "
    >
      &copy; Kabul Uneversity 2024
    </p>

    <script>
      const text = document.querySelector(".sec-text");

      const textLoad = () => {
        setTimeout(() => {
          text.textContent = "Reliable";
        }, 0);
        setTimeout(() => {
          text.textContent = "Safe";
        }, 3000);
        setTimeout(() => {
          text.textContent = "Fast";
        }, 6000);
      };

      textLoad();
      setInterval(textLoad, 9000);
    </script>
    <script src="frontend/styles/all.min.js"></script>
  </body>
</html>
