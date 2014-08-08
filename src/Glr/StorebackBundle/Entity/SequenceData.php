<?php

namespace Glr\StorebackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SequenceData
 *
 * @ORM\Table(name="sequence_data")
 * @ORM\Entity
 */
class SequenceData
{
    /**
     * @var string
     *
     * @ORM\Column(name="sequence_name", type="string", length=100, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sequenceName;

    /**
     * @var integer
     *
     * @ORM\Column(name="sequence_increment", type="integer", nullable=false)
     */
    private $sequenceIncrement = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="sequence_min_value", type="integer", nullable=false)
     */
    private $sequenceMinValue = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="sequence_max_value", type="bigint", nullable=false)
     */
    private $sequenceMaxValue = '18446744073709551615';

    /**
     * @var integer
     *
     * @ORM\Column(name="sequence_cur_value", type="bigint", nullable=true)
     */
    private $sequenceCurValue = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="sequence_cycle", type="boolean", nullable=false)
     */
    private $sequenceCycle = '0';


}
