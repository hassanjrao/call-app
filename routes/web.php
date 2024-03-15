<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PhoneNumberController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\UserController;
use App\Models\Plan;
use App\Models\User;
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
        return view('login');
    });
});




//Route::middleware(['auth'])->group(function () {
//
//
//
//    //Admin
//
//    Route::resource('users', UserController::class);
//    Route::resource('plans', PlanController::class);
//
//
//    //Both
//    Route::put('/user/profile/update', [UserController::class, 'updateProfile'])->name('users.updateProfile');
//    Route::get('/user/profile', [UserController::class, 'profileShow'])->name('user.profile');
//    Route::get('/user/profile/edit', [UserController::class, 'editProfile'])->name('profile.edit');
//    Route::get('/dashboard', function () {
//        $newOrdersCount = User::count(); // Assuming you have an Order model
//        $bounceRate = 53; // This would come from your analytics tool or database
//        $userRegistrationsCount = User::count();
//
//        return view('dashboard.index', compact('newOrdersCount', 'bounceRate', 'userRegistrationsCount')); // Assuming you have an sms.blade.php file under dashboard directory
//    })->name('dashboard');
//    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
//
//    //Customer
//    Route::resource('phone', PhoneNumberController::class);
//    Route::post('/phone/fetch-numbers', [PhoneNumberController::class, 'fetchAvailableNumbers'])->name('phone.fetch-numbers');
//    Route::resource('billing', PhoneNumberController::class);
//
//});

Route::middleware(['auth'])->group(function () {

    // Admin Routes
    Route::middleware(['admin'])->group(function () {
        Route::resource('users', UserController::class);
        Route::resource('plans', PlanController::class);
    });

    // Customer Routes
    Route::middleware(['customer'])->group(function () {
        Route::resource('phone', PhoneNumberController::class);
        Route::get('phone/sms',[PhoneNumberController::class, 'send'])->name('sms');
        Route::post('/phone/fetch-numbers', [PhoneNumberController::class, 'fetchAvailableNumbers'])->name('phone.fetch-numbers');
        Route::post('/phone/send-message', [PhoneNumberController::class, 'sendMessage'])->name('phone.send-message');

    });

    // Routes for Both Admin and Customer
    Route::put('/user/profile/update', [UserController::class, 'updateProfile'])->name('users.updateProfile');
    Route::get('/user/profile', [UserController::class, 'profileShow'])->name('user.profile');
    Route::get('/user/profile/edit', [UserController::class, 'editProfile'])->name('profile.edit');
    Route::get('/dashboard', function () {
        $newOrdersCount = User::count();
        $bounceRate = 53;
        $userRegistrationsCount = User::count();

        return view('dashboard.index', compact('newOrdersCount', 'bounceRate', 'userRegistrationsCount')); // Assuming you have an sms.blade.php file under dashboard directory
    })->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});




Route::get('/', function () {
    return view('home');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/auto-rotate', function () {
    return view('Product/autoRotate');
});

Route::get('/machine-detection', function () {
    return view('Product/machine');
});

Route::get('/power-dialer', function () {
    return view('Product/powerDialer');
});

Route::get('/sticky-agent', function () {
    return view('Product/stickyAgent');
});

Route::get('/pricing', function () {
    $plans = Plan::all();
    return view('pricing',compact("plans"));
});

Route::get('/speed-to-dial', function () {
    return view('Product/speed');
});

Route::get('/smart-did-routing', function () {
    return view('Product/smartDid');
});

Route::get('/sms', function () {
    return view('Product/sms');
});

Route::get('/voip-for-market-research', function () {
    return view('Solutions/industry/VoIPMarket');
});

Route::get('/call-centre-solution-for-software-and-technology', function () {
    return view('Solutions/industry/software');
});

Route::get('/call-center-software-solution', function () {
    return view('Solutions/By Need/callCenter');
});

Route::get('/voip-system-for-real-estate', function () {
    return view('Solutions/industry/realEstate');
});


Route::get('/support-contact-center', function () {
    return view('Solutions/By Use Case/support');
});

// Integration

