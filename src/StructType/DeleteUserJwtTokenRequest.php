<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteUserJwtTokenRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteUserJwtTokenRequest extends AbstractStructBase
{
    /**
     * The MidocoUserJwtToken
     * Meta information extracted from the WSDL
     * - ref: MidocoUserJwtToken
     * @var \Pggns\MidocoApi\OrderglobalSD\StructType\UsersJwtTokenDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderglobalSD\StructType\UsersJwtTokenDTO $MidocoUserJwtToken = null;
    /**
     * Constructor method for DeleteUserJwtTokenRequest
     * @uses DeleteUserJwtTokenRequest::setMidocoUserJwtToken()
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\UsersJwtTokenDTO $midocoUserJwtToken
     */
    public function __construct(?\Pggns\MidocoApi\OrderglobalSD\StructType\UsersJwtTokenDTO $midocoUserJwtToken = null)
    {
        $this
            ->setMidocoUserJwtToken($midocoUserJwtToken);
    }
    /**
     * Get MidocoUserJwtToken value
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\UsersJwtTokenDTO|null
     */
    public function getMidocoUserJwtToken(): ?\Pggns\MidocoApi\OrderglobalSD\StructType\UsersJwtTokenDTO
    {
        return $this->MidocoUserJwtToken;
    }
    /**
     * Set MidocoUserJwtToken value
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\UsersJwtTokenDTO $midocoUserJwtToken
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\DeleteUserJwtTokenRequest
     */
    public function setMidocoUserJwtToken(?\Pggns\MidocoApi\OrderglobalSD\StructType\UsersJwtTokenDTO $midocoUserJwtToken = null): self
    {
        $this->MidocoUserJwtToken = $midocoUserJwtToken;
        
        return $this;
    }
}
