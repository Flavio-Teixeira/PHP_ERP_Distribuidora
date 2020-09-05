<?php

/**
 * Zend/zmail.inc.php
 * 
 * Defines Zend Framework Mail component.
 *
 * This file is part of the RPCL project.
 *
 * Copyright (c) 2004-2011 Embarcadero Technologies, Inc.
 *
 * Check out AUTHORS file for a complete list of project contributors.
 *
 * LICENSE:
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307
 * USA
 * 
 * @package     ZendFramework
 * @copyright   2004-2011 Embarcadero Technologies, Inc.
 * @license     http://www.gnu.org/licenses/lgpl-2.1.txt LGPL
 * 
 */

/**
 * Include RPCL common file and necessary units.
 */
require_once("rpcl/rpcl.inc.php");
use_unit("Zend/zcommon/zcommon.inc.php");
use_unit("classes.inc.php");
use_unit("Zend/framework/library/Zend/Mail.php");
use_unit("Zend/framework/library/Zend/Mail/Transport/Smtp.php");
use_unit("Zend/framework/library/Zend/Mail/Transport/Sendmail.php");

/**
 * Component to send emails.
 * 
 * It supports different mailing software, emails formats and almost any email feature you can think
 * of.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.mail.html Zend Framework Documentation
 */
class ZMail extends Component
{

   /**
    * Zend Framework Mail instance.
    *
    * @var      Zend_Mail
    */
   protected $_mail = null;

   // Body Text

   /**
    * Text for the body of the email in plain-text.
    *
    * @var      string
    */
   protected $_bodytext = "";

   /**
    * Getter method for {@link $_bodytext}.
    *
    * @return   string  {@link $_bodytext}
    */
   function getBodyText()    {return $this->_bodytext;}

   /**
    * Setter method for {@link $_bodytext}.
    *
    * @param    string  $value
    */
   function setBodyText($value)    {$this->_bodytext = $value;}

   /**
    * Getter for {@link $_bodytext}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultBodyText()    {return "";}

   // Body HTML

   /**
    * Text for the body of the email in HTML.
    *
    * @var      string
    */
   protected $_bodyhtml = "";

   /**
    * Getter method for {@link $_bodyhtml}.
    *
    * @return   string  {@link $_bodyhtml}
    */
   function getBodyHTML()    {return $this->_bodyhtml;}

   /**
    * Setter method for {@link $_bodyhtml}.
    *
    * @param    string  $value
    */
   function setBodyHTML($value)    {$this->_bodyhtml = $value;}

   /**
    * Getter for {@link $_bodyhtml}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultBodyHTML()    {return "";}

   // Subject

   /**
    * Email subject.
    *
    * @var      string
    */
   protected $_subject = "";

   /**
    * Getter method for {@link $_subject}.
    *
    * @return   string  {@link $_subject}
    */
   function getSubject()    {return $this->_subject;}

   /**
    * Setter method for {@link $_subject}.
    *
    * @param    string  $value
    */
   function setSubject($value)    {$this->_subject = $value;}

   /**
    * Getter for {@link $_subject}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultSubject()    {return "";}

   // From Name

   /**
    * Sender name.
    * 
    * For example, for John Doe <john.doe@example.com>, this property should be set to "John Doe".
    *
    * @see $_fromemail
    *
    * @var      string
    */
   protected $_fromname = "";

   /**
    * Getter method for {@link $_fromname}.
    *
    * @return   string  {@link $_fromname}
    */
   function getFromName()    {return $this->_fromname;}

   /**
    * Setter method for {@link $_fromname}.
    *
    * @param    string  $value
    */
   function setFromName($value)    {$this->_fromname = $value;}

   /**
    * Getter for {@link $_fromname}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultFromName()    {return "";}

   // From Email

   /**
    * Sender email address.
    * 
    * For example, for John Doe <john.doe@example.com>, this property should be set to
    * "john.doe@example.com".
    *
    * @see $_fromname
    *
    * @var      string
    */
   protected $_fromemail = "";

