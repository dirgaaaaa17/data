<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dhirga Wahyudi</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Inter:wght@400;500&display=swap');

    body {
      margin: 0;
      padding: 0;
      font-family: 'Inter', sans-serif;
      background-color: #FCEFCB;
      color: #2b2b2b;
    }

    .container {
      max-width: 900px;
      margin: 80px auto;
      background: #ffffff;
      padding: 60px;
      border-radius: 18px;
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
      border: 1px solid #e3e3e3;
      position: relative;
    }

    h1 {
      font-family: 'Playfair Display', serif;
      text-align: center;
      font-size: 3em;
      color: #1d3557;
      margin-bottom: 10px;
    }

    .quote {
      text-align: center;
      font-style: italic;
      font-size: 1.2em;
      color: #6c757d;
      margin-bottom: 50px;
    }

    .biodata-item {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      margin-bottom: 25px;
      padding-bottom: 10px;
      border-bottom: 1px solid #efefef;
      flex-wrap: wrap;
    }

    .label {
      font-weight: 500;
      color: #495057;
      width: 40%;
    }

    .value {
      text-align: right;
      color: #111;
      width: 55%;
      font-weight: 400;
    }

    .highlight {
      color: #d4af37;
      font-weight: bold;
    }

    .footer-motivation {
      margin-top: 60px;
      text-align: center;
      font-size: 1.1em;
      font-style: italic;
      color: #444;
      border-top: 1px solid #ccc;
      padding-top: 30px;
    }

    .gold-line {
      width: 80px;
      height: 4px;
      background: linear-gradient(to right, #d4af37, #f7d774);
      border-radius: 10px;
      margin: 30px auto;
    }

    .badge {
      position: absolute;
      top: -25px;
      left: 50%;
      transform: translateX(-50%);
      background-color: #fefefe;
      border: 1px solid #d6b75d;
      padding: 8px 20px;
      font-size: 0.9em;
      color: #d4af37;
      border-radius: 50px;
      letter-spacing: 1px;
      font-weight: 600;
    }

    .social-media {
      margin-top: 40px;
      text-align: center;
    }

    .social-media h3 {
      margin-bottom: 15px;
      font-size: 1.2em;
      color: #1d3557;
    }

    .social-media a {
      margin: 0 12px;
      text-decoration: none;
      font-weight: 500;
      color: #2b2b2b;
      transition: color 0.3s ease;
    }

    .social-media a:hover {
      color: #d4af37;
    }

    @media (max-width: 600px) {
      .biodata-item {
        flex-direction: column;
        align-items: flex-start;
      }

      .label, .value {
        width: 100%;
        text-align: left;
      }

      .label {
        margin-bottom: 4px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="badge">BIODATA</div>

    <h1>Dhirga Wahyudi</h1>
    <div class="quote">"Hari ini adalah kesempatan baru. Jangan biarkan bayangan kemarin menghalangi sinar matahari hari ini."</div>
    <div class="gold-line"></div>

    <div class="biodata-item">
      <span class="label">Tempat, Tanggal Lahir:</span>
      <span class="value">Tanjung Pandan, 17 Agustus 2008</span>
    </div>
    <div class="biodata-item">
      <span class="label">Jenis Kelamin:</span>
      <span class="value">Laki-laki</span>
    </div>
    <div class="biodata-item">
      <span class="label">Alamat:</span>
      <span class="value">Jl. Sijuk, Tanjung Pandan</span>
    </div>
    <div class="biodata-item">
      <span class="label">No. Telepon:</span>
      <span class="value">+62 878-6871-7085</span>
    </div>
    <div class="biodata-item">
      <span class="label">Email:</span>
      <span class="value">dhirgawahyudi00@email.com</span>
    </div>
    <div class="biodata-item">
      <span class="label">Hobi:</span>
      <span class="value">Futsal, Sepakbola</span>
    </div>
    <div class="biodata-item">
      <span class="label">Cita-cita:</span>
      <span class="value"><span class="highlight">TNI</span> — Tentara Nasional Indonesia</span>
    </div>
    <div class="biodata-item">
      <span class="label">Pendidikan:</span>
      <span class="value">SMK Negeri 1 Tanjung Pandan</span>
    </div>

    <div class="social-media">
      <h3>Temukan Saya di</h3>
      <a href="https://www.instagram.com/__dhirgaaaw/?next=%2F" target="_blank">Instagram</a>
      <a href="https://www.tiktok.com/@__dirgaaaaa__?lang=id-ID" target="_blank">TikTok</a>
      <a href="https://wa.me/6287868717085" target="_blank">WhatsApp</a>
    </div>

    <div class="footer-motivation">
      "Tak perlu menunggu sempurna untuk memulai. Cukup mulai, maka kamu akan mendekati sempurna."
    </div>
  </div>
</body>
</html>
