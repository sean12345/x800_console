<?php
return array(

          /*Admin*/
          array('admin/debuger/:m_from', 'Admin/Debuger/show'),

          /*Ucenter*/
          array('ucenter/doc/:doc_name', 'Admin/Static/doc?from=ucenter', ' ', array('method'=>'GET')),          
          array('ucenter/doc', 'Admin/Static/doc?from=ucenter', ' ', array('method'=>'GET')),

          /*SMS*/
          array('sms/api/note', 'SMS/Index/noteMessage', '', array('method'=>'POST')),
          array('sms/api/verification', 'SMS/Index/verification', '', array('method'=>'POST')),
          array('sms/doc/:doc_name', 'Admin/Static/doc?from=sms', ' ', array('method'=>'GET')),
          array('sms/doc', 'Admin/Static/doc?from=sms', ' ', array('method'=>'GET')),
          // array('sms/doc/:doc_name', 'Admin/Static/doc', ' ', array('method'=>'GET')),
          // array('sms/test/:m', 'SMS/Unittest/index', ' ', array('method'=>'GET')),



);