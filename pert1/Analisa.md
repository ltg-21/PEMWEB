# **Laporan dan Analisa Praktikum**  

## **1. Pendahuluan**  
Pada pertemuan ini, kita mempersiapkan sebuah **lingkungan pengembangan** menggunakan **Docker** untuk menjalankan **Nginx sebagai web server statis**.  
Struktur direktori yang dibuat dalam folder proyek mencakup:  
- **Folder `coding`** → Berisi konfigurasi untuk Nginx dan file HTML sebagai halaman web.  
- **File konfigurasi Docker** → Digunakan untuk mengelola layanan dalam container Docker.  

---

## **2. Struktur Direktori**  
**Penjelasan setiap folder dan file:**  
- `nginx/` → Berisi **konfigurasi server Nginx** (`nginx.conf`).  
- `src/` → Berisi **file HTML** yang akan ditampilkan oleh server (`div.html`, `index.html`).  
- `.env` → Berisi **variabel lingkungan** untuk proyek Docker.  
- `docker-compose.yml` → **File konfigurasi** untuk menjalankan layanan menggunakan **Docker Compose**.  

---

## **3. Analisis 5W+1H**  

- **What (Apa)**:  
  Praktikum ini bertujuan untuk memahami **cara mengonfigurasi dan menjalankan Nginx** menggunakan Docker dengan **Docker Compose**.  
- **Why (Mengapa)**:  
  Menggunakan Docker memungkinkan **aplikasi berjalan secara konsisten** di berbagai lingkungan tanpa konflik konfigurasi.  
- **Who (Siapa)**:  
  Praktikum ini dilakukan oleh **mahasiswa/pengembang** yang ingin memahami konsep **containerization** dan **web server management**.  
- **When (Kapan)**:  
  Praktikum dilakukan saat **mempelajari pengelolaan server web statis dan deployment dengan Docker**.  
- **Where (Di mana)**:  
  Praktikum dijalankan di dalam **environment lokal** menggunakan **Visual Studio Code dan Docker Desktop**.  
- **How (Bagaimana)**:  
  1. Membuat **struktur folder proyek**.  
  2. Menulis **file konfigurasi** untuk Nginx dan Docker Compose.  
  3. Menjalankan perintah:  
     ```bash
     docker-compose up -d
     ```  
     untuk menjalankan layanan.  
  4. Mengakses halaman web melalui browser menggunakan **localhost**.  
  5. Menghentikan container dengan:  
     ```bash
     docker-compose down
     ```  

---

## **4. Analisis SWOT**  

### **a. Strengths (Kekuatan)**  
- Menggunakan **Docker** memungkinkan **isolasi lingkungan** yang lebih baik.  
- **Konfigurasi otomatis** dengan **Docker Compose** memudahkan pengelolaan layanan.  
- **Nginx** adalah web server yang cepat dan ringan untuk **menyajikan halaman statis**.  

### **b. Weaknesses (Kelemahan)**  
- Membutuhkan **pemahaman dasar Docker** sebelum dapat menggunakannya dengan lancar.  
- **Konfigurasi Nginx** yang lebih kompleks mungkin sulit bagi pemula.  

### **c. Opportunities (Peluang)**  
- Bisa dikembangkan lebih lanjut dengan menambahkan **PHP atau backend API**.  
- Implementasi **CI/CD pipeline** untuk otomatisasi deployment.  
- Digunakan dalam studi kasus lebih besar seperti **hosting proyek web dalam skala produksi**.  

### **d. Threats (Ancaman)**  
- **Kesalahan konfigurasi** dapat menyebabkan **kesalahan akses server**.  
- Jika **Docker tidak terinstal dengan benar**, maka **praktikum tidak bisa dijalankan**.  
- **Keamanan** perlu diperhatikan jika server ini diterapkan dalam **lingkungan publik**.  

---

## **5. Penjelasan Setiap File**  

### **a. `nginx.conf` (Konfigurasi Nginx)**  
- `listen 80;` → Server mendengarkan permintaan HTTP pada **port 80**.  
- `server_name localhost;` → Menentukan **domain server** sebagai `localhost`.  
- `root /usr/share/nginx/html;` → Direktori **root** untuk menyajikan file **HTML**.  
- `index index.html index.htm;` → File utama yang ditampilkan saat mengakses **root directory**.  
- `location / { try_files $uri $uri/ =404; }` → Jika file yang diminta **tidak ditemukan**, maka akan menampilkan **error 404**.  

### **b. `div.html`**  
- `<div>` → Elemen **blok** untuk mengelompokkan konten.  
- `<p>` → Paragraf teks di dalam elemen `<div>`.  

### **c. `index.html`**  
- `<h1>` → **Heading utama** untuk menampilkan **teks besar**.  

### **d. `.env`**  
- `COMPOSE_PROJECT_NAME=lintang` → **Nama proyek** dalam Docker Compose.  
- `REPOSITORY_NAME=pemweb` → **Nama repositori** yang digunakan.  
- `IMAGE_TAG=latest` → Menentukan **tag versi image** yang akan digunakan.  

