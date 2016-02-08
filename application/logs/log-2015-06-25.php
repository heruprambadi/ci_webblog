<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2015-06-25 00:41:54 --> Severity: Error --> Uncaught exception 'Exception' with message 'The table name does not exist. Please check you database and try again.' in C:\xampp\htdocs\matadorprestige\application\libraries\Grocery_CRUD.php:4725
Stack trace:
#0 C:\xampp\htdocs\matadorprestige\application\libraries\Grocery_CRUD.php(4233): Grocery_CRUD->get_table()
#1 C:\xampp\htdocs\matadorprestige\application\libraries\Grocery_CRUD.php(4249): Grocery_CRUD->pre_render()
#2 C:\xampp\htdocs\matadorprestige\application\libraries\Extended_Grocery_CRUD.php(935): Grocery_CRUD->render()
#3 C:\xampp\htdocs\matadorprestige\modules\blog\controllers\manage_article.php(216): Extended_Grocery_CRUD->render()
#4 [internal function]: Manage_Article->video()
#5 C:\xampp\htdocs\matadorprestige\application\core\MY_CodeIgniter.php(389): call_user_func_array(Array, Array)
#6 C:\xampp\htdocs\matadorprestige\index.php(440): require_once('C:\xampp\htdocs...')
#7 {main}
  thrown C:\xampp\htdocs\matadorprestige\application\libraries\Grocery_CRUD.php 4725
ERROR - 2015-06-25 00:42:50 --> Severity: Parsing Error --> syntax error, unexpected ')' C:\xampp\htdocs\matadorprestige\modules\blog\controllers\manage_article.php 194
ERROR - 2015-06-25 00:43:05 --> Severity: Error --> Uncaught exception 'Exception' with message 'The table name does not exist. Please check you database and try again.' in C:\xampp\htdocs\matadorprestige\application\libraries\Grocery_CRUD.php:4725
Stack trace:
#0 C:\xampp\htdocs\matadorprestige\application\libraries\Grocery_CRUD.php(4233): Grocery_CRUD->get_table()
#1 C:\xampp\htdocs\matadorprestige\application\libraries\Grocery_CRUD.php(4249): Grocery_CRUD->pre_render()
#2 C:\xampp\htdocs\matadorprestige\application\libraries\Extended_Grocery_CRUD.php(935): Grocery_CRUD->render()
#3 C:\xampp\htdocs\matadorprestige\modules\blog\controllers\manage_article.php(216): Extended_Grocery_CRUD->render()
#4 [internal function]: Manage_Article->video()
#5 C:\xampp\htdocs\matadorprestige\application\core\MY_CodeIgniter.php(389): call_user_func_array(Array, Array)
#6 C:\xampp\htdocs\matadorprestige\index.php(440): require_once('C:\xampp\htdocs...')
#7 {main}
  thrown C:\xampp\htdocs\matadorprestige\application\libraries\Grocery_CRUD.php 4725
ERROR - 2015-06-25 00:45:51 --> Severity: Error --> Uncaught exception 'Exception' with message 'It seems that the folder "C:\xampp\htdocs\matadorprestige\blogassets/uploads/video" for the field name
					"file_url" doesn't exists. Please create the folder and try again.' in C:\xampp\htdocs\matadorprestige\application\libraries\Grocery_CRUD.php:4939
Stack trace:
#0 C:\xampp\htdocs\matadorprestige\modules\blog\controllers\manage_article.php(212): Grocery_CRUD->set_field_upload('file_url', 'blogassets/uplo...')
#1 [internal function]: Manage_Article->video('add')
#2 C:\xampp\htdocs\matadorprestige\application\core\MY_CodeIgniter.php(389): call_user_func_array(Array, Array)
#3 C:\xampp\htdocs\matadorprestige\index.php(440): require_once('C:\xampp\htdocs...')
#4 {main}
  thrown C:\xampp\htdocs\matadorprestige\application\libraries\Grocery_CRUD.php 4939
