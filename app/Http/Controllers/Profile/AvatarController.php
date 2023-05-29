<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateAvatarRequest;
use Illuminate\Support\Str;
use OpenAI\Laravel\Facades\OpenAI;
class AvatarController extends Controller
{
// Update Avatar
 public function update(UpdateAvatarRequest $request)
            {

                         $path = Storage::disk('public')->put('avatars',$request->file('avatar'));

                          if($oldAvatar = $request->user()->avatar){
                               Storage::disk('public')->delete($oldAvatar);
                            }
//
                              auth()->user()->update(['avatar'=> $path]);
//
                           return redirect(route('profile.edit'))->with( 'message','Avatar is now updated successfully');

            }

//             Genertate a new avatar


            public function generate(Request $request)
            {


                    $result = OpenAI::images()->create([

                            'prompt' => 'Create Avatar for cool female developer',
                            'n'=>1,
                            'size'=>"256x256"

                        ]);


                        $contents = file_get_contents($result->data[0]->url);
                         $filename = Str::random(25);
              if($oldAvatar = $request->user()->avatar)
              {
                  Storage::disk('public')->delete($oldAvatar);
              }
             Storage::disk('public')->put("avatars/$filename.jpg",$contents);

              auth()->user()->update(['avatar'=>"avatars/$filename.jpg"]);
              return redirect(route('profile.edit'))->with( 'message',' AI Avatar is now updated');


            }
}
