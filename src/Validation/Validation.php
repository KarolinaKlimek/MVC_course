<?php

namespace Mvc\Validation;

use Mvc\Messages\Messages;
use Mvc\Validation\Exceptions\ValidationException;

class Validation
{
    private array $credentials;

    private array $params;

    private array $errors = [];

    private Messages $messages;

    public function __construct(array $credentials, array $params)
    {
        $this->messages = new Messages();

        $this->credentials = $credentials;
        $this->params = $params;

        $this->validate();
    }

    public function passesOrFail(): bool
    {
        if(empty($this->errors))
            return true;
        return false;
    }

    public function getErrors()
    {
        return $this->errors;
    }

    private function validate()
    {
        try {
            foreach ($this->credentials as $key => $credential) {
                if(array_key_exists($key, $this->params)) {
                    foreach ($credential as $credentialKey => $credentialValue) {
                        switch ($credentialKey) {
                            case 'required':
                                $this->requiredValidate($key,$this->params[$key], $credentialValue);
                                break;
                            case 'min':
                                $this->minValidate($key,$this->params[$key], $credentialValue);
                                break;
                            case 'max':
                                $this->maxValidate($key,$this->params[$key], $credentialValue);
                                break;
                            case 'recaptcha':
                                $this->recaptchaValidate($key, $this->params[$key], $credentialValue);
                                break;
                            default:
                                throw new ValidationException('There is no ' . $credentialKey . ' validation method.');
                        }
                    }
                } else
                    throw new ValidationException('There is no ' . $key . ' field in params.');
            }
        } catch (ValidationException $exception) {
            exit($exception->report());
        }
    }

    private function requiredValidate ($paramName, $paramValue, $credential)
    {
        if($credential) {
            if(empty($paramValue))
                $this->errors[$paramName]['required'] = $this->messages->get('validationRequired', ['param'=> $paramName]);
        }
    }

    private function minValidate($paramName, $paramValue, $credential)
    {
        if(strlen($paramValue) < $credential)
            $this->errors[$paramName]['min'] = $this->messages->get('validationMin', ['param' => $paramName]);
    }

    private function maxValidate($paramName, $paramValue, $credential)
    {
        if(strlen($paramValue) > $credential)
            $this->errors[$paramName]['max'] = $this->messages->get('validationMax', ['param' => $paramName]);
    }

    private function recaptchaValidate($paramName, $paramValue, $credential)
    {
        if($credential) {
            $recaptchaUrl = 'https://www.google.com/recaptcha/api/siteverify';
            $recaptchaSecret = config('auth.recaptcha_secret_key');
            $recaptchaResponse = $paramValue;

            $recaptcha = file_get_contents($recaptchaUrl . '?secret=' . $recaptchaSecret . '&response=' . $recaptchaResponse);

            $recaptcha = json_decode($recaptcha);

            if(!$recaptcha->success || !$recaptcha->score >= 0.5)
                $this->errors[$paramName]['recaptcha'] = $this->messages->get('validationRecaptcha');
        }
    }
}
