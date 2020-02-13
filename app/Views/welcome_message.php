<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Welcome to CodeIgniter</title>
  <meta name="description" content="The small framework with powerful features">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
</head>
<body>

<!-- STYLES ---------------------------------------------------------------- -->

<style {csp-style-nonce}>
  html, body {
    color: #212529;
    font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Helvetica, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji;
    font-size: 16px;
    margin: 0;
    padding: 0;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-rendering: optimizeLegibility;
  }
  header {
    background-color: #f7f8f9;
  }
  header ul {
    list-style-type: none;
    margin: 0;
    overflow: hidden;
    padding: 0.75rem;
  }
  header li {
    float: right;
  }
  header li a {
    color: rgba(0,0,0,0.5);
    display: block;
    padding: 0.8rem;
    text-align: center;
    text-decoration: none;
  }
  header li a:hover {
    color: rgba(0,0,0,0.75);
  }
  header .logo {
    float: left;
    padding: 0 0.5rem;
  }
  header .menu-toggle {
    display: none;
    font-size: 2rem;
    font-weight: bold;
  }
  header .menu-toggle a {
    padding: 0.45rem 0.75rem;
  }
  header .heroe {
    margin: 0 auto;
    max-width: 1100px;
    padding: 0.5rem 1.75rem 2rem 1.75rem;
  }
  header .heroe h1 {
    font-size: 2.5rem;
    font-weight: 500;
  }
  header .heroe h2 {
    font-size: 1.5rem;
    font-weight: 300;
  }
  section {
    margin: 0 auto;
    max-width: 1100px;
    padding: 2.5rem 1.75rem;
  }
  section pre {
    background-color: #f7f8f9;
    border: 1px solid #F0F0F0;
    display: block;
    font-size: 0.9rem;
    margin: 2rem 0;
    padding: 1rem 1.5rem;
    white-space: pre-wrap;
    word-break: break-all;
  }
  section code {
    display: block;
  }
  section a {
    color: #DD4814;
  }
  footer {
    background-color: #DD4814;
    font-weight: 200;
    text-align: center;
  }
  footer .environment {
    color: #FFFFFF;
    padding: 2rem 1.75rem;
  }
  footer .copyrights {
    background-color: #FFFFFF;
    color: #777777;
    font-size: 0.8rem;
    padding: 0.25rem 1.75rem;
  }
  @media (min-width: 640px) {
    header .menu-item {
      display: block!important;
    }
  }
  @media (max-width: 640px) {
    header ul {
      padding: 0 0.75rem;
    }
    header .logo {
      padding: 0.75rem 0.75rem;
    }
    header .menu-item {
      background-color: #FBFBFB;
      display: none;
      width: 100%;
    }
    header .menu-toggle {
      display: block;
    }
  }
</style>

<!-- HEADER: MENU + HEROE SECTION ------------------------------------------ -->

<header>

  <div class="menu">
    <ul>
      <li class="logo"><img height="38px" width="138px" alt="CodeIgniter" src="data:image/png;base64,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" alt=""></li>
      <li class="menu-toggle"><a target="_self" onclick="toggleMenu();">&#9776;</a></li>
      <li class="menu-item"><a href="https://github.com/codeigniter4/CodeIgniter4/blob/master/CONTRIBUTING.md" target="_blank">Contribution</a></li>
      <li class="menu-item"><a href="https://codeigniter4.github.io/userguide/" target="_blank">Documentation</a></li>
      <li class="menu-item"><a href="https://forum.codeigniter.com/" target="_blank">Community</a></li>
      <li class="menu-item"><a href="https://codeigniter.com" target="_blank">Website</a></li>
    </ul>
  </div>

  <div class="heroe">

    <h1>Welcome to CodeIgniter <?= CodeIgniter\CodeIgniter::CI_VERSION ?></h1>

    <h2>The small framework with powerful features</h2>

  </div>

  <div class="divider"></div>

</header>

<!-- CONTENT --------------------------------------------------------------- -->

<section>

  <p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

  <p>If you would like to edit this page you will find it located at:</p>

  <pre><code>app/Views/welcome_message.php</code></pre>

  <p>The corresponding controller for this page can be found at:</p>

  <pre><code>app/Controllers/Home.php</code></pre>

  <p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="https://codeigniter4.github.io/CodeIgniter4" target="_blank">User Guide</a>.</p>

</section>

<!-- FOOTER: DEBUG INFO + COPYRIGHTS --------------------------------------- -->

<footer>

  <div class="environment">

    <p>Page rendered in {elapsed_time} seconds</p>

    <p>Environment: <?= ENVIRONMENT ?></p>

  </div>

  <div class="copyrights">

    <p>&copy; <?= date('Y') ?> CodeIgniter Foundation. Codeigniter is open source project released under the MIT open source licence.</p>

  </div>

</footer>

<!-- SCRIPTS --------------------------------------------------------------- -->

<script type="text/javascript">
function toggleMenu() {
  var menuItems = document.getElementsByClassName('menu-item');
  for (var i = 0; i < menuItems.length; i ++) {
    var menuItem = menuItems[i];
    if (menuItem.style.display === 'block') {
      menuItem.style.display = 'none';
    } else {
      menuItem.style.display = 'block';
    }
  }
}
</script>

<!-- ----------------------------------------------------------------------- -->

</body>
</html>
