<?php
/**
 * Created by PhpStorm.
 * User: Alan Jhonnes
 * Date: 8/26/14
 * Time: 8:26 PM
 */

namespace RadarFit\TeaserBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Lead
 * @package RadarFit\TeaserBundle\Entity
 * @ORM\Entity()
 */
class Lead {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column()
     */
    protected $email;

    protected $type;

    protected $registeredAt;
} 