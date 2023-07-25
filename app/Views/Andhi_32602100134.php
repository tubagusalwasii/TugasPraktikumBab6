<?php $this->extend('Layout/Andhi_32602100134')?>
<?php $this->section('content')?>
<div  class="about">
    <h1>About me</h1>
    <p>Saya merupakan seorang mahasiswa teknik informatika yang sedang berkuliah di unissula</p>

    <div class="about-experience">
        <h1>pengalaman</h1>
        <div>
            <table border="1">
    <tr>
        <td rowspan="3">2018</td>
        <th colspan="2">Voli</th>
        <td rowspan="3">2019</td>
        <th colspan="2">MobileLegend</th>
    </tr>
    <tr>
        <td>semarang</td>
        <td>jakarta</td>
        <td>Tegal</td>
        <td>M</td>
        <td>o</td>
        <td>b</td>
        <td>i</td>
        <td>l</td>
        <td>w</td>
            <?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/crud', 'crud::index');
$routes->get('/crud/insert', 'crud::insert');
$routes->post('/crud/save', 'crud::save');

$routes->get('/crud/(:segment)', 'crud::edit/$1');
$routes->post('/crud/(:segment)', 'crud::update/$1');

$routes->delete('/crud/(:segment)', 'crud::delete/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

    </tr>
    <tr>
        <td colspan="2">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit vel atque voluptatem
             obcaecati, itaque alias adipisci et, error pariatur a 
                odio deleniti aspernatur dolorum est! 
                Enim necessitatibus eligendi quia qui.
        </td>
        <td colspan="2">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit vel atque 
            voluptatem obcaecati, itaque alias adipisci et, error pariatur a 
                odio deleniti aspernatur dolorum est! 
                Enim necessitatibus eligendi quia qui.
        </td>
    </tr>
    <?php echo $this->extend('LayoutDatabase/tamplate')?>
<?php echo $this->section('content')?>

<main>
    <div class="title">
        <h1>UPDATE DATA MAHASISWA</h1>
        </div>
        <div class="form">
            <form action="/crud/update/<?php echo $mahasiswa['nim'] ;?> " method="post">
            <input type="hidden" name="nim" id="nim" placeholder="nim" value="<?php echo $mahasiswa['nim'];?>">
            <label for="newNim">NIM Baru</label>
            <input type="number" name="newNim" id="newNim" placeholder="newNim" value="<?php echo $mahasiswa['nim'];?>">
            <label for="nama">NAMA</label>
            <input type="text" name="nama" id="nama" placeholder="nama" value="<?php echo $mahasiswa['nama'];?>">
            <label for="prodi">PRODI</label>
            <input type="text" name="prodi" id="prodi" placeholder="prodi" value="<?php echo $mahasiswa['prodi'];?>">
            <label for="univ">UNIVERSITAS</label>
            <input type="text" name="univ" id="univ" placeholder="universitas" value="<?php echo $mahasiswa['universitas'];?>">
            <label for="no_hp">NO HANDPHONE</label>
            <input type="number" name="no_hp" id="no_hp" placeholder="no handphone" value="<?php echo $mahasiswa['no_hp'];?>">
            <div class="button-form">
                <button type="submit" value="submit">SUBMIT</button>
            </div>
            </form>
        </div>
   

</main>

<?php echo $this->endSection() ; ?>

</table>    
    </div>
</div>
</div>
<?php $this->endSection();?>
<?php $this->extend('Layout/Andhi_32602100134')?>
<?php $this->section('content')?>
<div  class="about">
    <h1>About me</h1>
    <p>Saya merupakan seorang mahasiswa teknik informatika yang sedang berkuliah di unissula</p>

    <div class="about-experience">
        <h1>pengalaman</h1>
        <div>
            <table border="1">
    <tr>
        <td rowspan="3">2018</td>
        <th colspan="2">Voli</th>
        <td rowspan="3">2019</td>
        <th colspan="2">MobileLegend</th>
    </tr>
    <tr>
        <td>semarang</td>
        <td>jakarta</td>
        <td>Tegal</td>
        <td>M</td>
        <td>o</td>
        <td>b</td>
        <td>i</td>
        <td>l</td>
        <td>w</td>
            <?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/crud', 'crud::index');
$routes->get('/crud/insert', 'crud::insert');
$routes->post('/crud/save', 'crud::save');

$routes->get('/crud/(:segment)', 'crud::edit/$1');
$routes->post('/crud/(:segment)', 'crud::update/$1');

$routes->delete('/crud/(:segment)', 'crud::delete/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

    </tr>
    <tr>
        <td colspan="2">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit vel atque voluptatem
             obcaecati, itaque alias adipisci et, error pariatur a 
                odio deleniti aspernatur dolorum est! 
                Enim necessitatibus eligendi quia qui.
        </td>
        <td colspan="2">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit vel atque 
            voluptatem obcaecati, itaque alias adipisci et, error pariatur a 
                odio deleniti aspernatur dolorum est! 
                Enim necessitatibus eligendi quia qui.
        </td>
    </tr>
    <?php echo $this->extend('LayoutDatabase/tamplate')?>
<?php echo $this->section('content')?>

<main>
    <div class="title">
        <h1>UPDATE DATA MAHASISWA</h1>
        </div>
        <div class="form">
            <form action="/crud/update/<?php echo $mahasiswa['nim'] ;?> " method="post">
            <input type="hidden" name="nim" id="nim" placeholder="nim" value="<?php echo $mahasiswa['nim'];?>">
            <label for="newNim">NIM Baru</label>
            <input type="number" name="newNim" id="newNim" placeholder="newNim" value="<?php echo $mahasiswa['nim'];?>">
            <label for="nama">NAMA</label>
            <input type="text" name="nama" id="nama" placeholder="nama" value="<?php echo $mahasiswa['nama'];?>">
            <label for="prodi">PRODI</label>
            <input type="text" name="prodi" id="prodi" placeholder="prodi" value="<?php echo $mahasiswa['prodi'];?>">
            <label for="univ">UNIVERSITAS</label>
            <input type="text" name="univ" id="univ" placeholder="universitas" value="<?php echo $mahasiswa['universitas'];?>">
            <label for="no_hp">NO HANDPHONE</label>
            <input type="number" name="no_hp" id="no_hp" placeholder="no handphone" value="<?php echo $mahasiswa['no_hp'];?>">
            <div class="button-form">
                <button type="submit" value="submit">SUBMIT</button>
            </div>
            </form>
        </div>
   

</main>

<?php echo $this->endSection() ; ?>

</table>    
    </div>
</div>
</div>
<?php $this->endSection();?>
<?php $this->extend('Layout/Andhi_32602100134')?>
<?php $this->section('content')?>
<div  class="about">
    <h1>About me</h1>
    <p>Saya merupakan seorang mahasiswa teknik informatika yang sedang berkuliah di unissula</p>

    <div class="about-experience">
        <h1>pengalaman</h1>
        <div>
            <table border="1">
    <tr>
        <td rowspan="3">2018</td>
        <th colspan="2">Voli</th>
        <td rowspan="3">2019</td>
        <th colspan="2">MobileLegend</th>
    </tr>
    <tr>
        <td>semarang</td>
        <td>jakarta</td>
        <td>Tegal</td>
        <td>M</td>
        <td>o</td>
        <td>b</td>
        <td>i</td>
        <td>l</td>
        <td>w</td>
            <?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/crud', 'crud::index');
$routes->get('/crud/insert', 'crud::insert');
$routes->post('/crud/save', 'crud::save');

$routes->get('/crud/(:segment)', 'crud::edit/$1');
$routes->post('/crud/(:segment)', 'crud::update/$1');

$routes->delete('/crud/(:segment)', 'crud::delete/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

    </tr>
    <tr>
        <td colspan="2">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit vel atque voluptatem
             obcaecati, itaque alias adipisci et, error pariatur a 
                odio deleniti aspernatur dolorum est! 
                Enim necessitatibus eligendi quia qui.
        </td>
        <td colspan="2">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit vel atque 
            voluptatem obcaecati, itaque alias adipisci et, error pariatur a 
                odio deleniti aspernatur dolorum est! 
                Enim necessitatibus eligendi quia qui.
        </td>
    </tr>
    <?php echo $this->extend('LayoutDatabase/tamplate')?>
<?php echo $this->section('content')?>

<main>
    <div class="title">
        <h1>UPDATE DATA MAHASISWA</h1>
        </div>
        <div class="form">
            <form action="/crud/update/<?php echo $mahasiswa['nim'] ;?> " method="post">
            <input type="hidden" name="nim" id="nim" placeholder="nim" value="<?php echo $mahasiswa['nim'];?>">
            <label for="newNim">NIM Baru</label>
            <input type="number" name="newNim" id="newNim" placeholder="newNim" value="<?php echo $mahasiswa['nim'];?>">
            <label for="nama">NAMA</label>
            <input type="text" name="nama" id="nama" placeholder="nama" value="<?php echo $mahasiswa['nama'];?>">
            <label for="prodi">PRODI</label>
            <input type="text" name="prodi" id="prodi" placeholder="prodi" value="<?php echo $mahasiswa['prodi'];?>">
            <label for="univ">UNIVERSITAS</label>
            <input type="text" name="univ" id="univ" placeholder="universitas" value="<?php echo $mahasiswa['universitas'];?>">
            <label for="no_hp">NO HANDPHONE</label>
            <input type="number" name="no_hp" id="no_hp" placeholder="no handphone" value="<?php echo $mahasiswa['no_hp'];?>">
            <div class="button-form">
                <button type="submit" value="submit">SUBMIT</button>
            </div>
            </form>
        </div>
   

</main>

<?php echo $this->endSection() ; ?>

</table>    
    </div>
</div>
</div>
<?php $this->endSection();?>
<?php $this->extend('Layout/Andhi_32602100134')?>
<?php $this->section('content')?>
<div  class="about">
    <h1>About me</h1>
    <p>Saya merupakan seorang mahasiswa teknik informatika yang sedang berkuliah di unissula</p>

    <div class="about-experience">
        <h1>pengalaman</h1>
        <div>
            <table border="1">
    <tr>
        <td rowspan="3">2018</td>
        <th colspan="2">Voli</th>
        <td rowspan="3">2019</td>
        <th colspan="2">MobileLegend</th>
    </tr>
    <tr>
        <td>semarang</td>
        <td>jakarta</td>
        <td>Tegal</td>
        <td>M</td>
        <td>o</td>
        <td>b</td>
        <td>i</td>
        <td>l</td>
        <td>w</td>
            <?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/crud', 'crud::index');
$routes->get('/crud/insert', 'crud::insert');
$routes->post('/crud/save', 'crud::save');

$routes->get('/crud/(:segment)', 'crud::edit/$1');
$routes->post('/crud/(:segment)', 'crud::update/$1');

$routes->delete('/crud/(:segment)', 'crud::delete/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

    </tr>
    <tr>
        <td colspan="2">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit vel atque voluptatem
             obcaecati, itaque alias adipisci et, error pariatur a 
                odio deleniti aspernatur dolorum est! 
                Enim necessitatibus eligendi quia qui.
        </td>
        <td colspan="2">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit vel atque 
            voluptatem obcaecati, itaque alias adipisci et, error pariatur a 
                odio deleniti aspernatur dolorum est! 
                Enim necessitatibus eligendi quia qui.
        </td>
    </tr>
    <?php echo $this->extend('LayoutDatabase/tamplate')?>
<?php echo $this->section('content')?>

<main>
    <div class="title">
        <h1>UPDATE DATA MAHASISWA</h1>
        </div>
        <div class="form">
            <form action="/crud/update/<?php echo $mahasiswa['nim'] ;?> " method="post">
            <input type="hidden" name="nim" id="nim" placeholder="nim" value="<?php echo $mahasiswa['nim'];?>">
            <label for="newNim">NIM Baru</label>
            <input type="number" name="newNim" id="newNim" placeholder="newNim" value="<?php echo $mahasiswa['nim'];?>">
            <label for="nama">NAMA</label>
            <input type="text" name="nama" id="nama" placeholder="nama" value="<?php echo $mahasiswa['nama'];?>">
            <label for="prodi">PRODI</label>
            <input type="text" name="prodi" id="prodi" placeholder="prodi" value="<?php echo $mahasiswa['prodi'];?>">
            <label for="univ">UNIVERSITAS</label>
            <input type="text" name="univ" id="univ" placeholder="universitas" value="<?php echo $mahasiswa['universitas'];?>">
            <label for="no_hp">NO HANDPHONE</label>
            <input type="number" name="no_hp" id="no_hp" placeholder="no handphone" value="<?php echo $mahasiswa['no_hp'];?>">
            <div class="button-form">
                <button type="submit" value="submit">SUBMIT</button>
            </div>
            </form>
        </div>
   

</main>

<?php echo $this->endSection() ; ?>

</table>    
    </div>
</div>
</div>
<?php $this->endSection();?>
