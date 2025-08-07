# 🎓 Studi Kasus dan Analisis: Aplikasi Manajemen Beasiswa

## 📌 Deskripsi Singkat
Aplikasi ini merupakan sistem manajemen beasiswa berbasis Laravel 12 dan Filament. Sistem dirancang untuk mencatat data mahasiswa, jenis beasiswa, dan pengajuan beasiswa oleh mahasiswa. Dibuat sebagai proyek studi kasus untuk memahami implementasi struktur data (array, stack, queue, tree, graph), relasi database, serta konsep MVC.

---

## 🧠 Studi Kasus

### 🎯 Tujuan
Membuat aplikasi yang:
- Mencatat mahasiswa yang mendaftar.
- Menyimpan daftar beasiswa yang tersedia.
- Memproses pengajuan beasiswa oleh mahasiswa.
- Menampilkan statistik pendaftaran.

---

### 📂 Struktur Tabel

| Tabel         | Kolom                                                                 |
|---------------|-----------------------------------------------------------------------|
| `students`    | id, name, email, phone, address, created_at, updated_at              |
| `scholarships`| id, name, amount, description, created_at, updated_at                |
| `applications`| id, student_id, scholarship_id, status, applied_at, created_at, updated_at |

---

### 🔁 Relasi
- `Student` hasMany `Application`
- `Scholarship` hasMany `Application`
- `Application` belongsTo `Student`
- `Application` belongsTo `Scholarship`

---

### 🧱 Implementasi Konsep Struktur Data

| Struktur Data | Implementasi di Proyek                                                                 |
|----------------|----------------------------------------------------------------------------------------|
| **Array**      | Data dari form dan result query (`$students`, `$scholarships`)                        |
| **Stack**      | Riwayat status pengajuan dapat diimplementasikan dengan stack untuk undo/redo         |
| **Queue**      | Antrian pengajuan beasiswa (jika di-extend ke pengurutan batch)                       |
| **Tree**       | Hirarki beasiswa atau kategori beasiswa bisa dikembangkan sebagai struktur pohon      |
| **Graph**      | Relasi antar beasiswa dan mahasiswa bisa divisualisasikan dalam bentuk graf           |

---

### 🔍 Fitur Search
- Pencarian nama mahasiswa
- Filter beasiswa berdasarkan nominal
- Pencarian status pengajuan

---

## ⚙️ Teknologi & Tools
- Laravel 12
- Filament Admin Panel
- Eloquent ORM
- PHP 8.3
- MySQL / SQLite
- MVC Pattern

---

## 🧩 Contoh Use Case

### 1. Mahasiswa Baru
Robi mendaftar sebagai mahasiswa baru dengan data:
- Nama: Robi Cahyo
- Email: robi@example.com

### 2. Input Beasiswa
Admin menambahkan beasiswa:
- Nama: Beasiswa Unggulan
- Nominal: 5.000.000
- Deskripsi: Diberikan untuk mahasiswa berprestasi.

### 3. Robi Melamar Beasiswa
Robi mengajukan beasiswa Unggulan dan statusnya diset `Pending`.

### 4. Admin Melihat Statistik
Admin melihat jumlah pengajuan beasiswa melalui chart di dashboard.

---

## 💡 Analisis Singkat

| Aspek             | Penjelasan                                                                 |
|------------------|----------------------------------------------------------------------------|
| **MVC**           | Model: Student, Scholarship, Application; View: Filament UI; Controller: Filament Resource |
| **Scalable**      | Mudah dikembangkan dengan approval system, kategori beasiswa, notifikasi   |
|
