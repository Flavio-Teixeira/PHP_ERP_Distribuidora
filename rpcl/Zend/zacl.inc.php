<?php

/**
 * Zend/zacl.inc.php
 * 
 * Defines Zend Framework ACL component.
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
use_unit("classes.inc.php");
use_unit("controls.inc.php");
use_unit("extctrls.inc.php");
use_unit("Zend/framework/library/Zend/Acl.php");
use_unit('Zend/framework/library/Zend/Acl/Resource.php');
use_unit('Zend/framework/library/Zend/Acl/Role.php');

/**
 * Component to manage access control list (ACL) rules and apply them.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.acl.html Zend Framework Documentation
 */
class ZACL extends Component
{

   // Roles

   /**
    * Last roles parsed from the rules.
    *
    * Each string in the array corresponds to the value (name) of a role in the rules to be parsed.
    *
    * @var      array
    * @see      processRoles(), processResources()
    */
   protected $_lastroles = array();

   // Zend Framework ACL Instance

   /**
    * Instance of Zend Framework Access Control List class.
    *
    * @var      Zend_Acl
    */
   protected $_acl = null;

    // Constructor

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      // Calls inherited constructor.
      parent::__construct($aowner);

      // Gets and instance of Zend Framework ACL and stores it.
      $this->_acl = new Zend_Acl();

      // Includes the RPCL ACL Manager file.
      use_unit("acl.inc.php");

      // Get global RPCL ACL Manager instance.
      global $aclmanager;

      // Add new Zend Framework ACL to $aclmanager.
      $aclmanager->addACL($this);

