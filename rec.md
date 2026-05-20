php:8.2
Laravel:13
mysql:8.0

<!-- -->

Schema::create('pegawai', function (Blueprint $table) {
$table->string('nim')->primary();
$table->foreignId('user_id')->constrained()->onDelete('cascade');
$table->string('nama_lengkap');
$table->string('jabatan');
$table->string('golongan');
$table->string('unit_kerja');
$table->timestamps();
});
