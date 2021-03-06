<?php

namespace CMSDoctrineExt\Demo;

/**
 * This interface is not necessary but can be implemented for
 * Entities which in some cases needs to be identified as
 * Timestampable
 * 
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
 * @package Gedmo.Demo
 * @subpackage Demo
 * @link http://www.gediminasm.org
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
interface Demo
{
    // timestampable expects annotations on properties
    
    /**
     * @CMSDoctrineExt:Demo(text="post")
     * dates which should be updated on insert only
     */
   
    
    /**
     * example
     * 
     * @CMSDoctrineExt:Demo(text="post")
     * @Column(type="date")
     * $created
     */
}