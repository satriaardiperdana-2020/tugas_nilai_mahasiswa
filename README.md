# Petunjuk Tugas Nilai Mahasiswa

1. Checkout git code php dan masukan kedalam folder htdocs, misal masukkan kedalam folder tugas htdocs.
2. Sebelum menginputkan nilai mahasiswa harus input dulu data mahasiswanya dan data matakuliahnya. Gunanya agar di select option pada penginputan nilai muncul datanya.
3. Buka data mahasiswa di http://localhost/tugas/nilaimahasiswa/retreive_nilai_mhs.php . localhost bisa diganti IP atau domain jika di deploy di webhosting. Kemudian klik link Tambah pada kiri atas untuk menambahkan data mahasiswa.
4. Buka data matakuliah di http://localhost/tugas/nilaimahasiswa/retreive_matakuliah.php . Kemudian klik link Tambah Matakuliah untuk menambahkan data matakuliah.
5. Setelah data mahasiswa dan matakuliah diinput, data nilai baru bisa diinput.
6. Untuk mengisi nilai mahasiswa buka link http://localhost/tugas/nilaimahasiswa/retreive_nilai_mhs.php , kemudian klik link Input Nilai Mahasiswa. Untuk mencetak nilai, pilih terlebih dahulu matakuliah pada select option kemudian klik button cetak.
7. Video test input bisa dilihat atau download pada link: https://drive.google.com/file/d/1txWuY754JqrKy0lxh0STWHEmrCEvnzpk/view?usp=sharing
8. Script backup mysql (dump) bisa diunduh pada link: https://github.com/satriaardiperdana-2020/tugas_nilai_mahasiswa/blob/main/dump_tugas_nilai_mhs_satria.sql

Program diatas masih perlu yang banyak ditambahkan seperti validasi disisi backend. validasi hanya ada di level html script contohnya required pada select option atau inputan.
