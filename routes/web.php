<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Controllers\Backend\VendorProductController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\BackEnd\CouponController;
use App\Http\Controllers\BackEnd\ShippingAreaController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\User\CompareController;
use App\Http\Controllers\User\WishlistController;

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
require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/', [IndexController::class, 'Index']);

Route::middleware('auth')->group(function () {
Route::get('/dashboard', [UserController::class, 'UserDashboard'])->name('dashboard');
Route::post('/user/profile/store', [UserController::class, 'UserProfileStore'])->name('user.profile.store');
Route::get('/user/logout',[UserController::class,'UserDestroy'])->name('user.logout');
Route::get('/user/change/password',[UserController::class,'UserChangePassword'])->name('user.change.password');
Route::post('/user/password/store',[UserController::class,'UserStorePassword'])->name('user.password.store');
});//Group Middleware End


/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Dashboard
Route::middleware(['auth','role:admin'])->group(function () {
Route::get('/admin/dashboard',[AdminController::class,'AdminDashboard'])->name('admin.dashboard');
Route::get('/admin/logout',[AdminController::class,'AdminDestroy'])->name('admin.logout');
Route::get('/admin/profile',[AdminController::class,'AdminProfile'])->name('admin.profile');
Route::post('/admin/profile/store',[AdminController::class,'AdminProfileStore'])->name('admin.profile.store');
Route::get('/admin/change/password',[AdminController::class,'AdminChangePassword'])->name('admin.change.password');
Route::post('/admin/password/store',[AdminController::class,'AdminStorePassword'])->name('admin.password.store');
});

// Vendor Dashboard
Route::middleware(['auth','role:vendor'])->group(function () {
Route::get('/vendor/dashboard',[VendorController::class,'VendorDashboard'])->name('vendor.dashboard');
Route::get('/vendor/logout',[VendorController::class,'VendorDestroy'])->name('vendor.logout');
Route::get('/vendor/profile',[VendorController::class,'VendorProfile'])->name('vendor.profile');
Route::post('/vendor/profile/store',[VendorController::class,'VendorProfileStore'])->name('vendor.profile.store');
Route::get('/vendor/change/password',[VendorController::class,'VendorChangePassword'])->name('vendor.change.password');
Route::post('/vendor/password/store',[VendorController::class,'VendorStorePassword'])->name('vendor.password.store');


Route::controller(VendorProductController::class)->group(function(){
    //Vendor add product all routes
    Route::get('/vendor/all/product','VendorAllProduct')->name('vendor.all.product');
    Route::get('/vendor/add/product','VendorAddProduct')->name('vendor.add.product');
    Route::get('/vendor/subcategory/ajax/{category_id}','VendorGetSubCategory');
    Route::post('/vendor/store/product','VendorStoreProduct')->name('vendor.store.product');
    Route::get('/vendor/edit/product/{id}','VendorEditProduct')->name('vendor.edit.product');
    Route::post('/vendor/update/product','VendorUpdateProduct')->name('vendor.update.product');
    Route::post('/vendor/update/product/thumbnail' , 'VendorUpdateProductThumbnail')->name('vendor.update.product.thumbnail');
    Route::post('/vendor/update/product/multiimage' , 'VendorUpdateProductMultiimage')->name('vendor.update.product.multiimage');
    Route::get('/vendor/product/multiimg/delete/{id}' , 'VendorMulitImageDelete')->name('vendor.product.multiimg.delete');
    Route::get('/vendor/product/inactive/{id}' , 'VendorProductInactive')->name('vendor.product.inactive');
    Route::get('/vendor/product/active/{id}' , 'VendorProductActive')->name('vendor.product.active');
    Route::get('/vendor/delete/product/{id}','VendorDeleteProduct')->name('vendor.delete.product');
});
});

Route::get('/admin/login',[AdminController::class,'AdminLogin'])->name('admin.login')->middleware(RedirectIfAuthenticated::class);
Route::get('/vendor/login',[VendorController::class,'VendorLogin'])->name('vendor.login')->middleware(RedirectIfAuthenticated::class);
Route::get('/become/vendor',[VendorController::class,'BecomeVendor'])->name('become.vendor');
Route::post('/vendor/register',[VendorController::class,'VendorRegister'])->name('vendor.register');


