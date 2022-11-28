<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AsesorController;
use App\Http\Controllers\EditPasswordController;
use App\Http\Controllers\LEDController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PemimpinController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WakilProdiController;
use Google\Service\AdExchangeBuyerII\Client;
use Google\Service\Docs\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/home', [LoginController::class, 'direc'])->middleware('auth');
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('auth');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/home1', [AdminController::class, 'home'])->middleware('auth');
Route::get('/usermanagement', [AdminController::class, 'user_management'])->middleware('auth');


Route::get('/usermanagement/edit/{id}', [AdminController::class, 'edit'])->middleware('auth');
Route::post('/usermanagement/delete/{id}', [AdminController::class, 'delete'])->middleware('auth');
Route::post('/usermanagement/update', [AdminController::class, 'update'])->middleware('auth');



//Wakil Prodi
Route::get('/home-uups', [WakilProdiController::class, 'home'])->middleware('auth');
Route::get('/pengajuan', [WakilProdiController::class, 'daftar'])->middleware('auth');
Route::get('/pengajuan/detail/{id}', [WakilProdiController::class, 'detail'])->middleware('auth');
Route::get('/pengajuan/detail/edit/{id}', [WakilProdiController::class, 'detailEdit'])->middleware('auth');
Route::post('/pengajuan/detail/edit/{id}', [WakilProdiController::class, 'detailEditSave'])->middleware('auth');
Route::get('/pengajuan/detail/download/{id}', [WakilProdiController::class, 'download'])->middleware('auth');

// upload file
Route::get('/pengajuan/detail/upload-ded/{id}', [WakilProdiController::class, 'uploadDED'])->middleware('auth');
Route::post('/pengajuan/detail/upload-ded/{id}', [WakilProdiController::class, 'uploadDEDSave'])->middleware('auth');
Route::get('/pengajuan/detail/upload-dkps/{id}', [WakilProdiController::class, 'uploadDKPS'])->middleware('auth');
Route::post('/pengajuan/detail/upload-dkps/{id}', [WakilProdiController::class, 'uploadDKPSSave'])->middleware('auth');
Route::get('/pengajuan/detail/upload-lampiran/{id}', [WakilProdiController::class, 'uploadLampiran'])->middleware('auth');
Route::post('/pengajuan/detail/upload-lampiran/{id}', [WakilProdiController::class, 'uploadLampiranSave'])->middleware('auth');

Route::get('/pengajuan/tambah-pengajuan', [WakilProdiController::class, 'tambah'])->middleware('auth');
Route::get('/pengajuan/lihat-nilai/{id}', [WakilProdiController::class, 'detailNilai'])->middleware('auth');
Route::post('/register-pengajuan', [WakilProdiController::class, 'ajukan']);




//asesor
Route::get('/home-asesor', [AsesorController::class, 'home'])->middleware('auth');
Route::get('/daftar-pengajuan-asesor', [AsesorController::class, 'daftarPengajuan'])->middleware('auth');
Route::get('/daftar-pengajuan-asesor/form-penilaian/{id_pengajuan}', [AsesorController::class, 'formPenilaian'])->middleware('auth');
Route::get('/daftar-pengajuan-asesor/detail-penilaian/{id_pengajuan}', [AsesorController::class, 'detailPenilaian'])->middleware('auth');
Route::get('/daftar-pengajuan-asesor/detail-pengajuan/{id_pengajuan}', [AsesorController::class, 'detailPengajuan'])->middleware('auth');
Route::get('/daftar-pengajuan-asesor/detail-pengajuan/download/{id}', [AsesorController::class, 'download'])->middleware('auth');
Route::post('/daftar-pengajuan-asesor/form-penilaian', [AsesorController::class, 'nilaiMasuk']);
//Laporan Evaluasi Diri
Route::get('/laporan-evaluasi-diri', [LEDController::class, 'index']);
Route::post('/laporan-evaluasi-diri/save', [LEDController::class, 'save']);



//pemimpin
Route::get('/home-pemimpin', [PemimpinController::class, 'home'])->middleware('auth');
Route::get('/daftar-pengajuan-pemimpin', [PemimpinController::class, 'daftar'])->middleware('auth');
Route::get('/daftar-pengajuan-pemimpin/detail-pengajuan/{id}', [PemimpinController::class, 'detail'])->middleware('auth');
Route::get('/daftar-pengajuan-pemimpin/detail-pengajuan/download/{id}', [PemimpinController::class, 'download'])->middleware('auth');
Route::get('/daftar-pengajuan-pemimpin/lihat-nilai/{id}', [PemimpinController::class, 'detailNilai'])->middleware('auth');

