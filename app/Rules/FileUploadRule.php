<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Http\UploadedFile;

class FileUploadRule implements ValidationRule
{
    private $isRequired;

    private $allowedMimes;

    private $maxSize;

    public function __construct($isRequired = false)
    {
        $this->isRequired = $isRequired;
        $this->allowedMimes = ['image/png', 'image/jpg', 'image/jpeg', 'application/pdf'];
        $this->maxSize = 2048;
    }

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if ($this->isRequired && ! $value) {
            $fail('The :attribute is required.');
        }

        if ($value instanceof UploadedFile) {
            if (! empty($this->allowedMimes) && ! in_array($value->getMimeType(), $this->allowedMimes)) {
                $fail('The :attribute must be of type png, jpg, jpeg or pfd.');
            }

            if ($this->maxSize !== null && $value->getSize() > $this->maxSize * 1024) {
                $fail('The :attribute must be smaller than 2MB.');
            }
        }
    }
}
