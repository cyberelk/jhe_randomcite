<?php
namespace JariHermannErnst\JheRandomcites\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2017 Jari-Hermann Ernst, M.A: <jari-hermann.ernst@t-online.de>, Herr
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Cite
 */
class Cite extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * cite
     *
     * @var string
     */
    protected $cite = '';
    
    /**
     * originator
     *
     * @var string
     */
    protected $originator = '';
    
    /**
     * Returns the cite
     *
     * @return string $cite
     */
    public function getCite()
    {
        return $this->cite;
    }
    
    /**
     * Sets the cite
     *
     * @param string $cite
     * @return void
     */
    public function setCite($cite)
    {
        $this->cite = $cite;
    }
    
    /**
     * Returns the originator
     *
     * @return string $originator
     */
    public function getOriginator()
    {
        return $this->originator;
    }
    
    /**
     * Sets the originator
     *
     * @param string $originator
     * @return void
     */
    public function setOriginator($originator)
    {
        $this->originator = $originator;
    }

}