   /**
    * Getter method for {@link $_fromemail}.
    *
    * @return   string  {@link $_fromemail}
    */
   function getFromEmail()    {return $this->_fromemail;}

   /**
    * Setter method for {@link $_fromemail}.
    *
    * @param    string  $value
    */
   function setFromEmail($value)    {$this->_fromemail = $value;}

   /**
    * Getter for {@link $_fromemail}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultFromEmail()    {return "";}

   // Send Method

   /**
    * Method to be used when sending the email.
    *
    * Sendmail method will be used if no method is set.
    *
    * @var      ZMailTransport
    */
   protected $_transport = null;

   /**
    * Getter method for {@link $_transport}.
    *
    * @return   ZMailTransport  {@link $_transport}
    */
   function getTransport()    {return $this->_transport;}

   /**
    * Setter method for {@link $_transport}.
    *
    * @param    ZMailTransport  $value
    */
   function setTransport($value)    {$this->_transport = $this->fixupProperty($value);}

   /**
    * Getter for {@link $_transport}’s default value.
    *
    * @return   ZMailTransport  Null
    */
   function defaultTransport()    {return null;}

   // Loaded

   /**
    * {@inheritdoc}
    */
   function loaded()
   {
      parent::loaded();
      $this->setTransport($this->_transport);
   }

   // To

   /**
    * Recipients.
    *
    * The array should have key-value pairs, where each key is an email address, and its value is
    * the name of the recipient with that email address.
    *
    * @var      array
    */
   protected $_to = array();

   /**
    * Getter method for {@link $_to}.
    *
    * @return   array   {@link $_to}
    */
   function getTo()    {return $this->_to;}

   /**
    * Setter method for {@link $_to}.
    *
    * @param    array   $value
    */
   function setTo($value)    {$this->_to = $value;}

   /**
    * Getter for {@link $_to}’s default value.
    *
    * @return   array   Empty array
    */
   function defaultTo()    {return array();}

   // CC

   /**
    * CC Recipients.
    *
    * The array should have key-value pairs, where each key is an email address, and its value is
    * the name of the recipient with that email address.
    *
    * @var      array
    */
   protected $_cc = array();

   /**
    * Getter method for {@link $_cc}.
    *
    * @return   array   {@link $_cc}
    */
   function getCc()    {return $this->_cc;}

   /**
    * Setter method for {@link $_cc}.
    *
    * @param    array   $value
    */
   function setCc($value)    {$this->_cc = $value;}

   /**
    * Getter for {@link $_cc}’s default value.
    *
    * @return   array   Empty array
    */
   function defaultCc()    {return array();}

   // BCC

   /**
    * BCC Recipients.
    *
    * The array should have key-value pairs, where each key is an email address, and its value is
    * the name of the recipient with that email address.
    *
    * @var      array
    */
   protected $_bcc = array();

   /**
    * Getter method for {@link $_bcc}.
    *
    * @return   array   {@link $_bcc}
    */
   function getBcc()    {return $this->_bcc;}

   /**
    * Setter method for {@link $_bcc}.
    *
    * @param    array   $value
    */
   function setBcc($value)    {$this->_bcc = $value;}

   /**
    * Getter for {@link $_bcc}’s default value.
    *
    * @return   array   Empty array
    */
   function defaultBcc()    {return array();}

   // Attachments

   /**
    * Attachments.
    *
    * The array should have key-value pairs, where key can be anything, but value must be the path
    * to the file to be attached. Key value can later be used if you call {@link $_oncustomizeattachment}
    * event, which is used to customize attachments beyond their filepath (MIME Type, filename, and
    * more).
    *
    * @var      array
    */
   protected $_attachments = array();

   /**
    * Getter method for {@link $_attachments}.
    *
    * @return   array   {@link $_attachments}
    */
   function getAttachments()    {return $this->_attachments;}

   /**
    * Setter method for {@link $_attachments}.
    *
    * @param    array   $value
    */
   function setAttachments($value)    {$this->_attachments = $value;}

