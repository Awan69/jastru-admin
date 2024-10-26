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

    Route::resource('exciting-missions', App\Http\Controllers\ExcitingMissionController::class);
    Route::get('/exciting-missions', [ExcitingMissionController::class, 'index'])->name('exciting-missions.index');
    Route::get('exciting-missions/{xciting-missionId}/delete', [App\Http\Controllers\ExcitingMissionController::class, 'destroy']);
    Route::delete('exciting-missions/{exciting-missionId}', [App\Http\Controllers\ExcitingMissionController::class, 'destroy']);

    Route::get('exciting-mission-tickets', [ExcitingMissionController::class, 'tickets'])->name('exciting-mission-tickets.index');
    Route::post('exciting-mission-tickets/update-status', [ExcitingMissionController::class, 'updateStatus'])->name('exciting-mission-tickets.update-status');

    Route::resource('balance', App\Http\Controllers\BalanceController::class);
    Route::get('/balance', [BalanceController::class, 'index'])->name('balance.index');
    Route::get('balance/history/{user_id}', [BalanceController::class, 'history'])->name('balance.history');
});

Route::group(['middleware' => ['role:staff|user', 'auth', 'verified']], function () {
    Route::get('/setting', [SettingController::class, 'index'])->name('setting');
    Route::get('/dashboard', [BerandaController::class, 'index'])->name('beranda');

    Route::get('/jasa', [BerandaController::class, 'jasa'])->name('jasa');
    Route::get('/pesan', [InboxController::class, 'index'])->name('pesan');
    Route::get('/chat', [InboxController::class, 'chat'])->name('chat');

    //misi seru
    Route::get('/misi_seru', [MisiseruController::class, 'index'])->name('misi_seru');
    Route::get('/bukti_pekerjaan', [MisiseruController::class, 'bukti_pekerjaan'])->name('bukti_pekerjaan');
    Route::get('/misi_berhasil', [MisiseruController::class, 'misi_berhasil'])->name('misi_berhasil');
    Route::post('/misi_seru/upload_bukti', [MisiseruController::class, 'upload_Bukti'])->name('upload_bukti');

    Route::post('/follow-mission', [MisiseruController::class, 'followMission'])->name('follow.mission');
    Route::get('/chat', [InboxController::class, 'chat'])->name('chat');

    //setting
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
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
