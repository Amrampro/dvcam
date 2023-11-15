<?php


namespace App\Action;


use App\Models\Sermon;
use Illuminate\Database\Eloquent\Model;

class SermonStoreAction
{
	public function handle($request){
		$sermon = new Sermon();

		$sermon->titre = $request->input("titre");
		$sermon->description = $request->input("description");
		$sermon->author = $request->input("author");
		$sermon->is_local = $request->input("type") != "link";
		$sermon->category_sermon_id = $request->input("category_sermon_id");
		if ($request->input("type") == "link"){
			$sermon->video_url = $request->input("video_link");
		}else{
			$sermon->video_url = $request->file("video_file")->store("sermons");
		}
		$sermon->poster_url = $request->file("poster_url")->store("poster");
		$sermon->user_id = $request->user()->id;
		$sermon->save();
	}

}