### **e. `docker-compose.yml`**  
- `version: '3'` → **Versi** Docker Compose yang digunakan.  
- `services:` → Mendefinisikan **layanan yang akan dijalankan**.  
- `web:` → **Layanan dengan nama `web`** menggunakan **Nginx sebagai image container**.  
- `image: nginx:latest` → **Image yang digunakan** adalah **nginx versi terbaru**.  
- `ports:` → Memetakan **port host 80** ke **container port 80**.  
- `volumes:` →  
  - `./nginx/nginx.conf:/etc/nginx/conf.d/default.conf` → Menggunakan **konfigurasi Nginx** dari proyek lokal.  
  - `./src:/usr/share/nginx/html` → Menyediakan **file HTML** ke dalam container.  

---



# **ANALISA TUGAS**

## Latar Belakang
Website merupakan salah satu media digital yang dapat digunakan untuk menampilkan informasi pribadi, bisnis, atau keperluan lainnya. Dalam era digital ini, memiliki website pribadi dapat membantu seseorang dalam memperkenalkan diri secara lebih luas, terutama untuk keperluan akademik dan profesional. Oleh karena itu, pembuatan website biodata ini bertujuan untuk memberikan informasi dasar mengenai identitas pembuat dengan format yang sederhana namun fungsional.

## Tujuan
- Menampilkan biodata pribadi secara digital dalam bentuk website.
- Melatih keterampilan dasar dalam pembuatan website menggunakan HTML.
- Mempelajari struktur dasar HTML, hyperlink, dan penggunaan elemen multimedia seperti gambar.
- Mengimplementasikan navigasi antar halaman dalam website sederhana.

---

### **Analisis 5W+1H**
1. **What (Apa)?**
   - Website ini adalah sebuah halaman web sederhana yang berisi informasi biodata pemiliknya.
   - Terdiri dari dua halaman utama, yaitu `index.html` sebagai halaman utama dan `profile.html` sebagai halaman profil.
2. **Why (Mengapa)?**
   - Dibuat untuk menampilkan biodata secara digital agar mudah diakses kapan saja dan di mana saja.
   - Untuk mempelajari dasar-dasar pengembangan website dengan HTML.
3. **Who (Siapa)?**
   - **Pengguna**: Orang yang ingin melihat informasi biodata pemilik website.
   - **Pemilik Website**: Orang yang memiliki dan mengelola website ini (Lintang Tiaraningrum).
4. **When (Kapan)?**
   - Website ini dapat diakses kapan saja selama tersedia di internet atau di host secara lokal.
   - Dapat diperbarui sesuai kebutuhan jika ada perubahan data biodata.
5. **Where (Di mana)?**
   - Dapat diakses melalui browser dengan membuka `index.html` sebagai halaman awal.
   - Jika di-host secara online, website dapat diakses melalui alamat domain atau IP server.
6. **How (Bagaimana)?**
   - Website dibuat menggunakan HTML murni tanpa tambahan CSS atau JavaScript.
   - Halaman utama memiliki judul dan deskripsi singkat, serta tautan ke halaman profil.
   - Halaman profil menampilkan biodata pengguna dengan teks dan gambar profil.
   - Pengguna dapat berpindah halaman menggunakan elemen `<a>` untuk navigasi.

---

### **Analisis SWOT**

#### **1. Strengths (Kelebihan)**
   - Sederhana dan mudah digunakan.
   - Memuat dengan cepat karena hanya menggunakan HTML.
   - Navigasi jelas dan intuitif.
   - Mudah diperbarui jika ada perubahan data.
#### **2. Weaknesses (Kekurangan)**
   - Tidak memiliki desain menarik karena belum menggunakan CSS.
   - Tidak interaktif karena belum menggunakan JavaScript.
   - Gambar profil berasal dari sumber eksternal, bisa bermasalah jika link berubah atau terhapus.
#### **3. Opportunities (Peluang)**
   - Bisa dikembangkan lebih lanjut dengan menambahkan desain CSS agar lebih menarik.
   - Dapat dibuat lebih interaktif dengan JavaScript.
   - Bisa diintegrasikan dengan database agar biodata dapat dikelola lebih fleksibel.
#### **4. Threats (Ancaman)**
   - Tanpa hosting, hanya bisa diakses secara lokal.
   - Jika link gambar eksternal mati, tampilan profil akan terganggu.
   - Tidak ada fitur keamanan, sehingga mudah diubah oleh orang lain jika diunggah tanpa proteksi.

---
### Kesimpulan
Website ini bisa menjadi langkah awal yang baik untuk memahami dasar-dasar HTML. Untuk pengembangan lebih lanjut, bisa ditambahkan CSS untuk tampilan yang lebih menarik dan JavaScript untuk meningkatkan interaktivitas.

