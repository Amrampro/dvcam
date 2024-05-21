<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Alerts;
use App\Models\User;
use App\Models\Post;
use App\Models\Refuge;
use App\Models\Enquete;
use App\Models\Therapy;
use Illuminate\Support\Facades\Hash;
use App\Models\Regions;
use App\Models\Team;
use App\Models\Gallery;

use PDF;
class ApkController extends Controller
{

    public function dashboard()
    {
        $users = User::All();
        $regions = Regions::All();
        $alerts = Alerts::All();
        $tUsers = count($users);
        return view('user.index', [
            'tUsers' => $tUsers,
            'users' => $users,
            'regions' => $regions,
            'alerts' => $alerts
        ]);
    }

    public function users_see()
    {
        $users = User::All();
        return view('user.users.all', [
            'users' => $users
        ]);
    }

    public function user_del($id)
    {
        if (auth()->user()->role == "admin") {
            $user = User::where('id', $id)->first();
            if ($user->role == "admin") {
                return redirect('apk/users')->with('error', 'Impossible de supprimer un admin');
            } else {
                $user = User::where('id', $id)->delete();
                $users = User::All();
                return view('user/users/all', [
                    'users' => $users
                ]);
            }
        }
    }

    public function alerts_me()
    {
        $regions = Regions::All();
        $user_id = auth()->user()->id;
        $alerts = Alerts::where("user_id", $user_id)->get();
        return view('user.alerts.me', [
            'alerts' => $alerts,
            'regions'=>$regions
        ]);
    }

    public function alerts_all()
    {
        $regions = Regions::All();
        $alerts = Alerts::orderBy('id', 'desc')->get();
        $users = User::All();
        return view('user.alerts.all', [
            'alerts' => $alerts,
            'users' => $users,
            'regions'=>$regions
        ]);
    }

    public function alerts_add()
    {
        $regions = Regions::All();
        return view('user.alerts.add', ['regions'=>$regions]);
    }

    public function alerts_edit($id){
        $regions = Regions::All();
        $alert = Alerts::find($id);
        $users = User::All();
        return view('user.alerts.edit', [
            'alert' => $alert,
            'users' => $users,
            'regions'=>$regions
        ]);
    }

    public function alert_update(Request $request, $id)
{
    $request->validate([
        'level' => 'required',
        'place' => 'required',
        'author' => 'required',
        'type' => 'required',
        'description' => 'required'
    ]);

    // Fetch the alert you want to update
    $alert = Alerts::find($id);

    if (!$alert) {
        return redirect('apk/alerts')->with('error', 'Alert not found');
    }

    // Update the fields
    $alert->level = $request->level;
    $alert->region = $request->region;
    $alert->place = $request->place;
    $alert->type = $request->type;
    $alert->author = $request->author;
    $alert->description = $request->description;

    // Save the changes
    $save = $alert->save();

    if ($save) {
        return redirect('apk/alerts/edit/'.$id)->with('success', 'Alert updated successfully');
    } else {
        return redirect('apk/alerts/edit/'.$id)->with('error', 'Failed to update alert');
    }
}


    public function alert_add(Request $request)
    {
        $user_id = auth()->user()->id;
        $request->validate([
            'level' => 'required',
            'place' => 'required',
            'author' => 'required',
            'type' => 'required',
            'description' => 'required'
        ]);

        $alerts = new Alerts;
        $alerts->user_id = $user_id;
        $alerts->region = $request->region;
        $alerts->level = $request->level;
        $alerts->place = $request->place;
        $alerts->type = $request->type;
        $alerts->author = $request->author;
        $alerts->description = $request->description;
        $save = $alerts->save();

        if ($save)
            return redirect('apk/alerts/add')->with('success', 'Message Envoyé !.');
        else
            return redirect('apk/alerts/add')->with('error', 'Message non Envoyé');
    }

    public function therapy_all()
    {
        $theraps = therapy::orderBy('id', 'desc')->get();
        $users = User::All();
        return view('user.therapy.all', [
            'theraps' => $theraps,
            'users' => $users
        ]);
    }

    public function therapy_add()
    {
        return view('user.therapy.add');
    }

    public function therapy_me()
    {
        $user_id = auth()->user()->id;
        $theraps = Therapy::where("user_id", $user_id)->get();
        return view('user.therapy.me', [
            'theraps' => $theraps
        ]);
    }

