<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\UserController;
use App\Models\Plan;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['guest'])->group(function () {
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::get("/login", function(){
        $firstPlanId =  Plan::all()->first()->id;

        return view('login', compact("firstPlanId"));
    });
});




Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index'); // Assuming you have an index.blade.php file under dashboard directory
    })->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::resource('users', UserController::class);
    Route::resource('plans', PlanController::class);
    Route::put('/user/profile/update', [UserController::class, 'updateProfile'])->name('users.updateProfile');
    Route::get('/user/profile', [UserController::class, 'profileShow'])->name('user.profile');
    Route::get('/user/profile/edit', [UserController::class, 'editProfile'])->name('profile.edit');

});





Route::get('/', function () {
    $firstPlanId =  Plan::all()->first()->id;
    return view('home', compact("firstPlanId"));
});



Route::get('/auto-rotate', function () {
    $firstPlanId =  Plan::all()->first()->id;
    return view('Product/autoRotate', compact("firstPlanId"));
});

Route::get('/machine-detection', function () {
    $firstPlanId =  Plan::all()->first()->id;
    return view('Product/machine', compact("firstPlanId"));
});

Route::get('/power-dialer', function () {
    $plans = Plan::all();
    $firstPlanId = $plans->first()->id;
    return view('Product/powerDialer',compact("plans", "firstPlanId"));
});

Route::get('/sticky-agent', function () {
    $firstPlanId =  Plan::all()->first()->id;
    return view('Product/stickyAgent', compact("firstPlanId"));
});

Route::get('/pricing', function () {
    $plans = Plan::all();
    $firstPlanId = $plans->first()->id;
    $lastPlan = $plans->last();
    return view('pricing',compact("plans", "firstPlanId", "lastPlan"));
});

Route::get('/speed-to-dial', function () {
    $firstPlanId =  Plan::all()->first()->id;
    return view('Product/speed', compact("firstPlanId")) ;
});

Route::get('/smart-did-routing', function () {
    $firstPlanId =  Plan::all()->first()->id;
    return view('Product/smartDid', compact("firstPlanId"));
});

Route::get('/sms', function () {
    $firstPlanId =  Plan::all()->first()->id;
    return view('Product/sms', compact("firstPlanId"));
});

Route::get('/voip-for-market-research', function () {
    $firstPlanId =  Plan::all()->first()->id;
    return view('Solutions/industry/VoIPMarket', compact("firstPlanId"));
});

Route::get('/call-centre-solution-for-software-and-technology', function () {
    $firstPlanId =  Plan::all()->first()->id;
    return view('Solutions/industry/software', compact("firstPlanId"));
});

Route::get('/call-center-software-solution', function () {
    $firstPlanId =  Plan::all()->first()->id;
    return view('Solutions/By Need/callCenter', compact("firstPlanId"));
});

Route::get('/voip-system-for-real-estate', function () {
    $firstPlanId =  Plan::all()->first()->id;
    return view('Solutions/industry/realEstate', compact("firstPlanId"));
});


Route::get('/support-contact-center', function () {
    $firstPlanId =  Plan::all()->first()->id;
    return view('Solutions/By Use Case/support', compact("firstPlanId"));
});



Route::get('/office-phone-system', function () {
    $plans = Plan::all();
    $firstPlanId = $plans->first()->id;
    return view('Solutions/By Need/office',compact("plans", "firstPlanId")) ;
});

Route::get('/voice-broadcasting', function () {
    $plans = Plan::all();
    $firstPlanId = $plans->first()->id;
    return view('Solutions/By Need/voiceBroadcasting',compact("plans","firstPlanId"));
});
Route::get('/call-analytics', function () {
    $plans = Plan::all();
    $firstPlanId = $plans->first()->id;
    return view('Product\callAnalytics',compact("plans","firstPlanId"));
});
Route::get('/call-monitoring', function () {
    $plans = Plan::all();
    $firstPlanId = $plans->first()->id;
    return view('Product\callMonitoring',compact("plans"));
});
Route::get('/predictive-dialer', function () {
    $plans = Plan::all();
    $firstPlanId = $plans->first()->id;
    return view('Solutions/By Need/predictiveDialer',compact("firstPlanId","plans"));
});
Route::get('/virtual-phone-number', function () {
    $plans = Plan::all();
    $firstPlanId = $plans->first()->id;
    return view('Solutions/By Need/virtualPhoneNumber',compact("firstPlanId","plans"));
});

// Route::get('/pay', function () {
//     return view('pay');
// });

Route::get('/call-barging-feature', function () {
    $plans = Plan::all();
    $firstPlanId = $plans->first()->id;
    
    return view('Solutions/By Use Case/CallBarging', compact("firstPlanId", "plans"));
});

Route::get('/interactive-voice-response-ivr-system', function () {
    $plans = Plan::all();
    $firstPlanId = $plans->first()->id;
    return view('Solutions/By Use Case/IntractiveVoice',compact("firstPlanId","plans"));
});



