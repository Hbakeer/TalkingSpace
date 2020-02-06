<?php require('core/init.php'); ?> 

<?php
//Create topic object
$topic = new Topic;


//Create user object
$user = new User;

// Get template & Assign Vars
$template = new Template('templates/frontpage.php');

//Assign Vars
$template->topics = $topic->getAllTopics();
$template->totalTopics = $topic->getTotalTopics();
$template->totalCategories = $topic->getTotalCategories();
$template->totalUsers = $user->getTotalUsers();

//Display template
echo $template;