   /**
    * Getter for {@link $_attachments}’s default value.
    *
    * @return   array   Empty array
    */
   function defaultAttachments()    {return array();}

   // OnCustomizeAttachment

   /**
    * Event for attachments customization, both for the attachments themselves and for the way they
    * are handled.
    * 
    * This event is <b>triggered</b> right before adding each attachment to your email.
    *
    * This property should either contain the name of the function to be run when the event is
    * triggered (without brackets), or be set to null.
    *
    * Its second parameter, $params, will contain a one-item array with a key-value pair. This pair
    * will match one of your attachments as defined in {@link $_attachments} (so, for each
    * attachment there will be a call to this event). Use provided data to <b>identify the
    * attachment</b> in each call.
    *
    * The event should then return an array also with key-value pairs. You can either return an
    * empty array, or use it to set some options for the attachment the call was made for. These
    * are all the options you can set, all of them <i>optional</i>:
    * <ul>
    *   <li><b>body</b>: Attachment binary content. It would replace the content of the file pointed
    *   by the path of the attachment, which was set in {@link $_attachments}.</li>
    *   <li><b>mimetype</b>: File MIME type. {@link http://framework.zend.com/manual/en/zend.mime.mime.html#zend.mime.mime.static Zend Framework MIME constants} are allowed.</li>
    *   <li><b>disposition</b>: The way the content will be attached to the email, either inside the
    *   message itself ('inline') or as a normal separated attachment ('attachment').</li>
    *   <li><b>encoding</b>: Attachment encoding {@link http://framework.zend.com/manual/en/zend.mime.mime.html#zend.mime.mime.static Zend Framework MIME constants} are allowed.</li>
    *   <li><b>filename</b>: Display name for the attached file.</li>
    * </ul>
    *
    * Take a look at this sample function for the event:
    *
    * <code>
    *  function zmCustomCustomizeAttachment($sender, $params)
    *  {
    *   $result=array();
    *   list($key, $attachment)=each($params);
    *   if ($attachment=='index.php')
    *   {
    *       $result['mimetype']=Zend_Mime::TYPE_TEXT;
    *       $result['disposition']=Zend_Mime::DISPOSITION_INLINE;
    *   }
    *   return($result);
    *  }
    * </code>
    *
    * @var      string
    */
   protected $_oncustomizeattachment = null;

   /**
    * Getter method for {@link $_oncustomizeattachment}.
    *
    * @return   string  {@link $_oncustomizeattachment}
    */
   function getOnCustomizeAttachment()    {return $this->_oncustomizeattachment;}

   /**
    * Setter method for {@link $_oncustomizeattachment}.
    *
    * @param    string  $value
    */
   function setOnCustomizeAttachment($value)    {$this->_oncustomizeattachment = $value;}

   /**
    * Getter for {@link $_oncustomizeattachment}’s default value.
    *
    * @return   string  Null
    */
   function defaultOnCustomizeAttachment()    {return null;}

   // Headers

   /**
    * Custom headers.
    *
    * Use this property to set custom headers for the email.
    *
    * It is a <b>simple array</b>, and each item is a string with the following syntax:
    * '<b><i>header name</i></b>=<b><i>value</i></b>'.
    *
    * You can safely set the same header several times to different values, so all those values are
    * used.
    *
    * @var      array
    */
   protected $_headers = array();

   /**
    * Getter method for {@link $_headers}.
    *
    * @return   array   {@link $_headers}
    */
   function getHeaders()    {return $this->_headers;}

   /**
    * Setter method for {@link $_headers}.
    *
    * @param    array   $value
    */
   function setHeaders($value)    {$this->_headers = $value;}

   /**
    * Getter for {@link $_headers}’s default value.
    *
    * @return   array   Empty array
    */
   function defaultHeaders()    {return array();}

