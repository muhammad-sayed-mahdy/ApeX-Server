<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{

  /**
* @bodyParam title string required The title of the post.
* @bodyParam body string required The title of the post.
* @bodyParam type string The type of post to create. Defaults to 'textophonious'.
* @bodyParam author_id int the ID of the author
* @bodyParam thumbnail image This is required if the post type is 'imagelicious'.
*/

  public function Block()
  {return;}



  /**
* @bodyParam title string required The title of the post.
* @bodyParam body string required The title of the post.
* @bodyParam type string The type of post to create. Defaults to 'textophonious'.
* @bodyParam author_id int the ID of the author
* @bodyParam thumbnail image This is required if the post type is 'imagelicious'.
*/

  public function Compose()
  {return;}



  /**
* @bodyParam title string required The title of the post.
* @bodyParam body string required The title of the post.
* @bodyParam type string The type of post to create. Defaults to 'textophonious'.
* @bodyParam author_id int the ID of the author
* @bodyParam thumbnail image This is required if the post type is 'imagelicious'.
*/

  public function UserData()
  {return;}


}
