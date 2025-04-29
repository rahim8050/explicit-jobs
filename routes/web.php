<?php

use App\Models\Work;
use Inertia\Inertia;
use App\Http\Controllers\Test;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ProfileController;
Route::get('/',function(){

    return view('users.jobs', [
        'jobs' => Work::all()


    ]);

     })->name('jobs');
     Route::get('/test', [Test::class, 'index'])->name('test');
     Route::get('/jobs/{id}',function($id){
        return view('users.job',[
            'job'=> Work::find($id)
        ]);
     });

