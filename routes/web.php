<?php
use Illuminate\Support\Facades\Route;
use App\Models\utilisateur;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\Auth;
use GuzzleHttp\Psr7\Request;


Route::get('/', function () {
    return view('accueil');
});

Route::get('/postuler', function () {
    return view('postuler');
});

Route::get('/visiteur', function () {
    return view('visiteur');
});

//Route::post('/visiteur', 'UtilisateurController@user');
//insertion des donnees en base de donnee
Route::post('/visiteur', function () {
   
   request()->validate([
        'id'=>[''],
        'name'=>['required'],
        'email'=>['required','email'],
        'password'=>['required','min:5'],

    ]);
    
    $nom= new utilisateur;
         
         $nom->name=request('name');
         $nom->email=request('email');
         $nom->password=bcrypt(request('password'));


        $nom->save();
         return "nous avons recus votre email :".request('email')." votre mot de pass est :".request('password')." votre nom est :".request('name')." et votre id= ".$nom->id;
});

//affichage des donnees a l'ecran
Route::get('/affichage', function () {//apres avoir entrer la route /affichage dans l'URL,
    $a=utilisateur::all();//on utilise utilisateur du model utilisateur.php qui a acces a tous les infos de la BD, va donc tous les recuperer et les introduir dans la variable $a
    return view('affichage',['a'=>$a]);//coe une vue na jamais acces au variable contenue dans une route alor ns alons introduir ds return ['a'=>$a] 
});

//suppression dun utilisateur dans la base de donnee
/*Route::delete('/supression/{id}', function () {
    $c=utilisateur::find($id);
    if($c){
        $c->delete();
        return response()->json(['message'=>'utilisateur supprimer avec succes']);
    }else{
        return response()->json(['message'=>'utilisateur non trouver'],404);
    }
});*/

Route::get('/supression/{id}', [UtilisateurController::class, 'sup']);

/*Route::get('/a', function () {
    return view('SupUser');
});*/


Route::get('/modifier/{id}',[UtilisateurController::class, 'modify']);

Route::post('/traitementmodifier', function () {
    $l=utilisateur::find(request('id'));//ici on aurai pu faire find($id) mai comme on a pa la variable en parametre on est obliger de recuperer id a traver /modifier/{id} avec request($id)

    $l->name=request('name');
         $l->email=request('email');
         $l->password=bcrypt(request('password'));


        $l->save();
    
        return redirect('/affichage')->with('status',"L'utilisateur a bien ete modifier");
});


//recherche dans la base de donner
Route::get('/recherche',[UtilisateurController::class, 'cherche'])->name('recherche');// avec ou sans ->name('recherche') a la fin le code marche toujour

/*Route::get('/connecter', function () {
    return view('connecter');
});*/

/*Route::post('/connecter', function () {

    request()->validate([
        'id'=>[''],
        'name'=>['required'],
        'email'=>['required','email'],
        'password'=>['required','min:5'],

    ]);
    
    $a=request()->validate();
    Auth::attempt($a);
    Auth::loginUsingId();

    return view('vente');
});*/









//Auth::routes();

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'loget'])->name('login');
Route::post('/connecte', [App\Http\Controllers\Auth\LoginController::class, 'logpost'])->name('connecte');
Route::get('/deconnexion', [App\Http\Controllers\Auth\LoginController::class, 'decon'])->name('deconnexion');
Route::get('/vente', function () {
    return view('vente');
});

Route::get('/dashboard', function () {
    return view('vente');
});

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
