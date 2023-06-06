<?php
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Livewire\Chat\Main;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CreateUsers;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Chat\CreateChat;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FamilleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\AppliedjobsController;
use App\Http\Controllers\staff\StaffController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
 

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
/// / /// / /// / welcome  /// / /// / ///
Route::get('/', [FrontController::class, 'indexfront'])->name('welcome');
// / // / // / // / // / // / // / // / // / // / // / // / // / // / // / //
// / // / // / // / // / // /Admin // / // / // / // / // / // / // / // / // / //
Route::middleware('auth','backNotAllowed','role:admin','verified')->group(function () {
  Route::get('/dashboard/admin', [AdminController::class, 'index'])->name('admin.index');
  Route::get('/dashboard/admin/famille', [AdminController::class, 'indexfamille'])->name('admin.famille');
  Route::get('/dashboard/admin/candidat', [AdminController::class, 'indexcandidat'])->name('admin.candidat');
  Route::get('dashboard/admin/abonnements', [AdminController::class,'indexSubscribe'])->name('admin.abonnements');
   // edit profile admin
   Route::get('Admin/edit-profile/{admin}', [AdminController::class, 'edit'])->name('admin.edit');
   Route::post('Admin/updateprofile/{admin}', [AdminController::class, 'update'])->name('admin.updateadmin');
});
// / // / // / // / // / // / end Admin // / // / // / // / // / // / // / // / // / //
// / // / // / // / // / // / // / // / // / // / // / // / // / // / // / //
// / // / // / // / // / // / // / // / // / // / // / // / // / // / // / //
// / // / // / // / // / // /Candidat // / // / // / // / // / // / // / // / // / //
Route::middleware('auth','backNotAllowed','role:candidat','verified')->group(function () {
  Route::get('/dashboard/candidat', [CandidatController::class, 'index'])->name('candidat.index');
  Route::get('/dashboard/complete/profile', [CandidatController::class, 'completeprofile'])->name('candidat.completeprofile');
  Route::get('/contacter/famille', [AppliedjobsController::class, 'contact'])->name('contacter');
   Route::get('/decline/famille', [AppliedjobsController::class, 'decline'])->name('decline');
   // edit candidat
   Route::get('candidat/edit-candidat/{candidat}', [CandidatController::class, 'edit'])->name('candidats.edit');
   Route::post('candidat/updatecandidat/{candidat}', [CandidatController::class, 'update'])->name('candidats.updatecandidat');
   // end edit 
 /// / /// / /// search sure annonce
 Route::get('/candidat/shearch', [CandidatController::class, 'ajax_searsh'])->name('candidat.ajax_searsh_name');
 // Search ///
 Route::post('/Search/candidat/search', [CandidatController::class, 'searchcandidat'])->name('candidat.search');
 //  end Search
 Route::get('/profile-candidat', function () {
  return view('candidats.profile');
})->name('profile-candidat');
 
 });
 
 // / // / // / // / // / // / end Candidat // / // / // / // / // / // / // / // / // / //
 // / // / // / // / // / // / // / // / // / // / // / // / // / // / // / //
// / // / // / // / // / // / // / // / // / // / // / // / // / // / // / //
// / // / // / // / // / // / Famille // / // / // / // / // / // / // / // / // / //
Route::middleware('auth','backNotAllowed','role:famille','verified')->group(function () {
  Route::get('/dashboard/famille', [FamilleController::class, 'index'])->name('famille.index');
    /////////////////////////// fineshed regestring famille///////////////////////////
    Route::get('/dashboard/famille/liked', [FamilleController::class, 'likedCandidat'])->name('likedcandidat');
    Route::get('/dashboard/liked', [FamilleController::class, 'liked'])->name('liked');
    Route::get('/dashboard/add/annonce', [FamilleController::class, 'addAnnonce'])->name('famille.addannonce');
    Route::get('/dashboard/edit/annonce', [FamilleController::class, 'editAnnonce'])->name('famille.editannonce');
    Route::get('/dashboard/active/annonce', [FamilleController::class, 'activeAnnonce'])->name('famille.activeannonce');
    Route::delete('/dashboard/delete/annonce/{annonce}', [FamilleController::class, 'destroyAnnonce'])->name('annonce.destroye');

    // Route::get('/dashbord/famille/success', [FamilleController::class, 'rederectToFamille'])->name('registration.famille.success');
    // edit profile famille
   Route::get('famille/edit-famille/{famille}', [FamilleController::class, 'edit'])->name('familles.edit');
   Route::post('famille/updatefamille/{famille}', [FamilleController::class, 'update'])->name('familles.updatefamille');

    /////////////// end fineshed regestring famille///////////////////////////
    Route::get('/my-account-applications', [AnnonceController::class, 'index'])->name('account-applications');
    Route::get('/souscription', function () {
      return view('front.souscription');
    })->name('account-souscription');
});