Route::middleware(['auth','role:admin'])->group(function () {
Route::controller(BrandController::class)->group(function(){
    //brand all routes
    Route::get('/all/brand','AllBrand')->name('all.brand');
    Route::get('/add/brand','AddBrand')->name('add.brand');
    Route::post('/store/brand','StoreBrand')->name('store.brand');
    Route::get('/edit/brand/{id}','EditBrand')->name('edit.brand');
    Route::post('/update/brand','UpdateBrand')->name('update.brand');
    Route::get('/delete/brand/{id}','DeleteBrand')->name('delete.brand');
});



Route::controller(CategoryController::class)->group(function(){
    //category all routes
    Route::get('/all/category','AllCategory')->name('all.category');
    Route::get('/add/category','AddCategory')->name('add.category');
    Route::post('/store/category','StoreCategory')->name('store.category');
    Route::get('/edit/category/{id}','EditCategory')->name('edit.category');
    Route::post('/update/category','UpdateCategory')->name('update.category');
    Route::get('/delete/category/{id}','DeleteCategory')->name('delete.category');
});


    
Route::controller(SubCategoryController::class)->group(function(){
    //subcategory all routes
    Route::get('/all/subcategory','AllSubCategory')->name('all.subcategory');
    Route::get('/add/subcategory','AddSubCategory')->name('add.subcategory');
    Route::post('/store/subcategory','StoreSubCategory')->name('store.subcategory');
    Route::get('/edit/subcategory/{id}','EditSubCategory')->name('edit.subcategory');
    Route::post('/update/subcategory','UpdateSubCategory')->name('update.subcategory');
    Route::get('/delete/subcategory/{id}','DeleteSubCategory')->name('delete.subcategory');
    Route::get('/subcategory/ajax/{category_id}','GetSubCategory');
});


Route::controller(AdminController::class)->group(function(){
    //vendor active/inactive
    Route::get('/inactive/vendor','InactiveVendor')->name('inactive.vendor');
    Route::get('/active/vendor','ActiveVendor')->name('active.vendor');
    Route::get('/inactive/vendor/details/{id}','InactiveVendorDetails')->name('inactive.vendor.details');
    Route::get('/active/vendor/details/{id}','ActiveVendorDetails')->name('active.vendor.details');
    Route::post('/active/vendor/approve','ActiveVendorApprove')->name('active.vendor.approve');
    Route::post('/inactive/vendor/approve','InactiveVendorApprove')->name('inactive.vendor.approve');
});

Route::controller(ProductController::class)->group(function(){
    //product all routes
    Route::get('/all/product','AllProduct')->name('all.product');
    Route::get('/add/product','AddProduct')->name('add.product');
    Route::post('/store/product','StoreProduct')->name('store.product');
    Route::get('/edit/product/{id}','EditProduct')->name('edit.product');
    Route::post('/update/product','UpdateProduct')->name('update.product');
    Route::post('/update/product/thumbnail' , 'UpdateProductThumbnail')->name('update.product.thumbnail');
    Route::post('/update/product/multiimage' , 'UpdateProductMultiimage')->name('update.product.multiimage');
    Route::get('/product/multiimg/delete/{id}' , 'MulitImageDelete')->name('product.multiimg.delete');
    Route::get('/product/inactive/{id}' , 'ProductInactive')->name('product.inactive');
    Route::get('/product/active/{id}' , 'ProductActive')->name('product.active');
    Route::get('/delete/product/{id}','DeleteProduct')->name('delete.product');
});

Route::controller(SliderController::class)->group(function(){
    //slider all routes
    Route::get('/all/slider','AllSlider')->name('all.slider');
    Route::get('/add/slider','AddSlider')->name('add.slider');
    Route::post('/store/slider','StoreSlider')->name('store.slider');
    Route::get('/edit/slider/{id}','EditSlider')->name('edit.slider');
    Route::post('/update/slider','UpdateSlider')->name('update.slider');
    Route::get('/delete/slider/{id}','DeleteSlider')->name('delete.slider');
});

Route::controller(BannerController::class)->group(function(){
    //banner all routes
    Route::get('/all/banner','AllBanner')->name('all.banner');
    Route::get('/add/banner','AddBanner')->name('add.banner');
    Route::post('/store/banner','StoreBanner')->name('store.banner');
    Route::get('/edit/banner/{id}','EditBanner')->name('edit.banner');
    Route::post('/update/banner','UpdateBanner')->name('update.banner');
    Route::get('/delete/banner/{id}','DeleteBanner')->name('delete.banner');
});

Route::controller(CouponController::class)->group(function(){
    //Coupon all routes
    Route::get('/all/coupon','AllCoupon')->name('all.coupon');
    Route::get('/add/coupon','AddCoupon')->name('add.coupon');
    Route::post('/store/coupon','StoreCoupon')->name('store.coupon');
    Route::get('/edit/coupon/{id}','EditCoupon')->name('edit.coupon');
    Route::post('/update/coupon','UpdateCoupon')->name('update.coupon');
    Route::get('/delete/coupon/{id}','DeleteCoupon')->name('delete.coupon');
});


Route::controller(ShippingAreaController::class)->group(function(){
    //Division all routes
    Route::get('/all/division','AllDivision')->name('all.division');
    Route::get('/add/division','AddDivision')->name('add.division');
    Route::post('/store/division','StoreDivision')->name('store.division');
    Route::get('/edit/division/{id}','EditDivision')->name('edit.division');
    Route::post('/update/division','UpdateDivision')->name('update.division');
    Route::get('/delete/division/{id}','DeleteDivision')->name('delete.division');
    
});

Route::controller(ShippingAreaController::class)->group(function(){
    //District all routes
    Route::get('/all/district','AllDistrict')->name('all.district');
  
    Route::get('/add/district','AddDistrict')->name('add.district');
    Route::post('/store/district','StoreDistrict')->name('store.district');
    Route::get('/edit/district/{id}','EditDistrict')->name('edit.district');
    Route::post('/update/district','UpdateDistrict')->name('update.district');
    Route::get('/delete/district/{id}','DeleteDistrict')->name('delete.district');
    
});

Route::controller(ShippingAreaController::class)->group(function(){
    //State all routes
    Route::get('/all/state','AllState')->name('all.state');
   
    Route::get('/add/state','AddState')->name('add.state');
    Route::post('/store/state','StoreState')->name('store.state');
    Route::get('/edit/state/{id}','EditState')->name('edit.state');
    Route::post('/update/state','UpdateState')->name('update.state');
    Route::get('/delete/state/{id}','DeleteState')->name('delete.state');
    Route::get('/district/ajax/{division_id}','GetDistrict');
    
});
});//Admin End Middleware