    public function therapy_store(Request $request)
    {
        $user_id = auth()->user()->id;

        $request->validate([
            'reason' => 'required',
            'manage' => 'required',
            'already_therap' => 'required',
            'suicide' => 'required',
            'impact' => 'required',
            'tied' => 'required',
            'enfance' => 'required',
            'expectations' => 'required',
            'sexual_orientation' => 'required',
            'experiences' => 'required',
            'conscience' => 'required',
            'revelation' => 'required',
            'situation' => 'required',
            'divulgation' => 'required',
            'perception' => 'required',
            'stigmatisation' => 'required'
        ]);

        $therap = new Therapy;
        $therap->user_id = $user_id;
        $therap->reason = $request->reason;
        $therap->manage = $request->manage;
        $therap->already_therap = $request->already_therap;
        $therap->suicide = $request->suicide;
        $therap->impact = $request->impact;
        $therap->tied = $request->tied;
        $therap->enfance = $request->enfance;
        $therap->expectations = $request->expectations;
        $therap->sexual_orientation = $request->sexual_orientation;
        $therap->experiences = $request->experiences;
        $therap->conscience = $request->conscience;
        $therap->revelation = $request->revelation;
        $therap->situation = $request->situation;
        $therap->divulgation = $request->divulgation;
        $therap->perception = $request->perception;
        $therap->stigmatisation = $request->stigmatisation;
        $save = $therap->save();

        if ($save)
            return redirect('apk/therapy/add')->with('success', 'Message Envoyé !.');
        else
            return redirect('apk/therapy/add')->with('error', 'Message non Envoyé');
    }

    public function posts_add()
    {
        return view('user.posts.add');
    }

