<?php
use App\Http\Livewire\Chat\Main;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Chat\CreateChat;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\FamilleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\staff\StaffController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


//////////////// autentification faceboook ///////////////
//login
Route::get('/auth/facebook', [FacebookController::class, 'facebookpage'])->name('registerfacebook');
Route::get('/auth/facebook/callback', [FacebookController::class, 'facebookredirect'])->name('facebookrederectelogin');
//////////////// autentification google ///////////////
Route::get('/auth/google', [GoogleController::class, 'loginWithGoogle'])->name('google.login');
Route::get('/login/google/callback', [GoogleController::class, 'googleredirect']);
//////////////// end  autentification faceboook ///////////////
//////////////////////////front ///////////////////////////
Route::get('/', function () {
    return view('front.welcome');
  });

Route::get('/homehelp/signup', function () {
  return view('front.signup');
})->name('signup');

// Route::get('/homehelp/user', function () {
//   return view('front.selectuser');
// })->name('select-user');


Route::get('/homehelp/signin', function () {
  return view('front.signin');
})->name('signin');



// Route::get('/homehelp/user', [DashbordController::class, 'selectUser'])->name('select-user');
// Route::get('/homehelp/{user}', [DashbordController::class, 'userAtacher'])->name('useratacher');

///user no has rol
Route::get('/homehelp/user', [DashbordController::class, 'selectusernorole'])->name('users.selectusernorole');
Route::get('/homehelp/{user}', [DashbordController::class, 'usernoroleAtacher'])->name('usernorolatacher');
///////////
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard', [DashbordController::class,'logincontrole'])->name('dashboard');

////////////////////////end front /////////////////////////////////////////

Route::group(['prefix' => 'admin'], function() {
    Route::get('/candidats', [CandidatController::class,'index'])->name('candidat');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//////////////////////////////////////////////old ////////////////////////////////////////




// / Route::get('/home', [HomeController::class, 'index'])->name('home');

///// Route candidat////////////////////////////////////////////////////////////
Route::middleware(['auth'])->group(function () {

  // Route::get('/candidat/home', [HomeController::class, 'index'])->name('home');
  Route::resource('candidats', CandidatController::class);

  // Route::get('/homehelppp/signin', function () {
  //   return view('front.account');
  // })->name('signin');

});
//////////////////// end candidat ////////////////////////////////////////////////
///// Route Admin////////////////////////////////////////////////////////////

Route::middleware(['auth'])->group(function () {
  // Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
  Route::delete('admin/user/delete/{user}', [AdminController::class, 'destroy'])->name('admin.destroy');
  Route::get('/admin/home/{user}', [AdminController::class, 'edituser'])->name('admin.edit-user');

  ///////afficher Famille/////////////////
  Route::get('admin/user/famille', [AdminController::class, 'indexfamille'])->name('admin.famille');

            /////////////////////////// fineshed regestring famille///////////////////////////
            Route::get('complete/regestre/famille', [FamilleController::class, 'regesterFamille'])->name('famille.regester');
            Route::get('/dashbord/famille', [FamilleController::class, 'rederectToFamille'])->name('registration.famille.success');

            /////////////// end fineshed regestring famille///////////////////////////
  // add famille
  Route::get('admin/user/add-famille', [AdminController::class, 'createfamille'])->name('admin.add.famille');
  Route::post('admin/user/famille', [AdminController::class, 'storefamille'])->name('Storefamille');

  // edit famille
  Route::get('admin/user/edit-famille/{famille}', [AdminController::class, 'editfamille'])->name('admin.edit.famille');
  Route::post('admin/user/famille/{famille}', [AdminController::class, 'updatefamille'])->name('Updatefamille');

  // Route::get('admin/user/add-famille', function () { return view('add-famille');})->name('admin.add.famille');


  ///////afficher candidat/////////////////
  Route::get('admin/user/candidat', [AdminController::class, 'indexcandidat'])->name('admin.candidat');
  // add candidat

  Route::get('admin/user/add-candidat', [AdminController::class, 'createcandidat'])->name('admin.add.candidat');
  Route::post('admin/user/candidat', [AdminController::class, 'storecandidat'])->name('Storecandidat');

  // edit candidat
  Route::get('admin/user/edit-candidat/{candidat}', [AdminController::class, 'editcandidat'])->name('admin.edit.candidat');
  Route::post('admin/user/candidat/{candidat}', [AdminController::class, 'updatecandidat'])->name('Updatecandidat');







  Route::get('admin/abonnements', function () {
    return view('abonnements');
  })->name('admin.abonnements');
});

////////////////////// End Route Admin ///////////////////////////////////////////
//////////////////////////// route famille     /////////////////////////////////////////////////

Route::middleware(['auth'])->group(function () {

  // Route::get('/famille/home', [HomeController::class, 'familleHome'])->name('famille.home');
  Route::resource('familles', FamilleController::class);
  Route::resource('annonces', AnnonceController::class);
});

//////////////////////////// end route route famille     /////////////////////////////////////////////////\






Route::get('/my-account-dashboard', function () {
  return view('front.dashboard-account');
})->name('account-dashboard');

Route::get('/my-account-applications', function () {
  return view('front.applicant');
})->name('account-applications');
Route::get('/my-account-conversation', function () {
  return view('front.conversation');
})->name('account-conversation');
Route::get('/my-account-saves', function () {
  return view('front.liked');
})->name('account-saved-profiles');


//////////////////////////message //////////////////////////////////
Route::get('/users',CreateChat::class)->name('users');
Route::get('/chat{key?}',Main::class)->name('chat');
///////////////////////end message ///////////////////////////


////////////////////////////////////////staff ///////////////////////////
Route::group(['prefix' => 'admin', 'middleware' => ['auth','role:admin']], function() {
  Route::resource('staff', StaffController::class);
  // Route::get('/manage', ['middleware' => ['permission:manage-admins'], 'uses' => 'AdminController@manageAdmins']);
});

Route::get('/souscription', function () {
  return view('front.souscription');
})->name('account-souscription');


//////////////////////end staff ////////////////////////////////////////////