//Frontend product Details All Route
       
Route::get('/product/details/{id}/{slug}',[IndexController::class,'ProductDetails']);
Route::get('/vendor/details/{id}', [IndexController::class, 'VendorDetails'])->name('vendor.details');
Route::get('/vendor/all', [IndexController::class, 'VendorAll'])->name('vendor.all');

Route::get('/product/category/{id}/{slug}',[IndexController::class,'CatWiseProduct']);
Route::get('/product/subcategory/{id}/{slug}',[IndexController::class,'SubCatWiseProduct']);

//product view modal with  Ajax

Route::get('/product/view/modal/{id}',[IndexController::class,'ProductViewAjax']);

//Add to cart store data

Route::post('/cart/data/store/{id}',[CartController::class,'AddToCart']);

//Get Data from Mini Cart
Route::get('/product/mini/cart/',[CartController::class,'AddMiniCart']);

//Remove data from Mini cart
Route::get('/minicart/product/remove/{rowId}',[CartController::class,'RemoveMiniCart']);



//Add to cart store data for product details page

Route::post('/dcart/data/store/{id}',[CartController::class,'AddToCartDetails']);

//Add to Wishlist
Route::post('/add-to-wishlist/{product_id}',[WishlistController::class,'AddToWishList']);

//User All Route
Route::middleware(['auth','role:user'])->group(function () {

    //all Wishlist route
Route::controller(WishlistController::class)->group(function(){
    Route::get('/wishlist','AllWishList')->name('wishlist');
    Route::get('/get-wishlist-product','GetWishlistProduct');
    Route::get('/wishlist-remove/{id}','WishlistRemove');
    
});

//all compare route
Route::controller(CompareController::class)->group(function(){
    Route::get('/compare','AllCompare')->name('compare');
    Route::get('get-compare-product','GetCompareProduct');
    Route::get('/compare-remove/{id}','CompareRemove');
    
});

//all mycart route
Route::controller(CartController::class)->group(function(){
    Route::get('/mycart','MyCart')->name('mycart');
    Route::get('/get-cart-product','GetCartProduct');
    Route::get('/cart-remove/{id}','CartRemove');
    Route::get('/cart-decrement/{rowId}' , 'CartDecrement');
    Route::get('/cart-increment/{rowId}' , 'CartIncrement');
});
});

//Add to compare
Route::post('/add-to-compare/{product_id}',[CompareController::class,'AddToCompare']);


//Frontend coupon Option
Route::post('/coupon-apply',[CartController::class,'CouponApply']);

Route::get('/coupon-calculation',[CartController::class,'CouponCalculation']);
Route::get('/coupon-remove', [CartController::class, 'CouponRemove']);