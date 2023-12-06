<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $with = ['category', 'user'];

    // buat pake metode create kita harus buat fillablenya dlu

    protected $fillable = [
        'title',
        'category_id',
        'slug',
        'excerpt',
        'body'
    ];

    // kalo enggak make guarded buat yang auto generated biasa kek id
    // yang sekiranya hak paten lah kek id
    // timestamps 

    // wajib harus ada nama scope
    public function scopeFilter($query, array $filters){

        // if(request('search')){
        //     return $query->where('title', 'like', '%' . $filters['search'] . '%')
        //     ->orWhere('body', 'like', '%' . $filters['search'] . '%');
        // }

        // if(isset($filters['search']) ? $filters['search'] : false){
        //     return $query->where('title', 'like', '%' . $filters['search'] . '%')
        //     ->orWhere('body', 'like', '%' . $filters['search'] . '%');
        // }

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title', 'like', '%' . $search. '%')
            ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function($query, $category) {
        return $query->whereHas('category', function($q) use ($category) {
            $q->where('slug', $category);
            
        });


});

    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    // karena kalo misal ga digniin kita bakal cuman ke author jadi foreign key harus namanya author_id

    // ternyata nama function ga boleh sembarang harus sesuai class nya cuman kalo mau dicustom bisa
    // kek dibawah ini

    //  public function author(){
    //     return $this->belongsTo(User::class, 'user_id');
    // }

    // protected $guarded =['id'];
}