//Profile admin
Route::get('/profile', [ProfileController::class, 'show'])->middleware('auth');
Route::get('/profile/editprofile', [ProfileController::class, 'editprofile'])->middleware('auth');
Route::post('/profile/editprofile/update', [ProfileController::class, 'update'])->middleware('auth');
// Profile Asesor
Route::get('/profile1', [ProfileController::class, 'show1'])->middleware('auth');
Route::get('/profile1/editprofile', [ProfileController::class, 'editprofile1'])->middleware('auth');
Route::post('/profile1/editprofile/update', [ProfileController::class, 'update1'])->middleware('auth');
//profile pemimpin
Route::get('/profile2', [ProfileController::class, 'show2'])->middleware('auth');
Route::get('/profile2/editprofile', [ProfileController::class, 'editprofile2'])->middleware('auth');
Route::post('/profile2/editprofile/update', [ProfileController::class, 'update2'])->middleware('auth');
//profile Wakil Prodi
Route::get('/profile3', [ProfileController::class, 'show3'])->middleware('auth');
Route::get('/profile3/editprofile', [ProfileController::class, 'editprofile3'])->middleware('auth');
Route::post('/profile3/editprofile/update', [ProfileController::class, 'update3'])->middleware('auth');

//password admin
Route::get('/profile/editpassword', [EditPasswordController::class, 'show'])->middleware('auth');
//pass asesor
Route::get('/profile1/editpassword', [EditPasswordController::class, 'show1'])->middleware('auth');
//pass pemimpin
Route::get('/profile2/editpassword', [EditPasswordController::class, 'show2'])->middleware('auth');
//pass Wakil Prodi
Route::get('/profile3/editpassword', [EditPasswordController::class, 'show3'])->middleware('auth');


Route::post('/editpassword/update', [EditPasswordController::class, 'edit'])->middleware('auth');

//autentikasi google
Route::get('/authgdrive/{id}', [WakilProdiController::class, 'gdrive'])->middleware('auth');
Route::get('/google-drive/callback', [WakilProdiController::class, 'getAccessToken'])->middleware('auth');

// Route::get('/authgdrive', function () {
//     $client = new \Google\Client();
//     $client->setClientId('879468625806-miipfn3ppekunoqhltcufl3610cnj08e.apps.googleusercontent.com');
//     $client->setClientSecret('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');
//     $client->setRedirectUri('http://127.0.0.1:8000/google-drive/callback');
//     $client->setScopes([
//         'https://www.googleapis.com/auth/drive.file',
//         'https://www.googleapis.com/auth/drive.resource',
//         'https://www.googleapis.com/auth/drive',
//     ]);
//     $url = $client->createAuthUrl();
//     return redirect($url);
// });
// Route::get('/google-drive/callback', function () {
//     $client = new \Google\Client();
//     $client->setClientId('879468625806-miipfn3ppekunoqhltcufl3610cnj08e.apps.googleusercontent.com');
//     $client->setClientSecret('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');
//     $client->setRedirectUri('http://127.0.0.1:8000/google-drive/callback');
//     $code = request('code');
//     $access_token = $client->fetchAccessTokenWithAuthCode($code);
//     return $access_token['access_token'];
// });


// Route::get('/google-drive/upload', function () {
//     $client = new \Google\Client();
//     $access_token = 'ya29.a0Aa4xrXNUv_SOU8AihcW5HaYp0bimSDvn9KKKjeLnGeusF3yY1ye_o2rLs9sV0R7cz9glZOH8Y_Acgg5mOOxxuHjQzC0Zfx98Qk4b5z0Ow4X3ps6RtAgQlAaXqVPh3LdB9pjWwHEBQxuzU9amfYUiE8lfQzI_aCgYKATASARMSFQEjDvL95RzkaweExGN6rjlqVMloHA0163';
//     $client->setAccessToken($access_token);
//     $service = new \Google\Service\Drive($client);
//     $file = new \Google\Service\Drive\DriveFile(array('name' => 'FORM-MHS-TA-rev300921.xlsx'));

//     $result = $service->files->create($file, array(

//         'data' => file_get_contents(public_path('storage\ded\FORM-MHS-TA-rev300921.xlsx')), // ADD YOUR FILE PATH WHICH YOU WANT TO UPLOAD ON GOOGLE DRIVE
//         'mimeType' => 'application/octet-stream',
//         'uploadType' => 'media'
//     ));
//     $url = $result->id;

//     return view('wakil.drive', ["id" => $url]);
// });

Route::get('/embed', function () {

    return view('wakil.drive');
});


Route::get('/multi', [AsesorController::class, 'multi']);
Route::post('/multi/p', [AsesorController::class, 'multip']);
Route::post('/multi/autosave1', [AsesorController::class, 'autosave1']);
Route::post('/multi/autosave2', [AsesorController::class, 'autosave2']);
Route::post('/multi/autosave3', [AsesorController::class, 'autosave3']);
Route::post('/multi/autosave4', [AsesorController::class, 'autosave4']);
Route::post('/multi/autosave5', [AsesorController::class, 'autosave5']);
Route::post('/multi/autosave6', [AsesorController::class, 'autosave6']);
Route::post('/multi/autosave7', [AsesorController::class, 'autosave7']);
Route::post('/multi/autosave8', [AsesorController::class, 'autosave8']);
Route::post('/multi/autosave9', [AsesorController::class, 'autosave9']);
Route::post('/multi/autosave10', [AsesorController::class, 'autosave10']);
Route::post('/multi/autosave11', [AsesorController::class, 'autosave11']);
Route::post('/multi/autosave12', [AsesorController::class, 'autosave12']);

Route::get('/cobaaa/{id}', [AsesorController::class, 'hitung']);