   /**
    * Sends an email with provided settings.
    *
    * This method also triggers {@link $_oncustomizeattachment OnCustomizeAttachment} event right
    * before adding each attachment.
    */
   function send()
   {
      $mail = new Zend_Mail();

      if(trim($this->_fromemail) != '')
         $mail->setFrom($this->_fromemail, $this->_fromname);

      if(trim($this->_bodytext) != '')
         $mail->setBodyText($this->_bodytext);

      if(trim($this->_bodyhtml) != '')
         $mail->setBodyHtml($this->_bodyhtml);

      if(trim($this->_subject) != '')
         $mail->setSubject($this->_subject);

      if(count($this->_to) >= 1)
      {
         reset($this->_to);
         while(list($email, $name) = each($this->_to)) $mail->addTo($email, $name);
      }

      if(count($this->_cc) >= 1)
      {
         reset($this->_cc);
         while(list($email, $name) = each($this->_cc)) $mail->addCc($email, $name);
      }

      if(count($this->_bcc) >= 1)
      {
         reset($this->_bcc);
         while(list($email, $name) = each($this->_bcc)) $mail->addBcc($email, $name);
      }

      if(count($this->_attachments) >= 1)
      {
         reset($this->_attachments);
         while(list($key, $path) = each($this->_attachments))
         {
            $contents = '';
            $mimetype = Zend_Mime::TYPE_OCTETSTREAM;
            $disposition = Zend_Mime::DISPOSITION_ATTACHMENT;
            $encoding = Zend_Mime::ENCODING_BASE64;
            $filename = basename($path);
            $params = array();

            if($this->_oncustomizeattachment != null)
            {
               $params = $this->callEvent('oncustomizeattachment', array($key=>$path));
            }

            if(isset($params['body']))
               $body = $params['body'];
            else
               $body = file_get_contents($path);

            if(isset($params['mimetype']))
               $mimetype = $params['mimetype'];
            if(isset($params['disposition']))
               $disposition = $params['disposition'];
            if(isset($params['encoding']))
               $encoding = $params['encoding'];
            if(isset($params['filename']))
               $filename = $params['filename'];

            $mail->createAttachment($body, $mimetype, $disposition, $encoding, $filename);
         }
      }

      if(count($this->_headers) >= 1)
      {
         $keys = array();
         reset($this->_headers);
         while(list($key, $line) = each($this->_headers))
         {
            $parts = explode('=', $line);
            $header = $parts[0];
            $value = $parts[1];
            $append = array_key_exists($header, $keys);
            $mail->addHeader($header, $value, $append);
            $keys[$header] = 1;
         }

      }

      $transport = null;

      if(is_object($this->_transport))
         $transport = $this->_transport->readTransport();

      $mail->send($transport);
   }

   /**
    * Returns an instance of {@link Zend_Mail} with provided settings.
    *
    * @return   Zend_Mail
    */
   function createMail()
   {
      $mail = new Zend_Mail();

      $this->setTransport($this->fixupProperty($this->_transport));
      $transport = null;
      if(is_object($this->_transport))
      {
         $transport = $this->_transport->readTransport();
         print_r($transport);
         Zend_Mail::setDefaultTransport($transport);
      }

      if(trim($this->_fromemail) != '')
         $mail->setFrom($this->_fromemail, $this->_fromname);

      if(trim($this->_bodytext) != '')
         $mail->setBodyText($this->_bodytext);

      if(trim($this->_bodyhtml) != '')
         $mail->setBodyHtml($this->_bodyhtml);

      if(trim($this->_subject) != '')
         $mail->setSubject($this->_subject);

      if(count($this->_to) >= 1)
      {
         reset($this->_to);
         while(list($email, $name) = each($this->_to)) $mail->addTo($email, $name);
      }

      if(count($this->_cc) >= 1)
      {
         reset($this->_cc);
         while(list($email, $name) = each($this->_cc)) $mail->addCc($email, $name);
      }

      if(count($this->_bcc) >= 1)
      {
         reset($this->_bcc);
         while(list($email, $name) = each($this->_bcc)) $mail->addBcc($email, $name);
      }
       print_r($mail);
      return $mail;
   }
}

// Authentication Methods

