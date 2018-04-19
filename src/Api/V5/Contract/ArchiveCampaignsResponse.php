<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ArchiveCampaignsResponse
{

//    Can be omit.
//    protected $ArchiveResults = null;

    /**
     * Creates a new instance of ArchiveCampaignsResponse.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets ArchiveResults.
     *
     * @return ActionResult[]|null
     */
    public function getArchiveResults()
    {
        return isset($this->ArchiveResults) ? $this->ArchiveResults : null;
    }

    /**
     * Sets ArchiveResults.
     *
     * @param ActionResult[]|null $value
     * @return self
     */
    public function setArchiveResults(array $value = null)
    {
        $this->ArchiveResults = $value;

        return $this;
    }


}

