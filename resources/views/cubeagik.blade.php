<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dhirga Wahyudi</title>
  <style>

    :root {
      --bg-color: #fdfdfd;
      --text-color: #222;
      --accent: #c2a75d;
      --muted: #777;
      --section-bg: #f5f3f0;
      --font-main: 'Georgia', serif;
      --font-secondary: 'Segoe UI', sans-serif;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: var(--font-secondary);
      background-color: var(--bg-color);
      color: var(--text-color);
      line-height: 1.8;
    }

    header {
      background: linear-gradient(to right, #eee, #ddd);
      padding: 4rem 2rem;
      text-align: center;
      border-bottom: 1px solid #ccc;
    }

    header h1 {
      font-family: var(--font-main);
      font-size: 3.5rem;
      color: var(--accent);
      margin-bottom: 1rem;
    }

    header p {
      font-style: italic;
      font-size: 1.2rem;
      color: var(--muted);
    }

    nav {
      background-color: #fafafa;
      padding: 1rem 0;
      border-top: 1px solid #eee;
      border-bottom: 1px solid #eee;
      display: flex;
      justify-content: center;
      gap: 2.5rem;
    }

    nav a {
      text-decoration: none;
      color: var(--accent);
      font-weight: bold;
      font-size: 1rem;
      transition: 0.3s ease;
    }

    nav a:hover {
      color: #000;
    }

    section {
      padding: 4rem 2rem;
      max-width: 900px;
      margin: auto;
    }

    h2 {
      font-family: var(--font-main);
      font-size: 2.5rem;
      color: var(--accent);
      margin-bottom: 1.5rem;
      border-bottom: 2px solid #e4d6b5;
      padding-bottom: 0.5rem;
    }

    p, li {
      font-size: 1.05rem;
      color: var(--text-color);
    }

    ul {
      list-style-type: square;
      margin-left: 1.5rem;
    }

    .puisi {
      background-color: var(--section-bg);
      border-left: 6px solid var(--accent);
      padding: 2rem;
      margin-top: 2rem;
      font-family: var(--font-main);
      font-style: italic;
      font-size: 1.1rem;
      color: #444;
      box-shadow: 0 4px 10px rgba(0,0,0,0.05);
      border-radius: 8px;
    }

    footer {
      background-color: #eee;
      text-align: center;
      padding: 2rem;
      font-size: 0.95rem;
      color: #555;
      margin-top: 5rem;
    }

    @media (max-width: 600px) {
      header h1 {
        font-size: 2.2rem;
      }
      nav {
        flex-direction: column;
        gap: 1rem;
      }
    }
  </style>
</head>
<body>

  <header>
    <h1>Dhirga Wahyudi</h1>
    <p>"Elegan bukan soal tampilan—tapi tentang cara berbicara dan berkarya."</p>
  </header>

  <nav>
    <a href="#tentang">Tentang</a>
    <a href="#karya">Karya</a>
    <a href="#puisi">Puisi</a>
    <a href="#kontak">Kontak</a>
  </nav>

  <section id="tentang">
    <h2>Tentang Saya</h2>
    <p>
      Saya adalah seseorang yang tidak hanya menciptakan karya, tapi juga menanamkan makna di dalamnya. 
      Portofolio ini adalah cerminan dari perjalanan, rasa, dan kepercayaan bahwa keindahan dapat dibentuk oleh kedalaman jiwa.
    </p>
  </section>

  <section id="karya">
    <h2>Portofolio Karya</h2>
    <ul>
      <li>Website Design – "Elegansi dalam Simetri"</li>
      <li>Logo & Branding – "Kekuatan dalam Kesederhanaan"</li>
      <li>UI/UX Aplikasi – "Sentuhan Manusia dalam Teknologi"</li>
      <li>Fotografi – "Sunyi yang Berbicara"</li>
    </ul>
  </section>

  <section id="puisi">
    <h2>!!</h2>

    <div class="puisi">
      Ada rasa yang tak sempat tertuliskan,<br>
      Hanya diam yang mampu menyimpan.<br>
      Bukan karena tak ingin bicara,<br>
      Tapi karena takut merusak yang sudah ada.<br><br>
      Rindu yang tidak pernah meminta pulang,<br>
      Cinta yang tak butuh dipaksakan.<br>
      Aku belajar mencintaimu,<br>
      Dalam diam yang paling dalam.
    </div>

    <div class="puisi">
      Setiap jatuh bukan akhir dari langkah,<br>
      Tapi titik tumpu untuk melompat lebih tinggi.<br>
      Dalam sunyi, aku tumbuh.<br>
      Dalam gagal, aku ditempa.<br><br>
      Karena hidup bukan soal siapa tercepat,<br>
      Tapi siapa yang tetap berjalan meski paling terluka.
    </div>
  </section>

  <section id="kontak">
    <h2>Kontak</h2>
    <p>
      📧 Email: dhirga@email.com <br>
      📱 WhatsApp: +62 812-xxxx-xxxx <br>
      📍 Lokasi: Indonesia
    </p>
  </section>

  <footer>
    &copy; 2025 Dhirga Wahyudi — Dibangun dengan rasa, dirancang dengan cinta ✨
  </footer>

</body>
</html>
