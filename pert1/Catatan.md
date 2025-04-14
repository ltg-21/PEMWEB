PERTEMUAN 1 (24 MARET)

## Konsep Dasar Website  
- Website pasti memiliki alamat (domain), seperti YouTube, Facebook, dan lain-lain.  
- Jika ingin menggunakan template, harus ada sitasi dan link sumbernya.  
- **HTML** adalah bahasa general (dasar) yang digunakan untuk membuat website.  

## Penggunaan Docker dan Nginx  
- **Ports** dalam file `docker-compose.yml` bisa berubah-ubah. Bagian depan dan belakang harus sama:  
  - **Port depan** untuk OS.  
  - **Port belakang** untuk Docker.  
  - Begitu juga dengan bagian `volumes`.  
- **Location** dalam file `nginx.conf` menentukan di mana file tersebut diletakkan atau diarahkan.  
- **NPM (Nginx Proxy Manager)** digunakan untuk mengelola proxy di Nginx.  

## Struktur Folder dalam Praktikum  
- Dalam praktikum ini, kita membuat folder di **VS Code** yang berisi:  
  - Folder `coding`  
  - File `analisa`  
  - File `catatan`  
- Di dalam folder `coding`:  
  - Ada folder `nginx` yang menyimpan file konfigurasi `nginx.conf`.  
  - Folder `src` berisi file `div.html` dan `index.html` sebagai halaman utama website.  
- **File `.env`** digunakan untuk menyimpan konfigurasi proyek seperti **nama proyek** dan **tag image**.  
- **File `docker-compose.yml`** digunakan untuk mengatur layanan (services) Docker, termasuk **Nginx sebagai web server**.  
- **File `nginx.conf`** mengatur server agar berjalan di **port 80** dan mengarahkan root ke `/usr/share/nginx/html`.  

## Struktur dan Fungsi File HTML  
- **File `div.html`** berisi elemen `<div>` dengan teks di dalamnya dan satu paragraf.  
- **File `index.html`** berisi elemen `<h1>` dengan teks sederhana.  

## Proses Menjalankan Nginx dengan Docker  
- Setelah semua file siap, Docker digunakan untuk menjalankan Nginx dan menampilkan halaman HTML yang telah dibuat menggunakan compose down dan compose up-d. 


## Tag dalam HTML  
HTML memiliki berbagai **tag** untuk berbagai kebutuhan, antara lain:  
### 1. **Tag Struktur Dasar**  
- `<html>` → Tag utama yang menampung seluruh elemen dalam halaman web.  
- `<head>` → Berisi informasi metadata, seperti title dan link stylesheet.  
- `<body>` → Berisi semua konten utama yang akan ditampilkan di halaman web.  

### 2. **Tag Heading dan Paragraf**  
- `<h1>` sampai `<h6>` → Digunakan untuk membuat heading dari besar ke kecil.  
- `<p>` → Digunakan untuk membuat paragraf.  

### 3. **Tag Format Teks**  
- `<b>` → Membuat teks menjadi **bold (tebal)**.  
- `<i>` → Membuat teks menjadi *italic (miring)*.  
- `<u>` → Membuat teks menjadi ***underlined (garis bawah)***.  
- `<strong>` → Menandai teks penting dengan **bold**.  
- `<em>` → Menandai teks penting dengan *italic*.  
- `<mark>` → Menyorot teks seperti stabilo.  
- `<small>` → Membuat teks menjadi lebih kecil.  
- `<sub>` → Membuat teks menjadi subscript (H₂O).  
- `<sup>` → Membuat teks menjadi superscript (x²).  

### 4. **Tag Hyperlink dan Navigasi**  
- `<a href="URL">` → Membuat tautan (link) ke halaman lain.  
- `<nav>` → Digunakan untuk membuat menu navigasi.  

### 5. **Tag Gambar dan Multimedia**  
- `<img src="gambar.jpg" alt="Deskripsi">` → Menampilkan gambar.  
- `<audio controls>` → Menampilkan pemutar audio.  
- `<video controls>` → Menampilkan pemutar video.  

### 6. **Tag Daftar (List)**  
- `<ul>` → Membuat daftar tidak berurut (bullet points).  
- `<ol>` → Membuat daftar berurut (angka/nomor).  
- `<li>` → Item dalam daftar (`ul` atau `ol`).  
- `<dl>` → Daftar deskripsi.  
- `<dt>` → Item dalam daftar deskripsi.  
- `<dd>` → Penjelasan dari item dalam daftar deskripsi.  

### 7. **Tag Tabel**  
- `<table>` → Membuat tabel.  
- `<tr>` → Membuat baris dalam tabel.  
- `<th>` → Membuat sel tabel sebagai header.  
- `<td>` → Membuat sel tabel biasa.  
- `<thead>`, `<tbody>`, `<tfoot>` → Membagi tabel menjadi bagian header, isi, dan footer.  

### 8. **Tag Formulir (Form)**  
- `<form>` → Membuat form input data.  
- `<input type="text">` → Input teks.  
- `<input type="email">` → Input email.  
- `<input type="password">` → Input password.  
- `<textarea>` → Kotak teks untuk input yang lebih panjang.  
- `<button>` → Tombol klik.  
- `<select>` → Dropdown pilihan.  
- `<option>` → Opsi dalam dropdown.  

### 9. **Tag Layout dan Struktur**  
- `<div>` → Elemen kontainer untuk mengelompokkan elemen lain.  
- `<span>` → Mirip dengan `<div>`, tetapi digunakan dalam teks.  
- `<section>` → Menandai bagian dalam halaman.  
- `<article>` → Menandai artikel atau konten independen.  
- `<header>` → Header dari halaman atau bagian.  
- `<footer>` → Footer dari halaman atau bagian.  
- `<aside>` → Bagian samping (sidebar).  
- `<main>` → Bagian utama halaman.  

### 10. **Tag Lainnya**  
- `<hr>` → Membuat garis pemisah horizontal.  
- `<br>` → Membuat baris baru.  
- `<!-- Komentar -->` → Menambahkan komentar dalam kode HTML. 

## Tentang Project (Harus Sesuai Analisa)  
- **Membuat Dashboard**  
- **Membuat Company Profile**  
