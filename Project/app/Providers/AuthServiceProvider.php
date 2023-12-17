<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\CourseCateModel;
use App\Models\EducateM;
use App\Models\processM;
use App\Models\scheduleM;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        'App\Model'=>'App\Policies\ModelPolicy'
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $user=Auth::user();
        $CCate = EducateM::with('course_cates')->get();
        dd($CCate);
        foreach ($CCate as $CCates) {
            foreach ($CCates->Edu as $Edu) {
                $EduArray[$Edu->name][] = $Edu->id;
                # code...
            }
            # code...
        }
        // foreach ($EduArray as $title => $CCate) {
        //     Gate::define($title, function ($user) use ($CCate,$title){
        //         $CCates = Cache::remember('users'.Auth::id(),3600,function(){
        //             return $CCate::findorFail(Auth::user()->idEdu);
        //         });
                
        //     });
            # code...
        // }

    }
}
