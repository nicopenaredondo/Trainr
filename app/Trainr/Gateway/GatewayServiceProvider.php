<?php namespace Trainr\Gateway;

use Illuminate\Support\ServiceProvider;
//use Trainr\Gateway\UserGateway;


class GatewayServiceProvider extends ServiceProvider
{

  public function register()
  {
    $app = $this->app;

    // $app->bind('Trainr\Gateway\UserGateway', function($app){
    //   return new UserGateway(
    //     $app->make('Trainr\Repository\Users\InterfaceUsersRepository'),
    //     $app->make('Trainr\Repository\Departments\InterfaceDepartmentsRepository'),
    //     $app->make('Trainr\Repository\Attendances\InterfaceAttendancesRepository'),
    //     $app->make('Trainr\Services\Validation\UsersValidator')
    //   );
    // });
  }
}