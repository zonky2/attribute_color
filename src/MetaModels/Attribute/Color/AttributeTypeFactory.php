<?php

/**
 * This file is part of MetaModels/attribute_color.
 *
 * (c) 2012-2016 The MetaModels team.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This project is provided in good faith and hope to be usable by anyone.
 *
 * @package    MetaModels
 * @subpackage AttributeColor
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @copyright  2012-2016 The MetaModels team.
 * @license    https://github.com/MetaModels/attribute_color/blob/master/LICENSE LGPL-3.0
 * @filesource
 */

namespace MetaModels\Attribute\Color;

use MetaModels\Attribute\AbstractAttributeTypeFactory;

/**
 * Attribute type factory for color attributes.
 */
class AttributeTypeFactory extends AbstractAttributeTypeFactory
{
    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        parent::__construct();

        $this->typeName  = 'color';
        $this->typeIcon  = 'system/modules/metamodelsattribute_color/html/color.png';
        $this->typeClass = 'MetaModels\Attribute\Color\Color';
    }
}
