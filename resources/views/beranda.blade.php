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

section#beranda.hero {
  margin-top: 88px;
  min-height: calc(100vh - 88px);
  background:
    linear-gradient(120deg, rgba(25, 35, 18, 0.96), rgba(48, 62, 33, 0.92)),
    radial-gradient(circle at 85% 25%, rgba(201, 144, 46, 0.22), transparent 32%),
    linear-gradient(135deg, #192312, #303e21, #4f5f36) !important;
  position: relative;
  overflow: hidden;
  display: flex;
  align-items: center;
  padding: 90px 6%;
}

.hero-content {
  width: min(720px, 100%);
  position: relative;
  z-index: 2;
}

.hero-content h1 {
  color: #fff4d8;
  font-family: 'Amiri', serif;
  font-size: clamp(52px, 6vw, 82px);
  font-weight: 700;
  line-height: 1.05;
  letter-spacing: 1px;
  text-shadow: 0 6px 20px rgba(0, 0, 0, 0.5);
}

.hero-content p {
  max-width: 620px;
  margin-top: 24px;
  color: #f7ecd1;
  font-size: 17px;
  line-height: 1.75;
  text-shadow: 0 3px 14px rgba(0, 0, 0, 0.45);
}

.hero-actions {
  display: flex;
  gap: 14px;
  margin-top: 34px;
}

.hero-actions a {
  min-width: 190px;
  height: 52px;
  border-radius: 999px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-size: 15px;
  font-weight: 800;
  letter-spacing: 0.2px;
  transition: 0.25s ease;
}

.hero-actions a:first-child {
  background: #c9902e;
  color: #ffffff;
  box-shadow: 0 12px 28px rgba(201, 144, 46, 0.35);
}

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

    .site-footer {
      background:
        linear-gradient(135deg, rgba(11, 36, 28, 0.98), rgba(18, 55, 42, 0.98));
      color: #fff;
      border-top: 6px solid var(--secondary);
      margin-top: 0;
    }

    .footer-container {
      max-width: 1280px;
      margin: 0 auto;
      padding: 62px 6%;
      display: grid;
      grid-template-columns: 1.35fr 0.8fr 0.95fr 1.2fr;
      gap: 38px;
      text-align: left;
    }

    .footer-col h3 {
      font-family: 'Amiri', serif;
      font-size: 34px;
      line-height: 1.15;
      color: #fff4d8;
      margin-bottom: 16px;
    }

    .footer-col h4 {
      font-size: 19px;
      font-weight: 800;
      color: #fff4d8;
      margin-bottom: 18px;
    }

    .footer-col p {
      color: #eadfca;
      font-size: 14px;
      line-height: 1.8;
      margin-bottom: 12px;
    }

    .footer-col ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .footer-col li {
      margin-bottom: 12px;
    }

    .footer-col a {
      color: #eadfca;
      font-size: 14px;
      line-height: 1.6;
      transition: 0.25s ease;
    }

    .footer-col a:hover {
      color: var(--secondary);
      padding-left: 6px;
    }

    .footer-contact-item {
      display: flex;
      align-items: flex-start;
      gap: 10px;
      margin-bottom: 12px;
      color: #eadfca;
      font-size: 14px;
      line-height: 1.7;
    }

    .footer-contact-item span {
      flex-shrink: 0;
      color: var(--secondary);
      font-size: 18px;
    }

    .footer-social {
      display: flex;
      gap: 12px;
      margin-top: 16px;
    }

    .footer-social a {
      width: 42px;
      height: 42px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.12);
      display: flex;
      align-items: center;
      justify-content: center;
      padding-left: 0;
      color: #fff;
      font-size: 18px;
    }

    .footer-social a:hover {
      background: var(--secondary);
      color: #fff;
      padding-left: 0;
      transform: translateY(-3px);
    }

    .footer-bottom {
      text-align: center;
      padding: 22px 20px;
      border-top: 1px solid rgba(255, 255, 255, 0.14);
      color: #fff4d8;
      font-size: 14px;
      line-height: 1.6;
    }

    #beranda,
    #tentang,
    #visi-misi,
    #program,
    #fasilitas,
    #pengajar,
    #berita,
    #kontak {
      scroll-margin-top: 110px;
    }

    /*
|--------------------------------------------------------------------------
| SOCIAL ICON
|--------------------------------------------------------------------------
*/