/**
 * No authentication required.
 * 
 * @const       saNone
 */
define('saNone', 'saNone');

/**
 * Plain authentication method.
 * 
 * @const       saPlain
 */
define('saPlain', 'saPlain');

/**
 * Login authentication method.
 * 
 * @const       saLogin
 */
define('saLogin', 'saLogin');

/**
 * CRAM-MD5 authentication method.
 * 
 * @const       saCRAM_MD5
 */
define('saCRAM_MD5', 'saCRAM_MD5');

// Security Protocols

/**
 * No security protocol.
 * 
 * @const       spNone
 */
define('spNone','spNone');

/**
 * TLS security protocol.
 * 
 * @const       spTLS
 */
define('spTLS','spTLS');

/**
 * SSL security protocol.
 * 
 * @const       spSSL
 */
define('spSSL','spSSL');

/**
 * Base class for transport methods.
 *
 * {@internal Inherit from this class if you want to create your own transport method.}}
 *
 * @package     ZendFramework
 */
class ZMailTransport extends Component
{
}

/**
 * Transport method to send emails from an SMTP server.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.mail.sending.html Zend Framework Documentation
 */
class ZMailTransportSMTP extends ZMailTransport
{

   // Host

   /**
    * SMTP server address.
    *
    * @see $_port
    *
    * @var      string
    */
   protected $_host = "127.0.0.1";

   /**
    * Getter method for {@link $_host}.
    *
    * @return   string  {@link $_host}
    */
   function getHost()    {return $this->_host;}

   /**
    * Setter method for {@link $_host}.
    *
    * @param    string  $value
    */
   function setHost($value)    {$this->_host = $value;}

   /**
    * Getter for {@link $_host}’s default value.
    *
    * @return   string  Local host ('127.0.0.1')
    */
   function defaultHost()    {return "127.0.0.1";}

   // Authentication Method

   /**
    * Authentication method.
    *
    * Possible values are: {@link saNone}, {@link saPlain}, {@link saLogin}, or {@link saCRAM_MD5}.
    *
    * @var      string
    */
   protected $_authentication = saNone;

   /**
    * Getter method for {@link $_authentication}.
    *
    * @return   string  {@link $_authentication}
    */
   function getAuthentication()    {return $this->_authentication;}

   /**
    * Setter method for {@link $_authentication}.
    *
    * @param    string  $value
    */
   function setAuthentication($value)    {$this->_authentication = $value;}

   /**
    * Getter for {@link $_authentication}’s default value.
    *
    * @return   string  {@link saNone}
    */
   function defaultAuthentication()    {return saNone;}

   // Username

   /**
    * Username for user authentication.
    *
    * This property is only needed when {@link $_authentication} is <i>not</i> set to
    * {@link saNone}.
    *
    * @see $_userpassword
    *
    * @var      string
    */
   protected $_username = "";

   /**
    * Getter method for {@link $_username}.
    *
    * @return   string  {@link $_username}
    */
   function getUserName()    {return $this->_username;}

   /**
    * Setter method for {@link $_username}.
    *
    * @param    string  $value
    */
   function setUserName($value)    {$this->_username = $value;}

   /**
    * Getter for {@link $_username}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultUserName()    {return "";}

   // Password

   /**
    * User password.
    *
    * This property is only needed when {@link $_authentication} is <i>not</i> set to
    * {@link saNone}.
    *
    * @see $_username
    *
    * @var      string
    */
   protected $_userpassword = "";

   /**
    * Getter method for {@link $_userpassword}.
    *
    * @return   string  {@link $_userpassword}
    */
   function getUserPassword()    {return $this->_userpassword;}

   /**
    * Setter method for {@link $_userpassword}.
    *
    * @param    string  $value
    */
   function setUserPassword($value)    {$this->_userpassword = $value;}

   /**
    * Getter for {@link $_userpassword}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultUserPassword()    {return "";}

   // Security Protocol

   /**
    * Security protocol.
    *
    * Possible values are: {@link spNone}, {@link spSSL}, or {@link spTLS}.
    *
    * @var      string
    */
   protected $_secureprotocol = spNone;