    public function posts_all()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        $users = User::All();
        return view('user.posts.all', [
            'posts' => $posts,
            'users' => $users
        ]);
    }

    public function posts_me()
    {
        $user_id = auth()->user()->id;
        $posts = Post::orderBy('id', 'desc')->where('user_id', $user_id)->get();
        $users = User::All();
        return view('user.posts.all', [
            'posts' => $posts,
            'users' => $users
        ]);
    }

    public function post_add(Request $request)
    {
        $user_id = auth()->user()->id;

        $request->validate([
            'comment' => 'required',
        ]);
        $tag = $request->tags;
        if (empty($tag)) {
            $tag = "dvcam";
        }

        $new_string = bin2hex(random_bytes(10));

        // die('Value is :' . $new_string);

        // Post image
        if ($request->hasFile('post_image')) {
            $image = $request->file('post_image');
            $reFullImage = 'U' . $user_id . $new_string . '.' . $image->getClientOriginalExtension();
            $dest = public_path('/storage/img_blog/full_img');
            $image->move($dest, $reFullImage);
        } else {
            $reFullImage = 'na';
        }


        $posts = new Post;
        $posts->user_id = $user_id;
        $posts->comment = $request->comment;
        $posts->image = $reFullImage;
        $posts->tags = $tag;
        $save = $posts->save();

        if ($save)
            return redirect('apk/posts/add')->with('success', 'Message Envoyé !.');
        else
            return redirect('apk/posts/add')->with('error', 'Message non Envoyé');
    }

    public function post_del($id)
    {
        $post = Post::where('id', $id)->delete();
        $posts = Post::orderBy('id', 'desc')->get();
        $users = User::All();
        return view('user.posts.all', [
            'posts' => $posts,
            'users' => $users
        ]);
    }

    public function askref_me()
    {
        $user_id = auth()->user()->id;
        $refuges = Refuge::where("user_id", $user_id)->get();
        return view('user.askref.me', [
            'refuges' => $refuges
        ]);
    }

    public function askref_all()
    {
        $refuges = Refuge::orderBy('id', 'desc')->get();
        $users = User::All();
        return view('user.askref.all', [
            'refuges' => $refuges,
            'users' => $users
        ]);
    }

    public function askref_add()
    {
        return view('user.askref.add');
    }

    public function askref_edit($id){
        $refuge = Refuge::find($id);
        $users = User::All();
        return view('user.askref.edit', [
            'refuge' => $refuge,
            'users' => $users
        ]);
    }

    public function askref_update(Request $request, $id)
{
    $user_id = auth()->user()->id;
    
    $request->validate([
        'adult' => 'required',
        'sleeping_at' => 'required',
        'gender' => 'required',
        'employment' => 'required',
        'income' => 'required',
        'trained' => 'required',
        'training_time' => 'required',
        'apport' => 'required'
    ]);

    $training = $request->training ? $request->training : 'N/A';

    // Fetch the askref record you want to update
    $refuge = Refuge::find($id);

    if (!$refuge) {
        return redirect('apk/askref/add')->with('error', 'Refuge record not found');
    }

    // Update the fields
    $refuge->user_id = $user_id;
    $refuge->adult = $request->adult;
    $refuge->sleeping_at = $request->sleeping_at;
    $refuge->gender = $request->gender;
    $refuge->employment = $request->employment;
    $refuge->income = $request->income;
    $refuge->trained = $request->trained;
    $refuge->training = $training;
    $refuge->training_time = $request->training_time;
    $refuge->apport = $request->apport;

    // Save the changes
    $save = $refuge->save();

    if ($save) {
        return redirect('refuge/edit/'.$id)->with('success', 'Refuge record updated successfully');
    } else {
        return redirect('refuge/edit/'.$id)->with('error', 'Failed to update refuge record');
    }
}


    public function askref_add_post(Request $request)
    {
        $user_id = auth()->user()->id;
        $request->validate([
            'adult' => 'required',
            'sleeping_at' => 'required',
            'gender' => 'required',
            'employment' => 'required',
            'income' => 'required',
            'trained' => 'required',
            'training_time' => 'required',
            'apport' => 'required'
        ]);

        $training = $request->training;
        if ($training == '') {
            $training = 'N/A';
        }

        $refuge = new Refuge;
        $refuge->user_id = $user_id;
        $refuge->adult = $request->adult;
        $refuge->sleeping_at = $request->sleeping_at;
        $refuge->gender = $request->gender;
        $refuge->employment = $request->employment;
        $refuge->income = $request->income;
        $refuge->trained = $request->trained;
        $refuge->training = $training;
        $refuge->training_time = $request->training_time;
        $refuge->apport = $request->apport;
        $save = $refuge->save();

        if ($save)
            return redirect('apk/askref/add')->with('success', 'Message Envoyé !.');
        else
            return redirect('apk/askref/add')->with('error', 'Message non Envoyé');
    }

    public function refuge_del($id, $page)
    {
        $refuge = Refuge::where('id', $id)->delete();
        if ($page == "single") {
            $user_id = auth()->user()->id;
            $refuges = Refuge::where("user_id", $user_id)->get();
            return view('user.askref.me', [
                'refuges' => $refuges
            ]);
        } else {
            $refuges = Refuge::orderBy('id', 'desc')->get();
            $users = User::All();
            return view('user.askref.all', [
                'refuges' => $refuges,
                'users' => $users
            ]);
        }
    }

    // Enquetes
    // public function askref_me()
    // {
    //     $user_id = auth()->user()->id;
    //     $refuges = Refuge::where("user_id", $user_id)->get();
    //     return view('user.askref.me', [
    //         'refuges' => $refuges
    //     ]);
    // }

    public function enquetes_all()
    {
        // $enquetes = Enquete::orderBy('id', 'desc')->get();
        $enquetes = Enquete::orderBy('date_cover', 'asc')->get();
        $users = User::All();
        return view('user.enquetes.all', [
            'enquetes' => $enquetes,
            'users' => $users
        ]);
    }

    public function enquetes_add()
    {
        $code = Str::random(10);
        return view('user.enquetes.add', [
            'code' => $code
        ]);
    }

    public function enquetes_me()
    {
        $user_id = auth()->user()->id;
        $enquetes = Enquete::orderBy('id', 'desc')->where('user_id', $user_id)->get();
        return view('user.enquetes.me', [
            'enquetes' => $enquetes
        ]);
    }

    public function enquete_single($id)
    {
        $enquete = Enquete::find($id);
        return view('user.enquetes.details', [
            'enquete' => $enquete
        ]);
    }

    public function enquete_edit($id){
        $enquete = Enquete::find($id);
        return view('user.enquetes.edit', [
            'enquete' => $enquete
        ]);
    }

    public function enquetes_update(Request $request, $id)
{
    
    $request->validate([
        'details' => 'required',
        'thing_done' => 'required',
        'thought' => 'required',
        'waiting' => 'required',
        'thing_to_be_done' => 'required',
        'recieved_service' => 'required',
        'thought_service' => 'required',
        'thought_survivor' => 'required',
    ]);

    // Fetch the enquête you want to update
    $post = Enquete::find($id);

    if (!$post) {
        return redirect('/apk/enquetes')->with('error', 'Enquête not found');
    }

    // Update the fields
    $post->code = $request->code;
        $post->date_cover = $request->date_cover;
        $post->violence_type = $request->violence_type;
        $post->nature = $request->nature;
        $post->identity = $request->identity;
        $post->orientation = $request->orientation;
        $post->age = $request->age;
        $post->let = $request->let;
        $post->occupation = $request->occupation;
        $post->country = $request->country;
        $post->town = $request->town;
        $post->quater = $request->quater;
        $post->date_incident = $request->date_incident;
        $post->place_incident = $request->place_incident;
        $post->source = $request->source;
        $post->collect_mode = $request->collect_mode;
        $post->passing_state = $request->passing_state;
        $post->author = $request->author;
        $post->refered_for = $request->refered_for;
        $post->organisation = $request->organisation;
        $post->details = $request->details;
        $post->thing_done = $request->thing_done;
        $post->thought = $request->thought;
        $post->waiting = $request->waiting;
        $post->thing_to_be_done = $request->thing_to_be_done;
        $post->recieved_service = $request->recieved_service;
        $post->thought_service = $request->thought_service;
        $post->thought_survivor = $request->thought_survivor;
    // Update other fields similarly

    // Save the changes
    $save = $post->save();

    if ($save) {
        return redirect('enquete/edit/'.$id)->with('success', 'Enquête updated successfully');
    } else {
        return redirect('enquete/edit/'.$id)->with('error', 'Failed to update enquête');
    }
}


    public function enquetes_add_post(Request $request)
    {
        $code = Str::random(10);
        $user_id = auth()->user()->id;
        $request->validate([
            'details' => 'required',
            'thing_done' => 'required',
            'thought' => 'required',
            'waiting' => 'required',
            'thing_to_be_done' => 'required',
            'recieved_service' => 'required',
            'thought_service' => 'required',
            'thought_survivor' => 'required',
        ]);

        $post = new Enquete;
        $post->user_id = $user_id;
        $post->code = $request->code;
        $post->date_cover = $request->date_cover;
        $post->violence_type = $request->violence_type;
        $post->nature = $request->nature;
        $post->identity = $request->identity;
        $post->orientation = $request->orientation;
        $post->age = $request->age;
        $post->let = $request->let;
        $post->occupation = $request->occupation;
        $post->country = $request->country;
        $post->town = $request->town;
        $post->quater = $request->quater;
        $post->date_incident = $request->date_incident;
        $post->place_incident = $request->place_incident;
        $post->source = $request->source;
        $post->collect_mode = $request->collect_mode;
        $post->passing_state = $request->passing_state;
        $post->author = $request->author;
        $post->refered_for = $request->refered_for;
        $post->organisation = $request->organisation;
        $post->details = $request->details;
        $post->thing_done = $request->thing_done;
        $post->thought = $request->thought;
        $post->waiting = $request->waiting;
        $post->thing_to_be_done = $request->thing_to_be_done;
        $post->recieved_service = $request->recieved_service;
        $post->thought_service = $request->thought_service;
        $post->thought_survivor = $request->thought_survivor;
        $save = $post->save();

        if ($save)
            return redirect('/apk/enquetes/add')->with('success', 'Message Envoyé !.');
        else
            return redirect('/apk/enquetes/add')->with('error', 'Message non Envoyé');
    }

    // public function refuge_del($id, $page)
    // {
    //     $refuge = Refuge::where('id', $id)->delete();
    //     if ($page == "single") {
    //         $user_id = auth()->user()->id;
    //         $refuges = Refuge::where("user_id", $user_id)->get();
    //         return view('user.askref.me', [
    //             'refuges' => $refuges
    //         ]);
    //     } else {
    //         $refuges = Refuge::orderBy('id', 'desc')->get();
    //         $users = User::All();
    //         return view('user.askref.all', [
    //             'refuges' => $refuges,
    //             'users' => $users
    //         ]);
    //     }
    // }

    public function enquetes_del($id, $page)
    {
        $enquete = Enquete::where('id', $id)->delete();
        if ($page == "single") {
            $user_id = auth()->user()->id;
            $enquetes = Enquete::where("user_id", $user_id)->get();
            return view('user.enquetes.me', [
                'enquetes' => $enquetes
            ]);
        } else {
            $enquetes = Enquete::orderBy('id', 'desc')->get();
            $users = User::All();
            return view('user.enquetes.all', [
                'enquetes' => $enquetes,
                'users' => $users
            ]);
        }
    }

    public function my_account()
    {
        $regions = Regions::all();
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('user.my_account', [
            'user' => $user,
            'regions' => $regions
        ]);
    }

    public function my_account_validate(Request $request)
    {
        $user_id = auth()->user()->id;
        $request->validate([
            'name' => 'required',
            'tel' => 'required',
            'old_password' => 'required',
            'region' => 'required'
        ]);

        $user = User::find($user_id);
        if (Hash::check($request->old_password, $user->password)) {
            if ($request->new_password == '' || $request->new_password == null) {
                $user->name = $request->name;
                $user->tel = $request->tel;
                $user->region_id = $request->region;
                $save = $user->save();
                return redirect('/apk/my_account')->with('success', 'Enrégistré avec succès');
            } else {
                $user->name = $request->name;
                $user->tel = $request->tel;
                $user->password = bcrypt($request->new_password);
                $user->region_id = $request->region;
                $save = $user->save();
                return redirect('/apk/my_account')->with('success', 'Enrégistré avec succès');
            }
        } else {
            return redirect('/apk/my_account')->with('error', 'Ancien Mot de passe incorrect');
        }
    }

    public function gallery_all()
    {
        $galleries = Gallery::all();
        return view('user.gallery.index', ['galleries' => $galleries]);
    }
    public function galleries_add()
    {
        return view('user.gallery.add');
    }

    public function gallery_add(Request $request)
    {
        $request->validate([
            'post_image' => 'required',
            'description' => 'required',
        ]);
        $new_string = bin2hex(random_bytes(10));

        // Post image
        if ($request->hasFile('post_image')) {
            $image = $request->file('post_image');
            $reFullImage = 'U' . $new_string . '.' . $image->getClientOriginalExtension();
            $dest = public_path('/storage/gallery');
            $image->move($dest, $reFullImage);
        } else {
            $reFullImage = 'user.jpg';
        }


        $posts = new Gallery;
        $posts->image = $reFullImage;
        $posts->description = $request->description;
        $save = $posts->save();

        if ($save)
            return redirect('apk/gallery/add')->with('success', 'Image Ajouté !.');
        else
            return redirect('apk/gallery/add')->with('error', 'Image non Envoyé');
    }

    public function gallery_del($id)
    {
        $team = Gallery::where('id', $id)->delete();
        return redirect('apk/gallery')->with('success', 'Image supprimé !.');
    }

    public function team_all()
    {
        $teams = Team::all();
        return view('user.team.index', ['teams' => $teams]);
    }
    public function teams_add()
    {
        return view('user.team.add');
    }

    public function team_add(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'role' => 'required',
        ]);
        $new_string = bin2hex(random_bytes(10));

        // Post image
        if ($request->hasFile('post_image')) {
            $image = $request->file('post_image');
            $reFullImage = 'U' . $new_string . '.' . $image->getClientOriginalExtension();
            $dest = public_path('/storage/teams');
            $image->move($dest, $reFullImage);
        } else {
            $reFullImage = 'user.jpg';
        }


        $posts = new Team;
        $posts->name = $request->name;
        $posts->role = $request->role;
        $posts->image = $reFullImage;
        $save = $posts->save();

        if ($save)
            return redirect('apk/team/add')->with('success', 'Message Envoyé !.');
        else
            return redirect('apk/team/add')->with('error', 'Message non Envoyé');
    }

    public function team_del($id)
    {
        $team = Team::where('id', $id)->delete();
        return redirect('apk/team')->with('success', 'Collaborateur supprimé !.');
    }

    public function document(){
        return view('user.document');
    }

    public function generatePDF(Request $request)
    {
        $request->validate([
            'datatype' => 'required',
        ]);
        $datatype = $request->datatype;
        $users = User::all();

        if ($datatype == "Enquete"){
            $datas = Enquete::orderBy('id', 'desc')->get();
            return view('user.pdf', ["datas" => $datas, "users" => $users]);
        } else if ($datatype == "Alertes"){
            $datas = Alerts::orderBy('id', 'desc')->get();
            return view('user.pdf_alerts', ["datas" => $datas, "users" => $users]);
        } else if ($datatype == "Therapy"){
            $datas = Therapy::orderBy('id', 'desc')->get();
            return view('user.pdf_theraps', ["datas" => $datas, "users" => $users]);
        } else if ($datatype == "askref"){
            $datas = Refuge::orderBy('id', 'desc')->get();
            return view('user.pdf_refuge', ["datas" => $datas, "users" => $users]);
        }
        // $pdf = PDF::loadView('user.pdf', ["datas" => $datas, "users" => $users]);
        // return $pdf->download('sample.pdf');
    }
}