.social-links a.instagram-icon {
  background: linear-gradient(135deg, #833ab4, #fd1d1d, #fcb045);
  color: #fff;
}

.social-links a.instagram-icon:hover {
  transform: translateY(-3px);
  filter: brightness(1.08);
}

.social-links a.instagram-icon svg {
  width: 24px;
  height: 24px;
}

.contact-icon.whatsapp-contact-icon,
.social-links a.whatsapp-icon {
  background: #25D366 !important;
  color: #fff !important;
}

.social-links a.whatsapp-icon:hover {
  background: #1ebe5d !important;
  transform: translateY(-3px);
  filter: none;
}

.social-links a.whatsapp-icon svg,
.contact-icon.whatsapp-contact-icon svg {
  width: 24px;
  height: 24px;
}

/*
|--------------------------------------------------------------------------
| RESPONSIVE
|--------------------------------------------------------------------------
*/

@media (max-width: 1200px) {
  .navbar {
    grid-template-columns: 250px 1fr 250px;
    padding: 0 28px;
  }

  .nav-spacer {
    width: 250px;
  }

  .nav-menu {
    gap: 28px;
    font-size: 16px;
  }

  .card-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }
}

@media (max-width: 992px) {
  .navbar {
    grid-template-columns: 210px 1fr 0;
    padding: 0 22px;
  }

  .nav-spacer {
    display: none;
  }

  .brand-text {
    font-size: 13px;
  }

  .nav-menu {
    justify-content: flex-end;
    gap: 20px;
    font-size: 15px;
  }

  .about-grid,
  .visi-grid,
  .contact-box {
    grid-template-columns: 1fr;
  }

  .program-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }
}

@media (max-width: 768px) {
  body {
    overflow-x: hidden;
  }

  .navbar {
    position: sticky;
    top: 0;
    height: auto;
    display: block;
    padding: 10px 16px 12px;
  }

  .brand {
    justify-content: center;
    gap: 10px;
    margin-bottom: 8px;
  }

  .logo-box {
    width: 54px;
    height: 54px;
  }

  .brand-text {
    font-size: 12px;
    line-height: 1.2;
  }

  .nav-menu {
    width: 100%;
    justify-content: flex-start;
    flex-wrap: nowrap;
    gap: 22px;
    overflow-x: auto;
    overflow-y: hidden;
    white-space: nowrap;
    padding: 4px 2px 6px;
    font-size: 15px;
    scrollbar-width: none;
  }

  .nav-menu::-webkit-scrollbar {
    display: none;
  }

  .nav-menu > a,
  .nav-item > a {
    padding: 8px 0;
    white-space: nowrap;
  }

  .nav-menu > a::after,
  .nav-item > a::after {
    bottom: 0;
  }

  .dropdown {
    top: 34px;
    width: 190px;
  }

  section#beranda.hero {
    margin-top: 0;
    min-height: calc(100svh - 118px);
    padding: 56px 22px 70px;
    align-items: center;
  }

  .hero-content {
    width: 100%;
  }

  .hero-content h1 {
    font-size: clamp(38px, 11vw, 54px);
    line-height: 1.12;
  }

  .hero-content p {
    max-width: 100%;
    margin-top: 20px;
    font-size: 14px;
    line-height: 1.75;
  }

  .hero-actions {
    width: 100%;
    display: flex;
    flex-direction: column;
    gap: 14px;
    margin-top: 28px;
  }

  .hero-actions a {
    width: 100%;
    min-width: 0;
    height: 52px;
    font-size: 15px;
  }

  section {
    padding: 80px 6%;
  }

  .about-section {
    padding-top: 80px;
  }

  .section-header {
    padding: 34px 22px;
    margin-bottom: 45px;
  }

  .section-header h2 {
    font-size: 38px;
  }

  .section-header p {
    font-size: 14px;
  }

  .about-grid,
  .visi-grid,
  .program-grid,
  .card-grid,
  .contact-box {
    grid-template-columns: 1fr;
  }

  .image-placeholder {
    height: 320px;
  }

  .visi-card {
    padding: 34px 24px;
  }

  .visi-card h3 {
    font-size: 38px;
    margin-bottom: 22px;
  }

  .visi-card .visi-text {
    font-size: 20px;
  }

  .visi-card .misi-text {
    font-size: 15px;
  }

  #program {
    scroll-margin-top: 120px;
    padding-top: 90px;
  }

  .program-grid {
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

  .media-card .image-placeholder {
    height: 210px;
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
    gap: 34px;
  }

  .contact-info h3 {
    font-size: 38px;
  }

  .map-box,
  .map-box iframe {
    min-height: 320px;
  }

  .footer-container {
    grid-template-columns: repeat(2, minmax(0, 1fr));
    padding: 48px 6%;
    gap: 30px;
  }

  .footer-col:first-child,
  .footer-col:last-child {
    grid-column: 1 / -1;
  }
}

