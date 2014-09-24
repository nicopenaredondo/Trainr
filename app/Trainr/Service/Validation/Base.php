<?php namespace Trainr\Service;

use Validator as V;

abstract class Base
{

  protected $errors;

  public function check($validator)
  {

    if($validator->fails())
    {
      $this->errors = $validator->messages();
      return false;
    }

    return true;
  }

  public function isValidForCreation($input)
  {

    $validator = V::make($input, static::$insertRules);
    return $this->check($validator);

  }

  public function isValidForUpdate($input, $additionalRules = NULL)
  {

    if (isset($additionalRules)) {
      # code...
      $updateRules = array_merge($addedRules, static::$updateRules);
    }else{
      # code...
      $updateRules = static::$updateRules;
    }
    $validator = V::make($input, $updateRules);
    return $this->check($validator);

  }

  public function errors()
  {
    return $this->errors;
  }


}