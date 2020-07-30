<?php
/**
 *  This file is part of the RPCL project
 *
 *  Copyright (c) 2004-2011 Embarcadero Technologies, Inc.
 *
 *  Checkout AUTHORS file for more information on the developers
 *
 *  This library is free software; you can redistribute it and/or
 *  modify it under the terms of the GNU Lesser General Public
 *  License as published by the Free Software Foundation; either
 *  version 2.1 of the License, or (at your option) any later version.
 *
 *  This library is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 *  Lesser General Public License for more details.
 *
 *  You should have received a copy of the GNU Lesser General Public
 *  License along with this library; if not, write to the Free Software
 *  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307
 *  USA
 *
 */

use_unit("forms.inc.php");

class Controller extends DataModule
{
   public $_smarty = null;
   public $_viewtemplate= null;

   function assign($tpl_var, $value = null)
   {
      $this->_viewtemplate->assign($tpl_var,$value);
      $this->_smarty->assign($tpl_var,$value);
   }

   function init()
   {
      require_once("smarty/libs/Smarty.class.php");
      $this->_smarty = new Smarty;
      $this->_viewtemplate = new Smarty;

      //$this->_smarty->left_delimiter='{%';
      //$this->_smarty->right_delimiter='%}';
      $this->_smarty->template_dir = '';

      if(preg_match("/^WIN/i", PHP_OS))
      {
         if(isset($_ENV['TMP']))
         {
            $this->_smarty->compile_dir = $_ENV['TMP'];
         }
         elseif(isset($_ENV['TEMP']))
         {
            $this->_smarty->compile_dir = $_ENV['TEMP'];
         }
         else
         {
            $tmpfolder = getenv('TMP');
            if(($tmpfolder === false) || ($tmpfolder == ''))
            {
               $tmpfolder = getenv('TEMP');
               if(($tmpfolder === false) || ($tmpfolder == ''))
               {
                  $tmpfolder = '/tmp';
               }
            }
            $this->_smarty->compile_dir = $tmpfolder;
         }
      }
      else
      {
         $this->_smarty->compile_dir = '/tmp';
      }
      $this->_smarty->cache_dir = $this->_smarty->compile_dir;

      $this->_viewtemplate->template_dir = $this->_smarty->template_dir;
      $this->_viewtemplate->compile_dir=$this->_smarty->compile_dir;
      $this->_viewtemplate->cache_dir=$this->_smarty->cache_dir;


      $uri = explode('/', $_SERVER['REQUEST_URI']);
      //      echo 'controller::init<hr>';
      $controller = $uri[1];
      $action = $uri[2];
      if($action == '')$action = 'Index';

      $params = array();
      for($i = 3; $i <= count($uri) - 1; $i++)$params[] = $uri[$i];

      $defaultview = $_SERVER['PHP_SELF'];
      $k = strpos($defaultview, '/', 1);
      if($k === false)
      {
      }
      else
      {
         $defaultview = substr($defaultview, 0, $k);
      }
      $defaultview = basename($defaultview);
      $subtemplate = str_replace('.php', '.' . $action . '.view.tpl', $defaultview);
      $defaultview = str_replace('.php', '.(default).view.tpl', $defaultview);

      ob_start();
      foreach($this->_actions as $actionrecord)
      {
         if(strtolower($action) == strtolower($actionrecord['Action']))
         {
            $event = $actionrecord['OnExecute'];
            $useview= $actionrecord['UseView'];
            $usedefaultview= $actionrecord['UseDefaultView'];
            //TODO: Load the right view
            if($this->methodExists($event))
               $this->$event($this, $params);
            break;
         }
      }

      if ($useview=='true') $this->_viewtemplate->display($subtemplate);

      $template_contents=ob_get_contents();
      ob_end_clean();

      if ($usedefaultview=='true')
      {
        $this->_smarty->assign('template_contents', $template_contents);
        $this->_smarty->display($defaultview);
      }
      else echo $template_contents;
   }

   protected $_actions = array();

   function getActions()    {return $this->_actions;}
   function setActions($value)    {$this->_actions = $value;}
   function defaultActions()    {return array();}
}

function MVCDispatcher()
{
   if(isset($_SERVER['REQUEST_URI']))
   {
      $uri = explode('/', $_SERVER['REQUEST_URI']);
      //    echo 'dispatcher<hr>';
      $controller = $uri[1];
      $k = strpos($controller, '?');
      if($k === false)
      {
      }
      else
      {
         $controller = substr($controller, 0, $k);
      }
      //    echo($controller);
      //    echo "<hr>";
      include_once($controller);
   }
}

MVCDispatcher();

?>