Route::get('/business-phone-system', function () {
    $plans = Plan::all();
    $firstPlanId = $plans->first()->id;
    return view('Product.businessPhoneSym',compact("firstPlanId","plans")); 
});






// Ressources

// ----------------- Case Studies -----------------------

Route::get('/ebook', function () {
    $firstPlanId =  Plan::all()->first()->id;

    return view('Ressources.CaseStudies.ebook', compact("firstPlanId"));
});

Route::get('/blog/business-guide', function () {
    $firstPlanId =  Plan::all()->first()->id;

    return view('Ressources.CaseStudies.businessGuide', compact("firstPlanId"));
});


// ----------------- Blogs -----------------------

Route::get('/blog', function () {
    $firstPlanId =  Plan::all()->first()->id;

    return view('Ressources.blogs.index', compact("firstPlanId"));
});


Route::get('/blog/category/business', function () {
    $firstPlanId =  Plan::all()->first()->id;

    return view('Ressources.blogs.business', compact("firstPlanId"));
});
Route::get('/blog/category/call-center', function () {
    $firstPlanId =  Plan::all()->first()->id;

    return view('Ressources.blogs.callCenter', compact("firstPlanId"));
});
Route::get('/blog/category/telephony', function () {
    $firstPlanId =  Plan::all()->first()->id;

    return view('Ressources.blogs.telephony', compact("firstPlanId"));
});
Route::get('/blog/category/virtual-numbers', function () {
    $firstPlanId =  Plan::all()->first()->id;

    return view('Ressources.blogs.virtualNumbers', compact("firstPlanId"));
});
Route::get("/business/scale", function(){
    $firstPlanId =  Plan::all()->first()->id;
    return view('Ressources.business.ScaleBussiness', compact("firstPlanId"));
});
Route::get("/business/best-small-business", function(){
    $firstPlanId =  Plan::all()->first()->id;
    return view('Ressources.business.best-small-business', compact("firstPlanId"));
});
Route::get("/business/virtual-phone-number-for-telegram", function(){
    $firstPlanId =  Plan::all()->first()->id;
    return view('Ressources.business.virtual-phone-number-for-telegram', compact("firstPlanId"));
});

Route::get("/business/virtual-number-for-whatsapp", function(){
    $firstPlanId =  Plan::all()->first()->id;
    return view('Ressources.business.virtual-number-for-whatsapp', compact("firstPlanId"));
});
Route::get("/business/what-is-crm-and-types-of-crm-software", function(){
    $firstPlanId =  Plan::all()->first()->id;
    return view('Ressources.business.what-is-crm-and-types-of-crm-software', compact("firstPlanId"));
});
Route::get("/business/productivity-tools", function(){
    $firstPlanId =  Plan::all()->first()->id;
    return view('Ressources.business.productivity-tools', compact("firstPlanId"));

});

// Telephony
Route::get("/telephony/global-phone-number", function(){
    $firstPlanId =  Plan::all()->first()->id;
    return view('Ressources.telephony.global-phone-number', compact("firstPlanId"));

});
Route::get("/telephony/business-phone-line", function(){
    $firstPlanId =  Plan::all()->first()->id;
    return view('Ressources.telephony.business-phone-line', compact("firstPlanId"));

});
Route::get("/telephony/difference-between-warm-transfer-and-cold-transfer", function(){
    $firstPlanId =  Plan::all()->first()->id;
    return view('Ressources.telephony.difference-between-warm-transfer-and-cold-transfer', compact("firstPlanId"));

});
Route::get("/telephony/virtual-business-phone-system", function(){
    $firstPlanId =  Plan::all()->first()->id;
    return view('Ressources.telephony.virtual-business-phone-system', compact("firstPlanId"));

});
Route::get("/telephony/voip-implementation", function(){
    $firstPlanId =  Plan::all()->first()->id;
    return view('Ressources.telephony.voip-implementation', compact("firstPlanId"));

});
Route::get("/telephony/work-from-home-phone-solutions", function(){
    $firstPlanId =  Plan::all()->first()->id;
    return view('Ressources.telephony.work-from-home-phone-solutions', compact("firstPlanId"));

});


// Errors 
Route::fallback(function () {
    $firstPlanId =  Plan::all()->first()->id;

    return view('errors.404', compact("firstPlanId"));
});

// Footer
Route::get("/about", function(){
    $firstPlanId =  Plan::all()->first()->id;
    return view('aboutUs', compact("firstPlanId"));
});


// Payment

Route::get('/checkout/{planId}',[PaymentController::class, 'showPaymentForm'])->name('checkout');






Route::post('payment', [PaymentController::class, 'payment'])->name('payment');
Route::get('cancel',[PaymentController::class, 'cancel'])->name('payment.cancel');
Route::get('/thank-you', [PaymentController::class, 'success'])->name('payment.success');

Route::get('/thank-you', [PaymentController::class, 'successStripe'])->name('success.stripe');