Route::get('/custom-crm-integration', function () {
    return view('Integration/CustomCRM');
});
Route::get('/salesforce-integration', function () {
    return view('Integration/SalesForce');
});

Route::get('/shopify-integration', function () {
    return view('Integration/Shopify');
});

Route::get('/slack-integration', function () {
    return view('Integration/Slack');
});

Route::get('/zendesk-integration', function () {
    return view('Integration/Zendesk');
});

Route::get('/piperdrive-integration', function () {
    return view('Integration/Piperdrive');
});

Route::get('/nocrm-integration', function () {
    return view('Integration/noCRM');
});

Route::get('/zoho-crm-integration', function () {
    return view('Integration/Zoho');
});

Route::get('/zapier-integration', function () {
    return view('Integration/Zapier');
});

Route::get('/hubspot-integration', function () {
    return view('Integration/Hubspot');
});

Route::get('/activecampaign-integration', function () {
    return view('Integration/Active');
});

Route::get('/microsoft-team-integration', function () {
    return view('Integration/Teams');
});

Route::get('/intercom-integration', function () {
    return view('Integration/Intercom');
});

Route::get('/freshdesk-integration', function () {
    return view('Integration/Freshdesk');
});

Route::get('/outreach-integration', function () {
    return view('Integration/outreach');
});

// End Integration


Route::get('/office-phone-system', function () {
    return view('Solutions/By Need/office');
});

Route::get('/voice-broadcasting', function () {
    return view('Solutions/By Need/voiceBroadcasting');
});
Route::get('/call-analytics', function () {
    return view('Product\callAnalytics');
});
Route::get('/call-monitoring', function () {
    return view('Product\callMonitoring');
});
Route::get('/predictive-dialer', function () {
    return view('Solutions/By Need/predictiveDialer');
});
Route::get('/virtual-phone-number', function () {
    return view('Solutions/By Need/virtualPhoneNumber');
});

// Route::get('/pay', function () {
//     return view('pay');
// });

Route::get('/call-barging-feature', function () {
    return view('Solutions/By Use Case/CallBarging');
});
Route::get('/interactive-voice-response-ivr-system', function () {
    return view('Solutions/By Use Case/IntractiveVoice');
});



Route::get('/business-phone-system', function () {
    return view('Product.businessPhoneSym');
});



Route::get('/schedule-a-demo', function () {
    return view('demo');
});


// Ressources

// ----------------- Case Studies -----------------------

Route::get('/ebook', function () {
    return view('Ressources.CaseStudies.ebook');
});

Route::get('/blog/business-guide', function () {
    return view('Ressources.CaseStudies.businessGuide');
});


// ----------------- Blogs -----------------------

Route::get('/blog', function () {
    return view('Ressources.blogs.index');
});


Route::get('/blog/category/business', function () {
    return view('Ressources.blogs.business');
});
Route::get('/blog/category/call-center', function () {
    return view('Ressources.blogs.callCenter');
});
Route::get('/blog/category/telephony', function () {
    return view('Ressources.blogs.telephony');
});
Route::get('/blog/category/virtual-numbers', function () {
    return view('Ressources.blogs.virtualNumbers');
});





// Errors 
Route::fallback(function () {
    return view('errors.404');
});

// Footer
Route::get("/about", function(){
    return view('aboutUs');
});


// Payment

Route::get('/checkout/{planId}',[PaymentController::class, 'showPaymentForm'])->name('checkout');



Route::post('payment', [PaymentController::class, 'processPayment'])->name('payment');
Route::get('cancel',[PaymentController::class, 'cancel'])->name('payment.cancel');
Route::get('/thank-you', [PaymentController::class, 'thankYou'])->name('thankYou');
Route::post('/success', [PaymentController::class, 'success'])->name('payment.success');


Route::post('/payment/stripe/{planId}', [PaymentController::class, 'stripePost'])->name('payment.stripe');
Route::post('/payment/stripe/handle', [PaymentController::class, 'handleStripePayment'])->name('payment.stripe.handle');


//Route::get('/thank-you', [PaymentController::class, 'successStripe'])->name('success.stripe');


//Role User


Route::get('/user/billing',[PaymentController::class, 'showPaymentForm'])->name('billing');
