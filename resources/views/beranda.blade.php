<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rumah Tahfidz Qur'an Al-Falah</title>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Poppins:wght@300;400;500;600;700;800&display=swap');

    :root {
      --primary: #12372a;
      --primary-dark: #0b241c;
      --primary-soft: #d8eadf;

      --secondary: #c88a2c;
      --secondary-dark: #9a6418;
      --secondary-soft: #fff1d6;

      --background: #fffaf0;
      --surface: #ffffff;
      --surface-soft: #f7efe1;

      --text-dark: #1f1f1f;
      --text-muted: #6f665c;

      --border: #ead9be;
      --shadow: 0 14px 35px rgba(18, 55, 42, 0.12);
      --shadow-soft: 0 8px 22px rgba(18, 55, 42, 0.08);
      --radius: 18px;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Poppins', Arial, Helvetica, sans-serif;
      color: var(--text-dark);
      background: var(--background);
      line-height: 1.6;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    img {
      max-width: 100%;
      display: block;
    }

    /*
    |--------------------------------------------------------------------------
    | NAVBAR
    |--------------------------------------------------------------------------
    */

.navbar {
  width: 100%;
  height: 88px;
  background: rgba(255, 250, 240, 0.96);
  backdrop-filter: blur(14px);
  display: grid;
  grid-template-columns: 320px 1fr 320px;
  align-items: center;
  padding: 0 48px;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 999;
  border-bottom: 1px solid var(--border);
  box-shadow: 0 8px 25px rgba(18, 55, 42, 0.08);
}

.brand {
  display: flex;
  align-items: center;
  gap: 14px;
}

.logo-box {
  width: 70px;
  height: 70px;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}

.logo-box img {
  width: 100%;
  height: 100%;
  object-fit: contain;
}

.brand-text {
  font-size: 15px;
  line-height: 1.25;
  font-weight: 700;
  color: var(--primary-dark);
}

.nav-menu {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 46px;
  font-size: 18px;
  font-weight: 700;
  color: var(--primary-dark);
}

.nav-menu > a,
.nav-item > a {
  position: relative;
  padding: 31px 0;
  transition: 0.25s ease;
}

.nav-menu > a::after,
.nav-item > a::after {
  content: "";
  width: 0;
  height: 3px;
  background: var(--secondary);
  border-radius: 20px;
  position: absolute;
  left: 0;
  bottom: 23px;
  transition: 0.25s ease;
}

.nav-menu > a:hover,
.nav-item:hover > a {
  color: var(--secondary-dark);
}

.nav-menu > a:hover::after,
.nav-item:hover > a::after {
  width: 100%;
}

.nav-item {
  position: relative;
}

.nav-item > a {
  display: flex;
  align-items: center;
  gap: 7px;
}

.dropdown {
  position: absolute;
  top: 76px;
  left: 50%;
  transform: translateX(-50%);
  width: 200px;
  background: var(--surface);
  display: none;
  border: 1px solid var(--border);
  border-radius: 14px;
  overflow: hidden;
  box-shadow: var(--shadow);
  z-index: 1000;
}

.dropdown a {
  display: block;
  font-size: 14px;
  padding: 13px 16px;
  color: var(--primary-dark);
  border-bottom: 1px solid #f1e3cc;
  transition: 0.2s ease;
}

.dropdown a:last-child {
  border-bottom: none;
}

.dropdown a:hover {
  background: var(--secondary-soft);
  color: var(--secondary-dark);
  padding-left: 22px;
}

.nav-item:hover .dropdown {
  display: block;
}

.nav-spacer {
  width: 320px;
}

/* Login & Register disembunyikan dari halaman depan */
.auth-buttons {
  display: none;
}

/*
|--------------------------------------------------------------------------
| HERO
|--------------------------------------------------------------------------
*/

    /* HERO / BERANDA */
    section#beranda.hero {
      margin-top: 88px;
      min-height: calc(100vh - 88px);
      background:
        linear-gradient(120deg, rgba(25, 35, 18, 0.96), rgba(48, 62, 33, 0.92)),
        radial-gradient(circle at 85% 25%, rgba(201, 144, 46, 0.22), transparent 32%),
        linear-gradient(135deg, #192312, #303e21, #4f5f36) !important;
      position: relative;
      overflow: hidden;
      display: block;
      padding: 0 6%;
    }

    /* Judul besar */
    section#beranda.hero::before {
      content: "Rumah Tahfidz Qur’an Al-Falah";
      width: min(650px, 90%);
      color: #fff4d8;
      font-family: 'Amiri', serif;
      font-size: clamp(48px, 6vw, 78px);
      font-weight: 700;
      line-height: 1.05;
      letter-spacing: 1px;
      position: absolute;
      left: 6%;
      top: 135px;
      z-index: 2;
      text-shadow: 0 6px 20px rgba(0, 0, 0, 0.5);
    }

    /* Deskripsi */
    section#beranda.hero::after {
      content: "Membentuk generasi Qur’ani yang berakhlak mulia, cinta Al-Qur’an, dan semangat dalam menuntut ilmu.";
      width: min(600px, 88%);
      color: #f7ecd1;
      font-size: 17px;
      line-height: 1.75;
      position: absolute;
      left: 6%;
      top: 385px;
      z-index: 2;
      text-shadow: 0 3px 14px rgba(0, 0, 0, 0.45);
    }

    /* Tombol */
    .hero-actions {
      position: absolute;
      left: 6%;
      top: 505px;
      display: flex;
      gap: 14px;
      z-index: 3;
    }

    .hero-actions a {
      min-width: 170px;
      height: 48px;
      border-radius: 999px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 14px;
      font-weight: 700;
      letter-spacing: 0.2px;
      transition: 0.25s ease;
    }

    /* Tombol Daftar Sekarang */
    .hero-actions a:first-child {
      background: #c9902e;
      color: #ffffff;
      box-shadow: 0 12px 28px rgba(201, 144, 46, 0.35);
    }

    /* Tombol Jelajahi Program */
    .hero-actions a:last-child {
      background: #fff4d8;
      color: #202816;
      border: 1px solid #fff4d8;
      box-shadow: 0 12px 28px rgba(0, 0, 0, 0.18);
    }

    .hero-actions a:hover {
      transform: translateY(-3px);
      filter: brightness(1.06);
    }

    /*
    |--------------------------------------------------------------------------
    | GLOBAL SECTION
    |--------------------------------------------------------------------------
    */

    section {
      padding: 110px 6%;
      position: relative;
    }

    section:nth-of-type(even) {
      background: var(--surface-soft);
    }

    section:nth-of-type(odd) {
      background: var(--background);
    }

    .section-header {
      max-width: 1120px;
      margin: 0 auto 70px;
      background:
        linear-gradient(135deg, rgba(255, 255, 255, 0.94), rgba(255, 241, 214, 0.86));
      border: 1px solid var(--border);
      border-radius: 24px;
      text-align: center;
      padding: 42px 50px;
      box-shadow: var(--shadow-soft);
    }

    .section-header h2 {
      font-family: 'Amiri', serif;
      font-size: clamp(36px, 5vw, 58px);
      font-weight: 700;
      color: var(--primary);
      letter-spacing: 1px;
      margin-bottom: 14px;
      line-height: 1.15;
    }

    .section-header p {
      font-size: 16px;
      max-width: 760px;
      margin: auto;
      line-height: 1.75;
      color: var(--text-muted);
    }

    /*
    |--------------------------------------------------------------------------
    | TENTANG KAMI
    |--------------------------------------------------------------------------
    */

    .about-section {
      padding-top: 150px;
    }

    .about-grid {
      max-width: 1280px;
      margin: auto;
      display: grid;
      grid-template-columns: 1.1fr 0.9fr;
      gap: 70px;
      align-items: center;
    }

    .image-placeholder {
      width: 100%;
      height: 425px;
      background:
        linear-gradient(135deg, rgba(18, 55, 42, 0.12), rgba(200, 138, 44, 0.14)),
        #efe2cc;
      border-radius: 24px;
      position: relative;
      overflow: hidden;
      border: 1px solid var(--border);
      box-shadow: var(--shadow);
    }

    .image-placeholder::before,
    .image-placeholder::after {
      content: "";
      position: top;
      width: 125%;
      height: 1px;
      background: rgba(18, 55, 42, 0.25);
      top: 10%;
      left: -12%;
    }

    .image-placeholder::before {
      transform: rotate(28deg);
    }

    .image-placeholder::after {
      transform: rotate(-28deg);
    }

    .image-placeholder img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      position: relative;
      z-index: 2;
    }

    .about-text h2 {
      font-family: 'Amiri', serif;
      font-size: clamp(42px, 5vw, 60px);
      font-weight: 700;
      color: var(--primary);
      margin-bottom: 18px;
      line-height: 1.15;
    }

    .about-text p {
      font-size: 16px;
      line-height: 1.85;
      margin-bottom: 18px;
      text-align: justify;
      color: var(--text-muted);
    }

    /*
|--------------------------------------------------------------------------
| VISI MISI
|--------------------------------------------------------------------------
*/

