<?php namespace Trainr\Service\Validation;

class Sample extends Base

  static $loginRules = [
    'username' => 'required',
    'password' => 'required'
  ];

}