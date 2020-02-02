<?php

Route::get('/', function () {
    return view('auth.login');
});

//Rotas de Autenticação de Usuários
Auth::routes(['verificacao' => true]); 

//Rotas Cadastro Usuários
Route::get('cadastro', 'Auth\RegisterController@showRegistrationForm')->name('cadastro');

//Rotas de Redefinição Senha...
Route::get('redefinicao/senha', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('redefinicao.request');
Route::post('redefinicao/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('redefinicao.email');
Route::get('redefinicao/senha/{token}', 'Auth\ResetPasswordController@showResetForm')->name('redefinicao.senha');
Route::post('redefinicao/senha', 'Auth\ResetPasswordController@senha');

//Rotas de Envio de Notificação do Usuário
Route::get('email/verificacao', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verificacao/{id}', 'Auth\VerificationController@verificacao')->name('verification.verify');
Route::get('email/reenviar', 'Auth\VerificationController@reenviar')->name('verification.resend');

//Rotas paginas teste
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/clientes', 'ClienteController@index')->name('clientes');
