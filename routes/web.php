<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\MisiseruController;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ExcitingMissionController;
use App\Http\Controllers\BalanceController;
use App\Http\Controllers\ExcitingMissionUser;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\MyShopController;
use App\Http\Controllers\ProfileUserController;
use App\Http\Controllers\VerificationSeller;
use App\Http\Controllers\ProductServiceController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['role:super-admin|admin', 'auth']], function () {
    Route::get('/dashboard-09', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('permissions', App\Http\Controllers\PermissionController::class);
    Route::get('/permissions', [PermissionController::class, 'index'])->name('permissions.index');
    Route::get('permissions/{permissionId}/delete', [App\Http\Controllers\PermissionController::class, 'destroy']);
    Route::get('permissions/{permissionId}/edit', [App\Http\Controllers\PermissionController::class, 'edit'])->name('permissions.edit');
    Route::delete('permissions/{permissionId}', [App\Http\Controllers\PermissionController::class, 'destroy'])->name('permissions.destroy');

    Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
    Route::get('roles/{roleId}/delete', [App\Http\Controllers\RoleController::class, 'destroy']);
    Route::delete('roles/{roleId}', [App\Http\Controllers\RoleController::class, 'destroy']);
    Route::get('roles/{roleId}/give-permissions', [App\Http\Controllers\RoleController::class, 'addPermissionToRole'])->name('roles.give-permissions');
    Route::put('roles/{roleId}/give-permissions', [App\Http\Controllers\RoleController::class, 'givePermissionToRole']);
    Route::get('roles/{roleId}/permissions', [App\Http\Controllers\RoleController::class, 'addPermissionToRole'])->name('roles.permissions');
    Route::put('roles/{roleId}/permissions', [App\Http\Controllers\RoleController::class, 'givePermissionToRole']);


    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('users/{userId}/delete', [App\Http\Controllers\UserController::class, 'destroy']);
    Route::delete('users/{userId}', [App\Http\Controllers\UserController::class, 'destroy']);

    Route::resource('partners', App\Http\Controllers\PartnerController::class);
    Route::get('/partners', [PartnerController::class, 'index'])->name('partners.index');
    Route::get('partners/{partnerId}/delete', [App\Http\Controllers\PartnerController::class, 'destroy']);
    Route::delete('partners/{partnerId}', [App\Http\Controllers\PartnerController::class, 'destroy']);

    Route::resource('seller', App\Http\Controllers\SellerController::class);
    Route::get('/seller', [SellerController::class, 'index'])->name('seller.index');
    Route::post('seller/verify/{id}', [SellerController::class, 'verify'])->name('seller.verify');
    Route::post('seller/ban/{id}', [SellerController::class, 'ban'])->name('seller.ban');
    Route::post('seller/unban/{id}', [SellerController::class, 'unban'])->name('seller.unban');
    Route::delete('seller/{id}', [SellerController::class, 'destroy'])->name('seller.destroy');

    Route::resource('exciting-missions', App\Http\Controllers\ExcitingMissionController::class);
    Route::get('/exciting-missions', [ExcitingMissionController::class, 'index'])->name('exciting-missions.index');
    Route::post('exciting-missions/update-status', [ExcitingMissionController::class, 'changeExcitingMissionStatus'])->name('exciting-missions.update-status');
    Route::post('exciting-missions/add-tickets', [ExcitingMissionController::class, 'addTickets'])->name('exciting-missions.add-tickets');
    Route::get('exciting-missions/{xciting-missionId}/delete', [App\Http\Controllers\ExcitingMissionController::class, 'destroy']);
    Route::delete('exciting-missions/{exciting-missionId}', [App\Http\Controllers\ExcitingMissionController::class, 'destroy']);

    Route::get('exciting-mission-tickets', [ExcitingMissionController::class, 'tickets'])->name('exciting-mission-tickets.index');
    Route::post('exciting-mission-tickets/update-status', [ExcitingMissionController::class, 'updateStatus'])->name('exciting-mission-tickets.update-status');

    Route::resource('balance', App\Http\Controllers\BalanceController::class);
    Route::get('/balance', [BalanceController::class, 'index'])->name('balance.index');
    Route::get('balance/history/{user_id}', [BalanceController::class, 'history'])->name('balance.history');

    Route::resource('products', ProductController::class);
    Route::resource('product', App\Http\Controllers\ProductController::class);
    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::post('product/verify/{id}', [ProductController::class, 'verify'])->name('product.verify');

    Route::resource('services', ServiceController::class);
    Route::get('/service', [ServiceController::class, 'index'])->name('service.index');
    Route::get('/service/create', [ServiceController::class, 'create'])->name('service.create');
    Route::post('/service', [ServiceController::class, 'store'])->name('service.store');
    Route::delete('/service/{id}', [ServiceController::class, 'destroy'])->name('service.destroy');
    Route::post('service/verify/{id}', [ServiceController::class, 'verify'])->name('service.verify');
});