#visi-misi {
  padding: 80px 6%;
}

#visi-misi .section-header {
  margin-bottom: 45px;
}

.visi-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 28px;
  max-width: 1180px;
  margin: auto;
  align-items: stretch;
}

.visi-card {
  min-height: auto;
  background: var(--surface);
  border: 1px solid var(--border);
  border-radius: 24px;
  padding: 36px 42px;
  box-shadow: var(--shadow);
  position: relative;
  overflow: hidden;
}

.visi-card::before {
  content: "";
  width: 130px;
  height: 130px;
  background: var(--secondary-soft);
  border-radius: 50%;
  position: absolute;
  top: -45px;
  right: -45px;
}

.visi-card h3 {
  text-align: center;
  font-family: 'Amiri', serif;
  font-size: 42px;
  font-weight: 700;
  color: var(--primary);
  margin-bottom: 26px;
  position: relative;
  z-index: 2;
}

.visi-card .visi-text {
  text-align: center;
  font-size: 22px;
  line-height: 1.55;
  color: var(--primary-dark);
  position: relative;
  z-index: 2;
}

.visi-card .misi-text {
  font-size: 17px;
  line-height: 1.75;
  color: var(--text-muted);
  position: relative;
  z-index: 2;
}

.visi-card .misi-text ol {
  margin: 0;
  padding-left: 22px;
}