      /*  Test data.
      $resources=array();
      $resources[]=array("type"=>'Page', "value1"=>"index.php", "value2"=>"","perm"=>"Allow", "right"=>"show,execute","parent"=>'');
      $resources[]=array("type"=>'Action', "value1"=>"ActnList1", "value2"=>"view_invoices", "perm"=>"Deny", "right"=>"execute","parent"=>'');
      $resources[]=array("type"=>'Control', "value1"=>"Button",    "value2"=>"btnReport",     "perm"=>"Allow", "right"=>"execute","parent"=>'');
      $resources[]=array("type"=>'Custom', "value1"=>"custom",    "value2"=>"custom",        "perm"=>"Deny", "right"=>"show","parent"=>'');

      $roles=array();
      $roles[]=array("type"=>"User","value"=>"pepe","parents"=>"");
      $roles[]=array("type"=>"Role","value"=>"managers","parents"=>"pepe");

      $rules=array();
      $rules[]=array("My Rule Description"=>array("Roles"=>$roles,"Resources"=>$resources));

      $this->_rules=$rules;
      */

   }

   // Rules

   /**
    * Rules.
    *
    * This array contains <b>key-value</b> pairs, where the key is a <b>description</b> of the
    * access control list rule, and the value is another<b>array</b>.
    *
    * This subarray contains also <b>key-value</b> pairs, this time the key is either <b>"Roles" or
    * "Resources"</b>, and the value is yet another <b>array</b>.
    *
    * Each role in the <b>roles</b> array will be an array with the following key-value pairs:
    *
    * <ul>
    *   <li><b>type</b>. Type of role, either 'User' or a normal 'Role'. This value is actually
    *   ignored when processing roles, since it does not change how they work.</li>
    *   <li><b>value</b>. Value (name) of the role.</li>
    *   <li><b>parents</b>. Comma-separated list of parent roles.</li>
    * </ul>
    * 
    * Each resource in the <b>resources</b> array will be an array with the following key-value
    * pairs:
    *
    * <ul>
    *   <li><b>type</b>. Type of resource. It can be set to these values:
    *     <ul>
    *       <li><b>'Page'</b>. Resource is a page.</li>
    *       <li><b>'Custom'</b>. Resource can be anything, or everything. (see <tt>value1</tt>)</li>
    *       <li>You can use any other value you fancy here for other resources.</li>
    *     </ul>
    *   </li>
    *   <li><b>value1</b>. The content of this value will depend on the type ofresource:
    *     <ul>
    *       <li>For a <b>'Page'</b> resource, <tt>value1</tt> would be the path of the script that
    *       generates that page, relative to the root of the project. For example: 'index.php'.</li>
    *       <li>For a <b>'Custom'</b> resource, <tt>value1</tt> could be anything. You can also set
    *       it to '*' or to an empty string, '', to apply this rule to every resource in the
    *       project.</li>
    *       <li>For any other type of resource, <tt>value1</tt> could be anything.</li>
    *     </ul>
    *   </li>
    *   <li><b>value2</b>. The content of this value will also depend on the type of resource:
    *     <ul>
    *       <li>For a <b>'Page'</b> resource, you do not even need to fill <tt>value2</tt>. If will
    *       be ignored.</li>
    *       <li>For a <b>'Custom'</b> resource, <tt>value2</tt> could be anything. You do not need
    *       to fill it, though, if you set <tt>value1</tt> to '*' or to an empty string, ''. (see
    *       <tt>value1</tt> above)</li>
    *       <li>For any other type of resource, <tt>value2</tt> could be anything.</li>
    *     </ul>
    *   </li>
    *   <li><b>perm</b>. Whether this rule is to allow the resource ("allow") or to deny it
    *   ("deny"). It defaults to "deny".</li>
    *   <li><b>right</b>. Comma-separated list of rights over the resource affected by this rule.
    *   For example: "execute" or "show".</li>
    *   <li><b>parent</b>. Name of the resource this resource inherits from. The name of the parent
    *   resource will depend on parent’s type of resource:
    *     <ul>
    *       <li>For a <b>'Page'</b> parent resource, use its <tt>value1</tt> property as name.</li>
    *       <li>For a <b>'Custom'</b> parent resource, name will be the concatenation of
    *       <tt>value1</tt> and <tt>value2</tt>, that is: <tt>value1</tt><tt>value2</tt>. You can
    *       not inherit from a custom resource for which <tt>value1</tt> is set to '*' or to an
    *       empty string, ''.</li>
    *       <li>For any other type of parent resource, name will be the concatenation of
    *       <tt>value1</tt> and <tt>value2</tt>, separated by a double colon (::); that is:
    *       <tt>value1</tt>::<tt>value2</tt>.</li>
    *     </ul>
    *   </li>
    * </ul>
    *                   
    * @var      array
    */
   protected $_rules = array();

   /**
    * Getter method for {@link $_rules}.
    *
    * @return   array   {@link $_rules}
    */
   function getRules() { return $this->_rules; }

   /**
    * Setter method for {@link $_rules}.
    *
    * @param    array   $value
    */
   function setRules($value) { $this->_rules = $value; $this->processRules(); }

   /**
    * Getter for {@link $_rules}’s default value.
    *
    * @return   array   Empty array
    */
   function defaultRules() { return array(); }

   // Process Roles

   /**
    * Updates {@link $_lastroles} content with new values.
    *
    * This method is called from {@link processRules()}, and what it does is to read given roles and
    * load them into {@link $_lastroles} property. {@link processRules()} then calls
    * {@link processResources()}, which works with the value of {@link $_lastroles} that has been
    * just set by this method.
    *
    * @param    array   $roles  See {@link $_rules}.
    *
    * @internal
    */
   function processRoles($roles)
   {
      // Empty the property with last parsed roles.
      $this->_lastroles = array();

      // Move the pointer to the first element of the given array.
      reset($roles);

      // For each role:
      while(list($k, $role) = each($roles))
      {
         // Creates a new instance of Zend Framework ACL Role.
         $roleobj = new Zend_Acl_Role($role['value']);

         // Add its name to the array of current roles, to be later used by processResources().
         $this->_lastroles[] = $role['value'];

         // If role has parents, define an array with them in $inheritsfrom. Else, set it to null.
         if($role['parents'] != '') $inheritsfrom = explode(",", $role['parents']);
         else $inheritsfrom = null;

         // Add the instance of a Zend Framework ACL Role to $_acl (instance of Zend Framework ACL)
         // with the parents array (if any).
         $this->_acl->addRole($roleobj, $inheritsfrom);
      }
   }

   // Process Resources

   /**
    * Processes given resource and adds a rule based on it and {@link $_lastroles} to Zend Framework
    * ACL.
    *
    * This method is called from {@link processRules()}.
    *
    * @param    array   $resources      See {@link $_rules}.
    *
    * @internal
    */
   function processResources($resources)
   {

      // Move the pointer to the first element of the given array.
      reset($resources);

      // For each resource:
      while(list($k, $resource) = each($resources))
      {
         // Get the type.
         $restype = $resource['type'];
         
         // If it is a page, set $resourcename to its first value.
         if($restype == 'Page') $resname = $resource['value1'];

         // If it is a custom resource:
         else if($restype == 'Custom')
         {
            $resname = $resource['value1'] . $resource['value2'];

            // If value1 is either empty or '*', $resname is set to null.
            // Null here equals to everything. That is, all resources would be affected.
            if(($resource['value1'] = '') || ($resource['value1'] = '*'))
            {
               $resname = null;
            }
         }
         else $resname = $resource['value1'] . '::' . $resource['value2'];

         // Set parent resource if any.
         if($resource['parent'] != '') $inheritsfrom = $resource['parent'];
         else $inheritsfrom = null;

         // Set resource rights if any.
         if($resource['right'] != '') $priv = explode(",", $resource['right']);
         else $priv = null;

         // Add resource to the Zend Framework ACL only if it was not already added.
         if($resname != '')
         {
            if(!$this->_acl->has($resname))
            {
               $this->_acl->add(new Zend_Acl_Resource($resname), $inheritsfrom);
            }
         }
         else $resname = null;

         // Allow or deny (default) resource.
         if(strtolower($resource['perm']) == 'allow')
         {
            $this->_acl->allow($this->_lastroles, $resname, $priv);
         }
         else
         {
            $this->_acl->deny($this->_lastroles, $resname, $priv);
         }
      }
   }

   // Add a Resource

   /**
    * Adds given resource to Zend Framework ACL.
    *
    * It has no effect if a resource with the same name already exists.
    *
    * @param    string  $resourcename
    */
   function add($resourcename)
   {
      if(!$this->_acl->has($resourcename))
      {
         $this->_acl->add(new Zend_Acl_Resource($resourcename));
      }
   }

   // Is Allowed

   /**
    * Checks whether given user has given privilege over given resource.
    *
    * @param    string  $role           See {@link $_rules} (role value).
    * @param    string  $resource       See {@link $_rules} (resource parent explains name
    *                                   generation).
    * @param    string  $privilege      See {@link $_rules} (resource right).
    *
    * @return   boolean
    */
   function isAllowed($role = null , $resource = null , $privilege = null)
   {
      return($this->_acl->isAllowed($role, $resource, $privilege));
   }

   // Process Rules

   /**
    * Processes {@link $_rules}, and adds them to to Zend Framework ACL.
    *
    * @internal
    */
   function processRules()
   {
      reset($this->_rules);
      while(list($krule, $rulearray) = each($this->_rules))
      {
         list($description, $rule) = each($rulearray);
         $roles = $rule["Roles"];
         $this->processRoles($roles);

         $resources = $rule["Resources"];
         $this->processResources($resources);
      }
   }
}

?>