@media (max-width: 480px) {
  .navbar {
    padding: 8px 14px 10px;
  }

  .brand {
    margin-bottom: 6px;
  }

  .logo-box {
    width: 48px;
    height: 48px;
  }

  .brand-text {
    font-size: 11px;
  }

  .nav-menu {
    gap: 20px;
    font-size: 14px;
  }

  section#beranda.hero {
    min-height: calc(100svh - 104px);
    padding: 42px 18px 58px;
  }

  .hero-content h1 {
    font-size: clamp(34px, 12vw, 42px);
  }

  .hero-content p {
    font-size: 13.5px;
    line-height: 1.7;
  }

  .hero-actions a {
    height: 50px;
    font-size: 14px;
  }

  section {
    padding: 70px 5%;
  }

  .section-header {
    padding: 30px 20px;
  }

  .section-header h2 {
    font-size: 34px;
  }

  .about-text h2 {
    font-size: 38px;
  }

  .image-placeholder {
    height: 290px;
  }

  .program-card {
    padding: 24px 20px;
  }

  .program-top {
    flex-direction: column;
  }

  .program-badges,
  .program-time {
    width: 100%;
  }

  .program-link {
    display: flex;
  }

  .contact-row {
    font-size: 14px;
  }

  .map-box,
  .map-box iframe {
    min-height: 280px;
  }

  .footer-container {
    grid-template-columns: 1fr;
    padding: 42px 6%;
    gap: 26px;
  }

  .footer-col:first-child,
  .footer-col:last-child {
    grid-column: auto;
  }

  .footer-col h3 {
    font-size: 28px;
  }

  .footer-col h4 {
    font-size: 17px;
    margin-bottom: 12px;
  }

  .footer-bottom {
    font-size: 13px;
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
        <a href="#prestasi">Prestasi</a>
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
  <div class="hero-content">
    <h1>Rumah Tahfidz Qur’an Al-Falah</h1>

    <p>
      Membentuk generasi Qur’ani yang berakhlak mulia, cinta Al-Qur’an,
      dan semangat dalam menuntut ilmu.
    </p>

    <div class="hero-actions">
      <a href="https://linktr.ee/rumahtahfidzquranal_falah" target="_blank" rel="noopener noreferrer">
        Informasi
      </a>

      <a href="#program">Jelajahi Program</a>
    </div>
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

      <a href="{{ route('program.show', $item->id) }}" class="program-card program-link" style="padding: 0; display: flex; flex-direction: column; height: 100%; overflow: hidden;">
        <div class="program-image-wrapper" style="position: relative; height: 200px; border-bottom: 1px solid var(--border); overflow: hidden; background: #fffaf0; width: 100%;">
          @if(!empty($item->gambar))
            <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_program }}" style="width: 100%; height: 100%; object-fit: cover;">
          @else
            <div style="width: 100%; height: 100%; background: #ffedd5; color: #7c2d12; font-size: 48px; display: flex; align-items: center; justify-content: center;">
              📖
            </div>
          @endif
          
          <div class="program-badges" style="position: absolute; top: 15px; right: 15px; display: flex; gap: 8px; pointer-events: none;">
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

        <div class="program-body" style="padding: 24px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <h3 style="font-size: 20px; font-weight: 700; color: var(--primary); margin-bottom: 8px; margin-top: 0; line-height: 1.4;">
              {{ $item->nama_program ?? 'Program Pembelajaran' }}
            </h3>
            <p style="font-size: 14px; line-height: 1.6; color: var(--text-muted); margin-bottom: 16px;">
              {{ \Illuminate\Support\Str::limit($item->deskripsi ?? 'Deskripsi program belum tersedia.', 120) }}
            </p>
          </div>
          <div style="font-size: 13px; font-weight: 600; color: var(--secondary-dark); display: flex; align-items: center; gap: 6px; border-top: 1px solid rgba(234, 217, 190, 0.5); padding-top: 12px; margin-top: auto;">
            👤 {{ $item->jumlah_santri ?? 0 }} Santri Terdaftar
          </div>
        </div>
      </a>

    @empty

      <div class="program-card" style="padding: 0; display: flex; flex-direction: column;">
        <div class="program-image-wrapper" style="position: relative; height: 200px; border-bottom: 1px solid var(--border); overflow: hidden; background: #fffaf0; width: 100%; display: flex; align-items: center; justify-content: center;">
          <div style="font-size: 48px; color: #7c2d12;">📖</div>
        </div>
        <div class="program-body" style="padding: 24px;">
          <h3 style="font-size: 20px; font-weight: 700; color: var(--primary); margin-bottom: 8px; margin-top: 0;">Belum ada program</h3>
          <p style="font-size: 14px; line-height: 1.6; color: var(--text-muted); margin-bottom: 0;">
            Data program pembelajaran akan tampil setelah ditambahkan oleh admin.
          </p>
        </div>
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


  {{-- PRESTASI --}}
  <section id="prestasi">

    <div class="section-header">
      <h2>Prestasi</h2>
      <p>
        Berbagai pencapaian dan penghargaan yang telah diraih oleh
        Rumah Tahfidz Qur’an Al-Falah.
      </p>
    </div>


    <div class="card-grid">

      @forelse($prestasi ?? [] as $item)

      <div class="media-card">

        <div class="image-placeholder">

          @php
              $media = $item->media->first();
          @endphp

          @if($media)

              @if($media->tipe == 'foto')

              <img
                src="{{ asset('storage/' . $media->file) }}"
                alt="{{ $item->judul ?? 'Prestasi' }}">

              @elseif($media->tipe == 'video')

              <video
                controls
                style="width:100%;height:100%;object-fit:cover;">
                <source src="{{ asset('storage/' . $media->file) }}">
              </video>

              @endif

          @else

              <div style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;color:#6f665c;">
                  Belum ada dokumentasi
              </div>

          @endif

        </div>


        <div class="media-card-body">

          <h3>
            {{ $item->judul ?? 'Prestasi' }}
          </h3>


          <p>
            {{ \Illuminate\Support\Str::limit($item->deskripsi ?? '', 120) }}
          </p>

        </div>

      </div>

      @empty

      <div class="media-card">

        <div class="image-placeholder"></div>

        <div class="media-card-body">

          <h3>
            Belum ada data prestasi
          </h3>

          <p>
            Data prestasi akan tampil setelah ditambahkan oleh admin.
          </p>

        </div>

      </div>

      @endforelse

    </div>

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


  <footer class="site-footer">
    <div class="footer-container">

      <div class="footer-col">
        <h3>Rumah Tahfidz Qur'an Al-Falah</h3>
        <p>
          Media informasi digital Rumah Tahfidz Qur'an Al-Falah sebagai sarana
          informasi program pembelajaran, kegiatan, fasilitas, data pengajar,
          dan kontak lembaga.
        </p>

        <div class="footer-social">
          <a href="https://www.instagram.com/rq.al_falahbjm?igsh=MWMxNzNkNTFkbmJpZw=="
            target="_blank"
            rel="noopener noreferrer"
            aria-label="Instagram Rumah Tahfidz Al-Falah">
            📷
          </a>

          <a href="https://wa.me/6287814678787"
            target="_blank"
            rel="noopener noreferrer"
            aria-label="WhatsApp Rumah Tahfidz Al-Falah">
            ☎
          </a>
        </div>
      </div>

      <div class="footer-col">
        <h4>Menu Utama</h4>
        <ul>
          <li><a href="#beranda">Beranda</a></li>
          <li><a href="#tentang">Profil</a></li>
          <li><a href="#program">Program</a></li>
          <li><a href="#berita">Berita</a></li>
          <li><a href="#kontak">Kontak</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Informasi</h4>
        <ul>
          <li><a href="#visi-misi">Visi & Misi</a></li>
          <li><a href="#fasilitas">Fasilitas</a></li>
          <li><a href="#pengajar">Data Pengajar</a></li>
          <li>
            <a href="https://linktr.ee/rumahtahfidzquranal_falah"
              target="_blank"
              rel="noopener noreferrer">
              Pendaftaran / Informasi
            </a>
          </li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Kontak Kami</h4>

        <div class="footer-contact-item">
          <span>📍</span>
          <p>
            Jl. Jahri Saleh Komp. Pandan Arum Permai, Blok D Jalur 5,
            Surgi Mufti, Banjarmasin Utara.
          </p>
        </div>

        <div class="footer-contact-item">
          <span>📞</span>
          <p>
            <a href="https://wa.me/6287814678787" target="_blank" rel="noopener noreferrer">
              087814678787
            </a>
          </p>
        </div>

        <div class="footer-contact-item">
          <span>✉</span>
          <p>
            <a href="mailto:rumahquranalfalah18@gmail.com">
              rumahquranalfalah18@gmail.com
            </a>
          </p>
        </div>
      </div>

    </div>

    <div class="footer-bottom">
      © {{ date('Y') }} Rumah Tahfidz Qur'an Al-Falah. All rights reserved.
    </div>
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