.visi-card .misi-text li {
  margin-bottom: 12px;
}

/*
|--------------------------------------------------------------------------
| PROGRAM
|--------------------------------------------------------------------------
*/

#program {
  scroll-margin-top: 110px;
  padding-top: 135px;
  background: var(--background);
}

.program-section {
  background: var(--background);
}

.program-grid {
  max-width: 1180px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: 28px;
}

.program-card {
  min-height: 315px;
  background: var(--surface);
  border: 1px solid var(--border);
  border-radius: 24px;
  padding: 34px 36px;
  box-shadow: var(--shadow-soft);
  transition: 0.25s ease;
  display: flex;
  flex-direction: column;
  color: inherit;
  text-decoration: none;
  overflow: hidden;
}

.program-card:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow);
  border-color: rgba(18, 55, 42, 0.28);
  color: inherit;
}

.program-link {
  display: flex;
  color: inherit;
  text-decoration: none;
}

.program-link:hover {
  color: inherit;
}

.program-top {
  display: flex;
  align-items: flex-start;
  gap: 20px;
  margin-bottom: 26px;
}

.program-icon {
  width: 86px;
  height: 86px;
  min-width: 86px;
  background: linear-gradient(135deg, var(--primary), #235c45);
  color: #fff;
  border-radius: 24px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 34px;
  box-shadow: 0 12px 24px rgba(18, 55, 42, 0.2);
  flex-shrink: 0;
}

.program-badges {
  min-width: 0;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: 10px;
  padding-top: 4px;
}

.program-status,
.program-time {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  min-height: 38px;
  padding: 8px 18px;
  border-radius: 999px;
  font-size: 14px;
  font-weight: 800;
  line-height: 1.3;
}

.program-status {
  background: var(--primary);
  color: #fff;
  border: 1px solid var(--primary);
  white-space: nowrap;
}

.program-status.nonaktif {
  background: #dc3545;
  border-color: #dc3545;
}

.program-time {
  max-width: 100%;
  background: #fff8eb;
  border: 1px solid var(--border);
  color: var(--primary-dark);
  text-align: center;
  white-space: normal;
  word-break: break-word;
}

.program-card h3 {
  font-size: 28px;
  font-weight: 800;
  color: var(--primary-dark);
  margin-bottom: 14px;
  line-height: 1.25;
}

.program-card p {
  font-size: 17px;
  line-height: 1.75;
  color: var(--text-muted);
  margin-bottom: 0;
}



  /*
|--------------------------------------------------------------------------
| Fasilitas & Berita Card
|--------------------------------------------------------------------------
*/

    .card-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 36px;
      max-width: 1285px;
      margin: auto;
    }

    .media-card {
      border: 1px solid var(--border);
      border-radius: 22px;
      overflow: hidden;
      box-shadow: var(--shadow-soft);
      background: var(--surface);
      transition: 0.25s ease;
    }

    .media-card:hover {
      transform: translateY(-7px);
      box-shadow: var(--shadow);
    }

    .media-card .image-placeholder {
      height: 230px;
      border-radius: 0;
      border: none;
      border-bottom: 1px solid var(--border);
      box-shadow: none;
    }

    .media-card-body {
      padding: 24px 24px 30px;
    }

    .media-card-body h3 {
      font-size: 22px;
      font-weight: 700;
      color: var(--primary);
      margin-bottom: 10px;
      line-height: 1.3;
    }

    .media-card-body p {
      font-size: 14px;
      line-height: 1.75;
      color: var(--text-muted);
    }

    /*
    |--------------------------------------------------------------------------
    | DATA PENGAJAR
    |--------------------------------------------------------------------------
    */

    .teacher-search {
  max-width: 430px;
  height: 52px;
  border: 1px solid var(--border);
  border-radius: 999px;
  margin: 0 auto 45px;
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 0 18px;
  background: var(--surface);
  color: var(--secondary-dark);
  box-shadow: var(--shadow-soft);
}

.teacher-search input {
  width: 100%;
  border: none;
  outline: none;
  background: transparent;
  color: var(--text-dark);
  font-size: 14px;
}

.teacher-search input::placeholder {
  color: #9b8d7a;
}

/* TABEL PENGAJAR */
.teacher-table {
  width: 100%;
  max-width: 1205px;
  margin: auto;
  table-layout: fixed;
  border-collapse: separate;
  border-spacing: 0;
  overflow: hidden;
  background: var(--surface);
  border: 1px solid var(--border);
  border-radius: 22px;
  box-shadow: var(--shadow);
}

