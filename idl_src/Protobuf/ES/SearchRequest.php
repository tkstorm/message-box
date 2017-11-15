<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ESearch.proto

namespace Protobuf\ES;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Protobuf.ES.SearchRequest</code>
 */
class SearchRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string searchCategory = 1;</code>
     */
    private $searchCategory = '';
    /**
     * Generated from protobuf field <code>string keywords = 2;</code>
     */
    private $keywords = '';
    /**
     * Generated from protobuf field <code>int32 page = 10;</code>
     */
    private $page = 0;
    /**
     * Generated from protobuf field <code>int32 pageSize = 11;</code>
     */
    private $pageSize = 0;

    public function __construct() {
        \GPBMetadata\ESearch::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string searchCategory = 1;</code>
     * @return string
     */
    public function getSearchCategory()
    {
        return $this->searchCategory;
    }

    /**
     * Generated from protobuf field <code>string searchCategory = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSearchCategory($var)
    {
        GPBUtil::checkString($var, True);
        $this->searchCategory = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string keywords = 2;</code>
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Generated from protobuf field <code>string keywords = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setKeywords($var)
    {
        GPBUtil::checkString($var, True);
        $this->keywords = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 page = 10;</code>
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Generated from protobuf field <code>int32 page = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setPage($var)
    {
        GPBUtil::checkInt32($var);
        $this->page = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 pageSize = 11;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * Generated from protobuf field <code>int32 pageSize = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->pageSize = $var;

        return $this;
    }

}

