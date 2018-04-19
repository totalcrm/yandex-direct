<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class UpdateAdsResponse
{

//    Can be omit.
//    protected $UpdateResults = null;

    /**
     * Creates a new instance of UpdateAdsResponse.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets UpdateResults.
     *
     * @return ActionResult[]|null
     */
    public function getUpdateResults()
    {
        return isset($this->UpdateResults) ? $this->UpdateResults : null;
    }

    /**
     * Sets UpdateResults.
     *
     * @param ActionResult[]|null $value
     * @return self
     */
    public function setUpdateResults(array $value = null)
    {
        $this->UpdateResults = $value;

        return $this;
    }


}

