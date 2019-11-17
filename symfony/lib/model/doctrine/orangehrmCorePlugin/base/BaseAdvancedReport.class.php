<?php

/**
 * BaseAdvancedReport
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property int             $id                        Type: integer, primary key
 * @property string          $name                      Type: string(100)
 * @property string          $definition                Type: clob
 *  
 * @method int               getId()                    Type: integer, primary key
 * @method string            getName()                  Type: string(100)
 * @method string            getDefinition()            Type: clob
 *  
 * @method AdvancedReport    setId(int $val)            Type: integer, primary key
 * @method AdvancedReport    setName(string $val)       Type: string(100)
 * @method AdvancedReport    setDefinition(string $val) Type: clob
 *  
 * @package    orangehrm
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAdvancedReport extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_advanced_report');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('name', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
        $this->hasColumn('definition', 'clob', null, array(
             'type' => 'clob',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}