Route::group(['middleware' => ['role:staff|user', 'auth', 'verified']], function () {
    Route::get('/setting', [SettingController::class, 'index'])->name('setting');
    Route::get('/dashboard_user', [BerandaController::class, 'index'])->name('dashboard_user');

    Route::get('/jasa', [BerandaController::class, 'jasa'])->name('jasa');
    Route::get('/pekerjaan', [BerandaController::class, 'pekerjaan'])->name('pekerjaan');
    Route::get('/pesan', [InboxController::class, 'index'])->name('pesan');
    Route::get('/chat', [InboxController::class, 'chat'])->name('chat');

    //profil user
    Route::get('/profile2', [ProfileUserController::class, 'profile2'])->name('profile2');
    Route::get('/post', [ProfileUserController::class, 'post'])->name('post');

    //misi seru
    Route::get('/misi_seru', [ExcitingMissionUser::class, 'index'])->name('misi_seru');
    Route::post('/check-follow-mission', [ExcitingMissionUser::class, 'checkFollowMission']);
    Route::get('/bukti_pekerjaan/{id}', [ExcitingMissionUser::class, 'bukti_pekerjaan'])->name('bukti_pekerjaan');
    Route::get('/misi_berhasil', [ExcitingMissionUser::class, 'misi_berhasil'])->name('misi_berhasil');
    Route::post('/misi_seru/upload_bukti', [ExcitingMissionUser::class, 'upload_Bukti'])->name('upload_bukti');

    Route::post('/follow-mission', [ExcitingMissionUser::class, 'follow_mission'])->name('follow.mission');
    Route::get('/chat', [InboxController::class, 'chat'])->name('chat');

    //setting
    Route::get('/setting', [SettingController::class, 'index'])->name('setting');
    Route::get('/setting_seller', [SettingController::class, 'setting_seller'])->name('setting_seller');
    Route::get('/myshop', [SettingController::class, 'myshop'])->name('myshop');
    Route::get('/informasi_akun', [SettingController::class, 'informasi_akun'])->name('informasi_akun');
    Route::get('/informasi_alamat', [SettingController::class, 'informasi_alamat'])->name('informasi_alamat');
    Route::get('/add_alamat', [SettingController::class, 'add_alamat'])->name('add_alamat');
    Route::get('/pinpoint', [SettingController::class, 'pinpoint'])->name('pinpoint');
    Route::get('/edit_name', [SettingController::class, 'edit_name'])->name('edit_name');
    Route::get('/edit_username', [SettingController::class, 'edit_username'])->name('edit_username');
    Route::get('/edit_bio', [SettingController::class, 'edit_bio'])->name('edit_bio');
    Route::get('/linkwebsite', [SettingController::class, 'linkwebsite'])->name('linkwebsite');
    Route::get('/edit_email', [SettingController::class, 'edit_email'])->name('edit_email');
    Route::get('/edit_no_phone', [SettingController::class, 'edit_no_phone'])->name('edit_no_phone');
    Route::get('/verifikasi_nomor_telepon', [SettingController::class, 'verifikasi_nomor_telepon'])->name('verifikasi_nomor_telepon');
    Route::get('/progress_lamaran_misi', [SettingController::class, 'progressLamaranMisi'])->name('progress_lamaran_misi');

    // Verification seller routes
    Route::get('/open_cam', [VerificationSeller::class, 'showOpenCam'])->name('open_cam');
    Route::post('/save.ktp.image', [VerificationSeller::class, 'saveKtpImage'])->name('save.ktp.image');
    Route::get('/scan2', [VerificationSeller::class, 'scan2'])->name('scan2');
    Route::get('/selfie_cam', [VerificationSeller::class, 'SelfieCam'])->name('selfie_cam');
    Route::post('/save.selfie.image', [VerificationSeller::class, 'saveSelfieImage'])->name('save.selfie.image')->middleware('auth');
    Route::get('/cf_ktp', [VerificationSeller::class, 'cfKTP'])->name('cf_ktp');
    Route::get('/cf_selfie', [VerificationSeller::class, 'cfSelfie'])->name('cf_selfie');
    Route::post('/complete-verification', [VerificationSeller::class, 'completeVerification'])->name('complete-verification')->middleware('auth');

    //myshop
    Route::get('/products_services', [MyShopController::class, 'showServicesProducts'])->name('products_services');
    Route::post('/add-service', [MyShopController::class, 'storeService'])->name('add-service');
    Route::get('/edit-service/{id}', [MyShopController::class, 'editService'])->name('edit-service');
    Route::post('/update-service/{id}', [MyShopController::class, 'updateService'])->name('update-service');
    Route::post('/add-product', [MyShopController::class, 'storeProduct'])->name('add-product');
    Route::get('/edit-product/{id}', [MyShopController::class, 'editProduct'])->name('edit-product');
    Route::post('/update-product/{id}', [MyShopController::class, 'updateProduct'])->name('update-product');

    //produk & jasa
    Route::get('/listing', function () {
        return view('jasa.listing');
    })->name('listing');
    Route::get('/post/{type}/{id}', [ProductServiceController::class, 'show'])->name('post.show');

    Route::get('/ulasan', function () {
        return view('jasa.ulasan');
    });

    Route::get('/start', function () {
        return view('scan/start');
    })->name('start');

    Route::get('/scan1', function () {
        return view('scan.scan1');
    })->name('scan1');

    Route::get('/notification', function () {
        return view('dashboard.notification');
    })->name('notification');

    Route::get('/cart', function () {
        return view('dashboard.cart');
    })->name('cart');

    Route::get('/add_services', function () {
        return view('setting.myshop.add_services');
    })->name('add_services');

    Route::get('/add_products', function () {
        return view('setting.myshop.add_products');
    })->name('add_products');

    Route::get('/change_products', function () {
        return view('setting.myshop.change_products');
    })->name('change_products');

    Route::get('/change_services', function () {
        return view('setting.myshop.change_services');
    })->name('change_services');

    Route::get('/profile_user', function () {
        return view('profile2.profile_user');
    })->name('profile');

    Route::get('/listing', function () {
        return view('jasa.listing');
    })->name('listing');

    Route::get('/post', function () {
        return view('jasa.post');
    })->name('post');

    Route::get('/ulasan', function () {
        return view('jasa.ulasan');
    })->name('ulasan');

    Route::get('/detail_pekerjaan', function () {
        return view('pekerjaan.detail_pekerjaan');
    })->name('detail_pekerjaan');

    Route::get('/detail_pekerjaan2', function () {
        return view('pekerjaan.detail_pekerjaan2');
    })->name('detail_pekerjaan2');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
