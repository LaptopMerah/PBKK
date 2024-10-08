<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


<div align="center"><b>
Muhammad Iqbal Ramadhan <br>
5025221274<br>
Pemrograman Berbasis Kerangka Kerja (D)<br>
</b></div>

## Pembelajaran Section 2
* Instalasi & Konfigurasi<br>
    Untuk menlankan Laravel 11 membutuhkan `PHP 8.2+`, `Nginx`, dan `Database`. Semua itu bisa didapatkan dalam sebuah software yaitu Laragon/XAMPP/Laravel Herd. Tidak lupa dengan `Composer` dan `Node.js 20.+` yang cukup penting.
* Struktur Folder<br>
    `App:` Code utama dari project laravel, semua kelas yang digunakan ada disini (Controller, Models, dll).<br>`Bootstrap:` Berisi file `app.php` yang menginisialisasi framework dan cache untuk optimasi performa.<br>`Config:` Berisi file konfigurasi project laravel kita yang bisa ditimpa yang variablenya ada di `.env`.<br>`Database:` Berisi schema migrasi database, model factories, dan seeds.<br>`Public:` Berisi file-file yang bisa diakses oleh public.<br>`Resources:` Berisi view/tampilan  serta juga CSS & JS mentah yang tidak bisa dilihat user.<br>`Routes:` Berisi definisi semua route pada project kita. Yang akan menerima request dari user pertama kali.<br>`Storage:` Berisi log, template Blade yang telah dikompilasi, session, cache, dan file lain dari framework.<br>`Tests:` Berisi file-file testing pada project kita.<br>`Vendor:` Berisi package-package yang terinstal di Project kita dari composer atau lainnya.
* Blade<br>
    Belajar untuk mengelola struktur dari tampilan halaman kita, serta pernggunaan tailwind. Disini saya menggunakan library UI dari `Flowbite`
* Blade Component<br>
    Merapihkan struktur file dengan menggunakan Blade Components yang dimana setiap potongan code yang akan dipakai berulang-ulang akan dijadikan components dengan sistem Layout.

### Hasil pembelajaran section 2
<table>
  <tr>
    <td align="center" width="50%" colspan="2">
      <img src="https://github.com/user-attachments/assets/b5be6320-342f-4436-9460-cb18f0ea441c" alt="Stuktur Folder" style="width: 30%;">
      <p>Stuktur Folder</p>
    </td>
  </tr>
  <tr>
    <td align="center" width="50%">
      <img src="https://github.com/user-attachments/assets/1f9ce3fc-eb11-4b4e-b628-01754fd0a93c" alt="Route: '/'" style="width: 100%;">
      <p>Route: '/'</p>
    </td>
    <td align="center" width="50%">
      <img src="https://github.com/user-attachments/assets/aeed51b5-a6d0-4cfc-9659-e5e2a6d26813" alt="Route: '/about'" style="width: 100%;">
      <p>Route: '/about'</p>
    </td>
  </tr>
  <tr>
    <td align="center" width="50%">
      <img src="https://github.com/user-attachments/assets/55173b42-06fd-4b22-9bac-c73871e511b6" alt="Route: '/blog'" style="width: 100%;">
      <p>Route: '/blog'</p>
    </td>
    <td align="center" width="50%">
      <img src="https://github.com/user-attachments/assets/baf4db1c-7582-4c0b-81d9-5d06e84701ff" alt="Route: '/contact'" style="width: 100%;">
      <p>Route: '/contact'</p>
    </td>
  </tr>
</table>


## Pembelajaran Section 3
* View Data<br>
    Belajar bagiamana cara mengimrimkan data dari router ke view yang lebih kompleks. Disini saya merubah dari Blog menjadi News, serta setiap card dan tampilannya saya sesuaikan sendiri.
* Model<br>
    Pada bagian ini hanya mengubah data Posts(News) yang berada pada Routing diubah menjadi Models, yang bisa diakses oleh berulang-ulang di models yang berada di `App/Models`. Jadi tidak perlu deklarasi data setiap saat ingin menggunakannya.