// / // / // / // / // / // / end Famille // / // / // / // / // / // / // / // / // / //
// / // / // / // / // / // / // / // / // / // / // / // / // / // / // / //
// / // / // / // / // / // /Autentification google et facebook  // / // / // / // / // / // / // / // / // / //
//////////////////////verfication email //////////////////

Route::get('/email/verify', function () {
  return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');


/////
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
  $request->fulfill();

  return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');


////
Route::post('/email/verification-notification', function (Request $request) {
  $request->user()->sendEmailVerificationNotification();

  
  // $request->session()->flash('success', 'The item was successfully saved.');

  return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');



/////////////////////// end verfication email //////////////////
/////////////////////// forget password //////////////////////
Route::post('/forgot-password', function (Request $request) {
  $request->validate(['email' => 'required|email']);

  $status = Password::sendResetLink(
      $request->only('email')
  );

  return $status === Password::RESET_LINK_SENT
              ? back()->with(['status' => __($status)])
              : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

///////////////////////
Route::get('/reset-password/{token}', function (string $token) {
  return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

///////////////////////  end forget password //////////////////////
//////////////// autentification faceboook ///////////////
//login
Route::get('/auth/facebook', [FacebookController::class, 'facebookpage'])->name('registerfacebook');
Route::get('/auth/facebook/callback', [FacebookController::class, 'facebookredirect'])->name('facebookrederectelogin');
//////////////// autentification google ///////////////
Route::get('/auth/google', [GoogleController::class, 'loginWithGoogle'])->name('google.login');
Route::get('/login/google/callback', [GoogleController::class, 'googleredirect']);
//////////////// end  autentification faceboook ///////////////
// / // / // / // / // / // / end Autentification google et facebook  // / // / // / // / // / // / // / // / // / //
 // / // / // / // / // / // / // / // / // / // / // / // / // / // / // / //
// / // / // / // / // / // /auth and virifiey // / // / // / // / // / // / // / // / // / //
Route::middleware('auth')->group(function () {
 // Comment ///////////////////////////////
Route::get('/index/comments', [CommentController::class, 'indexComment'])->name('index.comment');
Route::post('/comments', [CommentController::class, 'comments'])->name('comment');
//end comment ///////////////////////////////
/////////////////  peymant Paypale ///////////////
Route::get('/payment', [PayPalController::class, 'payment'])->name('payment');
Route::get('/cancel', [PayPalController::class, 'cancel'])->name('payment.cancel');
Route::get('/payment/success', [PayPalController::class, 'success'])->name('payment.success');
//////////////////  end  peymant Paypale ///////////////
////////////////// peymant Stripe ///////////////
Route::get('/payment/carts', [StripeController::class, 'paymentstripe'])->name('payment.stripe');
Route::post('single-charge',[StripeController::class,'singleCharge'])->name('single.charge');

//////////////////  end peymant Stripe ///////////////
//////////////////////////message //////////////////////////////////
Route::get('/users',CreateChat::class)->name('users');
Route::get('/my-account-conversation{key?}',Main::class)->name('chat');
Route::get('/index', [CreateUsers::class, 'index'])->name('index');
Route::get('/sendeto/{user}',[CreateUsers::class, 'sendetoUser'])->name('sendeto');
// Route::get('/sendeto//{user}', [CreateUsers::class, 'sendetoUser'])->name('sendto');
Route::post('/send/message/{receiverInstance}/{conversation}', [CreateUsers::class, 'sendMessage'])->name('users.sendmessage');

///////////////////////end message ///////////////////////////


});
// / // / // / // / // / // / end auth and virifiey // / // / // / // / // / // / // / // / // / //
// / // / // / // / // / // / // / // / // / // / // / // / // / // / // / //

/* //////////////////////////////////////////////////////////////////////////////////////////*/
/* //////////////////////////////////////////////////////////////////////////////////////////*/




////////////////// live  search ///////////
Route::get('/search/live', [DashbordController::class, 'liveSearch'])->name('livesearch');
Route::post('/Search', [DashbordController::class, 'search'])->name('Search');
//////////////////  end live  search ///////////
///////////////// searsh ajax ///////////
Route::get('/ajax_searsh/shearch', [DashbordController::class, 'ajax_searsh'])->name('ajax_searsh_name');
///////////////////////////////
//////////////////////// searchfront/////////////////////
Route::post('front/searchfront', [FrontController::class, 'searchfront'])->name('front.searchfront');
Route::get('/front/search/live', [FrontController::class, 'livesearchfront'])->name('front.livesearch');
////////////////////////  end searchfront/////////////////////




//////////////////////////front ///////////////////////////
// Route::get('/', function () {
  // $users=User::where('maid',1)->get();
  //   return view('front.welcome',compact('users'));
  // })->name('welcome');F

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


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['auth','backNotAllowed','verified'])->group(function () {
  Route::get('/dashboard', [DashbordController::class,'logincontrole'])->name('dashboard');
});

////////////////////////end front /////////////////////////////////////////

// Route::group(['prefix' => 'admin'], function() {
//     Route::get('/candidats', [CandidatController::class,'index'])->name('candidat');
// });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//////////////////////////////////////////////old ////////////////////////////////////////




// / Route::get('/home', [HomeController::class, 'index'])->name('home');

///// Route candidat////////////////////////////////////////////////////////////
// Route::middleware(['auth'])->group(function () {

  // Route::get('/candidat/home', [HomeController::class, 'index'])->name('home');
  // Route::resource('candidats', CandidatController::class);

//  end Search

  // Route::get('/homehelppp/signin', function () {
  //   return view('front.account');
  // })->name('signin');

// });
//////////////////// end candidat ////////////////////////////////////////////////
///// Route Admin////////////////////////////////////////////////////////////

Route::middleware(['auth'])->group(function () {
  // Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
  Route::delete('admin/user/delete/{user}', [AdminController::class, 'destroy'])->name('admin.destroy');
  Route::get('/admin/home/{user}', [AdminController::class, 'edituser'])->name('admin.edit-user');


     
  // add famille
  Route::get('admin/user/add-famille', [AdminController::class, 'createfamille'])->name('admin.add.famille');
  Route::post('admin/user/famille', [AdminController::class, 'storefamille'])->name('Storefamille');

  // edit famille
  Route::get('admin/user/edit-famille/{famille}', [AdminController::class, 'editfamille'])->name('admin.edit.famille');
  Route::post('admin/user/famille/{famille}', [AdminController::class, 'updatefamille'])->name('Updatefamille');

  // Route::get('admin/user/add-famille', function () { return view('add-famille');})->name('admin.add.famille');


  ///////afficher candidat/////////////////
  // add candidat

  Route::get('admin/user/add-candidat', [AdminController::class, 'createcandidat'])->name('admin.add.candidat');
  Route::post('admin/user/candidat', [AdminController::class, 'storecandidat'])->name('Storecandidat');

  // edit candidat
  Route::get('admin/user/edit-candidat/{candidat}', [AdminController::class, 'editcandidat'])->name('admin.edit.candidat');
  Route::post('admin/user/candidat/{candidat}', [AdminController::class, 'updatecandidat'])->name('Updatecandidat');




});





// Route::get('/my-account-dashboard', function () {
//   return view('front.dashboard-account');
// })->name('account-dashboard');

// Route::get('/my-account-applications', function () {
//   return view('front.applicant');
// })->name('account-applications');
// Route::get('/my-account-conversation', function () {
//   return view('front.conversation');
// })->name('account-conversation');
// Route::get('/my-account-saves', function () {
//   return view('front.liked');
// })->name('account-saved-profiles');








////////////////////////////////////////staff ///////////////////////////
Route::group(['prefix' => 'admin', 'middleware' => ['auth','role:admin']], function() {
  Route::resource('staff', StaffController::class);
  // Route::get('/manage', ['middleware' => ['permission:manage-admins'], 'uses' => 'AdminController@manageAdmins']);
});

//////////////////////end staff ////////////////////////////////////////////