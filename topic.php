<?php require('core/init.php'); ?>

<?php
//Create topic object
$topic = new Topic;


// Get ID form URL
$topic_id = isset($_GET['id']) ? $_GET['id'] : '';

//process reply
if(isset($_POST['do_reply'])){
    //create data array
    $data = array();
    $data['topic_id'] = $_GET['id'];
    $data['body'] = $_POST['body'];
    $data['user_id'] = getUser()['user_id'];

    //create validator object
    $validate = new Validator;

    //required fields
    $field_array = array('body');

    if($validate->isRequired($field_array)){
        //register user
        if($topic->reply($data)){
            redirect('topic.php?id='.$topic_id, 'Your reply has been posted','success');
        } else {
            redirect('topic.php?id='.$topic_id, 'Something went wrong with your reply', 'error');
        }
    } else {
        redirect('topic.php?id='.$topic_id, 'Your reply form is blank!', 'error');
    }
}

// Get template & Assign Vars
$template = new Template('templates/topicDetails.php');

//Assign Vars
$template->topic = $topic->getTopic($topic_id);
$template->replies = $topic->getReplies($topic_id);
$template->title = $topic->getTopic($topic_id)->title;

//Display template
echo $template;