ERROR - 2015-06-25 00:46:04 --> Severity: Error --> Uncaught exception 'Exception' with message 'It seems that the folder "C:\xampp\htdocs\matadorprestige\blog/assets/uploads/video" for the field name
					"file_url" doesn't exists. Please create the folder and try again.' in C:\xampp\htdocs\matadorprestige\application\libraries\Grocery_CRUD.php:4939
Stack trace:
#0 C:\xampp\htdocs\matadorprestige\modules\blog\controllers\manage_article.php(212): Grocery_CRUD->set_field_upload('file_url', 'blog/assets/upl...')
#1 [internal function]: Manage_Article->video('add')
#2 C:\xampp\htdocs\matadorprestige\application\core\MY_CodeIgniter.php(389): call_user_func_array(Array, Array)
#3 C:\xampp\htdocs\matadorprestige\index.php(440): require_once('C:\xampp\htdocs...')
#4 {main}
  thrown C:\xampp\htdocs\matadorprestige\application\libraries\Grocery_CRUD.php 4939
ERROR - 2015-06-25 00:46:22 --> Severity: Error --> Uncaught exception 'Exception' with message 'It seems that the folder "C:\xampp\htdocs\matadorprestige\blog\assets\uploads\video" for the field name
					"file_url" doesn't exists. Please create the folder and try again.' in C:\xampp\htdocs\matadorprestige\application\libraries\Grocery_CRUD.php:4939
Stack trace:
#0 C:\xampp\htdocs\matadorprestige\modules\blog\controllers\manage_article.php(212): Grocery_CRUD->set_field_upload('file_url', 'blog\assets\upl...')
#1 [internal function]: Manage_Article->video('add')
#2 C:\xampp\htdocs\matadorprestige\application\core\MY_CodeIgniter.php(389): call_user_func_array(Array, Array)
#3 C:\xampp\htdocs\matadorprestige\index.php(440): require_once('C:\xampp\htdocs...')
#4 {main}
  thrown C:\xampp\htdocs\matadorprestige\application\libraries\Grocery_CRUD.php 4939
