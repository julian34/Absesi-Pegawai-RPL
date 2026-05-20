# Perintah Docker yang Sering Dipakai

Repository: `Absesi-Pegawai-RPL`  
Branch: `dev`

---

## 1. Masuk ke Folder Project

```bash
cd Absesi-Pegawai-RPL
```

Jika belum berada di branch `dev`:

```bash
git checkout dev
```

Update kode terbaru:

```bash
git pull origin dev
```

---

## 2. Menjalankan Docker

Jalankan semua container:

```bash
docker compose up -d
```

Jalankan sekaligus build ulang:

```bash
docker compose up -d --build
```

---

## 3. Mengecek Container

Cek container dari project:

```bash
docker compose ps
```

Cek semua container Docker:

```bash
docker ps
```

Cek semua container termasuk yang berhenti:

```bash
docker ps -a
```

---

## 4. Membuka Aplikasi

Frontend:

```text
http://localhost:5173
```

Backend:

```text
http://localhost:9000
```

phpMyAdmin:

```text
http://localhost:8082
```

---

## 5. Melihat Log

Log semua service:

```bash
docker compose logs -f
```

Log frontend:

```bash
docker compose logs -f web
```

Log backend:

```bash
docker compose logs -f backend
```

Log database:

```bash
docker compose logs -f db
```

---

## 6. Masuk ke Container

Masuk ke frontend:

```bash
docker exec -it finpoint-web sh
```

Masuk ke backend:

```bash
docker exec -it finpoint-backend sh
```

Masuk ke database MySQL:

```bash
docker exec -it finpoint-db mysql -u finpoint_user -p
```

Password database:

```text
finpoint_pass
```

---

## 7. Perintah Laravel di Container Backend

Masuk dulu ke backend:

```bash
docker exec -it finpoint-backend sh
```

Install dependency:

```bash
composer install
```

Generate key Laravel:

```bash
php artisan key:generate
```

Jalankan migration:

```bash
php artisan migrate
```

Reset migration:

```bash
php artisan migrate:fresh
```

Reset migration dengan seeder:

```bash
php artisan migrate:fresh --seed
```

Clear cache Laravel:

```bash
php artisan optimize:clear
```

---

## 8. Perintah Frontend di Container Web

Masuk dulu ke frontend:

```bash
docker exec -it finpoint-web sh
```

Install dependency:

```bash
npm install
```

Jalankan development server:

```bash
npm run dev
```

Build frontend:

```bash
npm run build
```

---

## 9. Restart Container

Restart semua service:

```bash
docker compose restart
```

Restart frontend:

```bash
docker compose restart web
```

Restart backend:

```bash
docker compose restart backend
```

Restart database:

```bash
docker compose restart db
```

---

## 10. Menghentikan Docker

Hentikan semua container:

```bash
docker compose down
```

Hentikan dan hapus volume database:

```bash
docker compose down -v
```

---

## 11. Build Ulang Service Tertentu

Build frontend:

```bash
docker compose build web
```

Build backend:

```bash
docker compose build backend
```

Build semua service:

```bash
docker compose build
```

---

## 12. Membersihkan Docker

Hapus container yang tidak dipakai:

```bash
docker container prune
```

Hapus image yang tidak dipakai:

```bash
docker image prune
```

Hapus volume yang tidak dipakai:

```bash
docker volume prune
```

Hapus cache Docker:

```bash
docker system prune
```

---

## 13. Perintah Harian yang Paling Sering Dipakai

```bash
cd Absesi-Pegawai-RPL
git checkout dev
git pull origin dev
docker compose up -d --build
docker compose ps
```

Buka aplikasi:

```text
http://localhost:5173
```

Jika ingin menghentikan:

```bash
docker compose down
```
