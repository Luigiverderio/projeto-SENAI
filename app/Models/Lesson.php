<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{

    use HasFactory;
    
    protected $fillable = ['topic_id', 'name', 'slug', 'link', 'content', 'order', 'is_high_relevance'];
    
    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
    
    public function students()
    {
        return $this->belongsToMany(User::class, 'students_lessons')->withPivot('is_completed', 'completed_at');
    }

    

}
