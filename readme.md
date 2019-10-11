# Cara menggunakan "modern" Suki Child theme
Tujuan dari pembuatan child theme ini adalah untuk memudahkan para developer dalam mengembangkan lebih lanjut child theme ini untuk kebutuhan yang disesuaikan.
Juga sebagai bahan referensi rekan-rekan developer dalam membuat theme maupun child theme.

### Yang dibutuhkan
- Node.Js dan Yarnpkg
- Git (optional)
- Gulp-Cli
- Windows / Linux / MacOs

## Instalasi
1. Donwload Repository ini atau bisa juga dengan melakukan clone dengan perintah ini `git clone https://github.com/madebyaris/suki-child.git suki-child` di terminal atau command line teman-teman.  
2. Setelah semua terdownload, lakukan perintah `npm install` atau bila teman-teman menggunakan yarn (lebih saya rekomendasikan) lakukan perintah ini `yarn install`. Tunggu sampai semua package berhasil di download.
3. Langka terakhir adalah melakukan perintah `gulp styles` & `gulp scripts`

 ## Baris Perintah
 - `gulp styles` : melakukan convert sass ke css.
 - `gulp scripts` : minify kodingan javascript.
 - `gulp watch` : melakukan perintah diatas ketika ada perubahan file pada file sass maupun js. 

> Child theme dan konfigurasinya masih jauh dikata sempurna, saya akan selalu mencoba untuk maintenance  dan melakukan improvement pada child theme ini.

#### Todo list :
- Membuat tutorial agar user dapat menggunakan konfigurasi ini pada theme mereka sendiri.
- Optimasi task untuk javascript.
- Menambahan WordPress Standard Coding.
- Membuat asset untuk gambar.
- Membuat ready-to-deploy task yang bisa langsung diupload dengan format zip.