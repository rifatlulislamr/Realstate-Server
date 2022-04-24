<?php


$router->get('/ChartData', ['middleware'=>'auth','uses'=>'ChartDataController@onAllSelect']);
$router->get('/ClientReview',['middleware'=>'auth','uses'=> 'ClientReviewController@onAllSelect']);
$router->post('/ContactSend', ['middleware'=>'auth','uses'=>'ContactTableController@onContactSend']);

$router->get('/CourseHome', ['middleware'=>'auth','uses'=>'CourseTableController@onSelectFour']);
$router->get('/CourseAll', ['middleware'=>'auth','uses'=>'CourseTableController@onSelectAll']);
$router->post('/CourseDetails', ['middleware'=>'auth','uses'=>'CourseTableController@onSelectDetails']);

$router->get('/Footer', ['middleware'=>'auth','uses'=>'FooterTableController@onSelect']);
$router->get('/Info',['middleware'=>'auth','uses'=> 'InformationController@onSelect']);
$router->get('/Svc', ['middleware'=>'auth','uses'=>'ServiceTableController@onSelect']);

$router->get('/Project3', ['middleware'=>'auth','uses'=>'ProjectTableController@onSelect3']);
$router->get('/ProjectAll', ['middleware'=>'auth','uses'=>'ProjectTableController@onSelectAll']);
$router->post('/ProjectDetails', ['middleware'=>'auth','uses'=>'ProjectTableController@onSelectDetails']);

$router->get ('/VideoHome', ['middleware'=>'auth','uses'=> 'HomeEtcController@onSelectVideo']);
$router->get ('/TotalProjectClient', ['middleware'=>'auth','uses'=>'HomeEtcController@onSelectProjectClient']);
$router->get ('/TechDes', ['middleware'=>'auth','uses'=>'HomeEtcController@onSelectTechDes']);

$router->get ('/HomeTitle', ['middleware'=>'auth','uses'=>'HomeEtcController@onSelectHomeTitle']);
 