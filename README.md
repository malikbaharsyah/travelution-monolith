# Tugas Besar Mata Kuliah Pengembangan Aplikasi Berbasis Web
> Tugas Besar Milestone 1: Monolithic PHP & Vanilla Web Application

## Anggota Kelompok
<table>
    <tr>
        <td colspan="3", align = "center"><center>Kelompok C</center></td>
    </tr>
    <tr>
        <td>No.</td>
        <td>Nama</td>
        <td>NIM</td>
    </tr>
    <tr>
        <td>1.</td>
        <td>Bintang Hijriawan</td>
        <td>13521003</td>
    </tr>
    <tr>
        <td>2.</td>
        <td>Jason Rivalino</td>
        <td>13521008</td>
    </tr>
    <tr>
        <td>3.</td>
        <td>M. Malik I. Baharsyah</td>
        <td>13521029</td>
    </tr>
</table>

## Table of Contents
* [Deskripsi Aplikasi Web](#deskripsi-aplikasi-web)
* [Requirements](#requirements)
* [Cara Instalasi dan Menjalankan Server](#cara-instalasi-dan-menjalankan-server)
* [Screenshoot Aplikasi](#screenshoot-aplikasi)
* [Pembagian Tugas](#pembagian-tugas)
* [Acknowledgements](#acknowledgements)

# Deskripsi aplikasi Web
Aplikasi ini adalah aplikasi web sederhana yang dapat digunakan untuk melakukan perencanaan untuk perjalanan (travelling) untuk berbagai tempat yang ada di Indonesia. Dalam web ini pengguna bisa menyusun rencana perjalanan dari berbagai tempat yang ada beserta menentukan waktunya. Aplikasi web. Aplikasi web ini dibuat dalam PHP, HTML, CSS, dan JS tanpa framework. Database dari web ini terdapat di awan dengan menggunakan MySQL. Aplikasi ini dibuat untuk memenuhi tugas besar mata kuliah Pemrograman Aplikasi Berbasis Web.

# Requirements
1. Visual Studio Code
2. Javascript and PHP ([Instalasi Javascript](https://nodejs.org/en/download) dan [Instalasi PHP](https://www.php.net/downloads.php))
3. Docker Desktop ([Instalasi Docker](https://www.docker.com/products/docker-desktop/))

# Cara Instalasi dan Menjalankan Server
1. Clone repository ini (pastikan sudah menginstall kebutuhan diatas)
2. Melakukan build up Docker dengan `docker build -t tubes-1:latest .`
3. Menjalankan Docker dengan `docker compose up`

# Screenshoot Aplikasi
Landing Page & Dashboard

![ss](screenshoot/Screenshot 2023-10-07 215248.png)
![ss](screenshoot/Screenshot 2023-10-07 215313.png)
![ss](screenshoot/Screenshot 2023-10-07 215329.png)

Sign Up & Login

![ss](screenshoot/Screenshot 2023-10-07 215718.png)
![ss](screenshoot/Screenshot 2023-10-07 215824.png)

Profile Menu & Change Information User

![ss](screenshoot/Screenshot 2023-10-07 221145.png)
![ss](screenshoot/Screenshot 2023-10-07 221152.png)

List Destinasi & Akomodasi (With Pagination)
![ss](screenshoot/Screenshot 2023-10-09 135454.png)
![ss](screenshoot/Screenshot 2023-10-09 140459.png)


Pagination

![ss](screenshoot/Screenshot 2023-10-09 140009.png)

CRUD Destinasi & Akomodasi

![ss](screenshoot/Screenshot 2023-10-07 221255.png)
![ss](screenshoot/Screenshot 2023-10-07 221320.png)


# Pembagian Tugas
<b>Frontend / Client-side</b>
| Nama | Pembagian Tugas |
| :---         |     :---     |
| Bintang Hijriawan      | Sign Up & Login Menu |
| Jason Rivalino         | Landing Page, Dashboard, Travel Plan, CRUD Destinasi & Akomodasi, Reservasi Destinasi & Akomodasi Menu |
| M. Malik I. Baharsyah  | Profile & Change User Information Menu |

<b>Backend / Server-side</b>
| Nama | Pembagian Tugas |
| :---         |     :---     |
| Bintang Hijriawan      | Sign Up & Login, SearchSortFilter Menu, Pagination Menu  |
| Jason Rivalino         | Database Aplikasi |
| M. Malik I. Baharsyah  | Profile & Change User Information Menu, CRUD Destinasi & Akomodasi  |

## Acknowledgements
- Tuhan Yang Maha Esa
- Dosen Mata Kuliah Pengembangan Aplikasi Berbasis Web IF3110
- Kakak-Kakak Asisten Mata Kuliah Pengembangan Aplikasi Berbasis Web IF3110