ERROR - 2015-06-25 00:50:03 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\controllers\manage_article.php 482
ERROR - 2015-06-25 00:53:38 --> Severity: Parsing Error --> syntax error, unexpected '.' C:\xampp\htdocs\matadorprestige\modules\blog\controllers\manage_article.php 482
ERROR - 2015-06-25 00:54:12 --> Severity: Parsing Error --> syntax error, unexpected 'return' (T_RETURN) C:\xampp\htdocs\matadorprestige\modules\blog\controllers\manage_article.php 483
ERROR - 2015-06-25 00:55:08 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\controllers\manage_article.php 482
ERROR - 2015-06-25 00:57:19 --> Severity: Notice --> Undefined variable: primary_key C:\xampp\htdocs\matadorprestige\modules\blog\controllers\manage_article.php 482
ERROR - 2015-06-25 01:16:01 --> 404 Page Not Found: 
ERROR - 2015-06-25 01:16:04 --> 404 Page Not Found: 
ERROR - 2015-06-25 01:16:11 --> 404 Page Not Found: 
ERROR - 2015-06-25 01:16:41 --> 404 Page Not Found: 
ERROR - 2015-06-25 01:16:43 --> 404 Page Not Found: 
ERROR - 2015-06-25 01:16:43 --> 404 Page Not Found: 
ERROR - 2015-06-25 01:19:15 --> 404 Page Not Found: 
ERROR - 2015-06-25 01:19:20 --> 404 Page Not Found: 
ERROR - 2015-06-25 01:19:23 --> 404 Page Not Found: 
ERROR - 2015-06-25 01:48:52 --> 404 Page Not Found: 
ERROR - 2015-06-25 01:48:53 --> 404 Page Not Found: 
ERROR - 2015-06-25 01:48:53 --> 404 Page Not Found: 
ERROR - 2015-06-25 01:49:31 --> 404 Page Not Found: 
ERROR - 2015-06-25 04:40:46 --> 404 Page Not Found: 
ERROR - 2015-06-25 04:40:56 --> 404 Page Not Found: 
ERROR - 2015-06-25 04:40:57 --> 404 Page Not Found: 
ERROR - 2015-06-25 04:42:09 --> 404 Page Not Found: 
ERROR - 2015-06-25 04:42:09 --> 404 Page Not Found: manage_article/intro.png
ERROR - 2015-06-25 04:42:09 --> 404 Page Not Found: 
ERROR - 2015-06-25 04:42:09 --> 404 Page Not Found: 
ERROR - 2015-06-25 04:42:15 --> 404 Page Not Found: manage_article/intro.png
ERROR - 2015-06-25 04:42:40 --> 404 Page Not Found: 
ERROR - 2015-06-25 04:42:40 --> 404 Page Not Found: 
ERROR - 2015-06-25 04:42:40 --> 404 Page Not Found: 
ERROR - 2015-06-25 04:42:40 --> 404 Page Not Found: 
ERROR - 2015-06-25 04:42:41 --> 404 Page Not Found: 
ERROR - 2015-06-25 04:42:53 --> 404 Page Not Found: 
ERROR - 2015-06-25 04:42:53 --> 404 Page Not Found: 
ERROR - 2015-06-25 04:42:53 --> 404 Page Not Found: 
ERROR - 2015-06-25 04:43:00 --> 404 Page Not Found: manage_article/intro.png
ERROR - 2015-06-25 04:47:58 --> Severity: Warning --> Missing argument 1 for Manage_Article::show_video() C:\xampp\htdocs\matadorprestige\modules\blog\controllers\manage_article.php 492
ERROR - 2015-06-25 04:47:58 --> Severity: Notice --> Undefined variable: id C:\xampp\htdocs\matadorprestige\modules\blog\controllers\manage_article.php 493
ERROR - 2015-06-25 04:47:58 --> Severity: Notice --> Undefined variable: sql C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 5
ERROR - 2015-06-25 04:47:58 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 5
ERROR - 2015-06-25 04:48:19 --> 404 Page Not Found: 
ERROR - 2015-06-25 04:48:28 --> Query error: Table 'db_matadorprestige.cms_video' doesn't exist - Invalid query: SELECT *
FROM `cms_video`
WHERE `id` = '1'
ERROR - 2015-06-25 04:49:03 --> Severity: Notice --> Undefined variable: sql C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 5
ERROR - 2015-06-25 04:49:03 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 5
ERROR - 2015-06-25 04:49:17 --> 404 Page Not Found: 
ERROR - 2015-06-25 04:49:52 --> Severity: Notice --> Undefined variable: sql C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 5
ERROR - 2015-06-25 04:49:52 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 5
ERROR - 2015-06-25 04:50:52 --> Severity: Warning --> Missing argument 1 for Manage_Article::show_video() C:\xampp\htdocs\matadorprestige\modules\blog\controllers\manage_article.php 492
ERROR - 2015-06-25 04:50:52 --> Severity: Notice --> Undefined variable: id C:\xampp\htdocs\matadorprestige\modules\blog\controllers\manage_article.php 493
ERROR - 2015-06-25 04:50:52 --> Severity: Notice --> Undefined variable: sql C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 5
ERROR - 2015-06-25 04:50:52 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 5
ERROR - 2015-06-25 04:51:11 --> Severity: Notice --> Undefined variable: sql C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 5
ERROR - 2015-06-25 04:51:11 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 5
ERROR - 2015-06-25 04:52:54 --> Severity: Error --> Maximum execution time of 30 seconds exceeded C:\xampp\htdocs\matadorprestige\application\core\MY_Model.php 1
ERROR - 2015-06-25 04:54:27 --> Severity: Notice --> Undefined variable: sql C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 5
ERROR - 2015-06-25 04:54:27 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 5
ERROR - 2015-06-25 04:54:39 --> 404 Page Not Found: 
ERROR - 2015-06-25 04:54:39 --> 404 Page Not Found: 
ERROR - 2015-06-25 04:54:39 --> 404 Page Not Found: 
ERROR - 2015-06-25 04:54:40 --> Severity: Notice --> Undefined variable: sql C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 5
ERROR - 2015-06-25 04:54:40 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 5
ERROR - 2015-06-25 04:54:48 --> 404 Page Not Found: 
ERROR - 2015-06-25 04:54:50 --> 404 Page Not Found: 
ERROR - 2015-06-25 04:54:50 --> 404 Page Not Found: 
ERROR - 2015-06-25 04:55:47 --> 404 Page Not Found: 
ERROR - 2015-06-25 04:56:21 --> 404 Page Not Found: 
ERROR - 2015-06-25 04:57:03 --> 404 Page Not Found: 
ERROR - 2015-06-25 04:58:33 --> Severity: Notice --> Undefined variable: sql C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 04:58:33 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 04:59:45 --> Severity: Notice --> Undefined variable: sql C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 04:59:45 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 05:01:02 --> Severity: Notice --> Undefined variable: sql C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 05:01:02 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 05:01:02 --> Severity: Notice --> Undefined variable: config C:\xampp\htdocs\matadorprestige\modules\blog\controllers\manage_article.php 496
ERROR - 2015-06-25 05:01:03 --> Severity: Notice --> Undefined variable: sql C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 05:01:03 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 05:01:56 --> Severity: Notice --> Undefined variable: sql C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 05:01:56 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 05:01:56 --> Severity: Notice --> Undefined variable: sql C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 05:01:56 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 05:03:57 --> Severity: Notice --> Undefined variable: sql C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 05:03:57 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 05:03:58 --> Severity: Notice --> Undefined variable: sql C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 05:03:58 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 05:04:12 --> Severity: Notice --> Undefined variable: sql C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 05:04:12 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 05:04:13 --> Severity: Notice --> Undefined variable: sql C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 05:04:13 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 05:04:56 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:04:56 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:04:57 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:04:57 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:04:57 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:05:04 --> Severity: Notice --> Undefined variable: sql C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 05:05:04 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 05:05:04 --> Severity: Notice --> Undefined variable: sql C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 05:05:04 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 05:05:06 --> Severity: Notice --> Undefined variable: sql C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 05:05:06 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 05:05:06 --> Severity: Notice --> Undefined variable: sql C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 05:05:06 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 05:05:09 --> Severity: Notice --> Undefined variable: sql C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 05:05:09 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 05:05:09 --> Severity: Notice --> Undefined variable: sql C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 05:05:09 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 05:05:57 --> Severity: Notice --> Undefined variable: sql C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 05:05:57 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 05:05:59 --> Severity: Notice --> Undefined variable: sql C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 05:05:59 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 05:06:30 --> Severity: Notice --> Undefined variable: sql C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 05:06:30 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 05:06:51 --> Severity: Notice --> Undefined variable: sql C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 1
ERROR - 2015-06-25 05:06:51 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 1
ERROR - 2015-06-25 05:06:52 --> Severity: Notice --> Undefined variable: sql C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 1
ERROR - 2015-06-25 05:06:52 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 1
ERROR - 2015-06-25 05:07:44 --> Severity: 4096 --> Object of class stdClass could not be converted to string C:\xampp\htdocs\matadorprestige\system\libraries\Parser.php 135
ERROR - 2015-06-25 05:08:04 --> Severity: 4096 --> Object of class stdClass could not be converted to string C:\xampp\htdocs\matadorprestige\system\libraries\Parser.php 135
ERROR - 2015-06-25 05:08:15 --> Severity: Notice --> Undefined variable: sql C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 1
ERROR - 2015-06-25 05:08:15 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 1
ERROR - 2015-06-25 05:08:48 --> Severity: 4096 --> Object of class stdClass could not be converted to string C:\xampp\htdocs\matadorprestige\system\libraries\Parser.php 135
ERROR - 2015-06-25 05:10:05 --> Severity: Warning --> Missing argument 1 for Manage_Article::show_video() C:\xampp\htdocs\matadorprestige\modules\blog\controllers\manage_article.php 492
ERROR - 2015-06-25 05:10:05 --> Severity: Notice --> Undefined variable: id C:\xampp\htdocs\matadorprestige\modules\blog\controllers\manage_article.php 493
ERROR - 2015-06-25 05:10:06 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 1
ERROR - 2015-06-25 05:10:15 --> Severity: Notice --> Undefined variable: id C:\xampp\htdocs\matadorprestige\modules\blog\controllers\manage_article.php 493
ERROR - 2015-06-25 05:10:15 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 1
ERROR - 2015-06-25 05:10:25 --> Severity: 4096 --> Object of class stdClass could not be converted to string C:\xampp\htdocs\matadorprestige\system\libraries\Parser.php 135
ERROR - 2015-06-25 05:11:26 --> Severity: Warning --> Missing argument 1 for Manage_Article::show_video() C:\xampp\htdocs\matadorprestige\modules\blog\controllers\manage_article.php 492
ERROR - 2015-06-25 05:11:26 --> Severity: Notice --> Undefined variable: id C:\xampp\htdocs\matadorprestige\modules\blog\controllers\manage_article.php 493
ERROR - 2015-06-25 05:11:26 --> Severity: Notice --> Undefined variable: output C:\xampp\htdocs\matadorprestige\modules\blog\controllers\manage_article.php 496
ERROR - 2015-06-25 05:11:26 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\controllers\manage_article.php 496
ERROR - 2015-06-25 05:11:26 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\matadorprestige\modules\blog\controllers\manage_article.php 496
ERROR - 2015-06-25 05:11:26 --> Severity: Notice --> Undefined variable: output C:\xampp\htdocs\matadorprestige\modules\blog\controllers\manage_article.php 501
ERROR - 2015-06-25 05:11:26 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\controllers\manage_article.php 501
ERROR - 2015-06-25 05:11:26 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\matadorprestige\modules\blog\controllers\manage_article.php 501
ERROR - 2015-06-25 05:11:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\matadorprestige\system\core\Exceptions.php:211) C:\xampp\htdocs\matadorprestige\system\libraries\Session\drivers\Session_cookie.php 734
ERROR - 2015-06-25 05:11:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\matadorprestige\system\core\Exceptions.php:211) C:\xampp\htdocs\matadorprestige\system\libraries\Session\drivers\Session_cookie.php 734
ERROR - 2015-06-25 05:11:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\matadorprestige\system\core\Exceptions.php:211) C:\xampp\htdocs\matadorprestige\system\libraries\Session\drivers\Session_cookie.php 734
ERROR - 2015-06-25 05:11:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\matadorprestige\system\core\Exceptions.php:211) C:\xampp\htdocs\matadorprestige\system\libraries\Session\drivers\Session_cookie.php 734
ERROR - 2015-06-25 05:11:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\matadorprestige\system\core\Exceptions.php:211) C:\xampp\htdocs\matadorprestige\system\libraries\Session\drivers\Session_cookie.php 734
ERROR - 2015-06-25 05:11:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\matadorprestige\system\core\Exceptions.php:211) C:\xampp\htdocs\matadorprestige\system\libraries\Session\drivers\Session_cookie.php 734
ERROR - 2015-06-25 05:11:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\matadorprestige\system\core\Exceptions.php:211) C:\xampp\htdocs\matadorprestige\system\libraries\Session\drivers\Session_cookie.php 734
ERROR - 2015-06-25 05:11:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\matadorprestige\system\core\Exceptions.php:211) C:\xampp\htdocs\matadorprestige\system\libraries\Session\drivers\Session_cookie.php 734
ERROR - 2015-06-25 05:11:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\matadorprestige\system\core\Exceptions.php:211) C:\xampp\htdocs\matadorprestige\system\libraries\Session\drivers\Session_cookie.php 734
ERROR - 2015-06-25 05:11:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\matadorprestige\system\core\Exceptions.php:211) C:\xampp\htdocs\matadorprestige\system\libraries\Session\drivers\Session_cookie.php 734
ERROR - 2015-06-25 05:11:27 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 1
ERROR - 2015-06-25 05:11:31 --> Severity: Notice --> Undefined variable: output C:\xampp\htdocs\matadorprestige\modules\blog\controllers\manage_article.php 496
ERROR - 2015-06-25 05:11:31 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\controllers\manage_article.php 496
ERROR - 2015-06-25 05:11:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\matadorprestige\modules\blog\controllers\manage_article.php 496
ERROR - 2015-06-25 05:11:31 --> Severity: Notice --> Undefined variable: output C:\xampp\htdocs\matadorprestige\modules\blog\controllers\manage_article.php 501
ERROR - 2015-06-25 05:11:31 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\controllers\manage_article.php 501
ERROR - 2015-06-25 05:11:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\matadorprestige\modules\blog\controllers\manage_article.php 501
ERROR - 2015-06-25 05:11:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\matadorprestige\system\core\Exceptions.php:211) C:\xampp\htdocs\matadorprestige\system\libraries\Session\drivers\Session_cookie.php 734
ERROR - 2015-06-25 05:11:31 --> Severity: 4096 --> Object of class stdClass could not be converted to string C:\xampp\htdocs\matadorprestige\system\libraries\Parser.php 135
ERROR - 2015-06-25 05:11:48 --> Severity: 4096 --> Object of class stdClass could not be converted to string C:\xampp\htdocs\matadorprestige\system\libraries\Parser.php 135
ERROR - 2015-06-25 05:12:13 --> Severity: 4096 --> Object of class stdClass could not be converted to string C:\xampp\htdocs\matadorprestige\system\libraries\Parser.php 135
ERROR - 2015-06-25 05:13:24 --> Severity: 4096 --> Object of class stdClass could not be converted to string C:\xampp\htdocs\matadorprestige\system\libraries\Parser.php 135
ERROR - 2015-06-25 05:14:36 --> Severity: 4096 --> Object of class stdClass could not be converted to string C:\xampp\htdocs\matadorprestige\system\libraries\Parser.php 135
ERROR - 2015-06-25 05:17:07 --> Severity: 4096 --> Object of class stdClass could not be converted to string C:\xampp\htdocs\matadorprestige\system\libraries\Parser.php 135
ERROR - 2015-06-25 05:17:55 --> Severity: 4096 --> Object of class stdClass could not be converted to string C:\xampp\htdocs\matadorprestige\system\libraries\Parser.php 135
ERROR - 2015-06-25 05:20:38 --> Severity: Parsing Error --> syntax error, unexpected '}', expecting ',' or ';' C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 6
ERROR - 2015-06-25 05:23:00 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:23:56 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:23:57 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:23:57 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:23:57 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:24:33 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 05:24:34 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:24:34 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:24:35 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 05:24:40 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 05:24:41 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\matadorprestige\modules\blog\views\show_video.php 4
ERROR - 2015-06-25 05:27:32 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:27:32 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:27:33 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:27:53 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:27:54 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:28:34 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:28:34 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:29:05 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:29:06 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:30:13 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:30:18 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:30:26 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:30:26 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:30:37 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:30:37 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:30:40 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:30:41 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:31:28 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:33:35 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:33:36 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:35:04 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:35:06 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:35:23 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:35:23 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:38:31 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:38:32 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:40:01 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:40:02 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:41:40 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:41:40 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:41:51 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:41:51 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:43:02 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:43:02 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:43:35 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:43:59 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:43:59 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:44:01 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:44:01 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:44:13 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:44:13 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:44:15 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:44:15 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:45:01 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:45:02 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:45:04 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:45:04 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:45:24 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:45:39 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:45:39 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:45:43 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:45:43 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:45:54 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:45:55 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:45:55 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:45:56 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:46:14 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:46:15 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:46:16 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:46:16 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:47:10 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:47:34 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:47:34 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:47:41 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:47:41 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:48:32 --> 404 Page Not Found: 
ERROR - 2015-06-25 05:48:32 --> 404 Page Not Found: 
ERROR - 2015-06-25 11:54:32 --> 404 Page Not Found: 
ERROR - 2015-06-25 11:54:33 --> 404 Page Not Found: 
ERROR - 2015-06-25 11:54:33 --> 404 Page Not Found: 
ERROR - 2015-06-25 11:54:33 --> 404 Page Not Found: 
ERROR - 2015-06-25 11:54:33 --> 404 Page Not Found: 
ERROR - 2015-06-25 11:54:33 --> 404 Page Not Found: 
ERROR - 2015-06-25 11:54:33 --> 404 Page Not Found: 
ERROR - 2015-06-25 11:54:33 --> 404 Page Not Found: 
ERROR - 2015-06-25 11:54:33 --> 404 Page Not Found: 
ERROR - 2015-06-25 11:54:33 --> 404 Page Not Found: 
ERROR - 2015-06-25 11:55:53 --> 404 Page Not Found: 
ERROR - 2015-06-25 11:55:53 --> 404 Page Not Found: 
ERROR - 2015-06-25 11:56:04 --> 404 Page Not Found: 
ERROR - 2015-06-25 11:56:04 --> 404 Page Not Found: 
ERROR - 2015-06-25 11:57:02 --> 404 Page Not Found: 
ERROR - 2015-06-25 11:57:02 --> 404 Page Not Found: 
ERROR - 2015-06-25 11:57:34 --> Severity: Parsing Error --> syntax error, unexpected ',' C:\xampp\htdocs\matadorprestige\modules\blog\controllers\manage_article.php 497
ERROR - 2015-06-25 11:58:20 --> 404 Page Not Found: 
ERROR - 2015-06-25 11:58:20 --> 404 Page Not Found: 
ERROR - 2015-06-25 11:59:57 --> 404 Page Not Found: 
ERROR - 2015-06-25 11:59:57 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:00:20 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:00:21 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:00:26 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:00:27 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:01:20 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:01:20 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:03:47 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:03:48 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:04:40 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:04:41 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:09:45 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:09:45 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:22:59 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:22:59 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:24:31 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:24:32 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:26:55 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:26:55 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:28:15 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:28:15 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:28:37 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:28:37 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:29:13 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:29:13 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:29:52 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:29:52 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:40:24 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:40:25 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:40:56 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:40:56 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:40:56 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:40:56 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:41:03 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:42:24 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:42:24 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:42:24 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:42:24 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:42:24 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:44:04 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:44:04 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:44:04 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:44:04 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:44:04 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:44:40 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:44:40 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:44:41 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:44:41 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:44:42 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:44:49 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:44:49 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:44:49 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:44:50 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:44:50 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:45:12 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:45:12 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:45:12 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:45:16 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:45:17 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:45:22 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:45:22 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:45:22 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:45:22 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:45:23 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:48:01 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:48:02 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:48:43 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:48:43 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:48:58 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:48:58 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:48:58 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:48:59 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:48:59 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:49:20 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:49:20 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:49:22 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:49:22 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:49:23 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:49:23 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:49:37 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:49:37 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:49:38 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:49:39 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:49:40 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:49:45 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:49:45 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:50:05 --> 404 Page Not Found: 
ERROR - 2015-06-25 12:50:05 --> 404 Page Not Found: 
