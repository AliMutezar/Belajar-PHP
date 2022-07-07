<?php

    class ValidationUtil 
    {
        static function validate(LoginRequest $request)
        {
            if (!isset($request->name)) {
                throw new Exception("username is null");
            } else if (!isset($request->password)) {
                throw new Exception("password is null");
            }
        }

        static function validateReflection($request)
        {
            $reflection = new ReflectionClass($request);
            $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);

            foreach ($properties as $property) {
                if (!$property->isInitialized($request)) {
                    throw new Exception("$property->name is not set");
                } else if (is_null($property->getValue($request))) {
                    throw new Exception("$property->name is null");
                }
            }
        }
    }