### Hasil pembelajaran section 3
<table>
  <tr>
    <td align="center" width="50%">
      <img src="https://github.com/user-attachments/assets/19dcd4a3-b038-4631-8adf-8c9089ba1ece" alt="Route: '/news'" style="width: 100%;">
      <p>Route: '/news'</p>
    </td>
    <td align="center" width="50%">
      <img src="https://github.com/user-attachments/assets/6e00171b-d0e3-4481-92f0-44d0b3b1e321" alt="Route: '/news/{slug}'" style="width: 100%;">
      <p>Route: '/news/{slug}'</p>
    </td>
  </tr>
</table>


## Pembelajaran Section 4
* Database & Migration<br>
    Mengelola database kita. Membuat, rollback, dan mengelola perubahan pada database. 
* Eloquent ORM & Post Model<br>
    `Eloquent` merupakan sebuah object-relational mapper untuk mengelola database kita. Merubah Models News kita dengan cara yang benar. Menggunakan Route Model Binding yang memudahkan untuk mengirim semua data/instance sebuah model yang akan macth dengan id. Supaya models bisa mengisi data dari otomatis bisa menggunakan `fillable`, diaman field pada model yg boleh diisi, sedangkan `guarded` adalah field yang tidak boleh disii. `Tinker` yang memudahkan memodifikasi sebuah database.

### Hasil pembelajaran section 4
<table>
  <tr>
    <td align="center" width="50%" colspan="2">
      <img src="https://github.com/user-attachments/assets/92581527-b3fa-4fd0-ad5f-71d0735dbe5f" alt="Database" style="width: 100%;">
      <p>Database pada table News yang sudah terisi data</p>
    </td>
  </tr>
</table>

## Pembelajaran Section 5
* Model Factories<br>
  Membuat data data dummy dengan fitur Factory yang memudahkan kita supaya tidak membuat data satu persatu dari melalui TablePlus ataupun tinker.
* Eloquent Relationship<br>
  Membuat relasi dari setiap model yang kita punya. Dengan Elogquent memudahkan dalam mengelola dan menggunakan relations.
* Post Category
  Membuat Model category untuk posts dengan eleoquent relationship. Dan saya  membuat categorynya dengan Enums.
* Database Seeder
  Membuat seeder untuk memudahkan untuk membuat dummy data yang tidak menggunakan tinker lagi. Menjadi seperti dibawah:
  ```php
  namespace App;

  enum CategoryType: string
  {
      case TECHNOLOGY = 'Technology';
      case SPORTS = 'Sports';
      case ENTERTAINMENT = 'Entertainment';
      case HEALTH = 'Health';
      case BUSINESS = 'Business';
  }
  ```
  ```php
  public function run(): void
  {
      $this->call([
          UserSeeder::class,
          CategorySeeder::class,
      ]);
      News::factory(100)
          ->recycle(User::all())  // Recycle the users
          ->recycle(Category::all())  // Recycle the categories
          ->create();
  }
  ```

### Hasil pembelajaran section 5
<table>
  <tr>
    <td align="center" width="50%">
      <img src="https://github.com/user-attachments/assets/6eed706b-0abb-4ae0-849e-f0206fbbaf9e" alt="Route: '/news'" style="width: 100%;">
      <p>News in Route: '/news'</p>
    </td>
    <td align="center" width="50%">
      <img src="https://github.com/user-attachments/assets/26065f80-0367-4423-ae2f-8e5cbd231d97" alt="Route: '/news/{news:slug}'" style="width: 100%;">
      <p>Detail News in Route: '/news/{news:slug}'</p>
    </td>
  </tr>
   <tr>
    <td align="center" width="50%">
      <img src="https://github.com/user-attachments/assets/82504b2c-126a-47a0-871b-e10b5bd03c4f" alt="Route: '/authors/{user:username}'" style="width: 100%;">
      <p>Sort News by authors in Route: '/authors/{user:username}'</p>
    </td>
    <td align="center" width="50%">
      <img src="https://github.com/user-attachments/assets/c331f626-4f9c-434a-a76f-966d6c2c36c5" alt="Route: '/categories/{category:slug}'" style="width: 100%;">
      <p>Sort News by category in Route: '/categories/{category:slug}'</p>
    </td>
  </tr>
</table>


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
