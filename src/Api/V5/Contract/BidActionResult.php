<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class BidActionResult extends BidBase
{

//    Can be omit.
//    protected $Warnings = null;

//    Can be omit.
//    protected $Errors = null;

    /**
     * Creates a new instance of BidActionResult.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Warnings.
     *
     * @return ExceptionNotification[]|null
     */
    public function getWarnings()
    {
        return isset($this->Warnings) ? $this->Warnings : null;
    }

    /**
     * Sets Warnings.
     *
     * @param ExceptionNotification[]|null $value
     * @return self
     */
    public function setWarnings(array $value = null)
    {
        $this->Warnings = $value;

        return $this;
    }

    /**
     * Gets Errors.
     *
     * @return ExceptionNotification[]|null
     */
    public function getErrors()
    {
        return isset($this->Errors) ? $this->Errors : null;
    }

    /**
     * Sets Errors.
     *
     * @param ExceptionNotification[]|null $value
     * @return self
     */
    public function setErrors(array $value = null)
    {
        $this->Errors = $value;

        return $this;
    }


}

