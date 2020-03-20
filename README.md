Nama    : Rendy Wisnu R.
NIM     : E41181766
Matkul  : Workshop Web Framework

Aplikasi yang saya buat adalah aplikasi pendataan bencana di Indonesia

Link:
http://localhost/bencanaren/

Konsep aplikasi ini sederhana saja, saya membuat crud untuk data bencana dan data admin
namun pada data admin ini saya hanya membatasinya dengan create saja dikarenakan data admin hanya 
butuh digunakan sekali saja, yaitu untuk login.

Aplikasi ini membutuhkan login agar bisa digunakan, disini saya tidak memberi fitur register karena 
saya anggap data admin sudah ada sebelumnya.

Saya menyediakan login dengan username rendy21 password rendy21 yang sudah di enkripsi menggunakan MD5

Ok
Pertama, saya membuat aplikasi ini menggunakan template SB Admin 2

Langsung saja
Selanjutnya, saya menggunakan 4 controller yang berfungsi pada masing-masing view yaitu:

1. C_login      ->  v_login
2. C_dashboard  ->  v_dashboard
3. C_admin      ->  v_admin
4. C_bencana    ->  v_bencana

Kemudian untuk file view ada tambahan yaitu dari header, footer, dan sidebar yang berfungsi
sebagai file yang bisa dipanggil berkali-kali supaya menghemat tempat pada view yang lain.

1. v_login sebagai login form
2. v_dashboard sebagai home
3. v_admin sebagai table data admin
4. v_bencana sebagai table data bencana
5. v_inputadmin sebagai form input data admin
6. v_inputbencana sebagai form input data bencana
7. v_editbencana sebagai form edit data bencana  

Note:
Kenapa disini tidak disebutkan v_editadmin dikarenakan admin hanya disediakan fitur create data.

Terima Kasih, Bapak Angga atas bimbingannya