.teacher-table th {
  background: linear-gradient(135deg, var(--primary), #235c45);
  color: #fff;
  font-size: 20px;
  font-weight: 700;
  text-align: left;
  padding: 20px 28px;
}

.teacher-table td {
  padding: 18px 28px;
  font-size: 16px;
  border-top: 1px solid var(--border);
  color: var(--text-muted);
  vertical-align: middle;
}

.teacher-table tbody tr:nth-child(even) {
  background: #fff8eb;
}

.teacher-table tbody tr:hover {
  background: var(--secondary-soft);
}

/* KOLOM FOTO */
.teacher-table th:first-child,
.teacher-table td:first-child {
  width: 130px;
  text-align: center;
}

.teacher-photo-cell {
  width: 130px;
  text-align: center;
}

.teacher-photo {
  width: 75px;
  height: 75px;
  max-width: 75px;
  max-height: 75px;
  object-fit: cover;
  border-radius: 14px;
  margin: 0 auto;
  border: 3px solid var(--secondary-soft);
  box-shadow: var(--shadow-soft);
}

.teacher-photo-placeholder {
  width: 75px;
  height: 75px;
  border-radius: 14px;
  margin: 0 auto;
  background: var(--secondary-soft);
  color: var(--primary);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 28px;
  border: 2px solid var(--border);
}
    /*
    |--------------------------------------------------------------------------
    | KONTAK
    |--------------------------------------------------------------------------
    */

    .contact-box {
      max-width: 1100px;
      margin: 0 auto;
      background: linear-gradient(135deg, #ffffff, #fff1d6);
      border: 1px solid var(--border);
      border-radius: 28px;
      padding: 50px;
      display: grid;
      grid-template-columns: 1.1fr 0.9fr;
      gap: 55px;
      box-shadow: var(--shadow);
    }

    .contact-info h3 {
      font-family: 'Amiri', serif;
      font-size: 46px;
      font-weight: 700;
      color: var(--primary);
      margin-bottom: 28px;
    }

    .contact-row {
      display: flex;
      gap: 16px;
      align-items: flex-start;
      margin-bottom: 24px;
      font-size: 15px;
      line-height: 1.7;
      color: var(--text-muted);
    }

    .contact-icon {
      width: 42px;
      height: 42px;
      min-width: 42px;
      background: var(--primary);
      color: #fff;
      border-radius: 50%;
      font-size: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .contact-row a {
      color: var(--primary);
      font-weight: 600;
    }

    .social-title {
      margin-top: 30px;
      font-size: 18px;
      font-weight: 700;
      color: var(--primary-dark);
    }

    .social-links {
      display: flex;
      gap: 12px;
      margin-top: 12px;
      font-size: 24px;
    }

    .social-links a {
      width: 46px;
      height: 46px;
      background: var(--primary);
      color: #fff;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: 0.25s ease;
    }

    .social-links a:hover {
      background: var(--secondary);
      transform: translateY(-3px);
    }

    .map-box {
      width: 100%;
      min-height: 420px;
      height: 100%;
      border-radius: 22px;
      overflow: hidden;
      position: relative;
      border: 1px solid rgba(18, 55, 42, 0.25);
      box-shadow: var(--shadow-soft);
      background: #fff;
      padding: 0;
    }

    .map-box iframe {
      width: 100%;
      height: 100%;
      min-height: 420px;
      border: 0;
      display: block;
    }

    .map-click-area {
      position: absolute;
      inset: 0;
      z-index: 2;
      cursor: pointer;
      background: transparent;
    }

    .map-box:hover {
      transform: translateY(-5px);
      box-shadow: var(--shadow);
      border-color: var(--primary);
    }

    /*
    |--------------------------------------------------------------------------
    | FOOTER
    |--------------------------------------------------------------------------
    */

    footer {
      background: var(--primary-dark);
      color: #fff;
      text-align: center;
      padding: 28px 20px;
      margin-top: 0;
      font-size: 14px;
      border-top: 5px solid var(--secondary);
    }

    /*
    |--------------------------------------------------------------------------
    | RESPONSIVE
    |--------------------------------------------------------------------------
    */

    @media (max-width: 1100px) {
      .navbar {
        padding: 0 24px;
      }

      .nav-menu {
        gap: 22px;
        font-size: 15px;
      }

      .auth-buttons a {
        min-width: 110px;
      }

      .program-grid {
        grid-template-columns: repeat(2, 1fr);
      }

      .card-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 768px) {
      .navbar {
        height: auto;
        position: relative;
        display: flex;
        flex-direction: column;
        gap: 18px;
        padding: 22px;
      }

      .brand,
      .nav-menu,
      .auth-buttons {
        width: 100%;
        justify-content: center;
        flex-wrap: wrap;
      }

      .nav-spacer {
        display: none;
      }

      .nav-menu {
        gap: 16px;
      }

      .nav-menu>a,
      .nav-item>a {
        padding: 8px 0;
      }

      .nav-menu>a::after,
      .nav-item>a::after {
        bottom: 0;
      }

      .dropdown {
        top: 32px;
        left: 50%;
        transform: translateX(-50%);
      }

      .hero {
        margin-top: 0;
        min-height: 620px;
        padding: 80px 7%;
        align-items: flex-start;
      }

      .hero::before {
        font-size: 43px;
      }

      .hero::after {
        top: 245px;
        left: 7%;
        font-size: 16px;
        width: 86%;
      }

      .hero-actions {
        top: 420px;
        left: 7%;
        right: 7%;
        bottom: auto;
        flex-direction: column;
        gap: 12px;
      }

      .hero-actions a {
        width: 100%;
        min-width: 0;
        height: 46px;
        font-size: 14px;
      }

      section {
        padding: 80px 6%;
      }

      .about-section {
        padding-top: 80px;
      }

      .about-grid,
      .visi-grid,
      .program-grid,
      .card-grid,
      .contact-box {
        grid-template-columns: 1fr;
      }

      .section-header {
        padding: 34px 24px;
        margin-bottom: 45px;
      }

      .section-header h2 {
        font-size: 38px;
      }

      .visi-card {
        min-height: auto;
        padding: 38px 28px;
      }

      .visi-card h3 {
        font-size: 40px;
        margin-bottom: 28px;
      }

      .visi-card .visi-text {
        font-size: 22px;
      }

      .visi-card .misi-text {
        font-size: 16px;
      }

      .teacher-table {
        display: block;
        overflow-x: auto;
        white-space: nowrap;
      }

      .teacher-table th,
      .teacher-table td {
        font-size: 14px;
        padding: 15px;
      }

      .contact-box {
        padding: 32px 24px;
      }

      .contact-info h3 {
        font-size: 38px;
      }

      #program {
        padding-top: 90px;
      }

      .program-grid {
        grid-template-columns: 1fr;
        gap: 24px;
      }

      .program-card {
        min-height: auto;
        padding: 28px 24px;
      }

      .program-top {
        gap: 16px;
      }

      .program-icon {
        width: 72px;
        height: 72px;
        min-width: 72px;
        font-size: 30px;
        border-radius: 20px;
      }

      .program-card h3 {
        font-size: 24px;
      }

      .program-card p {
        font-size: 15px;
      }

      .program-status,
      .program-time {
        min-height: 34px;
        padding: 7px 14px;
        font-size: 13px;
      }
    }

    @media (max-width: 480px) {
      .logo-box {
        width: 70px;
        height: 54px;
      }

      .brand-text {
        font-size: 13px;
      }

      .auth-buttons {
        flex-direction: column;
      }

      .auth-buttons a {
        width: 100%;
      }

      .hero::before {
        font-size: 36px;
      }

      .hero::after {
        top: 230px;
      }

      .image-placeholder {
        height: 300px;
      }

      .media-card .image-placeholder {
        height: 190px;
      }

      .hero-actions {
        top: 390px;
      }

      .program-card {
        padding: 24px 20px;
      }

      .program-top {
        flex-direction: column;
      }

      .program-badges {
        width: 100%;
      }

      .program-time {
        width: 100%;
      }

      /*
    |--------------------------------------------------------------------------
    | IG IKON LINK
    |--------------------------------------------------------------------------
    */

      .social-links a.instagram-icon {
        width: 46px;
        height: 46px;
        background: linear-gradient(135deg, #833ab4, #fd1d1d, #fcb045);
        color: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: 0.25s ease;
      }

      .social-links a.instagram-icon:hover {
        transform: translateY(-3px);
        filter: brightness(1.08);
      }

      .social-links a.instagram-icon svg {
        width: 24px;
        height: 24px;
      }

      /*
    |--------------------------------------------------------------------------
    | IG IKON LINK
    |--------------------------------------------------------------------------
    */
      /*
|--------------------------------------------------------------------------
| WHATSAPP IKON LINK
|--------------------------------------------------------------------------
*/
      /*
|--------------------------------------------------------------------------
| WHATSAPP IKON LINK
|--------------------------------------------------------------------------
*/

      .contact-icon.whatsapp-contact-icon {
        background: #25D366 !important;
        color: #fff !important;
      }

      .contact-icon.whatsapp-contact-icon svg {
        width: 24px;
        height: 24px;
      }

      .social-links a.whatsapp-icon {
        width: 46px;
        height: 46px;
        background: #25D366 !important;
        color: #fff !important;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: 0.25s ease;
      }

      .social-links a.whatsapp-icon:hover {
        background: #1ebe5d !important;
        transform: translateY(-3px);
        filter: none;
      }

      .social-links a.whatsapp-icon svg {
        width: 25px;
        height: 25px;
      }

      .program-link {
        display: block;
        color: inherit;
        text-decoration: none;
      }

      .program-link:hover {
        color: inherit;
      }
    }
  </style>
</head>

<body>

 {{-- NAVBAR --}}
<nav class="navbar">
  <div class="brand">
    <div class="logo-box">
      <img src="{{ asset('images/logo.jpeg') }}" alt="Logo Rumah Tahfidz Al-Falah">
    </div>

    <div class="brand-text">
      Rumah Tahfidz <br>
      Qur'an Al-Falah
    </div>
  </div>

  <div class="nav-menu">
    <a href="#beranda">Beranda</a>

    <div class="nav-item">
      <a href="#tentang">
        Profil <span>▾</span>
      </a>

      <div class="dropdown">
        <a href="#tentang">Tentang Kami</a>
        <a href="#visi-misi">Visi Misi</a>
        <a href="#fasilitas">Fasilitas</a>
        <a href="#pengajar">Data Pengajar</a>
      </div>
    </div>

    <a href="#program">Program</a>
    <a href="#berita">Berita</a>
    <a href="#kontak">Kontak</a>
  </div>

  <div class="nav-spacer"></div>
</nav>


 {{-- BERANDA --}}
<section id="beranda" class="hero">
  <div class="hero-actions">
    <a href="https://linktr.ee/rumahtahfidzquranal_falah" target="_blank" rel="noopener noreferrer">
      Informasi
    </a>

    <a href="#program">Jelajahi Program</a>
  </div>
</section>


  {{-- TENTANG KAMI --}}
  <section id="tentang" class="about-section">
    <div class="about-grid">
      <div class="image-placeholder">
        {{-- Foto sementara / bisa diganti nanti --}}
        <img src="{{ asset('images/tentang.png') }}" alt="Tentang Kami">
      </div>

      <div class="about-text">
        <h2>Tentang Kami</h2>

        @if(!empty($tentang?->sejarah))
        <p>
          {!! nl2br(e($tentang->sejarah)) !!}
        </p>
        @else
        <p>
          Sejarah Rumah Tahfidz Qur’an Al-Falah belum ditambahkan oleh admin.
        </p>
        @endif
      </div>
    </div>
  </section>

  {{-- VISI MISI --}}
  <section id="visi-misi">
    <div class="section-header">
      <h2>Visi & Misi</h2>
      <p>
        Informasi mengenai visi dan misi Rumah Tahfidz Qur’an Al-Falah
        dapat dilihat pada poin-poin di bawah ini.
      </p>
    </div>

    <div class="visi-grid">
      <div class="visi-card">
        <h3>Visi</h3>

        <div class="visi-text">
          “Mewujudkan insan Qur’ani yang hafiz, hafizah, berakhlak mulia,
          dan menjadi pelopor keluarga Qur’ani.”
        </div>
      </div>

      <div class="visi-card">
        <h3>Misi</h3>

        <div class="misi-text">
          @if(!empty($tentang?->visi_misi))
  {!! nl2br(e($tentang->visi_misi)) !!}
@else
  <ol>
    <li>Menyelenggarakan program pembelajaran Al-Qur’an secara terarah.</li>
    <li>Membimbing santri dalam membaca, menghafal, dan memperbaiki bacaan Al-Qur’an.</li>
    <li>Membentuk akhlak santri melalui pembiasaan nilai-nilai Islami.</li>
    <li>Menjadikan Rumah Tahfidz sebagai wadah pembinaan generasi Qur’ani.</li>
  </ol>
@endif
        </div>
      </div>
    </div>
  </section>


  {{-- PROGRAM --}}
<section id="program" class="program-section">
  <div class="section-header">
    <h2>Program Pembelajaran</h2>
    <p>
      Berbagai program pembelajaran disediakan untuk membantu santri meningkatkan kemampuan
      membaca, menghafal, dan memahami Al-Qur’an melalui metode pembelajaran yang terarah dan islami.
    </p>
  </div>

  @php
    $daftarProgram = $programs ?? $program ?? collect();
  @endphp

  <div class="program-grid">
    @forelse($daftarProgram as $item)

      <a href="{{ route('program.show', $item->id) }}" class="program-card program-link">

        <div class="program-top">
          <div class="program-icon">📖</div>

          <div class="program-badges">
            @if(isset($item->status))
              <span class="program-status {{ $item->status == 'nonaktif' ? 'nonaktif' : '' }}">
                {{ $item->status == 'nonaktif' ? 'Nonaktif' : 'Aktif' }}
              </span>
            @endif

            @if(!empty($item->durasi))
              <span class="program-time">
                {{ str_replace([' x ', '×', '<>'], ' | ', $item->durasi) }}
              </span>
            @endif
          </div>
        </div>

        <h3>
          {{ $item->nama_program ?? 'Program Pembelajaran' }}
        </h3>

        <p>
          {{ $item->deskripsi ?? 'Deskripsi program belum tersedia.' }}
        </p>

      </a>

    @empty

      <div class="program-card">
        <div class="program-top">
          <div class="program-icon">📖</div>
        </div>

        <h3>Belum ada program</h3>

        <p>
          Data program pembelajaran akan tampil setelah ditambahkan oleh admin.
        </p>
      </div>

    @endforelse
  </div>
</section>

  {{-- FASILITAS --}}
  <section id="fasilitas">
    <div class="section-header">
      <h2>Fasilitas Penunjang Belajar</h2>
      <p>
        Kami menyediakan lingkungan yang tenang dan lengkap untuk mendukung
        fokus para santri dalam menuntut ilmu.
      </p>
    </div>

    <div class="card-grid">
      @forelse($fasilitas ?? [] as $item)
      <div class="media-card">
        <div class="image-placeholder">
          @if(!empty($item->foto))
          <img
            src="{{ asset('storage/' . $item->foto) }}"
            alt="{{ $item->deskripsi ?? 'Fasilitas' }}">
          @endif
        </div>

        <div class="media-card-body">
          <h3>{{ $item->deskripsi ?? 'Fasilitas' }}</h3>
        </div>
      </div>
      @empty
      <div class="media-card">
        <div class="image-placeholder"></div>
        <div class="media-card-body">
          <h3>Belum ada data fasilitas</h3>
          <p>Data fasilitas akan tampil setelah ditambahkan oleh admin.</p>
        </div>
      </div>
      @endforelse
    </div>
  </section>


  {{-- DATA PENGAJAR --}}
  <section id="pengajar">
    <div class="section-header">
      <h2>Data Pengajar</h2>
      <p>
        Mengenal barisan Ustadz dan Ustadzah yang membimbing santri dalam
        pembelajaran pada Rumah Tahfidz Qur’an Al-Falah.
      </p>
    </div>

    <div class="teacher-search">
      <span>🔍</span>
      <input
        type="text"
        id="teacherSearch"
        placeholder="Cari nama pengajar..."
        autocomplete="off">
    </div>

    <table class="teacher-table">
      <thead>
        <tr>
          <th>Foto</th>
          <th>Nama Pengajar</th>
          <th>Jabatan</th>
        </tr>
      </thead>

      <tbody>
        @forelse($pengajar ?? [] as $item)
          <tr class="teacher-row">
            <td class="teacher-photo-cell">
              @if(!empty($item->foto))
                <img
                  src="{{ asset('storage/' . $item->foto) }}"
                  alt="Foto {{ $item->nama_lengkap ?? 'Pengajar' }}"
                  class="teacher-photo">
              @else
                <div class="teacher-photo-placeholder">
                  👤
                </div>
              @endif
            </td>

            <td>{{ $item->nama_lengkap ?? '-' }}</td>
            <td>{{ $item->jabatan ?? '-' }}</td>
          </tr>
        @empty
          <tr>
            <td colspan="3" style="text-align: center;">
              Belum ada data pengajar
            </td>
          </tr>
        @endforelse

        <tr id="teacherNotFound" style="display: none;">
          <td colspan="3" style="text-align: center;">
            Data pengajar tidak ditemukan.
          </td>
        </tr>
      </tbody>
    </table>
  </section>


  {{-- BERITA --}}
  <section id="berita">
    <div class="section-header">
      <h2>Berita & Kegiatan</h2>
      <p>
        Berbagai informasi kegiatan, prestasi, dan aktivitas santri Rumah Tahfidz Qur’an Al-Falah
        disajikan sebagai bentuk dokumentasi serta sarana informasi bagi masyarakat.
      </p>
    </div>

    <div class="card-grid">
      @forelse($beritas ?? [] as $berita)

      <a href="{{ route('berita.show', $berita->id) }}" class="media-card berita-link">
        <div class="image-placeholder">
          @if(!empty($berita->gambar))
          <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul ?? 'Berita' }}">
          @elseif(!empty($berita->foto))
          <img src="{{ asset('storage/' . $berita->foto) }}" alt="{{ $berita->judul ?? 'Berita' }}">
          @endif
        </div>

        <div class="media-card-body">
          <h3>{{ $berita->judul ?? 'Berita' }}</h3>
          <p>
            {{ \Illuminate\Support\Str::limit($berita->isi ?? $berita->deskripsi ?? '', 120) }}
          </p>
        </div>
      </a>

      @empty
      @for($i = 1; $i <= 6; $i++)
        <div class="media-card">
        <div class="image-placeholder"></div>

        <div class="media-card-body">
          <h3>Berita {{ $i }}</h3>
          <p>Data berita akan tampil setelah ditambahkan oleh admin.</p>
        </div>
    </div>
    @endfor
    @endforelse
    </div>
  </section>


  {{-- KONTAK --}}
  <section id="kontak">
    <div class="section-header">
      <h2>Kontak</h2>
      <p>
        Hubungi kami untuk mendapatkan informasi lebih lanjut mengenai program pembelajaran,
        pendaftaran santri, serta kegiatan Rumah Tahfidz Qur’an Al-Falah.
      </p>
    </div>

    <div class="contact-box">
      <div class="contact-info">
        <h3>Hubungi Kami</h3>

        <div class="contact-row">
          <div class="contact-icon">📍</div>
          <div>
            Jl. Jahri Saleh Komp, Pandan Arum Permai, Blok D Jalur 5,
            Kelurahan Surgi Mufti, Kecamatan Banjarmasin Utara,
            Kota Banjarmasin.
          </div>
        </div>

        <div class="contact-row">
          <div class="contact-icon whatsapp-contact-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              viewBox="0 0 24 24" fill="currentColor">
              <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.33 4.95L2 22l5.27-1.38a9.86 9.86 0 0 0 4.77 1.22h.01c5.46 0 9.91-4.45 9.91-9.91C21.96 6.45 17.5 2 12.04 2Zm0 18.15h-.01a8.2 8.2 0 0 1-4.18-1.14l-.3-.18-3.13.82.84-3.05-.2-.31a8.17 8.17 0 0 1-1.25-4.38c0-4.53 3.69-8.22 8.23-8.22 2.2 0 4.26.86 5.81 2.41a8.18 8.18 0 0 1 2.41 5.82c0 4.54-3.69 8.23-8.22 8.23Zm4.51-6.16c-.25-.12-1.47-.73-1.69-.81-.23-.08-.39-.12-.56.12-.17.25-.64.81-.79.98-.15.17-.29.19-.54.06-.25-.12-1.05-.39-2-1.23-.74-.66-1.24-1.47-1.39-1.72-.14-.25-.01-.38.11-.5.11-.11.25-.29.37-.44.12-.15.17-.25.25-.41.08-.17.04-.31-.02-.44-.06-.12-.56-1.35-.76-1.85-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.44.06-.67.31-.23.25-.88.86-.88 2.1s.9 2.44 1.03 2.61c.12.17 1.77 2.71 4.3 3.8.6.26 1.07.41 1.44.52.6.19 1.15.16 1.58.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.08.15-1.18-.06-.11-.23-.17-.48-.29Z" />
            </svg>
          </div>

          <div>
            <a href="https://wa.me/6287814678787" target="_blank">
              087814678787
            </a>
          </div>
        </div>

        <div class="contact-row">
          <div class="contact-icon">✉</div>
          <div>
            <a href="mailto:rumahquranalfalah18@gmail.com">
              rumahquranalfalah18@gmail.com
            </a>
          </div>
        </div>

        <div class="social-title">Sosial Media</div>

        <div class="social-links">
          <a href="https://www.instagram.com/rq.al_falahbjm?igsh=MWMxNzNkNTFkbmJpZw=="
            target="_blank"
            aria-label="Instagram Rumah Tahfidz Al-Falah"
            class="instagram-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
              <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
            </svg>
          </a>

          <a href="https://wa.me/6287814678787"
            target="_blank"
            aria-label="WhatsApp Rumah Tahfidz Al-Falah"
            class="whatsapp-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              viewBox="0 0 24 24" fill="currentColor">
              <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.33 4.95L2 22l5.27-1.38a9.86 9.86 0 0 0 4.77 1.22h.01c5.46 0 9.91-4.45 9.91-9.91C21.96 6.45 17.5 2 12.04 2Zm0 18.15h-.01a8.2 8.2 0 0 1-4.18-1.14l-.3-.18-3.13.82.84-3.05-.2-.31a8.17 8.17 0 0 1-1.25-4.38c0-4.53 3.69-8.22 8.23-8.22 2.2 0 4.26.86 5.81 2.41a8.18 8.18 0 0 1 2.41 5.82c0 4.54-3.69 8.23-8.22 8.23Zm4.51-6.16c-.25-.12-1.47-.73-1.69-.81-.23-.08-.39-.12-.56.12-.17.25-.64.81-.79.98-.15.17-.29.19-.54.06-.25-.12-1.05-.39-2-1.23-.74-.66-1.24-1.47-1.39-1.72-.14-.25-.01-.38.11-.5.11-.11.25-.29.37-.44.12-.15.17-.25.25-.41.08-.17.04-.31-.02-.44-.06-.12-.56-1.35-.76-1.85-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.44.06-.67.31-.23.25-.88.86-.88 2.1s.9 2.44 1.03 2.61c.12.17 1.77 2.71 4.3 3.8.6.26 1.07.41 1.44.52.6.19 1.15.16 1.58.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.08.15-1.18-.06-.11-.23-.17-.48-.29Z" />
            </svg>
          </a>
        </div>
      </div>

      <div class="map-box">
        <iframe
          src="https://www.google.com/maps?q=Jl.%20Jahri%20Saleh%20Komp.%20Pandan%20Arum%20Permai%20Blok%20D%20Jalur%205%20Surgi%20Mufti%20Banjarmasin%20Utara&output=embed"
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>

        <a href="https://maps.app.goo.gl/SzQJUCzztonLuGsNA"
          target="_blank"
          rel="noopener"
          class="map-click-area"
          aria-label="Buka lokasi di Google Maps">
        </a>
      </div>
    </div>
  </section>


  <footer>
    © {{ date('Y') }} Rumah Tahfidz Qur'an Al-Falah. All rights reserved.
  </footer>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const searchInput = document.getElementById('teacherSearch');
      const teacherRows = document.querySelectorAll('.teacher-row');
      const notFoundRow = document.getElementById('teacherNotFound');

      if (!searchInput) return;

      searchInput.addEventListener('input', function () {
        const keyword = this.value.toLowerCase().trim();
        let visibleCount = 0;

        teacherRows.forEach(function (row) {
          const rowText = row.textContent.toLowerCase();
          const isMatch = rowText.includes(keyword);

          row.style.display = isMatch ? '' : 'none';

          if (isMatch) {
            visibleCount++;
          }
        });

        if (notFoundRow) {
          notFoundRow.style.display = keyword !== '' && visibleCount === 0 ? '' : 'none';
        }
      });
    });
  </script>

</body>

</html>