<?php

/**
 * Zend/zgdatacalendar.inc.php
 * 
 * Defines Zend Framework Google Calendar component.
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
use_unit("Zend/framework/library/Zend/Gdata/Calendar.php");

// Calendar Projections

/**
 * Event full projection.
 * 
 * @const       pcFull
 */
define('pcFull', 'pcFull');

/**
 * Event basic projection. It places most meta-data into each event’s content field as human
 * readable text.
 * 
 * @const       pcBasic
 */
define('pcBasic', 'pcBasic');

/**
 * Event composite projection. It includes complete text for any comments alongside each event, so
 * it is often much larger than the {@link pcFull} projection. 
 * 
 * @const       pcComposite
 */
define('pcComposite', 'pcComposite');

/**
 * Event custom projection.
 * 
 * @const       own_calendar
 */
define('own_calendar', "http://www.google.com/calendar/feeds/default/owncalendars/full");

/**
 * Component to manage Google Calendar service.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.gdata.calendar.html Zend Framework Documentation
 */
class ZGDataCalendar extends Component
{

   // Zend Google Calendar

   /**
    * Zend Framework Google Calendar instance.
    *
    * @var      Zend_Gdata_Calendar
    */
   private $_calendar = null;

   // Visibility

   /**
    * Whether user is or not authenticated.
    *
    * It can be either 'public' (not authenticated) or 'private' (authenticated).
    *
    * @var      string
    */
   private $_visibility = 'public';

