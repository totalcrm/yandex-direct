<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class UpdateAdResponse
{

    protected $UpdateResults = null;

    /**
     * Creates a new instance of UpdateAdResponse.
     *
     * @return UpdateAdResponse
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
        return $this->UpdateResults;
    }

    /**
     * Sets UpdateResults.
     *
     * @param ActionResult[]|null $value
     * @return $this
     */
    public function setUpdateResults(array $value = null)
    {
        $this->UpdateResults = $value;

        return $this;
    }


}
