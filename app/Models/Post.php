<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;


class Post extends Model {

    // pake $table kalo nama tablenya itu beda sama nama kelasnya (misal kelas Post nama tablenya blog_posts)
    // protected $table = 'blog_posts';

    // pale $primaryKey kalo primary keynya bukan id (misal posts_id)
    // protected $primaryKey = 'post_id';

    //
    
    protected $fillable = ['title', 'author', 'slug', 'body'];

}


?>