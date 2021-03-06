<?php
/**
 * This file is part of phptags.
 *
 * phptags is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; version 3 of the License.
 *
 * phptags is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with phptags. If not, see <http://www.gnu.org/licenses/>.
 *
 * @category phptags
 * @license http://www.gnu.org/licenses/gpl-3.0.txt GPL
 * @copyright Copyright 2011 Evan Coury (http://evan.pro/)
 * @package Scanner
 */

namespace phptags;

use Zend\Code\Scanner\TokenArrayScanner;

class Scanner extends TokenArrayScanner
{
    public function getClassesInfo()
    {
        $this->scan();
        
        $return = array();
        
        foreach ($this->infos as $info) {
            if ($info['type'] != 'class') {
                continue;
            }

            $return[] = $info;
        }
        return $return;
    }
}
