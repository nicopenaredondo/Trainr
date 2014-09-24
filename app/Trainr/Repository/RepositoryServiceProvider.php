<?php namespace Trainr\Repository;

//use SampleModel;


use Trainr\Repository\Eloquent\Sample;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{

  /**
   * Register the repositories
   *
   * @return void
   */

  public function register()
  {
    $app = $this->app;

    //Sample Repository
    /*$app->bind(
      'Trainr\Repository\Interface\Sample',
    function(){
        return new Sample(new SampleModel);
    });*/

  }
}