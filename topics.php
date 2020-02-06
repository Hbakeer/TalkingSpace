<?php require('core/init.php'); ?>

<?php
//Create topic object
$topic = new Topic;

//Get category From URL
$category = isset($_GET['category']) ? $_GET['category'] : null;

//Get user From URL
$user_id = isset($_GET['user']) ? $_GET['user'] : null;

// Get template & Assign Vars
$template = new Template('templates/topics.php');

//Assign Template Variables
if(isset($category)){
    $template->topics = $topic->getByCategory($category);
    $template->title = 'Post In "'.$topic->getCategory($category)->name.'"';
}

//Chech for user Filter
if (isset($user_id)) {
    $template->topics = $topic->getByUser($user_id);
    //$template->title = 'Post By "' . $user->getUser($user_id)->namename. '"';
}

if(!isset($category) && !isset($user_id)){
    $template->topics = $topic->getAllTopics();
}

$template->totalTopics = $topic->getTotalTopics();
$template->totalCategories = $topic->getTotalCategories();

//Display template
echo $template;
?>
