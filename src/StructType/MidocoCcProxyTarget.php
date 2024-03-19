<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCcProxyTarget StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCcProxyTarget extends CcproxyTargetDTO
{
    /**
     * The MidocoCcProxyHandler
     * Meta information extracted from the WSDL
     * - ref: MidocoCcProxyHandler
     * @var \Pggns\MidocoApi\OrderglobalSD\StructType\CcproxyHandlerDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderglobalSD\StructType\CcproxyHandlerDTO $MidocoCcProxyHandler = null;
    /**
     * Constructor method for MidocoCcProxyTarget
     * @uses MidocoCcProxyTarget::setMidocoCcProxyHandler()
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\CcproxyHandlerDTO $midocoCcProxyHandler
     */
    public function __construct(?\Pggns\MidocoApi\OrderglobalSD\StructType\CcproxyHandlerDTO $midocoCcProxyHandler = null)
    {
        $this
            ->setMidocoCcProxyHandler($midocoCcProxyHandler);
    }
    /**
     * Get MidocoCcProxyHandler value
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\CcproxyHandlerDTO|null
     */
    public function getMidocoCcProxyHandler(): ?\Pggns\MidocoApi\OrderglobalSD\StructType\CcproxyHandlerDTO
    {
        return $this->MidocoCcProxyHandler;
    }
    /**
     * Set MidocoCcProxyHandler value
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\CcproxyHandlerDTO $midocoCcProxyHandler
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoCcProxyTarget
     */
    public function setMidocoCcProxyHandler(?\Pggns\MidocoApi\OrderglobalSD\StructType\CcproxyHandlerDTO $midocoCcProxyHandler = null): self
    {
        $this->MidocoCcProxyHandler = $midocoCcProxyHandler;
        
        return $this;
    }
}
