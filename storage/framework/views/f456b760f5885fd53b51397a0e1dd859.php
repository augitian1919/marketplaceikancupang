PS C:\Users\ACER\marketplace-cupang> cd C:\Users\ACER\marketplace-cupang
PS C:\Users\ACER\marketplace-cupang> php artisan tinker
Psy Shell v0.12.23 (PHP 8.2.12 — cli) by Justin Hileman
New PHP manual is available (latest: 3.1.0). Update with `doc --update-manual`
> \App\Models\Category::create(['name' => 'Ikan Cupang Halfmoon', 'slug' 
=> 'halfmoon', 'description' => 'Ikan cupang dengan sirip lebar berbentuk
 setengah bulan']);                                                      

   Illuminate\Database\QueryException  SQLSTATE[42S22]: Column not found: 1054 Unknown column 'name' in 'field list' (Connection: mysql, Host: 127.0.0.1, Port: 3306, Database: marketplace_cupang, SQL: insert into `categories` (`name`, `slug`, `description`, `updated_at`, `created_at`) values (Ikan Cupang Halfmoon, halfmoon, Ikan cupang dengan sirip lebar berbentuk setengah bulan, 2026-06-24 13:54:21, 2026-06-24 13:54:21)).

> // Tambah Kategori                                                     

> \App\Models\Category::create(['name' => 'Ikan Cupang Halfmoon', 'slug' 
=> 'halfmoon', 'description' => 'Ikan cupang dengan sirip lebar berbentuk
 setengah bulan']);                                                      

   Illuminate\Database\QueryException  SQLSTATE[42S22]: Column not found: 1054 Unknown column 'name' in 'field list' (Connection: mysql, Host: 127.0.0.1, Port: 3306, Database: marketplace_cupang, SQL: insert into `categories` (`name`, `slug`, `description`, `updated_at`, `created_at`) values (Ikan Cupang Halfmoon, halfmoon, Ikan cupang dengan sirip lebar berbentuk setengah bulan, 2026-06-24 13:54:57, 2026-06-24 13:54:57)).

> \App\Models\Category::create(['name' => 'Ikan Cupang Plakat', 'slug' =>
 'plakat', 'description' => 'Ikan cupang plakat yang kuat dan agresif']);


   Illuminate\Database\QueryException  SQLSTATE[42S22]: Column not found: 1054 Unknown column 'name' in 'field list' (Connection: mysql, Host: 127.0.0.1, Port: 3306, Database: marketplace_cupang, SQL: insert into `categories` (`name`, `slug`, `description`, `updated_at`, `created_at`) values (Ikan Cupang Plakat, plakat, Ikan cupang plakat yang kuat dan agresif, 2026-06-24 13:54:57, 2026-06-24 13:54:57)).

> \App\Models\Category::create(['name' => 'Ikan Cupang Crowntail', 'slug'
 => 'crowntail', 'description' => 'Ikan cupang dengan sirip bergerigi sep
erti mahkota']);                                                         

   Illuminate\Database\QueryException  SQLSTATE[42S22]: Column not found: 1054 Unknown column 'name' in 'field list' (Connection: mysql, Host: 127.0.0.1, Port: 3306, Database: marketplace_cupang, SQL: insert into `categories` (`name`, `slug`, `description`, `updated_at`, `created_at`) values (Ikan Cupang Crowntail, crowntail, Ikan cupang dengan sirip bergerigi seperti mahkota, 2026-06-24 13:54:57, 2026-06-24 13:54:57)).

> \App\Models\Category::create(['name' => 'Aksesoris & Pakan', 'slug' => 
'aksesoris', 'description' => 'Aksesoris aquarium dan pakan ikan cupang']
);                                                                       

   Illuminate\Database\QueryException  SQLSTATE[42S22]: Column not found: 1054 Unknown column 'name' in 'field list' (Connection: mysql, Host: 127.0.0.1, Port: 3306, Database: marketplace_cupang, SQL: insert into `categories` (`name`, `slug`, `description`, `updated_at`, `created_at`) values (Aksesoris & Pakan, aksesoris, Aksesoris aquarium dan pakan ikan cupang, 2026-06-24 13:54:57, 2026-06-24 13:54:57)).

>                                                                        
> // Tambah Produk Dummy                                                 

> \App\Models\Product::create([                                          
.     'user_id' => 1,                                                    
.     'category_id' => 1,                                                
.     'name' => 'Cupang Halfmoon Red Dragon',                            
.     'slug' => 'cupang-halfmoon-red-dragon',                            
.     'description' => 'Ikan cupang halfmoon berkualitas dengan warna mer
ah menyala. Sirip lebar dan proporsional.',                              
.     'price' => 150000,                                                 
.     'stock' => 5,                                                      
.     'status' => 'available',                                           
.     'condition' => 'new'                                               
. ]);                                                                    

   Illuminate\Database\QueryException  SQLSTATE[42S22]: Column not found: 1054 Unknown column 'user_id' in 'field list' (Connection: mysql, Host: 127.0.0.1, Port: 3306, Database: marketplace_cupang, SQL: insert into `products` (`user_id`, `category_id`, `name`, `slug`, `description`, `price`, `stock`, `status`, `condition`, `updated_at`, `created_at`) values (1, 1, Cupang Halfmoon Red Dragon, cupang-halfmoon-red-dragon, Ikan cupang halfmoon berkualitas dengan warna merah menyala. Sirip lebar dan proporsional., 150000, 5, available, new, 2026-06-24 13:54:58, 2026-06-24 13:54:58)).

>                                                                        
> \App\Models\Product::create([                                          
.     'user_id' => 1,                                                    
.     'category_id' => 2,                                                
.     'name' => 'Cupang Plakat Blue Galaxy',                             
.     'slug' => 'cupang-plakat-blue-galaxy',                             
.     'description' => 'Cupang plakat dengan corak galaxy biru yang menaw
an. Sirip pendek dan kuat.',                                             
.     'price' => 85000,                                                  
.     'stock' => 8,                                                      
.     'status' => 'available',                                           
.     'condition' => 'new'                                               
. ]);                                                                    

   Illuminate\Database\QueryException  SQLSTATE[42S22]: Column not found: 1054 Unknown column 'user_id' in 'field list' (Connection: mysql, Host: 127.0.0.1, Port: 3306, Database: marketplace_cupang, SQL: insert into `products` (`user_id`, `category_id`, `name`, `slug`, `description`, `price`, `stock`, `status`, `condition`, `updated_at`, `created_at`) values (1, 2, Cupang Plakat Blue Galaxy, cupang-plakat-blue-galaxy, Cupang plakat dengan corak galaxy biru yang menawan. Sirip pendek dan kuat., 85000, 8, available, new, 2026-06-24 13:54:58, 2026-06-24 13:54:58)).

>                                                                        
> \App\Models\Product::create([                                          
.     'user_id' => 1,                                                    
.     'category_id' => 3,                                                
.     'name' => 'Cupang Crowntail Yellow',                               
.     'slug' => 'cupang-crowntail-yellow',                               
.     'description' => 'Crowntail kuning dengan sirip bergerigi yang inda
h. Aktif dan sehat.',                                                    
.     'price' => 120000,                                                 
.     'stock' => 3,                                                      
.     'status' => 'available',                                           
.     'condition' => 'new'                                               
. ]);                                                                    

   Illuminate\Database\QueryException  SQLSTATE[42S22]: Column not found: 1054 Unknown column 'user_id' in 'field list' (Connection: mysql, Host: 127.0.0.1, Port: 3306, Database: marketplace_cupang, SQL: insert into `products` (`user_id`, `category_id`, `name`, `slug`, `description`, `price`, `stock`, `status`, `condition`, `updated_at`, `created_at`) values (1, 3, Cupang Crowntail Yellow, cupang-crowntail-yellow, Crowntail kuning dengan sirip bergerigi yang indah. Aktif dan sehat., 120000, 3, available, new, 2026-06-24 13:54:58, 2026-06-24 13:54:58)).

>                                                                        
> exit                                                                   <?php /**PATH C:\Users\ACER\marketplace-cupang\resources\views/products/index.blade.php ENDPATH**/ ?>