   /**
    * Getter method for {@link $_secureprotocol}.
    *
    * @return   string  {@link $_secureprotocol}
    */
   function getSecureProtocol()    {return $this->_secureprotocol;}

   /**
    * Setter method for {@link $_secureprotocol}.
    *
    * @param    string  $value
    */
   function setSecureProtocol($value)    {$this->_secureprotocol = $value;}

   /**
    * Getter for {@link $_secureprotocol}’s default value.
    *
    * @return   string  {@link spSSL}
    */
   function defaultSecureProtocol()    {return spSSL;}

   // Port

   /**
    * Port number where SMTP server can be reached.
    *
    * @see $_host
    *
    * @var      string
    */
   protected $_port = '';

   /**
    * Getter method for {@link $_port}.
    *
    * @return   string  {@link $_port}
    */
   /**
   * If the secure protocol requires change port, must be set on this property
   *
   * @return String
   */
   function getPort()    {return $this->_port;}

   /**
    * Setter method for {@link $_port}.
    *
    * @param    string  $value
    */
   function setPort($value)    {$this->_port = $value;}

   /**
    * Getter for {@link $_port}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultPort()    {return '';}

   /**
    * Returns an instance of {@link Zend_Mail_Transport_Smtp} with provided settings.
    *
    * This method is called from both {@link ZMail::send()} and {@link ZMail::createMail()}, you
    * will rarely need to manually call it.
    *
    * @return Zend_Mail_Transport_Smtp
    *
    * @internal
    */
   function readTransport()
   {
      $config = array();

      switch($this->_authentication)
      {
         case saPlain: $config['auth'] = 'plain';break;
         case saLogin: $config['auth'] = 'login';break;
         case saCRAM_MD5: $config['auth'] = 'crammd5';break;
      }


      if($this->_username != '')
         $config['username'] = $this->_username;
      if($this->_userpassword != '')
         $config['password'] = $this->_userpassword;

      switch($this->_secureprotocol)
      {
          case spSSL: $config['ssl']='ssl';break;
          case spTLS: $config['ssl']='tls';break;
      }

      if($this->_port!='')
      {
          $config['port'] = $this->_port;
      }

      $result = new Zend_Mail_Transport_Smtp($this->_host, $config);

      return ($result);
   }

}

/**
 * Transport method to send emails through Sendmail.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.mail.introduction.html#zend.mail.introduction.sendmail Zend Framework Documentation
 */
class ZMailTransportSendmail extends ZMailTransport
{

   // Parameters

   /**
    * Additional parameters.
    *
    * {@link ZMailTransportSendmail} is basically a wrapper for {@link mail()} PHP function. This
    * property is the equivalent to the fifth parameter to that function, <tt>additional_parameters</tt>,
    * so check {@link http://php.net/manual/en/function.mail.php PHP Documentation} for additional
    * information.
    *
    * It is common to use this property to set the sender email address through Sendmail <tt>-f</tt>
    * option. For example: '-finfo@example.com'.
    *
    * @var      string
    */
   protected $_parameters = "";

   /**
    * Getter method for {@link $_parameters}.
    *
    * @return   string  {@link $_parameters}
    */
   function getParameters()    {return $this->_parameters;}

   /**
    * Setter method for {@link $_parameters}.
    *
    * @param    string  $value
    */
   function setParameters($value)    {$this->_parameters = $value;}

   /**
    * Getter for {@link $_parameters}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultParameters()    {return "";}

   /**
    * Returns an instance of {@link Zend_Mail_Transport_Sendmail} with provided settings.
    *
    * This method is called from both {@link ZMail::send()} and {@link ZMail::createMail()}, you
    * will rarely need to manually call it.
    *
    * @return Zend_Mail_Transport_Sendmail
    *
    * @internal
    */
   function readTransport()
   {
      $result = new Zend_Mail_Transport_Sendmail($this->_parameters);
      return ($result);
   }

}

?>