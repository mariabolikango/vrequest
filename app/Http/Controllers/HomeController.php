<?php
namespace App\Http\Controllers;
use DateTime;
use App\Models\Course;
use App\Models\Demande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        $id = Session::get('authUser')->id;
        $demandes = Demande::where('user_id',$id)->get();
        if(count($demandes)==0){
            $demandes_en_attente = 0;
            $demandes_rejetees = 0;
            $demandes_traitees = 0;
            $demandes_total= 0;
            $demandes_recentes = [];
            $courses_total = 0;
            $courses_en_attente = 0;
            return view('dashboard', compact('demandes_traitees','demandes_en_attente','courses_en_attente','demandes_rejetees','demandes','demandes_recentes','demandes_total','courses_total'));
        }
        foreach($demandes as $demande){
            $demande_id[] = $demande->id;
        }
        $demandes_traitees = Demande::where('user_id',$id)->where('status','1')->get()->count();
        $demandes_en_attente =Demande::where('user_id',$id)->where('status','0')->get()->count();
        $demandes_rejetees = Demande::where('user_id',$id)->where('status','2')->get()->count();
        $demandes_recentes = Demande::where('user_id',$id)->latest()->take(3)->get();
        $courses_en_attente = DB::table('courses')->whereIn('demande_id', $demande_id)->where('status','en_attente')->get()->count();
        $courses_total = DB::table('courses')->whereIn('demande_id', $demande_id)->get()->count();
        $demandes_total = Demande::where('user_id',$id)->get()->count();
        
        $demande_first = Demande::where('user_id',$id)->first();
        $date = new DateTime($demande_first->date);
        $mois = ['janvier','fevrier','mars','avril','mai','juin','juillet','aout','semptembre','octobre','novembre','decembre'];
        $mois_debut = (int)$date->format('m');
        $mois_actuel =( int)date('m');
   for($i = $mois_debut-1; $i < $mois_actuel; $i++){
    $mois_demande [$i]= $mois[$i];
    
    $demande_traite_mois[] = Demande::where('user_id',$id)->where('status','1')->whereMonth('date',$i+1)->count();
    $demande_rejete_mois[] = Demande::where('user_id',$id)->where('status','2')->whereMonth('date',$i+1)->count();
   }

 
   

        
        return view('dashboard', compact('demandes_traitees','demandes_en_attente','courses_en_attente','demandes_rejetees','demandes','demandes_recentes','demandes_total','courses_total','mois_demande','demande_traite_mois','demande_rejete_mois'));
    }
}