   // Constructor

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
   }

   // Application Name

   /**
    * Name of your application.
    *
    * @var      string
    */
   protected $_applicationname = '';

   /**
    * Getter method for {@link $_applicationname}.
    *
    * @return   string  {@link $_applicationname}
    */
   function getApplicationName()    {return $this->_applicationname;}

   /**
    * Setter method for {@link $_applicationname}.
    *
    * @param    string  $value
    */
   function setApplicationName($value)    {$this->_applicationname = $value;}

   /**
    * Getter for {@link $_applicationname}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultApplicationName()    {return '';}

   // Loaded

   /**
    * {@inheritdoc}
    */
   function loaded()
   {
      if($this->_onauthentication != null)
      {
         $aux = $this->callEvent('onauthentication', array('service'=>Zend_Gdata_Calendar::AUTH_SERVICE_NAME, 'url'=>Zend_Gdata_Calendar::CALENDAR_FEED_URI,'appname'=>$this->_applicationname));
         if($aux)
         {
            $this->_calendar = new Zend_Gdata_Calendar($aux,$this->_applicationname);
            $this->_visibility = 'private';
         }
         else
         {
            $this->_calendar = new Zend_Gdata_Calendar(null,$this->_applicationname);
            $this->_visibility = 'public';
         }
      }
      else
      {
         $this->_calendar = new Zend_Gdata_Calendar(null,$this->_applicationname);
         $this->_visibility = 'public';
      }

   }

   // On Authentication

   /**
    * Event triggered for user authentication against Google Calendar service.
    * 
    * This event is triggered as soon as this component is {@link loaded() loaded}.
    *
    * This property should either contain the name of the function to be run when the event is
    * triggered (without brackets), or be set to null.
    *
    * If the name of a function is provided, such a function should expect the following key-value
    * pairs in the parameters array, passed to the function as its second parameter:
    * <ul>
    *   <li><b>service</b>: {@link Zend_Gdata_Calendar::AUTH_SERVICE_NAME}.</li>
    *   <li><b>url</b>: {@link Zend_Gdata_Calendar::CALENDAR_FEED_URI}.</li>
    *   <li><b>appname</b>: {@link $_applicationname}.</li>
    * </ul>
    *
    * It is also expected to return a boolean value. If true is returned, component will initialize
    * {@link $_calendar} and set {@link $_visibility} to 'private'. If false is returned,
    * {@link $_calendar} will also be initialized, but {@link $_visibility} will be set to 'public'
    * instead.
    *
    * @var      string
    */
   protected $_onauthentication = null;

   /**
    * Getter method for {@link $_onauthentication}.
    *
    * @return   string  {@link $_onauthentication}
    */
   function getOnAuthentication()    {return $this->_onauthentication;}

   /**
    * Setter method for {@link $_onauthentication}.
    *
    * @param    string  $value
    */
   function setOnAuthentication($value)    {$this->_onauthentication = $value;}

   /**
    * Getter for {@link $_onauthentication}’s default value.
    *
    * @return   string  Null
    */
   function defaultOnAuthentication()    {return null;}

   // Calendar Projection

   /**
    * Amount and format of the data to be retrieved from the server.
    *
    * @var      string
    */
   protected $_projectioncalendar = pcFull;

   /**
    * Getter method for {@link $_projectioncalendar}.
    *
    * @return   string  {@link $_projectioncalendar}
    */
   function getProjectionCalendar()    {return $this->_projectioncalendar;}

   /**
    * Setter method for {@link $_projectioncalendar}.
    *
    * @param    string  $value
    */
   function setProjectionCalendar($value)    {$this->_projectioncalendar = $value;}

   /**
    * Getter for {@link $_projectioncalendar}’s default value.
    *
    * @return   string  pcFull
    */
   function defaultProjectionCalendar()    {return pcFull;}

   /**
    * Retrieves user calendars.
    *
    * This method will not work unless user is properly authenticated.
    * 
    * If {@link $_calendar} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_Calendar_ListFeed} for
    * user calendars.
    *
    * @return   boolean|Zend_Gdata_Calendar_ListFeed
    */
   function retrieveCalendarList()
   {

      if($this->_calendar != null)
      {
         $feed = $this->_calendar->getCalendarListFeed();
         return $feed;
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves calendar events.
    *
    * You must pass the call an array as first argument, {@link $params}. You can add some kay-value
    * pairs to that array. You can find those on {@link http://code.google.com/apis/calendar/data/1.0/reference.html#Parameters Google Documentation}.
    * For those properties with '-' character as separator, use '_' instead. For example, use
    * 'start_min' instead of 'start-min'.
    * 
    * If {@link $_calendar} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get a {@link Zend_Gdata_Calendar_EventFeed collection} of
    * {@link Zend_Gdata_Calendar_EventEntry events} for {@link $id_calendar given calendar}.
    *
    * @param    array   $params         Retrieval parameters.
    * @param    string  $id_calendar    Calendar identifier.
    * @return   boolean|Zend_Gdata_Calendar_EventFeed
    */
   function retrieveCalendarEvents($params, $id_calendar = '')
   {
      if($this->_calendar != null)
      {
         if($id_calendar != '')
         {
            $query = $this->_calendar->newEventQuery($id_calendar);
            $query->setVisibility('');
            $query->setProjection('');
            $query->setUser('');

         }
         else
         {
            $query = $this->_calendar->newEventQuery();
            $query->setVisibility($this->_visibility);
            $projection = '';
            switch($this->_projectioncalendar)
            {
               case pcFull:
                  $projection = 'full';
                  break;
               case pcComposite:
                  $projection = 'composite';
                  break;
               case pcBasic:
                  $projection = 'basic';
                  break;
            }
            $query->setProjection($projection);

         }

         if(isset($params['user']))
         {
            $query->setUser($params['user']);
         }

         if(isset($params['orderby']))
         {
            $query->setOrderBy($params['orderby']);
         }

         if(isset($params['sortorder']))
         {
            $query->setSortOrder($params['sortorder']);
         }

         if(isset($params['singleevents']))
         {
            $query->setSingleEvents($params['singleevents']);
         }

         if(isset($params['futureevents']))
         {
            $query->setFutureEvents($params['futureevents']);
         }

         if(isset($params['start_min']))
         {
            $query->setStartMin($params['startdatemin']);
         }

         if(isset($params['recurrence_expansion_start']))
         {
            $query->setRecurrenceExpansionStart($params['recurrence_expansion_start']);
         }

         if(isset($params['recurrence_expansion_end']))
         {
            $query->setRecurrenceExpansionEnd($params['recurrence_expansion_end']);
         }

         if(isset($params['start_max']))
         {
            $query->setStartMax($params['startdatemax']);
         }

         if(isset($params['search']))
         {
            $query->setQuery($params['search']);
         }

         $events = $this->_calendar->getCalendarEventFeed($query);

         return $events;
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves an event.
    * 
    * If {@link $_calendar} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_Calendar_EventEntry} for
    * requested event.
    *
    * @param    string  $id_event       Event identifier.
    * @return   boolean|Zend_Gdata_Calendar_EventEntry
    */
   function retrieveOneEvent($id_event)
   {
      if($this->_calendar != null)
      {
         $query = $this->_calendar->newEventQuery();

         $projection = '';
         switch($this->_projectioncalendar)
         {
            case pcFull:
               $projection = 'full';
               break;
            case pcComposite:
               $projection = 'composite';
               break;
            case pcBasic:
               $projection = 'basic';
               break;
         }
         $query->setProjection($projection);
         $query->setVisibility('');
         $query->setEvent($id_event);
         $query->setUser('');

         $event = $this->_calendar->getCalendarEventEntry($id_event);
         return $event;
      }
      else
      {
         return false;
      }
   }

   /**
    * Generator for {@link $_calendar}.
    *
    * Generates a Zend Framework Google Calendar from those properties set for this
    * {@link ZGDataCalendar} instance (or defaults), and saves it to {@link $_calendar}.
    *
    * This method will not work unless user is properly authenticated.
    *
    * Only parameter is a key-value array with the following optional pairs:
    * <ul>
    *   <li><b>title</b>: Calendar title.</li>
    *   <li><b>summary</b>: Calendar description.</li>
    *   <li><b>where</b>: Calendar location.</li>
    *   <li><b>timezone</b>: Calendar timezone.</li>
    *   <li><b>hidden</b>: Whether calendar should be hidden or not.</li>
    *   <li><b>color</b>: Calendar color. See {@link http://code.google.com/apis/calendar/data/1.0/reference.html#Calendar_feeds Google Documentation}
    *                     for a list of available colors.</li>
    * </ul>
    * 
    * If {@link $_calendar} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_Calendar_EventEntry}.
    *
    * @param    array   $params Array of optional parameters.
    * @return   boolean|Zend_Gdata_Calendar_EventEntry
    */
   function createCalendar($params)
   {
      if($this->_calendar != null)
      {
         $newCalendar = $this->_calendar->newListEntry();

         if(isset($params['title']))
         {
            $newCalendar->title = $this->_calendar->newTitle($params['title']);
         }

         if(isset($params['summary']))
         {
            $newCalendar->summary = $this->_calendar->newSummary($params['summary']);
         }

         if(isset($params['where']))
         {
            $newWhere = $this->_calendar->newWhere();
            $newWhere->valueString = $params['where'];
            $newCalendar->where = array($newWhere);
         }

         if(isset($params['timezone']))
         {
            $newTimezone = $this->_calendar->newTimezone();
            $newTimezone->value = $params['timezone'];
            $newCalendar->timezone = $newTimezone;
         }

         if(isset($params['hidden']))
         {
            $newHidden = $this->_calendar->newHidden();
            $newHidden->setValue($params['hidden']);
            $newCalendar->hidden = $newHidden;
         }

         if(isset($params['color']))
         {
            $newColor = $this->_calendar->newColor();
            $newColor->value = $params['color'];
            $newCalendar->color = $newColor;
         }

         return $this->_calendar->insertEvent($newCalendar, own_calendar);
      }
      else
      {
         return false;
      }
   }

   /**
    * Modifies {@link $_calendar}.
    *
    * This method will not work unless user is properly authenticated.
    *
    * Second parameter is a key-value array with the following optional pairs:
    * <ul>
    *   <li><b>title</b>: Calendar title.</li>
    *   <li><b>summary</b>: Calendar description.</li>
    *   <li><b>where</b>: Calendar location.</li>
    *   <li><b>timezone</b>: Calendar timezone.</li>
    *   <li><b>hidden</b>: Whether calendar should be hidden or not.</li>
    *   <li><b>color</b>: Calendar color. See {@link http://code.google.com/apis/calendar/data/1.0/reference.html#Calendar_feeds Google Documentation}
    *                     for a list of available colors.</li>
    * </ul>
    * 
    * If {@link $_calendar} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_Calendar_EventEntry}.
    *
    * @param    string  $id_calendar    Calendar identifier.
    * @param    array   $params         Array of optional parameters.
    * @return   boolean|Zend_Gdata_Calendar_EventEntry
    */
   function modifyCalendar($id_calendar, $params)
   {
      if($this->_calendar != null)
      {
         $calendar=$this->_calendar->getCalendarListEntry($id_calendar);
         if(isset($params['title']))
         {
            $calendar->title = $this->_calendar->newTitle($params['title']);
         }

         if(isset($params['summary']))
         {
            $calendar->summary = $this->_calendar->newSummary($params['summary']);
         }

         if(isset($params['where']))
         {
            $newWhere = $this->_calendar->newWhere();
            $newWhere->valueString = $params['where'];
            $calendar->where = array($newWhere);
         }

         if(isset($params['timezone']))
         {
            $newTimezone = $this->_calendar->newTimezone();
            $newTimezone->value = $params['timezone'];
            $calendar->timezone = $newTimezone;
         }

         if(isset($params['hidden']))
         {
            $newHidden = $this->_calendar->newHidden();
            $newHidden->setValue($params['hidden']);
            $calendar->hidden = $newHidden;
         }

         if(isset($params['color']))
         {
            $newColor = $this->_calendar->newColor();
            $newColor->value = $params['color'];
            $calendar->color = $newColor;
         }

         $calendar->save();

         return $calendar;
      }
      else
      {
         return false;
      }
   }

   /**
    * Deletes a calendar.
    * 
    * If {@link $_calendar} is not set (is null), this method will return a boolean value, false. If
    * it is set, it will return nothing (void).
    * 
    * @param    string  $id_calendar    Calendar identifier.
    * @return   boolean|void
    */
   function deleteCalendar($id_calendar)
   {
      if($this->_calendar != null)
      {
         return $this->_calendar->delete($id_calendar);
      }
      else
      {
         return false;
      }
   }

   /**
    * Creates a new event on a calendar.
    *
    * Only parameter is a key-value array with the following optional pairs:
    * <ul>
    *   <li><b>calendar</b>: Calendar identifier.</li>
    *   <li><b>title</b>: Event title.</li>
    *   <li><b>where</b>: Event location.</li>
    *   <li><b>startDate</b>: Event start date.</li>
    *   <li><b>startTime</b>: Event start time.</li>
    *   <li><b>endDate</b>: Event end date.</li>
    *   <li><b>endTime</b>: Event end time.</li>
    *   <li><b>tzOffset</b>: Event timezone.</li>
    *   <li><b>eventStatus</b>: Event status. Possible values are: 'canceled', 'confirmed', or 'tentative'.</li>
    *   <li><b>transparency</b>: Event transparency. Possible values are: 'opaque' or 'transparent'.</li>
    *   <li><b>visibility</b>: Event visibility. Possible values are: 'confidential', 'default', 'private', or 'public'.</li>
    *   <li><b>recurrence</b>: Event recurrence. See {@link http://code.google.com/apis/gdata/docs/1.0/elements.html#gdRecurrence Google Documentation}.</li>
    *   <li><b>reminders</b>: Array of event reminders, each of which is also an array with the following key-value pairs:
    *     <ul>
    *       <li><b>method</b>: Reminder method. Possible values are: 'sms', 'alert', or 'email'.</li>
    *       <li><b>absolutTime</b>: Reminder time.</li>
    *       <li><b>minutes</b>: Reminder time in minutes before the start of the event.</li>
    *     </ul>
    *   </li>
    *   <li><b>webcontent</b>: Array with the folowwing key-value pairs:
    *     <ul>
    *       <li><b>url</b>: URL to the content of the pop-up window.</li>
    *       <li><b>height</b>: Pop-up window height.</li>
    *       <li><b>width</b>: Pop-up window width.</li>
    *       <li><b>type</b>: Content type.</li>
    *       <li><b>href</b>: Icon URL.</li>
    *     </ul>
    *   </li>
    * </ul>
    * 
    * If {@link $_calendar} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get new event identifier.
    *
    * @param    array   $params Parameters.
    * @return   boolean|string
    */
   function createEvent($params)
   {

      if($this->_calendar != null)
      {
         $newEvent = $this->_calendar->newEventEntry();

         if(isset($params['title']))
         {
            $newEvent->title = $this->_calendar->newTitle($params['title']);
         }

         if(isset($params['where']))
         {
            $newEvent->where = array($this->_calendar->newWhere($params['where']));
         }
         if(isset($params['recurrence']))
         {
            $newEvent->setRecurrence($this->_calendar->newRecurrence($params['recurrence']));
         }
         else
         {
            if(isset($params['startDate']) && isset($params['endDate']))
            {
               $when = $this->_calendar->newWhen();
               $when->startTime = $params['startDate'];
               if(isset($params['startTime']))
               {
                  $when->startTime .= 'T' . $params['startTime'] . ':00.000';
               }
               if(isset($params['tzOffset']))
               {
                  $when->startTime .= $params['tzOffset'] . ':00';
               }
               $when->endTime = $params['endDate'];
               if(isset($params['endTime']))
               {
                  $when->endTime .= 'T' . $params['endTime'] . ':00.000';
               }
               if(isset($params['tzOffset']))
               {
                  $when->endTime .= $params['tzOffset'] . ':00';
               }
               if(isset($params['reminders']))
               {

                  $reminders = array();
                  foreach($params['reminders'] as $reminder)
                  {
                     $newReminder = $this->_calendar->newReminder();
                     switch($reminder['method'])
                     {
                        case 'sms':
                           $newReminder->setMethod('sms');
                           break;
                        case 'email':
                           $newReminder->setMethod('email');
                           break;
                        case 'alert':
                           $newReminder->setMethod('alert');
                           break;
                     }

                     if(isset($reminder['absoluteTime']))
                     {
                        $newReminder->setAbsoluteTime($reminder['absoluteTime']);
                     }
                     else
                     {
                        $newReminder->setMinutes($reminder['minutes']);
                     }

                     $reminders[] = $newReminder;

                  }

                  $when->setReminders($reminders);
               }
               $newEvent->setWhen(array($when));

            }
         }

         if(isset($params['webcontent']))
         {
            $newLink = $this->_calendar->newLink();

            $newWebContent = $this->_calendar->newWebContent();

            $newWebContent->url = $params['webcontent']['url'];
            $newWebContent->height = $params['webcontent']['height'];
            $newWebContent->width = $params['webcontent']['width'];

            $newLink->rel = "http://schemas.google.com/gCal/2005/webContent";
            $newLink->title = $params['title'];
            $newLink->type = $params['webcontent']['type'];
            $newLink->href = $params['webcontent']['href'];

            $newLink->webcontent = $newWebContent;

            $newEvent->link = array($newLink);
         }
         if(isset($params['content']))
         {
            $newEvent->content = $this->_calendar->newContent($params['content']);
         }

         if(isset($params['eventStatus']))
         {
            $newStatus = $this->_calendar->newEventStatus();

            switch($params['eventStatus'])
            {
               case 'canceled':
                  $status = 'http://schemas.google.com/g/2005#event.canceled';
                  break;
               case 'confirmed':
                  $status = 'http://schemas.google.com/g/2005#event.confirmed';
                  break;
               case 'tentative':
                  $status = 'http://schemas.google.com/g/2005#event.tentative';
                  break;
            }

            $newStatus->value = $status;
            $newEvent->setEventStatus($newStatus);
         }

         if(isset($params['transparency']))
         {
            $transparency = $this->_calendar->newTransparency();

            switch($params['transparency'])
            {
               case 'opaque':
                  $trans = 'http://schemas.google.com/g/2005#event.opaque';
                  break;
               case 'transparent':
                  $trans = 'http://schemas.google.com/g/2005#event.transparent';
                  break;
            }

            $transparency->value = $trans;
            $newEvent->setTransparency($transparency);
         }

         if(isset($params['visibility']))
         {
            $visibility = $this->_calendar->newVisibility();

            $selected = 'http://schemas.google.com/g/2005#event.default';

            switch($params['visibility'])
            {
               case 'confidential':
                  $selected = 'http://schemas.google.com/g/2005#event.confidential';
                  break;
               case 'default':
                  $selected = 'http://schemas.google.com/g/2005#event.default';
                  break;
               case 'private':
                  $selected = 'http://schemas.google.com/g/2005#event.private';
                  break;
               case 'public':
                  $selected = 'http://schemas.google.com/g/2005#event.public';
                  break;
            }
            $visibility->value = $selected;
            $newEvent->setVisibility($visibility);
         }

         if(isset($params['calendar']))
         {
            $createdEvent = $this->_calendar->insertEvent($newEvent, $params['calendar']);
         }
         else
         {
            $createdEvent = $this->_calendar->insertEvent($newEvent);
         }
         return $createdEvent->id->text;
      }
      else
      {
         return false;
      }
   }

   /**
    * Modifies an event.
    *
    * Second parameter is a key-value array with the following optional pairs:
    * <ul>
    *   <li><b>calendar</b>: Calendar identifier.</li>
    *   <li><b>title</b>: Event title.</li>
    *   <li><b>where</b>: Event location.</li>
    *   <li><b>startDate</b>: Event start date.</li>
    *   <li><b>startTime</b>: Event start time.</li>
    *   <li><b>endDate</b>: Event end date.</li>
    *   <li><b>endTime</b>: Event end time.</li>
    *   <li><b>tzOffset</b>: Event timezone.</li>
    *   <li><b>eventStatus</b>: Event status. Possible values are: 'canceled', 'confirmed', or 'tentative'.</li>
    *   <li><b>transparency</b>: Event transparency. Possible values are: 'opaque' or 'transparent'.</li>
    *   <li><b>visibility</b>: Event visibility. Possible values are: 'confidential', 'default', 'private', or 'public'.</li>
    *   <li><b>recurrence</b>: Event recurrence. See {@link http://code.google.com/apis/gdata/docs/1.0/elements.html#gdRecurrence Google Documentation}.</li>
    *   <li><b>reminders</b>: Array of event reminders, each of which is also an array with the following key-value pairs:
    *     <ul>
    *       <li><b>method</b>: Reminder method. Possible values are: 'sms', 'alert', or 'email'.</li>
    *       <li><b>absolutTime</b>: Reminder time.</li>
    *       <li><b>minutes</b>: Reminder time in minutes before the start of the event.</li>
    *     </ul>
    *   </li>
    *   <li><b>webcontent</b>: Array with the folowwing key-value pairs:
    *     <ul>
    *       <li><b>url</b>: URL to the content of the pop-up window.</li>
    *       <li><b>height</b>: Pop-up window height.</li>
    *       <li><b>width</b>: Pop-up window width.</li>
    *       <li><b>type</b>: Content type.</li>
    *       <li><b>href</b>: Icon URL.</li>
    *     </ul>
    *   </li>
    * </ul>
    * 
    * If {@link $_calendar} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get modified event identifier.
    *
    * @param    string  $id_event       Event identifier.
    * @param    array   $params         Array of optional parameters.
    * @return   boolean|string
    */
   function modifyEvent($id_event, $params)
   {
      $editEvent = $this->retrieveOneEvent($id_event);

      if($editEvent)
      {
         if(isset($params['title']))
         {
            $editEvent->title = $this->_calendar->newTitle($params['title']);
         }

         if(isset($params['where']))
         {
            $editEvent->where = array($this->_calendar->newWhere($params['where']));
         }
         if(isset($params['recurrence']))
         {
            $newEvent->setRecurrence($this->_calendar->newRecurrence($params['recurrence']));
         }
         else
         {
            if(isset($params['startDate']) && isset($params['endDate']))
            {
               $when = $this->_calendar->newWhen();
               $when->startTime = $params['startDate'];
               if(isset($params['startTime']))
               {
                  $when->startTime .= 'T' . $params['startTime'] . ':00.000';
               }
               if(isset($params['tzOffset']))
               {
                  $when->startTime .= $params['tzOffset'] . ':00';
               }
               $when->endTime = $params['endDate'];
               if(isset($params['endTime']))
               {
                  $when->endTime .= 'T' . $params['endTime'] . ':00.000';
               }
               if(isset($params['tzOffset']))
               {
                  $when->endTime .= $params['tzOffset'] . ':00';
               }
               if(isset($params['reminders']))
               {

                  $reminders = array();
                  foreach($params['reminders'] as $reminder)
                  {
                     $newReminder = $this->_calendar->newReminder();
                     switch($reminder['method'])
                     {
                        case 'sms':
                           $newReminder->setMethod('sms');
                           break;
                        case 'email':
                           $newReminder->setMethod('email');
                           break;
                        case 'alert':
                           $newReminder->setMethod('alert');
                           break;
                     }

                     if(isset($reminder['absoluteTime']))
                     {
                        $newReminder->setAbsoluteTime($reminder['absoluteTime']);
                     }
                     else
                     {
                        $newReminder->setMinutes($reminder['minutes']);
                     }

                     $reminders[] = $newReminder;

                  }

                  $when->setReminders($reminders);
               }
               $editEvent->setWhen(array($when));
            }
         }

         if(isset($params['webcontent']))
         {
            $newLink = $this->_calendar->newLink();

            $newWebContent = $this->_calendar->newWebContent();

            $newWebContent->url = $params['webcontent']['url'];
            $newWebContent->height = $params['webcontent']['height'];
            $newWebContent->width = $params['webcontent']['width'];

            $newLink->rel = "http://schemas.google.com/gCal/2005/webContent";
            $newLink->title = $params['title'];
            $newLink->type = $params['webcontent']['type'];
            $newLink->href = $params['webcontent']['icon'];

            $newLink->webcontent = $newWebContent;

            $editEvent->link = array($newLink);
         }

         if(isset($params['content']))
         {
            $editEvent->content = $this->_calendar->newContent($params['content']);
         }

         if(isset($params['eventStatus']))
         {
            $newStatus = $this->_calendar->newEventStatus();

            switch($params['eventStatus'])
            {
               case 'canceled':
                  $status = 'http://schemas.google.com/g/2005#event.canceled';
                  break;
               case 'confirmed':
                  $status = 'http://schemas.google.com/g/2005#event.confirmed';
                  break;
               case 'tentative':
                  $status = 'http://schemas.google.com/g/2005#event.tentative';
                  break;
            }

            $newStatus->value = $status;
            $editEvent->setEventStatus($newStatus);
         }

         if(isset($params['transparency']))
         {
            $transparency = $this->_calendar->newTransparency();

            switch($params['transparency'])
            {
               case 'opaque':
                  $trans = 'http://schemas.google.com/g/2005#event.opaque';
                  break;
               case 'transparent':
                  $trans = 'http://schemas.google.com/g/2005#event.transparent';
                  break;
            }

            $transparency->value = $trans;
            $editEvent->setTransparency($transparency);
         }

         if(isset($params['visibility']))
         {
            $visibility = $this->_calendar->newVisibility();

            $selected = 'http://schemas.google.com/g/2005#event.default';

            switch($params['visibility'])
            {
               case 'confidential':
                  $selected = 'http://schemas.google.com/g/2005#event.confidential';
                  break;
               case 'default':
                  $selected = 'http://schemas.google.com/g/2005#event.default';
                  break;
               case 'private':
                  $selected = 'http://schemas.google.com/g/2005#event.private';
                  break;
               case 'public':
                  $selected = 'http://schemas.google.com/g/2005#event.public';
                  break;
            }
            $visibility->value = $selected;
            $editEvent->setVisibility($visibility);
         }
         $editEvent->save();
         return $editEvent->id->text;
      }
      else
      {
         return false;
      }
   }

   /**
    * Deletes an event.
    * 
    * If {@link $_calendar} is not set (is null), this method will return a boolean value, false. If
    * it is set, it will return nothing (void).
    *
    * @param    string  $id_event       Event identifier.
    * @return   boolean|void
    */
   function deleteEvent($id_event)
   {
      $event = $this->retrieveOneEvent($id_event);
      if($event)
      {
         $event->delete();
         return true;
      }
      else
      {
         return false;
      }
   }

   /**
    * Creates a new event using QuickAdd feature.
    * 
    * If {@link $_calendar} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get new event identifier.
    *
    * @param    string  $quickaddtext   QuickAdd text.
    * @param    string  $id_calendar    Calendar identifier.
    * @return   boolean|string
    */
   function createQuickAddEvent($quickaddtext, $id_calendar = '')
   {
      if($this->_calendar != null)
      {
         $event = $this->_calendar->newEventEntry();

         $event->content = $this->_calendar->newContent($quickaddtext);
         $event->quickAdd = $this->_calendar->newQuickAdd('true');
         $newEvent = $this->_calendar->insertEvent($event, $id_calendar);
         return $newEvent->id->text;
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves comments associated to an event.
    * 
    * If {@link $_calendar} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_Feed} for event comments.
    *
    * @param    string  $id_event       Event identifier.
    * @return   boolean|Zend_Gdata_Feed
    */
   function retrieveEventComments($id_event)
   {
      if($this->_calendar != null)
      {
         $event = $this->retrieveOneEvent($id_event);
         if($event)
         {
            $commentUrl = $event->comments->feedLink->href;
            $commentFeed = $this->_calendar->getFeed($commentUrl);
            return $commentFeed;
         }
         else
         {
            return false;
         }
      }
      else
      {
         return false;
      }

   }
}

?>