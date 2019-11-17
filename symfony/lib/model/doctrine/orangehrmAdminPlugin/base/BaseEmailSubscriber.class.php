<?php

/**
 * BaseEmailSubscriber
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property int                $id                                          Type: integer, primary key
 * @property int                $notificationId                              Type: integer
 * @property string             $name                                        Type: string(100)
 * @property string             $email                                       Type: string(100)
 * @property EmailNotification  $EmailNotification                           
 *  
 * @method int                  getId()                                      Type: integer, primary key
 * @method int                  getNotificationid()                          Type: integer
 * @method string               getName()                                    Type: string(100)
 * @method string               getEmail()                                   Type: string(100)
 * @method EmailNotification    getEmailNotification()                       
 *  
 * @method EmailSubscriber      setId(int $val)                              Type: integer, primary key
 * @method EmailSubscriber      setNotificationid(int $val)                  Type: integer
 * @method EmailSubscriber      setName(string $val)                         Type: string(100)
 * @method EmailSubscriber      setEmail(string $val)                        Type: string(100)
 * @method EmailSubscriber      setEmailNotification(EmailNotification $val) 
 *  
 * @package    orangehrm
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEmailSubscriber extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_email_subscriber');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('notification_id as notificationId', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('name', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('email', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('EmailNotification', array(
             'local' => 'notificationId',
             'foreign' => 'id'));
    }
}