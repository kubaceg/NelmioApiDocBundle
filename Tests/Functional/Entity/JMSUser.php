<?php

/*
 * This file is part of the NelmioApiDocBundle package.
 *
 * (c) Nelmio
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nelmio\ApiDocBundle\Tests\Functional\Entity;

use JMS\Serializer\Annotation as Serializer;
use Swagger\Annotations as SWG;

/**
 * User.
 *
 * @Serializer\ExclusionPolicy("all")
 */
class JMSUser
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\Expose
     *
     * @SWG\Property(description = "User id", required = true, readOnly = true, title = "userid", example=1, default = null)
     */
    private $id;

    /**
     * @Serializer\Type("int")
     * @Serializer\Expose
     * @Serializer\SerializedName("daysOnline")
     *
     * @SWG\Property(default = 0)
     */
    private $daysOnline;

    /**
     * @Serializer\Type("string")
     * @Serializer\Expose
     *
     * @SWG\Property(readOnly = false)
     */
    private $email;

    /**
     * @Serializer\Type("array<string>")
     * @Serializer\Accessor(getter="getRoles", setter="setRoles")
     * @Serializer\Expose
     *
     * @SWG\Property(default = {"user"}, description = "Roles list", example="[""ADMIN"",""SUPERUSER""]", title="roles")
     */
    private $roles;

    /**
     * @Serializer\Type("string")
     */
    private $password;

    /**
     * Ignored as the JMS serializer can't detect its type.
     *
     * @Serializer\Expose
     */
    private $createdAt;

    /**
     * @Serializer\Type("array<Nelmio\ApiDocBundle\Tests\Functional\Entity\User>")
     * @Serializer\Expose
     */
    private $friends;

    /**
     * @Serializer\Type("integer")
     * @Serializer\Expose
     * @Serializer\SerializedName("friendsNumber")
     *
     * @SWG\Property(type = "string")
     */
    private $friendsNumber;

    /**
     * @Serializer\Type(User::class)
     * @Serializer\Expose
     */
    private $bestFriend;

    /**
     * Whether this user is enabled or disabled.
     *
     * Only enabled users may be used in actions.
     *
     * @var string
     * @Serializer\Type("string")
     * @Serializer\Expose
     *
     * @SWG\Property(enum = {"disabled", "enabled"})
     */
    private $status;

    public function setRoles($roles)
    {
    }

    public function getRoles()
    {
    }

    public function setDummy(Dummy $dummy)
    {
    }
}
