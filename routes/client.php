<?php


use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/match', [\App\Http\Controllers\Client\MatchController::class, 'match'])->name('match');
Route::get('/top-players', [\App\Http\Controllers\Client\MatchController::class, 'TopPlayers'])->name('top_player');
Route::get('/match-rs/{match:id}',[\App\Http\Controllers\Client\MatchController::class,'match_result'])->name('match_rs');
Route::get('/player-detail/{player:id}', [HomeController::class, 'playerdetail'])->name('playerdetail');
Route::get('/point-table', [\App\Http\Controllers\Client\MatchController::class, 'PointTable'])->name('point_table');
